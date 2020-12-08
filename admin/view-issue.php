<?php
include('connect.php');
session_start();
if(!$_SESSION['isLogged']){
    header("location:login.php");
    die();
}
if(isset($_GET['id'])){
	$id=($_GET['id']);
	$query="SELECT * FROM grid WHERE id='$id'";
	$select_query=mysqli_query($conn,$query);
	while($row=mysqli_fetch_array($select_query)){
        $username=$row['username'];
        $location=$row['location'];
        $issue=$row['issue'];
		$uid=$row['id'];
	}
}
?>
<html>
<head>
    <title>View Ideas</title>
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
    <h4 class="text-center">Issue</h4>
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
            </form>
            <a href="tables.php" class="btn btn-success">Back</a>
            </div>
        </div>
	</div>

</body>

</html>
