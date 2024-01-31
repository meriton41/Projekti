    <nav>
         
            <img class="thaliaLogo" src="Screenshot 2023-11-16 221803 1.png" alt="Thalia" height="9%" width="14%">
        
    
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
            <a href="#">Tablets</a>
            <a href="Main.php">Home</a>
            <a href="us.php">About<gap>Us</a>
            <a href="ContactUs.php">Contact<gap>Us</a>
            <a href="LogOut.php" style='color:blue;'>Log<gap>Out</a>
        </ul>
    </nav>
    <style>

    body {
    display: flex;
    box-sizing: border-box;
    margin: 0;
    flex-direction: column;
    padding-top: 140px; 
     background-color: #fdfdfd; 
}
h2{
    color: #292929;
    font-family: Circular,Segoe UI,Candara,Bitstream Vera Sans,DejaVu Sans,Trebuchet MS,Verdana,Verdana Ref,"sans-serif";
    font-size: 16px;
    font-weight: 900;
    line-height: 22px;
    text-decoration: none;
}
nav {
    display: flex;
    width: 100%;
    align-items: baseline;
    background-color: white;
    box-shadow: 0px 0px 10px gray;
    height: 150px;
    position: fixed;
    top: 0;
    z-index: 1000; 
}
.thaliaLogo{
    display: flex;
    box-sizing: border-box;
    bottom: 86%;
    left:8%;
    position:fixed;

}
.search-container{
    display: flex;
    height: 50%;
    justify-content: center;
    margin-left: 29%;
}

.search-input{
    display: flex;
    width: 430px;
    height: 70%;
    font-size: 16px;
    font-family: Circular,Segoe UI,Candara,Bitstream Vera Sans,DejaVu Sans,Trebuchet MS,Verdana,Verdana Ref,"sans-serif";
    font-weight:500;
    border: 1px solid gray;
    border-radius: 0px;
    padding-left: 15px;
}

.search-button{
    display: flex;
    box-sizing: border-box;
    border: 1px solid gray;
    border-radius: 0%;
    width: 46px;
    height: 56px;
    background-image: url("data:image/svg+xml,%3Csvg width='20' height='20' viewBox='0 0 20 20' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M12.0751 1.11618C8.2726 -1.13369 3.36619 0.12492 1.11626 3.92737C-1.13368 7.72982 0.124831 12.6363 3.92724 14.8863C6.89709 16.6436 10.5404 16.2607 13.0656 14.1971L18.8686 20.0001L19.9999 18.8687L14.1962 13.065C14.447 12.7575 14.678 12.4274 14.8862 12.0755C15.9668 10.2494 16.2777 8.0689 15.7505 6.01361C15.2233 3.95832 13.9012 2.19665 12.0751 1.11618ZM2.32113 4.64031C4.17733 1.50328 8.22512 0.464928 11.3622 2.32107C12.8687 3.21246 13.9594 4.66584 14.3944 6.36145C14.8293 8.05707 14.5728 9.85601 13.6813 11.3625C11.825 14.4995 7.77719 15.5377 4.6402 13.6814C1.5032 11.8251 0.464932 7.77733 2.32113 4.64031Z' fill='white'/%3E%3C/svg%3E%0A");
    background-color:#1a1aaa;
    background-position: 50%;
    background-repeat: no-repeat;
    border-radius: 0;
    color: transparent;
    cursor: pointer;
    outline: none;
}

.Items{
    font-weight: 400;
    line-height: 16px;
    list-style-type: none;
    margin: 0;
    padding: 0px;
    margin-left:20px;
    margin-top: 20px;
    overflow: hidden;
    background-color: #333;
    font-family:Circular,Segoe UI,Candara,Bitstream Vera Sans,DejaVu Sans,Trebuchet MS,Verdana,Verdana Ref,"sans-serif" ;
    position: relative;
}
.Items li{
    float: left;
}
.Items li a{
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
.Items a:hover:not(.active){
    background-color: #000000;
}
.active{
    background-color: #000000;
}


.Librat{
    display: inline-flex;
    position:fixed;
    list-style-type: none;
    color: black;
    margin-left: -65px;
    font-weight: 500;
    top: 12%;
    font-family: Circular,Segoe UI,Candara,Bitstream Vera Sans,DejaVu Sans,Trebuchet MS,Verdana,Verdana Ref,"sans-serif";
}

.Librat a{
    color:black;
    text-decoration: none;
    display: flex;
    padding-left: 19%;
    justify-content: space-evenly;
    flex-wrap:wrap;
    font-size: small;
    padding-top: 5%;
}
/*Responsiviteti*/
@media only screen and (max-width: 768px) {
    .search-container {
        margin-top: 3%; 
        margin-left: 13%;
        width: 30%;
        height: 20%;
    }

    .search-button {
        width: 10%; 
    }

    .div-items {
        display: flex;
        flex-shrink: calc(3);
        margin-right: 5%; 
    }

    .Items li {
        margin-right: 8px; 
    }

    .Librat {
        top: 8%; 
        display: flex;
        flex-wrap: wrap;
    }
    .Librat a{
        display: flex;
        flex-wrap: wrap;
        width: 1%;
    }

    #pic {
        margin-top: 80px; 
    }

    .thaliaLogo {
        bottom: 80%; 
        left: 2%; 
    }
}
</style>
