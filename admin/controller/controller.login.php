<?php

require_once "controller.db.php";
require_once "controller.auth.php";
require_once "../model/model.user.php";

$auth = new Auth();
$user = new User();                                                                                                                                                                                                                     
$user_name = $auth->getSession("name");

$mode = isset($_GET["mode"]) ?  $_GET["mode"] : NULL;

switch($mode) {
    case "login";
        $user_email = $_POST["user_email"];
        $user_password = $_POST["user_password"];
        $user_accounts = $user->login($user_email, $user_password);

        if(!$user_accounts) {
            $response = array("message"=>"Invalid login credentials");
            echo json_encode($response);
            exit;
        }

        $auth->setSession("auth", true);
        $auth->setSession("role", $user_accounts[6]);
        $auth->setSession("name", $user_accounts[1] . " " . $user_accounts[2]);
        $auth->setSession("id", $user_accounts[0]);
        
        // $response = array("code"=>5, "message"=>"Welcome back ". $auth->getSession("name"));
        $response = array("message"=>"Success");
        break;

    default:
        header("Location: ../404.php");
}

echo json_encode($response);