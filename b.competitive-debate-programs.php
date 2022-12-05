<?php 
$title = "Harvard Debate Program - Opus Academy";
require_once "assets/common/header.php"; 
require_once "admin/model/model.competitive_debate.php";

$competitiveDebate = new CompetitiveDebate();
$competitiveDebateContent = $competitiveDebate->getContent();
?>
<main id="main">
    <section id="breadcrumbs" class="breadcrumbs pb-0">
        <div class="container">
        <ol>
            <li><a href="index.php">Home</a></li>
            <li>Program</li>
            <li>Competitive Debate Programs</li>
        </ol>
        <h2>Opus Competitive Debate Programs</h2>
        </div>
    </section>
    
    <div class="container p-0 competitive-bg">
        <div class="row">
            <div class = "col-md-6" style="padding-right: 0px;">
                <h1 class="text-left mt-5 px-5 pb-3 pt-5 fw-bold">In partnership with the Harvard Debate Council bringing you the best debate learning experience.</h1>
                <p class="text-left px-5 pb-5">Learn from the master coaches from the Harvard Debate Council! Opus Academy is proud to be in partnership with Harvard Debate Council, providing the opportunity for students to train with the world's leading experts in international debate practices.<p>
                <div class = text-center><a href ="#press"><i class="bi bi-chevron-compact-down mx-auto"></i></a></div>
            </div>

            <div class = "col-md-6">
                <img src = "assets/img/portfolio/bridge.jpg" class="w-100" alt="bridge-img">
            </div>
        </div>
    </div>

    <section id="section-container" class="section-container">
        <div class="container">
            <div class ="row">
                <div class="col-md-6 pe-5">
                    <h2 class="text-left mb-5 fw-bold">Harvard Competitive Debate</h2>

                    <div class="d-flex justify-content-center">
                        <img src="assets/img/portfolio/p-21.png" alt="harvard" style="width: 60%;">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <a href="#!" type="button" class="danger-btn">Register Fall 2022</a>
                        </div>

                        <div class="col-md-6">
                            <a href="#!" type="button" class="danger-btn">Courses Schedule</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 text-content">
                    <br><p>The Harvard Debate Program is Opus Academy’s U.S. style debate program developed from our exclusive partnership with the Harvard Debate Council (HDC). Established for over 35 years, the HDC instructors have reached the highest levels of competitions as both coaches and competitors with international experience. They share a spirit of wanting to help students from around the world benefit from debate. Give your child the opportunity of a lifetime— empower future leaders through speech and debate. Learn to Speak! Speak to Learn! Speak with power, confidence, clarity, and conviction!Through debate, students deepen their understanding of the world and look for solutions to local, national, and global issues. Early debate training helps students listen carefully, think logically, and speak effectively. Students sharpen their reasoning and problem-solving skills by studying how to construct arguments, defend them through refutation, and cross-examine others. Debate teaches life skills essential to future success and is applicable to most any future career choice.</p>

                    <h4 class="fw-bold mt-4">Certificate Granting For Completion</h4>

                    <div class="row mt-4">
                        <div class="col-sm-6 d-flex justify-content-center">
                            <img src="assets/img/portfolio/p-21.png" class="w-50">
                        </div>

                        <div class="col-sm-6 d-flex justify-content-center">
                            <img src="assets/img/portfolio/p-22.png" class="w-25">
                        </div>

                        <p class="fs-5 fw-bold">Program Structure</p>
                        <p>Our first-class debate program provides students with the knowledge, skills, and technique necessary to master debate. Through a well-designed sequential program consisting of core concepts, established methodology, and universal elements, students develop the ability to debate using logic, argumentation, and refutation the hallmarks of any successful debater.</p>

                        <p class="custom-badge">
                            <span>Core Concepts</span>
                            <span>Methodology</span>
                            <span>Elements</span>
                        </p>
                </div>
            </div>
        </div>
    </section>

    <section id="teach-us-debate" class="teach-us-debate">
        <div class="container">
            <h1 class="fw-bold mb-5 text-center" style="color: white;">We Teach U.S. Debate Styles?</h1>

            <div class="row">
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="p-5 bg-light">
                        <h1 class="text-center"><strong>Public Forum</strong></h1><br>
                        <p class="text-left">Public Forum has rapidly become the most popular format of debate both in the United States and internationally. In a public forum debate round, two teams of two students debate for approximately 45 minutes on a national topic that changes throughout the school year. Students will debate several topics over the course of the year and will prepare for regular tournament competitions.</p>
                    </div>
                </div>
                
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="p-5 bg-light">
                        <h1 class="text-center"><strong>Policy Debate</strong></h1><br>
                        <p class="text-left">one of the oldest forms of debate competition most common to US high schools and US universities, is also the format favoured for the Harvard Debate Council competitions. In a policy debate round, two teams of two debate for approximately one hour and thirty minutes on an annual national topic related to domestic and/or international policy.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="team-and-expert" class="team-and-expert">
        <div class="container">

            <div class="d-flex flex-column justify-content-center">
                <div class="row">

                    <div class="col-md-6 d-flex justify-content-center" style="background: url('assets/img/home/IMG_2566.JPG') center center no-repeat; background-size: cover;"></div>

                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="p-4">
                            <p class="mb-4 fs-1 fw-bold">Competitive Debate at Opus Academy</p>
                            <p>We train serious debaters to compete in regional, national, and international tournaments. Students learn advanced skills and sharpen their debate abilities in various styles and formats while learning in-depth issues.</p>

                            <div class="d-flex justify-content-start">
                                <a href="#!" type="button" class="primary-btn mt-4">Our Recent Competition Results</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-0">
        <div class="text-left competitive-title section-bg">

            <div class="row">
                <div class="col-md-6" style="padding: 9%;">
                    <div class="mb-5 m-5 text-left">
                                <h1><strong>Why Learn with Us?</strong></h1>
                            <div class="pt-5 text-left">
                                <p>✔ Exclusive partnership with Harvard Debate Council</p>
                                <p>✔ Top - level Harvard Debate Instructors</p>
                                <p>✔ College Prowler</p>
                                <p>✔ Highly developed Curriculum</p>
                                <p>✔ Years of Excellence (Harvard Debate Council: established over 35 years and Opus Academy: established over 16 years)
                                <p>✔ Excellent student-faculty ratio</p>
                                <p>✔ Harvard Debate Council Certificate of completion of program</p>
                            </div>
                    </div>
                </div>

                <div class="col-md-6" style="background: url('assets/img/portfolio/p-25.PNG') center center no-repeat; background-size: cover;">
                </div>
            </div>
        </div>
    </section>

    <section id="counter" class="counter">
        <div class="container">

        <div class="p-5">
            <div class="row">

            <div class="col-xl-12">
                <p class="fs-1 fw-bold text-center" style="color: white;">Empower future leaders through speech and debate.Learn to Speak! Speak to Learn!</p>
                <center><a href="#!" type="button" class="light-btn mt-3">Book an Appointment</a></center>
            </div>

            </div>
        </div>

        </div>
    </section>
</main>

<?php require_once "assets/common/footer.php"; ?>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

<script src="assets/js/main.js"></script>

</html>