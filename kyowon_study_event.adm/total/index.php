<?
include '../include/config.php';
include ADMROOT.'/include/header.php';
include ADMROOT.'/total/class.php';

//viewCnt("event1");
//viewCnt("event2");
//viewCnt("event3");
?>
<style type="text/css">
	.total {color:blue;font-weight:700;background:#eee}
</style>
<div class="panel panel-default" style="margin:0 auto">
	<div class="panel-heading">
		<h3 class="panel-title" style="font-weight:700"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>&nbsp;트랙픽합계</h3>
	</div>	
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-bordered table-hover">
			<tbody>
				<tr style="background:#eee">
					<th rowspan="3" style="width:10%;text-align:center;vertical-align:middle">날짜</th>
					<th colspan="4" style="width:auto;text-align:center;">MAIN PAGE</th>
					<th colspan="4" style="width:auto;text-align:center;">EVENT1(영상감상)</th>
					<th colspan="4" style="width:auto;text-align:center;">EVENT2(맞춤학습)</th>
					<th colspan="4" style="width:auto;text-align:center;">EVENT3(퀴즈)</th>
					<th colspan="6" style="width:auto;text-align:center;">합계</th>
				</tr>
				<tr style="background:#eee">
					<th colspan="2" style="width:auto;text-align:center;">PC</th>
					<th colspan="2" style="width:auto;text-align:center;">Moblie</th>
					<th colspan="2" style="width:auto;text-align:center;">PC</th>
					<th colspan="2" style="width:auto;text-align:center;">Moblie</th>
					<th colspan="2" style="width:auto;text-align:center;">PC</th>
					<th colspan="2" style="width:auto;text-align:center;">Moblie</th>
					<th colspan="2" style="width:auto;text-align:center;">PC</th>
					<th colspan="2" style="width:auto;text-align:center;">Moblie</th>
					<th colspan="2" style="width:auto;text-align:center;">PC</th>
					<th colspan="2" style="width:auto;text-align:center;">Moblie</th>
					<th colspan="2" rowspan="2" style="width:auto;text-align:center;vertical-align: middle;"><span style="color:blue;">일일총합</span>/<span style="color:red;">총합</span></th>
				</tr>
				<tr style="background:#eee">
					<th style="width:auto;text-align:center;">PV</th>
					<th style="width:auto;text-align:center;">UV</th>
					<th style="width:auto;text-align:center;">PV</th>
					<th style="width:auto;text-align:center;">UV</th>
					<th style="width:auto;text-align:center;">PV</th>
					<th style="width:auto;text-align:center;">UV</th>
					<th style="width:auto;text-align:center;">PV</th>
					<th style="width:auto;text-align:center;">UV</th>
					<th style="width:auto;text-align:center;">PV</th>
					<th style="width:auto;text-align:center;">UV</th>
					<th style="width:auto;text-align:center;">PV</th>
					<th style="width:auto;text-align:center;">UV</th>
					<th style="width:auto;text-align:center;">PV</th>
					<th style="width:auto;text-align:center;">UV</th>
					<th style="width:auto;text-align:center;">PV</th>
					<th style="width:auto;text-align:center;">UV</th>
					<th style="width:auto;text-align:center;">PV</th>
					<th style="width:auto;text-align:center;">UV</th>
					<th style="width:auto;text-align:center;">PV</th>
					<th style="width:auto;text-align:center;">UV</th>
				</tr>
				<?
				$get_total = new total();

				$query = "SELECT DISTINCT(DATE_FORMAT(acc_date,'%Y-%m-%d')) FROM ".COUNT_TABLE." ";
				$query = $query."ORDER BY acc_date DESC";
				$stmt=$dbh->prepare($query);                       
				$stmt->execute();
				$stmt->bindColumn(1,$acc_date);
				while($row=$stmt->fetch()){
					//main
					$main_pc_pv = $get_total -> getEventPV_CNT_PC("main", $acc_date);
					$main_pc_uv = $get_total -> getEventUV_CNT_PC("main", $acc_date);
					$main_mo_pv = $get_total -> getEventPV_CNT_MO("main", $acc_date);
					$main_mo_uv = $get_total -> getEventUV_CNT_MO("main", $acc_date);
					//이벤트1
					$event1_pc_pv = $get_total -> getEventPV_CNT_PC("event1", $acc_date);
					$event1_pc_uv = $get_total -> getEventUV_CNT_PC("event1", $acc_date);
					$event1_mo_pv = $get_total -> getEventPV_CNT_MO("event1", $acc_date);
					$event1_mo_uv = $get_total -> getEventUV_CNT_MO("event1", $acc_date);
					//이벤트2
					$event2_pc_pv = $get_total -> getEventPV_CNT_PC("event2", $acc_date);
					$event2_pc_uv = $get_total -> getEventUV_CNT_PC("event2", $acc_date);
					$event2_mo_pv = $get_total -> getEventPV_CNT_MO("event2", $acc_date);
					$event2_mo_uv = $get_total -> getEventUV_CNT_MO("event2", $acc_date);
					//이벤트3
					$event3_pc_pv = $get_total -> getEventPV_CNT_PC("event3", $acc_date);
					$event3_pc_uv = $get_total -> getEventUV_CNT_PC("event3", $acc_date);
					$event3_mo_pv = $get_total -> getEventPV_CNT_MO("event3", $acc_date);
					$event3_mo_uv = $get_total -> getEventUV_CNT_MO("event3", $acc_date);
					//합계
					$event_pc_pv_total = $get_total -> getEventPV_TOTAL_PC($acc_date);
					$event_pc_uv_total = $get_total -> getEventUV_TOTAL_PC($acc_date);
					$event_mo_pv_total = $get_total -> getEventPV_TOTAL_MO($acc_date);
					$event_mo_uv_total = $get_total -> getEventUV_TOTAL_MO($acc_date);
                    $day_alltotal = $event_pc_pv_total+$event_pc_uv_total+$event_mo_pv_total+$event_mo_uv_total;
				?>
				<tr align="center">
					<td><?=$acc_date?></td>
					<td class="success"><?=number_format($main_pc_pv)?></td>
					<td><?=number_format($main_pc_uv)?></td>
					<td class="success"><?=number_format($main_mo_pv)?></td>
					<td><?=number_format($main_mo_uv)?></td>
					
					<td class="success"><?=number_format($event1_pc_pv)?></td>
					<td><?=number_format($event1_pc_uv)?></td>
					<td class="success"><?=number_format($event1_mo_pv)?></td>
					<td><?=number_format($event1_mo_uv)?></td>
					<td class="success"><?=number_format($event2_pc_pv)?></td>
					<td><?=number_format($event2_pc_uv)?></td>
					<td class="success"><?=number_format($event2_mo_pv)?></td>
					<td><?=number_format($event2_mo_uv)?></td>
					<td class="success"><?=number_format($event3_pc_pv)?></td>
					<td><?=number_format($event3_pc_uv)?></td>
					<td class="success"><?=number_format($event3_mo_pv)?></td>
					<td><?=number_format($event3_mo_uv)?></td>
					<td class="total"><?=number_format($event_pc_pv_total)?></td>
					<td class="total"><?=number_format($event_pc_uv_total)?></td>
					<td class="total"><?=number_format($event_mo_pv_total)?></td>
					<td class="total"><?=number_format($event_mo_uv_total)?></td>
					<td class="total"><?=number_format($day_alltotal)?></td>
				</tr>
				<?
					$main_pc_pv_total += $main_pc_pv;
					$main_pc_uv_total += $main_pc_uv;
					$main_mo_pv_total += $main_mo_pv;
					$main_mo_uv_total += $main_mo_uv;
                    
					$event1_pc_pv_total += $event1_pc_pv;
					$event1_pc_uv_total += $event1_pc_uv;
					$event1_mo_pv_total += $event1_mo_pv;
					$event1_mo_uv_total += $event1_mo_uv;

					$event2_pc_pv_total += $event2_pc_pv;
					$event2_pc_uv_total += $event2_pc_uv;
					$event2_mo_pv_total += $event2_mo_pv;
					$event2_mo_uv_total += $event2_mo_uv;

					$event3_pc_pv_total += $event3_pc_pv;
					$event3_pc_uv_total += $event3_pc_uv;
					$event3_mo_pv_total += $event3_mo_pv;
					$event3_mo_uv_total += $event3_mo_uv;

					$event4_pc_pv_total += $event_pc_pv_total;
					$event4_pc_uv_total += $event_pc_uv_total;
					$event4_mo_pv_total += $event_mo_pv_total;
					$event4_mo_uv_total += $event_mo_uv_total;
					
				}
				?>
				<tr style="background:#eee">
					<th style="width:10%;text-align:center;">합계</th>
					<td class="total" style="width:auto;text-align:center;color:#ea6e00;"><?=number_format($main_pc_pv_total)?></td>
					<td class="total" style="width:auto;text-align:center;color:#ea6e00;"><?=number_format($main_pc_uv_total)?></td>
					<td class="total" style="width:auto;text-align:center;color:#ea6e00;"><?=number_format($main_mo_pv_total)?></td>
					<td class="total" style="width:auto;text-align:center;color:#ea6e00;"><?=number_format($main_mo_uv_total)?></td>
					
					<td class="total" style="width:auto;text-align:center;color:#ea6e00;"><?=number_format($event1_pc_pv_total)?></td>
					<td class="total" style="width:auto;text-align:center;color:#ea6e00;"><?=number_format($event1_pc_uv_total)?></td>
					<td class="total" style="width:auto;text-align:center;color:#ea6e00;"><?=number_format($event1_mo_pv_total)?></td>
					<td class="total" style="width:auto;text-align:center;color:#ea6e00;"><?=number_format($event1_mo_uv_total)?></td>
					<td class="total" style="width:auto;text-align:center;color:#ea6e00;"><?=number_format($event2_pc_pv_total)?></td>
					<td class="total" style="width:auto;text-align:center;color:#ea6e00;"><?=number_format($event2_pc_uv_total)?></td>
					<td class="total" style="width:auto;text-align:center;color:#ea6e00;"><?=number_format($event2_mo_pv_total)?></td>
					<td class="total" style="width:auto;text-align:center;color:#ea6e00;"><?=number_format($event2_mo_uv_total)?></td>
					<td class="total" style="width:auto;text-align:center;color:#ea6e00;"><?=number_format($event3_pc_pv_total)?></td>
					<td class="total" style="width:auto;text-align:center;color:#ea6e00;"><?=number_format($event3_pc_uv_total)?></td>
					<td class="total" style="width:auto;text-align:center;color:#ea6e00;"><?=number_format($event3_mo_pv_total)?></td>
					<td class="total" style="width:auto;text-align:center;color:#ea6e00;"><?=number_format($event3_mo_uv_total)?></td>
					<td class="total" style="width:auto;text-align:center;color:red"><?=number_format($event4_pc_pv_total)?></td>
					<td class="total" style="width:auto;text-align:center;color:red"><?=number_format($event4_pc_uv_total)?></td>
					<td class="total" style="width:auto;text-align:center;color:red"><?=number_format($event4_mo_pv_total)?></td>
					<td class="total" style="width:auto;text-align:center;color:red"><?=number_format($event4_mo_uv_total)?></td>
					<?
					$alltotal = $event4_pc_pv_total+$event4_pc_uv_total+$event4_mo_pv_total+$event4_mo_uv_total;
					?>
					<td class="total" style="width:auto;text-align:center;color:red"><?=number_format($alltotal)?></td>
				</tr>
			</tbody>
			</table>
		</div>
	</div>
</div>
<?include ADMROOT.'/include/footer.php';?>