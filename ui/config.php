<?php

require '../libs/Smarty.class.php';
include '../adminPitara/include/constants.php';
include '../adminPitara/db_connection.php'; 
include 'utilities/functions.php';
include 'utilities/db_functions.php';

$smarty = new Smarty;
$smarty->template_dir = "templates/";
$smarty -> auto_literal = false; 
$smarty -> left_delimiter = "~"; 
$smarty -> right_delimiter = "`";
