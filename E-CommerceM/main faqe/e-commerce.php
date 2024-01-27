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
    <title id="title">Thalia Online Shop | buy Books, eBooks, Toys etc. | Thalia </title> 

 <link rel="stylesheet" href="e-commerce.css">
 <link rel="stylesheet"  href="header.css">
 <?php include('header.php')?>
</head>
<body>
<?php
        session_start();
        if (isset($_SESSION['roli'])) {
         if($_SESSION['roli']=="admin"){
             echo"<button>
                     <a href='Dashboard.php 'style='margin-top:30px: color:black;'>Dashboard</a>
                 </button>";
         }
        }
 require_once "DatabaseConnection.php";
include_once "PaisjetRepository.php";

$strep = new PaisjetRepository();
$paisja= $strep->getAllPaisjet();

?>

<div class="d2">
    <div class="Iphone">
        <h2>Iphone</h2>
    </div>
    
<div class="a0">
    <div class="a1">
        <a href=""><img src="iphone15-removebg-preview.png" alt="Iphone15" width="200px"></a>
        <a href="">Iphone 15 Pro Max</a>
        
    </div>
    <div class="a2"> 
        <a href="#"><img src="Iphonee14-removebg-preview.png" alt="Iphone14" width="200px">
        <a href="#"> Iphone 14 Pro Max </a>
       </a></div>
    <div class="a3">
         <a href="#"><img src="Iphone13-removebg-preview.png" alt="Iphone13" width="200px" >
        <a href="#"> Iphone 13 Pro Max </a>
       </a></div>
    <div class="a4"> 
        <a href="#"><img src="iphone12-removebg-preview.png" alt="Iphone12" width="270px">
        <a href="#"> Iphone 12 Pro Max </a>
       </a></div>
    <div class="a5">
         <a href="#"><img src="Iphone11-removebg-preview.png" alt="Iphone11" width="175px">
        <a href="#"> Iphone 11 Pro Max </a>
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
           </a></div>
    <div class="s2">
        <a href=""><img src="s22-removebg-preview.png" alt="SamsungS22" width="200px" height="200px">
            <a href=""> Samsung S22 Ultra </a>
           </a></div>
    <div class="s3">
        <a href=""><img src="s21-removebg-preview.png" alt="SamsungS21" width="200px" height="200px">
            <a href=""> Samsung S21 Ultra </a>
           </a></div>
    <div class="s4">
        <a href=""><img src="note20-removebg-preview.png" alt="SamsungNote20" width="200px" height="200px">
            <a href=""> Samsung Note 20  </a>
           </a></div>
           <?php foreach ($paisja as $telefon) { ?>
    <div class="s5">
        <a href=""><img src="<?php echo $telefon['img']?> " alt="SamsunNote10" width="200px" height="200px">
            <a href=""> <?php echo $telefon['Emri']?> </a>
           </a></div>
           <?php } ?>

        </div>
</div>
</div>
   <?php include('footer.php')?>

</body>


</html>