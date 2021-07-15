<?php 

session_start();
if(!isset($_SESSION["user"])){
    header("Location: login.php");
}

?>

<html>
<head></head>
<body>
    <h1>Welcome<?php echo $_SESSION["user"];?></h1>
    <a href = "change_pass.php">Change Password</a>

</body>
</html>