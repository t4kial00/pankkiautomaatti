<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Etusivu extends CI_Controller {
	public function index(){
		

		if($this->session->userdata('logged_in')){
    		$session_data = $this->session->userdata('logged_in');
    		 $data['username'] = $session_data['username'];
    		 $data['sivun_sisalto']="etusivu/index";
			$this->load->view('menu/sisalto', $data);
    		// $this->load->view('etusivu/index', $data);
   		}
   		else{
    		//If no session, redirect to login page
    		redirect('Login/kirjaudu');
   		}	
	}

	public function logout(){
  		$this->session->unset_userdata('logged_in');
   		session_destroy();
   		redirect('login/kirjaudu');
 	}
}