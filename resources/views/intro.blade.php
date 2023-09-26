<!-- 인트로 페이지 -->
@extends('common.skeleton')
@section('content')
<div class="intro">
    <div class="logo"><img src="/images/common/dental_logoB.png" alt=""></div>
    <ul>
        <li><a href="/">검사 키트<span>등록하기<img src="/images/common/arrowW_icon.png" alt=""></span></a></li>
        <li><a href="">검사 키트<span>구매하기<img src="/images/common/arrowG_icon.png" alt=""></span></a></li>
    </ul>
</div>
@endSection

@push('styles')
<link rel="stylesheet" href="{{asset('css/intro.css')}}">
@endPush




<!--
    *** TO DO ***

    ✅ 로그인 유/무 에 따라 검사 키트 '등록하기' 클릭 시 홈(키트 리스트) / 로그인 페이지 이동 !

-->