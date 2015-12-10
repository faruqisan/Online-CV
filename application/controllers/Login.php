<?php

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('LoginModel');
    }

    public function index() {
      if($this->session->userdata('logged_in')['privilage'] == "2" ){
             redirect('/Owner');
        }else if($this->session->userdata('logged_in')['privilage'] == "1"){
             redirect('/Admin');
        }
        $this->load->view('/Login/index.php');
    }

    public function doLogout(){
      $this->session->unset_userdata('logged_in');
		  redirect('Login');
    }

    public function doLogin(){
      $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            $result = $this->LoginModel->login($data);

            if ($result == TRUE) {
                $username = $this->input->post('username');
                $resultInfo = $this->LoginModel->read_user_information($username);

                $usertype = $resultInfo[0]->privilage;

                switch ($usertype){
                    case "1":
                        $session_data = array(
                            'username' => $resultInfo[0]->username,
                            'privilage' => $resultInfo[0]->privilage
                        );
                        $this->session->set_userdata('logged_in', $session_data);
                        redirect('/Admin');
                        break;
                    case "2":
                        $session_data = array(
                            'username' => $resultInfo[0]->username,
                            'privilage' => $resultInfo[0]->privilage
                        );
                        $this->session->set_userdata('logged_in', $session_data);
                        //$this->load->view('Manager/Dashboard');
                        redirect('/Owner');
                        break;
                    default :
                }

            } else {
                redirect('/Login');
            }
    }

}

?>
