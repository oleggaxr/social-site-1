<?php
class benefactor extends CI_Controller
{

    private static $title_prefix = "Сайт социального проекта";

    public function to()
    {
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
        $data['title'] = self::$title_prefix . " | Пожертвовать";
        $data['controller_name'] = 'benefactor';

        $this->load->view('header', $data);
        $this->load->view('main_view', $data);
        $this->load->view('footer');
    }

    public function from()
    {
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
        $data['title'] = self::$title_prefix . " | Попросить помощи";
        $data['controller_name'] = 'benefactor';

        $this->load->view('header', $data);
        $this->load->view('main_view', $data);
        $this->load->view('footer');
    }

    public function be()
    {
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
        $data['title'] = self::$title_prefix . " | Стать добровольцем";
        $data['controller_name'] = 'benefactor';

        $this->load->view('header', $data);
        $this->load->view('main_view', $data);
        $this->load->view('footer');
    }

    public function pray()
    {	
		
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
        $data['title'] = self::$title_prefix . " | Помолиться";
        $data['controller_name'] = 'benefactor';

        $this->load->view('header', $data);
        $this->load->view('main_view', $data);
        $this->load->view('footer');
    }

    public function wishes()
    {

        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
        $data['title'] = self::$title_prefix . " | Просьбы о помощи";
        $data['controller_name'] = 'benefactor';

        $this->load->view('header', $data);
        $this->load->view('main_view', $data);
        $this->load->view('footer');
    }
}