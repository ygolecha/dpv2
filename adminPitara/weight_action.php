<?php
require "../config.php";

$id = $_POST['dealId'];
$dealWeight = $_POST['dealWeight'];

$sql = "UPDATE product_deals SET deal_weight='$dealWeight' WHERE deal_id='$id' ";
if(!$result = $mysqli->query($sql)) {

	die('There was an error running the query [' . $mysqli->error . ']');
}

echo "<h4>Weightage updated</h4>";
?>