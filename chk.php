<?php
if (isset($_REQUEST['submit'])) 
{
	$id=$_REQUEST['id'];
	$password=$_REQUEST['password'];
	$copass=$_REQUEST['Copass'];
	$name=$_REQUEST['username'];
	$email=$_REQUEST['email'];
	$ut=$_REQUEST['user'];

	if (empty($id) == true || empty($password) == true || empty($copass) == true || empty($name) == true || empty($ut)==true)
	{
		echo "null submission";
	}
	else
	{
		if($password == $copass)
		{
			$data=$name."|".$password."|".$email."|";
			
			    $myfile=fopen("user.txt",'w');
				fwrite($myfile,$data);
				fclose($myfile);
				
				echo "SUCCESSFUL";
		}
		
		else
		{
			echo "password error";
		}
}
}
		
		
	else
	{
		header('location:reg.php');
	}	

	


		






 ?>