

<?php
include_once "config.php ";
if(isset($_POST['done']))
		{
			$name= $_POST['name'];
			$email= $_POST['email'];                    
			$gender= $_POST['gender'];
			$password= $_POST['password'];
			$folder = "image/";
			$image = $_FILES['image']['name'];
			$path = $folder.$image;
			move_uploaded_file($_FILES['image']['tmp_name'],$path);
			$class->adduser($name,$email,$gender,$password,$image);	
	
		}

?>
<a href="login.php">Login</a>


<form method="post" enctype="multipart/form-data">
<input type="file" name="image"/><br>
<input type="text" name="name"  placeholder="Enter Name"/><br>
<input type="text" name="email"  placeholder="Enter Email"/><br>
<input type="text" name="password"  placeholder="Enter Pass"/><br>
  <input  name="gender" type="checkbox" value="male">Male
  <input  name="gender" type="checkbox" value="female">Female<br>
  <input type="submit" value="Register" name="done" />
  <br>
  <br>
  <center><a href="register.php" class="form-group">Creat New Account</a></center>






</form>