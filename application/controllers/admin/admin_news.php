<?php


	class admin_news extends CI_Controller 
	{
		
		function index()
		{
				
				$this-> load-> helper('url');
                $this-> load-> helper('form');
				$this->load->library('session');
				$users = $this->session->userdata('prop_login');
				$data['query'] = $this->db->get('prop_news');
						if($users != "admin")
						{
							redirect("main"); 
						}
						else
						{
							$this->load->view('admin/news_view',$data);
						}
						
						
			/*$namenews = $this->input->post('namenews');
			$shortnews = $this->input->post('shortnews');
			$textnews = $this->input->post('textnews');
			$shares = $this->input->post('shares');
			$directions = $this->input->post('directions');
			$who_help = $this->input->post('who_help');
			$images = "1.jpg";
			$login = $this->session->userdata('prop_login'));
			$date = date("m.d.y"); 
			$newdata = array(
						   'prop_categorynews' => $shares,
						   'prop_namenews' =>  $namenews,
						   'prop_shortnews' =>  $shortnews,
						   'prop_images' =>  $images,
						   'prop_login' =>  $login,
						   'prop_text' =>  $textnews,
						   'prop_date' =>  $date,
					   );
			$this->db->insert($newdata);
			redirect('admin/admin_news');*/
			
		}
		
		public function addnews()
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
			$images = "1.jpg";
			$login = $this->session->userdata('prop_login'));
			$date = date("m.d.y"); 
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
			redirect('admin/admin_news');
		}
	}
?>