<!--------PHP PART----->

<?php

	$current_password="";
	$err_current_password="";
	
	$new_password="";
	$err_new_password="";
	
	$confirm_new_password="";
	$err_confirm_new_password="";

	$hasError=false;
	
	
if(isset($_POST["submit"])){
		
		if(empty($_POST["current password"])){
			$hasError = true;
			$err_current_password="Current Password Required";
		}
		else if(strlen($_POST["current password"]) <= 7){
			$hasError = true;
			$err_current_password="CurrentPassword must contain at least 8 character";   
		}
		else if(strpos($_POST["current password"], '#') == false || strpos($_POST["current password"], "?") == false){
            $err_current_password= "Current Password must contain at least 8 character,one # character and one ? character";
		}
		else{
			$upper = 0;
			$lower = 0;
			$number = 0;
			$arr = str_split($_POST["current password"]);
			foreach($arr as $a){
				if($a >= 'A' && $a <= 'Z')
					$upper++;
				else if($a >= 'a' && $a <= 'z')
					$lower++;
				else if ($a >= 0)
					$number++;
			}
			if($upper >= 1 && $lower >= 1 && $number >= 1){
				$current_password = $_POST["current password"];
			}
			else{
				$err_current_password= "Current Password must contain at least 8 character, 1 special character(# or ?),1 number and combination of uppercase and lowercase alphabet";
			}
		}
		
		
		if(empty($_POST["new password"])){
			$hasError = true;
			$err_new_password="New Password Required";
		}
		else if(strlen($_POST["new password"]) <= 7){
			$hasError = true;
			$err_new_password="New Password must contain at least 8 character";   
		}
		else if(strpos($_POST["new password"], '#') == false || strpos($_POST["new password"], "?") == false){
            $err_new_password= "New Password must contain at least 8 character,one # character and one ? character";
		}
		else{
			$upper = 0;
			$lower = 0;
			$number = 0;
			$arr = str_split($_POST["new password"]);
			foreach($arr as $a){
				if($a >= 'A' && $a <= 'Z')
					$upper++;
				else if($a >= 'a' && $a <= 'z')
					$lower++;
				else if ($a >= 0)
					$number++;
			}
			if($upper >= 1 && $lower >= 1 && $number >= 1){
				$new_password = $_POST["new password"];
			}
			else{
				$err_new_password= "New Password must contain at least 8 character, 1 special character(# or ?),1 number and combination of uppercase and lowercase alphabet";
			}
		}
		
		
		
		
		
		if(empty($_POST["confirm new password"])){
			$hasError = true;
			$err_confirm_new_password="confirm new password Required";
		}
        else if($_POST["confirm new password"] !== $_POST["confirm new password"]){
            $hasError = true;
			$err_confirm_new_password="new password and confirm new password not match";
        }
        else{
            $confirm_new_password=$_POST["confirm new password"];
        }
		
}
?>



<!--------HTML PART---------->


<html>
	<head></head>
	<body>
		<form action="" method="post">
		<fieldset>
		<legend><h1>Password Changes</h1></legend>
			<table>
				<tr>
					<td>Current Password</td>
					<td>: <input type="password" name="password" value="<?php echo $current_password; ?>" placeholder="Current Password"> </td>
					<td><span> <?php echo $err_current_password;?> </span></td>
				</tr>
				
				<tr>
					<td>New Password</td>
					<td>: <input type="password" name="password" value="<?php echo $new_password; ?>" placeholder="New Password"> </td>
					<td><span> <?php echo $err_new_password;?> </span></td>
				</tr>
				
				<tr>
					<td>Confirm New Password</td>
					<td>: <input type="password" name="password" value="<?php echo $confirm_new_password; ?>" placeholder="Confirm New Password"> </td>
					<td><span> <?php echo $err_confirm_new_password;?> </span></td>
				</tr>
				
				
				<tr>
					<td colspan="2" align="center"><input type="submit" name="SUBMIT" value="Enter"></td>
					
				</tr>
					
			</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>