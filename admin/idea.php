<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"power");

$idea=$_POST['idea'];
$myname=$_POST['myname'];

$query="INSERT INTO idea(id,myname,idea)VALUE(NULL,'$myname','$idea')";
$insert=mysqli_query($conn,$query);
if($insert){
    echo'<script>window.alert("Success")</script>';
    header('refresh:1;url=forms.php');
}else{
    echo'<script>window.alert("failed!")</script>';
    header('refresh:0;url=forms.php');
}

?>