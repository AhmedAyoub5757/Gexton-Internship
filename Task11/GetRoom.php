<?php

$myroom = $_POST['room'];

if (strlen($myroom) > 20 or strlen($myroom) < 2) {
    echo "<script language='javascript' type='text/javascript'>alert('please enter a name between 2 and 20 characters');</script>";
    echo "<script language='javascript' type='text/javascript'>window.location='http://localhost/task11';</script>";
} else if (!ctype_alnum($myroom)) {

    echo "<script language='javascript' type='text/javascript'>alert('please enter an alpha numeric string');</script>";
    echo "<script language='javascript' type='text/javascript'>window.location='http://localhost/task11';</script>";
} else {
    include "connect.php";
}
// echo "hello world";

$sql = "SELECT * FROM `mytask11` WHERE roomname = '$myroom';";
$result = mysqli_query($conn, $sql);

// $result = mysqli_query($conn,$sql);
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        echo "<script language='javascript' type='text/javascript'>alert('This room is already exists. Please choose a new one.');</script>";
        echo '<script>window.location="http://localhost/task11";</script>";';
    } else {
        $sql  = "INSERT INTO `mytask11` (`roomname`, `stime`) VALUES ('$myroom', CURRENT_TIMESTAMP);";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Your Room Has Been Created. You Are Good To GO.');  </script>";
            echo '<script>window.location="http://localhost/task11/rooms.php?roomname=' . $myroom . '";</script>';
        }
    }
} else {
    echo "Error" . mysqli_error($conn);
}
?>