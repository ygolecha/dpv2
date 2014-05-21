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
    if(isset($_GET['page'])) {
       
       $lowLim = ($_GET['page'] * 20) - 20;
       $upLim = 20;
	}
	else {

		$lowLim = 0;
		$upLim = 20;
	}
    //for total deals count
	$sql = "SELECT deal_id FROM product_deals_old ";
	if(!$result = $mysqli->query($sql)) {

		die('There was an error running the query [' . $mysqli->error . ']');
	}

	//required data for pagination starts
	$itemLimit = 20;
	$totaDeals = $result->num_rows;
	$totalPages = ceil($totaDeals/$itemLimit);
	//required data for pagination ends
    
    if($_SESSION['user_id'] != 3) {
    $sql = "SELECT deal_id,old_title FROM product_deals_old ORDER BY creation_date DESC LIMIT $lowLim,$upLim ";
    }
    else
    {
    $sql = "SELECT deal_id,old_title FROM product_deals_old WHERE author='".$_SESSION['user_id']."' ORDER BY creation_date DESC LIMIT $lowLim,$upLim ";	
    }

	if(!$result = $mysqli->query($sql)) {

		die('There was an error running the query [' . $mysqli->error . ']');
	}
	while($row = $result->fetch_assoc()) { 

	   $dealArr[$row['deal_id']] = $row['old_title'];
													
	} 
include_once 'pagination.php';

$smarty->assign("dealName", $dealArr);
$smarty->assign("totalPages", $totalPages);
$smarty->assign("paginationHtml", $pagination);
$smarty->assign("search", $search);

$smarty->display("edit_deals_old.tpl");

?>

