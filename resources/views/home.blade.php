<!-- 키트 리스트 페이지 -->
@extends('common.skeleton')
@section('content')
<div class="kitList_wrap">
    <div class="conTop">
        <div class="logo"><img src="/images/common/dental_logoB.png" alt=""></div>
    </div>
    <div class="kitList">
        <div class="no_list"><a href="/aniRagis">새로운 반려동물 등록하기</a></div>
        <ul>
            <li>
                <div class="top">
                    <div class="ani"><img src="/images/bg/dog.png" alt=""></div>
                    <div class="ani_name">
                        <p class="name">강아지이름이열글자네</p>
                        <p class="birth">2017.08.06</p>
                    </div>
                    <a href="" class="ani_modify"><img src="/images/common/edit_icon.png" alt=""></a>
                </div>
                <div class="btm">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide newKitBtn">
                                <a href=""><p>새로운<br>키트 등록하기</p></a>
                            </div>
                            <div class="swiper-slide">
                                <div class="kit_wrap">
                                    <p class="kitNum">2회차</p>
                                    <p class="failed"></p>
                                    <p class="kitDate">
                                        <span>등록 : 2023.09.15</span>
                                        <span>결과 : -</span>
                                    </p>
                                    <a href="" class="checkWrite blue">문진표 작성하기</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="kit_wrap">
                                    <p class="kitNum">1회차</p>
                                    <p class="failed">분석 실패</p>
                                    <p class="kitDate">
                                        <span>등록 : 2023.09.10</span>
                                        <span>결과 : 2023.09.12</span>
                                    </p>
                                    <a href="https://pf.kakao.com/_mlFyxj/chat" class="qa blue">1:1 상담하기</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="top">
                    <div class="ani"><img src="/images/bg/cat.png" alt=""></div>
                    <div class="ani_name">
                        <p class="name">고양이</p>
                        <p class="birth">2017.08.06</p>
                    </div>
                    <a href="" class="ani_modify"><img src="/images/common/edit_icon.png" alt=""></a>
                </div>
                <div class="btm">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide newKitBtn">
                                <a href=""><p>새로운<br>키트 등록하기</p></a>
                            </div>
                            <div class="swiper-slide">
                                <div class="kit_wrap">
                                    <p class="kitNum">2회차</p>
                                    <p class="failed"></p>
                                    <p class="kitDate">
                                        <span>등록 : 2023.09.10</span>
                                        <span>결과 : 2023.09.12</span>
                                    </p>
                                    <a href="https://pf.kakao.com/_mlFyxj/chat" class="qa blue">1:1 상담하기</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="kit_wrap">
                                    <p class="kitNum">1회차</p>
                                    <p class="failed"></p>
                                    <p class="kitDate">
                                        <span>등록 : 2023.09.10</span>
                                        <span>결과 : 2023.09.12</span>
                                    </p>
                                    <a href="javascript:;" class="getDone none">수거중</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="top">
                    <div class="ani"><img src="/images/bg/dog.png" alt=""></div>
                    <div class="ani_name">
                        <p class="name">강아지</p>
                        <p class="birth">2017.08.06</p>
                    </div>
                    <a href="" class="ani_modify"><img src="/images/common/edit_icon.png" alt=""></a>
                </div>
                <div class="btm">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide newKitBtn">
                                <a href=""><p>새로운<br>키트 등록하기</p></a>
                            </div>
                            <div class="swiper-slide">
                                <div class="kit_wrap">
                                    <p class="kitNum">2회차</p>
                                    <p class="failed"></p>
                                    <p class="kitDate">
                                        <span>등록 : 2023.09.15</span>
                                        <span>결과 : -</span>
                                    </p>
                                    <a href="" class="getApply blue">수거 신청하기</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="kit_wrap">
                                    <p class="kitNum">1회차</p>
                                    <p class="failed"></p>
                                    <p class="kitDate">
                                        <span>등록 : 2023.09.10</span>
                                        <span>결과 : 2023.09.12</span>
                                    </p>
                                    <a href="" class="checkResult blue">결과 확인하기</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="no_list"><a href="/aniRagis">새로운 반려동물 등록하기</a></li>
        </ul>
    </div>
</div>
@endSection

@push('styles')
<link rel="stylesheet" href="{{asset('css/home.css')}}">
@endPush



<!--
    *** TO DO ***

    ✅ 반려 동물 리스트 없을 때 '새로운 반려동물 등록하기' 버튼 노출 ! -> 반려 동물 리스트 있을 땐 숨김 !
    ✅ 키트 리스트 출력 시 '새로운 키트 등록하기' 버튼 제일 왼쪽 고정 !
    ✅ 리스트는 '최신순(등록순)' 노출 ! (반려 동물 순서 , 키트 리스트 순서 동일)
    ✅ '새로운 키트 등록하기' 버튼 클릭 후 페이지 이동 시 자동으로 해당 반려 동물 선택 !
    ✅ 결과 확인하기, 문진표 작성하기, 수거 신청 등 버튼 모두 해당 반려 동물 데이터 페이지로 이동 !
    ✅ 반려 동물 데이터 이름 / 생일 불러오기 ! + 고양이 = 고양이 / 강아지 = 강아지 이미지 자동 노출 
    ✅ 반려 동물 리스트 하단엔 '새로운 반려동물 등록하기' 버튼 고정 필수 !
    ✅ 분석 실패 시 1:1 상담하기 버튼 + .failed 에 분석 실패 문구 노출 !
    
-->