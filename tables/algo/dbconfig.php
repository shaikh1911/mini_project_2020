<?php

	global $con;
	global $array;
	global $i;
	$i=0;

	$con = mysqli_connect('localhost','root','','loginsystem');

	if(!$con)
	{
		echo 'unable to connect with db';
		die();
	}
	
	
	
	?>