<?php
class projects extends CI_Controller
{

    private static $title_prefix = "Сайт социального проекта";

    public function cpm()
    {
		
        $data['title'] = self::$title_prefix . " | Центр поддержки материнства";
        $data['controller_name'] = 'projects';

        $this->load->view('header', $data);
        $this->load->view('main_view', $data);
        $this->load->view('footer');
    }

    public function volunteers()
    {
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
        $data['title'] = self::$title_prefix . " | Добровольцы";
        $data['controller_name'] = 'projects';

        $this->load->view('header', $data);
        $this->load->view('main_view', $data);
        $this->load->view('footer');
    }

    public function sisterhood()
    {
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
        $data['title'] = self::$title_prefix . " | Сестричество";
        $data['controller_name'] = 'projects';

        $this->load->view('header', $data);
        $this->load->view('main_view', $data);
        $this->load->view('footer');
    }

    public function soberness()
    {
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
        $data['title'] = self::$title_prefix . " | Трезвость";
        $data['controller_name'] = 'projects';

        $this->load->view('header', $data);
        $this->load->view('main_view', $data);
        $this->load->view('footer');
    }
}