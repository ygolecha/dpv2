<?php
# Location Infomation
// Path of script with trailing slashes
$Script_Path = "/dealspitara/dpv2/adminPitara/";
// URL of script (no trailing slash)
$Script_Url = "http://localhost/dealspitara/dpv2/adminPitara/";

$Deal_Action = "http://localhost/dealspitara/dpv2/adminPitara/add_deals_action.php";

//for old deals edit page
$Deal_Action_Old = "http://localhost/dealspitara/dpv2/adminPitara/add_deals_action_old.php";

$Cat_Action = "http://localhost/dealspitara/dpv2/adminPitara/add_category_action.php";

//for live search action
$Search = "http://localhost/dealspitara/dpv2/adminPitara/search.php";

define("Script_Path",$Script_Path);

define("Script_URL",$Script_Url);

//setting path for uploading images
$upload_path = "C://xampp/htdocs/dealspitara/dpv2/adminPitara/deals_images/";
//setting url for images
$upload_url = "http://localhost/dealspitara/dpv2/adminPitara/deals_images/";

require 'libs/Smarty.class.php';
include 'adminPitara/include/constants.php';
include 'adminPitara/db_connection.php'; 

$smarty = new Smarty;
$smarty->template_dir = "templates/";
$smarty -> auto_literal = false; 
$smarty -> left_delimiter = "~"; 
$smarty -> right_delimiter = "`";
