<!-- 결과 확인 -->
@extends('common.skeleton')
@section('content')
<div class="getResult">
    <div class="result_nav">
        <ul>
            <li data-target="resultAll" class="act"><span>종합결과</span></li>
            <li data-target="result_01"><span>치주질환</span></li>
            <li data-target="result_02"><span>구취</span></li>
            <li data-target="result_03"><span>공통감염</span></li>
        </ul>
    </div>
    <div class="conTop">
        <div class="logo"><img src="/images/common/dental_logoB.png" alt=""></div>
        <p class="logoUnderTxt"><span>구강 미생물</span> 검사 결과</p>
        <div class="ani">
            <div class="ani_img"><img src="/images/bg/dog.png" alt=""></div>
            <div class="ani_name">
                <p class="name">강아지</p>
                <p><span class="birth"><img src="/images/common/heart_icon.png" alt="">2019.12.20</span><span><img src="/images/common/male_icon.png" alt="남자"><img src="/images/common/female_icon.png" alt="여자" style="display:none;">아메리칸 코카스파니엘</span></p>
            </div>
            <div class="ani_info">
                <dl>
                    <dt>검사보고일</dt>
                    <dd>2023.09.06</dd>
                </dl>
                <dl>
                    <dt>보호자 이름</dt>
                    <dd>보호자이름열글자까지</dd>
                </dl>
                <dl>
                    <dt>키트번호</dt>
                    <dd>DC33E2P-3880</dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="conMid">
        <div id="resultAll">
            <div class="all all_01">
                <h2 class="bTit">구강 나이 종합 결과</h2>
                <div class="ageBox">
                    <div class="present">
                        <p>현재나이</p>
                        <p class="age"><span>4</span>살 <span>9</span>개월</p>
                    </div>
                    <div class="tooth">
                        <p>구강나이</p>
                        <p class="age"><span>5</span>살 <span>0</span>개월</p>
                        <p class="upDown">3개월<img src="/images/common/up_icon.png" alt=""></p>
                        <!-- <p class="upDown">1개월<img src="/images/common/down_icon.png" alt=""></p> -->
                    </div>
                </div>
                <div class="score">
                    <p class="sTit">구강미생물 점수</p>
                    <ul>
                        <li>
                            <div class="img"><img src="/images/result/life_01.png" alt=""></div>
                            <p>
                                <span class="upDown">2개월<img src="/images/common/up_icon.png" alt=""></span>
                                치주질환 위험도
                            </p>
                            <p class="step danger">위험</p>
                        </li>
                        <li>
                            <div class="img"><img src="/images/result/life_02.png" alt=""></div>
                            <p>
                                <span class="upDown">0</span>
                                구취 위험도
                            </p>
                            <p class="step attract">관심</p>
                        </li>
                        <li>
                            <div class="img"><img src="/images/result/life_03.png" alt=""></div>
                            <p>
                                <span class="upDown">1개월<img src="/images/common/down_icon.png" alt=""></span>
                                공통감염 위험도
                            </p>
                            <p class="step care">주의</p>
                        </li>
                    </ul>
                </div>
                <div class="score">
                    <p class="sTit">생활습관 점수</p>
                    <ul>
                        <li>
                        <div class="img"><img src="/images/result/tooth_01.png" alt=""></div>
                            <p>
                                <span class="upDown">1개월<img src="/images/common/up_icon.png" alt=""></span>
                                구강관리
                            </p>
                            <p class="step good">양호</p>
                        </li>
                        <li>
                            <div class="img"><img src="/images/result/tooth_02.png" alt=""></div>
                            <p>
                                <span class="upDown">0</span>
                                구취 관리
                            </p>
                            <p class="step attract">관심</p>
                        </li>
                        <li>
                            <div class="img"><img src="/images/result/tooth_03.png" alt=""></div>
                            <p>
                                <span class="upDown">1개월<img src="/images/common/down_icon.png" alt=""></span>
                                통증 관리
                            </p>
                            <p class="step care">주의</p>
                        </li>
                    </ul>
                </div>
                <div class="line"></div>
                <div class="explain">
                    <h2><span>구강 관리</span>의 중요성</h2>
                    <p>반려동물의 치아 관리는 보호자와의 행복하고 건강한 삶을 위해 중요한 요소입니다. 통계적으로 2살 이상의 강아지와 고양이 중 약 80%는 치주질환을 갖고 있다고 해요.</p>
                    <p>특히나 방치된 치주질환으로 인해 전신으로 세균이나 염증물질이 이동할 수 있어요. 유해물질들이 전신으로 이동하여 심장판막에 영향을 주어 심내막염이나 다른 심장질환을 일으킬 수 있습니다. 또한 콩팥질환, 턱골절, 안구질환 등의 전신질환을 유발합니다. 실제로 심한 치주질환으로 인해 턱뼈가 골절되어 동물병원에 내원하는 경우는 매우 빈번해요. </p>
                    <p>아이들의 수명연장과 함께하는 건강한 삶을 위해, 일상적인 구강관리와, 정기적인 치과검진은 필수입니다.</p>
                </div>
            </div>
            <div class="all all_02">
                <h2 class="sTit">구강미생물 종합 결과</h2>
                <div class="rangeInfo"><p><span></span>건강범위</p><p><span></span>검사결과</p></div>
                <div class="toothR">
                    <P class="toothTit"><span>치주질환/구취</span> 유발 미생물</P>
                    <ul>
                        <li class="aggre">
                            <p class="step care">주의</p>
                            <div class="toothName">
                                <p>
                                    <span>Aggregatibacter actinomycetemcomitans</span>
                                    아그레가티박터 악티노마이세템코미탄스
                                    <a href="javascript:;" data-pop="t_aggre" class="dimOpenBtn"><img src="/images/common/question_icon.png" alt=""></a>
                                </p>
                            </div>
                            <div class="rangeBox all">
                                <p class="rod all"></p>
                                <p class="num">
                                    <span class="act">0</span>
                                    <span class="act">10</span>
                                    <span class="act">20</span>
                                    <span class="act">30</span>
                                    <span class="act">40</span>
                                    <span class="act">50</span>
                                    <span>60</span>
                                    <span>70</span>
                                    <span>80</span>
                                    <span>90</span>
                                    <span>100</span>
                                </p>
                                <p class="range all"></p>
                                <p class="loca"><span></span></p>
                            </div>
                        </li>
                        <li class="porphy">
                            <p class="step good">건강</p>
                            <div class="toothName">
                                <p>
                                    <span>Porphyromonas gingivalis</span>
                                    포르피로모나스 진지발리스
                                    <a href="javascript:;" data-pop="t_porphy" class="dimOpenBtn"><img src="/images/common/question_icon.png" alt=""></a>
                                </p>
                            </div>
                            <div class="rangeBox all">
                                <p class="rod all"></p>
                                <p class="num">
                                    <span>0</span>
                                    <span>10</span>
                                    <span class="act">20</span>
                                    <span class="act">30</span>
                                    <span class="act">40</span>
                                    <span>50</span>
                                    <span>60</span>
                                    <span>70</span>
                                    <span>80</span>
                                    <span>90</span>
                                    <span>100</span>
                                </p>
                                <p class="range all"></p>
                                <p class="loca"><span></span></p>
                            </div>
                        </li>
                        <li class="tanner">
                            <p class="step good">건강</p>
                            <div class="toothName">
                                <p>
                                    <span>Tannerella forsythia</span>
                                    테너렐라 포사이시아<a href="javascript:;" data-pop="t_tanner" class="dimOpenBtn"><img src="/images/common/question_icon.png" alt=""></a>
                                </p>
                            </div>
                            <div class="rangeBox all">
                                <p class="rod all"></p>
                                <p class="num">
                                    <span>0</span>
                                    <span>10</span>
                                    <span class="act">20</span>
                                    <span class="act">30</span>
                                    <span class="act">40</span>
                                    <span>50</span>
                                    <span>60</span>
                                    <span>70</span>
                                    <span>80</span>
                                    <span>90</span>
                                    <span>100</span>
                                </p>
                                <p class="range all"></p>
                                <p class="loca"><span></span></p>
                            </div>
                        </li>
                        <li class="trepo">
                            <p class="step good">건강</p>
                            <div class="toothName">
                                <p>
                                    <span>Treponema denticola</span>
                                    트리포네마 덴티콜라<a href="javascript:;" data-pop="t_trepo" class="dimOpenBtn"><img src="/images/common/question_icon.png" alt=""></a>
                                </p>
                            </div>
                            <div class="rangeBox all">
                                <p class="rod all"></p>
                                <p class="num">
                                    <span>0</span>
                                    <span>10</span>
                                    <span class="act">20</span>
                                    <span class="act">30</span>
                                    <span class="act">40</span>
                                    <span>50</span>
                                    <span>60</span>
                                    <span>70</span>
                                    <span>80</span>
                                    <span>90</span>
                                    <span>100</span>
                                </p>
                                <p class="range all"></p>
                                <p class="loca"><span></span></p>
                            </div>
                        </li>
                        <li class="eu">
                            <p class="step good">건강</p>
                            <div class="toothName">
                                <p>
                                    <span>Eubacterium nodatum</span>
                                    유박테리움 노다툼<a href="javascript:;" data-pop="t_eu" class="dimOpenBtn"><img src="/images/common/question_icon.png" alt=""></a>
                                </p>
                            </div>
                            <div class="rangeBox all">
                                <p class="rod all"></p>
                                <p class="num">
                                    <span>0</span>
                                    <span>10</span>
                                    <span class="act">20</span>
                                    <span class="act">30</span>
                                    <span class="act">40</span>
                                    <span>50</span>
                                    <span>60</span>
                                    <span>70</span>
                                    <span>80</span>
                                    <span>90</span>
                                    <span>100</span>
                                </p>
                                <p class="range all"></p>
                                <p class="loca"><span></span></p>
                            </div>
                        </li>
                        <li class="cam">
                            <p class="step good">건강</p>
                            <div class="toothName">
                                <p>
                                    <span>Fusobacterium nucleatum</span>
                                    푸소박테리움 뉴클레아툼<a href="javascript:;" data-pop="t_cam" class="dimOpenBtn"><img src="/images/common/question_icon.png" alt=""></a>
                                </p>
                            </div>
                            <div class="rangeBox all">
                                <p class="rod all"></p>
                                <p class="num">
                                    <span>0</span>
                                    <span>10</span>
                                    <span class="act">20</span>
                                    <span class="act">30</span>
                                    <span class="act">40</span>
                                    <span>50</span>
                                    <span>60</span>
                                    <span>70</span>
                                    <span>80</span>
                                    <span>90</span>
                                    <span>100</span>
                                </p>
                                <p class="range all"></p>
                                <p class="loca"><span></span></p>
                            </div>
                        </li>
                        <li class="fuso">
                            <p class="step good">건강</p>
                            <div class="toothName">
                                <p>
                                    <span>Campylobacter rectus</span>
                                    캄필로박터 렉투스<a href="javascript:;" data-pop="t_fuso" class="dimOpenBtn"><img src="/images/common/question_icon.png" alt=""></a>
                                </p>
                            </div>
                            <div class="rangeBox all">
                                <p class="rod all"></p>
                                <p class="num">
                                    <span>0</span>
                                    <span>10</span>
                                    <span class="act">20</span>
                                    <span class="act">30</span>
                                    <span class="act">40</span>
                                    <span>50</span>
                                    <span>60</span>
                                    <span>70</span>
                                    <span>80</span>
                                    <span>90</span>
                                    <span>100</span>
                                </p>
                                <p class="range all"></p>
                                <p class="loca"><span></span></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="toothR">
                    <P class="toothTit"><span>공통감염</span> 유발 미생물</P>
                    <ul>
                        <li class="salmo">
                            <p class="step care">주의</p>
                            <div class="toothName">
                                <p>
                                    <span>Salmonella typhimurium</span>
                                    살모넬라 타이피뮤리움<a href="javascript:;" data-pop="t_salmo" class="dimOpenBtn"><img src="/images/common/question_icon.png" alt=""></a>
                                </p>
                            </div>
                            <div class="rangeBox all">
                                <p class="rod all"></p>
                                <p class="num">
                                    <span>0</span>
                                    <span>10</span>
                                    <span>20</span>
                                    <span>30</span>
                                    <span>40</span>
                                    <span>50</span>
                                    <span>60</span>
                                    <span class="act">70</span>
                                    <span class="act">80</span>
                                    <span class="act">90</span>
                                    <span>100</span>
                                </p>
                                <p class="range all"></p>
                                <p class="loca"><span></span></p>
                            </div>
                        </li>
                        <li class="methic">
                            <p class="step good">건강</p>
                            <div class="toothName">
                                <p>
                                    <span>Methicillin Resistant Staphylococcus Aureus</span>
                                    메티실린 저항성 포도상구균<a href="javascript:;" data-pop="t_methic" class="dimOpenBtn"><img src="/images/common/question_icon.png" alt=""></a>
                                </p>
                            </div>
                            <div class="rangeBox all">
                                <p class="rod all"></p>
                                <p class="num">
                                    <span>0</span>
                                    <span>10</span>
                                    <span class="act">20</span>
                                    <span class="act">30</span>
                                    <span class="act">40</span>
                                    <span>50</span>
                                    <span>60</span>
                                    <span>70</span>
                                    <span>80</span>
                                    <span>90</span>
                                    <span>100</span>
                                </p>
                                <p class="range all"></p>
                                <p class="loca"><span></span></p>
                            </div>
                        </li>
                        <li class="vanco">
                            <p class="step good">건강</p>
                            <div class="toothName">
                                <p>
                                    <span>Vancomycin Resistant Enterococcus</span>
                                    반코마이신 저항성 장알균<a href="javascript:;" data-pop="t_vanco" class="dimOpenBtn"><img src="/images/common/question_icon.png" alt=""></a>
                                </p>
                            </div>
                            <div class="rangeBox all">
                                <p class="rod all"></p>
                                <p class="num">
                                    <span>0</span>
                                    <span>10</span>
                                    <span class="act">20</span>
                                    <span class="act">30</span>
                                    <span class="act">40</span>
                                    <span>50</span>
                                    <span>60</span>
                                    <span>70</span>
                                    <span>80</span>
                                    <span>90</span>
                                    <span>100</span>
                                </p>
                                <p class="range all"></p>
                                <p class="loca"><span></span></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="result_01">
            <div class="r01_01 res01">
                <h2 class="bbTit"><span>구강 미생물</span> 검사 결과</h2>
                <p class="bTit">치주질환 결과</p>
                <div class="r01_box rbox">
                    <p>치주질환 위험도<a href="javascript:;" data-pop="perio" class="dimOpenBtn"><img src="/images/common/question_icon.png" alt=""></a></p>
                    <div class="rangeBox r01 perio">
                        <div class="rod r01">
                            <span class="good"></span>
                            <span class="attract"></span>
                            <span class="care"></span>
                            <span class="danger"></span>
                        </div>
                        <p class="num">
                            <span>0</span>
                            <span>10</span>
                            <span>20</span>
                            <span>30</span>
                            <span>40</span>
                            <span>50</span>
                            <span>60</span>
                            <span>70</span>
                            <span>80</span>
                            <span>90</span>
                            <span>100</span>
                        </p>
                        <p class="loca r01"><span>55</span><span class="dot"></span></p>
                        <div class="rangeInfo r01">
                            <h3 class="into attract">관심</h3>
                            <p>치주질환을 유발하는 미생물의 종류 및 농도를 볼 때 치주질환이 시작될 가능성이 있는 상태입니다. 실제로 치아에 문제가 없는지 보호자의 확인이 필요합니다.</p>
                        </div>
                    </div>
                </div>
                <div class="explain">
                    <h2><span>치주질환</span> 이란?</h2>
                    <p>반려동물도 치아와 그 주위에 질환이 발생합니다. 이를 치주질환(periodontal disease)이라고 하는데요. 사람과 마찬가지로, 병의 정도에 따라 치은염(gingivitis)과 치주염(periodontitis)으로 나뉩니다.</p>
                    <p>비교적 가볍고 회복이 빠른 형태의 치주질환이면서 잇몸, 즉 연조직에만 국한된 형태를 치은염이라 하고, 이러한 염증이 잇몸과 잇몸뼈 주변까지 진행된 경우를 치주염이라고 합니다.</p>
                </div>
            </div>
            <div class="r01_02 res02">
                <p class="bTit">치주질환 증상</p>
                <div class="imgSlide">
                    <div class="swiper">
                        <ul class="swiper-wrapper">
                            <li class="swiper-slide">
                                <div class="img"></div>
                                <p>구취</p>
                            </li>
                            <li class="swiper-slide">
                                <div class="img"></div>
                                <p>구강 내 출혈</p>
                            </li>
                            <li class="swiper-slide">
                                <div class="img"></div>
                                <p>씹기 어려움</p>
                            </li>
                            <li class="swiper-slide">
                                <div class="img"></div>
                                <p>콧물, 재채기</p>
                            </li>
                            <li class="swiper-slide">
                                <div class="img"></div>
                                <p>입을 만지는 행동</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="explain">
                    <h2><span>치주질환</span> 원인</h2>
                    <p>치주 질환의 직접적인 원인은 치아에 지속적으로 형성되는 치태(Dental plaque)라는 세균막입니다.</p>
                    <p>치태는 끈적끈적하고 무색이며, 이것이 제거되지 않고, 차곡차곡 쌓여서 단단해지면 치석(Dental tartar)이 되지요. 강아지와 고양이에서 치주질환의 주된 원인은 치태와 치석입니다.</p>
                </div>
            </div>
            <div class="r01_03 res03">
                <div class="tip">
                    <h2><p><span>반려생활 팁</span></p>치주질환 관리방법</h2>
                    <div class="tipCon">
                        <p class="tipNum"><span>1</span>양치 자주 시켜주기</p>
                        <p>치주질환은 주기적인 양치질이 제일 중요합니다. 수의학에서 권고하는 가장 효과적인 칫솔질 주기는 최소 1주에 3회이상의 양치입니다.</p>
                        <p class="tipNum"><span>2</span>치아 관리 제품 사용하기</p>
                        <p>인증된 치아 관련 제품은(영양제 혹은 장난감)은 치태와 치석 형성을 억제하고, 치은염을 줄여줍니다.</p>
                        <p class="tipNum"><span>3</span>도움이 되는 사료 선택하기</p>
                        <p>습식사료보단 건식사료가 치아관리에 도움이 된다고 알려져 있어요. 특히 섬유질과 폴리인산염은 소동물에서 치석과 치태 형성을 억제해주는 성분으로, 구강질병 관리 처방사료에 많이 들어있습니다.</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="result_02">
            <div class="r02_01 res01">
                <p class="bTit">구취 결과</p>
                <div class="r02_box rbox">
                    <p>구취 위험도<a href="javascript:;" data-pop="breath" class="dimOpenBtn"><img src="/images/common/question_icon.png" alt=""></a></p>
                    <div class="rangeBox r02 breath">
                        <div class="rod r02">
                            <span class="good"></span>
                            <span class="attract"></span>
                            <span class="care"></span>
                        </div>
                        <p class="num">
                            <span>0</span>
                            <span>10</span>
                            <span>20</span>
                            <span>30</span>
                            <span>40</span>
                            <span>50</span>
                            <span>60</span>
                            <span>70</span>
                            <span>80</span>
                            <span>90</span>
                            <span>100</span>
                        </p>
                        <p class="loca r02"><span>89</span><span class="dot"></span></p>
                        <div class="rangeInfo r02">
                            <h3 class="info care">주의</h3>
                            <p>구취를 유발하는 미생물의 종류 및 농도에 주의가 필요한 상태입니다. 구취가 심하면 내부 장기에 원인이 있을 수 있으니 병원 방문을 통해 적절한 구강 관리가 필요합니다.</p>
                        </div>
                    </div>
                </div>
                <div class="explain">
                    <h2><span>구취</span>이란?</h2>
                    <p>강아지와 고양이에서의 구취(입냄새)는 사람에서의 정의와 조금은 다릅니다. 사람에서는 입냄새를 생리적, 병리적, 주관적 입냄새로 구분하지만 반려동물에서의 구취는 오로지 병리적인 부분에 근거하여 정의합니다.</p>
                    <p>강아지와 고양이 모두, 구취의 주된 원인은 주로 치아와 그 주변에 질병이 발생하는 치주질환(Periodontal disease)입니다. 또한 간과 콩팥, 상부 호흡기와 당뇨 등과 같은 전신적인 질환에 의해서도 구취가 발생할 수 있습니다.</p>
                </div>
            </div>
            <div class="r02_02 res02">
                <p class="bTit">치주질환 증상</p>
                <div class="imgSlide">
                    <div class="swiper">
                        <ul class="swiper-wrapper">
                            <li class="swiper-slide">
                                <div class="img"></div>
                                <p>치태와 치석</p>
                            </li>
                            <li class="swiper-slide">
                                <div class="img"></div>
                                <p>과도한 침흘림</p>
                            </li>
                            <li class="swiper-slide">
                                <div class="img"></div>
                                <p>털 엉킴</p>
                            </li>
                            <li class="swiper-slide">
                                <div class="img"></div>
                                <p>씹기 어려움</p>
                            </li>
                            <li class="swiper-slide">
                                <div class="img"></div>
                                <p>음식 흘림</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="explain">
                    <h2><span>구취</span> 원인</h2>
                    <p>강아지와 고양이에서 구취를 유발하는 주된 공통 원인은 다음과 같습니다.</p>
                    <p>
                        <span>①</span>세균<br>
                        <span>②</span>치태와 치석<br>
                        <span>③</span>치아 혹은 잇몸 사이에 쌓인 음식물<br>
                        <span>④</span>출혈<br>
                        <span>⑤</span>구강 내 종양이나 괴사된 조직
                    </p>
                </div>
            </div>
            <div class="r02_03 res03">
                <div class="tip">
                    <h2><p><span>반려생활 팁</span></p>구취 관리방법</h2>
                    <div class="tipCon">
                        <p class="tipNum"><span>1</span>양치 자주 시켜주기</p>
                        <p>치주질환과 마찬가지로 구취 관리에도 양치가 가장 중요합니다. 칫솔질을 처음 시작한다면, 양치 도구에 흥미를 갖게 해주세요. 바로 치약을 칫솔에 묻혀서 시도하는 것보다 먼저 반려동물용 치약에 흥미를 갖게 해주면서 조금씩 친근하게 접근해 주어야 합니다.</p>
                        <p>특히 아연 성분이 들어간 제품은 치석과 치태, 그리고 입냄새 형성 억제에 도움을 준다고 알려져 있어요.</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="result_03">
            <div class="r03_01 res01">
                <p class="bTit">공통감염 결과</p>
                <div class="r03_box rbox">
                    <p>공통감염 위험도<a href="javascript:;" data-pop="common" class="dimOpenBtn"><img src="/images/common/question_icon.png" alt=""></a></p>
                    <div class="rangeBox r03">
                        <div class="detecBox">
                            <ul>
                                <li><p>장알균</p><span class="detec">검출</span></li>
                                <li><p>살모넬라균</p><span class="noneDetec">미검출</span></li>
                                <li><p>포도상구균</p><span class="noneDetec">미검출</span></li>
                            </ul>
                        </div>
                        <div class="rangeInfo r03">
                            <h3 class="info care">주의</h3>
                            <p>사람과 동물에게 공통으로 감염될 수 있는 위험균이 검출되었습니다. 함께 생활하는 환경과 건강에 대한 점검이 필요합니다. 공통감염 결과 내용을 참고하여 적극적인 관리를 시작해보세요.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="res04">
                <span class="detec">검출</span>
                <p class="res04Btit"><span>VRE infection</span>반코마이신 저항성 장알균 감염증</p>
                <p class="res04Stit">정의</p>
                <p>반코마이신 내성 장알균(VRE) 감염증이란, 항생제인 반코마이신에 내성을 보이는 장알균에 의한 감염을 의미합니다. 사람과 동물에서 주로 위장관, 비뇨생식기계에 존재하는 균입니다. 독성이 비교적 약하여 건강한 상태에서는 질병을 일으키지 않으나 나이가 많고 면역 저하가 된 경우 요로 감염 등을 유발하곤 합니다.</p>
                <p class="res04Stit">증상</p>
                <p>VRE는 일반적으로 하부 요로계 감염을 일으키며, 이로 인해 배뇨곤란, 소변 횟수 증가, 피부 염증 등 복합적인 증상이 발생할 수 있습니다. 동물에서도 사람과 유사하게, 요로기계 수술로 인해 증상이 나타나기도 합니다.</p>
                <p class="res04Stit">관리</p>
                <p>반코마이신 내성 장알균은 다른 종류의 세균으로 전파될 수 있으므로 감염 관리가 필요합니다. 주로 장알균은 회음부나 장내에 서식하므로 배뇨, 배변 시 주변을 오염시킬 가능성이 높아 청결한 배변 환경을 유지하는 것이 좋습니다. 사람의 경우에는 손씻기 지침을 제대로 지키는 것이 가장 중요합니다. 동물의 경우에는 동종 간 접촉으로 인한 전파는 드문 편입니다. 하지만 아이들을 만질 때는 위생에 신경을 써야 합니다.</p>
            </div>
            <div class="res04">
                <span class="noneDetec">미검출</span>
                <p class="res04Btit"><span>Salmonellosis</span>살모넬라증</p>
                <p class="res04Stit">정의</p>
                <p>살모넬라는 막대 모양의 세균으로, 사람과 동물의 소화관에서 서식합니다. 주로 상하거나 날 것의 음식들을 먹어서 감염되는 경우가 가장 많으며, 드물게는 다른 동물의 분변이나 사체를 통해 전파되는 경우가 보고됩니다. 주로 늦은 겨울이나 이른 봄에 주로 발생하는 것으로 알려져 있습니다. </p>
                <p class="res04Stit">증상</p>
                <p>살모넬라증은 무증상에서부터 구토, 설사, 혈변, 기력저하, 식욕저하 등을 일으키곤 합니다. 특히나 고양이의 경우 범백혈구감소증인 상태에서 살모넬라에 걸리면 예후가 악화될 수 있습니다. 조금이라도 관련된 증상이 있다면 동물병원 검진을 권장합니다.</p>
                <p class="res04Stit">관리</p>
                <p>여러 마리가 함께 지내는 경우에는 동종 간 분변을 통한 전파가 발생하므로, 소화기 증상이 발생하는 경우에는 반드시 격리가 필요합니다. 또한 함께 사용하는 물건(그릇, 장난감 등)으로 재감염 되는 경우가 있으므로 주기적인 살균, 소독이 매우 중요합니다. 급여하는 제품이 상하지 않았는지 각별히 신경 써주시는 것도 필요합니다.</p>
            </div>
            <div class="res04">
                <span class="noneDetec">미검출</span>
                <p class="res04Btit"><span>MRSA infection</span>메티실린 저항성 포도상구균 감염증</p>
                <p class="res04Stit">정의</p>
                <p>메티실린 저항성 포도상구균(MRSA)은 공통감염균 세 가지 중 수의학에서 가장 중요하게 다뤄지는 세균입니다. 포도상구균은 동그란 모양으로 반려동물과 사람에게서 정상적인 상주 박테리아의 일부로 흔히 발견됩니다. 그러나 메티실린을 비롯한 특정한 항생제에 내성이 발생한 포도상구균은 요로 감염 및 폐렴과 같은 다른 감염을 유발할 수 있습니다.</p>
                <p class="res04Stit">증상</p>
                <p>MRSA는 보통 강아지와 고양이에서 피부 문제를 유발합니다. 드물게는 폐렴, 콧물, 재채기, 방광염이 나타나기도 합니다. 메티실린 저항성 포도상구균이 가장 문제가 되는 경우는 해당 세균이 혈관 내 감염 시, 일반적인 항생제로는 치료가 되지 않아 패혈증으로 인해 심각한 문제를 야기할 수 있는 부분에 있습니다.</p>
                <p class="res04Stit">관리</p>
                <p>MRSA 감염을 예방할 수 있는 백신은 아직 없습니다.  따라서 감염이 되기 전, 자주 사용하는 장난감과 식기류, 화장실 환경에 대한 정기적인 살균이 중요합니다. 특히 피부 면역이 약해지면 감염되는 경우가 많으므로, 평소에 면역을 증가시켜주는 여러 가지 방법을 추천드립니다. (꾸준한 빗질, 약용 샴푸 목욕, 오메가와 유산균의 정기적 섭취)</p>
            </div>
        </div>
    </div>
