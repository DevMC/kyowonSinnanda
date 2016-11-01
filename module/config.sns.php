<?
header("Content-Type: text/html; charset=UTF-8");
extract($_GET);
function sns_go($url) {
	if ($url) {
		header("Location: {$url}");
	} else {
		return;
	}
}

$document_url = "http://".$_SERVER['SERVER_NAME'];

$event1_title = "[비너스] 2016 봄 비너스 더블윙에스 TVCF";
$event1_page= "http://".$_SERVER['SERVER_NAME']."/sns/event1/";
$event1_desc = "앞태, 옆태, 뒤태, 옷태 어떤 각도에서도 놓치지 않는 아름다운 태비너스에만 있다! 비너스 더블윙에스로 언제 어디서나 매끄러운 바디라인을 완성해보세요.";
$event1_img = "https://youtu.be/HD8ZJOXWauI";


$event2_title = "앞태, 옆태, 뒤태, 옷태까지 놓치지 않는 비밀!";
$event2_page = "http://".$_SERVER['SERVER_NAME']."/sns/event2/index.php";
$event2_desc = "카드 뒤집기 게임을 통해 비너스에만 있는 더블윙S의 비밀을 확인하고, 다양한경품을 받아보세요!";
$event2_img = "/image/sns_share_img2.jpg";




switch ($page) {
	case 'event1': 
		$share_url = $event1_page;
		break;
	case 'event2': 
		$share_url = $event2_page;
		break;
}

switch ($sns) {
	case 'fb':
		$share_fb  = "https://www.facebook.com/sharer/sharer.php?u=". urlencode($share_url);
		sns_go($share_fb); 
		break;
	case 'ks':
		$share_fb  = "https://story.kakao.com/s/share?url=". urlencode($share_url);
		sns_go($share_fb); 
		break;
	case 'kt':
			echo 'kt선택';//javascript 처리
		break;
	case 'tw':
			echo 'tw선택';//javascript 처리
		break;
	default:
			// sns_go 사용하게되면 페이스북 디버깅이 안된다.
			//sns_go($document_url);//공유된 포스팅 클릭시 메인페이지로 이동되겠금 리다이렉션
		break;	
}


?>