<?php
include_once 'Paisjet.php';
include_once 'PaisjaRepository.php';

if (isset($_POST['submitbtn'])) {
    $emri = $_POST['Emri']; 
    $ngjyra = $_POST['Ngjyra'];
    $cmimi = $_POST['Cmimi'];
    $memoria = $_POST['Memoria'];
   

    $paisja = new Paisjet($emri, $ngjyra, $cmimi,$memoria);

    $PaisjaRepository = new PaisjaRepository();
    $PaisjaRepository->inserPaisja($paisja);
    header("location:Dashboard.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h2>Register</h2>
        <form action="<?php echo $SERVER['PHP_SELF']?>" method="post">  
        <label>Emri:</label>    
        <input type="text" name="emri" ><br>
        <label>Ngjyra:</label>  
        <input type="text" name="ngjyra" ><br>
        <label>Cmimi:</label>  
        <input type="text" name="cmimi" ><br>
        <label>Memoria:</label>  
        <input type="text" name="memoria" ><br>
        <input type="submit" name="submitbtn" value="Submit">
        </form>
    </body>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}
h2{
    display: flex;
    justify-content: center;
    align-items:center;
    font-size:40px;
}
label{
    font-size:15px;
}
form {
    max-width: 300px;
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