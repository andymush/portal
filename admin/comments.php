
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
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
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
    <li><a href="tables.php"><i class="icon icon-th"></i> <span>Tables</span></a></li>
    <li> <a href="forms.php"><i class="icon icon-list"></i> <span>Forms</span></a></li>
    <li class="active"><a href="comments.php"><i class="icon icon-th"></i> <span>Comments</span></a></li>
  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Comments</a> </div>
    <h1>Comments</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Comments on Ideas</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
            <thead>
                <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Idea id</th>
                <th>Comments</th>
                <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $select = "SELECT * FROM ideacom";
                $select_query = mysqli_query($conn,$select);
                while($row=mysqli_fetch_array($select_query)){ 
                ?>
                <tr>
                                    
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['username']?></td>
                <td><?php echo $row['idno']?></td>
                <td><?php echo $row['comment']?></td>


                <td><a href="idea-com.php?id=<?php echo$row['id']?>" class='btn btn-success'>View</a>
                <a href="del-idea-com.php?id=<?php echo$row['id']?>" class='btn btn-danger'>Delete</a>
                <a href="upidea-com.php?id=<?php echo$row['id']?>" class='btn btn-primary'>Update</a></td>
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
            <h5>Comments on Issues</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
            <thead>
                <tr>
                <th>Username</th>
                <th>Issue id</th>
                <th>Comments</th>
                <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $select = "SELECT * FROM issuecom";
                $select_query = mysqli_query($conn,$select);
                while($row=mysqli_fetch_array($select_query)){ 
                ?>
                <tr>
                                    
                <td><?php echo $row['username']?></td>
                <td><?php echo $row['idno']?></td>
                <td><?php echo $row['comment']?></td>


                <td><a href="issue-com.php?id=<?php echo$row['id']?>" class='btn btn-success'>View</a>
                <a href="delis-com.php?id=<?php echo$row['id']?>" class='btn btn-danger'>Delete</a>
                <a href="upis-com.php?id=<?php echo$row['id']?>" class='btn btn-primary'>Update</a></td>
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
            <h5>Comments on messages</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
            <thead>
                <tr>
                <th>Username</th>
                <th>Message id</th>
                <th>Comments</th>
                <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $select = "SELECT * FROM messcom";
                $select_query = mysqli_query($conn,$select);
                while($row=mysqli_fetch_array($select_query)){ 
                ?>
                <tr>
                                    
                <td><?php echo $row['username']?></td>
                <td><?php echo $row['idno']?></td>
                <td><?php echo $row['comment']?></td>


                <td><a href="mess-com.php?id=<?php echo$row['id']?>" class='btn btn-success'>View</a>
                <a href="delmes-com.php?id=<?php echo$row['id']?>" class='btn btn-danger'>Delete</a>
                <a href="upmes-com.php?id=<?php echo$row['id']?>" class='btn btn-primary'>Update</a></td>
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
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
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
