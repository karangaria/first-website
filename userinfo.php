<?php

$con = mysqli_connect('localhost','root');
if($con){
	echo "connection successfully";
}else{
	echo "no connection";
}

mysqli_select_db($con, 'sasa_project');



$user = $_POST['user'];
$email= $_POST['email'];
$mobile = $_POST['mobile'];
$comments=$_POST['comments'];

$query = " insert into users1(user,email,mobile,comments)
values('$user','$email','$mobile','$comments')";
mysqli_query($con, $query);



header('location:index.php');
?>