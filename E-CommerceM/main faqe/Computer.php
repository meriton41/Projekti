<?php
session_start();
include "DatabaseConnection.php";
include_once "ComputersRepository.php";

$p = new ComputersRepository();
$computer = $p->getAllComputers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="title">Thalia Online Shop | buy Books, eBooks, Toys etc. | Thalia </title> 
    <link rel="stylesheet" href="Computers.css">
    <link rel="stylesheet" href="header.css">
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
                  color:red;
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



    <br><br><br>
    <div class="row"> 
        <div class="column">
          <img src="https://assets.brack.ch/images2/9/4/5/226602549/226602549_xxl.jpg" >
          <img src="https://assets.brack.ch/images2/0/9/2/219789290/219789290_xxl3.jpg" >
          <img src="https://assets.brack.ch/images2/8/1/5/226603518/226603518_xxl.jpg">
          <img src="https://assets.brack.ch/images2/7/9/2/219789297/219789297_xxl3.jpg"> 
          <img src="https://assets.brack.ch/images2/3/2/4/226603423/226603423_xxl.jpg">
          <img src="https://assets.brack.ch/images2/4/0/3/219789304/219789304_xxl3.jpg">
          <img src="https://assets.brack.ch/images2/4/4/4/300604444/300604444_xxl.jpg">
          <img src="https://assets.brack.ch/images2/0/6/4/271317460/271317460_xxl.jpg">
          <img src="https://assets.brack.ch/images2/8/3/6/300604638/300604638_xxl.jpg">
          <img src="https://assets.brack.ch/images2/2/9/6/279815692/279815692_xxl.jpg">
          <img src="https://assets.brack.ch/images2/5/4/4/185202445/185202445_xxl3.jpg">
          <img src="https://assets.brack.ch/images2/4/8/4/57911484/57911484_xxl.jpg">
          <img src="https://assets.brack.ch/images2/4/9/5/200222594/200222594_xxl.jpg">
          <img src="https://assets.brack.ch/images2/8/5/9/215231958/215231958_xxl.jpg">
          <img src="https://assets.brack.ch/images2/7/9/4/215230497/215230497_xxl.jpg">
        
        </div>
        <?php foreach ($computers as $computer) { ?>
    <div class="s5">
        <a href=""><img src="<?php echo $computer['img']?> " alt="SamsunNote10" width="200px" height="200px">
            <a href=""> <?php echo $computer['Emri']?> </a>
            <p class="meriton2"><?php echo $computer['pershkrimi']?></p>
           </a></div>
           <?php } ?>
      </div>

      <br><br><br>



      <br><br>
     
  
      <?php include('footer.php')?>
      
</body>
</html>