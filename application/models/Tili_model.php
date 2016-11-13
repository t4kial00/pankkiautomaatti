<?php
	class Tili_model extends CI_Model {
		public function haeTilit(){
			$this->db->select('id_tili, saldo, etunimi, sukunimi');
			$this->db->from('tili');
			$this->db->join('asiakas', 'tili.id_asiakas=asiakas.id_asiakas');
			return $this->db->get()->result_array();
		}
	}