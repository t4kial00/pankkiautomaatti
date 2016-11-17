<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nosto extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Nosto_model');
    }

    public function naytaNostot(){
    	if($this->session->userdata('logged_in')){
			//$this->load->model('Asiakas_model');
			$data['nosto']=$this->Nosto_model->haeNostot();
			$data['sivun_sisalto']='nosto/naytaNostot';
			$this->load->view('menu/sisalto', $data);
		}
		else{
    		//If no session, redirect to login page
    		redirect('Login/kirjaudu');
   		}	
	}	
}