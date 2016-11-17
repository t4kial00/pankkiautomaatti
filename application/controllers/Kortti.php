<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kortti extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Kortti_model');
    }

	public function naytaKortit(){
		if($this->session->userdata('logged_in')){
			//$this->load->model('Asiakas_model');
			$data['kortti']=$this->Kortti_model->haeKortit();
			$data['sivun_sisalto']='kortti/naytaKortit';
			$this->load->view('menu/sisalto', $data);
		}
		else{
    		//If no session, redirect to login page
    		redirect('Login/kirjaudu');
   		}	
	}	

	public function lisaaKortti(){
		if($this->session->userdata('logged_in')){
			$this->load->model('Asiakas_model');
			$this->load->model('Tili_model');
			$data['asiakas']=$this->Asiakas_model->haeAsiakkaat();
			$data['tili']=$this->Tili_model->haeTilit();
			$btn=$this->input->post('btnLisaa');

			$lisaa_kortti=array(
				"kortti_nro"=>$this->input->post('nro'),
				"pin"=>$this->input->post('pin'),
				"id_tili"=>$this->input->post('idtili')
				);

			if(isset($btn)){
				$lisays=$this->Kortti_model->addKortti($lisaa_kortti);
				if($lisays>0){
					echo '<script>alert("Lisäys onnistui")</script>';
				}
			}

			$data['sivun_sisalto']='kortti/lisaaKortti';
			$this->load->view('menu/sisalto', $data);
		}
		else{
    		//If no session, redirect to login page
    		redirect('Login/kirjaudu');
   		}	
	
	}

	/*public function nayta_poistettavat(){
		$data['asiakas']=$this->Asiakas_model->naytaAsiakkaat();
		$data['sivun_sisalto']='asiakas/poistaAsiakas';
		$this->load->view('menu/sisalto', $data);
	}*/

	public function poistaKortti($id){
		if($this->session->userdata('logged_in')){
			$poista=$this->Kortti_model->delKortti($id);
			if($poista>0){
				echo '<script>alert("Poisto onnistui")</script>';
				header("Location:" . site_url('kortti/naytaKortit')); 
			}

			$data['asiakas']=$this->Kortti_model->haeKortit();
			$data['sivun_sisalto']='kortti/naytaKortit';
			$this->load->view('menu/sisalto', $data);
		}
		else{
    		//If no session, redirect to login page
    		redirect('Login/kirjaudu');
   		}	
	}
}


