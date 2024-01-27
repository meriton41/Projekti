    <nav>
        <a href="Main.php"> 
            <img class="thaliaLogo" src="Screenshot 2023-11-16 221803 1.png" alt="Thalia" height="9%" width="14%">
        </a>
    
        <div class="search-container">
            <input type="text" class="search-input" placeholder="Title, author, keyword, ISBN">
    
            <button class="search-button" type="submit" onclick="funksioniSearch()" >
            </button>
        </div>
    
        
        <ul class="Items">
            <li><a href="LoginForm1.php" class="active">My Account</a></li>
            <li><a href="#">Wish List</a></li>
            <li><a href="#">Shopping cart</a></li>
        </ul>
        
        <ul class="Librat">
            <a href="e-commerce.php">Phones,Tabl ets</a>
            <a href="Computer.php">Computers&Servers</a>
            <a href="#">TV,Audio,Foto</a>
            <a href="#">Gaming</a>
            <a href="#">Accessory</a>
            <a href="us.php">About Us</a>
            <a href="#">Contact Us</a>
        </ul>
    </nav>
    <!-- <style>

        .login-container {
            display: none;
            position: absolute;
            top: 70px; 
            right: 160px; 
            background-color: white;
            z-index: 1000;
            padding: 10px; 
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2); 
            border-radius: 5px; 
            max-width: 200px; 
            text-align: center; 
        }

        .login-form {
            margin: 0;
            color: #292929;
            font-family: Circular,Segoe UI,Candara,Bitstream Vera Sans,DejaVu Sans,Trebuchet MS,Verdana,Verdana Ref,"sans-serif";
            font-size: 15px;
            font-weight: 700;
            line-height: 22px;
            text-decoration: none;

        }

        .login-form input {
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 10px;
            padding: 5px;
            
        }

        .login-form button {
            width: 69%;
            padding: 8px;
            color: white;
            background-color: #1a1aaa;
            border: 0;
            border-radius: 23px;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-family: Circular,Segoe UI,Candara,Bitstream Vera Sans,DejaVu Sans,Trebuchet MS,Verdana,Verdana Ref,"sans-serif";
            font-size: 17px;
            font-weight: 700;
            line-height: 30px;
            outline: none;
            padding: 8px 30px;
            position: relative;
            text-align: center;
            text-decoration: none;

        } -->

    <!-- </style> -->
    <!-- <script>
        document.addEventListener("DOMContentLoaded", function () {
            const loginContainer = document.querySelector('.login-container');
            const myAccountLink = document.querySelector('.Items .active');
            const loginForm = document.querySelector('.login-form');

            myAccountLink.addEventListener('click', function (event) {
                event.preventDefault();

                loginContainer.style.display = (loginContainer.style.display === 'flex') ? 'none' : 'flex';
            });


            document.addEventListener('click', function (event) {
                if (!loginContainer.contains(event.target) && event.target !== myAccountLink) {
                    loginContainer.style.display = 'none';
                }
            });
        });
    </script>

 -->
