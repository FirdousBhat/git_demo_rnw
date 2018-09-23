<?php
require('config.php');

if(isset($_REQUEST['reg_user'])){
	$reg_user = $_REQUEST['reg_user'];
	$reg_mobile = $_REQUEST['reg_mobile'];
	$user_email = $_REQUEST['user_email'];
	$password = $_REQUEST['password'];

	$array = array($reg_user,$reg_mobile,$user_email,$password);

	$data = implode('|',$array);

	$stmt = $user->userRegister($data);

	echo $stmt;

	

}

if(isset($_POST['user_login'])){

	$phno = $_POST['loginmobile'];
	$pass = $_POST['password'];

	$stmt = $user->userLogin($phno,$pass);
     echo $stmt;
	if($stmt == 'success'){

		header('Location:./');
	}


}