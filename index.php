<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>Complainary Portal</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Le styles -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/skin-blue.css" rel="stylesheet">
<!-- Le fav -->
<link rel="shortcut icon" href="assets/ico/favicon.png">

</head>
<!-- /head-->
<body data-spy="scroll" data-target=".navbar">
<nav id="topnav" class="navbar navbar-fixed-top navbar-default" role="navigation">
<div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#top-section">PORTAL</a>
	</div>
	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav navbar-right">
			<li class="active"><a href="#top-section">Home</a></li>
			<li><a href="#Section-1">About</a></li>
			<li><a href="#Section-2">The Grid</a></li>
			<li><a href="#Section-3">Ideal Space</a></li>
			<li><a href="#Section-4">Contact Us</a></li>
			<li><a href="#Section-5">Login</a></li>
			<li><a href="admin/login.php">Admin</a></li>
		</ul>
	</div>
	<!-- /.navbar-collapse -->
</div>
</nav>
<!-- HOMEPAGE -->
<header id="top-section" class="fullbg">
<div class="jumbotron">
	<div id="carousel_intro" class="carousel slide fadeing">
		<div class="carousel-inner">
			<div class="active item" id="slide_1">
				<div class="carousel-content">					
					<div class="animated fadeInDownBig">
						 <h1>You know that we strive to ensure that you are always lightened up.</h1>
					</div>
					<br/>
					
				</div>
			</div>
			<div class="item" id="slide_2">
				<div class="carousel-content">					
					<div class="animated fadeInDownBig">
						 <h1>A project is complete when it starts working for you, rather than you working for it.</h1>
					</div>
					<br/>	
				</div>
			</div>
			<div class="item" id="slide_3">
				<div class="carousel-content">					
					<div class="animated fadeInDownBig">
						 <h1>We help you serving a useful social purpose while generating high-quality profits that in-turn build our nation.</h1>					
					</div>
						<br/>
					</div>
			</div>
		</div>
	</div>
	<button class="left carousel-control" href="#carousel_intro" data-slide="prev" data-start="opacity: 0.6; left: 0%;" data-250="opacity:0; left: 5%;"><i class="fa fa-chevron-left"></i></button>
	<button class="right carousel-control" href="#carousel_intro" data-slide="next" data-start="opacity: 0.6; right: 0%;" data-250="opacity:0; right: 5%;"><i class="fa fa-chevron-right"></i></button>
</div>
<div class="inner-top-bg">
</div>
</header>
<!-- / HOMEPAGE -->
<!--  SECTION-1 -->
<section id="Section-1" class="fullbg">
<div class="section-divider">
</div>
<div class="container">
<div class="row">
	<div class="page-header text-center col-sm-12 col-lg-12 color-white animated fade">
		<h1>About Us</h1>
		<p class="lead">
			 Learn More About Us
		</p>
	</div>
</div>
<div class="row color-white">
	<div class="col-md-12 animated fadeInUpNow">
		<div class="boxservice">
			<i class="fa fa-globe"></i>
			<h3>Patners</h3>
			<p>
				We have patners world-wide.
			</p>
		</div>
		<div class="boxservice">
			<i class="fa fa-dashboard"></i>
			<h3>High speed electricity</h3>
			<p>
				Electricity gets to you faster than the blink of your eye.
			</p>
		</div>
		<div class="boxservice">
			<i class="fa fa-trophy"></i>			
			<h3>No. one Supplier</h3>
			<p>
				We are your number one electricity and power generating company.
			</p>
		</div>
		
	</div>
</div>
<!-- end row -->
</div>
</section>
<!-- SECTION-2(the grid) -->
<section id="Section-2" class="fullbg">
	<div class="section-divider">
	</div>
	<div class="container">
	<div class="row">
		<div class="page-header text-center col-sm-12 col-lg-12 color-white animated fade">
			<h2>The Grid</h2>
			<p class="lead">
				 Do you have issues? Feel free to share with us 
			</p>
		</div>
	</div>
	<div class="row animated fadeInUpNow">
		<div class="col-lg-8 col-md-offset-2">
			<form action="grid.php" method="POST" name="issue">
				<input type="text" name="username" size="30" class="col-lg-6 leftradius" Placeholder="Name">
				<input name="location" size="30" type="text" id="name" class="col-lg-6 leftradius" placeholder="Your location">
				<br/><br/>
				<textarea id="message" name="issue" class="col-lg-12 allradius" placeholder="Message" rows="7"></textarea><br/>
				<br/>
				<input value="Submit Issue" type="submit" name="submit"  class="btn btn-default btn-lg">
				<br/>
			</form>
		</div>
	</div>
	</div>
	</section>
