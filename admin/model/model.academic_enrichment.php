<?php

class AcademicEnrichment extends db_conn_mysql {

    public function __construct() {
        $this->conn = $this->db_conn();  
    }

    public function getContent() {
        $query = $this->conn->prepare("SELECT * FROM academic_enrichment");
        $query->execute();
        $response = $query->fetchAll();

        return $response;
    }

    public function getContentWhere($academic_id) {
        $query = $this->conn->prepare("SELECT * FROM academic_enrichment WHERE id = ?");
        $query->execute([$academic_id]);
        $response = $query->fetch();

        return $response;
    }

    public function updateContent($id, $title, $content, $status) {
        $query = $this->conn->prepare("UPDATE academic_enrichment SET title = ?, content = ?, status = ? WHERE id = ?");
        $query->execute([$title, $content, $status, $id]);
    }

}