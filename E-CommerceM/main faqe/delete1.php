<?php
include_once 'ComputersRepository.php';
$id = $_GET['P_id'];

$strep = new ComputersRepository();
$strep->deleteComputer($id);

header("location:Dashboard.php");
?>