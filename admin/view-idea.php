<?php
include('connect.php');
if(isset($_GET['id'])){
	$id=($_GET['id']);
	$query="SELECT * FROM idea WHERE id='$id'";
	$select_query=mysqli_query($conn,$query);
	while($row=mysqli_fetch_array($select_query)){
        $myname=$row['myname'];
        $idea=$row['idea'];
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
    <h4 class="text-center">Idea</h4>
</head>
<body>
	<div class="container">
        <div class="row">
           <div class="col-sm-3"></div>
            <div class="col-sm-6">
            <form method="POST" action="">
                <h3><?php echo $myname;?></h3>
                Id:<br>
                <input type='text' name='id' value="<?php echo $id;?>"><br>
                Name:<br>
                <input type='text' name='myname' value="<?php echo $myname;?>"><br>
                Idea:<br>
                <input type='text' name='idea' value="<?php echo $idea;?>"><br>
            </form>
            <a href="tables.php" class="btn btn-success">Back</a>
            </div>
        </div>
	</div>

</body>

</html>
