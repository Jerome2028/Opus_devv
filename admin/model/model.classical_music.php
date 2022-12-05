<?php 

class ClassicalMusic extends db_conn_mysql {

    public function __construct() {
        $this->conn = $this->db_conn();
    }

    public function getContent() {
        $query = $this->conn->prepare("SELECT * FROM classical_music");
        $query->execute();
        $response = $query->fetchAll();

        return $response;
    }

    public function getContentWhere($id) {
        $query = $this->conn->prepare("SELECT * FROM classical_music WHERE id = ?");
        $query->execute([$id]);
        $response = $query->fetch();

        return $response;
    }

    public function updateContent($id, $title, $content, $status) {
        $query = $this->conn->prepare("UPDATE classical_music SET title = ?, content = ?, status = ? WHERE id = ?");
        $query->execute([$title, $content, $status, $id]);
    }

}