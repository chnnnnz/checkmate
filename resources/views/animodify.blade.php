<!-- 반려동물 수정 -->
@extends('common.skeleton')
@section('content')
<div class="aniRagis animodify">
    <div class="conTop">
        <p class="logoUnderTxt"><span>반려동물 정보</span>를 등록해 주세요</p>
    </div>
    <div class="conBtm">
        <form id="aniRagisForm">
            <dl>
                <dt>이름</dt>
                <dd>
                    <input type="text" required maxlength="10" id="ani_name">
                    <p class="error" id="ani_nameCheck"></p>
                </dd>
            </dl>
            <dl class="type_check">
                <dt>유형 </dt>
                <dd>
                    <div>
                        <span><input type="radio" name="typeCheck" id="ragi_dog" checked><label for="ragi_dog">강아지</label></span>
                        <span><input type="radio" name="typeCheck" id="ragi_cat"><label for="ragi_cat">고양이</label></span>
                    </div>
                    <!-- <p class="error">반려동물의 유형을 선택해 주세요.</p> -->
                </dd>
            </dl>
            <dl>
                <dt>품종</dt>
                <dd>
                    <input type="button" class="dimOpenBtn" data-pop="kindCheck">
                    <!-- <p class="error">반려동물의 품종을 선택해 주세요.</p> -->
                </dd>
            </dl>
            <dl>
                <dt>성별</dt>
                <dd>
                    <input type="button" class="dimOpenBtn" data-pop="genderCheck">
                    <!-- <p class="error">성별을 선택해 주세요.</p> -->
                </dd>
            </dl>
            <dl>
                <dt>생일</dt>
                <dd>
                    <input type="date" required aria-required="true">
                    <!-- <p class="error">날짜를 입력해 주세요.</p> -->
                </dd>
            </dl>
        </form>
        <button type="submit" class="on">수정하기</button>
        <a href="/animodify_list">취소</a>
    </div>
</div>

<!-- 강아지 품종 선택 -->
<div class="dim up checkPop" id="kindCheck">
    <div class="popBox">
        <div class="top">
            <h2>품종을 선택해 주세요</h2>
            <a href="javascript:;" class="dimClosed"><img src="/images/common/close_icon.png" alt=""></a>
        </div>
        <div class="con">
            <label for="kindCheck_dog_01">세상에 하나뿐인 믹스견<input type="radio" name="kindCheck_dog" id="kindCheck_dog_01" checked></label>
            <label for="kindCheck_dog_02">고든 세터<input type="radio" name="kindCheck_dog" id="kindCheck_dog_02"></label>
            <label for="kindCheck_dog_03">골든 두들<input type="radio" name="kindCheck_dog" id="kindCheck_dog_03"></label>
            <label for="kindCheck_dog_04">골든 리트리버<input type="radio" name="kindCheck_dog" id="kindCheck_dog_04"></label>
            <label for="kindCheck_dog_05">그레이 하운드<input type="radio" name="kindCheck_dog" id="kindCheck_dog_05"></label>
            <label for="kindCheck_dog_06">그레이트 데인<input type="radio" name="kindCheck_dog" id="kindCheck_dog_06"></label>
            <label for="kindCheck_dog_07">그레이트 스위스 마운틴 도그<input type="radio" name="kindCheck_dog" id="kindCheck_dog_07"></label>
            <label for="kindCheck_dog_08">그레이트 피레니즈<input type="radio" name="kindCheck_dog" id="kindCheck_dog_08"></label>
            <label for="kindCheck_dog_09">그로넨달<input type="radio" name="kindCheck_dog" id="kindCheck_dog_09"></label>
            <label for="kindCheck_dog_10">그리스 셰퍼드<input type="radio" name="kindCheck_dog" id="kindCheck_dog_10"></label>
            <label for="kindCheck_dog_11">강아지 종류<input type="radio" name="kindCheck_dog" id="kindCheck_dog_11"></label>
            <label for="kindCheck_dog_12">강아지 종류<input type="radio" name="kindCheck_dog" id="kindCheck_dog_12"></label>
            <label for="kindCheck_dog_13">강아지 종류<input type="radio" name="kindCheck_dog" id="kindCheck_dog_13"></label>
            <label for="kindCheck_dog_14">강아지 종류<input type="radio" name="kindCheck_dog" id="kindCheck_dog_14"></label>
            <label for="kindCheck_dog_15">강아지 종류<input type="radio" name="kindCheck_dog" id="kindCheck_dog_15"></label>
            <label for="kindCheck_dog_16">강아지 종류<input type="radio" name="kindCheck_dog" id="kindCheck_dog_16"></label>
            <label for="kindCheck_dog_17">강아지 종류<input type="radio" name="kindCheck_dog" id="kindCheck_dog_17"></label>
        </div>
        <div class="btn"><button type="submit">선택하기</button></div>
    </div>
