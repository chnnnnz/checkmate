<!-- 키트 등록 완료 -->
@extends('common.skeleton')
@section('content')
<div class="Done modify join">
    <div class="conTop">
        <div class="logo"><img src="/images/common/dental_logoB.png" alt=""></div>
        <p class="logoUnderTxt"><span>키트 등록 완료!</span><br>문진표를 작성할래요</p>
    </div>
    <div class="DoneBox">
        <a href="/question_01">문진표 작성하기</a>
        <a href="/" class="gray">나중에 하기</a>
    </div>
</div>
@endSection

@push('styles')
<link rel="stylesheet" href="{{asset('css/complete.css')}}">
@endPush


