<?php

class CuriculumVitae extends CI_Controller {

    public function __construct() {
      parent::__construct();
      if($this->session->userdata('logged_in')['privilage'] != "1" ){
			       redirect('Login');
		  }
      $this->load->model('CVModel');
    }

    public function index() {
      $data['dataCV'] = $this->CVModel->loadAllCV();
      $this->load->view('/Admin/CV/index.php',$data);
    }

    public function newContent(){
      $this->load->view('/Admin/CV/newContent.php');
    }
    
    public function saveContent(){

      $data = array(
        'category'=>1,
        'tanggalDibikin'=> date('Y-m-d'),
        'judulKonten'=> $this->input->post('title'),
        'Konten'=>$this->input->post('content')
      );
      $result = $this->CVModel->saveContent($data);
      if ($result == TRUE) {
            redirect('/CuriculumVitae');
        } else {
            echo '<script>alert("error")</script>';
      }

    }

    public function deleteContent($id){
      $result = $this->CVModel->deleteContent($id);
      if ($result == TRUE) {
            redirect('/CuriculumVitae');
        } else {
            echo '<script>alert("error")</script>';
      }
    }

    public function updateContent($id){
      $data['id']=$id;
      $data['dataContent']=$this->CVModel->getDataContentById($id);
      $this->load->view('/Admin/CV/updateContent.php',$data);
    }

    public function saveUpdate(){
      $id = $this->input->post('id');
      $data = array(
        'judulKonten'=> $this->input->post('title'),
        'Konten'=>$this->input->post('content')
      );
      $result = $this->CVModel->saveUpdate($data,$id);
      if ($result == TRUE) {
            redirect('/CuriculumVitae');
        } else {
            echo '<script>alert("error")</script>';
      }
    }

    public function publishContent($id){
      $data = array(
        'published'=>TRUE
      );
      $result = $this->CVModel->changePublishStatus($data,$id);
      if ($result == TRUE) {
            redirect('/CuriculumVitae');
        } else {
            echo '<script>alert("error")</script>';
      }
    }

    public function unpulishContent($id){
      $data = array(
        'published'=>FALSE
      );
      $result = $this->CVModel->changePublishStatus($data,$id);
      if ($result == TRUE) {
            redirect('/CuriculumVitae');
        } else {
            echo '<script>alert("error")</script>';
      }
    }


}

?>
