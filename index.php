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

    	if($value=='careers.pirx3d.com')
    	{
    		$a = 2;
    		echo $value;
    	}



    }
}


if($a==0)
	include_once('index_en.html');
if($a==1)
	include_once('index_pl.html');
if($a==2)
{

	include_once('recruit/index.html');
}

?>