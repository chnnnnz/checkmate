<!-- 수거 신청 완료 -->
@extends('common.skeleton')
@section('content')
<div class="Done get">
    <div class="conTop">
        <div class="logo"><img src="/images/common/dental_logoB.png" alt=""></div>
        <p class="logoUnderTxt"><span>수거 신청이 완료</span>되었어요</p>
    </div>
    <div class="DoneBox">
        <h2>잠깐! 꼭 <span>읽어주세요!</span></h2>
        <p><span>①</span>각 지역 택배사의 상황에 따라 신청하신 수거일이 변동될 수 있습니다.</p>
        <p><span>②</span>정확한 수거일은 24시간 내로 신청하신 휴대폰 번호의 카카오톡으로 알려드립니다.</p>
        <p><span>➂</span>약속한 수거일에 맞춰 검체를 기사님께 전달해 주세요.</p>
        <a href="/">확인</a>
    </div>
</div>
@endSection

@push('styles')
<link rel="stylesheet" href="{{asset('css/complete.css')}}">
@endPush


