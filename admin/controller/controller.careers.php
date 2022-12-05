<?php 
require_once "controller.db.php";
require_once "../model/model.careers.php";

$careers = new Careers;

$mode = isset($_GET["mode"]) ? $_GET["mode"] : NULL;

switch($mode) {

    case "updateContent";
        $careers_id = $_POST["careers_id"];
        $title = $_POST["title"];
        $careers_content = $_POST["careers_content"];
        $status = $_POST["status"];
        $careers = $careers->updateContent($careers_id, $title, $careers_content, $status);

        $response = array("message" => "Success Update");
        break;

    case "addPosition";
        $position = $_POST["position"];
        $sort_by = $_POST["sort_by"];
        $status = $_POST["status"];
        $careers = $careers->addPosition($position, $sort_by, $status);

        $response = array("message" => "Success Insert");
        break;

    case "deletePosition";
        $id = $_POST["id"];
        $careers = $careers->deletePosition($id);

        $response = array("message" => "Delete Success");
        break;

    case "updatePosition";
        $id = $_POST["id"];
        $position = $_POST["position"];
        $sort_by = $_POST["sort_by"];
        $status = $_POST["status"];
        $careers = $careers->updatePosition($id, $position, $sort_by, $status);

        $response = array("message" => "Success Update");
        break;
    
    default:
        header("Location: ../404.php");
}

echo json_encode($response);