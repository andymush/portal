<?php

if(isset($_GET['id'])){
	$conn=mysqli_connect("localhost","root","","hometrack");
	$id=$_GET['id'];
	$query=mysqli_query($conn,"delete from contacts where id='$id'")or die(mysqli_error($conn));
    if($query){
		echo"<script>window.alert('Message Deleted Successfully.')</script>";
	    header('refresh:0;url=inbox.php');
	}else{
		echo"<script>window.alert('Message Deletion Failed.')</script>";
	    header('refresh:0;url=inbox.php');
	}
}
?>