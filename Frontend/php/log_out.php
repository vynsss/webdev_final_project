<?php
    session_start();

    session_destroy();
    session_write_close();
    if (isset($_COOKIE['user_id'])) {
        unset($_COOKIE['user_id']); 
        setcookie('user_id', null, -1, '/'); 
    }

    header('Location: ../index.php');
?>