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

                        <td><?php echo $computer['emri'];?></td>
                        <td><?php echo $computer['ngjyra'];?></td>
                        <td><?php echo $computer['cmimi'];?></td>
                        <td><?php echo $computer['memoria'];?></td>
                        <td><?php echo $computer['img'];?></td>
                        <td><?php echo $computer['pershkrimi'];?></td>
                        <td><?php echo $computer['edit'];?> </td>
                        <td><a href='edit1.php?id=<?php echo $computer['P_id']?>'>Edit</a></td>
                        <td><a href='delete1.php?id=<?php echo $computer['P_id']?>'>Delete</a></td>
                    </tr>
                <?php }?> 
            </tbody>
        </table>
    </body>
</html>