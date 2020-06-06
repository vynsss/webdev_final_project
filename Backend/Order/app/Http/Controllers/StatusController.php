<?php

namespace App\Http\Controllers;

use App\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatusController extends Controller
{
    public function add(Request $request){
        $name = $request->input('name');
        $stmt = DB::table('statuses')
                ->insert([
                    'name' => $name
                ]);
        echo json_encode(array(
            "success" => true,
            "message" => "status successfully updated"
        ));
    }

    public function show(){
        echo json_encode(array(
            'success' => true,
            'data' => Status::All()
        ));
    }

    public function update(Request $request){
        $id = $request->input('id');
        $name = $request->input('name');
        $stmt = DB::update('UPDATE statuses SET name = :name WHERE id = :id', [
            'id' => $id,
            'name' => $name
        ]);

        echo json_encode(array(
            'success' => true,
            'message' => "product successfully went outside the cart"
        ));
    }
}
