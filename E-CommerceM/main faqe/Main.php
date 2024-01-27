<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="title">Thalia Online Shop | buy Books, eBooks, Toys etc. | Thalia </title> 

    <script src="config_page1.json" type="application/json" id="config"></script>

    <link rel="stylesheet" href="First.css">
    <link rel="stylesheet" href="header.css">
    <?php include('header.php')?>

</head>


<body>

    <div class="slideshow-container">
   
    <div class="mySlides fade">
      <a href="Computer.php" target="_blank"> <img src="https://assets.brack.ch/images2/6/2/4/311943426/311943426_xxl3.jpg" style="width:100%"></a>
    </div>
    <div class="mySlides fade">
        <a href="Computer.php" target="_blank"><img src="https://assets.brack.ch/images2/1/9/3/287091391/287091391_xxl3.jpg" style="width:100%"></a>
    </div>
    
    <div class="mySlides fade">
       <a href="e-comerce.php" target="_blank"> <img src="https://assets.brack.ch/images2/5/5/3/287091355/287091355_xxl3.jpg" style="width:100%"></a>
    </div>

    <div class="mySlides fade">
        <a href="e-comerce.php" target="_blank"> <img src="https://assets.brack.ch/images2/9/7/2/268281279/268281279_xxl3.jpg" style="width:100%"></a>
    </div>

    <div class="mySlides fade">
       <a href="e-comerce.php" target="_blank"> <img src="https://assets.brack.ch/images2/2/8/2/268281282/268281282_xxl3.jpg" style="width: 100%;"></a>
    </div>

    <div class="mySlides fade">
        <a href="Computer.php" target="_blank"> <img src="https://assets.brack.ch/images2/3/2/4/287091423/287091423_xxl3.jpg" style="width: 100%;"></a>
    </div>

    <div class="mySlides fade">
        <a href="Computers.php" target="_blank"> <img src="https://assets.brack.ch/images2/0/6/4/287091460/287091460_xxl3.jpg" style="width: 100%;"></a>
    </div>

    <div class="mySlides fade">
        <a href="Computer.php" target="_blank"> <img src="https://assets.brack.ch/images2/6/4/6/221362646/221362646_xxl3.jpg" style="width: 100%;"></a>
    </div>
    
    </div>


    <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
    </div>
      
      <script>
      let slideIndex = 0;
      showSlides();
      
      function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 3000); 
      }
      </script>
    <br><br><br><br>

    <div class="row"> 
        <div class="column">
          <img src="https://assets.brack.ch/images2/1/3/3/287091331/287091331_xxl3.jpg" >
          <img src="https://assets.brack.ch/images2/9/8/3/181734389/181734389_xxl3.jpg">
          <img src="https://assets.brack.ch/images2/4/4/6/302833644/302833644_xxl3.jpg">
          <img src="Screenshot 2023-12-09 153651.png">
          <img src="https://assets.brack.ch/images2/7/1/4/311943417/311943417_xxl3.jpg">
          <img src="https://assets.brack.ch/images2/0/1/4/311943410/311943410_xxl3.jpg">
          <img src="https://iqq6kf0xmf.gjirafa.net/images/dc404db5-7e13-4201-adc9-2a183092c1f8/dc404db5-7e13-4201-adc9-2a183092c1f8.webp?w=400">
          <img src="https://iqq6kf0xmf.gjirafa.net/images/97753ece-3951-4d9b-b245-f0b140b634dc/97753ece-3951-4d9b-b245-f0b140b634dc.jpeg">
          <img src="https://iqq6kf0xmf.gjirafa.net/images/2a5187ce-d161-4f2a-834e-6defbb2e4013/2a5187ce-d161-4f2a-834e-6defbb2e4013.jpeg">
          <img src="https://iqq6kf0xmf.gjirafa.net/images/64bcae26-97c7-4d68-8c49-f4a140da57a0/64bcae26-97c7-4d68-8c49-f4a140da57a0.webp?w=400">
          <img src="https://iqq6kf0xmf.gjirafa.net/images/42a6331d-0297-488b-81c7-f1161c658dbc/42a6331d-0297-488b-81c7-f1161c658dbc.webp?w=400">
          <img src="https://assets.brack.ch/images2/5/2/7/235129725/235129725_xxl.jpg">
          <img src="">
          <img src="https://iqq6kf0xmf.gjirafa.net/images/669a16b9-7451-4a33-9c90-b266759d00ae/669a16b9-7451-4a33-9c90-b266759d00ae.webp?w=400">
          <img src="https://assets.brack.ch/images2/2/7/6/235128672/235128672_xxl3.jpg">
        
        </div>
      </div>

      <br><br><br>
      <button class="button button1">Show more</button>
   <br><br>
    <?php include('footer.php')?>
</body>


</html>