<h1>Hello</h1>


<?php

 foreach ($query->result() as $row)
 {
	echo $row->prop_namenews;
	echo $row->prop_text;
	echo $row->prop_login;
	echo $row->prop_date;
 }
?>