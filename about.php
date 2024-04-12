<?php
    require('includes/connection.php');
    $sql="SELECT * FROM head_line_tbl ORDER BY head_line DESC";
$stmt=$pdo->prepare($sql);
$stmt->execute();
$head_lines=$stmt->fetchAll(PDO::FETCH_ASSOC);

// fetch staff
$sql="SELECT * FROM `staffprofile` ";
$stmt=$pdo->prepare($sql);
$stmt->execute();
$staffs=$stmt->fetchAll(PDO::FETCH_ASSOC);


// fetch staff end
//fetch course

//100
$sql="SELECT * FROM courses WHERE level='100'";
$statement=$pdo->prepare($sql);
$statement->execute();
$course1s=$statement->fetchAll(PDO::FETCH_ASSOC);
//$css1=$course1s[0];
//200
$sql="SELECT * FROM courses WHERE level='200'";
$statement=$pdo->prepare($sql);
$statement->execute();
$course2s=$statement->fetchAll(PDO::FETCH_ASSOC);
//$css2=$course2s[0];
//300
$sql="SELECT * FROM courses WHERE level='300'";
$statement=$pdo->prepare($sql);
$statement->execute();
$course3s=$statement->fetchAll(PDO::FETCH_ASSOC);
//$css3=$course3s[0];
//400
$sql="SELECT * FROM courses WHERE level='400'";
$statement=$pdo->prepare($sql);
$statement->execute();
$course4s=$statement->fetchAll(PDO::FETCH_ASSOC);
//$css4=$course4s[0];
    
    
    
    


    include('includes/header.php');
?>
<div class="slider-img">
    <div class="welcome">
      <h1>Welcome To Computer Science Department</h1>
      <h4>Towards advance technology</h4>
    </div>
