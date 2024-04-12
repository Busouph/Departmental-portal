<?php
    // session_start();
    require('includes/connection.php');
    
    // echo $ad['username'];
    // echo $ad['username'];
    if(isset($_POST['add_admin'])){
        $role=4;
        $username=addslashes($_POST['username']);
        $password=$_POST['password'];
        $vpassword=$_POST['vpassword'];

        $sql="SELECT * FROM users WHERE username=:username";
        $statement=$pdo->prepare($sql);
        $statement->bindParam(':username',$username);
        $statement->execute();
        // if($statement>rowCount()== 1){
        $ads=$statement->fetchAll(PDO::FETCH_ASSOC);
       if($ads[0]>0){
                echo '<script>alert("Username Already Exist");location.href="new_admin.php";</script>';
                
            }else{
        $sql="INSERT INTO users(username,password,role)VALUES(:username,:password,:role)";
        $statement=$pdo->prepare($sql);
        $statement->bindParam(":username",$username);
        $statement->bindParam(":password",$password);
        $statement->bindParam(":role",$role);
        try{
            $statement->execute();
            echo '<script>alert("Record Added");location.href="new_admin.php";</script>';
        }catch(Exception $e){
            echo $e->getMessage();
            echo '<script>alert("Record Not Added ");location.href="new_admin.php";</script>';
        }
    }
    
}

    include('includes/header.php');
?>
<style>
.content-container{
    width:100%;
    /* height:500px; */
	/* position: absolute; */
    /* border:1px solid #333; */
    margin-bottom:5%;
    margin-top:10px;;
}
.content-container .left{
	width:20%;
	position: absolute;
    /* border:1px solid #333; */
    height:500px;
}
.content-container .right{
	width:80%;
    margin-left:20%;
    position:static;
    /* float:right; */
    /* border:1px solid #333; */
    height:500px;
}
.content-container .left{
    color:;
    /* background:#eee; */
}
.content-container .left ul{
    margin:0;
    padding:0;
}
.content-container .left a{
    text-decoration:none;
    background:#17046d;
    display:block;
    width:85%;
    color:#fff;
    font-weight:bold;
    height:40px;
    padding-left:20px;
    padding-top:10px;
    margin-bottom:5px;
    margin-left:5px;
}
.content-container .left a:hover{
    background:#17046d;
    color:#333;
}
</style>

<div class="content-container">
    <div class="left">
        <!-- <ul>
            <li><a href="#">Add News</a></li>
            <li><a href="#">Add Staff</a></li>
            <li><a href="#">Add Student</a></li>
            <li><a href="#">Add Course</a></li>
            <li><a href="#">Bio Data</a></li>
            <li><a href="#">Upload Results</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
     -->
     <?php include('includes/admin_side_bar.php');?>
    </div>

    <!-- right -->
    <div class="right">
        <table>
        <form action="" method="post">
            <tr>
                <td border="1" colspan="2" align="center">Add New Admin</td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" require placeholder="Enter Username "></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="password" name="password" require ></td>
            </tr>
            <tr>
                <td> Verify password</td>
                <td><input type="password" name="vpassword" require ></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="add_admin" style="color:#fff; background:#17046d; width:100px; height:35px;">Add Admin</button></td>
            </tr>
            </form>
        </table>
    </div>
    <!-- right end -->

</div>


<?php 

    include('includes/footer.php')
?>

</body>
</html>