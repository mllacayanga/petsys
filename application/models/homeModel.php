<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomeModel extends CI_Model{

	public function getData(){

		$this->db->order_by("id", "desc");
		$query = $this->db->get('petitioners');
		return $query->result(); //returning an array 
	}

	public function add_pet(){

		$data = array(
			'name' =>$this->input->post('name'),
			'location' =>$this->input->post('location'),
			'contact' =>$this->input->post('contact'),
			'message' =>$this->input->post('message'),
			);

$query = $this->db->insert('petitioners', $data);

			if ($query){
				return true;
			}else{
				return false;
			}

	}




}