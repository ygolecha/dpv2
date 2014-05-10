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
$smarty->assign("catID",$_POST['cat_id']);
$smarty->assign("TOPMENU",$smarty->fetch("top-menu.tpl"));


	$sql = "SELECT * FROM category_details WHERE id='".$_POST['cat_id']."' ";

	if(!$result = $mysqli->query($sql)) {

		die('There was an error running the query [' . $mysqli->error . ']');
	}
	while($row = $result->fetch_assoc()) { 

	   foreach ($row as $key => $value) {
	   	
	   	    $catData[$key] = $value;
	   }
	
	} 

    
$smarty->assign("catData", $catData);
$smarty->assign("catID", $catID);
    
$smarty->display("edit_category_form.tpl");

?>

