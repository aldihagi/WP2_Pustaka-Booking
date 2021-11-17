<?php
defined('BASEPATH') or exit('No direct script allowed');

class Sepatu extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Model_Sepatu1');
  }
  public function index()
  { 
    $this->form_validation->set_rules('nama', 'Nama Pembeli', 'required', [
      'required' => 'Nama Pembeli harus diisi!!'
    ]);
    $this->form_validation->set_rules('nohp', 'No HP', 'required', [
      'required' => 'No HP harus diisi!!'
    ]);

    if($this->form_validation->run() == FALSE) {
      $data['merk'] = ['Nike', 'Adidas', 'Kickers', 'Eiger', 'Bucherri'];
      $this->load->view('v_sepatu', $data);
    } else {
      $data = [
        'nama' => $this->input->post('nama'),
        'nohp' => $this->input->post('nohp'),
        'merk' => $this->input->post('merk'),
        'ukuran' => $this->input->post('ukuran'),
        'harga' => $this->Model_Sepatu1->proses($this->input->post('merk'))
      ];
      $this->load->view('v_hasil_pesan', $data);
    }
  }
}