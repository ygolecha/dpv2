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

	 }
	 else {
	 	$low_lim = 0;
		$up_lim = 20;
	 }


     $sql = "SELECT id,name FROM category_details ";
     if(!$result = $mysqli->query($sql)) {

		die('There was an error running the query [' . $mysqli->error . ']');
	 }
	 
	//required data for pagination starts
	$itemLimit = 20;
	$totaDeals = $result->num_rows;
	$totalPages = ceil($totaDeals/$itemLimit);
	//required data for pagination ends

	 $sql = "SELECT id,name FROM category_details ORDER BY id DESC LIMIT $low_lim,$up_lim ";
     if(!$result = $mysqli->query($sql)) {

		die('There was an error running the query [' . $mysqli->error . ']');
	 }
	 while($row = $result->fetch_assoc()) { 

	   $catArr[$row['id']] = $row['name'];
													
	 } 
include_once 'pagination.php';
$smarty->assign("catName", $catArr);
$smarty->assign("totalPages", $totalPages);
$smarty->assign("paginationHtml", $pagination);

$smarty->display("edit_category.tpl");

?>