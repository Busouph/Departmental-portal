<?php
include('includes/header.php');
?>
<style>
    .form-container{
        width:100%;
        margin:0 auto;
        padding:40px;
    }
    .form-container fieldset{
        width:80%;
        padding:20px;
    }
    .form-container table{
        padding:15px;
    }
</style>




<div class="form-container">
<form action="login_exec.php" method="post">
    <fieldset>
        <legend>Login Form</legend>
        <table cellpadding="">
        <tr>
        <td>Username:</td>
        <td><input type="text" name="username" Placeholder="Enter Username" required></td>
        </tr>
        <tr>
        <td>Password:</td>
        <td><input type="password" name="password" Placeholder="********" required></td>
        </tr>
        <tr>
            <td colspan="2">
                <center> <button type="submit" name="login">Login</button> </center>

            </td>
        </tr>
    </table>
    </fieldset>
</form>
</div>







<?php include('includes/footer.php');?>