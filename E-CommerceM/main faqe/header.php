    <nav>
        <a href="Main.php"> 
            <img class="thaliaLogo" src="Screenshot 2023-11-16 221803 1.png" alt="Thalia" height="9%" width="14%">
        </a>
    
        <div class="search-container">
            <input type="text" class="search-input" placeholder="Title, author, keyword, ISBN">
    
            <button class="search-button" type="submit" onclick=funksioniSearch() >
            </button>
        </div>
    
        
        <ul class="Items">
            <li><a href="LoginForm1.php" class="active">My Account</a></li>
            <li><a href="#">Wish List</a></li>
            <li><a href="#">Shopping cart</a></li>
        </ul>
        
        <ul class="Librat">
            <a href="e-commerce.php">Phones</a>
            <a href="Computer.php">Computers&Servers</a>
            <a href="#">TV,Audio,Foto</a>
            <a href="#">Tablets</a>
            <a href="us.php">About<gap>Us</a>
            <a href="ContactUs.php">Contact<gap>Us</a>
            <a href="LogOut.php" style='color:blue;'>Log<gap>Out</a>
        </ul>
    </nav>
<script>
function funksioniSearch() {

    var searchTerm = document.getElementById('searchInput').value; 

    
    console.log("Search term:", searchTerm);}
</script>