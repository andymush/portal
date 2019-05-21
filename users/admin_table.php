<?php
include('connect.php');
include('login.php');
if (isset($_SESSION['signedin']) && $_SESSION['signedin'] === TRUE) {
    //allow
    ?>  
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>HomeTrack &mdash; Admin Panel</title>

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
        <a href="index.php" class="logo"><b>HomeTrack<span> Admin</span></b></a>
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
            <li class="mt">
              <a href="index.php">
                <i class="fa fa-dashboard"></i>
                <span>Dashboard</span>
                </a>
            </li>
            
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-cogs"></i>
                <span>Components</span>
                </a>
              <ul class="sub">
                <li><a href="calendar.php">Calendar</a></li>
                <li><a href="gallery.php">Gallery</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a class="active" href="javascript:;">
                <i class="fa fa-th"></i>
                <span>Database Properties</span>
                </a>
              <ul class="sub">
                <li class="active"><a href="admin_table.php">HomeTrack Administrators</a></li>
                <li><a href="users_table.php">HomeTrack Users</a></li>
                <li><a href="posted_homes_table.php">Posted Homes</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="inbox.php">
                <i class="fa fa-envelope"></i>
                <span>Mail</span>
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
          <!-- row -->
          <div class="row mt">
            <div class="col-md-12">
              <div class="content-panel">
                <table class="table table-striped table-advance table-hover">
                  <h4><i class="fa fa-angle-right"></i> Admins Logged In To HomeTrack</h4>
                  <hr>
                  <thead>
                    <tr>
                      <th></i> Id #</th>
                      <th><i class="fa fa-bookmark"></i> Name</th>
                      <th><i class="fa fa-exclamation-circle"></i> Password</th>
                      <th><i class=" fa fa-edit"></i> Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $select="SELECT * FROM admin";
                      $select_query=mysqli_query($conn,$select);
                      while($row=mysqli_fetch_array($select_query)){ 
                   ?>
                    <tr>
                      <td><?php echo $row['id']?></td>
                      <td><?php echo $row['name']?></td>
                      <td><?php echo $row['password']?></td>
                          <?php echo "<td> <a href='admin_view.php?id=".$row['id']." 'class='btn btn-success btn-xs'><i class='fa fa-eye'></i></a>   
                            <a href='admin_update.php?id=". $row['id'] ."' class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></a>
                            <a href='admin_delete.php?id=". $row['id'] ."' class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i></a></td>"
                          ;?>
                    </tr>
                    <?php
                      }
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /content-panel -->
            </div>
            <!-- /col-md-12 -->
          </div>
          <!-- /row -->
        </section>
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
          	 All rights reserved | Dan Mwangi.
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
} else {
    header('Location: ../index.html');
}
?>