<?
include '../include/config.php';
Class total{
	//EVENT PV COUNT
	function getEventPV_CNT_PC($evt_gubun, $acc_date){
		global $dbh;
		$query = "SELECT SUM(view_cnt) AS evt FROM ".COUNT_TABLE." WHERE view_gubun = 'pv' AND evt_gubun = '$evt_gubun' AND acc_device = 'PC' AND DATE_FORMAT(acc_date,'%Y-%m-%d') = '$acc_date'";
		$stmt=$dbh->prepare($query);                       
		$stmt->execute();
		$stmt->bindColumn(1, $evt);
		while($row=$stmt->fetch()){}

		if (empty($evt)){
			return "0";
		}else{
			return $evt;
		}
	}
	function getEventPV_CNT_MO($evt_gubun, $acc_date){
		global $dbh;
		$query = "SELECT SUM(view_cnt) AS evt FROM ".COUNT_TABLE." WHERE view_gubun = 'pv' AND evt_gubun = '$evt_gubun' AND acc_device = 'Mobile' AND DATE_FORMAT(acc_date,'%Y-%m-%d') = '$acc_date'";
		$stmt=$dbh->prepare($query);                       
		$stmt->execute();
		$stmt->bindColumn(1, $evt);
		while($row=$stmt->fetch()){}

		if (empty($evt)){
			return "0";
		}else{
			return $evt;
		}
	}

	//EVENT UV COUNT
	function getEventUV_CNT_PC($evt_gubun, $acc_date){
		global $dbh;
		$query = "SELECT SUM(view_cnt) AS evt FROM ".COUNT_TABLE." WHERE view_gubun = 'uv' AND evt_gubun = '$evt_gubun' AND acc_device = 'PC' AND DATE_FORMAT(acc_date,'%Y-%m-%d') = '$acc_date'";
		$stmt=$dbh->prepare($query);                       
		$stmt->execute();
		$stmt->bindColumn(1, $evt);
		while($row=$stmt->fetch()){}

		if (empty($evt)){
			return "0";
		}else{
			return $evt;
		}
	}
	function getEventUV_CNT_MO($evt_gubun, $acc_date){
		global $dbh;
		$query = "SELECT SUM(view_cnt) AS evt FROM ".COUNT_TABLE." WHERE view_gubun = 'uv' AND evt_gubun = '$evt_gubun' AND acc_device = 'Mobile' AND DATE_FORMAT(acc_date,'%Y-%m-%d') = '$acc_date'";
		$stmt=$dbh->prepare($query);                       
		$stmt->execute();
		$stmt->bindColumn(1, $evt);
		while($row=$stmt->fetch()){}

		if (empty($evt)){
			return "0";
		}else{
			return $evt;
		}
	}

	//EVENT TOTAL PV COUNT
	function getEventPV_TOTAL_PC($acc_date){
		global $dbh;
		$query = "SELECT SUM(view_cnt) AS evt FROM ".COUNT_TABLE." WHERE view_gubun = 'pv' AND acc_device = 'PC' AND DATE_FORMAT(acc_date,'%Y-%m-%d') = '$acc_date'";
		$stmt=$dbh->prepare($query);                       
		$stmt->execute();
		$stmt->bindColumn(1, $evt);
		while($row=$stmt->fetch()){}

		if (empty($evt)){
			return "0";
		}else{
			return $evt;
		}
	}
	function getEventPV_TOTAL_MO($acc_date){
		global $dbh;
		$query = "SELECT SUM(view_cnt) AS evt FROM ".COUNT_TABLE." WHERE view_gubun = 'pv' AND acc_device = 'Mobile' AND DATE_FORMAT(acc_date,'%Y-%m-%d') = '$acc_date'";
		$stmt=$dbh->prepare($query);                       
		$stmt->execute();
		$stmt->bindColumn(1, $evt);
		while($row=$stmt->fetch()){}

		if (empty($evt)){
			return "0";
		}else{
			return $evt;
		}
	}

	//EVENT TOTAL UV COUNT
	function getEventUV_TOTAL_PC($acc_date){
		global $dbh;
		$query = "SELECT SUM(view_cnt) AS evt FROM ".COUNT_TABLE." WHERE view_gubun = 'uv' AND acc_device = 'PC' AND DATE_FORMAT(acc_date,'%Y-%m-%d') = '$acc_date'";
		$stmt=$dbh->prepare($query);                       
		$stmt->execute();
		$stmt->bindColumn(1, $evt);
		while($row=$stmt->fetch()){}

		if (empty($evt)){
			return "0";
		}else{
			return $evt;
		}
	}
	function getEventUV_TOTAL_MO($acc_date){
		global $dbh;
		$query = "SELECT SUM(view_cnt) AS evt FROM ".COUNT_TABLE." WHERE view_gubun = 'uv' AND acc_device = 'Mobile' AND DATE_FORMAT(acc_date,'%Y-%m-%d') = '$acc_date'";
		$stmt=$dbh->prepare($query);                       
		$stmt->execute();
		$stmt->bindColumn(1, $evt);
		while($row=$stmt->fetch()){}

		if (empty($evt)){
			return "0";
		}else{
			return $evt;
		}
	}
}
?>