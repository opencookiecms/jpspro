<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class stepsatu extends CI_Controller {  
      
    public function index()  
    {  
        $this->load->view("insert_stepone_add");  
    }  
    function savingdata()  
    {  
        //this array is used to get fetch data from the view page.  
        $data = array(  
                        'nosebut'     => $this->input->post('nosebut'),  
                        'tarikhmohon'  => $this->input->post('tarikhmohon'),  
                        'jenissebut'   => $this->input->post('jenissebut'),  
                        'tajukprojek' => $this->input->post('tajukprojek')  
                        );  
        //insert data into database table.  
        $this->db->insert('stepsatu',$data);  
  
        redirect("stepsatu/index");  
    }  
}  
?>  