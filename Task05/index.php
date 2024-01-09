<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="google-signin-client_id"
      content="758224955914-24ueutqq28u9n5eatrr86blnfaebge2n.apps.googleusercontent.com"
    />

    <title>Task 5</title>
    <link rel="stylesheet" href="styles.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,100italic,300,300italic,regular,italic,700,700italic,900,900italic"
      rel="stylesheet"
    />
    <script>
      
        window.addEventListener('DOMContentLoaded', function() {
            const inputFields = document.querySelectorAll('input[type="text"], input[type="password"], input[type="email"]');
            inputFields.forEach(function(inputField) {
                inputField.addEventListener('focus', function() {
                    this.placeholder = '';
                });
                inputField.addEventListener('blur', function() {
                    this.placeholder = this.getAttribute('data-placeholder');
                });
            });
        });
    </script>
  </head>
  <body>
    <center><h1>Welcome</h1></center>
    <div class="form">
      <form action="">
        <label for="firstname">
          <b> First Name : </b>
          <input
            type="text"
            name="firstname"
            placeholder="First Name"
            class="fc"
            id="fn"
          />

          <br />
        </label>
        <label for="lastname">
          <b> Last Name : </b>
          <input
            type="text"
            name="lastname"
            placeholder="Last Name"
            class="fc"
            id="ln"
          />
          <br />
        </label>
        <b> Username : </b>
        <label for="email">
          <input
            type="email"
            name="username"
            placeholder="Username or email address"
            class="fc"
            id="un"
          />
          <br />
        </label>
        <b> Password : </b>
        <label for="password">
          <input
            type="password"
            name="password"
            placeholder="Password"
            class="fc"
            id="pswd"
          />
          <br />
        </label>
        <button class="btn">Submit</button>
        <div class="or">
          <hr />
          <span class="ort"
            ><b><i>OR</i></b></span
          >
          <hr />
        </div>
        <div class="g-signin2" data-onsuccess="onSignIn"></div>
      </form>
    </div>
    <div class="ui">
      <p>Name :</p>
      <p id="name"></p>
      <p>Profile Picture :</p>
      <img width="100%" height="100%" id="image"/>
      <p>Email :</p>
      <p id="email"></p>
      <button class="so" onclick="logout()">Logout</button>
    </div>
    <script src="myscript.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  </body>
</html>
