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
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/check-style.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/control.js"></script>
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
                                    <li class="list_01"><a href="index.php"><img src="img/201609tab1_off.png" alt="영화감상 이벤트" class="img-responsive"></a></li>
                                    <li class="list_02"><a href="index1.php"><img src="img/201609tab2_on.png" alt="맞춤학습 이벤트" class="img-responsive"></a></li>
                                    <li class="list_03"><a href="index3.php"><img src="img/201609tab3_off.png" alt="짝맞추기 이벤트" class="img-responsive"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--탑메뉴 끝-->
                <!--컨텐츠-->
                <div class="container-fluid " id="sub01">
                    <div class="container1920 position_rel">
                     <div class="right_menu">
                        <ul>
                            <li><a href="http://www.sinnandaschool.com/" target="_blank"><img src="img/small_menu01.png" alt="" title="" class="img-responsive"></a></li>
                            <li><a href="https://play.google.com/store/apps/details?id=com.kyowon.apps.exlp" target="_blank"><img src="img/small_menu02.png" alt="" title="" class="img-responsive"></a></li>
                            <li><a href="http://blog.naver.com/sinnanda_school" target="_blank"><img src="img/small_menu03.png" alt="" title="" class="img-responsive"></a></li>
                        </ul>
                    </div>
                    <div class="container1920 sub1_back ">
                        <div class="container960">
                            <img src="img/sub1_title.png" alt="교원 신난다 체험스쿨 영상이벤트">
                            <div class="gift_btn_wrap">
                                <a href="javascript:;" onclick="popup.open('#gift_list');"><img src="img/sub1_gift_btn.png" alt="" title="경품보기"></a>
                            </div>
                        </div>
                        <div class="container960 video_back">
                            <div class="video_box">
                            <div class='embed-container'><iframe src='https://www.youtube.com/embed/BeMYX6UN6N4?rel=0&wmode=opaque'  frameborder='0' allowfullscreen ></iframe></div>
                            </div>
                        </div>
                        <div class="container960 q_box position_rel">
                            <div class="q_box_deco"><img src="img/q_box_deco.png" alt=""></div>
                            <div class="q_box_list">
                                <div class="q_list">
                                    <input type="checkbox" id="check1_q" class="checkbox-style" value="1" /><label for="check1_q"></label>
                                    <label for="check1_q">
                                    <div class="thum_box thum_box1">
                                        <div class="thum_mask"></div>
                                        <img src="img/ex1.png" alt="">
                                        <span class="thum_caption">맞춤 체험학습 <br> 상품제안</span>
                                    </div>
                                    </label>
                                </div>
                                <div class="q_list">
                                    <input type="checkbox" id="check2_q" class="checkbox-style" value="2" /><label for="check2_q"></label>
                                    <label for="check2_q">
                                    <div class="thum_box thum_box2">
                                        <div class="thum_mask"></div>
                                        <img src="img/ex2.png" alt="">
                                        <span class="thum_caption" style="letter-spacing: -1px;">쉽고 편하게 신청 가능한<br> 체험학습 신청 시스템</span>
                                    </div>
                                    </label>
                                </div>
                                <div class="q_list">
                                    <input type="checkbox" id="check3_q" class="checkbox-style" value="3" /><label for="check3_q"></label>
                                    <label for="check3_q">
                                    <div class="thum_box thum_box3">
                                        <div class="thum_mask"></div>
                                        <img src="img/ex3.png" alt="">
                                        <span class="thum_caption">전화/이메일로만 구매<br> 가능한 체험상품</span>
                                    </div>
                                    </label>
                                </div>
                                <div class="q_list last">
                                    <input type="checkbox" id="check4_q" class="checkbox-style" value="4" /><label for="check4_q"></label>
                                    <label for="check4_q">
                                    <div class="thum_box thum_box4">
                                        <div class="thum_mask"></div>
                                        <img src="img/ex4.png" alt="">
                                        <span class="thum_caption">전문 선생님의 <br>생생한 강의</span>
                                    </div>
                                    </label>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="q_btn_wrap">
                                <a href="javascript:;" onclick="event1_check_advtg();"><img src="img/q_btn.png"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--컨텐츠 끝-->
               
                <!--정보입력 팝업-->
                <div class="popup" id="info_pop">
                    <img src="img/info_pop.png" alt="" class="position_rel">
                    <a href="javascript:;" class="close_btn" onclick="popup.close('#info_pop');"><img src="img/pop_close.png" ></a>
                    <form id="index1">
                        <input type="hidden" value="event1" class="gubunevent">
                        <div class="info_input_wrap">
                              <label for="name"><img src="img/title_01.png" class="title01"></label>
                              <input type="text" id="name" class="name" placeholder="이름을 입력해주세요">
                              <label for="phone_num"><img src="img/title02.png" class="title02"></label>
                              <input type="text" id="phone_num" class="phone_num" placeholder="'-'를 제외한 휴대폰 번호를 입력해주세요.">
                        </div>
                        <div class="agree_box1">
                            <input type="checkbox" id="agree01" class="agree01 checkbox-style" /><label for="agree01"><img src="img/title_03.png" class="title03"></label>
                            <div class="agree_01">
                                <?php include 'agree_1.php'; ?>
                            </div>
                        </div>
                        <div class="agree_box2">
                            <input type="checkbox" id="agree02" class="agree02 checkbox-style" /><label for="agree02"><img src="img/title_03.png" class="title03"></label>
                            <div class="agree_02">
                                <?php include 'agree_2.php'; ?>
                            </div>
                            <div class="share_btn_wrap">
                                <a href="javascript:;" id="share_btn"><img src="img/sns_share_btn.png"></a>
                            </div>
                        </div>
                       
                    </form>
                </div>
                <div class="clearfix"></div>
                <!--정보입력 팝업  끝-->
                <!---sns 공유하기-->
                <div class="popup" id="sns_share_pop">
                     <a href="javascript:;" class="close_btn" onclick="popup.close('#sns_share_pop');"><img src="img/pop_close.png" ></a>
                         <ul>
                            <li><a href="javascript:;" class="share_fb"><img src="img/fb_icon.png"></a></li>
                            <li><a href="javascript:;" class="share_tw"><img src="img/tw_icon.png"></a></li>
                            <li><a href="javascript:;" class="share_kt" ><img src="img/kt_icon.png"></a></li>
                        </ul>
                        <div class="clearfix"></div>
                        <a href="javascript:;" onclick="window.location.reload();" class="share_btn"><img src="img/sns_share_btn_ok.png" alt=""></a>
                </div>
                <!---sns 공유하기 끝-->
                <!--경품보기 -->
                <div class="popup" id="gift_list">
                     <a href="javascript:;" class="close_btn" onclick="popup.close('#gift_list');"><img src="img/close_btn2.png" ></a>
                </div>
                <!--경품보기 끝-->
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
                        <li><a href="index.php"><img src="img/mobile/201609tab1_off_mobile.png"></a></li>
                        <li><a href="index1.php"><img src="img/mobile/201609tab2_on_mobile.png"></a></li>
                        <li><a href="index3.php"><img src="img/mobile/201609tab3_off_mobile.png"></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <!--컨텐츠 시작-->
                <div class="container960" id="mobile_sub1">
                   <div class="position_rel">
                   <img src="img/mobile_sub1_main_title.png" class="img-responsive">
                   <div class="mobile_sub1_gift_pop_btn_wrap">
                     <a href="javascript:;"  onclick="popup.open('#mobile_sub1_gift_pop');"><img src="img/mobile_sub1_gift_pop_btn.png" alt="경품보기" class="img-responsive"></a>
                   </div>
                   <div class="position_rel vod_wrap">
                       <img src="img/mobile_sub_vod_wrap.png" alt="" class="img-responsive">
                       <div class="vod_inner_wrap">
                           <div class="vod_box">
                               <div class='embed-container'><iframe src='https://www.youtube.com/embed/BeMYX6UN6N4?rel=0&wmode=opaque' frameborder='0' allowfullscreen></iframe></div>
                           </div>
                       </div>
                   </div>
                   <div class="mobile_select_box position_rel">
                       <img src="img/select_box_back.png" class="img-responsive">
                       <div class="select_inner_box">
                           <div class="select_main_content">
                                <div class="q_box_list">
                                <div class="q_list">
                                    <input type="checkbox" id="mobile_check1_q" class="checkbox-style" value="1" /><label for="mobile_check1_q"></label>
                                    <label for="mobile_check1_q">
                                    <div class="thum_box">
                                        <div class="thum_mask"></div>
                                        <img src="img/ex1.png" alt="">
                                        <span class="thum_caption">맞춤 체험학습 <br> 상품제안</span>
                                    </div>
                                    </label>
                                </div>
                                <div class="q_list">
                                    <input type="checkbox" id="mobile_check2_q" class="checkbox-style" value="2" /><label for="mobile_check2_q"></label>
                                    <label for="mobile_check2_q">
                                    <div class="thum_box">
                                        <div class="thum_mask"></div>
                                        <img src="img/ex2.png" alt="">
                                        <span class="thum_caption" style="letter-spacing: -1px;">쉽고 편하게 신청 가능한<br> 체험학습 신청 시스템</span>
                                    </div>
                                    </label>
                                </div>
                                <div class="q_list">
                                    <input type="checkbox" id="mobile_check3_q" class="checkbox-style" value="3"  /><label for="mobile_check3_q"></label>
                                    <label for="mobile_check3_q">
                                    <div class="thum_box">
                                        <div class="thum_mask"></div>
                                        <img src="img/ex3.png" alt="">
                                        <span class="thum_caption">전화/이메일로만 구매<br> 가능한 체험상품</span>
                                    </div>
                                    </label>
                                </div>
                                <div class="q_list last">
                                    <input type="checkbox" id="mobile_check4_q" class="checkbox-style" value="4"  /><label for="mobile_check4_q"></label>
                                    <label for="mobile_check4_q">
                                    <div class="thum_box">
                                        <div class="thum_mask"></div>
                                        <img src="img/ex4.png" alt="">
                                        <span class="thum_caption">전문 선생님의 <br>생생한 강의</span>
                                    </div>
                                    </label>
                                </div>
                                <div class="clearfix"></div>
                                <div class="q_btn_wrap">
                                    <a href="javascript:;" onclick="event1_check_advtg();"><img src="img/mobile_q_btn.png" alt="" class="img-responsive"></a>
                                </div>
                            </div>
                           </div>
                       </div>
                    </div>
                   </div>
                </div>
                <!--컨텐츠 끝-->
                <div id ="mobile_footer">
                    <p>주소 : 서울시 종로구 청계천로 51-1 구몬빌딩 12층</p>
                    <p>우편번호 : 03189</p>
                    <p>COPYRIGHT © 2016 KYOWON.CO.LTD ALL RIGHTS RESERVED</p>
                </div>
            </div>
            <!--모바일 경품보기 팝업-->
            <div class="popup" id="mobile_sub1_gift_pop">
                <div class="mobile_sub1_gift_inner">
                <a href="javascript:;" class="close_btn" onclick="popup.close('#mobile_sub1_gift_pop');"><img src="img/mobile_close.png" ></a>
                <img src="img/mobile_sub1_gift_pop.png" class="img-responsive">
                </div>
            </div>
            <!--모바일 경품보기 팝업 끝-->
            <!--공유하기 팝업 시작-->
            <div class="popup" id="mobile_sub1_application_pop">
                <div class="mobile_sub1_application_pop_inner">
                    <a href="javascript:;" class="close_btn" onclick="popup.close('#mobile_sub1_application_pop');"><img src="img/mobile_sns_pop_close_btn.png" > 
                    </a>
                    <img src="img/mobile_sns_pop_title.png" alt="" class="img-responsive">
                    <form id="mobile_index1">
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
                                <input type="checkbox" id="mobile_index1_agree01" class="agree01 checkbox-style" /><label for="mobile_index1_agree01"><img src="img/mobile_input03.png" class="title03"></label>
                                <div class="agree_01">
                                    <?php include 'agree_1.php'; ?>
                                </div>
                            </div>
                            <div class="agree_box2">
                                <input type="checkbox" id="mobile_index1_agree02" class="agree02 checkbox-style" /><label for="mobile_index1_agree02"><img src="img/mobile_input03.png" class="title03"></label>
                                <div class="agree_02">
                                    <?php include 'agree_2.php'; ?>
                                </div>
                              
                            </div>
                            </div>
                        </div>
                        <div class="share_btn_wrap">
                            <a href="javascript:;" id="mobile_index1_share_btn">
                                <img src="img/mobile_sns_share_btn.png" class="img-responsive">
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <!-- 공유하기 팝업 -->
            <!--모바일 참여완료 팝업-->
            <div class="popup" id="mobile_sns_share_pop">
                <div class="mobile_sns_share_pop_inner  position_rel">
                <img src="img/mobile_sns_share_pop.png" alt="" class="img-responsive">
                <a href="javascript:;" class="close_btn" onclick="popup.close('#mobile_sns_share_pop');"><img src="img/mobile_sns_pop_close_btn.png" ></a>
                <div class="mobile_sns_share_btn_wrap">
                    <a href="#" class="sns_btn share_fb"><img src="img/mobile_sns_share_pop_fb.png" class="img-responsive"></a>
                    <a href="#" class="sns_btn share_tw"><img src="img/mobile_sns_share_pop_tw.png" class="img-responsive"></a>
                    <a href="#" class="sns_btn share_kt" id="kakao-link-btn"><img src="img/mobile_sns_share_pop_kt.png" class="img-responsive"></a>
                     <div class="mobile_sns_share_ok_Wrap" style="width:45%; margin:0 auto;">
                        <a href="javascript:;" onclick="window.location.reload();">
                            <img src="img/mobile_sns_share_pop_ok.png" alt="" class="img-responsive">
                        </a>
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
              label: '<?=$event1_title?>',
              image: {
                src: '<?=$event1_kakaoimg?>',
                width: '400',
                height: '200'
              },
              webButton: {
                text: '<?=$event1_desc?>',
                url: '<?=$event1_page?>' // 앱 설정의 웹 플랫폼에 등록한 도메인의 URL이어야 합니다.
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
