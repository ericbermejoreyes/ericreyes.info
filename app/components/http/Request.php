<?php
namespace components\http;

class Request
{
	public $request = [];
	public $query = [];
	public $attributes = [];

	public function __construct()
	{
		if (!isset($_GET['path'])) $_GET['path'] = '/';
		$this->request = array_replace_recursive($this->request, $_GET);
		$this->query = array_replace_recursive($this->query, $_POST);
	}
}