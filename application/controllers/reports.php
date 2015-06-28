<?php
class reports extends CI_Controller
{

    private static $title_prefix = "Сайт социального проекта";

    public function financial()
    {

        $data['title'] = self::$title_prefix . " | Финансовые отчёты";
        $data['controller_name'] = 'reports';

        $this->load->view('header', $data);
        $this->load->view('main_view', $data);
        $this->load->view('footer');
    }
    public function helpto()
    {

        $data['title'] = self::$title_prefix . " | Кому помогли";
        $data['controller_name'] = 'reports';

        $this->load->view('header', $data);
        $this->load->view('main_view', $data);
        $this->load->view('footer');
    }
    public function helpfrom()
    {

        $data['title'] = self::$title_prefix . " | Кто помог";
        $data['controller_name'] = 'reports';

        $this->load->view('header', $data);
        $this->load->view('main_view', $data);
        $this->load->view('footer');
    }

}