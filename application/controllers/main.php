<?php


	class main extends CI_Controller 
	{
		 public function index()
			{
                $data['title'] = "Сайт социального проекта | Главная";
                $data['controller_name'] = 'main';

				$this->load->helper(array('form', 'url'));
				$this->load->library('session');
                $this->load->helper('html');
                $this->load->view('header', $data);
                $this->load->view('donations_panel_horizontal', $data);
				$this->load->view('main_view', $data);

                $this->load->view('footer');
			}
        public function contact()
        {
			$this->load->helper(array('form', 'url'));
			$this->load->library('session');
            $data['title'] = "Сайт социального проекта | Контакты";
            $data['controller_name'] = 'contact';
            $this->load->helper('html');
            $this->load->view('header', $data);
            $this->load->view('main_view', $data);

            $this->load->view('footer');
        }
	}
?>