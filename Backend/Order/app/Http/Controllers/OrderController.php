<?php

namespace App\Http\Controllers;

use App\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function show(Request $request){
        $user = $request->input('user_id');
        $stmt = Order::All()->where('user_id', $user);
        echo json_encode(array(
            'order' => $stmt
        ));
    }

    public function show_all(){
        $stmt = Order::All();
        echo json_encode([
            'order' => $stmt
        ]);
    }

    public function add(Request $request){
        $user = $request->input('user_id');
        $date = Carbon::now()->toDateString();

        $stmt = DB::table('orders')
            ->insert([
                'user_id' => $user,
                'date' => $date
                ]);

        echo json_encode(array(
            "success" => $stmt,
            "message" => "Successfully inserted data"
        ));
    }

    public function update_status(Request $request){
        $id = $request->input('id');
        $status = $request->input('status_id');

        $stmt2 = DB::update('UPDATE orders SET status_id = :status_id WHERE id = :id', [
            'status_id' => $status,
            'id' => $id
        ]);

        $stmt = DB::update('UPDATE carts SET status_id = :status_id WHERE order_id= :id', [
            'status_id' => $status,
            'id' => $id
        ]);
        echo json_encode(array(
            'success' => true,
            'message' => 'status successfully updated'
        ));
    }
}
