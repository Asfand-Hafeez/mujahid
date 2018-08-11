<?php
include "config.php";

if(isset($_POST['done']))
		{	$user_id = $_SESSION['id'];
			$title= $_POST['title'];
			$price= $_POST['price'];                    
			$detail= $_POST['detail'];
			$folder = "posting/";
			$image = $_FILES['image']['name'];
			$path = $folder.$image;
			move_uploaded_file($_FILES['image']['tmp_name'],$path);
			$class->updatads($title,$price,$detail,$image);	
	
			
		}



?>


<form method="post" enctype="multipart/form-data">
<input type="file" name="image" value="<?php echo $data['image'];?>"/><br>
<input type="text" name="title"  placeholder="Enter title" value="<?php echo $data['title'];?>"/><br>
<input type="text" name="price"  placeholder="Enter price" value="<?php echo $data['price'];?>"/><br>
<input type="text" name="detail"  placeholder="Enter detail"value="<?php echo $data['detail'];?>"/><br>
  <input type="submit" value="Register" name="done" />
