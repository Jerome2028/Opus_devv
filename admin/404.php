<?php 
date_default_timezone_set("Asia/Manila");
$title = "Dashboard";
require_once "assets/common/header.php";
require_once "assets/common/session.php";
?>

<body id="page-top">

    <div id="wrapper">

        <?php require_once "assets/common/side_bar.php"; ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">
                 <?php require_once "assets/common/top_bar.php"; ?>

                <div class="container-fluid" style="margin-top: 15%;">

                    <div class="text-center">
                        <div class="error mx-auto" data-text="404">404</div>
                        <p class="lead text-gray-800 mb-5">Page Not Found</p>
                        <a href="home.php">&larr; Back to Dashboard</a>
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

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php require_once "assets/common/logout_modal.php"; ?>

    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
