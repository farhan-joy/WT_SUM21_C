<!--------PHP PART----->

<?php
	$sid="";
	$err_sid="";
	
	$class="";
	$err_class="";
	
	$year="";
	$err_year="";
	
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
	
	
	if(isset($_POST["sid"])){
		
		if(!isset($_POST["sid"])){
			$hasError = true;
			$err_sid="Sid Required";
		}
		else{
			$gender = $_POST["sid"];
		}
		if(!isset($_POST["location"])){
			$hasError = true;
			$err_location="Location Required";
		}
		else{
			$location = $_POST["location"];
		}
		if (!isset($_POST["class"])){
			$hasError = true;
			$err_class="Class Required";
		}
		else{
			$sid = $_POST["class"];
		}
		if (!isset($_POST["year"])){
			$hasError = true;
			$err_year="Year Required";
		}
		else{
			$result = $_POST["year"];
		}
		
		
			
			
			
		
		
		if(!$hasError){
			echo "<h1>Form submitted</h1>";
			echo $_POST["curret password"]."<br>";
			echo $_POST["new password"]."<br>";
			echo $_POST["year"]."<br>";
			
		
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
	<h1 align="center">Stdent's Grade Reports By Class And Year :</h1>
	<body>
		<form action="<?php echo htmlspecialchars($string);?>" method="post">
		<fieldset>
			<table align="center">
				<tr>
					<td colspan="2" align="center"><input type="submit" name="enter" value="Enter"></td>
					
				</tr>
					
			</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>