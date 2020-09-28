<?php 

	session_start();
	
	$_SESSION['name'] = "John";
	echo 'Session is set';

?>