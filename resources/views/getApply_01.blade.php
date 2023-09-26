<!-- 수거 신청 01 -->
<style>
    #wrap #contents {background:#eef4fd}
</style>
@extends('common.skeleton')
@section('content')
<div class="getApply getApply01">
    <div class="conTop">
        <p class="logoUnderTxt"><span>검체 수집</span>이 완료되었나요?</p>
    </div>
    <div class="formLayout">
        <div class="checklist">
            <h2>수거 신청 전 체크리스트</h2>
            <div class="imgbox"></div>
            <p>면봉으로 <span>치아와 잇몸 사이</span>를<br>충분히 문질렀어요</p>
            <div class="imgbox"></div>
            <p>보존용기에 <span>번호스티커</span>를 붙였어요</p>
            <div class="imgbox"></div>
            <p><span>보존용기를 박스에 넣고</span> 봉투를 닫았어요</p>
            <div class="imgbox"></div>
            <p>봉투에 <span>주소스티커</span>를 붙였어요</p>
        </div>
        <label for="gaCheck"><p><a href="javascript:;"><span>검체 수집 완료!</span>수거 신청은 취소할 수 없으므로 꼭 검체 수집을 완료한 후 신청해주세요</a></p><input type="checkbox" name="" id="gaCheck" class="inputCheck"></label>
        <div class="btnBox">
            <a href="javascript:;" onclick="agreeCheck();" >다음</a>
            <a href="/">취소</a>
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

    ✅ .logo -> 키트 번호에 따른 키트 종류에 맞춰 구분 로고 출력

-->