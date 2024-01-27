
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="us.css">
    <link rel="stylesheet" href="header.css">
    <script src="us.js"></script>
  
    <?php include('header.php')?>

</head>

 <body>  



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