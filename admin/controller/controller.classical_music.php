<?php

require_once "controller.db.php";
require_once "../model/model.classical_music.php";

$classicalMusic = new ClassicalMusic();

$mode = isset($_GET["mode"]) ? $_GET["mode"] : NULL;

switch($mode) { 

    case "updateClassicalMusic";
        $id = $_POST["id"];
        $title = $_POST["title"];
        $content = $_POST["content"];
        $status = $_POST["status"];
        $classicalMusic = $classicalMusic->updateContent($id, $title, $content, $status);

        $response = array("message" => "Update Success");
        break;

    default;
        header("Location: ../404.php");

}
echo json_encode($response);