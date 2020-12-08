<?php
include('connect.php');
include('login.php');
if(!$_SESSION['isLogged']){
    header("location:login.php");
    die();
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
    <title>&mdash; Admin Panel</title>

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">


    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
 
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <script src="lib/chart-master/Chart.js"></script>

  </head>

  <body>
    <section id="container">

      <header class="header black-bg">
        <div class="sidebar-toggle-box">
          <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="index.php" class="logo"><b><span> Admin</span></b></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">

        </div>
        <div class="top-menu">
          <ul class="nav pull-right top-menu">
            <li><a class="logout" href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
        </div>
      </header>

      <aside>
        <div id="sidebar" class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu" id="nav-accordion">
            <h1 class="centered"><strong><i class="fa fa-home"></i></strong></h1>            
            <li class="sub-menu">
              <a class="active" href="index.php">
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
              <a href="messages.php">
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
            <div class="col-sm-9">
              <section class="panel">
                <header class="panel-heading wht-bg">
                  	<h4 class="gen-case"><i class="fa fa-angle-right "></i>Issues</h4>
                </header>
                <div class="panel-body minimal">            
                  <div class="table-inbox-wrap ">
                    <table class="table table-inbox table-hover">
                    <thead>
                      <tr>
                        <th>Issue Id</th>
                        <th>Username</th>
                        <th>Location</th>
                        <th>Issue</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $select = "SELECT * FROM grid";
                        $select_query = mysqli_query($conn,$select);
                        while($row=mysqli_fetch_array($select_query)){ 
                      ?>
                      <tr>
                          <td><?php echo $row['id']?></td>
                          <td><?php echo $row['username']?></td>
                          <td><?php echo $row['location']?></td>
                          <td><?php echo $row['issue']?></td>

                          <td>
                          <a href="vissue.php?id=<?php echo$row['id']?>" class='btn btn-success'>View</a>
                          <a href="com-issue.php?id=<?php echo$row['id']?>" class='btn btn-default'>Comment</a>
                          </td>
                      </tr>
                      <?php
                      }
                      ?>

                    </tbody>
                    </table>
                  </div>
                  <a href="dissue.php" class='btn btn-success'>Display Comments</a>
                  
                </div>
              </section>
            </div>
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
          <a href="index.html#" class="go-top">
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
