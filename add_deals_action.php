<?php
include "include/constants.php";
include "db_connection.php";

$store_name = $_POST['store_name'];
$title = $mysqli->real_escape_string($_POST['title']);
$desc = $mysqli->real_escape_string($_POST['desc']);
$og_title = $mysqli->real_escape_string($_POST['og_title']);
$og_desc = $mysqli->real_escape_string($_POST['og_desc']);
$seo_title = $mysqli->real_escape_string($_POST['seo_title']);
$seo_desc = $mysqli->real_escape_string($_POST['seo_desc']);
$category = $_POST['category'];
$original_price = $_POST['original_price'];
$final_price = $_POST['final_price'];
$discount = $_POST['discount'];
$coupon_code = $_POST['coupon_code'];
$expiry_date = $_POST['expiry_date'];
$author = $_POST['author'];
$shipping_charges = $mysqli->real_escape_string($_POST['shipping_charges']);
$offer_text = $mysqli->real_escape_string($_POST['offer_text']);
$affiliate_url = $mysqli->real_escape_string($_POST['affiliate_url']);
$content = $mysqli->real_escape_string($_POST['content']);
$page_type = $_POST['page_type'];
$flag = $_POST['flag'];
$dealID = $_POST['dealID'];

$slug_pre = strtolower($title);
$explode_slug = explode(" ", $slug_pre);
$url_slug = implode("-", $explode_slug);
$url_slug = $mysqli->real_escape_string($url_slug);

$img_url = $_POST['img_url'];
if($img_url != "") {
$content_img = file_get_contents($img_url);
$image_url = "http://teamdp.in/adminPitara/deals_images/".$url_slug.".jpg";
//Store in the filesystem.
$fp = fopen($image_url, "w");
fwrite($fp, $content_img);
fclose($fp);
}
if($page_type == "Deal Add") {
$sql = "INSERT INTO product_deals (title, description, og_title, og_desc, seo_title, seo_desc, image_url, store_name, discount, coupon_code, expiry, shipping_charges, content, offer_text, affiliate_url, original_price, final_price, author, url_slug, deal_flag) VALUES ('$title', '$desc', '$og_title', '$og_desc', '$seo_title', '$seo_desc', '$image_url', '$store_name', '$discount', '$coupon_code', '$expiry_date', '$shipping_charges', '$content', '$offer_text', '$affiliate_url', '$original_price', '$final_price', '$author', '$url_slug', '$flag') ";
}
else if($page_type == "Deal Edit") {
$sql = "UPDATE product_deals SET title='$title', description='$desc', og_title='$og_title', og_desc='$og_desc', seo_title='$seo_title', seo_desc='$seo_desc', image_url='$image_url', store_name='$store_name', discount='$discount', coupon_code='$coupon_code', expiry='$expiry_date', shipping_charges='$shipping_charges', content='$content', offer_text='$offer_text', affiliate_url='$affiliate_url', original_price='$original_price', final_price='$final_price', author='$author', url_slug='$url_slug' WHERE deal_id='$dealID' ";
}

	if(!$result = $mysqli->query($sql)) {

		die('There was an error running the query [' . $mysqli->error . ']');
	}
	if($page_type == "Deal Add") {
	$dealID = $mysqli->insert_id;
	}
	$i=0;
	foreach ($category as $cat_id) {
		
		$queryFormation[$i] = "'".$dealID."','".$cat_id."'";
		$i++;
	}
	$queryFinal = implode('),(', $queryFormation);
	$queryFinal = "(".$queryFinal.")";

	if($page_type == "Deal Edit") {

		 $sql = "DELETE FROM category_mapping WHERE deal_id = '$dealID' ";
		 if(!$result = $mysqli->query($sql)) {

			die('There was an error running the query [' . $mysqli->error . ']');
		 }
	}

	$sql = "INSERT INTO category_mapping 
	(deal_id, category_id) VALUES ".$queryFinal." ";

	if(!$result = $mysqli->query($sql)) {

		die('There was an error running the query [' . $mysqli->error . ']');
	}

?>