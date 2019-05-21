<?php

if(isset($_GET['id'])){
	$conn=mysqli_connect("localhost","root","","hometrack");
	$id=$_GET['id'];
	$query=mysqli_query($conn,"delete from users where id='$id'")or die(mysqli_error($conn));
    if($query){
		echo"<script>window.alert('User Deleted Successfully.')</script>";
	    header('refresh:0;url=users_table.php');
	}else{
		echo"<script>window.alert('User Deletion Failed.')</script>";
	    header('refresh:0;url=users_table.php');
	}
}
?>