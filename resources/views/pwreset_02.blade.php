<!-- 비밀번호 변경 핸드폰번호 확인 -->
@extends('common.skeleton')
@section('content')
<div class="pwmodify pwreset_02">
    <div class="conTop">
        <p class="logoUnderTxt"><span>비밀번호</span>를<br> 재설정해 주세요</p>
    </div>
    <div class="formLayout">
        <form id="pwmodifyForm">
            <dl>
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
        <div class="btnBox">
            <a href="javascript:;" class="checkBtn">재설정하기</a>
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

    ✅ 등록하기 -> /pwresetDone 완료페이지 이동 + checkBtn 클래스 지우기 !

    *** DONE ***

    ✅ 비밀번호 : 최소 4자리, 최대 4자리 
    ✅ 비밀번호 확인

-->