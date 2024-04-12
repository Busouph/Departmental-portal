<?php 
require('includes/connection.php');
if(isset($_POST['add_news'])){
    $news_head=$_POST['news_head'];
    $news_brief=$_POST['news_brief'];
    $news_content=$_POST['news_content'];
    
    // Full texts	id	news_head_line	date_added	news_brief	news_content
    $sql="INSERT INTO news(news_head_line,news_brief,news_content)
    VALUES(:head_news,:brief,:ncontent)";
    $stmt=$pdo->prepare($sql);
   
    $stmt->bindParam(":head_news",$news_head);
    $stmt->bindParam(":brief",$news_brief);
    $stmt->bindParam(":ncontent",$news_content);

    try{
        $stmt->execute();
        echo'<script>alert("News added successfull");location.href="admin_page.php";</script>';
    }catch(Execption $e){
        echo $e->getMessage();
        echo'<script>alert("News not added!!");location.href="add_news.php";</script>';
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
    background:##17046d;
    color:#17046d;
}
</style>

<div class="content-container">
    <div class="left">
        <?php include('includes/admin_side_bar.php');?>
    </div>

    <!-- right -->
    <div class="right">
        <div class="form-div">
            <form action="" method="post">
                <div class="form-group">
                    <label for="">News Heading</label><br>
                    <input type="text" name="news_head" placeholder="Enter News Heading ">
                </div>
                <div class="form-group">
                    <label for="">News in Brief</label><br>
                    <input type="text" name="news_brief" placeholder="Brief About the News">
                </div>
                <div class="form-group">
                    <label for="">News Content</label><br>
                    <input type="text" name="news_content" placeholder="Main Content of the news">
                </div>
                <div class="form-group">
                    <button type="submit" name="add_news" style="width:100px; height:35px; background:#17046d; color:#fff;margin-top:5px;">Add News</button>
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