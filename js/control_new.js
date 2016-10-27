var referer = document.referrer;//유입경로
var gubunevent = "";//이벤트 구분
$(document).ready(function(){
	gubunevent = $('.gubunevent').val();
	viewCnt();
});

function viewCnt(){
	$.ajax({
		type : "POST",
		url : "./module/control_new.php",
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


var insert_user = function(name, phone) { 
    //console.log(gubunevent);
	$.ajax({
		type : "POST",
		url : "./module/control_new.php",
		data : {
			"insert" : 'insert',
			"evt_gubun" : gubunevent,
			"referer" : referer,
			"name" : name,
			"phone" : phone
		},
		dataType : "html",
		success : function(data) {
			console.log('성공'+ data);
			if(gubunevent == "event2"){
				if(mobile_on == 0){
					popup.open('#sns_share_pop');
				}else{
					popup.open('#mobile_sns_share_pop');
				}							
				
			}else if(gubunevent == "event2"){
				window.location.reload();
			}
			
			if(gubunevent == "event3"){
				if(mobile_on == 0){
					popup.open('#sns_share_pop3');
				}else{
					popup.open('#mobile_sns_share_pop3');
				}							
				
			}else if(gubunevent == "event3"){
				window.location.reload();
			}

		},
		error : function(xhr, status, error) {
			//alert('error');
		}
	}); 				

};

