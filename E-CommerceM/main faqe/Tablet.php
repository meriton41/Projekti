<?php
session_start();
include "DatabaseConnection.php";
include_once "TabletetRepository.php";

$p = new TabletetRepository();
$tablet = $p->getAllTabletet();
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
  <?php
        
    if (isset($_SESSION['roli'])) {
    if($_SESSION['roli']=="admin"){
       echo"               
     <button id='b1'>
     <a class = 'Dash' href='Dashboard.php'>Dashboard</a>
     </button>
     <style>
     #b1{
       margin-top:12px;
       background-color:yellow;
       height:40px;
     }
     .Dash{
       font-style: italic;
       color:blue;
       text-decoration:none;
       font-weight:bold;

       
     }
     
     
     </style>";
    }
        }
        
 require_once "DatabaseConnection.php";
include_once "TabletetRepository.php";

$strep = new TabletetRepository();
$tablet= $strep->getAllTabletet();

?>

<div class="d2">
    <div class="Iphone">
        <h2>Tablet</h2>
    </div>
    
<div class="a0">
    <div class="a1">
        <a href=""><img src="2-removebg-preview.png" alt="Iphone15" width="200px">
        <a href="">Tablet Apple M3</a>
        <p class="meriton2">Gray;256GB;800$</p>
        </a></div>
    <div class="a2"> 
        <a href="#"><img src="https://imgsrv.toppreise.ch/img/684619/720-2a050d" alt="Iphone14" width="200px">
        <a href="#"> Tablet Apple M4 </a>
        <p class="meriton2">Gray;256GB;1000$</p>
       </a></div>
    <div class="a3">
         <a href="#"><img src="https://imgsrv.toppreise.ch/img/706937/720-a65f8e" alt="Iphone13" width="200px" >
        <a href="#"> Tablet Apple M5 </a>
        <p class="meriton2">Black;1TB;1400$</p>
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
       <h2> Tablet </h2>
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
        <a href=""><img src="<?php echo $tablet['img']?> " alt="Samsung Note10" width="200px" height="200px">
            <a href=""> <?php echo $tablet['Emri']?> </a>
            <p class="meriton2"><?php echo $tablet['pershkrimi']?></p>
           </a></div>
           <?php } ?>

        </div>
</div>
</div>
   <?php include('footer.php')?>

</body>


</html>