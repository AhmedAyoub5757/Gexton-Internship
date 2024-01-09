<!DOCTYPE html>
<html>

<head>
    <title>Task 6</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css">
    <style>
        .modal-body {
            text-align: center;
        }

        #result {
            margin-top: 20px;
        }

        #a {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            /* margin-top: 200px; */

        }
    </style>
</head>

<body>
    <br><br><br><br>
    <div class="container mt-5" id="a">
        <h1 class="my-5">Image Upload and Crop</h1>

        <form method="POST" enctype="multipart/form-data" action="upload.php" class="my-4">
            <div class="form-group">
                <input type="file" name="image" id="image" accept="image/*" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
        </form>
    </div>


    <div class="modal fade" id="cropModal" tabindex="-1" role="dialog" aria-labelledby="cropModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="cropModalLabel">Crop Image</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="upload-image"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Crop</button>
                    <button type="submit" class="btn btn-success" id="crop-button">Upload</button>

                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>
    <script>
        $(document).ready(function() {

            var croppie = $('#upload-image').croppie({
                enableExif: true,
                viewport: {
                    width: 300,
                    height: 300,
                    type: 'square'
                },
                boundary: {
                    width: 400,
                    height: 400
                }
            });


            $('#image').on('change', function() {
                var reader = new FileReader();
                reader.onload = function(e) {
                    croppie.croppie('bind', {
                        url: e.target.result
                    });
                }
                reader.readAsDataURL(this.files[0]);
                $('#cropModal').modal('show');
            });


            $('#crop-button').on('click', function(e) {
                croppie.croppie('result', {
                    type: 'canvas',
                    size: 'viewport'
                }).then(function(response) {
                    $.ajax({
                        url: 'upload.php',
                        type: 'POST',
                        data: {
                            image: response
                        },
                        success: function(data) {
                            $('#cropModal').modal('hide');
                            alert('Image uploaded successfully!');
                        }
                    });
                });
            });
        });
    </script>
</body>

</html>