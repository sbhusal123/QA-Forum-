<?php
    session_start();

	$user=$_POST['user'];
	$pwd=$_POST['passwd'];
	
	if($user=="" || $pwd=="")
	{
		echo "Enter the Valid username and Password.";
		
	}
	
	else{
		
		$dbpwd="";
		
			$conn = new mysqli("localhost", "root", "", "project");
		$sql = "SELECT username,password FROM access";
		$result = $conn->query($sql);
	
			while($row = $result->fetch_assoc())
			{
				if($row["username"]==$user)
				{
					$dbpwd=$row["password"];
					$userid=$row["username"];
				}
			}
	
		if($dbpwd==$pwd)
		{
			$_SESSION["userid"]=$userid;
			echo "<script>window.location = 'logpage.php'</script>";
		}
		else
		{
			echo "Invalid Username or password.";
		}
		
	$conn->close();	
}
?>