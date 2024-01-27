<?php 

include "DatabaseConnection.php";
include_once "PaisjaRepository.php";

$strep = new PaisjaRepository();
$paisjet = $strep->getAllPaisjet();

?>

<!DOCTYPE html>
<html>
    <body>
        <table>
            <thead>
            <tr>
                <th>Emri</th>
                <th>Ngjyra</th>
                <th>Cmimi</th>
                <th>Memoria</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($paisjet as $paisja) { ?> <!--e hapim foreach-->
                    <tr>
                        <td><?php echo $paisja['Emri'];?></td>
                        <td><?php echo $paisja['Ngjyra'];?></td>
                        <td><?php echo $paisja['Cmimi'];?></td>
                        <td><?php echo $paisja['Memoria'];?></td>
                        <td><a href='edit.php?id=<?php echo $paisja['Id']?>'>Edit</a></td> <!--e dergojme id ne url permes pjeses ?id= dhe permes kodit ne php e marrim nga studenti i cili eshte i paraqitur ne kete rresht-->
                        <td><a href='delete.php?id=<?php echo $paisja['Id']?>'>Delete</a></td>
                    </tr>
                <?php }?> <!--e mbyllim foreach-->
            </tbody>
        </table>
    </body>
</html>