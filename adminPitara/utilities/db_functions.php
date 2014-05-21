<?php

function getNum($tableName) {
    global $mysqli;
	$sql = "SELECT * FROM $tableName ";
	if(!$result = $mysqli->query($sql)) {

		die('There was an error running the query [' . $mysqli->error . ']');
	}
	$num = $result->num_rows;
	return $num;

}

function insertIntoList($tableName, $catArr) {
    global $mysqli;
	$sql = "INSERT INTO $tableName (name, title, description, og_title, og_desc, seo_title, seo_desc, short_desc, long_desc, image_url) VALUES ('".$catArr['name']."', '".$catArr['title']."', '".$catArr['desc']."', '".$catArr['ogTitle']."', '".$catArr['ogDesc']."', '".$catArr['seoTitle']."', '".$catArr['seoDesc']."', '".$catArr['shortDesc']."', '".$catArr['content']."', '".$catArr['imageUrldb']."') ";
	if(!$result = $mysqli->query($sql)) {

	die('There was an error running the query [' . $mysqli->error . ']');
    }

}

function updateList($tableName, $catArr) {
    global $mysqli;
	$sql = "UPDATE $tableName SET name='".$catArr['name']."', title='".$catArr['title']."', description='".$catArr['desc']."', og_title='".$catArr['ogTitle']."', og_desc='".$catArr['ogDesc']."', seo_title='".$catArr['seoTitle']."', seo_desc='".$catArr['seoDesc']."', short_desc='".$catArr['shortDesc']."', long_desc='".$catArr['content']."', url_slug='".$catArr['urlSlug']."', image_url='".$catArr['imageUrldb']."' WHERE id='".$catArr['ID']."' ";
	if(!$result = $mysqli->query($sql)) {

	die('There was an error running the query [' . $mysqli->error . ']');
    }
    
}


?>