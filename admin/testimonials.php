<?php
$title = "Opus - History and Team";
require_once "assets/common/header.php";
require_once "assets/common/session.php";
require_once "controller/controller.db.php";

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
                    <h1 class="h3 mb-4 text-gray-800">Testimonials Page</h1>

                    <div class="card shadow mb-4">

                        <div class="card-header py-3">
                            <div class="d-sm-flex align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-sm fa-edit"></i> Testimonials</h6>

                                <button type="button" id="addNewTestimonials" class="btn btn-sm btn-primary btn-icon-split">
                                    <span class="icon"><i class="fas fa-plus-square"></i> </span>
                                    <span class="text">Add New</span>
                                </button>

                            </div>
                        </div>

                        <div class="card-body">

                            <div class="container-fluid">
                                <div class="table-responsive">

                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Category</th>
                                                <th>Sort By</th>
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

                </div>
            </div>

            <!-- add new testimonials -->
            <div class="modal fade" id="addTestimonialsModal" data-backdrop="static" aria-labelledby="staticBackdropLabel">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title"><i class="fas fa-plus"></i> Add Testimonials</h5>
                        </div>

                        <div class="modal-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right"><span class="required">*</span> Name: </label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="empty_name" name="empty_name" placeholder="Type Here...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Position: </label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="empty_position" name="empty_position" placeholder="Type Here...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right"><span class="required">*</span> Content: </label>

                                <div class="col-sm-10">
                                    <textarea id="empty_testimonial_content" name="empty_testimonial_content"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right"><span class="required">*</span> Category: </label>

                                <div class="col-sm-10">
                                    <select class="form-control" id="empty_category" name="empty_category">
                                        <option value="" selected disabled>-- Select Category --</option>
                                        <option value="AP Courses">AP Courses</option>
                                        <option value="Counselling - University Page">Counselling - University Page</option>
                                        <option value="Counselling - Private School Page">Counselling - Private School Page</option>
                                        <option value="Early learners">Early learners</option>
                                        <option value="Interview Skills Courses">Interview Skills Courses</option>
                                        <option value="Public Speaking and Debate">Public Speaking and Debate</option>
                                        <option value="Speech and Drama">Speech and Drama</option>
                                        <option value="Math">Math</option>
                                        <option value="English -  Elementary">English - Language Arts and Writing L.A.W.(Elementary)</option>
                                        <option value="English - Secondary Level">English - Secondary Level (Critical reading and Writing)</option>
                                        <option value="General">General</option>
                                        <option value="Parent Testimonial">Parent Testimonial</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Sort by: </label>

                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="empty_sort" name="empty_sort" value="0"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Status:</label>

                                <div class="col-sm-10">
                                    <select class="form-control" id="empty_status" name="empty_status">
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

                            <button type="submit" class="btn btn-sm btn-primary btn-icon-split submitAddBtn">
                                <span class="icon"><i class="fas fa-save"></i></span>
                                <span class="text">Save</span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end -->

            <!-- update testimonials modal -->
            <div class="modal fade" id="updateTestimonialsModal" data-backdrop="static" aria-labelledby="staticBackdropLabel">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitle"></h5>
                        </div>

                        <div class="modal-body">
                            <div class="d-none">
                                <input type="hidden" id="testimonials_id" name="testimonials_id" readonly>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right"><span class="required">*</span> Name: </label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Type Here...">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Position: </label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="position" name="position" placeholder="Type Here...">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right"><span class="required">*</span> Content: </label>

                                <div class="col-sm-10">
                                    <textarea id="testimonial_content" name="testimonial_content"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right"><span class="required">*</span> Category: </label>

                                <div class="col-sm-10">
                                    <select class="form-control" id="empty_category" name="empty_category">
                                        <option value="" selected disabled>-- Select Category --</option>
                                        <option value="AP Courses">AP Courses</option>
                                        <option value="Counselling - University Page">Counselling - University Page</option>
                                        <option value="Counselling - Private School Page">Counselling - Private School Page</option>
                                        <option value="Early learners">Early learners</option>
                                        <option value="Interview Skills Courses">Interview Skills Courses</option>
                                        <option value="Public Speaking and Debate">Public Speaking and Debate</option>
                                        <option value="Speech and Drama">Speech and Drama</option>
                                        <option value="Math">Math</option>
                                        <option value="English -  Elementary">English - Language Arts and Writing L.A.W.(Elementary)</option>
                                        <option value="English - Secondary Level">English - Secondary Level (Critical reading and Writing)</option>
                                        <option value="General">General</option>
                                        <option value="Parent Testimonial">Parent Testimonial</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Sort by: </label>

                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="sort" name="sort" placeholder=""> 
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

                            <button type="submit" class="btn btn-sm btn-primary btn-icon-split submitUpdateBtn">
                                <span class="icon"><i class="fas fa-save"></i></span>
                                <span class="text">Save</span>
                            </button>
                        </div>
                </div>
                </div>
            </div>
            <!-- end -->

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
    <script src="services/testimonials.js"></script>

</body>