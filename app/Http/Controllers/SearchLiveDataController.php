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

        if($request['type'] == "data") {
            if ($request['role'] == "import") {
                $result = DB::table('usa_import')
                ->select('*')
                ->where(DB::raw('`HS_Code`'), 'like', $hscode . '%')
                ->where(DB::raw('Product_Description'), 'LIKE', '%' . $desc . '%')
                ->limit(12)
                ->get();

            } elseif($request['role'] == "export") {
                $result = DB::table('jul')
                ->select('*')
                ->where(DB::raw('`HS_Code`'), 'like', $hscode . '%')
                ->where(DB::raw('Products'), 'LIKE', '%' . $desc . '%')
                ->limit(12)
                ->get();
            }
       
            $resultsArray = $result->toArray();

            return view(
                'frontend.livedata.search', 
                [
                    'result' => $result, 
                    'hscode' => $hscode,
                    'desc' => $desc,
                    'role' => $role,
                    'type' => $type
                ]
            );
        } elseif($request['type'] == "company") {
            if ($request['role'] == "import") {
                $result = DB::table('usa_import')
                ->select('*')
                ->where(DB::raw('`HS_Code`'), 'like', $hscode . '%')
                ->where(DB::raw('Product_Description'), 'LIKE', '%' . $desc . '%')
                ->limit(12)
                ->get();
                
            } elseif($request['role'] == "export") {
                $result = DB::table('jul')
                ->select('*')
                ->where(DB::raw('`HS_Code`'), 'like', $hscode . '%')
                ->where(DB::raw('Products'), 'LIKE', '%' . $desc . '%')
                ->limit(12)
                ->get();
            }
       
            return view (
                'frontend.livedata.search', 
                [
                    'result' => $result, 
                    'hscode' => $hscode,
                    'desc' => $desc, 
                    'role' => $role,
                    'type' => $type
                ]
            );
        }
    }

    // Data Fetching
    // function searchlist($description, $hsCode, $role)
    // {
    //     if($role == 'import') {
    //         try {
    //             $results = DB::table('usa_import')
    //             ->select('*')
    //             ->where('HS Code', $hsCode)
    //             ->get();
          
    //             if ($results->isEmpty()) {
    //               return view('frontend.livedata.search')->with('error-hscode', 'Your message has not been sent, please check the form and try again!');
    //             }
    //             return view('frontend.searchlivedata', ['results' => $results]);
    //         } catch (Exception $e) {
    //             // Handle the exception (e.g., log, display error message)
    //             dd($e->getMessage());
    //         }
    //     } else {
    //         try {
    //             $results = DB::table('jul')
    //             ->select('*')
    //             ->where('hs_code', $hsCode)
    //             ->get();
          
    //             if ($results->isEmpty()) {
    //               return view('frontend.livedata.search')->with('error-hscode', 'Your message has not been sent, please check the form and try again!');
    //             }
    //             return view('frontend.searchlivedata', ['results' => $results]);
    //         } catch (Exception $e) {
    //             // Handle the exception (e.g., log, display error message)
    //             dd($e->getMessage());
    //         }
    //     }
        
    // }
    function handleForm(Request $request) {
        $type = $request->input('type');
        $role = $request->input('role');
        $description = $request->input('description') ?: '-';
        $hs_code = $request->input('hs_code') ?: '-';

        if ($hs_code === '-') {
            $url = route('search', ['type' => $type, 'role' => $role, 'description' => $description]);
        } else {
            $url = route('search', ['type' => $type, 'role' => $role, 'description' => $description, 'hs_code' => $hs_code]);
        }

        return redirect($url);
    }
    // Search Live data
    public function search($type, $role, $description = null,$hs_code = null)
    {
        $searched_desc = $description;
        $searched_hs_code = $hs_code;
        // dd('HS-Code',$hs_code,'Description',$description);
        // Your search logic here

        if($type == "data") {
            if ($role == "import") {
                $result = DB::table('usa_import')
                ->select('*')
                ->where(DB::raw('`HS_Code`'), 'like', $hs_code . '%')
                ->where(DB::raw('Product_Description'), 'LIKE', '%' . $description . '%')
                ->limit(12)
                ->get();

            } elseif($role == "export") {
                $result = DB::table('jul')
                ->select('*')
                ->where(DB::raw('`HS_Code`'), 'like', $hs_code . '%')
                ->where(DB::raw('Products'), 'LIKE', '%' . $description . '%')
                ->limit(12)
                ->get();
            }
       
            $resultsArray = $result->toArray();

            return view(
                'frontend.livedata.search', 
                [
                    'result' => $result, 
                    'hscode' => $hs_code,
                    'desc' => $description,
                    'role' => $role,
                    'type' => $type
                ]
            );
        } elseif($type == "company") {
            if ($role == "import") {
                $result = DB::table('usa_import')
                ->select('*')
                ->where(DB::raw('`HS_Code`'), 'like', $hs_code . '%')
                ->where(DB::raw('Product_Description'), 'LIKE', '%' . $description . '%')
                ->limit(12)
                ->get();
                
            } elseif($role == "export") {
                $result = DB::table('jul')
                ->select('*')
                ->where(DB::raw('`HS_Code`'), 'like', $hs_code . '%')
                ->where(DB::raw('Products'), 'LIKE', '%' . $description . '%')
                ->limit(12)
                ->get();
            }
       
            return view (
                'frontend.livedata.search', 
                [
                    'result' => $result,
                    'hscode' => $hs_code,
                    'desc' => $description, 
                    'role' => $role,
                    'type' => $type,
                ]
            );
        }
    }
    
    // Search Filter
    public function searchFilter($type, $role,$resultDetails, $filterby, $filterdata) {
        // Handle different filters based on the filterby parameter
        // dd('Search Filter',$filterdata);

        switch ($filterby) {
            case 'hs_code':
                $results = DB::table('usa_import')
                    ->where('HS_Code', 'like', $filterdata . '%')
                    ->limit(12)
                    ->get();
                break;
            case 'country':
                $results = DB::table('usa_import')
                    ->where('Country', 'LIKE', '%' . $filterdata . '%')
                    ->limit(12)
                    ->get();
                break;
            case 'unloading_port':
                $results = DB::table('usa_import')
                    ->where('Unloading_Port', 'LIKE', '%' . $filterdata . '%')
                    ->limit(12)
                    ->get();
                break;
            default:
                $results = collect();
        }
        // dd($resultDetails);
        $searfilterdata = $filterdata;
        $searchfilterby = $filterby;

        
        return view('frontend.livedata.searchfilter', [
            'result' => $results,
            'desc'   => $filterdata,
            'type'   => $type,
            'role'   => $role,
            'hscode' => $filterdata,
            'filterdata' => $filterdata,
            'searfilterdata' => $filterdata,
            'searchfilterby' => $filterby,
         ]);
    }
    // Search Filter One
    public function searchFilter1($type, $role,$searchDetails, $filterby,$filterdata, $filterdata1) {
        // Handle different filters based on the filterby parameter
        // dd($filterdata,$filterby,$filterdata1);
        // dd($filterby);
        if ($filterby == 'hs_code') {
            $results = DB::table('usa_import')
                ->where('HS_Code', 'like', $filterdata . '%')
                ->where(function($query) use ($filterdata1) {
                    $query->where('HS_Code', 'like', '%' . $filterdata1 . '%')
                          ->orWhere('Country', 'like', '%' . $filterdata1 . '%')
                          ->orWhere('Unloading_port', 'like', '%' . $filterdata1 . '%');
                })
                ->limit(12)
                ->get();
            // dd('if BlockS');
        } else if ($filterby == 'country') {
            $results = DB::table('usa_import')
                ->where('Country', 'LIKE', '%' . $filterdata . '%')
                ->where(function($query) use ($filterdata1) {
                    $query->where('HS_Code', 'like', '%' . $filterdata1 . '%')
                          ->orWhere('Country', 'like', '%' . $filterdata1 . '%')
                          ->orWhere('Unloading_port', 'like', '%' . $filterdata1 . '%');
                })
                ->limit(12)
                ->get();
            // dd('Country Block');
        } else if ($filterby == 'unloading_port')          {
            $results = DB::table('usa_import')
                ->where('Country', 'LIKE', '%' . $filterdata . '%')
                ->where(function($query) use ($filterdata1) {
                    $query->where('HS_Code', 'like', '%' . $filterdata1 . '%')
                          ->orWhere('Country', 'like', '%' . $filterdata1 . '%')
                          ->orWhere('Unloading_port', 'like', '%' . $filterdata1 . '%');
                })
                ->limit(12)
                ->get();
           
        } else {
            # code...
             $results = collect();
        }

        
        // switch ($filterby) {
        //     case 'hs_code':
        //         $results = DB::table('usa_import')
        //         ->where('HS_Code', 'like', $filterdata . '%')
        //         ->where(function($subQuery) use ($filterdata1) {
        //             $subQuery->where('Country', 'like', '%' . $filterdata1 . '%')
        //                      ->orWhere('Unloading_Port', 'like', '%' . $filterdata1 . '%');
        //         })
        //         ->limit(12)
        //         ->get();
        //         break;
        //     case 'country':
        //         $results = DB::table('usa_import')
        //             ->where('Country', 'LIKE', '%' . $filterdata . '%')
        //             ->where(function($subQuery) use ($filterdata1) {
        //                 $subQuery->where('HS_Code', 'like', '%' . $filterdata1 . '%')
        //                          ->orWhere('Country', 'like', '%' . $filterdata1 . '%')
        //                          ->orWhere('Unloading_Port', 'like', '%' . $filterdata1 . '%');
        //             })
        //             ->limit(12)
        //             ->get();
        //         break;
        //     case 'unloading_port':
        //         $results = DB::table('usa_import')
        //             ->where('Unloading_Port', 'LIKE', '%' . $filterdata . '%')
        //             ->where(function($subQuery) use ($filterdata1) {
        //                 $subQuery->where('HS_Code', 'like', '%' . $filterdata1 . '%')
        //                          ->orWhere('Country', 'like', '%' . $filterdata1 . '%')
        //                          ->orWhere('Unloading_Port', 'like', '%' . $filterdata1 . '%');
        //             })
        //             ->limit(12)
        //             ->get();
        //         break;
        //     default:
        //         $results = collect();
        // }
        // dd($results);
        return view('frontend.livedata.searchfilter-one', [
            'result' => $results,
            'desc'   => $filterdata,
            'type'   => $type,
            'role'   => $role,
            'hscode' => $filterdata,
            'filterdata' => $filterdata,
            'filterdata1' => $filterdata1
         ]);
    }

    // Search Filter two
