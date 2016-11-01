<?php
header("Content-Type: text/html; charset=UTF-8");
include 'dbConnect.php';
//ini_set('display_errors', 0);


class Db{
	protected $table = "kyowon_event_user_entry";
	protected $table2 = "kyowon_event_viewcount";
	public $ip;
	public $browser;
	public $device;

	function __construct()
    	{
    		$this->ip = $this->getRealIpAddr();
    		$this->browser = $_SERVER['HTTP_USER_AGENT'];
    		$this->device = $this->acc_device();
    	}
        
    function get_auto_increment(){
        global $dbh;
        $_sql = "SELECT AUTO_INCREMENT FROM information_schema.tables WHERE table_name = '$this->table'";
        $_stmt = $dbh ->prepare($_sql);
        $_stmt ->execute();
        $_stmt -> bindColumn(1,$val);
        while($row = $_stmt ->fetch()){;}       
        return $val;
    }

	public function sns_share_count($click_sns, $phone, $evt_gubun){
		global $dbh;
        $cnt_sns = 0;
        $query = "SELECT idx, fb, tw, ks, kt FROM  `$this->table` WHERE  `phone` LIKE  '$phone' AND evt_gubun ='$evt_gubun' ORDER BY  `idx` DESC LIMIT 0 , 1";
        $stmt=$dbh->prepare($query);                       
        $stmt->execute();
        $stmt->bindColumn(1, $idx);
        $stmt->bindColumn(2, $db_fb);
        $stmt->bindColumn(3, $db_tw);
        $stmt->bindColumn(4, $db_ks);
        $stmt->bindColumn(5, $db_kt);
        while($row=$stmt->fetch()){;}
    
        if($click_sns == 'fb'){ $cnt_sns = $db_fb + 1; }
        if($click_sns == 'tw'){ $cnt_sns = $db_tw + 1; }
        if($click_sns == 'ks'){ $cnt_sns = $db_ks + 1; }
        if($click_sns == 'kt'){ $cnt_sns = $db_kt + 1; }
    
        $slq = "UPDATE `$this->table` SET  `$click_sns` =  '$cnt_sns' WHERE  `$this->table`.`idx` = $idx LIMIT 1; ";
        $stmt = $dbh -> prepare($slq);
        $return = $stmt -> execute();   
        return $phone;
	}

	public function insert_user($evt_gubun, $name, $phone, $referer, $gift=NULL, $fb_click=0, $tw_click=0 ,$kt_click=0,$ks_click=0 ){
		global $dbh;
        $sql = "INSERT INTO `$this->table` ";
        $sql .= "(`idx`, `evt_gubun`, `name`, `gender`, `phone`, `stage`, `gift`, `agree`, `fb`, `tw`, `ks`, `kt`, `nv`, `acc_referer`, `acc_device`, `acc_ip`, `acc_browser`, `regdate`) ";
        $sql .= "VALUES (NULL, '$evt_gubun', '$name', '', '$phone', '', '$gift', 'y', '$fb_click', '$tw_click', '$ks_click', '$kt_click', '0', '$referer', '$this->device', '$this->ip', '$this->browser', CURRENT_TIMESTAMP);  ";
        $stmt = $dbh ->prepare($sql);
        $return = $stmt ->execute();
        return $fb_click.$tw_click;
	}

	public function select_event($evt_gubun, $phone){
		global $dbh;
        if($evt_gubun == "event1"){
            $sql = "SELECT phone FROM `$this->table` WHERE  `phone` LIKE  '$phone' AND evt_gubun = '$evt_gubun' LIMIT 0 , 1";
            $stmt = $dbh ->prepare($sql);
            $return = $stmt->execute();
            $stmt->bindColumn(1, $phone_db);
            while($row=$stmt->fetch()){;}
            return $phone_db;              
        }else{
            return '';
        }
          
	}


