<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Model {
public function authentificate($nom,$mdp){
    $queryString="SELECT * FROM Administrator where Username='%s' and Password='%s'";
    $queryString=sprintf($queryString,$nom,$mdp);
    $query=$this->db->query($queryString);
    $array=$query->result_array();
    if(count($array) != 0){
      $userdata = array(
      'id'  => $array[0]['IdAdmin'],
      'username'  => $array[0]['Username'],
      'password'  => $array[0]['Password']
      );
      $this->session->set_userdata('admin', $userdata);
      return true;
    }
    return false;
  }
}
