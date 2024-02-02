<?php 
session_start();
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

                        <td><?php echo $computers['emri'];?></td>
                        <td><?php echo $computers['ngjyra'];?></td>
                        <td><?php echo $computers['cmimi'];?></td>
                        <td><?php echo $computers['memoria'];?></td>
                        <td><?php echo $computers['img'];?></td>
                        <td><?php echo $computers['pershkrimi'];?></td>
                        <td><?php echo $computers['edit'];?> </td>
                        <td><a href='edit1.php?id=<?php echo $computers['P_id']?>'>Edit</a></td>
                        <td><a href='delete1.php?id=<?php echo $computers['P_id']?>'>Delete</a></td>
                    </tr>
                <?php }?> 
            </tbody>
        </table>
    </body>
</html>