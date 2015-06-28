<?php


	class main extends CI_Controller 
	{
		 public function index()
			{
                $data['title'] = "Сайт социального проекта | Главная";
                $data['controller_name'] = 'main';

//				$this->load->helper(array('form', 'url'));
//				$this->load->library('form_validation');
                $this->load->helper('html');
                $this->load->view('header', $data);
				$this->load->view('main_view', $data);

                $this->load->view('footer');
			}
        public function contact()
        {
            $data['title'] = "Сайт социального проекта | Контакты";
            $data['controller_name'] = 'contact';
            $this->load->helper('html');
            $this->load->view('header', $data);
            $this->load->view('main_view', $data);

            $this->load->view('footer');
        }
	}
?>