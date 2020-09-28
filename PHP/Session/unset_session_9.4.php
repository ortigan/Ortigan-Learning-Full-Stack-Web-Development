<?php

	session_start();

	unset($_SESSION['name']);
    echo 'Session key "name" is destroyed';
    
?>