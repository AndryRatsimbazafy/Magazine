<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Model {
  public function getAllCategorie(){
    $query = $this->db->query("SELECT * FROM categorie");;
    $rep = $query->result_array();
    return $rep;
  }

  public function getCategorieByName($nom){
    $query = $this->db->query("SELECT * FROM categorie WHERE Nom='".$nom."'");
    $rep = $query->row_array();
    return $rep;
  }

  public function getCategorieById($nom){
    $query = $this->db->query("SELECT * FROM categorie WHERE IdCategorie=".$nom);
    $rep = $query->row_array();
    return $rep;
  }
}
