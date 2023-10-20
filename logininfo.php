<?php

$con = mysqli_connect('localhost','root');

if ($con) {
	echo "Connection Done ";
}else{
	echo "Something went wrong";
}

mysqli_select_db($con, 'annapurna');

if(isset($_POST['login']))
{
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	$query = "SELECT * FROM logininfodata WHERE email = '$email' AND password='$password' ";

	$result = mysqli_query($con, $query);

	if(mysqli_num_rows($result)==1)
	{
		$_SESSION['user_name'] = $email;
		header('location:display.php');

	}
	else
	{
		echo"Incorrect Password or Email";
	}

}


?>