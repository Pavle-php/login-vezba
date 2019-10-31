<?php
if(isset($_POST['insert'])){
	$user = new User;
	//$user->insert();
	$user->login();
}


?>
<div class="container">
	<div class="row">
	<form action="#" method="POST">
		Email:<input type="text" name="email"><br>
		Password:<input type="password" name="password"><br>

		Re Password:<input type="password" name="repassword">
		<input type="submit" name="insert">
	
	</form>
	</div>
</div>