<!-- 데이터 삭제 -->
@extends('common.skeleton')
@section('content')
<div class="Done modify data">
    <div class="conTop">
        <div class="logo"><img src="/images/common/dental_logoB.png" alt=""></div>
        <p class="logoUnderTxt">데이터 삭제가<span>완료되었어요</span></p>
    </div>
    <div class="DoneBox">
        <a href="/my">확인</a>
    </div>
</div>
@endSection

@push('styles')
<link rel="stylesheet" href="{{asset('css/complete.css')}}">
@endPush
