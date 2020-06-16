<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function show_all(){
        $stmt = DB::select("SELECT * FROM carts WHERE user_id = 4 AND status_id = 1");
        echo json_encode(array(
            "success" => true,
            "cart" => $stmt
        ));
    }

    public function show(Request $request){
        $user = $request->input('user_id');
        $stmt = DB::select("SELECT * FROM carts WHERE user_id = :user_id AND status_id = 1",[
            'user_id' => $user
        ]);
        $status = DB::table('statuses')->where('id', $stmt[0]->status_id)->first();
        echo json_encode(array(
            "success" => true,
            "status" => $status->name,
            "cart" => $stmt
        ));
    }

    public function add(Request $request){
        $product = $request->input('product_id');
        $qty = $request->input('quantity');
        $user = $request->input('user_id');
        $order= DB::table('orders')->where('user_id', $user)->where('status_id', 1)->first();
        $order_id = $order->id;

        $stmt = DB::table('carts')
            ->insert([
                'product_id' => $product,
                'quantity' => $qty,
                'user_id' => $user,
                'order_id' => $order_id,
                ]);

        echo json_encode(array(
            "success" => $stmt,
            "message" => "Successfully inserted data"
        ));
    }

    public function update_status(Request $request){
        $id = $request->input('id');
        $stmt= DB::update('UPDATE carts SET status_id = 2 WHERE id = :id', [
            'id' => $id
        ]);

        echo json_encode(array(
            'success' => true,
            'message' => "product successfully went outside the cart"
        ));
    }

    //i think this is not necessary
    public function remove(Request $request){
        $id = $request->input('id');
        $stmt = Cart::find($id)->delete();

        echo json_encode(array(
            'success' => $stmt,
            'message' => 'cart successfully removed'
        ));
    }
}
