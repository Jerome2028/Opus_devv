<?php 
$title = "Harvard Debate Program - Opus Academy";
require_once "assets/common/header.php"; 
require_once "admin/model/model.competitive_debate.php";

$competitiveDebate = new CompetitiveDebate();
$competitiveDebateContent = $competitiveDebate->getContent();
?>
<main id="main">
    <?php if(isset($_GET["ph"])) { ?>
        <section id="breadcrumbs" class="breadcrumbs py-3 px-5">
            <div class="container">
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>Program</li>
                    <li>Competitive Debate Programs</li>
                </ol>
                <h2>Opus Competitive Debate Philippines Summer Program</h2>
            </div>
        </section>

        <div class="container-fluid danger-bg">
            <div class="row">
                <div class = "col-md-6 p-5 title-size">
                    <h1 class="m-5 px-5 fw-bold">In partnership with the Harvard Debate Council bringing you the best debate learning experience in the Philippines.</h1>
                    <h4 class="px-5 my-5  lh-base">Learn from the master coaches from the Harvard Debate Council! Opus Academy is proud to be in partnership with Harvard Debate Council, providing the opportunity for students to train with the world's leading experts in international debate practices.</h4>
                    <center><a href ="#section-container-ph" class="mx-5"><i class="bi bi-chevron-compact-down mx-auto"></i></a></center>
                </div>

                <div class="col-md-6 px-0">
                    <img src="assets/img/competitive-debate/white-house.jpg" class="w-100" alt="bridge-img">
                </div>
            </div>
        </div>

        <section id="section-container-ph" class="section-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 pe-5">
                        <h2 class="text-left mb-5 fw-bold">Harvard Debate Philippines Summer Program</h2>

                        <div class="d-flex justify-content-center">
                            <img src="assets/img/competitive-debate/p-21.png" alt="harvard" style="width: 60%;">
                        </div>

                        <div class="row d-flex justify-content-center m-3">
                            <div class="col-md-6">
                                <a href="#!" type="button" class="danger-btn w-100">Register Fall 2022</a>
                            </div>

                            <div class="col-md-6">
                                <a href="#!" type="button" class="danger-btn w-100">Courses Schedule</a>
                            </div>
                        </div>

                        <div class="row d-flex justify-content-center mt-3">
                            <div class="col-md-6">
                                <a href="#!" type="button" class="danger-btn w-100">Apply Summer 2023</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 text-content">
                        <p>The Harvard Debate Manila Summer Program is Opus Academy’s U.S. style debate program developed from our exclusive partnership with the Harvard Debate Council (HDC). Established for over 35 years, the HDC instructors have reached the highest levels of competitions as both coaches and competitors with international experience. </p>

                        <p>Through this two-week intensive debate program, students deepen their understanding of the world and look for solutions to local, national, and global issues. Early debate training helps students listen carefully, think logically, and speak effectively. Students sharpen their reasoning and problem-solving skills by studying how to construct arguments, defend them through refutation, and cross-examine others. Debate teaches life skills essential to future success and is applicable to most any future career choice.</p>

                        <h4 class="fw-bold mt-4">Certificate Granting For Completion</h4>

                        <div class="row mt-4">
                            <div class="col-md-6 d-flex justify-content-center">
                                <img src="assets/img/competitive-debate/p-21.png" class="w-50">
                            </div>

                            <div class="col-md-6 d-flex justify-content-center">
                                <img src="assets/img/competitive-debate/p-22.png" class="w-25">
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

        <section id="teach-us-debate-ph" class="teach-us-debate-ph">
            <div class="container">
                <h1 class=" m-5 px-5 fw-bold mb-5 text-center" style="color: white;">We Teach U.S. Debate Styles</h1>

                <div class="row">
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="p-5 bg-light">
                            <h1 class="text-center fs-1 fw-bold">Intensive Public Speaking and Argumentation</h1><br>
                            <p class="text-left">This course provides a solid foundation for communication in academic and career contexts. Students will learn the foundational elements of crafting outstanding persuasive speeches. Students will select a contemporary topic with a level of controversy and produce public policy and personal advocacy speeches.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="p-5 bg-light">
                            <h1 class="text-center fs-1 fw-bold">Intensive Public Forum</h1><br>
                            <p class="text-left">Public Forum has rapidly become the most popular format of debate both in the United States and internationally. In a public forum debate round, two teams of two students debate for approximately 45 minutes on a national topic that changes throughout the school year. Students will debate several topics over the course of the year and will prepare for regular tournament competitions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="application-process" class="application-process">
            <div class="container">
                <h1 class="fw-bold mb-5 text-center">Application Process</h1>

                <div class="row text-center d-flex align-items-stretch">
                    <div class="col-md-4">
                        <p class="mb-4 fs-1 fw-bold circle-container">1</p>
                        <p class="mb-4 fs-5 fw-bold">Competitive Debate at Opus Academy</p>
                        <p>Read through the application process carefully before submitting your application.</p>
                        <a href="#!" type="button" class="danger-btn mb-2">How to Apply?</a>
                    </div>

                    <div class="col-md-4">
                        <div><p class="mb-4 fs-1 fw-bold circle-container">2</p></div>
                        <p class="mb-4 fs-5 fw-bold">Submit Your Application</p>
                        <p>Submit your online application form and requirements before the deadline.</p>
                        <a href="#!" type="button" class="danger-btn mb-2">Apply Summer 2023</a>
                        <a href="#!" type="button" class="danger-btn mb-2">Teacher Evaluation Form</a>
                    </div>

                    <div class="col-md-4">
                        <div><p class="mb-4 fs-1 fw-bold circle-container">3</p></div>
                        <p class="mb-4 fs-5 fw-bold">Results & Enrollment</p>
                        <p>Student application results will be released via email. Students are officially enrolled once they have accepted, signed all relevant forms, and paid the tuition.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="why-us p-0">
            <div class=" secondary-bg">
                <div class="row">
                    <div class="col-md-6 why-us-content">
                        <div class="mb-5 m-5 text-left">
                                <h4 class="mb-4 fs-1 fw-bold">Why Learn with Us?</h4>
                         
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

        <section id="" class="danger-bg">
            <div class="container">
                <div class="p-5">
                    <div class="row">
                    <div class="col-xl-12">
                        <p class="fs-1 fw-bold text-center" style="color: white;">Empower future leaders through speech and debate.Learn to Speak! Speak to Learn!</p>
                        <center><a href="#!" type="button" class="light-btn mt-3">Apply for Summer 2023</a></center>
                    </div>
                    </div>
                </div>
            </div>
        </section>
    
        <?php } if(isset($_GET["canada"])) { ?>
        <section id="breadcrumbs" class="breadcrumbs py-3 px-5">
            <div class="container">
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>Program</li>
                    <li>Competitive Debate Programs</li>
                </ol>
                <h2>Opus Competitive Debate Programs</h2>
            </div>
        </section>

        <div class="container-fluid danger-bg">
            <div class="row">
                <div class = "col-md-6 p-5 title-size">
                    <h1 class="m-5 px-5 fw-bold">In partnership with the Harvard Debate Council bringing you the best debate learning experience.</h1>
                    <h4 class="px-5 my-5  lh-base">Learn from the master coaches from the Harvard Debate Council! Opus Academy is proud to be in partnership with Harvard Debate Council, providing the opportunity for students to train with the world's leading experts in international debate practices.</h4>
                    <center><a href ="#section-container-ca" class="mx-5"><i class="bi bi-chevron-compact-down mx-auto"></i></a></center>
                </div>

                <div class="col-md-6 px-0">
                    <img src="assets/img/competitive-debate/bridge.jpg" class="w-100" alt="bridge-img">
                </div>
            </div>
        </div>

        <section id="section-container-ca" class="section-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 pe-5">
                        <h2 class="text-left mb-5 fw-bold">Harvard Competitive Debate</h2>

                        <div class="d-flex justify-content-center">
                            <img src="assets/img/competitive-debate/p-21.png" alt="harvard" style="width: 60%;">
                        </div>

                        <div class="row d-flex justify-content-center m-3">
                            <div class="col-md-6 col-sm-12 px-1">
                                <a href="#!" type="button" class="danger-btn">Register Fall 2022</a>
                            </div>

                            <div class="col-md-6 col-sm-12 px-1">
                                <a href="#!" type="button" class="danger-btn">Courses Schedule</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 text-content">
                        <br><p>The Harvard Debate Program is Opus Academy’s U.S. style debate program developed from our exclusive partnership with the Harvard Debate Council (HDC). Established for over 35 years, the HDC instructors have reached the highest levels of competitions as both coaches and competitors with international experience. They share a spirit of wanting to help students from around the world benefit from debate. Give your child the opportunity of a lifetime— empower future leaders through speech and debate. Learn to Speak! Speak to Learn! Speak with power, confidence, clarity, and conviction!<br><br>Through debate, students deepen their understanding of the world and look for solutions to local, national, and global issues. Early debate training helps students listen carefully, think logically, and speak effectively. Students sharpen their reasoning and problem-solving skills by studying how to construct arguments, defend them through refutation, and cross-examine others. Debate teaches life skills essential to future success and is applicable to most any future career choice.</p>

                        <h4 class="fw-bold mt-4">Certificate Granting For Completion</h4>

                        <div class="row mt-4">
                            <div class="col-sm-6 d-flex justify-content-center">
                                <img src="assets/img/competitive-debate/p-21.png" class="w-50">
                            </div>

                            <div class="col-sm-6 d-flex justify-content-center">
                                <img src="assets/img/competitive-debate/p-22.png" class="w-25">
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
            </div>
        </section>

        <section id="teach-us-debate-ca" class="teach-us-debate-ca">
            <div class="container">
                <h1 class="mb-5 fw-bold text-center" style="color: white;">We Teach U.S. Debate Styles</h1>

                <div class="row">
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="p-5 bg-light">
                            <h1 class="text-center fw-bold">Public Forum</h1><br>
                            <p class="text-left">Public Forum has rapidly become the most popular format of debate both in the United States and internationally. In a public forum debate round, two teams of two students debate for approximately 45 minutes on a national topic that changes throughout the school year. Students will debate several topics over the course of the year and will prepare for regular tournament competitions.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="p-5 bg-light">
                            <h1 class="text-center fw-bold">Policy Debate</h1><br>
                            <p class="text-left">one of the oldest forms of debate competition most common to US high schools and US universities, is also the format favoured for the Harvard Debate Council competitions. In a policy debate round, two teams of two debate for approximately one hour and thirty minutes on an annual national topic related to domesticc and/or international policy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section id="competitve-debate" class="competitve-debate">
            <div class="container">
                <div class="d-flex flex-column justify-content-center">
                    <div class="row m-5">
                        <div class="col-md-6 d-flex justify-content-center" style="background: url('assets/img/home/IMG_2566.JPG') center center no-repeat; background-size: cover;"></div>

                        <div class="col-md-6 d-flex align-items-stretch flex-column px-5">
                            <h4 class="mb-4 fs-1 fw-bold">Competitive Debate at Opus Academy</h4>
                            <p>At Opus Academy, we pride ourselves on the academic and personal success of our students. Our highly trained team of experts work towards empowering young minds to reach their potential while providing them with the knowledge and tools necessary to meet their goals.</p>
                            <div class="d-flex justify-content-start mt-5">
                                <a href="#!" type="button" class="primary-btn  w-100">Our Recent Competition Results</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="why-us p-0">
            <div class="secondary-bg">
                <div class="row">
                    <div class="col-md-6 why-us-content">
                        <div class="mb-5 m-5 text-left">
                            <h4 class="mb-4 fs-1 fw-bold">Why Learn with Us?</h4>

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

    <?php } else { ?>
        
    <?php }?>
</main>

<?php require_once "assets/common/footer.php"; ?>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

<script src="assets/js/main.js"></script>

</html>