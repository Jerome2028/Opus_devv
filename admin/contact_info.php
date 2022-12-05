<?php
$title = "Opus - Contact Details";
require_once "assets/common/header.php";
require_once "assets/common/session.php";
?>

<link rel="stylesheet" type="text/css" href="lib/datatable/datatables.min.css">
<script type="text/javascript" charset="utf8" src="lib/datatable/datatables.min.js"></script>


<body id="page-top">

    <div id="wrapper">
        <?php require_once "assets/common/side_bar.php"; ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">
                <?php require_once "assets/common/top_bar.php"; ?>
                
                <div class="container-fluid">
                    <h1 class="h3 mb-4 text-gray-800">Contact Information</h1>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Contact Information List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Description</th>
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

            </div>

            <div class="modal fade updateModal" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- <form action="controller/controller.contact_info.php?mode=updateDesc" method="POST" enctype=""> -->
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTitle"></h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <div class="d-none">
                                    <input type="hidden" id="info_id" name="info_id" class="form-control" readonly>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Description: <span class="required">*</span></label>
                                    <input type="text" class="form-control" name="desc" id="desc" placeholder="Type Here...">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Status: </label>
                                    <select class="form-control" id="contact_detail_status" name="status">
                                        <option value="0">Enabled</option>
                                        <option value="1">Disabled</option>
                                    </select>
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
                        <!-- </form> -->

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
    <script src="services/contact_info.js"></script>

</body>

</html>