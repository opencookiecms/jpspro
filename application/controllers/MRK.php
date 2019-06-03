<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MRK extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		//Codeigniter : Write Less Do More
	    $this->load->helper('url');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model('Mrk_model');
		$this->load->model('Setting_model');

		//$this->load->model('Projek_model');
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('template/sidebar');
		$this->load->view('pages/mrk_dashboard');
		$this->load->view('template/footer');
	}
	/////////////////////////////////LOAD DATA MRK////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function getKonSearch()
	{
		if(isset($_GET['term'])){
			$result = $this->Mrk_model->getDataSearchkon($_GET['term']);
			if (count($result) > 0){
				foreach ($result as $row)
				$result_array[] = $row->konName;
				echo json_encode($result_array);

			}
		}
	}

	public function getKontraktorName()
	{
		$keyword=$this->input->post('keyword');
		$data=$this->Mrk_model->getDataKon($keyword);
		echo  json_encode ($data);
	}


	public function MRK_01($value="")
	{

		$this->load->database();
		$this->form_validation->set_rules('nopkk','No Pendaftaran PKK','required');
		$this->form_validation->set_message('namakon', 'My Error Message');  
		$this->form_validation->set_rules('nokon','No Sebutharga','required');
		$this->form_validation->set_rules('namakon','Kontraktor','required');
	
		if($this->form_validation->run() === FALSE)
		{

			$data['get_usersetting']=$this->Setting_model->get_Datasetting();
			$data['get_allkontraktor']=$this->Mrk_model->getAllDataKon();
			$data['get_detail']=$this->Mrk_model->get_projectdetailformrk01($value);
			$this->load->view('template/header');
			$this->load->view('template/nav');
			$this->load->view('template/sidebar');
			$this->load->view('pages/MRK01',$data);
			$this->load->view('template/footer');
			
		}
		else
		{
		  $lass = $this->input->post('hiddenid');
			$this->Mrk_model->create_mrksatu();//load from model and call last id
			$this->Mrk_model->create_kosprojek();
		
			$this->session->set_userdata('mrk01','Data MRK_01 berjaya disimpan');

			//redirect(base_url()."mrk/successmsg"./$lass); //redirect last id to another step
			redirect(base_url('mrk/MRK_01/'.$lass)); //redirect last id to another step
			
		}


	}

	//mrk 2
	public function MRK_02($value="")
	{

		//form validation
		$this->load->database();
		$lass = $this->input->post('hiddenid');
		$data['get_detail']=$this->Mrk_model->get_projectdetailformrk02($value);
		$this->form_validation->set_rules('nopkk', 'No Pendaftaran PKK', 'required');
		//remove session for success msg
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/header');
			$this->load->view('template/nav');
			$this->load->view('template/sidebar');
			$this->load->view('pages/MRK02',$data);
			$this->load->view('template/footer');
		}

		else
		{
			$this->Mrk_model->create_mrkdua();
			//set again new session when data was save and give the msg
			$this->session->set_userdata('mrk02','Data MRK_02 berjaya disimpan');
			redirect(base_url('mrk/MRK_02/'.$lass)); //redirect last id to another step
		}
	}


	public function LSK($value="")
	{
		$this->load->database();
	  $data['get_keypeople']=$this->Setting_model->get_Datasetting();
		$lass = $this->input->post('hiddensub');
		$data['get_detail']=$this->Mrk_model->get_projectdetailforLSK($value);
		$this->form_validation->set_rules('nopkk', 'No Pendaftaran PKK', 'required');


		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/header');
			$this->load->view('template/nav');
			$this->load->view('template/sidebar');
			$this->load->view('pages/LSK',$data);
			$this->load->view('template/footer');
		}
		else
		{
			$this->Mrk_model->create_laporansiapkerja();
		  $this->Mrk_model->update_kosprojek02($data ,$this->input->post('nosebut'));//load from model and call last id
			$this->session->set_userdata('lsk','Data Laporan Siap Kerja berjaya disimpan');
			redirect(base_url('mrk/LSK/'.$lass)); //redirect last id to another step
		}
	}

	public function MRK_03($value="")
	{
		$lass = $this->input->post('hiddenids');
		$this->load->database();
		$data['get_detail']=$this->Mrk_model->get_projectdetailforMRK03($value);
	//	$this->form_validation->set_rules('nokontr', 'No Pendaftaran PKK', 'required');
		$this->form_validation->set_rules('nopkk', 'Sila Isi No PKK', 'required');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/header');
			$this->load->view('template/nav');
			$this->load->view('template/sidebar');
			$this->load->view('pages/MRK03',$data);
			$this->load->view('template/footer');
		}
		else
		{
			$this->Mrk_model->create_mrktiga();
			$this->session->set_userdata('mrk03','Data MRK_03 berjaya disimpan');
			redirect(base_url('mrk/MRK_03/'.$lass)); //redirect last id to another step

		}


	}

	public function PSK($value="")
	{
		$lass = $this->input->post('hiddenids');
		$this->load->database();
		$data['get_detail']=$this->Mrk_model->get_projectdetailforPSK($value);
		$this->form_validation->set_rules('failrujuk', 'Fail Rujukan', 'required');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/header');
			$this->load->view('template/nav');
			$this->load->view('template/sidebar');
			$this->load->view('pages/PSK',$data);
			$this->load->view('template/footer');
		}
		else
		{
			$this->Mrk_model->create_perakusiap();
			$this->session->set_userdata('psk','Data Perakuan Siap Kerja berjaya disimpan');
			redirect(base_url('mrk/PSK/'.$lass)); //redirect last id to another step

		}
	}

	public function Senarai_Semak($value="")
	{
		$lass = $this->input->post('hiddenids');
		$this->load->database();
		$data['get_detail']=$this->Mrk_model->get_projectdetailforSS($value);

		$id = $this->input->post('hiddenid');
		echo $id;
		if($id == null)
		{
			$this->load->view('template/header');
			$this->load->view('template/nav');
			$this->load->view('template/sidebar');
			$this->load->view('pages/SS',$data);
			$this->load->view('template/footer');
		}
		else {
			$this->Mrk_model->create_ss();
			$this->session->set_userdata('ss','Data Senarai Semakan berjaya disimpan');
			redirect(base_url('mrk/Senarai_Semak/'.$lass)); //redirect last id to another step
		}

	}

	public function MRK_PSMK($value="")
	{
		$data['get_keypeople']=$this->Setting_model->get_Datasetting();
		$lass = $this->input->post('hiddenids');
		$this->load->database();
		$data['get_detail']=$this->Mrk_model->get_projectdetailforPSMK($value);
		$this->form_validation->set_rules('norujuk', 'No Rujukan', 'required');
		$this->form_validation->set_rules('nokontrak', 'No Kontrak', 'required');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/header');
			$this->load->view('template/nav');
			$this->load->view('template/sidebar');
			$this->load->view('pages/PSMK',$data);
			$this->load->view('template/footer');
		}
		else
		{
			$this->Mrk_model->create_siapbaiki();
			$this->session->set_userdata('psmk','Data Perakuan Siap Membaiki Kecatatan berjaya disimpan');
			redirect(base_url('mrk/MRK_PSMK/'.$lass)); //redirect last i
		}


	}


	public function Jaminan_Bank($value="")
	{
	  $lass = $this->input->post('hiddenids');
		$this->load->database();
		$data['get_detail']=$this->Mrk_model->get_projectdetailforJB($value);
		$this->form_validation->set_rules('rujukbank', 'Rujukan Bank', 'required');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/header');
			$this->load->view('template/nav');
			$this->load->view('template/sidebar');
			$this->load->view('pages/JBank',$data);
			$this->load->view('template/footer');
		}
		else
		{
			$this->Mrk_model->create_jaminanbank();
			$this->session->set_userdata('pjb','Data Pelepasan Jaminan Bank berjaya disimpan');
			redirect(base_url('mrk/Jaminan_Bank/'.$lass)); //redirect last i
		}
	}

	public function PP_WJP($value="")
	{
		$lass = $this->input->post('hiddenids');
		$this->load->database();
		$data['get_detail']=$this->Mrk_model->get_projectdetailforPPWJP($value);
		$data['get_keypeople']=$this->Setting_model->get_Datasetting();
		$this->form_validation->set_rules('nokon', 'No Sebutharga', 'required');

		if($this->form_validation->run()== FALSE)
		{
			$this->load->view('template/header');
			$this->load->view('template/nav');
			$this->load->view('template/sidebar');
			$this->load->view('pages/PP_WJP',$data);
			$this->load->view('template/footer');
		}
		else
		{
			$this->Mrk_model->create_ppwjp();
			$this->session->set_userdata('ppwjp','Data Perakuan Pemulangan Wang Jaminan Perlaksanaan berjaya disimpan');
			redirect(base_url('mrk/PP_WJP/'.$lass)); //redirect last i
		}

	}


	/////MRK AND OTHER UPDATE GOOSE HERE//////////////////////////////////////////////////////////////

	public function MRK_01_Update()
	{
		//form validation function
		$this->load->database();
		//$data['get_detail']=$this->Mrk_model->get_projekdetail($value);
		$this->form_validation->set_rules('nopkk', 'No Pendaftaran PKK', 'required');
		if($this->form_validation->run() == FALSE)

		{

			$this->load->view('template/header');
			$this->load->view('template/nav');
			$this->load->view('template/sidebar');
			$this->load->view('pages/MRK01');
			$this->load->view('template/footer');
		}
		else
		{
			$this->Mrk_model->mrk01update($data ,$this->input->post('nokon'));//load from model and call last id
		  $this->Mrk_model->update_kosprojek01($data ,$this->input->post('nokon'));//load from model and call last id
			//$KodVod=$this->Mrk_model->getLastKodVod();
			$id = $this->input->post('hiddenid');
			$this->session->set_userdata('mrk01','Data MRK_01 berjaya dikemaskini');
			redirect(base_url('mrk/MRK_01/'.$id)); //redirect last id to another step
		}

	}

	public function MRK_02_Update()
	{
		$this->load->database();
		$this->form_validation->set_rules('nopkk', 'No Pendaftaran PKK', 'required');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/header');
			$this->load->view('template/nav');
			$this->load->view('template/sidebar');
			$this->load->view('pages/MRK02');
			$this->load->view('template/footer');

		}

		else
		{
			$this->Mrk_model->mrk02update($data ,$this->input->post('mrksatuid'));
			$id = $this->input->post('hiddenid');
			$this->session->set_userdata('mrk02','Data MRK_02 berjaya dikemaskini');
			redirect(base_url('mrk/MRK_02/'.$id)); //redirect last id to another step
		}

	}

	public function LSK_Update()
	{
		$this->load->database();
		$this->form_validation->set_rules('nopkk', 'No Pendaftaran PKK', 'required');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/header');
			$this->load->view('template/nav');
			$this->load->view('template/sidebar');
			$this->load->view('pages/LSK');
			$this->load->view('template/footer');
		}
		else
		{
			$this->Mrk_model->LSKUpdate($data ,$this->input->post('hiddenid'));
		  $this->Mrk_model->update_kosprojek02($data ,$this->input->post('nosebut'));//load from model and call last id
			$id = $this->input->post('hiddensub');
			$this->session->set_userdata('lsk','Data Laporan Siap Kerja berjaya dikemaskini');
			redirect(base_url('mrk/LSK/'.$id)); //redirect last id to another step

		}

	}

	public function MRK_03_Update()
	{
		$lass = $this->input->post('hiddenids');
		$this->load->database();
		//$this->form_validation->set_rules('nokontr', 'No Pendaftaran PKK', 'required');
		$this->form_validation->set_rules('noinden', 'No Inden/Pesanan Tempatan', 'required');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/header');
			$this->load->view('template/nav');
			$this->load->view('template/sidebar');
			$this->load->view('pages/MRK03');
			$this->load->view('template/footer');
		}
		else
		{
			$this->Mrk_model->MRK3Update($data ,$this->input->post('hiddenid'));
			$this->session->set_userdata('mrk03','Data MRK_03 berjaya dikemaskini');
			redirect(base_url('mrk/MRK_03/'.$lass)); //redirect last i

		}

	}

	public function PSK_Update()
	{
		$this->load->database();
		$this->form_validation->set_rules('failrujuk', 'Fail Rujukan', 'required');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/header');
			$this->load->view('template/nav');
			$this->load->view('template/sidebar');
			$this->load->view('pages/PSK');
			$this->load->view('template/footer');
		}
		else
		{
			$this->Mrk_model->PSKUpdate($data ,$this->input->post('hiddenid'));

			$id = $this->input->post('hiddenids');
			$this->session->set_userdata('psk','Data Perakuan Siap Kerja berjaya dikemaskini');
			redirect(base_url('mrk/PSK/'.$id)); //redirect last id to another step

		}
	}

	public function PSMK_Update()
	{
		$this->load->database();
		$this->form_validation->set_rules('norujuk', 'No Rujukan', 'required');
		$this->form_validation->set_rules('nokontrak', 'No Kontrak', 'required');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/header');
			$this->load->view('template/nav');
			$this->load->view('template/sidebar');
			$this->load->view('pages/PSMK');
			$this->load->view('template/footer');
		}
		else
		{
			$this->Mrk_model->PSMKUpdate($data, $this->input->post('mrkid'));
			$id = $this->input->post('hiddenids');
			$this->session->set_userdata('psmk','Data Perakuan Siap Membaiki Kecatatan berjaya dikemaskini');
			redirect(base_url('mrk/MRK_PSMK/'.$id)); //redirect last id to another step
		}

	}

	public function JB_Update()
	{
		$this->load->database();
		$this->form_validation->set_rules('rujukbank', 'Rujukan Bank', 'required');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/header');
			$this->load->view('template/nav');
			$this->load->view('template/sidebar');
			$this->load->view('pages/JBank');
			$this->load->view('template/footer');
		}
		else
		{
			$this->Mrk_model->JBupdate($data, $this->input->post('hiddenid'));
			$id = $this->input->post('hiddenids');
			$this->session->set_userdata('pjb','Data Surat Pelepas Jaminan Bank dikemaskini');
			redirect(base_url('mrk/Jaminan_Bank/'.$id)); //redirect last id to another step
		}
	}

	public function PPWJP_Update()
	{
		$this->load->database();
		$this->form_validation->set_rules('namaborong', 'Nama pemborong diperlukan', 'required');

		if($this->form_validation->run()== FALSE)
		{
			$this->load->view('template/header');
			$this->load->view('template/nav');
			$this->load->view('template/sidebar');
			$this->load->view('pages/PP_WJP');
			$this->load->view('template/footer');
		}
		else
		{
			$this->Mrk_model->PPWJPupdate($data, $this->input->post('hiddenid'));
			$id = $this->input->post('hiddenids');
			$this->session->set_userdata('ppwjp','Data Perakuan Pemulangan WJP dikemaskini');
			redirect(base_url('mrk/PP_WJP/'.$id)); //redirect last id to another step
		}


	}

	public function SS_Update()
	{
		$this->load->database();
		$id = $this->input->post('hiddenid');
		echo $id;
		if($id == null)
		{
			$this->load->view('template/header');
			$this->load->view('template/nav');
			$this->load->view('template/sidebar');
			$this->load->view('pages/SS');
			$this->load->view('template/footer');
		}
		else {
			$this->Mrk_model->SSupdate($data, $this->input->post('hiddenid'));
			$id = $this->input->post('hiddenids');
			$this->session->set_userdata('ss','Data Senarai Semak berjaya dikemaskini');
			redirect(base_url('mrk/Senarai_Semak/'.$id)); //redirect last id to another step
		}


	}


	/////MRK AND OTHER UPDATE GOOSE HERE//////////////////////////////////////////////////////////////




	public function mrksatu_view()
	{

		$this->load->view('pages/mrksatu_view');

	}

	public function view_data($value="")
	{

		$this->load->database();
		$this->load->view('template/header');
		$this->load->view('template/nav');
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
