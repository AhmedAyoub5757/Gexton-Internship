<?php

$server= "localhost";
$username= "root";
$password= "";
$database= "interntask11";

$conn = mysqli_connect($server,$username,$password,$database);

if (!$conn){
    die("Could not connect to database".mysqli_connect_error());
}
// else{
//     echo "<script>alert('connected to the database successfully');</script>";
// }

?>
