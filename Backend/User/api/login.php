<?php

use function PHPSTORM_META\type;

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../db/user.php';
include_once '../models/users.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $database = new Database();
    $db = $database->getConnection();

    $user = new Users($db);

    // $data = json_decode(file_get_contents("php://input"), true);
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if (empty($username)) {
        echo json_encode(array("success" => false, "message" => "username is empty"));
    }
    if (empty($password)) {
        echo json_encode(array("success" => false, "message" => "password is empty"));
    }
    
    $user->username = $username;
    // $user->password = htmlspecialchars(strip_tags($password));
    $user->password = $password;

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
            "token" => $row["token"],
            "password" => $row["password"],
            "address" => $row["address"]
        );

        if(password_verify($user->password, $result["password"])){
            http_response_code(200);
            echo json_encode(array("success" => true, "session" => $result));
        } else {
            http_response_code(400); // client error
            echo json_encode(array("success" => false, "message" => "Password is invalid"));
        }

    } else {
        http_response_code(400); // server error
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