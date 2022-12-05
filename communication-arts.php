<?php
$title = "Communication Arts - Opus Academy";
require_once "assets/common/header.php";
require_once "admin/model/model.communication_arts.php";

$communicationArts = new CommunicationArts();

$communicationArtsContent = $communicationArts->getContent();
$ourCourse = $communicationArts->getCourses();
?>

<main id="main">
    <section id="breadcrumbs" class="breadcrumbs py-3 px-5">
        <div class="container">
            <ol>
                <li><a href="index.php">Home</a></li>
                <li>Programs</li>
                <li>Communication Arts</li>
            </ol>
            <h2>Communication Arts Programs</h2>
        </div>
    </section>

    <div class ="container-fluid warning-bg">
        <div class="row">
            <div class="col-md-6 p-5 title-size">
                <h1 class="m-5 px-5 fw-bold">Effective spoken communication is<br>critical for success in today's highly competitive world.</h1>
                <h4 class="px-5 my-5 lh-base">At opus, we are commited to teaching students the art of public speaking,debate, speech arts and drama to develop their creativity and expression.Our goal is to train students of all ages to speak and perform with self assurance, empowering them for a lifetime of success in their and professional lives.</h4>
                <center><a href ="#section-container" class="mx-5"><i class="bi bi-chevron-compact-down mx-auto"></i></a></center>
            </div>

            <div class="col-md-6 px-0">
                <img src="assets/img/communication-arts/p-13.jpg" class="w-100" alt="speak-img">
            </div>
        </div>
    </div>

    <section id="ourCourses" class="ourCourses secondary-bg">
        <div class="container">

            <div class="section-title">
                <h2 class="text-center">Our Courses</h2>
            </div>

            <div class="row">
                <?php
                foreach($ourCourse as $v) {
                    $course = $v["course"];
                    $status = $v["status"];

                    if($status == 0) {
                        ?>

                        <div class="col-lg-4 col-md-6">
                            <div class="box">
                                <h5><a href="#!"><?= $course ?></a></h5>
                            </div>
                        </div>

                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <section id="section-container" class="section-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6 pe-5">
                    <h2 class="text-left mb-5 fw-bold">Speech Arts & Drama</h2>

                    <div class="d-flex justify-content-start">
                        <img src="assets/img/communication-arts/awards.jpg" class="w-100" alt="awards-img" />
                    </div>

                    <div class="d-grid gap-2">
                        <a href="#!" type="button" class="learnmore-btn mt-4">Learn More</a>
                    </div>
                </div>

                <div class="col-md-6 text-content">
                    <p>We Offer a wide selection of Speech & Drama syllabi tailored to your child's individuals needs and interests.Student learn through a structured framework and partake in a series of graded examinations leading to a diploma.Students can choose diffrent syllabi strands from international certification board such as Royal Conservatory of Music (Canada), London College of music (UK) and Trinity College of London (UK).Significant long-term benefits includethe potential of various courses counting towards high school, as well as performance opportunities including recitals, workshops, festivals and competitions.<br><br>At Opus,we pride  ourselves on our comprehensive program, allowing students to discover their own voices through a creative mix of prose, poetry, drama, storytelling, and imporivasation. At Opus, Students learn to interpret and perform a variety of literary forms from western classical and modern literature.Our courses build on a young learner's expressive potential and teaches the accompanying vocabulary and language skills necessary for appreciating and performing various litery art forms.Alongside impovisation techniques, drama games, and other activities to stimulate their imaginations,we help young learners build their character through exressive movement and voice.Students learn relaxation methods, proper breathing techniques, as well as projection and articulation.</p><br>

                    <p>
                        Class Size:Private,Group or Pair<br>
                        Format:Online or In-Centre<br>
                        Grades: K-12 <br>
                        Courses Offered:Exam Based or Non-exam Based
                    </p>
                    
                    <h4 class="fw-bold mt-5">Our well-designed curricula include:</h4>
                    
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

                    <h4 class="fw-bold mt-3 mb-3">Certificate and Diploma Granting:</h4>
                                
                    <div class="d-flex justify-content-center certificate-container">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <img src="assets/img/communication-arts/l-1.png " class="cert-img">
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <img src="assets/img/communication-arts/l-2.png" class="cert-img">
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <img src="assets/img/communication-arts/l-3.png" class="cert-img">
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
                    <h2 class="text-left mb-5 fw-bold">Public Speaking and Debate</h2>

                    <div class="d-flex justify-content-start">
                        <img src="assets/img/communication-arts/speak.JPG" class="w-100" alt="speak-img" />
                    </div>

                    <div class="d-grid gap-2">
                        <a href="#!" type="button" class="learnmore-btn mt-4">Learn More</a>
                    </div>
                </div>

                <div class="col-md-6 text-content">
                    <p>At Opus Academy, we take the fear out of public speaking and empower young minds to speak with articulation and confidence. We prepare students to speak with clarity and conviction, providing them with the life-long skills of effective and engaging speaking as they venture into the world as global citizens. Students learn the critical components of public speaking. From vocal articulation and breath control to the art of speechwriting and delivery, students will be inspired to convey their ideas effectively. Students learn to apply their acquired skills through classroom presentations, discussions, formal speeches, social interaction, and essay writing. </p><br>

                    <p>
                        Class Size: Private, Group or Pair <br>
                        Formats: Online or In-Centre <br>
                        Grades: K-12 <br>
                        Courses Offered: Exam Based or Non-exam Based
                    </p>

                    <h4 class="fw-bold mt-4">Our well-designed curricula include:</h4>
                    
                    <p class="custom-badge">
                        <span>Elements of Public Speaking</span>
                        <span>Mental Gymnastics</span>
                        <span>Various types of speeches - persuasive, informative, entertaining, and demonstrative </span>
                        <span>Speech writing</span>
                        <span>Oral presentations</span>
                        <span>Prepared Speeches</span>
                        <span>Debate & Argumentation</span>
                        <span>Oral Interpetation (poetry and prose)</span>
                        <span>Discussion & Research</span>
                        <span>Conversations & Speaking</span>
                    </p>

                    <h4 class="fw-bold mt-3">Certificate and Diploma Granting:</h4>
                                
                    <div class="d-flex justify-content-center certificate-container">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <img src="assets/img/communication-arts/l-1.png" class="cert-img">
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <img src="assets/img/communication-arts/l-2.png" class="cert-img">
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <img src="assets/img/communication-arts/l-3.png" class="cert-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why-take-exam">
        <div class="secondary-bg">
            <div class="row">
                <div class="col-md-6 why-take-exam-content">
                    <div class="mb-5 m-5 text-left">
                        <h4 class="mb-4 fs-1 fw-bold">Why Choose Opus?</h4>

                        <ul>
                            <li>Structured and sequential Learning.</li>
                            <li>Certificate and diploma granting.</li>
                            <li>Stand out in Private school & US UK University <br>admissions.</li>
                            <li>Competition and award opportunities.</li>
                            <li>Earn credentials and BC arts course credits</li>
                        </ul>

                        <a href="#!" type="button" class="light-btn w-100">Our Achievement</a>
                    </div>
                </div>

                <div class="col-md-6" style="background: url('assets/img/communication-arts/p-25.PNG') center center no-repeat; background-size: cover;"></div>
            </div>
        </div>
    </section>

    <section id="section-container" class="section-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6 pe-5">
                    <h2 class="text-left mb-5 fw-bold">Interview Skills Program</h2>

                    <div class="d-flex justify-content-start">
                        <img src="assets/img/communication-arts/p-10.jpg" class="w-100" alt="awards-img" />
                    </div>

                    <div class="d-grid gap-2">
                        <a href="#!" type="button" class="learnmore-btn mt-4">Learn More</a>
                    </div>
                </div>

                <div class="col-md-6 text-content">
                    <p>Interviews can be a daunting task at any ages, let alone children and teens. With the help of our experts at Opus Academy, we will help your child rise to the occasion and master! Opus has a long-standing history preparing students for the interviewing world, whether it be for private school admissions, universities, or internships. The ability to express oneself in interview settings is one of the most important skills a student can acquire. In this course, students learn how to communicate effectively, making the most of their qualifications and extra-curricular experiences. Students are placed in a mock interview setting, where they are evaluated by an instructor with experience both interviewing candidates and teaching interview skills.</p><br>

                    <p>
                        Class Size: Private <br>
                        Formats: Online or In-Centre <br>
                        Grades: K-10
                    </p>
                </div>
            </div>
        </div>

        <div class="spacing"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-6 pe-5">
                    <h2 class="text-left mb-5 fw-bold">Leadership & Etiquette</h2>

                    <div class="d-flex justify-content-start">
                        <img src="assets/img/communication-arts/p-19.PNG" class="w-100" alt="debate-img" />
                    </div>

                    <div class="d-grid gap-2">
                        <a href="#!" type="button" class="learnmore-btn mt-4">Learn More</a>
                    </div>
                </div>

                <div class="col-md-6 text-content">
                    <p>Time and again, science has proven that strong emotional intelligence in children leads to better decision making, motivation, and a heightened sense of self-awareness going forward in life. This program is especially designed to present a multitude of skills necessary for positive personality development and strengthened emotional intelligence. Students will develop stronger communication skills, organizational goals, and gain essential leadership skills. They will study the essential qualities of a leader and learn conflict resolution skills through understanding social concepts and dynamics. In addition, this program prepares young people to present themselves well in a variety of social situations and at job interviews. The practical side of our courses are designed to increase knowledge and appreciation of good manners and etiquette, improving self-esteem, and respecting others. </p><br>

                    <p class="fw-bold">
                        Class Size: Private, Group or Pair <br>
                        Formats: Online or In-Centre <br>
                        Grades: 1-10 <br>
                        Courses Offered:  Youth Leadership Training<br>
                                Etiquette and Personality Empowerment for Youth<br>
                                Etiquette for Kids
                    </p>

                    <h4 class="fw-bold mt-4">Our well-designed curricula include:</h4>
                    
                    <p class="custom-badge">
                        <span>Personal image</span>
                        <span>Communicating with confidence </span>
                        <span>Dining etiquette</span>
                        <span>Etiquette in public places</span>
                        <span>Conducting meetings</span>
                        <span>Conflict resolution </span>
                        <span>Ethics and values</span>
                        <span>Cultural proficiency</span>
                    </p>
                </div>
            </div>
        </div>

        <div class="spacing"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-6 pe-5">
                    <h2 class="text-left mb-5 fw-bold">International Relations</h2>

                    <div class="d-flex justify-content-start">
                        <img src="assets/img/communication-arts/p-12.jpg" class="w-100" alt="flag-img" />
                    </div>

                    <div class="d-grid gap-2">
                        <a href="#!" type="button" class="learnmore-btn mt-4">Learn More</a>
                    </div>
                </div>

                <div class="col-md-6 text-content">
                    <p>In the fast-paced and ever-changing world of the 21st century, it is critical for young minds to be prepared for the world at large by increasing their global awareness. At Opus, we introduce and engage students in the global effects of economic, social, and political processes, as well as issues of justice and responsibility through three courses: Current Events, Model UN, and Mock Trial. </p><br>

                    <p class="fs-5 fw-bold">Current Events </p>
                    <p>This course increases young people's awareness of and responsiveness to issues and events that are important locally, nationally, and internationally.  Students learn to differentiate between fact and opinion, as well as to critically analyze news and various media sources, developing their own perspectives in the process. Students will be equipped to not only engage with the news around them, but contribute to a wide range of topics and discussions on a global scale.</p> <br>

                    <p class="fs-5 fw-bold">Model United Nations</p>
                    <p>This course teaches the basics of constructing and analyzing diplomatic speeches, as well as constructing and presenting successful negotiation strategies. Students are assigned roles and given specific diplomatic goals to meet by the end of the conference. Students will develop the skills necessary to interpret, analyze, and debate global issues concerning diplomacy, politics, and international relations.</p> <br>

                    <p class="fs-5 fw-bold">Mock Trial</p>
                    <p>The Opus Mock Trial Program trains students to plan, draft, and present their claims for cross-examining and delivering opening and closing arguments. It additionally instructs students how to argue intelligently and logically while conducting courtroom procedures such as introducing material evidence and responding to objections. Students will increase their confidence, poise, oral skills, critical thinking skills, and teamwork.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="" class="primary-bg">
        <div class="container">
            <div class="p-3">
                <div class="row">
                    <div class="col-xl-12">
                        <p class="fs-1 fw-bold text-center" style="color: white;">Give your child the opportunity to learn speak with confidence, clarity, and conviction!</p>
                        <center><a href="#!" type="button" class="light-btn">Book an Appointment</a></center>
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

<script src="assets/js/main.js"></script>

</html>