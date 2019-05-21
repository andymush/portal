<?php
include('connect.php');
if(isset($_GET['id'])){
	$id=($_GET['id']);
    $query="SELECT * FROM ideacom WHERE id='$id'";
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
        <title>Update Comment</title>
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
        <h4 class="text-center">Update Idea comment</h4>
	</head>
	<body>
    <div class="container">
        <div class="row">
           <div class="col-sm-3"></div>
            <div class="col-sm-6">
            <form class="form-horizontal" method="POST" action="">
            <h3><?php echo $username;?></h3>
                Id:<br>
                <input type='text' name='id' value="<?php echo $id;?>"><br>
                Comment:<br>
                <input type='text' name='comment' value="<?php echo $comment;?>"><br>
                Idea id:<br>
                <input type='text' name='idno' value="<?php echo $idno;?>"><br>
                
                <input type="submit" class="btn btn-primary" name='update' value="update">
            </form>
            <a href="comments.php" class="btn btn-success">Back</a>
            </div>
        </div>
	</div>
	</body>
	
</html>
<?php
include('connect.php');
if(isset($_POST['update'])){
$ucomment=$_POST['comment'];
$uidno=$_POST['idno'];

$queryupdate=mysqli_query($conn,"update ideacom set comment='$ucomment',idno='$uidno' where id='$id'")or die(mysqli_error($conn));

if($queryupdate){
echo'<script>window.alert("Comment updated successfully")</script>';
header('refresh:0;url=comments.php');
} else{
echo'<script>window.alert("Comment not updated. Please try again.")</script>';
header('refresh:0;url=comments.php');			
}
}
?>