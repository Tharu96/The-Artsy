<?php
class Login extends CI_Controller
{
    public function LoginUser()
    {
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run()==FALSE)
        {
			$this->load->view('Login');
        }
        else
        {
            $this->load->model('Model_user');
            $result=$this->Model_user->Loginuser();

            if($result != FALSE)
            {
                $user_data = array(
                    'user_id'=>$result->id,
                    'fname'=>$result->fname,
                    'lname'=>$result->lname,
                    'email'=>$result->email,
                    'type'=>$result->type,
                    'loggedin'=>TRUE
                );
                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('welcome','WELCOME');
                if($result->type=='admin')
                {

                    redirect('Admin');
                }
                else if($result->type=='customer')
                {
                    redirect('Customer');
				}
				else if($result->type=='artist')
                {
                    redirect('Artist');
                }
            }
            else
            {
                $this->session->set_flashdata('errmsg','wrong email and password');
                redirect('Customer_home/Login');
            }
        }
    }
    public function Logoutuser()
    {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('fname');
        $this->session->unset_userdata('lname');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('loggedin');

        redirect('Customer_home/Login');

    }
}
