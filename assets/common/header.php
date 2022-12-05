<?php
require_once "controller/controller.db.php";
require_once "admin/model/model.contact_info.php";

$contactInfo = new ContactInfo();
$contactInfo = $contactInfo->getInformation();

$url = $_SERVER["REQUEST_URI"];
$url_implode = explode("/", $url);
$page = $url_implode[2];

if ($page == "") {
	$page = "index.php";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= $title; ?></title>

	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="Debate, Public speaking, speech, drama, acting, tutoring, private school, university admissions, educational counselling, educational counsulting, test preparation, interview skills, test preparation" name="keywords">

	<link href="assets/img/favicon.ico" rel="icon">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<link href="assets/css/style.css" rel="stylesheet">

    <script src="assets/vendor/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="assets/vendor/dist/sweetalert2.min.css">

	<script src="assets/vendor/jquery/jquery.js"></script>
</head>

<body onload="load()">
	<section id="topbar" class="d-flex align-items-center">
		<div class="container d-flex justify-content-center justify-content-md-between">
			<div class="contact-info d-flex align-items-center">
				
				<?php
					foreach($contactInfo as $v) {
						$title = $v["title"];
						$description = $v["description"];
						$status = $v["contact_info_status"];

						if($title == "Email") {
							if($status == 0) {
								echo '
									<i class="bi bi-envelope d-flex align-items-center ms-5"><span>'.$description.'</i>
								';
							}
						}
					
						if($title == "Telephone & Fax") {
							$telephone = explode("/", $description);
							if($status == 0) {
								echo '
									<i class="bi bi-telephone d-flex align-items-center"><span>'.$telephone[0].'</span></i>
								';
							}
						}
					}
				?>

			</div>

				<?php
					foreach($contactInfo as $v) {
						$title = $v["title"];
						$description = $v["description"];
						$status = $v["contact_info_status"];

						if($title == "Vancouver Location") {
							if($status == 0) {
								echo '
								<div class="cta d-none d-md-flex align-items-center">
									<div class="contact-info d-flex align-items-center">
										<i class="bi bi-pin-map d-flex align-items-center ms-4"><span>'.$description.'</span></i>
									</div>
								</div>
								';
							}
						}
					}
				?>
				
		</div>
	</section>

	<header id="header" class="d-flex align-items-center">
		<div class="container d-flex align-items-center justify-content-between">

		<div class="logo">
			<h1>
				<a href="index.php"><img src="assets/img/opus_logo.jpg" alt="Opus logo" id="logo"></a>
			</h1>
		</div>

			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link <?= ($page == "index.php" ? "active" : "") ?>" href="index.php">Home</a></li>
					<li class="dropdown"><a href="#!"><span>Programs</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li><a class="nav-link <?= ($page == "communication-arts.php" ? "active" : "") ?>" href="communication-arts.php">Communication Arts</a></li>
							<li class="dropdown"><a href="#!"><span>Competitive Debate Programs</span> <i class="bi bi-chevron-right"></i></a>
								<ul>
									<li><a class="nav-link <?= ($page == "competitive-debate-programs.php?canada" ? "active" : "") ?>" href="competitive-debate-programs.php?canada">Canada</a></li>
									<li><a class="nav-link <?= ($page == "competitive-debate-programs.php?ph" ? "active" : "") ?>" href="competitive-debate-programs.php?ph">Phillippines</a></li>
									<li><a class="nav-link <?= ($page == "competitive-debate-programs.php?access_mca" ? "active" : "") ?>" href="competitive-debate-programs.php?access_mca">Access MCA</a></li>
								</ul>
							</li>
							<li><a  class="nav-link <?= ($page == "mcgraw-hill-education-courses.php" ? "active" : "") ?>" href="mcgraw-hill-education-courses.php">McGraw Hill Education Courses</a></li>
							<li><a  class="nav-link <?= ($page == "academic-enrichment.php" ? "active" : "") ?>" href="academic-enrichment.php">Academic Subject Enrichment</a></li>
							<li><a  class="nav-link <?= ($page == "test-preparation.php" ? "active" : "") ?>" href="test-preparation.php">Standardized Test Preparation</a></li>
							<li><a  class="nav-link <?= ($page == "early-learning.php" ? "active" : "") ?>" href="early-learning.php">Early Learning</a></li>
							<li><a  class="nav-link <?= ($page == "classical-music.php" ? "active" : "") ?>" href="classical-music.php">Classical Music</a></li>
						</ul>
					</li>
					<!-- <li><a class="nav-link <?= ($page == "admission-counselling.php" ? "active" : "") ?>" href="admission-counselling.php">Admission Counselling</a></li> -->

					<li class="dropdown"><a href="#!"><span>Admissions Counselling</span> <i class="bi bi-chevron-down"></i></a>
					<ul>
						
					<li><a  class="nav-link <?= ($page == "private-school.php" ? "active" : "") ?>" href="private-school.php">Private School</a></li>
					<li><a  class="nav-link <?= ($page == "university-and-graduate.php" ? "active" : "") ?>" href="university-and-graduate.php">University and Graduate</a></li>

					</ul>

					<li class="dropdown"><a href="#!"><span>Summer Programs</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li><a class="nav-link <?= ($page == "summer-camps.php" ? "active" : "") ?>" href="summer-camps.php">Opus Summer</a></li>
							<li class="dropdown"><a href="#!"><span>Pre-Collegiate Pathways</span> <i class="bi bi-chevron-right"></i></a>
								<ul>
									<li><a href="#!">Canadian</a></li>
									<li><a href="assets/pdf/2021_Pre_Collegiate_Pathways_International_Explorations_C_proof.pdf">- Pre Collegiate Pathways</a></li>
									<li><a href="assets/pdf/Application_Precedure_b.pdf">- Application Procedure</a></li>
									<li><a href="https://form.jotform.com/211169418873058">- Online Form</a></li>
									<li><a href="#!">Phillippines</a></li>
									<li><a href="assets/pdf/pcp-opus-ph.pdf">- Pre Collegiate Pathways</a></li>
									<li><a href="assets/pdf/Application_Precedure_PH.pdf">- Application Procedure</a></li>
									<li><a href="https://form.jotform.com/211169418873058">- Online Form</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a href="#!"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li><a class="nav-link <?= ($page == "about.php" ? "active" : "") ?>" href="about.php">About Us</a></li>
							<li><a class="nav-link <?= ($page == "history-and-team.php" ? "active" : "") ?>" href="history-and-team.php">History and Our Team</a></li>
							<li><a class="nav-link <?= ($page == "careers.php" ? "active" : "") ?>" href="careers.php">Careers</a></li>
							<li><a class="nav-link <?= ($page == "testimonials.php" ? "active" : "") ?>" href="careers.php">Testimonials</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="nav-link" href="#!"><span> Opus News</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li><a class="nav-link <?= ($page == "" ? "" : "") ?>" href="#!">Latest News</a></li>
							<li><a class="nav-link <?= ($page == "" ? "" : "") ?>" href="#!">Achievement</a></li>
							<li><a class="nav-link <?= ($page == "" ? "" : "") ?>" href="#!">Events</a></li>
						</ul>
					</li>

					<li><a class="nav-link <?= ($page == "contact.php" ? "active" : "") ?>" href="contact.php">Contact</a></li>
					<a href="https://opusacademy.com/login/" type="button" class="navbar-btn register-btn">Register Now</a>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav>
		</div>
	</header>