<!-- 문진표 01 -->
@extends('common.skeleton')
@section('content')
<div class="question question_01">
    <div class="conTop">
        <p class="logoUnderTxt"><span>문진표</span>를 작성해주세요</p>
    </div>
    <div class="question_con question_con_01">
        <div class="question_load"></div>
        <h2>양치를 얼마나 자주 시켜주시나요?</h2>
        <div class="con">
            <label for="question_con_01_6">거의 하지 않는 편이다<input type="radio" name="question_con_01" id="question_con_01_6" checked></label>
            <label for="question_con_01_5">1년에 1번<input type="radio" name="question_con_01" id="question_con_01_5"></label>
            <label for="question_con_01_4">3개월에 1번<input type="radio" name="question_con_01" id="question_con_01_4"></label>
            <label for="question_con_01_3">1개월에 1번<input type="radio" name="question_con_01" id="question_con_01_3"></label>
            <label for="question_con_01_2">일주일에 1~3번 정도<input type="radio" name="question_con_01" id="question_con_01_2"></label>
            <label for="question_con_01_1">거의 매일 해주는 편이다<input type="radio" name="question_con_01" id="question_con_01_1"></label>
        </div>
    </div>
    <div class="btnBox">
        <a href="/question_02">다음 단계</a>
        <a href="javascript:;" data-pop="CancelPop" class="dimOpenBtn">나중에 하기</a>
    </div>
</div>

<div class="dim fade cen" id="CancelPop">
    <div class="popBox">
        <p class="tit">문진표 작성 취소</p>
        <p>지금 취소하면 문진표 제출되지 않습니다.<br>취소 하시겠습니까?</p>
        <div class="btn">
            <a href="javascript:;" class="dimClosed">등록 계속하기</a>
            <a href="/">취소</a>
        </div>
    </div>
</div>
@endSection

@push('styles')
<link rel="stylesheet" href="{{asset('css/form.css')}}">
@endPush

@push('onLoadScripts')
<script>
    $(document).ready(function(){
        $('.question_load').addClass('on');
    });
</script>
@endPush

<!--
    *** TO DO ***

    ✅ radio 버튼 value 값 위에서 아래로 6점부터 ~ 1점 까지 
    ✅ 다음 또는 나중에 하기 버튼을 눌러도 데이터 저장
    ✅ .logo -> 키트 번호에 따른 키트 종류에 맞춰 구분 로고 출력

-->