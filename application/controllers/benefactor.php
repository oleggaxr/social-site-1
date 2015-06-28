<?php
class benefactor extends CI_Controller
{

    private static $title_prefix = "Сайт социального проекта";

    public function to()
    {

        $data['title'] = self::$title_prefix . " | Пожертвовать";
        $data['controller_name'] = 'benefactor';

        $this->load->view('header', $data);
        $this->load->view('main_view', $data);
        $this->load->view('footer');
    }

    public function from()
    {

        $data['title'] = self::$title_prefix . " | Попросить помощи";
        $data['controller_name'] = 'benefactor';

        $this->load->view('header', $data);
        $this->load->view('main_view', $data);
        $this->load->view('footer');
    }

    public function be()
    {

        $data['title'] = self::$title_prefix . " | Стать добровольцем";
        $data['controller_name'] = 'benefactor';

        $this->load->view('header', $data);
        $this->load->view('main_view', $data);
        $this->load->view('footer');
    }

    public function pray()
    {

        $data['title'] = self::$title_prefix . " | Помолиться";
        $data['controller_name'] = 'benefactor';

        $this->load->view('header', $data);
        $this->load->view('main_view', $data);
        $this->load->view('footer');
    }
}