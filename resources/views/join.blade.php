<!-- 회원 등록 -->
@extends('common.skeleton')
@section('content')
<div class="join">
    <div class="conTop">
        <p class="logoUnderTxt"><span>내 정보</span>를 등록해 주세요</p>
    </div>
    <div class="formLayout">
        <form id="joinForm">
            <dl class="cell">
                <dt>휴대폰번호(ID)</dt>
                <dd>
                    <div><input type="text" oninput="phoneNum(this)" minlength="10" maxlength="13" required id="phoneId" placeholder="010-0000-0000"><a href="javascript:;" class="phoneNumSubmit">인증</a></div>
                    <!-- <p class="error">휴대폰번호(ID)를 다시 확인해주세요.</p> -->
                    <!-- <p class="error">이미 가입된 휴대폰번호(ID) 입니다.</p> -->
                    <div class="sendNum">
                        <input type="text" required id="sendNum" placeholder="인증번호"><span>00:00</span>
                        <!-- <p class="error">인증번호를 다시 확인해주세요.</p> -->
                        <!-- <p class="error">인증번호가 만료되었습니다. 재전송해주세요.</p> -->
                    </div>
                </dd>
            </dl>
            <dl>
                <dt>비밀번호</dt>
                <dd>
                    <input type="password" required id="pwCheck01" oninput="isSame()" minlength="4" maxlength="4" placeholder="숫자 4자리">
                    <p class="error" id="pwCheck_01"></p>
                </dd>
            </dl>
            <dl>
                <dt>비밀번호 확인</dt>
                <dd>
                    <input type="password" required id="pwCheck02" oninput="isSame()" minlength="4" maxlength="4" placeholder="숫자 4자리">
                    <p class="error" id="pwCheck_02"></p>
                </dd>
            </dl>
        </form>
        <p class="caption">휴대폰번호(ID)와 비밀번호는<br>검사 결과를 조회할 때 필요하므로 꼭 기억하세요.</p>
        <label for="joinCheck"><p><a href="javascript:;" class="dimOpenBtn" data-pop="termPop"><span>[필수]</span> 검사 키트 이용 및 개인정보 수집 동의</a></p><input type="checkbox" name="" id="joinCheck" class="inputCheck"></label>
        <div class="btnBox">
            <a href="javascript:;" class="checkBtn" onclick="agreeCheck();" >등록하기</a>
            <a href="javascript:;" data-pop="CancelPop" class="dimOpenBtn">취소</a>
        </div>
    </div>
</div>

<!-- 취소 -->
<div class="dim fade cen" id="CancelPop">
    <div class="popBox">
        <p class="tit">회원 등록 취소</p>
        <p>지금 취소하면 회원 등록되지 않습니다.<br>취소 하시겠습니까?</p>
        <div class="btn">
            <a href="javascript:;" class="dimClosed">등록 계속하기</a>
            <a href="/">취소</a>
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

    ✅ 핸드폰 번호 인증 번호 ! => 인증 버튼 누른 후 인증번호 인풋 노출 + 타임 체크.. (인증버튼은 재전송 버튼으로 변경 !) => 인증 완료 시 체크 아이콘 ! 
    <img src="/images/common/checkout_icon.png" alt="">

    ✅ 인증번호 만료 시 재전송 + 에러메세지

    // 유효성 검사
    ✅ 핸드폰번호 유효성 검사 : 인증 버튼 클릭 시 ! 없는 번호일 경우 -> 휴대폰번호(ID)를 다시 확인해주세요. 
    / 이미 가입된 번호일 경우 -> 이미 가입된 휴대폰번호(ID) 입니다


    *** DONE ***

    ✅ 비밀번호 : 최소 4자리, 최대 4자리 
    ✅ 비밀번호 확인
    ✅ 필수 항목 체크 후 버튼 활성화 + 완료 페이지 이동 /joinDone

-->