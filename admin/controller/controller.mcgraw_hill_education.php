<?php
require_once "controller.db.php";
require_once "../model/model.mcgraw_hill_education.php";

$mcGrawHillEducation = new McGrawHillEducation();

$mode = isset($_GET["mode"]) ? $_GET["mode"] : NULL;

switch($mode) {

    case "updateContent";
       $id = $_POST["id"];
       $title = $_POST["title"];
       $content = $_POST["content"];
       $status = $_POST["status"];
        $mcGrawHillEducation = $mcGrawHillEducation->updateContent($id, $title, $content, $status);

        $response = array("message" => "Success Update");
        break;

    case "updateMcGrawCard";
        $card_id = $_POST["card_id"];
        $card_title = $_POST["card_title"];
        $content = $_POST["card_content"];
        $status = $_POST["card_status"];
        $mcGrawHillEducation = $mcGrawHillEducation->updateMcGrawCard($card_id, $card_title, $content, $status);

        $response = array("message" => "Success Update");
        break;

    default: 
        header("Location: ../404.php");
}

echo json_encode($response);