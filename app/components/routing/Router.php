<?php
namespace components\routing;

use components\http\Request;
// The router
class Router
{
	protected static $routes = [
		'_get' => [],
		'_post' => [],
		'_delete' => [],
		'_put' => [],
		'_patch' => [],
	];

	public static function Get($path, $action)
	{
		self::$routes['_get'][] = ['path' => $path, 'action' => $action];
	}

	public static function POST($path, $action)
	{
		self::$routes['_post'][] = ['path' => $path, 'action' => $action];
	}

	public static function PUT($path, $action)
	{
		self::$routes['_put'][] = ['path' => $path, 'action' => $action];
	}

	public static function DELETE($path, $action)
	{
		self::$routes['_delete'][] = ['path' => $path, 'action' => $action];
	}

	public static function PATCH($path, $action)
	{
		self::$routes['_patch'][] = ['path' => $path, 'action' => $action];
	}

	public static function Decide()
	{
		$method = '_'.strtolower($_SERVER['REQUEST_METHOD']);
		$request = new Request();

		foreach (self::$routes[$method] as $route)
		{
			if ($route['path'] === $request->request['path'])
				$action = explode(':', $route['action']);
				$controller = new $action[0]();
				$action = end($action);
				$controller->$action();
		}
	}
}
