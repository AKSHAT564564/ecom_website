<?php require('top.php');
require('admin/blogadmin/includes/db.php');
include('admin/blogadmin/includes/function.php');

if(isset($_GET['page'])){
  $page=$_GET['page'];
}else{
  $page=1;
}
$post_per_page=6;
$result=($page-1)*$post_per_page;

// $result = 0
// $result = 5;
// $result = 10
 if(isset($_GET['search'])){
         $keyword = $_GET['search'];
         $postQuery="SELECT * FROM posts WHERE title LIKE '%$keyword%' ORDER BY id DESC LIMIT $result,$post_per_page";
       }else{
        $postQuery="SELECT * FROM posts ORDER BY id DESC LIMIT $result,$post_per_page";
       }
      
       $runPQ=mysqli_query($db,$postQuery);

?>
<div class="body__overlay"></div>



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
            <!-- End Search Popap -->
            <!-- Start Cart Panel -->
            <div class="shopping__cart">
                <div class="shopping__cart__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    <div class="shp__cart__wrap">
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="images/product-2/sm-smg/1.jpg" alt="product images">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="product-details.php">BO&Play Wireless Speaker</a></h2>
                                <span class="quantity">QTY: 1</span>
                                <span class="shp__price">$105.00</span>
                            </div>
                            <div class="remove__btn">
                                <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="images/product-2/sm-smg/2.jpg" alt="product images">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="product-details.php">Brone Candle</a></h2>
                                <span class="quantity">QTY: 1</span>
                                <span class="shp__price">$25.00</span>
                            </div>
                            <div class="remove__btn">
                                <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                    </div>
                    <ul class="shoping__total">
                        <li class="subtotal">Subtotal:</li>
                        <li class="total__price">$130.00</li>
                    </ul>
                    <ul class="shopping__btn">
                        <li><a href="cart.php">View Cart</a></li>
                        <li class="shp__checkout"><a href="checkout.php">Checkout</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Cart Panel -->
        </div>
        <!-- End Offset Wrapper -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Blog</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Blog Area -->
        <section class="htc__blog__area bg__white ptb--100">
            <div class="container">
                <div class="row">
                    <div class="ht__blog__wrap blog--page clearfix">
                        <!-- Start Single Blog -->
                        <?php 
                        while($post=mysqli_fetch_assoc($runPQ)){
         ?>
                        <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12">
                            <div class="blog">
                                <div class="blog__thumb">
                                    <a href="blog-details.php?id=<?php echo $post['id']; ?>">
                                        <img src="admin/blogadmin/images/<?=getPostThumb($db,$post['id']); ?> " alt="blog images" style="max-height: 202px;">
                                    </a>
                                </div>
                                <div class="blog__details">
                                    <div class="bl__date">
                                        <span><?=date('F jS, Y',strtotime($post['created_at']))?></span>
                                    </div>
                                    <h2><a href="blog-details.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']?></a></h2>
                                   <?php $content=$post['content'];

                                    $content = substr($content,0,200);
                                ?>
                                    <p><?php echo $content; ?></p>
                                    <div class="blog__btn">
                                        <a href="blog-details.php?id=<?php echo $post['id']; ?>">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                        <!-- End Single Blog -->
                    </div>
                </div>
                <br><br>
                <!-- Start PAgenation -->
              <?php
if(isset($_GET['search'])){
  $keyword=$_GET['search'];
$q="SELECT * FROM posts WHERE title LIKE '%$keyword%'";

}else{
  $q="SELECT * FROM posts";

}
$r=mysqli_query($db,$q);
$total_posts=mysqli_num_rows($r);
$total_pages=ceil($total_posts/$post_per_page);

?>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
        <?php
if($page>1){
  $switch="";
}else{
  $switch="disabled";
}
if($page<$total_pages){
  $nswitch="";
}else{
  $nswitch="disabled";
}
        ?>
      
        <li class="page-item<?=$switch?>">
            <a class="page-link" href="?<?php if(isset($_GET['search'])){echo "search=$keyword&";}?>page=<?=$page-1?>" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <?php
for($opage=1;$opage<=$total_pages;$opage++){
  ?>
          <li class="page-item"><a class="page-link" href="?<?php if(isset($_GET['search'])){echo "search=$keyword&";}?>page=<?=$opage?>"><?=$opage?></a></li>

  <?php
}
          ?>
          
          <li class="page-item <?=$nswitch?>">
            <a class="page-link" href="?<?php if(isset($_GET['search'])){echo "search=$keyword&";}?>page=<?=$page+1?>">Next</a>
          </li>
</ul>
</nav>
                <!-- End PAgenation -->
            </div>
        </section>
        <!-- End Blog Area -->
        <!-- Start Banner Area -->
        <div class="htc__banner__area">
            <ul class="banner__list owl-carousel owl-theme clearfix">
                <li><a href="product-details.php"><img src="images/banner/bn-3/1.jpg" alt="banner images"></a></li>
                <li><a href="product-details.php"><img src="images/banner/bn-3/2.jpg" alt="banner images"></a></li>
                <li><a href="product-details.php"><img src="images/banner/bn-3/3.jpg" alt="banner images"></a></li>
                <li><a href="product-details.php"><img src="images/banner/bn-3/4.jpg" alt="banner images"></a></li>
                <li><a href="product-details.php"><img src="images/banner/bn-3/5.jpg" alt="banner images"></a></li>
                <li><a href="product-details.php"><img src="images/banner/bn-3/6.jpg" alt="banner images"></a></li>
                <li><a href="product-details.php"><img src="images/banner/bn-3/1.jpg" alt="banner images"></a></li>
                <li><a href="product-details.php"><img src="images/banner/bn-3/2.jpg" alt="banner images"></a></li>
            </ul>
        </div>
        <!-- End Banner Area -->
        <!-- End Banner Area -->
        <!-- Start Footer Area -->
<?php require('footer.php')?>        
        