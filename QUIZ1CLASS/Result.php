
<?php
	$sn="";
	$sn_err="";
	$stn="";
	$stn_err="";
	$fn="";
	$fn_err="";
	$dob="";
	$dob_err="";
	$gender="";
	$gender_err="";
	$bangla="";
	$bangla_err="";
	$english="";
	$english_err="";
	$maths="";
	$maths_err="";
	$physics="";
	$physics_err="";
	$chemistry="";
	$chemistry_err="";
	$total="";
	$total_err="";
	$remark1=0;
	$remark2=0;
	$remark3=0;
	$remark4=0;
	$remark5=0;
	$count=0;
	$s="a";
	$gen='';
	$min=35;
	$max=100;
	$bang="";
	$bang_err="";
	$eng="";
	$eng_err="";
	$math="";
	$math_err="";
	$phy="";
	$phy_err="";
	$chem="";
	$chem_err="";

	if($gender=="Male"){
		$gen="S/o";
	}else if($gender=="Female"){
		$gen="D/o";
	}
	if($bangla<35){
		$remark1="<font color='red'>*</font>";
		$count++;
		$s=$s.' and '.$bang;
	}else if($Bangla>79){
		$remark1="<font color='green'>D</font>";
	}else{
		$remark1='-';
	}
	
	if($english<35){
		$remark2="<font color='red'>*</font>";
		$count++;
		$s=$s.' and '.$eng;
	}else if($english>79){
		$remark2="<font color='green'>D</font>";
	}else{
		$remark2='-';
	}

	if($maths<35){
		$remark3="<font color='red'>*</font>";
		$count++;
		$s=$s.' and '.$math;
	}else if($maths>79){
		$remark3="<font color='green'>D</font>";
	}else{
		$remark3='-';
	}

	if($physics<35){
		$remark4="<font color='red'>*</font>";
		$count++;
		$s=$s.' and '.$phy;
	}else if($physics>79){
		$remark4="<font color='green'>D</font>";
	}else{
		$remark4='-';
	}
	
	if($chemistry<35){
		$remark5="<font color='red'>*</font>";
		$count++;
		$s=$s.' and '.$chem;
	}else if($chemistry>79){
		$remark5="<font color='green'>D</font>";
	}else{
		$remark5='-';
	}

	$s=str_replace('a and', '', $s);
	if($count>2){
		$s="Fail";
	}else if($count==0){
		$s="Pass";
	}else if($count<=2){
		$s="Compartment in ".' '.$s;
	}
?>
<html>
<center>
	<table border=1>
		<tr>
		<td>
			<table  width=100%>
			<tr>
				<td>
					<img src='AIS.png' width=120 height=120>
				</td>
				<td>
					<b><font size='5'>AMERICAN INTERNATIONAL SCHOOL</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><br><br>
					<font size='4' color='grey'><b><?php  echo "$sn"; ?></b></font>
				</td>
			</tr>
			</table>
		</td>
		</tr>
		<tr>
		<td>
			<table width=100%>
				<tr><td><font size='4'><?php echo "$stn"; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$gen";?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo" Mr.$fn";?></font></td></tr>
				<tr><td><font size='4'><?php echo "$dob"?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo"$gender";?></font></td></tr>
			</table>
		</td>
		</tr>
		<tr>
		<td>
			<table border=1 width=100%>
				<tr><th><i>Subject code</i></th><th><i>Subject name</i></th><th><i>Min marks</i></th><th><i>Max marks</i></th><th><i>Marks obtained</i></th><th><i>Remark</i></th></tr>
				<tr><td>101</td><td>Data Structures</td><td>35</td><td>100</td><td><?php echo "$bang_err"; ?></td><td><?php echo "$remark1"; ?></td></tr>
				<tr><td>102</td><td>Engineering Ethics</td><td>35</td><td>100</td><td><?php echo "$english"; ?></td><td><?php echo "$remark2"; ?></td></tr>
				<tr><td>103</td><td>Digital Signal Processing</td><td>35</td><td>100</td><td><?php echo "$maths"; ?></td><td><?php echo "$remark3"; ?></td></tr>
				<tr><td>104</td><td>Combinatorial Algorithms</td><td>35</td><td>100</td><td><?php echo "$physics"; ?></td><td><?php echo "$remark4"; ?></td></tr>
				<tr><td>105</td><td>Web Techologies</td><td>35</td><td>100</td><td><?php echo "$chemistry"; ?></td><td><?php echo "$remark5"; ?></td></tr>
				<tr>
			</table>
		</td>
		</tr>

		<tr>
		<td>
			<table>
				<tr><td><b><font size='4'>Result:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$s"; ?></font></b></td></tr>
			</table>
		</td>
		</tr>
	</table>
</center>

</html>