</div>


<div class="dim up cell" id="t_aggre">
    <div class="popBox">
        <div class="top">
            <h2>아그레가티박터<br>악티노마이세템코미탄스</h2>
            <a href="javascript:;" class="dimClosed"><img src="/images/common/close_icon.png" alt=""></a>
        </div>
        <div class="con">
            <p>급성 진행성 및 만성 치주염과 연관</p>
            <div class="img"><img src="/images/result/aggregati.png" alt=""></div>
        </div>
        <div class="btn"><a href="javascript:;" class="dimClosed">확인</a></div>
    </div>
</div>
<div class="dim up cell" id="t_porphy">
    <div class="popBox">
            <div class="top">
            <h2>포르피로모나스 진지발리스</h2>
            <a href="javascript:;" class="dimClosed"><img src="/images/common/close_icon.png" alt=""></a>
        </div>
        <div class="con">
            <p>잇몸 염증 및 치조골 파괴를 유발</p>
            <div class="img"><img src="/images/result/porphyro.png" alt=""></div>
        </div>
        <div class="btn"><a href="javascript:;" class="dimClosed">확인</a></div>
    </div>   
</div>
<div class="dim up cell" id="t_tanner">
    <div class="popBox">
        <div class="top">
            <h2>테너렐라 포사이시아</h2>
            <a href="javascript:;" class="dimClosed"><img src="/images/common/close_icon.png" alt=""></a>
        </div>
        <div class="con">
            <p>구강 내 상피세포에 침투하여 조직을 파괴</p>
            <div class="img"><img src="/images/result/tannerella.png" alt=""></div>
        </div>
        <div class="btn"><a href="javascript:;" class="dimClosed">확인</a></div>
    </div>
