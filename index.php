<?php 
require('includes/connection.php');
$sql="SELECT * FROM head_line_tbl ORDER BY head_line DESC";
$stmt=$pdo->prepare($sql);
$stmt->execute();
$head_lines=$stmt->fetchAll(PDO::FETCH_ASSOC);

// news fetch
$sql="SELECT * FROM news ORDER BY news_head_line DESC";
$stmt=$pdo->prepare($sql);
$stmt->execute();
$news=$stmt->fetchAll(PDO::FETCH_ASSOC);

// news fetch end


include('includes/header.php');
?>

<!-- slider section -->
<div class="slider-img">
    <div class="welcome">
        <h1>Welcome To Computer Science Department</h1>
        <h4>Towards Advance Technology</h4>
    </div>
</div>

<div class="content">
  <div class="container1">
    <div class="about-section">
    <h2 id="about">  About Us</h2>
    <p>The Department of Computer Science was established in 2017 with a view to providing qualitative education to prospective graduates of Computer Science disciplines.The programme is aimed at providing the graduates with necessary skills and competence to pursue higher degrees both within and outside the country as well as to complete favourable in employment of IT firms, industries,governmental and non-governmental organizations and parastals amid global challenge.</p>
    <br>
    
    <a href="about.html" id="ab" style="margin-top:20px;">Read More..</a>
    <!-- News Section -->
    <h2 class="news-sec">Latest News</h2>
    <div class="news-section">
        <?php 
            foreach($news as $new){
        ?>
        <div class="news">
            <h3><?php echo $new['news_head_line'];?></h3>
            <h5><?php echo $new['date_added']?></h5>
            <p>
                <?php echo $new['news_brief'];?>
            </p><br>
            <a href="news.php?newsid=<?php echo $new['id'];?>">
              Read More</a>
        </div>
        
            <?php }?>
    </div>
    <!-- News Section end -->
      

                </div>
    <div class="side">

          <!--Latest News Here-->
          <h2 class="card-header">NOTICE!! </h2>
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

              <li>Location:Zamfara State University</li>
              <li>State: Zamfara State</li>
              <li>LGA: Talata Mafara</li>
              <li>PMB: 103.  </li>

              </div>


    </div>

  </div>
</div>
  </div>
  <!-- footer -->
  <?php include('includes/footer.php');?>
  <!-- footer end -->
  
  </body>
</html>
