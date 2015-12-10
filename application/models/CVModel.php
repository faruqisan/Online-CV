<?php

class CVModel extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    //kegunaan untuk meload untuk table pada halaman cv
    function loadAllCV(){
      $query = $this->db->select('*')->from('tb_cv')->get();
      return $query->result();
    }

    function saveContent($data){
      $this->db->set($data);
      $this->db->insert($this->db->dbprefix . 'tb_cv');
      if ($this->db->affected_rows() > 0) {
        return true;
      } else {
          return false;
      }
    }

    function deleteContent($id){
      $this->db->where('ID', $id);
        $this->db->delete('tb_cv');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function getDataContentById($id){
      $query = $this->db->get_where('tb_cv', array('ID' => $id));
      return $query->result();
    }

    function saveUpdate($data,$id){
      $this->db->where('ID', $id);
      $this->db->update('tb_cv', $data);
      if ($this->db->affected_rows() > 0) {
          return true;
      } else {
          return false;
      }
    }

    function changePublishStatus($data,$id){
      $this->db->where('ID', $id);
      $this->db->update('tb_cv', $data);
      if ($this->db->affected_rows() > 0) {
          return true;
      } else {
          return false;
      }
    }

}
?>
