<?php 

// session_start();
require_once('includes/connection.php');
    include('includes/header.php');
    $userid=$_SESSION['user_id'];
    // var_dump($userid);
    // exit;
    // for Side bar sselection
    $sql="SELECT * FROM users WHERE user_id=$userid";
    $statement=$pdo->prepare($sql);
    $statement->execute();
    $datas=$statement->fetchAll(PDO::FETCH_ASSOC);
    $data=$datas[0];
    
    if(isset($_POST['change_pass'])){
        $oldpass=$_POST['oldpass'];
        $newpass=$_POST['newpass'];
        $vpass=$_POST['vpass'];
        if($data['password']==$oldpass AND $newpass === $vpass) {

            $sql="UPDATE users SET password='$newpass' WHERE user_id=$userid";
            $stmt=$pdo->prepare($sql);
            $stmt->execute();
            echo'Password Updated';
        }else{
            echo 'password Not Updated';
        }



    }

    if(isset($_POST['update_profile'])){

    }

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
    background:#ccc;
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
     <?php
     if($data['role']==1){
        include('includes/admin_side_bar.php');
        
     }elseif($data['role']==3){
        include('includes/staff_bar.php');
     }elseif($data['role']==4){
         include('includes/admin2_ber.php');
     }
     else{
        include_once('includes/student_side_bar.php');
     }
    ?>
    </div>

    <!-- right -->
    <div class="right">
        <div class="profile-con">

            
            <?php 
            
            if($data['role']==1){
               ?> 
                
                <form action="" method="post">
            <table>
            <tr>
                <th colspan="2">Update Password</th>
            </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" value="<?php echo $data['username'];?>"></td>
                </tr>
                <tr>
                    <td>Old Password:</td>
                    <td><input type="password" require name="oldpass" value=""></td>
                </tr>
                <tr>
                    <td>New Password:</td>
                    <td><input type="password" require name="newpass" value=""></td>
                </tr>
                <tr>
                    <td>Verify Password:</td>
                    <td><input type="password" require name="vpass" value=""></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="change_pass" value="Change Password"></td>
                </tr>
            </table>
            </form>
                <?php
                
            }elseif($data['role']==4){
                ?> 
                 
                 <form action="" method="post">
             <table>
             <tr>
                 <th colspan="2">Update Password</th>
             </tr>
                 <tr>
                     <td>Username:</td>
                     <td><input type="text" name="username" value="<?php echo $data['username'];?>"></td>
                 </tr>
                 <tr>
                     <td>Old Password:</td>
                     <td><input type="password" require name="oldpass" value=""></td>
                 </tr>
                 <tr>
                     <td>New Password:</td>
                     <td><input type="password" require name="newpass" value=""></td>
                 </tr>
                 <tr>
                     <td>Verify Password:</td>
                     <td><input type="password" require name="vpass" value=""></td>
                 </tr>
                 <tr>
                     <td colspan="2"><input type="submit" name="change_pass" value="Change Password"></td>
                 </tr>
             </table>
             </form>
                 <?php
                 
             }
            elseif($data['role']==2){
                // for fetching user data
                $sql="SELECT * FROM profile WHERE userid=$userid";
                $statement=$pdo->prepare($sql);
                $statement->execute();
                $pros=$statement->fetchAll(PDO::FETCH_ASSOC);
                $pro=$pros[0];
                ?>
                <form action="" method="post">
                    <table>
                        <tr>
                            <th colspan="2">Personal Info</th>
                            
                        </tr>
                        <tr>
                            <td>First Name:</td>
                            <td><input type="text" name="fname" disabled value="<?php echo $pro['firstname'];?>"></td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td><input type="text" name="lname"disabled  value="<?php echo $pro['lastname'];?>"></td>
                        </tr>
                        <tr>
                            <td>Addmission Number</td>
                            <td><input type="text" disabled name="admin" value="<?php echo $pro['admission_num'];?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" value="<?php echo $pro['email'];?>"></td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td><input type="text" name="phone" value="<?php echo $pro['phone'];?>"></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><input type="text" name="address" value="<?php echo $pro['address'];?>"></td>
                        </tr>
                        <tr>
                            <td><button type="submit" name="update_profile">Update</button></td>
                        </tr>
                    </table>
                </form>
                <hr>

                <form action="" method="post">
            <table>
            <tr>
                <th colspan="2">Update Password</th>
            </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" value="<?php echo $data['username'];?>"></td>
                </tr>
                <tr>
                    <td>Old Password:</td>
                    <td><input type="password" name="oldpass" value=""></td>
                </tr>
                <tr>
                    <td>New Password:</td>
                    <td><input type="password" name="newpass" value=""></td>
                </tr>
                <tr>
                    <td>Verify Password:</td>
                    <td><input type="password" name="vpass" value=""></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit" name="change_pass">Change Password</button></td>
                </tr>
            </table>
            </form>
<?php
            }else{
                $sql="SELECT * FROM staffprofile WHERE userid=$userid";
                $statement=$pdo->prepare($sql);
                $statement->execute();
                $staffs=$statement->fetchAll(PDO::FETCH_ASSOC);
                $staff=$staffs[0];
                ?>
               
            
                <form action="" method="post">
                    <table>
                        <tr>
                            <th colspan="2">Staff Personal Info</th>
                            
                        </tr>
                        <tr>
                            <td>First Name:</td>
                            <td><input type="text" name="fname" disabled value="<?php echo $staff['firstname'];?>"></td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td><input type="text" name="lname"disabled  value="<?php echo $staff['lastname'];?>"></td>
                        </tr>
                        <tr>
                            <td>SP Number</td>
                            <td><input type="text" disabled name="admin" value="<?php echo $staff['sp_num'];?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" value="<?php echo $staff['email'];?>"></td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td><input type="text" name="phone" value="<?php echo $staff['phone'];?>"></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><input type="text" name="address" value="<?php echo $staff['address'];?>"></td>
                        </tr>
                        <tr>
                            <td><button type="submit" name="update_profile">Update</button></td>
                        </tr>
                    </table>
                </form>
                <hr>

                <form action="" method="post">
            <table>
            <tr>
                <th colspan="2">Update Password</th>
            </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" value="<?php echo $data['username'];?>"></td>
                </tr>
                <tr>
                    <td>Old Password:</td>
                    <td><input type="password" name="oldpass" value=""></td>
                </tr>
                <tr>
                    <td>New Password:</td>
                    <td><input type="password" name="newpass" value=""></td>
                </tr>
                <tr>
                    <td>Verify Password:</td>
                    <td><input type="password" name="vpass" value=""></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit" name="change_pass">Change Password</button></td>
                </tr>
            </table>
            </form>


<?php

            }
          
            ?>
        </div>
    </div>
    <!-- right end -->

</div>


<?php 

    include('includes/footer.php')
?>

</body>
</html>