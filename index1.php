<?
include 'module/meta.php';
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
		<link rel="stylesheet" type="text/css" href="css/style_new.css" />
		<link rel="stylesheet" type="text/css" href="css/check-style.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>
		<script src="js/main_new.js"></script>
		<script src="js/control.js"></script>
	</head>
	<body>
		<input type="hidden" value="event1" class="gubunevent">
		<!--PC-->
		<div id="main_all_wrap" class="device_big">
			<!--탑메뉴-->
			<div class="container-fluid top_menu_wrap">
				<div class="container1920 position_rel">
					<div class="container960">
						<div id="top_menu">
							<h1><a href="index.php"><img src="img/kyowon_logo.png" alt="교원" class="img-responsive"></a></h1>
							<ul class="menu_list">
								<li class="list_01"><a href="index1.php"><img src="renew_img/pc/201610tab1_on.png" alt="신난다! 특장점 알아보기" class="img-responsive"></a></li>
								<li class="list_02"><a href="index2.php"><img src="renew_img/pc/201610tab2_off.png" alt="신난다! 영상 event" class="img-responsive"></a></li>
								<li class="list_03"><a href="index3.php"><img src="renew_img/pc/201610tab3_off.png" alt="신난다! 퍼즐 event" class="img-responsive"></a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!--탑메뉴 끝-->
			<!--컨텐츠-->
			<div class="container-fluid " id="sub01_new">
				<div class="container1920 position_rel">
				 <div class="right_menu">
					<ul>
						<li><a href="http://www.sinnandaschool.com/" target="_blank"><img src="img/small_menu01.png" alt="" title="" class="img-responsive"></a></li>
						<li><a href="https://play.google.com/store/apps/details?id=com.kyowon.apps.exlp" target="_blank"><img src="img/small_menu02.png" alt="" title="" class="img-responsive"></a></li>
						<li><a href="http://blog.naver.com/sinnanda_school" target="_blank"><img src="img/small_menu03.png" alt="" title="" class="img-responsive"></a></li>
					</ul>
				</div>
				<div class="container1920 sub1_back">
					<div class="container960">
						<div class="features_wrap">
							<img src="renew_img/pc/sub1_new_title20161017.png" alt="6가지 특 장점" class="big_title">
							<ul>
								<li><img src="renew_img/pc/sub1_new_th01.jpg" alt="쉽고 편하게 신청가능한 체험학습 신청 시스템"></li>
								<li><img src="renew_img/pc/sub1_new_th02.jpg" alt="까다로운 검증 절차를 통과한 우수한 선생님"></li>
								<li><img src="renew_img/pc/sub1_new_th03.jpg" alt="체험학습 교재 & 워크시트 체험학습교재"></li>
								<li><img src="renew_img/pc/sub1_new_th04.jpg" alt="2시간~2시간30분 소규모학습진행(5-10명)"></li>
								<li><img src="renew_img/pc/sub1_new_th05.jpg" alt="작성부터 출력까지 손쉽게! 포토갤러리 & 체험학습보고서"></li>
								<li><img src="renew_img/pc/sub1_new_th06.jpg" alt="우리아이 안전까지! 보험서비스"></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!--컨텐츠 끝-->
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
		</div>
	   </div>
	   <!--PC  끝-->
	   <!--모바일-->
		<div class="container960 device_small">
			<div id="mobile_nav">
			<h1><a href="index.php"><img src="img/mobile_logo.png" alt="교원 신난다 체험스쿨" class="img-responsive"></a></h1>
			<ul class="nav">
				<li><a href="http://blog.naver.com/sinnanda_school" target="_blank"><img src="img/mobile_small_menu03.png" alt=""></a></li>
				<li><a href="https://play.google.com/store/apps/details?id=com.kyowon.apps.exlp" target="_blank"><img src="img/mobile_small_menu02.png" alt=""></a></li>
				<li><a href="http://www.sinnandaschool.com/" target="_blank"><img src="img/mobile_small_menu01.png" alt=""></a></li>
			</ul>
			</div>
			<div class="clearfix"></div>
			<div id="content_menu">
				<ul>
					<li><a href="index1.php"><img src="renew_img/mobile/201610tab1_on_mobile.png" alt="신난다! 특장점 알아보기"></a></li>
					<li><a href="index2.php"><img src="renew_img/mobile/201610tab2_off_mobile.png" alt="신난다! 영상 event"></a></li>
					<li><a href="index3.php"><img src="renew_img/mobile/201610tab3_off_mobile.png" alt="신난다! 퍼즐 event"></a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
			<!--컨텐츠 시작-->
			<div class="container960" id="mobile_sub1">
				<div class="inner_wrap">
					<img src="renew_img/mobile/mobile_1_title.png" alt="교원 신난다 체험스쿨 6가지 특장점" class="img-responsive title">
					<ul>
						<li><img src="renew_img/mobile/mobile_event01.png" alt="쉽고 편하게 신청 가능한 체험학습 신청 시스템" class="img-responsive"></li>
						<li><img src="renew_img/mobile/mobile_event02.png" alt="까다로운 검증 철자를 통과한 우수한 선생님" class="img-responsive"></li>
						<li><img src="renew_img/mobile/mobile_event03.png" alt="2시간~2시간 30분 소규모학습진행(5명~10명)" class="img-responsive"></li>
						<li><img src="renew_img/mobile/mobile_event04.png" alt="작성부터 출력까지 손쉽게! 포토갤러리&체험학습 보고서" class="img-responsive"></li>
						<li><img src="renew_img/mobile/mobile_event06.png" alt="체험학습 교재&워크시트 체험학습 교재" class="img-responsive"></li>
						<li><img src="renew_img/mobile/mobile_event05.png" alt="우리아이 안전까지! 보험서비스" class="img-responsive"></li>
					</ul>
				</div>
			</div>
			<!--컨텐츠 끝-->
			<div id ="mobile_footer">
				<p>주소 : 서울시 종로구 청계천로 51-1 구몬빌딩 12층</p>
				<p>우편번호 : 03189</p>
				<p>COPYRIGHT © 2016 KYOWON.CO.LTD ALL RIGHTS RESERVED</p>
			</div>
		</div>
		<!--모바일 끝-->
	 <!--[if lte IE 8]>
	<link rel="stylesheet" href="css/ie8-only.css" />
	<script src="js/poly-checked.min.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
	<script type="text/javascript"  src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->  
	</body>
</html>
