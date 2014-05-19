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
$smarty->assign("dealID",$_POST['deal_id']);
$smarty->assign("TOPMENU",$smarty->fetch("top-menu.tpl"));

$sql = "SELECT id,name FROM store_details ";

	if(!$result = $mysqli->query($sql)) {

		die('There was an error running the query [' . $mysqli->error . ']');
	}
	while($row = $result->fetch_assoc()) { 

	   $storeArr[$row['id']] = $row['name'];
													
	} 


	$sql = "SELECT id, name FROM category_details ";

	if(!$result = $mysqli->query($sql)) {

		die('There was an error running the query [' . $mysqli->error . ']');
	}
	while($row = $result->fetch_assoc()) { 

	$catArr[$row['id']] = $row['name'];
	
	} 

	$sql = "SELECT * FROM product_deals_old WHERE deal_id='".$_POST['deal_id']."' ";

	if(!$result = $mysqli->query($sql)) {

		die('There was an error running the query [' . $mysqli->error . ']');
	}
	while($row = $result->fetch_assoc()) { 

	   foreach ($row as $key => $value) {
	   	
	   	    $dealData[$key] = $value;
	   }
	
	} 

	$sql = "SELECT * FROM category_mapping WHERE deal_id='".$_POST['deal_id']."' ";

	if(!$result = $mysqli->query($sql)) {

		die('There was an error running the query [' . $mysqli->error . ']');
	}
	$j=0;
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) { 

		   	    $catMap[$j] = $row['category_id'];
		   	    $j++;
		
		} 
	    $countCat = count($catMap);
    }
    else {
    	$catMap = "";
    	$countCat = "";
    }
    
$smarty->assign("storeName", $storeArr);
$smarty->assign("catName", $catArr);
$smarty->assign("dealData", $dealData);
$smarty->assign("catMap", $catMap);
$smarty->assign("countCat", $countCat);

    
$smarty->display("edit_deal_form_old.tpl");

?>

