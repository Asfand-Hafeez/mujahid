<?php

include_once "config.php";

if($class->is_loggedin()!="")
{
	$class->redirect('index.php');
}
if(isset($_POST['done']))
{
$email= $_POST['email'];
$password= $_POST['password'];


if($class->doLogin($email,$password))
	{
		
		$class->redirect("index.php");
		
	}
	else
	{
		$error = "Wrong Details !";
	}
}
?>
<form method="post">
  <input  type="text" name="email" required >
<input  type="password" name="password" required>
<input type="submit" value="Sign-in" name="done" >

</form>

<a href="register.php">Creat New Account</a>





