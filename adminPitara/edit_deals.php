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
    
    if($_SESSION['user_id'] != 3) {
    $sql = "SELECT deal_id,title FROM product_deals ORDER BY creation_date DESC LIMIT 10 ";
    }
    else
    {
    $sql = "SELECT deal_id,title FROM product_deals WHERE author='".$_SESSION['user_id']."' ORDER BY creation_date DESC LIMIT 10 ";	
    }

	if(!$result = $mysqli->query($sql)) {

		die('There was an error running the query [' . $mysqli->error . ']');
	}
	while($row = $result->fetch_assoc()) { 

	   $dealArr[$row['deal_id']] = $row['title'];
													
	} 

$smarty->assign("dealName", $dealArr);


$smarty->display("edit_deals.tpl");

?>

