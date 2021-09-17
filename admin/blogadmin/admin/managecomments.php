<?php require('../includes/db.php');
include('../includes/function.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>MyBlog - Admin Panel</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>
 <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.php" class="logo">Nice <span class="lite">Admin</span></a>
   

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

         
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
        
          <!-- inbox notificatoin end -->
          <!-- alert notification start-->
        
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                    
                            <span class="username"></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Account</a>
              </li>
              <li>
                <a href="../../logout.php"><i class="icon_key_alt"></i> Log Out</a>
              </li>
              
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>

<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Add Post</span>
                      </a>
          </li>
          <li class="active">
            <a class="" href="index.php?managepost">
                          <i class="icon_house_alt"></i>
                          <span>Manage Post</span>
                      </a>
          </li>
          
          <li class="active">
            <a class="" href="index.php?managecategory">
                          <i class="icon_house_alt"></i>
                          <span>Manage Category</span>
                      </a>
          </li>
          <li class="active">
            <a class="" href="index.php?managemenu">
                          <i class="icon_house_alt"></i>
                          <span>Manage Menu</span>
                      </a>
          </li>
          

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <section id="main-content">
      <section class="wrapper">
      	  <div class="row">
          <div class="col-lg-12 col-md-12">

<?php

if(isset($_GET['id'])){
	$comments = getComments($db,$_GET['id']);
	if(count($comments)<1)
	{
		echo '<h1>No Comments on this post</h1>';
	}
	else
	{
	?>

	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Comments 
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th>#</th>
                    <th>Name </th>
                    <th>Comment</th>
                    </tr>
                    	<?php foreach ($comments as $comment) { ?>
                    		 <td><?=$comment['id']?></td>
                    		 <td><?=$comment['name']?></td>		
                    		  <td><?=$comment['comment']?></td>

 						<td>
                      <div class="btn-group">
                       <a class="btn btn-danger" href="../includes/removecomment.php?id=<?=$comment['id']?>">Delete Comment <i class="icon_close_alt2"></i></a>
                        
                      </div>
                    </td>
                    	<?php
                    	}
                   	?>
                  </tr>
			</div>
		</div>
	</div>	
<?php
	}}
?>

</tbody>
</table>
</section>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</section>
</body>
</html>