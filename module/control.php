<?php
header("Content-Type: text/html; charset=UTF-8");
include 'db.class.php'; 


$dbcontrol = new Db();

if(!empty($_REQUEST['sns_share'])){//update
    $click_sns = $_POST['click_sns'];//sns
    $phone = $_REQUEST['phone'];
    $evt_gubun = $_POST['evt_gubun'];//사용자 체크
    $return = $dbcontrol->sns_share_count($click_sns, $phone, $evt_gubun);
    echo $return;
}

// 중복 체크
if(!empty($_REQUEST['select'])){
	$evt_gubun = $_REQUEST['evt_gubun'];
	$phone = $_REQUEST['phone'];
	$return = $dbcontrol->select_event($evt_gubun, $phone);
	echo $return;
}

// 정보 입력
if(!empty($_REQUEST['insert'])){
	$name = $_REQUEST['name'];
	$phone = $_REQUEST['phone'];
    $evt_gubun = $_REQUEST['evt_gubun'];
    $gift = $_REQUEST['gift'];
    if (!empty($_REQUEST['referer'])){
        $referer = $_REQUEST['referer'];//경로
    }else{
        $referer = $_SERVER["HTTP_REFERER"];//경로
    }
     $fb_click = $_REQUEST['fb_click'];  $tw_click = $_REQUEST['tw_click'];  $kt_click = $_REQUEST['kt_click']; $ks_click = $_REQUEST['ks_click'];
     
    $return = $dbcontrol->insert_user($evt_gubun, $name, $phone, $referer, $gift, $fb_click, $tw_click ,$kt_click, $ks_click);
    //$ret = explode(',', $return);
	echo 'insert : ssucces='.$return;	
}


// event3 정보 입력
if(!empty($_REQUEST['insert_event3'])){
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $evt_gubun = $_REQUEST['evt_gubun'];
    $stage = $_REQUEST['stage'];
    $step = $_REQUEST['step'];
    
    if (!empty($_REQUEST['referer'])){
        $referer = $_REQUEST['referer'];//경로
    }else{
        $referer = $_SERVER["HTTP_REFERER"];//경로
    }
    
    $return = $dbcontrol->insert_user_event3($evt_gubun, $name, $phone, $referer, $stage, $step);
    //$ret = explode(',', $return);
    echo 'insert : ssucces='.$return;   
}


// 카운트
if(!empty($_REQUEST['viewcount'])){
    
    $evt_gubun = $_REQUEST['evt_gubun'];
	if (!empty($_REQUEST['referer'])){
		$referer = $_REQUEST['referer'];//경로
	}else{
		$referer = $_SERVER["HTTP_REFERER"];//경로
	}		
	$dbcontrol->viewCnt($evt_gubun, $referer);
	echo 'viewcount : ssucces';
}


?>
