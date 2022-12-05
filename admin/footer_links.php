<?php
$title = "Opus - Footer Links";
require_once "assets/common/header.php";
require_once "assets/common/session.php";
?>

<link rel="stylesheet" type="text/css" href="lib/datatable/datatables.min.css">
<script type="text/javascript" charset="utf8" src="lib/datatable/datatables.min.js"></script>
<script src="lib/summernote/summernote-image-attributes/summernote-image-attributes.js"></script>

<body id="page-top">

    <div id="wrapper">
        <?php require_once "assets/common/side_bar.php"; ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <?php require_once "assets/common/top_bar.php"; ?>

                <div class="container-fluid">

                    <h1 class="h3 mb-4 text-gray-800">Footer Links</h1>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Useful Links</h6>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="usefulLinksTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>URL</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Our Services</h6>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="ourServicesTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>URL</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade updateModal" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitle"></h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>

                                <div class="modal-body">

                                    <div class="d-none">
                                        <input type="hidden" id="link_id" name="link_id" class="form-control" readonly>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-right"> <span class="required">*</span> Title:</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-right"><span class="required">*</span> URL: </label>
                                        <div class="col-sm-10">
                                        <input type="url" class="form-control" id="url" name="url" required placeholder="Type Here...">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-right">Sort by:</label>
                                        <div class="col-sm-10">
                                        <input type="number" class="form-control" id="sort" name="sort" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-right"><span class="required">*</span> Label:</label>
                                        <div class="col-sm-10">
                                        <select class="form-control" id="label" name="label">
                                            <option value="Useful Links">Useful Links</option>
                                            <option value="Our Services">Our Services</option>
                                        </select>
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

                                </div>

                                <div class="modal-footer">
                                    <button type="close" class="btn btn-sm btn-secondary btn-icon-split" data-dismiss="modal">
                                        <span class="icon"><i class="fas fa-window-close"></i></span>
                                        <span class="text">Close</span>
                                    </button>

                                    <button type="submit" class="btn btn-sm btn-primary btn-icon-split submit">
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
                </div>

            </div>

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
    <script src="services/footer_links.js"></script>

</body>

</html>