<!-- 반려동물 수정 리스트 -->
@extends('common.skeleton')
@section('content')
<div class="animodify_list">
    <div class="conTop">
        <p class="logoUnderTxt">정보를 수정하고 싶은<br><span>반려동물을 선택</span>하세요</p>
    </div>
    <div class="conBtm">
        <div class="regisBtn"><a href="/aniRagis">새로운 반려동물 등록하기</a></div>
        <div class="no_list"><p>반려동물을 등록해주세요</p></div>
        <div class="list">
            <ul>
                <li>
                    <a href="javascript:;">
                        <div class="ani"><img src="/images/bg/dog.png" alt=""></div>
                        <div class="ani_name">
                            <p class="name">강아지</p>
                            <p class="birth">2017.08.06</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <div class="ani"><img src="/images/bg/cat.png" alt=""></div>
                        <div class="ani_name">
                            <p class="name">고양이</p>
                            <p class="birth">2017.08.06</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <div class="ani"><img src="/images/bg/dog.png" alt=""></div>
                        <div class="ani_name">
                            <p class="name">강아지</p>
                            <p class="birth">2017.08.06</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <div class="ani"><img src="/images/bg/dog.png" alt=""></div>
                        <div class="ani_name">
                            <p class="name">강아지</p>
                            <p class="birth">2017.08.06</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <div class="ani"><img src="/images/bg/cat.png" alt=""></div>
                        <div class="ani_name">
                            <p class="name">고양이</p>
                            <p class="birth">2017.08.06</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- <div class="pageNation">
            <ol>
                <li><a href="javascript:;" class="prev on"></a></li>
                <li><a href="javascript:;"><span>1</span></a></li>
                <li><a href="javascript:;"><span>2</span></a></li>
                <li><a href="javascript:;"><span>3</span></a></li>
                <li><a href="javascript:;"><span>4</span></a></li>
                <li><a href="javascript:;" class="active"><span>5</span></a></li>
                <li><a href="javascript:;" class="next"></a></li>
            </ol>
        </div> -->
        <div class="btn">
            <button type="submit">선택하기</button>
            <a href="/my">취소</a>
        </div>
    </div>
</div>
@endSection

@push('styles')
<link rel="stylesheet" href="{{asset('css/form.css')}}">
@endPush

<!--
    *** TO DO ***
    
    ✅ 반려동물 리스트 :: 선택 시 취소 불가 ! radio 형식으로 무조건 하나 선택 ! / 한 페이지 당 5개 출력 ! 
    ✅ 확인 -> 선택한 반려동물 데이터 값 가지고 /animodify 수정 페이지 이동 !  반려동물 선택 전 비활성화 !! 활성화 : class="on"

-->