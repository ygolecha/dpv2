<?php 
include_once('../config.php');

$smarty->assign("HEADER",$smarty->fetch("header.tpl"));
$smarty->assign("FOOTER",$smarty->fetch("footer.tpl"));

include_once 'include/processes.php';
$Login_Process = new Login_Process;
if(isset($_POST['process'])) {
$New = $Login_Process->Register($_POST, $_POST['process']);
}
$Login_Process->check_status($_SERVER['SCRIPT_NAME']);

$smarty->assign("processPage", $_SERVER['PHP_SELF']);
$smarty->assign("sessionUsername",$_SESSION['username']);
$smarty->assign("userLevel",$_SESSION['user_level']);
$smarty->assign("TOPMENU",$smarty->fetch("top-menu.tpl"));

$smarty->display("register.tpl");

?>