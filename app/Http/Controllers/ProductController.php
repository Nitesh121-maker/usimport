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
            $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                ->select('*')
                ->where(DB::raw('PRODUCT_DESCRIPTION'), 'like', $letter . '%');
            
            $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
                ->select('*')
                ->where(DB::raw('PRODUCT_DESCRIPTION'), 'like', $letter . '%');
        
            $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
                ->select('*')
                ->where(DB::raw('PRODUCT_DESCRIPTION'), 'like', $letter . '%');

            // Combine the queries using union
            $combinedQuery = $query1
                ->union($query2)
                ->union($query3);
            $result = DB::table(DB::raw("({$combinedQuery->toSql()}) as sub"))
            ->mergeBindings($combinedQuery) // You need to merge bindings to avoid SQL errors
            ->limit(15)
            ->get();

            // $result = DB::table('EXP_AMERICA_BL_SEA')
            // ->select('*')
            // ->where('PRODUCT_DESCRIPTION', 'like', $letter . '%')
            // ->limit(15)
            // ->get();

            $companyresult = DB::table('EXP_AMERICA_BL_SEA')
            ->select('*')
            ->where('US_EXPORTER_NAME', 'like', $letter . '%')
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
            $result = DB::table('EXP_AMERICA_BL_SEA')
            ->select('*')
            ->where(DB::raw('`PRODUCT_DESCRIPTION`'), 'like', $letter . '%')
            ->limit(10)
            ->get();
            $companyresult = DB::table('EXP_AMERICA_BL_SEA')
            ->select('*')
            ->where('PRODUCT_DESCRIPTION', 'like', $letter . '%')
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