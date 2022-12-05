<?php
$title = "Opus - Communication Arts";
require_once "assets/common/header.php";
require_once "assets/common/session.php";
require_once "controller/controller.db.php";
require_once "model/model.communication_arts.php";

$communicationArts = new CommunicationArts();

$communicationArtsContent = $communicationArts->getContent();
$ourCourses = $communicationArts->getCourses();
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
                    <h1 class="h3 mb-4 text-gray-800">Communication Arts</h1>

                    <?php
                    if(isset($_GET["update"])) {
                        $id = $_GET["update"];
                        $communicationArtsWhere = $communicationArts->getContentWhere($id);
                        ?>

                        <div class="card shadow mb-4">

                            <div class="card-header py-3">
                                <div class="d-sm-flex align-items-center justify-content-between">
                                    
                                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-sm fa-edit"></i> <?= $communicationArtsWhere["title"] ?>
                                        <span class="badge rounded-pill bg-secondary" style="color: white;"></span>
                                    </h6>

                                    <div class="d-sm-flex align-items-center justify-content-between">

                                        <a href="communication_arts.php" class="btn btn-sm btn-secondary btn-icon-split">
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
                                    <input type="hidden" name="id" id="id" value="<?= $communicationArtsWhere["id"] ?>" class="form-control" readonly>
                                </div>

                                <div class="row mb-4">
                                    <label for="info_title" class="col-sm-2 col-form-label text-right"><span class="required">*</span> Title:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="title" id="title" value="<?= $communicationArtsWhere["title"] ?>" placeholder="Type Here...">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label class="col-sm-2 col-form-label text-right"><span class="required">*</span> Content:</label>
                                    <div class="col-sm-9">
                                        <textarea name="page_content" id="page_content" class="form-control" required><?= $communicationArtsWhere['content'] ?></textarea>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label class="col-sm-2 col-form-label text-right">Status:</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="status" name="status">
                                            <option <?= ($communicationArtsWhere['status'] == 0 ? "selected" : "") ?> value="0">Enabled</option>
                                            <option  <?= ($communicationArtsWhere['status'] == 1 ? "selected" : "") ?> value="1">Disabled</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <?php
                    } else {
                        ?>

                        <div class="card shadow mb-4">

                            <div class="card-header py-3">
                                <div class="d-sm-flex align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Our Courses</span></h6>

                                    <button type="button" id="addPosition" class="btn btn-sm btn-primary btn-icon-split">
                                        <span class="icon"><i class="fas fa-plus-square"></i> </span>
                                        <span class="text">Add New</span>
                                    </button>
                                </div>
                            </div>

                            <div class="row">

                                <?php
                                if(!empty($ourCourses)) {
                                    foreach($ourCourses as $v) {
                                        $id = $v["id"];
                                        $course = $v["course"];
                                        $sort_by = $v["sort"];
                                        $status = $v["status"];
                                        $date_update = $v["date_update"];
                                        ?>

                                        <div class="col-lg-4 col-sm-12">

                                            <div class="card-body">
                                                <div class="container card shadow py-3">
                                                    
                                                    <div class="d-sm-flex align-items-center justify-content-between">
                                                        <h5><?= $course ?></h5>
                                                        <p><span class="badge">Last update: <?= $date_update ?></span></p>
                                                    </div>

                                                    <?= ($status == 0 ? '<span class="text-primary"> Enable</span>' : ' <span class="text-warning">Disabled</span>') ?>

                                                    <div class="d-flex justify-content-end">
                                                        <a href="#!" class="text-danger text-decoration-none" onclick="deleteLink('<?= $id ?>')">Delete &nbsp;</a> <br>
                                                        <a href="#!" class="text-info text-decoration-none" onclick="updateLink('<?= $id ?>', '<?= $course ?>', '<?= $sort_by ?>', '<?= $status ?>')">Update &rarr; </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                        <?php
                                    }
                                }
                                ?>

                            </div>
                        </div>

                        <?php
                        if(!empty($communicationArtsContent)) {
                            foreach ($communicationArtsContent as $v) {
                                $id = $v["id"];
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
        
                                            <a href="communication_arts.php?update=<?= $id ?>" class="btn btn-sm btn-info btn-icon-split">
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

            <div class="modal fade" id="staticBackdrop" data-backdrop="static" aria-labelledby="staticBackdropLabel">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitle"></h5>
                        </div>

                        <div class="modal-body">
                            <div class="d-none">
                                <input type="hidden" id="course_id" name="course_id" class="form-control" readonly>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Position: <span class="required">*</span></label>
                                <input type="text" class="form-control" name="course" id="course" placeholder="Type Here...">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Sort By:</label>
                                <input type="number" class="form-control" name="sort_by" id="sort_by" value="0">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Status: </label>
                                <select class="form-control" id="status" name="status">
                                    <option value="0">Enabled</option>
                                    <option value="1">Disabled</option>
                                </select>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="close" class="btn btn-sm btn-secondary btn-icon-split closeBtn" data-dismiss="modal">
                                <span class="icon"><i class="fas fa-window-close"></i></span>
                                <span class="text">Close</span>
                            </button>

                            <button type="submit" class="btn btn-sm btn-primary btn-icon-split submit-btn">
                                <span class="icon"><i class="fas fa-save"></i></span>
                                <span class="text">Save</span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>

            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>

        <div>
        
    </div>

    <div id="preloader" style="display: none;"></div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php require_once "assets/common/logout_modal.php"; ?>

    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/alert.js"></script>
    <script src="services/communication_arts.js"></script>

</body>

</html>