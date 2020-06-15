<?php
    session_start();

    if(isset($_REQUEST["id"])){
        $_SESSION["order"] = $_REQUEST["id"];

        header('Location: ../history_orders.php'); //change it later
    } else{
        header('Location: ../user_info.php');
    }
?>