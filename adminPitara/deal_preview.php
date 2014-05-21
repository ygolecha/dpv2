<?php 

require "../config.php";

$smarty->assign("HEADER", $smarty->fetch("header.tpl"));
$smarty->assign("FOOTER", $smarty->fetch("footer.tpl"));

include_once 'include/processes.php';
$Login_Process = new Login_Process;
$Login_Process->check_status($_SERVER['SCRIPT_NAME']);

$smarty->assign("sessionUsername",$_SESSION['username']);
$smarty->assign("sessionUserid",$_SESSION['user_id']);
$smarty->assign("userLevel",$_SESSION['user_level']);
$smarty->assign("TOPMENU",$smarty->fetch("top-menu.tpl"));
    
    if(isset($_POST['hiddenLastID'])) {
	$lastId = $_POST['hiddenLastID'];
    }
    else {
    $lastId = "";
    $lastIdOld = $_POST['hiddenLastIDOld'];
    }
    if($lastId != "") {
	$sql = "SELECT * FROM product_deals WHERE deal_id='$lastId' ";
    }
    else {
    $sql = "SELECT * FROM product_deals_old WHERE deal_id='$lastIdOld' ";	
    }

	if(!$result = $mysqli->query($sql)) {

		die('There was an error running the query [' . $mysqli->error . ']');
	}
	while($row = $result->fetch_assoc()) { 

	   foreach ($row as $key => $value) {
	   	
	   	   $dealArr[$key] = $value;
	   }
	
	} 

$smarty->assign("dealValue", $dealArr);

$smarty->display("deals_preview.tpl");

?>

