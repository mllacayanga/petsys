<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class petition extends CI_Controller{

public function index()
	{
		$this->load->view('header');
		$this->load->model('homeModel');
		$data['records'] = $this->homeModel->getData();
		$this->load->view('welcome', $data);

	}

public function register(){

		$this->load->view('header');
		$this->load->model('homeModel');
		$data['records'] = $this->homeModel->getData();
		$this->load->view('register', $data);

	}







public function validation(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name','Name','required|trim|is_unique[petitioners.name]');
		$this->form_validation->set_rules('location','Location','required');
		$this->form_validation->set_rules('contact','Contact info','required|is_unique[petitioners.contact]|callback_contact_check');
		$this->form_validation->set_rules('message','Message');

	if($this->form_validation->run()){
		$this->load->model('homeModel');
		if($this->homeModel->add_pet()){
			$this->load->view('header');
			$data['records'] = $this->homeModel->getData();
			$this->load->view('registered', $data);
		}
	

	}

		else{
		$this->load->view('header');
		$this->load->model('homeModel');
		$data['records'] = $this->homeModel->getData();
		$this->load->view('register', $data);
		}
		

	}

	public function countRow(){
		$this->load->view('header');
		$this->load->model('homeModel');
		$data['records'] = $this->homeModel->getCount();
		$this->load->view('welcome', $data);
	}
	

	public function contact_check($str)
        {
                if (!filter_var($str, FILTER_VALIDATE_EMAIL) === false)
                {
                        return true;
                }
                else if (preg_match('/(?:\(?\+\d{2}\)?\s*)?\d+(?:[ -]*\d+)*$/', $str))
                {
                        return TRUE;
                }else{
						$this->form_validation->set_message('contact_check', 'not valid email or number.');
               			return false;
               	}
        }

}
