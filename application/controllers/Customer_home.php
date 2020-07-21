<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_home extends CI_Controller {


	public function index()
	{
        $this->load->model('queries');
		$arts=$this->queries->allArts();
		$this->load->view('home',['arts'=>$arts]);
		
	}
    public function Login()
    {
        $this->load->view('login');
    }
    public function Register()
    {
        $this->load->view('register');
	}
	public function about_us()
    {
        $this->load->view('aboutUs');
    }
}
