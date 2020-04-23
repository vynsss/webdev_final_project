<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    //
    public function show() {
        return Category::All();
    }

    public function insert(Request $request){
        $category = $request->input('name');
        $stmt = DB::table('Categories')->insert(['name'=>$category]);

        echo json_encode(array(
            "success" => true,
            "result" => $stmt
        ));

    }

    public function delete(Request $request){
        $id = $request->input('id');
        $remove = Category::find($id)->delete();

        echo json_encode(array(
            'success' => true,
            'message' => 'category successfully deleted'
        ));
    }

    public function update(Request $request){
        $id = $request->input('id');
        $name = $request->input('name');

        $stmt = DB::table('category')
        ->where('id', $id)
        ->update([
            'name' => $name
        ]);
    }

}
