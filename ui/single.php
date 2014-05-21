<?php
require "config.php";

$Id = $_GET['id'];
$singleDeal = getDeal($Id);

$smarty->assign("singleDeal", $singleDeal);

$smarty->display("single.tpl");
?>