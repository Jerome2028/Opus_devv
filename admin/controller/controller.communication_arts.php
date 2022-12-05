<?php

require_once "controller.db.php";
require_once "../model/model.communication_arts.php";

$communicationArts = new CommunicationArts();

$mode = isset($_GET["mode"]) ? $_GET["mode"] : NULL;

switch($mode) { 

    case "updateContent";
        $id = $_POST["id"];
        $title = $_POST["title"];
        $content = $_POST["content"];
        $status = $_POST["status"];
        $communicationArts = $communicationArts->updateContent($id, $title, $content, $status);

        $response = array("message" => "Update Success");
        break;

    case "addCourse";
        $course = $_POST["course"];
        $sort_by = $_POST["sort_by"];
        $status = $_POST["status"];
        $communicationArts = $communicationArts->addCourse($course, $sort_by, $status);

        $response = array("message" => "Success Insert");
        break;

    case "updateCourse";
        $course_id = $_POST["course_id"];
        $course = $_POST["course"];
        $sort_by = $_POST["sort_by"];
        $status = $_POST["status"];
        $communicationArts = $communicationArts->updateCourse($course_id, $course, $sort_by, $status);

        $response = array("message" => "Update Success");
        break;

    case "deleteCourse";
        $id = $_POST["id"];
        $communicationArts = $communicationArts->deleteCourse($id);

        $response = array("message" => "Delete Success");
        break;

    default;
        header("Location: ../404.php");

}
echo json_encode($response);