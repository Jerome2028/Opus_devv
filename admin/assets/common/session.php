<?php
require_once "controller/controller.auth.php";

$auth = new Auth();

$isLoggedIn = $auth->getSession("auth");
$auth->redirect("auth", true, "index.php");
$user = $auth->getSession("name");