<?php 

include "DatabaseConnection.php";
include_once "PaisjetRepository.php";
include_once "TabletetRepository.php";
include "function.php"; 

$strep = new PaisjetRepository();
$paisjet = $strep->getAllPaisjet();
$cmrep = new Contact();
$comment = $cmrep->getAllComments();
$strep = new TabletetRepository();
$tabletet = $strep->getAllTabletet();
?>

<!DOCTYPE html>
<html>
    <link rel="stylesheet"  href="Dashboard.css">
    <link rel="stylesheet"  href="header.css">
    <?php include('header.php')?>
    <body>
        <a href="Register.php" style="margin-top:40px; margin-left:40px;color:black;">Register</a>
         <h2 style="text-align: center;" >Regjistri i Telefonave</h2>
      <table>
    <thead>
   <tr>
   <th>Emri</th>
   <th>Ngjyra</th>
   <th>Cmimi</th>
   <th>Memoria</th>
   <th>Foto</th>
   <th>Pershkrimi</th>
   <th>Edit</th>
   </tr>
   </thead>
      <tbody>
     <?php foreach($paisjet as $telefon) { ?> <!--e hapim foreach-->
    <tr>
        <td><?php echo $telefon['Emri'];?></td>
        <td><?php echo $telefon['Ngjyra'];?></td>
        <td><?php echo $telefon['Cmimi'];?></td>
        <td><?php echo $telefon['Memoria'];?></td>
        <td><?php echo $telefon['img'];?></td>
        <td><?php echo $telefon['pershkrimi'];?></td>
        <td><?php echo $telefon['edit'];?></td>
        <td><a href='edit.php?Id=<?php echo $telefon['Id']?>'>Edit</a></td> <!--e dergojme id ne url permes pjeses ?id= dhe permes kodit ne php e marrim nga studenti i cili eshte i paraqitur ne kete rresht-->
        <td><a href='delete.php?Id=<?php echo $telefon['Id']?>'>Delete</a></td>
         </tr>
   <?php }?> <!--e mbyllim foreach-->
  </tbody>
</table>
 <br><br>
<!-- rion qetu ke me kriju edhe ni tabel per insertimin e laptopatev -->



















<!-- -------------------------------------------------------------------- -->
<a href="Register2.php" style="margin-top:40px; margin-left:40px;color:black;">Register</a>
<h2 style="text-align: center;">Regjistri i Tabletave</h2>
<table>
     <thead>
       <tr> 
          <th>Emri</th>
          <th>Ngjyra</th>
          <th>Cmimi</th>
          <th>Memoria</th>
          <th>Foto</th>
          <th>Pershkrimi</th>
          <th>Edit</th>
       </tr>
      </thead>
        <tbody>
                <?php foreach($tabletet as $tablet1) { ?> <!--e hapim foreach-->
                    <tr>
                        <td><?php echo $tablet1['Emri'];?></td>
                        <td><?php echo $tablet1['Ngjyra'];?></td>
                        <td><?php echo $tablet1['Cmimi'];?></td>
                        <td><?php echo $tablet1['Memoria'];?></td>
                        <td><?php echo $tablet1['img'];?></td>
                        <td><?php echo $tablet1['pershkrimi'];?></td>
                        <td><?php echo $tablet1['edit'];?></td>
                        <td><a href='edit2.php?Id=<?php echo $tablet1['Id']?>'>Edit</a></td> <!--e dergojme id ne url permes pjeses ?id= dhe permes kodit ne php e marrim nga studenti i cili eshte i paraqitur ne kete rresht-->
                        <td><a href='delete2.php?Id=<?php echo $tablet1['Id']?>'>Delete</a></td>
                    </tr>
                <?php }?> <!--e mbyllim foreach-->
            </tbody>
        </table>
        <br><br>
<h2 style="text-align: center;">Regjistri i Paqartesive</h2>
<table>
            <thead>
            <tr>
            <th>Emri</th>
                <th>Mbiemri</th>
                <th>Email</th>
                <th>NrTelefonit</th>
                <th>Comment</th>

            </tr>
            </thead>
            <tbody>
                <?php foreach($comment as $msg) { ?>
                    <tr>
                    <td><?php echo $msg['emri'];?></td>
                        <td><?php echo $msg['mbiemri'];?></td>
                        <td><?php echo $msg['email'];?></td>
                        <td><?php echo $msg['nrtelefonit'];?></td>
                        <td><?php echo $msg['comment'];?></td>


                    </tr>
                <?php }?> 
            </tbody>
        </table>
    </body>
</html>