<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Http\Request;

class SearchLiveDataController extends Controller
{
    function searchlivedata(Request $request) {
        $results = [];
        $validate = $request->validate([
            'role' => 'nullable',
            'hs_code' => 'nullable',
            'description' => 'nullable',
            'type' => 'nullable'
        ]);
        $role = $request['role'];
        $hscode = $request['hs_code'];
        $desc = $request['description'];
        $type = $request['type'];
        // dd($validate);

        // if($type['type'] == "data") {
            if ($request['role'] == "import") {
                $result = DB::table('usa_import')
                ->select('*')
                ->where(DB::raw('`HS_Code`'), 'like', $hscode . '%')
                ->where(DB::raw('Product_Description'), 'LIKE', '%' . $desc . '%')
                ->limit(10)
                ->get();
                
                // dd($result->toSql(), $result->getBindings());
            } elseif($request['role'] == "export") {
                $result = DB::table('jul')
                ->select('*')
                ->where(DB::raw('`HS_Code`'), 'like', $hscode . '%')
                ->where(DB::raw('Product_Description'), 'LIKE', '%' . $desc . '%')
                ->limit(10)
                ->get();
            }
       
            return view(
                'frontend.livedata.search', 
                [
                    'result' => $result, 
                    'hscode' => $hscode, 
                    'desc' => $desc, 
                    'role' => $role
                ]
            );
        // } elseif($request['type'] == "company") {

        // }

        
    }

    // Data Fetching
    function searchlist($description, $hsCode, $role)
    {
        if($role == 'import') {
            try {
                $results = DB::table('usa_import')
                ->select('*')
                ->where('HS Code', $hsCode)
                ->get();
          
                if ($results->isEmpty()) {
                  return view('frontend.livedata.search')->with('error-hscode', 'Your message has not been sent, please check the form and try again!');
                }
                return view('frontend.searchlivedata', ['results' => $results]);
            } catch (Exception $e) {
                // Handle the exception (e.g., log, display error message)
                dd($e->getMessage());
            }
        } else {
            try {
                $results = DB::table('jul')
                ->select('*')
                ->where('hs_code', $hsCode)
                ->get();
          
                if ($results->isEmpty()) {
                  return view('frontend.livedata.search')->with('error-hscode', 'Your message has not been sent, please check the form and try again!');
                }
                return view('frontend.searchlivedata', ['results' => $results]);
            } catch (Exception $e) {
                // Handle the exception (e.g., log, display error message)
                dd($e->getMessage());
            }
        }
        
    }
}
