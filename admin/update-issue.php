<?php
include('connect.php');
$id=$_GET['id'];
$query=("select * from grid where id='$id'");
$select_query=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($select_query)){
    $id=$row['id'];
	$username=$row['username'];
    $location=$row['location'];
    $issue=$row['issue'];
}
?>
<html>
	<head>
        <title>Update Issue</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <style>
            input[type=text], select {
        width: 60%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }
        </style>
        <h4 class="text-center">Update Issue</h4>
	</head>
	<body>
    <div class="container">
        <div class="row">
           <div class="col-sm-3"></div>
            <div class="col-sm-6">
            <form method="POST" action="">
                <h3><?php echo $username;?></h3>
                Id:<br>
                <input type='text' name='id' value="<?php echo $id;?>"><br>
                Name:<br>
                <input type='text' name='username' value="<?php echo $username;?>"><br>
                Location:<br>
                <input type='text' name='location' value="<?php echo $location;?>"><br>
                Issue:<br>
                <input type='text' name='issue' value="<?php echo $issue;?>"><br>

                <input type="submit" class="bn btn-primary" name='update' value="update">
            </form>
            <a href="tables.php" class="btn btn-success">Back</a>
            </div>
        </div>
	</div>
	</body>
	
</html>
<?php
include('connect.php');
if(isset($_POST['update'])){
$nusername=$_POST['username'];
$nlocation=$_POST['location'];
$nissue=$_POST['issue'];


$queryupdate=mysqli_query($conn,"Update grid SET username='$nusername',location='$nlocation',issue='$nissue' where id='$id'") or die(mysqli_error($conn));
if($queryupdate){
    echo'<script>window.alert("Issue updated ")</script>';
    header('refresh:0;url=tables.php');
    } else{
    echo'<script>window.alert("Issue not updated. Please try again.")</script>';
    header('refresh:1;url=tables.php');			
    }
}
?>