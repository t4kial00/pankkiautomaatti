<?php
class Asiakas_model extends CI_Model {

	public function haeAsiakkaat() {
		$this->db->select('id_asiakas,etunimi,sukunimi,osoite, postinumero, postitoimipaikka, puhelinnumero, email');
		$this->db->from('asiakas');
		return $this->db->get()->result_array();
	} 
}