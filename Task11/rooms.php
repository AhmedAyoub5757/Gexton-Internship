<?php

$roomname = $_GET["roomname"];

include "connect.php";

$sql = "SELECT * FROM `mytask11` WHERE `roomname` = '$roomname'";

$result = mysqli_query($conn, $sql);

if ($result) {
    if (mysqli_num_rows($result) == 0) {
        echo "<script>alert('The Room Does Not Exist. Try Creating A One');</script>";
        echo "<script>window.location='http://localhost/mytask11';</script>";
    }
} else {
    echo "Error" . mysqli_error($conn);
}

// echo "Let's Chat Now";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's Chat</title>
    <link rel="stylesheet" href="css/my.css">
    <link rel="stylesheet" href="css/tyles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/product/" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css
" />
    <!-- <link href="product.css" rel="stylesheet" /> -->


    <link href="../docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="page-content page-container" id="page-content">
            <div class="padding">
                <div class="row container d-flex justify-content-center">
                    <div class="col-md-6">
                        <div class="card card-bordered">
                            <div class="card-header">
                                <h4 class="card-title"><strong>Chat - <?php echo $roomname; ?></strong></h4>
                                <a class="btn btn-xs btn-secondary" href="#" data-abc="true">Let's Chat App</a>
                            </div>


                            <div class="ps-container ps-theme-default ps-active-y" id="chat-content" style="overflow-y: scroll !important; height:400px !important;">
                                <div class="any">

                                    <!-- <div class="media media-meta-day">Today</div> -->

                                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                        <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                    </div>
                                    <div class="ps-scrollbar-y-rail" style="top: 0px; height: 0px; right: 2px;">
                                        <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 2px;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="publisher bt-1 border-light">
                                <img class="avatar avatar-xs" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">
                                <input class="publisher-input" type="text" name="usermsg" id="usermsg" placeholder="Write something">
                                <button class="btn btn-oultine-success" name="submitmsg" id="submitmsg">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script>
        setInterval(myfunc, 1000);

        function myfunc() {
            $.post("display.php", {
                    room: '<?php echo $roomname ?>'
                },
                function(data, status) {
                    document.getElementsByClassName('any')[0].innerHTML = data;
                }
            )
        }

        var input = document.getElementById("usermsg");

        input.addEventListener("keypress", function(event) {

            if (event.key === "Enter") {

                event.preventDefault();

                document.getElementById("submitmsg").click();

            }
        });



        $("#submitmsg").click(function() {
            var cm = $("#usermsg").val();
            $.post("postmsg.php", {
                    text: cm,
                    room: '<?php echo $roomname ?>',
                    ip: '<?php echo $_SERVER['REMOTE_ADDR']; ?>'
                },
                function(data, status) {
                    document.getElementsByClassName('any')[0].innerHTML = data;
                });
            $("#usermsg").val("");
            return false;
        });
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="../docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</body>

</html>