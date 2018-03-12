<?php
$conn_error = 'could not connect';
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db ='dbms';
if(!(mysql_connect($mysql_host,$mysql_user,$mysql_pass))||!(mysql_select_db($mysql_db))){
	die($conn_error);	
		
	}












?>