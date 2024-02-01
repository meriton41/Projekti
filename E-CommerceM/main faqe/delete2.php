<?php
include_once 'TabletetRepository.php';
$id = $_GET['Id'];//e merr id prej url

$strep = new TabletetRepository();
$strep->deleteTablet($id);

header("location:Dashboard.php");
?>
