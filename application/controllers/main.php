<?php


	class main extends CI_Controller 
	{
		 public function index()
			{



                $this->load->model('wishes');
                $data['wishes'] = $this->wishes->getAllWishes();
                $data['title'] = "Сайт социального проекта | Главная";

//				$this->load->helper(array('form', 'url'));
//				$this->load->library('form_validation');
                $this->load->helper('html');
                $this->load->view('header', $data);
				$this->load->view('main_view', $data);

                $this->load->view('footer');
			}
	}
?>