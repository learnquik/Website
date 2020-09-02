<?php
session_start();
include('include/config.php'); 

if(isset($_POST['submit']))
{
	$email=$_POST['email'];
$pass=$_POST['pass'];


$que=mysqli_query($con,"select * from teacher where email='$email'");	
$row=mysqli_num_rows($que);
if($row)
{
    while($res= mysqli_fetch_array($que)){
    if(password_verify($pass,$res["password"])){
$_SESSION['email']=$email;
header('location:admin/index.php');}
}}	
else
{
$err="Pls Enter Valid Email or Password";
header('location:teachers.php');	
}	
	
} ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Learnquik|Teacher's Login</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Edulearn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<!-- Bootstrap-Core-Css -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Style-Css -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Font-Awesome-Icons-Css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
	<?php include('include/header.php');?>
	<!-- //header -->

	<!-- banner -->
	<div class="banner-agile-2">
		<!-- navigation -->
		<div class="navigation-w3ls">
			<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-nav">
				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				 aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
					<ul class="navbar-nav justify-content-center">
						<li class="nav-item">
							<a class="nav-link text-white" href="index.php">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="about.php">Teacher's List</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link text-white" href="about.php">Need's/Job List</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="about.php">About Us</a>
						</li>
											<li class="nav-item">
							<a class="nav-link text-white" href="gallery.php">Gallery</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link text-white" href="contact.php">Contact Us</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<!-- //navigation -->
	</div>
	<!-- breadcrumb -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Login Form</li>
		</ol>
	</nav>
	<!-- breadcrumb -->
	<!-- //banner -->

	<!-- login -->
	<div class="login-w3ls py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Teacher's
				<span class="font-weight-bold">Login</span>
			</h3>
			<!-- content -->
			<div class="sub-main-w3 pt-md-4">
				<form action="#" method="post" >
					<div class="form-style-agile form-group">
						<label>
							E-mail
							<i class="fas fa-user"></i>
						</label>
						<input placeholder="Email" class="form-control" name="email" type="text" required="">
					</div>
					<div class="form-style-agile form-group">
						<label>
							Password
							<i class="fas fa-unlock-alt"></i>
						</label>
						<input placeholder="Password" class="form-control" name="pass" type="password" required="">
					</div>
					<!-- switch -->
					<ul class="list-unstyled list-login">
						<li class="switch-agileits float-left">
							<label class="switch  text-capitalize">
								<input type="checkbox">
								<span class="slider-switch round"></span>
								keep me signed in
							</label>
						</li>
						<li class="float-right">
							<a href="reset-password.php" class="text-right text-white text-capitalize">forgot password?</a>
						</li>
					</ul>
					<!-- //switch -->
					<input type="submit" value="Log In" name="submit">
					<p class="text-center dont-do mt-4 px-4 py-3 text-white bg-warning">Don't have an account?
						<a href="form2.php" class="text-white  font-weight-bold">
							Register as a Teacher</a>
					</p>
					<p class="text-center dont-do mt-4 px-4 py-3 text-white bg-danger">Have an Account?
						<a href="login1.php" class="text-white  font-weight-bold">
							Login as a Student</a>
					</p>


					
					<p class="text-center dont-do mt-4 px-4 py-3 text-white bg-primary">Don't have an account?
						<a href="form1.php" class="text-white  font-weight-bold">
							Register as a Student</a>
					</p>


				</form>
			</div>
			<!-- //content -->
		</div>
	</div>
	<!-- //login -->

	<!-- brands 
	<div class="brands-w3ls py-md-5 py-4">
		<div class="container py-xl-3">
			<ul class="list-unstyled">
				<li>
					<i class="fab fa-supple"></i>
				</li>
				<li>
					<i class="fab fa-angrycreative"></i>
				</li>
				<li>
					<i class="fab fa-aviato"></i>
				</li>
				<li>
					<i class="fab fa-aws"></i>
				</li>
				<li>
					<i class="fab fa-cpanel"></i>
				</li>
				<li>
					<i class="fab fa-hooli"></i>
				</li>
				<li>
					<i class="fab fa-node"></i>
				</li>
			</ul>
		</div>
	</div>
	//brands -->

	<!-- footer -->
	<?php include('include/footer.php');?>
	<!-- //footer -->


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->
	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->

	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/edulearn.js"></script>

	<!-- //Js files -->


</body>
</html>