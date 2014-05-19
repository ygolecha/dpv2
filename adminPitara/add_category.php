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

$smarty->assign("catAction", $Cat_Action);

$smarty->display("add_category.tpl");

?>