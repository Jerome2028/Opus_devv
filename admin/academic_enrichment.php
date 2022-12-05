<?php
$title = "Opus - Standardized Test Preparation";
require_once "assets/common/header.php";
require_once "assets/common/session.php";
require_once "controller/controller.db.php";
require_once "model/model.academic_enrichment.php";

$academicEnrichment = new AcademicEnrichment();

$academicEnrichmentContent = $academicEnrichment->getContent();
?>

<link rel="stylesheet" type="text/css" href="lib/summernote/summernote-bs4.css">
<script type="text/javascript" charset="utf8" src="lib/summernote/summernote-bs4.min.js"></script>
<script src="lib/summernote/summernote-image-attributes/summernote-image-attributes.js"></script>

<body id="page-top">

    <div id="wrapper">

        <?php require_once "assets/common/side_bar.php"; ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">
                <?php require_once "assets/common/top_bar.php"; ?>

                <div class="container-fluid">
                    <h1 class="h3 mb-4 text-gray-800">Academic Enrichment II</h1>

                    <?php
                    if(isset($_GET["update"])) {

                        $academic_id = $_GET["update"];
                        $academicEnrichmentContentWhere = $academicEnrichment->getContentWhere($academic_id);
                        ?>

                        <div class="card shadow mb-4">

                            <div class="card-header py-3">
                                <div class="d-sm-flex align-items-center justify-content-between">
                                    
                                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-sm fa-edit"></i> <?= $academicEnrichmentContentWhere["section"] ?>
                                        <span class="badge rounded-pill bg-secondary" style="color: white;"></span>
                                    </h6>

                                    <div class="d-sm-flex align-items-center justify-content-between">

                                        <a href="academic_enrichment.php" class="btn btn-sm btn-secondary btn-icon-split">
                                            <span class="icon"><i class="fas fa-arrow-left"></i> </span>
                                            <span class="text">Back</span>
                                        </a>

                                        <button id="btn-save" class="btn btn-sm btn-primary btn-icon-split m-1">
                                            <span class="icon"><i class="fas fa-save"></i></span>
                                            <span class="text">Save</span>
                                        </button>

                                    </div>
                                    
                                </div>
                            </div>

                            <div class="card-body">

                                <div class="d-none">
                                    <input type="hidden" name="id" id="id" value="<?= $academicEnrichmentContentWhere["id"] ?>" class="form-control" readonly>
                                </div>

                                <div class="row mb-4">
                                    <label for="info_title" class="col-sm-2 col-form-label text-right"><span class="required">*</span> Title:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="title" id="title" value="<?= $academicEnrichmentContentWhere["title"] ?>" placeholder="Type Here...">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label class="col-sm-2 col-form-label text-right"><span class="required">*</span> Content:</label>
                                    <div class="col-sm-9">
                                        <textarea name="page_content" id="page_content" class="form-control" required><?= $academicEnrichmentContentWhere['content'] ?></textarea>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label class="col-sm-2 col-form-label text-right">Status:</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="status" name="status">
                                            <option <?= ($academicEnrichmentContentWhere['status'] == 0 ? "selected" : "") ?> value="0">Enabled</option>
                                            <option  <?= ($academicEnrichmentContentWhere['status'] == 1 ? "selected" : "") ?> value="1">Disabled</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <?php
                    } else {

                        if(!empty($academicEnrichmentContent)) {
                            foreach ($academicEnrichmentContent as $v) {
                                $id = $v["id"];
                                $section = $v["section"];
                                $title = $v["title"];
                                $content = $v["content"];
                                $status = $v["status"];
                                $date_update = $v["date_update"];
                                ?>
    
                                <div class="card shadow mb-4">
                                    
                                    <div class="card-header py-3">
                                        <div class="d-sm-flex align-items-center justify-content-between">
    
                                            <h6 class="m-0 font-weight-bold text-primary">
                                                <?= $title ?> <span class="badge bg-secondary" style="color: white;">Last update: <?= $date_update ?></span>
                                                <?= ($status == 0 ? "" : '<span class="badge bg-warning" style="color: black;">Disabled</span>') ?>
                                            </h6>
    
                                            <a href="academic_enrichment.php?update=<?= $id ?>" class="btn btn-sm btn-info btn-icon-split">
                                                <span class="icon"><i class="fas fa-pen"></i></span>
                                                <span class="text">Update</span>
                                            </a>
    
                                        </div>
                                    </div>
    
                                    <div class="card-body">
    
                                        <div class="container-fluid">
                                            <div class="skeleton content_load"><?= $content ?></div>
                                        </div>
    
                                    </div>
    
                                </div>
    
                                <?php
                            }
                        }

                    }

                    ?>
    
                </div>

            </div>


            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>

        </div>

    </div>

    <div id="preloader" style="display: none;"></div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php require_once "assets/common/logout_modal.php"; ?>

    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/alert.js"></script>
    <script src="services/academic_enrichment.js"></script>

</body>

</html>