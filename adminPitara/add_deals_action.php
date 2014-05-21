<?php
require "../config.php";

$storeName = $_POST['storeName'];
$title = $mysqli->real_escape_string($_POST['title']);
$desc = $mysqli->real_escape_string($_POST['desc']);
$desc = trim($desc);
$ogTitle = $mysqli->real_escape_string($_POST['ogTitle']);
$ogDesc = $mysqli->real_escape_string($_POST['ogDesc']);
$seoTitle = $mysqli->real_escape_string($_POST['seoTitle']);
$seoDesc = $mysqli->real_escape_string($_POST['seoDesc']);
$category = $_POST['category'];
$originalPrice = $_POST['originalPrice'];
$finalPrice = $_POST['finalPrice'];
$discount = $_POST['discount'];
$couponCode = $_POST['couponCode'];
$expiryDate = $_POST['expiryDate'];
$author = $_POST['author'];
if(isset($_POST['slugUrl'])) {
  $slugUrl = $_POST['slugUrl'];
} else {
  $slugUrl = "";
}
$shippingCharges = $mysqli->real_escape_string($_POST['shippingCharges']);
$offerText = $mysqli->real_escape_string($_POST['offerText']);
$affiliateUrl = $mysqli->real_escape_string($_POST['affiliateUrl']);
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

		$pageType = "Deal Add";
	}
	else {
		$pageType = "Deal Edit";
	}

	//creating url slug
    if($slugUrl != "") {
        $urlSlug = get_slug($slugUrl);
    }else {
    	$urlSlug = get_slug($title);
    }
	
	$urlSlug = $mysqli->real_escape_string($urlSlug);

	if(isset($_POST['pageType'])) {
		$pageType = $_POST['pageType'];
	}
	if(isset($_POST['imgUrl'])) {
      $imgUrl = $_POST['imgUrl'];
    } else {
      $imgUrl = "";
    }
    //uploading image
    $imageUrldb = upload_image($uploadPath, $uploadUrl, $nameSlug, $imgUrl); //returns the url where image is uploaded

	if($pageType == "Deal Add") {
	      $sql = "INSERT INTO product_deals (title, description, og_title, og_desc, seo_title, seo_desc, image_url, store_name, discount, coupon_code, expiry, shipping_charges, content, offer_text, affiliate_url, original_price, final_price, author, deal_flag) VALUES ('$title', '$desc', '$ogTitle', '$ogDesc', '$seoTitle', '$seoDesc', '$imageUrldb', '$storeName', '$discount', '$couponCode', '$expiryDate', '$shippingCharges', '$content', '$offerText', '$affiliateUrl', '$originalPrice', '$finalPrice', '$author', '$flag') ";

	}
	else if($pageType == "Deal Edit") {
            
			//adding deal id to url slug
			$urlSlug = $urlSlug."-dp".$dealID;
			$urlSlug = $mysqli->real_escape_string($urlSlug);
			    
	        $sql = "UPDATE product_deals SET title='$title', description='$desc', og_title='$ogTitle', og_desc='$ogDesc', seo_title='$seoTitle', seo_desc='$seoDesc', image_url='$imageUrldb', store_name='$storeName', discount='$discount', coupon_code='$couponCode', expiry='$expiryDate', shipping_charges='$shippingCharges', content='$content', offer_text='$offerText', affiliate_url='$affiliateUrl', original_price='$originalPrice', final_price='$finalPrice', author='$author', url_slug='$urlSlug', deal_flag='$flag' WHERE deal_id='$dealID' ";
	   
	}

	if(!$result = $mysqli->query($sql)) {

		die('There was an error running the query [' . $mysqli->error . ']');
	}
	if($pageType == "Deal Add") {
		$dealID = $mysqli->insert_id;
        
		//adding deal id to url slug
		$urlSlug = $urlSlug."-dp".$dealID;
		$urlSlug = $mysqli->real_escape_string($urlSlug);
           
		$sql = "UPDATE product_deals SET url_slug='$urlSlug' WHERE deal_id='$dealID' ";
		if(!$result = $mysqli->query($sql)) {

			die('There was an error running the query [' . $mysqli->error . ']');
		}

	}
	$i=0;
	foreach ($category as $catId) {
		
		$queryFormation[$i] = "'".$dealID."','".$catId."'";
		$i++;
	}
	$queryFinal = implode('),(', $queryFormation);
	$queryFinal = "(".$queryFinal.")";

	if($pageType == "Deal Edit") {

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