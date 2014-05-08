<?php
include_once('../config.php');

$smarty->assign("HEADER",$smarty->fetch("header.tpl"));
$smarty->assign("FOOTER",$smarty->fetch("footer.tpl"));

include_once 'include/processes.php';
$Login_Process = new Login_Process;
if(isset($_GET['page']))
{
$page = $_GET['page'];
$Login_Process->check_login($page);
}
else {
$page = '';
$Login_Process->check_login($page);
}
if(isset($_POST['user']))
{
	$user = $_POST['user'];
	if(isset($_POST['pass']))
		$pass = $_POST['pass'];
	$Login = $Login_Process->log_in($user, $pass, $page, $_POST['submit']); 
}

$smarty->assign("page",$page);
$smarty->assign("processPage",$_SERVER['PHP_SELF']);
$smarty->display("index.tpl");

?>
	
