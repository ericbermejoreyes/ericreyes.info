<?php

// The Autoloader

class Autoloader
{
	public static function register()
	{
		spl_autoload_register(function ($namespace)
		{
			require $namespace.'.php';
		});
	}
}

Autoloader::register();