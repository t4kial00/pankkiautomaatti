<?php
class Asiakas_model extends CI_Model {

	public function haeAsiakkaat() {
		$this->db->select('*');
		$this->db->from('asiakas');
		return $this->db->get()->result_array();
	} 

		public function addAsiakas($lisaa_asiakas) {
		$this->db->set($lisaa_asiakas);
		$this->db->insert('asiakas');
		$testi=$this->db->affected_rows();
		return $testi;
	}

	public function delAsiakas($id) {
		//$this->db->where('id_asiakas', $id);
		//$this->db->delete('tili');

		$this->db->where('id_asiakas',$id);
		$this->db->delete('asiakas');

		//$this->db->where()		
		//$this->db->join('kortti', 'kortti.id_tili=tili.id_tili');
		$testi=$this->db->affected_rows();
		return $testi;
	}

	






}