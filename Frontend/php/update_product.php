<?php
    if(isset($_REQUEST["id"])){

        $id = $_REQUEST["id"];
        $price = $_REQUEST["price"];
        $status_id = $_REQUEST["status_id"];
        $url = "http://product-service-fp.herokuapp.com/api/admin/products/update?id={$id}&price={$price}&status_id={$status_id}";
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT"); 
        // curl_setopt($curl, CURLOPT_POSTFIELDS, $id);
        $response = curl_exec($curl);
        $data = json_decode($response);

        header('Location: ../admin_products_page.php');
    } else{
        header('Location: ../admin_products_page.php');
    }
?>