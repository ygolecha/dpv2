<?php
set_time_limit(0);
include "include/constants.php";
include "db_connection.php";

$options  = array (
  'http' => 
  array (
    'ignore_errors' => true,
  ),
); 
$context  = stream_context_create( $options );
for($pnum=11;$pnum<=258;$pnum++){
	$q=0;
	$response = file_get_contents(
	  'https://public-api.wordpress.com/rest/v1/sites/dealspitara.com/posts/?page='.$pnum,
	  false,
	  $context
	);
	$jsonArr = json_decode( $response );

	$i=0;
	foreach ($jsonArr as $key => $value) {
		    if($key == "posts") {
		        foreach ($value as $inkey => $invalue) {
	                foreach ($invalue as $innkey => $innvalue) {
	                	
		                	if($innkey == "title") {

		                		$old_title = $innvalue;
		                	}
		                	if($innkey == "ID") {

		                		$old_deal_id = $innvalue;
		                	}
		                	if($innkey == "slug") {

		                		$old_slug_url = $innvalue;
		                	}
		                	if($innkey == "URL") {
		                		$old_url = $innvalue;
		                	}
		                	if($innkey == "content") {
		                		$old_content = $innvalue;
		                	}
		                	if($innkey == "featured_image") {
		                		$old_img_url = $innvalue;
		                	}
		                	if($innkey == "author") {

		                		foreach ($innvalue as $akey => $avalue) {
		                			
		                			if($akey == "name") {

		                				$old_author = $avalue;
		                			}
		                		}
		                	}
		                	if($innkey == "tags") {
	                            $x=0;
		                		foreach ($innvalue as $tkey => $tvalue) {
		                			
		                			$old_tags[$x] = $tkey;
		                			$x++; 
		                		}
		                	}
		                	if($innkey == "categories") {
	                            $y=0;
		                		foreach ($innvalue as $ckey => $cvalue) {
		                			
		                			$old_categories[$y] = $ckey;
		                			$y++; 
		                		}
		                	}
		                	if($innkey == "metadata") {
	                            $y=0;
		                		foreach ($innvalue as $mkey => $mvalue) {
		                			foreach ($mvalue as $imkey => $imvalue) {
		                				
		                				if($imvalue == "store") {
		
		                                  foreach ($mvalue as $imkey => $imvalue) {
	                                        
	                                        if($imkey == "value") {
		                                       $old_store = $imvalue;
	                                        }
		                                  }
		                				}
		                				if($imvalue == "url") {
		
		                                  foreach ($mvalue as $imkey => $imvalue) {
	                                        
	                                        if($imkey == "value") {
		                                       $old_affiliate = $imvalue;
	                                        }
		                                  }
		                				}
		                				if($imvalue == "CouponCode") {
		
		                                  foreach ($mvalue as $imkey => $imvalue) {
	                                        
	                                        if($imkey == "value") {
		                                       $old_coupon_code = $imvalue;
	                                        }
		                                  }
		                				}
		                				if($imvalue == "DiscountedPrice") {
		
		                                  foreach ($mvalue as $imkey => $imvalue) {
	                                        
	                                        if($imkey == "value") {
		                                       $old_final_price = $imvalue;
	                                        }
		                                  }
		                				}
		                				if($imvalue == "OriginalPrice") {
		
		                                  foreach ($mvalue as $imkey => $imvalue) {
	                                        
	                                        if($imkey == "value") {
		                                       $old_original_price = $imvalue;
	                                        }
		                                  }
		                				}

		                			}
		                		}
		                	}
	                }
	                $old_tags = implode(',', $old_tags);
	                $old_categories = implode(',', $old_categories);

	                $old_title = $mysqli->real_escape_string($old_title);
	                $old_url = $mysqli->real_escape_string($old_url);
	                $old_content = $mysqli->real_escape_string($old_content);
	                $old_img_url = $mysqli->real_escape_string($old_img_url);
	                $old_store = $mysqli->real_escape_string($old_store);
	                $old_affiliate = $mysqli->real_escape_string($old_affiliate);
	                $old_coupon_code = $mysqli->real_escape_string($old_coupon_code);
	                $old_tags = $mysqli->real_escape_string($old_tags);
	                $old_categories = $mysqli->real_escape_string($old_categories);
	                $old_slug_url = $mysqli->real_escape_string($old_slug_url);

	                $queryFormation[$q] = "'".$old_title."','".$old_url."','".$old_content."','".$old_img_url."','".$old_store."','".$old_affiliate."','".$old_coupon_code."','".$old_final_price."','".$old_original_price."','".$old_tags."','".$old_categories."','".$old_author."','".$old_deal_id."','".$old_slug_url."'";
	                $q++;
	                
	                unset($old_tags);
	                unset($old_categories);
	                unset($old_title);
	                unset($old_url);
	                unset($old_content);
	                unset($old_img_url);
	                unset($old_store);
	                unset($old_affiliate);
	                unset($old_coupon_code);
	                unset($old_final_price);
	                unset($old_original_price);
	                unset($old_author);


		        }
		    }
            
           	
		
	}

	        $queryMain = implode("),(", $queryFormation);
            $queryMain = "(".$queryMain.")";
            $sql = "INSERT IGNORE INTO product_deals_old (old_title, old_url, old_content, old_img_url, old_store, old_affiliate, old_coupon_code, old_final_price, old_original_price, old_tags, old_categories, old_author, old_deal_id, old_slug_url) VALUES ".$queryMain." ";
            if(!$result = $mysqli->query($sql)) {

               die('There was an error running the query [' . $mysqli->error . ']');
            }

            unset($queryFormation);
            unset($queryMain);

 }


                    

?>