<!-- 마이 페이지 인덱스 -->
@extends('common.skeleton')
@section('content')
<div class="my_index">
    <div class="conTop">
        <div class="logo"><img src="/images/common/dental_logoB.png" alt=""></div>
    </div>
    <ul>
        <li><a href="/animodify_list">반려동물 정보 변경</a></li>
        <li><a href="/idmodify">휴대폰번호(ID) 변경</a></li>
        <li><a href="/pwmodify">비밀번호 변경</a></li>
        <li><a href="/terms">이용약관</a></li>
        <li><a href="javascript:;" data-pop="logOutPop" class="dimOpenBtn">로그아웃</a></li>
        <li><a href="/dataDelete">데이터 삭제</a></li>
    </ul>
</div>

<div class="dim fade" id="logOutPop">
    <div class="popBox">
        <p class="tit">로그아웃 하시겠어요?</p>
        <p>덴탈 체크메이트에서<br>로그아웃 하시겠어요?</p>
        <div class="btn">
            <a href="">로그아웃</a>
            <a href="javascript:;" class="dimClosed">취소</a>
        </div>
    </div>
</div>
@endSection

@push('styles')
<link rel="stylesheet" href="{{asset('css/my.css')}}">
@endPush




<!--
    *** TO DO ***

    ✅ 로그아웃 팝업 '로그아웃' 버튼 클릭 시 로그아웃 !!

-->