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


</head>


<body>
    <div class="logo">
       <img class="thaliaLogo" src="Screenshot 2023-11-16 221803 1.png" alt="Thalia" >
    </div>

  <div class="formular">
    <form onsubmit="validimi()" method="POST">



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

  <style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }
  body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-size: cover;
    background-position: center;


    
  }

  .logo{
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    justify-content: center;
    top:0px;
    margin-left: 20px;
    position:absolute;
    padding: 5px;
    background-color: white;
    width:100%
  }

  .formular{
    width: 420px;
    margin-top: 89px;
    padding: 30px 40px;
  }

  .formular .input-box{
    position: relative;
    width: 100%;
    height: 50px;
    
    margin: 20px 0;
  }
  .input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(255, 255, 255, .2);
    border-radius: 40px;
    font-size: 16px;
    color: #fff;
    padding: 20px 45px 20px 20px;
  }
  .formular label{
    color: black;

  }
  .input-box input::placeholder{
    color: #fff;
  }
  .formular .remember-forgot{
    display: flex;
    justify-content: space-between;
    font-size: 14.5px;
    margin: -15px 0 15px;
  }
  .remember-forgot label input{
    accent-color: #fff;
    margin-right: 3px;
  
  }
  .remember-forgot a{
    color: black;
    text-decoration: none;
  
  }
  .remember-forgot a:hover{
    text-decoration: underline;
  }
  .formular .btn{
    width: 100%;
    height: 45px;
    background: #fff;
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: #333;
    font-weight: 600;
  }
#register{
  margin-left: 143px;
  text-decoration:none;
  margin-top: 10px;
  color: black;
}</style>

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