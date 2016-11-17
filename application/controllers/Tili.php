<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tili extends CI_Controller {

		function __construct() {
        	parent::__construct();
        	$this->load->model('Tili_model');
    	}

	public function naytaTilit(){
		if($this->session->userdata('logged_in')){
			$this->load->model('Kortti_model');
			$data['kortit']=$this->Kortti_model->haeKortit();
			$this->load->model('Tili_model');
			$data['tili']=$this->Tili_model->haeTilit();
			$data['sivun_sisalto']='tili/naytaTilit';
			$this->load->view('menu/sisalto', $data);
		}
		else{
    		//If no session, redirect to login page
    		redirect('Login/kirjaudu');
   		}	
	}	

	public function lisaaTili(){
		if($this->session->userdata('logged_in')){
			$this->load->model('Asiakas_model');
			$data['asiakas']=$this->Asiakas_model->haeAsiakkaat();
			$btn=$this->input->post('btnLisaa');
			$lisaa_tili=array(
				"id_tili"=>$this->input->post('tili'),
				"saldo"=>$this->input->post('saldo'),
				"id_asiakas"=>$this->input->post('idas')
				);
			if(isset($btn)){
				$lisays=$this->Tili_model->addTili($lisaa_tili);
				if($lisays>0){
					echo '<script>alert("Lisäys onnistui")</script>';
				}
			}
			$data['sivun_sisalto']='tili/lisaaTili';
			$this->load->view('menu/sisalto', $data);
		}
		else{
    	//If no session, redirect to login page
    	redirect('Login/kirjaudu');
   		}	
	}

	public function poistaTili($id){
		if($this->session->userdata('logged_in')){
			$poista=$this->Tili_model->delTili($id);
			if($poista>0){
				echo '<script>alert("Poisto onnistui")</script>';
				header("Location:" . site_url('tili/naytaTilit')); 

			}

			$data['tilit']=$this->Tili_model->haeTilit();
			$data['sivun_sisalto']='tili/naytaTilit';
			$this->load->view('menu/sisalto', $data);
		}
		else{
    	//If no session, redirect to login page
    	redirect('Login/kirjaudu');
   		}	
	}
}