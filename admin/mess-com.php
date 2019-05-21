<?php
include('connect.php');
if(isset($_GET['id'])){
	$id=($_GET['id']);
	$query="SELECT * FROM messcom WHERE id='$id'";
	$select_query=mysqli_query($conn,$query);
	while($row=mysqli_fetch_array($select_query)){
        $username=$row['username'];
        $idno=$row['idno'];
        $comment=$row['comment'];
	}
}
?>
<html>
<head>
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
    <h4 class="text-center">Messages Comment</h4>
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
                Idea id:<br>
                <input type='text' name='location' value="<?php echo $idno;?>"><br>
                Comment:<br>
                <input type='text' name='issue' value="<?php echo $comment;?>"><br>
            </form>
            <a href="comments.php" class="btn btn-success">Back</a>
            </div>
        </div>
	</div>

</body>

</html>
