
// 딤 열기
let scrollPosition = 0;
$('.dimOpenBtn').on('click',function(e){
    e.preventDefault();
    const popName = $(this).attr('data-pop');
    scrollPosition = window.pageYOffset;
    $('.dim#'+popName).fadeIn();
    $('.dim#'+popName).addClass('on');
    $('body').addClass('off');
    $('body').css({
        "top" : `-${scrollPosition}px`
    });
});

// 딤 닫기
$('.dimClosed').each(function(){
    $(this).on('click',function(e){
        e.preventDefault();
        $(this).parents('.dim').fadeOut();
        $(this).parents('.dim').removeClass('on');
        $('body').removeClass('off');
        $('body').css({
            "top" : "auto"
        });
        window.scrollTo(0, scrollPosition);
    });
});
    

// 반려동물 리스트 
$('.animodify_list .list ul li').each(function(){
    $(this).find('a').click(function(){
        $(this).parent('li').siblings().removeClass('on');
        $(this).parent('li').addClass('on');
    });
});



// 문진표
// 증상없음 선택 시 전체 해제
$('.noneCheck input').click(function(){
    if($(this).is(':checked')){
        $('.noneCheck').siblings().children('input').prop('checked', false);
    }else{

    }
});

// 나머지 선택 시 증상없음 해제
$('.con label:not(.noneCheck)').each(function(){
    $(this).children('input').click(function(){
        if($(this).is(':checked')){
            $('.noneCheck input').prop('checked', false);
        }else {

        }
    });
});


// 키트 리스트 스와이퍼
new Swiper('.btm .swiper', {
    spaceBetween: 8,
    slidesOffsetBefore : 16,
    slidesOffsetAfter : 16,
    slidesPerView: 'auto',
    loop : false,
    observer: true,
    observeParents: true,
});


// 키트 등록 스와이퍼
new Swiper('.kitCon .swiper', {
    slidesPerView: 1,
    loop : true,
    observer: true,
    observeParents: true,
    pagination: {
        el: '.kitCon .swiper-pagination',
    },
    autoplay: {     
        delay: 3000,
        disableOnInteraction: false, 
    },
});

// 결과 페이지 네비
result_tabH = $('.result_nav').height();
header = $('header');
headerHeight = header.outerHeight(true);

$(window).on('scroll', function(){
    var _this = $(this);
    scrollTop = _this.scrollTop();
    result = $('.result_nav ul');

    $('.conMid > div').each(function(){
        var contTop = $(this).offset().top - result_tabH - headerHeight - 100;
        if(scrollTop >= contTop){
            var idChk = $(this).attr('id');
            $('.result_nav ul li').each(function(){
                var id = $(this).data('target');
                if(idChk == id){
                    $(this).addClass("act").siblings().removeClass("act");
                }
            });
        }
    });

});

$('.result_nav ul li').on('click', function(){
    var target = $(this).data('target');
    $('html, body').animate({scrollTop: $('#'+target).offset().top - result_tabH - headerHeight -30}, 500);
});

//결과 페이지 스와이퍼

// 키트 리스트 스와이퍼
new Swiper('.res02 .swiper', {
    spaceBetween: 16,
    slidesOffsetAfter : 16,
    slidesPerView: 2.5,
    loop : false,
    observer: true,
    observeParents: true,
});