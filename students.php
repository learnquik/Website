<?php include'include/header.php'; ?>
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
							<a class="nav-link text-white" href="teachers.php">Teacher's List</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link text-white" href="students.php">Need's/Job List</a>
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
			<li class="breadcrumb-item active" aria-current="page">Need's /Job List</li>
		</ol>
	</nav>
	<!-- breadcrumb -->
	<!-- //banner -->
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	body{
		margin: 0;
		padding: 0;
	}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width:;
  text-align:left;
  font-family: arial;
  margin-bottom: 30px;
    }

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color:green;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
.content{
	margin: 20px;
	height: 300px;
}
</style>
</head>
<body>
	<br><br>
	<div class="container">	

<h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Need's/Job
				<span class="font-weight-bold">list</span>
			</h3><br><br>
<div class="row ">
	
		<?php
		include('include/config.php');
		$query=mysqli_query($con,"select * from student");
while($res=mysqli_fetch_array($query))
{ $id=$res['id'];
?>
	<div class="col-lg-4 col-md-6 col-sm-12 text-center">
<div class="card">
  <div class="content">
   <p><b>Student's Id</b>:- <?php echo $res['id'];?></p>
  <p><b>Students Name</b>:- <capitalize><?php echo $res['name'];?></capitalize></p>
  
  <p><b>Subjects </b>:- <?php echo $res['subject'];?></p>
  <p><b>Class</b>:- <?php echo $res['s_class'];?></p>
  <p><b>Timing</b>:<?php echo $res['s_time'];?></p>
  <p><b>Address</b>:- <?php echo $res['address'];?></p>
  <p><b>City</b>:- <?php echo $res['city'];?></p>
  <p><b>Description</b>:<?php echo $res['description'];?></p>
</div>
  
  <p><a href="form1.php"><button style="background: #42a5f5;">Apply</button></a></p>
</div></div>
<?php } ?>
</div></div>

<?php include'include/footer.php'; ?>
<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->
	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- banner slider -->
	<script src="js/slider.js"></script>
	<!-- //banner slider -->

	<!-- testimonial-plugin -->
	<script src="js/mislider.js"></script>
	<script>
		jQuery(function ($) {
			var slider = $('.mis-stage').miSlider({
				//  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
				stageHeight: 320,
				//  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
				slidesOnStage: false,
				//  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
				slidePosition: 'center',
				//  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
				slideStart: 'mid',
				//  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
				slideScaling: 150,
				//  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
				offsetV: -5,
				//  Center slide contents vertically - Boolean. Default: false
				centerV: true,
				//  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
				navButtonsOpacity: 1,
			});
		});
	</script>
	<!-- //testimonial-plugin -->

	<!-- numscroller-js-file -->
	<script src="js/numscroller-1.0.js"></script>
	<!-- //numscroller-js-file -->

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
