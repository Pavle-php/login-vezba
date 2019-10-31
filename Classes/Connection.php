<?php
class Connection 
{	
	private static $instance;
	
	public static function getInstance(){
		if(!self::$instance){
			try {
				self::$instance = new PDO("mysql:host=localhost;dbname=sitelog","root","");				 				
			} catch(PDOException $error) {
				echo $error->getMessage();
			}		
		}
		return self::$instance;
	}							
}				