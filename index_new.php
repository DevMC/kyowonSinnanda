<?
include 'module/meta_new.php';
?>
<!DOCTYPE html>
<html lang="ko">
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<title>교원 미니사이트</title>

		<meta property="og:type" content="website">
		<meta property="og:title" content="<?=$event1_title?>" />   
		<meta property="og:url" content="<?=$event1_page?>" />  
		<meta property="og:description" content="<?=$event1_desc?>" />
		<meta property="og:image" content="<?=$document_url?><?=$event1_img?>"/>
		<meta name="description" content="<?=$event1_desc?>">
		<!-- <meta property="al:web:url" content="<?=$event1_page?>">-->
		<link rel="stylesheet" type="text/css" href="./main_slide/flexslider.css" />
		<link rel="stylesheet" type="text/css" href="css/style_new.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		
		<script type="text/javascript" src="./main_slide/html5lightbox.js"></script>
		<script src="./main_slide/jquery.flexslider.js"></script>
		 <!--[if lt IE 9]>
		<script type="text/javascript"  src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
		<![endif]-->

		<script src="js/main.js"></script>
		<script src="js/control.js"></script>

		<style type="text/css">
		.container1920.title_top_img { height: 679px; background-image: url('img/title_top_img_20160906.png'); background-size: 1920px 679px; background-position: center center; background-repeat: no-repeat; position:absolute; top:0px;}
		</style>
		<script type="text/javascript">
			$(document).ready(function(){
				pop20160906();
				pop20160906_mobile();
			});
		
		
			$(window).load(function() {
			
			  $('#advantage_pop_bg .flexslider').flexslider({
				animation: "slide",
				itemMargin: 0,
				animationLoop: false
			  });
			  
			  $('#advantage_pop_bg_small .flexslider').flexslider({
				animation: "slide",
				itemMargin: 0,
				animationLoop: false
			  });
			  
			  $('#pc_slide .flexslider').flexslider({
				animation: "slide",
				animationLoop: true,
				//itemWidth: 420,
				//itemMargin: 10,
				minItems: 4,
				selector : ".slides > li",
				controlNav :true,
				directionNav:true,
				after : function(slide) {
					if( slide.currentSlide == 0) {
						$('#video_comment').fadeIn('fast');
					}
				},
				before : function(slide) {
					$('#video_comment').fadeOut('fast');
				}
			  });
			  
			  $('#main_mobile_slide .flexslider').flexslider({
				animation: "slide",
				animationLoop: true,
				//itemWidth: 420,
				//itemMargin: 10,
				minItems: 2,
				selector : ".slides > li",
				controlNav :true,
				directionNav:true,
				after : function(slide) {
					if( slide.currentSlide == 0) {
						$('#video_comment_mobile').fadeIn('fast');
					}
				},
				before : function(slide) {
					$('#video_comment_mobile').fadeOut('fast');
				}
			  });
			  
			});        
			function open_advantage(){     
				$('#pop_bg').css('display','block');
				$('#advantage_pop_bg').css('display','block');
				$('#advantage_pop_bg').css('z-index','100');
				$('#advantage_pop_bg').fadeTo( "fast", 1);
			}
			function close_advantage(){
				$('#pop_bg').css('display','none');
				$('#advantage_pop_bg').fadeTo( "fast", 0, function(){
					$('#advantage_pop_bg').css('z-index','-1');
					$('#advantage_pop_bg').css('display','none');
				});
			}
			function open_advantage_small(){
				$('#pop_bg_small').css('display','block');
				$('#advantage_pop_bg_small').css('display','block');
				$('#advantage_pop_bg_small').css('z-index','100');
				$('#advantage_pop_bg_small').fadeTo( "fast", 1);
			}
			function close_advantage_small(){
				$('#advantage_pop_bg_small').fadeTo( "fast", 0, function(){
					$('#advantage_pop_bg_small').css('z-index','-1');
					$('#advantage_pop_bg_small').css('display','none');
				});
			}
			
			function pop20160906(){
				
				$("#tab20160906 .tab-list li").click(function() {

					$("#tab20160906 .tab-list li").removeClass('active');

					$("#tab20160906 .tab-list li").each(function() {
						var attr_data = $(this).find('a').attr('data');
						var src = attr_data.replace("#", "");
						$(this).find('img').attr('src', "img/" + src + "_off.png");
					});

					$("#tab20160906 .tab-content .tab-panel").removeClass('active');

					var selected = $(this).find('a').attr('data');
					var src = selected.replace("#", "");

					$(this).addClass('active');
					$(this).find('img').attr('src', 'img/' + src + "_on.png");
					$(selected).addClass('active');

				});

				
			}
			
			 function pop20160906_mobile(){
				
				$("#mobile_pop20160907_tab .tab-list li").click(function() {

					$("#mobile_pop20160907_tab .tab-list li").removeClass('active');

					$("#mobile_pop20160907_tab .tab-list li").each(function() {
						var attr_data = $(this).find('a').attr('data');
						var src = attr_data.replace("#", "");
						$(this).find('img').attr('src', "img/mobile/" + src + "_off.png");
					});

					$("#mobile_pop20160907_tab .tab-content .tab-panel").removeClass('active');

					var selected = $(this).find('a').attr('data');
					var src = selected.replace("#", "");

					$(this).addClass('active');
					$(this).find('img').attr('src', 'img/mobile/' + src + "_on.png");
					$(selected).addClass('active');

				});

				
			}
			
		</script>
	</head>
	<body>  
		<!--pc-->
		<div id="main_all_wrap" class="device_big">
		 <div id="advantage_pop_bg" class="device_big">
			<div id="pop_bg"></div>
			<div class="flexslider">
			  <div id="pop_close"><img src="./img/close_btn2.png" onclick="javascript:close_advantage();"></div>
			  <ul class="slides">
				<li>
				  <img src="./main_slide/advantage_pop_01.png" />
				</li>
				<li>
				  <img src="./main_slide/advantage_pop_02.png" />
				</li>
				<li>
				  <img src="./main_slide/advantage_pop_03.png" />
				</li>
				<li>
				  <img src="./main_slide/advantage_pop_04.png" usemap="#kyowonmore_btn">
				  <map name="kyowonmore_btn">
					<area shape="rect" coords="150,669,447,725" target="_blank" href="http://www.sinnandaschool.com/" alt="교원자세히 알아보기">
				 </map>
				</li>
			  </ul>
			</div>                
		</div>
		<!--탑메뉴-->
			<div class="container-fluid top_menu_wrap">
				<div class="container1920 position_rel">
					<div class="container960">
						<div id="top_menu">
							<h1><a href="index.php"><img src="img/kyowon_logo.png" alt="교원" class="img-responsive"></a></h1>
							<ul class="menu_list">
								<li class="list_01"><a href="index1_new.php"><img src="renew_img/pc/201610tab1_off.png" alt="신난다! 특장점 알아보기" class="img-responsive"></a></li>
								<li class="list_02"><a href="index2_new.php"><img src="renew_img/pc/201610tab2_off.png" alt="신난다! 영상 event" class="img-responsive"></a></li>
								<li class="list_03"><a href="index3_new.php"><img src="renew_img/pc/201610tab3_off.png" alt="신난다! 퍼즐 event" class="img-responsive"></a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!--탑메뉴 끝-->
			<!--컨텐츠-->
			<div class="container-fluid">
				<div class="container1920 content_back position_rel">
				 <div class="right_menu">
					<ul>
						<li><a href="http://www.sinnandaschool.com/" target="_blank"><img src="img/small_menu01.png" alt="" title="" class="img-responsive"></a></li>
						<li><a href="https://play.google.com/store/apps/details?id=com.kyowon.apps.exlp" target="_blank"><img src="img/small_menu02.png" alt="" title="" class="img-responsive"></a></li>
						<li><a href="http://blog.naver.com/sinnanda_school" target="_blank"><img src="img/small_menu03.png" alt="" title="" class="img-responsive"></a></li>
					</ul>
				</div>
				<div class="container960">
					<img src="img/main_title_20160906.png" alt="교원 체험학습 이벤트">
				</div>
				<div class="container1920 title_top_img"></div>
				 <div class="container960 content_slide">
					 <a href="#" style="width:235px; height:230px; display:block; position:absolute; left:790px; top:-280px;" onclick="popup.open('#event_pop_20160906_pc');"></a>
					<div class="video_wrap" id="pc_slide">
						<div style="position:absolute; top:-35px; left:-50px; z-index:20;" id="video_comment">
							<img src="img/video_comment201609.png">
						</div>
						<div class="flexslider">
						  <ul class="slides">
							<!--slide01--->
							<li>                                   
								<div class="video_box">
									<div class="image_tn">
										<a href="https://www.youtube.com/embed/B-Mt38InG9Q?rel=0" data-showsocial="true" class="html5lightbox">
										<img src="img/vod_thum_img20160909.jpg">
										</a>
									</div>

									<!-- <iframe width="197" height="133" src="https://www.youtube.com/embed/BeMYX6UN6N4?wmode=transparent" frameborder="0" allowfullscreen data-lightbox="example-1"></iframe> -->
								</div>
								<a href="http://blog.naver.com/sinnanda_school/220835235070" target="_blank">
									<img src="main_slide/img/main_thum_20161019_04.jpg" />
								</a>
								<a href="http://blog.naver.com/sinnanda_school/220835028055" target="_blank">
									<img src="main_slide/img/main_thum_20161019_02.jpg" />
								</a>                                   
								<a href="http://blog.naver.com/sinnanda_school/220824521520" target="_blank">
									<img src="main_slide/img/main_thum_20161019_03.jpg" />
								</a>
								
							</li>
							<!--slide02--->
							<li>
								<a href="http://blog.naver.com/sinnanda_school/220835036564" target="_blank">
									<img src="main_slide/img/main_thum_20161019_01.jpg" />
								</a>
								<a href="http://blog.naver.com/sinnanda_school/220824523872" target="_blank">
									<img src="main_slide/img/main_thum_20161019_05.jpg" />
								</a>                                   
								<a href="http://blog.naver.com/sinnanda_school/220822775588" target="_blank">
									<img src="main_slide/img/main_thum_2016928_01.jpg" />
								</a>
								<a href="http://blog.naver.com/sinnanda_school/220822780579" target="_blank">
									<img src="main_slide/img/main_thum_2016928_02.jpg" />
								</a>
							</li>
							<!--slide03--->
							<li>
								<a href="http://blog.naver.com/sinnanda_school/220791605361" target="_blank">
									<img src="main_slide/img/main_thum_20160819_01.jpg" />
								</a>
								 <a href="http://blog.naver.com/sinnanda_school/220797437209" target="_blank">
									<img src="main_slide/img/main_thum_20160819_02.jpg" />
								</a>
								<a href="http://blog.naver.com/sinnanda_school/220791607646" target="_blank">
									<img src="main_slide/img/main_thum_20160819_03.jpg" />
								</a>
							</li>
						  </ul>
						</div>
					</div>
					<div class="app_down">
					  <a href="https://play.google.com/store/apps/details?id=com.kyowon.apps.exlp" target="_blank"><img src="img/app_down_btn.png" alt="구글 플레이"></a>
					</div>
				</div>
				<div class="container960">
					<img src="renew_img/pc/20161017_jump.png" style="margin-top:30px;" usemap="#pc_main_jump_btn">
					<map name="pc_main_jump_btn">
					  <area shape="rect" coords="1,1,479,117" href="index2_new.php" alt="영상감상 이벤트" title="영상감상 이벤트">
					  <area shape="rect" coords="478,1,956,117" href="index3_new.php" alt="퀴즈 이벤트" title="퀴즈 이벤트">
					</map>
				</div>
				<div class="clearfix"></div>
				
				
				</div>   
			   
			</div>
			<!--컨텐츠 끝-->
			<div class="clearfix"></div>
			<!--하단-->
			<div class="container-fluid" id="footer">
				<div class="container1920">
					<div class="left_copy">
						<p>주소 : 서울시 종로구 청계천로 51-1 구몬빌딩 12층</p>
						<p>우편번호 : 03189</p>
					</div>
					<div class="right_copy">
						COPYRIGHT © 2016 KYOWON.CO.LTD ALL RIGHTS RESERVED
					</div>
				  
				</div>
			</div>
			 <div class="clearfix"></div>
			<!--하단 끝-->
			<div class="popup" id="event_pop_20160906_pc" style="display:none; height:auto;">
				<a href="javascript:;" class="close_btn" onclick="popup.close('#event_pop_20160906_pc');"><img src="img/close_btn2.png" data-evernote-hover-show="true"></a>
				<img src="img/20161007pop01.png">
				<div id="tab20160906">
					<ul class="tab-list">
						<li class="active" style="width:404px;">
							<a href="javascript:void(0);" data="#tab01">
								<img src="img/tab01_on.png">
							</a>
						</li>
						<li style="width:393px;">
						  <a href="javascript:void(0);" data="#tab02">
								<img src="img/tab02_off.png">
							</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-panel active position_rel" id="tab01">
							<img src="img/20161005pop03.png" class="contents_back" alt="" style="left:-19px;">
							<div class="contents_box box01">
								<p class="big_title">체험학습 교재 전집</p>
								<p class="small_title">
									<span>양수경(4452)</span>      
									<span>조연경(8071)</span>      
									<span>안선미(5725)</span>      
									<span>길선희(4838)</span>      
									<span>정혜원(9775)</span>
								</p>
								<p class="big_title">영화예매권</p>
								<p class="small_title">
									<span>위세정(9258)</span>      
									<span>이경민(7868)</span>      
									<span>이자영(9678)</span>      
									<span>이정민(9569)</span>      
									<span>이태임(1123)</span>
								</p>
								<p class="small_title">
									<span>이혜영(7578)</span>      
									<span>임외숙(5486)</span>      
									<span>정현진(2472)</span>      
									<span>조다혜(7141)</span>      
									<span>김대이(4144)</span>
								</p>
								<p class="small_title">
									<span>차아련(0301)</span>      
									<span>최민정(4710)</span>      
									<span>최의명(7877)</span>      
									<span>허지은(8286)</span>      
									<span>김미선(0154)</span>
								</p>
								<p class="small_title">
									<span>김민준(5630)</span>      
									<span>김애숙(3573)</span>      
									<span>김영훈(3126)</span>      
									<span>김은경(8725)</span>      
									<span>임선애(4148)</span>
								</p>
								<p class="small_title">
									<span>김하연(5148)</span>      
									<span>박세정(3315)</span>      
									<span>박진경(2449)</span>      
									<span>오병숙(9804)</span>      
									<span>이가빈(2192)</span>
								</p>
								<p class="big_title">아이스커피</p>
								<p class="small_title">
									<span>감동근(2784)</span>       
									<span>조소현(8415)</span>      
									<span>김미란(1016)</span>      
									<span>김수연(3284)</span>      
									<span>김영효(0160)</span>
								</p>      
								<p class="small_title">
									<span>김은혜(2660)</span>      
									<span>김정희(7452)</span>      
									<span>김한슬(5141)</span>      
									<span>김현숙(6914)</span>      
									<span>김화선(7944)</span>
								</p>    
								<p class="small_title">  
									<span>박지혜(3528)</span>     
									<span>배지은(5287)</span>      
									<span>김정희(6650)</span>      
									<span>오인애(4754)</span>      
									<span>이정희(6488)</span>
								</p>
								<p class="small_title">     
									<span>이혜선(1128)</span>       
									<span>이혜정(4709)</span>      
									<span>정지호(2652)</span>      
									<span>임은환(7465)</span>      
									<span>임주희(1123)</span>
								</p>   
								<p class="small_title">  
									<span>장승은(5603)</span>  
								</p>
								
							</div>
							<div class="contents_box box02">
								<p class="big_title">체험학습 무료 이용권</p>
								<p class="small_title"> 
									<span>김애숙(3573)</span>
									<span>길선희(4838)</span>
									<span>김영훈(3126)</span>
									<span>박주희(9237)</span>
									<span>안선미(5725)</span>
								</p>
								<p class="small_title">
									<span>조은영(9252)</span>
									<span>이희선(7330)</span>
									<span>조소현(8415)</span>
									<span>방은영(5951)</span>
									<span>정성연(8649)</span>
								</p>
								<p class="big_title">해피포인트 1만원</p>
								<p class="small_title">
									<span>전영미(1783)</span>
									<span>이애경(7611)</span>
									<span>이은미(9135)</span>
									<span>윤희영(0215)</span>
									<span>김혜영(4830)</span>
								</p>
								<p class="small_title">
									<span>박민아(8878)</span>
									<span>박영순(0274)</span>
									<span>오인애(4754)</span>
									<span>이수연(3219)</span>
									<span>이혜영(7578)</span>
								</p>
								<p class="small_title">
									<span>김은혜(2660)</span>
									<span>정민주(3355)</span>
									<span>조다혜(7141)</span>
									<span>조명희(4522)</span>
									<span>김로희(8919)</span>
								</p>
								<p class="small_title">
									<span>허준혁(8426)</span>
									<span>가보경(0624)</span>
									<span>강민건(5287)</span>
									<span>윤고경(7170)</span>
									<span>남미영(0199)</span>
								</p>
								
								<p class="big_title">문화상품권 5천원</p>
								<p class="small_title">
									<span>장종아(5002)</span>
									<span>전미연(0932)</span>
									<span>하지선(0703)</span>
									<span>허보경(4314)</span>
									<span>임주희(1123)</span>
								</p>
								<p class="small_title">
									<span>장승은(5603)</span>
									<span>강승여(7333)</span>
									<span>곽경신(0959)</span>
									<span>박화숙(6022)</span>
									<span>정혜원(9775)</span>
								</p>
								<p class="small_title">
									<span>박현진(7462)</span>
									<span>성은경(5548)</span>
									<span>조연제(7454)</span>
									<span>조한구(9353)</span>
									<span>최의명(7877)</span>
								</p>
								<p class="small_title">
									<span>홍영숙(0977)</span>
									<span>이혜정(4709)</span>
									<span>임선애(4148)</span>
									<span>곽지현(2289)</span>
									<span>김경임(5667)</span>
								</p>
								<p class="small_title">
									<span>임업순(3676)</span>
									<span>정유준(3355)</span>
									<span>박한경(5959)</span>
									<span>손정은(3889)</span>
									<span>곽동빈(7418)</span>
								</p>
								<p class="small_title">
									<span>김상미(6598)</span>
									<span>김영효(0160)</span>
									<span>김옥희(4427)</span>
									<span>박세정(3315)</span>
									<span>신연희(6519)</span>
								</p>
								<p class="big_title">바나나우유</p>
								<p class="small_title">
									<span>임은환(7465)</span>
									<span>전옥진(2648)</span>
									<span>김정희(7452)</span>
									<span>김한슬(5141)</span>
									<span>김은희(9409)</span>
								</p>
								<p class="small_title">
									<span>서정희(4377)</span>
									<span>양수경(4452)</span>
									<span>옥수영(5333)</span>
									<span>차아련(0301)</span>
									<span>최은영(7327)</span>
								</p>
								<p class="small_title">
									<span>하미현(0368)</span>
									<span>홍성희(7418)</span>
									<span>차선영(3782)</span>
									<span>홍지나(0090)</span>
									<span>홍미화(8826)</span>
								</p>
								<p class="small_title">
									<span>김은경(8725)</span>
									<span>임외숙(5486)</span>
									<span>정요희(3190)</span>
									<span>이혜선(1128)</span>
									<span>정은경(7725)</span>
								</p>
								<p class="small_title">
									<span>정현숙(7614)</span>
									<span>조연경(8071)</span>
									<span>지유정(8150)</span>
									<span>황현경(5557)</span>
									<span>박지연(2492)</span>
								</p>
								<p class="small_title">
									<span>박지원(0075)</span>
									<span>박은영(4112)</span>
									<span>송은령(2011)</span>
									<span>곽윤지(7418)</span>
									<span>김미란(1016)</span>
								</p>
								<p class="small_title">
									<span>김수연(3284)</span>
									<span>김선일(3378)</span>
									<span>이가빈(2192)</span>
									<span>이선우(7036)</span>
									<span>지영심(1386)</span>
								</p>
								<p class="small_title">
									<span>김형민(5692)</span>
									<span>윤은정(5031)</span>
									<span>정지호(2652)</span>
									<span>김정희(6650)</span>
									<span>이정숙(7913)</span>
								</p>
								<p class="small_title">
									<span>정지윤(2636)</span>
									<span>김희정(0231)</span>
									<span>최연주(9421)</span>
									<span>이의정(7416)</span>
									<span>김수연(8404)</span>
								</p>
								<p class="small_title">
									<span>김연정(4980)</span>
									<span>이자영(9678)</span>
									<span>이정민(9569)</span>
									<span>김현숙(6914)</span>
									<span>이소현(7805)</span>
								</p>
							</div>
						</div>
						<div class="tab-panel" id="tab02">
							<img src="img/20160906_tab_title.png" class="info_img_title">
							<div class="tab02_conten">
							· &nbsp;&nbsp;전집 당첨자의 경우 배송을 위한 주소지 확인 및 본인 확인 절차가 이루어질 예정이오니, <br>
							&nbsp;&nbsp;&nbsp;&nbsp;개인 정보 변경은 당첨자 발표 후 일주일 이내에 연락 주시기 바랍니다. <br>
							· &nbsp;&nbsp;참여자 본인의 이름, 연락처가 아닌 정보로 부정 참여할 경우, <br>
							&nbsp;&nbsp;&nbsp;&nbsp;적발시 참여 내역이 무통보 삭제 됩니다.<br>
							· &nbsp;&nbsp;상품을 배송 받으실 연락처 및 주소 변경을 원하시는 경우, <br>
							&nbsp;&nbsp;&nbsp;&nbsp;당첨자 발표 후 일주일 이내에 연락 주셔야 변경 가능합니다.<br>
							· &nbsp;&nbsp;경품은 당첨자 발표 후 2주 내에 발송되며, 당첨자 발표 후, <br>
							  &nbsp;&nbsp;&nbsp;&nbsp;10일 내에 연락이 닿지 않은 경우 당첨이 취소 됩니다.<br>
							· &nbsp;&nbsp;기타 문의 사항은 하단에 기재된 연락처로 문의 주시면 안내 받으실 수 있습니다.<br>
							 &nbsp;&nbsp;&nbsp;&nbsp;<span>E-mail : kyowon@naver.com</span><br>
							</div>
						</div>
					</div>
				 </div>
			</div>
		</div>
		<!--PC-->
		<!--모바일-->
	  
		<div class="container960 device_small">
			 <div id="advantage_pop_bg_small" class="device_small">
				<div id="pop_bg_small"></div>
				<div class="flexslider">
				  <div id="pop_close_small"><img src="./img/close_btn2.png" onclick="javascript:close_advantage_small();"></div>
				  <ul class="slides">
					<li>
					  <img src="./main_slide/advantage_pop_01_small.png" />
					</li>
					<li>
					  <img src="./main_slide/advantage_pop_02_small.png" />
					</li>
					<li>
					  <img src="./main_slide/advantage_pop_03_small.png" />
					</li>
					<li class="position_rel">
					  <img src="./main_slide/advantage_pop_04_small_01.png">
					  <span class="btn_wrap">
						   <a href="http://www.sinnandaschool.com/" target="_blank" class="more_link"><img src="./main_slide/advantage_more_btn.png" class="img-responsive"></a>
					  </span>
					</li>
				  </ul>
				</div>                
			</div>
			<div class="position_rel">                   
				<div id="mobile_nav">
				<h1><a href="index.php"><img src="img/mobile_logo.png" alt="교원 신난다 체험스쿨" class="img-responsive"></a></h1>
				<ul class="nav">
					<li><a href="http://blog.naver.com/sinnanda_school" target="_blank"><img src="img/mobile_small_menu03.png" alt=""></a></li>
					<li><a href="https://play.google.com/store/apps/details?id=com.kyowon.apps.exlp" target="_blank"><img src="img/mobile_small_menu02.png" alt=""></a></li>
					<li><a href="http://www.sinnandaschool.com/" target="_blank"><img src="img/mobile_small_menu01.png" alt=""></a></li>
				</ul>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="position_rel">
			<div id="content_menu">
					<ul>
						<li><a href="index1_new.php"><img src="renew_img/mobile/201610tab1_off_mobile.png" alt="신난다! 특장점 알아보기"></a></li>
						<li><a href="index2_new.php"><img src="renew_img/mobile/201610tab2_off_mobile.png" alt="신난다! 영상 event"></a></li>
						<li><a href="index3_new.php"><img src="renew_img/mobile/201610tab3_off_mobile.png" alt="신난다! 퍼즐 event"></a></li>
					</ul>
				</div>
			</div>
			<div class="clearfix"></div>
			<!--컨텐츠 시작-->
			<div class="container960" id="mobile_main">
				<img src="img/mobile_main_title20160906.png" class="img-responsive">
				<div class="position_rel">
				<!--당첨자 팝업 버튼-->
				<a href="javascript:;" class="mobile_pop20160907_btn" onclick="popup.open('#mobile_pop20160907');"></a>
				<img src="img/mobile/vod_Wrap2_0815.png" class="img-responsive">
				<div class="vod_wrap" id="main_mobile_slide" style="top:25.5%">
					<div class="vod_inner_wrap" style="width:68%; position:relative;">
							<div style="position:absolute; top:-5%; left:-30px; z-index:20;" id="video_comment_mobile">
							<img src="img/video_comment201609.png" class="video_comment">
						</div>
						<div class="flexslider">
						  <ul class="slides">
							<!--slide01--->
							<li>                                   
								<div class="video_box">
									<div class="image_tn">
										<a href="https://www.youtube.com/embed/B-Mt38InG9Q?rel=0" data-showsocial="true" class="html5lightbox">
										<img src="img/vod_thum_img20160909.jpg" class="img-responsive_50">
										</a>
									</div>

									<!-- <iframe width="197" height="133" src="https://www.youtube.com/embed/BeMYX6UN6N4?wmode=transparent" frameborder="0" allowfullscreen data-lightbox="example-1"></iframe> -->
								</div>
								<a href="http://blog.naver.com/sinnanda_school/220835235070" target="_blank">
									<img src="main_slide/img/main_thum_20161019_04_mobile.jpg" class="img-responsive_50">
								</a>
								<a href="http://blog.naver.com/sinnanda_school/220835028055" target="_blank">
									<img src="main_slide/img/main_thum_20161019_02_mobile.jpg" class="img-responsive_50">
								</a>                                   
								<a href="http://blog.naver.com/sinnanda_school/220824521520" target="_blank">
									<img src="main_slide/img/main_thum_20161019_03_mobile.jpg" class="img-responsive_50">
								</a>
								
							</li>
							<!--slide02--->
							<li>
								<a href="http://blog.naver.com/sinnanda_school/220835036564" target="_blank">
									<img src="main_slide/img/main_thum_20161019_01_mobile.jpg" class="img-responsive_50">
								</a>
								<a href="http://blog.naver.com/sinnanda_school/220824523872" target="_blank">
									<img src="main_slide/img/main_thum_20161019_05_mobile.jpg" class="img-responsive_50">
								</a>                                   
								<a href="http://blog.naver.com/sinnanda_school/220822775588" target="_blank">
									<img src="main_slide/img/main_thum_20160928_01_mobile.jpg" class="img-responsive_50">
								</a>
								<a href="http://blog.naver.com/sinnanda_school/220822780579" target="_blank">
									<img src="main_slide/img/main_thum_20160928_02_mobile.jpg" class="img-responsive_50">
								</a>
							</li>
							<!--slide03--->
							<li>
								<a href="http://blog.naver.com/sinnanda_school/220791605361" target="_blank">
									<img src="main_slide/img/main_thum_20160819_01_mobile.jpg" class="img-responsive_50">
								</a>
								 <a href="http://blog.naver.com/sinnanda_school/220797437209" target="_blank">
									<img src="main_slide/img/main_thum_20160819_02_mobile.jpg" class="img-responsive_50">
								</a>
								<a href="http://blog.naver.com/sinnanda_school/220791607646" target="_blank">
									<img src="main_slide/img/main_thum_20160819_03_mobile.jpg" class="img-responsive_50">
								</a>
							</li>
						  </ul>
						</div>
					</div>
				</div>
				</div>
				<div class="position_rel">
					<img src="img/app_down_back.png" class="img-responsive">
					<div class="app_down_btn_Wrap">
					 <div class="app_down_btn_innerWrap">
					 <a href="https://play.google.com/store/apps/details?id=com.kyowon.apps.exlp" target="_blank"><img src="img/appdown_btn.png" alt="구글 플레이" class="img-responsive"></a>
					 </div>
					</div>
				</div>
				<div class="position_rel">
					<div style="overflow:hidden; width:65%; margin:0 auto; padding-bottom:5%;">
						<a href="index2_new.php" style="display:block; margin-top:5%; width:48%; float:left;">
							<img src="img/mobile/201609btn1_mobile.png" class="img-responsive">
						</a>
						<a href="index3_new.php" style="display:block; margin-top:5%; width:48%; float:right;">
							<img src="renew_img/mobile/201610btn2_mobile.png" class="img-responsive">
						</a>
					</div>
				</div>
				<!--당첨자 팝업-->
				<style>
					#mobile_pop20160907 .tab01_box {
						width: 90%;
						background-color: #fff;
						height: 20%;
						z-index: 10;
						position: absolute;
						margin: 0 3%;
						overflow-y: overlay;
						padding: 2% 1%;
						line-height: 1.5;
					}
					#mobile_pop20160907 .cont_box1{
						top:30%;
					}
					#mobile_pop20160907 .cont_box2{
						top:70%;
					}
				</style>
				<div class="popup" id="mobile_pop20160907" style="height:auto;">
					<a href="javascript:;" onclick="popup.close('#mobile_pop20160907');" class="close_btn">
						<img src="./img/close_btn2.png">
					</a>
					<img src="img/mobile/mobile_popup_20161007.png" alt="" class="img-responsive">
					<div id="mobile_pop20160907_tab">
					<ul class="tab-list">
						<li class="active">
							<a href="javascript:void(0);" data="#mobile20160907_tab01"><img src="img/mobile/mobile20160907_tab01_on.png" class="img-responsive" /></a>
						</li>
						<li>
							<a href="javascript:void(0);" data="#mobile20160907_tab02"><img src="img/mobile/mobile20160907_tab02_off.png" class="img-responsive" /></a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-panel active" id="mobile20160907_tab01">
							<div class="tab_zindex">
								<img src="./img/mobile/mobile20161005_tab01_back.png" class="img-responsive">
								<div class="tab01_box cont_box1">
									<p class="big_title">체험학습 교재 전집</p>
									<p class="small_title">
										<span>양수경(4452)</span>      
										<span>조연경(8071)</span>      
										<span>안선미(5725)</span>      
										<span>길선희(4838)</span>      
										<span>정혜원(9775)</span>
									</p>
									<p class="big_title">영화예매권</p>
									<p class="small_title">
										<span>위세정(9258)</span>      
										<span>이경민(7868)</span>      
										<span>이자영(9678)</span>      
										<span>이정민(9569)</span>      
										<span>이태임(1123)</span>
										<span>이혜영(7578)</span>      
										<span>임외숙(5486)</span>      
										<span>정현진(2472)</span>      
										<span>조다혜(7141)</span>      
										<span>김대이(4144)</span>
										<span>차아련(0301)</span>      
										<span>최민정(4710)</span>      
										<span>최의명(7877)</span>      
										<span>허지은(8286)</span>      
										<span>김미선(0154)</span>
										<span>김민준(5630)</span>      
										<span>김애숙(3573)</span>      
										<span>김영훈(3126)</span>      
										<span>김은경(8725)</span>      
										<span>임선애(4148)</span>
										<span>김하연(5148)</span>      
										<span>박세정(3315)</span>      
										<span>박진경(2449)</span>      
										<span>오병숙(9804)</span>      
										<span>이가빈(2192)</span>
									</p>
									<p class="big_title">아이스커피</p>
									<p class="small_title">
										<span>감동근(2784)</span>       
										<span>조소현(8415)</span>      
										<span>김미란(1016)</span>      
										<span>김수연(3284)</span>      
										<span>김영효(0160)</span>
										<span>김은혜(2660)</span>      
										<span>김정희(7452)</span>      
										<span>김한슬(5141)</span>      
										<span>김현숙(6914)</span>      
										<span>김화선(7944)</span>
										<span>박지혜(3528)</span>     
										<span>배지은(5287)</span>      
										<span>김정희(6650)</span>      
										<span>오인애(4754)</span>      
										<span>이정희(6488)</span>    
										<span>이혜선(1128)</span>       
										<span>이혜정(4709)</span>      
										<span>정지호(2652)</span>      
										<span>임은환(7465)</span>      
										<span>임주희(1123)</span>  
										<span>장승은(5603)</span>  
									</p>
								</div>
								<div class="tab01_box cont_box2">
									<p class="big_title">체험학습 무료 이용권</p>
									<p class="small_title"> 
										<span>김애숙(3573)</span>
										<span>길선희(4838)</span>
										<span>김영훈(3126)</span>
										<span>박주희(9237)</span>
										<span>안선미(5725)</span>
										<span>조은영(9252)</span>
										<span>이희선(7330)</span>
										<span>조소현(8415)</span>
										<span>방은영(5951)</span>
										<span>정성연(8649)</span>
									</p>
									<p class="big_title">해피포인트 1만원</p>
									<p class="small_title">
										<span>전영미(1783)</span>
										<span>이애경(7611)</span>
										<span>이은미(9135)</span>
										<span>윤희영(0215)</span>
										<span>김혜영(4830)</span>
										<span>박민아(8878)</span>
										<span>박영순(0274)</span>
										<span>오인애(4754)</span>
										<span>이수연(3219)</span>
										<span>이혜영(7578)</span>
										<span>김은혜(2660)</span>
										<span>정민주(3355)</span>
										<span>조다혜(7141)</span>
										<span>조명희(4522)</span>
										<span>김로희(8919)</span>
										<span>허준혁(8426)</span>
										<span>가보경(0624)</span>
										<span>강민건(5287)</span>
										<span>윤고경(7170)</span>
										<span>남미영(0199)</span>
									</p>
									
									<p class="big_title">문화상품권 5천원</p>
									<p class="small_title">
										<span>장종아(5002)</span>
										<span>전미연(0932)</span>
										<span>하지선(0703)</span>
										<span>허보경(4314)</span>
										<span>임주희(1123)</span>
										<span>장승은(5603)</span>
										<span>강승여(7333)</span>
										<span>곽경신(0959)</span>
										<span>박화숙(6022)</span>
										<span>정혜원(9775)</span>
										<span>박현진(7462)</span>
										<span>성은경(5548)</span>
										<span>조연제(7454)</span>
										<span>조한구(9353)</span>
										<span>최의명(7877)</span>
										<span>홍영숙(0977)</span>
										<span>이혜정(4709)</span>
										<span>임선애(4148)</span>
										<span>곽지현(2289)</span>
										<span>김경임(5667)</span>
										<span>임업순(3676)</span>
										<span>정유준(3355)</span>
										<span>박한경(5959)</span>
										<span>손정은(3889)</span>
										<span>곽동빈(7418)</span>
										<span>김상미(6598)</span>
										<span>김영효(0160)</span>
										<span>김옥희(4427)</span>
										<span>박세정(3315)</span>
										<span>신연희(6519)</span>
									</p>
									<p class="big_title">바나나우유</p>
									<p class="small_title">
										<span>임은환(7465)</span>
										<span>전옥진(2648)</span>
										<span>김정희(7452)</span>
										<span>김한슬(5141)</span>
										<span>김은희(9409)</span>
										<span>서정희(4377)</span>
										<span>양수경(4452)</span>
										<span>옥수영(5333)</span>
										<span>차아련(0301)</span>
										<span>최은영(7327)</span>
										<span>하미현(0368)</span>
										<span>홍성희(7418)</span>
										<span>차선영(3782)</span>
										<span>홍지나(0090)</span>
										<span>홍미화(8826)</span>
										<span>김은경(8725)</span>
										<span>임외숙(5486)</span>
										<span>정요희(3190)</span>
										<span>이혜선(1128)</span>
										<span>정은경(7725)</span>
										<span>정현숙(7614)</span>
										<span>조연경(8071)</span>
										<span>지유정(8150)</span>
										<span>황현경(5557)</span>
										<span>박지연(2492)</span>
										<span>박지원(0075)</span>
										<span>박은영(4112)</span>
										<span>송은령(2011)</span>
										<span>곽윤지(7418)</span>
										<span>김미란(1016)</span>
										<span>김수연(3284)</span>
										<span>김선일(3378)</span>
										<span>이가빈(2192)</span>
										<span>이선우(7036)</span>
										<span>지영심(1386)</span>
										<span>김형민(5692)</span>
										<span>윤은정(5031)</span>
										<span>정지호(2652)</span>
										<span>김정희(6650)</span>
										<span>이정숙(7913)</span>
										<span>정지윤(2636)</span>
										<span>김희정(0231)</span>
										<span>최연주(9421)</span>
										<span>이의정(7416)</span>
										<span>김수연(8404)</span>
										<span>김연정(4980)</span>
										<span>이자영(9678)</span>
										<span>이정민(9569)</span>
										<span>김현숙(6914)</span>
										<span>이소현(7805)</span>
									</p>
								</div>
							</div>
						</div>
						<div class="tab-panel" id="mobile20160907_tab02">
							<img src="img/mobile/mobile20160907_tab02_back.png" class="img-responsive">
						</div>
					</div>
				</div>
				</div>
			</div>
			<!--컨텐츠 끝-->
			<div id ="mobile_footer">
				<p>주소 : 서울시 종로구 청계천로 51-1 구몬빌딩 12층</p>
				<p>우편번호 : 03189</p>
				<p>CCOPYRIGHT © 2016 KYOWON.CO.LTD ALL RIGHTS RESERVED</p>
			</div>

		</div>
	
		<!--모바일 끝-->
	</body>
</html>