</div>
<div class="dim up cell" id="t_trepo">
    <div class="popBox">
        <div class="top">
            <h2>트리포네마 덴티콜라</h2>
            <a href="javascript:;" class="dimClosed"><img src="/images/common/close_icon.png" alt=""></a>
        </div>
        <div class="con">
            <p>구강 내 유해인자 생성을 유도</p>
            <div class="img"><img src="/images/result/treponema.png" alt=""></div>
        </div>
        <div class="btn"><a href="javascript:;" class="dimClosed">확인</a></div>
    </div>
</div>
<div class="dim up cell" id="t_eu">
    <div class="popBox">
        <div class="top">
            <h2>유박테리움 노다툼</h2>
            <a href="javascript:;" class="dimClosed"><img src="/images/common/close_icon.png" alt=""></a>
        </div>
        <div class="con">
            <p>치조골 감소와 만성 치주염을 유발</p>
            <div class="img"><img src="/images/result/eubacterium.png" alt=""></div>
        </div>
        <div class="btn"><a href="javascript:;" class="dimClosed">확인</a></div>
    </div>
</div>
<div class="dim up cell" id="t_fuso">
    <div class="popBox">
        <div class="top">
            <h2>푸소박테리움 뉴클레아툼</h2>
            <a href="javascript:;" class="dimClosed"><img src="/images/common/close_icon.png" alt=""></a>
        </div>
        <div class="con">
            <p>유해균 응집을 도와 구강 내 치석을 유발</p>
            <div class="img"><img src="/images/result/fuso.png" alt=""></div>
        </div>
        <div class="btn"><a href="javascript:;" class="dimClosed">확인</a></div>
    </div>
