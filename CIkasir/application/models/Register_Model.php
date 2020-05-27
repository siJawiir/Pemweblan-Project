<?php
class Register_Model extends CI_Model {

	public function insert_entry($data)
    {
		$this->db->insert('tb_admin', $data);
	}
}
?>