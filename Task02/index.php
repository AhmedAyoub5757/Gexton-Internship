<?php
//making connection to the database

$insert = false;

$server = "localhost";
$username = "root";
$password = "";
$db = "notes";

$conn = mysqli_connect($server, $username, $password, $db);

//checking whter the connection is successfull or 

if (!$conn) {
    die(mysqli_connect_error($conn));
}

// taking or inserting the data from the databse
// echo $_SERVER['REQUEST_METHOD']; it will check whether the method is post or get
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $sql = "INSERT INTO notes (title,description) VALUES ('$title','$description')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        // echo "record was inserted succesfully";
        $insert = true;
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyNotes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    
</head>

<body style="background-color:#FFF5EE	">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#EditModal" hidden>
  Edit Modal
</button>

<!-- Modal -->
<div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="EditModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="EditModalLabel">Edit Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="index.php" method="POST">
            <div class="mb-3">
                <input type="hidden" name="snoEdit" id="snoEdit">
                <label for="title" class="form-label">Notes Title</label>
                <input type="title" class="form-control" id="titleedit" name="titleedit" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="description" id="description" class="form-label">Notes Description</label>
                <textarea class="form-control" id="descriptionedit" name="descriptionedit" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Note</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MyNotes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <?php
    if ($insert) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Success!</strong> Your Note Has Been Added Successfully.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
    }

    ?>

    <div class="container my-4">
        <h2>Add Your Notes Here</h2>
        <form action="index.php" method="POST">
            <div class="mb-3">
                <label for="title" class="form-label">Notes Title</label>
                <input type="title" class="form-control" id="title" name="title" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="description" id="description" class="form-label">Notes Description</label>
                <textarea class="form-control" id="description" name="description" rows="8"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Note</button>
        </form>
    </div>

    <div class="container my-4">
        <!-- in this section i will store the data collected form the database -->
        <h3>Your Notes</h3>
        <hr>
        <table class="table table-striped table-dark" id="mytable">
            <thead>
                <tr>
                    <th scope="col">Sno</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM notes";
                $result = mysqli_query($conn, $sql);
                $x = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $x = $x + 1;
                    echo "<tr>
                <th scope='row'>" . $x . "</th>
                <td >" . $row['title'] . "</td>
                <td>" . $row['description'] . "</td>
                <td><button type='button' class='btn btn-primary edit' id=".$row['title'].">Edit</button><button type='button' class=' btn btn-danger mx-1'>Delete</button></td>
                </tr>";
                    // will add the functionality of both buttons later.
                    // echo "<br>";
                }
                ?>

            </tbody>

        </table>

    </div>
    <hr>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- below is the jquery cdn link -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha25+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- below is the jquery data table link  -->
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        //jquery script for data tables
        $(document).ready(function() {
            $('#mytable').DataTable();
        });
    </script>
    <script>

      edits  =  document.getElementsByClassName('edit');
      Array.from(edits).forEach((element)=>{
        element.addEventListener("click", (e)=>{
            tr = e.target.parentNode.parentNode;
            titlle = tr.getElementsByTagName("td")[0].innerText;
            description = tr.getElementsByTagName("td")[1].innerText;
            console.log(titlle,description);
            titleedit.value=titlle;
            descriptionedit.value=description;
            snoEdit.value = e.target.id;
            $('#EditModal').modal('toggle');
        })
      })

    </script>
</body>

</html>