</div>
<div class="dim up cell" id="t_cam">
    <div class="popBox">
        <div class="top">
            <h2>캄필로박터 렉투스</h2>
            <a href="javascript:;" class="dimClosed"><img src="/images/common/close_icon.png" alt=""></a>
        </div>
        <div class="con">
            <p>급성치주염, 치근막질환, 치주낭염을 유발</p>
            <div class="img"><img src="/images/result/campylo.png" alt=""></div>
        </div>
        <div class="btn"><a href="javascript:;" class="dimClosed">확인</a></div>
    </div>
</div>
<div class="dim up cell" id="t_salmo">
    <div class="popBox">
        <div class="top">
            <h2>살모넬라 타이피뮤리움</h2>
            <a href="javascript:;" class="dimClosed"><img src="/images/common/close_icon.png" alt=""></a>
        </div>
        <div class="con">
            <p>식중독을 일으키는 대표적 미생물</p>
            <div class="img"><img src="/images/result/salmonella.png" alt=""></div>
        </div>
        <div class="btn"><a href="javascript:;" class="dimClosed">확인</a></div>
    </div>
</div>
<div class="dim up cell" id="t_methic">
    <div class="popBox">
        <div class="top">
            <h2>메티실린 저항성 포도상구균</h2>
            <a href="javascript:;" class="dimClosed"><img src="/images/common/close_icon.png" alt=""></a>
        </div>
        <div class="con">
            <p>메티실린 항생제에 내성이 발생한 포도상구균</p>
            <div class="img"><img src="/images/result/methcillin.png" alt=""></div>
        </div>
        <div class="btn"><a href="javascript:;" class="dimClosed">확인</a></div>
    </div>
