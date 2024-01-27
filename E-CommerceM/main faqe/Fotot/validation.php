<?php
include('user.php');

if(isset($_POST['submit'])){
    for($i = 0; $i< sizeof($user); $i++){
        if($_POST['name']==$user[$i][0] && $_POST['pass']==$user[$i][2] ){
            session_start();
            $_SESSION['name']=$user[$i][0];
            $_SESSION['roli']=$user[$i][4];
            header("Location:e-commerce.php");
        }
    }
}
?>
