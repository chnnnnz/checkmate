<!-- 문진표 03 -->
@extends('common.skeleton')
@section('content')
<div class="question question_03">
    <div class="conTop">
        <p class="logoUnderTxt"><span>문진표</span>를 작성해주세요</p>
    </div>
    <div class="question_con">
        <div class="question_load"></div>
        <h2>최근 6개월 간 <span>콩이</span>의<br>증상을 <b class="blue">모두</b> 골라주세요</h2>
        <div class="con">
            <label for="question_con_03_1">물고 노는 장난감에 관심이 떨어졌다<input type="checkbox" name="question_con_03" id="question_con_03_1"></label>
            <label for="question_con_03_2">한쪽 방향으로만 씹으려고 한다<input type="checkbox" name="question_con_03" id="question_con_03_2"></label>
            <label for="question_con_03_3">반복적으로 얼굴과 입 부분을 긁는다<input type="checkbox" name="question_con_03" id="question_con_03_3"></label>
            <label for="question_con_03_4">타액(침) 분비량이 평소보다 많아졌다<input type="checkbox" name="question_con_03" id="question_con_03_4"></label>
            <label for="question_con_03_5">입냄새가 이전보다 심해졌다<input type="checkbox" name="question_con_03" id="question_con_03_5"></label>
            <label for="question_con_03_6">잇몸에 출혈이 있었다<input type="checkbox" name="question_con_03" id="question_con_03_6"></label>
            <label for="question_con_03_0" class="noneCheck">증상 없음<input type="checkbox" name="question_con_03" id="question_con_03_0"></label>
        </div>
    </div>
    <div class="btnBox">
        <button type="submit">문진표 제출</button>
        <a href="/question_02">이전 단계</a>
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
    ✅ 모든 checkbox value 값 1점 , 단 증상 없음 은 0
    ✅ 다음 또는 나중에 하기 버튼을 눌러도 데이터 저장
    ✅ .logo -> 키트 번호에 따른 키트 종류에 맞춰 구분 로고 출력
    ✅ 문진표 제출 -> /questionDone 페이지 이동 !!
    
-->