</div>
<div class="content">
  <div class="container1">
    <div class="about-section">
    <h2>Department of Computer Science ZAMSUT</h2>
    <p>The Department of Computer Science was established in 2007 with a view to providing qualitative education to prospective graduates of Computer Science disciplines.The programme is aimed at providing the graduates with necessary skills and competence to pursue higher degrees both within and outside the country as well as to complete favourable in employment of IT firms, industries,governmental and non-governmental organizations and parastals amid global challenge.</p>
    <br>
    <h2>Courses Offered By Computer science Students Zamsut</h2>
    <br>
    <table border="2" bordercolor="#17046d" style="border-collapse:collapse; margin:0 auto; width:100%;">
      <tr>
        <th colspan="4">Bsc computer science programme</th>
      </tr>
      <tr>
        <th colspan="4">100 Level</th>
      </tr>
      <tr>
        <th>
          #
        </th><th>
          Course Title
        </th>
        <th>
          Course Code
        </th>
        <th>
          Credit Units
        </th>
        <th>
          Course Type
        </th>
	      
        <th>
          Semester
        </th>
      </tr>
      <?php
        $i=1;
        
        foreach($course1s as $css1){
        
        ?>
        
        <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $css1['course_title'];?></td>    
            <td><?php echo $css1['course_code'];?></td>    
            <td><?php echo $css1['unit'];?></td>    
            <td><?php echo $css1['course_type'];?></td>    
            <td><?php echo $css1['semister'];?></td>    
        
        </tr>
<?php 
        $i++;
        }
        ?>
     

    </table>
    <!---- End Of 100 Level Courses-->
    <br>
    <table border="2" bordercolor="#17046d" style="border-collapse:collapse; margin-top:10px; margin:0 auto; width:100%;" >
        <tr>
            <th colspan="4">200 Level</th>
          </tr>
          <tr>
        <th>
          #
        </th><th>
          Course Title
        </th>
        <th>
          Course Code
        </th>
        <th>
          Credit Units
        </th>
        <th>
          Course Type
        </th>
	      
        <th>
          Semester
        </th>
      </tr>
      
          
 <?php
        $i=1;
        
        foreach($course2s as $css2){
        
        ?>
        
        <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $css2['course_title'];?></td>    
            <td><?php echo $css2['course_code'];?></td>    
            <td><?php echo $css2['unit'];?></td>    
            <td><?php echo $css2['course_type'];?></td>    
            <td><?php echo $css2['semister'];?></td>    
        
        </tr>
<?php 
        $i++;
        }
        ?>

    </table>
    <br>
    <table border="2" bordercolor="#17046d" style="border-collapse:collapse; margin:0 auto; width:100%;" >
        <tr>
            <th colspan="4">300 Level</th>
          </tr>
          <tr>
        <th>
          #
        </th><th>
          Course Title
        </th>
        <th>
          Course Code
        </th>
        <th>
          Credit Units
        </th>
        <th>
          Course Type
        </th>
	      
        <th>
          Semester
        </th>
      </tr>
      
        <?php
        $i=1;
        
        foreach($course3s as $css3){
        
        ?>
        
        <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $css3['course_title'];?></td>    
            <td><?php echo $css3['course_code'];?></td>    
            <td><?php echo $css3['unit'];?></td>    
            <td><?php echo $css3['course_type'];?></td>    
            <td><?php echo $css3['semister'];?></td>    
        
        </tr>
<?php 
        $i++;
        }
        ?>
    </table>
    <br>
    <table border="2" bordercolor="#17046d" style="border-collapse:collapse; margin:0 auto; width:100%;" >
        <tr>
            <th colspan="4">400 Level</th>
          </tr>
          <tr>
        <th>
          #
        </th><th>
          Course Title
        </th>
        <th>
          Course Code
        </th>
        <th>
          Credit Units
        </th>
        <th>
          Course Type
        </th>
	      
        <th>
          Semester
        </th>
      </tr>
      
          <?php
        $i=1;
        
        foreach($course4s as $css4){
        
        ?>
        
        <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $css4['course_title'];?></td>    
            <td><?php echo $css4['course_code'];?></td>    
            <td><?php echo $css4['unit'];?></td>    
            <td><?php echo $css4['course_type'];?></td>    
            <td><?php echo $css4['semister'];?></td>    
        
        </tr>
<?php 
        $i++;
        }
        ?> 
         
    </table>
    <br>
    <h2 id="about">  About Computer Science</h2>
    <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident doloribus deleniti molestiae nisi nemo illo delectus, asperiores consectetur dignissimos debitis natus deserunt iste commodi enim optio hic tenetur quisquam blanditiis!..</p>
    
    <h2>DEPARTMENTAL STAFF</h2>
    <div class="our-team">
    <table>
      <tr>
        <th>  SP/Number</th>
        <th>  Name</th>
        <th>  Category</th>
      </tr>
      <?php
        
        foreach($staffs as $staff){
      ?>
      <tr>
       
        <td><?php echo $staff['sp_num'];?></td>
        <td class="names"> <?php echo $staff['firstname']."  ". $staff['lastname'];?> </td>
        <td><?php echo $staff['category'];?></td>

      </tr>
      <?php
    
        }
      ?>

    </table>

    
    </div>
      </div>


    <div class="side">

          <!--Latest News Here-->
          <h2 class="card-header">Latest News </h2>
            <div id="news"  class="card-body">
            <?php 
                foreach($head_lines as $head_line){
                ?>
            <li>
                <?php echo $head_line['head_line'];?>
            </li>
                <?php }?>
            <!-- <li>First Batch Admission list is out.</li>
            <li>ASUU Suspends its Strike.</li>
            <li>First Semister Exam is Out!</li>
            <li>Matriculation Day Coming Up on 26th Mar 2024.</li> -->

          </div>
          <!-- Useful links here-->
          <div class="card">
              <h2 class="card-header">Useful links</h2>
              <div id="otherlinks" class="card-body">

              <li><a href="#">Zamsut main site</a></li>
              <li><a href="#">Students Forum</a></li>
              <li><a href="#">Sug Site</a></li>
              <li><a href="#">Zamsut Blog</a></li>

              </div>
          </div>
          <!-- location here-->

              <h2 class="card-header">Location</h2>
              <div class="card-body">

              <li>Location:Zamfara State University</li>
              <li>State: Zamfara State</li>
              <li>LGA: Talata Mafara</li>
              <li>PMB: 103.  </li>

              </div>


    </div>

  </div>
</div>
</div>
  </div>
  <!-- footer -->
<?php include('includes/footer.php');?>
  <!-- footer  end-->


  
</body>
</html>
