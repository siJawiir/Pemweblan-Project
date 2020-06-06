<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_Model extends CI_model{

    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('tb_jenis')
                 ->order_by('id_jenis', 'DESC')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {

        $query = $this->db->insert("tb_jenis", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function edit($id_jenis)
    {

        $query = $this->db->where("id_jenis", $id_jenis)
                ->get("tb_jenis");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $id)
    {

        $query = $this->db->update("tb_jenis", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($id)
    {

        $query = $this->db->delete("tb_jenis", $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

}