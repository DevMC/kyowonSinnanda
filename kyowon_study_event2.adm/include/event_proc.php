<?
include '../include/config.php';
include ADMROOT.'/include/dbConnect.php';
$pmode = $_POST["pmode"];
$idx = $_POST["idx"];

if($pmode == "del"){
	$query = "DELETE FROM ".EVENT_TABLE." WHERE idx = $idx";
	$stmt = $dbh -> prepare($query);
	$stmt -> execute();
}
?>