<?php
# Location Infomation
// Path of script with trailing slashes
$script_path = "/dealspitara/dpv2/adminPitara/";
// URL of script (no trailing slash)
$script_url = "http://localhost/dealspitara/dpv2/adminPitara/";

define("Script_Path",$script_path);

define("Script_URL",$script_url);

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
