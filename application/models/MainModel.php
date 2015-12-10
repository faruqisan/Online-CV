<?php

class MainModel extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function loadBio(){
      $query = $this->db->select('*')->from('tb_bio')->get();
      return $query->result();
    }

    function loadCV(){
      $query = $this->db->get_where('tb_cv', array('published' => true));
      return $query->result();
    }

    function loadPortofolio(){
      $query = $this->db->get_where('tb_portofolio', array('published' => true));
      return $query->result();
    }


  }

?>
