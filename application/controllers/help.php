<?php
class help extends CI_Controller
{

    private static $title_prefix = "Сайт социального проекта";

    public function where()
    {

        $data['title'] = self::$title_prefix . " | Куда обратиться за помощью";
        $data['controller_name'] = 'help';

        $this->load->view('header', $data);
        $this->load->view('main_view', $data);
        $this->load->view('footer');
    }

    public function todo()
    {

        $data['title'] = self::$title_prefix . " | Что делать в трудной ситуации";
        $data['controller_name'] = 'help';

        $this->load->view('header', $data);
        $this->load->view('main_view', $data);
        $this->load->view('footer');
    }
    public function books()
    {

        $data['title'] = self::$title_prefix . " | Полезные книги";
        $data['controller_name'] = 'help';

        $this->load->view('header', $data);
        $this->load->view('main_view', $data);
        $this->load->view('footer');
    }
}