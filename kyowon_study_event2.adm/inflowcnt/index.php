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
		<h3 class="panel-title" style="font-weight:700"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>&nbsp;매체별유입량</h3>
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
					<th colspan="2" style="width:auto;text-align:center;">네이버</th>
					<th colspan="3" style="width:auto;text-align:center;">다음</th>
					<th colspan="2" style="width:auto;text-align:center;">모바일</th>
					<th colspan="2"  style="width:auto;text-align:center;">맥스 무비</th>
					<th colspan="1" rowspan="2" style="width:auto;text-align:center;">CGV</th>
					<th colspan="1" rowspan="2" style="width:auto;text-align:center;">SMR</th>
				</tr>
				<tr style="background:#eee">
					<th style="width:auto;text-align:center;">타임보드</th>
					<th style="width:auto;text-align:center;">롤링보드</th>
					<th style="width:auto;text-align:center;">초기 배너</th>
					<th style="width:auto;text-align:center;">라이프<br>스폰서바</th>
					<th style="width:auto;text-align:center;">미즈넷<br>스폰서바</th>
					<th style="width:auto;text-align:center;">네이버<br>모바일</th>
					<th style="width:auto;text-align:center;">다음<br>모바일</th>
					<th style="width:auto;text-align:center;">배너</th>
					<th style="width:auto;text-align:center;">DM</th>
				</tr>
				<?
				$get_inflow = new inflow();

				$query = "SELECT DISTINCT(DATE_FORMAT(acc_date,'%Y-%m-%d')) FROM ".COUNT_TABLE;
				$query = $query."WHERE DATE_FORMAT(acc_date,'%Y%m') = '$src_acc_date' ";
				$query = $query."ORDER BY acc_date DESC";
				$stmt=$dbh->prepare($query);                       
				$stmt->execute();
				$stmt->bindColumn(1,$acc_date);
				while($row=$stmt->fetch()){
					//네이버
					$naver1_filter = "1";
					$naver1 = $get_inflow -> getInflowVG($naver1_filter,$acc_date);	//타임보드_HD동영상형
					$naver_total1 = $get_inflow -> getInflowTVG($naver1_filter,$src_acc_date);
					
					$naver2_filter = "2";
					$naver2 = $get_inflow -> getInflowVG($naver2_filter,$acc_date);	//롤링보드_HD동영상형
					$naver_total2 = $get_inflow -> getInflowTVG($naver2_filter,$src_acc_date);
					//다음
					$daum1_filter = "3";
					$daum1 = $get_inflow -> getInflowVG($daum1_filter,$acc_date);	//초기상단배너
					$daum_total1 = $get_inflow -> getInflowTVG($daum1_filter,$src_acc_date);
					$daum2_filter = "4";
					$daum2 = $get_inflow -> getInflowVG($daum2_filter,$acc_date);	//마즈넷폰서버
					$daum_total2 = $get_inflow -> getInflowTVG($daum2_filter,$src_acc_date);
					$daum3_filter = "5";
					$daum3 = $get_inflow -> getInflowVG($daum3_filter,$acc_date);	//라이프스폰서버
					$daum_total3 = $get_inflow -> getInflowTVG($daum3_filter,$src_acc_date);
					//모바일
					$mobile1_filter = "20";
					$mobile1 = $get_inflow -> getInflowVG($mobile1_filter,$acc_date);	// 네이버 모바일
					$mobile_total1 = $get_inflow -> getInflowTVG($mobile1_filter,$src_acc_date);
					$mobile2_filter = "21";
					$mobile2 = $get_inflow -> getInflowVG($mobile2_filter,$acc_date);	// 다음 모바일
					$mobile_total2 = $get_inflow -> getInflowTVG($mobile2_filter,$src_acc_date);
					
					//맥스 무비 & CGV & SMR
					$max_filter = "6";
					$max = $get_inflow -> getInflowVG($max_filter,$acc_date);	// 맥스 무비
					$max_total = $get_inflow -> getInflowTVG($max_filter,$src_acc_date);
					//맥스 무비 MD
					$max_MD_filter = array('34', '35', '36', '37', '38', '39');
					$max_MD = $get_inflow -> getInflowVGarr($max_MD_filter,$acc_date);	// 맥스 무비
					$max_MD_total = $get_inflow -> getInflowTVGarr($max_MD_filter,$src_acc_date);					
					
					
					$cgv_filter = "13";
					$cgv = $get_inflow -> getInflowVG($cgv_filter,$acc_date);	// CGV
					$cgv_total = $get_inflow -> getInflowTVG($cgv_filter,$src_acc_date);
										
					$smr_filter = "23";
					$smr = $get_inflow -> getInflowVG($smr_filter,$acc_date);	// SMR
					$smr_total = $get_inflow -> getInflowTVG($smr_filter,$src_acc_date);					
				
				?>
				<tr align="center">
					
					<td  class="success"><?=$acc_date?></td>
					<td>
					<?if($acc_date == '2016-02-22'){//네이버 - 타임보드
							echo number_format($naver1+13257);
						}else{
							echo number_format($naver1);
					}?>
					</td>
					<td>
					<?if($acc_date == '2016-02-22'){//네이버 - 롤링보드
							echo number_format($naver2+4003);
						}else if($acc_date == '2016-02-23'){
							echo number_format($naver2+3838);
						}else if($acc_date == '2016-02-24'){
							echo number_format($naver2+2061);
						}else{
							echo number_format($naver2);
					}?>
					</td>
					<td class="success">
					<?if($acc_date == '2016-02-22'){//다음 - 초기 배너
							echo number_format($daum1+1648);
						}else if($acc_date == '2016-02-23'){
							echo number_format($daum1+1602);
						}else if($acc_date == '2016-02-24'){
							echo number_format($daum1+1046);
						}else{
							echo number_format($daum1);
					}?>						
					</td>
					<td class="success">
					<?if($acc_date == '2016-02-22'){//다음 - 라이프 스폰서바
							echo number_format($daum2+2884);
						}else if($acc_date == '2016-02-23'){
							echo number_format($daum2+2309);
						}else if($acc_date == '2016-02-24'){
							echo number_format($daum2+2025);
						}else{
							echo number_format($daum2);
					}?>						
					</td>					
					<td class="success">
					<?if($acc_date == '2016-02-22'){//다음 - 미즈넷 스폰서바
							echo number_format($daum3+367);
						}else if($acc_date == '2016-02-23'){
							echo number_format($daum3+393);
						}else if($acc_date == '2016-02-24'){
							echo number_format($daum3+330);
						}else{
							echo number_format($daum3);
					}?>						
					</td>
					<td>
					<?if($acc_date == '2016-02-22'){//네이버 모바일 - 
							echo number_format($mobile1+3535);
						}else if($acc_date == '2016-02-23'){
							echo number_format($mobile1+3544);
						}else if($acc_date == '2016-02-24'){
							echo number_format($mobile1+2242);
						}else{
							echo number_format($mobile1);
					}?>							
					</td>
					<td>
					<?if($acc_date == '2016-02-22'){//다음 모바일 - 
							echo number_format($mobile2+2283);
						}else if($acc_date == '2016-02-23'){
							echo number_format($mobile2+2357);
						}else if($acc_date == '2016-02-24'){
							echo number_format($mobile2+1405);
						}else{
							echo number_format($mobile2);
					}?>							
					</td>
					<td class="success">
					<?if($acc_date == '2016-02-22'){//맥스 무비
							echo number_format($max+3158);
						}else if($acc_date == '2016-02-23'){
							echo number_format($max+531);
						}else if($acc_date == '2016-02-24'){
							echo number_format($max+620);
						}else{
							echo number_format($max);
					}?>							
					</td>	
					<td><?=number_format($max_MD)?></td>	
					<td>
					<?if($acc_date == '2016-02-22'){// CGV
							echo number_format($cgv+671);
						}else if($acc_date == '2016-02-23'){
							echo number_format($cgv+586);
						}else if($acc_date == '2016-02-24'){
							echo number_format($cgv+506);
						}else{
							echo number_format($cgv);
					}?>							
					</td>	
					<td class="success">
					<?if($acc_date == '2016-02-23'){//SMR
							echo number_format($smr);
						}else if($acc_date == '2016-02-24'){
							echo number_format($smr);
						}else{
							echo number_format($smr);
					}?>							
					</td>	
				</tr>
				<?
				}
				?>
				<tr style="background:#eee">
					<th style="width:auto;text-align:center;">합계</th>
					<td class="inflow_total" style="width:auto;text-align:center;"><?if(isset($naver1)){echo number_format($naver_total1+13257);}?></td>
					<td class="inflow_total" style="width:auto;text-align:center;"><?if(isset($naver1)){echo number_format($naver_total2+4003+3838+2061);}?></td>
					<td class="inflow_total" style="width:auto;text-align:center;"><?if(isset($naver1)){echo number_format($daum_total1+1648+1602+1046);}?></td>
					<td class="inflow_total" style="width:auto;text-align:center;"><?if(isset($naver1)){echo number_format($daum_total2+2884+2309+2025);}?></td>
					<td class="inflow_total" style="width:auto;text-align:center;"><?if(isset($naver1)){echo number_format($daum_total3+367+393+330);}?></td>
					<td class="inflow_total" style="width:auto;text-align:center;"><?if(isset($naver1)){echo number_format($mobile_total1+3535+3544+2242);}?></td>
					<td class="inflow_total" style="width:auto;text-align:center;"><?if(isset($naver1)){echo number_format($mobile_total2+2283+2357+1405);}?></td>
					
					<td class="inflow_total" style="width:auto;text-align:center;"><?if(isset($naver1)){echo number_format($max_total+3158+531+620);}?></td>
					<td class="inflow_total" style="width:auto;text-align:center;"><?if(isset($naver1)){echo number_format($max_MD_total+0+0);}?></td>
					<td class="inflow_total" style="width:auto;text-align:center;"><?if(isset($naver1)){echo number_format($cgv_total+671+586+506);}?></td>
					<td class="inflow_total" style="width:auto;text-align:center;"><?if(isset($naver1)){echo number_format($smr_total+0+0);}?></td>
				</tr>
				<!-- <?
				$totalview += number_format($naver_total1);
				$totalview += number_format($naver_total2);
				$totalview += number_format($daum_total1);
				$totalview += number_format($daum_total2);
				$totalview += number_format($daum_total3);
				$totalview += number_format($mobile_total1);
				$totalview += number_format($mobile_total2);
				$totalview += 13257;
				?>
				<tr style="background:#fff">
					<th style="width:auto;text-align:center;">총합계</th>
					<td class="inflow_total" style="width:auto;text-align:center;"><?=number_format($totalview)?></td>
				</tr> -->
				
			</tbody>
			</table>
		</div>
	</div>
</div>
<?include ADMROOT.'/include/footer.php';?>