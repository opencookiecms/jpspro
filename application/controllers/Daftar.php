<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller{

  public function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Projek_model');
    $this->load->model('Setting_model');

  }

  public function index()
  {

    $ss = $this->session->userdata("nama");
    $profile['get_sessionprofile'] = $this->Setting_model->getprofiledetails($ss);
    $data['get_count'] = $this->Setting_model->getcount();
    $data['get_list']=$this->Projek_model->listOrder();
      $data['get_projek']=$this->Projek_model->get_projekviewafter();
    $data['get_projeks']=$this->Projek_model->get_projekviewafterbydate();
    $this->load->view('template/header');
    $this->load->view('template/nav',$profile);
    $this->load->view('template/sidebar');
    $this->load->view('pages/daftar',$data);
    $this->load->view('template/footer');
  }


  public function senarai_tempahan()
  {
 
    $data['thistempahan'] = "Semua";
    $ss = $this->session->userdata("nama");
    $profile['get_sessionprofile'] = $this->Setting_model->getprofiledetails($ss);

    $data['get_list']=$this->Projek_model->listOrder();
    $this->load->view('template/header');
    $this->load->view('template/nav',$profile);
    $this->load->view('template/sidebar');
    $this->load->view('pages/senaraitempahan',$data);
    $this->load->view('template/footer');
  }

  public function senarai_tempahan_sebutharga()
  {

    $data['thistempahan'] = "Sebutharga";
    $ss = $this->session->userdata("nama");
    $profile['get_sessionprofile'] = $this->Setting_model->getprofiledetails($ss);
    $senaraitempahan = "Sebutharga";
    $data['get_list']=$this->Projek_model->listOrderbytempahan($senaraitempahan);
    $this->load->view('template/header');
    $this->load->view('template/nav',$profile);
    $this->load->view('template/sidebar');
    $this->load->view('pages/senaraitempahan',$data);
    $this->load->view('template/footer');
  }

  public function senarai_tempahan_lantikan_terus()
  {
    $data['thistempahan'] = "Lantikan";
    $ss = $this->session->userdata("nama");
    $profile['get_sessionprofile'] = $this->Setting_model->getprofiledetails($ss);
    $senaraitempahan = "Lantikan Terus";
    $data['get_list']=$this->Projek_model->listOrderbytempahan($senaraitempahan);
    $this->load->view('template/header');
    $this->load->view('template/nav',$profile);
    $this->load->view('template/sidebar');
    $this->load->view('pages/senaraitempahan',$data);
    $this->load->view('template/footer');
  }

  public function senarai_tempahan_undi()
  {
    $data['thistempahan'] = "Undi";
    $ss = $this->session->userdata("nama");
    $profile['get_sessionprofile'] = $this->Setting_model->getprofiledetails($ss);
    $senaraitempahan = "Undi";
    $data['get_list']=$this->Projek_model->listOrderbytempahan($senaraitempahan);
    $this->load->view('template/header');
    $this->load->view('template/nav',$profile);
    $this->load->view('template/sidebar');
    $this->load->view('pages/senaraitempahan',$data);
    $this->load->view('template/footer');
  }

  public function viewincon()
  {
     $data =$this->Projek_model->listOrder();
     foreach ($data as $da) {
        $datas= $da->no_sebutharga;
        $data2 = $da->no_pemilik;
     }

     echo $datas, $data2;
  }

     

  public function stepsatu()
  {
    $data['get_nosebutharga'] = $this->Projek_model->listOrder();
    $data['title'] = 'Maklumat Perolehan';
    //form validation function
    $this->form_validation->set_rules('nosebut','Sila Masukkan No Sebut Harga','required');
    $this->form_validation->set_rules('tarikhmohon','Tarikh Mohon','required');
    $this->form_validation->set_rules('jenissebut','Jenis Sebut','required');
    $this->form_validation->set_rules('nosebut','This values is not valid','is_unique[dp_projek.df_nosebutharga]');

    if($this->form_validation->run() === FALSE)

    {
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/stepone',$data);
      $this->load->view('template/footer');
    }

    else
    {
      $this->projek_model->create_stepone();//load from model and call last id
      $lastId=$this->projek_model->getLastid();
      redirect(base_url('daftar/stepdua/'.$lastId)); //redirect last id to another step
    }


  }

  public function stepdua($idvalue='')
  {
    $data['title'] = 'Maklumat Perolehan';
    $data['idval'] = $idvalue;
    $data['get_user']=$this->Setting_model->get_userdatasetting();
    $data['get_keypeople']=$this->Setting_model->get_Datasetting();

    echo $idvalue;

    $this->form_validation->set_rules('dp_idpost','must have one unique id','required');


    if($this->form_validation->run() === FALSE)
    {

      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/steptwo',$data);
      $this->load->view('template/footer');
    }
    else
    {

      $this->projek_model->create_steptwo();//load from model
      $lastId=$this->projek_model->getLastid();
      redirect(base_url('daftar/steptiga/'.$lastId ));
    }


  }

  public function steptiga($idvalue='')
  {

    $data['get_sungai'] = $this->Projek_model->getsungai();
    $data['get_sistem'] = $this->Projek_model->issistem();
    $data['title'] = 'Maklumat Perolehan';
    $data['idval'] = $idvalue;

    $this->form_validation->set_rules('dp_idpost','must have one unique id','required');


    if($this->form_validation->run() === FALSE)
    {
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/stepthree',$data);
      $this->load->view('template/footer');
    }
    else {
      $this->projek_model->create_stepthree();//load from model
      $lastId=$this->projek_model->getLastid();
      redirect(base_url('projek/Update_Projek01/'.$lastId));
    }

  }

  public function orderSebutharga()
  {
    $data['title'] = " Pendaftaran No. Perolehan";
    $data['get_user']=$this->Setting_model->get_userdatasetting();

    $this->form_validation->set_rules('nosebutharga','No Sebutharga / No Tempahan Diperlukan','required');

    if($this->form_validation->run()===FALSE)
    {
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/order',$data);
      $this->load->view('template/footer');
    }
    else{
      $this->projek_model->createOrder();
      redirect(base_url('projek/'));
    }

  }


  public function orderupdate($value="")
  {
    $data['title'] = "Kemaskini No. Perolehan";
    $data['get_user']=$this->Setting_model->get_userdatasetting();
    $this->form_validation->set_rules('nosebutharga','No Sebutharga / No Tempahan Diperlukan','required');
    $data['get_list']=$this->Projek_model->updateOrder($value);

    $id = $this->input->post('hiddenid');
    echo $id;
    if($id==null)
    {
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/orderupdate',$data);
      $this->load->view('template/footer');
    }
    else{
      $this->projek_model->getupdate($data ,$this->input->post('hiddenid'));
      $this->session->set_userdata('orderupdate','No Sebutharga berjaya dikemaskini');
      redirect(base_url('daftar/orderupdate/'.$id));
    }
  }

  public function orderdelete($value ="")
  {
     $this->projek_model->getdelete($value);
     redirect(base_url('daftar/senarai_tempahan/'.$id));
  }



  public function isSubsistem()
  {
    $sistem = $this->input->post('sis_id');
    if($sistem)
    {
      $isistem = $this->Projek_model->isubsistem($sistem);
      echo $isistem;
    } 
  }

  public function isComponent()
  {
    $subsistem = $this->input->post('sub_id');
    if($subsistem)
    {
      $issubsistem = $this->Projek_model->iscomponent($subsistem);
      echo $issubsistem;
    } 
  }

}
