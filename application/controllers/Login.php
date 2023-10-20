<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$this->load->view('Login.php');
	}

	public function cetak(){
		$this->form_validation->set_rules('kdmenu', 'Kode Menu User',
        'required|min_length[3]', [
        'required' => 'Kode Harus diisi',
        'min_length' => 'Kode menu terlalu pendek'
        ]);
        $this->form_validation->set_rules('nmmenu', 'Nama Menu User',
        'required', [
        'required' => 'Nama Menu Harus diisi',
        ]);
        $this->form_validation->set_rules('harga', 'Harga',
        'required', [
        'required' => 'Harga Harus diisi',
        ]);
        $this->form_validation->set_rules('file', 'File',
        'required', [
        'required' => 'Gambar Harus diisi',
        ]);
        if ($this->form_validation->run() != true) {
            $this->load->view('Login');
        } else {
            $data = [
            'kdmenu' => $this->input->post('kdmenu'),
            'nmmenu' => $this->input->post('nmmenu'),
            'harga' => $this->input->post('harga'),
            'file' => $this->input->post('file')
            ];
            $this->load->view('view-login', $data);
        }
	}
}
