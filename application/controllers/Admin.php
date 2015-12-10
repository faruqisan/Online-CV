<?php

class Admin extends CI_Controller {

    public function __construct() {
      parent::__construct();

      //untuk cek session  kalau dia bukan admin, dia akan di redirect ke login
      if($this->session->userdata('logged_in')['privilage'] != "1" ){
			       redirect('Login');
		  }

    }

    public function index() {
        $this->load->view('/Admin/index.php');
    }

}

?>
