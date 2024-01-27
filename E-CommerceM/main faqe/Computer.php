<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="title">Thalia Online Shop | buy Books, eBooks, Toys etc. | Thalia </title> 
    <link rel="stylesheet" href="Computers.css">
    

    <?php include('header.php')?>

</head>
<body>
    
    <br><br><br>
    <div class="row"> 
        <div class="column">
          <img src="https://assets.brack.ch/images2/9/4/5/226602549/226602549_xxl.jpg" >
          <img src="https://assets.brack.ch/images2/0/9/2/219789290/219789290_xxl3.jpg" >
          <img src="https://assets.brack.ch/images2/8/1/5/226603518/226603518_xxl.jpg">
          <img src="https://assets.brack.ch/images2/7/9/2/219789297/219789297_xxl3.jpg"> 
          <img src="https://assets.brack.ch/images2/3/2/4/226603423/226603423_xxl.jpg">
          <img src="https://assets.brack.ch/images2/4/0/3/219789304/219789304_xxl3.jpg">
          <img src="https://assets.brack.ch/images2/4/4/4/300604444/300604444_xxl.jpg">
          <img src="https://assets.brack.ch/images2/0/6/4/271317460/271317460_xxl.jpg">
          <img src="https://assets.brack.ch/images2/8/3/6/300604638/300604638_xxl.jpg">
          <img src="https://assets.brack.ch/images2/2/9/6/279815692/279815692_xxl.jpg">
          <img src="https://assets.brack.ch/images2/5/4/4/185202445/185202445_xxl3.jpg">
          <img src="https://assets.brack.ch/images2/4/8/4/57911484/57911484_xxl.jpg">
          <img src="https://assets.brack.ch/images2/4/9/5/200222594/200222594_xxl.jpg">
          <img src="https://assets.brack.ch/images2/8/5/9/215231958/215231958_xxl.jpg">
          <img src="https://assets.brack.ch/images2/7/9/4/215230497/215230497_xxl.jpg">
        
        </div>
      </div>

      <br><br><br>
      <button class="button button1">Show more</button>

      
      <div class="login-container">
        <form class="login-form" onsubmit=" return validimi()">
            <h2 style="font-family:  Circular,Segoe UI,Candara,Bitstream Vera Sans,DejaVu Sans,Trebuchet MS,Verdana,Verdana Ref,"sans-serif";;">I already have an account</h2>
            <label for="email">E-Mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>

            <button type="submit" onclick="validimi()">Login</button><br><br>
            <a href="LoginForm.php" style="text-decoration: none; color:black">Create an account</a>
       </form>
    </div>

      <br><br>
     
  
      <?php include('footer.php')?>
      <script>
        function redirectToSignUp() {
            window.open('LoginForm.php', '_blank');
        }
    
        function validimi() {
            let email = document.getElementById("email").value;
            let password = document.getElementById("password").value;
    
            let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert("Please enter a valid email!");
                return false;
            }
    
            if (password.length < 8) {
                alert("Password should be more than 8 characters long");
                return false;
            }
            
            alert("Login was successful");
            return true;
        }
    </script>




</body>
</html>