<?php
class media extends CI_Controller
{

    private static $title_prefix = "Сайт социального проекта";

    public function about()
    {

        $data['title'] = self::$title_prefix . " | СМИ о нас";
        $data['controller_name'] = 'media';

        $this->load->view('header', $data);
        $this->load->view('main_view', $data);
        $this->load->view('footer');
    }

    public function photo()
    {

        $data['title'] = self::$title_prefix . " | Фото";
        $data['controller_name'] = 'media';

        $this->load->view('header', $data);
        $this->load->view('main_view', $data);
        $this->load->view('footer');
    }

    public function video()
    {

        $data['title'] = self::$title_prefix . " | Видео";
        $data['controller_name'] = 'media';

        $this->load->view('header', $data);
        $this->load->view('main_view', $data);
        $this->load->view('footer');
    }

    public function results()
    {

        $data['title'] = self::$title_prefix . " | Работы подопечных";
        $data['controller_name'] = 'media';

        $this->load->view('header', $data);
        $this->load->view('main_view', $data);
        $this->load->view('footer');
    }
}