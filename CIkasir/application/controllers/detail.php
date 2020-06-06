<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class detail extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('model_detail'); 
        

    }

    public function index()
    {
        $data = array(

            'title'     => 'Detail Transaksi',
            'data_detail' => $this->model_detail->get_all(),

        );

        $this->load->view('detail/data_detail', $data);
    }

    public function tambah()
    {
        $data = array(

            'title'     => 'Tambah Data detail'

        );

        $this->load->view('detail/tambah_detail', $data);
    }

    public function simpan()
    {
        $data = array(

            'id_detail'       => $this->input->post("id_detail"),
            'id_menu'         => $this->input->post("id_menu"),
            'id_transaksi'    => $this->input->post("id_transaksi"),
            'jumlah_item'     => $this->input->post("jumlah_item"),
            'harga'           => $this->input->post("harga")

        );

        $this->model_detail->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('detail/');

    }

    public function edit($id_detail)
    {
        $id_detail = $this->uri->segment(3);

        $data = array(

            'title'     => 'Edit Data Detail',
            'data_detail' => $this->model_detail->edit($id_detail)

        );

        $this->load->view('detail/edit_detail', $data);
    }

    public function update()
    {
        $id['id_detail'] = $this->input->post("id_detail");
        $data = array(

            'id_detail'           => $this->input->post("id_detail"),
            'id_menu'         => $this->input->post("id_menu"),
            'id_transaksi'    => $this->input->post("id_transaksi"),
            'jumlah_item'         => $this->input->post("jumlah_item"),
            'harga'         => $this->input->post("harga")
        );

        $this->model_detail->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('detail/');

    }

    public function hapus($id_buku)
    {
        $id['id_detail'] = $this->uri->segment(3);

        $this->model_detail->hapus($id);

        //redirect
        redirect('detail/');

    }

}
