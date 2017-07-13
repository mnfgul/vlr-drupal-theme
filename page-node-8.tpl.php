<?php
	$result = db_query("SELECT title FROM node WHERE nid >0");
	while ($title = db_result($result)) 
	{ 
  		var_dump($title);
	}
?>