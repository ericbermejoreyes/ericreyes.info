<?php
define('ROOT', realpath(dirname(__FILE__)));

require ROOT.'/Autoloader.php';
require ROOT.'/Router.php';

Router::GET('/', function ($request) {
	include 'web/views/index.html';
});

Router::Decide();