<?php
require "config.php";

$listId = $_GET['id'];
$orderBy = "creation_date";
$limit = 20;
$storeData = getAllStore($orderBy, $listId, $limit);

$smarty->assign("storeData", $storeData);

$smarty->display("store.tpl");
?>