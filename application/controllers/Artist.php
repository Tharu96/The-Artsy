<?php

class Artist extends CI_Controller
{
    public function index()
    {
        $this->load->model("add_model");
		$data["fetch_data"] = $this->add_model->fetch_data();
		$this->load->view("artist/home",$data);
    }
    

	public function add_view()
	{
		
		$this->load->model("add_model");
		$data["fetch_data"] = $this->add_model->fetch_data();
		$this->load->view("artist/home",$data);
		
	}
	
	public function form_validation(){
		

		$this->load->library('form_validation');
		$this->form_validation->set_rules("Artist_Name","Artist Name",'required');
		$this->form_validation->set_rules("Art_Name","Art Name",'required');
		$this->form_validation->set_rules("Category"," Category",'required');
		$this->form_validation->set_rules("Path"," Directory",'required');

		if($this->form_validation->run()){
			//true   
			$this->load->model("add_model");
			$data = array(
				"Artist_Name" =>$this->input->post("Artist_Name"),
				"Art_Name" =>$this->input->post("Art_Name"),
				"Category" =>$this->input->post("Category"),
				"Path" =>$this->input->post("Path")
			 );


		

				$config=array(
					'upload_path'=>'./artist_upload',
					'allowed_types'=>'gif|png|jpg|jpeg'
				);

			        $this->load->library('upload',$config);
					$this->form_validation->set_error_delimiters();
				if($this->upload->do_upload()){
					$data=$this->input->post();

					$info=$this->upload->data();
					//echo '<pre>';
					//print_r($info);
					//echo '</prev>';
					$image_path=($info['raw_name'].$info['file_ext']);
					
					//print_r($image_path);
					//exit();
					
					$data['Path' ]=$image_path;
					unset($data['submit']);
					$this->load->model('add_model');
					if($this->add_model->insert_art($data)){
						echo 'Image upload Successfully';
					}
					else{
					  echo 'Failed to add Image';
					}
					exit();
				} 

			if($this->input->post("update")){

				$this->add_model->update_data($data, $this->input->post("hidden_id"));
				redirect('Artist/updated');
			}

				

			if($this->input->post("insert")){
				$this->add_model->insert_art($data);
				redirect('Artist/inserted');
			}
				
			    $this->add_model->insert_art($data);
				redirect('Artist/inserted');
		}
		else{
			$this->add_view();
		}
	}

	public function inserted(){

		$this->add_view();
	}

	public function delete_data(){
		$Art_Id = $this->uri->segment(3);
		$this->load->model("add_model");
		$this->add_model->delete_data($Art_Id);
		redirect('Artist/deleted');
	}

	public function deleted(){
		$this->add_view();
	}

	public function update_data(){
		$user_id = $this->uri->segment(3);
		$this->load->model("add_model");
		$data["user_data"] = $this->add_model->fetch_single_data($user_id);
		$data["fetch_data"] = $this->add_model->fetch_data();
		$this->load->view("artist/home",$data);

	}

	public function updated(){
		$this->add_view();
	}

}
?>
