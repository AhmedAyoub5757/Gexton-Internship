<?php
    $room = $_POST['room'];
    include "connect.php";

    $sql = "SELECT msg, stime, ip FROM mymsgs WHERE room='$room';";

    $blank = "";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
                    $blank = $blank . '<div class="container">';
                    $blank = $blank . $row['ip'];
                    $blank = $blank . " says: <p>".$row['msg'];
                    $blank = $blank . '</p> <span class="time-right">'.$row["stime"] . '</span></div>';
                }
    }
    echo $blank;
?>