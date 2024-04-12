<?php 
require('includes/connection.php');
if(isset($_POST['addstaff'])){
    $staff_name=$_POST['name'];
    $staff_category=$_POST['category'];
    $sql="INSERT INTO our_staff(staff_name,category)VALUES(:staff,:category)";
    $stmt=$pdo->prepare($sql);
    $stmt->bindParam(":staff",$staff_name);
    $stmt->bindParam(":category",$staff_category);
    try{
        $stmt->execute();
        echo'<script>alert("Staff added successfully ");location.href="admin_page.php";</script>';
    }
    catch(Execption $e){
        echo $e->getMessage();
        echo'<script>alert("Staff not added");location.href="add_staff.php";</script>';
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
    background:#ccc;
    color:#333;
}
.form-con {
    width:80%;
}
.form-con .input-group{
    width:100%;
}
.form-con .input-group input,select{
    width:70%;
    height:35px;
    margin-top:10px;
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
        <div class="form-con">
            <form action="" method="post">
                <div class="input-group">
                    <label for="">Name:</label><br>
                    <input type="text" name="name" Placeholder="Enter Full Name of staff ">
                </div>
                <div class="input-group">
                    <label for="">Category</label><br>
                    <select name="category" id="">
                        <option value="">- Select Category</option>
                        <option value="contract">Contract Staff</option>
                        <option value="tenure">Tenure Staff</option>
                        <option value="visiting">Visiting Staff</option>
                    </select>
                </div><br>
                <div class="input-group">
                    <button type="submit" name="addstaff" style="width:100px; height:35px; color:#fff; background:#17046d;">
                        Add Staff
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- right end -->

</div>


<?php 

    include('includes/footer.php')
?>

</body>
</html>