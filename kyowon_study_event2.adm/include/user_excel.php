<?php 
header("Content-Type: text/html; charset=UTF-8");
iconv_set_encoding("internal_encoding", "UTF-8");
include '../include/config.php';
include ADMROOT.'/include/dbConnect.php';
$event = $_REQUEST['event'];
  $filename = "교원2_".$event."_".date("Y-m-d",time()).".xls";
  @header("Content-type: application/vnd.ms-excel");
  @header("Content-Disposition: attachment; filename=$filename");
  @header("Content-Description: PHP4 Generated Data");
  @header( "Content-charset=UTF-8" );
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>EXCEL</title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
	br {mso-data-placement:same-cell;}
	.phone  {mso-number-format:"\@";}
</style>
</head>
<body>

<?

$table = EVENT_TABLE;
$sql = "SELECT idx,evt_gubun,name,gender,phone,agree,fb,tw,ks,kt,nv,gift,stage,acc_device,acc_ip,acc_referer,regdate FROM ".$table;
$sql .= " WHERE evt_gubun = '".$event."' ";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$stmt->bindColumn(1, $idx);
$stmt->bindColumn(2, $evt_gubun);
$stmt->bindColumn(3, $name); 
$stmt->bindColumn(4, $gender); 
$stmt->bindColumn(5, $phone); 
$stmt->bindColumn(6, $agree); 
$stmt->bindColumn(7, $fb); 
$stmt->bindColumn(8, $tw); 
$stmt->bindColumn(9, $ks); 
$stmt->bindColumn(10, $kt); 
$stmt->bindColumn(11, $nv); 
$stmt->bindColumn(12, $gift); 
$stmt->bindColumn(13, $stage); 
$stmt->bindColumn(14, $acc_device); 
$stmt->bindColumn(15, $acc_ip); 
$stmt->bindColumn(16, $acc_referer); 
$stmt->bindColumn(17, $regdate); 
?>


* 참여 현황
<table class="main" width="900" border="1" cellspacing="1"  cellpadding="2">
<tr height="24" >
	<td style="background:#999999" align="center">번호</td>
	<td style="background:#999999" align="center">이벤트</td>
	<td style="background:#999999" align="center">이름</td>
	<!-- <td style="background:#999999" align="center">성별</td> -->
	<td style="background:#999999" align="center">전화번호</td>
	<td style="background:#999999" align="center">참여동의</td>
	<td style="background:#999999" align="center">fb</td>
	<td style="background:#999999" align="center">tw</td>
	<td style="background:#999999" align="center">ks</td>
	<td style="background:#999999" align="center">kt</td>
	<td style="background:#999999" align="center">nv</td>
	<?if($event == "event3"){?><td style="background:#999999" align="center">완료단계</td><?}?>
	<?if($event == "event2"){?><td style="background:#999999" align="center">경품</td><?}?>
	<td style="background:#999999" align="center">접속기기</td>
	<td style="background:#999999" align="center">접속IP</td>
	<td style="background:#999999" align="center">유입경로</td>
	<td style="background:#999999" align="center">참여날짜</td>
</tr>
<?
$num =1;
while($row = $stmt->fetch()){
?>
<tr>
	<td align="center"><?= $num?></td>
	<td align="center"><?= $evt_gubun?></td>
	<td align="center"><?= $name?></td>
	<!-- <td align="center"><?= $gender?></td> -->
	<td align="center" class="phone"><?= $phone?></td>
	<td align="center"><?= $agree?></td>
	<td align="center"><?= $fb?></td>
	<td align="center"><?= $tw?></td>
	<td align="center"><?= $ks?></td>
	<td align="center"><?= $kt?></td>
	<td align="center"><?= $nv?></td>
	<?if($event == "event3"){?><td align="center"><?= $stage?></td><?}?>
	<?if($event == "event2"){?><td align="center"><?= $gift?></td><?}?>
	<td align="center"><?= $acc_device?></td>
	<td align="center"><?= $acc_ip?></td>
	<td align="center"><?= $acc_referer?></td>
	<td align="center"><?= $regdate?></td>
</tr>
<?
$num++;
}?>
</table>

<!-- <td class="text" align="center"><?= $fb_id?></td> -->

</body>
</html>


