
// 유효성 검사
const nameCheck = /^[ㄱ-ㅎ가-힣a-zA-Z0-9]+$/;
const nameCheck2 = /^[ㄱ-ㅎ가-힣a-zA-Z]+$/;
const passCheck = /^[0-9]{4,4}$/;

// 반려동물 이름 
$('#ani_name').blur(function(){
    // const valLength = $(this).val().length;
    if(nameCheck.test($(this).val())){
        // console.log(nameCheck.test($(this).val()));
        $('#ani_nameCheck').text('');
        $(this).removeClass('error');
    }else {
        $('#ani_nameCheck').text('한글, 영어, 숫자로 10자까지 입력해 주세요.');
        $(this).addClass('error');
    }
});

// 핸드폰 번호 자동 '-'
function phoneNum(target){
    target.value = target.value
        .replace(/[^0-9]/g, '')
        .replace(/^(\d{0,3})(\d{0,4})(\d{0,4})$/g, "$1-$2-$3").replace(/(\-{1,2})$/g, "");
}

// 비밀번호 
function isSame(){
    $('#pwCheck01').blur(function(){
        if(passCheck.test($(this).val())){
            $('#pwCheck_01').text('');
            $(this).removeClass('error');
        }else {
            $('#pwCheck_01').text('비밀번호를 다시 확인해주세요.');
            $(this).addClass('error');
        }
    });
    $('#pwCheck02').blur(function(){
        if($('#pwCheck01').val() == $('#pwCheck02').val()){
            $('#pwCheck_02').text('');
            $(this).removeClass('error');
        }else {
            $('#pwCheck_02').text('비밀번호가 서로 일치하지 않아요.');
            $(this).addClass('error');
        }
    });
}

// 반려인 이름 
$('#ownerName').blur(function(){
    if(nameCheck2.test($(this).val())){
        $('#ownerNameCheck').text('');
        $(this).removeClass('error');
    }else {
        $('#ownerNameCheck').text('한글, 영어로 10자까지 입력해 주세요.');
        $(this).addClass('error');
    }
});

// 텍스트에리어 글자 수 제한
$('#messagePop textarea').keyup(function(e){
    let text = $(this).val();
    if (text.length == 0 || text == ""){
        $('.textArea').text('0');
        $('.btn button').addClass('nonAct');
    }else {
        $('.textArea').text(text.length);
        $('.btn button').removeClass('nonAct');
    }
    
    if(text.length > 50){
        $(this).val($(this).val().subsrting(0, 50));
    }
});

// 인풋 체크 후 버튼 활성화
const inputCheck = $('.inputCheck');
function agreeCheck(e){
    if (inputCheck.is(':checked')){
        labelCheck();
    } else if (inputCheck.is('#gaCheck')){
        $('.formLayout > label').addClass('error');
    }
}

function labelCheck(){
    if($('.inputCheck').is('#gaCheck')){
        location.href="/getApply_02";
    } else if ($('.inputCheck').is('#joinCheck')){
        location.href="/joinDone";
    } else if ($('.inputCheck').is('#kitCheck')){
        location.href="/kitApplyDone";

    }
}

inputCheck.click(function(){
    if($(this).is(':checked')){
        $('.formLayout > label').removeClass('error');
        $('.btnBox a:first-child').removeClass('checkBtn');
    }else{
        $('.btnBox a:first-child').addClass('checkBtn');
    }
});
