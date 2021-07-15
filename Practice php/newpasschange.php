<!--------PHP PART----->

<?php
    session_start();
	$current_password="";
	$err_current_password="";
	
	$new_password="";
	$err_new_password="";
	
	$confirm_new_password="";
	$err_confirm_new_password="";

	$hasError=false;
	
	
if(isset($_POST["submit"])){
		
		if(empty($_POST["currentpassword"])){
			$hasError = true;
			$err_current_password="Current Password Required";
		}
		else if(strlen($_POST["currentpassword"]) <= 7){
			$hasError = true;
			$err_current_password="Current Password must contain at least 8 character";   
		}
		else if(strpos($_POST["currentpassword"], '#') == false || strpos($_POST["currentpassword"], "?") == false){
            $err_current_password= "Current Password must contain at least 8 character,one # character and one ? character";
		}
		else{
			$upper = 0;
			$lower = 0;
			$number = 0;
			$arr = str_split($_POST["currentpassword"]);
			foreach($arr as $a){
				if($a >= 'A' && $a <= 'Z')
					$upper++;
				else if($a >= 'a' && $a <= 'z')
					$lower++;
				else if ($a >= 0)
					$number++;
			}
			if($upper >= 1 && $lower >= 1 && $number >= 1){
				$current_password = $_POST["currentpassword"];
			}
			else{
				$err_current_password= "Current Password must contain at least 8 character, 1 special character(# or ?),1 number and combination of uppercase and lowercase alphabet";
			}
		}
		
		
		if(empty($_POST["newpassword"])){
			$hasError = true;
			$err_new_password="New Password Required";
		}
		else if(strlen($_POST["newpassword"]) <= 7){
			$hasError = true;
			$err_new_password="New Password must contain at least 8 character";   
		}
		else if(strpos($_POST["newpassword"], '#') == false || strpos($_POST["newpassword"], "?") == false){
            $err_new_password= "New Password must contain at least 8 character,one # character and one ? character";
		}
		else{
			$upper = 0;
			$lower = 0;
			$number = 0;
			$arr = str_split($_POST["newpassword"]);
			foreach($arr as $a){
				if($a >= 'A' && $a <= 'Z')
					$upper++;
				else if($a >= 'a' && $a <= 'z')
					$lower++;
				else if ($a >= 0)
					$number++;
			}
			if($upper >= 1 && $lower >= 1 && $number >= 1){
				$new_password = $_POST["newpassword"];
			}
			else{
				$err_new_password= "New Password must contain at least 8 character, 1 special character(# or ?),1 number and combination of uppercase and lowercase alphabet";
			}
		}
		
		
		
		
		
		if(empty($_POST["confirmnewpassword"])){
			$hasError = true;
			$err_confirm_new_password="Confirm new password Required";
		}
        else if($_POST["confirmnewpassword"] !== $_POST["confirmnewpassword"]){
            $hasError = true;
			$err_confirm_new_password="new password and confirm new password not match";
        }
        else{
            $confirm_new_password=$_POST["confirmnewpassword"];
        }
		
		if (!$hasError){
		foreach($users as $u=>$p){
			if($uname == $u && $pass == $p){
				setcookie("loggeduser",$uname,time ()+120,"/");
				$_SESSION["loggeduser"] = $uname;
				header("Location: dashboard.php");
				
			}
			
		}
		echo "Ïnvalid User";
	}
		
		
		
}
?>



<!--------HTML PART---------->


<html>
	<head>
	<style>
	

div {
	

  background-color: lightgrey;
  width: 600px;
  border: 10px solid indigo;
  padding: 15px;
  margin: 10px;
}
</style></head>
	<body>
	
		<form action="" method="post">
		<fieldset style="background-image: url('portal.jpg');">
		
	
		<title>Password Changes</title>
		
		<h1 style="color:white;">Password Changes:</h1>
			<table align="center">
			
				
				
					<div align="center">
					Current Password:<input type="password" name="currentpassword" value="<?php echo $current_password; ?>" placeholder="Current Password">
					<span> <?php echo $err_current_password;?> </span>	</div>
				
				
		
					<tr>
					<div align="center">
					New Password        : <input type="password" name="newpassword" value="<?php echo $new_password; ?>" placeholder="New Password"> </td>
					<span> <?php echo $err_new_password;?> </span></div>
					
					</tr>
				<tr>
				
					<div align="center">Confirm New Password
					: <input type="password" name="confirmnewpassword" value="<?php echo $confirm_new_password; ?>" placeholder="Confirm New Password">
					<span> <?php echo $err_confirm_new_password;?> </span></div>
				</tr>
		         <tr>
					<td colspan="2" align="right"><input type="submit" name="submit" value="Enter"></td>
					
				</tr>
					
			</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>