<?php 
$title = "Opus Academy";
require_once "assets/common/header.php"; 
require_once "admin/model/model.home_page.php";

$homePage = new HomePage();

$homePageHero = $homePage->getHero();
$page = "home.php";
$homeCard = $homePage->getCardsContent($page);
?>
  <main id="main">

    <div class="swiper heroSwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="banner-wrap">
            <img src="assets/img/index/demowebbanner.jpg" alt="hero-banner">

            <div class="content">
              <div class="inner">
                <div class="text-content">
                  <p class="fs-1 fw-bolder">Opus Academy will prepare your child for academic success.</p>
                  <p class="fs-3 fw-light">Now open for Fall Registration</p>
                  <div class="d-flex align-items-center">
                    <a href="#!" class="banner-btn btn-sm text-decoration-none">Register Today</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- <?php
          foreach($homePageHero as $v) {
            $img = $v["img"];
            $title = $v["title"];
            $link_title = $v["link_title"];
            $link = $v["link"];
            $status = $v["status"];

            if(!empty($img)) {
              $image = explode("../", $img);
              $image_url = $image[1];
            }

            if($status == 0) {
              ?>

              <div class="swiper-slide">
                <div class="banner-wrap">
                <?= ($image_url != "" ? '<img src="'. $image_url .'" alt="hero-banner">' : '<img src="admin/assets/img/hero-tumbnail.jpg" alt="hero-banner">') ?>
                  <div class="content">
                    <div class="inner">
                      <div class="text-content">
                        <h3><?= $title ?></h3>
                        <div class="d-flex align-items-center">
                            <?= ($link_title == "") ? '' : '<a href="'.$link.'" class="banner-btn">'.$link_title.'</a>' ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <?php
            }

          }
        ?> -->
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev ms-5" style="color: #f8f9fa;"></div>
      <div class="swiper-button-next me-5" style="color: #f8f9fa;"></div>
    </div>

    <section class ="section-bg mt-5">
      <div class ="text-center mb-5">
        <p>In Partnership with <b>A Better Way to College </b> to provide <b>ACCESS MICHIGAN COLLEGE ALLIANCE (MCA) Programs</b></p>
      </div>
      <div class="slider">
        <div class="slide-track">

          <div class="slide ms-5">
            <div class ="shadow bg-body rounded card">
              <div class ="card-body">
                <img src="assets/img/amichigan/adrian-college.png" class="w-100 card-img ">
              </div>
            </div>  
          </div>
          <div class="slide ms-5">
            <div class ="shadow bg-body rounded card">
              <div class ="card-body">
                <img src="assets/img/amichigan/albion.png" class="w-100 card-img ">
              </div>
            </div>  
          </div>

          <div class="slide  ms-5">
            <div class ="shadow bg-body rounded card">
              <div class ="card-body">
                <img src="assets/img/amichigan/alma-college.png" class="w-100 card-img ">
              </div>
            </div>  
          </div>

          <div class="slide  ms-5">
            <div class ="shadow bg-body rounded card">
              <div class ="card-body">
                <img src="assets/img/amichigan/andrew.png" class="w-100 card-img ">
              </div>
            </div>  
          </div>

          <div class="slide  ms-5">
            <div class ="shadow bg-body rounded card">
              <div class ="card-body">
                <img src="assets/img/amichigan/aquinas.png" class="w-100 card-img ">
              </div>
            </div>  
          </div>

          <div class="slide  ms-5">
            <div class ="shadow bg-body rounded card">
              <div class ="card-body">
                <img src="assets/img/amichigan/calvin.png" class="w-100 card-img ">
              </div>
            </div>  
          </div>

          <div class="slide  ms-5">
            <div class ="shadow bg-body rounded card">
              <div class ="card-body">
                <img src="assets/img/amichigan/detroit.png" class="w-100 card-img ">
              </div>
            </div>  
          </div>

          <div class="slide  ms-5">
            <div class ="shadow bg-body rounded card">
              <div class ="card-body">
                <img src="assets/img/amichigan/hillsdale.png" class="w-100 card-img ">
              </div>
            </div>  
          </div>

          <div class="slide  ms-5">
            <div class ="shadow bg-body rounded card">
              <div class ="card-body">
                <img src="assets/img/amichigan/hope.png" class="w-100 card-img ">
              </div>
            </div>  
          </div>

          <div class="slide  ms-5">
            <div class ="shadow bg-body rounded card">
              <div class ="card-body">
                <img src="assets/img/amichigan/kalamazoo.png" class="w-100 card-img ">
              </div>
            </div>  
          </div>

          <div class="slide  ms-5">
            <div class ="shadow bg-body rounded card">
              <div class ="card-body">
                <img src="assets/img/amichigan/madonna-university.png" class="w-100 card-img ">
              </div>
            </div>  
          </div>

          <div class="slide  ms-5">
            <div class ="shadow bg-body rounded card">
              <div class ="card-body">
                <img src="assets/img/amichigan/olivet.png" class="w-100 card-img ">
              </div>
            </div>  
          </div>

          <div class="slide  ms-5">
            <div class ="shadow bg-body rounded card">
              <div class ="card-body">
                <img src="assets/img/amichigan/sienna-height.png" class="w-100 card-img">
              </div>
            </div>  
          </div>

          <div class="slide  ms-5">
            <div class ="shadow bg-body rounded card">
              <div class ="card-body">
                <img src="assets/img/amichigan/spring.png" class="w-100 card-img">
              </div>
            </div>  
          </div>
          
        </div>
      </div>
   
    </section>
    <section>
      <div class="container-fluid secondary-bg p-5 welcome-opus-container-fluid">
        <div class="container my-5 welcome-opus-container">
          <div class="d-flex flex-column justify-content-center">
            <div class="row m-5">
              <div class="col-md-6 d-flex justify-content-center" style="background: url('assets/img/index/opusrecital.png') center center no-repeat; background-size: cover;"></div>

              <div class="col-md-6 d-flex align-items-stretch flex-column px-5">
                <h4 class="mb-4 fs-1 fw-bold">Welcome to Opus Academy!</h4>
                <p>At Opus Academy, we pride ourselves on the academic and personal success of our students. Our highly trained team of experts work towards empowering young minds to reach their potential while providing them with the knowledge and tools necessary to meet their goals.</p>
                <div class="d-flex justify-content-left mt-5">
                  <a href="#!" type="button" class="primary-btn w-100">Our Story</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="what-we-offer" class="what-we-offer">
      <div class="container text-center px-5">
        <h4 class="mb-4 fs-1 fw-bold">What We Offer</h4>
        <p>As Greater Vancouver's premier after-school enrichment provider, we offer a range of rewarding learning experiences and diverse coursework. Take a moment to learn more about our services below, as we look forward to helping your child on their path to success.</p>
      </div>

      <div class="container">
        <div class="col-xl-12 col-lg-12 d-flex">
          <div class="d-flex flex-column justify-content-center">
            <div class="row">
              <?php 
              foreach($homeCard as $v) {
                $card_title = $v["card_title"];
                $img = $v["img"];
                $content = $v["content"];
                $link = $v["link"];
                $card_status = $v["card_status"];

                if($img != "") {
                  $image = explode("../", $img);
                  $image_url = $image[1];
                } else {
                  $image_url = "";
                }

                if($card_status==0) {
                  ?>
                  <div class="col-xl-3 d-flex align-items-stretch mb-5">
                    <div class="icon-box mt-2 text-center">
                      <?= ($image_url == "" ? '<img src="admin/assets/img/card-thumbnail.jpg" alt="hero-banner">' : '<img src="'. $image_url .'" alt="hero-banner">') ?>
                      <h4><?= $card_title ?></h4>
                      <p><?= html_entity_decode($content) ?></p>
                      
                      <?= ($link == "" ? '' : '<div class="more-btn-container mt-4"><a href="'.$link.'" target="blank" class="more-btn text-decoration-none">Learn More</a></div>') ?>
                  
                    </div>
                  </div>
                <?php
                }
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="why-choose-opus" class="why-choose-opus secondary-bg">
      <div class="container why-choose-opus-container mt-5">
        <div class="d-flex flex-column justify-content-center">
          <div class="row m-5">
            <div class="col-md-6 col-sm-12 d-flex align-items-stretch flex-column px-5">
              <h4 class="mb-4 fs-1 fw-bold">Why Choose Opus?</h4>
              <p>As Greater Vancouver's premier after-school enrichment provider, we offer a range of rewarding learning experiences and diverse coursework. Take a moment to learn more about our services below, as we look forward to helping your child on their path to success.</p>

              <div class="d-flex justify-content-center mt-5 mb-5">
                <div class="d-flex justify-content-start me-2">
                  <a href="#!" type="button" class="light-btn">Testimonials</a>
                </div>
              
                <div class="d-flex justify-content-end ms-2">
                  <a href="#!" type="button" class="light-btn">Achievements</a>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-sm-12 video-box">
              <a href="https://youtu.be/WuTk3Z4Wp5k" class="glightbox play-btn mb-4"></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="team-and-expert" class="team-and-expert">
      <div class="container team-and-expert-container">
        <div class="d-flex flex-column justify-content-center">
          <div class="row m-5">
            <div class="col-md-6 d-flex justify-content-center" style="background: url('assets/img/home/IMG_2566.JPG') center center no-repeat; background-size: cover;"></div>

            <div class="col-md-6 d-flex align-items-stretch flex-column px-5">
              <h4 class="mb-4 fs-1 fw-bold">Team of Expert Educators</h4>
              <p>At Opus Academy, we pride ourselves on the academic and personal success of our students. Our highly trained team of experts work towards empowering young minds to reach their potential while providing them with the knowledge and tools necessary to meet their goals.</p>

              <div class="d-flex justify-content-left mt-5">
                <a href="#!" type="button" class="primary-btn w-100">Our Recent Competition Results</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="counter" class="counter primary-bg">
      <div class="container counter-container">
          <div class="row m-5">
            <div class="col-md-4">
              <p id="0101" class="number text-center m-0"></p>
              <p class="title text-center">Years Experience</p>
            </div>

            <div class="col-md-4">
              <p class="number text-center m-0"><span id="0102"></span>+</p>
              <p class="title text-center">Students</p>
            </div>

            <div class="col-md-4">
              <p class="number text-center m-0"><span id="0103"></span>+</p>
              <p class="title text-center">Awards, Certificates & Diplomas</p>
            </div>
          </div>
      </div>
    </section>
    <section id="portfolio" class="portfolio">
                    <div class="container">

                        <div class="row mt-5">

                            <div class="col col-sm-12 d-flex">
                                <img src="assets/img/index/p-8.jpg" class="mb-5" alt="" style="width: 100%;">
                            </div>

                            <div class="col col-sm-3">
                                <img src="assets/img/index/p-1.jpg" class="mb-5" alt="" style="width: 100%;">
                                <img src="assets/img/index/p-4.jpg" class="mb-5" alt="" style="width: 100%;">
                            </div>

                            <div class="col col-12 col-lg-3 col-md-6">
                                <img src="assets/img/index/p-6.jpg" class="mb-5" alt="" style="width: 100%;">
                                <img src="assets/img/index/p-2.jpg" class="mb-5" alt="" style="width: 100%;">
                            </div>

                            <div class="col col-12 col-lg-3 col-md-6">
                                <img src="assets/img/index/p-7.jpg" class="mb-5" alt="" style="width: 100%;">
                                <img src="assets/img/index/p-3.jpg" class="mb-5" alt="" style="width: 100%;">
                            </div>
                            
                            <div class="col col-12 col-lg-3 col-md-6">
                                <img src="assets/img/index/p-5.jpg" class="mb-5" alt="" style="width: 100%;">
                            </div>

                            <div class="col col-12 col-lg-3 col-md-6">
                      
                            </div>
                           

                        </div>
                        
                    </div>
                  
                </section>

    <section id="testimonials" class="testimonials">
      <div class="container position-relative">
        <div class="testimonials-slider swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-item">
                <h3>Vanessa</h3>
                <h4>Speech Arts Student, Grade 11</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  This course has not only helped me in my speech practical exams, but my school work as well. Reading through plays and talking about literary works has helped me understand references in school that are foreign to most people. It also gave me more to write about in essays because I can draw on examples from literature I have read. Often, the works that I study in RCM Speech Arts History and Literature courses I use in school as well. The course is good for academic purposes, and in everyday life: it helps me understand references and allusions. Although the course is a lot of work, it is definitely worth it. There is a lot to read and understand, but it is taught in such a way that you have a greater understanding of history by the end. All the literary works have historical and political significance. Also, you gain an understanding of how to read and analyze works of literature beyond the ones you read in class.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <h3>Andrew</h3>
                <h4>Grade 6 Student</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Taking the RCM Speech Arts Theory Level 1 course has allowed me to move ahead in school and strive in other courses. When the material from this course is taught in school, I can easily recall what was taught in the course and further expand my knowledge of this material. Also, I am sure that the History and Literature course will help in the same way when our school begins teaching the material. Many courses at Opus Academy have allowed me to be ahead of what is being taught at school
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <h3>Vicotria</h3>
                <h4>Parent</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  My daughter was successfully admitted to the Crofton House School last fall. My special thanks go to Opus Academy for the Interview Skills training course. This course is highly target-oriented, and covers a wide range of content, from how to make an eye contact and shake hands to how to answer the interviewer's questions with ease and calmness. It teaches children confidence, adaptability and flexibility. The teachers at Opus are kind, patient and very professional. They design their lesson plans based on a child’s needs. I would strongly recommend this course to children who want to get into a prestigious school.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <h3>Stacy</h3>
                <h4>Speech Arts Student</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Overall I have learned so much from the Grade 10 speech arts course. I gained a lot of confidence through this course. All the background research and extensive rehearsal we did in class really gave me confidence performing. This course has also taught me the importance of time management and how to be efficient with my work, since I had to spread out my memorization over a span of many weeks. All the skills I have learned from the course may will serve me well in the future.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <h3>Brian</h3>
                <h4>Grade 10 Student</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  The way my teacher taught the course made studying easier because I remembered things from the beginning of the course. We managed time wisely and finished the course on time. My teacher was very concise and to-the-point, as well as knowledgeable – I learned something new each time. The teacher always made sure I understood the topic before moving on, and gave good notes which were easy to refer to later. The course helps me in English at school, improving my ability to analyze and understand plays and poems. I have a better sense of English literature and language that will in turn help me in public speaking.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <h3>Albert</h3>
                <h4>Communication Skills student</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Speech is an intricate act. There are hidden obstacles that can make even a very experienced speaker stumble. My Opus speech teacher has been very helpful in pointing out aspects of speech and persuasion that I would not be able to catch on my own. He taught me specific methods and skills to polish my speeches that enhanced the delivery of message and content. Indeed, speech itself is a natural act, but good speeches are works of art. Through my work with my Opus teacher, I found the process of speech writing and delivery both gratifying and artistically fulfilling. Passion, energy and skill are the three aspects of speech I learned to control and excel in during my 3 years at Opus.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>

    <script src="services/index.js"></script>

  </main>

  <?php require_once "assets/common/footer.php"; ?>

  <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <script src="assets/js/main.js"></script>
</html>