</div>
<div class="dim up cell" id="t_vanco">
    <div class="popBox">
        <div class="top">
            <h2>반코마이신 저항성 장알균</h2>
            <a href="javascript:;" class="dimClosed"><img src="/images/common/close_icon.png" alt=""></a>
        </div>
        <div class="con">
            <p>반코마이신 항생제에 내성이 발생한 장알균</p>
            <div class="img"><img src="/images/result/vancomycin.png" alt=""></div>
        </div>
        <div class="btn"><a href="javascript:;" class="dimClosed">확인</a></div>
    </div>
</div>

<div class="dim up res" id="perio">
    <div class="popBox">
        <div class="top">
            <h2>치주질환 위험도 등급 및 점수</h2>
            <a href="javascript:;" class="dimClosed"><img src="/images/common/close_icon.png" alt=""></a>
        </div>
        <ul>
            <li>
                <p>
                    양호<span>0~45</span>
                </p>
                <span class="color good"></span>
            </li>
            <li>
                <p>
                    관심<span>46~70</span>
                </p>
                <span class="color attract"></span>
            </li>
            <li>
                <p>
                    주의<span>71~85</span>
                </p>
                <span class="color care"></span>
            </li>
            <li>
                <p>
                    위험<span>86~100</span>
                </p>
                <span class="color danger"></span>
            </li>
        </ul>
        <div class="btn"><a href="javascript:;" class="dimClosed">확인</a></div>
    </div>
