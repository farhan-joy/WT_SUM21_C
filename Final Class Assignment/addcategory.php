<?php include 'admin_header.php';
include 'controller/CategoryController.php';
?>

<div class="center";>
<form action="" method="post" class="form=horizontal form-material">
<div class="form-group">
<h4 class="text">Name:</h4>
<input type="text" name="name" class="form-control"|>
</div>

<div class=" form-group text-center">

<input type="submit" name="add_category" class="btn btn-success" value="Add category" class="form-control">
</div>

</form>
</div>

<?php include 'admin_footer.php';?>


