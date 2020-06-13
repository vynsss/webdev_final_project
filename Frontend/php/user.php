<?php
if(isset($_COOKIE["user_id"])){
    if($_COOKIE["user_id"] == 1){   //check admin or not
        header('Location: ../home.php');//redirect to admin page
    }
    // else{
    //     header('Location: ../home.php');
    // }
} else{
    header('Location: ../login.php');
}

?>