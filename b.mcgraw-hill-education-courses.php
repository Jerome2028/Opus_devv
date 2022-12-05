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

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>Program</li>
                    <li>McGraw Hill Education Courses</li>
                </ol>
                <h2>McGraw Hill Education Courses Programs Stimulating & Comprehensive Curricular</h2>
            </div>
        </section>

        <section class="academic-enrichment pt-3">

            <div class="container">
                <?php 
                foreach ($mcGrawHillEducationContent as $v) {

                    $section = $v["section"];
                    $title = $v["title"];
                    $content = $v["content"];
                    $status = $v["status"];

                    if($status == 0) {

                        if($section == "Section I") {
                            ?>

                            <div class="section-title">
                                <h4><?= $title ?></h4>
                            </div>

                            <?= $content ?>

                            <?php
                        }

                    }
                }
                ?>

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

                                    if($status == 0) {
                                    ?>
                                    <div class="col-xl-4 d-flex col-sm-12">
                                        <div class="icon-box mt-4">
                                            <h5><?= $card_title ?></h5>

                                            <p><?= htmlspecialchars_decode($content) ?></p>
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


        <?php 
        foreach ($mcGrawHillEducationContent as $v) {

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

                    <section class="mcGraw-hill-education">
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

                    <section class="redbird-mathematics">
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

                    <section class="redbird-language">
                        <div class="container">

                            <div class="section-title">
                                <h4><?= $title ?></h4>
                            </div>

                            <?= $content ?>

                        </div>
                    </section>

                    <?php
                }

                else if ($section == "Section V") {
                    ?>

                    <div class="container">
                        <hr></hr>
                    </div>

                    <section class="assesment-and-learning">
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