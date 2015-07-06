<div id="content">
    <h2><?= $title ?></h2>
	Народные новости. А сейчас народные новости. Слушай радио! :D
	<?php 
	
		foreach ($query->result() as $row)
		{
			//echo $row -> author;
			print_r("<font style = 'color:blue;'>".$row -> prop_login."</font>". " : " .$row -> prop_text."<br>");
			$users = $this->session->userdata('login');
		}
	?>
</div>