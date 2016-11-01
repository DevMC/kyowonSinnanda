<?
include ADMROOT.'/include/session_check.php';
include ADMROOT.'/include/dbConnect.php';
include ADMROOT.'/include/function.php';
$nowurl = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>교원 체험삭습 EVENT 관리자</title>
	<link rel="shortcut icon" href="/image/favicon.ico">
    <!-- Bootstrap -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link href="<?=ADMDOMROOT?>/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <!-- <a class="navbar-brand" href="<?=ADMDOMROOT?>/total/"><img alt="Logo" src="<?=ADMDOMROOT?>/logo.png" style="width:78%;margin-top:-12px;border-radius:5px"></a> -->
	      <div style="color: #fff; height: 100%; width: 100%; padding: 11px; padding-right: 30px; font-size: 20px; font-weight: bold;" >교원 관리자</div>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li <?if(strpos($nowurl,"total") == true){echo "class='active'";}?>><a href="<?=ADMDOMROOT?>/total/" style="font-size:12px"><span class="glyphicon glyphicon-plus"></span>&nbsp;EVENT 트래픽합계</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-bullhorn"></span>&nbsp;EVENT <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li <?if(strpos($nowurl,"event1") == true){echo "class='active'";}?>><a href="<?=ADMDOMROOT?>/event1/" style="font-size:12px"><span class="glyphicon glyphicon-bullhorn"></span>&nbsp;EVENT1(영상감상)</a></li>
					<li <?if(strpos($nowurl,"event2") == true){echo "class='active'";}?>><a href="<?=ADMDOMROOT?>/event2/" style="font-size:12px"><span class="glyphicon glyphicon-bullhorn"></span>&nbsp;EVENT2(맞춤학습)</a></li>
					<li <?if(strpos($nowurl,"event3") == true){echo "class='active'";}?>><a href="<?=ADMDOMROOT?>/event3/" style="font-size:12px"><span class="glyphicon glyphicon-bullhorn"></span>&nbsp;EVENT3(퀴즈)</a></li>
				</ul>
			</li>
			<!-- <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-random"></span>&nbsp;매체별유입량 <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li <?if(strpos($nowurl,"event1") == true){echo "class='active'";}?>><a href="<?=ADMDOMROOT?>/inflowcnt/" style="font-size:12px"><span class="glyphicon glyphicon-random"></span>&nbsp;포털 사이트 & 맥스 무비 & CGV & SMR</a></li>
					<li <?if(strpos($nowurl,"event4") == true){echo "class='active'";}?>><a href="<?=ADMDOMROOT?>/inflowcnt/brand.php" style="font-size:12px"><span class="glyphicon glyphicon-random"></span>&nbsp;브랜드 검색</a></li>
				</ul>
			</li> -->			
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="<?=ADMDOMROOT?>/logout.php" style="font-weight:700">Logout</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
  	<div class="container-fluid" style="margin-top:60px">