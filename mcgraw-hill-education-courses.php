<?php
$title = "McGraw Hill Education Courses - Opus Academy";
require_once "assets/common/header.php"; 
require_once "admin/model/model.mcgraw_hill_education.php";
require_once "admin/model/model.card.php";

$mcGrawHillEducation = new McGrawHillEducation();
$card = new Cards();
$mcGrawHillEducationContent = $mcGrawHillEducation->getContent();

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
                <li>McGraw Hill Education Courses</li>
            </ol>
            <h2>McGraw Hill Education Redbird Math & English Programs</h2>
        </div>
    </section>

    <section>
    <div class="container-fluid warning-bg">
        <div class="row">
            <div class = "col-md-6 p-5 title-size">
                <h1 class="m-5 px-5 fw-bold">REDBIRD<br>Personalized math and English language arts enrichment education by Stanford and McGraw-Hill Education</h1>
                <center><a href ="#we-help-students" class="mx-5"><i class="bi bi-chevron-compact-down mx-auto"></i></a></center>
            </div>

            <div class="col-md-6 px-0">
                <img src="assets/img/mcgraw-hill/student.png" class="w-100" alt="writing-child">
            </div>
        </div>
    </div>
    </section>

    <section id="redbird-program" class="redbird-program secondary-bg">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-center">
                        <img src="assets/img/mcgraw-hill/MHE_logo.png" alt="mc-graw-hill" class="p-4 mcgrawhill-img">
                    </div>

                    <div class="col-md-6 d-flex align-items-stretch flex-column px-5">
                        <h4 class="mb-4 fs-1 fw-bold">What is the McGraw-Hill Education Redbird Program?</h4>
                        <p>Formerly known as the Stanford University Education Program for Gifted Youth Program, the Redbird Programs are now under the McGraw Hill Education suite of courses. <br><br>Redbird combines advanced education technology based on cutting-edge educational research by Stanford University.<br><br>Using AI technology, course material is individualized and accommodates differences in student learning levels, allowing students to progress at their own pace and accelerate their education.
                        </p>

                        <div class="d-flex justify-content-start">
                            <a href="https://www.mheducation.com/prek-12/explore/redbird.html" type="button" class="primary-btn mt-4 w-100">Learn More on the Redbird Website</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="use-redbird" class="use-redbird">
        <div class="container">
            <div class="d-flex flex-column justify-content-center">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-stretch flex-column px-5">
                        <h4 class="mb-4 fs-1 fw-bold">How We Use Redbird</h4>
                        <p>At Opus Academy, we combine the McGraw Hill Education multimedia computer-based learning with face-to face instruction delivered by our qualified teachers. The classrooms provide students with a live forum in which they can interact with instructors and other students, and our small group environment allows for more individualized attention. Our instructors supplement the Redbird & ALEKS curriculum with Opus enhancement activities to fulfill the academic needs of each student who enters our academy.</p>
                    </div>

                    <div class="col-md-6 d-flex justify-content-center" style="background: url('assets/img/mcgraw-hill/p-26.jpg') center center no-repeat; background-size: contain;"></div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="why-it-works" class="why-it-works primary-bg">
        <div class="container">
            <h1 class="mb-5 fw-bold text-center">Why it Works</h1>

            <div class="row text-center d-flex align-items-stretch">
                <div class="col-md-3">
                    <p class="mb-4 fs-1 fw-bold circle-container">1</p>
                    <p class="mb-4 fs-5 fw-bold">Complements Teaching<br>Personalized Learning</p>
                    <p>By providing adaptive, digital instruction, practice, and application.</p>
                </div>

                <div class="col-md-3">
                    <div><p class="mb-4 fs-1 fw-bold circle-container">2</p></div>
                    <p class="mb-4 fs-5 fw-bold">Personalized<br>Learning</p>
                    <p>Provides students with a richly personalized path through the curriculum, delivering precisely what each student needs to accelerate their learning.</p>
                </div>

                <div class="col-md-3">
                    <div><p class="mb-4 fs-1 fw-bold circle-container">3</p></div>
                    <p class="mb-4 fs-5 fw-bold">Integrates<br>Technology</p>
                    <p>Integrates groundbreaking analysis technology, allowing students to receive error-specific instructional feedback on their work.</p>
                </div>

                <div class="col-md-3">
                    <div><p class="mb-4 fs-1 fw-bold circle-container">4</p></div>
                    <p class="mb-4 fs-5 fw-bold">Empowers<br>Educators</p>
                    <p>By freeing them from instructing and grading basic lessons and creating instructional time to focus on sophisticated aspects of the material.</p>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-5">
                <a href="testimonials.php" type="button" class="light-btn mb-2">Hear From Past Students</a>
            </div>
        </div>
    </section>

    <section id="ourCourses" class="ourCourses secondary-bg">
        <div class="container">
            <div class="section-title">
                <h2 class="text-center fw-bold">Redbird Programs We Offer</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="box">
                        <h3 class="mb-4"><a href="#!">Language Arts & Writing</a></h3>
                        <p>Courses developed by Stanford University, in collaboration with McGraw Hill Education</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="box">
                        <h3 class="mb-4"><a href="#!">Mathematics</a></h3>
                        <p>Courses developed by Stanford University, in collaboration with McGraw Hill Education</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="box">
                        <h3 class="mb-4"><a href="#!">Secondary Mathematics</a></h3>
                        <p>McGraw Hill Education and Assessment and Learning in Knowledge Spaces (ALEKS)s</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-container" class="section-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6 pe-5">
                    <h2 class="text-left mb-5 fw-bold">Language Arts & Writing</h2>
                    <div class="d-flex justify-content-start">
                        <img src="assets/img/mcgraw-hill/redbird-law-mh-logo.png" class="w-100" alt="redbird-law-mh-logo" />
                    </div>
                </div>

                <div class="col-md-6 text-content">
                    <p>Redbird Language Arts & Writing (L.A.W.) is a digitally adaptive and personalized learning solution that helps students achieve their full potential as developing writers. Redbird technology is built upon more than 25 years of research in adaptive and writing tactics, addressing language, and writing standards.<br><br>Redbird Language Arts & Writing combines a proven blend of instruction, interactive practice, and innovative writing analysis that enables students to build strong foundational writing skills.</p><br>

                    <p>
                        Class Size: Private, Group or Pair <br>
                        Formats: Online or In-Centre <br>
                        Grades: 2 - 7
                    </p>
        
                    <h4 class="fw-bold mt-5">Redbird L.A.W. is guided by research and collaboration with:</h4>
                    <p>Stanford Center for the Study of Language and Information</p>
                
                    <div class="d-flex justify-content-start certificate-container mb-3">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <img src="assets/img/mcgraw-hill/stanford-symbol.png" class="cert-img">
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-start certificate-containe mb-3">
                        <iframe width="100%" height="400" src="https://www.youtube.com/embed/5IisoiWfIiU" title="Redbird Language Arts and Writing: Let Language Take Flight" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                    </div>

                    <div class="d-flex justify-content-start">
                        <a href="https://www.mheducation.com/prek-12/explore/redbird/language-arts-writing.html" type="button" class="primary-btn w-100">Learn More Redbird Website</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="spacing"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-6 pe-5">
                    <h2 class="text-left mb-5 fw-bold">Mathematics S.T.E.M.</h2>
                    <div class="d-flex justify-content-start">
                        <img src="assets/img/mcgraw-hill/logo_redbird_math.jpg" class="w-100" alt="logo_redbird_math" />
                    </div>
                </div>

                <div class="col-md-6 text-content">
                    <p>Redbird Mathematics is an adaptive mathematics curriculum developed after more than 20 years of research at Stanford University. Backed by proven results, this program features the latest in adaptive instruction, gamification, and digital project-based learning. <br><br>Redbird Mathematics challenges students with unique and rigorous STEM projects and is designed to engage students with fun learning activities and games which are unlocked as they advance in each unit. Through Redbird’s personalizes learning algorithms, each student’s account is automatically assessed and adapted based on activity proficiency Furthermore, it prepares students with a strong foundation preparing them for Algebra. </p>

                    <p>
                        Class Size: Private, Group or Pair <br>
                        Formats: Online or In-Centre <br>
                        Grades: K - 7
                    </p>
                    
                    <h4 class="fw-bold mt-5">Redbird Math is guided by research and collaboration with:</h4>
                    <p>Stanford Graduate School of Education<br>Stanford Department of Mathematics</p>
                
                    <div class="d-flex justify-content-start certificate-container mb-3">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <img src="assets/img/mcgraw-hill/stanford-symbol.png" class="cert-img">
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-start certificate-containe mb-3">
                        <iframe width="100%" height="400" src="https://www.youtube.com/embed/EhlyYnNst74" title="[Webinar] Developing Learning Management System (LMS) and Open Educational Resources (OERS) 22 May" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                    <div class="d-flex justify-content-start">
                        <a href="https://www.mheducation.com/prek-12/explore/redbird/redbird-mathematics.html" type="button" class="primary-btn w-100">Learn More Redbird Website</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="spacing"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-6 pe-5">
                    <h2 class="text-left mb-5 fw-bold">Secondary Mathematics A.L.E.K.S.</h2>
                    <div class="d-flex justify-content-start">
                        <img src="assets/img/mcgraw-hill/logo_redbird_math.jpg" class="w-100" alt="logo_redbird_math" />
                    </div>
                </div>

                <div class="col-md-6 text-content">
                    <p>Assessment and LEarning in Knowledge Spaces (ALEKS) is an adaptive, online math program that uses artificial intelligence and open response questioning to identify student strength and weaknesses. ALEKS instructs students on the topics they are most ready to learn. ALEKS periodically reassesses the student to ensure that topics learned are also retained. ALEKS courses offer complete topic coverage, offering future success in school and beyond.</p>

                    <p>
                        Class Size: Private, Group or Pair<br>
                        Formats: Online or In-Centre <br>
                        Grades: 6-12, Advanced Placement
                    </p>
                    
                    <h4 class="fw-bold mt-5">Redbird Math is guided by research and collaboration with:</h4>
                    <p>Stanford Graduate School of Education<br>Stanford Department of Mathematics</p>
                
                    <div class="d-flex justify-content-start certificate-container mb-3">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <img src="assets/img/mcgraw-hill/stanford-symbol.png" class="cert-img">
                            </div>
                        </div>
                    </div>

                    <h4 class="fw-bold mt-5">Courses include:</h4>
                    <p class="custom-badge">
                        <span>ALEKS Gr 6-8</span>
                        <span>ALEKS Beginning Algebra</span>
                        <span>ALEKS Intermediate Algebra</span>
                        <span>ALEKS Pre-Calculus</span>
                        <span>ALEKS Trigonometry</span>
                        <span>ALEKS AP Statistics </span>
                        <span>ALEKS AP Chemistry</span>
                        <span>Mastery of SAT Math</span>
                        <span>Mastery of ACT Math</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="" class="primary-bg">
        <div class="container">
            <div class="p-3">  
                <div class="row">
                    <div class="col-xl-12">
                        <p class="fs-1 fw-bold text-center" style="color: white;">Ready to start preparing for your child's enrichment education? </p>
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