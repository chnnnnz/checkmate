<!-- 비밀번호 재설정 완료 -->
@extends('common.skeleton')
@section('content')
<div class="Done modify">
    <div class="conTop">
        <div class="logo"><img src="/images/common/dental_logoB.png" alt=""></div>
        <p class="logoUnderTxt">비밀번호 재설정이 완료되었어요<br><span>다시 로그인</span>해 주세요</p>
    </div>
    <div class="DoneBox">
        <a href="/">확인</a>
    </div>
</div>
@endSection

@push('styles')
<link rel="stylesheet" href="{{asset('css/complete.css')}}">
@endPush
