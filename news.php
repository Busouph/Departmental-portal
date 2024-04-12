<?php
    require('includes/connection.php');
    $sql="SELECT * FROM head_line_tbl ORDER BY head_line DESC";
    $stmt=$pdo->prepare($sql);
    $stmt->execute();
    $head_lines=$stmt->fetchAll(PDO::FETCH_ASSOC);

    $news_id=$_GET['newsid'];

    $sql="SELECT * FROM news WHERE id=$news_id";
    $stmt=$pdo->prepare($sql);
    $stmt->execute();
    $news=$stmt->fetchAll(PDO::FETCH_ASSOC);
    $new=$news[0];

    include('includes/header.php');
    ?>
    <!-- slider section -->
<div class="slider-img">
    <div class="welcome">
        <h1>Welcome To Computer Science Department</h1>
        <h4>the scientific study of Computer</h4>
    </div>
</div>

<!-- Slider section end -->

<!-- main-container -->
<div class="content">
  <div class="container1">
    <div class="about-section">




    <!-- Get in touch ---->
     <h2 id="get">News</h2>

           <div class="form-container1">
             
                <div class="news-container" style="background:#fff; padding:20px;">
                    <div class="new-head" style="background:#ccc; padding:20px;">
                    <h3><?php echo $new['news_head_line'];?></h3>
                        <h6>DATE/TIME: <?php echo $new['date_added'];?></h6>
                    </div>
                    <div class="news-body">
                        <p><?php echo $new['news_content'];?> </p>
                    </div>
                </div>             
           </div>



    </div>



    <div class="side">

          <!--Latest News Here-->
          <h2 class="card-header">Notice !! </h2>
            <div id="news"  class="card-body">
            <?php 
                foreach($head_lines as $head_line){
                ?>
            <li>
                <?php echo $head_line['head_line'];?>
            </li>
                <?php }?>
            <!-- <li>ASUU Suspends its Strike.</li>
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

              <li>Location:Kebbi State University of Science Aleiro</li>
              <li>State: Kebbi State</li>
              <li>LGA: Aleiro</li>
              <li>PMB: 103.  </li>

              </div>


    </div>

  </div>
</div>
  </div>
<!-- main-container end -->



<!-- footer -->
<?php include('includes/footer.php');?>
  <!-- footer end -->
  
  </body>
</html>