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

     $sql = "SELECT id,name FROM category_details ";
     if(!$result = $mysqli->query($sql)) {

		die('There was an error running the query [' . $mysqli->error . ']');
	 }
	 while($row = $result->fetch_assoc()) { 

	   $catArr[$row['id']] = $row['name'];
													
	 } 

$smarty->assign("catName", $catArr);

$smarty->display("edit_category.tpl");

?>