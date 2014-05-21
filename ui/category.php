<?php
require "config.php";

$listId = $_GET['id'];
$orderBy = "creation_date";
$limit = 20;
$catData = getAllCat($orderBy, $listId, $limit);

$smarty->assign("catData", $catData);

$smarty->display("category.tpl");
?>