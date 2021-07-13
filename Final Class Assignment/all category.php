<?php include 'admin header.php'
include 'controllers/CategoryControllers.php'

$categories=getAllcategories();
echo "<pre>";
print r($categories);
echo"</pre>";

?>
<!-------all categories start----->


<div class="center">
<h3 class="text">All Categories</h3>
<table class="table table-striped">

<thead>
<th>S1#</th>
<th>Name</th>
<th>Product Count</th>
<th></th>
<th></th>
</thead>

<tbody>
<?php 
$i=1;
foreach ($categories as $c){
	echo"<tr>";
	echo"<td>".$c["name"]."</td>";
	echo'<td><a href=editcategory.php?id='.$c["id"]."class="btn btn -success">Edit</a></td>";
	echo '<td><a class="btn btn-danger">Delete</td>';
	echo"</tr>"
	$i++;
	
	
}
?>
</tbody>
</table>
</div>

<!-----All categories End---->
<?php include 'admin_footer.php';?>
