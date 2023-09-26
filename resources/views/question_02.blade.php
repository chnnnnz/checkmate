<!-- 문진표 02 -->
@extends('common.skeleton')
@section('content')
<div class="question question_02">
    <div class="conTop">
        <p class="logoUnderTxt"><span>문진표</span>를 작성해주세요</p>
    </div>
    <div class="question_con">
        <div class="question_load"></div>
        <h2>평상시 <span>콩이</span>의<br>구취 정도는 어떤가요?</h2>
        <div class="con">
            <label for="question_con_02_1"><input type="radio" name="question_con_02" id="question_con_02_1" checked></label>
            <label for="question_con_02_2"><input type="radio" name="question_con_02" id="question_con_02_2"></label>
            <label for="question_con_02_3"><input type="radio" name="question_con_02" id="question_con_02_3"></label>
            <label for="question_con_02_4"><input type="radio" name="question_con_02" id="question_con_02_4"></label>
            <label for="question_con_02_5"><input type="radio" name="question_con_02" id="question_con_02_5"></label>
            <label for="question_con_02_6"><input type="radio" name="question_con_02" id="question_con_02_6"></label>
        </div>
    </div>
    <div class="btnBox">
        <a href="/question_03">다음 단계</a>
        <a href="/question_01">이전 단계</a>
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

    ✅ .question_con h2 span 안에는 반려동물의 이름이 자동으로 끌어와져야 함 !
    ✅ radio 버튼 value 값 왼쪽에서 오른쪽으로 1점부터 ~ 6점 까지 
    ✅ 다음 또는 나중에 하기 버튼을 눌러도 데이터 저장
    ✅ .logo -> 키트 번호에 따른 키트 종류에 맞춰 구분 로고 출력

-->