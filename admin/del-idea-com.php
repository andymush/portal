<?php
include('connect.php');
$id=$_GET['id'];
$query=("delete from ideacom where id ='$id'");
$delete_query=mysqli_query($conn,$query);
if($delete_query){
	echo"<script>window.alert('success')</script>";
	header('refresh:0;url=comments.php');
}
else{
	echo"<script>window.alert('failed')</script>";
	header('refresh:0;url=comments.php');
}

?>