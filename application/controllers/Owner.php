<?php

class Owner extends CI_Controller {

    public function __construct() {
      parent::__construct();
      if($this->session->userdata('logged_in')['privilage'] != "2" ){
			       redirect('Login');
		  }
      $this->load->model('OwnerModel');
    }

    public function index() {
      $data['bio'] = $this->OwnerModel->loadBioOwner();
      $this->load->view('/Owner/index.php',$data);
    }
    public function update($id){
      $data['dataContent'] = $this->OwnerModel->loadDataById($id);
      $this->load->view('/Owner/updateContent',$data);
    }
    public function updateContent(){
      $id = $this->input->post('id');
      $data = array(
        'owner_name'=> $this->input->post('name'),
        'tagline'=> $this->input->post('tagline'),
        'Alamat'=> $this->input->post('alamat'),
        'Phone'=> $this->input->post('phone')
      );
      $result = $this->OwnerModel->saveUpdate($data,$id);
      if ($result == TRUE) {
            redirect('/Owner');
        } else {
            echo '<script>alert("error")</script>';
      }
    }
}

?>
