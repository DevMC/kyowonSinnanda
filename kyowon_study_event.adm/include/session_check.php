<?
session_start();
if($_SESSION["adm_status"] != "admin"){
	header("Location: ../");
}else if($_SESSION["adm_status"] == ""){
	header("Location: ../");
}else if(empty($_SESSION["adm_status"])){
	header("Location: ../");
}
?>