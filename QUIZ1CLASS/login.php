<!--------PHP PART----->

<?php
	$username="";
	$err_username="";
	$password="";
	$err_password="";
	
	
	$hasError=false;
	
	if(isset($_POST["submit"])){
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		else if(strlen($_POST["name"]) <= 6){
			$hasError = true;
			$err_name="Name must contain >6 character";
		}
		if(empty($_POST["password"])){
			$hasError = true;
			$err_name="Password Required";
		}
		else if(strlen($_POST["Password"]) <= 8){
			$hasError = true;
			$err_name="Password must contain >8 character";
		}
			
			
			if(!$hasError){
			echo "<h1>Form submitted</h1>";
			echo $_POST["name"]."<br>";
			
			echo $_POST["password"]."<br>";
			
		
	
			
			
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
	<h1 align="center">LOG IN HERE</h1>
	<body>
	
		<fieldset>
			<table align="center">
				
				<tr>
					<td>Username</td>
					<td>: <input type="text" name="username" placeholder="Username">  </td>
					<td><span> <?php echo $err_username;?> </span></td>
				</tr>
				
				
				<tr>
					<td>Password</td>
					<td>: <input type="password" name="password" placeholder="Password">  </td>
					<td><span> <?php echo $err_password;?> </span></td>
					
				</tr>

				
			</table>
			<form action="http://localhost/WT_MID/QUIZ1CLASS/StudentDetails.php" method="">
		<button style="align:right" type="submit">LogIn</button>
		</form>
			
			
		</fieldset>
		</form>
		
		
		
		
		
	</body>
</html>