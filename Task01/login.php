<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body style="background-color: gray;">
    <div class="form">
        <!-- form.html -->
        <center>
            <form method="POST" action="process.php">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" size="100%" required>
                <br><br>

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" size="100%" required>
                <br><br>
                <label for="message">Message:</label>
                <textarea name="message" rows="20" cols="80" id="message" required></textarea>
                <br><br>
                <input type="submit" style="padding: 8px; border-radius:12px; cursor:pointer;" value="Submit">
            </form>

        </center>
    </div>
</body>

</html>