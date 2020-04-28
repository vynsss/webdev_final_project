<?php

namespace App\Http\Controllers;

use App\Order;
use App\Total_Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Total_OrderController extends Controller
{
    public function show_all(){
        $stmt = Total_Order::All();
        echo json_encode(array(
            "total_order" => $stmt
        ));
    }

    public function show_id(Request $request){
        $id = $request->input('id');
        $stmt = Total_Order::find($id);
        $order = Order::All()->where('total__order_id', $id);
        echo json_encode(array(
            'total_order' => $stmt,
            'order' => $order
        ));
    }

    public function add(Request $request){
        $user = $request->input('user_id');
        $date = Carbon::now()->toDateString();
        $stmt = DB::table('total__orders')
            ->insert([
                'user_id' => $user,
                'date' => $date
                ]);
        echo json_encode([
            'success' => $stmt,
            'message' => 'new total order successfully added'
        ]);
    }

    public function remove(Request $request){
        $id = $request->input('id');
        $stmt = Total_Order::find($id)->delete();

        echo json_encode([
            'success' => true,
            'message' => 'total order successfully removed'
        ]);
    }

    public function update_status(Request $request){
        $id = $request->input('id');
        $status = $request->input('status_id');
        // $order = DB::select('SELECT cart_id FROM orders WHERE total__order_id = :id', [
        //     'id' => $id
        // ]);
        // $stmt = DB::update('UPDATE carts SET status_id = :status_id WHERE id = (SELECT cart_id FROM orders WHERE total__order_id = :id))', [
        //     'status_id' => $status
        // ]);
        $stmt2 = DB::update('UPDATE total__orders SET status_id = :status_id WHERE id = :id', [
            'status_id' => $status,
            'id' => $id
        ]);

        $stmt = DB::update('UPDATE carts, orders SET carts.status_id = :status_id WHERE orders.total__order_id = :id AND carts.id = orders.cart_id', [
            'status_id' => $status,
            'id' => $id
        ]);
        echo json_encode(array(
            'success' => true,
            'message' => 'status successfully updated'
        ));
    }
}
