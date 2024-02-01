
<?php
include 'ComputersRepository.php';
// $id = $_GET['id'];//e merr id e Paisjes
$editedBy = isset($_SESSION['emri']) ? "Edited By: " . $_SESSION['emri'] : "Edited By: Unknown"; 
$strep = new ComputersRepository();
// $paisja = $strep->getComputerByID($id);

?>

<!DOCTYPE html>
<html>
<body>
<h3>Edit Computer</h3>
    <form action="<?php echo $_SERVER['PHP_SELF'] . '?Id=' . $id; ?>" method="POST">
     <label>Emri:</label>    
     <input type="text" name="emri"  value="<?php echo $computers['emri']?>"> <br> <br> <!-- Pjesa brenda [] eshte emri i sakte i atributit si ne Databaze-->
     <label>Ngjyra:</label> 
     <input type="text" name="ngjyra"  value="<?php echo $computers['ngjyra']?>"> <br> <br>
     <label>Cmimi:</label> 
     <input type="text" name="cmimi"  value="<?php echo $computers['cmimi']?>"> <br> <br>
     <label>Memoria:</label>
     <input type="text" name="memoria"  value="<?php echo $computers['memoria']?>"> <br> <br>
     <label>Foto e produktit:</label>
     <input type="file" name="img"  value="<?php echo $computers['img']?>"> <br> <br>
     <label>Pershkrimi:</label>
     <input type="text" name="pershkrimi"  value="<?php echo $computers['pershkrimi']?>"> <br> <br>
     <input type="hidden" name="edit" value="<?php echo htmlspecialchars($editedBy); ?>"> <br> <br>
     <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>
</body>
</html>

<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

h3 {
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:40px;
}

form {
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

input {
    width: 100%;
    margin-bottom: 10px;
    padding: 8px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #4caf50;
    color: #fff;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

</style>
</html>

<?php 

if(isset($_POST['editBtn'])){
    $emri = $_POST['emri']; 
    $ngjyra = $_POST['ngjyra'];
    $cmimi = $_POST['cmimi'];
    $memoria = $_POST['memoria'];
    $img = $_POST['img'];
    $pershkrimi = $_POST['pershkrimi'];
    $edit = $_POST['edit'];

    $strep->editComputer($emri,$ngjyra,$cmimi,$memoria,$img,$pershkrimi,$edit);
    header("location:Dashboard.php");
    exit();
}

?>