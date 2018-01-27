<?php
define('ROOT_DIR', realpath(dirname(__FILE__)));
define('HOSTNAME', 'http://localhost/ericreyes.info');

function asset($path) 
{
	echo HOSTNAME.'/web/assets/'.$path;
}

require ROOT_DIR.'/Autoloader.php';

