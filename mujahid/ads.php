<?php
session_start();
include_once "config.php ";



if(empty($_SESSION['id']))
		{
			 ?>
			 <script> window.location.href="login.php";</script>
			 <?php 
		}else{
			$ok = $_SESSION['id'];
		}
		
	

if(isset($_POST['done']))
		{	$user_id = $_SESSION['id'];
			$title= $_POST['title'];
			$price= $_POST['price'];                    
			$detail= $_POST['detail'];
			$folder = "posting/";
			$image = $_FILES['image']['name'];
			$path = $folder.$image;
			move_uploaded_file($_FILES['image']['tmp_name'],$path);
			$class->addpost($title,$price,$detail,$image,$user_id);	
	
			header ("location:index.php");
		}

?>

<form method="post" enctype="multipart/form-data">
<input type="file" name="image"/><br>
<input type="text" name="title"  placeholder="Enter title"/><br>
<input type="text" name="price"  placeholder="Enter price"/><br>
<input type="text" name="detail"  placeholder="Enter detail"/><br>
  <input type="submit" value="Register" name="done" />
  