<?php
    if(isset($_REQUEST["id"])){

        $id = $_REQUEST["id"];
        $url = "https://order-service-fp.herokuapp.com/api/orders/update?id={$id}&status_id=2";
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT"); 
        // curl_setopt($curl, CURLOPT_POSTFIELDS, $id);
        $response = curl_exec($curl);
        $data = json_decode($response);

        //to add new cart/order into the thingy
        $user = $_COOKIE["user_id"];
        $url2 = "https://order-service-fp.herokuapp.com/api/orders/create?user_id={$user}";
        $curl2 = curl_init($url2);
        curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl2, CURLOPT_CUSTOMREQUEST, "POST");
        $response2 = curl_exec($curl2);
        $data2 = json_decode($response2);


        header('Location: ../index.php');
    } else{
        header('Location: ../index.php');
    }
?>