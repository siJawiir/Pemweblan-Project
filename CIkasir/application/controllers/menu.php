<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class menu extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('model_menu'); 
        

    }

    public function index()
    {
        $data = array(

            'title'     => 'Tabel menu',
            'data_menu' => $this->model_menu->get_all(),

        );

        $this->load->view('menu/data_menu', $data);
    }

    public function tambah()
    {
        $data = array(

            'title'     => 'Tambah Data menu'

        );

        $this->load->view('menu/tambah_menu', $data);
    }

    public function simpan()
    {
        $data = array(

            'id_menu'       => $this->input->post("id_menu"),
            'nama_menu'       => $this->input->post("nama_menu"),
            'harga_menu'          => $this->input->post("harga_menu"),
            'id_jenis'       => $this->input->post("id_jenis"),

        );

        $this->model_menu->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('menu/');

    }

    public function edit($id_menu)
    {
        $id_menu = $this->uri->segment(3);

        $data = array(

            'title'     => 'Edit Data menu',
            'data_menu' => $this->model_menu->edit($id_menu)

        );

        $this->load->view('menu/edit_menu', $data);
    }

    public function update()
    {
        $id['id_menu'] = $this->input->post("id_menu");
        $data = array(

            'id_menu'           => $this->input->post("id_menu"),
            'nama_menu'         => $this->input->post("nama_menu"),
            'harga_menu'    => $this->input->post("harga_menu"),
            'id_jenis'         => $this->input->post("id_jenis"),
        );

        $this->model_menu->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('menu/');

    }

    public function hapus($id_buku)
    {
        $id['id_menu'] = $this->uri->segment(3);

        $this->model_menu->hapus($id);

        //redirect
        redirect('menu/');

    }

}
