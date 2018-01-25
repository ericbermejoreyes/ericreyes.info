<?php
require 'Autoloader.php';
require 'Router.php';

Router::GET('/', function ($request) {
	include 'web/views/index.html';
});


Router::Decide();