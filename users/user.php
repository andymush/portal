<?php
include('connect.php');

$uname=$_POST['uname'];
$email=$_POST['email'];
$password=$_POST['password'];

$query="INSERT INTO users(id,uname,email,password)VALUE(NULL,'$uname','$email','$password')";
$insert=mysqli_query($conn,$query);
if($insert){
    echo'<script>window.alert("Success")</script>';
    header('refresh:1;url=index.php');
}else{
    echo'<script>window.alert("failed!")</script>';
    header('refresh:0;url=../index.php');
}

?>