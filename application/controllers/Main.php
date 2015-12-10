<?php

class Main extends CI_Controller{

  public function __construct() {
    parent::__construct();
    $this->load->model('MainModel');
  }

  public function index(){
    $data['ownerName']=$this->MainModel->loadBio();
    $data['cv']=$this->MainModel->loadCV();
    $data['portofolio']=$this->MainModel->loadPortofolio();
    $this->load->view('/Main/index.php',$data);
  }

}

?>
