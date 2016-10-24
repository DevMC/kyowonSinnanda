var name_val = "";
var phone_val = "";
var gift_val = "";
var main_URL = location.origin+location.pathname;
var fb_click = 0;
var tw_click = 0;
var kt_click = 0;
var ks_click = 0;
var width = 0;
var mobile_on = 0;//1이면  970 이하 mobile

$(document).ready(function(){
if(location.protocol.indexOf('https') == -1){
    location.href="https://sinnandaschool-luckyevent7.com/";
}   
    width_check();// pc : mobile_on = 0;  mobile : mobile_on = 1;
    sns_shear();// sns 공유 버튼
    form_check(); //index1 페이지 팝업에서 쓰는 폼체크
    //form_check2(); //index2 페이지 팝업에서 쓰는 폼체크
    phone(); //번호 유효성 검사
    
    // event 3
    //quiz_step2(); //퀴즈 2단계 정답  pc / mobile
    //quiz_step3(); //퀴즈 3단계 정답  pc  
    
    /*20161018 새로 추가*/	
	thum_select();
	puzzleFunciton();
	
});



$(window).resize(function (){
        if(window.innerWidth){
            width = parseInt(window.innerWidth);
        }else{
            width = parseInt($(window).innerWidth())+17;
        }
        if(width <= 970){
            mobile_on = 1;//mobile
        }else{
            mobile_on = 0;//pc
            $(".popup").hide();
            $("#mask").fadeOut('fast');         
        }

});     

function width_check(){
    if (window.innerWidth) {
        width = parseInt(window.innerWidth);
    } else {
        width = parseInt($(window).innerWidth()) + 17;
    }

    if (width <= 970) {
        mobile_on = 1;// mobile
    }else{
        mobile_on = 0;//pc
    }
    
}
    
var event1_arr = new Array;

if(!Array.indexOf){
  Array.prototype.indexOf = function(obj){
    for(var i=0; i<this.length; i++){
      if(this[i]==obj){
    return i;
      }
    }
    return -1;
  }
} 

var gubunm = 0;
function sns_shear(){
    $('.share_tw').click(function() {
        if (gubunevent == "event1") var content = "[교원 신난다 체험스쿨 EVENT] 똑같은 체험학습은 가라! 교육 전문 기업이 제안하는 교원 체험학습 영상 공유하고 다양한 경품의 주인공이 되어 보세요.";
        if (gubunevent == "event2") var content = "[교원 신난다 체험스쿨 EVENT] 한국사부터 사회, 과학까지! 우리아이에게 필요한 체험학습 프로그램을 선택하고, 푸짐한 경품을 받아보세요~!";
        if (gubunevent == "event3") var content = "[교원 신난다 체험스쿨 EVENT] 1단계부터 3단계까지! 신나는 단계별 체험학습 퀴즈를 풀고, 단계별 푸짐한 경품의 행운을 잡아보세요~!";
        
        var popOption = "width=600, height=600, resizable=no, scrollbars=no, status=no;";
        var tw = window.open("https://twitter.com/share?url=" + encodeURIComponent(main_URL) + "&text=" + encodeURIComponent(content), 'twi모바일 접속 에러 갤럭시 노트4tter', popOption);
        tw_click++;
        sns_share_count('tw', phone_val);//sns count
    });
    $('.share_fb').click(function() {
        var targetUrl = "https://www.facebook.com/sharer.php?u=" + main_URL;
        var popOption = "width=600, height=600, resizable=no, scrollbars=no, status=no;";
        var fb = window.open(encodeURI(targetUrl), "new", popOption);
        sns_share_count('fb', phone_val);//sns count
        fb_click++;
    });

    $('.share_kt').click(function() {
       // Mobile여부를 구분하기 위함
        var uAgent = navigator.userAgent.toLowerCase();  
        // 아래는 모바일 장치들의 모바일 페이지 접속을위한 스크립트
        var mobilePhones = new Array('iphone', 'ipod', 'ipad', 'android', 'blackberry', 'windows ce','nokia', 'webos', 'opera mini', 'sonyericsson', 'opera mobi', 'iemobile', 'mobile');
        for (var i = 0; i < mobilePhones.length; i++){
            if (uAgent.indexOf(mobilePhones[i]) != -1){
            	gubunm = 1;
            }
        }       
        
        if(gubunm == 1){
        	kt_click++;
        	sns_share_count('kt', phone_val);//sns count
        }else{
        	alert("모바일 기기에서만 전송 가능합니다."); 
        }
    }); 
    
   
    
    
}


//휴대폰 번호 유효성 검사
function phone() {
    $(".phone_num").blur(function() {
        var trans_num = $(this).val().replace(/-/gi, '');
        if (trans_num != null && trans_num != '') {
            if (trans_num.length == 11 || trans_num.length == 10) {
                var regExp_ctn = /^01([016789])([1-9]{1})([0-9]{2,3})([0-9]{4})$/;

                if (regExp_ctn.test(trans_num)) {
                    trans_num = $(this).val().replace(/^(01[016789]{1}|02|0[3-9]{1}[0-9]{1})-?([0-9]{3,4})-?([0-9]{4})$/, "$1-$2-$3");
                    $(this).val(trans_num);
                } else {
                    alert("유효하지 않은 전화번호 입니다.");
                    $(this).val("");
                    $(this).focus();
                }
            } else {
                alert("유효하지 않은 전화번호 입니다.");
                $(this).val("");
                $(this).focus();

            }
        }
    });

}

