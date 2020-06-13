<?php
    session_start();

    if(isset($_REQUEST["id"])){
        $_SESSION["product"] = $_REQUEST["id"];

        header('Location: ../items.php'); //change it later
    } else{
        header('Location: ../home_wares.php');
    }
?>