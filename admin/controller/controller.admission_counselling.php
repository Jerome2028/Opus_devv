<?php
require_once "controller.db.php";
require_once "../model/model.admission_counselling.php";

$admission_counselling = new AdmissionCounselling();

$mode = isset($_GET["mode"]) ?  $_GET["mode"] : NULL;

switch($mode) {

    case "updateContent";
        $id = $_POST["id"];
        $title = $_POST["title"];
        $content = $_POST["content"];
        $status = $_POST["status"];
        $admission_counselling = $admission_counselling->updateContent($id, $title, $content, $status);

        $response = array("message" => "Success Update");
        break;

    case "updateCardContent";
        if (($_FILES["image"]["name"] != "")) {

            $card_id = $_POST["card_id"];
            $card_title = $_POST["card_title"];
            $card_content = $_POST["card_content"];
            $link = $_POST["link"];
            $status = $_POST["status"];

            if($_FILES["image"]["type"] != "image/jpeg") {
                echo json_encode(array("message" => "Invalid file format"));
                die();
            }

            $target_dir = "../assets/img/admission/";
            $file = $_FILES['image']['name'];
            $path = pathinfo($file);
            $filename = $path['filename'];
            $ext = $path['extension'];
            $attachfile = $filename.".".$ext;
            $temp_name = $_FILES['image']['tmp_name'];
            $path_filename_ext = $target_dir.$filename.".".$ext;

            if (file_exists($path_filename_ext)) { 
                $response = array("message" => "Existing file");
            } else {

                if ($card_title == "" || $card_content == "") {
                    $response = array("message" => "Error Update");
                } else {
                    
                    move_uploaded_file($temp_name,$path_filename_ext);
                    $path_filename_ext = explode("../", $path_filename_ext);
                    $img = "../admin/". $path_filename_ext[1];
                    $admission_counselling = $admission_counselling->updateCardsWithUpload($card_id, $card_title, $img, $card_content, $link, $status);
                    $response = array("message" => "Success Insert");

                }

            }

        } else {

            $card_id = $_POST["card_id"];
            $card_title = $_POST["card_title"];
            $card_content = $_POST["card_content"];
            $link = $_POST["link"];
            $status = $_POST["status"];

            if($card_title == "" || $card_content == "<br>") {
                $response = array("message" => "Error Update");
            } else {
                $admission_counselling = $admission_counselling->updateCards($card_id, $card_title, $card_content, $link, $status);
                $response = array("message" => "Success Insert");
            }

        }

        break;

    default:
        header("Location: ../404.php");

}

echo json_encode($response);