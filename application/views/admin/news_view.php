<head>
	<link rel="stylesheet" type="text/css" media="screen" href="/css/header.css">
</head>
<h1>Ураааа! Админка заработала!</h1>
<div id="content">
<?php echo form_open('admin/addnews'); ?>
	<table>
		<tr>
			<td>
				<p>Название статьи</p>
				<textarea name = "namenews"></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<p>Краткое описание статьи</p>
				<textarea name = "shortnews"></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<p>Содержание статьи</p>
				<textarea name = "textnews"></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<!--<p style = "margin-top:10px;"><a href="#openModal" class = "downloadavatar" style = "color:#6CA6CD;">Загрузить картинку</a></p>-->
					
						
			</td>
		</tr>
		<tr>
			<td>
				<p>Выберите категорию статьи</p>
				<input type="checkbox" name = "shares" value="Акции">Акции
				<input type="checkbox" name = "directions" value="a2">Направления
				<input type="checkbox" name="who_help" value="a2">Кому помогли
			</td>
		</tr>
		<tr>
			<td>
				<p>Загрузить картинку</p>

				
			</td>
		</tr>
	</table>
	<input type = "submit" value = "Доавить статью" style = "margin-top:10px;"/>
	
	<?php echo form_close(); ?>	
					<?php echo form_open_multipart('admin/addimages');?>

				<input type="file" name="userfile" size="20" />

				<br /><br />

				<input type="submit" value="upload" />

				</form>
					<?php echo form_open('admin/addimage'); ?>
						<div id="openModal" class="modalDialog">
							<div>
								<a href="#close" title="Закрыть" class="close">X</a>
									<?php echo form_open_multipart('admin_news');?>
										<input type="file" name="userfile" size="20" />
										<br /><br />

										<input type="submit" name = "download" value="upload" />

										</form>
							</div>
						</div>
					<?php echo form_close(); ?>	
		
		<div style = "margin-top:50px;">
				<table>
					<tr>
						<td>
							<?php 
								//$this->db->select(('prop_text', 1, 30), 'prop_namenews','prop');
								$query = $this->db->get('prop_news'); 
								foreach ($query->result() as $row)
								{ 
									echo "<font style = ';font:18px Arial, Helvetica, sans-serif;'>".$row -> prop_namenews."</font><br><br>";
									echo "<img style = 'width:600px;height:400px;' src = '".base_url().'images/'.$row->prop_images."'><br><br>";
								
							?>
						</td>
					</tr>
					<tr>
						<td>
							<?php
							
								echo $row->prop_text."<br><br>";
							}
							?>
						</td>
					</tr>
				</table>
			</div>
			
		<a href="/">Вернуться на главную</a>
</div>