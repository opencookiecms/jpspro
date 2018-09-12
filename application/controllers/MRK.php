<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MRK extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
    //Codeigniter : Write Less Do More
	}

	function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pages/mrk');
		$this->load->view('template/footer');
	}

	public function rekodkerja(){
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pages/rekod');
		$this->load->view('template/footer');
	}

	public function rekodkerjadua(){
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pages/rekod2');
		$this->load->view('template/footer');
	}

	public function laporansiapkerja(){
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pages/laporansiap');
		$this->load->view('template/footer');
	}

	public function rekodkerjatiga(){
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pages/rekod3');
		$this->load->view('template/footer');
	}

	public function perakuansiapkerja(){
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pages/perakuansiap');
		$this->load->view('template/footer');
	}

	public function senaraisemak(){
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pages/semak');
		$this->load->view('template/footer');
	}

	public function siapbaiki(){
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pages/perakusiapbaiki');
		$this->load->view('template/footer');
	}

	public function jaminanbank(){
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pages/jaminanbank');
		$this->load->view('template/footer');
	}

}
