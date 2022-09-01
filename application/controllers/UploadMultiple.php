<?php

class UploadMultiple extends CI_Controller
{
	function create()
	{
		$this->load->view('form_upload_multiple');
	}

	function proses()
	{
		$config['upload_path'] = './upload';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max-size'] = 500;
		$config['max-width'] = 2048;
		$config['max-height'] = 1000;
		$config['encrypt_name'] = true;
		$this->load->library('upload', $config);
		$keterangan_berkas = $this->input->post('keterangan_berkas');
		$jumlah_berkas = count($_FILES['berkas']['name']);
		for ($i = 0; $i < $jumlah_berkas; $i++)
		{
			if (!empty($_FILES['berkas']['name'][$i])){
				$_FILES['file']['name'] = $_FILES['berkas']['name'][$i];
				$_FILES['file']['type'] = $_FILES['berkas']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['berkas']['tmp_name'][$i];
				$_FILES['file']['error'] = $_FILES['berkas']['error'][$i];
				$_FILES['file']['size'] = $_FILES['berkas']['size'][$i];

				if ($this->upload->do_upload('file')){
					$uploadData = $this->upload->data();
					$data['nama_berkas'] = $uploadData['file_name'];
					$data['keterangan_berkas'] = $keterangan_berkas[$i];
					$data['tipe_berkas'] = $uploadData['file_ext'];
					$data['ukuran_berkas'] = $uploadData['file_size'];
					$this->db->insert('tb_berkas', $data);
				}
			}
		}
		redirect('uploadmultiple') ;
	}

	public function index()
	{
		$data['berkas'] = $this->db->get('tb_berkas');
		$this->load->view('tampil_berkas_multiple', $data);
	}

	function download($id)
	{
		$data = $this->db->get_where('tb_berkas',['kd_berkas'=>$id])->row();
		force_download('upload/'.$data->nama_berkas, 'berkas', NULL);
	}
}
