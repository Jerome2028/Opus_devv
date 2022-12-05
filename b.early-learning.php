<?php
$title = "Early Learning Ages - Opus Academy";
require_once "assets/common/header.php"; 
require_once "admin/model/model.early_learning.php";
require_once "admin/model/model.card.php";

$earlyLearning = new EarlyLearning();
$card = new Cards();

$earlyLearning = $earlyLearning->getEarlyLearningContent();

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
            <li>Early Learning</li>
        </ol>
        <h2>Early Learning Ages 3-6</h2>
        </div>
    </section>

    <section class="early-learning pt-3">

        <div class="container">

            <?php 
            foreach($earlyLearning as $v) {
                $title = $v["title"];
                $content = $v["content"];
                $status = $v["status"];

                if($status == 0) {
                    ?>

                    <div class="section-title">
                        <h4><?= $title ?></h4>
                    </div>

                    <?= $content ?>

                    <?php
                }
            }
            ?>

            <div class="icon-boxes d-flex flex-column">

                <div class="row">

                    <?php 
                    foreach($cardContent as $v) {
                        $section = $v["section"];
                        $card_title = $v["card_title"];
                        $content = $v["content"];
                        $page = $v["page"];
                        $status = $v["card_status"];
                        
                        if($status == 0) {
                            ?>
                            <div class="col-xl-6 d-flex align-items-stretch">
                                
                                <div class="icon-box mt-4 mt-xl-0">
                                    <h5><?= $title ?></h5>

                                    <?= html_entity_decode($content) ?>
                                </div>

                            </div>
                            <?php
                        }
                    }
                    ?>

                </div> 
            </div>

        </div>

    </section>

</main>

<?php
require_once "assets/common/footer.php"; 
?>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

<script src="assets/js/main.js"></script>

</html>