<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HitungPersegi extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('persegi');
	}

	function index()
	{
		$this->persegi->keliling('10');
		echo "<hr/>";
		$this->persegi->luas('10');
	}

}
