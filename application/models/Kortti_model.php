<?php
class Kortti_model extends CI_Model {

	public function haeKortit() {
		$this->db->select('*');
		$this->db->from('kortti');
		$this->db->join('tili', 'kortti.id_tili=tili.id_tili');
		$this->db->join('asiakas', 'tili.id_asiakas=asiakas.id_asiakas');
		return $this->db->get()->result_array();

	} 

		public function addKortti($lisaa_kortti) {
		$this->db->set($lisaa_kortti);
		$this->db->insert('kortti');
		$testi=$this->db->affected_rows();
		return $testi;
	}

	public function delKortti($id) {
		$this->db->where('id_kortti', $id);
		$this->db->delete('kortti');

		$testi=$this->db->affected_rows();
		return $testi;
	}



}