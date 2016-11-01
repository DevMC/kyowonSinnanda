<?php
include '../include/config.php';
//페이징
function pageing($tablename,$pagename,$param,$totalCount,$page,$listview_num,$paging_num){
	$totalPage = ceil($totalCount/$listview_num);
	$totalSection = ceil($totalPage/$paging_num);			//화면 당 보여지는 리스트 영역(?) 개수 
	$currentSection = floor(($page-1)/$paging_num);		//현재화면에 보여지는 리스트 영역(?)이 몇번째인지  
	
	echo "<nav style='text-align:center;'>";
	echo "	<ul class='pagination'>";
	if($currentSection > 0){
		echo "<li>";
		echo "  <a href='".$pagename."?page=".$currentSection * $paging_num."' aria-label='Previous'>";
		echo "	<span aria-hidden='true'>&laquo;</span>";
		echo "  </a>";
		echo "</li>";
	}
	for ($i = $currentSection * $paging_num + 1; $i < ($currentSection + 1) * $paging_num + 1; $i++) {
		if ($i > $totalPage)
			break;
				echo "<li>";
				echo "	<a href='".$pagename."?page=".$i."&".$param."'>";
				if ($i == $page) {
					echo "<strong>".$i."</strong>";
				}else{
					echo $i;
				}	    		
			echo "</a>";
		echo "</li>";
	}
	if($totalSection > $currentSection + 1){
		$num_currentSection = ($currentSection + 1) * $paging_num + 1;
		echo "<li>";
		echo "  <a href='".$pagename."?page=".$num_currentSection."' aria-label='Next'>";
		echo "	<span aria-hidden='true'>&raquo;</span>";
		echo "  </a>";
		echo "</li>";
	}
	echo "  </ul>";
	echo "</nav>";
}

//sql injection
function xss_filter($content)
{
	/* 
	IE6과 7의 expression() 기능을 이용한 취약점을 방지하기 위해
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />를 반드시 붙여야 한다.
	*/

	// 악성 태그들 모두 제거
	$content = preg_replace('/(<)(|\/)(\!|\?|html|head|title|meta|body|script|style|base|noscript|form|input|select|option|optgroup|textarea|button|label|fieldset|legend|iframe|embed|object|param|frameset|frame|noframes|basefont|applet|isindex|xmp|plaintext|listing|bgsound|marquee|blink|	noembed|comment|xml)/i', '&lt;$3', $content);

	// 스크립트 핸들러를 모두 제거
	$content = preg_replace_callback("/([^a-z])(o)(n)/i", 	create_function('$matches', 'if($matches[2]=="o") $matches[2] = "&#111;";	else $matches[2] = "&#79;"; return $matches[1].$matches[2].$matches[3];'), $content);
	$content = str_replace("'","&apos;",$content);
	return $content;
}

//DEVICE CHECK
function acc_device(){
	global $HTTP_USER_AGENT; 
    $MobileArray  = array("iphone","ipad","ipod","lgtelecom","skt","mobile","samsung","nokia","blackberry","android","android","sony","phone");

    $checkCount = 0; 
        for($i=0; $i<sizeof($MobileArray); $i++){ 
            if(preg_match("/$MobileArray[$i]/", strtolower($_SERVER['HTTP_USER_AGENT']))){ $checkCount++; break; } 
        } 
   return ($checkCount >= 1) ? "Mobile" : "PC"; 
}

//PV AND UV INSERT
function viewCnt($event, $acc_referer = NULL){
	global $dbh;
	$now_day = date("Y-m-d");
	$evt_gubun = $event;//이벤트구분
	$acc_device = acc_device();//접속기기
	$acc_ip = $_SERVER["REMOTE_ADDR"];
	//$acc_referer = $_SERVER["HTTP_REFERER"];
	//PV
	$query = "INSERT INTO ".COUNT_TABLE." (view_cnt, view_gubun, evt_gubun, acc_device, acc_ip, acc_referer, acc_date) VALUES (1, 'pv', '$evt_gubun', '$acc_device', '$acc_ip', '$acc_referer', sysdate())";
	$stmt = $dbh -> prepare($query);
	$stmt -> execute();

	//UV체크
	$query = "SELECT COUNT(*) FROM ".COUNT_TABLE." WHERE view_gubun = 'uv' AND evt_gubun = '$evt_gubun' AND acc_device = '$acc_device' AND acc_ip = '$acc_ip' AND DATE_FORMAT(acc_date,'%Y-%m-%d') = '$now_day'";
	$stmt=$dbh->prepare($query);                       
	$stmt->execute();
	$stmt->bindColumn(1, $uv_cnt);
	while($row=$stmt->fetch()){}

	//UV
	if ($uv_cnt <= 0){
		$query = "INSERT INTO ".COUNT_TABLE." (view_cnt, view_gubun, evt_gubun, acc_device, acc_ip, acc_referer, acc_date) VALUES (1, 'uv', '$evt_gubun', '$acc_device', '$acc_ip', '$acc_referer', sysdate())";
		$stmt = $dbh -> prepare($query);
		$stmt -> execute();
	}
}
?>