<?php 
$title = "Classical Music - Opus Academy";
require_once "assets/common/header.php"; 
require_once "admin/model/model.classical_music.php";

$classicalMusic = new ClassicalMusic();
$classicalMusicContent = $classicalMusic->getContent();
?>


<main id="main">
    <section id="breadcrumbs" class="breadcrumbs py-3 px-5 mt-1">
        <div class="container">
            <ol>
                <li><a href="index.php">Home</a></li>
                <li>Programs</li>
                <li>Classical Music Program</li>
            </ol>
            <h2>Opus Classical Music Program</h2>
        </div>
    </section>

    <div class ="container-fluid warning-bg">
        <div class="row">
            <div class="col-md-6 p-5 title-size">
                <h1 class="m-5 px-5 fw-bold">Experience the joy of music through Opus Academy’s outstanding Classical Music program!</h1>
                <h4 class="px-5 my-5 lh-base">We assist students in realizing their creative and musical potential, while fostering a deep breadth of musical knowledge and appreciation that they will carry throughout life. Our program is a great way to further develop your child’s musical skills, provide them with encouragement and confidence throughout.
                Through our modern, spacious facilities and highly qualified teachers, our range of course offerings will allow your child to thrive under masterful guidance as they complete musical education in piano and music theory. </h4>
                <center><a href ="#section-container" class="mx-5"><i class="bi bi-chevron-compact-down mx-auto"></i></a></center>
            </div>

            <div class="col-md-6 px-0">
                <img src="assets/img/classical-music/piano.png" class="w-100" alt="piano-img">
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <h2 class="text-center fw-bold">Classical Music Curriculum</h2>
            <h4 class="mt-3 lh-base mb-5">We offer a wide range of classical music through curriculum-based programs, as students can select from the following certifying bodies:</h4>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="box">
                        <img src= "assets/img/classical-music/l-1.png" class = "w-75">
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="box">
                    <img src= "assets/img/classical-music/l-2.png" class = "w-75">
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="box">
                    <img src= "assets/img/classical-music/l-3.png" class = "w-75">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="box">
                    <img src= "assets/img/classical-music/abrsm.png" class = "w-75">
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <section id="ourCourses" class="ourCourses secondary-bg">
        <div class="container">
            <h2 class="text-center fw-bold">Our Courses</h2>
            
            <div class="row mb-5">
                <div class="col-lg-4">
                    <div class="box">
                        <h5><a href="#!">Private Piano Instruction</a></h5>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="box">
                        <h5><a href="#!">Music Theory</a></h5>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="box">
                        <h5><a href="#!">AP Music</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="section-container" class="">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/img/classical-music/piano-1.jpg" class="w-100" alt="Piano">
                </div>

                <div class="col-md-6 text-content ps-5">
                    <h2 class="text-left fw-bold ">Private Piano Instruction</h2>
                    <p>We offer private classes for classical piano instruction, and students can freely choose to obtain diplomas issued by the following conservatories:</p>

                    <li> Royal Conservatory of Music (RCM)</li>
                    <li> Associated Board of the Royal Schools of Music (ABRSM)</li>
                    <li> Trinity College of London (TCL)</li>
                    <li>London College of Music (LCM)</li><br>

                    <p>Requirements: Application for enrollment interview and audition<br>
                    Class Size: Private<br>
                    Formats: In-Centre<br>
                    Ages: All Ages
                    </p>
                    
                    <div class="row d-flex justify-content-center mb-5">
                        <div class="col-md-6">
                            <a href="#!" type="button" class="learnmore-btn w-100">Learn More</a>
                        </div>
                        <div class="col-md-6">
                            <a href="#!" type="button" class="learnmore-btn w-100">How to Apply</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-5">
                    <img src="assets/img/classical-music/piano-2.jpg" class="w-100" alt="Piano">
                </div>

                <div class="col-md-6 text-content ps-5 mt-5">
                    <h2 class="text-left fw-bold">Music Theory</h2>
                    <p>We offer a complete range of theory classes at the Basic and Advanced levels to meet the exam requirements of Royal Conservatory of Music, Trinity College of London, London College of Music and ABRSM Diploma programs. </p><br>

                    <p>Class Size: Private or small group<br>
                    Formats: In-Centre or Online.<br>
                    Ages: All Ages<br></p>

                    <h4><b>Our well-designed curricula include:</b></h4>

                    <p><b>Rudiments:</b> Preliminary, Intermediate and Advanced Harmony and Counterpoint</p><br> 

                    <p><b>Analysis and Counterpoint</b><p>

                    <p><b>Viva Voce (ABRSM, TCL, LCM)</b></p>

                    <p><b>History:</b>
                    History courses are taught using a stimulating combination of lecture and audio-visual presentation of diverse works and composers.</p>

                    <p><b>Ear Training and Sight Reading:</b>
                    Students focus on technique, ear training, note reading, rhythm, keyboard theory and singing.</p><br>

                    <div class="d-grid gap-2">
                        <a href="#!" type="button" class="primary-btn w-100">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="#" class="ourCourses secondary-bg">
        <div class="container text-center">
            <h1 class="text-center fw-bold mb-5">Advanced Placement (AP) Music Theory Program:</h1>
            <h5 class="text-center mb-4 lh-base">AP is recognized in the US, Canada and more than 40 countries.  Students can earn credit or advanced standing in North American and international colleges and universities.</h5>
            
            <div class="d-flex justify-content-center certificate-container">
                <div class="row">
                    <div class="col-sm-4 col-sm-12 ">
                        <img src="assets/img/classical-music/AP_logoo.png" class="w-100 ap-img mb-4">
                    </div>
                </div>
            </div>
        
            <a href="#!" type="button" class="text-center primary-btn">Learn About Test Preparation</a>
        </div>
     </section>

     <section class="us-debate-style-bg">
        <div class="container">
            <h1 class="m-5 px-5 fw-bold mb-5 text-center" style="color: white;">We Teach U.S. Debate Styles</h1>

            <div class="row align-items-stretch">
                <div class="col-md-4 d-flex">
                    <div class="p-5 bg-light d-flex flex-column align-content-center box">
                        <h1 class="text-center"><strong>Master Classes</strong></h1><br>
                        <p class="text-left">Students can join Master Classes which will provide helpful evaluation leading to increased confidence and heightened musical learning experiences. Master Class students can join our annual grand recitals and other performance venues. </p>
                    </div>
                </div>
                
                <div class="col-md-4 d-flex">
                    <div class="p-5 bg-light d-flex flex-column align-content-center box">
                        <h1 class="text-center"><strong>Music Festivals & Competitions</strong></h1><br>
                        <p class="text-left">For a full musical learning experience, students may also participate in various local, national, or international festivals and competitions, such as Kiwanis Music Festival, Vancouver Music Festival, Student Performers Guild, Canadian Music Competition, and many more. </p>
                    </div>
                </div>

                <div class="col-md-4 d-flex">
                    <div class="p-5 bg-light d-flex flex-column align-content-center box">
                        <h1 class="text-center"><strong>Workshops</strong></h1><br>
                        <p class="text-left">Special workshops focus on communication skills, pedagogy skills and learning theory. </p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <section id="" class="classical-music">
        <div class="container">
            <div class ="text-center">
                <h1 class="fw-bold text-center mb-5">How to Apply the Program</h1>
                <p1 class ="text-center mb-5">We welcome students of all ages and all levels to our Classical Music Program.Follow the steps below:<br>If you have any questions regardign the applications process, please contact <strong>service@opusacademy.com</strong></p1>
            </div>

            <div class="row text-center d-flex align-items-stretch mt-5">
                <div class="col-md-4">
                    <p class="mb-4 fs-1 fw-bold circle-container">1</p>
                    <p class="mb-4 fs-5 fw-bold">Set Up an Appointment</p>
                    <p>To apply, students will set up an appointment for an interview and audition. The appointment is an opportunity for the teacher to meet the student and assess the applicant's skill level prior to planning their program of study.</p>
                </div>

                <div class="col-md-4">
                    <div><p class="mb-4 fs-1 fw-bold circle-container">2</p></div>
                    <p class="mb-4 fs-5 fw-bold">Interview & Audition</p>
                    <p>Applicants are requested to play pieces of different styles, and to demonstrate sight reading skills and technique.<br><br></p>
            
                    <a href="#!" type="button" class="primary-btn mt-5">Book an Appointment</a>
                </div>

                <div class="col-md-4">
                    <div><p class="mb-4 fs-1 fw-bold circle-container">3</p></div>
                    <p class="mb-4 fs-5 fw-bold">Enrollment</p>
                    <p>Applicants should bring recently played music, as well as a list of pieces studied in the recent past.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="secondary-bg"> -->
        <div class="container-fluid secondary-bg">
            <div class="mx-auto">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4 d-flex flex-column justify-content-center">
                        <h1 class="px-5 fw-5 text-left fw-bold">Our Expert teacher</h1>
                        <h5 class="px-5 my-3 lh-base">Our highly qualified and experienced teachers are committed to students' musical and artistic growth—motivating, encouraging, and inspiring young musicians to realize their dreams and reach their full potential. Each one of our teachers are highly trained experts with extensive musical background and specialization. </h5>
                        
                        <a href="#!" type="button" class="light-btn mx-5">Read our Testimonial</a>
                    </div> 

                    <div class="col-md-4">
                        <img src = "assets/img/classical-music/alexx.jpg" class= "w-100" alt="alex">
                    </div>
                </div>
            </div>
        </div>
    <!-- </section> -->

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