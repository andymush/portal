<?php
include('connect.php');
session_start();
if(!$_SESSION['isLogged']){
    header("location:login.php");
    die();
}
$id=$_GET['id'];
$query=("select * from idea where id='$id'");
$select_query=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($select_query)){
	$id=$row['id'];
    $myname=$row['myname'];
    $idea=$row['idea'];
}
?>

<html>
	<head>
        <title>Update Idea</title>
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
        <h4 class="text-center">Update Idea</h4>
	</head>
	<body>
    <div class="container">
        <div class="row">
           <div class="col-sm-3"></div>
            <div class="col-sm-6">
            <form class="form-horizontal" method="POST" action="">
            <h3><?php echo $myname;?></h3>
                Id:<br>
                <input type='text' name='id' value="<?php echo $id;?>"><br>
                Name:<br>
                <input type='text' name='myname' value="<?php echo $myname;?>"><br>
                Idea:<br>
                <input type='text' name='idea' value="<?php echo $idea;?>"><br>
                
                <input type="submit" name='update' class="btn btn-primary" value="update">
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
$umyname=$_POST['myname'];
$uidea=$_POST['idea'];

$queryupdate=mysqli_query($conn,"update idea set myname='$umyname',idea='$uidea' where id='$id'")or die(mysqli_error($conn));

if($queryupdate){
echo'<script>window.alert("Record updated successfully")</script>';
header('refresh:0;url=tables.php');
} else{
echo'<script>window.alert("Record not updated. Please try again.")</script>';
header('refresh:0;url=tables.php');			
}
}
?>