<?php
$conn= new mysqli("localhost","root","","register_account");
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];

$data="INSERT INTO `account` (`name`, `email`, `number`) VALUES ('$name', '$email', '$number')";
if ($conn->query($data)==true) {
       echo "WELCOME TO TECHEDUCA!!";
}
else {
       echo "Retry Again!!";
}
?>