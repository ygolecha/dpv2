<?php
require "../config.php";

$name = $mysqli->real_escape_string($_POST['name']);
$title = $mysqli->real_escape_string($_POST['title']);
$desc = $mysqli->real_escape_string($_POST['desc']);
$desc = trim($desc);
$og_title = $mysqli->real_escape_string($_POST['og_title']);
$og_desc = $mysqli->real_escape_string($_POST['og_desc']);
$seo_title = $mysqli->real_escape_string($_POST['seo_title']);
$seo_desc = $mysqli->real_escape_string($_POST['seo_desc']);
$short_desc = $mysqli->real_escape_string($_POST['short_desc']);
$content = $mysqli->real_escape_string($_POST['content']);
$content = trim($content);
$page_type = $_POST['page_type'];
if(isset($_POST['ID'])) {
$ID = $_POST['ID'];
}

$slug_pre = strtolower($title);
$explode_slug = explode(" ", $slug_pre);
$url_slug = implode("-", $explode_slug);
$url_slug = $mysqli->real_escape_string($url_slug);

$serverImgLoc = $upload_path;
$img_url = $_POST['img_url'];

if($page_type == "category_add") {
$sql = "INSERT INTO category_details (name, title, description, og_title, og_desc, seo_title, seo_desc, short_desc, long_desc, url_slug, image_url) VALUES ('$name', '$title', '$desc', '$og_title', '$og_desc', '$seo_title', '$seo_desc', '$short_desc', '$content', '$url_slug', '$image_url') ";
}
else if($page_type == "category_edit") {
$sql = "UPDATE category_details SET name='$name', title='$title', description='$desc', og_title='$og_title', og_desc='$og_desc', seo_title='$seo_title', seo_desc='$seo_desc', short_desc='$short_desc', long_desc='$content', url_slug='$url_slug', image_url='$image_url' WHERE id='$ID' ";
}
else if($page_type == "store_add") {
$sql = "INSERT INTO store_details (name, title, description, og_title, og_desc, seo_title, seo_desc, short_desc, long_desc, url_slug, image_url) VALUES ('$name', '$title', '$desc', '$og_title', '$og_desc', '$seo_title', '$seo_desc', '$short_desc', '$content', '$url_slug', '$image_url') ";
}
else if($page_type == "store_edit") {
$sql = "UPDATE store_details SET name='$name', title='$title', description='$desc', og_title='$og_title', og_desc='$og_desc', seo_title='$seo_title', seo_desc='$seo_desc', short_desc='$short_desc', long_desc='$content', url_slug='$url_slug', image_url='$image_url' WHERE id='$ID' ";
}
if(!$result = $mysqli->query($sql)) {

	die('There was an error running the query [' . $mysqli->error . ']');
}

	    if($page_type == "category_add" || $page_type == "store_add") {
	      $ID = $mysqli->insert_id;
			
	    }
	    
        if($img_url != "") {
        	if(strpos($page_type, 'category') !== false) {
        		$type = "cat";
        	} else if(strpos($page_type, 'store') !== false) {
                $type = "store";
        	}
			$image_url = $serverImgLoc.$type.$ID.".jpg";
		    $imgData1 = substr($img_url, 1+strrpos($img_url, ','));
		    file_put_contents($image_url,base64_decode($imgData1));
		    $image_url_db = $upload_url.$type.$ID.".jpg";
		}
		else {
			$image_url = "";
		}
        if($page_type == "category_add"){
           
           $sql = "UPDATE category_details SET image_url = '$image_url_db' WHERE id='$ID' ";
		}else if($page_type == "store_add") {
           
           $sql = "UPDATE store_details SET image_url = '$image_url_db' WHERE id='$ID' ";
		}

    
echo $serverImgLoc;
?>