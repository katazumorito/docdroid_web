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
		<!-- <script src="vendor/DataTables/jQuery-3.3.1/jquery-3.3.1.min.js"></script> -->
		<style type="text/css">
			.d-none {
				/* display: hidden; */
				color: red;
			}

			/* td.details-control {
							background: url('./res/icon/android/icons8-add-new-32.png') no-repeat center;
							cursor: pointer;
					}
					tr.shown td.details-control {
							background: url('./res/icon/android/icons8-delete-30.png') no-repeat center;
					} */
			.pull-right {
				float: right !important;
			}

			.dataTables_filter {
				text-align: right !important;
			}

			thead input {
				width: 100%;
			}

			th {
				white-space: nowrap;
			}

			.dt-button-collection {
				max-height: 200px;
				overflow-y: scroll;
			}
		</style>
		<script type="text/javascript">

		</script>
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
							<li><a href="doctors.php">Home</a></li>
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
									<!-- <li><a href="doctors.php">Manage Website</a></li> -->

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
							Manage Patients
						</h1>
						<p class="text-white link-nav"><a href="index.html">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="features.html"> Features</a></p>
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
							<h1 class="mb-10">Manage Patients</h1>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. </p> -->
						</div>
					</div>
				</div>
				<div class="row d-flex justify-content-center">
					<div class="container">
						<div class="row justify-content-between align-items-center pb-120 appointment-wrap">
							<div class="col-lg-12 col-md-12 appointment-left mx-auto">
								<div class="row">
									<div class="float-left col-sm-6">
										<button type="button" class="nw-btn primary-btn circle mb-1" onclick="add_patient()">Add Patient</button>
									</div>
									<div class="float-right col-sm-6">
										<div class="default-select float-right" id="default-select">
											<select name="customFilter" id="customFilter" onchange="myfunc()">
												<option value="">All</option>
												<option value="2">Name</option>
												<option value="3">Birthdate</option>
												<option value="4">Age</option>
												<option value="5">Sex</option>
												<option value="10">Address</option>
												<option value="11">Term</option>
											</select>
										</div>
									</div>
								</div>

								<div class="text-center">
									<!-- <div class="table-responsive"> -->
									<table id="example" cellpadding="55" class="dataTable display table table-dark table-striped" style="width:100%;">
										<thead>
											<tr>
												<th></th>
												<th>Id</th>
												<th>Name</th>
												<th>Birthdate</th>
												<th>Age</th>
												<th>Sex</th>
												<th>Mother</th>
												<th>Mother's Age</th>
												<th>Father</th>
												<th>Father's Age</th>
												<th>Address</th>
												<th>term</th>
												<th>delivery</th>
												<th>birthWeight</th>
												<th>birthLength</th>
												<th>headCirc</th>
												<th>chestCirc</th>
												<th>abdominalCirc</th>
												<th>headUp</th>
												<th>diMatarusan</th>
												<th>satUp</th>
												<th>standUp</th>
												<th>walked</th>
												<th>words</th>
												<th>sentence</th>
												<th>firstTooth</th>
												<th>cupTraining</th>
												<th>toiletTraining</th>
												<th>otherBHD</th>
												<th>allergy</th>
												<th>diMatarusan2</th>
												<th>measles</th>
												<th>rubella</th>
												<th>mumps</th>
												<th>chickenPox</th>
												<th>diphtheria</th>
												<th>asthma</th>
												<th>rheumaticFever</th>
												<th>otitisMedia</th>
												<th>convultion</th>
												<th>operations</th>
												<th>otherIllness</th>
												<th>typeOfFeeding</th>
												<th>supplementary</th>
												<th>bcg1</th>
												<th>bcg2</th>
												<th>bcg3</th>
												<th>bcg4</th>
												<th>bcgR</th>
												<th>dpt1</th>
												<th>dpt2</th>
												<th>dpt3</th>
												<th>dpt4</th>
												<th>dptR</th>
												<th>opv1</th>
												<th>opv2</th>
												<th>opv3</th>
												<th>opv4</th>
												<th>opvR</th>
												<th>hbv1</th>
												<th>hbv2</th>
												<th>hbv3</th>
												<th>hbv4</th>
												<th>hbvR</th>
												<th>hib1</th>
												<th>hib2</th>
												<th>hib3</th>
												<th>hib4</th>
												<th>hibR</th>
												<th>measles1</th>
												<th>measles2</th>
												<th>measles3</th>
												<th>measles4</th>
												<th>measlesR</th>
												<th>mmr1</th>
												<th>mmr2</th>
												<th>mmr3</th>
												<th>mmr4</th>
												<th>mmrR</th>
												<th>varicella1</th>
												<th>varicella2</th>
												<th>varicella3</th>
												<th>varicella4</th>
												<th>varicellaR</th>
												<th>hav1</th>
												<th>hav2</th>
												<th>hav3</th>
												<th>hav4</th>
												<th>havR</th>
												<th>typhoidFever1</th>
												<th>typhoidFever2</th>
												<th>typhoidFever3</th>
												<th>typhoidFever4</th>
												<th>typhoidFeverR</th>
												<th>flu1</th>
												<th>flu2</th>
												<th>flu3</th>
												<th>flu4</th>
												<th>fluR</th>
												<th>td1</th>
												<th>td2</th>
												<th>td3</th>
												<th>td4</th>
												<th>tdR</th>

											</tr>
										</thead>
										<!-- <tfoot>
																	<tr>
																				<th></th>
																				<th>Id</th>
																				<th>Name</th>
																				<th>Birthdate</th>
																				<th>Age</th>
																				<th>Sex</th>
																				<th>Mother</th>
																				<th>Mother's Age</th>
																				<th>Father</th>
																				<th>Father's Age</th>
																				<th>Address</th>
																				<th>term</th>
																				<th>delivery</th>
																				<th>birthWeight</th>
																				<th>birthLength</th>
																				<th>headCirc</th>
																				<th>chestCirc</th>
																				<th>abdominalCirc</th>
																				<th>headUp</th>
																				<th>diMatarusan</th>
																				<th>satUp</th>
																				<th>standUp</th>
																				<th>walked</th>
																				<th>words</th>
																				<th>sentence</th>
																				<th>firstTooth</th>
																				<th>cupTraining</th> 
																				<th>toiletTraining</th>
																				<th>otherBHD</th>
																				<th>allergy</th>
																				<th>diMatarusan2</th>
																				<th>measles</th>
																				<th>rubella</th>
																				<th>mumps</th>
																				<th>chickenPox</th>
																				<th>diphtheria</th>
																				<th>asthma</th>
																				<th>rheumaticFever</th>
																				<th>otitisMedia</th>
																				<th>convultion</th>
																				<th>operations</th>
																				<th>otherIllness</th>
																				<th>typeOfFeeding</th>
																				<th>supplementary</th>
																				<th>bcg1</th>
																				<th>bcg2</th>
																				<th>bcg3</th>
																				<th>bcg4</th>
																				<th>bcgR</th>
																				<th>dpt1</th>
																				<th>dpt2</th>
																				<th>dpt3</th> 
																				<th>dpt4</th>
																				<th>dptR</th>
																				<th>opv1</th>
																				<th>opv2</th>
																				<th>opv3</th>
																				<th>opv4</th>
																				<th>opvR</th>
																				<th>hbv1</th>
																				<th>hbv2</th>
																				<th>hbv3</th>
																				<th>hbv4</th>
																				<th>hbvR</th>
																				<th>hib1</th>
																				<th>hib2</th>
																				<th>hib3</th>
																				<th>hib4</th>
																				<th>hibR</th>
																				<th>measles1</th> 
																				<th>measles2</th>
																				<th>measles3</th>
																				<th>measles4</th>
																				<th>measlesR</th>
																				<th>mmr1</th>
																				<th>mmr2</th>
																				<th>mmr3</th>
																				<th>mmr4</th>
																				<th>mmrR</th>
																				<th>varicella1</th> 
																				<th>varicella2</th>
																				<th>varicella3</th>
																				<th>varicella4</th>
																				<th>varicellaR</th>
																				<th>hav1</th>
																				<th>hav2</th>
																				<th>hav3</th>
																				<th>hav4</th>
																				<th>havR</th>
																				<th>typhoidFever1</th>
																				<th>typhoidFever2</th>
																				<th>typhoidFever3</th>
																				<th>typhoidFever4</th>
																				<th>typhoidFeverR</th>
																				<th>flu1</th>
																				<th>flu2</th>
																				<th>flu3</th>
																				<th>flu4</th>
																				<th>fluR</th>
																				<th>td1</th> 
																				<th>td2</th>
																				<th>td3</th>
																				<th>td4</th>
																				<th>tdR</th>

																	</tr>
																</tfoot> -->
									</table>
									<!-- </div> -->
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
		<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script> -->
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
		<script src="js/myjs/actionsPatient.js"></script>
		<script src="vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
		<script src="vendor/daterangepicker/moment.min.js"></script>
		<script src="vendor/tempusdominus-bootstrap-4/src/js/tempusdominus-bootstrap-4.js"></script>
		<script src="js/myjs/actionsPrintReferral.js"></script>


		<script type="text/javascript">
			function myfunc() {
				var table = $('#example').DataTable();
				//table.column().search("").draw();
				var val = document.getElementById("customFilter").value;
				$('.dataTables_filter input').unbind().keyup(function() {
					var searchTerm = this.value.toLowerCase(),
						regex = '\\b' + searchTerm + '\\b';
					table
						.columns()
						.search('')
						.columns(val)
						.search(regex, true, false, true)
						.draw();
					console.log(val);
				});

				//  $('#example').on('search.dt', function() {

				// <-- the value
				//});

			}
			/* Formatting function for row details - modify as you need */
			// function format ( d ) {
			// 	// `d` is the original data object for the row
			// 	return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
			// 		'<tr>'+
			// 			'<td colspan="2">'+d.actions+'</td>'+
			// 		'</tr>'
			// 		+'<tr>'
			// 			+'<td>'+
			// 				'<table cellpadding="5" cellspacing="0" border="2px">'+
			// 					'<tr>'+
			// 						'<td class="strong">Term:</td>'+
			// 						'<td>'+d.term+'</td>'+
			// 						'<td class="border-0"></td>'+
			// 						'<td>Delivery:</td>'+
			// 						'<td>'+d.delivery+'</td>'+
			// 						'<td class="border-0"></td>'+
			// 						'<td>Delivversdy:</td>'+
			// 						'<td>'+d.delivery+'</td>'+
			// 					'</tr>'+
			// 					'<tr>'+
			// 						'<td>Term:</td>'+
			// 						'<td>'+d.term+'</td>'+
			// 						'<td class="border-0"></td>'+
			// 						'<td>Delivery:</td>'+
			// 						'<td>'+d.delivery+'</td>'+
			// 						'<td class="border-0"></td>'+
			// 						'<td>Delivversdy:</td>'+
			// 						'<td>'+d.delivery+'</td>'+
			// 					'</tr>'+
			// 					'<tr>'+
			// 						'<td>Term:</td>'+
			// 						'<td>'+d.term+'</td>'+
			// 						'<td class="border-0"></td>'+
			// 						'<td>Delivery:</td>'+
			// 						'<td>'+d.delivery+'</td>'+
			// 						'<td class="border-0"></td>'+
			// 						'<td>Delivversdy:</td>'+
			// 						'<td>'+d.delivery+'</td>'+
			// 					'</tr>'+
			// 				'</table>'+
			// 			'</td>'+
			// 		'</tr>'+

			// 	'</table>';
			// }



			function exportTableToCSV($table, filename) {

				//rescato los títulos y las filas
				var $Tabla_Nueva = $table.find('tr:has(td,th)');
				// elimino la tabla interior.
				var Tabla_Nueva2 = $Tabla_Nueva.filter(function() {
					return (this.childElementCount != 1);
				});

				var $rows = Tabla_Nueva2,
					// Temporary delimiter characters unlikely to be typed by keyboard
					// This is to avoid accidentally splitting the actual contents
					tmpColDelim = String.fromCharCode(11), // vertical tab character
					tmpRowDelim = String.fromCharCode(0), // null character

					// Solo Dios Sabe por que puse esta linea
					colDelim = (filename.indexOf("xls") != -1) ? '"\t"' : '","',
					rowDelim = '"\r\n"',


					// Grab text from table into CSV formatted string
					csv = '"' + $rows.map(function(i, row) {
						var $row = $(row);
						var $cols = $row.find('td:not(.hidden),th:not(.hidden)');

						return $cols.map(function(j, col) {
							var $col = $(col);
							var text = $col.text().replace(/\./g, '');
							return text.replace('"', '""'); // escape double quotes

						}).get().join(tmpColDelim);
						csv = csv + '"\r\n"' + 'fin ' + '"\r\n"';
					}).get().join(tmpRowDelim)
					.split(tmpRowDelim).join(rowDelim)
					.split(tmpColDelim).join(colDelim) + '"';


				download_csv(csv, filename);


			}



			function download_csv(csv, filename) {
				var csvFile;
				var downloadLink;

				// CSV FILE
				csvFile = new Blob([csv], {
					type: "text/csv"
				});

				// Download link
				downloadLink = document.createElement("a");

				// File name
				downloadLink.download = filename;

				// We have to create a link to the file
				downloadLink.href = window.URL.createObjectURL(csvFile);

				// Make sure that the link is not displayed
				downloadLink.style.display = "none";

				// Add the link to your DOM
				document.body.appendChild(downloadLink);

				// Lanzamos
				downloadLink.click();
			}


			function hello() {

				var divToPrint = document.getElementById("example");
				var newWin = window.open("", "printable");
				//    newWin.onload = ()=>{
				newWin.document.write('<html><head><title>Print it!</title><link rel="stylesheet" type="text/css" href="css/printable.css"></head><body><div class="center"><table class="zui-table">');
				newWin.document.write(divToPrint.innerHTML);

				newWin.document.write('</table></div></body></html>');

				setTimeout(() => {
					newWin.print();
					newWin.close();
				}, 250);

				//	}
			};



			$(function() {
				$('[data-toggle="tooltip"]').tooltip();
				var table = $('#example').DataTable({
					initComplete: function() {
						this.api().columns([1, 2, 3, 4, 5, 6, 8, 10]).every(function() {
							var column = this;
							var select = $('<select><option value=""></option></select>')
								.appendTo($(column.footer()).empty())
								.on('change', function() {
									var val = $.fn.dataTable.util.escapeRegex(
										$(this).val()
									);

									column
										.search(val ? '^' + val + '$' : '', true, false)
										.draw();
								});

							column.data().unique().sort().each(function(d, j) {
								select.append('<option value="' + d + '">' + d + '</option>')
							});
						});
					},
					dom: 'B<"float-left"l><"float-right"f>rt<"row"<"col-sm-4"><"col-sm-4"i><"col-sm-4"p>>',
					"columnDefs": [
						// {
						//  "visible": false, "targets": 0,
						//  "visible": false, "targets": 1,
						//  "visible": false, "targets": 2
						//  }
					],
					buttons: [{
							extend: 'copyHtml5',
							text: '<i class="fa fa-copy"></i>',
							titleAttr: 'Copy'
						},
						{
							extend: 'print',
							text: '<i class="fa fa-print"></i>',
							titleAttr: 'Print',
							action: function() {
								hello();
							}
						},
						{
							extend: 'excelHtml5',
							text: '<i class="fa fa-file-excel-o"></i>',
							titleAttr: 'Excel',
							//   "oSelectorOpts": { filter: 'applied', order: 'current' },
							//   "sFileName": "report.xls",
							//   action : function( e, dt, button, config ) {
							//       exportTableToCSV.apply(this, [$('#example'), 'export.xls']);

							//   }

						},
						{
							extend: 'csvHtml5',
							text: '<i class="fa fa-file-text-o"></i>',
							titleAttr: 'CSV',
							//   exportOptions: {
							//       columns: ':visible'
							//   },
							//   action : function( e, dt, button, config ) {
							//       exportTableToCSV.apply(this, [$('#example'), 'export.csv']);

							//   }

						},
						{
							extend: 'colvis',
							columns: ':not(.noVis)',
							//columns: ':gt(4)',
							text: '<i class="fa fa-columns" aria-hidden="true"></i>',
							titleAttr: 'Column Visibility',
							exportOptions: {
								columns: ':visible',
							}
						},

					],

					// language: {
					// 	search: "_INPUT_",
					// 	searchPlaceholder: "Search..."
					// 		},
					// orderCellsTop: true,
					// fixedHeader: true,
					//pageLength: 5,
					responsive: {
						details: {
							renderer: function(api, rowIdx, columns) {
								var data = $.map(columns, function(col, i) {
									return col.hidden ?
										'<tr data-dt-row="' + col.rowIndex + '" data-dt-column="' + col.columnIndex + '">' +
										'<td>' + col.title + ':' + '</td> ' +
										'<td>' + col.data + '</td>' +
										'</tr>' :
										'';
								}).join('');

								return data ?
									$('<table/>').append(data) :
									false;
							}

						}
					},
					lengthMenu: [
						[5, 10, 25, 50, -1],
						[5, 10, 25, 50, "All"]
					],
					processing: true,
					ajax: {
						url: './php/patient/listofpatient.php',
						dataSrc: ''
					},
					"columns": [{
							"className": 'details-control',
							"orderable": false,
							"data": null,
							"defaultContent": ''
						},
						{
							"data": "p_id"
						},
						{
							"data": "fullname"
						},
						{
							"data": 'bdate'
						},
						{
							"data": 'age'
						},
						{
							"data": 'sex'
						},
						{
							"data": 'mother'
						},
						{
							"data": 'mAge'
						},
						{
							"data": 'father'
						},
						{
							"data": 'fAge'
						},
						{
							"data": 'p_address'
						},

						{
							"data": 'term'
						},
						{
							"data": 'delivery'
						},
						{
							"data": 'birthWeight'
						},
						{
							"data": 'birthLength'
						},
						{
							"data": 'headCirc'
						},
						{
							"data": 'chestCirc'
						},
						{
							"data": 'abdominalCirc'
						},
						{
							"data": 'headUp'
						},
						{
							"data": 'diMatarusan'
						},
						{
							"data": 'satUp'
						},
						{
							"data": 'standUp'
						},
						{
							"data": 'walked'
						},
						{
							"data": 'words'
						},
						{
							"data": 'sentence'
						},
						{
							"data": 'firstTooth'
						},
						{
							"data": 'cupTraining'
						},
						{
							"data": 'toiletTraining'
						},
						{
							"data": 'otherBHD'
						},
						{
							"data": 'allergy'
						},
						{
							"data": 'diMatarusan2'
						},
						{
							"data": 'measles'
						},
						{
							"data": 'rubella'
						},
						{
							"data": 'mumps'
						},
						{
							"data": 'chickenPox'
						},
						{
							"data": 'diphtheria'
						},
						{
							"data": 'asthma'
						},
						{
							"data": 'rheumaticFever'
						},
						{
							"data": 'otitisMedia'
						},
						{
							"data": 'convultion'
						},
						{
							"data": 'operations'
						},
						{
							"data": 'otherIllness'
						},
						{
							"data": 'typeOfFeeding'
						},
						{
							"data": 'supplementary'
						},
						{
							"data": 'bcg1'
						},
						{
							"data": 'bcg2'
						},
						{
							"data": 'bcg3'
						},
						{
							"data": 'bcg4'
						},
						{
							"data": 'bcgR'
						},
						{
							"data": 'dpt1'
						},
						{
							"data": 'dpt2'
						},
						{
							"data": 'dpt3'
						},
						{
							"data": 'dpt4'
						},
						{
							"data": 'dptR'
						},
						{
							"data": 'opv1'
						},
						{
							"data": 'opv2'
						},
						{
							"data": 'opv3'
						},
						{
							"data": 'opv4'
						},
						{
							"data": 'opvR'
						},
						{
							"data": 'hbv1'
						},
						{
							"data": 'hbv2'
						},
						{
							"data": 'hbv3'
						},
						{
							"data": 'hbv4'
						},
						{
							"data": 'hbvR'
						},
						{
							"data": 'hib1'
						},
						{
							"data": 'hib2'
						},
						{
							"data": 'hib3'
						},
						{
							"data": 'hib4'
						},
						{
							"data": 'hibR'
						},
						{
							"data": 'measles1'
						},
						{
							"data": 'measles2'
						},
						{
							"data": 'measles3'
						},
						{
							"data": 'measles4'
						},
						{
							"data": 'measlesR'
						},
						{
							"data": 'mmr1'
						},
						{
							"data": 'mmr2'
						},
						{
							"data": 'mmr3'
						},
						{
							"data": 'mmr4'
						},
						{
							"data": 'mmrR'
						},
						{
							"data": 'varicella1'
						},
						{
							"data": 'varicella2'
						},
						{
							"data": 'varicella3'
						},
						{
							"data": 'varicella4'
						},
						{
							"data": 'varicellaR'
						},
						{
							"data": 'hav1'
						},
						{
							"data": 'hav2'
						},
						{
							"data": 'hav3'
						},
						{
							"data": 'hav4'
						},
						{
							"data": 'havR'
						},
						{
							"data": 'typhoidFever1'
						},
						{
							"data": 'typhoidFever2'
						},
						{
							"data": 'typhoidFever3'
						},
						{
							"data": 'typhoidFever4'
						},
						{
							"data": 'typhoidFeverR'
						},
						{
							"data": 'flu1'
						},
						{
							"data": 'flu2'
						},
						{
							"data": 'flu3'
						},
						{
							"data": 'flu4'
						},
						{
							"data": 'fluR'
						},
						{
							"data": 'td1'
						},
						{
							"data": 'td2'
						},
						{
							"data": 'td3 '
						},
						{
							"data": 'td4'
						},
						{
							"data": 'tdR'
						}
						// { "orderable":false, "data": "actions",  }
					],
					"order": [
						[1, 'asc']
					]
				}); //end of table



				// Add event listener for opening and closing details
				// $('#example tbody').on('click', 'td.details-control', function () {
				//     var tr = $(this).closest('tr');
				//     var row = table.row( tr );

				//     if ( row.child.isShown() ) {
				//         // This row is already open ergo close it
				//         row.child.hide();
				//         tr.removeClass('shown');
				//     }
				//     else {
				//         // Open this row
				//         row.child( format(row.data()) ).show();
				//         tr.addClass('shown');
				//     }
				// } );
			});
		</script>
	</body>


	</html>