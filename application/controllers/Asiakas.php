<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asiakas extends CI_Controller {

	    function __construct() {
        	parent::__construct();
        	$this->load->model('Asiakas_model');
    	}

		public function naytaAsiakkaat(){
			//$this->load->model('Asiakas_model');
			$data['asiakas']=$this->Asiakas_model->haeAsiakkaat();
			$data['sivun_sisalto']='asiakas/naytaAsiakkaat';
			$this->load->view('menu/sisalto', $data);
		}	

		public function LisaaAsiakas(){
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

		/*public function nayta_poistettavat(){
			$data['asiakas']=$this->Asiakas_model->naytaAsiakkaat();
			$data['sivun_sisalto']='asiakas/poistaAsiakas';
			$this->load->view('menu/sisalto', $data);
		}*/

		public function poistaAsiakas($id){
			$poista=$this->Asiakas_model->delAsiakas($id);
			if($poista>0){
				echo '<script>alert("Poisto onnistui")</script>';
				header("Location:" . site_url('asiakas/naytaAsiakkaat')); 

			}

			$data['asiakas']=$this->Asiakas_model->haeAsiakkaat();
			$data['sivun_sisalto']='asiakas/naytaAsiakkaat';
			$this->load->view('menu/sisalto', $data);
		}







		


}