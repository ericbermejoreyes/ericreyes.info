<?php
namespace components\controller;

class Controller
{
	const VIEW_DIR = 'web/views/';

	public function render($view)
	{
		require self::VIEW_DIR.$view;
	}
}