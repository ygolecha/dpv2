<?php
include "include/constants.php";
include "db_connection.php";

$store_name = $_POST['store_name'];
$title = $mysqli->real_escape_string($_POST['title']);
$desc = $mysqli->real_escape_string($_POST['desc']);
$desc = trim($desc);
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
$content = trim($content);

	if(isset($_POST['flag'])){
	  $flag = $_POST['flag'];
	}
	else {
	  $flag = "";
	}

	if(isset($_POST['dealID'])){
	   $dealID = $_POST['dealID'];
	}else {
	   $dealID = "";
	}

	if($dealID == "") {

		$page_type = "Deal Add";
	}
	else {
		$page_type = "Deal Edit";
	}

	if(isset($_POST['page_type'])) {
		$page_type = $_POST['page_type'];
	}


	$image_url = "";
	if(isset($_POST['img_url'])){
	    $img_url = $_POST['img_url'];
		if($img_url != "") {
		$content_img = file_get_contents($img_url);
		$image_url = "http://localhost/dealspitara/dpv2/adminPitara/deals_images/".$dealID.".jpg";
		//Store in the filesystem.
		$fp = fopen($image_url, "w");
		fwrite($fp, $content_img);
		fclose($fp);
		}
	}
	if($page_type == "Deal Add") {
	      $sql = "INSERT INTO product_deals_old (title, description, og_title, og_desc, seo_title, seo_desc, image_url, store_name, discount, coupon_code, expiry, shipping_charges, content, offer_text, affiliate_url, original_price, final_price, author, deal_flag) VALUES ('$title', '$desc', '$og_title', '$og_desc', '$seo_title', '$seo_desc', '$image_url', '$store_name', '$discount', '$coupon_code', '$expiry_date', '$shipping_charges', '$content', '$offer_text', '$affiliate_url', '$original_price', '$final_price', '$author', '$flag') ";

	}
	else if($page_type == "Deal Edit") {
            //creating url slug after editing deal info
			$slug_pre = strtolower($title);
			$explode_slug = explode(" ", $slug_pre);
			$url_slug = implode("-", $explode_slug);
			//adding deal id to url slug
			$url_slug = $url_slug."-dp".$dealID;
			$url_slug = $mysqli->real_escape_string($url_slug);
	        $sql = "UPDATE product_deals_old SET title='$title', description='$desc', og_title='$og_title', og_desc='$og_desc', seo_title='$seo_title', seo_desc='$seo_desc', image_url='$image_url', store_name='$store_name', discount='$discount', coupon_code='$coupon_code', expiry='$expiry_date', shipping_charges='$shipping_charges', content='$content', offer_text='$offer_text', affiliate_url='$affiliate_url', original_price='$original_price', final_price='$final_price', author='$author', url_slug='$url_slug', deal_flag='$flag' WHERE deal_id='$dealID' ";
	   
	}

	if(!$result = $mysqli->query($sql)) {

		die('There was an error running the query [' . $mysqli->error . ']');
	}
	if($page_type == "Deal Add") {
		$dealID = $mysqli->insert_id;
        //creating url slug after inserting deal into database
		$slug_pre = strtolower($title);
		$explode_slug = explode(" ", $slug_pre);
		$url_slug = implode("-", $explode_slug);
		//adding deal id to url slug
		$url_slug = $url_slug."-dp".$dealID;
		$url_slug = $mysqli->real_escape_string($url_slug);

		$sql = "UPDATE product_deals_old SET url_slug='$url_slug' WHERE deal_id='$dealID' ";
		if(!$result = $mysqli->query($sql)) {

			die('There was an error running the query [' . $mysqli->error . ']');
		}

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
	echo $dealID;

?>