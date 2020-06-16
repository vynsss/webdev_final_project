<?php
    if(isset($_REQUEST["id"])){

        $id = $_REQUEST["id"];

        $url = "https://order-service-fp.herokuapp.com/api/carts/remove?id={$id}";
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE"); 
        // curl_setopt($curl, CURLOPT_POSTFIELDS, $id);

        $response = curl_exec($curl);
        $data = json_decode($response);

        // print $data;
        header('Location: ../cart.php');
    } else{
        header('Location: ../index.php');
    }
?>