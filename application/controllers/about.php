<?php

    class about extends CI_Controller {
        public function department() {

            $data['title'] = "Сайт социального проекта | Отдел";

            $this->load->view('header', $data);
            $this->load->view('main_view', $data);
            $this->load->view('footer');
        }

    }