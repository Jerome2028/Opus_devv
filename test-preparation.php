<?php
$title = "Standardized Test Preparation - Opus Academy";
require_once "assets/common/header.php";
require_once "admin/model/model.standard_test_preparation.php";

$testPreparation = new StandardTestPreparation();

$testPreparation = $testPreparation->getContent();
?>

<main id="main">
    <section id="breadcrumbs" class="breadcrumbs py-3 px-5">
        <div class="container">
            <ol>
                <li><a href="index.php">Home</a></li>
                <li>Programs</li>
                <li>Standardized Test Preparation</li>
            </ol>
            <h2>Test Preparation</h2>
        </div>
    </section>

    <div class="container-fluid primary-bg">
        <div class="row">
            <div class="col-md-6 p-4 title-size">
                <h1 class="m-5 px-5 fw-bold">Standardized test preparation helps students reach their goals.</h1>
                <h4 class="px-5 my-5 lh-base">With Opus Academy’s test preparation programs, students will sharpen their skills to reach or even exceed their goals. Our students have seen great improvement in their scores, helping them to achieve their private school and/or college admission goals. We offer comprehensive standardized test preparation programs for the following exams, tailored for your student’s individual needs.</h4>
                <center><a href ="#we-help-students" class="mx-5"><i class="bi bi-chevron-compact-down mx-auto"></i></a></center>
            </div>

            <div class="col-md-6 px-0">
                <img src="assets/img/test-prep/p-27.jpg" class="w-100 writing-child" alt="writing-child">
            </div>
        </div>
    </div>

    <section id="we-help-students" class="we-help-students secondary-bg">
        <div class="container">
            <div class="section-title">
                <h2 class="text-center fw-bold">We help students prepare for a variety of exams</h2>
            </div>

            <div class="row">
                <div class="col-md-3 d-flex justify-content-center my-3 p-0">
                    <img src="assets/img/test-prep/c1.png" class="w-50">
                </div>

                <div class="col-md-3 d-flex justify-content-center my-3 p-0">
                    <img src="assets/img/test-prep/c2.png" class="w-50">
                </div>

                <div class="col-md-3 d-flex justify-content-center my-3 p-0">
                    <img src="assets/img/test-prep/c3.png" class="w-50">
                </div>

                <div class="col-md-3 d-flex justify-content-center my-3 p-0">
                    <img src="assets/img/test-prep/c4.png" class="w-50">
                </div>

                <div class="col-md-3 d-flex justify-content-center my-3 p-0">
                    <img src="assets/img/test-prep/c11.png" class="w-50">
                </div>

                <div class="col-md-3 d-flex justify-content-center my-3 p-0">
                    <img src="assets/img/test-prep/c22.png" class = "w-50">
                </div>

                <div class="col-md-3 d-flex justify-content-center my-3 p-0">
                    <img src="assets/img/test-prep/c33.png" class = "w-50">
                </div>

                <div class="col-md-3 d-flex justify-content-center my-3 p-0">
                    <img src="assets/img/test-prep/c44.png" class = "w-50">
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="white-bg shadow rounded">
                        <h2 class ="fw-bold mb-4 text-center">Private School Entrance Exams</h2>
                        <ul>
                            <li >Secondary School Admissions Test (SSAT)</li>
                            <li>Independent School Entrance Exam (ISEE)</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="white-bg shadow rounded">
                        <h2 class ="fw-bold mb-4 text-center">University<br>Entrance Exams</h2>
                        <ul>
                            <li>Scholastic Aptitude Test (SAT)</li>
                            <li>American College Testing (ACT)</li>
                            <li>International English Language Testing</li> 
                            <li>System (IELTS)</li>
                            <li>Test of English as a Foreign Language (TOEFL)</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="white-bg shadow rounded">
                        <h2 class ="fw-bold mb-4 text-center">Advanced<br>Learning </h2>
                        <ul>
                            <li>All subjects of the Advanced Placement (AP) Exams</li>
                            <li>International Baccalaureate (IB) Tests</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="d-flex flex-column justify-content-center">
                <div class="row m-5">
                    <div class="col-md-6 d-flex justify-content-center" style="background: url('assets/img/test-prep/p-24.JPG') center center no-repeat; background-size: cover;"></div>

                    <div class="col-md-6 d-flex align-items-stretch flex-column px-5">
                        <h4 class="mb-4 fs-1 fw-bold">Our Teaching Methods</h4>
                        <p>Our test preparation courses begin with a diagnostic exam and continues with the development of a plan which is customized according to the student’s individual needs. We track student progress throughout the length of the program and administer practice exams under simulated test conditions. Test reports are used to review and identify areas for further skill strengthening as well as suggestions on how to study efficiently. Our goal is twofold: to raise students’ test scores, but also to equip them with real, lasting critical reasoning skills that will benefit students throughout their academic journey. </p>

                        <div class="d-flex justify-content-left mt-5">
                            <a href="#!" type="button" class="primary-btn w-100">Our Recent Competition Results</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="" class="primary-bg">
        <div class="container">
            <div class="p-3">
            <div class="row">
                <div class="col-xl-12">
                    <p class="fs-1 fw-bold text-center" style="color: white;">Give your child the opportunity to improve their potential exam scores!</p>
                    <center><a href="#!" type="button" class="light-btn mt-3">Book an Appointment</a></center>
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