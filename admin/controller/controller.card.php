<?php

require_once "controller.db.php";
require_once "../model/model.card.php";

$card_details = new Cards();

$mode = isset($_GET["mode"]) ?  $_GET["mode"] : NULL;

switch($mode) {

    case "cardDetail";
        $card_details = $card_details->getContent();
        foreach($card_details as $k=>$v) {
            $card_details[$k]["card_title"] = $v["card_title"];
            $card_details[$k]["section"] = $v["section"];

            $card_details[$k]["card_status"] = ($v["card_status"] == 1 ? "Disabled" : "Enabled");
            $card_details[$k]["page"] = $v["page"];
            $card_details[$k]["action"] = '
            <center>
                <button onclick="update(\''.$v['card_id'].'\',\''.$v['section'].'\',\''.$v['card_title'].'\',\''.$v['content'].'\',\''.$v['link'].'\',\''.$v['page'].'\',\''.$v['card_status'].'\')" class="btn btn-sm btn-info btn-icon-split">
                    <span class="icon"><i class="fas fa-pencil-alt"></i></span>
                    <span class="text">Update</span>
                </button>
            </center>
            ';
        }

        $response = array("data" => $card_details);
        break;

    case "updateCard";
        $card_id = $_POST["card_id"];
        $section = $_POST["section"];
        $card_title = $_POST["card_title"];
        $card_content = $_POST["card_content"];
        $link = $_POST["link"];
        $page = $_POST["page"];
        $status = $_POST["status"];

        $card_details = $card_details->updateContent($card_id, $section, $card_title, $card_content, $link, $page, $status);
        $response = array("message" => "Success Update");
        break;

    default:
        header("Location: ../404.php");

}

echo json_encode($response);