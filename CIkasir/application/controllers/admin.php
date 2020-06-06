<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('model_admin'); 
        

    }

    public function index()
    {
        $data = array(

            'title'     => 'Tabel Admin',
            'data_admin' => $this->model_admin->get_all(),

        );

        $this->load->view('admin/data_admin', $data);
    }

    public function tambah()
    {
        $data = array(

            'title'     => 'Tambah Data admin'

        );

        $this->load->view('admin/tambah_admin', $data);
    }

    public function simpan()
    {
        $data = array(

            'id_admin'       => $this->input->post("id_admin"),
            'username'       => $this->input->post("username"),
            'email'          => $this->input->post("email"),
            'password'       => $this->input->post("password"),

        );

        $this->model_admin->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('admin/');

    }

    public function edit($id_admin)
    {
        $id_admin = $this->uri->segment(3);

        $data = array(

            'title'     => 'Edit Data admin',
            'data_admin' => $this->model_admin->edit($id_admin)

        );

        $this->load->view('admin/edit_admin', $data);
    }

    public function update()
    {
        $id['id_admin'] = $this->input->post("id_admin");
        $data = array(

            'id_admin'           => $this->input->post("id_admin"),
            'username'         => $this->input->post("username"),
            'email'    => $this->input->post("email"),
            'password'         => $this->input->post("password"),
        );

        $this->model_admin->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('admin/');

    }

    public function hapus($id_buku)
    {
        $id['id_admin'] = $this->uri->segment(3);

        $this->model_admin->hapus($id);

        //redirect
        redirect('admin/');

    }

}
