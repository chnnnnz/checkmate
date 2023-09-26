<!-- 휴대폰번호 변경 -->
@extends('common.skeleton')
@section('content')
<div class="idmodify">
    <div class="conTop">
        <p class="logoUnderTxt"><span>휴대폰번호(ID)</span>를 변경해 주세요</p>
    </div>
    <div class="formLayout">
        <form id="idmodifyForm">
            <dl class="cell">
                <dt>휴대폰번호(ID)</dt>
                <dd>
                    <div><input type="text" oninput="phoneNum(this)" minlength="10" maxlength="13" required id="phoneId" placeholder="010-0000-0000"><a href="javascript:;" class="phoneNumSubmit">인증</a></div>
                    <!-- <p class="error">휴대폰번호(ID)를 다시 확인해주세요.</p> -->
                    <!-- <p class="error">이미 가입된 휴대폰번호(ID) 입니다.</p> -->
                    <div class="sendNum">
                        <input type="text" required id="sendNum" placeholder="인증번호"><span>00:00</span>
                        <!-- <p class="error">인증번호를 다시 확인해주세요.</p> -->
                        <!-- <p class="error">인증번호가 만료되었습니다. 재전송해주세요</p> -->
                    </div>
                </dd>
            </dl>
        </form>
        <div class="btnBox">
            <a href="javascript:;" class="checkBtn">변경하기</a>
            <a href="/">취소</a>
        </div>
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

    ✅ 휴대폰번호 인풋 : 원래 기존 번호 플레이스홀더로 노출 !!!!!!! 
    ✅ 핸드폰 번호 인증 번호 ! => 인증 버튼 누른 후 인증번호 인풋 노출 + 타임 체크.. (인증버튼은 재전송 버튼으로 변경 !) => 인증 완료 시 체크 아이콘 ! 
    <img src="/images/common/checkout_icon.png" alt="">

    ✅ 인증번호 만료 시 재전송 + 에러메세지

    // 유효성 검사
    ✅ 핸드폰번호 유효성 검사 : 인증 버튼 클릭 시 ! 없는 번호일 경우 -> 휴대폰번호(ID)를 다시 확인하세요. 
    / 이미 가입된 번호일 경우 -> 이미 가입된 휴대폰번호(ID) 입니다

    ✅ 확인하기 -> /idmodifyDone 페이지 이동 + checkBtn 클래스 지우기 !

-->