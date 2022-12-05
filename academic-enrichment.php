<?php
$title = "Academic Enrichment II - Opus Academy";
require_once "assets/common/header.php";
require_once "admin/model/model.academic_enrichment.php";

$academicEnrichment = new AcademicEnrichment();
$academicEnrichmentContent = $academicEnrichment->getContent();
?>

    <main id="main">
        <section id="breadcrumbs" class="breadcrumbs py-3 px-5">
            <div class="container">
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>Programs</li>
                    <li>Academic Enrichment II</li>
                </ol>
                <h2>Academic Subject Enrichment</h2>
            </div>
        </section>

        <div class ="container-fluid primary-bg">
            <div class="row">
                <div class="col-md-6 p-5 title-size">
                    <h1 class="m-5 px-5 fw-bold">We provide academic enrichment in all core subjects.</h1>
                    <h4 class="px-5 my-5 lh-base">Our goal is for students to master the material and achieve academic success no matter their starting point. Our teachers are subject area experts and are dedicated to their students’ success. They teach not only subject content, but also the strategies and skills that enable students to meet their educational goals with ease. </h4>
                    <center><a href ="#ourCourses" class="mx-5"><i class="bi bi-chevron-compact-down mx-auto"></i></a></center>
                </div>

                <div class="col-md-6 px-0">
                    <img src="assets/img/academic-enrichment/p-13.jpg" class="w-100" alt="speak-img">
                </div>
            </div>
        </div>

        <section id="ourCourses" class="ourCourses secondary-bg">
            <div class="container">
                <div class="section-title">
                    <h2 class="text-center">Our Courses</h2>
                </div>

                <div class="row d-flex align-items-stretch">
                    <div class="col-lg-4 col-md-6">
                        <div class="box">
                            <h5><a href="#!">Critical Reading & Writing</a></h5>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="box">
                            <h5><a href="#!">English</a></h5>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="box">
                            <h5><a href="#!">Math & Computer Science</a></h5>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="box">
                            <h5><a href="#!">Science</a></h5>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="box">
                            <h5><a href="#!">Social Studies, History & Social Sciences</a></h5>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="box">
                            <h5><a href="#!">Languages</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-container" class="section-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 pe-5">
                        <h2 class="text-left mb-5 fw-bold">OPUS Critical Reading and Writing</h2>
                        <div class="d-flex justify-content-start">
                            <img src="assets/img/academic-enrichment/awards.jpg" class="w-100" alt="awards-img" />
                        </div>
                        <div class="d-grid gap-2">
                            <a href="#!" type="button" class="learnmore-btn mt-4">Learn More</a>
                        </div>
                    </div>

                    <div class="col-md-6 text-content">
                        <p>At Opus, we have developed a unique English course that complements and enriches the high school curriculum, giving your child a step-up in grasping the English language at an intellectual level. Our Critical Reading and Writing courses progress over four years as students explore and master English language and literature. </p><br>

                        <p>
                            Class Size: Private, pair or small group <br>
                            Formats: Online or In-Centre <br>
                            Grades: 7 - 12
                        </p>
                        
                        <div class="pt-5"> 
                            <p class="pb-3"><span class="fw-bold">CRW Level 1 Introduction to Academic Writing and Literary Analysis:</span> The Opus Mock Trial Program trains students to plan, draft, and present their claims for cross-examining and delivering opening and closing arguments. It additionally instructs students how to argue intelligently and logically while conducting courtroom procedures such as introducing material evidence and responding to objections. Students will increase their confidence, poise, oral skills, critical thinking skills, and teamwork.</p>

                            <p class="pb-3"><span class="fw-bold">CRW Level 2 Genres of Communication:</span> In this course, students learn elements of creative writing, and delve deeply into the study of rhetoric and argumentation.</p>

                            <p class="pb-3"><span class="fw-bold">CRW Level 3 Literary Analysis and Exposition:</span> In this course, students will gain a broad, detailed overview of the history of English literature and literary criticism. </p>
                            
                            <p class="pb-3"><span class="fw-bold">Pre-AP English Advanced Analysis & Exposition:</span> This course probes further into advanced literary analysis, with challenging classic texts, preparing students for what to expect from the AP course that follows the CRW units.</p>
                        </div>
                    
                        <div class="d-flex justify-content-start certificate-container">
                            <div class="row">
                                <div class="col-xl-4 col-sm-12">
                                    <img src="assets/img/academic-enrichment/AP_logo.png" class="ap-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="spacing"></div>

            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6 pe-5">
                        <h2 class="text-left mb-5 fw-bold">English Enrichment</h2>
                        <div class="d-flex justify-content-start">
                            <img src="assets/img/academic-enrichment/speak.JPG" class="w-100" alt="speak-img" />
                        </div>

                        <div class="d-grid gap-2">
                            <a href="#!" type="button" class="learnmore-btn mt-4">Learn More</a>
                        </div>
                    </div>

                    <div class="col-md-6 text-content">
                        <p>Advanced Placement (AP) Level: English Literature and Composition, English Language and Composition<br><br>High School:  English Language, Literature Studies, and Communications</p><br>

                        <p>
                            Class Size: Private, pair or small group <br>
                            Formats: Online or In-Centre <br>
                            Grades: All
                        </p>

                        <h4 class="fw-bold mt-4">Examinable:</h4>
                        <div class="d-flex justify-content-start certificate-container">
                            <div class="row">
                                <div class="col-xl-4 col-sm-12">
                                    <img src="assets/img/academic-enrichment/AP_logo.png" class="ap-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="spacing"></div>

            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6 pe-5">
                        <h2 class="text-left mb-5 fw-bold">Mathematics & Computer Science</h2>
                        <div class="d-flex justify-content-start">
                            <img src="assets/img/academic-enrichment/speak.JPG" class="w-100" alt="speak-img" />
                        </div>

                        <div class="d-grid gap-2">
                            <a href="#!" type="button" class="learnmore-btn mt-4">Learn More</a>
                        </div>
                    </div>

                    <div class="col-md-6 text-content">
                        <p>Advanced Placement (AP): Calculus AB, Calculus BC, Statistics, Computer Science<br><br>High School: Beginning Algebra, Intermediate Algebra, Trigonometry, Geometry, Pre-Calculus</p><br>

                        <p>
                            Class Size: Private, pair or small group <br>
                            Formats: Online or In-Centre <br>
                            Grades: All
                        </p>

                        <h4 class="fw-bold mt-4">Examinable:</h4>
                        <div class="d-flex justify-content-start certificate-container">
                            <div class="row">
                                <div class="col-xl-4 col-sm-12">
                                    <img src="assets/img/academic-enrichment/AP_logo.png" class="ap-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="spacing"></div>

            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6 pe-5">
                        <h2 class="text-left mb-5 fw-bold">Science</h2>
                        <div class="d-flex justify-content-start">
                            <img src="assets/img/academic-enrichment/speak.JPG" class="w-100" alt="speak-img" />
                        </div>

                        <div class="d-grid gap-2">
                            <a href="#!" type="button" class="learnmore-btn mt-4">Learn More</a>
                        </div>
                    </div>

                    <div class="col-md-6 text-content">
                        <p>Advanced Placement (AP): Biology, Physics, Chemistry, Environmental Science<br><br>High School: Biology, Physics, Chemistry, Earth Sciences</p><br>

                        <p>
                            Class Size: Private, pair or small group<br>
                            Formats: Online or In-Centre <br>
                            Grades: All
                        </p>

                        <h4 class="fw-bold mt-4">Examinable:</h4>
                        <div class="d-flex justify-content-start certificate-container">
                            <div class="row">
                                <div class="col-xl-4 col-sm-12">
                                    <img src="assets/img/academic-enrichment/AP_logo.png" class="ap-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="spacing"></div>

            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6 pe-5">
                        <h2 class="text-left mb-5 fw-bold">Social Studies, History & Social Sciences</h2>
                        <div class="d-flex justify-content-start">
                            <img src="assets/img/academic-enrichment/speak.JPG" class="w-100" alt="speak-img" />
                        </div>

                        <div class="d-grid gap-2">
                            <a href="#!" type="button" class="learnmore-btn mt-4">Learn More</a>
                        </div>
                    </div>

                    <div class="col-md-6 text-content">
                        <p>Advanced Placement (AP): World History, European History, US History, Art History, Comparative Government and Politics, Human Geography<br><br>High School: Social Studies, Law</p><br>

                        <p>
                            Class Size: Private, pair or small group<br>
                            Formats: Online or In-Centre <br>
                            Grades: All
                        </p>

                        <h4 class="fw-bold mt-4">Examinable:</h4>
                        <div class="d-flex justify-content-start certificate-container">
                            <div class="row">
                                <div class="col-xl-4 col-sm-12">
                                    <img src="assets/img/academic-enrichment/AP_logo.png" class="ap-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="spacing"></div>

            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6 pe-5">
                        <h2 class="text-left mb-5 fw-bold">Languages</h2>
                        <div class="d-flex justify-content-start">
                            <img src="assets/img/academic-enrichment/speak.JPG" class="w-100" alt="speak-img" />
                        </div>

                        <div class="d-grid gap-2">
                            <a href="#!" type="button" class="learnmore-btn mt-4">Learn More</a>
                        </div>
                    </div>

                    <div class="col-md-6 text-content">
                        <p>Advanced Placement (AP): French, Chinese, Japanese and others</p><br>

                        <p>
                            Class Size: Private, pair or small group<br>
                            Formats: Online or In-Centre <br>
                            Grades: All
                        </p>

                        <h4 class="fw-bold mt-4">Examinable:</h4>
                        <div class="d-flex justify-content-start certificate-container">
                            <div class="row">
                                <div class="col-xl-4 col-sm-12">
                                    <img src="assets/img/academic-enrichment/AP_logo.png" class="ap-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="spacing"></div>
        </section>

        <section id="" class="primary-bg">
            <div class="container">
            <div class="p-3">
                <div class="row">
                    <div class="col-xl-12">
                        <p class="fs-1 fw-bold text-center" style="color: white;">Give your child the opportunity to learn and speak with confidence, clarity and conviction!</p>
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