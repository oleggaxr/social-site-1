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

        $data['title'] = self::$title_prefix . " | Добровольцы";
        $data['controller_name'] = 'projects';

        $this->load->view('header', $data);
        $this->load->view('main_view', $data);
        $this->load->view('footer');
    }

    public function sisterhood()
    {

        $data['title'] = self::$title_prefix . " | Сестричество";
        $data['controller_name'] = 'projects';

        $this->load->view('header', $data);
        $this->load->view('main_view', $data);
        $this->load->view('footer');
    }

    public function soberness()
    {

        $data['title'] = self::$title_prefix . " | Трезвость";
        $data['controller_name'] = 'projects';

        $this->load->view('header', $data);
        $this->load->view('main_view', $data);
        $this->load->view('footer');
    }
}