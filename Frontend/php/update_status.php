<?php
    if(isset($_REQUEST["id"])){

        $id = $_REQUEST["id"];
        $status_id = $_REQUEST["status_id"];
        $url = "https://order-service-fp.herokuapp.com/api/orders/update?id={$id}&status_id={$status_id}";
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT"); 
        // curl_setopt($curl, CURLOPT_POSTFIELDS, $id);
        $response = curl_exec($curl);
        $data = json_decode($response);

        header('Location: ../admin_orderpage.php');
    } else{
        header('Location: ../admin_orderpage.php');
    }
?>