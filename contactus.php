<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"power");

$fname=$_POST['fname'];
$email=$_POST['email'];
$message=$_POST['message'];

$query="INSERT INTO contactus(id,fname,email,message)VALUE(NULL,'$fname','$email','$message')";
$insert=mysqli_query($conn,$query);
if($insert){
    echo'<script>window.alert("Success")</script>';
    header('refresh:1;url=index.php');
}else{
    echo'<script>window.alert("failed!")</script>';
    header('refresh:0;url=index.php');
}

?>