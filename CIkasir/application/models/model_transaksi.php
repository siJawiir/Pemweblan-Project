<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_transaksi extends CI_model{

    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('tb_transaksi')
                 ->order_by('id_transaksi', 'DESC')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {

        $query = $this->db->insert("tb_transaksi", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function edit($id_transaksi)
    {
       
        $query = $this->db->where("id_transaksi", $id_transaksi)
                ->get("tb_transaksi");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $id)
    {

        $query = $this->db->update("tb_transaksi", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($id)
    {

        $query = $this->db->delete("tb_transaksi", $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

}
