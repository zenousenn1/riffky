<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gudang extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url'); 
        $this->load->model('gudang_model');
        $this->load->library('form_validation');
    }
    public function index() {
        $data['gudang'] = $this->gudang_model->get_gudang();
        $this->load->view('gudang/index', $data);
    }
    public function tambah() {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
        $this->form_validation->set_rules('kapasitas', 'Kapasitas', 'required|numeric');
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('gudang/tambah');
        } else {
            $data = array(
                'nama' => $this->input->post('nama'),
                'lokasi' => $this->input->post('lokasi'),
                'kapasitas' => $this->input->post('kapasitas')
            );

            $this->gudang_model->tambah_gudang($data);
            redirect('gudang');
        }
    }
    public function edit($id) {
        $data['gudang'] = $this->gudang_model->get_gudang_by_id($id);
        if (empty($data['gudang'])) {
            show_404();
        }
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
        $this->form_validation->set_rules('kapasitas', 'Kapasitas', 'required|numeric');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('gudang/edit', $data);
        } else {
            $data = array(
                'nama' => $this->input->post('nama'),
                'lokasi' => $this->input->post('lokasi'),
                'kapasitas' => $this->input->post('kapasitas')
            );

            $this->gudang_model->update_gudang($id, $data);
            redirect('gudang');
        }
    }
    public function hapus($id) {
        $this->gudang_model->hapus_gudang($id);
        redirect('gudang');
    }
}

?>
