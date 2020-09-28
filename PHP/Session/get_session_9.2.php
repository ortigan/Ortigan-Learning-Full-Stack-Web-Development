<?php

	session_start();
    //if session is set only then you will get output
	if( isset( $_SESSION['name'] ) ){
		echo "My name is " . $_SESSION['name'];
	}

?>