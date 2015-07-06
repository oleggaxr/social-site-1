<?php


	class main extends CI_Controller 
	{
		 public function index()
			{
                $data['title'] = "Сайт социального проекта | Главная";
                $data['controller_name'] = 'main';

				$this->load->helper(array('form', 'url'));
				$this->load->library('session');
                $this->load->helper('html');
                $this->load->view('header', $data);
                $this->load->view('donations_panel_horizontal', $data);
				$this->load->view('main_view', $data);

                $this->load->view('footer');
			}
        public function contact()
        {
			$this->load->helper(array('form', 'url'));
			$this->load->library('session');
            $data['title'] = "Сайт социального проекта | Контакты";
            $data['controller_name'] = 'contact';
            $this->load->helper('html');
            $this->load->view('header', $data);
            $this->load->view('main_view', $data);

            $this->load->view('footer');
        }
		
		public function input_users()
		{	
				$this->load->helper(array('form', 'url'));
				$this->load->library('session');
		
			 $newdata = array(
						   'prop_login' =>  htmlspecialchars($this->input->post('login')),
						   'prop_password' =>  $this->input->post('password'),
						   'logged_in' => TRUE
					   );
					   $login = htmlspecialchars($this->input->post('login'));
					   $password = $this->input->post('password');
					
			 
				 
				 $query = $this->db->query("SELECT id FROM prop_users WHERE prop_login='".$this->db->escape_str($login)."'AND prop_password='".$this->db->escape_str($password)."'");
				
					$proverka = $query->num_rows();
					
					if(empty($proverka))
					{
						echo "Такого пользователя нет. Повторите попытку.";
						exit;
					}
					
					else
					{
						
								$this->session->set_userdata($newdata);
								redirect('main');
					}
				
		}
		
		public function logout()
			{
			
				$this->load->library('session');
				$login = $this->input->post('login');
				  $newdata = array(
						   'prop_login' =>  $this->input->post('login'),
						   'prop_password' =>  $this->input->post('password'),
						   'logged_in' => TRUE
					   );
				$this->session->sess_destroy();
				redirect("main");
			}
			
			
			public function about_news()
			{
				$this->load->helper(array('form', 'url'));
				$this->load->library('session');
				$data2['query'] = $this->db->get('prop_news'); 
			}
	}
?>