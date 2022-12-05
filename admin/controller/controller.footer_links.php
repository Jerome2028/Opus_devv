<?php

require_once "controller.db.php";
require_once "../model/model.footer_links.php";

$footer_links = new FooterLinks();

$mode = isset($_GET["mode"]) ?  $_GET["mode"] : NULL;

switch($mode) {

    case "usefulLinksTable";
        $label = "Useful Links";
        $footer_links = $footer_links->getFooterLinks($label);
        foreach($footer_links as $k=>$v) {
            $footer_links[$k]["title"] = $v["title"];
            $footer_links[$k]["url"] = $v["url"];

            ($v["status"] == 0 ? $footer_links[$k]["status"] = "Enabled" :  $footer_links[$k]["status"] = "Disabled");
            
            $footer_links[$k]["action"] = '
            <center>
                <button onclick="update(\''.$v['id'].'\',\''.$v['url'].'\',\''.$v['title'].'\',\''.$v['sort'].'\',\''.$v['label'].'\',\''.$v['status'].'\')" class="btn btn-sm btn-info btn-icon-split">
                    <span class="icon"><i class="fas fa-sm fa-pencil-alt"></i></span>
                    <span class="text">Update</span>
                </button>
            </center>
            ';
        }
        
        $response = array("data" => $footer_links);
        break;


    case "ourServicesTable";
        $label = "Our Services";
        $footer_links = $footer_links->getFooterLinks($label);
        foreach($footer_links as $k=>$v) {
            $footer_links[$k]["title"] = $v["title"];
            $footer_links[$k]["url"] = $v["url"];

            ($v["status"] == 0 ? $footer_links[$k]["status"] = "Enabled" :  $footer_links[$k]["status"] = "Disabled");
            
            $footer_links[$k]["action"] = '
            <center>
                <button onclick="update(\''.$v['id'].'\',\''.$v['url'].'\',\''.$v['title'].'\',\''.$v['sort'].'\',\''.$v['label'].'\',\''.$v['status'].'\')" class="btn btn-sm btn-info btn-icon-split">
                    <span class="icon"><i class="fas fa-sm fa-pencil-alt"></i></span>
                    <span class="text">Update</span>
                </button>
            </center>
            ';
        }

        $response = array("data" => $footer_links);
        break;


    case "updateLinks";
        $link_id = $_POST["id"];
        $title = $_POST["title"];
        $url = $_POST["url"];
        $sort = $_POST["sort"];
        $label = $_POST["label"];
        $status = $_POST["status"];
        $footer_links = $footer_links->updateLinks($link_id, $title, $url, $sort, $label, $status);
        
        $response = array("message" => "Success Update");
        header('location: ../footer_links.php');
        break;
    
    default:
        header("Location: ../404.php");

}

echo json_encode($response);