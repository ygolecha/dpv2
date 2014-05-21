<?php
require "../config.php";

$catArr['name'] = $mysqli->real_escape_string($_POST['name']);
$catArr['title'] = $mysqli->real_escape_string($_POST['title']);
$catArr['desc'] = $mysqli->real_escape_string($_POST['desc']);
$catArr['desc'] = trim($catArr['desc']);
$catArr['ogTitle'] = $mysqli->real_escape_string($_POST['ogTitle']);
$catArr['ogDesc'] = $mysqli->real_escape_string($_POST['ogDesc']);
$catArr['seoTitle'] = $mysqli->real_escape_string($_POST['seoTitle']);
$catArr['seoDesc'] = $mysqli->real_escape_string($_POST['seoDesc']);
$catArr['shortDesc'] = $mysqli->real_escape_string($_POST['shortDesc']);
$catArr['content'] = $mysqli->real_escape_string($_POST['content']);
$catArr['content'] = trim($catArr['content']);
$catArr['pageType'] = $_POST['pageType'];
if(isset($_POST['ID'])) {
$catArr['ID'] = $_POST['ID'];
}
//title slug
$urlSlug = get_slug($catArr['title']);
$catArr['urlSlug'] = $mysqli->real_escape_string($urlSlug);

//name slug
$nameSlug = get_slug($catArr['name']);
$catArr['nameSlug'] = $mysqli->real_escape_string($nameSlug);

$catArr['imgUrl'] = $_POST['imgUrl'];

//uploading image
$catArr['imageUrldb'] = upload_image($uploadPath, $uploadUrl, $catArr['nameSlug'], $catArr['imgUrl']); //returns the url where image is uploaded

if($catArr['pageType'] == "category_add") {
	$tableName = "category_details";
	insertIntoList($tableName, $catArr);
}
else if($catArr['pageType'] == "category_edit") {
	//adding deal id to url slug
	$urlSlug = $urlSlug."-c".$catArr['ID'];
	$catArr['urlSlug'] = $mysqli->real_escape_string($urlSlug);
    $tableName = "category_details";
	updateList($tableName, $catArr);
}
else if($catArr['pageType'] == "store_add") {
    $tableName = "store_details";
	insertIntoList($tableName, $catArr);
}
else if($catArr['pageType'] == "store_edit") {
	//adding deal id to url slug
	$urlSlug = $urlSlug."-s".$catArr['ID'];
	$catArr['urlSlug'] = $mysqli->real_escape_string($urlSlug);
	$tableName = "store_details";
	updateList($tableName, $catArr);
   
}

if(strpos($catArr['pageType'], '_add') !== false) {

	$ID = $mysqli->insert_id;
	//adding deal id to url slug
	if($catArr['pageType'] == "category_add") {
	$urlSlug = $urlSlug."-c".$ID;
	$urlSlug = $mysqli->real_escape_string($urlSlug);
	$sql = "UPDATE category_details SET url_slug='$urlSlug' WHERE id='$ID' ";
    } else if($catArr['pageType'] == "store_add") {
	$urlSlug = $urlSlug."-s".$ID;
	$urlSlug = $mysqli->real_escape_string($urlSlug);
	$sql = "UPDATE store_details SET url_slug='$urlSlug' WHERE id='$ID' ";
    }
    if(!$result = $mysqli->query($sql)) {

	die('There was an error running the query [' . $mysqli->error . ']');
    }

}

	        
?>