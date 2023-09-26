<?php

namespace Tests\Unit\Admin\Services;

use App\Http\Requests\Admin\AuthRequest;
use App\Http\Services\Member\AuthService;
use App\Models\Member\AuthModel;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AuthServiceTest extends TestCase {

    /**
     * 테스트 DB 롤백을 위한 Trait
     */
    use DatabaseTransactions;

    /**
     * AuthService 인스턴스
     *
     * @var AuthService
     */
    protected mixed $authService;

    /**
     * 테스트용 아이디
     *
     * @var string
     */
    private string $testId = 'testID';

    /**
     * 테스트용 비밀번호
     *
     * @var string
     */
    private string $testPassword = 'testPassword';

    /**
     * 테스트 시작 전 호출되는 메소드
     *
     * @return void
     */
    protected function setUp(): void {
        parent::setUp();

        $this->authService = app(AuthService::class);
    }

    /**
     * 관리자 로그인 테스트
     *
     * @return void
     */
    public function testLogin(): void {

        // AuthRequest Input 값 Mocking
        $mockRequest = \Mockery::mock(AuthRequest::class);
        $mockRequest->shouldReceive('input')->with('id')->andReturn($this->testId);
        $mockRequest->shouldReceive('input')->with('password')->andReturn($this->testPassword);

        // Mocking 데이터로 admins guard 에서 테스트용 사용자 반환
        $mockUser = new AuthModel([
            'ID' => $this->testId,
            'PASSWORD' => Hash::make($this->testPassword),
        ]);

        Auth::shouldReceive('guard')->with('admins')->andReturnSelf();
        Auth::shouldReceive('attempt')->with(["ID" => $this->testId, "password" => $this->testPassword])->andReturn(true);
        Auth::shouldReceive('user')->andReturn($mockUser);

        // AuthService 의 login 메소드 실행
        $response = $this->authService->login($mockRequest);

        // 반환된 response 를 json 으로 decode
        $responseData = json_decode($response, true);

        // 반환된 response 의 data 에 admin 이 존재하는지 확인
        $this->assertArrayHasKey('admin', $responseData['data']);

        // 반환된 response 의 data 의 admin ID 가 테스트용 ID 와 일치하는지 확인
        $this->assertEquals($this->testId, $responseData['data']['admin']['ID']);
    }

    /**
     * 관리자 회원가입 테스트
     *
     * @return void
     */
    public function testRegister(): void {

        // AuthRequest Input 값 Mocking
        $mockRequest = \Mockery::mock(AuthRequest::class);
        $mockRequest->shouldReceive('input')->with('id')->andReturn($this->testId);
        $mockRequest->shouldReceive('input')->with('password')->andReturn($this->testPassword);

        // AuthService 의 register 메소드 실행
        $response = $this->authService->register($mockRequest);

        // 반환된 response 를 json 으로 decode
        $responseData = json_decode($response, true);

        // 반환된 response 의 data 의 admin ID 가 테스트용 ID 와 일치하는지 확인
        $this->assertEquals($responseData['data']['admin']['ID'], $this->testId);

        // DB 에서 테스트용 사용자 조회
        $user = AuthModel::where('ID', $this->testId)->first();

        // 조회된 사용자가 존재하는지 확인
        $this->assertNotNull($user);

        // 조회된 사용자의 ID 와 비밀번호가 테스트용 ID, 비밀번호와 일치하는지 확인
        $this->assertEquals($user->ID, $this->testId);

        // 조회된 사용자의 비밀번호가 테스트용 비밀번호와 일치하는지 확인
        $this->assertTrue(Hash::check($this->testPassword, $user->PASSWORD));
    }

    /**
     * 테스트 종료 후 호출되는 메소드
     *
     * @return void
     */
    protected function tearDown(): void {
        \Mockery::close();

        parent::tearDown();
    }
}
