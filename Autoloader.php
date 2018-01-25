<?php

// The Autoloader

class Autoloader
{
	public static function register()
	{
		// Ensure library is on include_path
		set_include_path(
		    get_include_path() . PATH_SEPARATOR . ROOT
		);

		spl_autoload_register(function ($namespace)
		{
			$namespace = preg_replace('/\\\/', '/', $namespace);
			require_once ROOT.'/'.$namespace.'.php';
		});
	}
}

Autoloader::register();