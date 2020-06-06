<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class petugas extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('petugas_model'); 


    }
    public function index(){
        $data = array(
            'title' => 'Tabel Petugas',
            'data_petugas' => $this->petugas_model->get_all(),
        );
        $this->load->view('petugas/data_petugas',$data);
        }
        public function tambah(){
            $data = array(
                'title' => 'Tambah Data Petugas'
            );
            $this->load->view('petugas/tambah_petugas',$data);
        }
        public function simpan(){
        $data = array(

            'id_kasir'       => $this->input->post("id_kasir"),
            'nama_kasir'     => $this->input->post("nama_kasir")
        );

        $this->petugas_model->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('petugas/');

    }
    public function edit($id_kasir){
        $id_transaksi = $this->uri->segment(3);

        $data = array(

            'title'     => 'Edit Data Petugas',
            'data_petugas' => $this->petugas_model->edit($id_kasir)

        );

        $this->load->view('petugas/edit_petugas', $data);
    }
    public function update()
    {
        $id['id_kasir'] = $this->input->post("id_kasir");
        $data = array(

            'id_kasir'           => $this->input->post("id_kasir"),
            'nama_kasir'         => $this->input->post("nama_kasir")
        );

        $this->petugas_model->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('petugas/');

    }

    public function hapus($id_kasir)
    {
        $id['id_kasir'] = $this->uri->segment(3);

        $this->petugas_model->hapus($id);

        //redirect
        redirect('petugas/');

    }
}
