<?php 
date_default_timezone_set("Asia/Manila");
$title = "Opus Admin";
require_once "assets/common/header.php";
require_once "controller/controller.auth.php";

$auth = new Auth();
$isLoggedIn = $auth->getSession("auth");
$auth->redirect("auth", false, "home.php");
?>

<body class="bg-gradient-light">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                   
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">

                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome to <strong>Opus Dashboard!</strong></h1>
                                    </div>

                                    <!-- <form action="controller/controller.login.php?mode=login" method="POST" class="user"> -->
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="user_email" placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="user_password" placeholder="Password">
                                        </div>
                                        <button type="submit" class="btn btn-facebook btn-user btn-block" id="btn-user">Login</button>
                                    <!-- </form> -->

                                    <hr>

                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>

                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/alert.js"></script>
    <script src="services/index.js"></script>

</body>