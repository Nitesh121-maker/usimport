<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function productsearch(Request $request,$role,$letter) {
        $results = [];
    
        $validate = $request->validate([
            // 'role' => 'nullable',
            'product_name' => 'nullable'
        ]);
        // $role = $request['role'];
        $product = $request['product_name'];
        $activeLetter = $letter;
        // dd($activeLetter);
        if($role == "import") {
            $result = DB::table('products')
            ->select('*')
            ->where('product_name', 'like', $letter . '%')
            ->limit(15)
            ->get();

            $companyresult = DB::table('products')
            ->select('*')
            ->where('company_name', 'like', $letter . '%')
            ->limit(15)
            ->get();

            return view (
                'frontend.import-data.import.index',
                [
                    'result' => $result, 
                    'companyresult' => $companyresult,
                    'activeLetter' => $activeLetter,
                    'role' => $role
                ]
            );
        } elseif($role == "export") {
            $result = DB::table('export')
            ->select('*')
            ->where(DB::raw('`product_name`'), 'like', $letter . '%')
            ->limit(10)
            ->get();
            $companyresult = DB::table('export')
            ->select('*')
            ->where('company_name', 'like', $letter . '%')
            ->limit(15)
            ->get();
            return view (
                'frontend.import-data.import.index',
                [
                    'exportresult' => $result, 
                    'exportactiveLetter' => $letter,
                    'exportcompanyresult' => $companyresult,
                    'role' => $role
                ]
            );
        } else {
            # code...
            return view(
                'frontend.import-data.import.index',[
                    'message' => 'Error in retrieving data',
                ]
            );
        }
    }
}