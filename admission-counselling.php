<?php 
$title = "Opus Addmission Counselling - Opus Academy";
require_once "assets/common/header.php"; 
require_once "admin/model/model.admission_counselling.php";
require_once "admin/model/model.card.php";

$admissionCounselling = new AdmissionCounselling();
$card = new Cards();
$admissionCounselling = $admissionCounselling->getContent();

$page_url =  $_SERVER["REQUEST_URI"];
$pages = explode("/", $page_url);
$page = $pages[2];

$cardContent = $card->getContentWhere($page);
?>

    <main id="main">

        <section id="breadcrumbs" class="breadcrumbs py-3 px-5 mt-1">
            <div class="container">
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>Addmission Counselling</li>
                </ol>
                <h2>Opus Admissions Counselling</h2>
            </div>
        </section>

        <section id="admission-page-hero" class="d-flex flex-column justify-content-center align-items-center">
        </section>

        <section id="addmission-counselling" class="addmission-counselling">
            
            <div class="container">
                        
                <?php 
                    foreach ($admissionCounselling as $v) {

                        $section = $v["section"];
                        $title = $v["title"];
                        $content = $v["content"];
                        $status = $v["status"];
                  
                        if($status == 0) {
                            if($section == "Section I") {
                            ?>

                            <div class="row">
                                <div class="col-xl-12 col-lg-12">

                                    <div class="content">

                                        <h3><?= $title ?></h3>
                                        <?= $content ?>

                                    </div>

                                </div>
                            </div>

                            <?php
                            }
                        }

                    }
                ?>

                <div class="mt-5"></div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12 d-flex">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">

                                <?php
                                    foreach ($cardContent as $v) {
                                        $section = $v["section"];
                                        $card_title = $v["card_title"];
                                        $img = $v["img"];
                                        $content = $v["content"];
                                        $link = $v["link"];
                                        $page = $v["page"];
                                        $status = $v["card_status"];

                                        if($img != "") {
                                            $image = explode("../", $img);
                                            $image_url = $image[1];
                                        } else {
                                            $image_url = "";
                                        }

                                        if($status == 0) {
                                        ?>
                                        <div class="col-lg-4 d-flex align-items-stretch">
                                            <div class="icon-box mt-4 mt-xl-0">
                                                <?= ($image_url == "" ? '<img src="admin/assets/img/card-thumbnail.jpg" alt="hero-banner">' : '<img src="'. $image_url .'" alt="banner-img">') ?>
                                                <h4><?= $card_title ?></h4>
                                                <p><?= htmlspecialchars_decode($content) ?></p>

                                                <?= ($link != "" ? '<div class="text-center"><a href="'.$link.'" target="blank" class="more-btn">Learn More</a></div>' : '') ?>
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
            </div>

        </section>

        <?php 
        foreach ($admissionCounselling as $v) {

            $section = $v["section"];
            $title = $v["title"];
            $content = $v["content"];
            $status = $v["status"];

            if($status == 0) {

                if($section == "Section II") {
                    ?>

                    <div class="container">
                        <hr></hr>
                    </div>

                    <section class="private-school-counselling">
                        <div class="container">

                            <div class="section-title">
                                <h4><?= $title ?></h4>
                            </div>

                            <?= $content ?>

                        </div>
                    </section>

                    <?php
                }

                else if ($section == "Section III") {
                    ?>

                    <div class="container">
                        <hr></hr>
                    </div>

                    <section class="university-school-counselling">
                        <div class="container">

                            <div class="section-title">
                                <h4><?= $title ?></h4>
                            </div>

                            <?= $content ?>

                        </div>
                    </section>

                    <?php
                }

                else if ($section == "Section IV") {
                    ?>

                    <div class="container">
                        <hr></hr>
                    </div>

                    <section id="university-list" class="university-list">
                        <div class="container">
                            <div class="row">

                                <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5 bg-color">

                                    <div class="section-title">
                                        <h4><?= $title ?></h4>
                                    </div>

                                    <?= $content ?>

                                </div>

                                <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">

                            </div>
                        </div>
                    </section>

                    <?php
                }

                else if ($section == "Section V") {
                    ?>

                    <div class="container">
                        <hr></hr>
                    </div>

                    <section class="university-school-counselling">
                        <div class="container">

                            <div class="section-title">
                                <h4><?= $title ?></h4>
                            </div>

                            <?= $content ?>

                        </div>
                    </section>

                    <?php
                }
            }

        }

        ?>

    </main>

<?php require_once "assets/common/footer.php"; ?>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

<script src="assets/js/main.js"></script>
</html>