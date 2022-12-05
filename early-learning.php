<?php
$title = "Early Learning Ages - Opus Academy";
require_once "assets/common/header.php"; 
require_once "admin/model/model.early_learning.php";
require_once "admin/model/model.card.php";

$earlyLearning = new EarlyLearning();
$card = new Cards();

$earlyLearning = $earlyLearning->getEarlyLearningContent();

$page_url =  $_SERVER["REQUEST_URI"];
$pages = explode("/", $page_url);
$page = $pages[2];

$cardContent = $card->getContentWhere($page);
?>

<main id="main">
    <section id="breadcrumbs" class="breadcrumbs py-3 px-5">
        <div class="container">
            <ol>
                <li><a href="index.php">Home</a></li>
                <li>Program</li>
                <li>Early Learning</li>
            </ol>
            <h2>Early Learning Programs</h2>
        </div>
    </section>

    <div class ="container-fluid primary-bg">
        <div class="row">
            <div class="col-md-6 title-size">
                <h1 class="px-5 fw-bold">Pre-school learning is integral to a child's school success.</h1>
                <h4 class="px-5 my-5 lh-base">Enrich your child's playtime with fun and educational activities at Opus Academy! Our Early Learning program promotes academic development and school readiness in an encouraging and fun environment focused on preparing them for grade school and encouraging an enthusiasm for lifelong learning. We believe in combining active play with structured educational activities, placing emphasis on language arts, reading readiness through phonics, as well as speaking skills, math, and printing. Your child will learn how to look at books, love them, and recognize how printed words convey meaning.<h4>
                <center><a href ="#section-container" class="mx-5"><i class="bi bi-chevron-compact-down mx-auto"></i></a></center>
            </div>

            <div class="col-md-6 px-0">
                <img src="assets/img/early-learning/kidss.png" class="w-100 children" alt="children">
            </div>
        </div>
    </div>

    <section id="section-container" class="section-container">
        <div class="container">
            <div class ="row">
                <div class="col-md-6 pe-5">
                    <h2 class="text-left mb-5 fw-bold">Early Learning Program</h2>

                    <div class="d-flex justify-content-center">
                        <img src="assets/img/early-learning/p-18.jpg" class="w-100" alt="harvard">
                    </div>

                    <div class="d-grid gap-2">
                        <a href="#!" type="button" class="learnmore-btn mt-4">Learn More</a>
                    </div>
                </div>

                <div class="col-md-6 text-content">
                    <p>The early learning speech syllabus of the London College of Music. This program is designed to encourage young students with their speech abilities and assess their talents at early stages of development. The goal is to expand young children’s interactive oral communication skills and confidence.</p>

                    <p class="mt-4">
                        Class Size: Group<br>
                        Formats: Online or Online with students in-Centre<br>
                        Grades: 6-12<br>
                        Courses Offered: Public Forum Novice, Public Forum Varsity, Policy Debate
                    </p>

                    <h4 class="fw-bold mt-4">In these classes, young children will learn to:</h4>

                    <p class="custom-badge">
                        <span>Vocal Technique</span>
                        <span>Improvisation and Impromptu Speaking</span>
                        <span>Story Telling</span>
                        <span>Public Speaking</span>
                        <span>Mime & Creative Movement</span>
                        <span>Play Reading and Dramatization </span>
                        <span>Acting Styles</span>
                        <span>Oral Interpetation (poetry and prose)</span>
                        <span>Scene Study</span>
                        <span>Shakespeare</span>   
                    </p>

                    <h4 class="fw-bold mt-4">Certificate Granting</h4>

                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/img/early-learning/l-1.png" class="w-75 mb-1">
                        </div>

                        <div class="col-md-6">
                            <img src="assets/img/early-learning/l-2.png" class="w-100 mt-5">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="exam-early-learn pb-0">
        <div class="secondary-bg">
            <div class="row">
                <div class="col-md-6 exam-early-learn-content">
                    <div class="mb-5 m-5 text-left">
                            <h4 class="mb-4 fs-1 fw-bold">Why exams for early learning?</h4>
                        
                            <p><i class='bx bx-check fs-4 fw-bold'></i> Exclusive partnership with Harvard Debate Council</p>
                            <p><i class='bx bx-check fs-4 fw-bold'></i> Top - level Harvard Debate Instructors</p>
                            <p><i class='bx bx-check fs-4 fw-bold'></i> College Prowler</p>
                            <p><i class='bx bx-check fs-4 fw-bold'></i> Highly developed Curriculum</p>
                            <p><i class='bx bx-check fs-4 fw-bold'></i> Years of Excellence (Harvard Debate Council: established over 35 years and Opus Academy: established over 16 years)
                            <p><i class='bx bx-check fs-4 fw-bold'></i> Excellent student-faculty ratio</p>
                            <p><i class='bx bx-check fs-4 fw-bold'></i> Harvard Debate Council Certificate of completion of program</p>
                    </div>
                </div>

                <div class="col-md-6" style="background: url('assets/img/communication-arts/p-25.PNG') center center no-repeat; background-size: cover;"></div>
            </div>
        </div>
    </section>

    <section id="" class="primary-bg">
        <div class="container">
            <div class="p-3">
                <div class="row">
                    <div class="col-xl-12">
                        <p class="fs-1 fw-bold text-center" style="color: white;">Give your child the opportunity to learn and speak with confidence, clarity, and conviction!</p>
                        <center><a href="#!" type="button" class="light-btn mt-3">Book an Appointment</a></center>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
require_once "assets/common/footer.php"; 
?>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

<script src="assets/js/main.js"></script>

</html>