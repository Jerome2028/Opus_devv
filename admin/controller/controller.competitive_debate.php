<?php
require_once "controller.db.php";
require_once "../model/model.competitive_debate.php";

$competitiveDebate = new CompetitiveDebate();

$mode = isset($_GET["mode"]) ? $_GET["mode"] : NULL;

switch($mode) {

    case "updateContent";
        $id = $_POST["id"];
        $title = $_POST["title"];
        $content = $_POST["content"];
        $status = $_POST["status"];
        $competitiveDebate = $competitiveDebate->updateContent($id, $title, $content, $status);

        $response = array("message" => "Success Update");
        break;

    default: 
        header("Location: ../404.php");
}

echo json_encode($response);