    public function insert_user_event3($evt_gubun, $name, $phone, $referer, $stage=NULL, $step=NULL){
        global $dbh;
        
            $sql = "INSERT INTO `$this->table` ";
            $sql .= "(`idx`, `evt_gubun`, `name`, `gender`, `phone`, `stage`, `gift`, `agree`, `fb`, `tw`, `ks`, `kt`, `nv`, `acc_referer`, `acc_device`, `acc_ip`, `acc_browser`, `regdate`) ";
            $sql .= "VALUES (NULL, '$evt_gubun', '$name', '', '$phone', '$stage', '', 'y', '0', '0', '0', '0', '0', '$referer', '$this->device', '$this->ip', '$this->browser', CURRENT_TIMESTAMP);  ";
            $stmt = $dbh ->prepare($sql);
            $return = $stmt ->execute();
            return $return;        
        /*
        $sql = "SELECT phone, stage FROM `$this->table` WHERE  `phone` LIKE  '$phone' AND evt_gubun = '$evt_gubun' LIMIT 0 , 1";
        $stmt = $dbh ->prepare($sql);
        $return = $stmt->execute();
        $stmt->bindColumn(1, $phone_db);
        $stmt->bindColumn(2, $stage_db);
        while($row=$stmt->fetch()){;}
        
        if($phone_db == ""){
            $sql = "INSERT INTO `$this->table` ";
            $sql .= "(`idx`, `evt_gubun`, `name`, `gender`, `phone`, `stage`, `gift`, `agree`, `fb`, `tw`, `ks`, `kt`, `nv`, `acc_referer`, `acc_device`, `acc_ip`, `acc_browser`, `regdate`) ";
            $sql .= "VALUES (NULL, '$evt_gubun', '$name', '', '$phone', '$stage', '', 'y', '0', '0', '0', '0', '0', '$referer', '$this->device', '$this->ip', '$this->browser', CURRENT_TIMESTAMP);  ";
            $stmt = $dbh ->prepare($sql);
            $return = $stmt ->execute();
            return $return;
        }else{
            $db_stage = explode("단계", $stage_db);
            if($db_stage[0] < $step){
                $sql = "UPDATE `$this->table` SET  `stage` = '$stage' WHERE evt_gubun = '$evt_gubun' AND phone = '$phone' ";
                $stmt = $dbh ->prepare($sql);
                $return = $stmt ->execute();
                //return $db_stage[0];                
                return $return;                
            }
        }  
        */   
           
    }

	//PV AND UV INSERT
	function viewCnt($evt_gubun, $referer = NULL){
        global $dbh;
        $now_day = date("Y-m-d");
        if($evt_gubun=='')$evt_gubun="main";
        //UV체크
        $query = "SELECT COUNT(*) FROM $this->table2 WHERE view_gubun = 'uv' AND evt_gubun = '$evt_gubun' AND acc_device = '$this->device' AND acc_ip = '$this->ip' AND DATE_FORMAT(acc_date,'%Y-%m-%d') = '$now_day'";
        $stmt=$dbh->prepare($query);                       
        $stmt->execute();
        $stmt->bindColumn(1, $uv_cnt);
        while($row=$stmt->fetch()){;}
    
        //UV
        if ($uv_cnt <= 0){
            $query = "INSERT INTO $this->table2 (view_cnt, view_gubun, evt_gubun, acc_device, acc_ip, acc_referer, acc_date) VALUES (1, 'uv', '$evt_gubun', '$this->device', '$this->ip', '$referer', sysdate())";
            $stmt = $dbh -> prepare($query);
            $stmt -> execute();
        }  

        //PV
        $query = "INSERT INTO $this->table2 (view_cnt, view_gubun, evt_gubun, acc_device, acc_ip, acc_referer, acc_date) VALUES (1, 'pv', '$evt_gubun', '$this->device', '$this->ip', '$referer', sysdate())";
        $stmt = $dbh -> prepare($query);
        $stmt -> execute();             
	}	
     
    function getRealIpAddr()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
        {
        $ip=$_SERVER['HTTP_CLIENT_IP'];
        }
        else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
        {
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else
        {
        $ip=$_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
    
    function acc_device(){
        global $HTTP_USER_AGENT; 
        $MobileArray  = array("iphone","ipad","ipod","lgtelecom","skt","mobile","samsung","nokia","blackberry","android","android","sony","phone");
    
        $checkCount = 0; 
            for($i=0; $i<sizeof($MobileArray); $i++){ 
                if(preg_match("/$MobileArray[$i]/", strtolower($_SERVER['HTTP_USER_AGENT']))){ $checkCount++; break; } 
            } 
       return ($checkCount >= 1) ? "Mobile" : "PC"; 
    }    
    
}
