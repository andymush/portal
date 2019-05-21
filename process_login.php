<?php
session_start();
$conn=mysqli_connect("localhost","root","","power") or die(mysqli_error($conn));
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$admin=mysqli_query($conn,"SELECT * FROM admin WHERE username='$username';");
	
	$row2=mysqli_num_rows($admin);
	
	if($row2<1){
		header("Location: index.php?nouser");
		 
		 }
	else{
			$row=mysqli_fetch_assoc($admin);

			if($row["password"] == $password){
				$_SESSION['username'] = $row["username"];
				header("Location: admin/index.php");
			}else{
				header("Location: index.php?wrongpwd");
			}
			
			
				
		
		
		
	
}
}
?>