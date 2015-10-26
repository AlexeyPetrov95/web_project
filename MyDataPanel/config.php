<?php
	$db_host = 'localhost';
	$db_user = 'root';
	$db_password = 'Nerevar';
	$db_name = 'adminpanel';
	
	$link = mysql_connect($db_host, $db_user, $db_password);
	if (!$link) {
		die('Не удалось соединиться : ' . mysql_error());
	}


	$db_selected = mysql_select_db($db_name, $link);
	if (!$db_selected) {
		die ('Не удалось выбрать базу $db_name: ' . mysql_error());
	}