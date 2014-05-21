<?php
require "../config.php";

$name = $mysqli->real_escape_string($_POST['name']);
$title = $mysqli->real_escape_string($_POST['title']);
$desc = $mysqli->real_escape_string($_POST['desc']);
$desc = trim($desc);
$ogTitle = $mysqli->real_escape_string($_POST['ogTitle']);
$ogDesc = $mysqli->real_escape_string($_POST['ogDesc']);
$seoTitle = $mysqli->real_escape_string($_POST['seoTitle']);
$seoDesc = $mysqli->real_escape_string($_POST['seoDesc']);
$shortDesc = $mysqli->real_escape_string($_POST['shortDesc']);
$content = $mysqli->real_escape_string($_POST['content']);
$content = trim($content);
$pageType = $_POST['pageType'];
if(isset($_POST['ID'])) {
$ID = $_POST['ID'];
}
//title slug
$urlSlug = get_slug($title);
$urlSlug = $mysqli->real_escape_string($urlSlug);

//name slug
$nameSlug = get_slug($name);
$nameSlug = $mysqli->real_escape_string($nameSlug);

$imgUrl = $_POST['imgUrl'];

//uploading image
$imageUrldb = upload_image($uploadPath, $uploadUrl, $nameSlug, $imgUrl); //returns the url where image is uploaded

if($pageType == "category_add") {
$sql = "INSERT INTO category_details (name, title, description, og_title, og_desc, seo_title, seo_desc, short_desc, long_desc, image_url) VALUES ('$name', '$title', '$desc', '$ogTitle', '$ogDesc', '$seoTitle', '$seoDesc', '$shortDesc', '$content', '$imageUrldb') ";
}
else if($pageType == "category_edit") {
	//adding deal id to url slug
	$urlSlug = $urlSlug."-c".$ID;
	$urlSlug = $mysqli->real_escape_string($urlSlug);
    $sql = "UPDATE category_details SET name='$name', title='$title', description='$desc', og_title='$ogTitle', og_desc='$ogDesc', seo_title='$seoTitle', seo_desc='$seoDesc', short_desc='$shortDesc', long_desc='$content', url_slug='$urlSlug', image_url='$imageUrldb' WHERE id='$ID' ";
}
else if($pageType == "store_add") {
    $sql = "INSERT INTO store_details (name, title, description, og_title, og_desc, seo_title, seo_desc, short_desc, long_desc, image_url) VALUES ('$name', '$title', '$desc', '$ogTitle', '$ogDesc', '$seoTitle', '$seoDesc', '$shortDesc', '$content', '$imageUrldb') ";
}
else if($pageType == "store_edit") {
	//adding deal id to url slug
	$urlSlug = $urlSlug."-s".$ID;
	$urlSlug = $mysqli->real_escape_string($urlSlug);
    $sql = "UPDATE store_details SET name='$name', title='$title', description='$desc', og_title='$ogTitle', og_desc='$ogDesc', seo_title='$seoTitle', seo_desc='$seoDesc', short_desc='$shortDesc', long_desc='$content', url_slug='$urlSlug', image_url='$imageUrldb' WHERE id='$ID' ";
}
if(!$result = $mysqli->query($sql)) {

	die('There was an error running the query [' . $mysqli->error . ']');
}

if(strpos($pageType, '_add') !== false) {

	$ID = $mysqli->insert_id;
	//adding deal id to url slug
	if($pageType == "category_add") {
	$urlSlug = $urlSlug."-c".$ID;
	$urlSlug = $mysqli->real_escape_string($urlSlug);
	$sql = "UPDATE category_details SET url_slug='$urlSlug' WHERE id='$ID' ";
    } else if($pageType == "store_add") {
	$urlSlug = $urlSlug."-s".$ID;
	$urlSlug = $mysqli->real_escape_string($urlSlug);
	$sql = "UPDATE store_details SET url_slug='$urlSlug' WHERE id='$ID' ";
    }
    if(!$result = $mysqli->query($sql)) {

	die('There was an error running the query [' . $mysqli->error . ']');
    }

}

	        
?>