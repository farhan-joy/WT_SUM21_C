<!--------PHP PART----->

<?php
	$name="";
	$err_name="";
	$username="";
	$err_username="";
	$password="";
	$err_password="";
	$confirm_password="";
	$err_confirm_password="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
	$address="";
	$err_address="";
	$gender="";
	$err_gender="";
	$birth_date="";
	$err_birth_date="";
	$location=[];
	$err_location="";
	$bio="";
	$err_bio="";
	
	$hasError=false;
	
	$array= array("1","2","3","4","5","6","7","8","9","10","11","12","13",
	"14","14","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31");
	

	//$array=array("2001","2002","2003");
	
	function locationExist($location){
		global $location;
		foreach($location as $l){
			if($l == $locate) return true;
		}
		return false;
	}
	
	
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
		
		else{
			$name = $_POST["name"];
		}
		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender="Gender Required";
		}
		else{
			$gender = $_POST["gender"];
		}
		if(!isset($_POST["location"])){
			$hasError = true;
			$err_location="Location Required";
		}
		else{
			$location = $_POST["location"];
		}
		if (!isset($_POST["birth_date"])){
			$hasError = true;
			$err_birth_date="Birth_Date Required";
		}
		else{
			$birth_date = $_POST["birth_date"];
		}
		
		if (!isset($_POST["phone"])){
			$hasError = true;
			$err_phone="Phone Required";
		}
		else{
			$phone = $_POST["phone"];
		
		}
		if (!isset($_POST["address"])){
			$hasError = true;
			$err_address="Address Required";
		}
		else{
			$address = $_POST["address"];
		}
		
		if(empty($_POST["bio"])){
			$hasError = true;
			$err_bio = "Bio Required";
		}
		else{
			$bio = $_POST["bio"];
		}
		
			
			
			
		
		
		if(!$hasError){
			echo "<h1>Form submitted</h1>";
			echo $_POST["name"]."<br>";
			echo $_POST["username"]."<br>";
			echo $_POST["password"]."<br>";
			echo $_POST["confirm password"]."<br>";
			echo $_POST["email"]."<br>";
			echo $_POST["phone"]."<br>";
			echo $_POST["address"]."<br>";
			echo $_POST["gender"]."<br>";
			echo $_POST["birth date"]."<br>";
			echo $_POST["bio"]."<br>";
			
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
	<h1 align="center">Club Member Registration</h1>
	<body>
		<form action="<?php echo htmlspecialchars($string);?>" method="post">
		<fieldset>
			<table align="center">
				<tr>
					<td>Name</td>
					<td>: <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Your name ...."> </td>
					<td><span> <?php echo $err_name;?> </span></td>
				</tr>
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
				
				<tr>
					<td>Confirm Password</td>
					<td>: <input type="password" name="confirm password" placeholder="Confirm Password">  </td>
					<td><span> <?php echo $err_confirm_password;?> </span></td>
				</tr>
				
				<tr>
					<td>Email</td>
					<td>: <input type="text" name="email" placeholder="Email">  </td>
					<td><span> <?php echo $err_email;?> </span></td>
				</tr>
				<tr>
					<td>Phone</td>
					<td>:<input  style="width:85px; border: 1px solid black" type="string" name="code" value="<?php echo $phone; ?>" placeholder="Code"><d>-</d><input style="width:94px; border: 1px solid black" type="number" name="number" value="<?php echo $phone; ?>" placeholder="number"> </td>
					<td><span> <?php echo $err_phone;?> </span></td>
				
				</tr>
				<tr>
				
					<td>Address</td>
					<td>: <input type="text" name="address" placeholder=" Street Address">  </td>
					<td><span> <?php echo $err_address;?> </span></td>
					
					<tr>
					<td></td>
					<td><input  style="width:85px; border: 1px solid black" type="text" name="name" value="<?php echo $name; ?>" placeholder="City"><d>-</d><input style="width:94px; border: 1px solid black" type="text" name="name" value="<?php echo $name; ?>" placeholder="State"> </td>
					<td><span> <?php echo $err_name;?> </span></td>
				</tr>
				
			
					<tr>
					<td></td>
					<td><input type="number" name="number" value="<?php echo $name; ?>" placeholder="Postal Code"></td>
					<td><span> <?php echo $err_name;?> </span></td>
				</tr>
				
					
					
				
					
					
					
				</tr>
				
				
				<tr>
					<td>Gender</td>
					<td>: <input type="radio" value="Male" <?php if($gender=="Male") echo "checked"; ?> name="gender"> Male <input name="gender" <?php if($gender=="Female") echo "checked"; ?> value="Female" type="radio"> Female </td>
					<td><span> <?php echo $err_gender;?> </span></td>
				</tr>
				<tr>
					<td>Birth Date</td>
					<td>: <select name="birth date">
						<option disabled selected>Day</option>
						<?php
							foreach($array as $p){
								if($p == $birth_date) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}
						?>
						</td>
						<td >
						<select style="width:80px; border: 1px solid black" name="birth date">
						<option disabled selected>Month</option>
						<?php
						
						
							foreach($array as $p){
								if($p == $birth_date) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}
						?>
						</select>
						</td>
						
						</td>
						<td>
						<select name="birth date">
						<option disabled selected>Year</option>
						<?php
						$array=array("1991","1992","1993","1994","1995","1996","1997","1998","1999","2000","2001","2002","2003","2004","2005","2006","2007","2008","2009","2010");
							foreach($array as $q){
								if($q == $birth_date) 
									echo "<option selected>$q</option>";
								else
									echo "<option>$q</option>";
							}
						?>
						</select>
						</td>
						
						
						
					
					<td><span> <?php echo $err_birth_date;?> </span></td>
				</tr>
				<tr>
					<td>Where did you hear about us ?</td>
					<td>
					
					<input type="checkbox" name="location[]" <?php if(locationExist("A Friend Of Colleague")) echo "checked";?> value="A Friend Of Colleague"> A Friend Of Colleague<br> 
					<input type="checkbox" name="location[]" <?php if(locationExist("Google")) echo "checked";?> value="Google"> Google<br>
					<input type="checkbox" name="location[]" <?php if(locationExist("Blog Post")) echo "checked";?> value="Blog Post"> Blog Post<br>
					<input type="checkbox" name="location[]" <?php if(("News Article")) echo "checked";?> value="News Article"> News Article
					
					</td>
					<td><span> <?php echo $err_location;?> </span></td>
				</tr>
				<tr>
					<td>Bio</td>
					<td>: <textarea name="bio" ><?php echo $bio; ?></textarea>
					<td><span> <?php echo $err_bio;?> </span></td>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="register" value="Register"></td>
					
				</tr>
			</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>