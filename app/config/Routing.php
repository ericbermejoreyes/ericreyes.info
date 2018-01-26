<?php

use components\routing\Router;

Router::GET('/', 'home\controller\HomeController:IndexAction');


Router::Decide();