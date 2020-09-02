<?php
session_start();
include('../include/config.php'); 

if(isset($_POST['submit']))
{
	$email=$_POST['email'];
$pass=$_POST['pass'];
$que=mysqli_query($con,"select * from login where email='$email' && password='$pass'");	
$row=mysqli_num_rows($que);
if($row)
{
$_SESSION['email']=$email;
header('location:../admin/admin.php');
}	
else
{
$err="Pls Enter Valid Email or Password";
header('location:index.php');	
}	
	
} ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>LEarnQuik|HOME TUTOR</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="LEarnQuik Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
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
	<link rel="stylesheet" href="../css/bootstrap.css">
	<!-- Testimonials-Css -->
	<link href="../css/mislider.css" rel="stylesheet" type="text/css" />
	<link href="../css/mislider-custom.css" rel="stylesheet" type="text/css" />
	<!-- Style-Css -->
	<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="../css/style1.css" type="text/css" media="all" />
	<!-- Font-Awesome-Icons-Css -->
	<link rel="stylesheet" href="../css/fontawesome-all.css">
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

	<!-- //Web-Fonts -->
	<style type="text/css">
		@import url(https://fonts.googleapis.com/css?family=Open+Sans);

body{
  background: #f2f2f2;
  font-family: 'Open Sans', sans-serif;
}

.search {
  width:580px;
  position: relative;
  display: flex;
}

.searchTerm {
  width:580px;
  border: 3px solid #00B4CC;
  border-right: none;
  padding: 5px;
  height:36px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #00B4CC;
}

.searchButton {
  width: 40px;
  height: 36px;
  border: 1px solid #00B4CC;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 30%;
  position: absolute;
  top: 50%;
  left:15.5%;
  transform: translate(-50%, -50%);
}









	</style>

</head>

<body>
	<!-- header -->
	<header>
		<!-- top header -->
		<div class="top-head-w3ls py-2 bg-dark">
			<div class="container">
				<div class="row">
					<h1 class="text-capitalize text-white col-7">
						<i class="fas fa-book text-dark bg-white p-2 rounded-circle mr-3"></i>welcome to LEarnQuik</h1>
					<!-- social icons -->
					<div class="social-icons text-right col-5">
						<ul class="list-unstyled">
							<li>
								<a href="#" class="fab fa-facebook-f icon-border facebook rounded-circle"> </a>
							</li>
							<li class="mx-2">
								<a href="#" class="fab fa-twitter icon-border twitter rounded-circle"> </a>
							</li>
							<li>
								<a href="#" class="fab fa-google-plus-g icon-border googleplus rounded-circle"> </a>
							</li>
							<li class="ml-2">
								<a href="#" class="fas fa-rss icon-border rss rounded-circle"> </a>
							</li>
						</ul>
					</div>
					<!-- //social icons -->
				</div>
			</div>
		</div>
		<!-- //top header -->
		<!-- middle header -->
		<div class="middle-w3ls-nav">
			<div class="container">
				<div class="row ">
					<a class="logo font-italic font-weight-bold col-lg-4 text-lg-left text-center" href="index.php"><img src="../images/logo.png"></a>
					<div class="col-lg-8 right-info-agiles mt-lg-0 mt-sm-3 mt-1">
						<div class="row">
							<!--<div class="col-sm-4 nav-middle mt-3">
								<i class="far fa-envelope-open text-center mr-md-4 mr-sm-2 mr-4"></i>
								<div class="agile-addresmk">
									<p class="">
										<span class="font-weight-bold text-dark">Mail Us</span>
										<a href="mailto:mail@example.com">admin@learnquik.online</a>
									</p>
								</div>
							</div>-->
							<div class="col-sm-4 col-6 nav-middle mt-sm-0 mt-2">
								<i class="fas fa-phone-volume text-center mr-md-4 mr-sm-2 mr-4 mt-3"></i>
								<div class="agile-addresmk">
									<p class="mt-3">
										<span class="font-weight-bold text-dark">Call Us</span>
										+917903329070
									</p>
								</div>
							</div>
							<div class="col-sm-4 col-6 top-login-butt text-right mt-sm-2">
								<a href="form1.php" class="button-head-mow3 btn-success text-white mt-3">Find Tuition Teacher</a>

							</div>
							<div class="col-sm-4 col-6 top-login-butt text-right mt-sm-2">
								<a href="login.php" class="button-head-mow3 btn-success text-white mt-3"> Login/Register</a>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //middle header -->
	</header>
	<!-- //header -->

<body>
	
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
			<h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Admin
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
							<a href="#" class="text-right text-white text-capitalize">forgot password?</a>
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
	<footer>
		<div class="container py-4">
			<div class="row py-xl-5 py-sm-3">
				<div class="col-lg-6 map">
					<h2 class="contact-title text-capitalize text-white font-weight-light mb-sm-4 mb-3">our
						<span class="font-weight-bold">directions</span>
					</h2>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14488.097996415574!2d85.01382130334538!3d24.79461461020192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f32a208ffae939%3A0x23625a6805384e2e!2sSiddharth+Puri+Colony%2C+Manpur%2C+Bihar+823003!5e0!3m2!1sen!2sin!4v1564933225009!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					<div class="conta-posi-w3ls p-4 rounded">
						<h5 class="text-white font-weight-bold mb-3">Address</h5>
						<p>Siddhartha Puri Colony Road No 1,
							<span>Manpur,</span> GAYA, BIHAR</p>
					</div>
				</div>
				<div class="col-lg-6 contact-agileits-w3layouts mt-lg-0 mt-4">
					<h4 class="contact-title text-capitalize text-white font-weight-light mb-sm-4 mb-3">get in
						<span class="font-weight-bold">touch</span>
					</h4>
					<p class="conta-para-style border-left pl-4">If you have any questions about the services we provide simply use the form below. We try and respond to all queries
						and comments within 24 hours.</p>
					<div class="subscribe-w3ls my-xl-5 my-4">
						<h6 class="text-white text-capitalize mb-4">subscribe our newsletter</h6>
						<form action="#" method="post" class="subscribe_form">
							<input class="form-control" type="email" name="email" placeholder="Enter your email" required=""><br>
							<input class="form-control" type="text" name="message" placeholder="Enter your message" required=""><br>
							<button type="submit" class="btn btn-primary submit">Submit</button>
						</form>
					</div>
					<p class="para-agileits-w3layouts text-white">
						<i class="fas fa-map-marker pr-3"></i>GAYA,BIHAR</p>
					<p class="para-agileits-w3layouts text-white my-sm-3 my-2">
						<i class="fas fa-phone pr-3"></i>7004144260</p>
					<p class="para-agileits-w3layouts">
						<i class="far fa-envelope-open pr-2"></i>
						<a href="mailto:mail@example.com" class=" text-white">admin@learnquik.online</a>
					</p>
				</div>
			</div>
		</div>
		<div class="copyright-agiles py-3">
			<div class="container">
				<div class="row">
					<p class="col-lg-8 copy-right-grids text-white text-lg-left text-center mt-lg-1">© 2018 LEarnQuik. All Rights Reserved |
					</p>
					<!-- social icons -->
					<div class="social-icons text-lg-right text-center col-lg-4 mt-lg-0 mt-3">
						<ul class="list-unstyled">
							<li>
								<a href="#" class="fab fa-facebook-f icon-border facebook rounded-circle"> </a>
							</li>
							<li class="mx-2">
								<a href="#" class="fab fa-twitter icon-border twitter rounded-circle"> </a>
							</li>
							<li>
								<a href="#" class="fab fa-google-plus-g icon-border googleplus rounded-circle"> </a>
							</li>
							<li class="ml-2">
								<a href="#" class="fas fa-rss icon-border rss rounded-circle"> </a>
							</li>
						</ul>
					</div>
					<!-- //social icons -->
				</div>
			</div>
		</div>
	</footer>
	<!-- //footer -->
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