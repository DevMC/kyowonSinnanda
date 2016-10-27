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
	<meta property="og:title" content="<?=$event2_title?>" />
	<meta property="og:url" content="<?=$event2_page?>" />
	<meta property="og:description" content="<?=$event2_desc?>" />
	<meta property="og:image" content="<?=$document_url?><?=$event2_img?>"/>
	<meta name="description" content="<?=$event2_desc?>">
	<link rel="stylesheet" type="text/css" href="css/style_new.css" />
	<link rel="stylesheet" type="text/css" href="css/check-style.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>
	<script src="js/main_new.js"></script>
	<script src="js/control_new.js"></script>
</head>
<body>
	<!--PC-->
	<div id="main_all_wrap" class="device_big">
		<!--탑메뉴-->
		<div class="container-fluid top_menu_wrap">

			<div class="container1920 position_rel">
				<div class="container960">
					<div id="top_menu">
						<h1><a href="index.php"><img src="img/kyowon_logo.png" alt="교원" class="img-responsive"></a></h1>
						<ul class="menu_list">
							<li class="list_01">
								<a href="index1_new.php"><img src="renew_img/pc/201610tab1_off.png" alt="신난다! 특장점 알아보기" class="img-responsive"></a>
							</li>
							<li class="list_02">
								<a href="index2_new.php"><img src="renew_img/pc/201610tab2_on.png" alt="신난다! 영상 event" class="img-responsive"></a>
							</li>
							<li class="list_03">
								<a href="index3_new.php"><img src="renew_img/pc/201610tab3_off.png" alt="신난다! 퍼즐 event" class="img-responsive"></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!--탑메뉴 끝-->
		<!--컨텐츠-->
		<div class="container-fluid " id="sub02_new">
			<div class="container1920 position_rel">
				<div class="right_menu">
					<ul>
						<li>
							<a href="http://www.sinnandaschool.com/" target="_blank"><img src="img/small_menu01.png" alt="" title="" class="img-responsive"></a>
						</li>
						<li>
							<a href="https://play.google.com/store/apps/details?id=com.kyowon.apps.exlp" target="_blank"><img src="img/small_menu02.png" alt="" title="" class="img-responsive"></a>
						</li>
						<li>
							<a href="http://blog.naver.com/sinnanda_school" target="_blank"><img src="img/small_menu03.png" alt="" title="" class="img-responsive"></a>
						</li>
					</ul>
				</div>
				<div class="container1920 sub2_back">
					<div class="container960 text-center">
						<div class="position_rel">
							<img src="renew_img/pc/sub2_new_title20161017.png" alt="신난다 영상 이벤트 - 브랜드 영상을 끝까지 보고, 영상순서에 맞게 클릭클릭하면 푸짐한 혜택이 한가득!" class="title">
							<a href="javascript:;" onclick="popup.open('#gift_list');"> <img src="renew_img/pc/sub2_gift_btn.png" alt="경품보기" class="gift_btn"> </a>
						</div>
						<div class="video_box">
							<div class="video_box_inner">
								<div class='embed-container'>
									<iframe src='https://www.youtube.com/embed/BeMYX6UN6N4?rel=0&wmode=opaque'  frameborder='0' allowfullscreen ></iframe>
								</div>
							</div>
						</div>
						<div class="position_rel video_thum">
							<img src="renew_img/pc/video_thum_box_deco1.png" alt="" class="deco1">
							<ul>
								<li>
									<div class="thum_mask"></div>
									<img src="renew_img/pc/event2_th01.jpg" alt="" data-value="1">
								</li>
								<li>
									<div class="thum_mask"></div>
									<img src="renew_img/pc/event2_th02.jpg" alt="" data-value="2">
								</li>
								<li>
									<div class="thum_mask"></div>
									<img src="renew_img/pc/event2_th03.jpg" alt="" data-value="3">
								</li>
								<li>
									<div class="thum_mask"></div>
									<img src="renew_img/pc/event2_th04.jpg" alt="" data-value="4">
								</li>
							</ul>
							<img src="renew_img/pc/video_thum_box_deco2.png" alt="" class="deco2">
						</div>
						<a href="javascript:;" class="sub2_q_btn_reset" onclick="event2_check_advtg_reset();"><img src="renew_img/pc/q_btn_reset_20161017.png" alt="다시하기"></a>
						<a href="javascript:;" class="sub2_q_btn" onclick="event2_check_advtg();"><img src="renew_img/pc/q_btn_20161017.png" alt="응모하기"></a>
					</div>
				</div>
			</div>
			<!--컨텐츠 끝-->
			<!--정보입력 팝업-->
			<div class="popup" id="info_pop">
				<img src="renew_img/pc/info_pop.png" alt="" class="position_rel">
				<a href="javascript:;" class="close_btn" onclick="popup.close('#info_pop');"><img src="renew_img/pc/pop_close.png" alt="닫기"></a>
				<form id="index2">
					<input type="hidden" value="event2" class="gubunevent">
					<div class="info_input_wrap">
						<label for="name"><img src="img/title_01.png" class="title01"></label>
						<input type="text" id="name" class="name" placeholder="이름을 입력해주세요">
						<label for="phone_num"><img src="img/title02.png" class="title02"></label>
						<input type="text" id="phone_num" class="phone_num" placeholder="'-'를 제외한 휴대폰 번호를 입력해주세요.">
					</div>
					<div class="agree_box1">
						<input type="checkbox" id="agree01" class="agree01 checkbox-style" />
						<label for="agree01"><img src="img/title_03.png" class="title03"></label>
						<div class="agree_01">
							<?php
							include 'agree_1.php';
							?>
						</div>
					</div>
					<div class="agree_box2">
						<input type="checkbox" id="agree02" class="agree02 checkbox-style" />
						<label for="agree02"><img src="img/title_03.png" class="title03"></label>
						<div class="agree_02">
							<?php
							include 'agree_2.php';
							?>
						</div>
						<div class="share_btn_wrap">
							<a href="javascript:;" id="share_btn"><img src="renew_img/pc/sns_share_btn.png"></a>
						</div>
					</div>
				</form>
			</div>
			<div class="clearfix"></div>
			<!--정보입력 팝업  끝-->
			<!---sns 공유하기-->
			<div class="popup" id="sns_share_pop">
				<a href="javascript:;" class="close_btn" onclick="popup.close('#sns_share_pop');"><img src="renew_img/pc/pop_close.png" ></a>
				<ul>
					<li>
						<a href="javascript:;" class="share_fb"><img src="img/fb_icon.png"></a>
					</li>
					<li>
						<a href="javascript:;" class="share_tw"><img src="img/tw_icon.png"></a>
					</li>
					<li style="margin-right:0px;">
						<a href="javascript:;" class="share_kt" ><img src="img/kt_icon.png"></a>
					</li>
				</ul>
				<div class="clearfix"></div>
				<a href="javascript:;" onclick="window.location.reload();" class="share_btn"><img src="img/sns_share_btn_ok.png" alt=""></a>
			</div>
			<!---sns 공유하기 끝-->
			<!--오답팝업-->
			<div class="popup" id="incorrect_pop">
				 <a href="javascript:;" class="close_btn" onclick="popup.close('#incorrect_pop');"><img src="renew_img/pc/pop_close.png" alt="닫기"></a>
				 <img src="renew_img/pc/incorrect_main_pop.png" alt="" class="main_img">
				 <div class="btn_wrap">
					 <a href="javascript:;" onclick="popup.close('#incorrect_pop');"><img src="renew_img/pc/incorrect_btn.png" alt="돌아가기" class="back"></a>
				 </div>
				 
			</div>
			<!-- 오답팝업 끝-->

			<!--경품보기 -->
			<div class="popup" id="gift_list">
				<a href="javascript:;" class="close_btn" onclick="popup.close('#gift_list');"><img src="renew_img/pc/pop_close2.png" ></a>
			</div>
			<!--경품보기 끝-->
			<!--하단-->
			<div class="container-fluid" id="footer">
				<div class="container1920">
					<div class="left_copy">
						<p>
							주소 : 서울시 종로구 청계천로 51-1 구몬빌딩 12층
						</p>
						<p>
							우편번호 : 03189
						</p>
					</div>
					<div class="right_copy">
						COPYRIGHT © 2016 KYOWON.CO.LTD ALL RIGHTS RESERVED
					</div>

				</div>
			</div>
			<div class="clearfix"></div>
			<!--하단 끝-->
		</div>
	</div>
	<!--PC  끝-->
	<!--모바일-->
	<div class="container960 device_small">
		<div id="mobile_nav">
			<h1><a href="index.php"><img src="img/mobile_logo.png" alt="교원 신난다 체험스쿨" class="img-responsive"></a></h1>
			<ul class="nav">
				<li>
					<a href="http://blog.naver.com/sinnanda_school" target="_blank"><img src="img/mobile_small_menu03.png" alt=""></a>
				</li>
				<li>
					<a href="https://play.google.com/store/apps/details?id=com.kyowon.apps.exlp" target="_blank"><img src="img/mobile_small_menu02.png" alt=""></a>
				</li>
				<li>
					<a href="http://www.sinnandaschool.com/" target="_blank"><img src="img/mobile_small_menu01.png" alt=""></a>
				</li>
			</ul>
		</div>
		<div class="clearfix"></div>
		<div id="content_menu">
			<ul>
				<li>
					<a href="index1_new.php"><img src="renew_img/mobile/201610tab1_off_mobile.png" alt="신난다! 특장점 알아보기"></a>
				</li>
				<li>
					<a href="index2_new.php"><img src="renew_img/mobile/201610tab2_on_mobile.png" alt="신난다! 영상 event"></a>
				</li>
				<li>
					<a href="index3_new.php"><img src="renew_img/mobile/201610tab3_off_mobile.png" alt="신난다! 퍼즐 event"></a>
				</li>
			</ul>
		</div>
		<div class="clearfix"></div>
		<!--컨텐츠 시작-->
		<div class="container960" id="mobile_sub2">
			<div class="inner_wrap">
				<div class="position_rel">
					<img src="renew_img/mobile/mobile_2_title.png" alt="" class="img-responsive title">
					<a href="javascript:;" onclick="popup.open('#mobile_sub1_gift_pop');" style="position:absolute; bottom:-13%; right:0; width:28%;"><img src="renew_img/mobile/mobile_2_gift_pop_btn.png" class="img-responsive"></a>
				</div>
				<div class="position_rel vod_wrap">
				   <img src="renew_img/mobile/vod_box_back.png" alt="" class="img-responsive">
				   <div class="vod_inner_wrap">
					   <div class="vod_box">
						   <div class="embed-container"><iframe src="https://www.youtube.com/embed/BeMYX6UN6N4?rel=0&amp;wmode=opaque" frameborder="0" allowfullscreen=""></iframe></div>
					   </div>
				   </div>
			   </div>
			</div>
			<div class="event2_quiz_box">
				<img src="renew_img/mobile/m_deco1.png" alt="" class="deco1">
				<img src="renew_img/mobile/m_deco2.png" alt="" class="deco2">
				<img src="renew_img/mobile/m_deco3.png" alt="" class="deco3">
				<img src="renew_img/mobile/event2_quiz_back.png" alt="" class="img-responsive">
				<div class="thumWrap">
					<div class="thumBox thumBox01">
						<div class="thum_mask"></div>
						<img src="renew_img/pc/event2_th01.jpg" alt="" data-value="1">
					</div>
					<div class="thumBox thumBox02">
						<div class="thum_mask"></div>
						<img src="renew_img/pc/event2_th02.jpg" alt="" data-value="2">
					</div>
					<div class="thumBox thumBox03">
						<div class="thum_mask"></div>
						<img src="renew_img/pc/event2_th03.jpg" alt="" data-value="3">
					</div>
					<div class="thumBox thumBox04">
						<div class="thum_mask"></div>
						<img src="renew_img/pc/event2_th04.jpg" alt="" data-value="4">
					</div>
				</div>
			</div>
			<div class="btnWrap">
			<a href="javascript:;" class="event2ResetBtn" onclick="event2_check_advtg_reset();" ><img src="renew_img/mobile/mobile_event2_reset_off.png" alt="다시하기" class="img-responsive"></a>
			<a href="javascript:;" class="event2OkBtn" onclick="event2_check_advtg();"><img src="renew_img/mobile/mobile_event2_ok_off.png" alt="응모하기"  class="img-responsive"></a>
			</div>
		</div>
		<!--컨텐츠 끝-->
		<div id ="mobile_footer">
			<p>
				주소 : 서울시 종로구 청계천로 51-1 구몬빌딩 12층
			</p>
			<p>
				우편번호 : 03189
			</p>
			<p>
				COPYRIGHT © 2016 KYOWON.CO.LTD ALL RIGHTS RESERVED
			</p>
		</div>
	</div>
	<!--모바일 끝-->
	<!--모바일 경품보기 팝업-->
	<div class="popup" id="mobile_sub1_gift_pop">
		<div class="mobile_sub1_gift_inner">
			<a href="javascript:;" class="close_btn" onclick="popup.close('#mobile_sub1_gift_pop');"><img src="renew_img/pc/pop_event3_close.png" ></a>
			<img src="img/mobile_sub1_gift_pop.png" class="img-responsive">
		</div>
	</div>
	<!--모바일 경품보기 팝업 끝-->
	<!--모바일 오답팝업-->
	<div class="popup" id="incorrect_pop_mobile">
		<div class="innerWrap">
			<a href="javascript:;" class="close_btn" onclick="popup.close('#incorrect_pop_mobile');"><img src="renew_img/pc/pop_close.png" alt="닫기"></a>
			<img src="renew_img/mobile/incorrect_main_pop_mobile.jpg" alt="" class="img-responsive">
			<div class="btn_wrap">
				 <a href="javascript:;" onclick="popup.close('#incorrect_pop_mobile');"><img src="renew_img/mobile/incorrect_btn_mobile.png" alt="돌아가기" class="img-responsive"></a>
			</div>
		 </div>
	</div>
	<!-- 오답팝업 끝-->
	<!--공유하기 팝업 시작-->
	<div class="popup" id="mobile_sub2_application_pop" style="display:none;">
		<div class="mobile_sub2_application_pop_inner">
			<a href="javascript:;" class="close_btn" onclick="popup.close('#mobile_sub2_application_pop');"><img src="renew_img/mobile/mobile_sns_pop_close_btn.png" > </a>
			<img src="renew_img/mobile/mobile_sns_pop_title.jpg" alt="" class="img-responsive">
			<form id="mobile_index2">
				<div class="info_input_wrap">
					<label for="mobile_index1_name"><img src="img/mobile_input02.png" class="title01"></label>
					<input type="text" id="mobile_index1_name" class="name" placeholder="이름을 입력해주세요">
					<label for="mobile_index1_phone_num"><img src="img/mobile_input01.png" class="title02"></label>
					<input type="tel" id="mobile_index1_phone_num" class="phone_num" placeholder="'-'를 제외한 휴대폰 번호를 입력해주세요.">
					<div class="clearfix"></div>
				</div>
				<div class="mobile_agree_inner">
					<div class="mobile_agree_inner_back">
						<div class="agree_box1">
							<input type="checkbox" id="mobile_index1_agree01" class="agree01 checkbox-style" />
							<label for="mobile_index1_agree01"><img src="img/mobile_input03.png" class="title03"></label>
							<div class="agree_01">
								<?php
								include 'agree_1.php';
								?>
							</div>
						</div>
						<div class="agree_box2">
							<input type="checkbox" id="mobile_index1_agree02" class="agree02 checkbox-style" />
							<label for="mobile_index1_agree02"><img src="img/mobile_input03.png" class="title03"></label>
							<div class="agree_02">
								<?php
								include 'agree_2.php';
								?>
							</div>

						</div>
					</div>
				</div>
				<div class="share_btn_wrap">
					<a href="javascript:;" id="mobile_index1_share_btn"> <img src="renew_img/mobile/mobile_sns_share_btn.png" class="img-responsive"> </a>
				</div>
			</form>
		</div>
	</div>
	<!-- 공유하기 팝업 -->
	<!--모바일 참여완료 팝업-->
	<div class="popup" id="mobile_sns_share_pop">
		<div class="mobile_sns_share_pop_inner  position_rel">
			<img src="renew_img/mobile/mobile_sns_share_pop.jpg" alt="" class="img-responsive">
			<a href="javascript:;" class="close_btn" onclick="popup.close('#mobile_sns_share_pop');"><img src="img/mobile_sns_pop_close_btn.png" ></a>
			<div class="mobile_sns_share_btn_wrap">
				<a href="#" class="sns_btn share_fb"><img src="img/mobile_sns_share_pop_fb.png" class="img-responsive"></a>
				<a href="#" class="sns_btn share_tw"><img src="img/mobile_sns_share_pop_tw.png" class="img-responsive"></a>
				<a href="#" class="sns_btn share_kt" id="kakao-link-btn"><img src="img/mobile_sns_share_pop_kt.png" class="img-responsive"></a>
				<div class="mobile_sns_share_ok_Wrap" style="width:50%; margin:2% auto;">
					<a href="javascript:;" onclick="window.location.reload();"> <img src="renew_img/mobile/mobile_sns_share_pop_ok.png" alt="" class="img-responsive"> </a>
				</div>
			</div>
		</div>
	</div>
	<!--모바일 참여완료 팝업 -->
	<!--모바일 끝-->
	<script>
	Kakao.init('49443218cfbfa00a2dad57cffe14be7b');
	Kakao.Link.createTalkLinkButton({
		container: '#kakao-link-btn',
		label: '<?=$event2_title?>',
		image: {
		src: '<?=$event2_kakaoimg?>',
		width: '400',
		height: '200'
		},
		webButton: {
		text: '<?=$event2_desc?>',
		url: '<?=$event2_page?>' // 앱 설정의 웹 플랫폼에 등록한 도메인의 URL이어야 합니다.
		}
	});
	</script>
	<!--[if lte IE 8]>
	<link rel="stylesheet" href="css/ie8-only.css" />
	<script src="js/poly-checked.min.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
	<script type="text/javascript"  src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</body>
</html>
