<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jenis extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('jenis_model'); 


    }
    public function index(){
        $data = array(
            'title' => 'Tabel Jenis',
            'data_jenis' => $this->jenis_model->get_all(),
        );
        $this->load->view('jenis/data_jenis',$data);
        }
        public function tambah(){
            $data = array(
                'title' => 'Tambah Data Jenis'
            );
            $this->load->view('jenis/tambah_jenis',$data);
        }
        public function simpan(){
        $data = array(

            'id_jenis'       => $this->input->post("id_jenis"),
            'nama_jenis'     => $this->input->post("nama_jenis")
        );

        $this->jenis_model->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('jenis/');

    }
    public function edit($id_jenis){
        $id_jenis = $this->uri->segment(3);

        $data = array(

            'title'     => 'Edit Data Jenis',
            'data_jenis' => $this->jenis_model->edit($id_jenis)

        );

        $this->load->view('jenis/edit_jenis', $data);
    }
    public function update()
    {
        $id['id_jenis'] = $this->input->post("id_jenis");
        $data = array(

            'id_jenis'           => $this->input->post("id_jenis"),
            'nama_jenis'         => $this->input->post("nama_jenis")
        );

        $this->jenis_model->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('jenis/');

    }

    public function hapus($id_jenis)
    {
        $id['id_jenis'] = $this->uri->segment(3);

        $this->jenis_model->hapus($id);

        //redirect
        redirect('jenis/');

    }
}
