<?php

$con = mysqli_connect('localhost','root');
if ($con){
	echo "successful";
}
else{
	echo "no con";
}

mysqli_select_db($con,'login_register_pure_coding');
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$que1 = $_POST['que1'];
$que2 = $_POST['que2'];



$query="INSERT INTO `dondata`( `name`, `email`, `phone`, `address`, `que1`, `que2`) VALUES ('[$name]','[$email]','[$phone]','[$address]','[$que1]','[$que2]')";

mysqli_query($con,$query);

?>