<?php
$db_name=  "connection";
$db_user= "root";
$db_pass="";
$db_host="localhost";
    //create connection
	
	  $connect= new mysqli($db_host, $db_user,$db_pass, $db_name);
	
	//check connection
	if ($connect->connect_error){
		die('there is an error');
	}
		else {
			
			echo "db connected" ;
		}
	
		



?>