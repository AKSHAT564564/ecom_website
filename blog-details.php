<style type="text/css">
    ul.list li{
  width: auto;
  float: left;
  padding: 20px;
  font-weight: 800;
  color: #C43B68;
  font-size: 18px;
}
</style>

<?php require('top.php')?>
<div class="body__overlay"></div>

<?php
require('admin/blogadmin/includes/db.php');
require('admin/blogadmin/includes/function.php');
?>


        <div class="body__overlay"></div>
        <!-- Start Offset Wrapper -->
        <div class="offset__wrapper">
            <!-- Start Search Popap -->
            <div class="search__area">
                <div class="container" >
                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="search__inner">
                                <form action="#" method="get">
                                    <input placeholder="Search here... " type="text">
                                    <button type="submit"></button>
                                </form>
                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Offset Wrapper -->
        <!-- Start Bradcaump area -->
     <?php
        $post_id=$_GET['id'];
$postQuery="SELECT * FROM posts WHERE id=$post_id";
$runPQ=mysqli_query($db,$postQuery);
$post=mysqli_fetch_assoc($runPQ);
$content=$post['content'];
$con=explode("imageHere", $content);
?>
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Blog Details </span>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active"> <?=$post['title']?> </span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->


        <!-- Start Blog Details Area -->
        <section class="htc__blog__details bg__white ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-12">
                        <div class="htc__blog__details__wrap">
                            <div class="ht__bl__thumb">
                                <img src="admin/blogadmin/images/<?=getPostThumb($db,$post['id'])?>" alt="blog images">
                            </div>
                            <div class="bl__dtl">

                                <p></p>
                                <ul class="list">
                                    <li>
                                    <i class="fa fa-calendar-check-o"></i> 
                                Post Created On <?=date('F jS, Y',strtotime($post['created_at']))?>
                                    </li>
                                

                                <li> <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i> 12 Likes</li>
                                
                                 <li><i class="fa fa-book"></i> <a href="blog.php"><?=getCategory($db,$post['category_id'])?></a> </li>
                                </ul>
                                <br><br><br>
                                <p><?=$con[0];?>.</p>

                                <div class="row">
                                <?php if(count($con)>1)
                                    {
                                        $post_images=getImagesByPost($db,$post['id']);
                                        $c=1;
                                        foreach($post_images as $image){
                                            
                                                if($c==1)
                                                {
                                                    $c++;
                                                    continue;
                                                }
                                                else{
                                                    ?>
                                   
                                    
                                        <div class="ht__bl__thumb">
                                            <img src="admin/blogadmin/images/<?=$image['image']?>" alt="blog images">
                                        </div>
                                    
                                   
                                </div>
                                                                    
                                <p> 
                                <?=$con[$c-1];          $c++;?> </p>

                                                           <?php 
                                                    }
                                            
                                    }
                                }
                                ?>
                            </div>
                            <!-- Start Comment Area -->
                            <div class="htc__comment__area">
                                <h4 class="title__line--5">COMMENTS</h4>
                                <div class="ht__comment__content">
                                     <?php
                              if(isset($_GET['id'])){
                                $comments = getComments($db,$post_id);
                    if(count($comments)<1){  echo '<div class="card-body"><p class="text-center card-text">No Comments..</p></div>';
                                } else {
                                    foreach($comments as $comment){
                                  ?>
                                        <div>
                                            <h2 class="ht__comment__title"><?=$comment['name']?></h2>

                                            <h4><?=$comment['comment']?>s</h4>
                                        </div>
                                        <br><br>
                                  <?php
                              }
                                }
                            }
                                ?>

                                    <!-- <div class="comment">
                                        <div class="ht__comment__details">
                                            <div class="ht__comment__title">
                                                <h2><a href="#">JOHN NGUYEN</a></h2>
                                                <div class="reply__btn">
                                                    <a href="#">reply</a>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div> -->
                                    <!-- End Single Comment -->
                                    <!-- Start Single Comment -->
                                    
                                    <!-- End Single Comment -->
                                    <!-- Start Single Comment -->
                                    
                                    <!-- End Single Comment -->
                                </div>
                            </div>
                            <!-- End Comment Area -->
                            <!-- Start comment Form -->
                            <form action="admin/blogadmin/includes/add_comment.php" method="post" class="ht__comment__form">
                                 <div >
                                <h4 class="title__line--5">Leave a Comment</h4>
                                <div class="ht__comment__form__inner">
                                    <div class="comment__form">
                                        <input type="text" name="name" placeholder="Name ">
                                        <!-- <input type="email" placeholder="Email *"> -->
                                        <!-- <input type="text" placeholder="Website"> -->
                                    </div>
                                    <div class="comment__form message">
                                        <textarea name="comment"  placeholder="Your Comment"></textarea>
                                    </div>
                                </div>
                                 <input type="hidden" name="post_id" value="<?=$post_id?>">
                                <button class="ht__comment__btn--2 mt--30" type="submit" name="addcomment">
                                    Submit a Comment 
                                </button>
                            </div>
                        </form>
                            <!-- End comment Form -->
                            
                        </div>
                    </div>  
                </div>
            </div>
        </section>
        <script type="text/javascript">
            function myFunction(x) {
  x.classList.toggle("fa-thumbs-down");
}
        </script>
        <!-- End Blog Details Area -->
        <!-- Start Footer Area -->
       <?php require('footer.php')?>        