<!-- SECTION-3(Ideal Space) -->
<section id="Section-3" class="fullbg">
		<div class="section-divider">
		</div>
		<div class="container">
		<div class="row">
			<div class="page-header text-center col-sm-12 col-lg-12 color-white animated fade">
				<h2>Ideal Space</h2>
				<p class="lead">
					 Do you have ideas that you think will help better our services? Please share with us.
				</p>
			</div>
		</div>
		<div class="row animated fadeInUpNow">
			<div class="col-lg-8 col-md-offset-2">
				<form action="idea.php" method="POST" name="ideas">
					<input name="myname" size="30" type="text" class="col-lg-6 leftradius" placeholder="Your Name"><br>
					<textarea name="idea" class="col-lg-12 allradius" placeholder="Your Idea...." rows="7"></textarea><br/>
					<br/>
					<input value="Submit Idea" type="submit" name="submit" class="btn btn-success btn-lg">
					<br/>
				</form>
			</div>
		</div>
		</div>
</section>
<!-- SECTION-4(contact us) -->
<section id="Section-4" class="fullbg">
	<div class="section-divider">
	</div>
	<div class="container">
	<div class="row">
		<div class="page-header text-center col-sm-12 col-lg-12 color-white animated fade">
			<h2>Contact Us</h2>
			<p class="lead">
				 Fill out the form and we will call you back
			</p>
		</div>
	</div>
	<div class="row animated fadeInUpNow">
		<div class="col-lg-8 col-md-offset-2">
			<form action="contactus.php" method="POST">
				<input name="fname" size="30" type="text" class="col-lg-6 leftradius" placeholder="Your Name">
				<input name="email" size="30" type="email" id="email" class="col-lg-6 rightradius" placeholder="E-mail Address">
				<br/><br/>
				<textarea id="message" name="message" class="col-lg-12 allradius" placeholder="Message" rows="7"></textarea><br/>
				<br/>
				<input value="Send Message" type="submit" name="submit" class="btn btn-default btn-lg">
				<br/>
			</form>
		</div>
	</div>
	</div>
	</section>
<!-- SECTION-5 (login) -->
<section id="Section-5" class="fullbg">
	<div class="section-divider">
	</div>
	<div class="container">
	<div class="row">
		<div class="page-header text-center col-sm-12 col-lg-12 color-white animated fade">
			<h2>Login</h2>
			<p class="lead">
				 Enter your details to login
			</p>
		</div>
	</div>
	<div class="row animated fadeInUpNow">
		<div class="col-lg-8 col-md-offset-2">
			<form action="users/login.php" method="POST">
				<input name="uname" size="30" type="text" class="col-lg-6 leftradius" placeholder="Username">
				<input name="password" size="30" type="password" id="password" class="col-lg-6 rightradius" placeholder="Password">
				<br/><br/>
				<input value="login" type="submit" name="submit" class="btn btn-success btn-lg" style="width:100%;">
				<br/>
				<center><a href="#Section-6" <p style="color:white;">Not registered?..Register</p></a></center>
			</form>
		</div>
	</div>
	
	</div>
	</section>
<!-- Section 6 -->
<section id="Section-6" class="fullbg">
	<div class="section-divider">
	</div>
	<div class="container">
	<div class="row">
	<div class="page-header text-center col-sm-12 col-lg-12 color-white animated fade">
			<h2>Register</h2>
			<p class="lead">
				 Register your details.
			</p>
		</div>
	</div>
	<div class="row animated fadeInUpNow">
		<div class="col-lg-8 col-md-offset-2">
			<form action="users/user.php" method="POST">
				<input name="uname" size="30" type="text" class="col-lg-6 leftradius" placeholder="Username">
				<input name="email" size="30" type="email" id="email" class="col-lg-6 rightradius" placeholder="E-mail Address">
				<input name="password" size="30" type="password" id="password" class="col-lg-6 rightradius" placeholder="Password">
				<br/><br/>
				<input value="Sign Up" type="submit" name="submit" class="btn btn-info btn-lg" style="width:100%;">
				<br/>
				<center><a href="#Section-5" <p style="color:white;">Already registered?..Login</p></a></center>
			</form>
		</div>
	</div>
	</div>
	</section>
<!-- FOOTER -->
<footer id="foot-sec">
<div class="footerdivide">
</div>
<div class="container ">
<div class="row">
	<div class="text-center color-white col-sm-12 col-lg-12">
		<ul class="social-icons">
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
		</ul>
	</div>
</div>
</div>
</footer>
<!-- Le javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
<script src="assets/js/jquery.localscroll-1.2.7-min.js" type="text/javascript"></script>
<script src="assets/js/jquery.scrollTo-1.4.6-min.js" type="text/javascript"></script>
<script src="assets/js/jquery.bxslider.min.js"></script>
<script src="assets/js/jquery.placeholder.js"></script>
<script src="assets/js/modernizr.custom.js"></script>
<script src="assets/js/toucheffects.js"></script>
<script src="assets/js/animations.js"></script>
<script src="assets/js/init.js"></script>
</body>
</html>