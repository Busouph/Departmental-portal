<?php 
 require('includes/connection.php');
 include('includes/header.php');
    $user_id=$_SESSION['user_id'];

$sql="SELECT * FROM `profile` WHERE userid=$user_id";
$stmt=$pdo->prepare($sql);
$stmt->execute();
$rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
$row=$rows[0];

$admin_no=$row['admission_num'];
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
        <?php 
     
     include('includes/student_side_bar.php');
     ?>
    </div>

    <!-- right -->
    <div class="right" >
        <div class="result-container" style="width:100%; margin:0 auto; ">
        <!-- First Semester result -->
        <?php
        //    for fetching first semester result
           $se=1;
            $sql="SELECT * FROM `student_result` WHERE admin_no=$admin_no and semester=$se ";
            $stmt=$pdo->prepare($sql);
            $stmt->execute();
            $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
        // for fetching second semester result
        $second=2;
            $sql="SELECT * FROM `student_result` WHERE admin_no=$admin_no and semester=$second ";
            $stmt=$pdo->prepare($sql);
            $stmt->execute();
            $results=$stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>

            <table border="1" style="width:70%; text-align:left; margin:0 auto; margin-bottom:10px;">
                <tr>
                    <td>Name:</td>
                    <td><?php echo $row['firstname']."  ".$row['lastname'];?></td>
                </tr>
                <tr>
                    <td>Admission No:</td>
                    <td><?php echo $row['admission_num'];?></td>
                </tr>
            
            </table>
            <table border="2" cellpadding="30" style="width:70%; text-align:center; margin:0 auto; ">
                <tr style="color:#fff; background:##17046d">
                <th colspan="5">FIRST SEMESTER RESULT</th>
                </tr>
                <tr>
                    <td>#</td>
                    <td>Course Code</td>
                    <td>Course Title</td>
                    <td>Unit</td>
                    <td>Grade</td>
                </tr>
                    <?php 
                    $i=1;
                    foreach($result as $r){

                    ?>
                <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $r['course_code'];?></td>
                <td><?php echo $r['course_title'];?></td>
                <td><?php echo $r['unit'];?></td>
                <td><?php echo $r['grade'];?></td>
                </tr>
                <?php
                $i++;
                    }
                ?>
            </table>
            <br>
            <!-- second Semester result -->
            <table border="2" cellpadding="30" style="width:70%; text-align:center; margin:0 auto; ">
                <tr style="color:#fff; background:#17046d">
                <th colspan="5">SECOND SEMESTER RESULT</th>
                </tr>
                <tr>
                    <td>#</td>
                    <td>Course Code</td>
                    <td>Course Title</td>
                    <td>Unit</td>
                    <td>Grade</td>
                </tr>
                <?php 
                    $i=1;
                    foreach($results as $res){

                    ?>
                <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $res['course_code'];?></td>
                <td><?php echo $res['course_title'];?></td>
                <td><?php echo $res['unit'];?></td>
                <td><?php echo $res['grade'];?></td>
                </tr>
                <?php
                $i++;
                    }?>
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