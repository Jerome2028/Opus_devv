<?php 
$title = "Opus Summer Camps - Opus Academy";
require_once "assets/common/header.php"; 
require_once "admin/model/model.summer_camps.php";

$summerCamps = new SummerCamps();

$summerCamps = $summerCamps->getContent();
?>

    <main id="main">
        <section id="breadcrumbs" class="breadcrumbs py-3 px-5 mt-1">
            <div class="container">
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>Summer Programs</li>
                    <li>Summer Camps</li>
                </ol>
                <h2>Opus Summer Camps</h2>
            </div>
        </section>
        
        <div class="container-fluid warning-bg">
            <div class="row">
                <div class = "col-md-6 p-5 title-size">
                    <h1 class="m-5 px-5 fw-bold">Opus Academy's Summer camps offer students a chance to get ahead in their education journey!</h1>
                    <h4 class="px-5 my-5">With Opus Academy’s test preparation programs, students will sharpen their skills to reach or even exceed their goals. Our students have seen great improvement in their scores, helping them to achieve their private school and/or college admission goals. We offer comprehensive standardized test preparation programs for the following exams, tailored for your student’s individual needs.</h4>
                    <center><a href ="#section-container-ph" class="mx-5"><i class="bi bi-chevron-compact-down mx-auto"></i></a></center>
                </div>

                <div class="col-md-6 px-0">
                    <img src="assets/img/summer-programs/students.jpg" class="w-100" alt="students">
                </div>
            </div>
        </div>

        <section id="summer-camp-registration" class="summer-camp-registration">
            <div class="container">
                <div class="d-flex flex-column justify-content-center">
                    <div class="row m-5">
                        <div class="col-md-6 d-flex justify-content-center" style="background: url('assets/img/summer-programs/child-playing.jpg') center center no-repeat; background-size: cover;"></div>

                        <div class="col-md-6 d-flex align-items-stretch flex-column px-5">
                            <h4 class="mb-4 fs-1 fw-bold">Summer Camp Registration</h4>
                            <p>We have a variety of summer camps available. See our schedule and register below.</p>

                            <p class="fs-5 fw-bold mt-3">
                                Summer 2022 Registration: Closed<br>
                                Summer 2023 Registration: TBA
                            </p>

                            <div class="d-flex justify-content-left mt-5">
                                <div class="d-flex justify-content-start me-2">
                                    <a href="#!" type="button" class="primary-btn p-3">Register Summer 2022</a>
                                </div>
                                
                                <div class="d-flex justify-content-end ms-2">
                                    <a href="#!" type="button" class="primary-btn p-3">Summer 2022 Schedule</a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="ourCourses" class="ourCourses secondary-bg">
            <div class="container">
                <div class="section-title">
                    <h2 class="text-center fw-bold">We Offer a Wide Range of Summer Intensive Academic Camps</h2>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-12 d-flex align-items-stretch">
                        <div class="box">
                            <h3 class="mb-4"><a href="#!">Communication Arts</a></h3>
                            <p>• Public Speaking & Debate</p>
                            <p>• Speech Arts & Drama</p>
                            <p>• Harvard Debate</p>
                            <p>• RCM Speech Technical Theory, History & Literature Exams</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 d-flex align-items-stretch">
                        <div class="box">
                            <h3 class="mb-4"><a href="#!">English & Math</a></h3>
                            <p>• Language Arts & Writing (Elementary)</p>
                            <p>• Critical Reading & Writing (Secondary)</p>
                            <p>• Accelerated Math (Elementary)</p>
                            <p>• Secondary Math</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 d-flex align-items-stretch">
                        <div class="box">
                            <h3 class="mb-4"><a href="#!">Music</a></h3>
                            <p>• Musical Theatre / Voice</p>
                            <p>• Classical Singing</p>
                            <p>• Music Theory, Harmony, History, Analysis</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="box">
                            <h3 class="mb-4"><a href="#!">Humanities</a></h3>
                            <p>• Business Courses for High School Students (Wharton High School Curriculum)</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="box">
                            <h3 class="mb-4"><a href="#!">Test Preparation</a></h3>
                            <p>• SAT / ACT Exams</p>
                            <p>• SSAT / ISEE Exams</p>
                            <p>• TOEFL / IELTS Exams</p>
                            <p>• Pre-AP & AP Intensive Courses</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="box">
                            <h3 class="mb-4"><a href="#!">Other</a></h3>
                            <p>• Youth Leadership Training</p>
                            <p>• Etiquette for Kids and Teens</p>
                            <p>• Computer Science / Coding</p>
                            <p>• Academic Subject Tutoring</p>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center my-5">
                    <a href="#!" type="button" class="primary-btn">Learn More</a>
                </div>
            </div>
        </section>

        <section id="" class="primary-bg">
            <div class="container">
                <div class="p-3">
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="fs-1 fw-bold text-center" style="color: white;">Opus can help your child nurture a lifelong love of learning.</p>
                            <center><a href="#!" type="button" class="light-btn">Register for Summer 2022</a></center>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php require_once "assets/common/footer.php"; ?>

<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

<script src="assets/js/main.js"></script>
</html>