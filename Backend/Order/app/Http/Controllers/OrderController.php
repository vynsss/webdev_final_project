<?php

namespace App\Http\Controllers;

use App\Order;
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

    public function add(Request $request){
        $cart = $request->input('cart_id');
        $user = $request->input('user_id');
        $total = $request->input('total_order_id');

        $stmt = DB::table('orders')
            ->insert([
                'cart_id' => $cart,
                'total__order_id' => $total,
                'user_id' => $user
                ]);

        echo json_encode(array(
            "success" => $stmt,
            "message" => "Successfully inserted data"
        ));
    }
}
