<?php
class ModelPlayGame extends Model {
	
	public function addCard($no_people, $cards) {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "card` SET no_people = '" . (int)$no_people . "', card = '" . $cards . "', date_added = NOW()");
		
		return;
	}
		
}