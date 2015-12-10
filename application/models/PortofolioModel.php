<?php

class PortofolioModel extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function loadAllCV(){
      $query = $this->db->select('*')->from('tb_portofolio')->get();
      return $query->result();
    }

    function saveContent($data){
      $this->db->set($data);
        $this->db->insert($this->db->dbprefix . 'tb_portofolio');
        if ($this->db->affected_rows() > 0) {
          return true;
        } else {
            return false;
          }
    }

    function deleteContent($id){
      $this->db->where('IDport', $id);
        $this->db->delete('tb_portofolio');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    //untuk menyediakan data cv ketika update
    function getDataContentById($id){
      $query = $this->db->get_where('tb_portofolio', array('IDport' => $id));
      return $query->result();
    }

    function saveUpdate($data,$id){
      $this->db->where('IDport', $id);
      $this->db->update('tb_portofolio', $data);
      if ($this->db->affected_rows() > 0) {
          return true;
      } else {
          return false;
      }
    }

    function changePublishStatus($data,$id){
      $this->db->where('IDport', $id);
      $this->db->update('tb_portofolio', $data);
      if ($this->db->affected_rows() > 0) {
          return true;
      } else {
          return false;
      }
    }

}
?>
