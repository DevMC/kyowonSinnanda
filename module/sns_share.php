<?
header("Content-Type: text/html; charset=UTF-8");
extract($_GET);

if($page == 'event1'){
	$url = "http://".$_SERVER['SERVER_NAME']."/sns/event1/index.php?sns=".$sns."&page=".$page;
	header("Location: {$url}");
}

if($page == 'event2'){
	$url = "http://".$_SERVER['SERVER_NAME']."/sns/event2/index.php?sns=".$sns."&page=".$page;
	header("Location: {$url}");
}


?>