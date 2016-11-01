<?
class inflow{
	function getInflowVG($filter, $acc_date){
		global $dbh;
		$query = "SELECT SUM(visit_cnt) AS viewcnt FROM tracking ";
		$query = $query."WHERE gubun = '$filter' ";
		$query = $query."AND DATE_FORMAT(acc_date,'%Y-%m-%d') = '$acc_date' ";
		$stmt=$dbh->prepare($query);                       
		$stmt->execute();
		$stmt->bindColumn(1, $viewcnt);
		while($row=$stmt->fetch()){}

		if (empty($viewcnt)){
			return "0";
		}else{
			return $viewcnt;
		}
	}
	
	function getInflowVGarr($filter, $acc_date){
		global $dbh;
		$viewcntplus = 0;
		for($i=0; $i<count($filter); $i++){
		$query = "SELECT SUM(visit_cnt) AS viewcnt FROM tracking ";
		$query = $query."WHERE gubun = '$filter[$i]' ";
		$query = $query."AND DATE_FORMAT(acc_date,'%Y-%m-%d') = '$acc_date' ";
		$stmt=$dbh->prepare($query);                       
		$stmt->execute();
		$stmt->bindColumn(1, $viewcnt);
		while($row=$stmt->fetch()){;}
		$viewcntplus +=$viewcnt;
		}
		if (empty($viewcntplus)){
			return "0";
		}else{
			return $viewcntplus;
		}
		 
	}

	function getInflowTVG($filter, $acc_date){
		global $dbh;
		$query = "SELECT SUM(visit_cnt) AS viewcnt FROM tracking ";
		$query = $query."WHERE gubun = '$filter' ";
		$query = $query."AND DATE_FORMAT(acc_date,'%Y%m') = '$acc_date' ";
		$stmt=$dbh->prepare($query);                       
		$stmt->execute();
		$stmt->bindColumn(1, $viewcnt);
		while($row=$stmt->fetch()){}

		if (empty($viewcnt)){
			return "0";
		}else{
			return $viewcnt;
		}
	}

	function getInflowTVGarr($filter, $acc_date){
		global $dbh;
		$viewcntplust = 0;
		for($i=0; $i<count($filter); $i++){		
		$query = "SELECT SUM(visit_cnt) AS viewcnt FROM tracking ";
		$query = $query."WHERE gubun = '$filter[$i]' ";
		$query = $query."AND DATE_FORMAT(acc_date,'%Y%m') = '$acc_date' ";
		$stmt=$dbh->prepare($query);                       
		$stmt->execute();
		$stmt->bindColumn(1, $viewcnt);
		while($row=$stmt->fetch()){;}
			$viewcntplust +=$viewcnt;
		}
		if (empty($viewcntplust)){
			return "0";
		}else{
			return $viewcntplust;
		}
	}
}
?>