<?php

function getAllCat($orderBy, $id, $limit) {

   global $mysqli;

   $sql = "SELECT * FROM product_deals WHERE deal_id IN (SELECT deal_id FROM category_mapping WHERE category_id = '$id' ) ORDER BY $orderBy DESC Limit $limit ";

   if(!$result = $mysqli->query($sql)) {

		die('There was an error running the query [' . $mysqli->error . ']');
   }
   $i = 0;
   $dealData = array();
   while($row = $result->fetch_assoc()) {
     
   	  foreach ($row as $key => $value) {
   	  	
   	  	$dealData[$i][$key] = $value;
   	  }
   	  $i++;
   }
   
   return $dealData;
}

function getAllStore($orderBy, $id, $limit) {

   global $mysqli;

   $sql = "SELECT * FROM product_deals WHERE store_name = (SELECT name FROM store_details WHERE id = '$id') ORDER BY $orderBy DESC Limit $limit ";

   if(!$result = $mysqli->query($sql)) {

		die('There was an error running the query [' . $mysqli->error . ']');
   }
   $i = 0;
   $dealData = array();
   while($row = $result->fetch_assoc()) {
     
   	  foreach ($row as $key => $value) {
   	  	
   	  	$dealData[$i][$key] = $value;
   	  }
   	  $i++;
   }
   
   return $dealData;
}

function getDeal($id) {

   global $mysqli;

   $sql = "SELECT * FROM product_deals WHERE deal_id = '$id' ";

   if(!$result = $mysqli->query($sql)) {

      die('There was an error running the query [' . $mysqli->error . ']');
   }
   $dealData = array();
   while($row = $result->fetch_assoc()) {
     
        foreach ($row as $key => $value) {
         
         $dealData[$key] = $value;
        }
   }
   
   return $dealData;
}




?>