<?php
session_start();
include "config.php";
if(empty($_SESSION['id']))
		{
			 ?>
			 <script> window.location.href="login.php";</script>
			 <?php 
		}else{
			$ok = $_SESSION['id'];
		}

	

 	

?>
<a href="logout.php" >logout</a>

<br>
<a href="ads.php" >Creat New Post</a>


<h2>Id:<?php echo $ok; ?></h2>

<?php
	   
	   $query= $class->fetchdata(" select * from ads where user_id='$ok'");
while ($data=$query->fetch(PDO::FETCH_ASSOC))
{	?>

<table border="4">
<tr>
<th>Image</th>
<th>title</th>
<th>price</th>
<th>Detail</th>
<th>Action</th>
</tr>

<tr> 
<td><img src="posting/<?php echo $data['image'] ?>" style="height:150px; width:150px"></td>
<td><?php echo $data['title']; ?></td>
<td><?php echo $data['price']; ?></td>
<td><?php echo $data['detail']; ?></td>
<td><a href="edit.php?=<?php echo $data['id'];?>">Edit</a> || <a href="delete.php?=<?php echo $data['id'];?>">Delete</a></td>
</tr>
<?php
}
?>
</table>



