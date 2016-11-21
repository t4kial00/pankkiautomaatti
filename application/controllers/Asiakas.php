<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asiakas extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Asiakas_model');
    }

	public function naytaAsiakkaat(){
		if($this->session->userdata('logged_in')){
			
			$this->load->model('Tili_model');
			$data['tilit']=$this->Tili_model->haeTilit();
			$data['asiakas']=$this->Asiakas_model->haeAsiakkaat();
			$data['sivun_sisalto']='asiakas/naytaAsiakkaat';
			$this->load->view('menu/sisalto', $data);
		}
   		else{
    		//If no session, redirect to login page
    		redirect('Login/kirjaudu');
   		}	
	}

	public function naytaValitut($id){
		//$id=$this->input->post('valittutili');
		$this->load->model('Tili_model');
		$data['tilit']=$this->Tili_model->valitutTilit($id);
		$data['sivun_sisalto']='asiakas/naytaValitutTilit';
		$this->load->view('menu/sisalto', $data);
	}

	

	public function LisaaAsiakas(){
		if($this->session->userdata('logged_in')){
			//$this->load->model('Asiakas_model');
			$btn=$this->input->post('btnTallenna');
			$lisaa_asiakas=array(
				"etunimi"=>$this->input->post('en'),
				"sukunimi"=>$this->input->post('sn'),
				"osoite"=>$this->input->post('os'),
				"postinumero"=>$this->input->post('pn'),
				"postitoimipaikka"=>$this->input->post('pt'),
				"puhelinnumero"=>$this->input->post('puh'),
				"email"=>$this->input->post('em')
				);

			if(isset($btn)){
				$lisays=$this->Asiakas_model->addAsiakas($lisaa_asiakas);
				if($lisays>0){
					echo '<script>alert("Lisäys onnistui")</script>';
				}
			}

			$data['sivun_sisalto']='asiakas/lisaaAsiakas';
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

	public function poistaAsiakas($id){
		if($this->session->userdata('logged_in')){
			$poista=$this->Asiakas_model->delAsiakas($id);
			if($poista>0){
				echo '<script>alert("Poisto onnistui")</script>';
				header("Location:" . site_url('asiakas/naytaAsiakkaat')); 

			}

			$data['asiakas']=$this->Asiakas_model->haeAsiakkaat();
			$data['sivun_sisalto']='asiakas/naytaAsiakkaat';
			$this->load->view('menu/sisalto', $data);
		}
   		else{
    		//If no session, redirect to login page
    		redirect('Login/kirjaudu');
   		}	
	}
}