<?php 

class McGrawHillEducation extends db_conn_mysql {

    public function __construct() {
        $this->conn = $this->db_conn();  
    }

    public function getContent() {
        $query = $this->conn->prepare("SELECT * FROM mcgraw_hill_education");
        $query->execute();
        $response = $query->fetchAll();

        return $response;
    }

    public function getContentWhere($id) {
        $query = $this->conn->prepare("SELECT * FROM mcgraw_hill_education WHERE id = ?");
        $query->execute([$id]);
        $response = $query->fetch();

        return $response;
    }

    public function updateContent($id, $title, $content, $status) {
        $query = $this->conn->prepare("UPDATE mcgraw_hill_education SET title = ?, content = ?, status = ? WHERE id = ? ");
        $query->execute([$title, $content, $status, $id]);
    }

    public function updateMcGrawCard($card_id, $card_title, $content, $status) {
        $card_title = str_replace(array("'", "&qout"), "", htmlspecialchars($card_title));
        $content = str_replace(array("'", "&qout"), "", htmlspecialchars($content));

        $query = $this->conn->prepare("UPDATE card_content SET card_title = ?, content = ?, card_status = ? WHERE card_id = ? ");
        $query->execute([$card_title, $content, $status, $card_id]);
    }

}