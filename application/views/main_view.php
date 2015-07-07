<div id="content">
    <h2><?= $title ?></h2>
	
	<?php 
	
		/*$query = $this->db->get('prop_news');
		foreach ($query->result() as $row)
		{
			//echo $row -> author;
			print_r("<font style = 'color:blue;'>".$row -> prop_login."</font>". " : " .$row -> prop_text."<br>");
			$users = $this->session->userdata('login');
		}*/
	?>
	<div style = "margin-top:50px;">
		<table>
			<tr>
				<td>
					<?php 
						//$this->db->select(('prop_text', 1, 30), 'prop_namenews','prop');
						//$query = $this->db->get('prop_news'); 
						foreach ($query->result() as $row)
						{
                            echo "<div class='news'>";
							echo "<font style = ';font:18px Arial, Helvetica, sans-serif;'>".$row -> prop_namenews."</font><br><br>";
							echo "<img style = 'width:600px;height:400px;' src = '".base_url().'images/'.$row->prop_images."'><br><br>";

					?>
				</td>
			</tr>
			<tr>
				<td>
					<?php
					
						echo $row->prop_text."<br><br>";
						echo "<a href = ".site_url('main/allnews').">Подробно</a><br><br>";
                        echo "</div>";
					}
					?>
				</td>
			</tr>
		</table>
	</div>
	
</div>