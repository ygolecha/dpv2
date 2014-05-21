<?php

function upload_image($uploadPath, $uploadUrl, $nameSlug, $imgUrl) {

      if($imgUrl != "") {
        	
			$imageUrl = $uploadPath.$nameSlug.".jpg";
			if(strpos($imgUrl, 'base64') !== false) {
		    $imgData1 = substr($imgUrl, 1+strrpos($imgUrl, ','));
		    file_put_contents($imageUrl,base64_decode($imgData1));
		    $imageUrldb = $uploadUrl.$nameSlug.".jpg";
		    } else {
		    $imageUrldb = $imgUrl;
		    }
		    
		}
		else {
			$imageUrldb = "";
		}
		return $imageUrldb;

}


function get_slug($string) {

	$slugName = strtolower($string);
	$explodeSlugName = explode(" ", $slugName);
	$nameSlug = implode("-", $explodeSlugName);

	return $nameSlug;
}

?>