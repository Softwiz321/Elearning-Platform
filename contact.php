<?php
$conn= new mysqli("localhost","root","","contact");
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$data="INSERT INTO `contacts` (`name`, `email`, `subject`,`message`) VALUES ('$name', '$email', '$subject','$message')";
if ($conn->query($data)==true) {
       echo "MESSAGE SENDED!!";
}
else {
       echo "Retry Again!!";
}
?>