</div>
<div class="dim up res" id="breath">
    <div class="popBox">
        <div class="top">
            <h2>구취 위험도 등급 및 점수</h2>
            <a href="javascript:;" class="dimClosed"><img src="/images/common/close_icon.png" alt=""></a>
        </div>
        <ul>
            <li>
                <p>
                    양호<span>0~55</span>
                </p>
                <span class="color good"></span>
            </li>
            <li>
                <p>
                    관심<span>56~80</span>
                </p>
                <span class="color attract"></span>
            </li>
            <li>
                <p>
                    주의<span>81~100</span>
                </p>
                <span class="color care"></span>
            </li>
        </ul>
        <div class="btn"><a href="javascript:;" class="dimClosed">확인</a></div>
    </div>
</div>
<div class="dim up res" id="common">
    <div class="popBox">
        <div class="top">
            <h2>치주질환 위험도 등급 및 점수</h2>
            <a href="javascript:;" class="dimClosed"><img src="/images/common/close_icon.png" alt=""></a>
        </div>
        <p>공통 감염균 중 1종이라도 검출된 경우 종합 등급이 <span>‘주의’</span>로 표기됩니다.</p>
        <ul>
            <li>
                <p>
                    양호<span>미검출</span>
                </p>
                <span class="color noneDetec"></span>
            </li>
            <li>
                <p>
                    주의<span>검출</span>
                </p>
                <span class="color detec"></span>
            </li>
        </ul>
        <div class="btn"><a href="javascript:;" class="dimClosed">확인</a></div>
    </div>
</div>


@endSection

@push('styles')
<link rel="stylesheet" href="{{asset('css/getResult.css')}}">
@endPush



<!--
    *** TO DO ***

    // class 명 !!!! 
    ✅ 종합결과 아이콘 쪽 => 구강미생물 점수 , 생활습관 점수 : good 양호 / attract 관심 / care 주의 / danger 위험
    ✅ 유발 미생물 => good 건강 / care 주의 
    ✅ 미생물 검사 결과 그래프 =>  good 파랑 / attract 초록 / care 빨강 / danger 보라 
    ✅ 미생물 검사 결과 그래프 텍스트 밑줄 => good 양호 / attract 관심 / care 주의 / danger 위험
    ✅ 공통감염결과 => detec 검출 / noneDetec 미검출

    ✅ 구강미생물 종합 위치 : ex. 30일때 : 30% - 10px ==> 10px 씩 빼줘야 위치 맞습니다 !
    ✅ 구강미생물 검사 결과 위치 : ex. 44일때 : 44% - 22pz ==> 22px 씩 빼줘야 위치 맞습니다 !

-->