<?php
session_start();
$conn=mysqli_connect("localhost","root","","power") or die(mysqli_error($conn));
if(isset($_POST['submit'])){
	$uname=$_POST['uname'];
	$password=$_POST['password'];
	
	$admin=mysqli_query($conn,"SELECT * FROM users WHERE uname='$uname';");
	
	$row2=mysqli_num_rows($admin);
	if ($row2 == 1) {
		while ($rows2 = mysqli_fetch_array($admin)) {
			$_SESSION['signedin'] = true;
			$_SESSION['id'] = $rows2['id'];
			$_SESSION['uname']=$rows2['uname'];
			$_SESSION['password']=$rows2['password'];
    		?>
    		
            <script>alert("User Login Successful!");
            window.location.href='index.php';
            </script>
            <?php
		}
	}else{
	?>
	<script>
	    alert("Oops! Check your name and password. If this message persists, try again later.");
	    window.location.href='index.php';
	</script>
	<?php
	}
}

?>