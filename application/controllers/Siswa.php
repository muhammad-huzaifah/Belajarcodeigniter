<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Siswa_model');
        $this->load->helper('html');
	}

	public function index()
	{
		/* $data['nama'] = 'Taufik Hidayat';
		$data['kelas'] = '3MM1';
		$this->load->view('tampil_siswa', $data);*/

		/* $data ['siswa'] = [
			['nama'=>'Budi', 'kelas'=>'3MM1'],
			['nama'=>'Cika', 'kelas'=>'3MM2'],
			['nama'=>'Dika', 'kelas'=>'3MM1'],
		];
		$this->load->view('tampil_siswa', $data); */
		$data['siswa'] = $this->Siswa_model->get_data();
		$this->load->view('tampil_siswa', $data);
	}

	public function profil()
	{
		echo "ini adalah method profil pada controller Siswa";
	}
}
