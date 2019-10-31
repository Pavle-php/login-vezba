<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<?php
spl_autoload_register(function($className) {

	include_once 'Classes/' . $className . '.php';
	
});
?>
<div class="container">
	<div class="row">
		<a href='?tryregister'>Insert New User</a>
	</div>
	<div class="row">
		<a href='?trylogin'>Login</a>
	</div>


	<div class="row">
		<a href='?trysearch'>Search</a>
	</div>
</div>


<?php 
Session::getInstance();
if(isset($_GET['tryregister'])){
	include('include/Insert.php');
}
if(isset($_GET['trylogin'])){
	include('include/Login.php');
}
if(isset($_GET['trysearch'])){
	include('include/Search.php');

}
if(isset($_GET['message'])){
	include('include/Login.php');
}
?>
</body>
</html>
