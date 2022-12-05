<?php 

class CompetitiveDebate extends db_conn_mysql {

    public function __construct() {
        $this->conn = $this->db_conn();  
    }

    public function getContent() {
        $query = $this->conn->prepare("SELECT * FROM competitive_debate");
        $query->execute();
        $response = $query->fetchAll();

        return $response;
    }

    public function getContentWhere($id) {
        $query = $this->conn->prepare("SELECT * FROM competitive_debate WHERE id = ?");
        $query->execute([$id]);
        $response = $query->fetch();

        return $response;
    }

    public function updateContent($id, $title, $content, $status) {
        $query = $this->conn->prepare("UPDATE competitive_debate SET title = ?, content = ?, status = ? WHERE id = ? ");
        $query->execute([$title, $content, $status, $id]);
    }

}