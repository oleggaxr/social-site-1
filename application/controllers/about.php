<?php

    class about extends CI_Controller {

        private static $title_prefix = "Сайт социального проекта";
        public function department() {
			$this->load->helper(array('form', 'url'));
			$this->load->library('session');
            $data['title'] = self::$title_prefix." | Отдел";
            $data['controller_name'] = 'about';

            $this->load->view('header', $data);
            $this->load->view('donations_panel_vertical', $data);
            $this->load->view('main_view', $data);
            $this->load->view('footer');
        }

        public function worship() {
			$this->load->helper(array('form', 'url'));
			$this->load->library('session');
            $data['title'] = self::$title_prefix." | Служба";
            $data['controller_name'] = 'about';

            $this->load->view('header', $data);
            $this->load->view('donations_panel_vertical', $data);
            $this->load->view('main_view', $data);
            $this->load->view('footer');
        }
        public function documents() {
			$this->load->helper(array('form', 'url'));
			$this->load->library('session');
            $data['title'] = self::$title_prefix." | Документы";
            $data['controller_name'] = 'about';

            $this->load->view('header', $data);
            $this->load->view('donations_panel_vertical', $data);
            $this->load->view('main_view', $data);
            $this->load->view('footer');
        }
    }