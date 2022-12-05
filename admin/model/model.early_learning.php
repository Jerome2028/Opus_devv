<?php 

class EarlyLearning extends db_conn_mysql {

    public function __construct() {
        $this->conn = $this->db_conn();  
    }

    public function getEarlyLearningContent() {
        $query = $this->conn->prepare("SELECT * FROM early_learning");
        $query->execute();
        $response = $query->fetchAll();

        return $response;
    }

    public function getEarlyLearningWhere($early_learn_id) {
        $query = $this->conn->prepare("SELECT * FROM early_learning WHERE id = ?");
        $query->execute([$early_learn_id]);
        $response = $query->fetch();

        return $response;
    }

    public function updateEarlyLearning($id, $title, $content, $status) {
        $query = $this->conn->prepare("UPDATE early_learning SET title = ?, content = ?, status = ? WHERE id = ?");
        $query->execute([$title, $content, $status, $id]);
    }

    public function updateEarlyLearningCard($card_id, $card_title, $content, $status) {
        $card_title = str_replace(array("'", "&qout"), "", htmlspecialchars($card_title));
        $content = str_replace(array("'", "&qout"), "", htmlspecialchars($content));

        $query = $this->conn->prepare("UPDATE card_content SET card_title = ?, content = ?, card_status = ? WHERE card_id = ? ");
        $query->execute([$card_title, $content, $status, $card_id]);
    }
}