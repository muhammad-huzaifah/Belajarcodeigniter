<?php

class Siswa_model extends CI_Model
{
	public function get_data() {
		$data_siswa = [
			["nama"=>"Budi", "kelas"=>"3MM1"],
			["nama"=>"Cika", "kelas"=>"3MM2"],
			["nama"=>"Dika", "kelas"=>"3MM1"]
		];
		return $data_siswa;
	}

}
