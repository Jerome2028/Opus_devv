<?php
$title = "History and Our Team - Opus Academy";
require_once "assets/common/header.php";
require_once "admin/model/model.history_and_team.php";

$historyAndTeams = new HistoryAndTeams();

$historyContent = $historyAndTeams->getHistoryContent();
$teamList = $historyAndTeams->getTeamList();
?>

<main id="main">

    <section id="breadcrumbs" class="breadcrumbs py-3 px-5 mt-1">
        <div class="container">
            <ol>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li>History of Success</li>
            </ol>
            <h2>The Opus Team - History of Success</h2>
        </div>
    </section>

    <?php 
    foreach($historyContent as $v) {
        $title = $v["title"];
        $content = $v["content"];
        $status = $v["status"];

        if($status == 0) {
            ?>
            <section class="pt-3">
                <div class="container">

                    <div class="section-title">
                        <h3><?= $title ?></h3>
                    </div>
                    
                    <?= $content ?>

                </div>
            </section>  

            <?php
        }

    }
    ?>

    <section class="team secondary-bg">
        <div class="container">
            <div class="row">

                <?php
                    foreach($teamList as $v) {
                        $img = $v["img"];
                        $name = $v["name"];
                        $position = $v["position"];
                        $introduction = $v["introduction"];
                        $status = $v["status"];

                        if($img != "") {
                            $image = explode("..", $img);
                            $image_url = '<img src="admin'.$image[1].'" class="img-fluid" alt="team-img" width="600">';
                        } else {
                            $image_url = '<img src="admin/assets/img/person-thumbnail.jpg" class="img-fluid" alt="team-img">';
                        }

                        if($status == 0) {

                            if($position == "Founder") {
                                ?>
                                <div class="col-lg-4 col-md-12 d-flex align-items-stretch founder">
                                    <div class="member">
                                        <div class="member-img">
                                            <?= $image_url ?>
                                        </div>
    
                                        <div class="member-info">
                                            <h4><?= $name ?></h4>
                                            <span><?= $position ?></span>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-lg-8 col-md-12">
                                    <?= html_entity_decode($introduction) ?>
                                </div>

                                <div class="mt-5"></div>

                                <?php
                            } else if($position == "Co-Founder and Music Director") {
                                ?>
                                <div class="col-lg-4 col-md-12 d-flex align-items-stretch co-founder">
                                    <div class="member">
                                        <div class="member-img">
                                            <?= $image_url ?>
                                        </div>
    
                                        <div class="member-info">
                                            <h4><?= $name ?></h4>
                                            <span><?= $position ?></span>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-lg-8 col-md-12">
                                    <?= html_entity_decode($introduction) ?>
                                </div>
                                <?php
                            }

                        }
                    }
                ?>

            </div>
        </div>
    </section>

    <section class="team">
        <div class="container">
            <div class="col-xl-12 col-lg-12 d-flex">
                <div class="icon-boxes d-flex flex-column justify-content-center">
                    <div class="row">

                        <?php 
                        foreach($teamList as $v) {
                            $img = $v["img"];
                            $name = $v["name"];
                            $position = $v["position"];
                            $introduction = $v["introduction"];
                            $status = $v["status"];

                            if($img != "") {
                                $image = explode("..", $img);
                                $image_url = '<img src="admin'.$image[1].'" class="img-fluid" alt="team-img" width="600">';
                            } else {
                                $image_url = '<img src="admin/assets/img/person-thumbnail.jpg" class="img-fluid" alt="team-img">';
                            }

                            if($status == 0) {
                                if($position == "Teachers") {
                                    ?>

                                    <div class="col-xl-6 d-flex align-items-stretch">
                                        <div class="icon-box mt-4 mt-xl-0">

                                            <h3 class="title"><?= $name ?></h3>
                                            <?= html_entity_decode($introduction) ?>

                                        </div>
                                    </div>

                                    <?php
                                } else if($position == "University Counsellors") {
                                    ?>

                                    <div class="col-xl-6 d-flex align-items-stretch">
                                        <div class="icon-box mt-4 mt-xl-0">

                                            <h3 class="title"><?= $name ?></h3>
                                            <?= html_entity_decode($introduction) ?>

                                        </div>
                                    </div>

                                    <?php
                                }
                            }
                        }
                        ?>

                    </div>
               </div>
            </div>
        </div>
    </section>
</main>

<?php
require_once "assets/common/footer.php"; 
?>

<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<script src="assets/js/main.js"></script>

</html>