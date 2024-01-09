<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $imageData = $_POST['image'];

    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'interntask6';

    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);


    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    
    $sql = "INSERT INTO task6 (image_data) VALUES ('$imageData')";
    if (mysqli_query($conn, $sql)) {
        echo "Image uploaded successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
