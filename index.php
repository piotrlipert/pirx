<?php

<?php

if(!function_exists('apache_request_headers'))
{
	function apache_request_headers()
	{
		static $arh = array();

		if (!$arh)
		{
			$rx_http = '/\AHTTP_/';
			foreach ($_SERVER as $key => $val)
			{
				if(preg_match($rx_http, $key))
				{
					$arh_key = preg_replace($rx_http, '', $key);
					$rx_matches = array();

					// do some nasty string manipulations to restore the original letter case
					// this should work in most cases
					$rx_matches = explode('_', $arh_key);
					if( count($rx_matches) > 0 and strlen($arh_key) > 2 )
					{
						foreach($rx_matches as $ak_key => $ak_val)
						{
							$rx_matches[$ak_key] = ucfirst($ak_val);
						}

						$arh_key = implode('-', $rx_matches);
					}

					$arh[$arh_key] = $val;
				}
			}
		}

		return $arh;
	}
}


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