<?php

$con = mysqli_connect('localhost','root');

if ($con) {
	echo "Connection Done";
}else{
	echo "Something went wrong";
}

mysqli_select_db($con, 'annapurna');

$donor = $_POST['donor'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];

$query = " insert into userinfodata (donor, email, mobile, address) 
values('$donor', '$email', '$mobile', '$address')";


echo "$query";

mysqli_query($con, $query);

header('location:thankyou.php');
 ?>