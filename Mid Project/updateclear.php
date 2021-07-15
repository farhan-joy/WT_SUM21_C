<!--------PHP PART----->

<?php
	include 'db_config.php';


	$teacher_name="";
	$err_teacher_name="";
	
	$tid="";
	$err_tid="";
	
	$teacher_qualification="";
	$err_teacher_qualification="";
	
	$teacher_per_address="";
	$err_teacher_per_address="";
	
	$teacher_pre_address="";
	$err_teacher_pre_address="";
	
	$teacher_blood_group="";
	$err_teacher_blood_group="";
	
   
	
	$teacher_religious="";
	$err_teacher_religious="";
	
    $hobbies=[];
	$err_hobbies="";
	
	 $teacher_extra_curriacti=[];
	$err_teacher_extra_curriacti="";
	
	$hasError=false;
	
	function hobbiesExist($hobbies){
		global $hobbies;
		foreach($hobbies as $h){
			if($h == $hobbies) return true;
		}
		return false;
	}
	if(isset($_POST["submit"])){
		if(empty($_POST["teacher_name"])){
			$hasError = true;
			$err_teacher_name="Teacher Name Required";
		}
		else{
			$teacher_name = $_POST["teacher_name"];
		}
	if(empty($_POST["tid"])){
			$hasError = true;
			$err_tid="Teacher Id Required";
		}
		else if(strlen($_POST["tid"]) <= 5){
			$hasError = true;
			$err_tid="Teacher Id Required must contain at least 6 digit";
		}
        else if(strpos($_POST["tid"], ' ') !== false){
            $err_tid= "Space found in Teacher Enrollment Id Required, Space is not allowed";
        }
		else{
			$tid = $_POST["tid"];
	
		}
		if(empty($_POST["teacher_qualification"])){
			$hasError = true;
			$err_teacher_qualification="Teacher Qualification Required";
		}
		else{
			$result = $_POST["teacher_qualification"];
		}
		if(!isset($_POST["hobbies"])){
			$hasError = true;
			$err_hobbies="Hobbies Required";
		}
		else{
			$wheres = $_POST["hobbies"];
		}
		if(empty($_POST["teacher_per_address"])){
			$hasError = true;
			$err_teacher_per_address = "Teacher Permanent Address Required";
		}
		else{
			$teacher_per_address = $_POST["teacher_per_address"];
		}
		if(empty($_POST["teacher_pre_address"])){
			$hasError = true;
			$err_teacher_pre_address = "Teacher Present Address Required";
		}
		else{
			$teacher_pre_address = $_POST["teacher_pre_address"];
		}
		
		if(empty($_POST["teacher_blood_group"])){
			$hasError = true;
			$err_teacher_blood_group = "Teacher Blood Group Required";
		}
		else{
			$teacher_blood_group = $_POST["teacher_blood_group"];
		}
		if(empty($_POST["teacher_religious"])){
			$hasError = true;
			$err_teacher_religious = "Teacher Religious Required";
		}
		else{
			$teacher_religious = $_POST["teacher_religious"];
		}
		if(empty($_POST["teacher_extra_curriacti"])){
			$hasError = true;
			$err_teacher_extra_curriacti = "Teacher Extra Curriculam Activities Required";
		}
		else{
			$teacher_extra_curriacti = $_POST["teacher_extra_curriacti"];
		}
		if(empty($_POST["teacher_religious"])){
			$hasError = true;
			$err_teacher_religious = "Teacher Religious Required";
		}
		else{
			$teacher_religious = $_POST["teacher_religious"];
		}
		
	}	
		
?>
<html>
	<head></head>
	<body>
	
		<form action="" method="post">
		<title>Teacher Add</title>
		<fieldset style="background-color:RebeccaPurple;">
            <h1 style="color:white;">Teacher Addding Information:</h1>
			<table  style="background-color: plum; border: 20px solid DarkSlateGray; box-shadow: 10px 10px grey;" align="center">
				<tr>
					<td align="right">Teacher Name: </td>
					<td><input type="text" name="teachername" placeholder="Teacher Name" value="<?php echo $teacher_name; ?>"> </td>
					<td><span> <?php echo $err_teacher_name;?> </span></td>
				</tr>
				<tr>
					<td align="right">Teacher Id: </td>
					<td><input type="text" name="tid" placeholder="Teacher Id" value="<?php echo $tid; ?>">  </td>
					<td><span> <?php echo $err_tid;?> </span></td>
				</tr>
				
				<tr>
					<td align="right">Teacher Qualification: </td>
					<td><input type="text" name="qualification" placeholder="Teacher Qualification" value="<?php echo $teacher_qualification; ?>">  </td>
					<td><span> <?php echo $err_teacher_qualification;?> </span></td>
				</tr>
				<tr>
					<td align="right">Teacher Present Address: </td>
					<td><input type="text" name="address" placeholder="Present Address" value="<?php echo $teacher_pre_address; ?>">  </td>
					<td><span> <?php echo $err_teacher_pre_address;?> </span></td>
				</tr>
				
				<tr>
					<td align="right">Teacher Permanent Address: </td>
					<td><input type="text" name="address" placeholder="Permanent Address" value="<?php echo $teacher_per_address; ?>">  </td>
					<td><span> <?php echo $err_teacher_per_address;?> </span></td>
				</tr>
				
				<tr>
					<td align="right">Teacher Blood Group: </td>
					<td><input type="text" name="group" placeholder="Blood Group" value="<?php echo $teacher_blood_group; ?>">  </td>
					<td><span> <?php echo $err_teacher_blood_group;?> </span></td>
				</tr>
				
				<tr>
					<td align="right">Religious: </td>
					<td><input type="text" name="religious" placeholder="Religious" value="<?php echo $teacher_religious; ?>">  </td>
					<td><span> <?php echo $err_teacher_religious;?> </span></td>
				</tr>
				
				
				
				<tr>
					<td align="right">Hobbies: </td>
					<td><input type="checkbox" name="hobbies[]" <?php if(hobbiesExist("Reading Book")) echo "checked";?> value="Reading Book"> Reading Book<br>
					<input type="checkbox" name="hobbies[]" <?php if(hobbiesExist("Singing Song")) echo "checked";?> value="Singing Song">Singing Song <br>
					<input type="checkbox" name="hobbies[]" <?php if(hobbiesExist("Travelling")) echo "checked";?> value="Travelling"> Travelling<br>
					<input type="checkbox" name="hobbies[]" <?php if(hobbiesExist("Cricket")) echo "checked";?> value="Cricket"> Cricket
					</td>
					<td><span> <?php echo $err_hobbies;?> </span></td>
				</tr>
				
				<tr>
					<td colspan="2" align="center"><input type="submit" name="submit" value="Add"><input type="submit" name="" value="Cancel"></td>
				</tr>
                
			</table>
			
		</fieldset>
		</form>
	</body>
</html>