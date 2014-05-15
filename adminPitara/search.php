<?php
include 'include/constants.php';
include 'db_connection.php';

$term = $_POST['term'];
$page = $_POST['page'];

if($page == 'category') {
    
    $action = "edit_category_form.php";
    $name = "cat_id";
	$sql = "SELECT name,id FROM category_details WHERE name LIKE '%$term%' ";
}
else if($page == 'deal') {

    $action = "edit_deal_form.php";
    $name = "deal_id";
	$sql = "SELECT title,deal_id FROM product_deals WHERE title LIKE '%$term%' ";
}
else if($page == 'store') {
    
    $action = "edit_store_form.php";
    $name = "store_id";
	$sql = "SELECT name,id FROM store_details WHERE name LIKE '%$term%' ";
}
if(!$result = $mysqli->query($sql)) {

	die("There was an error running the query [' . $mysqli->error . ']");
}
echo "
<table class='table table-hover' id='sample-table-1'>
<thead>
<tr>
<th>Title/Name</th>
<th class='hidden-xs'>Action</th>
<th></th>
</tr>
</thead>
<tbody>";
while($row=$result->fetch_assoc()){ 
    if($page == "deal") {

    	$id = $row['deal_id'];
    	$title = $row['title'];
    }
    else {

    	$id = $row['id'];
    	$title = $row['name'];
    }
	echo "<tr>
	<td class='hidden-xs'>".$title."</td>
	<td>
	<form method='post' action='".$action."'> <input type='hidden' name='".$name."' value='".$id."' />
	<button class='btn btn-default'>EDIT</button>
	</form>
	</td>
	</tr>";

}
echo "
</tbody>
</table>
";
?>