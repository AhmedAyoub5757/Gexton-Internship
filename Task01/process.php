<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$conn = new mysqli('localhost','root','','interntask1');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);

}
else
{
    $stmt  = $conn->prepare("insert into gextask1(name,email,message)
    values(?,?,?)");
    $stmt->bind_param("sss",$name,$email,$message);
    $stmt->execute();
    echo "Successfully Registered!";
    $stmt->close();
    $conn->close();

}
?>