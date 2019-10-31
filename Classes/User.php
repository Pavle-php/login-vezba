<?php
class User 
{
	public function showUsers()
	{
		$conn = Connection::getInstance();
		$sql = 'SELECT * from users';
		$q = $conn->prepare($sql);
		$q->execute();
		return $q->fetch(PDO::FETCH_OBJ);
	}
	

	public function insert()
	{
		if(isset($_POST['email']) and isset($_POST['password']) and isset($_POST['repassword']) and !empty(trim($_POST['email'])) and !empty(trim($_POST['password'])) and !empty(trim($_POST['password']))){
		
			if($_POST['password'] === $_POST['repassword']){
				if($this->emailExist()!==true){
					$email = $_POST['email'];
					$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
					

					$conn = Connection::getInstance();
					$sql = 'INSERT into users (email, password) values (:email, :password)';
					$query = $conn->prepare($sql);
					$parameters = array(':email' => $email, ':password' => $password);
					
					$query->execute($parameters);
					echo 'Successfully inserted';
				}
				else echo 'Email postoji';
			}
			else echo 'Passwords do not match';
		}
		else echo "Must enter email and password";
	}
	
	public static function login()
	{
		if(isset($_POST['login'])){
			if(isset($_POST['email']) and isset($_POST['password']) and !empty(trim($_POST['email'])) and !empty(trim($_POST['password']))){			
				$email = $_POST['email'];
				$password = $_POST['password'];				
				$conn = Connection::getInstance();
				$sql = 'SELECT * from users where email = :email and password = :password';
				$stmt = $conn->prepare($sql);
				$parameters = array(':email'=>$email, ':password'=>$password);
				$stmt->execute($parameters);
				$res = $stmt->fetch(PDO::FETCH_OBJ);
				if($res){		
					Session::setSession('login', $res->id);
					echo "Welcome " . $res->email;

				} else echo "Wrong email or password";
			} 
			else echo 'Type email and password';
		}
	}

	public function emailExist()
	{
		$conn = Connection::getInstance();

		if(isset($_POST['email'])){
			$email = $_POST['email'];
			$sql = 'SELECT COUNT(id) as count from users where email = :email';
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':email', $email);
			$stmt->execute();
			$counte = $stmt->fetch(PDO::FETCH_OBJ);
			if($counte->count > 0){ 
				return true;
			} else return false;
		}
		
		
	}
}