<?php 
$title = "Careers - Opus Academy";
require_once "assets/common/header.php"; 
require_once "admin/model/model.careers.php";

$careers = new Careers();
$careersContent = $careers->getContent();
$hiringPostion = $careers->hiringPostion();
?>

<main id="main">
    <section id="breadcrumbs" class="breadcrumbs breadcrumbs py-3 px-5 mt-1">
        <div class="container">
            <ol>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li>Careers</li>
            </ol>
            <h2>Opus Academy Careers</h2>
        </div>
    </section>


    <section class="careers pt-3">
        <div class="container">
            
            <?php
            foreach($careersContent as $v) {
                $title = $v["title"];
                $content = $v["content"];
                $status = $v["status"];

                if($status == 0) {
                    ?>
                    
                    <div class="section-title">
                        <h3><?= $title ?></h3>
                    </div>
                    
                    <?= $content ?>

                    <?php
                }
            }

            ?>

            <div class="row">
                <?php
                foreach($hiringPostion as $v) {
                    $position = $v["position"];
                    $status = $v["status"];

                    if($status == 0) {
                        ?>

                        <div class="col-xl-4 col-lg-4 mt-4">
                            <div class="info-box">
                            <i class='bx bxs-user'></i>
                                <h5><?= $position ?></h5>
                            </div>
                        </div>
                
                        <?php
                    }
                }
                ?>
            </div>

            <div class="d-flex align-items-center mt-3">
                <i class="bx bxs-spreadsheet get-started-icon mt-3"></i>
                <a href="https://www.jotform.me/82799226078471/" class="btn-get-started scrollto mt-3">Online Application Form</a>
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