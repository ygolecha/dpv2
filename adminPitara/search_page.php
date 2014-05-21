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

    //setting lower limit and upper limit for the number of items in the list
    if(isset($_GET['page'])) {
       $lowLim = ($_GET['page'] * 20) - 20;
       $upLim = 20;
	   $currentPage = $_GET['page'];
	}
	else {
		$lowLim = 0;
		$upLim = 20;
		$currentPage = 1;
	}
	$fromDate = $_GET['fromDate'];
	$toDate = $_GET['toDate'];
	$todaysDate = date("Y-m-d");
	//creating query where clause data based on the deal status
	if($_GET['dealStatus'] == "All") {
        
        $addQuery = "";
	} else if($_GET['dealStatus'] == "Expired") {

		$addQuery = "AND expiry < '$todaysDate' ";
	} else if($_GET['dealStatus'] == "Not Expired") {
        
        $addQuery = "AND expiry > '$todaysDate' ";
	}
    //for total deals count
	$sql = "SELECT deal_id FROM product_deals WHERE expiry BETWEEN '$fromDate' AND '$toDate' $addQuery ";
	if(!$result = $mysqli->query($sql)) {

		die('There was an error running the query [' . $mysqli->error . ']');
	}

	//required data for pagination starts
	$itemLimit = 20;
	$totaDeals = $result->num_rows;
	$totalPages = ceil($totaDeals/$itemLimit);
	//required data for pagination ends
    
    //if user is either 'admin' or 'moderator', we are getting all the deals
    if($_SESSION['user_id'] != 3) {
    $sql = "SELECT deal_id,title,deal_weight FROM product_deals WHERE expiry BETWEEN '$fromDate' AND '$toDate' $addQuery  ORDER BY creation_date DESC LIMIT $lowLim,$upLim ";
    }
    else //if user is 'company user', we are getting all the deals which is entered by him/her
    {
    $sql = "SELECT deal_id,title FROM product_deals WHERE author='".$_SESSION['user_id']."' AND  expiry BETWEEN '$fromDate' AND '$toDate' $addQuery ORDER BY creation_date DESC LIMIT $lowLim,$upLim ";	
    }

	if(!$result = $mysqli->query($sql)) {

		die('There was an error running the query [' . $mysqli->error . ']');
	}
	$dealArr = array();
	while($row = $result->fetch_assoc()) { 

	   $dealArr[$row['deal_id']][$row['title']] = $row['deal_weight'];
													
	} 
	
include_once 'pagination.php';
$smarty->assign("dealName", $dealArr);
$smarty->assign("paginationHtml", $pagination);
$smarty->assign("dealAction", $dealAction);
$smarty->assign("search", $search);

$smarty->display("search_page.tpl");

?>

