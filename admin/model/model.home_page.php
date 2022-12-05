<?php 

class HomePage extends db_conn_mysql {

    public function __construct() {
        $this->conn = $this->db_conn();  
    }

    public function updateCards($card_id, $card_title, $card_content, $link, $sort, $status) {
        $card_title = str_replace(array("'", "&qout"), "", htmlspecialchars($card_title));
        $card_content = str_replace(array("'", "&qout"), "", htmlspecialchars($card_content));

        $query = $this->conn->prepare("UPDATE card_content SET card_title = ?, content = ?, link = ?, sort = ?, card_status = ? WHERE card_id = ?");
        $query->execute([$card_title, $card_content, $link, $sort, $status, $card_id]);
    }

    public function updateCardsWithUpload($card_id, $card_title, $img, $card_content, $link, $sort, $status) {
        $card_title = str_replace(array("'", "&qout"), "", htmlspecialchars($card_title));
        $card_content = str_replace(array("'", "&qout"), "", htmlspecialchars($card_content));

        $query = $this->conn->prepare("UPDATE card_content SET card_title = ?, img = ?, content = ?, link = ?, sort = ?, card_status = ? WHERE card_id = ?");
        $query->execute([$card_title, $img, $card_content, $link, $sort, $status, $card_id]);
    }

    public function getHero() {
        $query = $this->conn->prepare("SELECT * FROM hero_slider ORDER BY sort ASC");
        $query->execute();
        $response = $query->fetchAll();

        return $response;
    }

    public function updateHero($hero_id, $title, $link_title, $url, $sort_by, $status) {
        $title = str_replace(array("'", "&qout"), "", htmlspecialchars($title));
        $link_title = str_replace(array("'", "&qout"), "", htmlspecialchars($link_title));

        $query = $this->conn->prepare("UPDATE hero_slider SET title = ?, link_title = ?, link = ?, sort = ?, status = ? WHERE id = ?");
        $query->execute([$title, $link_title, $url, $sort_by, $status, $hero_id]);
    }

    public function updateHeroWithUpload($hero_id, $img, $title, $link_title, $url, $sort_by, $status) {
        $title = str_replace(array("'", "&qout"), "", htmlspecialchars($title));
        $link_title = str_replace(array("'", "&qout"), "", htmlspecialchars($link_title));

        $query = $this->conn->prepare("UPDATE hero_slider SET img = ?, title = ?, link_title = ?, link = ?, sort = ?, status = ? WHERE id = ?");
        $query->execute([$img, $title, $link_title, $url, $sort_by, $status, $hero_id]);
    }

    public function addHeroImage($img, $title, $link_title, $url, $sort_by, $status) {
        $title = str_replace(array("'", "&qout"), "", htmlspecialchars($title));
        $link_title = str_replace(array("'", "&qout"), "", htmlspecialchars($link_title));

        $query = $this->conn->prepare("INSERT INTO hero_slider (img, title, link_title, link, sort, status) VALUES (?, ?, ?, ?, ?, ?)");
        $query->execute([$img, $title, $link_title, $url, $sort_by, $status]);
    }

    public function deleteHeroImage($id) {
        $query = $this->conn->prepare("DELETE FROM hero_slider WHERE id = ?");
        $query->execute([$id]);
    }

    public function addNewCard($section, $card_title, $card_content, $link, $page, $status) {
        $card_title = str_replace(array("'", "&qout"), "", htmlspecialchars($card_title));
        $content = str_replace(array("'", "&qout"), "", htmlspecialchars($card_content));

        $query = $this->conn->prepare("INSERT INTO card_content (section, card_title, content, link, page, card_status) VALUES (?, ?, ?, ?, ?, ?)");
        $query->execute([$section, $card_title, $content, $link, $page, $status]);
    }

    public function addNewCardWithUpload($section, $card_title, $img, $card_content, $link, $page, $status) {
        $card_title = str_replace(array("'", "&qout"), "", htmlspecialchars($card_title));
        $content = str_replace(array("'", "&qout"), "", htmlspecialchars($card_content));

        $query = $this->conn->prepare("INSERT INTO card_content (section, card_title, img, content, link, page, card_status) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $query->execute([$section, $card_title, $img, $content, $link, $page, $status]);
    }

    public function deleteCards($card_id) {
        $query = $this->conn->prepare("DELETE FROM card_content WHERE card_id = ?");
        $query->execute([$card_id]);
    }

    public function getCardsContent($page) {
        $query = $this->conn->prepare("SELECT * FROM card_content WHERE page = ? ORDER BY sort ASC");
        $query->execute([$page]);
        $response = $query->fetchAll();

        return $response;
    }
}