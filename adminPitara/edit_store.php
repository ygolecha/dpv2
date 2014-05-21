<?php
include_once('../config.php');

$smarty->assign("HEADER",$smarty->fetch("header.tpl"));
$smarty->assign("FOOTER",$smarty->fetch("footer.tpl"));

include_once 'include/processes.php';
$Login_Process = new Login_Process;
$Login_Process->check_status($_SERVER['SCRIPT_NAME']);

$smarty->assign("sessionUsername",$_SESSION['username']);
$smarty->assign("userLevel",$_SESSION['user_level']);
$smarty->assign("TOPMENU",$smarty->fetch("top-menu.tpl"));
     
     if(isset($_GET['page'])) {

	   $lowLim = ($_GET['page'] * 20) - 20;
       $upLim = 20;
	}
	else {
		$lowLim = 0;
		$upLim = 20;
	}

    //required data for pagination starts
	$itemLimit = 20;
	$tableName = "store_details";
	$totaDeals = getNum($tableName);
	$totalPages = ceil($totaDeals/$itemLimit);
	//required data for pagination ends
    
	 $sql = "SELECT id,name FROM store_details ORDER BY id DESC LIMIT $lowLim,$upLim ";
     if(!$result = $mysqli->query($sql)) {

		die('There was an error running the query [' . $mysqli->error . ']');
	 }
	 while($row = $result->fetch_assoc()) { 

	   $storeArr[$row['id']] = $row['name'];
													
	 } 
include_once 'pagination.php';
$smarty->assign("storeName", $storeArr);
$smarty->assign("totalPages", $totalPages);
$smarty->assign("paginationHtml", $pagination);
$smarty->assign("catAction", $catAction);
$smarty->assign("search", $search);

$smarty->display("edit_store.tpl");

?>