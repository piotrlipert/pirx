<?php 

	echo http_get_request_body();

$a = 2;
if ($a==1)
	include_once("index.html"); 
else
	echo http_get_request_body();
?>