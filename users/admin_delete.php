<?php

if(isset($_GET['id'])){
	$conn=mysqli_connect("localhost","root","","hometrack");
	$id=$_GET['id'];
	$query=mysqli_query($conn,"delete from admin where id='$id'")or die(mysqli_error($conn));
    if($query){
		echo"<script>window.alert('Administrator Deleted Successfully.')</script>";
	    header('refresh:0;url=admin_table.php');
	}else{
		echo"<script>window.alert('Message Deletion Failed.')</script>";
	    header('refresh:0;url=admin_table.php');
	}
}
?>