<?php
include('connect.php');
$id=$_GET['id'];
$query=("select * from contactus where id='$id'");
$select_query=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($select_query)){
    $id=$row['id'];
	$fname=$row['fname'];
    $email=$row['email'];
    $message=$row['message'];
}
?>
<html>
	<head>
        <title>View Message</title>
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
    <h4 class="text-center">Message</h4>
	</head>
	<body>
    
    <div class="container">
        <div class="row">
           <div class="col-sm-3"></div>
            <div class="col-sm-6">
            <form method="POST" action="">
                <h3><?php echo $fname;?></h3>
                Id:<br>
                <input type='text' name='id' value="<?php echo $id;?>"><br>
                Name:<br>
                <input type='text' name='username' value="<?php echo $fname;?>"><br>
                Email:<br>
                <input type='text' name='location' value="<?php echo $email;?>"><br>
                Message:<br>
                <input type='text' name='issue' value="<?php echo $message;?>"><br>
               
            </form>
            <a href="tables.php" class="btn btn-success">Back</a>
            </div>
        </div>
	</div>
	</body>
	
</html>
