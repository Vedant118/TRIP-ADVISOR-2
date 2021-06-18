<?php

$con = mysqli_connect('localhost','root');

if($con){

echo "connection sucessful";

}else{

    echo "no connection";
}

mysqli_select_db($con, 'vedant');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$query = " insert into assignment (name, email, phone, message)
value ('$name','$email','$phone','$message') ";

mysqli_query($con,$query);

header('location:contact.php');

?>