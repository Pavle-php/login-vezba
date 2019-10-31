<?php
if(isset($_POST['email']) and isset($_POST['password'])){
	User::login();

}
if(isset($_POST['logout'])){
	Session::unsetSession('login');
	echo "You are logged out";
}
if(isset($_GET['messages'])){
	echo "You must log in";
}
?>
<div class="container">
	<div class="row">
	<form action="#" method="POST">
		Email:<input type="text" name="email"><br>
		Password:<input type="password" name="password"><br>
		<input type="submit" name="login" value="Login">
	</form>
	<?php   
	if(isset($_SESSION['login'])){ Session::unsetSession('message'); ?>
				
				<form action="#" method="POST">
			<input type="submit" name="logout" value="Logout">
		</form> <?php
	}?>
		
		


		
	</div>
</div>