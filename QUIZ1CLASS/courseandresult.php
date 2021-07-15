<!--------PHP PART----->

<?php
	$course_id="";
	$err_course_id="";
	
	$semester="";
	$err_semester="";
	
	
	$hasError=false;
	
	
	

	
	
	
	
	if(isset($_POST["submit"])){
		
		if(!isset($_POST["course id"])){
			$hasError = true;
			$err_course_id="Course Id Required";
		}
		else{
			$course_id = $_POST["course id"];
		}
		if(empty($_POST["semester"])){
			$hasError = true;
			$err_semester="Semester Required";
		}
		else{
			$semester = $_POST["semester"];
		}
		
		
	}
	
?>



<!--------HTML PART---------->

<html>
	<head></head>
	<body>
		<form action="" method="post">
		<fieldset>
            <legend><h1>Courses And Result:</h1></legend>
			<table>
				<tr>
					<td align="right">Course Id: </td>
					<td><input type="number" name="id" placeholder="Course Id" value="<?php echo $course_id; ?>"> </td>
					<td><span> <?php echo $err_course_id;?> </span></td>
				</tr>
				<tr>
					<td align="right">Semester: </td>
					<td><input type="text" name="semester" placeholder="Semester" value="<?php echo $semester; ?>">  </td>
					<td><span> <?php echo $err_semester;?> </span></td>
				</tr>
				
				
				<tr>
					<td colspan="2" align="center"><input type="submit" name="submit" value="Enter"></td>
					
				</tr>
                
			</table>
			
		</fieldset>
		</form>
	</body>
</html>