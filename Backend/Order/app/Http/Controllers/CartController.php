<?php

namespace App\Http\Controllers;

use App\Cart;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function show_all(){
        $stmt = Cart::All();
        echo json_encode(array(
            "cart" => $stmt
        ));
    }

    public function show(Request $request){
        $user = $request->input('user_id');
        $stmt = Cart::All()->where('user_id', $user)->where('status_id', 1);
        echo json_encode(array(
            "cart" => $stmt
        ));
    }

    public function add(Request $request){
        $product = $request->input('product_id');
        $qty = $request->input('quantity');
        $user = $request->input('user_id');
        $date = Carbon::now()->toDateString();

        $stmt = DB::table('carts')
            ->insert([
                'product_id' => $product,
                'quantity' => $qty,
                'user_id' => $user,
                'date' => $date,
                ]);

        echo json_encode(array(
            "success" => $stmt,
            "message" => "Successfully inserted data"
        ));
    }

    public function update_staus(Request $request){
        $id = $request->input('id');
        $stmt= DB::update('UPDATE carts SET status_id = 2 WHERE id = :id', [
            'id' => $id
        ]);

        echo json_encode(array(
            'success' => true,
            'message' => "product successfully went outside the cart"
        ));
    }

    public function remove(Request $request){
        $id = $request->input('id');
        $stmt = Cart::find($id)->delete();

        echo json_encode(array(
            'success' => true,
            'message' => 'cart successfully removed'
        ));
    }
}
