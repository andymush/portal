<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"power");

$username=$_POST['username'];
$idno=$_POST['idno'];
$comment=$_POST['comment'];

$query="INSERT INTO ideacom(id,username,idno,comment)VALUE(null,'$username','$idno','$comment')";
$insert=mysqli_query($conn,$query);
if($insert){
    echo'<script>window.alert("Success")</script>';
    header('refresh:1;url=ideas.php');
}else{
    echo'<script>window.alert("Failed")</script>';
    header('refresh:0;url=com-idea.php');
}

?>