<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pelanggan extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('pelanggan_model'); 


    }
    public function index(){
        $data = array(
            'title' => 'Tabel Pelanggan',
            'data_pelanggan' => $this->pelanggan_model->get_all(),
        );
        $this->load->view('pelanggan/data_pelanggan',$data);
        }
        public function tambah(){
            $data = array(
                'title' => 'Tambah Data Pelanggan'
            );
            $this->load->view('pelanggan/tambah_pelanggan',$data);
        }
        public function simpan(){
        $data = array(

            'id_pelanggan'       => $this->input->post("id_pelanggan"),
            'nama_pelanggan'     => $this->input->post("nama_pelanggan"),
            'alamat'             => $this->input->post("alamat"),
            'no_hp'              => $this->input->post("no_hp")
        );

        $this->pelanggan_model->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('pelanggan/');

    }
    public function edit($id_pelanggan){
        $id_pelanggan = $this->uri->segment(3);

        $data = array(

            'title'          => 'Edit Data Pelanggan',
            'data_pelanggan' => $this->pelanggan_model->edit($id_pelanggan)

        );

        $this->load->view('pelanggan/edit_pelanggan', $data);
    }
    public function update()
    {
        $id['id_pelanggan'] = $this->input->post("id_pelanggan");
        $data = array(

            'id_pelanggan'       => $this->input->post("id_pelanggan"),
            'nama_pelanggan'     => $this->input->post("nama_pelanggan"),
            'alamat'             => $this->input->post("alamat"),
            'no_hp'              => $this->input->post("no_hp")
        );

        $this->pelanggan_model->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('pelanggan/');

    }

    public function hapus($id_pelanggan)
    {
        $id['id_pelanggan'] = $this->uri->segment(3);

        $this->pelanggan_model->hapus($id);

        //redirect
        redirect('pelanggan/');

    }
}
