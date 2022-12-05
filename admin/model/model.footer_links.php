<?php 

class FooterLinks extends db_conn_mysql {

    public function __construct() {
        $this->conn = $this->db_conn();  
    }

    public function getFooterLinks($label) {
        $query = $this->conn->prepare("SELECT * FROM footer_links WHERE label='$label' ORDER BY sort ASC");
        $query->execute();
        $response = $query->fetchAll();

        return $response;
    }

    public function updateLinks($link_id, $title, $url, $sort, $label, $status) {
        $query = $this->conn->prepare("UPDATE footer_links SET title = ?, url = ?, sort = ?, label = ?, status = ? WHERE id = ?");
        $query->execute([$title, $url, $sort, $label, $status, $link_id]);
    }

    public function getLinks() {
        $query = $this->conn->prepare("SELECT * FROM footer_links WHERE status = 0 ORDER BY sort ASC");
        $query->execute();
        $response = $query->fetchAll();

        return $response;
    }

}