<?php
header("Content-Type: text/html; charset=UTF-8");
	$evt_gubun = $_REQUEST['evt_gubun'];
	$name = $_REQUEST['name'];
	$phone = $_REQUEST['phone'];
	
    if (!empty($_REQUEST['referer'])){
        $referer = $_REQUEST['referer'];//경로
    }else{
        $referer = $_SERVER["HTTP_REFERER"];//경로
    }
			
	$click_sns = $_POST['click_sns'];//sns
	$fb_click = $_REQUEST['fb_click'];  $tw_click = $_REQUEST['tw_click'];  $kt_click = $_REQUEST['kt_click']; $ks_click = $_REQUEST['ks_click'];

	echo "<br>evt_gubun = ".$evt_gubun;
	echo "<br>name = ".$name;
	echo "<br>phone = ".$phone;
	echo "<br>referer = ".$referer;
	echo "<br>click_sns = ".$click_sns;
	echo "<br>fb_click = ".$fb_click;
	echo "<br>tw_click = ".$tw_click;
	echo "<br>kt_click = ".$kt_click;
	echo "<br>ks_click = ".$ks_click;
?>