//전체 폼 체크
function form_all( el ){
    name_val = $.trim($(el).find('.name').val());
    phone_val = $.trim($(el).find('.phone_num').val());

    var name = $(el).find('.name');
    var phone_num = $(el).find('.phone_num');
    var agree01 = $(el).find('.agree01');
    var agree02 = $(el).find('.agree02');
    
     if(name.val()==""){
          alert('이름을 입력해주세요.');
          $('.name').focus();
          return false;
          
      }if(phone_num.val()==""){
         alert("휴대폰 번호를 입력해주세요.");
         $('.phone_num').focus();
          return false;
      }else{
         phone();
      }
      
      if (agree01.is(':checked') == false) {
          alert("개인정보 수집 동의를 읽고 동의해주세요."); 
          return false;
      }
      
      if (agree02.is(':checked') == false) {
          alert("개인정보 수집 동의를 읽고 동의해주세요."); 
          return false;
      }    
      
      return true;
      
    
}

//pc  index1 영상이벤트 SNS 공유하기 팝업 
function form_check() {
    //pc  index1 영상이벤트 SNS 공유하기 팝업
    $('#share_btn').click(function() {
        if (form_all('#index1') == false) {
            return false;
        }else {
            insert_user(name_val, phone_val);// 이벤트 등록
        }
    });

    $('#mobile_index1_share_btn').click(function() {
        if (form_all('#mobile_index1') == false) {
            return false;
        }else{
            insert_user(name_val, phone_val);// 이벤트 등록
        }
    }); 

}

var mask = $('<div id="mask">').css({
                'position':'fixed',
                'top' : '0px',
                'left' : '0px',
                'width' : '100%',
                'height' : '100%',
                '-ms-filter' : 'progid:DXImageTransform.Microsoft.Alpha(Opacity=60)',
                'filter' : 'progid:DXImageTransform.Microsoft.Alpha(Opacity=60)',
                'opacity' : '0.6',
                'background' : '#000000',
                '-moz-opacity' : '0.6',
                'z-index' : '99',
                'display': 'none'
     }); 
    
    /* 일반 팝업 레이어 */
    var popup = function(){
        return {
            open: function(el) {
                // 기존에 열리있는 다른 팝업레이어 제거
                $(".popup").hide();
                            
                // 배경 마스크 생성및 보여줌
                
                                
                $('body').append(mask);
                $("#mask").fadeTo(300, 0.8);
                
                // 화면 스크롤 안되도록 변경및 스크롤바가 없어진 너비만큼 패딩
                $("body").css({
                    'overflow-y':'scroll',

                });
                
                //$('body').bind('touchmove', function(e){e.preventDefault()});
             
            if(mobile_on === 1)
            {
                var  de_wid = $( window ).width();
                
                if( de_wid < 376 ){
                
                    $(el).css({
                        'max-height' :  $(window).height() * 1,
                        'margin-top' : "2%" ,
                        'overflow-y' : 'scroll'
                     });
                     
                     
                }
                
            }
            $(el).fadeIn('300');
            
            },
            close : function(el) {
                // 배경 마스크 fadeOut 감춘뒤 삭제
                $(el).fadeOut('300');
                
                $("#mask").fadeOut('300',function(){
                    $("#mask").remove();
                    $("body").css({
                        'overflow-y':'auto',
                        'padding-right' : '0px'
                    });    
                });
                
                //$('body').off("touchmove");
                
            }
        }
    }();


/*20161018 새로 추가*/
var count = 0;
var result = ['3', '1', '2', '4']; //이미지 순서....정답
var input_result = [];    
var loopc = 0;


function event1_check_advtg(){
    if( count == 4){
        $.each(result ,function(idx, val){
           if( input_result[idx] == val ){
               loopc++;
           }
           //console.log(loopc);
        }); 

        if(loopc == 4) {
           if(mobile_on == 0){
                popup.open('#info_pop');
           }else{
                popup.open('#mobile_sub1_application_pop');
           }
           event1_check_advtg_reset();
        }else{
           if(mobile_on == 0){
                popup.open('#incorrect_pop');
           }else{
                //popup.open('#mobile_sub1_application_pop');
           }
           event1_check_advtg_reset();
        }    
    }else{
        alert('4장을 모두 선택해주세요.');
    }
}

function event1_check_advtg_reset(){
   count = 0;
   loopc = 0;
   input_result = [];
   //console.log(input_result);
   $('.video_thum li').removeClass('selected');  
   $('.video_thum li .thum_mask').hide();
   $('.video_thum li span').remove(); 
}


function thum_select(){
    $(".video_thum").on("click","li", function() {
                                    
        var selected = $(this).hasClass("selected");
        if( selected == false) {
            var img_num = $(this).find('img').attr('data-value');
            input_result[count] = img_num;
            count++;
            $(this).toggleClass("selected");
            
            $(this).find('.thum_mask').show();
            $(this).find('.thum_mask').before( '<span>' + count + '</span>' ); 
            
        }else if( selected == true) {
            alert('이미 선택하였습니다.');
        }
    });
}

var puzzleVal = 0;
function puzzleFunciton(){
    $('.sub3_puzzle_wrap .right_box li').click(function(){ // user 퍼즐클릭  
    	$('.puzzl_li').each(function(idx, el){
    		$('a img', el).attr('src', 'renew_img/pc/img_puzzleanswer'+(idx+1)+'_off.png');
    	});
		puzzleVal = $(this).attr('data-value');
		$('a img',this).attr('src', 'renew_img/pc/img_puzzleanswer'+puzzleVal+'_on.png');
    });
    
    $('.btn_application').click(function(){ // 정답 확인
    	if( puzzleVal == 0 ){
    		alert('퍼즐을 선택해주세요.');
    	}else if( puzzleVal != 1 ){
    		popup.open('#incorrect_pop3');
    	}else if( puzzleVal == 1 ){
    		popup.open('#info_pop');
    	}
    });
}
