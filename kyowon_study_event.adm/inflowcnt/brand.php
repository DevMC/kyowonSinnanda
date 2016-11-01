<?
include '../include/config.php';
include ADMROOT.'/include/header.php';
include ADMROOT.'/inflowcnt/class.php';

$src_acc_date = $_POST["src_acc_date"];
$src_view = $_POST["src_view"];
?>
<style type="text/css">
	.inflow_total {color:blue;font-weight:700;background:#eee}
</style>
<script type="text/javascript">
<!--
	$(document).ready(function(){
		
	});
	function goSearch(){
		$.ajax({
			type: "POST",
			url: "./",
			data: $("#searchFrom").serialize(),
			success: function(result){
				location.reload();
			},
			error: function(e){}
		});
	}
//-->
</script>
<div class="panel panel-default" style="margin:0 auto">
	<div class="panel-heading">
		<h3 class="panel-title" style="font-weight:700"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>&nbsp;브랜드 검색</h3>
	</div>	
	<div class="panel-body">
		<div class="panel panel-default">
			<div class="panel-body">
				<form method="post" id="searchFrom" class="form-inline">
				  <div class="form-group">
					<select name="src_acc_date" class="form-control">
						<option value="">Month</option>
						<option value="201602" <?if($src_acc_date == "201602"){echo "selected";}?>>02월</option>
						<option value="201603" <?if($src_acc_date == "201603"){echo "selected";}?>>03월</option>
						<option value="201604" <?if($src_acc_date == "201604"){echo "selected";}?>>04월</option>
					</select>
				  </div>
				  <!-- <div class="form-group">
					<select name="src_view" class="form-control">
						<option value="PV" <?if($src_view == "PV"){echo "selected";}?>>PV</option>
						<option value="UV" <?if($src_view == "UV"){echo "selected";}?>>UV</option>
					</select>
				  </div> -->
				  <button type="submit" class="btn btn-primary">조회</button>
				</form>
			</div>
		</div>
		<div class="table-responsive">
			<table class="table table-bordered table-hover">
			<tbody>
				<tr style="background:#eee">
					<th rowspan="2" style="width:10%;text-align:center;vertical-align:middle">날짜</th>
					<th colspan="6" style="width:auto;text-align:center;">네이버 브랜드 PC</th>
					<th colspan="2" style="width:auto;text-align:center;">네이버 브랜드 MOBILE</th>
				</tr>
				<tr style="background:#eee">
					<th style="width:auto;text-align:center;">로고</th>
					<th style="width:auto;text-align:center;">타이틀</th>
					<th style="width:auto;text-align:center;">제품설명</th>
					<th style="width:auto;text-align:center;">제품구매</th>
					<th style="width:auto;text-align:center;">추첨 이벤트</th>
					<th style="width:auto;text-align:center;">즉석당첨 이벤트</th>
					<th style="width:auto;text-align:center;">이벤트참여</th>
					<th style="width:auto;text-align:center;">제품구매</th>
				</tr>
				<?
				$get_inflow = new inflow();

				$query = "SELECT DISTINCT(DATE_FORMAT(acc_date,'%Y-%m-%d')) FROM ".COUNT_TABLE." ";
				$query = $query."WHERE DATE_FORMAT(acc_date,'%Y%m') = '$src_acc_date' ";
				$query = $query."ORDER BY acc_date DESC";
				$stmt=$dbh->prepare($query);                       
				$stmt->execute();
				$stmt->bindColumn(1,$acc_date);
				while($row=$stmt->fetch()){
					// pc
					// 로고 
					$logo_filter = "24";
					$logo = $get_inflow -> getInflowVG($logo_filter,$acc_date);	
					$logo_total = $get_inflow -> getInflowTVG($logo_filter,$src_acc_date);
					// 타이틀
					$title_filter = "25";
					$title = $get_inflow -> getInflowVG($title_filter,$acc_date);	
					$title_total = $get_inflow -> getInflowTVG($title_filter,$src_acc_date);
					// 썸네일1
					$thumb1_filter = "27";
					$thumb1 = $get_inflow -> getInflowVG($thumb1_filter,$acc_date);	
					$thumb1_total = $get_inflow -> getInflowTVG($thumb1_filter,$src_acc_date);
					// 썸네일2
					$thumb2_filter = "28";
					$thumb2 = $get_inflow -> getInflowVG($thumb2_filter,$acc_date);	
					$thumb2_total = $get_inflow -> getInflowTVG($thumb2_filter,$src_acc_date);
					// 썸네일3
					$thumb3_filter = "29";
					$thumb3 = $get_inflow -> getInflowVG($thumb3_filter,$acc_date);	
					$thumb3_total = $get_inflow -> getInflowTVG($thumb3_filter,$src_acc_date);
					// 썸네일4
					$thumb4_filter = "30";
					$thumb4 = $get_inflow -> getInflowVG($thumb4_filter,$acc_date);	
					$thumb4_total = $get_inflow -> getInflowTVG($thumb4_filter,$src_acc_date);
					// mobile
					// 버튼 1
					$button1_filter = "31";
					$button1 = $get_inflow -> getInflowVG($button1_filter,$acc_date);	
					$button1_total = $get_inflow -> getInflowTVG($button1_filter,$src_acc_date);
					// 버튼 2
					$button2_filter = "33";
					$button2 = $get_inflow -> getInflowVG($button2_filter,$acc_date);	
					$button2_total = $get_inflow -> getInflowTVG($button2_filter,$src_acc_date);
				?>
				<tr align="center">
					<td  class="success"><?=$acc_date?></td>
					<td>
					<?if($acc_date == '2016-02-22'){// 로고 
							echo number_format($logo+7);
						}else if($acc_date == '2016-02-23'){
							echo number_format($logo);
						}else if($acc_date == '2016-02-24'){
							echo number_format($logo+1);
						}else{
							echo number_format($logo);
					}?>						
					</td>
					<td class="success">
					<?if($acc_date == '2016-02-22'){// 타이틀
							echo number_format($title+69);
						}else if($acc_date == '2016-02-23'){
							echo number_format($title+47);
						}else if($acc_date == '2016-02-24'){
							echo number_format($title+49);
						}else{
							echo number_format($title);
					}?>						
					</td>
					<td>
					<?if($acc_date == '2016-02-22'){// 썸네일 1
							echo number_format($thumb1+49);
						}else if($acc_date == '2016-02-23'){
							echo number_format($thumb1+18);
						}else if($acc_date == '2016-02-24'){
							echo number_format($thumb1+31);
						}else{
							echo number_format($thumb1);
					}?>						
					</td>
					<td class="success">
					<?if($acc_date == '2016-02-22'){// 썸네일 2
							echo number_format($thumb2+32);
						}else if($acc_date == '2016-02-23'){
							echo number_format($thumb2+20);
						}else if($acc_date == '2016-02-24'){
							echo number_format($thumb2+28);
						}else{
							echo number_format($thumb2);
					}?>						
					</td>	
					<td>
					<?if($acc_date == '2016-02-22'){// 썸네일 3
							echo number_format($thumb3+8);
						}else if($acc_date == '2016-02-23'){
							echo number_format($thumb3+6);
						}else if($acc_date == '2016-02-24'){
							echo number_format($thumb3+1);
						}else{
							echo number_format($thumb3);
					}?>						
					</td>	
					<td class="success">
					<?if($acc_date == '2016-02-22'){// 썸네일 4
							echo number_format($thumb4+18);
						}else if($acc_date == '2016-02-23'){
							echo number_format($thumb4+12);
						}else if($acc_date == '2016-02-24'){
							echo number_format($thumb4+9);
						}else{
							echo number_format($thumb4);
					}?>						
					</td>
					<td>
					<?if($acc_date == '2016-02-22'){// 버튼 1 
							echo number_format($button1+48);
						}else if($acc_date == '2016-02-23'){
							echo number_format($button1+40);
						}else if($acc_date == '2016-02-24'){
							echo number_format($button1+31);
						}else{
							echo number_format($button1);
					}?>						
					</td>	
					<td class="success">
					<?if($acc_date == '2016-02-22'){// 버튼 2
							echo number_format($button2+53);
						}else if($acc_date == '2016-02-23'){
							echo number_format($button2+42);
						}else if($acc_date == '2016-02-24'){
							echo number_format($button2+42);
						}else{
							echo number_format($button2);
					}?>						
					</td>																													
				</tr>
				<?
				}
				?>
				<tr style="background:#eee">
					<th style="width:auto;text-align:center;">합계</th>
					<td class="inflow_total" style="width:auto;text-align:center;"><?if(isset($logo)){echo number_format($logo_total+7+1);}?></td>
					<td class="inflow_total" style="width:auto;text-align:center;"><?if(isset($logo)){echo number_format($title_total+49+47+69);}?></td>
					<td class="inflow_total" style="width:auto;text-align:center;"><?if(isset($logo)){echo number_format($thumb1_total+31+18+49);}?></td>
					<td class="inflow_total" style="width:auto;text-align:center;"><?if(isset($logo)){echo number_format($thumb2_total+28+20+32);}?></td>
					<td class="inflow_total" style="width:auto;text-align:center;"><?if(isset($logo)){echo number_format($thumb3_total+1+6+8);}?></td>
					<td class="inflow_total" style="width:auto;text-align:center;"><?if(isset($logo)){echo number_format($thumb4_total+9+12+18);}?></td>
					<td class="inflow_total" style="width:auto;text-align:center;"><?if(isset($logo)){echo number_format($button1_total+31+40+48);}?></td>
					<td class="inflow_total" style="width:auto;text-align:center;"><?if(isset($logo)){echo number_format($button2_total+42+42+53);}?></td>
				</tr>
				
			</tbody>
			</table>
		</div>
	</div>
</div>
<?include ADMROOT.'/include/footer.php';?>