<?php

namespace App\Http\Controllers;

use App\Cart;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function show(){
        $stmt = Cart::All()->where('status_id', 1);
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
}
