<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artist_manage_C extends CI_Controller {

	//this functin show the all the data of the artist on the data base
    public function index()
    {
        $this->load->model('Artist_manage_M');
        $result['data'] =$this->Artist_manage_M->view();
        $this->load->view('admin/artist_manage/header');
        $this->load->view('admin/artist_manage/Viewall_artistdata',$result);
    
    }

//add artist data to the database

    public function insert(){

//validate the data
        $this->form_validation->set_rules('firstname', 'firstname', 'trim|required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('secondname', 'secondname', 'trim|required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[artist_details.email]');

        if($this->form_validation->run()==FALSE){

            $this->load->view('admin/artist_manage/header');
            $this->load->view('admin/artist_manage/add_artist');



        }else{
//get the data from the artist form and load the model to insert to data base   
        $data=array(
            "firstname"=>$_POST['firstname'],
            "secondname"=>$this->input->post('secondname'),
            "email"=>$_POST['email'],
            "address"=>$this->input->post('address'),
            "nic"=>$this->input->post('nic'),
            "gender"=>$this->input->post('gender'),
            "birthday"=>$this->input->post('birthday'),
            "BAN"=>$this->input->post('BAN')
        );
        $this->load->model('Artist_manage_M');
// after the insert site redirect to the main artist management page 
        $is_true=$this->Artist_manage_M->insert($data);
        if ($is_true== true){
            redirect(base_url('index.php/Artist_manage_C'));
        }

    }

    }

//after the update the details of artist ,update form calls the this function and this function calls  'update' function in the 
//model part and do the changes in the database
// after the update redirect to the main view on artist management
    public function update (){
     
        $data = array(
            "id" =>$_POST['id'],
            "firstname"=>$_POST['firstname'],
            "secondname"=>$this->input->post('secondname'),
            "email"=>$_POST['email'],
            "address"=>$this->input->post('address')

        );

        $this->load->model('Artist_manage_M');
       $is_true= $this->Artist_manage_M->update($data);
        if ($is_true== true){ 
            redirect(base_url('index.php/Artist_manage_C'));
        }

    }

// delete the artist data
    public function delete($S){
      
        
        $this->load->model('Artist_manage_M');
        $is_true=$this->Artist_manage_M->delete($S);
        if ($is_true== true){ 
            redirect(base_url('index.php/Artist_manage_C'));
        }

        
    }

  
// after clicking add artist button this function calls the form for add artist
    public function to_insert(){

        $this->load->view('admin/artist_manage/header');
  
         $this->load->view('admin/artist_manage/add_artist');
        

    }
//when we are updating the form we want to see data that stored in the data base and this function do the job
    public function viewperson($S){
            $this->load->view('admin/artist_manage/header');
            $this->load->model('Artist_manage_M');
            $result['data'] =$this->Artist_manage_M->viewperson1($S);
            $this->load->view('admin/artist_manage/Update_artist',$result);
           
    }

  

  
    
}
?>
