<?php

use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// URL: /
Route::get('/', HomeController::class.'@index'); // 홈
Route::get('/intro', HomeController::class.'@intro'); // 인트로 
Route::get('/my', HomeController::class.'@mypage'); // 마이페이지
Route::get('/terms', HomeController::class.'@terms'); // 이용약관
Route::get('/dataDelete', HomeController::class.'@dataDelete'); // 데이터 삭제
Route::get('/dataDeleteDone', HomeController::class.'@dataDeleteDone'); // 데이터 삭제 완료
Route::get('/aniRagis', HomeController::class.'@aniRagis'); // 반려동물 등록
Route::get('/aniRagisDone', HomeController::class.'@aniRagisDone'); // 반려동물 등록 완료
Route::get('/join', HomeController::class.'@join'); // 회원 등록
Route::get('/joinDone', HomeController::class.'@joinDone'); // 회원 등록 완료
Route::get('/question_01', HomeController::class.'@question_01'); // 문진표01
Route::get('/question_02', HomeController::class.'@question_02'); // 문진표02
Route::get('/question_03', HomeController::class.'@question_03'); // 문진표03
Route::get('/questionDone', HomeController::class.'@questionDone'); // 문진표 제출 완료
Route::get('/getApply_01', HomeController::class.'@getApply_01'); // 수거 신청01
Route::get('/getApply_02', HomeController::class.'@getApply_02'); // 수거 신청02
Route::get('/getDone', HomeController::class.'@getDone'); // 수거 완료
Route::get('/pwreset_01', HomeController::class.'@pwreset_01'); // 비밀번호 재설정 핸드폰 번호 확인
Route::get('/pwreset_02', HomeController::class.'@pwreset_02'); // 비밀번호 재설정
Route::get('/pwresetDone', HomeController::class.'@pwresetDone'); // 비밀번호 재설정 완료
Route::get('/pwmodify', HomeController::class.'@pwmodify'); // 비밀번호 변경
Route::get('/pwmodifyDone', HomeController::class.'@pwmodifyDone'); // 비밀번호 변경 완료
Route::get('/idmodify', HomeController::class.'@idmodify'); // 휴대폰번호 변경 
Route::get('/idmodifyDone', HomeController::class.'@idmodifyDone'); // 휴대폰번호 변경 완료
Route::get('/animodify_list', HomeController::class.'@animodify_list'); // 반려동물 수정 리스트 
Route::get('/animodify', HomeController::class.'@animodify'); // 반려동물 수정 
Route::get('/animodifyDone', HomeController::class.'@animodifyDone'); // 반려동물 수정  완료
Route::get('/getResult', HomeController::class.'@getResult'); // 결과 확인
Route::get('/kitApply', HomeController::class.'@kitApply'); // 키트 등록
Route::get('/kitApplyDone', HomeController::class.'@kitApplyDone'); // 키트 등록 완료
Route::get('/login', HomeController::class.'@login'); // 로그인
