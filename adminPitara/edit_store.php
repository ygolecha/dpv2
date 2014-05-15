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

	   $low_lim = ($_GET['page'] * 20) - 20;
       $up_lim = 20;

	   $currentPage = $_GET['page'];
	    

	}
	else {
		$low_lim = 0;
		$up_lim = 20;
		$currentPage = 1;
	}

     $sql = "SELECT id,name FROM store_details ";
     if(!$result = $mysqli->query($sql)) {

		die('There was an error running the query [' . $mysqli->error . ']');
	 }
	 $totalStore = $result->num_rows;
	 $totalPages = ceil($totalStore/20);
	 $sql = "SELECT id,name FROM store_details ORDER BY id DESC LIMIT $low_lim,$up_lim ";
     if(!$result = $mysqli->query($sql)) {

		die('There was an error running the query [' . $mysqli->error . ']');
	 }
	 while($row = $result->fetch_assoc()) { 

	   $storeArr[$row['id']] = $row['name'];
													
	 } 

$smarty->assign("storeName", $storeArr);
$smarty->assign("totalPages", $totalPages);
$smarty->assign("currentPage", $currentPage);

$smarty->display("edit_store.tpl");

?>