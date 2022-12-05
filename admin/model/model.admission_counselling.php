<?php

class AdmissionCounselling extends db_conn_mysql {

    public function __construct() {
        $this->conn = $this->db_conn();  
    }

    public function getContent() {
        $query = $this->conn->prepare("SELECT * FROM admission_counselling");
        $query->execute();
        $response = $query->fetchAll();
        
        return $response;
    }

    public function getContentWhere($admission_id) {
        $query = $this->conn->prepare("SELECT * FROM admission_counselling WHERE admission_id = ?");
        $query->execute([$admission_id]);
        $response = $query->fetch();

        return $response;
    }

    public function updateContent($id, $title, $content, $status) {
        $query = $this->conn->prepare("UPDATE admission_counselling SET title = ?, content = ?, status = ? WHERE admission_id = ?");
        $query->execute([$title, $content, $status, $id]);
    }

    public function updateCards($card_id, $card_title, $card_content, $link, $status) {
        $card_title = str_replace(array("'", "&qout"), "", htmlspecialchars($card_title));
        $card_content = str_replace(array("'", "&qout"), "", htmlspecialchars($card_content));

        $query = $this->conn->prepare("UPDATE card_content SET card_title = ?, content = ?, link = ?, card_status = ? WHERE card_id = ?");
        $query->execute([$card_title, $card_content, $link, $status, $card_id]);
    }

    public function updateCardsWithUpload($card_id, $card_title, $path_filename_ext, $card_content, $link, $status) {
        $card_title = str_replace(array("'", "&qout"), "", htmlspecialchars($card_title));
        $card_content = str_replace(array("'", "&qout"), "", htmlspecialchars($card_content));

        $query = $this->conn->prepare("UPDATE card_content SET card_title = ?, img = ?, content = ?, link = ?, card_status = ? WHERE card_id = ?");
        $query->execute([$card_title, $path_filename_ext, $card_content, $link, $status, $card_id]);
    }
}   