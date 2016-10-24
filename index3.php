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
        <meta property="og:title" content="<?=$event3_title?>" />   
        <meta property="og:url" content="<?=$event3_page?>" />  
        <meta property="og:description" content="<?=$event3_desc?>" />
        <meta property="og:image" content="<?=$document_url?><?=$event3_img?>"/>
        <meta name="description" content="<?=$event3_desc?>">
        <!-- <meta property="al:web:url" content="<?=$event1_page?>">-->
        
        <link rel="stylesheet" type="text/css" href="css/flexslider.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/control.js"></script>
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
                                    <li class="list_02"><a href="index1.php"><img src="img/201609tab2_off.png" alt="맞춤학습 이벤트" class="img-responsive"></a></li>
                                    <li class="list_03"><a href="index3.php"><img src="img/201609tab3_on.png" alt="짝맞추기 이벤트" class="img-responsive"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--탑메뉴 끝-->
                <!--컨텐츠-->
                <div class="container-fluid " id="sub03">
                    <div class="container1920 sub3_back position_rel">
                    <div class="right_menu">
                        <ul>
                            <li><a href="http://www.sinnandaschool.com/" target="_blank"><img src="img/small_menu01.png" alt="" title="" class="img-responsive"></a></li>
                            <li><a href="https://play.google.com/store/apps/details?id=com.kyowon.apps.exlp" target="_blank"><img src="img/small_menu02.png" alt="" title="" class="img-responsive"></a></li>
                            <li><a href="http://blog.naver.com/sinnanda_school" target="_blank"><img src="img/small_menu03.png" alt="" title="" class="img-responsive"></a></li>
                        </ul>
                    </div>
                        <div class="container1920 sub3_content_back">
                            <div class="container960 position_rel">
                            <a href="javascript:;" class="sub3_gift_btn" onclick="popup.open('#gift_list_sub3');"><img src="img/sub_gift_btn.png" alt="경품보기"></a>
                            <div id="quiz_step">
                                <!--1단계 시작-->
                                <input type="hidden" id="stage_val" value="1단계">
                                <div id="step1" style="display:block;">
                                    <img src="img/step01.png" alt="1단계" class="step_guide_img">
                                    <p class="question_title"><img src="img/step1_title.png" alt=""></p>
                                    <ul>
                                        <li>
                                            <img src="img/step01_01_ex.png" class="ex_thum">
                                            <input type="checkbox" id="stop1_ex01" value="딸기농장체험">
                                            <label for="stop1_ex01">
                                                <span class="check ex01_check"><img src="img/check.png" alt="선택" ></span>
                                                <p>① 딸기농장체험</p>
                                            </label>
                                           
                                        </li>
                                        <li>
                                            <img src="img/step01_02_ex.png"  class="ex_thum">
                                            <input type="checkbox" id="stop1_ex02" value="과천과학관체험">
                                            <label for="stop1_ex02">
                                                <span class="check ex02_check"><img src="img/check.png" alt="선택"></span>
                                                <p>② 과천 과학관 체험</p>
                                            </label>
                                        </li>
                                        <li>
                                            <img src="img/step01_03_ex.png"  class="ex_thum">
                                            <input type="checkbox" id="stop1_ex03" value="도자기만들기체험">
                                            <label for="stop1_ex03">
                                                <span class="check  ex03_check"><img src="img/check.png" alt="선택"></span>
                                                <p>③ 도자기만들기 체험</p>
                                            </label>
                                        </li>
                                    </ul>
                                    <div class="submit_wrap">
                                        <a href="javascript:;"><img src="img/submit_btn_off.png" alt="답안제출"></a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <!--1단계 끝-->
                                <!--2단계 시작 A-->
                                <div id="step2_A" class="position_rel">
                                    <img src="img/step02.png" alt="2단계" class="step_guide_img">
                                    <p class="question_title"><img src="img/step2_title_other.png" alt=""></p>
                                    <div class="left_wrap">
                                        <div class="thum_box">
                                            <img src="img/ex_th1_1.png" alt="">
                                            <input type="checkbox" value="거북선" name="quiz2" id="step2_ex01_A">
                                            <label for="step2_ex01_A"><img src="img/left_label.png"></label>
                                        </div>
                                        <div class="clearfix"></div>
                                         <div class="thum_box">
                                            <img src="img/ex_th2_1.png" alt="">
                                            <input type="checkbox" value="해시계" name="quiz2" id="step2_ex02_A">
                                            <label for="step2_ex02_A"><img src="img/left_label.png"></label>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="thum_box">
                                            <img src="img/ex_th3_1.png" alt="">
                                            <input type="checkbox" value="첨성대" name="quiz2" id="step2_ex03_A">
                                            <label for="step2_ex03_A"><img src="img/left_label.png"></label>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="answer_line_wrap" >
                                        <img src="img/answer_other_line1.png" class="answer_line1">
                                        <img src="img/answer_other_line2.png" class="answer_line2">
                                        <img src="img/answer_other_line3.png" class="answer_line3">
                                    </div>
                                     <div class="right_wrap">
                                        <div class="thum_box">
                                            <input type="checkbox" value="첨성대" name="quiz2" id="step2_ex04_A">
                                            <label for="step2_ex04_A"><img src="img/right_label.png"></label>
                                            <img src="img/ex_th4_1.png" alt="">
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="thum_box">
                                             <input type="checkbox" value="해시계" name="quiz2" id="step2_ex05_A">
                                            <label for="step2_ex05_A"><img src="img/right_label.png"></label>
                                            <img src="img/ex_th5_1.png" alt="">
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="thum_box">
                                            <input type="checkbox" value="거북선" name="quiz2" id="step2_ex06_A">
                                            <label for="step2_ex06_A"><img src="img/right_label.png"></label>
                                            <img src="img/ex_th6_1.png" alt="">
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="submit_wrap">
                                        <a href="javascript:;"><img src="img/submit_btn_off.png" alt="답안제출"></a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <!--2단계 끝2-->
                                <!--2단계 B 시작 -->
                                <div id="step2_B" class="position_rel">
                                    <img src="img/step02.png" alt="2단계" class="step_guide_img">
                                    <p class="question_title"><img src="img/step2_title.png" alt=""></p>
                                    <div class="left_wrap">
                                        <div class="thum_box">
                                            <img src="img/ex_th1.png" alt="">
                                            <input type="checkbox" value="옷" name="quiz2" id="step2_ex01_B">
                                            <label for="step2_ex01_B"><img src="img/left_label.png"></label>
                                        </div>
                                        <div class="clearfix"></div>
                                         <div class="thum_box">
                                            <img src="img/ex_th2.png" alt="">
                                            <input type="checkbox" value="종이" name="quiz2" id="step2_ex02_B">
                                            <label for="step2_ex02_B"><img src="img/left_label.png"></label>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="thum_box">
                                            <img src="img/ex_th3.png" alt="">
                                            <input type="checkbox" value="집" name="quiz2" id="step2_ex03_B">
                                            <label for="step2_ex03_B"><img src="img/left_label.png"></label>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="answer_line_wrap" >
                                        <img src="img/answer_line1.png" class="answer_line1">
                                        <img src="img/answer_line2.png" class="answer_line2">
                                        <img src="img/answer_line3.png" class="answer_line3">
                                    </div>
                                     <div class="right_wrap">
                                        <div class="thum_box">
                                            <input type="checkbox" value="종이" name="quiz2" id="step2_ex04_B">
                                            <label for="step2_ex04_B"><img src="img/right_label.png"></label>
                                            <img src="img/ex_th4.png" alt="">
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="thum_box">
                                            <input type="checkbox" value="옷" name="quiz2" id="step2_ex05_B">
                                            <label for="step2_ex05_B"><img src="img/right_label.png"></label>
                                            <img src="img/ex_th5.png" alt="">
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="thum_box">
                                            <input type="checkbox" value="집" name="quiz2" id="step2_ex06_B">
                                            <label for="step2_ex06_B"><img src="img/right_label.png"></label>
                                            <img src="img/ex_th6.png" alt="">
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="submit_wrap">
                                        <a href="javascript:;"><img src="img/submit_btn_off.png" alt="답안제출"></a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <!--2단계 1 끝-->
                                
                                <!---3단계 A-->
                                <div id="step3_A">
                                     <img src="img/step03.png" alt="3단계" class="step_guide_img">
                                    <p class="question_title"><img src="img/step3_title.png" alt=""></p>
                                    <div class="quiz_text_box">
                                        <div>
                                            <p class="question_title_sub">조선시대 후기 최고의 화가 <span> 김홍도의 호</span>는?</p>
                                            
                                            <input type="checkbox" id="stop3_ex01_A" value="1">
                                            <label for="stop3_ex01_A">
                                                <span class="check  ex01_check"><img src="img/check.png" alt="선택"></span>
                                                <p>① 단원</p>
                                            </label>
                                            
                                            
                                            <input type="checkbox" id="stop3_ex02_A" value="2">
                                            <label for="stop3_ex02_A">
                                                <span class="check  ex02_check"><img src="img/check.png" alt="선택"></span>
                                                <p>② 충무공</p>
                                            </label>
        
                                            <input type="checkbox" id="stop3_ex03_A" value="3">
                                            <label for="stop3_ex03_A">
                                                <span class="check  ex03_check"><img src="img/check.png" alt="선택"></span>
                                                <p>③ 추사</p>
                                            </label>
                                        </div>
                                        <br>
                                        <div class="clearfix"></div>
                                        <br>
                                        <div>
                                            <p class="question_title_sub">『삼국지(三國志)』에 따르면, <span>가야에서 이것이 많이 생산되었다고 한다.</span>여기서 이것은?</p>
                                            
                                            <input type="checkbox" id="stop3_ex04_A" value="1">
                                            <label for="stop3_ex04_A">
                                                <span class="check  ex04_check"><img src="img/check.png" alt="선택"></span>
                                                <p>① 금 </p>
                                            </label>
                                            
                                            
                                            <input type="checkbox" id="stop3_ex05_A" value="2">
                                            <label for="stop3_ex05_A">
                                                <span class="check  ex05_check"><img src="img/check.png" alt="선택"></span>
                                                <p>② 철 </p>
                                            </label>
        
                                            <input type="checkbox" id="stop3_ex06_A" value="3">
                                            <label for="stop3_ex06_A">
                                                <span class="check  ex06_check"><img src="img/check.png" alt="선택"></span>
                                                <p>③ 진주 </p>
                                            </label>
                                        </div>   
                                        <br>
                                        <div class="clearfix"></div>
                                        <br>   
                                        <div>
                                            <p class="question_title_sub"><span>세계 최초로 강우량 측정 체계</span>를 확립한 이것은?</p>
                                            
                                            <input type="checkbox" id="stop3_ex07_A" value="1">
                                            <label for="stop3_ex07_A">
                                                <span class="check  ex07_check"><img src="img/check.png" alt="선택"></span>
                                                <p>① 해시계</p>
                                            </label>
                                            
                                            
                                            <input type="checkbox" id="stop3_ex08_A" value="2">
                                            <label for="stop3_ex08_A">
                                                <span class="check  ex08_check"><img src="img/check.png" alt="선택"></span>
                                                <p>② 측우기</p>
                                            </label>
        
                                            <input type="checkbox" id="stop3_ex09_A" value="3">
                                            <label for="stop3_ex09_A">
                                                <span class="check  ex09_check"><img src="img/check.png" alt="선택"></span>
                                                <p>③ 온돌</p>
                                            </label>
                                        </div>                               
                                    </div>
                                    <div class="submit_wrap">
                                        <a href="javascript:;"><img src="img/submit_btn_off.png" alt="답안제출"></a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <!---3단계  끝-->
                                <!---3단계 B-->
                                <div id="step3_B">
                                     <img src="img/step03.png" alt="3단계" class="step_guide_img">
                                    <p class="question_title"><img src="img/step3_title.png" alt=""></p>
                                    <div class="quiz_text_box">
                                        <div id="step3_1" style="display:block;">
                                            <p class="question_title_sub">태조 이성계는 조선을 건국하며 가장 먼저 종묘를 세웠습니다.
                                                <span>종묘는 무엇을 위한곳일까요?</span>
                                            </p>
                                            
                                            <input type="checkbox" id="step3_1_ex01" value="1">
                                            <label for="step3_1_ex01">
                                                <span class="check  ex03_check"><img src="img/check.png" alt="선택"></span>
                                                <p>① 신과 곡식의 신에게 제사를 지낸곳</p>
                                            </label>
                                            
                                            
                                            <input type="checkbox" id="stop3_1_ex02" value="2">
                                            <label for="stop3_1_ex02">
                                                <span class="check  ex03_check"><img src="img/check.png" alt="선택"></span>
                                                <p>② 왕과 왕비의 묘</p>
                                            </label>
        
                                            <input type="checkbox" id="stop3_1_ex03" value="3">
                                            <label for="stop3_1_ex03">
                                                <span class="check  ex03_check"><img src="img/check.png" alt="선택"></span>
                                                <p>③ 왕과 왕비의 신주를 모시고 제사를 지낸 곳</p>
                                            </label>
                                        </div>
                                        <div id="step3_2">
                                            <p class="question_title_sub">다음 중 종묘에 대한 설명이 <span>아닌것은?</span></p>
                                            <br>
                                            
                                            <input type="checkbox" id="stop3_2_ex01" value="1">
                                            <label for="stop3_2_ex01">
                                                <span class="check  ex03_check"><img src="img/check.png" alt="선택"></span>
                                                <p>① 광해군의 신주가 모셔져 있다.</p>
                                            </label>
                                            
                                            
                                            <input type="checkbox" id="stop3_2_ex02" value="2">
                                            <label for="stop3_2_ex02">
                                                <span class="check  ex03_check"><img src="img/check.png" alt="선택"></span>
                                                <p>② 유네스코 세계문화유산으로 등록되어 있다.</p>
                                            </label>
        
                                            <input type="checkbox" id="stop3_2_ex03" value="3">
                                            <label for="stop3_2_ex03">
                                                <span class="check  ex03_check"><img src="img/check.png" alt="선택"></span>
                                                <p>③ 종묘제레악은 종묘제례 때 곁들이는 음악과 춤이다.</p>
                                            </label>
                                        </div>
                                        <div id="step3_3">
                                            <p class="question_title_sub">일제강점기 시, 아우내장터에서 만세운동을 주도하다<br> 체포되어 <span>서대문형무소에서 순국한 인물은?</span></p>
                                            
                                            <input type="checkbox" id="stop3_3_ex01" value="1">
                                            <label for="stop3_3_ex01">
                                                <span class="check  ex03_check"><img src="img/check.png" alt="선택"></span>
                                                <p>① 안중근</p>
                                            </label>
                                            
                                            
                                            <input type="checkbox" id="stop3_3_ex02" value="2">
                                            <label for="stop3_3_ex02">
                                                <span class="check  ex03_check"><img src="img/check.png" alt="선택"></span>
                                                <p>② 윤봉길</p>
                                            </label>
        
                                            <input type="checkbox" id="stop3_3_ex03" value="3">
                                            <label for="stop3_3_ex03">
                                                <span class="check  ex03_check"><img src="img/check.png" alt="선택"></span>
                                                <p>③ 유관순</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="submit_wrap">
                                        <a href="javascript:;"><img src="img/submit_btn_off.png" alt="답안제출"></a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <!---3단계  끝-->
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--컨텐츠 끝-->
                <!--경품보기 팝업-->
                <!--경품보기 -->
                <div class="popup" id="gift_list_sub3">
                     <a href="javascript:;" class="close_btn" onclick="popup.close('#gift_list_sub3');"><img src="img/close_btn2.png" ></a>
                </div>
                <!--경품보기 끝-->
                <!--경품보기 팝업 끝-->
                <!--오답팝업-->
                <div class="popup" id="incorrect_pop">
                     <a href="javascript:;" class="close_btn" onclick="popup.close('#incorrect_pop');"><img src="img/incorrect_close_btn.png" ></a>
                     <img src="img/incorrect_main_pop.png" alt="" class="main_img">
                     <div class="btn_wrap">
                         <a href="javascript:;" class="back_btn"><img src="img/incorrect_back_btn_off.png" class="back"></a>
                         <a href="javascript:;" class="stop_btn"><img src="img/incorrect_stop_btn_off.png" class="stop"></a>
                     </div>
                </div>
                <!-- 오답팝업 끝-->
                <!--1단계 정답 팝업-->
                <div class="popup" id="step1_answer_pop">
                    <a href="javascript:;" class="close_btn" onclick="popup.close('#step1_answer_pop');"><img src="img/incorrect_close_btn.png" ></a>
                    <img src="img/step1_answer.png" alt="" class="main_img">
                    <form id="index3_step1">
                    <input type="hidden" value="event3" class="gubunevent">
                    <div class="agree__box">
                        <img src="img/step1_main.png" class="info_img">
                        <div class="info_input_wrap">
                              <label for="name01"><img src="img/answer_input01.png" class="title01"></label>
                              <input type="text" id="name01" class="name" placeholder="이름을 입력해주세요" value="">
                              <label for="phone_num01"><img src="img/answer_input02.png" class="title02"></label>
                              <input type="text" id="phone_num01" class="phone_num" placeholder="'-'를 제외한 휴대폰 번호를 입력해주세요." value="">
                        </div>
                        <div class="clearfix"></div>
                        <div class="privacy_agree_Wrap">
                             <div class="agree_box1">
                                <input type="checkbox" id="agree01" class="agree01 checkbox-style" /><label for="agree01"><img src="img/answer_input03.png" class="title03"></label>
                                <div class="agree_01">
                                    1<?php include 'agree_1.php'; ?>
                                </div>
                            </div>
                            <div class="agree_box2">
                                <input type="checkbox" id="agree02" class="agree02 checkbox-style" /><label for="agree02"><img src="img/answer_input03.png" class="title03"></label>
                                <div class="agree_02">
                                    <?php include 'agree_2.php'; ?>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="next_stop_btn_wrap">
                            <a href="javascript:;" class="stop_btn"><img src="img/step1_stop_btn_off.png" ></a>
                            <a href="javascript:;" class="next_btn"><img src="img/step1_next_btn_off.png"></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    </form>
                </div>
                <!--1단계 정답 팝업 끝-->
                
                <!--2단계 A 타입 정답 팝업 정답 팝업-->
                <div class="popup" id="step2_answer_pop_A">
                     <a href="javascript:;" class="close_btn" onclick="popup.close('#step2_answer_pop_A');"><img src="img/incorrect_close_btn.png" ></a>
                    <img src="img/step2_answer.png" alt="" class="main_img">
                    <form id="index3_step2" class="index3_step2">
                    <div class="agree__box">
                        <img src="img/step2_main.png" class="info_img">
                        <div class="info_input_wrap">
                              <label for="name02"><img src="img/answer_input01.png" class="title01"></label>
                              <input type="text" id="name02" class="name" readonly="readonly" value="">
                              <label for="phone_num02"><img src="img/answer_input02.png" class="title02"></label>
                              <input type="text" id="phone_num02" class="phone_num" readonly="readonly" value="">
                        </div>
                        <div class="clearfix"></div>
                        <div class="privacy_agree_Wrap">
                             <div class="agree_box1">
                                <input type="checkbox" id="agree03" class="agree01 checkbox-style" /><label for="agree03"><img src="img/answer_input03.png" class="title03"></label>
                                <div class="agree_01">
                                    <?php include 'agree_1.php'; ?>
                                </div>
                            </div>
                            <div class="agree_box2">
                                <input type="checkbox" id="agree04" class="agree02 checkbox-style" /><label for="agree04"><img src="img/answer_input03.png" class="title03"></label>
                                <div class="agree_02">
                                   <?php include 'agree_2.php'; ?>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="next_stop_btn_wrap">
                            <a href="javascript:;" class="stop_btn"><img src="img/step1_stop_btn_off.png" ></a>
                            <a href="javascript:;" class="next_btn"><img src="img/step1_next_btn_off.png"></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    </form>
                </div>
                <!--2단계 정답 팝업 끝-->
                 <!--2단계 B 타입 정답 팝업 정답 팝업-->
                <div class="popup" id="step2_answer_pop_B">
                     <a href="javascript:;" class="close_btn" onclick="popup.close('#step2_answer_pop_B');"><img src="img/incorrect_close_btn.png" ></a>
                    <img src="img/step2_answer_type_b.png" alt="" class="main_img">
                    <form id="index3_step2" class="index3_step2">
                    <div class="agree__box">
                        <img src="img/step2_main.png" class="info_img">
                        <div class="info_input_wrap">
                              <label for="name02_b"><img src="img/answer_input01.png" class="title01"></label>
                              <input type="text" id="name02_b" class="name" readonly="readonly" value="">
                              <label for="phone_num02_b"><img src="img/answer_input02.png" class="title02"></label>
                              <input type="text" id="phone_num02_b" class="phone_num" readonly="readonly" value="">
                        </div>
                        <div class="clearfix"></div>
                        <div class="privacy_agree_Wrap">
                             <div class="agree_box1">
                                <input type="checkbox" id="agree03_b" class="agree01 checkbox-style" /><label for="agree03_b"><img src="img/answer_input03.png" class="title03"></label>
                                <div class="agree_01">
                                    <?php include 'agree_1.php'; ?>
                                </div>
                            </div>
                            <div class="agree_box2">
                                <input type="checkbox" id="agree04_b" class="agree02 checkbox-style" /><label for="agree04_b"><img src="img/answer_input03.png" class="title03"></label>
                                <div class="agree_02">
                                   <?php include 'agree_2.php'; ?>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="next_stop_btn_wrap">
                            <a href="javascript:;" class="stop_btn"><img src="img/step1_stop_btn_off.png" ></a>
                            <a href="javascript:;" class="next_btn"><img src="img/step1_next_btn_off.png"></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    </form>
                </div>
                <!--2단계 정답 팝업 끝-->
                <!--3단계  A 타입 정답 팝업-->
                <div class="popup" id="step3_answer_pop_A" >
                    <a href="javascript:;" class="close_btn" onclick="popup.close('#step3_answer_pop_A');"><img src="img/incorrect_close_btn.png" ></a>
                    <img src="img/step3_answer.png" alt="" class="main_img">
                    <form id="index3_step3" class="index3_step3_A">
                    <div class="agree__box">
                        <img src="img/step3_main.png" class="info_img">
                        <div class="info_input_wrap">
                              <label for="name03"><img src="img/answer_input01.png" class="title01"></label>
                              <input type="text" id="name03" class="name" readonly="readonly" value="">
                              <label for="phone_num03"><img src="img/answer_input02.png" class="title02"></label>
                              <input type="text" id="phone_num03" class="phone_num" readonly="readonly" value="">
                        </div>
                        <div class="clearfix"></div>
                        <div class="privacy_agree_Wrap">
                             <div class="agree_box1">
                                <input type="checkbox" id="agree05" class="agree01 checkbox-style" /><label for="agree05"><img src="img/answer_input03.png" class="title03"></label>
                                <div class="agree_01">
                                    <?php include 'agree_1.php'; ?>
                                </div>
                            </div>
                            <div class="agree_box2">
                                <input type="checkbox" id="agree06" class="agree02 checkbox-style" /><label for="agree06"><img src="img/answer_input03.png" class="title03"></label>
                                <div class="agree_02">
                                    <?php include 'agree_2.php'; ?>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="next_step3_btn_wrap">
                            <a href="javascript:;" class="step3_btn"><img src="img/step3_btn_off.png" ></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    </form>
                </div>
                <!--3단계 정답 팝업 끝-->
                 <!--3단계  B 타입 정답 팝업-->
                <div class="popup" id="step3_answer_pop_B">
                    <a href="javascript:;" class="close_btn" onclick="popup.close('#step3_answer_pop_B');"><img src="img/incorrect_close_btn.png" ></a>
                    <img src="img/step3_answer_type_b.png" alt="" class="main_img">
                    <form id="index3_step3" class="index3_step3_B">
                    <div class="agree__box">
                        <img src="img/step3_main.png" class="info_img">
                        <div class="info_input_wrap">
                              <label for="name03_b"><img src="img/answer_input01.png" class="title01"></label>
                              <input type="text" id="name03_b" class="name" readonly="readonly" value="">
                              <label for="phone_num03_b"><img src="img/answer_input02.png" class="title02"></label>
                              <input type="text" id="phone_num03_b" class="phone_num" readonly="readonly" value="">
                        </div>
                        <div class="clearfix"></div>
                        <div class="privacy_agree_Wrap">
                             <div class="agree_box1">
                                <input type="checkbox" id="agree05_b" class="agree01 checkbox-style" /><label for="agree05_b"><img src="img/answer_input03.png" class="title03"></label>
                                <div class="agree_01">
                                    <?php include 'agree_1.php'; ?>
                                </div>
                            </div>
                            <div class="agree_box2">
                                <input type="checkbox" id="agree06_b" class="agree02 checkbox-style" /><label for="agree06_b"><img src="img/answer_input03.png" class="title03"></label>
                                <div class="agree_02">
                                    <?php include 'agree_2.php'; ?>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="next_step3_btn_wrap">
                            <a href="javascript:;" class="step3_btn"><img src="img/step3_btn_off.png" ></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    </form>
                </div>
                <!--3단계 정답 팝업 끝-->
                
                <!--3단계 이벤트 참여 완료 팝업-->

                <div class="popup" id="complete_pop">
                     <a href="javascript:;" class="close_btn" onclick="popup.close('#complete_pop');"><img src="img/incorrect_close_btn.png" ></a>
                     <ul>
                        <li><a href="javascript:;" class="share_fb" ><img src="img/fb_icon.png"></a></li>
                        <li><a href="javascript:;" class="share_tw"><img src="img/tw_icon.png"></a></li>
                        <li><a href="javascript:;" class="share_kt" ><img src="img/kt_icon.png"></a></li>
                    </ul>
                    <div class="clearfix"></div>
                    <a href="javascript:;" onclick="window.location.reload();" class="share_btn"><img src="img/complete_pop_btn.png" alt=""></a>
                </div>
    
                <!--3단계 이벤트 참여 완료 팝업 끝-->
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
            <!--PC 끝-->
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
                        <li><a href="index1.php"><img src="img/mobile/201609tab2_off_mobile.png"></a></li>
                        <li><a href="index3.php"><img src="img/mobile/201609tab3_on_mobile.png"></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <!--컨텐츠 시작-->
                <div class="container960" id="mobile_sub3">
                   <img src="img/mobile_sub3_content_back.png" class="img-responsive">
                   <div class="mobile_sub3_wrap">
                       <div class="sub3_gift_btn">
                           <a href="javascript:;" onclick="popup.open('#mobile_sub3_gift_pop');"><img src="img/sub3_gift_btn.png" alt="" class="img-responsive"></a>
                       </div>
                       <!--모바일 1단계-->
                       <div class="q_box_wrap position_rel" id="mobile_step1_wrap" style="display:block;">
                           <span class="step_comment"><img src="img/step01_mobile.png" class="img-responsive"></span>
                           <img src="img/q_box_mobile.png" alt="" class="img-responsive">
                           <div id="mobile_step01">
                               <div class="mobile_step_inner">
                                  <img src="img/mobile_q_title01.png" class="img-responsive">
                                  <div class="step1_box_left" >
                                      <img src="img/mobile_step1_ex1.png" alt="" class="img-responsive">
                                      <input type="checkbox" id="mobile_stop1_ex01" value="딸기농장체험">
                                      <label for="mobile_stop1_ex01">
                                        <p class="position_rel"><span class="check ex01_check"><img src="img/check.png" class="ing-responsive" alt="선택" ></span>① 딸기농장체험</p>
                                      </label>
                                  </div>
                                  <div class="step1_box_right">
                                      <img src="img/mobile_step1_ex2.png" alt="" class="img-responsive">
                                      <input type="checkbox" id="mobile_stop1_ex02" value="과천과학관체험">
                                      <label for="mobile_stop1_ex02">
                                        <p><span class="check ex02_check"><img src="img/check.png" class="img-responsive"  alt="선택"></span>② 과천 과학관 체험</p>
                                      </label>
                                  </div>
                                  <div class="clearfix"></div>
                                  <div class="step1_box_center_wrap">
                                      <div class="step1_box_center">
                                          <img src="img/mobile_step1_ex3.png" alt="" class="img-responsive">
                                          <input type="checkbox" id="mobile_stop1_ex03" value="도자기만들기체험">
                                          <label for="mobile_stop1_ex03">
                                            <p><span class="check ex03_check"><img src="img/check.png" class="img-responsive"  alt="선택"></span>③ 도자기 만들기 체험</p>
                                          </label>
                                      </div>
                                  </div>
                               </div>
                           </div>
                           <div class="mobile_submit_btn_wrap">
                               <img src="img/mobile_submit_btn_off.png" alt="답안제출" class="img-responsive">
                           </div>
                       </div>
                       <!--모바일 2단계 A-->
                      <div class="q_box_wrap position_rel"  id="mobile_step2_A_wrap">
                           <span class="step_comment"><img src="img/step02_mobile.png" class="img-responsive"></span>
                           <img src="img/q_box_mobile.png" alt="" class="img-responsive">
                           <div id="mobile_step02_A">
                               <div class="mobile_step_inner">
                                  <img src="img/mobile_q_title02_A.png" class="img-responsive">
                                  <div class="left_wrap">
                                      <div class="thum_box">
                                            <img src="img/mobile_step2_ex1_1.png" alt="" class="img-responsive">
                                            <input type="checkbox" value="거북선" name="quiz2" id="step2_ex01_mobile_A">
                                            <label for="step2_ex01_mobile_A"><img src="img/left_label.png"></label>
                                        </div>
                                        <div class="clearfix"></div>
                                         <div class="thum_box">
                                            <img src="img/mobile_step2_ex1_2.png" alt="" class="img-responsive">
                                            <input type="checkbox" value="해시계" name="quiz2" id="step2_ex02_mobile_A">
                                            <label for="step2_ex02_mobile_A"><img src="img/left_label.png"></label>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="thum_box">
                                            <img src="img/mobile_step2_ex1_3.png" alt="" class="img-responsive">
                                            <input type="checkbox" value="첨성대" name="quiz2" id="step2_ex03_mobile_A">
                                            <label for="step2_ex03_mobile_A"><img src="img/left_label.png"></label>
                                        </div>
                                        <div class="clearfix"></div>
                                  </div>
                                  <div class="answer_line_wrap">   
                                      <img src="img/mobile_answer_other1.png" class="answer_line1">
                                      <img src="img/mobile_answer_other2.png" class="answer_line2">
                                      <img src="img/mobile_answer_other3.png" class="answer_line3">
                                  </div>
                                  
                                  <div class="right_wrap">
                                    <div class="thum_box">
                                        <input type="checkbox" value="첨성대" name="quiz2" id="step2_ex04_mobile_A">
                                        <label for="step2_ex04_mobile_A"><img src="img/right_label.png"></label>
                                        <img src="img/mobile_step2_ex1_4.png" alt="" class="img-responsive">
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="thum_box">
                                        <input type="checkbox" value="해시계" name="quiz2" id="step2_ex05_mobile_A">
                                        <label for="step2_ex05_mobile_A"><img src="img/right_label.png"></label>
                                        <img src="img/mobile_step2_ex1_5.png" alt="" class="img-responsive">
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="thum_box">
                                        <input type="checkbox" value="거북선" name="quiz2" id="step2_ex06_mobile_A">
                                        <label for="step2_ex06_mobile_A"><img src="img/right_label.png"></label>
                                        <img src="img/mobile_step2_ex1_6.png" alt="" class="img-responsive">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                               </div>
                               <div class="clearfix"></div>
                           </div>
                           <div class="mobile_submit_btn_wrap">
                               <img src="img/mobile_submit_btn_off.png" alt="답안제출" class="img-responsive">
                           </div>
                       </div>
                      <!--모바일 2단계 B-->
                      <div class="q_box_wrap position_rel"  id="mobile_step2_B_wrap">
                           <span class="step_comment"><img src="img/step02_mobile.png" class="img-responsive"></span>
                           <img src="img/q_box_mobile.png" alt="" class="img-responsive">
                           <div id="mobile_step02_B">
                               <div class="mobile_step_inner">
                                  <img src="img/mobile_q_title02.png" class="img-responsive">
                                  <div class="left_wrap">
                                      <div class="thum_box">
                                            <img src="img/mobile_step2_ex1.png" alt="" class="img-responsive">
                                            <input type="checkbox" value="옷" name="quiz2" id="step2_ex01_mobile_B">
                                            <label for="step2_ex01_mobile_B"><img src="img/left_label.png"></label>
                                        </div>
                                        <div class="clearfix"></div>
                                         <div class="thum_box">
                                            <img src="img/mobile_step2_ex2.png" alt="" class="img-responsive">
                                            <input type="checkbox" value="종이" name="quiz2" id="step2_ex02_mobile_B">
                                            <label for="step2_ex02_mobile_B"><img src="img/left_label.png"></label>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="thum_box">
                                            <img src="img/mobile_step2_ex3.png" alt="" class="img-responsive">
                                            <input type="checkbox" value="집" name="quiz2" id="step2_ex03_mobile_B">
                                            <label for="step2_ex03_mobile_B"><img src="img/left_label.png"></label>
                                        </div>
                                        <div class="clearfix"></div>
                                  </div>
                                  <div class="answer_line_wrap">   
                                      <img src="img/mobile_answer1.png" class="answer_line1">
                                      <img src="img/mobile_answer2.png" class="answer_line2">
                                      <img src="img/mobile_answer3.png" class="answer_line3">
                                  </div>
                                  
                                  <div class="right_wrap">
                                    <div class="thum_box">
                                        <input type="checkbox" value="종이" name="quiz2" id="step2_ex04_mobile_B">
                                        <label for="step2_ex04_mobile_B"><img src="img/right_label.png"></label>
                                        <img src="img/mobile_step2_ex4.png" alt="" class="img-responsive">
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="thum_box">
                                        <input type="checkbox" value="옷" name="quiz2" id="step2_ex05_mobile_B">
                                         <label for="step2_ex05_mobile_B"><img src="img/right_label.png"></label>
                                        <img src="img/mobile_step2_ex5.png" alt="" class="img-responsive">
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="thum_box">
                                        <input type="checkbox" value="집" name="quiz2" id="step2_ex06_mobile_B">
                                        <label for="step2_ex06_mobile_B"><img src="img/right_label.png"></label>
                                        <img src="img/mobile_step2_ex6.png" alt="" class="img-responsive">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                               </div>
                               <div class="clearfix"></div>
                           </div>
                           <div class="mobile_submit_btn_wrap">
                               <img src="img/mobile_submit_btn_off.png" alt="답안제출" class="img-responsive">
                           </div>
                       </div>
                        <!--모바일 3단계 A 타입-->
                      <div class="q_box_wrap position_rel" id="mobile_step3_A_wrap">
                           <span class="step_comment"><img src="img/step03_mobile.png" class="img-responsive"></span>
                           <img src="img/q_box_mobile.png" alt="" class="img-responsive">
                           <div id="mobile_step03_A">
                               <div class="mobile_step_inner">
                                  <img src="img/mobile_q_title03.png" class="img-responsive">
                                  <div class="quiz_text_box">
                                       <p class="question_title_sub">조선시대 후기 최고의 화가 <span> 김홍도의 호</span> 는?</p>
                                        <input type="checkbox" id="mobile_stop3_ex01_A" value="1" >
                                        <label for="mobile_stop3_ex01_A">
                                           <span class="check check_01"><img src="img/check.png" alt="선택"></span>
                                            <p>① 단원</p>
                                        </label>
                                        <input type="checkbox" id="mobile_stop3_ex02_A" value="2" >
                                        <label for="mobile_stop3_ex02_A">
                                            <span class="check check_02"><img src="img/check.png" alt="선택"></span>
                                            <p>② 충무공</p>
                                        </label>
                                        <input type="checkbox" id="mobile_stop3_ex03_A" value="3">
                                        <label for="mobile_stop3_ex03_A">
                                            <span class="check check_03"><img src="img/check.png" alt="선택"></span>
                                            <p>③ 추사</p>
                                        </label>
                                    </div> 
                                    <div class="clearfix"></div>
                                    <div class="quiz_text_box">
                                       <p class="question_title_sub">『삼국지(三國志)』에 따르면, <span> 가야에서 이것이
