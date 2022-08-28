<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Upload extends CI_Controller
{
	function create()
	{
		$this->load->view('form_upload');
	}

	function proses()
	{
		$config['upload_path'] = './upload';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max-size'] = 100;
		$config['max-width'] = 1024;
		$config['max-height'] = 768;
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('berkas'))
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('form_upload', $error);
		}
		else
		{
			$data['nama_berkas'] = $this->upload->data('file_name');
			$data['keterangan_berkas'] = $this->input->post('keterangan_berkas');
			$data['tipe_berkas'] = $this->upload->data('file_ext');
			$data['ukuran_berkas'] = $this->upload->data('file_size');
			$this->db->insert('tb_berkas', $data);
			redirect('upload');
		}
	}

	public function index()
	{
		$data['berkas'] = $this->db->get('tb_berkas');
		$this->load->view('tampil_berkas', $data);
	}

	function download($id)
	{
		$data = $this->db->get_where('tb_berkas',['kd_berkas'=>$id])->row();
		force_download('upload/'.$data->nama_berkas,"download");
	}
}
