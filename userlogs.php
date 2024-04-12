<?php 
    require('includes/connection.php');
    $sql="SELECT * FROM userlog ORDER BY username DESC LIMIT 15";
    $statement=$pdo->prepare($sql);
    $statement->execute();
    $userlogs=$statement->fetchAll(PDO::FETCH_ASSOC);


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
        <div class="user-logs" style="width:70%;">
            <table border="1" cellpadding="15px" style="width:100%; margin:20px;" >
                <tr style="color:#fff; background:#17046d">
                    <th>#</th>
                    <th>User ID</th>
                    <th>Username</th>
                    <th>Login Time</th>
                    <th>Logout</th>
                    

                </tr>
                <?php 
                $i=1;
                    foreach($userlogs as $userlog){

                    
                ?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $userlog['user_id'];?></td>
                    <td><?php echo $userlog['username'];?></td>
                    <td><?php echo $userlog['loginTime'];?></td>
                    <td><?php echo $userlog['logout'];?></td>
                    
                </tr>
                <?php
                $i++;
                    }
                ?>
            </table>
        </div>
    </div>
    <!-- right end -->

</div>


<?php 

    include('includes/footer.php')
?>

</body>
</html>