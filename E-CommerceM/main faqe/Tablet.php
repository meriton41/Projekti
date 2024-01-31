<?php
include "DatabaseConnection.php";
include_once "PaisjetRepository.php";

$p = new PaisjetRepository();
$paisja = $p->getAllPaisjet();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="title">Thalia Online Shop | buy Phones,Laptops,Tablets,Server etc. | Thalia </title> 

 <link rel="stylesheet" href="Tablet.css">
 <link rel="stylesheet"  href="header.css">
 <link rel="stylesheet" href="footer.css">
 <?php include('header.php')?>
</head>
<body>


<div class="d2">
    <div class="Iphone">
        <h2>Iphone</h2>
    </div>
    
<div class="a0">
    <div class="a1">
        <a href=""><img src="iphone15-removebg-preview.png" alt="Iphone15" width="200px">
        <a href="">Iphone 15 Pro Max</a>
        <p class="meriton2">Bardhe;256GB;1400$</p>
        </a></div>
    <div class="a2"> 
        <a href="#"><img src="Iphonee14-removebg-preview.png" alt="Iphone14" width="200px">
        <a href="#"> Iphone 14 Pro Max </a>
        <p class="meriton2">Bardhe;256GB;1400$</p>
       </a></div>
    <div class="a3">
         <a href="#"><img src="Iphone13-removebg-preview.png" alt="Iphone13" width="200px" >
        <a href="#"> Iphone 13 Pro Max </a>
        <p class="meriton2">Bardhe;256GB;1400$</p>
        </a></div>
    <div class="a4"> 
        <a href="#"><img src="iphone12-removebg-preview.png" alt="Iphone12" width="270px">
        <a href="#"> Iphone 12 Pro Max </a>
        <p class="meriton2">Bardhe;256GB;1400$</p>
       </a></div>
    <div class="a5">
         <a href="#"><img src="Iphone11-removebg-preview.png" alt="Iphone11" width="175px">
        <a href="#"> Iphone 11 Pro Max </a>
        <p class="meriton2">Bardhe;256GB;1400$</p>
       </a></div>
       
    </div>

   
</div>


<div class="samsung">
    <div class="samsung1">
       <h2> Samsung </h2>
    </div>
<div class="d3">
    <div class="s1">
        <a href=""><img src="S23-removebg-preview.png" alt="SamsungS23" width="200px" height="200px">
            <a href=""> Samsung S23 Ultra </a>
            <p class="meriton2">Bardhe;256GB;1400$</p>
           </a></div>
    <div class="s2">
        <a href=""><img src="s22-removebg-preview.png" alt="SamsungS22" width="200px" height="200px">
            <a href=""> Samsung S22 Ultra </a>
            <p class="meriton2">Bardhe;256GB;1400$</p>
           </a></div>
    <div class="s3">
        <a href=""><img src="s21-removebg-preview.png" alt="SamsungS21" width="200px" height="200px">
            <a href=""> Samsung S21 Ultra </a>
            <p class="meriton2">Bardhe;256GB;1400$</p>
           </a></div>
    <div class="s4">
        <a href=""><img src="note20-removebg-preview.png" alt="SamsungNote20" width="200px" height="200px">
            <a href=""> Samsung Note 20  </a>
            <p class="meriton2">Bardhe;256GB;1400$</p>
           </a></div>
           <?php foreach ($tablet as $tablet) { ?>
    <div class="s5">
        <a href=""><img src="<?php echo $tablet['img']?> " alt="SamsunNote10" width="200px" height="200px">
            <a href=""> <?php echo $tablet['Emri']?> </a>
            <p class="meriton2"><?php echo $tablet['pershkrimi']?></p>
           </a></div>
           <?php } ?>

        </div>
</div>
</div>
   <?php include('footer.php')?>
<style>
 
</style>
</body>


</html>