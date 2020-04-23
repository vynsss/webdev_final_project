<?php

use function PHPSTORM_META\type;

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../db/user.php';
include_once '../models/users.php';

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    $database = new Database();
    $db = $database->getConnection();

    $user = new Users($db);

    $data = json_decode(file_get_contents("php://input"), true);

    $user->id = $data["id"];

    if ($user->delete()) {

        echo json_encode(array("success" => true, "message" => "account deleted"));
    } else {
        http_response_code(500); // server error
        echo json_encode(array("success" => false, "message" => "failed to delete"));
    }
} else {
    http_response_code(400); // client error
    echo json_encode(array("success" => false, "message" => "wrong request method"));
}

?>