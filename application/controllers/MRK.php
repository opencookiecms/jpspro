<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MRK extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
    //Codeigniter : Write Less Do More
		$this->load->model('Mrk_model');
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pages/mrk');
		$this->load->view('template/footer');
	}

	public function rekodkerja()
	{

  //form validation function
		$this->form_validation->set_rules('nopkk', 'No Pendaftaran PKK', 'required');
		$this->form_validation->set_rules('nokon', 'No kontrak', 'required');
		$this->form_validation->set_rules('noinden', 'No Inden/Pesanan Tempatan', 'required');

		if($this->form_validation->run() == FALSE)

		{
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('pages/rekod');
			$this->load->view('template/footer');
		}
		else
		{

        	$this->Mrk_model->create_mrksatu();//load from model and call last id
        	$lastId=$this->Mrk_model->getLastid();
        	redirect(base_url('mrk/rekodkerjadua/'.$lastId)); //redirect last id to another step
        }


    }

    public function rekodkerjadua()
    {

    	//form validation
        $this->form_validation->set_rules('nopkk', 'No Pendaftaran PKK', 'required');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('pages/rekod2');
            $this->load->view('template/footer');
        }

        else
        {
            $this->Mrk_model->create_mrkdua();
            $lastId=$this->Mrk_model->getLastid();
            redirect(base_url('mrk/laporansiapkerja/'.$lastId));
        }

        

    }

    public function laporansiapkerja()
    {
    	$this->form_validation->set_rules('nopkk', 'No Pendaftaran PKK', 'required');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('pages/laporansiap');
            $this->load->view('template/footer');
        }
        else
        {
            $this->Mrk_model->create_laporansiapkerja();
            $lastId=$this->Mrk_model->getLastid();
            redirect(base_url('mrk/rekodkerjatiga/'.$lastId));
        }

        
    }

    public function rekodkerjatiga()
    {
    	$this->form_validation->set_rules('nokontr', 'No Pendaftaran PKK', 'required');
        $this->form_validation->set_rules('noinden', 'No Inden/Pesanan Tempatan', 'required');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('pages/rekod3');
            $this->load->view('template/footer');
        }
        else
        {
            $this->Mrk_model->create_mrktiga();
            $lastId=$this->Mrk_model->getLastid();
            redirect(base_url('mrk/perakuansiapkerja/'.$lastId));
        }

        
    }

    public function perakuansiapkerja()
    {
    	$this->form_validation->set_rules('failrujuk', 'Fail Rujukan', 'required');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('pages/perakuansiap');
            $this->load->view('template/footer');
        }
        else
        {
            $this->Mrk_model->create_perakusiap();
            $lastId=$this->Mrk_model->getLastid();
            redirect(base_url('mrk/senaraisemak/'.$lastId));
        }

        
    }

    public function senaraisemak()
    {
    	$this->load->view('template/header');
    	$this->load->view('template/sidebar');
    	$this->load->view('pages/semak');
    	$this->load->view('template/footer');
    }

    public function siapbaiki()
    {
    	$this->form_validation->set_rules('norujuk', 'No Rujukan', 'required');
        $this->form_validation->set_rules('nokontrak', 'No Kontrak', 'required');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('pages/perakusiapbaiki');
            $this->load->view('template/footer');
        }
        else
        {
            $this->Mrk_model->create_siapbaiki();
            $lastId=$this->Mrk_model->getLastid();
            redirect(base_url('mrk/jaminanbank/'.$lastId));
        }

        
    }

    public function jaminanbank()
    {
    	$this->form_validation->set_rules('rujukbank', 'Rujukan Bank', 'required');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('pages/jaminanbank');
            $this->load->view('template/footer');
        }
        else
        {
            $this->Mrk_model->create_jaminanbank();
            $lastId=$this->Mrk_model->getLastid();
            redirect(base_url('mrk'));
        }
    }

    


}