<?php
require_once "controller.db.php";
require_once "../model/model.about_us.php";

$aboutUs = new AboutUs();

$mode = isset($_GET["mode"]) ?  $_GET["mode"] : NULL;

switch($mode) {

    case "updateContent";
        $about_id = $_POST["about_id"];
        $title = $_POST["title"];
        $about_content = $_POST["about_content"];
        $status = $_POST["status"];
        $aboutUs = $aboutUs->updateContent($about_id, $title, $about_content, $status);

        $response = array("message" => "Success Update");
        break;

    default:
        header("Location: ../404.php");

}

echo json_encode($response);

?>