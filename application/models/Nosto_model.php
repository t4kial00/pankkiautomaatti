<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Nosto_model extends CI_Model {

		public function haeNostot() {
			$this->db->select('*');
			$this->db->from('nosto');
			return $this->db->get()->result_array();
		} 
}