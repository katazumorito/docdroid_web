	<?php session_start(); ?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">

	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Medical</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!-- my datatables -->
		<link rel="stylesheet" type="text/css" href="vendor/DataTables/datatables.min.css" />

		<!-- end of datatables -->
		<link rel="stylesheet" type="text/css" href="vendor/sweetalert2/dist/sweetalert2.css">

		<!--CSS	============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/jquery-ui.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<!-- <link rel="stylesheet" href="css/jquery-ui.css">			 -->
		<link rel="stylesheet" href="css/main.css">

		<style>
			.d-none {
				/* display: hidden; */
				color: red;
			}
		</style>
	</head>

	<body>
		<header id="header">
			<div class="header-top">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 col-sm-6 col-4 header-top-left">
							<p style="color:white;">Welcome, Doctor <?php echo $_SESSION["login_info"]["fullname"]; ?></p>
						</div>
						<div class="col-lg-6 col-sm-6 col-8 header-top-right">
							<a href="index.html" class="primary-btn text-uppercase">Logout</a>
						</div>
					</div>
				</div>
			</div>
			<div class="container main-menu">
				<div class="row align-items-center justify-content-between d-flex">
					<div id="logo">
						<a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
					</div>
					<nav id="nav-menu-container">
						<ul class="nav-menu">
							<li><a href="index.html">Home</a></li>
							<li><a href="#">Cure Rate ( dead link )</a></li>
							<!-- <li><a href="#">Income</a></li> -->
							<li><a href="#" id="referPatient">Refer a Patient</a></li>
							<!-- <li><a href="contact.html">Contacts</a></li> -->
							<!-- <li class="menu-has-children"><a href="">Blog</a>
			            <ul>
			              <li><a href="blog-home.html">Blog Home</a></li>
			              <li><a href="blog-single.html">Blog Single</a></li>
			            </ul>
			          </li>	 -->
							<li class="menu-has-children"><a href="#">Manage</a>
								<ul>

									<li><a href="manage-staff.php">Manage Staffs</a></li>
									<li><a href="manage-patients.php">Manage Patients</a></li>
									<!-- <li><a href="features.html">Manage Account</a></li> -->
									<!-- <li><a href="doctors.html">Manage Website</a></li> -->

									<!-- <li class="menu-has-children"><a href="">Level 2 </a>
					            <ul>
					              <li><a href="#">Item One</a></li>
					              <li><a href="#">Item Two</a></li>
					            </ul>
					          </li>					                		 -->
								</ul>
							</li>
							<!-- <li><a href="index.html">Logout</a></li> -->
						</ul>
					</nav><!-- #nav-menu-container -->
				</div>
			</div>
		</header><!-- #header -->

		<!-- start banner Area -->
		<section class="banner-area relative about-banner" id="home">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row d-flex align-items-center justify-content-center">
					<div class="about-content col-lg-12">
						<h1 class="text-white">
							Manage Staffs
						</h1>
						<!-- <p class="text-white link-nav"><a href="index.html">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="features.html"> Features</a></p> -->
					</div>
				</div>
			</div>
		</section>
		<!-- End banner Area -->

		<!-- Start facilities Area -->
		<section class="facilities-area section-gap">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-70 col-lg-12">
						<div class="title text-center">
							<h1 class="mb-10">Manage Staffs</h1>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. </p> -->
						</div>
					</div>
				</div>
				<div class="row d-flex justify-content-center">
					<div class="container">
						<div class="row justify-content-between align-items-center pb-120 appointment-wrap">
							<div class="col-lg-12 col-md-12 appointment-left mx-auto">
								<div class="text-right">
									<button type="button" class="nw-btn primary-btn circle mb-1" onclick="add_staff()">Add Staff</button>
								</div>
								<div class="text-center">
									<div class="table-responsive">
										<table id="list_of_staff" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%;">
											<thead>
												<tr>
													<th>Id</th>
													<th>Name</th>
													<th>Address</th>
													<th>Position</th>
													<th>Account Status</th>
													<th>Actions</th>
												</tr>
											</thead>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			</div>
		</section>
		<!-- End facilities Area -->


		<!-- Start brands Area -->
		<section class="brands-area">
			<div class="container">
				<div class="brand-wrap section-gap">
					<div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
						<div class="col single-brand">
							<a href="#"><img class="mx-auto" src="img/l1.png" alt=""></a>
						</div>
						<div class="col single-brand">
							<a href="#"><img class="mx-auto" src="img/l2.png" alt=""></a>
						</div>
						<div class="col single-brand">
							<a href="#"><img class="mx-auto" src="img/l3.png" alt=""></a>
						</div>
						<div class="col single-brand">
							<a href="#"><img class="mx-auto" src="img/l4.png" alt=""></a>
						</div>
						<div class="col single-brand">
							<a href="#"><img class="mx-auto" src="img/l5.png" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End brands Area -->

		<!-- start footer Area -->
		<footer class="footer-area section-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-2  col-md-6">
						<div class="single-footer-widget">
							<h6>Top Products</h6>
							<ul class="footer-nav">
								<li><a href="#">Managed Website</a></li>
								<li><a href="#">Manage Reputation</a></li>
								<li><a href="#">Power Tools</a></li>
								<li><a href="#">Marketing Service</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4  col-md-6">
						<div class="single-footer-widget mail-chimp">
							<h6 class="mb-20">Contact Us</h6>
							<p>
								56/8, Santa bullevard, Rocky beach, San fransisco, Los angeles, USA
							</p>
							<h3>012-6532-568-9746</h3>
							<h3>012-6532-568-97468</h3>
						</div>
					</div>
					<div class="col-lg-6  col-md-12">
						<div class="single-footer-widget newsletter">
							<h6>Newsletter</h6>
							<p>You can trust us. we only send promo offers, not a single spam.</p>
							<div id="mc_embed_signup">
								<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

									<div class="form-group row" style="width: 100%">
										<div class="col-lg-8 col-md-12">
											<input name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" required="" type="email">
										</div>

										<div class="col-lg-4 col-md-12">
											<button class="nw-btn primary-btn circle">Subscribe<span class="lnr lnr-arrow-right"></span></button>
										</div>
									</div>
									<div class="info"></div>
								</form>
							</div>
						</div>
					</div>
				</div>

				<div class="row footer-bottom d-flex justify-content-between">
					<p class="col-lg-8 col-sm-12 footer-text m-0">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
					<div class="col-lg-4 col-sm-12 footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>
			</div>
		</footer>
		<!-- End footer Area -->



		<script src="vendor/DataTables/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
		<!-- <script src="js/vendor/jquery-2.2.4.min.js"></script> -->
		<script src="vendor/DataTables/datatables.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/easing.min.js"></script>
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/jquery.tabs.min.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/mail-script.js"></script>
		<script src="js/main.js"></script>
		<script src="js/myjs/actionsStaff.js"></script>
		<script src="vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
		<script src="js/myjs/actionsPrintReferral.js"></script>


		<script type="text/javascript">
			$(document).ready(function() {
				var table = $('#list_of_staff').DataTable({
					dom: '<"dt-custom">frtip',
					pageLength: 10,
					processing: true,
					// serverSide: true,
					ajax: {
						url: './php/staff/listofstaff.php',
						dataSrc: ''
					},
					columns: [{
							data: 'account_id',
							searchable: true
						},
						{
							data: 'fullname',
							searchable: true
						},
						{
							data: 'user_address',
							searchable: true
						},
						{
							data: 'role',
							searchable: true
						},
						{
							data: 'account_status',
							searchable: true
						},
						{
							data: 'actions',
							searchable: false
						}
					],
				});

				//new $.fn.dataTable.FixedHeader( table );
			});
		</script>
	</body>


	</html>