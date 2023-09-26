<!-- 키트 등록 -->
@extends('common.skeleton')
@section('content')
<div class="kitApply">
    <div class="conTop">
        <div class="logo"><img src="/images/common/dental_logoB.png" alt=""></div>
        <p class="logoUnderTxt"><span>키트 번호</span>를 등록해주세요</p>
    </div>
    <div class="formLayout">
        <div class="kitCon">
            <div class="swiper">
                <ul class="swiper-wrapper">
                    <li class="swiper-slide">
                        <div class="img"></div>
                        <p>구매하신 키트를 개봉하면 <br>고유 번호 스티커가 있어요</p>
                    </li>
                    <li class="swiper-slide">
                        <div class="img"></div>
                        <p>스티커의 11자리 번호를<br>확인해주세요</p>
                    </li>
                </ul>
                <div class="swiper-pagination"></div>
            </div>
            <div class="kitName">
                <input type="text" placeholder="DC00A0A-0000" id="kitInput">
                <P>구매하신 키트 번호를 - 제외하고 입력해주세요</P>
            <!-- <p class="error">유효하지 않은 번호입니다.<br>구매하신 키트를 확인 후 - 제외하고 다시 입력해주세요</p> -->
            </div>
        </div>
        <label for="kitCheck"><p><a href="javascript:;" class="dimOpenBtn" data-pop="termPop"><span>[필수]</span>검사 키트 이용 및 개인정보 수집 동의</a></p><input type="checkbox" name="" id="kitCheck" class="inputCheck"></label>
        <div class="btnBox">
            <a href="javascript:;" onclick="agreeCheck();" class="checkBtn">등록하기</a>
            <a href="javascript:;" data-pop="CancelPop" class="dimOpenBtn">취소</a>
        </div>
    </div>
</div>

<div class="dim fade cen" id="CancelPop">
    <div class="popBox">
        <p class="tit">키트 등록 취소</p>
        <p>지금 취소하면 키트가 등록되지 않습니다.<br>취소 하시겠습니까?</p>
        <div class="btn">
            <a href="javascript:;" class="dimClosed">등록 계속하기</a>
            <a href="/">취소</a>
        </div>
    </div>
</div>

<div class="dim fade cen" id="kitDupPop">
    <div class="popBox">
        <p class="tit">이미 등록된 키트</p>
        <p>이미 등록이 된 키트입니다.<br>키트 번호를 다시 확인해서 등록해주세요.</p>
        <div class="btn">
            <a href="javascript:;" class="dimClosed">다시 등록하기</a>
            <a href="/">검사 목록으로 돌아가기</a>
        </div>
    </div>
</div>

<!-- 이용 약관 -->
<div class="dim up" id="termPop">
    <div class="popBox terms">
        <div class="top">
            <h2>검사 키트 이용 및 개인정보 수집</h2>
        </div>
        <div class="con">
            <p>페스룸 케어에서 제공하는 키트 분석 서비스를 진행하기 위해 개인정보 수집・이용 동의가 필요합니다. 동의하지 않을 시 서비스 이용이 불가함을 안내드립니다.</p>
            <div class="termCon">
                <h3>개인정보의 수집・이용 내역</h3>
                <p class="tit">수집 항목</p>
                <p>1. 회원정보(이름, 연락처, 결과 확인용비밀번호, 택배 수거 신청자 이름, 주소)</p>
                <p>2. 반려동물 등록정보(펫 이름, 펫 유형, 펫 품종, 펫 성별, 펫 생일)</p>
                <p class="tit">이용 목적</p>
                <p>키트 분석 서비스 이용에 따른 반려동물 확인 및 결과지 제공, 택배 수거 서비스 제공</p>
                <p class="tit">수집 방법</p>
                <p>회사가 제공하는 입력창에 이용자가 직접 입력하는 방법으로 수집</p>
                <p class="tit">보유 기간</p>
                <p>회원 탈퇴 또는 건강키트 삭제 후 1년까지<br>
                    (단, 회원 탈퇴일로부터 1년까지는 서비스 부정이용 확인 및 방지 목적과 서비스 개선 및 개발 목적에 한하여 보유하며, 1년의 보유기간 이후에는 회원 개인을 식별할 수 있는 정보를 삭제한 후 서비스 개선 및 개발을 위해 수집된 정보를 활용할 수 있음)
                </p>
            </div>
            <div class="termCon">
                <h3>개인정보 제3자 제공</h3>
                <p class="tit">제공받는 자</p>
                <p>키트 분석 기관 (주)씨티바이오</p>
                <p class="tit">제공 목적</p>
                <p>키트 등록, 배송, 회송, 검사, 결과 등 일련의 서비스 제공 계약의 이행을 위 해 필요한 업무의 처리</p>
                <p class="tit">제공 정보</p>
                <p>1. 회원정보(이름, 연락처, 결과 확인용비밀번호, 택배 수거 신청자 이름, 주소)</p>
                <p>2. 반려동물 등록정보(펫 이름, 펫 유형, 펫 품종, 펫 성별, 펫 생일)</p>
                <p class="tit">보유 및 이용 기간</p>
                <p>재화 또는 서비스의 제공 목적이 달성된 후 파기</p>
            </div>
        </div>
        <div class="btn"><a href="javascript:;" class="dimClosed">확인</a></div>
    </div>
</div>
@endSection

@push('styles')
<link rel="stylesheet" href="{{asset('css/form.css')}}">
@endPush

@push('scripts')
<script src="{{asset('js/form.js')}}"></script>
@endPush


<!--
    *** TO DO ***

    ✅ 입력값('DC00A0A-0000') 형식 유효성 검사 + 텍스트 입력 시 자동 '-' 처리
    ✅ 등록하기 버튼 클릭 시 입력값('DC00A0A-0000') 형식이 맞으면 (+체크) /kitApplyDone 이동 , 그렇지 않으면 에러메세지 + 인풋보더값 변경 (.error 클래스 추가)
    ✅ 이미 등록된 키트 : 이미 등록된 키트 팝업 노출 /kitDupPop 
    ✅ 이미 등록된 키트 팝업 -> 다시 등록하기 클릭 시 #kitInput 인풋 포커싱 필수 !

    *** DONE ***

    ✅ 취소 팝업
    ✅ 체크 확인 후 페이지 이동(/kitApplyDone)
    

-->