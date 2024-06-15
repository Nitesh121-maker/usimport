<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function productsearch(Request $request) {
        $results = [];
        $validate = $request->validate([
            'role' => 'nullable',
            'product_name' => 'nullable'
        ]);
        $role = $request['role'];
        $product = $request['product_name'];

        // dd($role);

        if($request['role'] == "") {
            $result = DB::table('products')
            ->select('*')
            // ->where(DB::raw('`product_name`'), 'like', $product . '%')
            ->limit(12)
            ->get();

            return view (
                'frontend.import-data.import.index',
                [
                    'result' => $result, 
                ]
            );
        }
        elseif($request['role'] == "import") {
            $result = DB::table('products')
            ->select('*')
            // ->where(DB::raw('`product_name`'), 'like', $product . '%')
            ->limit(10)
            ->get();

            return view (
                'frontend.import-data.import.index',
                [
                    'result' => $result, 
                ]
            );
        }
        elseif($request['role'] == "export") {
            $result = DB::table('products')
            ->select('*')
            ->where(DB::raw('`product_name`'))
            ->limit(10)
            ->get();

            return view (
                'frontend.import-data.import.index',
                [
                    'result' => $result, 
                ]
            );
        }
    }
}