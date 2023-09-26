<!-- 문진표 제출 완료 -->
@extends('common.skeleton')
@section('content')
<div class="Done modify join">
    <div class="conTop">
        <div class="logo"><img src="/images/common/dental_logoB.png" alt=""></div>
        <p class="logoUnderTxt"><span>문진표 작성 완료!</span><br>수거 신청이 준비되었나요?</p>
    </div>
    <div class="DoneBox">
        <a href="/getApply">수거 신청하기</a>
        <a href="/" class="gray">나중에 하기</a>
    </div>
</div>
@endSection

@push('styles')
<link rel="stylesheet" href="{{asset('css/complete.css')}}">
@endPush


