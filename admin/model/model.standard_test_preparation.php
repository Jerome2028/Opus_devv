<?php

class StandardTestPreparation extends db_conn_mysql {

    public function __construct() {
        $this->conn = $this->db_conn();  
    }

    public function getContent() {
        $query = $this->conn->prepare("SELECT * FROM standardized_test_preparation");
        $query->execute();
        $response = $query->fetchAll();

        return $response;
    }

    public function getContentWhere($test_preparation_id) {
        $query = $this->conn->prepare("SELECT * FROM standardized_test_preparation WHERE id = ?");
        $query->execute([$test_preparation_id]);
        $response = $query->fetch();

        return $response;
    }

    public function updateContent($id, $title, $content, $status) {
        $query = $this->conn->prepare("UPDATE standardized_test_preparation SET title = ?, content = ?, status = ? WHERE id = ?");
        $query->execute([$title, $content, $status, $id]);
    }

}