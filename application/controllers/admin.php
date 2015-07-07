<?php


class admin extends CI_Controller
{

    function index()
    {

        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
        $users = $this->session->userdata('prop_login');
		
		
		
		
        if($users != "admin")
        {
            redirect("admin/login");
        }
        else
        {
            $this->load->view('admin/news_view');
        }
    }
    function login() {
        $this-> load-> helper('url');
        $this-> load-> helper('form');
        $this->load->library('session');
        $users = $this->session->userdata('prop_login');
        if ($users == "admin") {
            redirect("admin");
        } else {
            if ($this->input->server('REQUEST_METHOD') === 'POST') {
                $newdata = array(
                    'prop_login' =>  htmlspecialchars($this->input->post('login')),
                    'prop_password' =>  $this->input->post('password'),
                    'logged_in' => TRUE
                );
                $login = htmlspecialchars($this->input->post('login'));
                $password = $this->input->post('password');
                $query = $this->db->query("SELECT id FROM prop_users WHERE prop_login='".$this->db->escape_str($login)."'AND prop_password='".$this->db->escape_str($password)."'");
                $proverka = $query->num_rows();
                if(empty($proverka)) {
                    $data['error'] =  "Такого пользователя нет. Повторите попытку.";
                    $this->load->view('admin/login', $data);
//                    exit;
                } else {
                    $this->session->set_userdata($newdata);
                    redirect('main');
                }
            } else {
                $this->load->view('admin/login');
            }
        }
    }
    function logout() {
        $this->load->library('session');
        $this->session->sess_destroy();
        redirect("/");
    }
	
	function addnews()
		{
			$this-> load-> helper('url');
                $this-> load-> helper('form');
				$this->load->library('session');
		
			$namenews = $this->input->post('namenews');
			$shortnews = $this->input->post('shortnews');
			$textnews = $this->input->post('textnews');
			$shares = $this->input->post('shares');
			$directions = $this->input->post('directions');
			$who_help = $this->input->post('who_help');
			$images = $this->input->post('userfile');
			$login = $this->session->userdata('prop_login');
			$date = date("d.m.y"); 
			$newdata = array(
						   'prop_categorynews' => $shares,
						   'prop_namenews' =>  $namenews,
						   'prop_shortnews' =>  $shortnews,
						   'prop_images' =>  $images,
						   'prop_login' =>  $login,
						   'prop_text' =>  $textnews,
						   'prop_date' =>  $date,
					   );
					   
			$this->db->insert('prop_news',$newdata);
			redirect('addimages');
		}
		
		function deletenews($id = '')
		{
			$this-> load-> helper('url');
                $this-> load-> helper('form');
				$this->load->library('session');
				/*
					Здесь добавить удаление новостей. 
					1) Доавить кнопку или ссылку, а потом создать форму и перекидывать сюда.
				*/
		}
		
		
				
		
		

}
?>