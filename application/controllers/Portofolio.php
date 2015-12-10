<?php

class Portofolio extends CI_Controller {

    public function __construct() {
      parent::__construct();
      if($this->session->userdata('logged_in')['privilage'] != "1" ){
			       redirect('Login');
		  }
      $this->load->model('PortofolioModel');
    }

    public function index() {
      $data['dataCV'] = $this->PortofolioModel->loadAllCV();
      $this->load->view('/Admin/Portofolio/index.php',$data);
    }

    public function newContent(){
      $this->load->view('/Admin/Portofolio/newContent.php');
    }
    public function saveContent(){

      $data = array(
        'categoryPort'=>2,
        'tanggalDibikinport'=> date('Y-m-d'),
        'judulKontenPort'=> $this->input->post('title'),
        'Konten'=>$this->input->post('content')
      );
      $result = $this->PortofolioModel->saveContent($data);
      if ($result == TRUE) {
            redirect('/Portofolio');
        } else {
            echo '<script>alert("error")</script>';
      }

    }

    public function deleteContent($id){
      $result = $this->PortofolioModel->deleteContent($id);
      if ($result == TRUE) {
            redirect('/Portofolio');
        } else {
            echo '<script>alert("error")</script>';
      }
    }

    public function updateContent($id){
      $data['id']=$id;
      $data['dataContent']=$this->PortofolioModel->getDataContentById($id);
      $this->load->view('/Admin/Portofolio/updateContent.php',$data);
    }

    public function saveUpdate(){
      $id = $this->input->post('id');
      $data = array(
        'judulKontenPort'=> $this->input->post('title'),
        'Konten'=>$this->input->post('content')
      );
      $result = $this->PortofolioModel->saveUpdate($data,$id);
      if ($result == TRUE) {
            redirect('/Portofolio');
        } else {
            echo '<script>alert("error")</script>';
      }
    }

    public function publishContent($id){
      $data = array(
        'published'=>TRUE
      );
      $result = $this->PortofolioModel->changePublishStatus($data,$id);
      if ($result == TRUE) {
            redirect('/Portofolio');
        } else {
            echo '<script>alert("error")</script>';
      }
    }

    public function unpulishContent($id){
      $data = array(
        'published'=>FALSE
      );
      $result = $this->PortofolioModel->changePublishStatus($data,$id);
      if ($result == TRUE) {
            redirect('/Portofolio');
        } else {
            echo '<script>alert("error")</script>';
      }
    }


}

?>
