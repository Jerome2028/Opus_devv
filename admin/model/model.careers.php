<?php 

class Careers extends db_conn_mysql {

    public function __construct() {
        $this->conn = $this->db_conn();  
    }

    public function getContent() {
        $query = $this->conn->prepare("SELECT * FROM careers");
        $query->execute();
        $response = $query->fetchAll();

        return $response;
    }

    public function getContentWhere($careers_id) {
        $query = $this->conn->prepare("SELECT * FROM careers WHERE id= ? ");
        $query->execute([$careers_id]);
        $response = $query->fetch();

        return $response;
    }

    public function updateContent($careers_id, $title, $careers_content, $status) {
        $query = $this->conn->prepare("UPDATE careers SET title = ?, content = ?, status = ? WHERE id = ?");
        $query->execute([$title, $careers_content, $status, $careers_id]);
    }

    public function hiringPostion() {
        $query = $this->conn->prepare("SELECT * FROM hiring_positions ORDER BY sort_by ASC");
        $query->execute();
        $response = $query->fetchAll();

        return $response;
    }

    public function addPosition($position, $sort_by, $status) {
        $query = $this->conn->prepare("INSERT INTO hiring_positions (position, sort_by, status) VALUES (?, ?, ?)");
        $query->execute([$position, $sort_by, $status]);
    }

    public function deletePosition($id) {
        $query = $this->conn->prepare("DELETE FROM hiring_positions WHERE id = ?");
        $query->execute([$id]);
    }

    public function updatePosition($id, $position, $sort_by, $status) {
        $query = $this->conn->prepare("UPDATE hiring_positions SET position = ?, sort_by = ?, status = ? WHERE id = ?");
        $query->execute([$position, $sort_by, $status, $id]);
    }

}