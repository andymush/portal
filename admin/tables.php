
<?php
session_start();
?>
<?php
include('../connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Portal Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome <?php if ($_SESSION){echo $_SESSION['username'];}?></span><b class="caret"></b></a>
     
    </li>
    <li class=""><a title="" href="logout.php"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>

<!--start-top-serch-->

<!--close-top-serch--> 

<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-th"></i>Tables</a>
  <ul>
    <li><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="active"><a href="tables.php"><i class="icon icon-th"></i> <span>Tables</span></a></li>
    <li> <a href="forms.php"><i class="icon icon-list"></i> <span>Forms</span></a></li>
    <li><a href="comments.php"><i class="icon icon-th"></i> <span>Comments</span></a></li>
    
  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Tables</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Issues raised</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Id</th>
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

                      <td><a href="view-issue.php?id=<?php echo$row['id']?>" class='btn btn-success'>View</a>
                      <a href="del-issue.php?id=<?php echo$row['id']?>" class='btn btn-danger'>Delete</a>
                      <a href="update-issue.php?id=<?php echo$row['id']?>" class='btn btn-primary'>Update</a></td>
                  </tr>
                  <?php
                  }
                  ?>

             </tbody>
            </table>
          </div>
        </div>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Ideas Table </h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Idea</th>
                  <th>Actions</th>
                  
                </tr>
              </thead>
             <tbody>
                  <?php
                    $select="SELECT * FROM idea";
                    $select_query=mysqli_query($conn,$select);
                    while($row=mysqli_fetch_array($select_query)){
                  ?>
                  <tr>
                      <td><?php echo $row['id']?></td>
                      <td><?php echo $row['myname']?></td>
                      <td><?php echo $row['idea']?></td>
                      

                      <td><a href="view-idea.php?id=<?php echo$row['id']?>" class='btn btn-success'>View</a>
                      <a href="del_idea.php?id=<?php echo$row['id']?>" class='btn btn-danger'>Delete</a>
                      <a href="update-idea.php?id=<?php echo$row['id']?>" class='btn btn-primary'>Update</a></td>
                  </tr>
                  <?php
                  }
                  ?>
             </tbody>
            </table>
          </div>
        </div>
      
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Contact Us</h5>
          </div>
          <div class="widget-content nopadding">
                <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $select="SELECT * FROM contactus";
                        $select_query=mysqli_query($conn,$select);
                        while($row=mysqli_fetch_array($select_query)){
                      ?>
                      <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['fname']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['message']?></td>

                        <td><a href="view-message.php?id=<?php echo$row['id']?>" class='btn btn-success'>View</a>
                        <a href="del-message.php?id=<?php echo$row['id']?>" class='btn btn-danger'>Delete</a>
                        <a href="update-message.php?id=<?php echo$row['id']?>"class='btn btn-primary'>Update</a></td>
                      </tr>
                      <?php
                        }
                      ?>
                    </tbody>
                </table>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="#">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.tables.js"></script>
</body>
</html>
