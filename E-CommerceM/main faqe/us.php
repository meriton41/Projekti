
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <script src="us.js"></script>
  
    <?php include('header.php')?>

</head>


 <body>  
  
  <style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.slider-wrap.image-list{  
     display: flex;
     gap: 18px;
     font-size: 0;
     margin-bottom: 30px;
     overflow-x: auto;
     scrollbar-width: none;
     grid-template-columns: repeat(10,1fr);
}
.slider-wrap.image-list::-webkit-scrollbar{
    display: none;
    
}
body{
display* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
}
  body {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background-color: rgb(238, 247, 239);
    flex-wrap: nowrap;
  }
  
  .container {
    max-width: 1200px;
    width: 95%;
    margin-top: 2em;
  }
  
  .slider-wrapper {
    position: relative;
  }
  
  .slider-wrapper .slide-button {
    position: absolute;
    top: 50%;
    outline: none;
    border: none;
    height: 50px;
    width: 50px;
    z-index: 5;
    color: #fff;
    display: flex;
    cursor: pointer;
    font-size: 2.2rem;
    background: #000;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transform: translateY(-50%);
  }
  
  .slider-wrapper .slide-button:hover {
    background: #404040;
  }
  
  .slider-wrapper .slide-button#prev-slide {
    left: -25px;
    display: none;
  }
  
  .slider-wrapper .slide-button#next-slide {
    right: -25px;
  }
  
  .slider-wrapper .image-list {
    display: flex;
    grid-template-columns: repeat(10, 1fr);
    gap: 18px;
    font-size: 0;
    list-style: none;
    margin-bottom: 30px;
    overflow-x: auto;
    scrollbar-width: none;
  }
  
  .slider-wrapper .image-list::-webkit-scrollbar {
    display: none;
  }
  
  .slider-wrapper .image-list .image-item {
    width: 325px;
    height: 400px;
    object-fit: cover;
  }
  
  .container .slider-scrollbar {
    height: 24px;
    width: 100%;
    display: flex;
    align-items: center;
  }
  
  .slider-scrollbar .scrollbar-track {
    background: #ccc;
    width: 100%;
    height: 2px;
    display: flex;
    align-items: center;
    border-radius: 4px;
    position: relative;
  }
  
  .slider-scrollbar:hover .scrollbar-track {
    height: 4px;
  }
  
  .slider-scrollbar .scrollbar-thumb {
    position: absolute;
    background: #000;
    top: 0;
    bottom: 0;
    width: 50%;
    height: 100%;
    cursor: grab;
    border-radius: inherit;
  }
  
  .slider-scrollbar .scrollbar-thumb:active {
    cursor: grabbing;
    height: 8px;
    top: -2px;
  }
  
  .slider-scrollbar .scrollbar-thumb::after {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    top: -10px;
    bottom: -10px;
  }
  
  /* Stilizim per telefona dhe tableta*/
  @media only screen and (max-width: 1023px) {
    .slider-wrapper .slide-button {
      display: none !important;
    }
  
    .slider-wrapper .image-list {
      gap: 10px;
      margin-bottom: 15px;
      scroll-snap-type: x mandatory;
    }
  
    .slider-wrapper .image-list .image-item {
      width: 280px;
      height: 380px;
    }
  
    .slider-scrollbar .scrollbar-thumb {
      width: 20%;
    }
  }
  
.end{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px;

} 

@media only screen and ( max-width: 100px) {
    .main{
        flex-direction:column;
       flex-wrap: nowrap;
       background-color: rgb(250, 240, 250);
       text-transform: capitalize;
    }
    
}

footer{
  margin-top: 5em;
  display: inline;
  background-color: #DFDFDF;
  font-family: Circular,Segoe UI,Candara,Bitstream Vera Sans,DejaVu Sans,Trebuchet MS,Verdana,Verdana Ref,sans-serif;
  font-size: 15px;
  width: 100%;
  height: 300%;
}
.AboutUs p{
  margin-left: 70px;
}
.AboutUs a{
  margin-left: 30px;
}

footer ul a{
  margin-left:1%;
  list-style: none;
  text-decoration: none;
  color: #111;
  display: block;
}

.Service{
  margin-top:-210px;
  margin-left: 350px;
}
.Service p{
  margin-left: 49px;
 margin-top: 12px;
}
.Shopp{
  margin-top: -210px;
  margin-left: 750px;
  
}
.Shopp p{
  margin-top: 14px;
  margin-left: 45px;
}
.AboutUs ul{
  margin-top: 15px;
  margin-left: 40px;
}
.Service ul{
  margin-top: 15px;
  margin-left: 42px;
}
.Shopp ul{
  margin-top: 13px;
  margin-left: 41px;
}
.footer_elements{
margin-left: 10%;
}

.SocialMedias{
  background-color: white;
  width: 100%;
}
#Payment{
  margin-left: 5%;
  margin-top: 3%;
  width: 60%;
  height: 60%;
}
#FB{
  margin-left: 100px ;
  height: 50px;
  width: 50px;
}
#IG{
  margin-left: 50px ;
  height: 50px;
  width: 50px; 
}
#Tiktok{
  margin-left: 50px ;
  height: 50px;
  width: 50px; 
}
#ps{
margin-left: 37%;
}
</style>




     <div class="container">
      <div class="slider-wrapper">
        <button id="prev-slide" class="slide-button material-symbols-rounded">
          <
        </button>
        <ul class="image-list">
          <img class="image-item" src="bg.jpg" alt="img-1"  />
          <img class="image-item" src="iphone15.jpg" alt="img-2" />
          <img class="image-item" src="S23.jpg" alt="img-10" />
          <img class="image-item" src="f11.jpg" alt="img-6" />
          <img class="image-item" src="Iphonee14.jpg" alt="img-3" />
          <img class="image-item" src="0af455b3ea63d60ed7c53128a3ff215f.png" alt="img-4" />
          <img class="image-item" src="iphone12.jpg" alt="img-5" />
          <img class="image-item" src="s22.jpg" alt="img-7" />
          <img class="image-item" src="f11.jpg" alt="img-8" />
          <img class="image-item" src="Iphone13.jpg" alt="img-10" />
        </ul>

        <button id="next-slide" class="slide-button material-symbols-rounded">
          >
        </button>
      </div>
      <div class="slider-scrollbar">
        <div class="scrollbar-track">
          <div class="scrollbar-thumb"></div>
        </div>
      </div>
    </div>


    <?php include('footer.php')?>
 

  </body>
  </html>