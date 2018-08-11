<?php
class crud {

private $db;
function __construct ($db_con)
{
	$this->db= $db_con;
	
}

public function fetchdata($sql)
{
	$query= $this->db->prepare($sql);
	$query->execute();
	return $query;
	}


public function redirect($sql)
{
	header("location:".$sql);
	// 	return true;
}
	
public function updatedata( $id,$title,$price,$dec,$image1,$image2,$image3)
{
	try
	{
		$stmt=$this->db->prepare("update ads set title=:title, description=:description , image1=:image1, image2=:image2,image3=:image3,price=:price where id =:id");
			$stmt->bindparam(":title",$title);
		$stmt->bindparam(":description",$dec);
		$stmt->bindparam(":image1",$image1);
		$stmt->bindparam(":image2",$image2);
		$stmt->bindparam(":image3",$image3);
			$stmt->bindparam(":price",$price);
			$stmt->bindparam(":id",$id);
		$stmt->execute();
		return true;
	}
		catch (PDOException $e)
	{
		echo $e->getMessage();
		return false;
	}
	
}

public function insertdata($title,$price,$dec,$image1,$image2,$image3,$user_id)
{
	try
	{
		$stmt=$this->db->prepare("INSERT INTO ads(user_id, title, description, image1, image2, image3, price, status) VALUES (:user_id,:title,:description,:image1,:image2,:image3,:price,'active')");
		$stmt->bindparam(":user_id",$user_id);
		$stmt->bindparam(":title",$title);
		$stmt->bindparam(":description",$dec);
		$stmt->bindparam(":image1",$image1);
		$stmt->bindparam(":image2",$image2);
		$stmt->bindparam(":image3",$image3);
			$stmt->bindparam(":price",$price);
		$stmt->execute();
		return true;
	}
		catch (PDOException $e)
	{
		echo $e->getMessage();
		return false;
	}
	
}
public function adduser($name,$email,$gender,$password,$image)
{
	try
	{
		
		$stmt=$this->db->prepare("INSERT INTO user( name, email, gender,password, image) VALUES ( :name,:email,:gender,:password,:image )");
		$stmt->bindparam(":name",$name);
		$stmt->bindparam(":email",$email);
		$stmt->bindparam(":gender",$gender);
			$stmt->bindparam(":password",$password);
			$stmt->bindparam(":image",$image);
		
		$stmt->execute();
		return true;
	}
		catch (PDOException $e)
	{
		echo $e->getMessage();
		return false;
	}
	
}

public function addpost($title,$price,$detail,$image,$user_id)	
{
	try
	{
		
		$stmt=$this->db->prepare("INSERT INTO ads( title, user_id,price, detail, image) VALUES ( :title,:user_id,:price,:detail,:image )");
		$stmt->bindparam(":user_id",$user_id);
		$stmt->bindparam(":title",$title);
		$stmt->bindparam(":price",$price);
		$stmt->bindparam(":detail",$detail);
			$stmt->bindparam(":image",$image);
		
		$stmt->execute();
		return true;
	}
		catch (PDOException $e)
	{
		echo $e->getMessage();
		return false;
	}
	
}


public function updatads($title,$price,$detail,$image,)
{
	try
	{
		$stmt=$this->db->prepare("update ads set title=:title, detail=:detail , image=:image,price=:price where id =:id");
			$stmt->bindparam(":title",$title);
		$stmt->bindparam(":description",$dec);
		$stmt->bindparam(":image1",$image1);
		$stmt->bindparam(":image2",$image2);
		$stmt->bindparam(":image3",$image3);
			$stmt->bindparam(":price",$price);
			$stmt->bindparam(":id",$id);
		$stmt->execute();
		return true;
	}
		catch (PDOException $e)
	{
		echo $e->getMessage();
		return false;
	}
	
}

	public function is_loggedin()
	{
		if(isset($_SESSION['id']))
		{
			return true;
		}
	}
public function doLogin($email,$password)
	{
		try
		{
			$stmt = $this->db->prepare("SELECT id,  email, password FROM user WHERE email=:email && password=:password ");
			$stmt->execute(array(':email'=>$email, ':password'=>$password));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount()>0)
			{
			session_start();
			$_SESSION['id'] = $userRow['id'];
						
		

					return true;
			
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	public function doLogout()
	{
		session_destroy();
		unset($_SESSION['id']);
		return true;
	}
}
?>