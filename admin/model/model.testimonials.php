<?php 

class Testimonials extends db_conn_mysql {

    public function __construct() {
        $this->conn = $this->db_conn();  
    }

    public function getTestimonials() {
        $query = $this->conn->prepare("SELECT * FROM testimonials");
        $query->execute();
        $response = $query->fetchAll();

        return $response;
    }

    public function addNewTestimonials($name, $position, $content, $category, $sort, $status) {
        $name = str_replace(array("'", "&qout"), "", htmlspecialchars($name));
        $content = str_replace(array("'", "&qout"), "", htmlspecialchars($content));

        $query = $this->conn->prepare("INSERT INTO testimonials (name, position, content, category, sort, status) VALUES (?, ?, ?, ?, ?, ?)");
        $query->execute([$name, $position, $content, $category, $sort, $status]);
    }

    public function updateTestimonials($id, $name, $position, $content, $category, $sort, $status) {
        $name = str_replace(array("'", "&qout"), "", htmlspecialchars($name));
        $content = str_replace(array("'", "&qout"), "", htmlspecialchars($content));

        $query = $this->conn->prepare("UPDATE testimonials SET name = ?, position = ?, content = ?, category = ?, sort = ?, status = ? WHERE id = ?");
        $query->execute([$name, $position, $content, $category, $sort, $status, $id]);
    }

    public function deleteTestimonials($id) {
        $query = $this->conn->prepare("DELETE FROM testimonials WHERE id = ?");
        $query->execute([$id]);
    }

}