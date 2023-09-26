<!-- 휴대폰번호 변경 완료 -->
@extends('common.skeleton')
@section('content')
<div class="Done modify">
    <div class="conTop">
        <div class="logo"><img src="/images/common/dental_logoB.png" alt=""></div>
        <p class="logoUnderTxt">휴대폰번호(ID) 변경이<br><span>완료되었어요</span></p>
    </div>
    <div class="DoneBox">
        <a href="/">확인</a>
    </div>
</div>
@endSection

@push('styles')
<link rel="stylesheet" href="{{asset('css/complete.css')}}">
@endPush
