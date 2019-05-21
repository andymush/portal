<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"power");

$username=$_POST['username'];
$location=$_POST['location'];
$issue=$_POST['issue'];

$query="INSERT INTO grid(id,username,location,issue)VALUE(NULL,'$username','$location','$issue')";
$insert=mysqli_query($conn,$query);
if($insert){
    echo'<script>window.alert("Success")</script>';
    header('refresh:1;url=forms.php');
}else{
    echo'<script>window.alert("failed!")</script>';
    header('refresh:0;url=forms.php');
}

?>