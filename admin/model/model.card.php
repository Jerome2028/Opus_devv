<?php

class Cards extends db_conn_mysql {

    public function __construct() {
        $this->conn = $this->db_conn();  
    }

    public function getContent() {
        $query = $this->conn->prepare("SELECT * FROM card_content");
        $query->execute();
        $response = $query->fetchAll();

        return $response;
    }

    public function getContentWhere($page) {
        $query = $this->conn->prepare("SELECT * FROM card_content WHERE page = ? ORDER BY sort DESC");
        $query->execute([$page]);
        $response = $query->fetchAll();

        return $response;
    }

    // public function updateContent($card_id, $section, $card_title, $card_content, $link, $page, $status) {
    //     $card_content = str_replace(array("'", "&qout"), "", htmlspecialchars($card_content));
    //     $card_title = str_replace(array("'", "&qout"), "", htmlspecialchars($card_title));

    //     $query = $this->conn->prepare("UPDATE card_content SET section = ?, card_title = ?, content = ?, link = ?, page = ?, card_status = ? WHERE card_id = ?");
    //     $query->execute([$section, $card_title, $card_content, $link, $page, $status, $card_id]);
    // }

}