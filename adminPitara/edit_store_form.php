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
$smarty->assign("storeID",$_POST['store_id']);
$smarty->assign("TOPMENU",$smarty->fetch("top-menu.tpl"));


	$sql = "SELECT * FROM store_details WHERE id='".$_POST['store_id']."' ";

	if(!$result = $mysqli->query($sql)) {

		die('There was an error running the query [' . $mysqli->error . ']');
	}
	while($row = $result->fetch_assoc()) { 

	   foreach ($row as $key => $value) {
	   	
	   	    $storeData[$key] = $value;
	   }
	
	} 

    
$smarty->assign("storeData", $storeData);
$smarty->assign("catAction", $Cat_Action);
    
$smarty->display("edit_store_form.tpl");

?>

