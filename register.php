<?php
include('includes/header.php');
?>
<style>
    .form-container{
        width:100%;
        /* margin:0 auto; */
        padding:40px;
    }
    .form-container fieldset{
        width:60%;
        padding:5px;
    }
    .form-container table{
        padding:15px;
    }
    .form-container input[type=text]{
        width:100%;
        height:35px;
        margin-top:10px;
        margin-bottom:10px;
        
    }
.content-container{
    width:100%;
    /* height:500px; */
	/* position: absolute; */
    /* border:1px solid #333; */
    margin-bottom:5%;
    margin-top:10px;
    height:600px;
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
        <?php include('includes/admin_side_bar.php');?>
    </div>

    <!-- right -->
    <div class="right">
    <div class="form-container">
<form action="register_exec.php" method="post">
    <fieldset style="color:#17046d; border: 1px solid #17046d">
        <legend>Registration Form</legend>
        <table cellpadding="">
        <tr>
        <td>First Name:</td>
        <td><input type="text" name="fname" Placeholder="Enter Firstname" required></td>
        </tr>
        <tr>
        <td>Last Name:</td>
        <td><input type="text" name="lname" Placeholder="Enter Lastname" required></td>
        </tr>
        <tr>
        <td>Gender:</td>
        <td>
        Male <input type="radio" name="gender" value="male" checked> Female <input type="radio" name="gender" value="female">
        </td>
        </tr>
        <tr>
        <td>Admission No</td>
        <td><input type="text" name="admin" Placeholder="Enter Admission Number" required></td>
        </tr>
        <tr>
        <td>Level</td>
        <td><input type="text" name="level" Placeholder="Enter Level" required></td>
        </tr>
        <tr>
        <td>Email</td>
        <td><input type="text" name="email" Placeholder="Enter Email" required></td>
        </tr>
        <tr>
        <td>Phone</td>
        <td><input type="text" name="phone" Placeholder="Enter phone" required></td>
        </tr>
        <tr>
        <td>Address</td>
        <td><textarea name="address" id="" cols="22" rows="5"></textarea></td>
        </tr>
        <tr>
            <td colspan="2">
            <button type="submit" name="register" style="width:100px; height:35px; color:#fff; background:#17046d;">Register</button>

            </td>
        </tr>
    </table>
    </fieldset>
</form>
</div>
    </div>
    <!-- right end -->

</div>









<?php include('includes/footer.php');?>



