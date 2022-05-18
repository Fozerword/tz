<?php
	$bdconnect = new mysqli("localhost","user","user","logo");
	if($mysqli -> connect_errno){
		printf('Ошибка подключения к базе данных');
		exit();
	}
	else{
		$mysql = "SELECT pute FROM photos;";
		$photos = $bdconnect->query($mysql);
	}
?>