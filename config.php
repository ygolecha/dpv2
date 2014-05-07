<?php

require 'libs/Smarty.class.php';

$smarty = new Smarty;
$smarty->template_dir = "adminPitara/templates/";
$smarty -> auto_literal = false; 
$smarty -> left_delimiter = "~"; 
$smarty -> right_delimiter = "`";
