<?php

spl_autoload_register('loading');

function loading($class)
{
	die(__DIR__.'../src/Controller/'.$class.'.php');
	die(var_dump(file_exists(__DIR__.'src/Controller/'.$class.'.php')));
	if (file_exists(__DIR__.'../src/Controller/'.$class.'.php')) {
		require __DIR__.'../src/Controller/'.$class.'.php';

	} else if (file_exists(__DIR__.'../src/Services/'.$class.'.php')) {
		require __DIR__.'../src/Services/'.$class.'.php';

	} else if (file_exists(__DIR__.'../src/Entity/'.$class.'.php')) {
		require __DIR__.'../src/Entity/'.$class.'.php';
	}
}
