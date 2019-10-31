<?php

Namespace Classes;

class User2 
{
	public function name($name)
	{
		return $name . 'efui';
	}
	spl_autoload_register(function($className) {
	$className = str_replace("\\", '/', $className);
	include_once $_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['SCRIPT_NAME']) . '/' . $className . '.php';
	
});
}