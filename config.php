<?php
# Location Infomation
// Path of script with trailing slashes
$scriptPath = "/dealspitara/dpv2/adminPitara/";
// URL of script (no trailing slash)
$scriptUrl = "http://localhost/dealspitara/dpv2/adminPitara/";

$dealAction = "http://localhost/dealspitara/dpv2/adminPitara/add_deals_action.php";

//for old deals edit page
$dealActionOld = "http://localhost/dealspitara/dpv2/adminPitara/add_deals_action_old.php";

$catAction = "http://localhost/dealspitara/dpv2/adminPitara/add_category_action_new.php";

//for live search action
$search = "http://localhost/dealspitara/dpv2/adminPitara/search.php";

define("Script_Path",$scriptPath);

define("Script_URL",$scriptUrl);

//setting path for uploading images
$uploadPath = "C://xampp/htdocs/dealspitara/dpv2/adminPitara/deals_images/";
//setting url for images
$uploadUrl = "http://localhost/dealspitara/dpv2/adminPitara/deals_images/";

require 'libs/Smarty.class.php';
include 'adminPitara/include/constants.php';
include 'adminPitara/db_connection.php'; 
include 'adminPitara/utilities/functions.php';
include 'adminPitara/utilities/db_functions.php';

$smarty = new Smarty;
$smarty->template_dir = "templates/";
$smarty -> auto_literal = false; 
$smarty -> left_delimiter = "~"; 
$smarty -> right_delimiter = "`";
