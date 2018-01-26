<?php

Autoloader::register(
	function ()
	{
		require 'app/config/Routing.php';
	}
);

// The Autoloader

class Autoloader
{
	const SRC = 'src/';
	const APP = 'app/';
	private static $directories = [
		'controllers'
	];

	public static function register($function)
	{
		// Ensure library is on include_path
		set_include_path(
		    get_include_path() . PATH_SEPARATOR . ROOT_DIR
		);

		spl_autoload_register(function ($namespace)
		{
			$namespace = preg_replace('/\\\/', '/', $namespace);
			if (is_readable($file = self::APP.$namespace.'.php')) { require $file; } 
			else if (is_readable($file = self::SRC.$namespace.'.php')) { require $file; }
		});

		self::controllers();

		$function();
	}

	private static function controllers()
	{
		self::controllerFinder();
	}

	private static function controllerFinder($path = 'src')
	{
		if (is_dir($path) && $dirs = scandir($path))
		{
			foreach ($dirs as $dir)
			{
				if ($dir !== '.' && $dir !== '..')
					if (is_dir($path.'/'.$dir))
					{
						self::controllerFinder($path.'/'.$dir);
					} else
					{
						if (strpos('Controller.php', $path.'/'.$dir) !== false)
							require $path.'/'.$dir;
					}
			}
		}
	}
}