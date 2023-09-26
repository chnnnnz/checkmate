<!-- 로그인 -->
<style>
    #wrap #contents {background:#eef4fd}
</style>
@extends('common.skeleton')
@section('content')
<div class="login">
    <div class="conTop">
        <div class="logo"><img src="/images/common/dental_logoB.png" alt=""></div>
    </div>
    <div class="formLayout">
        <form id="loginForm">
            <dl class="cell">
                <dt>휴대폰번호(ID)</dt>
                <dd>
                    <input type="text" oninput="phoneNum(this)" minlength="10" maxlength="13" required id="IdLogin" placeholder="010-0000-0000">
                    <!-- <p class="error">휴대폰번호(ID)를 다시 확인해주세요.</p> -->
                </dd>
            </dl>
            <dl>
                <dt>비밀번호</dt>
                <dd>
                    <input type="password" required id="pwLogin" minlength="4" maxlength="4" placeholder="숫자 4자리">
                    <!-- <p class="error">비밀번호를 다시 확인해주세요.</p> -->
                </dd>
            </dl>
        </form>
        <div class="btnBox">
            <a href="javascript:;">로그인</a>
            <ul>
                <li><a href="/pwreset_01">비밀번호 재설정</a></li>
                <li><a href="/join">회원 등록</a></li>
            </ul>
        </div>
        <div class="btm">
            <p>로그인에 문제가 있나요?</p>
            <a href="https://pf.kakao.com/_rVWpj">페스룸 케어</a>
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

    ✅ 아이디, 비밀번호 오류 시 error 메세지 ! + 인풋 에러값
    ✅ 로그인 서브밋 버튼 ..

-->