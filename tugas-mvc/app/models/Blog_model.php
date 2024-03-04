<?php

class Blog_model {
  // sebelum pake database
  // private $blog = [
  //   ["penulis" => "Rifqi Maulana", "judul" => "Belajar PHP MVC", "tulisan" => "Tutorial PHP MVC"],
  //   ["penulis" => "Rifqi Maulana", "judul" => "Belajar PHP OOP", "tulisan" => "Tutorial PHP OOP"],
  //   ["penulis" => "Rifqi Maulana", "judul" => "Belajar PHP Dasar", "tulisan" => "Tutorial PHP Dasar"],
  // ];

  private $table = 'phpmvcblog';
  private $db;

  public function __construct() {
    $this->db = new Database;
  }

  public function getAllBlog() {
    $this->db->query("SELECT * FROM " . $this-> table);
    return $this->db->resultAll();
  }

  public function getBlogById($id) {
    $this->db->query("SELECT * FROM " . $this->table . " WHERE id=:id");
    $this->db->bind('id', $id);
    return $this->db->resultSingle();
  }

  public function buatArtikel($data) {
    $query = "INSERT INTO phpmvcblog VALUES 
    ('', :judul, :tulisan, :penulis)";
    
    $this->db->query($query);
    $this->db->bind('judul', $data['judul']);
    $this->db->bind('tulisan', $data['tulisan']);
    $this->db->bind('penulis', $data['penulis']);
    $this->db->execute();
    return $this->db->rowCount();
  }
}