많이 생산되었다고 한다.</span> 여기서 이것은?</p>
                                        <input type="checkbox" id="mobile_stop3_ex04_A" value="1">
                                        <label for="mobile_stop3_ex04_A">
                                           <span class="check check_04"><img src="img/check.png" alt="선택"></span>
                                            <p>① 금</p>
                                        </label>
                                        <input type="checkbox" id="mobile_stop3_ex05_A" value="2">
                                        <label for="mobile_stop3_ex05_A">
                                            <span class="check check_05"><img src="img/check.png" alt="선택"></span>
                                            <p>② 철</p>
                                        </label>
                                        <input type="checkbox" id="mobile_stop3_ex06_A" value="3">
                                        <label for="mobile_stop3_ex06_A">
                                            <span class="check check_06"><img src="img/check.png" alt="선택"></span>
                                            <p>③ 진주</p>
                                        </label>
                                    </div> 
                                    <div class="clearfix"></div>
                                    <div class="quiz_text_box">
                                       <p class="question_title_sub"><span> 세계 최초로 강우량 측정 체계 </span> 를 확립한 이것은?</p>
                                        <input type="checkbox" id="mobile_stop3_ex07_A" value="1">
                                        <label for="mobile_stop3_ex07_A">
                                           <span class="check check_07"><img src="img/check.png" alt="선택"></span>
                                            <p>① 해시계</p>
                                        </label>
                                        <input type="checkbox" id="mobile_stop3_ex08_A" value="2">
                                        <label for="mobile_stop3_ex08_A">
                                            <span class="check check_08"><img src="img/check.png" alt="선택"></span>
                                            <p>② 측우기</p>
                                        </label>
                                        <input type="checkbox" id="mobile_stop3_ex09_A" value="3">
                                        <label for="mobile_stop3_ex09_A">
                                            <span class="check check_09"><img src="img/check.png" alt="선택"></span>
                                            <p>③ 온돌</p>
                                        </label>
                                    </div> 
                               </div>
                               <div class="clearfix"></div>
                           </div>
                           <div class="mobile_submit_btn_wrap">
                               <img src="img/mobile_submit_btn_off.png" alt="답안제출" class="img-responsive">
                           </div>
                       </div>
                      <!--모바일 3단계 B 타입-->
                      <div class="q_box_wrap position_rel" id="mobile_step3_B_wrap">
                           <span class="step_comment"><img src="img/step03_mobile.png" class="img-responsive"></span>
                           <img src="img/q_box_mobile.png" alt="" class="img-responsive">
                           <div id="mobile_step03_B">
                               <div class="mobile_step_inner">
                                  <img src="img/mobile_q_title03.png" class="img-responsive">
                                  <div class="quiz_text_box">
                                        <div id="mobile_step3_1">
                                            <p class="question_title_sub">태조 이성계는 조선을 건국하며 가장 먼저 종묘를 세웠습니다.
                                                <span>종묘는 무엇을 위한곳일까요?</span>
                                            </p>
                                            
                                            <input type="checkbox" id="mobile_stop3_ex01_1" value="1">
                                            <label for="mobile_stop3_ex01_1">
                                               <span class="check"><img src="img/check.png" alt="선택"></span>
                                                <p>① 신과 곡식의 신에게 제사를 지낸곳</p>
                                            </label>
                                            
                                            
                                            <input type="checkbox" id="mobile_stop3_ex01_2" value="2">
                                            <label for="mobile_stop3_ex01_2">
                                                <span class="check"><img src="img/check.png" alt="선택"></span>
                                                <p>② 왕과 왕비의 묘</p>
                                            </label>
        
                                            <input type="checkbox" id="mobile_stop3_ex01_3" value="3">
                                            <label for="mobile_stop3_ex01_3">
                                                <span class="check"><img src="img/check.png" alt="선택"></span>
                                                <p>③ 왕과 왕비의 신주를 모시고 제사를 지낸 곳</p>
                                            </label>
                                        </div>
                                        <div id="mobile_step3_2">
                                            <p class="question_title_sub">다음 중 종묘에 대한 설명이 <span>아닌것은?</span></p>
                                            <br>
                                            
                                            <input type="checkbox" id="mobile_stop3_ex02_1" value="1">
                                            <label for="mobile_stop3_ex02_1">
                                                <span class="check"><img src="img/check.png" alt="선택"></span>
                                                <p>① 광해군의 신주가 모셔져 있다.</p>
                                            </label>
                                            
                                            
                                            <input type="checkbox" id="mobile_stop3_ex02_2" value="2">
                                            <label for="mobile_stop3_ex02_2">
                                                <span class="check"><img src="img/check.png" alt="선택"></span>
                                                <p>② 유네스코 세계문화유산으로 등록되어 있다.</p>
                                            </label>
        
                                            <input type="checkbox" id="mobile_stop3_ex02_3" value="3">
                                            <label for="mobile_stop3_ex02_3">
                                                <span class="check"><img src="img/check.png" alt="선택"></span>
                                                <p>③ 종묘제레악은 종묘제례 때 곁들이는 음악과 춤이다.</p>
                                            </label>
                                        </div>
                                        <div id="mobile_step3_3">
                                            <p class="question_title_sub">일제강점기 시, 아우내장터에서 만세운동을 주도하다 체포되어 <span>서대문형무소에서 순국한 인물은?</span></p>
                                            
                                            <input type="checkbox" id="mobile_stop3_ex03_1" value="1">
                                            <label for="mobile_stop3_ex03_1">
                                                <span class="check"><img src="img/check.png" alt="선택"></span>
                                                <p>① 안중근</p>
                                            </label>
                                            
                                            
                                            <input type="checkbox" id="mobile_stop3_ex03_2" value="2">
                                            <label for="mobile_stop3_ex03_2">
                                                <span class="check"><img src="img/check.png" alt="선택"></span>
                                                <p>② 윤봉길</p>
                                            </label>
        
                                            <input type="checkbox" id="mobile_stop3_ex03_3" value="3">
                                            <label for="mobile_stop3_ex03_3">
                                                <span class="check"><img src="img/check.png" alt="선택"></span>
                                                <p>③ 유관순</p>
                                            </label>
                                        </div>
                                    </div> 
                               </div>
                               <div class="clearfix"></div>
                           </div>
                           <div class="mobile_submit_btn_wrap">
                               <img src="img/mobile_submit_btn_off.png" alt="답안제출" class="img-responsive">
                           </div>
                       </div>
                   </div>
                </div>
                <!--컨텐츠 끝-->
                <!--모바일 경품보기 팝업-->
                <div class="popup" id="mobile_sub3_gift_pop">
                    <div class="mobile_sub1_gift_inner">
                    <a href="javascript:;" class="close_btn" onclick="popup.close('#mobile_sub3_gift_pop');"><img src="img/mobile_close.png" ></a>
                    <img src="img/mobile_sub3_gift_pop.png" class="img-responsive">
                    </div>
                </div>
                 <!--모바일 참여완료 팝업-->
                <div class="popup" id="mobile_sns_share3_pop">
                    <div class="mobile_sns_share_pop_inner  position_rel">
                    <img src="img/mobile_sns_share_pop3.png" alt="" class="img-responsive">
                    <a href="javascript:;" class="close_btn" onclick="popup.close('#mobile_sns_share3_pop');"><img src="img/mobile_close.png" ></a>
                    <div class="mobile_sns_share_btn_wrap">
                        <a href="#" class="sns_btn share_fb"><img src="img/mobile_sns_share_pop_fb.png" class="img-responsive"></a>
                        <a href="#" class="sns_btn share_tw"><img src="img/mobile_sns_share_pop_tw.png" class="img-responsive"></a>
                        <a href="#" class="sns_btn share_kt" id="kakao-link-btn"><img src="img/mobile_sns_share_pop_kt.png" class="img-responsive"></a>
                         <div class="mobile_sns_share_ok_Wrap" style="width:45%; margin:0 auto;">
                            <a href="javascript:;" onclick="window.location.reload();">
                                <img src="img/mobile_sns_share_pop3_ok.png" alt="" class="img-responsive">
                            </a>
                        </div>
                    </div>
                    </div>
                </div>
                <!--모바일 참여완료 팝업 -->
                <!--3딘계 1 번 정답 페이지-->
                <div class="popup" id="mobile_sub3_answer_step1">
                    <div class="mobile_sub3_application_pop_inner"  style="background-color:#fff;">
                         <a href="javascript:;" class="close_btn" onclick="popup.close('#mobile_sub3_answer_step1');"><img src="img/mobile_close.png" ></a>
                        <div class="title">
                        <img src="img/mobile_step1_top.png" alt="" class="img-responsive title_img">
                        </div>
                        <div class="gray_back">
                            <img src="img/mobile_step1_bottom.png" alt="" class="img-responsive">
                        </div>
                        <div class="form_wrap gray_back">
                        <form id="mobile_index3_step1">
                            <div class="info_input_wrap gray_back">
                                  <label for="mobile_index3_name"><img src="img/mobile_input01_name.png" class="title01"></label>
                                  <input type="text" id="mobile_index3_name" class="name" placeholder="이름을 입력해주세요">
                                  <label for="mobile_index3_phone_num"><img src="img/mobile_input02_tel.png" class="title02"></label>
                                  <input type="tel" id="mobile_index3_phone_num" class="phone_num" placeholder="'-'를 제외한 휴대폰 번호를 입력해주세요.">
                            <div class="clearfix gray_back"></div>
                            </div>
                            <div class="mobile_agree_inner">
                                <div class="mobile_agree_inner_back">
                                <div class="agree_box1">
                                    <input type="checkbox" id="mobile_index3_agree01" class="agree01 checkbox-style" /><label for="mobile_index3_agree01"><img src="img/mobile_input03_agree.png" class="title03"></label>
                                    <div class="agree_01">
                                        <?php include 'agree_1.php'; ?>
                                    </div>
                                </div>
                                <div class="agree_box2">
                                    <input type="checkbox" id="mobile_index3_agree02" class="agree02 checkbox-style" /><label for="mobile_index3_agree02"><img src="img/mobile_input03_agree.png" class="title03"></label>
                                    <div class="agree_02">
                                        <?php include 'agree_2.php'; ?>
                                    </div>
                                  
                                </div>
                                </div>
                            </div>
                             </div>
                            <div class="clearfix"></div>
                            <div class="share_btn_wrap">
                                <a href="javascript:;" class="mobile_step_stop_btn"><img src="img/mobile_step_stop_btn_off.png" class="img-responsive"></a>
                                <a href="javascript:;" class="mobile_step_next_btn"><img src="img/mobile_step_next_btn_off.png" class="img-responsive" style="margin-top:2%;"></a>
                            </div>
                        </form>
                       
                    </div>
                </div>
                <!--3단계 2 번  A 정답 페이지-->
                <div class="popup" id="mobile_sub3_answer_step2_A">
                    <div class="mobile_sub3_application_pop_inner"  style="background-color:#fff;">
                         <a href="javascript:;" class="close_btn" onclick="popup.close('#mobile_sub3_answer_step2_A');"><img src="img/mobile_close.png" ></a>
                        <div class="title">
                        <img src="img/mobile_step2_a_top.png" alt="" class="img-responsive title_img">
                        </div>
                        <div class="gray_back">
                            <img src="img/mobile_step2_bottom.png" alt="" class="img-responsive">
                        </div>
                        <div class="form_wrap gray_back">
                        <form id="mobile_index3_step2_A">
                            <div class="info_input_wrap gray_back">
                                  <label for="mobile_index3_name_A"><img src="img/mobile_input01_name.png" class="title01"></label>
                                  <input type="text" id="mobile_index3_name_A" class="name" placeholder="이름을 입력해주세요" readonly="readonly" value="">
                                  <label for="mobile_index3_phone_num_A"><img src="img/mobile_input02_tel.png" class="title02"></label>
                                  <input type="tel" id="mobile_index3_phone_num_A" class="phone_num" placeholder="'-'를 제외한 휴대폰 번호를 입력해주세요." readonly="readonly" value="">
                            <div class="clearfix gray_back"></div>
                            </div>
                            <div class="mobile_agree_inner">
                                <div class="mobile_agree_inner_back">
                                <div class="agree_box1">
                                    <input type="checkbox" id="mobile_index3_agree01_A" class="agree01 checkbox-style" /><label for="mobile_index3_agree01_A"><img src="img/mobile_input03_agree.png" class="title03"></label>
                                    <div class="agree_01">
                                        <?php include 'agree_1.php'; ?>
                                    </div>
                                </div>
                                <div class="agree_box2">
                                    <input type="checkbox" id="mobile_index3_agree02_A" class="agree02 checkbox-style" /><label for="mobile_index3_agree02_A"><img src="img/mobile_input03_agree.png" class="title03"></label>
                                    <div class="agree_02">
                                        <?php include 'agree_2.php'; ?>
                                    </div>
                                  
                                </div>
                                </div>
                            </div>
                             </div>
                            <div class="clearfix"></div>
                            <div class="share_btn_wrap">
                                <a href="javascript:;" class="mobile_step_stop_btn"><img src="img/mobile_step_stop_btn_off.png" class="img-responsive"></a>
                                <a href="javascript:;" class="mobile_step_next_btn"><img src="img/mobile_step_next_btn_off.png" class="img-responsive" style="margin-top:2%;"></a>
                            </div>
                        </form>
                       
                    </div>
                </div>
                <!--3단계 2 번  B 정답 페이지-->
                <div class="popup" id="mobile_sub3_answer_step2_B">
                    <div class="mobile_sub3_application_pop_inner"  style="background-color:#fff;">
                         <a href="javascript:;" class="close_btn" onclick="popup.close('#mobile_sub3_answer_step2_B');"><img src="img/mobile_close.png" ></a>
                        <div class="title">
                        <img src="img/mobile_step2_b_top.png" alt="" class="img-responsive title_img">
                        </div>
                        <div class="gray_back">
                            <img src="img/mobile_step2_bottom.png" alt="" class="img-responsive">
                        </div>
                        <div class="form_wrap gray_back">
                        <form id="mobile_index3_step2_B">
                            <div class="info_input_wrap gray_back">
                                  <label for="mobile_index3_name_B"><img src="img/mobile_input01_name.png" class="title01"></label>
                                  <input type="text" id="mobile_index3_name_B" class="name" placeholder="이름을 입력해주세요" readonly="readonly" value="">
                                  <label for="mobile_index3_phone_num_B"><img src="img/mobile_input02_tel.png" class="title02"></label>
                                  <input type="tel" id="mobile_index3_phone_num_B" class="phone_num" placeholder="'-'를 제외한 휴대폰 번호를 입력해주세요." readonly="readonly" value="">
                            <div class="clearfix gray_back"></div>
                            </div>
                            <div class="mobile_agree_inner">
                                <div class="mobile_agree_inner_back">
                                <div class="agree_box1">
                                    <input type="checkbox" id="mobile_index3_agree01_B" class="agree01 checkbox-style" /><label for="mobile_index3_agree01_B"><img src="img/mobile_input03_agree.png" class="title03"></label>
                                    <div class="agree_01">
                                        <?php include 'agree_1.php'; ?>
                                    </div>
                                </div>
                                <div class="agree_box2">
                                    <input type="checkbox" id="mobile_index3_agree02_B" class="agree02 checkbox-style" /><label for="mobile_index3_agree02_B"><img src="img/mobile_input03_agree.png" class="title03"></label>
                                    <div class="agree_02">
                                        <?php include 'agree_2.php'; ?>
                                    </div>
                                  
                                </div>
                                </div>
                            </div>
                             </div>
                            <div class="clearfix"></div>
                            <div class="share_btn_wrap">
                                <a href="javascript:;" class="mobile_step_stop_btn"><img src="img/mobile_step_stop_btn_off.png" class="img-responsive"></a>
                                <a href="javascript:;" class="mobile_step_next_btn"><img src="img/mobile_step_next_btn_off.png" class="img-responsive" style="margin-top:2%;"></a>
                            </div>
                        </form>
                       
                    </div>
                </div>
                <!--3단계 3번  A 정답 페이지-->
                <div class="popup" id="mobile_sub3_answer_step3_A" >
                    <div class="mobile_sub3_application_pop_inner"  style="background-color:#fff;">
                         <a href="javascript:;" class="close_btn" onclick="popup.close('#mobile_sub3_answer_step3_A');"><img src="img/mobile_close.png" ></a>
                        <div class="title">
                        <img src="img/mobile_step3_a_top.png" alt="" class="img-responsive title_img">
                        </div>
                        <div class="gray_back">
                            <img src="img/mobile_step3_bottom.png" alt="" class="img-responsive">
                        </div>
                        <div class="form_wrap gray_back">
                        <form id="mobile_index3_step3_A">
                            <div class="info_input_wrap gray_back">
                                  <label for="mobile_index3_3_name_A"><img src="img/mobile_input01_name.png" class="title01"></label>
                                  <input type="text" id="mobile_index3_3_name_A" class="name" placeholder="이름을 입력해주세요" readonly="readonly" value="">
                                  <label for="mobile_index3_3_phone_num_A"><img src="img/mobile_input02_tel.png" class="title02"></label>
                                  <input type="tel" id="mobile_index3_3_phone_num_A" class="phone_num" placeholder="'-'를 제외한 휴대폰 번호를 입력해주세요." readonly="readonly" value=""> 
                            <div class="clearfix gray_back"></div>
                            </div>
                            <div class="mobile_agree_inner">
                                <div class="mobile_agree_inner_back">
                                <div class="agree_box1">
                                    <input type="checkbox" id="mobile_index3_3_agree01_A" class="agree01 checkbox-style" /><label for="mobile_index3_3_agree01_A"><img src="img/mobile_input03_agree.png" class="title03"></label>
                                    <div class="agree_01">
                                        <?php include 'agree_1.php'; ?>
                                    </div>
                                </div>
                                <div class="agree_box2">
                                    <input type="checkbox" id="mobile_index3_3_agree02_A" class="agree02 checkbox-style" /><label for="mobile_index3_3_agree02_A"><img src="img/mobile_input03_agree.png" class="title03"></label>
                                    <div class="agree_02">
                                        <?php include 'agree_2.php'; ?>
                                    </div>
                                  
                                </div>
                                </div>
                            </div>
                             </div>
                            <div class="clearfix"></div>
                            <div class="share_btn_wrap">
                                <a href="javascript:;" class="mobile_step_stop_btn"><img src="img/mobile_application_btn_off.png" class="img-responsive"></a>
                            </div>
                        </form>
                       
                    </div>
                </div>
                 <!--3단계 3번  B 정답 페이지-->
                <div class="popup" id="mobile_sub3_answer_step3_B">
                    <div class="mobile_sub3_application_pop_inner"  style="background-color:#fff;">
                         <a href="javascript:;" class="close_btn" onclick="popup.close('#mobile_sub3_answer_step3_B');"><img src="img/mobile_close.png" ></a>
                        <div class="title">
                        <img src="img/mobile_step3_b_top.png" alt="" class="img-responsive title_img">
                        </div>
                        <div class="gray_back">
                            <img src="img/mobile_step3_bottom.png" alt="" class="img-responsive">
                        </div>
                        <div class="form_wrap gray_back">
                        <form id="mobile_index3_step3_B">
                            <div class="info_input_wrap gray_back">
                                  <label for="mobile_index3_3_name_B"><img src="img/mobile_input01_name.png" class="title01"></label>
                                  <input type="text" id="mobile_index3_3_name_B" class="name" placeholder="이름을 입력해주세요" readonly="readonly" value="">
                                  <label for="mobile_index3_3_phone_num_B"><img src="img/mobile_input02_tel.png" class="title02"></label>
                                  <input type="tel" id="mobile_index3_3_phone_num_B" class="phone_num" placeholder="'-'를 제외한 휴대폰 번호를 입력해주세요." readonly="readonly" value="">
                            <div class="clearfix gray_back"></div>
                            </div>
                            <div class="mobile_agree_inner">
                                <div class="mobile_agree_inner_back">
                                <div class="agree_box1">
                                    <input type="checkbox" id="mobile_index3_3_agree01_B" class="agree01 checkbox-style" /><label for="mobile_index3_3_agree01_B"><img src="img/mobile_input03_agree.png" class="title03"></label>
                                    <div class="agree_01">
                                        <?php include 'agree_1.php'; ?>
                                    </div>
                                </div>
                                <div class="agree_box2">
                                    <input type="checkbox" id="mobile_index3_3_agree02_B" class="agree02 checkbox-style" /><label for="mobile_index3_3_agree02_B"><img src="img/mobile_input03_agree.png" class="title03"></label>
                                    <div class="agree_02">
                                        <?php include 'agree_2.php'; ?>
                                    </div>
                                  
                                </div>
                                </div>
                            </div>
                             </div>
                            <div class="clearfix"></div>
                            <div class="share_btn_wrap">
                                <a href="javascript:;" class="mobile_step_stop_btn"><img src="img/mobile_application_btn_off.png" class="img-responsive"></a>
                            </div>
                        </form>
                       
                    </div>
                </div>
                <!-- 오답팝업 -->
                <div class="popup" id="mobile_incorrect_pop">
                    <div class="inner_input_wrap">
                         <a href="javascript:;" class="close_btn" onclick="popup.close('#mobile_incorrect_pop');"><img src="img/incorrect_close_btn.png"></a>
                         <img src="img/incorrect_main_pop.png" alt="" class="img-responsive">
                         <div class="sns_share_btn">
                             <a href="javascript:;" class="back_btn"><img src="img/incorrect_back_btn_off.png" class="back img-responsive"></a>
                             <a href="javascript:;" class="stop_btn"><img src="img/incorrect_stop_btn_off.png" class="stop img-responsive"></a>
                         </div>
                     </div>
                </div>
                <!--오답팝업 끝-->
                <div id ="mobile_footer"> 
                    <p>주소 : 서울시 종로구 청계천로 51-1 구몬빌딩 12층</p>
                    <p>우편번호 : 03189</p>
                    <p>COPYRIGHT © 2016 KYOWON.CO.LTD ALL RIGHTS RESERVED</p>
                </div>
  
            </div>
            <!--모바일 끝-->
         <script>
        Kakao.init('49443218cfbfa00a2dad57cffe14be7b');
             Kakao.Link.createTalkLinkButton({
              container: '#kakao-link-btn',
              label: '<?=$event3_title?>',
              image: {
                src: '<?=$event3_kakaoimg?>',
                width: '400',
                height: '200'
              },
              webButton: {
                text: '<?=$event3_desc?>',
                url: '<?=$event3_page?>' // 앱 설정의 웹 플랫폼에 등록한 도메인의 URL이어야 합니다.
              }
            });     
         </script>           
        <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/ie8-only.css" />
        <script src="js/poly-checked.min.js"></script>
        <script>
            $(function() {
               $("label").on('click', function(){
                  if ($(this).attr("for") != "") {
                     $(this).siblings('input').removeClass('checked')
                        .end().addClass('checked');
                     $("#" + $(this).attr("for")).trigger('click');
                  }
               });
            });
        </script>
        <![endif]-->
        <!--[if lt IE 9]>
        <script type="text/javascript"  src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->  
        </body>
</html>
