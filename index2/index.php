
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>HANAN </title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">RESORT RESERVATION</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rooms.php">Room</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="dinning.php">Dinning</a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="info.php">Resort Info</a>

                    </li>




                </ul>
            </div>
        </div>
    </nav>

 <br>
<br>
<br>
<br>
<!DOCTYPE html>
<html>
<head>
  <title>Login & Signup Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 4px;
    }

    h2 {
      text-align: center;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .form-group input {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .form-group button {
      width: 100%;
      padding: 8px;
      background-color: #4caf50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .form-group button:hover {
      background-color: #45a049;
    }

    .switch {
      text-align: center;
      margin-bottom: 10px;
    }

    .switch a {
      color: #4caf50;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Login & Signup</h2>
    <div id="login-form">
      <form>
        <div class="form-group">
          <label for="login-email">Email:</label>
          <input type="email" id="login-email" required>
        </div>
        <div class="form-group">
          <label for="login-password">Password:</label>
          <input type="password" id="login-password" required>
        </div>
        <div class="form-group">
          <button type="submit" onclick="login()">Login</button>
        </div>
        <div class="switch">
          <a href="#" onclick="toggleForm()">Don't have an account? Sign up</a>
        </div>
      </form>
    </div>
    <div id="signup-form" style="display: none;">
      <form>
        <div class="form-group">
          <label for="signup-name">Name:</label>
          <input type="text" id="signup-name" required>
        </div>
        <div class="form-group">
          <label for="signup-email">Email:</label>
          <input type="email" id="signup-email" required>
        </div>
        <div class="form-group">
          <label for="signup-password">Password:</label>
          <input type="password" id="signup-password" required>
        </div>
        <div class="form-group">
          <button type="submit" onclick="signup()">Sign Up</button>
        </div>
        <div class="switch">
          <a href="#" onclick="toggleForm()">Already have an account? Login</a>
        </div>
      </form>
    </div>
  </div>

  <script>
    function toggleForm() {
      var loginForm = document.getElementById("login-form");
      var signupForm = document.getElementById("signup-form");

      if (loginForm.style.display === "none") {
        loginForm.style.display = "block";
        signupForm.style.display = "none";
      } else {
        loginForm.style.display = "none";
        signupForm.style.display = "block";
      }
    }

    function login() {
      var email = document.getElementById("login-email").value;
      var password = document.getElementById("login-password").value;

      // Perform login validation and authentication here
      // You can use AJAX to send a request to your server for authentication

      alert("Login successful!");
    }

    function signup() {
      var name = document.getElementById("signup-name").value;
      var email = document.getElementById("signup-email").value;
      var password = document.getElementById("signup-password").value;

      // Perform signup validation and registration here
      // You can use AJAX to send a request to your server for registration

      alert("Signup successful!");
    }
  </script>
</body>
</html>





   

    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>