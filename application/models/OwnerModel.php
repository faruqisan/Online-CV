<?php

class OwnerModel extends CI_Model{

  function __construct() {
      parent::__construct();
  }
  function loadBioOwner(){
    $query = $this->db->select('*')->from('tb_bio')->get();
    return $query->result();
  }
  function loadDataById($id){
    $query = $this->db->get_where('tb_bio', array('id' => $id));
    return $query->result();
  }
  function saveUpdate($data,$id){
    $this->db->where('id', $id);
    $this->db->update('tb_bio', $data);
    if ($this->db->affected_rows() > 0) {
        return true;
    } else {
        return false;
    }
  }
}

?>
