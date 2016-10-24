var name_val = "";
var phone_val = "";
var gift_val = "";
var stage_val = "1단계";//default 1단계
var main_URL = location.origin+location.pathname;
var event3_type = "A";
var step2_answer = ['거북선', '해시계', '첨성대'];
var step3_answer = [1,2,2];
if(Math.floor((Math.random() * 2) + 1) == 2){
	event3_type = "B";
	step2_answer = ['옷', '종이', '집'];
	step3_answer = [3,1,3];
}
var fb_click = 0;
var tw_click = 0;
var kt_click = 0;
var ks_click = 0;
var width = 0;
var mobile_on = 0;//1이면  970 이하 mobile
var u_g = '미당첨';
//console.log(event3_type);
$(document).ready(function(){
if(location.protocol.indexOf('https') == -1){
	location.href="https://sinnandaschool-luckyevent7.com/";
}	
    width_check();// pc : mobile_on = 0;  mobile : mobile_on = 1;
    sns_shear();// sns 공유 버튼
    thum_mask();  //마우스 오버 했을때 썸네일 마스트
    form_check(); //index1 페이지 팝업에서 쓰는 폼체크
    form_check2(); //index2 페이지 팝업에서 쓰는 폼체크
    phone(); //번호 유효성 검사
    select_box(); //체험학습 학년별 문제
    select_box_mobile();//체험학습 학년별 문제 모바일
    
    // event 3
    incorrect_pop(); //즉석경품 팝업 pc
    quiz_step1(); //퀴즈 1단계 정답 pc
    quiz_step2(); //퀴즈 2단계 정답  pc / mobile
    quiz_step3(); //퀴즈 3단계 정답  pc  
    quiz_step1_mobile(); //mobile
    quiz_step3_mobile(); //mobile

});


