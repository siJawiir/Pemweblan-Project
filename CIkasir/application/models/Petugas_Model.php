<?php
class Petugas_Model extends CI_Model {

	public function get_all()
        {
			$query = $this->db->get('tb_admin');
			return $query;
		}
		
}
?>