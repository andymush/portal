<?php
include('connect.php');
session_start();
if(!$_SESSION['isLogged']){
header("location:login.php");
die();
}
if(isset($_GET['id'])){
	$id=($_GET['id']);
	$query="SELECT * FROM contactus WHERE id='$id'";
	$select_query=mysqli_query($conn,$query);
	while($row=mysqli_fetch_array($select_query)){
        $id=$row['id'];
	}
}
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Admin Panel</title>

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <script src="lib/chart-master/Chart.js"></script>

    <!-- =======================================================
      Template Name: Dashio
      Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
      Author: TemplateMag.com
      License: https://templatemag.com/license/
    ======================================================= -->
  </head>

  <body>
    <section id="container">
      <!-- **********************************************************************************************************************************************************
          TOP BAR CONTENT & NOTIFICATIONS
          *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
        <div class="sidebar-toggle-box">
          <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="index.php" class="logo"><b><span> Admin</span></b></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
          <!--  notification start -->
          
          <!--  notification end -->
        </div>
        <div class="top-menu">
          <ul class="nav pull-right top-menu">
            <li><a class="logout" href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
        </div>
      </header>
      <!--header end-->
      <!-- **********************************************************************************************************************************************************
          MAIN SIDEBAR MENU
          *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
        <div id="sidebar" class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu" id="nav-accordion">
            <h1 class="centered"><strong><i class="fa fa-home"></i></strong></h1>
            <li class="sub-menu">
              <a href="index.php">
                <i class="fa fa-envelope"></i>
                <span>Issues</span>
                </a>
            </li>
            <li class="sub-menu">
              <a href="ideas.php">
                <i class="fa fa-dashboard"></i>
                <span>Ideas</span>
                </a>
            </li>
            <li class="sub-menu">
              <a class="active"  href="messages.php">
                <i class="fa fa-dashboard"></i>
                <span>Messages</span>
                </a>
            </li>
          </ul>
          <!-- sidebar menu end-->
        </div>
      </aside>
      <!--sidebar end-->
      <!-- **********************************************************************************************************************************************************
          MAIN CONTENT
          *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
          <!-- page start-->
          <div class="row mt">
            <div class="col-lg-6">
            <div class="form-panel">
              <h4><i class="fa fa-angle-right"></i> Comment </h4>
              <hr>
              <div class="form">
                <form class="cmxform form-horizontal style-form" method="POST" action="post-message.php">
                  <div class="form-group ">
                    <div class="col-lg-10">
                      <input class=" form-control" name="username" type="text" Placeholder="Your name" required/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <div class="col-lg-10">
                    <label>Message id no</label>
                      <input class=" form-control" name="idno" type="int" value="<?php echo $id;?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <div class="col-lg-10">
                      <input class=" form-control" name="comment" type="text"  Placeholder="Write your comment" required/>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-1 col-lg-10">
                      <center>
                        <input type="submit" value="submit" name="submit" class="btn btn-primary" style="width: 30%;"></a><a href="messages.php" class="btn btn-success" style="width: 30%">Back</a>
                      </center>                    
                        
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
        </section>
        <!-- /wrapper -->
      </section>
      <!-- /MAIN CONTENT -->
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
        <div class="text-center">
          <p>
            Copyright &copy; <script>
                              document.write(new Date().getFullYear());
                          </script>
          	 All rights reserved | Andrew Nderitu.
          </p>
          <div class="credits">
            <!--
              You are NOT allowed to delete the credit link to TemplateMag with free version.
              You can delete the credit link only if you bought the pro version.
              Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
              Licensing information: https://templatemag.com/license/
            -->
            <!--Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>-->
          </div>
          <a href="index.php#" class="go-top">
            <i class="fa fa-angle-up"></i>
            </a>
        </div>
      </footer>
      <!--footer end-->
    </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="lib/jquery.scrollTo.min.js"></script>
    <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
    <!--common script for all pages-->
    <script src="lib/common-scripts.js"></script>
    <!--script for this page-->

  </body>

  </html>
<?php

?>