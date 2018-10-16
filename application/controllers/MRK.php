<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MRK extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
    //Codeigniter : Write Less Do More
		$this->load->model('Mrk_model');
    $this->load->helper('url');
         //$this->load->model('Projek_model');
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pages/mrk');
		$this->load->view('template/footer');
	}

	public function MRK_01($value="")
	{

  //form validation function
	  $this->load->database();
	  $data['get_detail']=$this->Mrk_model->get_projectdetailformrk($value);
		$this->form_validation->set_rules('nopkk', 'No Pendaftaran PKK', 'required');
		$this->form_validation->set_rules('nokon', 'No kontrak', 'required');
		$this->form_validation->set_rules('noinden', 'No Inden/Pesanan Tempatan', 'required');



				if($this->form_validation->run() == FALSE)

				{

					$this->load->view('template/header');
					$this->load->view('template/sidebar');
					$this->load->view('pages/MRK01',$data);
					$this->load->view('template/footer');
				}
				else
				{
						$this->Mrk_model->create_mrksatu();//load from model and call last id
						$KodVod=$this->Mrk_model->getLastKodVod();
						redirect(base_url('projek/view_data/'.$KodVod)); //redirect last id to another step
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
        }
    }

    public function try($value="")
    {


       $this->load->database();
         //$this->load->view('template/header');
         //$this->load->view('template/sidebar');
       $data['get_detail']=$this->Projek_model->get_projekdetail($value);
       $this->load->view('pages/try', $data);
        // $this->load->view('template/footer');
   }

   public function mrksatu_view()
   {

    $this->load->view('pages/mrksatu_view');

	 }

   public function view_data($value="")
   {

    $this->load->database();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $data['get_detail']=$this->Mrk_model->get_projekdetail($value);
    $this->load->view('pages/rekod2', $data);
    $this->load->view('template/footer');
   }


}
