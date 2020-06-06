<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas_Model extends CI_model{

    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('tb_kasir')
                 ->order_by('id_kasir', 'DESC')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {

        $query = $this->db->insert("tb_kasir", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function edit($id_kasir)
    {

        $query = $this->db->where("id_kasir", $id_kasir)
                ->get("tb_kasir");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $id)
    {

        $query = $this->db->update("tb_kasir", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($id)
    {

        $query = $this->db->delete("tb_kasir", $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

}