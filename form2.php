<?php include('include/config.php');?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>LEarnQuik|Teacher's Form</title>
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
	<!-- header -->
	<?php include('include/header.php'); ?>
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
			<li class="breadcrumb-item active" aria-current="page">Teacher's Form</li>
		</ol>
	</nav>
	<!-- breadcrumb -->
	<!-- //banner -->
	<?php include('insertion1.php');?>

	<!-- admission form -->
	<div class="form-w3l py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">TEACHER'S
				<span class="font-weight-bold">DETAILS</span>
			</h3>
			<div class="register-form pt-md-4">
				<form action="#" method="post" enctype="multipart/form-data">
					<div class="styled-input form-group">
						<input type="text" class="form-control" placeholder="Your Name" name="name" required="">
					</div>
					<div class="styled-input form-group">
						<input id="datepicker" class="form-control" placeholder="Birth Date" name="bdate" type="text" value="" onfocus="this.value = '';"
						 onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
					</div>
					<div class="styled-input agile-styled-input-top form-group">
						<select class="category2" name="t_gender" required="">
							<option value="">Gender</option>
							<option value="Female">Female</option>
							<option value="Male">Male</option>
							<option value="Other">Other</option>
						</select>
					</div>
					<div class="styled-input form-group">
						<input type="email" class="form-control" placeholder="Your E-mail" name="email" required="">
					</div>
					<div class="styled-input form-group">
						<input type="text" class="form-control" placeholder="Phone Number" name="phone" required="">
					</div>
					<div class="styled-input form-group">
						<input type="password" class="form-control" placeholder="Create your Password" name="password" required="">
					</div>
					<div class="styled-input form-group">
						<input type="text" class="form-control" placeholder="Your Qualification" name="qual" required="">
					</div>
					<div class="styled-input form-group">
						<input type="text" class="form-control" placeholder="Subjects You Teach" name="subject" required="">
					</div>
					<div class="styled-input form-group">
						<input type="text" class="form-control" placeholder="Classes and Courses you Teach" name="t_class" required="">
					</div>
					
					<div class="styled-input form-group">
						<div class="styled-input agile-styled-input-top form-group">
						<select class="category2" name="t_city" required="">
							<option value="">Select City</option>
							<option value="Patna">Patna</option>
							<option value="Gaya">Gaya</option>
							<option value="Kathihar">Kathihar</option>
							<option value="Rajgir">Rajgir</option>
							<option value="Nawada">Nawada</option>
							<option value="Muzzafarpur">Muzzafarpur</option>
							<option value="Hajipur">Hajipur</option>
							<option value="Bhagalpur">Bhagalpur</option>
							<option value="Chhapra">Chhapra</option>
							<option value="Samastipur">Samastipur</option>
							<option value="Darbhanga">Darbhanga</option>
							<option value="Nalanda">Nalanda</option>
							<option value="Bakhtiyarpur">Bakhtiyarpur</option>
							<option value="Purnea">Purnea</option>
							<option value="Motihari">Motihari</option>
							<option value="Madhepura">Madhepura</option>
							<option value="Saharsa">Saharsa</option>
							<option value="Sasaram">Sasaram</option>
							<option value="Begusarai">Begusarai</option>
							<option value="Supaul">Supaul</option>
							<option value="Sitamarhi">Sitamarhi</option>
							<option value="Gopalganj">Gopalganj</option>
							<option value="Bodhgaya">Bodhgaya</option>
							<option value="Others">Others</option>
						</select>
						<span></span>
					</div>
					<div class="styled-input form-group">
						<div class="agileits_w3layouts_grid">
							<select class="category2" name="t_time" required="">
								<option value="">Select Preferred Tuition Time</option>
								<option value="Morning">Morning</option>
								<option value="Evening">Evening</option>
								<option value="Anytime">Anytime</option>
							</select>
						</div>
					</div>
					<div class="styled-input">
						<label class="header-admin-form font-weight-bold text-dark my-3">Your Address</label>
						<div class="form-group">
							<input type="text" name="address" class="form-control" placeholder="Address" title="Please enter your Address" required="">
						</div>
						<div class="form-group">
							<input type="text" name="city" class="form-control" placeholder="City" title="Please enter your City" required="">
						</div>
						<div class="form-group">
							<input type="text" name="pincode" class="form-control" placeholder="Pin Code" title="Please enter your Pin code" required="">
						</div>
					</div>
					<div class="styled-input form-group">
						<input type="text" class="form-control" placeholder="Describe Yourself in 40-50 words" name="t_desc" required=""></div>
						<div class="styled-input form-group">
							<label>Upload Photo</label>
						<input name="file1"  type="file" required=""></div>
						<div class="styled-input form-group">
							<label>Upload Resume</label>
						<input name="file2"  type="file"  required="">
					</div>
					<input type="submit" name="submit" value="Submit">
					
				</form>


			</div>

		</div>
<h3 class="text-center"><a href="login.php"><button class="btn btn-success text-center">Already have an Account ?  LOGIN</button></a></h3>
	</div>
	
	<!-- admission form -->


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
	<?php include('include/footer.php'); ?>
	<!-- //footer -->


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->
	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- Calendar -->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->

	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/LEarnQuik.js"></script>

	<!-- //Js files -->

</body>

</html>