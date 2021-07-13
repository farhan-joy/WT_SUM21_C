<?php
$db_server="local host";
$db_uname="root";
$db_pass="";
$db_name="wt_sum_c"



$conn= mysql_connect($db_server,$db_uname,$db_pass,$db_name);
if($conn){
	echo"connected<br>";
	$query ="insert into user values (NULL,'rahim','rahim34','ertet','sdsd')";
	if (!mysqli_query ($conn,$query)){
		echo mysqli_error($conn);
		//echo mysqli_errno($conn);
		
		
		
		
	}
	else{
		echo"inserted";
		
	}
	
	
	
}
?>