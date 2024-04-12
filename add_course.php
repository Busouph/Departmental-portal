<?php 
require('includes/connection.php');
if(isset($_POST['addcourse']))
{
	$pdo = prepareConnection();
	
	$coursetitle = $_POST['coursetitle'];
	$coursecode = $_POST['coursecode'];
	$unit = $_POST['unit'];
	$type = $_POST['type'];
	$semister = $_POST['semister'];
	$level = $_POST['level'];
    
	
	$sql = "INSERT INTO courses(course_title, course_code, unit, course_type, semister, level) values (:coursetitle, :coursecode, :unit, :type, :semister, :level)";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':coursetitle',$coursetitle);
	$stmt->bindParam(':coursecode',$coursecode);
	$stmt->bindParam(':unit',$unit);
	$stmt->bindParam(':type',$type);
	$stmt->bindParam(':semister',$semister);
	$stmt->bindParam(':level',$level);
	
try{
	$stmt->execute();
	echo '<script>alert("Course is Added Successfully");
		 location.href="admin_page.php";</script>';
 
}

	catch(Exception $e){
	echo $e->getMessage();
	
	echo '<script>alert("Course not Added Try again");
		 location.href="add_course.php";</script>';
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

.form-con{
    width:80%;

}
.form-con .input-group{
    width:100%;

}
.form-con .input-group input{
    width:100%;
    height:35px;

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
     
     include('includes/admin_side_bar.php');?>
    </div>

    <!-- right -->
    <div class="right">
    <div class="form-con">
    <form action="add_course.php" method="post">
    <div class="input-group">
      <label for="">Course Title</label><br>
      <input type="text" placeholder="Course Name" name="coursetitle" value="">
    </div>
    <div class="input-group">
      <label for="">Course Code</label><br>
      <input type="text" placeholder="Course Code" name="coursecode" value="">
    </div>
    <div class="input-group">
      <label for="">Unit</label><br>
      <input type="text" placeholder="unit" name="unit" value="">
    </div>
      <div class="input-group">
      <label for="">Type</label><br>
      <select name="type" id="" style="width:80%; height:35px;">
         <option value=""> - Select - </option>
          <option value="elective">Elective Course</option>
          <option value="core">Core Course</option>
      </select>
    </div>
     <div class="input-group">
      <label for="">Semister</label><br>
      <select name="semister" id="" style="width:80%; height:35px;">
         <option value=""> - Select -</option>
          <option value="1">First Semister</option>
          <option value="2">Second Semister</option>
      </select>
    </div>
    <div class="input-group">
      <label for="">level</label><br>
      <input type="text" placeholder="level" name="level" value="">
    </div>

    <div class="reg-submit-btn">
      <input type="submit" name="addcourse" value="Add Course" style="width:100px; height:35px; margin-top:5px; background:blue; color:#fff;">

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







