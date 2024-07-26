<!DOCTYPE html>
<html lang="zxx" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

		<!-- Description -->
		<meta name="description" content="Metronal is a clean and elegant Personal Portfolio Page. Metronal comes with a very attractive, simple and beautiful design with the effectiveness of colorful simplicity.">

		<!-- Keywords -->
		<meta name="keywords" content="Metronal, Personal Page, Portfolio, CV, Resume, One Page, Web Template">

		<!-- Title -->
		<title>Lingga &mdash; Home Page</title>
        <!-- <link rel="shortcut icon" href="../app-assets/images/ico/favicon.ico"> -->
		<link rel="shortcut icon" href="http://wrraptheme.com/templates/lucid/laravel/public/favicon.ico">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,800%7COpen+Sans:400,400i,700" rel="stylesheet">

		<!-- CSS Files -->
		<link href="/css/toastr.css" rel="stylesheet" type="text/css">
		<link href="/css/toastrr.css" rel="stylesheet" type="text/css">
		<link href="/css/bootstrap.min.css" rel="stylesheet">
		<link href="/css/magnific-popup.css" rel="stylesheet">
		<link id="changeskin" href="css/skins/skin1.css" rel="stylesheet">
		<link href="/css/custom1.css" rel="stylesheet">
		<link href="/css/nav.css" rel="stylesheet">
		<link href="/css/style.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/46f51baaf3.js" crossorigin="anonymous"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>
		<!-- Pre Load Starts -->
	    <div id="pre-load">
	    	<div class="load-circle"></div>
	    </div>
	    <!-- Pre Load Ends -->
		<!-- Wrapper Starts -->
		<div id="wrapper">
			<div class="container-fluid">
				<div class="row no-gutters v-full">
					<!-- Left Wrapper Starts -->
					<div id="left-wrapper" class="col-12 col-lg-8">
						<!-- Main Content (Home) Starts -->
						<div id="home" class="main-content">
							<!-- Content Hanging On Home Section Starts -->
							<div id="mySidenav" class="sidenav">
								<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
								<a href="/login">Login</a>
								<a href="/register">Register</a>
								@auth
								<form action="/logout" method="post">
									@csrf
									<button class="dropdown-item" type="submit" name="submit">Logout?</button>
								</form>
								@endauth
							  </div>
							<div class="hanging">
								<div class="logo-hanging">
									<a href="#home"><i class="fas fa-laptop-code" onclick="openNav()"></i></a>
								</div>
								<div class="text-hanging">
									<div class="word">
										<h6>HELLO<span>WORLD</span></a></h6>
									</div>
								</div>
							</div>
							<!-- Content Hanging On Home Section Ends -->
							<!-- Inner Content Starts -->
							<div class="inner-content">
								<!-- Head Content Starts -->
								<div class="head-content">
									<h3>Hi I'M <a href="#"><span class="name" onclick="changeColor()" title="Click me for change the theme">Lingga</span></a></h3>
									<h5>As a <span class="passion"></span></h5>
								</div>
								<!-- Head Content Ends -->
								<!-- Content Starts -->
								<div class="content">
									<!-- About Menu Starts -->
									<div id="about-menu" class="box-wrapper">
										<div class="inner-box-wrapper">
											<a href="#about" class="menu-link">
												<div class="valign-center">
													<i class="fas fa-id-card fa-3x"></i>
													<h5>About <span>Me</span></h5>
												</div>
											</a>
										</div>
									</div>
									<!-- About Menu Ends -->
									<!-- Resume Menu Starts -->
									<div id="resume-menu" class="box-wrapper">
										<div class="inner-box-wrapper">
											<a href="#resume" class="menu-link">
												<div class="valign-center">
													<i class="fas fa-newspaper fa-3x"></i>
													<h5>My <span>Resume</span></h5>
												</div>
											</a>
										</div>
									</div>
									<!-- Resume Menu Ends -->
									<!-- Portfolio Menu Starts -->
									<div id="portfolio-menu" class="box-wrapper">
										<div class="inner-box-wrapper">
											<a href="#portfolio" class="menu-link">
												<div class="valign-center">
													<i class="fas fa-toolbox fa-3x"></i>
													<h5>My <span>Portfolio</span></h5>
												</div>
											</a>
										</div>
									</div>
									<!-- Portfolio Menu Ends -->
									<!-- Contact Menu Starts -->
									<div id="contact-menu" class="box-wrapper">
										<div class="inner-box-wrapper">
											<a href="#contact" class="menu-link">
												<div class="valign-center">
													<i class="fas fa-envelope fa-3x"></i>
													<h5>Contact <span>Me</span></h5>
												</div>
											</a>
										</div>
									</div>
									<!-- Content Ends -->
									<!-- Contact Menu Ends -->
								</div> <hr color="tomato">
								<p style="text-align: center;">
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
									Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Web Designer & Development <i class="fa fa-heart" style="color: tomato;" aria-hidden="true"></i> by <a href="https://priv8-l1ng.me" target="_blank" >「 ./Priv8-L1ng 」</a>
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</p>
							</div>
							<!-- Inner Content Ends -->
						</div>
						<!-- Main Content (Home) Ends -->
						<!-- Main Content (About) Starts -->
						<div id="about" class="main-content">
							<!-- Close Button Starts -->
							<a href="#home" class="close-menu-link">
								<i class="close-button fas fa-times-circle fa-2x"></i>
							</a>
							<!-- Close Button Ends -->
							<!-- Content Hanging On About Section Starts -->
							<div class="hanging">
								<div class="logo-hanging">
									<i class="fas fa-id-card"></i>
								</div>
								<div class="text-hanging">
									<div class="word">
										<h6>ABOUT <span>ME</span></h6>
									</div>
								</div>
							</div>
							<!-- Content Hanging On About Section Ends -->
							<!-- Inner Content Starts -->
							<div class="inner-content">
								<!-- Head Content Starts -->
								<div class="head-content">
									<h3>About <a href="#"><span>Me</span></a></h3>
								</div>
								<!-- Head Content Ends -->
								<!-- Content Starts -->
								<div class="content">
									<!-- Personal Info Starts -->
									<div id="personal-info">
										<!-- Personal Info Heading Starts -->
										<h5>Personal Info</h5>
										<!-- Personal Info Heading Ends -->
										<div class="row no-gutters">
											<!-- Profile Picture Starts -->
											<div class="profile-picture col-md-2 col-sm-3 col-12"></div>
											<!-- Profile Picture Ends -->
											<!-- Summary Starts -->
											<div class="summary col-md-10 col-sm-9 col-12">
												<!-- Single Paragraph Starts -->
												{{-- <p class="test">Saya merupakan seseorang yang tertarik di dunia pemrograman khususnya aplikasi berbasis web & software oleh karena itu saya sangat sekali ingin mengimplementasikannya kepada semua orang, walaupun saya sekolah jurusan TKJ itu tidak menjadi acuan untuk saya belajar bahasa pemrograman secara otodidak.</p> --}}
												<p class="test">
													Hallo salam kenal saya <span class="fw-bold" style="color: rgb(135, 115, 115)">Muhammad Lingga</span>,<br/>

													Saya merupakan lulusan SMK tetapi saya memiliki ketertarikan di dunia IT seperti belajar bahasa pemrograman dan membuat saya ingin mempelajarinya secara otodidak.

													Pengalaman Kerja saya pernah bekerja di perusahaan crypto yang bernama 'Salmonation' selama saya kerja disana, saya ditujukan untuk membuat suatu Blockchain. jabatan saya disana sebagai FullStack Web Developer yang berfokus untuk pembuatan website Blockchain dan kerangka lainnya. selama disana saya lebih sering menggunakan Laravel & React JS dan saya sudah mengerjakan berbagai banyak project disini seperti membuat berbagai website Landing Page, Website Portal News, Website Payment Gateway.

													<ul class="my-4">
														<p class="fw-bold">Keahlian saya adalah :</p>
														<li>
															<span class="label d-flex align-items-center" style="margin-right: 5px;">
																<i class="fas fa-sharp fa-solid fa-circle" aria-hidden="true" style="font-size: 5px; margin-right: 10px;"></i>
																<span>Saya menguasai HTML, CSS, Javascript, PHP, Framework PHP (Laravel), Framework Javascript (ReactJS, Next JS), Python, Framework Python (Flask), Elixir-lang, Framework Elixir (Phoenix) Software / Application (Visual Basic).</span>
															</span>
														</li>
														<li>
															<span class="label d-flex align-items-center" style="margin-right: 5px;">
																<i class="fas fa-sharp fa-solid fa-circle" aria-hidden="true" style="font-size: 5px; margin-right: 10px;"></i>
																<span>Saya menguasai REST API.</span>
															</span>
														</li>
														<li>
															<span class="label d-flex align-items-center" style="margin-right: 5px;">
																<i class="fas fa-sharp fa-solid fa-circle" aria-hidden="true" style="font-size: 5px; margin-right: 10px;"></i>
																<span>Saya menguasai controll dengan Git.</span>
															</span>
														</li>
														<li>
															<span class="label d-flex align-items-center" style="margin-right: 5px;">
																<i class="fas fa-sharp fa-solid fa-circle" aria-hidden="true" style="font-size: 5px; margin-right: 10px;"></i>
																<span>Saya menguasai controll server menggunakan hosting maupun VPS (Virtual Private Server).</span>
															</span>
														</li>
														<li>
															<span class="label d-flex align-items-center" style="margin-right: 5px;">
																<i class="fas fa-sharp fa-solid fa-circle" aria-hidden="true" style="font-size: 5px; margin-right: 10px;"></i>
																<span>Saya menguasai sistem operation Linux.</span>
															</span>
														</li>
														<li>
															<span class="label d-flex align-items-center" style="margin-right: 5px;">
																<i class="fas fa-sharp fa-solid fa-circle" aria-hidden="true" style="font-size: 5px; margin-right: 10px;"></i>
																<span>Saya Menguasai JSON, JWT.</span>
															</span>
														</li>
													</ul>

													<ul class="my-4">
														<p class="fw-bold">Project yang pernah saya kerjakan:</p>
														<li>
															<span class="label d-flex align-items-center" style="margin-right: 5px;">
																<i class="fas fa-sharp fa-solid fa-circle" aria-hidden="true" style="font-size: 5px; margin-right: 10px;"></i>
																<span>Website Landing Page</span>
															</span>
														</li>
														<li>
															<span class="label d-flex align-items-center" style="margin-right: 5px;">
																<i class="fas fa-sharp fa-solid fa-circle" aria-hidden="true" style="font-size: 5px; margin-right: 10px;"></i>
																<span>Website Portal News</span>
															</span>
														</li>
														<li>
															<span class="label d-flex align-items-center" style="margin-right: 5px;">
																<i class="fas fa-sharp fa-solid fa-circle" aria-hidden="true" style="font-size: 5px; margin-right: 10px;"></i>
																<span>Website Payment Gateway</span>
															</span>
														</li>
														<li>
															<span class="label d-flex align-items-center" style="margin-right: 5px;">
																<i class="fas fa-sharp fa-solid fa-circle" aria-hidden="true" style="font-size: 5px; margin-right: 10px;"></i>
																<span>Website E-Commerce</span>
															</span>
														</li>
														<li>
															<span class="label d-flex align-items-center" style="margin-right: 5px;">
																<i class="fas fa-sharp fa-solid fa-circle" aria-hidden="true" style="font-size: 5px; margin-right: 10px;"></i>
																<span>Website Company Profile</span>
															</span>
														</li>
														<li>
															<span class="label d-flex align-items-center" style="margin-right: 5px;">
																<i class="fas fa-sharp fa-solid fa-circle" aria-hidden="true" style="font-size: 5px; margin-right: 10px;"></i>
																<span>Website Blog</span>
															</span>
														</li>
														<li>
															<span class="label d-flex align-items-center" style="margin-right: 5px;">
																<i class="fas fa-sharp fa-solid fa-circle" aria-hidden="true" style="font-size: 5px; margin-right: 10px;"></i>
																<span>Website Forum</span>
															</span>
														</li>
														<li>
															<span class="label d-flex align-items-center" style="margin-right: 5px;">
																<i class="fas fa-sharp fa-solid fa-circle" aria-hidden="true" style="font-size: 5px; margin-right: 10px;"></i>
																<span>Website Social Media</span>
															</span>
														</li>
														<li>
															<span class="label d-flex align-items-center" style="margin-right: 5px;">
																<i class="fas fa-sharp fa-solid fa-circle" aria-hidden="true" style="font-size: 5px; margin-right: 10px;"></i>
																<span>Website Blockchain</span>
															</span>
														</li>
													</ul>
													
													<ul class="my-4">
														<p class="fw-bold">Kelebihan Saya :</p>
														<li>
															<span class="label d-flex align-items-center" style="margin-right: 5px;">
																<i class="fas fa-sharp fa-solid fa-circle" aria-hidden="true" style="font-size: 5px; margin-right: 10px;"></i>
																<span>Saya dapat berkomunikasi dengan tim secara baik.</span>
															</span>
														</li>
														<li>
															<span class="label d-flex align-items-center" style="margin-right: 5px;">
																<i class="fas fa-sharp fa-solid fa-circle" aria-hidden="true" style="font-size: 5px; margin-right: 10px;"></i>
																<span>Saya mampu bekerja dibawah tekanan.</span>
															</span>
														</li>
														<li>
															<span class="label d-flex align-items-center" style="margin-right: 5px;">
																<i class="fas fa-sharp fa-solid fa-circle" aria-hidden="true" style="font-size: 5px; margin-right: 10px;"></i>
																<span>Saya suka belajar hal hal yang baru dan mencari suasana yang baru.</span>
															</span>
														</li>
														<li>
															<span class="label d-flex align-items-center" style="margin-right: 5px;">
																<i class="fas fa-sharp fa-solid fa-circle" aria-hidden="true" style="font-size: 5px; margin-right: 10px;"></i>
																<span>Saya dapat belajar dengan cepat.</span>
															</span>
														</li>
														<li>
															<span class="label d-flex align-items-center" style="margin-right: 5px;">
																<i class="fas fa-sharp fa-solid fa-circle" aria-hidden="true" style="font-size: 5px; margin-right: 10px;"></i>
																<span>Saya selalu ingin belajar hal yang lebih.</span>
															</span>
														</li>
													</ul>

													Pencapaian saya untuk tahun ini adalah ingin memiliki pekerjaan tetap IT Programmer dengan jabatan Senior Programmer	
												</p>
												<!-- Single Paragraph Ends -->
											</div>
											<!-- Summary Ends -->
											<!-- Single Profile Starts -->
											<div class="profile col-12 col-sm-6">
												<ul>
													<!-- Single Content On Profile Starts -->
													<li>
														<span class="label">
															<i class="fas fa-angle-double-right"></i><span>First Name</span>
														</span>
														<span class="dash">-</span>
														<span class="value">Muhammad</span>
													</li>
													<!-- Single Content On Profile Ends -->
													<!-- Single Content On Profile Starts -->
													<li>
														<span class="label">
															<i class="fas fa-angle-double-right"></i><span>Last Name</span>
														</span>
														<span class="dash">-</span>
														<span class="value">Lingga</span>
													</li>
													<!-- Single Content On Profile Ends -->
													<!-- Single Content On Profile Starts -->
													<li>
														<span class="label">
															<i class="fas fa-angle-double-right"></i><span>Date of Birth</span>
														</span>
														<span class="dash">-</span>
														<span class="value">10 Agustus 2001</span>
													</li>
													<!-- Single Content On Profile Ends -->
													<!-- Single Content On Profile Starts -->
													<li>
														<span class="label">
															<i class="fas fa-angle-double-right"></i><span>Nationality</span>
														</span>
														<span class="dash">-</span>
														<span class="value">Indonesia</span>
													</li>
													<!-- Single Content On Profile Ends -->
												</ul>
											</div>
											<!-- Single Profile Ends -->
											<!-- Single Profile Starts -->
											<div class="profile col-12 col-sm-6">
												<ul>
													<!-- Single Content On Profile Starts -->
													<li>
														<span class="label">
															<i class="fas fa-angle-double-right"></i><span>Phone</span>
														</span>
														<span class="dash">-</span>
														<a href="https://api.whatsapp.com/send?phone=6281314047052&text=&source=&data="><span class="value" title="Send Chat Me To Whatsapp">+62 813-1404-7052</span></a>
													</li>
													<!-- Single Content On Profile Ends -->
													<!-- Single Content On Profile Starts -->
													<li>
														<span class="label">
															<i class="fas fa-angle-double-right"></i><span>Email</span>
														</span>
														<span class="dash">-</span>
														<span class="value">yuotosaka404@gmail.com</span>
													</li>
													<!-- Single Content On Profile Ends -->
													<!-- Single Content On Profile Starts -->
													<li>
														<span class="label">
															<i class="fas fa-angle-double-right"></i><span>Address</span>
														</span>
														<span class="dash">-</span>
														<span class="value">Bekasi, Indonesia</span>
													</li>
													<!-- Single Content On Profile Ends -->
													<!-- Single Content On Profile Starts -->
													<li>
														<span class="label">
															<i class="fas fa-angle-double-right"></i><span>Languages</span>
														</span>
														<span class="dash">-</span>
														<span class="value">English, Japan, Indonesia</span>
													</li>
													<!-- Single Content On Profile Ends -->
												</ul>
											</div>
											<!-- Single Profile Ends -->
											<!-- Social Media Starts -->
											<div class="social-media col-12">
												<ul>
													<!-- Single Social Media Starts -->
													<li>
														<a href="https://facebook.com/Nishikinomiya.annaa/">
															<span class="front">
																<i class="fab fa-facebook-f" title="My Facebook"></i>
															</span>
															<span class="back">
																<i class="fab fa-facebook-f" title="My Facebook"></i>
															</span>
														</a>
													</li>
													<!-- Single Social Media Ends -->
													<!-- Single Social Media Starts -->
													<li>
														<a href="https://twitter.com/Lingga2001/">
															<span class="front">
																<i class="fab fa-twitter" title="My Twitter"></i>
															</span>
															<span class="back">
																<i class="fab fa-twitter" title="My Twitter"></i>
															</span>
														</a>
													</li>
													<!-- Single Social Media Ends -->
													<!-- Single Social Media Starts -->
													<li>
														<a href="https://instagram.com/Linggaa404/">
															<span class="front">
																<i class="fab fa-instagram" title="My Instagram"></i>
															</span>
															<span class="back">
																<i class="fab fa-instagram" title="My Instagram"></i>
															</span>
														</a>
													</li>
													<!-- Single Social Media Ends -->
													<!-- Single Social Media Starts -->
													<li>
														<a href="https://github.com/Priv8L1ng/">
															<span class="front">
																<i class="fab fa-github" title="My Github"></i>
															</span>
															<span class="back">
																<i class="fab fa-github" title="My Github"></i>
															</span>
														</a>
													</li>
													<!-- Single Social Media Ends -->
												</ul>
											</div>
											<!-- Social Media Ends -->
											<!-- Button Wrapper Starts -->
											<div class="button-wrapper col-12">
												<!-- Single Button Starts -->
												<div class="single-button">
													<a href="CV Kerja Lingga.pdf" download="CV Kerja Lingga.pdf">
														<span class="front">
															<i class="fas fa-file-pdf"></i><span class="value">Download <span>CV</span></span>
														</span>
														<span class="back">
															<i class="fas fa-file-pdf"></i><span class="value">Download <span>CV</span></span>
														</span>
													</a>
												</div>
												<!-- Single Button Ends -->
												<!-- Single Button Starts -->
												<div class="single-button" id="contact-me">
													<a href="#contact" id="contact-button">
														<span class="front">
															<i class="fas fa-envelope"></i><span class="value">Contact <span>Me</span></span>
														</span>
														<span class="back">
															<i class="fas fa-envelope"></i><span class="value">Contact <span>Me</span></span>
														</span>
													</a>
												</div>
												<!-- Single Button Ends -->
											</div>
											<!-- Button Wrapper Ends -->
										</div>
									</div>
									<!-- Personal Info Ends -->
									<!-- Hobby Starts -->
									<div id="services">
										<!-- Hobby Heading Starts -->
										<h5>Hobby</h5>
										<!-- Hobby Heading Ends -->
										<div class="row no-gutters">
											<!-- Single Service Starts -->
											<div class="single-service col-sm-6 col-12">
												<ul>
													<li class="service-number">
														<span class="first-word">Watching</span>
														<span class="second-word">Film</span>
													</li>
												</ul>
											</div>
											<!-- Single Service Ends -->
											<!-- Single Service Starts -->
											<div class="single-service col-sm-6 col-12">
												<ul>
													<li class="service-number">
														<span class="first-word">Playing</span>
														<span class="second-word">Hobby</span>
													</li>
												</ul>
											</div>
											<!-- Single Service Ends -->
											<!-- Single Service Starts -->
											<div class="single-service col-sm-6 col-12">
												<ul>
													<li class="service-number">
														<span class="first-word">Editing</span>
														<span class="second-word">Video / Photo</span>
													</li>
												</ul>
											</div>
											<!-- Single Service Ends -->
											<!-- Single Service Starts -->
											<div class="single-service col-sm-6 col-12">
												<ul>
													<li class="service-number">
														<span class="first-word">Coding</span>
														<span class="second-word">Program</span>
													</li>
												</ul>
											</div>
											<!-- Single Service Ends -->
										</div>
									</div>
									<!-- Hobby Ends -->
								</div>
								<!-- Content Ends -->
							</div>
							<!-- Inner Content Ends -->
						</div>
						<!-- Main Content (About) Ends -->
						<!-- Main Content (Resume) Starts -->
						<div id="resume" class="main-content">
							<!-- Close Button Starts -->
							<a href="#home" class="close-menu-link">
								<i class="fas fa-times-circle fa-2x"></i>
							</a>
							<!-- Close Button Ends -->
							<!-- Content Hanging On Resume Section Starts -->
							<div class="hanging">
								<div class="logo-hanging">
									<i class="fas fa-newspaper"></i>
								</div>
								<div class="text-hanging">
									<div class="word">
										<h6>MY <span>RESUME</span></h6>
									</div>
								</div>
							</div>
							<!-- Content Hanging On Resume Section Ends -->
							<!-- Inner Content Starts -->
							<div class="inner-content">
								<!-- Head Content Starts -->
								<div class="head-content">
									<h3>My <a href="#"><span onclick="changeColor()">Resume</span></a></h3>
								</div>
								<!-- Head Content Ends -->
								<!-- Content Starts -->
								<div class="content">
									<!-- Skills Starts -->
									<div class="skills">
										<!-- Skills Heading Starts -->
										<h5>Skills</h5>
										<!-- Skills Heading Ends -->
										<div class="row no-gutters">
											<!-- Single Skills Wrapper Starts -->
											<div class="single-skills-wrapper col-12 col-sm-6">
												<ul>
													<!-- Skills Heading Starts -->
													<li class="skills-heading">
														<span class="first-word">Soft</span>
														<span class="second-word">Skills</span>
													</li>
													<!-- Skills Heading Ends -->
													<li>
														<ul>
															<!-- Single Skill Starts -->
															<li class="single-skill">
																<ul>
																	<li class="skill-name">
																		<i class="fas fa-angle-double-right"></i><span>Leadership</span>
																	</li>
																	<!-- Range Of Percentage 0% - 100% -->
																	<li class="percentage">50%</li>
																	<li class="progress-wrapper">
																		<span class="progress"></span>
																	</li>
																</ul>
															</li>
															<!-- Single Skill Ends -->
															<!-- Single Skill Starts -->
															<li class="single-skill">
																<ul>
																	<li class="skill-name">
																		<i class="fas fa-angle-double-right"></i><span>Teamwork</span>
																	</li>
																	<!-- Range Of Percentage 0% - 100% -->
																	<li class="percentage">85%</li>
																	<li class="progress-wrapper">
																		<span class="progress"></span>
																	</li>
																</ul>
															</li>
															<!-- Single Skill Ends -->
															<!-- Single Skill Starts -->
															<li class="single-skill">
																<ul>
																	<li class="skill-name">
																		<i class="fas fa-angle-double-right"></i><span>Communication</span>
																	</li>
																	<!-- Range Of Percentage 0% - 100% -->
																	<li class="percentage">80%</li>
																	<li class="progress-wrapper">
																		<span class="progress"></span>
																	</li>
																</ul>
															</li>
															<!-- Single Skill Ends -->
															<!-- Single Skill Starts -->
															<li class="single-skill">
																<ul>
																	<li class="skill-name">
																		<i class="fas fa-angle-double-right"></i><span>Problem Solving</span>
																	</li>
																	<!-- Range Of Percentage 0% - 100% -->
																	<li class="percentage">95%</li>
																	<li class="progress-wrapper">
																		<span class="progress"></span>
																	</li>
																</ul>
															</li>
															<li class="single-skill">
																<ul>
																	<li class="skill-name">
																		<i class="fas fa-angle-double-right"></i><span>Elixir Lang / Phoenix Framework</span>
																	</li>
																	<!-- Range Of Percentage 0% - 100% -->
																	<li class="percentage">60%</li>
																	<li class="progress-wrapper">
																		<span class="progress"></span>
																	</li>
																</ul>
															</li>
															<li class="single-skill">
																<ul>
																	<li class="skill-name">
																		<i class="fas fa-angle-double-right"></i><span>Microsoft Excel</span>
																	</li>
																	<!-- Range Of Percentage 0% - 100% -->
																	<li class="percentage">90%</li>
																	<li class="progress-wrapper">
																		<span class="progress"></span>
																	</li>
																</ul>
															</li>
															<li class="single-skill">
																<ul>
																	<li class="skill-name">
																		<i class="fas fa-angle-double-right"></i><span>Microsoft PowerPoint</span>
																	</li>
																	<!-- Range Of Percentage 0% - 100% -->
																	<li class="percentage">80%</li>
																	<li class="progress-wrapper">
																		<span class="progress"></span>
																	</li>
																</ul>
															</li>
															<!-- Single Skill Ends -->
														</ul>
													</li>
												</ul>
											</div>
											<!-- Single Skills Wrapper Ends -->
											<!-- Single Skills Wrapper Starts -->
											<div class="single-skills-wrapper col-12 col-sm-6">
												<ul>
													<!-- Skills Heading Starts -->
													<li class="skills-heading">
														<span class="first-word">Hard</span>
														<span class="second-word">Skills</span>
													</li>
													<!-- Skills Heading Ends -->
													<li>
														<ul>
															<!-- Single Skill Starts -->
															<li class="single-skill">
																<ul>
																	<li class="skill-name">
																		<i class="fas fa-angle-double-right"></i><span>HTML5 / CSS3</span>
																	</li>
																	<!-- Range Of Percentage 0% - 100% -->
																	<li class="percentage">95%</li>
																	<li class="progress-wrapper">
																		<span class="progress"></span>
																	</li>
																</ul>
															</li>
															<!-- Single Skill Ends -->
															<!-- Single Skill Starts -->
															<li class="single-skill">
																<ul>
																	<li class="skill-name">
																		<i class="fas fa-angle-double-right"></i><span>PHP / Laravel FrameWork</span>
																	</li>
																	<!-- Range Of Percentage 0% - 100% -->
																	<li class="percentage">90%</li>
																	<li class="progress-wrapper">
																		<span class="progress"></span>
																	</li>
																</ul>
															</li>
															<!-- Single Skill Ends -->
															<!-- Single Skill Starts -->
															<li class="single-skill">
																<ul>
																	<li class="skill-name">
																		<i class="fas fa-angle-double-right"></i><span>Javascript</span>
																	</li>
																	<!-- Range Of Percentage 0% - 100% -->
																	<li class="percentage">85%</li>
																	<li class="progress-wrapper">
																		<span class="progress"></span>
																	</li>
																</ul>
															</li>
															<!-- Single Skill Ends -->
															<!-- Single Skill Starts -->
															<li class="single-skill">
																<ul>
																	<li class="skill-name">
																		<i class="fas fa-angle-double-right"></i><span>Python / Flask Framework</span>
																	</li>
																	<!-- Range Of Percentage 0% - 100% -->
																	<li class="percentage">75%</li>
																	<li class="progress-wrapper">
																		<span class="progress"></span>
																	</li>
																</ul>
															</li>
															<li class="single-skill">
																<ul>
																	<li class="skill-name">
																		<i class="fas fa-angle-double-right"></i><span>Visual Basic</span>
																	</li>
																	<!-- Range Of Percentage 0% - 100% -->
																	<li class="percentage">60%</li>
																	<li class="progress-wrapper">
																		<span class="progress"></span>
																	</li>
																</ul>
															</li>
															<li class="single-skill">
																<ul>
																	<li class="skill-name">
																		<i class="fas fa-angle-double-right"></i><span>Microsoft Word</span>
																	</li>
																	<!-- Range Of Percentage 0% - 100% -->
																	<li class="percentage">95%</li>
																	<li class="progress-wrapper">
																		<span class="progress"></span>
																	</li>
																</ul>
															</li>
															<li class="single-skill">
																<ul>
																	<li class="skill-name">
																		<i class="fas fa-angle-double-right"></i><span>Photo Editing / Video Editing</span>
																	</li>
																	<!-- Range Of Percentage 0% - 100% -->
																	<li class="percentage">55%</li>
																	<li class="progress-wrapper">
																		<span class="progress"></span>
																	</li>
																</ul>
															</li>
															<!-- Single Skill Ends -->
														</ul>
													</li>
												</ul>
											</div>
											<!-- Single Skills Wrapper Ends -->
										</div>
									</div>
									<!-- Skills Ends -->
									<!-- Education Starts -->
									<div class="education">
										<!-- Education Heading Starts -->
										<h5>Education</h5>
										<!-- Education Heading Ends -->
										<div class="row no-gutters">
											<!-- Single Education Starts -->
											<div class="single-education col-sm-6 col-12">
												<ul>
													<li class="education-when-where">
														<span class="when">SDN Mangun Jaya 07</span>
													</li>
													<li>
														<ul>
															<li class="education-name">
																<i class="fas fa-angle-double-right"></i><span>2007 - 2013</span>
															</li>
														</ul>
													</li>
												</ul>
											</div>
											<!-- Single Education Ends -->
											<!-- Single Education Starts -->
											<div class="single-education col-sm-6 col-12">
												<ul>
													<li class="education-when-where">
														<span class="when">SMPN 7 Tambun Selatan</span>
													</li>
													<li>
														<ul>
															<li class="education-name">
																<i class="fas fa-angle-double-right"></i><span>2013 - 2016</span>
															</li>
														</ul>
													</li>
												</ul>
											</div>
											<!-- Single Education Ends -->
											<!-- Single Education Starts -->
											<div class="single-education col-sm-6 col-12">
												<ul>
													<li class="education-when-where">
														<span class="when">SMK Yadika 13 Tambun Selatan</span>
													</li>
													<li>
														<ul>
															<li class="education-name">
																<i class="fas fa-angle-double-right"></i><span>2016 - 2019 | Teknik Komputer &amp; Jaringan</span>
															</li>
														</ul>
													</li>
												</ul>
											</div>
											<!-- Single Education Ends -->
										</div>
									</div>
									<!-- Education Ends -->
									<!-- Experience Starts -->
									<div class="experience">
										<!-- Experience Heading Starts -->
										<h5>Work Experience</h5>
										<!-- Experience Heading Ends -->
										<div class="row no-gutters">
											<!-- Single Experience Starts -->
											<div class="single-experience col-sm-6 col-12">
												<ul>
													<li class="experience-when-where">
														<span class="when">2017 - 2018</span>
														<span class="where">Bhineka Realty</span>
													</li>
													<li>
														<ul>
															<li class="experience-name">
																<i class="fas fa-angle-double-right"></i><span>Digital Marketing & Web</span>
															</li>
															<li class="experience-body">- Membuat Poster Melalui <a href="https://canvas.com/">Canvas</a>.<br>- Menjual Property Cavling &amp; Cluster Syariah Melalui Social Media.<br>- Mengelola Sebuah Website Property dari Bhineka Realty.</li>
														</ul>
													</li>
												</ul>
											</div>
											<!-- Single Experience Ends -->
											<!-- Single Experience Starts -->
											<div class="single-experience col-sm-6 col-12">
												<ul>
													<li class="experience-when-where">
														<span class="when">2020 - 2020</span>
														<span class="where">J.Co Donuts &amp; Coffee</span>
													</li>
													<li>
														<ul>
															<li class="experience-name">
																<i class="fas fa-angle-double-right"></i><span>Baker</span>
															</li>
															<li class="experience-body">
																- Mengolah &amp; Menggoreng Donat, Croissant, Burger.<br>
																- Membuat Suatu Fillingan Donat agar Menciptakan Rasa Yang Berbeda.<br>
																- Mentopping Donat Agar Terlihat Lebih Menarik.
															</li>
														</ul>
													</li>
												</ul>
											</div>
											<!-- Single Experience Ends -->
											<!-- Single Experience Starts -->
											<div class="single-experience col-sm-6 col-12">
												<ul>
													<li class="experience-when-where">
														<span class="when">2022 - 2023</span>
														<span class="where">Salmonation</span>
													</li>
													<li>
														<ul>
															<li class="experience-name">
																<i class="fas fa-angle-double-right"></i><span>FrontEnd Web Developer</span>
															</li>
															<li class="experience-body">
																- Membuat Website Landing Page , Blockchain, Explorer.<br>
																- Menghandle berbagai macam server jikalau ada server yang sedang mati atau error.
															</li>
														</ul>
													</li>
												</ul>
											</div>
											<!-- Single Experience Ends -->
											<!-- Single Experience Starts -->
											<div class="single-experience col-sm-6 col-12">
												<ul>
													<li class="experience-when-where">
														<span class="when">2023 - 2024</span>
														<span class="where">Adatama Teknologi Indonesia</span>
													</li>
													<li>
														<ul>
															<li class="experience-name">
																<i class="fas fa-angle-double-right"></i><span>FullStack Web Developer</span>
															</li>
															<li class="experience-body">
																<span class="label d-flex align-items-center" style="margin-right: 5px;">
																	<i class="fas fa-sharp fa-solid fa-circle" aria-hidden="true" style="font-size: 5px; margin-right: 10px;"></i>
																	<span>Membuat Website Landing Page.</span>
																</span>
																<span class="label d-flex align-items-center" style="margin-right: 5px;">
																	<i class="fas fa-sharp fa-solid fa-circle" aria-hidden="true" style="font-size: 5px; margin-right: 10px;"></i>
																	<span>Membuat Website Company Profile.</span>
																</span>
																<span class="label d-flex align-items-center" style="margin-right: 5px;">
																	<i class="fas fa-sharp fa-solid fa-circle" aria-hidden="true" style="font-size: 5px; margin-right: 10px;"></i>
																	<span>Membuat Website E-Commerce digital card.</span>
																</span>
																<span class="label d-flex align-items-center" style="margin-right: 5px;">
																	<i class="fas fa-sharp fa-solid fa-circle" aria-hidden="true" style="font-size: 5px; margin-right: 10px;"></i>
																	<span>Menghandle berbagai macam server jikalau ada server yang sedang mati atau error.</span>
																</span>
															</li>
														</ul>
													</li>
												</ul>
											</div>
											<!-- Single Experience Ends -->
										</div>
									</div>
									<!-- Experience Ends -->
									<!-- Fun Facts Starts -->
									<div class="fun-facts">
										<!-- Fun Facts Heading Starts -->
										<h5>Fun Facts</h5>
										<!-- Fun Facts Heading Ends -->
										<div class="row no-gutters">
											<!-- Single Fun Fact Starts -->
											<div class="single-fun-fact col-12 col-sm-4">
												<ul>
													<li class="fun-fact-icon">
														<i class="fas fa-business-time fa-3x"></i>
													</li>
													<li class="fun-fact-value">4+</li>
													<li class="fun-fact-body">
														<i class="fas fa-angle-double-right"></i><span>Years Experience</span>
													</li>
												</ul>
											</div>	
											<!-- Single Fun Fact Ends -->
											<!-- Single Fun Fact Starts -->
											<div class="single-fun-fact col-12 col-sm-4">
												<ul>
													<li class="fun-fact-icon">
														<i class="fas fa-handshake fa-3x"></i>
													</li>
													<li class="fun-fact-value">40+</li>
													<li class="fun-fact-body">
														<i class="fas fa-angle-double-right"></i><span>Done Projects</span>
													</li>
												</ul>
											</div>
											<!-- Single Fun Fact Ends -->
											<!-- Single Fun Fact Starts -->
											<div class="single-fun-fact col-12 col-sm-4">
												<ul>
													<li class="fun-fact-icon">
														<i class="fas fa-heart fa-3x"></i>
													</li>
													<li class="fun-fact-value">87+</li>
													<li class="fun-fact-body">
														<i class="fas fa-angle-double-right"></i><span>Happy Customers</span>
													</li>
												</ul>
											</div>
											<!-- Single Fun Fact Ends -->
										</div>
									</div>
									<!-- Fun Facts Ends -->
									<!-- Button Wrapper Starts -->
									<div class="button-wrapper">
										<!-- Single Button Starts -->
										<a href="CV Kerja Lingga.pdf" download="CV Kerja Lingga.pdf" target="_blank" rel="noreferrer">
											<span class="front">
												<i class="fas fa-file-pdf"></i><span class="value">Download <span>Resume</span></span>
											</span>
											<span class="back">
												<i class="fas fa-file-pdf"></i><span class="value">Download <span>Resume</span></span>
											</span>
										</a>
										<!-- Single Button Ends -->
									</div>
									<!-- Button Wrapper Ends -->
								</div>
								<!-- Content Ends -->
							</div>
							<!-- Inner Content Ends -->
						</div>
						<!-- Main Content (Resume) Ends -->
						<!-- Main Content (Portfolio) Starts -->
						<div id="portfolio" class="main-content">
							<!-- Close Button Starts -->
							<a href="#home" class="close-menu-link">
								<i class="close-button fas fa-times-circle fa-2x"></i>
							</a>
							<!-- Close Button Ends -->
							<!-- Content Hanging On Portfolio Section Starts -->
							<div class="hanging">
								<div class="logo-hanging">
									<i class="fas fa-toolbox"></i>
								</div>
								<div class="text-hanging">
									<div class="word">
										<h6>MY <span>PORTFOLIO</span></h6>
									</div>
								</div>
							</div>
							<!-- Content Hanging On Portfolio Section Ends -->
							<!-- Inner Content Starts -->
							<div class="inner-content">
								<!-- Head Content Starts -->
								<div class="head-content">
									<h3>My <a href="#"><span onclick="changeColor()">Portfolio</span></a></h3>
								</div>
								<!-- Head Content Ends -->
								<!-- Content Starts -->
								<div class="content">
									<!-- Projects Starts -->
									<div id="projects">
										<!-- Projects Heading Starts -->
										<h5>Projects</h5>
										<!-- Projects Heading Ends -->
										<div class="row no-gutters">
											<!-- Portfolio Filter Starts -->
											<div class="portfolio-filter col-12">
												<ul>
													<!-- Single Filter Starts -->
													<li>
														<a href="#" data-filter="*" class="current">All</a>
													</li>
													<!-- Single Filter Ends -->
													<!-- Single Filter Starts -->
													<li>
														<a href="#" data-filter=".Website">Website</a>
													</li>
													<!-- Single Filter Ends -->
													<!-- Single Filter Starts -->
													<li>
														<a href="#" data-filter=".Software">Software</a>
													</li>
													<!-- Single Filter Ends -->
													<!-- Single Filter Starts -->
													<li>
														<a href="#" data-filter=".Apps">Apps</a>
													</li>
													<li>
														<a href="#" data-filter=".Achievement">Achievement</a>
													</li>
													<li>
														<a href="#" data-filter=".InternshipCertificate">Internship Certificate</a>
													</li>
													<li>
														<a href="#" data-filter=".Couple">Couple</a>
													</li>
													<!-- Single Filter Ends -->
												</ul>
											</div>
											<!-- Portfolio Filter Ends -->
											<!-- Portfolio Item Starts -->
											<div class="portfolio-item col-12">
												<div class="item-wrapper row">
													<!-- Project Website Starts -->
													<!-- Project Website Ends-->

													<!-- Project Apps Starts -->
													<!-- Single Item Starts -->
													<div class="item Apps col-md-4 col-sm-6 col-12">
														<!-- Image Starts -->
														<div class="image">
															<img src="/img/projects/Website 1.png" alt="One Wallet">
														</div>
														<!-- Image Ends -->
														<!-- Overlay Starts -->
														<div class="overlay">
															<!-- View More (Button) Starts -->
															<a class="view-more" href="#one-wallet-apps">
																<span class="front">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
																<span class="back">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
															</a>
															<!-- View More (Button) Ends -->
															<!-- Image Info Starts -->
															<div class="image-info">
																<!-- Project Name Starts -->
																<span class="project-name">One Wallet Apps</span>
																<!-- Project Name Ends -->
																<!-- Project Tags Starts -->
																<span class="project-tags">
																	<!-- Tag Icon Starts -->
																	<span class="tag-icon">
																		<i class="fas fa-tags"></i>
																	</span>
																	<!-- Tag Icon Ends -->
																	<!-- Tag Label Starts -->
																	<span class="tag-label">Web Templates</span>
																	<!-- Tag Label Ends -->
																</span>
																<!-- Project Tags Ends -->
															</div>
															<!-- Image Info Ends -->
														</div>
														<!-- Overlay Ends -->
														<!-- Project Popup Starts -->
														<div id="one-wallet-apps" class="project-popup mfp-hide">
															<!-- Project Picture On Popup Starts -->
															<div class="d-flex justify-content-center align-items-center">
																<div class="zoom-container" id="zoomContainer">
																	<img class="project-picture zoom-image" id="zoomImage" src="/img/projects/Website 1.png" alt="One Wallet Apps">
																</div>
																<img class="project-picture mobile" src="/img/projects/Website 1.png" alt="One Wallet Apps">
															</div>
															<!-- Project Picture On Popup Ends -->
															<!-- Project Name Starts -->
															<h5 class="project-name desktop">One Wallet Apps</h5>
															<!-- Project Name Ends -->
															<!-- Project Info Starts -->
															<div class="project-info">
																<!-- List Info Project Starts -->
																<ul class="list-info-project">
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Client</span>
																		<span class="separator">:</span>
																		<span class="value">-</span>
																	</li>
																	<!-- Single List Ends -->
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Date</span>
																		<span class="separator">:</span>
																		<span class="value">12 April 2022</span>
																	</li>
																	<!-- Single List Ends -->
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Categories</span>
																		<span class="separator">:</span>
																		<span class="value">Web Apps</span>
																	</li>
																	<!-- Single List Ends -->
																</ul>
																<!-- List Info Project Ends -->
																<!-- Project Description Starts -->
																<div class="project-description">
																	<!-- Single Paragraph Starts -->
																	{{-- kosong --}}
																	<!-- Single Paragraph Ends -->
																</div>
																<!-- Project Description Ends -->
															</div>
															<!-- Project Info Ends -->
															<!-- Project Source Button Starts -->
															<a class="project-source" href="#">
																<span class="front">
																	<i class="fas fa-long-arrow-alt-right"></i>
																	<span class="value">Visit <span>Project</span></span>
																</span>
																<span class="back">
																	<i class="fas fa-long-arrow-alt-right"></i>
																	<span class="value">Visit <span>Project</span></span>
																</span>
															</a>
															<!-- Project Source Button Ends -->
														</div>
														<!-- Project Popup Ends -->
													</div>
													<!-- Single Item Ends -->
													<!-- Project Apps Ends-->

													<!-- Project Achievement Starts	-->
													<!-- Single Item Starts -->
													<div class="item Achievement col-md-4 col-sm-6 col-12">
														<!-- Image Starts -->
														<div class="image">
															<img src="/img/projects/Achievement 1.jpeg" alt="My Achievement Of School">
														</div>
														<!-- Image Ends -->
														<!-- Overlay Starts -->
														<div class="overlay">
															<!-- View More (Button) Starts -->
															<a class="view-more" href="#Achievement1">
																<span class="front">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
																<span class="back">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
															</a>
															<!-- View More (Button) Ends -->
															<!-- Image Info Starts -->
															<div class="image-info">
																<!-- Project Name Starts -->
																<span class="project-name">Ceritificate General English - Basic</span>
																<!-- Project Name Ends -->
																<!-- Project Tags Starts -->
																<span class="project-tags">
																	<!-- Tag Icon Starts -->
																	<span class="tag-icon">
																		<i class="fas fa-tags"></i>
																	</span>
																	<!-- Tag Icon Ends -->
																	<!-- Tag Label Starts -->
																	<span class="tag-label">Achievement</span>
																	<!-- Tag Label Ends -->
																</span>
																<!-- Project Tags Ends -->
															</div>
															<!-- Image Info Ends -->
														</div>
														<!-- Overlay Ends -->
														<!-- Project Popup Starts -->
														<div id="Achievement1" class="project-popup mfp-hide">
															<!-- Project Picture On Popup Starts -->
															<img class="project-picture" src="/img/projects/Achievement 1.jpeg" alt="Achievement School">
															<!-- Project Picture On Popup Ends -->
															<!-- Project Name Starts -->
															<h5 class="project-name">Certificate General English - Basic</h5>
															<!-- Project Name Ends -->
															<!-- Project Info Starts -->
															<div class="project-info">
																<!-- List Info Project Starts -->
																<ul class="list-info-project">
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Date</span>
																		<span class="separator">:</span>
																		<span class="value">24 Juni 2019</span>
																	</li>
																	<!-- Single List Ends -->
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Categories</span>
																		<span class="separator">:</span>
																		<span class="value">Achievement</span>
																	</li>
																	<!-- Single List Ends -->
																</ul>
																<!-- List Info Project Ends -->
																<!-- Project Description Starts -->
																<div class="project-description">
																	<!-- Single Paragraph Starts -->
																	<p>Ini Adalah Sertifikat Saya Sebagai Praktek Pelajaran Bahasa Inggris.</p>
																	<!-- Single Paragraph Ends -->
																</div>
																<!-- Project Description Ends -->
															</div>
															<!-- Project Info Ends -->
														</div>
														<!-- Project Popup Ends -->
													</div>
													<!-- Single Item Ends -->
													<!-- Single Item Starts -->
													<div class="item Achievement col-md-4 col-sm-6 col-12">
														<!-- Image Starts -->
														<div class="image">
															<img src="/img/projects/Achievement 2.jpeg" alt="My Achievement Of School">
														</div>
														<!-- Image Ends -->
														<!-- Overlay Starts -->
														<div class="overlay">
															<!-- View More (Button) Starts -->
															<a class="view-more" href="#Achievement2">
																<span class="front">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
																<span class="back">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
															</a>
															<!-- View More (Button) Ends -->
															<!-- Image Info Starts -->
															<div class="image-info">
																<!-- Project Name Starts -->
																<span class="project-name">Ceritificate VMWARE CENTOS Linux</span>
																<!-- Project Name Ends -->
																<!-- Project Tags Starts -->
																<span class="project-tags">
																	<!-- Tag Icon Starts -->
																	<span class="tag-icon">
																		<i class="fas fa-tags"></i>
																	</span>
																	<!-- Tag Icon Ends -->
																	<!-- Tag Label Starts -->
																	<span class="tag-label">Achievement</span>
																	<!-- Tag Label Ends -->
																</span>
																<!-- Project Tags Ends -->
															</div>
															<!-- Image Info Ends -->
														</div>
														<!-- Overlay Ends -->
														<!-- Project Popup Starts -->
														<div id="Achievement2" class="project-popup mfp-hide">
															<!-- Project Picture On Popup Starts -->
															<img class="project-picture" src="/img/projects/Achievement 2.jpeg" alt="My Achievement Of School">
															<!-- Project Picture On Popup Ends -->
															<!-- Project Name Starts -->
															<h5 class="project-name">Certificate VMWARE CENTOS Linux</h5>
															<!-- Project Name Ends -->
															<!-- Project Info Starts -->
															<div class="project-info">
																<!-- List Info Project Starts -->
																<ul class="list-info-project">
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Date</span>
																		<span class="separator">:</span>
																		<span class="value">9 Maret 2017</span>
																	</li>
																	<!-- Single List Ends -->
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Categories</span>
																		<span class="separator">:</span>
																		<span class="value">Achievement</span>
																	</li>
																	<!-- Single List Ends -->
																</ul>
																<!-- List Info Project Ends -->
																<!-- Project Description Starts -->
																<div class="project-description">
																	<!-- Single Paragraph Starts -->
																	<p>Ini Sertifikat Saya Sebagai peserta Pelatihan VMWARE CENTOS Linux di SMK YADIKA 13 Kompetisi Teknik Keahlian Komputer &amp; Jaringan.</p>
																	<!-- Single Paragraph Ends -->
																</div>
																<!-- Project Description Ends -->
															</div>
															<!-- Project Info Ends -->
														</div>
														<!-- Project Popup Ends -->
													</div>
													<!-- Single Item Ends -->
													<!-- Single Item Starts -->
													<div class="item Achievement col-md-4 col-sm-6 col-12">
														<!-- Image Starts -->
														<div class="image">
															<img src="/img/projects/Achievement 3.jpeg" alt="My Achievement Of School">
														</div>
														<!-- Image Ends -->
														<!-- Overlay Starts -->
														<div class="overlay">
															<!-- View More (Button) Starts -->
															<a class="view-more" href="#Achievement3">
																<span class="front">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
																<span class="back">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
															</a>
															<!-- View More (Button) Ends -->
															<!-- Image Info Starts -->
															<div class="image-info">
																<!-- Project Name Starts -->
																<span class="project-name">Ceritificate Microsoft Office</span>
																<!-- Project Name Ends -->
																<!-- Project Tags Starts -->
																<span class="project-tags">
																	<!-- Tag Icon Starts -->
																	<span class="tag-icon">
																		<i class="fas fa-tags"></i>
																	</span>
																	<!-- Tag Icon Ends -->
																	<!-- Tag Label Starts -->
																	<span class="tag-label">Achievement</span>
																	<!-- Tag Label Ends -->
																</span>
																<!-- Project Tags Ends -->
															</div>
															<!-- Image Info Ends -->
														</div>
														<!-- Overlay Ends -->
														<!-- Project Popup Starts -->
														<div id="Achievement3" class="project-popup mfp-hide">
															<!-- Project Picture On Popup Starts -->
															<img class="project-picture" src="/img/projects/Achievement 3.jpeg" alt="Achievement Of School">
															<!-- Project Picture On Popup Ends -->
															<!-- Project Name Starts -->
															<h5 class="project-name">Certificate Microsoft Office</h5>
															<!-- Project Name Ends -->
															<!-- Project Info Starts -->
															<div class="project-info">
																<!-- List Info Project Starts -->
																<ul class="list-info-project">
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Date</span>
																		<span class="separator">:</span>
																		<span class="value">24 Juni 2019</span>
																	</li>
																	<!-- Single List Ends -->
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Categories</span>
																		<span class="separator">:</span>
																		<span class="value">Achievement</span>
																	</li>
																	<!-- Single List Ends -->
																</ul>
																<!-- List Info Project Ends -->
																<!-- Project Description Starts -->
																<div class="project-description">
																	<!-- Single Paragraph Starts -->
																	<p>Ini Sertifikat Saya Sebagai Praktek Komputer di Bidang Microsoft Office dengan Predikat Sangat Baik.</p>
																	<!-- Single Paragraph Ends -->
																</div>
																<!-- Project Description Ends -->
															</div>
															<!-- Project Info Ends -->
														</div>
														<!-- Project Popup Ends -->
													</div>
													<!-- Single Item Ends -->
													<!-- Single Item Starts -->
													<div class="item Achievement col-md-4 col-sm-6 col-12">
														<!-- Image Starts -->
														<div class="image">
															<img src="/img/projects/Achievement 4.jpeg" alt="My Achievement Of School">
														</div>
														<!-- Image Ends -->
														<!-- Overlay Starts -->
														<div class="overlay">
															<!-- View More (Button) Starts -->
															<a class="view-more" href="#Achievement4">
																<span class="front">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
																<span class="back">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
															</a>
															<!-- View More (Button) Ends -->
															<!-- Image Info Starts -->
															<div class="image-info">
																<!-- Project Name Starts -->
																<span class="project-name">Ceritificate Ujian Tingkat Kompetensi</span>
																<!-- Project Name Ends -->
																<!-- Project Tags Starts -->
																<span class="project-tags">
																	<!-- Tag Icon Starts -->
																	<span class="tag-icon">
																		<i class="fas fa-tags"></i>
																	</span>
																	<!-- Tag Icon Ends -->
																	<!-- Tag Label Starts -->
																	<span class="tag-label">Achievement</span>
																	<!-- Tag Label Ends -->
																</span>
																<!-- Project Tags Ends -->
															</div>
															<!-- Image Info Ends -->
														</div>
														<!-- Overlay Ends -->
														<!-- Project Popup Starts -->
														<div id="Achievement4" class="project-popup mfp-hide">
															<!-- Project Picture On Popup Starts -->
															<img class="project-picture" src="/img/projects/Achievement 4.jpeg" alt="Achievement Of School">
															<!-- Project Picture On Popup Ends -->
															<!-- Project Name Starts -->
															<h5 class="project-name">Certificate Ujian Tingkat Kompetensi</h5>
															<!-- Project Name Ends -->
															<!-- Project Info Starts -->
															<div class="project-info">
																<!-- List Info Project Starts -->
																<ul class="list-info-project">
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Date</span>
																		<span class="separator">:</span>
																		<span class="value">24 Juni 2019</span>
																	</li>
																	<!-- Single List Ends -->
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Categories</span>
																		<span class="separator">:</span>
																		<span class="value">Achievement</span>
																	</li>
																	<!-- Single List Ends -->
																</ul>
																<!-- List Info Project Ends -->
																<!-- Project Description Starts -->
																<div class="project-description">
																	<!-- Single Paragraph Starts -->
																	<p>Ini Sertifikat Saya Sebagai Tingkat Kompetensi Keahlian di Bidang Teknik Komputer &amp; Jaringan.</p>
																	<!-- Single Paragraph Ends -->
																</div>
																<!-- Project Description Ends -->
															</div>
															<!-- Project Info Ends -->
														</div>
														<!-- Project Popup Ends -->
													</div>
													<!-- Single Item Ends -->
													<!-- Project Achievement Ends -->

													<!-- Project Internship Certificate Starts -->
													<!-- Single Item Starts -->
													<div class="item InternshipCertificate col-md-4 col-sm-6 col-12">
														<!-- Image Starts -->
														<div class="image">
															<img src="/img/projects/Internship Certificate 2.jpeg" alt="My Certificate Of Internship">
														</div>
														<!-- Image Ends -->
														<!-- Overlay Starts -->
														<div class="overlay">
															<!-- View More (Button) Starts -->
															<a class="view-more" href="#InternshipCertificate1">
																<span class="front">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
																<span class="back">
																	<i class="far fa-eye"></i><span class="value">View <span>More</span></span>
																</span>
															</a>
															<!-- View More (Button) Ends -->
															<!-- Image Info Starts -->
															<div class="image-info">
																<!-- Project Name Starts -->
																<span class="project-name">Ceritificate Bhineka Realty</span>
																<!-- Project Name Ends -->
																<!-- Project Tags Starts -->
																<span class="project-tags">
																	<!-- Tag Icon Starts -->
																	<span class="tag-icon">
																		<i class="fas fa-tags"></i>
																	</span>
																	<!-- Tag Icon Ends -->
																	<!-- Tag Label Starts -->
																	<span class="tag-label">Achievement</span>
																	<!-- Tag Label Ends -->
																</span>
																<!-- Project Tags Ends -->
															</div>
															<!-- Image Info Ends -->
														</div>
														<!-- Overlay Ends -->
														<!-- Project Popup Starts -->
														<div id="InternshipCertificate1" class="project-popup mfp-hide">
															<!-- Project Picture On Popup Starts -->
															<img class="project-picture" src="/img/projects/Internship Certificate 2.jpeg" alt="My Certificate Of Internship">
															<img class="project-picture" src="/img/projects/Internship Certificate 1.jpeg" alt="My Certificate Of Internship">
															<!-- Project Picture On Popup Ends -->
															<!-- Project Name Starts -->
															<h5 class="project-name">Certificate Bhineka Realty</h5>
															<!-- Project Name Ends -->
															<!-- Project Info Starts -->
															<div class="project-info">
																<!-- List Info Project Starts -->
																<ul class="list-info-project">
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Date</span>
																		<span class="separator">:</span>
																		<span class="value">02 November 2017 - 02 Februari 2018</span>
																	</li>
																	<!-- Single List Ends -->
																	<!-- Single List Starts -->
																	<li>
																		<span class="label">Categories</span>
																		<span class="separator">:</span>
																		<span class="value">Achievement</span>
																	</li>
																	<!-- Single List Ends -->
																</ul>
																<!-- List Info Project Ends -->
																<!-- Project Description Starts -->
																<div class="project-description">
																	<!-- Single Paragraph Starts -->
																	<p>Ini Merupakan Sertifikat Magang / PKL Saya di Bhineka Realty sebagai Digital Marketing &amp; Web</p>
																	<!-- Single Paragraph Ends -->
																</div>
																<!-- Project Description Ends -->
															</div>
															<!-- Project Info Ends -->
														</div>
														<!-- Project Popup Ends -->
													</div>
													<!-- Single Item Ends -->
													<!-- Project Internship Certificate Ends -->
												</div>
											</div>
											<!-- Portfolio Item Ends -->
										</div>
									</div>
									<!-- Projects Ends -->
								</div>
								<!-- Content Ends -->
							</div>
							<!-- Inner Content Ends -->
						</div>
						<!-- Main Content (Portfolio) Ends -->
						<!-- Main Content (Contact) Starts -->
						<div id="contact" class="main-content">
							<!-- Close Button Starts -->
							<a href="#home" class="close-menu-link">
								<i class="close-button fas fa-times-circle fa-2x"></i>
							</a>
							<!-- Close Button Ends -->
							<!-- Content Hanging On Contact Section Starts -->
							<div class="hanging">
								<div class="logo-hanging">
									<i class="fas fa-envelope"></i>
								</div>
								<div class="text-hanging">
									<div class="word">
										<h6>CONTACT <span>ME</span></h6>
									</div>
								</div>
							</div>
							<!-- Content Hanging On Contact Section Ends -->
							<!-- Inner Content Starts -->
							<div class="inner-content">
								<!-- Head Content Starts -->
								<div class="head-content">
									<h3>Contact <a href="#"><span onclick="changeColor()">Me</span></a></h3>
								</div>
								<!-- Head Content Ends -->
								<!-- Content Starts -->
								<div class="content">
									<!-- Contact Info Starts -->
									<div id="contact-info">
										<!-- Contact Info Heading Starts -->
										<h5>Contact Info</h5>
										<!-- Contact Info Heading Ends -->
										<div class="row no-gutters">
											<!-- List Contact Info Starts -->
											<div class="list-contact-info col-12">
												<ul class="row no-gutters">
													<!-- Single Contact Info Starts -->
													<li class="col-sm-6 col-12">
														<span class="contact-info-name">Address</span>
														<span class="icon-of-value">
															<i class="fas fa-map-marker-alt"></i>
														</span>
														<span class="value">Bekasi, Indonesia</span>
													</li>
													<!-- Single Contact Info Ends -->
													<!-- Single Contact Info Starts -->
													<li class="col-sm-6 col-12">
														<span class="contact-info-name">Phone</span>
														<span class="icon-of-value">
															<i class="fas fa-mobile-alt"></i>
														</span>
														<a href="https://api.whatsapp.com/send?phone=6281314047052&text=&source=&data="><span class="value" title="Send Chat Me To Whatsapp">+62 813-1404-7052</span></a>
													</li>
													<!-- Single Contact Info Ends -->
													<!-- Single Contact Info Starts -->
													<li class="col-sm-6 col-12">
														<span class="contact-info-name">Email</span>
														<span class="icon-of-value">
															<i class="fas fa-envelope"></i>
														</span>
														<span class="value">yuotosaka404@gmail.com</span>
													</li>
													<!-- Single Contact Info Ends -->
													<!-- Single Contact Info Starts -->
													<li class="col-sm-6 col-12">
														<span class="contact-info-name">Website</span>
														<span class="icon-of-value">
															<i class="fas fa-globe"></i>
														</span>
														<span class="value">127.0.0.1</span>
													</li>
													<!-- Single Contact Info Ends -->
													<!-- Single Contact Info Starts -->
													<li class="col-12">
														<span class="contact-info-name">Social Media</span>
														<ul class="social-media">
															<!-- Single Social Media Starts -->
															<li>
																<a href="https://facebook.com/Nishikinomiya.annaa/">
																	<span class="front">
																		<i class="fab fa-facebook-f" title="My Facebook"></i>
																	</span>
																	<span class="back">
																		<i class="fab fa-facebook-f" title="My Facebook"></i>
																	</span>
																</a>
															</li>
															<!-- Single Social Media Ends -->
															<!-- Single Social Media Starts -->
															<li>
																<a href="https://twitter.com/Lingga2001/">
																	<span class="front">
																		<i class="fab fa-twitter" title="My Twitter"></i>
																	</span>
																	<span class="back">
																		<i class="fab fa-twitter" title="My Twitter"></i>
																	</span>
																</a>
															</li>
															<!-- Single Social Media Ends -->
															<!-- Single Social Media Starts -->
															<li>
																<a href="https://instagram.com/Linggaa404/">
																	<span class="front">
																		<i class="fab fa-instagram" title="My Instagram"></i>
																	</span>
																	<span class="back">
																		<i class="fab fa-instagram" title="My Instagram"></i>
																	</span>
																</a>
															</li>
															<!-- Single Social Media Ends -->
															<!-- Single Social Media Starts -->
															<li>
																<a href="https://github.com/Priv8L1ng">
																	<span class="front">
																		<i class="fab fa-github" title="My Github"></i>
																	</span>
																	<span class="back">
																		<i class="fab fa-github" title="My Github"></i>
																	</span>
																</a>
															</li>
															<!-- Single Social Media Ends -->
														</ul>
													</li>
													<!-- Single Contact Info Ends -->
												</ul>
											</div>
											<!-- List Contact Info Ends -->
										</div>
									</div>
									<!-- Contact Info Ends -->
									<!-- Contact Form Starts -->
									<div id="contact-form">
										<!-- Contact Form Heading Starts -->
										<h5>Contact Form</h5>
										<!-- Contact Form Heading Ends -->
										<div class="row no-gutters">
											<!-- Note Starts -->
											<div class="note col-lg-9 col-md-9 col-12">
												<!-- Single Paragraph Starts -->
												<p>Want to chat? Send me a message!</p>
												<!-- Single Paragraph Ends -->
											</div>
											<!-- Note Ends -->
											<!-- Alert/Contact Message Starts -->
											<div class="alert contact-msg col-lg-9 col-md-9 col-12"></div>
											<!-- Alert/Contact Message Ends -->
											<!-- Form Wrapper Starts -->
											<div class="form-wrapper col-lg-9 col-md-9 col-12">
												<form name="contact" method="POST" action="php/process-form.php">
													<div class="form-group clearfix">
														<div class="inner-form-group">
															<input type="text" name="name" placeholder="Name" class="form-control" autocomplete="off" required>
														</div>
														<div class="inner-form-group">
															<input type="email" name="email" placeholder="Email" class="form-control" autocomplete="off" required>
														</div>
													</div>
													<div class="form-group">
														<input type="text" name="subject" placeholder="Subject" class="form-control" autocomplete="off" required>
													</div>
													<div class="form-group">
														<textarea name="message" placeholder="Message" class="form-control" autocomplete="off" required></textarea>
													</div>
													<div class="form-group">
														<button type="submit">
															<span class="front">
																<i class="fas fa-paper-plane"></i>
																<span class="value">Send <span>Message</span></span>
															</span>
															<span class="back">
																<i class="fas fa-paper-plane"></i>
																<span class="value">Send <span>Message</span></span>
															</span>
														</button>
													</div>
												</form>
											</div>
											<!-- Form Wrapper Ends -->
										</div>
									</div>
									<!-- Contact Form Ends -->
								</div>
								<!-- Content Ends -->
							</div>
							<!-- Inner Content Ends -->
						</div>
						<!-- Main Content (Contact) Ends -->
					</div>
					<!-- Left Wrapper Ends -->
					<!-- Right Wrapper Starts -->
					<div id="right-wrapper" class="col-lg-4">
						<!-- Large Profile Picture Starts -->
						<div class="lg-profile-picture"></div> 
						<!-- Large Profile Picture Ends -->
					</div>	
					<!-- Right Wrapper Ends -->
				</div>
			</div>
		</div>
		<!-- Wrapper Ends -->

		<!-- JS Files -->
		<script src="/js/jquery-3.3.1.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/imagesloaded.pkgd.min.js"></script>
		<script src="/js/isotope.pkgd.min.js"></script>
		<script src="/js/magnific-popup.min.js"></script>
		<script src="/js/typeit.min.js"></script>
		<script src="/js/custom.js"></script>
		<script src="/js/extensions/toastr.js"></script>
		<script src="/js/extensions/toastr.min.js"></script>
		<!-- <script src="disable.js"></script> -->
		<script type="text/javascript" src="js/vanilla-tilt.js"></script>
		<script type="text/javascript">
			VanillaTilt.init(document.querySelector("right-wrapper"), {
				max: 20,
				speed: 500
			});
	
			//It also supports NodeList
			VanillaTilt.init(document.querySelectorAll("#right-wrapper"));
		</script>
		<script>
			function openNav() {
				  document.getElementById("mySidenav").style.width = "250px";
				  document.getElementById("wrapper").style.marginLeft = "250px";
				  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
				}
	
			/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
			function closeNav() {
				document.getElementById("mySidenav").style.width = "0";
				document.getElementById("wrapper").style.marginLeft = "0";
				document.body.style.backgroundColor = "white";
				}
			</script>
			<script type="text/javascript">    
				var color= ["css/skins/skin2.css", "css/skins/skin4.css", "css/skins/skin6.css", "css/skins/skin1.css"]
				// var color= ["css/skins/skin2.css", "css/skins/skin3.css", "css/skins/skin4.css", "css/skins/skin5.css", "css/skins/skin6.css", "css/skins/skin1.css"]
				var i=0;
				//bot tolong ganti skinnya dengan skin lain secara otomatis setiap 2 detik
				setInterval(function(){
					document.getElementById("changeskin").setAttribute("href", color[i]);
					i++;
					if(i==color.length){
						i=0;
					}
				}, 5000);
				
				// Change skin by click with delay
				// function changeColor() {
				// 	setTimeout(function(){
				// 		document.getElementById("changeskin").setAttribute("href", color[i]);
				// 		toastr.success('Theme has been Changed', '~ Muhammad Lingga ~');
				// 		i++;
				// 		if(i==color.length) i=0;
				// 	}, 1000);
				// }
				
				// Change skin bye click
				// function changeColor(){
				// 	document.getElementById("changeskin").href=color[i];
				// 	toastr.success('Theme has been Changed', '~ Muhammad Lingga ~', {timeOut: 5000});
				// 	i++;
				// 	if(i==color.length){
				// 		i=0;
				// 	}
				// }
			</script>
		<script>
			toastr.info('Welcome to my Personal Home Page', '~ Lingga ~', {timeOut: 5000});
		</script>

		<script>
			const zoomContainer = document.getElementById('zoomContainer');
			const zoomImage = document.getElementById('zoomImage');

			zoomContainer.addEventListener('mousemove', (e) => {
				const { left, top, width, height } = zoomContainer.getBoundingClientRect();
				const x = e.clientX - left; // X coordinate relative to the container
				const y = e.clientY - top;  // Y coordinate relative to the container

				// Calculate percentage of the cursor position within the container
				const xPercent = (x / width) * 100;
				const yPercent = (y / height) * 100;

				// Set the transform origin based on cursor position
				zoomImage.style.transformOrigin = `${xPercent}% ${yPercent}%`;
				zoomImage.style.transform = 'scale(2.5)'; // Adjust the scale as needed
			});

			zoomContainer.addEventListener('mouseleave', () => {
				zoomImage.style.transform = 'scale(1)'; // Reset scale when mouse leaves
			});
		</script>

		<!-- Music Starts -->
		<audio controls loop autoplay hidden>
			<source src="#padoru.mp3" type="audio/mpeg">
		</audio> 
		<!-- Music Ends -->
	</body>
</html>