<?php
class Session 
{	
	private static $instance;
	public static function getInstance()
	{
		if(!isset($_SESSION)){
			session_start();
		}
	}
	public static function getSession($k)
	{

		Session::getInstance();
		return $_SESSION[$k];
	}

	public static function setSession($k, $v)
	{


		
		Session::getInstance();
		$_SESSION[$k] = $v;
	}

	public static function unsetSession($k)
	{

		Session::getInstance();
		unset($_SESSION[$k]);
	}
}				