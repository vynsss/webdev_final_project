<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request){
        $username = $request->input("username");
        $password = $request->input("password");
        $stmt = DB::select('SELECT * FROM users WHERE username = :username LIMIT 1', [
            "username" => $username
        ]);
        if($stmt && password_verify($password, $stmt[0]->password)){
            echo json_encode([
                "success" => true,
                "id" => $stmt[0]->id,
                "username" => $stmt[0]->username
            ]);
        } else{
            echo json_encode([
                "success" => false
            ]);
        }

    }

    public function register(Request $request){
        $f_name = $request->input("f_name");
        $l_name = $request->input("l_name");
        $username = $request->input("username");
        $email = $request->input("email");
        $password = $request->input("password");
        $confirm_password = $request->input("confirm_password");
        $address = $request->input("address");

        $stmt = DB::table('users')->insert([
            'first_name' => $f_name,
            'last_name' => $l_name,
            'username' => $username,
            'email' => $email,
            'password' => Hash::make($password),
            'address' => $address
        ]);

        echo json_encode([
            'success' => $stmt
        ]);
    }

    public function data(Request $request){
        $id = $request->input('id');
        $check = $request->input('check');
        $check_token = "abc123";

        if($check == $check_token){ //check if ppl try to take user lol
            $stmt = DB::select('SELECT * FROM users WHERE id=:id', [
                "id" => $id
            ]);
            echo json_encode([
                "success" => true,
                "username" => $stmt[0]->username,
                "first_name" => $stmt[0]->first_name,
                "last_name" => $stmt[0]->last_name,
                "email" => $stmt[0]->email,
                "address" => $stmt[0]->address,
            ]);
        } else{
            echo json_encode([
                "success" => false,
                "message" => "please log in to read your informationn:)"
            ]);
        }
    }
}
