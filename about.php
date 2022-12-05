<?php
$title = "About Us - Opus Academy";
require_once "assets/common/header.php"; 
require_once "admin/model/model.about_us.php";

$about = new AboutUs();
$aboutContent = $about->getContent();
?>

<main id="main">

  <section id="breadcrumbs" class="breadcrumbs py-3 px-5 mt-1 mt-2">
    <div class="container">
      <ol>
        <li><a href="index.php">Home</a></li>
        <li>About Us</li>
      </ol>
      <h2>Opus About Us</h2>
    </div>
  </section>

  <?php 
  foreach($aboutContent as $v) {
    $section = $v["section"];
    $title = $v["title"];
    $content = $v["content"];
    $status = $v["status"];

    if($status == 0) {
      
      if($section == "Section I") {
        ?>

        <section class="pt-3">
          <div class="container">

            <h3><?= $title ?></h3>
            <?= $content ?>

          </div>
        </section>

        <?php
      }

      else if ($section == "Section II") {
        ?>

        <section class="pt-3">
          <div class="container">

            <h3><?= $title ?></h3>
            <?= $content ?>

          </div>
        </section>

        <?php
      }

      else if ($section == "Section III") {
        ?>

        <section class="pt-3">
          <div class="container">
   
            <h3><?= $title ?></h3>
            <?= $content ?>

          </div>
        </section>

        <?php        
      }

      else if ($section == "Section IV") {
        ?>

        <section class="pt-3">
          <div class="container">
            <div class="row">

              <div class="col-xl-12 col-lg-12 icon-boxes justify-content-center px-lg-5">

                <h3><?= $title ?></h3>
                <?= $content ?>

              </div>
              
            </div>
          </div>
        </section>
        
        <?php
      }

    }
  }
  ?>

</main>

<?php require_once "assets/common/footer.php";  ?>

<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<script src="assets/js/main.js"></script>
</html>