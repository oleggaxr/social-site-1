<?php


	class main extends CI_Controller 
	{
		 public function index()
			{
				$this->load->helper(array('form', 'url'));
				$this->load->library('form_validation'); 
				$this->load->view('main_view');
				
			}
	}
?>