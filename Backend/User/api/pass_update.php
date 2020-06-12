<?php

use function PHPSTORM_META\type;

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../db/user.php';
include_once '../models/users.php';

if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    $database = new Database();
    $db = $database->getConnection();

    $user = new Users($db);

    // $data = json_decode(file_get_contents("php://input"), true);
    $password = $_REQUEST["password"];
    $confirm_password = $_REQUEST["confirm_password"];
    $token = $_REQUEST["token"];

    if (empty($password)) {
        echo json_encode(array("success" => false, "message" => "password is empty"));
    }
    if (empty($confirm_password)) {
        echo json_encode(array("success" => false, "message" => "password is empty"));
    }
    
    if($password == $confirm_password){
        $user->id = $data["id"];
        $user->password = password_hash(htmlspecialchars(strip_tags($password)), PASSWORD_DEFAULT);

        if ($user->update_password()) {
            $session = array(
                "password" => $user->password
            );

            echo json_encode(array("success" => true, "message" => "Password Updated!", "session" => $session));
        } else {
            http_response_code(500); // server error
            echo json_encode(array("success" => false, "message" => "failed to update"));
        }
    } else{
        http_response_code(400); // client error
        echo json_encode(array("success" => false, "message" => "password is not the same"));
    }
} else {
    http_response_code(400); // client error
    echo json_encode(array("success" => false, "message" => "wrong request method"));
}

?>