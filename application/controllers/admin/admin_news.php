<?php


	class admin_news extends CI_Controller 
	{
		
		function index()
		{
				
				$this-> load-> helper('url');
                $this-> load-> helper('form');
				$this->load->library('session');
				$users = $this->session->userdata('prop_login');
						if($users != "admin")
						{
							redirect("main"); 
						}
						else
						{
							$this->load->view('admin/news_view');
						}
		}			 
	}
?>