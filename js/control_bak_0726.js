var referer = document.referrer;//유입경로
var gubunevent = "";//이벤트 구분
$(document).ready(function(){
	gubunevent = $('.gubunevent').val();
	viewCnt();
});

function sns_share_count(click_sns, phone){
	$.ajax({
		type : "POST",
		url : "./module/control.php",
		data : {
			"sns_share" : 'sns_share',
			"click_sns" : click_sns,
			"phone" : phone,
			"evt_gubun" : gubunevent
		},
		dataType : "html",
		success : function(data) {
			//console.log(data);
		},
		error : function(xhr, status, error) {
			//alert('error');
		}
	});	
}

function viewCnt(){
	$.ajax({
		type : "POST",
		url : "./module/control.php",
		data : {
			"viewcount" : 'viewcount',
			"evt_gubun" : gubunevent,
			"referer" : referer
		},
		dataType : "html",
		success : function(data) {
			//console.log(data);
		},
		complete : function(data) {
			//통신이 실패했어도 완료가 되었을때 이 함수를 타게 됨.
		},
		error : function(xhr, status, error) {
			//alert('error');
		}
	});	
}

var insert_user = function(name, phone, gift, fb_click, tw_click ,kt_click, ks_click) { 
	$.ajax({
		type : "POST",
		url : "./module/control.php",
		data : {
			"select" : 'select',
			"phone" : phone,
			"evt_gubun" : gubunevent,
		},
		dataType : "html",
		success : function(data) {
			console.log(data);
			if (data) {//중복검사
				alert("이미 참여 하셨습니다.");
				window.location.reload();
			}else{//insert
				$.ajax({
					type : "POST",
					url : "./module/control.php",
					data : {
						"insert" : 'insert',
						"evt_gubun" : gubunevent,
						"referer" : referer,
						"name" : name,
						"phone" : phone,
						"gift" : gift,
						"fb_click" : fb_click,
						"tw_click" : tw_click, 
						"kt_click" : kt_click,
						"ks_click" : ks_click
					},
					dataType : "html",
					success : function(data) {
						//console.log(data);
						if(gubunevent == "event1"){
							if(mobile_on == 0){
								popup.open('#sns_share_pop');
							}else{
								popup.open('#mobile_sns_share_pop');
							}							
							
						}else if(gubunevent == "event2"){
							window.location.reload();
						}
					},
					error : function(xhr, status, error) {
						//alert('error');
					}
				}); 				
			}//insert end	
		},
		error : function(xhr, status, error) {
			//alert('error');
		}
	});	
};


var insert_user_event3 = function(name, phone, stage, choice, step) { 
	$.ajax({
		type : "POST",
		url : "./module/control.php",
		data : {
			"insert_event3" : 'insert_event3',
			"evt_gubun" : gubunevent,
			"referer" : referer,
			"name" : name,
			"phone" : phone,
			"stage" : stage,// 1,2,3단계
			"step" : step
		},
		dataType : "html",
		success : function(data) {
			//console.log(data);
			if (gubunevent == "event3") {
				if (choice == "stop")
					if (mobile_on == 0) {//pc
						popup.open('#complete_pop');
					} else {//mobile
						popup.open('#mobile_sns_share3_pop');
					}	
				if (choice == "next") {
					if (mobile_on == 0) {//pc
						if(step == 1){
							$('#step' + step + '_answer_pop .next_btn img').attr('src', 'img/step1_next_btn_on.png');
							popup.close('#step' + step + '_answer_pop');
							$('#step' + step + ' .submit_wrap').fadeOut('slow');
							$('#step' + step).css('display', 'none');
							$('#step' + (step + 1) + "_"+event3_type).css('display', 'block');						
						}else if(step == 2){
							$('#step' + step + '_answer_pop .next_btn img').attr('src', 'img/step1_next_btn_on.png');
							popup.close('#step' + step + '_answer_pop_'+event3_type);
							$('#step' + step+"_"+event3_type+' .submit_wrap').fadeOut('slow');
							$('#step' + step+ "_"+event3_type).css('display', 'none');
							$('#step' + (step + 1) + "_"+event3_type).css('display', 'block');							
						}else{
							popup.open('#complete_pop');								
						}
					}else{//mobile
						if(step == 1){
							$('#mobile_step1_wrap .mobile_submit_btn_wrap img').attr('src', 'img/mobile_submit_btn_off.png');
							popup.close('#mobile_sub3_answer_step1');
							$('#mobile_step1_wrap .mobile_submit_btn_wrap').fadeOut('slow');
							$('#mobile_step1_wrap').css('display', 'none');
							$('#mobile_step2_'+event3_type+'_wrap').css('display', 'block');						
						}else if(step == 2){
							popup.close('#mobile_sub3_answer_step2_'+event3_type);
							$('#mobile_step2_wrap'+event3_type+' .mobile_submit_btn_wrap').fadeOut('slow');
							$('#mobile_step2_'+event3_type+'_wrap').css('display', 'none');
							$('#mobile_step3_'+event3_type+'_wrap').css('display', 'block');		
						}else{
							popup.open('#mobile_sns_share3_pop');								
						}						
					}
				}
			}
		},
		error : function(xhr, status, error) {
			//alert('error');
		}
	});
								
};



/*
function set_use_cookie(){
	 
	if($.cookie('ck_name') != "undefined"){
		console.log("쿠기 값넣는다");
		$('.a1').attr('value', $.cookie('ck_ssaman'));
		cntimg = $.cookie('ck_card');
		
		$('#name').attr('value', $.cookie('ck_name'));
		$('#tel').attr('value', $.cookie('ck_phone'));
		$('#agree_check1').attr('checked', true);
	}
	
}

function use_cookie( ck_ssaman, ck_card, ck_name, ck_phone){
	
	$.cookie('ck_ssaman', 'undefined');// 삭제
	$.cookie('ck_card', 'undefined');
	
	$.cookie('ck_name', 'undefined');
	$.cookie('ck_phone', 'undefined');
	
	
	$.cookie('ck_ssaman' , ck_ssaman,  { expires : 1, path : '/' });
	$.cookie('ck_card' , ck_card,  { expires : 1, path : '/' });
		
	$.cookie('ck_name' , ck_name,  { expires : 1, path : '/' });	
	$.cookie('ck_phone' , ck_phone,  { expires : 1, path : '/' });	
		
	
}
*/