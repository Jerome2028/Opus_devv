<?php 
require_once "controller.db.php";
require_once "../model/model.summer_camps.php";

$summerCamps = new SummerCamps();

$mode = isset($_GET["mode"]) ? $_GET["mode"] : NULL;

switch($mode) {

    case "updateContent";
        $summer_camps_id = $_POST["summer_camps_id"];
        $title = $_POST["title"];
        $summer_camps_content = $_POST["summer_camps_content"];
        $status = $_POST["status"];
        $summerCamps = $summerCamps->updateContent($summer_camps_id, $title, $summer_camps_content, $status);

        $response = array("message" => "Success Update");
        break;

    default: 
        header("Location: ../404.php");
}

echo json_encode($response);