<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ContactUs.css">
</head>
<body>
<div class="forma">
        <form onsubmit="return validateform()" method="POST">
            <div class="contact">Contact Us</div>
            <p>Emri:<br>
            <input type="text" id="emri" name="emri"></p>
            <p>Mbiemri:<br>
            <input type="text" id="mbiemri" name="mbiemri"></p>
            <p>E-mail:<br>
            <input type="text" id="email" name="email"></p>
            <p>Numri Telefonit::<br>
            <input type="text" id="nrtelefonit" name="nrtelefonit"></p>
            <p>A keni ndonje pyetje?<br>
            <textarea id="comment" cols="40" rows="10" name="comment" style="border-color: #eeeeee; border:2px solid #eeeeee"></textarea></p>
            <p><input type="submit" id="submit-btn" value="Send" name='input'></p>
        </form>
    </div>
    <?php
                if(isset($_POST['input'])){
                      include_once 'function.php';

                      $obj= new Contact();
                      $res = $obj->contact_us($_POST);

                      if($res == true){
                        echo "<script>alert('Query successfully Submitted .Thank You')</script>";
                      }
                      else{
                        echo "<script>alert('Something Went wrong!!')</script>";
                      }
                }

            ?>

    <script>
        function validateform() {
            var email = document.getElementById('email').value;
            var nrtelefonit = document.getElementById('nrtelefonit').value;
            var phoneregex = /^(+383|0)?[1-9]\d{7,8}$/;

            var emailRegex = /^[^\s@]+@[^\s@]+.[^\s@]+$/;

            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address');
                return false;
            }

            if (!phoneregex.test(nrtelefonit)) {
                alert('Please enter a valid phone number');
                return false;
            }

            return true;
        }
    </script>

</body>
</html>