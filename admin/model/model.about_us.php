<?php

class AboutUs extends db_conn_mysql {

    public function __construct() {
        $this->conn = $this->db_conn();  
    }

    public function getContent() {
        $query = $this->conn->prepare("SELECT * FROM about_us");
        $query->execute();
        $response = $query->fetchAll();

        return $response;

        // $query = "SELECT * FROM about_us";
        // $result = $this->conn->prepare($query);
        // $result->execute();
        // $response = $result->fetchAll();

        // return $response;
    }

    public function getContentWhere($about_id) {
        $query = $this->conn->prepare("SELECT * FROM about_us WHERE id = ?");
        $query->execute([$about_id]);
        $response = $query->fetch();

        return $response;
    }

    public function updateContent($about_id, $title, $about_content, $status) {
        $query = $this->conn->prepare("UPDATE about_us SET title = ?, content = ?, status = ? WHERE id = ?");
        $query->execute([$title, $about_content, $status, $about_id]);
    }

}