</div>

<!-- 고양이 품종 선택 -->
<div class="dim up checkPop" id="kindCheck">
    <div class="popBox">
        <div class="top">
            <h2>품종을 선택해 주세요</h2>
            <a href="javascript:;" class="dimClosed"><img src="/images/common/close_icon.png" alt=""></a>
        </div>
        <div class="con">
            <label for="kindCheck_cat_01">세상에 하나뿐인 믹스묘<input type="radio" name="kindCheck_cat" id="kindCheck_cat_01" checked></label>
            <label for="kindCheck_cat_02">네벨룽<input type="radio" name="kindCheck_cat" id="kindCheck_cat_02"></label>
            <label for="kindCheck_cat_03">노르웨이 숲고양이<input type="radio" name="kindCheck_cat" id="kindCheck_cat_03"></label>
            <label for="kindCheck_cat_04">데본렉스<input type="radio" name="kindCheck_cat" id="kindCheck_cat_04"></label>
            <label for="kindCheck_cat_05">돈스코이<input type="radio" name="kindCheck_cat" id="kindCheck_cat_05"></label>
            <label for="kindCheck_cat_06">라가머핀<input type="radio" name="kindCheck_cat" id="kindCheck_cat_06"></label>
            <label for="kindCheck_cat_07">라이코이<input type="radio" name="kindCheck_cat" id="kindCheck_cat_07"></label>
            <label for="kindCheck_cat_08">라팜<input type="radio" name="kindCheck_cat" id="kindCheck_cat_08"></label>
            <label for="kindCheck_cat_09">라팜 쇼트헤어<input type="radio" name="kindCheck_cat" id="kindCheck_cat_09"></label>
            <label for="kindCheck_cat_10">랙돌<input type="radio" name="kindCheck_cat" id="kindCheck_cat_10"></label>
            <label for="kindCheck_cat_11">고양이 종류<input type="radio" name="kindCheck_cat" id="kindCheck_cat_11"></label>
            <label for="kindCheck_cat_12">고양이 종류<input type="radio" name="kindCheck_cat" id="kindCheck_cat_12"></label>
            <label for="kindCheck_cat_13">고양이 종류<input type="radio" name="kindCheck_cat" id="kindCheck_cat_13"></label>
            <label for="kindCheck_cat_14">고양이 종류<input type="radio" name="kindCheck_cat" id="kindCheck_cat_14"></label>
            <label for="kindCheck_cat_15">고양이 종류<input type="radio" name="kindCheck_cat" id="kindCheck_cat_15"></label>
            <label for="kindCheck_cat_16">고양이 종류<input type="radio" name="kindCheck_cat" id="kindCheck_cat_16"></label>
            <label for="kindCheck_cat_17">고양이 종류<input type="radio" name="kindCheck_cat" id="kindCheck_cat_17"></label>
        </div>
        <div class="btn"><button type="submit">선택하기</button></div>
    </div>
</div>

<!-- 성별 선택 팝업 -->
<div class="dim up checkPop" id="genderCheck">
    <div class="popBox">
        <div class="top">
            <h2>성별을 선택해 주세요</h2>
            <a href="javascript:;" class="dimClosed"><img src="/images/common/close_icon.png" alt=""></a>
        </div>
        <div class="con">
            <label for="genderCheck_01">남아<input type="radio" name="genderCheck" id="genderCheck_01" checked></label>
            <label for="genderCheck_02">여아<input type="radio" name="genderCheck" id="genderCheck_02"></label>
            <label for="genderCheck_03">남아 / 중성화<input type="radio" name="genderCheck" id="genderCheck_03"></label>
            <label for="genderCheck_04">여아 / 중성화<input type="radio" name="genderCheck" id="genderCheck_04"></label>
        </div>
        <div class="btn"><button type="submit">선택하기</button></div>
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

    ✅ 강아지 / 고양이 유형 선택에 따라 품종 선택 팝업 변경
    ✅ 이름, 유형, 품종, 성별, 생일 모두 등록된 정보에 따라 기존 데이터 값 노출 !
    ✅ 수정 후 /animodifyDone 수정완료 페이지 이동 !

-->