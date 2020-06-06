<?php

use function PHPSTORM_META\type;

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../db/user.php';
include_once '../models/users.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $database = new Database();
    $db = $database->getConnection();

    $user = new Users($db);

    $data = json_decode(file_get_contents("php://input"), true);

    if (empty($data["username"])) {
        echo json_encode(array("success" => false, "message" => "username is empty"));
    }
    if (empty($data["password"])) {
        echo json_encode(array("success" => false, "message" => "password is empty"));
    }
    
    $user->username = $data["username"];
    $user->password = htmlspecialchars(strip_tags($data["password"]));

    $stmt = $user->login();
    $num = $stmt->rowCount();
    if ($stmt != false && $num > 0) {

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
        $result=array(
            "id" => $row["id"],
            "username" => $row["username"],
            "f_name" => $row["f_name"],
            "l_name" => $row["l_name"],
            "email" => $row["email"],
            "password" => $row["password"],
            "address" => $row["address"]
        );

        if(password_verify($user->password, $result["password"])){
            echo json_encode(array("success" => true, "session" => $result));
        } else {
            http_response_code(400); // client error
            echo json_encode(array("success" => false, "message" => "Password is invalid"));
        }

    } else {
        http_response_code(500); // server error
        echo json_encode(array("success" => false, "message" => "Username is invalid"));
    }
    // } else {
    //     http_response_code(400); // client error
    //     echo json_encode(array("success" => false, "message" => "Data is incomplete"));
    // }
} else {
    http_response_code(400); // client error
    echo json_encode(array("success" => false, "message" => "wrong request method"));
}

?>