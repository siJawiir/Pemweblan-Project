<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_detail extends CI_model{

    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('detail_transaksi')
                 ->order_by('id_detail', 'DESC')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {

        $query = $this->db->insert("detail_transaksi", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function edit($id_detail)
    {
       
        $query = $this->db->where("id_detail", $id_detail)
                ->get("detail_transaksi");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $id)
    {

        $query = $this->db->update("detail_transaksi", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($id)
    {

        $query = $this->db->delete("detail_transaksi", $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

}
