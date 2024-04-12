<?php
	@session_start();
	require("includes/connection.php");
	$userid = $_SESSION['user_id'];
	//unset($_SESSION);
	//$_SESSION['Logedin'] = false;
	date_default_timezone_set("Africa/lagos");
	
	$ldate=date('Y-m-d h:i:s',time () );
$sql="UPDATE userlog  SET logout ='$ldate' WHERE user_id='$userid' ORDER BY id DESC LIMIT 1";
$stmt=$pdo->prepare($sql);
$stmt->execute();

session_unset();
$_SESSION['Logedin'] = false;
	session_destroy();
	header("location:index.php");

?>