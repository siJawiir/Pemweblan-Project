<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class transaksi extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('model_transaksi'); 
        

    }

    public function index()
    {
        $data = array(

            'title'     => 'Tabel Transaksi',
            'data_transaksi' => $this->model_transaksi->get_all(),

        );

        $this->load->view('transaksi/data_transaksi', $data);
    }

    public function tambah()
    {
        $data = array(

            'title'     => 'Tambah Data Transaksi'

        );

        $this->load->view('transaksi/tambah_transaksi', $data);
    }

    public function simpan()
    {
        $data = array(

            'id_transaksi'       => $this->input->post("id_transaksi"),
            'tgl_transaksi'         => $this->input->post("tgl_transaksi"),
            'nama_menu'    => $this->input->post("nama_menu"),
            'total_harga'         => $this->input->post("total_harga"),
            'id_kasir'         => $this->input->post("id_kasir"),
            'id_pelanggan'         => $this->input->post("id_pelanggan")

        );

        $this->model_transaksi->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('transaksi/');

    }

    public function edit($id_transaksi)
    {
        $id_transaksi = $this->uri->segment(3);

        $data = array(

            'title'     => 'Edit Data Transaksi',
            'data_transaksi' => $this->model_transaksi->edit($id_transaksi)

        );

        $this->load->view('transaksi/edit_transaksi', $data);
    }

    public function update()
    {
        $id['id_transaksi'] = $this->input->post("id_transaksi");
        $data = array(

            'id_transaksi'           => $this->input->post("id_transaksi"),
            'tgl_transaksi'         => $this->input->post("tgl_transaksi"),
            'nama_menu'    => $this->input->post("nama_menu"),
            'total_harga'         => $this->input->post("total_harga"),
            'id_kasir'         => $this->input->post("id_kasir"),
            'id_pelanggan'         => $this->input->post("id_pelanggan")
        );

        $this->model_transaksi->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('transaksi/');

    }

    public function hapus($id_buku)
    {
        $id['id_transaksi'] = $this->uri->segment(3);

        $this->model_transaksi->hapus($id);

        //redirect
        redirect('transaksi/');

    }

}