public function searchFilter2($type, $role, $searchDetails, $filter1, $filterby, $filterdata) {
    // Check and debug input parameters
    // dd('SearchDetails', $searchDetails, 'filterdata', $filterdata, 'filterby', $filterby, 'filter1', $filter1);
    
    // Determine which variable contains HS_Code and which contains Country
    if (is_numeric($searchDetails)) {
        $hs_code = $searchDetails;
        $country = $filter1;
    } else {
        $hs_code = $filter1;
        $country = $searchDetails;
    }
    
    // Handle different filters based on the filterby parameter
    if ($filterby == 'unloading_port') {
        $results = DB::table('usa_import')
            ->where('Unloading_Port', 'LIKE', '%' . $filterdata . '%')
            ->where('Country', 'LIKE', '%' . $country . '%')
            ->where('HS_Code', 'LIKE', '%' . $hs_code . '%')
            ->limit(12)
            ->get();
    } else {
        $results = DB::table('usa_import')
            ->where('Country', 'LIKE', '%' . $country . '%')
            ->where('HS_Code', 'LIKE', '%' . $hs_code . '%')
            ->limit(12)
            ->get();
    }
    
    // Debugging to verify results
    // dd($results);

    // Return the view with results
    return view('frontend.livedata.searchfilter-one', [
        'result' => $results,
        'desc' => $filterdata,
        'type' => $type,
        'role' => $role,
        'hscode' => $filterdata,
        'filterdata' => $filterdata,
        'filterdata1' => $filter1
    ]);
}

}
