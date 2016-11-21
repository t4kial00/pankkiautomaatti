<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Tili_model extends CI_Model {
		public function haeTilit(){
			$this->db->select('*');
			$this->db->from('tili');
			$this->db->join('asiakas', 'tili.id_asiakas=asiakas.id_asiakas');
			return $this->db->get()->result_array();
		}

		public function valitutTilit($id){
			$this->db->select('*');
			$this->db->from('tili');
			$this->db->where('id_asiakas', $id);
			return $this->db->get()->result_array();
		}

		public function addTili($lisaa_tili) {
		$this->db->set($lisaa_tili);
		$this->db->insert('tili');
		$testi=$this->db->affected_rows();
		return $testi;
		}

		public function delTili($id) {
			$this->db->where('id_tili', $id);
			$this->db->delete('tili');

			$testi=$this->db->affected_rows();
			return $testi;
		}






	}