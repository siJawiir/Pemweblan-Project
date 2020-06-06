<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_menu extends CI_model{

    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('tb_menu')
                 ->order_by('id_menu', 'DESC')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {

        $query = $this->db->insert("tb_menu", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function edit($id_menu)
    {
       
        $query = $this->db->where("id_menu", $id_menu)
                ->get("tb_menu");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $id)
    {

        $query = $this->db->update("tb_menu", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($id)
    {

        $query = $this->db->delete("tb_menu", $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

}
