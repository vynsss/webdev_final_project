<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function show_available(){
        $product = DB::select('SELECT * FROM products WHERE status_id = 1');

        echo json_encode(array(
            "success" => true,
            "product" => $product
        ));
    }

    public function show_category(Request $request){
        $stmt = DB::select('SELECT * FROM products WHERE status_id = 1 AND category_id = :id', [
            'id' => $request->id
        ]);

        echo json_encode(array("success" => true, "result" => $stmt));
    }

    public function insert(Request $request){
        $name = $request->input('name');
        $price = $request->input('price');
        $description = $request->input('description');
        $image = $request->input('image');
        $category = $request->input('category_id');
        // $status = $request->input('status_id');

        $stmt = DB::table('products')
            ->insert([
                'name' => $name,
                'price' => $price,
                'description' => $description,
                'image' => $image,
                'category_id' => $category,
                'status_id' => 1
                ]);

        echo json_encode(array(
            "success" => $stmt,
            "message" => "Successfully inserted data"
        ));
    }

    public function update(Request $request){
        $id = $request->input('id');
        $price = $request->input('price');
        $status = $request->input('status_id');

        $stmt = DB::table('products')
                ->where('id', $id)
                ->update([
                    'price' => $price,
                    'status_id' => $status
                ]);
        echo json_encode(array(
            "success" => true,
            "message" => "Product updated!"
        ));
    }

    public function pagination(){
        $stmt = Product::paginate(20);
        echo json_encode(array(
            "success" => true,
            "page" => $stmt
        ));
    }

    // is need helppT_T againnnnn
}
