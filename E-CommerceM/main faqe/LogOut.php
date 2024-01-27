<?php
session_start();
session_destroy();
header('Location: Loginform1.php');
exit();
?>