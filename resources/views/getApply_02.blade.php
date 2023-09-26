<!-- 수거 신청 02 -->
@extends('common.skeleton')
@section('content')
<div class="getApply getApply02">
    <div class="conTop">
        <p class="logoUnderTxt">키트를 <span>수거할 장소</span>를 알려주세요</p>
    </div>
    <div class="formLayout">
        <form id="getForm">
            <dl>
                <dt>검체 채취일<span>검체를 수집한 날짜를 알려주세요</span></dt>
                <dd>
                    <input type="date" name="" id="" class="currentDate_01" required aria-required="true">
                </dd>
            </dl>
            <dl>
            <dt>희망 수거일<span>기사님 방문을 희망하는 날짜를 입력해주세요</span></dt>
                <dd>
                    <input type="date" name="" id="" class="currentDate_02" required aria-required="true">
                </dd>
            </dl>
            <dl>
                <dt>반려인 이름</dt>
                <dd>
                    <input type="text" name="" id="ownerName" maxlength="10" placeholder="신청자의 이름을 입력해주세요">
                    <p class="error" id="ownerNameCheck"></p>
                </dd>
            </dl>
            <dl>
                <dt>휴대폰 번호</dt>
                <dd>
                    <input type="text" oninput="phoneNum(this)" minlength="10" maxlength="13" required  id="phoneId">
                    <p class="error"></p>
                </dd>
            </dl>
            <dl class="adress">
                <dt>주소<span>기사님이 방문할 주소를 알려주세요</span></dt>
                <dd>
                    <div class="top"><input type="text" name="" id=""><a href="javascript:;">우편 번호 검색</a></div>
                    <input type="text" name="" id="">
                    <input type="text" name="" id="" placeholder="상세 주소를 입력해 주세요">
                    <!-- <p class="erro">주소를 입력해주세요</p> -->
                </dd>
            </dl>
            <dl class="message">
                <dt>수거 참고사항<span>공동 비밀번호, 초인종 등 주의해야 할 정보를 미리 알려주세요.</span></dt>
                <dd>
                    <input type="text" name="" id="messagePopInput"><a href="javascript:;" class="dimOpenBtn" data-pop="messagePop" >작성하기</a>
                </dd>
            </dl>
        </form>
        <div class="btnBox">
            <button type="submit">수거 신청</button>
            <a href="javascript:;" data-pop="CancelPop" class="dimOpenBtn">나중에 하기</a>
        </div>
    </div>
</div>

<div class="dim fade cen" id="CancelPop">
    <div class="popBox">
        <p class="tit">수거 신청 취소</p>
        <p>지금 취소하면 수거 신청되지 않습니다.<br>취소 하시겠습니까?</p>
        <div class="btn">
            <a href="javascript:;" class="dimClosed">신청 계속하기</a>
            <a href="/">취소</a>
        </div>
    </div>
</div>

<!-- 수거 참고사항 작성 팝업 -->
<div class="dim up" id="messagePop">
    <div class="popBox">
        <div class="top">
            <h2>수거 참고사항</h2>
            <a href="javascript:;" class="dimClosed"><img src="/images/common/close_icon.png" alt=""></a>
        </div>
        <div class="con">
            <textarea name="" id="" cols="30" rows="10" maxlength="50" placeholder="공동 비밀번호 등 주의해야 할 정보를 미리 알려주세요"></textarea>
            <p class="tatext"><span class="textArea">0</span> / 50</p>
        </div>
        <div class="btn"><button type="submit" class="nonAct">등록하기</button></div>
    </div>
</div>
@endSection

@push('styles')
<link rel="stylesheet" href="{{asset('css/form.css')}}">
@endPush

@push('scripts')
<script src="{{asset('js/form.js')}}"></script>
@endPush

@push('onLoadScripts')
<script>    
    document.querySelector('input.currentDate_01').value = new Date().toISOString().substring(0, 10);
    document.querySelector('input.currentDate_02').value = new Date().toISOString().substring(0, 10);
</script>
@endPush

<!--
    *** TO DO ***

    ✅ .logo -> 키트 번호에 따른 키트 종류에 맞춰 구분 로고 출력
    ✅ 주소 우편번호 검색 및 유효성 검사 -> 에러 '주소를 입력해주세요' 
    ✅ 주소 : 이전 수거 이력이 있는 경우 디폴트 전 수거 주소값 없다면 공란
    ✅ 수거 참고사항 팝업 에서 작성 시 해당 인풋값 1줄 + 말줄임표시 #messagePopInput 에 노출 !
    ✅ 휴대폰번호 : 디폴트 회원 id값
 
    ✅ 나중에하기 선택 시 저장 xxxxxxx / 수거신청 선택 시 저장 후 수거 신청완료 /getDone 페이지 이동

-->