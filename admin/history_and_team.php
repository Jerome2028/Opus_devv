<?php 
$title = "Opus - History and Team";
require_once "assets/common/header.php";
require_once "assets/common/session.php";
require_once "controller/controller.db.php";
require_once "model/model.history_and_team.php";

$historyAndTeams = new HistoryAndTeams();
$historyContent = $historyAndTeams->getHistoryContent();
$teamList = $historyAndTeams->getTeamList();
?>

<link rel="stylesheet" type="text/css" href="lib/summernote/summernote-bs4.css">
<script type="text/javascript" charset="utf8" src="lib/summernote/summernote-bs4.min.js"></script>
<script src="lib/summernote/summernote-image-attributes/summernote-image-attributes.js"></script>
<link rel="stylesheet" type="text/css" href="lib/datatable/datatables.min.css">
<script type="text/javascript" charset="utf8" src="lib/datatable/datatables.min.js"></script>

<body id="page-top">

    <div id="wrapper">

        <?php require_once "assets/common/side_bar.php"; ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">
                <?php require_once "assets/common/top_bar.php"; ?>

                <div class="container-fluid">
                    <h1 class="h3 mb-4 text-gray-800">History and Team Page</h1>

                    <?php
                    if (isset($_GET["update"])) {
                        $id = $_GET["update"];
                        $historyContentWhere = $historyAndTeams->getHistoryContentWhere($id);
                        ?>

                        <div class="card shadow mb-4">

                            <div class="card-header py-3">
                                <div class="d-sm-flex align-items-center justify-content-between">
                                    
                                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-sm fa-edit"></i> <?= $historyContentWhere["section"] ?>
                                        <span class="badge rounded-pill bg-secondary" style="color: white;"></span>
                                    </h6>

                                    <div class="d-sm-flex align-items-center justify-content-between">

                                        <a href="history_and_team.php" class="btn btn-sm btn-secondary btn-icon-split">
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
                                    <input type="hidden" name="history_id" id="history_id" value="<?= $historyContentWhere["id"] ?>" class="form-control" readonly>
                                </div>

                                <div class="row mb-4">
                                    <label for="info_title" class="col-sm-2 col-form-label text-right"><span class="required">*</span> Title:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="title" id="title" value="<?= $historyContentWhere["title"] ?>" placeholder="Type Here...">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label class="col-sm-2 col-form-label text-right"><span class="required">*</span> Content:</label>
                                    <div class="col-sm-9">
                                        <textarea name="page_content" id="page_content" class="form-control" required><?= $historyContentWhere['content'] ?></textarea>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label class="col-sm-2 col-form-label text-right">Status:</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="status" name="status">
                                            <option <?= ($historyContentWhere['status'] == 0 ? "selected" : "") ?> value="0">Enabled</option>
                                            <option  <?= ($historyContentWhere['status'] == 1 ? "selected" : "") ?> value="1">Disabled</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php
                    } else {
                        if (!empty($historyContent)) {

                            foreach ($historyContent as $k => $v) {
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
            
                                            <a href="history_and_team.php?update=<?= $id ?>" class="btn btn-sm btn-info btn-icon-split">
                                                <span class="icon"><i class="fas fa-pen"></i> </span>
                                                <span class="text">Update</span>
                                            </a>
                                        </div>
            
                                    </div>
            
                                    <div class="card-body">
            
                                        <div class="container-fluid">
                                            <?= $content ?>
                                        </div>
                                
                                    </div>
                                </div>
        
                                <?php
                            }
                        }

                        ?>

                        <div class="card shadow mb-4">

                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-sm fa-edit"></i> Opus Team</h6>
                            </div>

                                <div class="card-body">

                                    <div class="container-fluid">
                                        <div class="table-responsive">

                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Status</th>
                                                        <th>Date Added</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>

                            </div>

                        </div>

                        <?php
                    }
                    ?>

                </div>
            </div>

            
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" aria-labelledby="staticBackdropLabel">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitle"></h5>
                        </div>

                        <form name="form" method="POST" action="controller/controller.history_and_team.php?mode=updateTeamInfo" enctype="multipart/form-data" id="modalForm">
                            <div class="modal-body mt-3">

                                <div class="d-none">
                                    <input type="hidden" id="id" name="id" readonly>
                                </div>

                                <div class="mb-5">
                                    <div class="row">

                                        <div class="col-xl-4 col-sm-12">

                                            <center>
                                                <div id="thumbnail-container" class="img-thumbnail-container">
                                                    <img src="" alt="" id="team-image">
                                                </div>
                                            </center>
                                           
                                        </div>

                                        <div class="col-xl-8 col-sm-12">

                                            <div class="mb-3">
                                                <label class="form-label">Fullname: <span class="required">*</span></label>
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Type Here...">
                                            </div>

                                            <label class="form-label">Upload Image: </label> <small style="color: red;">(Optional)</small>
                                            
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image" id="image">
                                                <label class="custom-file-label">Choose file</label>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label text-right"><span class="required">*</span> Position: </label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="position" name="position" placeholder="Type Here...">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label text-right"><span class="required">*</span> Introduction: </label>

                                    <div class="col-sm-10">
                                        <textarea name="introduction" id="introduction"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label text-right">Status:</label>

                                    <div class="col-sm-10">
                                        <select class="form-control" id="status" name="status">
                                            <option value="0">Enabled</option>
                                            <option value="1">Disabled</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="alert alert-warning mt-4" role="alert"><b>Note:</b> Please avoid using single quote symbols (') or the system will automatically remove.</div>
                                
                            </div>

                            <div class="modal-footer">
                                <button type="close" class="btn btn-sm btn-secondary btn-icon-split closeBtn" data-dismiss="modal">
                                    <span class="icon"><i class="fas fa-window-close"></i></span>
                                    <span class="text">Close</span>
                                </button>

                                <button type="button" class="btn btn-sm btn-danger btn-icon-split resetBtn">
                                    <span class="icon"><i class="fas fa-trash"></i></span>
                                    <span class="text">Clear Form</span>
                                </button>

                                <button type="submit" class="btn btn-sm btn-primary btn-icon-split submit">
                                    <span class="icon"><i class="fas fa-save"></i></span>
                                    <span class="text">Save</span>
                                </button>
                            </div>
                        </form>
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
    <script src="services/history_and_team.js"></script>

</body>