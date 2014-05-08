<?php
include "include/constants.php";
include "db_connection.php";

$name = $mysqli->real_escape_string($_POST['name']);
$title = $mysqli->real_escape_string($_POST['title']);
$desc = $mysqli->real_escape_string($_POST['desc']);
$og_title = $mysqli->real_escape_string($_POST['og_title']);
$og_desc = $mysqli->real_escape_string($_POST['og_desc']);
$seo_title = $mysqli->real_escape_string($_POST['seo_title']);
$seo_desc = $mysqli->real_escape_string($_POST['seo_desc']);
$short_desc = $mysqli->real_escape_string($_POST['short_desc']);
$content = $mysqli->real_escape_string($_POST['content']);
$page_type = $_POST['page_type'];

$slug_pre = strtolower($title);
$explode_slug = explode(" ", $slug_pre);
$url_slug = implode("-", $explode_slug);
$url_slug = $mysqli->real_escape_string($url_slug);

$img_url = $_POST['img_url'];
$content_img = file_get_contents($img_url);
$image_url = "C:/xampp/htdocs/dealspitara/dpv2/adminPitara/deals_images/".$name.".jpg";
//Store in the filesystem.
$fp = fopen($image_url, "w");
fwrite($fp, $content_img);
fclose($fp);
if($page_type == "category") {
$sql = "INSERT INTO category_details (name, title, description, og_title, og_desc, seo_title, seo_desc, short_desc, long_desc, url_slug, image_url) VALUES ('$name', '$title', '$desc', '$og_title', '$og_desc', '$seo_title', '$seo_desc', '$short_desc', '$content', '$url_slug', '$image_url') ";
}
else if($page_type == "store") {
$sql = "INSERT INTO store_details (name, title, description, og_title, og_desc, seo_title, seo_desc, short_desc, long_desc, url_slug, image_url) VALUES ('$name', '$title', '$desc', '$og_title', '$og_desc', '$seo_title', '$seo_desc', '$short_desc', '$content', '$url_slug', '$image_url') ";
}
if(!$result = $mysqli->query($sql)) {

	die('There was an error running the query [' . $mysqli->error . ']');
}


?>