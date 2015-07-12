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
            $data['section'] = "news";
            $this->load->view('admin/header', $data);
            $this->load->view('admin/news_add');
            $this->load->view('admin/news_view');
            $this->load->view('admin/footer');
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
                $password = md5($this->input->post('password'));
                $query = $this->db->query("SELECT id FROM prop_users WHERE prop_login='".$this->db->escape_str($login)."'AND prop_password='".$this->db->escape_str($password)."'");
                $proverka = $query->num_rows();
                if(empty($proverka)) {
                    $data['error'] =  "Такого пользователя нет. Повторите попытку.";
                    $this->load->view('admin/login', $data);
//                    exit;
                } else {
                    $this->session->set_userdata($newdata);
                    redirect('admin');
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
		//$config['file_name'] = $this->input->post('upload');
			
			$images = $this->input->post('upload');
			
			$config['file_name'] = $this->input->post('upload');
			$config['upload_path'] = './images/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '2048';
			//$config['max_width'] = '1024';
			//$config['max_height'] = '768';
		
			//$submit = $this->input->post('download');
			//$submits = $this->input->post('userfile');
				
				$this->load->library('upload', $config);
				
				if ( !$this->upload->do_upload('upload'))
				{
					echo "aaaa";
					exit;
				}	
				else
				{
					$file_data = $this->upload->data();
				}
			
			$namenews = $this->input->post('namenews');
			$shortnews = $this->input->post('shortnews');
			$textnews = $this->input->post('textnews');
			
			$shares = $this->input->post('shares');
			$directions = $this->input->post('directions');
			$who_help = $this->input->post('who_help');
			$who_help_one = $this->input->post('who_help_one');
			$smi = $this->input->post('smi');
			$photo = $this->input->post('photo');
			$video = $this->input->post('video');
			
			//$images = $this->input->post('upload');
			$login = $this->session->userdata('prop_login');
			$date = date("d.m.y"); 
			$newdata = array(
						   'prop_categorynews' => $shares,
						   'prop_categorynews' => $directions,
						   'prop_namenews' =>  $namenews,
						   'prop_images' =>  $images,
						   'prop_login' =>  $login,
						   'prop_text' =>  $textnews,
						   'prop_date' =>  $date,
					   );
					   
			$this->db->insert('prop_news',$newdata);
			redirect('admin');
		}
		function newsdelete($id = '')
		{
			$this-> load-> helper('url');
                $this-> load-> helper('form');
				$this->load->library('session');
            $this->db->delete('prop_news', array('id' => $id));
            redirect("/admin");
		}
		function donations() {
            $this->load->helper(array('form', 'url'));
            $this->load->library('session');
            $users = $this->session->userdata('prop_login');if($users != "admin")
            {
                redirect("admin/login");
            }
            else
            {
                $data['section'] = "donations";
                $this->load->view('admin/header', $data);
                $this->load->view('admin/news_view');
                $this->load->view('admin/footer');
            }
        }
    function volunteers() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
        $users = $this->session->userdata('prop_login');if($users != "admin")
        {
            redirect("admin/login");
        }
        else
        {
            $data['section'] = "volunteers";
            $this->load->view('admin/header', $data);
            $this->load->view('admin/news_view');
            $this->load->view('admin/footer');
        }
    }
	function news() {
        self::index();
    }
		
    function newsupdate($id = "")
    {
        /* $a = $this->db->get('comments'); // получам комментарии из БД
        foreach ($a->result() as $row)
        {*/


        $all = $this->input->post('textnews');

        var_dump($all);
        exit;

        $data = array(
            'body' => $all
        );
        //var_dump($a);
        //exit;
        $this->db->update('prop_news', $data, array('id' => $id));
        redirect('admin');
    }
}
?>