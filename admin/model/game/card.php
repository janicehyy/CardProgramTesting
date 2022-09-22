<?php
class ModelGameCard extends Model {

	public function deleteCard($card_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "card WHERE card_id = '" . (int)$card_id . "'");
	}

	public function getCards($data = array()) {
		$implode = array();

		$sql = "SELECT * FROM " . DB_PREFIX . "card";

		$implode = array();

		if (!empty($data['filter_date_added'])) {
			$implode[] = "DATE(date_added) = '" . $this->db->escape($data['filter_date_added']) . "'";
		}

		if ($implode) {
			$sql .= " WHERE " . implode(" AND ", $implode);
		}

		$sort_data = array(
			'no_people',
			'date_added',
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY date_added";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getTotalCards($data = array()) {
		$sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "card";

		$implode = array();

		if (!empty($data['filter_date_added'])) {
			$implode[] = "DATE(date_added) = '" . $this->db->escape($data['filter_date_added']) . "'";
		}

		if ($implode) {
			$sql .= " WHERE " . implode(" AND ", $implode);
		}

		$query = $this->db->query($sql);

		return $query->row['total'];
	}
}