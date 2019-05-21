<?php
include('connect.php');
$id=$_GET['id'];
$query=("delete from grid where id = '$id'");
$delete_query=mysqli_query($conn,$query);
if($delete_query){
    echo'<script>window.alert("Data deleted!")</script>';
    header("refresh:1;url=tables.php");
}else{
    echo'<script>window.alert("Unsuccessful")</script>';
    header("refresh:0;url=tables.php");
}

?>