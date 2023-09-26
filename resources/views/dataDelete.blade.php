<!-- 데이터 삭제 -->
@extends('common.skeleton')
@section('content')
<div class="Done dataDelete">
    <div class="conTop">
        <div class="logo"><img src="/images/common/dental_logoB.png" alt=""></div>
        <p class="logoUnderTxt">데이터를 모두 <span>삭제할까요?</span></p>
    </div>
    <div class="DoneBox">
        <p class="tit">잠깐! 모든 정보가 사라져요</p>
        <p class="deletCon">
            <span class="dot">• </span>회원 정보<br>
            <span class="dot">• </span>반려동물 정보<br>
            <span class="dot">• </span>결과 보고서
        </p>
        <p class="caption">데이터 삭제 시 등록했던 내용이 모두 사라집니다. 신중히 선택해주세요.</p>
        <p class="caption">데이터 삭제 이후 서비스 부정이용 방지 및 개선을 위해 1년간 데이터를 보유함을 안내드립니다.</p>
        <a href="">데이터 삭제하기</a>
        <a href="/my" class="gray">취소</a>
    </div>
</div>
@endSection

@push('styles')
<link rel="stylesheet" href="{{asset('css/complete.css')}}">
@endPush



<!--
    *** TO DO ***

    ✅ 데이터 삭제하기 버튼 클릭 시 데이터 삭제 ! +  /dataDeleteDone 데이터 삭제 완료 페이지로 이동

-->