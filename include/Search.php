<?php
if(isset($_POST['search'])){ 
	if(isset($_SESSION['login'])){
		//$search = User::search($_POST['search']);
	} else 


	header('Location: index.php?message&messages');

}

?>
<div class="container">
	<div class="row">
	<form action="#" method="POST">
		Search:<input type="text" name="search"><br>		
		<input type="submit" name="submitSearh" value="Search">
	</form>
	
	
		
		
	

		
	</div>
</div>