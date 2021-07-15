<!--------PHP PART----->

<?php
	$eid="";
	$err_eid="";
	
	
	$sid="";
	$err_sid="";
	
	$cid="";
	$err_cid="";
	$address="";
	
	$location=[];
	$err_location="";
	
	
	$hasError=false;
	
	
	

	
	function locationExist($location){
		global $location;
		foreach($location as $l){
			if($l == $locate) return true;
		}
		return false;
	}
	
	
	if(isset($_POST["submit"])){
		if(empty($_POST["eid"])){
			$hasError = true;
			$err_eid="Eid Required";
		}
		else if(strlen($_POST["eid"]) <= 8){
			$hasError = true;
			$err_eid="Eid must contain >8 digit";
		}
		if(empty($_POST["sid"])){
			$hasError = true;
			$err_sid="Sid Required";
		}
		else if(strlen($_POST["Sid"]) <= 8){
			$hasError = true;
			$err_sid="Sid must contain >8 digit";
		}
		
		
		
		if (!isset($_POST["cid"])){
			$hasError = true;
			$err_cid="Cid Required";
		}
		else{
			$phone = $_POST["cid"];
		
		}
		
			
			
			
		
		
		if(!$hasError){
			echo "<h1>Form submitted</h1>";
			echo $_POST["eid"]."<br>";
			
			echo $_POST["sid"]."<br>";
			
		
			echo $_POST["cid"]."<br>";
			
			
			$arr = $_POST["location"];

			foreach($arr as $e){
				echo "$e<br>";
			}
		}
		
		
	}
	
?>



<!--------HTML PART---------->


<html>
	<head></head>
	<h1 align="center">Student Entry In the Course</h1>
	<body>
		<form action="<?php echo htmlspecialchars($string);?>" method="post">
		<fieldset>
			<table align="center">
				
				<tr>
					<td>Studentenrollmentid</td>
					<td>: <input type="number" name="id" placeholder="Studentenrollmentid">  </td>
					<td><span> <?php echo $err_sid;?> </span></td>
				</tr>
				
				
				<tr>
					<td>Studentid</td>
					<td>: <input type="number" name="id" placeholder="">Studentid</td>
					<td><span> <?php echo $err_sid;?> </span></td>
					
				</tr>
				
				
				
				
				<tr>
					<td>Courseid</td>
					<td>:<input  style="width:85px; border: 1px solid black" type="string" name="courseid" value="<?php echo $cid; ?>" placeholder="Code"><d>-</d><input style="width:94px; border: 1px solid black" type="number" name="number" value="<?php echo $eid; ?>" placeholder="number"> </td>
					<td><span> <?php echo $err_cid;?> </span></td>
				
				</tr>

				
				<tr>
					<td colspan="2" align="center"><input type="submit" name="insert" value="Insert"></td>
					
				</tr><br>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="delete" value="Delete"></td>
					
				</tr><br>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="update" value="Update"></td>
					
				</tr><br>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="clear" value="Clear"></td>
					
				</tr><br>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="showall" value="Show All"></td>
					
				</tr>
			</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>