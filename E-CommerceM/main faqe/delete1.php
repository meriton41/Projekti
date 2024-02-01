<?php
include_once 'ComputersRepository.php';
$id = $_GET['id'];

$strep = new ComputersRepository();
$strep->deleteComputer($id);

header("location:computers.php");
?>