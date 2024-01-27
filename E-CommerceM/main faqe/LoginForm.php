<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $confirmpassword = $_POST['confirmpassword'];

        if(!empty($email) && !empty($pass) && !is_numeric($email) && !empty($confirmpassword)){
            $query = "insert into form (name, email, pass,confirmpassword) values('$name', '$email', '$pass','$confirmpassword')";

            mysqli_query($con, $query);
            echo "<script type='text/javascript'> alert('Successfully Register')</script>";
        }
        else{
            echo "<script type='text/javascript'> alert('Please Enter some Valid Information')</script>";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title id="title">Thalia Online Shop | buy Books, eBooks, Toys etc. | Thalia </title> 
  <link rel="stylesheet" href="LoginForm.css">

</head>
<body>
  <div class="formular">
    <form onsubmit="validimi()" method="POST">
      <h1>SignUp</h1>

        <label>Username:</label>
        <input type="text" placeholder="Username" id="emri" name="name" class="input-box" required>
        <label>E-mail:</label>
        <input type="text" placeholder="E-mail" id="email" name="email" class="input-box" required>
        <label>Password:</label>
        <input type="password" placeholder="Password" id="fjalekalimi" name="pass" class="input-box" required>
        <label>Confirm password:</label>
        <input type="password" placeholder="Confirm Password" id="confirmpassword" name="confirmpassword" class="input-box" required>


      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
        <a href="#">Forgot Password</a>
      </div>
      <button type="submit" class="btn">Register</button>
      <a  href="Main.php"><p id="register">LogIn</p></a>
    </form>
  </div>

  <script>
      function validimi() {
      let emri = document.getElementById("emri").value;
      let email = document.getElementById("email").value;
      let fjalekalimi = document.getElementById("fjalekalimi").value;
      let confirmpassword = document.getElementById("confirmpassword").value;

      let emriRegex = /^[a-zA-Z\s]+$/;
      if (!emriRegex.test(emri)) {
        alert("Please enter a valid username!");
        return false;
      }

      let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        alert("Please enter a valid email!");
        return false;
      }

      if(fjalekalimi.length<8){
        alert("Password should be more than 8 characters long");
        return false;
      }

      if (fjalekalimi !== confirmpassword) {
        alert("Passwords aren't matching!");
        return false;
      }
      alert("The account was created sucesfully!");
      return true;
    }
  </script>
</body>
</html>