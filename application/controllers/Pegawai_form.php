<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_form extends CI_Controller
{
	public function index()
	{
		$this->load->view('vw_form');
	}

	public function save()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|min_length[5]|max_length[255]');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis kelamin', 'required');
		$this->form_validation->set_rules('agama', 'Agama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		if ($this->form_validation->run() == true)
		{
			$data['nama'] = $this->input->post('nama');
			$data['email'] = $this->input->post('email');
			$data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
			$data['agama'] = $this->input->post('agama');
			$data['alamat'] = $this->input->post('alamat');
			$this->load->view('vw_pegawai_form', $data);
		}
		else
		{
			$this->load->view('vw_form');
		}

	}
}
