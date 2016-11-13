<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tili extends CI_Controller {

	public function naytaTilit(){
		$this->load->model('Tili_model');
		$data['tili']=$this->Tili_model->haeTilit();
		$data['sivun_sisalto']='tili/naytaTilit';
		$this->load->view('menu/sisalto', $data);
	}	
}