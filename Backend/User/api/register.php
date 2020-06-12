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

    // $data = json_decode(file_get_contents("php://input"), true);
    $f_name = $_REQUEST['f_name'];
    $l_name = $_REQUEST['l_name'];
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $confirm_password = $_REQUEST['confirm_password'];
    $address = $_REQUEST['address'];

    // if (empty($data["username"])) {
    //     echo json_encode(array("success" => false, "message" => "username is empty"));
    // }
    // if (empty($data["email"])) {
    //     echo json_encode(array("success" => false, "message" => "email is empty"));
    // }
    // if (empty($data["password"])) {
    //     echo json_encode(array("success" => false, "message" => "password is empty"));
    // }
    
    // if (isset($_POST['password']) && $_POST['password'] !== $_POST['passwordConf']) {
    //     echo json_encode(array("success" => false, "message" => "Data is incomplete"));
    // }

    // if (!empty(isset($data->username) || $data->username) && !empty(isset($data->email) || $data->email) && !empty(isset($data->password) || $data->password)) {
    
    $user->username = $username;
    $user->f_name = $f_name;
    $user->l_name = $l_name;
    $user->email = $email;
    $user->password = password_hash(htmlspecialchars(strip_tags($password)), PASSWORD_DEFAULT);
    $user->address = $address;

    if ($user->register()) {
        // $_SESSION[""]
        echo json_encode(array("success" => true, "message" => "Registered!"));
    } else {
        // http_response_code(500); // server error
        // echo json_encode(array("success" => false, "message" => "failed to register"));
        header('Location: https://frontend-fp.herokuapp.com/index.php');
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