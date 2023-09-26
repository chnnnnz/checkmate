<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller {

    public function __construct() {
    }

    /**
     * 메인 페이지 (키트 리스트)
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View {
        return view('home');
    }

    /**
     * 인트로 페이지
     *
     * @param Request $request
     * @return View
     */
    public function intro(Request $request): View {
        return view('intro');
    }

    /**
     * 마이 페이지
     *
     * @param Request $request
     * @return View
     */
    public function mypage(Request $request): View {
        return view('mypage');
    }

    /**
     * 이용 약관
     *
     * @param Request $request
     * @return View
     */
    public function terms(Request $request): View {
        return view('terms');
    }

    /**
     * 데이터 삭제
     *
     * @param Request $request
     * @return View
     */
    public function dataDelete(Request $request): View {
        return view('dataDelete');
    }

    /**
     * 데이터 삭제 완료
     *
     * @param Request $request
     * @return View
     */
    public function dataDeleteDone(Request $request): View {
        return view('dataDeleteDone');
    }

    /**
     * 반려동물 등록
     *
     * @param Request $request
     * @return View
     */
    public function aniRagis(Request $request): View {
        return view('aniRagis');
    }

    /**
     * 반려동물 등록 완료
     *
     * @param Request $request
     * @return View
     */
    public function aniRagisDone(Request $request): View {
        return view('aniRagisDone');
    }

    /**
     * 회원 등록
     *
     * @param Request $request
     * @return View
     */
    public function join(Request $request): View {
        return view('join');
    }

    /**
     * 회원 등록 완료
     *
     * @param Request $request
     * @return View
     */
    public function joinDone(Request $request): View {
        return view('joinDone');
    }
    
    /**
     * 문진표 1
     *
     * @param Request $request
     * @return View
     */
    public function question_01(Request $request): View {
        return view('question_01');
    }
    
    /**
     * 문진표 2
     *
     * @param Request $request
     * @return View
     */
    public function question_02(Request $request): View {
        return view('question_02');
    }
    
    /**
     * 문진표 3
     *
     * @param Request $request
     * @return View
     */
    public function question_03(Request $request): View {
        return view('question_03');
    }

    /**
     * 문진표 제출 완료
     *
     * @param Request $request
     * @return View
     */
    public function questionDone(Request $request): View {
        return view('questionDone');
    }

    /**
     * 수거 신청 1
     *
     * @param Request $request
     * @return View
     */
    public function getApply_01(Request $request): View {
        return view('getApply_01');
    }
    
    /**
     * 수거 신청 2
     *
     * @param Request $request
     * @return View
     */
    public function getApply_02(Request $request): View {
        return view('getApply_02');
    }
    
    /**
     * 수거 신청 완료
     *
     * @param Request $request
     * @return View
     */
    public function getDone(Request $request): View {
        return view('getDone');
    }
    
    /**
     * 비밀번호 재설정 핸드폰번호 확인
     *
     * @param Request $request
     * @return View
     */
    public function pwreset_01(Request $request): View {
        return view('pwreset_01');
    }

    /**
     * 비밀번호 재설정
     *
     * @param Request $request
     * @return View
     */
    public function pwreset_02(Request $request): View {
        return view('pwreset_02');
    }

    /**
     * 비밀번호 재설정 완료
     *
     * @param Request $request
     * @return View
     */
    public function pwresetDone(Request $request): View {
        return view('pwresetDone');
    }

    /**
     * 비밀번호 변경
     *
     * @param Request $request
     * @return View
     */
    public function pwmodify(Request $request): View {
        return view('pwmodify');
    }
    
    /**
     * 비밀번호 변경 완료
     *
     * @param Request $request
     * @return View
     */
    public function pwmodifyDone(Request $request): View {
        return view('pwmodifyDone');
    }

    /**
     * 휴대폰번호 변경
     *
     * @param Request $request
     * @return View
     */
    public function idmodify(Request $request): View {
        return view('idmodify');
    }

    /**
     * 휴대폰번호 변경 완료
     *
     * @param Request $request
     * @return View
     */
    public function idmodifyDone(Request $request): View {
        return view('idmodifyDone');
    }

    /**
     * 반려동물 수정 리스트
     *
     * @param Request $request
     * @return View
     */
    public function animodify_list(Request $request): View {
        return view('animodify_list');
    }

    /**
     * 반려동물 수정
     *
     * @param Request $request
     * @return View
     */
    public function animodify(Request $request): View {
        return view('animodify');
    }

    /**
     * 반려동물 수정 완료
     *
     * @param Request $request
     * @return View
     */
    public function animodifyDone(Request $request): View {
        return view('animodifyDone');
    }
    
    /**
     * 결과 확인
     *
     * @param Request $request
     * @return View
     */
    public function getResult(Request $request): View {
        return view('getResult');
    }
    
    /**
     * 키트 등록
     *
     * @param Request $request
     * @return View
     */
    public function kitApply(Request $request): View {
        return view('kitApply');
    }
    
    /**
     * 키트 등록 완료
     *
     * @param Request $request
     * @return View
     */
    public function kitApplyDone(Request $request): View {
        return view('kitApplyDone');
    }
    
    /**
     * 로그인
     *
     * @param Request $request
     * @return View
     */
    public function login(Request $request): View {
        return view('login');
    }
}