$(window).resize(function (){
		if(window.innerWidth){
			width = parseInt(window.innerWidth);
		}else{
			width = parseInt($(window).innerWidth())+17;
		}
		//console.log(width);
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


function event1_check_advtg(){
	if($('.q_list input:checked').length != 0){
		$('.q_list input:checked').each(function(idx, el){
			var event1_val = $(el).val();
			event1_arr[idx] = event1_val;
	
		});		
		if(event1_arr.indexOf('3') == -1 && event1_arr.indexOf('1') > -1 && event1_arr.indexOf('2') > -1 && event1_arr.indexOf('4') > -1){
			if(mobile_on == 0){
				popup.open('#info_pop');
			}else{
				popup.open('#mobile_sub1_application_pop');
			}
		}else{
			event1_arr = new Array;
			alert('동영상을 보고 장점을 정확하게 선택해주세요.');
			$('.q_list input:checked').prop("checked", false);
		}
	}else{
		alert('동영상을 보고 장점을 선택해주세요.');
	}
}

function sns_shear(){
	$('.share_tw').click(function() {
		if (gubunevent == "event1") var content = "[교원 신난다 체험스쿨 EVENT] 똑같은 체험학습은 가라! 교육 전문 기업이 제안하는 교원 체험학습 영상 공유하고 다양한 경품의 주인공이 되어 보세요.";
		if (gubunevent == "event2") var content = "[교원 신난다 체험스쿨 EVENT] 한국사부터 사회, 과학까지! 우리아이에게 필요한 체험학습 프로그램을 선택하고, 푸짐한 경품을 받아보세요~!";
		if (gubunevent == "event3") var content = "[교원 신난다 체험스쿨 EVENT] 1단계부터 3단계까지! 신나는 단계별 체험학습 퀴즈를 풀고, 단계별 푸짐한 경품의 행운을 잡아보세요~!";
		
		var popOption = "width=600, height=600, resizable=no, scrollbars=no, status=no;";
		var tw = window.open("https://twitter.com/share?url=" + encodeURIComponent(main_URL) + "&text=" + encodeURIComponent(content), 'twitter', popOption);
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
	    var mobilePhones = new Array('iphone', 'ipod', 'ipad', 'android', 'blackberry', 'windows ce','nokia', 'webos', 'opera mini', 'sonyericsson', 'opera mobi', 'iemobile');
	    for (var i = 0; i < mobilePhones.length; i++){
	        if (uAgent.indexOf(mobilePhones[i]) != -1){
		    	//alert("mobile."); 
		    	kt_click++;
		    	sns_share_count('kt', phone_val);//sns count
		    	break;
		    }else{
		    	alert("모바일 기기에서만 전송 가능합니다."); break;
		    }
		}		
	});	
}


//마우스 오버시 마스크와 글자 두께 굵어짐
function thum_mask(){
    //PC
    $('.thum_caption').hover(
        function(){
			$(this).parent().find('div').css('opacity', '0.8');
        },
        function(){
            $(this).parent().find('div').css('opacity', '0.6');
        }
    );
    $('.thum_mask').hover(
        function(){
			$(this).css('opacity', '0.8');
        },
        function(){
            $(this).css('opacity', '0.6');
        }
    );
    
    
    // //모바일
    // $('#mobile_sub1 .q_list .thum_box').hover(
        // function(){
            // $(this).find('.thum_mask').css('display','block');
            // $(this).find('.thum_caption ').css('font-weight','900');
        // },
        // function(){
            // $(this).find('.thum_mask').css('display','none');
             // $(this).find('.thum_caption ').css('font-weight','400');
        // }
    // );
//     
    
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
	gift_val = $(el).find('#livere_gift').attr('date');//라이브리 값받기

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

//pc index2 당첨 팝업
function form_check2() {
	// popup.open('#instant_prizes_pop'); 개인정보 입력 form 
	$('#participation_ok_btn').click(function() {
		if (form_all('#index2') == false) {
			return false;
		} else {
			 var u_gift = $('#instant_prizes_pop_value').attr('value');
			insert_user(name_val, phone_val, u_gift, fb_click, tw_click, kt_click, ks_click);//기프트테스트
		}
	}); 
	
	//popup.open('#mobile_sub2_application_pop'); 개인정보 입력 form 
	$('#mobile_index2_share_btn').click(function() {
		if (form_all('#mobile_index2') == false) {
			return false;
		}else{
			var u_gift = $('#instant_prizes_pop_value').attr('value');
			insert_user(name_val, phone_val, u_gift, fb_click, tw_click, kt_click, ks_click);//기프트테스트
		}
	}); 	

}

//pc index2 당첨 팝업 값에 따라 당첨되는 팝업 다름
function instant_prizes(val, sns){
	if(sns != ''){
		if(sns.indexOf('facebook') != -1){ fb_click+=1; }
		if(sns.indexOf('twitter') != -1){ tw_click+=1; }
		if(sns.indexOf('kakao') != -1){ ks_click+=1; }
	}
	
    if( val.indexOf('바나나') != -1 ){
        $('#instant_prizes_pop .title .title_img').attr('src','img/cel_banana_title.png');
    }else if( val.indexOf('음료교환권') != -1 ){
        $('#instant_prizes_pop .title .title_img').attr('src','img/cel_coffe_title.png');
    }else if( val.indexOf('무료무료이용권') != -1 ){
    	$('#instant_prizes_pop .title .title_img').attr('src','img/cel_free_title.png');
    }else if(val == ""){//미당첨
        $('#instant_prizes_pop').css({'background-image':'url(img/not_celebration_back.png)'});
        $('#instant_prizes_pop .title .title_img').attr('src','img/not_cel_title.png');
    }
    $('#instant_prizes_pop_value').attr('value', val);
}
//mobile index2 당첨 팝업 값에 따라 당첨되는 팝업 다름
function instant_prizes_m(val, sns){
	if(sns != ''){
		if(sns.indexOf('facebook') != -1){ fb_click+=1; }
		if(sns.indexOf('twitter') != -1){ tw_click+=1; }
		if(sns.indexOf('kakao') != -1){ ks_click+=1; }
	}
    if( val.indexOf('바나나') != -1 ){
        $('#mobile_sub2_application_pop .title .title_img').attr('src','img/mobile/cel_banana_title.png');
    }else if( val.indexOf('음료교환권') != -1 ){
        $('#mobile_sub2_application_pop .title .title_img').attr('src','img/mobile/cel_coffe_title.png');
    }else if( val.indexOf('무료무료이용권') != -1  ){
        $('#mobile_sub2_application_pop .title .title_img').attr('src','img/mobile/cel_free_title.png');
    }else if(val == ""){//미당첨
        $('#mobile_sub2_application_pop .title .title_img').attr('src','img/mobile/not_cel_title.png');
    }
    $('#instant_prizes_pop_value').attr('value', val);
}




var mask = $('<div id="mask">').css({
                'position':'fixed',
                'top' : '0px',
                'left' : '0px',
                'width' : '100%',
                'height' : '100%',
                '-ms-filter' : 'progid:DXImageTransform.Microsoft.Alpha(Opacity=50)',
                'filter' : 'progid:DXImageTransform.Microsoft.Alpha(Opacity=50)',
                'opacity' : '0.5',
                'background' : '#4a4a4a',
                '-moz-opacity' : '0.5',
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
                
                $('body').on("touchmove", function(e) {
                    touchEnd = e.originalEvent.touches[0].pageX;
            
                    if(touchExceeded || touchStart - touchEnd > 50 || touchEnd - touchStart > 50) {
                        e.preventDefault();
            
                        touchExceeded = true;
                    }
                });
             
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
                
                $('body').off("touchmove");
                
            }
        }
    }();



    //PC index2 체험학습 찾기 select box
var s1_val =  '';
var s2_val =  '';
function select_box(){
    	
	$('.sub2_q_list input').click(function(){
		$('.sub2_q_list input:checked').prop("checked", false);  
		$(this).prop("checked", true);  
	});
//select_wrap_mobile
    $('#select_wrap select').each(function(idx){
    
        var $this = $(this), numberOfOptions = $(this).children('option').length;
        $this.addClass('select-hidden'); 
        $this.wrap('<div class="select"></div>');
        $this.after('<div class="select-styled" id="select_val'+(idx+1)+'"></div>');
        
        var $styledSelect = $this.next('div.select-styled');
        $styledSelect.text($this.children('option').eq(0).text());
      
        var $list = $('<ul ></ul>', {
            'class': 'select-options'
        }).insertAfter($styledSelect);
      
        for (var i = 0; i < numberOfOptions; i++) {
            $('<li ></li>', {
                text: $this.children('option').eq(i).text(),
                rel: $this.children('option').eq(i).val()
            }).appendTo($list);
        }
      
        var $listItems = $list.children('li');
      
        $styledSelect.click(function(e) {
            e.stopPropagation();
            $('div.select-styled.active').each(function(){
                $(this).removeClass('active').next('ul.select-options').hide();
            });
            $(this).toggleClass('active').next('ul.select-options').toggle();
        });
      
        $listItems.click(function(e) {
            e.stopPropagation();
            $styledSelect.text($(this).text()).removeClass('active');
            $this.val($(this).attr('rel'));
            $list.hide();
            s1_val = $('#select_val1').text();
            s2_val = $('#select_val2').text();            
            $('.all_class_subject, .row_class_subject, .high_class_subject').find('input[type=checkbox]:checked').prop("checked", false);
    
            if(s1_val == '고학년' ){
                $('.select-options').children().eq(7).css('display','none');
            }else{
                $('.select-options').children().eq(7).css('display','block');
            }
            
            
            
            if(s1_val != '고학년' ){
                
                if(s2_val == '한국사'){
                   $('.all_class_subject, .row_class_subject, .high_class_subject').css('display','none');
                   $('.row_class_subject.row_01').css('display','block');
                   
                }else if(s2_val == '사회'){
                   $('.all_class_subject, .row_class_subject, .high_class_subject').css('display','none');
                   $('.row_class_subject.row_02').css('display','block');
                  
                }else if(s2_val == '과학'){
                   $('.all_class_subject, .row_class_subject, .high_class_subject').css('display','none');
                   $('.row_class_subject.row_03').css('display','block');
                }
                // else if(s2_val == '체험첫걸음'){
                   // $('.row_class_subject, .high_class_subject').css('display','none');
                   // $('.all_class_subject').css('display','block');
                // }
                
            }
            if(s1_val != '저학년' ){
                //alert(11);
                if(s2_val == '한국사'){
                   $('.all_class_subject, .row_class_subject, .high_class_subject').css('display','none');
                   $('.high_class_subject.high_01').css('display','block');
                   
                }else if(s2_val == '사회'){
                   $('.all_class_subject, .row_class_subject, .high_class_subject').css('display','none');
                   $('.high_class_subject.high_02').css('display','block');
                  
                }else if(s2_val == '과학'){
                   $('.all_class_subject, .row_class_subject, .high_class_subject').css('display','none');
                   $('.high_class_subject.high_03').css('display','block');
                }
                else if(s2_val == '체험첫걸음'){
                   $('.row_class_subject, .high_class_subject').css('display','none');
                   $('.all_class_subject').css('display','block');
                }
            }           
        });
        
        
        $(document).click(function() {
            $styledSelect.removeClass('active');
            $list.hide();
          
        });
        
    });

}

//모바일 index2 체험학습 찾기 select box
var s3_val =  '';
var s4_val =  '';
function select_box_mobile(){

  
    $('#select_wrap_mobile select').each(function(idx){
        
        var $this = $(this), numberOfOptions = $(this).children('option').length;
        $this.addClass('select-hidden'); 
        $this.wrap('<div class="select"></div>');
        $this.after('<div class="select-styled" id="select_val'+(idx+3)+'"></div>');
        
        var $styledSelect = $this.next('div.select-styled');
        $styledSelect.text($this.children('option').eq(0).text());
      
        var $list = $('<ul ></ul>', {
            'class': 'select-options mobile_hide'
        }).insertAfter($styledSelect);
      
        for (var i = 0; i < numberOfOptions; i++) {
            $('<li ></li>', {
                text: $this.children('option').eq(i).text(),
                rel: $this.children('option').eq(i).val()
            }).appendTo($list);
        }
        var $listItems = $list.children('li');
      
        $styledSelect.click(function(e) {
            e.stopPropagation();
            $('div.select-styled.active').each(function(){
                $(this).removeClass('active').next('ul.select-options').hide();
            });
            $(this).toggleClass('active').next('ul.select-options').toggle();
        });
      
        $listItems.click(function(e) {
            e.stopPropagation();
            $styledSelect.text($(this).text()).removeClass('active');
            $this.val($(this).attr('rel'));
            $list.hide();
            s3_val = $('#select_val3').text();
            s4_val = $('#select_val4').text();    
            
                   
            $('.all_class_subject, .row_class_subject, .high_class_subject').find('input[type=checkbox]:checked').prop("checked", false);
            
             if(s3_val == '고학년' ){
                $('.select-options.mobile_hide').children().eq(7).css('display','none');
            }else{
                $('.select-options.mobile_hide').children().eq(7).css('display','block');
            }
            
                       
            if(s3_val != '고학년' ){
                
                if(s4_val == '한국사'){
                   $('.all_class_subject, .row_class_subject, .high_class_subject').css('display','none');
                   $('.row_class_subject.row_01').css('display','block');
                   
                }else if(s4_val == '사회'){
                   $('.all_class_subject, .row_class_subject, .high_class_subject').css('display','none');
                   $('.row_class_subject.row_02').css('display','block');
                  
                }else if(s4_val == '과학'){
                   $('.all_class_subject, .row_class_subject, .high_class_subject').css('display','none');
                   $('.row_class_subject.row_03').css('display','block');
                }
                else if(s4_val == '체험첫걸음'){
                   $('.row_class_subject, .high_class_subject').css('display','none');
                   $('.all_class_subject').css('display','block');
                }
                
            }
            if(s3_val != '저학년' ){
                //alert(11);
                if(s4_val == '한국사'){
                   $('.all_class_subject, .row_class_subject, .high_class_subject').css('display','none');
                   $('.high_class_subject.high_01').css('display','block');
                   
                }else if(s4_val == '사회'){
                   $('.all_class_subject, .row_class_subject, .high_class_subject').css('display','none');
                   $('.high_class_subject.high_02').css('display','block');
                  
                }else if(s4_val == '과학'){
                   $('.all_class_subject, .row_class_subject, .high_class_subject').css('display','none');
                   $('.high_class_subject.high_03').css('display','block');
                }
                else if(s4_val == '체험첫걸음'){
                   $('.row_class_subject, .high_class_subject').css('display','none');
                   $('.all_class_subject').css('display','block');
                }
            }           
        });
        
        
        $(document).click(function() {
            $styledSelect.removeClass('active');
            $list.hide();
          
        });
        
    });

}




//1단계 정답 구분
var step1 = '';
function quiz_step1(){
	$("#step1 input").on("click", function() {
		$('.check').fadeOut('fast');// 모든체크이미지 OFF
		$(this).next().children().fadeIn('fast'); // 클릭된 체크 이미지 ON
		step1 = $(this).val();//step1 사용자 체크 값
		$('#step1 .submit_wrap').fadeIn('slow'); // 답안제출 ON
		
	}); 
 
 
	$('#step1 .submit_wrap a').click(function() {
		if(step1 == ''){
			alert('정답을 선택하세요.');
			return false;
		}else{
			$('#step1 .submit_wrap a img').attr('src', 'img/submit_btn_on.png');
			if (step1 == "과천과학관체험") {//정답
				popup.open('#step1_answer_pop');
				return false;
	
			} else if (step1 == "딸기농장체험" || step1 == "도자기만들기체험") {//오답
				popup.open('#incorrect_pop');
	
			}			
		}
	});

//1단계 해설 및 개인정보 입력
    //그만풀기
    $('#step1_answer_pop .stop_btn').click(function() {   
		if (form_all('#index3_step1') == false) {
			return false;
		} else {
			insert_user_event3(name_val, phone_val, stage_val, "stop", 1);//3단계 스텝 1
		}	
    });
    
    //다음단계 도전
    $('#step1_answer_pop .next_btn').click(function() {   
      if(form_all('#index3_step1') == false){
          return false;
      }else { 
			insert_user_event3(name_val, phone_val, stage_val, "next", 1);//3단계 스텝 1   
			stage_val = "2단계";
			$('.name').attr('value', name_val);
			$('.phone_num').attr('value', phone_val);
      }
    });
}

var step1_mobile = '';
function quiz_step1_mobile(){
	$("#mobile_step01 input").on("click", function() {
		$('.check').fadeOut('fast');// 모든체크이미지 OFF
		$(this).next().children().children().fadeIn('fast'); // 클릭된 체크 이미지 ON
		step1_mobile = $(this).val();//step1_mobile 사용자 체크 값
		$('#mobile_step1_wrap .mobile_submit_btn_wrap').fadeIn('slow'); // 답안제출 ON
	}); 
 
 
	$('#mobile_step1_wrap .mobile_submit_btn_wrap').click(function() {
		if(step1_mobile == ''){
			alert('정답을 선택하세요.');
			return false;
		}else{
			$('#mobile_step1_wrap .mobile_submit_btn_wrap img').attr('src', 'img/mobile_submit_btn_on.png');
			if (step1_mobile == "과천과학관체험") {//정답
				popup.open('#mobile_sub3_answer_step1');
				return false;
	
			} else if (step1_mobile == "딸기농장체험" || step1_mobile == "도자기만들기체험") {//오답
				popup.open('#mobile_incorrect_pop');
	
			}			
		}
	});

//1단계 해설 및 개인정보 입력
    //그만풀기
    $('#mobile_sub3_answer_step1 .mobile_step_stop_btn').click(function() {   
		if (form_all('#mobile_index3_step1') == false) {
			return false;
		} else {
			insert_user_event3(name_val, phone_val, stage_val, "stop", 1);//3단계 스텝 1
		}	
    });
    
    //다음단계 도전
    $('#mobile_sub3_answer_step1 .mobile_step_next_btn').click(function() {   
      if(form_all('#mobile_index3_step1') == false){
          return false;
      }else { 
			insert_user_event3(name_val, phone_val, stage_val, "next", 1);//3단계 스텝 1   
			stage_val = "2단계";
			$('.name').attr('value', name_val);
			$('.phone_num').attr('value', phone_val);
      }
    });
}


var click_cnt = 0;
var now_id = ''; 
var before_id = ''; 
var quiz_cnt = 0;
//2단계 정답 체크
function quiz_step2(){
	$('input[name=quiz2]').click(function() {
		if( quiz_cnt != 3){
			click_cnt++;
			
			now_id = $(this).attr('id');
			var off_checkimg = $('#'+now_id).next().children().attr('src');
			var on_checkimg = off_checkimg.split('.');
			if(now_id != before_id) $('#'+now_id).next().children().attr('src', on_checkimg[0]+'_on.png');

			if(click_cnt == 1){
				before_id = $(this).attr('id');
			}else if (now_id != before_id){
				if( $('#'+now_id).val() == $('#'+before_id).val() ){//정답 A['첨성대', '해시계', '거북선']; B['옷', '종이', '집']
					if( $('#'+now_id).val() == step2_answer[0]) $('.answer_line1').fadeIn('slow'); 
					if( $('#'+now_id).val() == step2_answer[1]) $('.answer_line2').fadeIn('slow'); 
					if( $('#'+now_id).val() == step2_answer[2]) $('.answer_line3').fadeIn('slow'); 
					quiz_cnt+=1;
					if( quiz_cnt == 3 ) {
						if (mobile_on == 0) {//pc
							$('#step2_'+event3_type+' .submit_wrap').fadeIn('slow'); 
						} else {//mobile
							$('#mobile_step2_'+event3_type+'_wrap .mobile_submit_btn_wrap').fadeIn('slow'); // 답안제출 ON
						}							
					}
					click_cnt = 0;
					now_id = '';
					before_id = '';
					for (var i = 1; i <= 6; i++) {
						if (i <= 3){
							$('#step2_ex0'+i+"_mobile_"+event3_type).next().children().attr('src', 'img/left_label.png');
							$('#step2_ex0'+i+"_"+event3_type).next().children().attr('src', 'img/left_label.png');
						}else{
							$('#step2_ex0'+i+"_mobile_"+event3_type).next().children().attr('src','img/right_label.png');
							$('#step2_ex0'+i+"_"+event3_type).next().children().attr('src','img/right_label.png');
						}
					}
				}else{//오답
					if (mobile_on == 0) {//pc
						popup.open('#incorrect_pop');
					} else {//mobile
						popup.open('#mobile_incorrect_pop'); 
					}						
				}
			}else{//같은input선택

				if (mobile_on == 0) {//pc
					popup.open('#incorrect_pop');
				} else {//mobile
					popup.open('#mobile_incorrect_pop'); 
				}	
			}
			//console.log('quiz_cnt='+quiz_cnt);
		}
	});     
	
	

	$('#step2_'+event3_type+' .submit_wrap, #mobile_step2_'+event3_type+'_wrap .mobile_submit_btn_wrap').click(function() {
		if (mobile_on == 0) {//pc
			$('#step2_'+event3_type+' .submit_wrap a img').attr('src', 'img/submit_btn_on.png');
			popup.open('#step2_answer_pop_'+event3_type);
		} else {//mobile
			$('#mobile_step2_'+event3_type+'_wrap .mobile_submit_btn_wrap img').attr('src', 'img/submit_btn_on.png');
			popup.open('#mobile_sub3_answer_step2_'+event3_type);
		}	
	});
	
//2단계 해설 및 개인정보 입력
    //그만풀기
	$('#step2_answer_pop_'+event3_type+' .stop_btn').click(function() {
		if (form_all('.index3_step2') == false) {
			return false;
		} else {
			insert_user_event3(name_val, phone_val, stage_val, "stop", 2);//3단계 스텝 2		
		}
	}); 
	
    //다음단계 도전 
	$('#step2_answer_pop_'+event3_type+' .next_btn').click(function() {
		if (form_all('.index3_step2') == false) {
			return false;
		} else {
			insert_user_event3(name_val, phone_val, stage_val, "next", 2);//3단계 스텝 2   
			stage_val = "3단계";		
		}
	}); 
	
	$('#mobile_sub3_answer_step2_'+event3_type+' .mobile_step_stop_btn').click(function() {
		if (form_all('#mobile_index3_step2_'+event3_type) == false) {
			return false;
		} else {
			insert_user_event3(name_val, phone_val, stage_val, "stop", 2);//3단계 스텝 2		
		}
	}); 
	
    //다음단계 도전 
	$('#mobile_sub3_answer_step2_'+event3_type+' .mobile_step_next_btn').click(function() {
		if (form_all('#mobile_index3_step2_'+event3_type) == false) {
			return false;
		} else {
			insert_user_event3(name_val, phone_val, stage_val, "next", 2);//3단계 스텝 2   
			stage_val = "3단계";		
		}
	}); 

   	
}

//3단계 정답체크
function quiz_step3(){
    	
    var step3_q1 = 0;
    var step3_q2 = 0;
    var step3_q3 = 0;
	if(event3_type == "A"){//step3_answer 123
		$("#stop3_ex01_A, #stop3_ex02_A, #stop3_ex03_A").on("click", function() {
			if(step3_q1 == 0){
				$("#stop3_ex01_A").next().children().eq(0).fadeOut('fast');
				$("#stop3_ex02_A").next().children().eq(0).fadeOut('fast');
				$("#stop3_ex03_A").next().children().eq(0).fadeOut('fast');
				$(this).next().children().eq(0).fadeIn('fast'); // 클릭된 체크 이미지 ON
				if($(this).val() == step3_answer[0]){
					step3_q1=1;				
				}else{
					setTimeout(function(){ popup.open('#incorrect_pop'); }, 300);			
					$(this).next().children().eq(0).fadeOut('fast');
				}
				if( step3_q1 == 1 && step3_q2 == 1 && step3_q3 == 1 ) popup.open('#step3_answer_pop_'+event3_type);
			}

		}); 
		
		$("#stop3_ex04_A, #stop3_ex05_A, #stop3_ex06_A").on("click", function() {
			if(step3_q2 == 0){
				$("#stop3_ex04_A").next().children().eq(0).fadeOut('fast');
				$("#stop3_ex05_A").next().children().eq(0).fadeOut('fast');
				$("#stop3_ex06_A").next().children().eq(0).fadeOut('fast');
				$(this).next().children().eq(0).fadeIn('fast'); // 클릭된 체크 이미지 ON
				if($(this).val() == step3_answer[1]){
					step3_q2=1;				
				}else{
					setTimeout(function(){ popup.open('#incorrect_pop'); }, 300);	
					$(this).next().children().eq(0).fadeOut('fast');		
				}
				if( step3_q1 == 1 && step3_q2 == 1 && step3_q3 == 1 ) popup.open('#step3_answer_pop_'+event3_type);
			}
		}); 
		
		$("#stop3_ex07_A, #stop3_ex08_A, #stop3_ex09_A").on("click", function() {
			if(step3_q3 == 0){
				$("#stop3_ex07_A").next().children().eq(0).fadeOut('fast');
				$("#stop3_ex08_A").next().children().eq(0).fadeOut('fast');
				$("#stop3_ex09_A").next().children().eq(0).fadeOut('fast');
				$(this).next().children().eq(0).fadeIn('fast'); // 클릭된 체크 이미지 ON
				if($(this).val() == step3_answer[2]){
					step3_q3=1;				
				}else{
					setTimeout(function(){ popup.open('#incorrect_pop'); }, 300);	
					$(this).next().children().eq(0).fadeOut('fast');		
				}
				if( step3_q1 == 1 && step3_q2 == 1 && step3_q3 == 1 ) popup.open('#step3_answer_pop_'+event3_type);
			}
		}); 
		
	}else{
	var now_step = 0;	
		$("#step3_"+event3_type+" input").on("click", function() {
			if(now_step != 3 ){
				$('.check').fadeOut('fast');// 모든체크이미지 OFF
				$(this).next().children().fadeIn('fast'); // 클릭된 체크 이미지 ON
				
				if ($(this).val() == step3_answer[now_step]) {
					if(now_step != 2 ) $("#step3_"+event3_type+" #step3_" + (now_step + 1)).hide();
					$("#step3_"+event3_type+" #step3_" + (now_step + 2)).show();			
					now_step++;
					if(now_step == 3) popup.open('#step3_answer_pop_'+event3_type);
				} else {
					setTimeout(function(){ popup.open('#incorrect_pop'); }, 300);				
					return false;
				}
			}
		}); 		
	}

     //다음단계 도전
    $('#step3_answer_pop_'+event3_type+' .step3_btn').click(function() {   
      if(form_all( '.index3_step3_'+event3_type ) == false){
          return false;
      }else { 
			insert_user_event3(name_val, phone_val, stage_val, "next", 3);//3단계 스텝 1   
			stage_val = "3단계";
      }
    });   
}

//3단계 정답체크
function quiz_step3_mobile(){
    	
    var step3_q1_m = 0;
    var step3_q2_m = 0;
    var step3_q3_m = 0;
	if(event3_type == "A"){//step3_answer 123
		
		$("#mobile_stop3_ex01_A, #mobile_stop3_ex02_A, #mobile_stop3_ex03_A").on("click", function() {
			if(step3_q1_m == 0){
				$("#mobile_stop3_ex01_A").next().children().eq(0).fadeOut('fast');
				$("#mobile_stop3_ex02_A").next().children().eq(0).fadeOut('fast');
				$("#mobile_stop3_ex03_A").next().children().eq(0).fadeOut('fast');
				$(this).next().children().eq(0).fadeIn('fast'); // 클릭된 체크 이미지 ON
				if($(this).val() == step3_answer[0]){
					step3_q1_m=1;				
				}else{
					setTimeout(function(){ popup.open('#mobile_incorrect_pop');  }, 300);			
					$(this).next().children().eq(0).fadeOut('fast');
				}
				if( step3_q1_m == 1 && step3_q2_m == 1 && step3_q3_m == 1 ) popup.open('#mobile_sub3_answer_step3_'+event3_type);
			}

		}); 
		
		$("#mobile_stop3_ex04_A, #mobile_stop3_ex05_A, #mobile_stop3_ex06_A").on("click", function() {
			if(step3_q2_m == 0){
				$("#mobile_stop3_ex04_A").next().children().eq(0).fadeOut('fast');
				$("#mobile_stop3_ex05_A").next().children().eq(0).fadeOut('fast');
				$("#mobile_stop3_ex06_A").next().children().eq(0).fadeOut('fast');
				$(this).next().children().eq(0).fadeIn('fast'); // 클릭된 체크 이미지 ON
				if($(this).val() == step3_answer[1]){
					step3_q2_m=1;				
				}else{
					setTimeout(function(){ popup.open('#mobile_incorrect_pop');  }, 300);	
					$(this).next().children().eq(0).fadeOut('fast');		
				}
				if( step3_q1_m == 1 && step3_q2_m == 1 && step3_q3_m == 1 ) popup.open('#mobile_sub3_answer_step3_'+event3_type);
			}
		}); 
		
		$("#mobile_stop3_ex07_A, #mobile_stop3_ex08_A, #mobile_stop3_ex09_A").on("click", function() {
			if(step3_q3_m == 0){
				$("#mobile_stop3_ex07_A").next().children().eq(0).fadeOut('fast');
				$("#mobile_stop3_ex08_A").next().children().eq(0).fadeOut('fast');
				$("#mobile_stop3_ex09_A").next().children().eq(0).fadeOut('fast');
				$(this).next().children().eq(0).fadeIn('fast'); // 클릭된 체크 이미지 ON
				if($(this).val() == step3_answer[2]){
					step3_q3_m=1;				
				}else{
					setTimeout(function(){ popup.open('#mobile_incorrect_pop');  }, 300);	
					$(this).next().children().eq(0).fadeOut('fast');		
				}
				if( step3_q1_m == 1 && step3_q2_m == 1 && step3_q3_m == 1 ) popup.open('#mobile_sub3_answer_step3_'+event3_type);
			}
		}); 
		
	}else{
	var now_step_m = 0;	
		$("#mobile_step3_B_wrap input").on("click", function() {
			if(now_step_m != 3 ){
				$('.check').fadeOut('fast');// 모든체크이미지 OFF
				$(this).next().children().fadeIn('fast'); // 클릭된 체크 이미지 ON
				if ($(this).val() == step3_answer[now_step_m]) {
					mobile_step3_1
					if(now_step_m != 2 ) $("#mobile_step3_" + (now_step_m + 1)).hide();
					$("#mobile_step3_" + (now_step_m + 2)).show();
					now_step_m++;
					if(now_step_m == 3) popup.open('#mobile_sub3_answer_step3_'+event3_type);
				} else {
					setTimeout(function(){popup.open('#mobile_incorrect_pop'); }, 300);				
					return false;
				}
			}
		}); 		
	}

     //다음단계 도전
    $('#mobile_sub3_answer_step3_'+event3_type+' .mobile_step_stop_btn').click(function() {   
      if(form_all( '#mobile_index3_step3_'+event3_type ) == false){
          return false;
      }else { 
			insert_user_event3(name_val, phone_val, stage_val, "next", 3);//3단계 스텝 1   
			stage_val = "3단계";
      }
    });   
}

//오답 팝업
function incorrect_pop(){
    //돌아가기
    $('#incorrect_pop .back_btn, #mobile_incorrect_pop .back_btn').click(function() {
    	step_default(stage_val);
    });
    //그만하기
    $('#incorrect_pop .stop_btn, #mobile_incorrect_pop .stop_btn').click(function() {
    	window.location.reload();
    });
    
	//popup.open('#mobile_sns_share_pop'); 공유 팝업 block
	//popup.open('#mobile_sub2_application_pop'); 공유 팝업 block
	//popup.open('#mobile_sns_share3_pop');     공유 팝업 block
}


function step_default(stage_val, idx){
	// step 1 초기화 start
	if(stage_val == "1단계"){
		if(mobile_on == 0){
			step1 = '';
			$('.check').fadeOut('fast');// 모든체크이미지 OFF
			$('.back_btn img').attr('src', 'img/incorrect_back_btn_on.png');   
			$('#step1 .submit_wrap a img').attr('src', 'img/submit_btn_off.png');
			setTimeout(function() {
				$('.back_btn img').attr('src', 'img/incorrect_back_btn_off.png');   
			}, 500);			
		}else{
			//console.log('mobile 초기화 1단계');
			step1_mobile = '';
			$('.check').fadeOut('fast');// 모든체크이미지 OFF
			$('.back_btn img').attr('src', 'img/incorrect_back_btn_on.png');   
			$('.mobile_submit_btn_wrap img').attr('src', 'img/submit_btn_off.png');
			setTimeout(function() {
				$('.back_btn img').attr('src', 'img/incorrect_back_btn_off.png');   
			}, 500);				
		}
		
	}
	// step 1 초기화 end
	
	// step 2 초기화 start
	if(stage_val == "2단계"){
		click_cnt = 0;
		now_id = '';
		before_id = '';
		for (var i = 1; i <= 6; i++) {
			if (i <= 3){
				$('#step2_ex0'+i+"_mobile_"+event3_type).next().children().attr('src', 'img/left_label.png');
				$('#step2_ex0'+i+"_"+event3_type).next().children().attr('src', 'img/left_label.png');
			}else{
				$('#step2_ex0'+i+"_mobile_"+event3_type).next().children().attr('src','img/right_label.png');
				$('#step2_ex0'+i+"_"+event3_type).next().children().attr('src','img/right_label.png');
			}
		}
	}
	// step 2 초기화 end

	// step 3 초기화 start
	if(stage_val == "3단계"){
		if(event3_type == "B"){
			$('.check').fadeOut('fast');// 모든체크이미지 OFF
		}
	}
	// step 3 초기화 end
	popup.close('#incorrect_pop'); 
	popup.close('#mobile_incorrect_pop'); 
}

