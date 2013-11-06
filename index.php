<?php

$headers = apache_request_headers();
$a = 0;
foreach ($headers as $header => $value) {
    if($header=='Host')
    {
    	if($value=='pirx3d.pl')
    		$a = 1;
    	if($value=='www.pirx3d.pl')
    		$a = 1;
    }
}
if($a==0)
	include_once('index_en.html');
else
	include_once('index_pl.html');

?>