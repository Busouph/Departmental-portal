<?php
require('includes/connection.php');
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * FROM users WHERE username=:username and password=:password";
    $stmt=$pdo->prepare($sql);
    $stmt->bindParam(":username",$username);
    $stmt->bindParam(":password",$password);
    try{
        $stmt->execute();
		if($stmt->rowCount() == 1){
			$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $row = $rows[0];
          
			@session_start();
			$_SESSION['username'] = $username;
			$_SESSION['user_id'] = $rows[0]['user_id'];
            $_SESSION['role'] = $rows[0]['role'];
			$_SESSION['username'] = $rows[0]['username'];
			$_SESSION['password'] = md5($rows[0]['password']);
			//$_SESSION['status'] = md5($rows[0]['status']);
           $_SESSION['Logedin'] = true;
		   
		   $uip=$_SERVER['REMOTE_ADDR'];
		   date_default_timezone_set("Africa/lagos");
	
			$ldate=date('Y-m-d h:i:s',time () );
			$status=1;
			//id 	user_id 	username 	userip 	loginTime 	logout 	status
			$sql="INSERT INTO userlog(user_id,username,userip,loginTime,status)VALUES('".$_SESSION['user_id']."','".$_SESSION['username']."','$uip','$ldate','$status')";
			$stmt=$pdo->prepare($sql);
			$stmt->execute();
			

			if($rows[0]['role'] == 1){
				header('location:admin_page.php');
			}elseif($rows[0]['role'] == 2){ // if admin
				header('location:student_page.php');
			}elseif($rows[0]['role'] ==3){
				header('location:staff_page.php');
			}else{
				header('location:admin2_page.php');
			}
			
        }
    }
	catch(Exception $e){
        echo $e->getMessage();
		echo "<script>alert('Login Failed. Contact The Admin at ksusta@edu.ng'); location.href='index.html'; </script>";

	}


}

?>