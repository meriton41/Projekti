<?php
include_once 'ComputersRepository.php';
$id = $_GET['P_id'];

$strep = new ComputersRepository();
$strep->deleteComputer($P_id);

header("location:computers.php");
?>