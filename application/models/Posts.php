<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Model {
  public function getAllPost(){
    $query = $this->db->query("SELECT * FROM post");
    $rep = $query->result_array();
    return $rep;
  }

  public function getrandomPost(){
    $query = $this->db->query("SELECT * FROM post ORDER BY RAND() LIMIT 1");
    $rep = $query->row_array();
    return $rep;
  }

  public function getPostById($id){
    $query = $this->db->query("SELECT * FROM post WHERE IdPost=".$id);
    $rep = $query->row_array();
    return $rep;
  }

  public function getPostByIdCategorie($idCateg){
    $query = $this->db->query("SELECT * FROM post WHERE IdCategorie=".$idCateg);
    $rep = $query->result_array();
    return $rep;
  }

  public function insertPost($title, $subTitle, $text, $idCateg, $image, $nomCateg, $image2){
    $query="Insert into  Post (Titre, SousTitre, Texte, IdCategorie, Image, NomCategorie, Image2) values('".$title."', '".$subTitle."', '".$text."', ".$idCateg.", '".$image."', '".$nomCateg."', '".$image2."')";
		$this->db->query($query);
  }

  public function deletePost($id){
    $queryString="delete from Post where IdPost=".$id;
    $this->db->query($queryString);
  }

  public function editPost($title, $subTitle, $text, $idCateg, $image, $nomCateg, $image2, $idPost){
    $queryString="Update Post set Titre='".$title."', SousTitre='".$subTitle."', Texte='".$text."', IdCategorie=".$idCateg.", Image='".$image."', NomCategorie='".$nomCateg."', Image2='".$image2."' WHERE IdPost=".$idPost;
    $this->db->query($queryString);
  }
}
