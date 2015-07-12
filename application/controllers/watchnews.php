<?php


	class watchnews extends CI_Controller
	{

		function index()
		{
			$this->load->helper(array('form', 'url'));
			$this->load->library('session');
			
			$data['query'] = $this->db->get('prop_news');
			//$this->load->view('watchnews_view',$data);
			redirect('main');
		}
		
		function watch($id = '')
		{
			$data['query'] = $this->db->get_where('prop_news', array('id' => $id));
			$this->load->view('watchnews_view',$data);
		}
	}
?>