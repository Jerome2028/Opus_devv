<?php

class SummerCamps extends db_conn_mysql {

    public function __construct() {
        $this->conn = $this->db_conn();  
    }

    public function getContent() {
        $query = $this->conn->prepare("SELECT * FROM summer_camps");
        $query->execute();
        $response = $query->fetchAll();

        return $response;
    }

    public function getContentWhere($summer_camps_id) {
        $query = $this->conn->prepare("SELECT * FROM summer_camps WHERE id='$summer_camps_id'");
        $query->execute();
        $response = $query->fetch();

        return $response;
    }

    public function updateContent($summer_camps_id, $title, $summer_camps_content, $status) {
        $query = $this->conn->prepare("UPDATE summer_camps SET title='$title', content='$summer_camps_content', status='$status' WHERE id='$summer_camps_id'");
        $query->execute();
    }

}