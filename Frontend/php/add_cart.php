<?php
    if(isset($_COOKIE["user_id"])){
        $user = $_COOKIE["user_id"];
        $url2 = "https://order-service-fp.herokuapp.com/api/orders/create?user_id={$user}";
        $curl2 = curl_init($url2);
        curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl2, CURLOPT_CUSTOMREQUEST, "POST");
        $response2 = curl_exec($curl2);
        $data2 = json_decode($response2);

        header('Location: index.php');
    }
?>