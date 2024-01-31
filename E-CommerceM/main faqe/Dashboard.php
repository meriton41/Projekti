<?php 

include "DatabaseConnection.php";
include_once "PaisjetRepository.php";
include "function.php"; 

$strep = new PaisjetRepository();
$paisjet = $strep->getAllPaisjet();
$cmrep = new Contact();
$comment = $cmrep->getAllComments();
?>

<!DOCTYPE html>
<html>
    <link rel="stylesheet"  href="Dashboard.css">
    <link rel="stylesheet"  href="header.css">
    <?php include('header.php')?>
    <body>
        <a href="Register.php" style="margin-top:40px; margin-left:40px;color:black;">Register</a>
        <table>
            <thead>
            <tr>
                <th>Emri</th>
                <th>Ngjyra</th>
                <th>Cmimi</th>
                <th>Memoria</th>
                <th>img</th>
                <th>pershkrimi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($paisjet as $paisja) { ?> <!--e hapim foreach-->
                    <tr>
                        <td><?php echo $paisja['Emri'];?></td>
                        <td><?php echo $paisja['Ngjyra'];?></td>
                        <td><?php echo $paisja['Cmimi'];?></td>
                        <td><?php echo $paisja['Memoria'];?></td>
                        <td><?php echo $paisja['img'];?></td>
                        <td><?php echo $paisja['pershkrimi'];?></td>
                        <td><a href='edit.php?Id=<?php echo $paisja['Id']?>'>Edit</a></td> <!--e dergojme id ne url permes pjeses ?id= dhe permes kodit ne php e marrim nga studenti i cili eshte i paraqitur ne kete rresht-->
                        <td><a href='delete.php?Id=<?php echo $paisja['Id']?>'>Delete</a></td>
                    </tr>
                <?php }?> <!--e mbyllim foreach-->
            </tbody>
        </table>
        <br><br><br>
<!-- rion qetu ke me kriju edhe ni tabel per insertimin e laptopatev -->




















<br><br><br>
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