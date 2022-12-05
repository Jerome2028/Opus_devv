<?php
require_once "controller.db.php";
require_once "../model/model.testimonials.php";

$testimonials = new Testimonials();

$mode = isset($_GET["mode"]) ? $_GET["mode"] : NULL;

switch($mode) {

    case "testimonialsData";
        $testimonials = $testimonials->getTestimonials();
        foreach($testimonials as $k=>$v) {
            $testimonials[$k]['name'] = $v['name'];
            $testimonials[$k]['position'] = $v['position'];
            $testimonials[$k]['category'] = $v['category'];
            $testimonials[$k]['sort'] = $v['sort'];
            ($v["status"] == 0 ?  $testimonials[$k]["status"] = "Enabled" : $testimonials[$k]["status"] = "Disabled");
            $testimonials[$k]['date_added'] = $v['date_added'];
            $testimonials[$k]["action"] = '
            <center>
                <button onclick="updateTestimonials(\''.$v['id'].'\',\''.$v['name'].'\',\''.$v['position'].'\',\''.$v['content'].'\',\''.$v['category'].'\',\''.$v['sort'].'\',\''.$v['status'].'\')" class="btn btn-sm btn-info btn-icon-split">
                    <span class="icon"><i class="fas fa-pencil-alt"></i></span>
                </button>
                <button onclick="deleteTestimonials(\''.$v['id'].'\')" class="btn btn-sm btn-danger btn-icon-split">
                    <span class="text"><i class="fas fa-trash"></i></span>
                </button>
            </center>
            ';
        }

        $response = array("data" => $testimonials);
        break;

    case "addTestimonials";
        $name = $_POST["name"];
        $position = $_POST["position"];
        $content = $_POST["content"];
        $category = $_POST["category"];
        $sort = $_POST["sort"];
        $status = $_POST["status"];
        $testimonials = $testimonials->addNewTestimonials($name, $position, $content, $category, $sort, $status);

        $response = array("data" => "Success Insert");
        break;

    case "updateTestimonials";
        $id = $_POST["id"];
        $name = $_POST["name"];
        $position = $_POST["position"];
        $content = $_POST["content"];
        $category = $_POST["category"];
        $sort = $_POST["sort"];
        $status = $_POST["status"];
        $testimonials = $testimonials->updateTestimonials($id, $name, $position, $content, $category, $sort, $status);

        $response = array("data" => "Success Update");
        break;

    case "deleteTestimonials";
        $id = $_POST["id"];
        $testimonials = $testimonials->deleteTestimonials($id);

        $response = array("message" => "Delete Success");
        break;

    default:
        header("Location: ../404.php");

}
echo json_encode($response);