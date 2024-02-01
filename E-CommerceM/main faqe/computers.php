<?php 

include "DatabaseConnection.php";
include_once "ComputersRepository.php";

$strep = new ComputersRepository();
$computers = $strep->getAllComputers();

?>

<!DOCTYPE html>
<html>
    <body>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Emri</th>
                <th>Ngjyra</th>
                <th>Cmimi</th>
                <th>Memoria</th>
                <th>Img</th>
                <th>Pershkrimi</th>
                <th>Edit</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($computers as $computer) { ?> 
                    <tr>
                        <td><?php echo $computers['ID'];?></td>
                        <td><?php echo $computer['Emri'];?></td>
                        <td><?php echo $computer['Ngjyra'];?></td>
                        <td><?php echo $computer['Cmimi'];?></td>
                        <td><?php echo $computer['Memoria'];?></td>
                        <td><?php echo $computer['Img'];?></td>
                        <td><?php echo $computer['Pershkrimi'];?></td>
                        <td><?php echo $computer['Edit'];?> </td>
                        <td><a href='edit1.php?id=<?php echo $computer['Id']?>'>Edit</a></td>
                        <td><a href='delete1.php?id=<?php echo $computer['Id']?>'>Delete</a></td>
                    </tr>
                <?php }?> 
            </tbody>
        </table>
    </body>
</html>