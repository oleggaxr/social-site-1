<?php


class addimages extends CI_Controller
{

    function index()
    {

        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
		
	
		
			
			$config['upload_path'] = './images/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '2048';
			//$config['max_width'] = '1024';
			//$config['max_height'] = '768';
		
			//$submit = $this->input->post('download');
			//$submits = $this->input->post('userfile');
				
				$this->load->library('upload', $config);
				
				if ( ! $this->upload->do_upload())
				{
					$error = array('error' => $this->upload->display_errors());
					
					$this->load->view('addimages', $error);
				}	
				else
				{
					$file_data = $this->upload->data();
					// тут будет происходить загрузка файла на сервер
					$upload_data = $this->upload->data();
						 /* Начало занесения имени файла в БД*/
						$upload_data = $this->upload->data(); // получаем информацию о загруженном файле
						$add['prop_images'] = $upload_data['file_name']; // сохраняем имя файла в элемент массива add
						$this->db->query("SELECT MAX(id) FROM prop_news");
											
						$this->db->update('prop_news`',$add);
						redirect('admin');
				}
				
				//$this->load->view('addimages');
	
	}
	
		
		

}
?>