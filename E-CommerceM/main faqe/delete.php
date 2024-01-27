<?php
include_once 'PaisjetRepository.php';
$id = $_GET['Id'];//e merr id prej url

$strep = new PaisjetRepository();
$strep->deletePaisja($id);

header("location:Dashboard.php");
?>
