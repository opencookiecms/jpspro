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
	/////////////////////////////////LOAD DATA MRK////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function MRK_01($value="")
	{

		//form validation function
		$this->load->database();
		$data['get_detail']=$this->Mrk_model->get_projectdetailformrk01($value);
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


	//mrk 2
	public function MRK_02($value="")
	{

		//form validation
		$this->load->database();
		$data['get_detail']=$this->Mrk_model->get_projectdetailformrk02($value);
		$this->form_validation->set_rules('nopkk', 'No Pendaftaran PKK', 'required');


		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('pages/MRK02',$data);
			$this->load->view('template/footer');
		}

		else
		{
			$this->Mrk_model->create_mrkdua();
			$KodVod=$this->Mrk_model->getLastKodVodMRK2();
			redirect(base_url('projek/view_data/'.$KodVod)); //redirect last id to another step
		}
	}


	public function LSK($value="")
	{
		$this->load->database();
		$data['get_detail']=$this->Mrk_model->get_projectdetailforLSK($value);
		$this->form_validation->set_rules('nopkk', 'No Pendaftaran PKK', 'required');


		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('pages/LSK',$data);
			$this->load->view('template/footer');
		}
		else
		{
			$this->Mrk_model->create_laporansiapkerja();
			$KodVod=$this->Mrk_model->getLastKodVodLSK();
			redirect(base_url('projek/view_data/'.$KodVod)); //redirect last id to another step

		}



	}


	public function MRK_03($value="")
	{
		$this->load->database();
		$data['get_detail']=$this->Mrk_model->get_projectdetailforMRK03($value);
		$this->form_validation->set_rules('nokontr', 'No Pendaftaran PKK', 'required');
		$this->form_validation->set_rules('noinden', 'No Inden/Pesanan Tempatan', 'required');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('pages/MRK03',$data);
			$this->load->view('template/footer');
		}
		else
		{
			$this->Mrk_model->create_laporansiapkerja();
			$KodVod=$this->Mrk_model->getLastKodVodLSK();
			redirect(base_url('projek/view_data/'.$KodVod)); //redirect last id to another step

		}


	}




	public function PSK($value="")
	{
		$this->load->database();
		$data['get_detail']=$this->Mrk_model->get_projectdetailforPSK($value);
		$this->form_validation->set_rules('failrujuk', 'Fail Rujukan', 'required');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('pages/PSK',$data);
			$this->load->view('template/footer');
		}
		else
		{
			$this->Mrk_model->create_perakusiap();
			$KodVod=$this->Mrk_model->getLastKodVodPSK();
			redirect(base_url('projek/view_data/'.$KodVod)); //redirect last id to another step

		}


	}

	public function MRK_PSMK($value="")
	{
		$this->load->database();
		$data['get_detail']=$this->Mrk_model->get_projectdetailforPSMK($value);
		$this->form_validation->set_rules('norujuk', 'No Rujukan', 'required');
		$this->form_validation->set_rules('nokontrak', 'No Kontrak', 'required');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('pages/PSMK',$data);
			$this->load->view('template/footer');
		}
		else
		{
			$this->Mrk_model->create_siapbaiki();
			$KodVod=$this->Mrk_model->getLastKodVodPSK();
			redirect(base_url('projek/view_data/'.$KodVod)); //redirect last id to another step
		}


	}




	/////MRK AND OTHER UPDATE GOOSE HERE//////////////////////////////////////////////////////////////

		public function MRK_01_Update()
		{
			//form validation function
			$this->load->database();
			//$data['get_detail']=$this->Mrk_model->get_projekdetail($value);
			$this->form_validation->set_rules('nopkk', 'No Pendaftaran PKK', 'required');
			$this->form_validation->set_rules('nokon', 'No kontrak', 'required');
			$this->form_validation->set_rules('noinden', 'No Inden/Pesanan Tempatan', 'required');


			if($this->form_validation->run() == FALSE)

			{

				$this->load->view('template/header');
				$this->load->view('template/sidebar');
				$this->load->view('pages/MRK01');
				$this->load->view('template/footer');
			}
			else
			{
				$this->Mrk_model->mrk01update($data ,$this->input->post('nokon'));//load from model and call last id
				$KodVod=$this->Mrk_model->getLastKodVod();
				redirect(base_url('projek/view_data/'.$KodVod)); //redirect last id to another step
			}

        }

        public function MRK_02_Update()
        {
            $this->load->database();
            $this->form_validation->set_rules('nopkk', 'No Pendaftaran PKK', 'required');



            if($this->form_validation->run() == FALSE)
            {
                $this->load->view('template/header');
                $this->load->view('template/sidebar');
                $this->load->view('pages/MRK02');
                $this->load->view('template/footer');
            }

            else
            {
                $this->Mrk_model->mrk02update($data ,$this->input->post('mrksatuid'));
                $KodVod=$this->Mrk_model->getLastKodVodMRK2();
								redirect(base_url('projek/view_data/'.$KodVod)); //redirect last id to another step
			}

		}

		public function LSK_Update()
		{
			$this->load->database();
			$this->form_validation->set_rules('nopkk', 'No Pendaftaran PKK', 'required');

			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('template/header');
				$this->load->view('template/sidebar');
				$this->load->view('pages/LSK');
				$this->load->view('template/footer');
			}
			else
			{
				$this->Mrk_model->LSKUpdate($data ,$this->input->post('hiddenid'));
				$KodVod=$this->Mrk_model->getLastKodVodLSK();
				redirect(base_url('projek/view_data/'.$KodVod)); //redirect last id to another step

			}

		}


	/////MRK AND OTHER UPDATE GOOSE HERE//////////////////////////////////////////////////////////////


	public function Senarai_Semak()
	{



			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('pages/SS');
			$this->load->view('template/footer');

				$this->Mrk_model->create_ss();

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

	public function pulangwang()
	{

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pages/pulangwang');
		$this->load->view('template/footer');

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


	public function delete()
	{
		$this->load->model('Mrk_model');

		$id = $this->input->get('id');

		if($this->Mrk_model->deleteuser($id))
		{
			$data['get_projek']=$this->Mrk_model->get_rekodview();
			$this->load->view('pages/mrksatu_details', $data);
		}
	}




	/////end of update
}
