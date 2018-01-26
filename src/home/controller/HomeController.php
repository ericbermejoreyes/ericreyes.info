<?php
namespace home\controller;

use components\controller\Controller;
use components\htttp\Request;

class HomeController extends Controller
{
	public function IndexAction()
	{
		$this->render('index.html.php');
	}
}