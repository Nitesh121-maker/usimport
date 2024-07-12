<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Exception;
use Hamcrest\Type\IsNumeric;
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
            dd('data');
            if ($request['role'] == "import") {
                dd('data');
                $query1 = DB::table('IMP_AMERICA_BL_SEA_1')
                ->select('*')
                ->where(DB::raw('`HS_Code`'), 'like', $hscode . '%')
                ->where(DB::raw('Product_Description'), 'LIKE', '%' . $desc . '%')
                ->limit(10)
                ->get();
                $query2 = DB::table('IMP_AMERICA_BL_SEA_test')
                ->select('*')
                ->where(DB::raw('`HS_Code`'), 'like', $hscode . '%')
                ->where(DB::raw('Product_Description'), 'LIKE', '%' . $desc . '%')
                ->limit(10)
                ->get();
                $query3 = DB::table('IMP_AMERICA_BL_SEA_e')
                ->select('*')
                ->where(DB::raw('`HS_Code`'), 'like', $hscode . '%')
                ->where(DB::raw('Product_Description'), 'LIKE', '%' . $desc . '%')
                ->limit(10)
                ->get();
                $query4 = DB::table('IMP_AMERICA_BL_SEA_f')
                ->select('*')
                ->where(DB::raw('`HS_Code`'), 'like', $hscode . '%')
                ->where(DB::raw('Product_Description'), 'LIKE', '%' . $desc . '%')
                ->limit(10)
                ->get();

                $result = $query1->union($query2)
                ->union($query3)
                ->union($query4)
                ->limit(10)
                ->get();

            } elseif($request['role'] == "export") {
                $result = DB::table('jul')
                ->select('*')
                ->where(DB::raw('`HS_Code`'), 'like', $hscode . '%')
                ->where(DB::raw('Products'), 'LIKE', '%' . $desc . '%')
                ->limit(10)
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
            dd('data');
            if ($request['role'] == "import") {
                $query1 = DB::table('IMP_AMERICA_BL_SEA_1')
                ->select('*')
                ->where(DB::raw('`HS_Code`'), 'like', $hscode . '%')
                ->where(DB::raw('Product_Description'), 'LIKE', '%' . $desc . '%')
                ->limit(10)
                ->get();
                $query2 = DB::table('IMP_AMERICA_BL_SEA_test')
                ->select('*')
                ->where(DB::raw('`HS_Code`'), 'like', $hscode . '%')
                ->where(DB::raw('Product_Description'), 'LIKE', '%' . $desc . '%')
                ->limit(10)
                ->get();
                $query3 = DB::table('IMP_AMERICA_BL_SEA_e')
                ->select('*')
                ->where(DB::raw('`HS_Code`'), 'like', $hscode . '%')
                ->where(DB::raw('Product_Description'), 'LIKE', '%' . $desc . '%')
                ->limit(10)
                ->get();
                $query4 = DB::table('IMP_AMERICA_BL_SEA_f')
                ->select('*')
                ->where(DB::raw('`HS_Code`'), 'like', $hscode . '%')
                ->where(DB::raw('Product_Description'), 'LIKE', '%' . $desc . '%')
                ->limit(10)
                ->get();

                $result = $query1->union($query2)
                ->union($query3)
                ->union($query4)
                ->limit(10)
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
    public function search ($type, $role, $description = null,$hs_code = null)
    {
        $searched_desc = $description;
        $searched_hs_code = $hs_code;
        // dd('HS-Code',$hs_code,'Description',$description);
        // Your search logic here

        if($type == "data") {
            if ($role == "import") {
                $query1 = DB::table('IMP_AMERICA_BL_SEA_part_a')
                ->select('*')
                ->where(DB::raw('`hsCode`'), 'like', $hs_code . '%')
                ->where(DB::raw('prodDesc'), 'LIKE', '%' . $description . '%');
                $query2 = DB::table('IMP_AMERICA_BL_SEA_part_b')
                ->select('*')
                ->where(DB::raw('`hsCode`'), 'like', $hs_code . '%')
                ->where(DB::raw('prodDesc'), 'LIKE', '%' . $description . '%');
            
                $query3 = DB::table('IMP_AMERICA_BL_SEA_part_c')
                    ->select('*')
                    ->where(DB::raw('`hsCode`'), 'like', $hs_code . '%')
                    ->where(DB::raw('prodDesc'), 'LIKE', '%' . $description . '%');
                
                $query4 = DB::table('IMP_AMERICA_BL_SEA_part_e')
                    ->select('*')
                    ->where(DB::raw('`hsCode`'), 'like', $hs_code . '%')
                    ->where(DB::raw('prodDesc'), 'LIKE', '%' . $description . '%');
                
                $query5 = DB::table('IMP_AMERICA_BL_SEA_part_f')
                    ->select('*')
                    ->where(DB::raw('`hsCode`'), 'like', $hs_code . '%')
                    ->where(DB::raw('prodDesc'), 'LIKE', '%' . $description . '%');
                $query6 = DB::table('IMP_AMERICA_BL_SEA_part_h')
                    ->select('*')
                    ->where(DB::raw('`hsCode`'), 'like', $hs_code . '%')
                    ->where(DB::raw('prodDesc'), 'LIKE', '%' . $description . '%');
                $query7 = DB::table('IMP_AMERICA_BL_SEA_part_i')
                    ->select('*')
                    ->where(DB::raw('`hsCode`'), 'like', $hs_code . '%')
                    ->where(DB::raw('prodDesc'), 'LIKE', '%' . $description . '%');
                $query8 = DB::table('IMP_AMERICA_BL_SEA_part_j')
                    ->select('*')
                    ->where(DB::raw('`hsCode`'), 'like', $hs_code . '%')
                    ->where(DB::raw('prodDesc'), 'LIKE', '%' . $description . '%');
                $query9 = DB::table('IMP_AMERICA_BL_SEA_part_k')
                    ->select('*')
                    ->where(DB::raw('`hsCode`'), 'like', $hs_code . '%')
                    ->where(DB::raw('prodDesc'), 'LIKE', '%' . $description . '%');
                $query10 = DB::table('IMP_AMERICA_BL_SEA_part_l')
                    ->select('*')
                    ->where(DB::raw('`hsCode`'), 'like', $hs_code . '%')
                    ->where(DB::raw('prodDesc'), 'LIKE', '%' . $description . '%');
                $query11 = DB::table('IMP_AMERICA_BL_SEA_part_m')
                    ->select('*')
                    ->where(DB::raw('`hsCode`'), 'like', $hs_code . '%')
                    ->where(DB::raw('prodDesc'), 'LIKE', '%' . $description . '%');
                $query12 = DB::table('IMP_AMERICA_BL_SEA_part_n')
                    ->select('*')
                    ->where(DB::raw('`hsCode`'), 'like', $hs_code . '%')
                    ->where(DB::raw('prodDesc'), 'LIKE', '%' . $description . '%');
                $query13 = DB::table('IMP_AMERICA_BL_SEA_part_o')
                    ->select('*')
                    ->where(DB::raw('`hsCode`'), 'like', $hs_code . '%')
                    ->where(DB::raw('prodDesc'), 'LIKE', '%' . $description . '%');
                $query14 = DB::table('IMP_AMERICA_BL_SEA_part_p')
                    ->select('*')
                    ->where(DB::raw('`hsCode`'), 'like', $hs_code . '%')
                    ->where(DB::raw('prodDesc'), 'LIKE', '%' . $description . '%');
                $query15 = DB::table('IMP_AMERICA_BL_SEA_part_q')
                    ->select('*')
                    ->where(DB::raw('`hsCode`'), 'like', $hs_code . '%')
                    ->where(DB::raw('prodDesc'), 'LIKE', '%' . $description . '%');
                $query16 = DB::table('IMP_AMERICA_BL_SEA_part_v')
                    ->select('*')
                    ->where(DB::raw('`hsCode`'), 'like', $hs_code . '%')
                    ->where(DB::raw('prodDesc'), 'LIKE', '%' . $description . '%');
                $query17 = DB::table('IMP_AMERICA_BL_SEA_part_w')
                    ->select('*')
                    ->where(DB::raw('`hsCode`'), 'like', $hs_code . '%')
                    ->where(DB::raw('prodDesc'), 'LIKE', '%' . $description . '%');
                $query18 = DB::table('IMP_AMERICA_BL_SEA_part_x')
                    ->select('*')
                    ->where(DB::raw('`hsCode`'), 'like', $hs_code . '%')
                    ->where(DB::raw('prodDesc'), 'LIKE', '%' . $description . '%');

                // Combine the queries using union
                $combinedQuery = $query1->union($query2)
                    ->union($query3)
                    ->union($query4)
                    ->union($query5)
                    ->union($query6)
                    ->union($query7)
                    ->union($query8)
                    ->union($query9)
                    ->union($query10)
                    ->union($query11)
                    ->union($query12)
                    ->union($query13)
                    ->union($query14)
                    ->union($query15)
                    ->union($query16)
                    ->union($query17)
                    ->union($query18)
                    ;
            
            // Apply the limit and get the results
            $result = DB::table(DB::raw("({$combinedQuery->toSql()}) as sub"))
                ->mergeBindings($combinedQuery) // You need to merge bindings to avoid SQL errors
                ->limit(10)
                ->get();
            
            // dd($hs_code);

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
                    'hs_code' => $hs_code,
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
        // dd('type',$type,'role', $role,'resultdetails',$resultDetails,'filterby', $filterby,'filterdata', $filterdata);
        
        if (is_numeric($resultDetails)) {
            $hs_codedetails = $resultDetails;
            // dd($resultDetails);
            switch ($filterby) {
                case 'hs_code':
                    $results = DB::table('usa_import')
                        ->where('HS_Code','like',$hs_codedetails .'%')
                        ->where('HS_Code', 'like', $filterdata . '%')
                        ->limit(10)
                        ->get();
                    break;
                case 'country':
                    $results = DB::table('usa_import')
                        ->where('HS_Code','like',$hs_codedetails .'%')
                        ->where('Country', 'LIKE', '%' . $filterdata . '%')
                        ->limit(10)
                        ->get();
                    break;
                case 'unloading_port':
                    $results = DB::table('usa_import')
                        ->where('HS_Code','like',$hs_codedetails .'%')
                        ->where('Unloading_Port', 'LIKE', '%' . $filterdata . '%')
                        ->limit(10)
                        ->get();
                    break;
                default:
                    $results = collect();
            }
        } else {
            // $hs_code = $filter1;
            $descdetails = $resultDetails;
            switch ($filterby) {
                case 'hs_code':
                    $results = DB::table('usa_import')
                        ->select('*')
                        ->where('Product_Description','like',$descdetails .'%')
                        ->where('HS_Code', 'like', $filterdata . '%')
                        ->limit(10)
                        ->get();
                    break;
                case 'country':
                    $results = DB::table('usa_import')
                        ->select('*')
                        ->where('Product_Description','like',$descdetails .'%')
                        ->where('Country', 'LIKE', '%' . $filterdata . '%')
                        ->limit(10)
                        ->get();
                    break;
                case 'unloading_port':
                    $results = DB::table('usa_import')
                        ->select('*')
                        ->where('Product_Description','like',$descdetails .'%')
                        ->where('Unloading_Port', 'LIKE', '%' . $filterdata . '%')
                        ->limit(10)
                        ->get();
                    break;
                default:
                    $results = collect();
            }
        }

        // dd($results);
        $searfilterdata = $filterdata;
        $searchfilterby = $filterby;

        
        return view('frontend.livedata.searchfilter', [
            'result' => $results,
            'desc'   => $filterdata,
            'type'   => $type,
            'role'   => $role,
            'hscode' => $filterdata,
            'filterdata' => $filterdata,
            'resultDetails'=> $resultDetails,
            'searfilterdata' => $filterdata,
            'searchfilterby' => $filterby,
         ]);
    }
    // Search Filter One
    public function searchFilter1($type, $role,$searchDetails1,$searchDetails, $filterby,$filterdata, $filterdata1) {
        // Handle different filters based on the filterby parameter
        // dd($filterdata,$filterby,$filterdata1);
        // dd($searchDetails);
        if (is_numeric($searchDetails1)) {
            // dd('Numeric bloc');
            # code...
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
                    ->where(function($query) use ($filterdata1,$searchDetails) {
                        $query->where('HS_Code', 'like', '%' . $searchDetails . '%')
                              ->orWhere('Country', 'like', '%' . $filterdata1 . '%')
                              ->orWhere('Unloading_port', 'like', '%' . $filterdata1 . '%');
                    })
                    ->limit(12)
                    ->get();
                // dd('Country Block');
            } else if ($filterby == 'unloading_port'){
                // dd($filterdata);
                $results = DB::table('usa_import')
                    ->where('Unloading_port', 'LIKE', '%' . $filterdata . '%')
                    ->where(function($query) use ($filterdata1) {
                        $query->where('HS_Code', 'like', '%' . $filterdata1 . '%')
                              ->orWhere('Country', 'like', '%' . $filterdata1 . '%');
                    })
                    ->limit(12)
                    ->get();
               
            } else {
                # code...
                 $results = collect();
            }
        } else {
            # code...
            
            if ($filterby == 'hs_code') {
                $results = DB::table('usa_import')
                    ->where('HS_Code', 'like', $filterdata . '%')
                    ->Where('Product_Description', 'like', '%' . $searchDetails1 . '%')
                    ->where(function($query) use ($filterdata1,$searchDetails1) {
                        $query->where('HS_Code', 'like', '%' . $filterdata1 . '%')
                              ->orWhere('Country', 'like', '%' . $filterdata1 . '%')
                              ->orWhere('Unloading_port', 'like', '%' . $filterdata1 . '%');
                    })
                    ->limit(12)
                    ->get();
                dd('if BlockS');
            } else if ($filterby == 'country') {
                $results = DB::table('usa_import')
                    ->where('Country', 'LIKE', '%' . $filterdata . '%')
                    ->where('Product_Description', 'like', '%' . $searchDetails1 . '%')
                    ->where(function($query) use ($filterdata1,$searchDetails,$searchDetails1) {
                        $query->where('HS_Code', 'like', '%' . $searchDetails . '%')                          
                              ->orWhere('Country', 'like', '%' . $filterdata1 . '%')
                              ->orWhere('Unloading_port', 'like', '%' . $filterdata1 . '%');
                            //   ->orWhere('Product_Description', 'like', '%' . $searchDetails1 . '%');
                    })
                    ->limit(12)
                    ->get();
                // dd('Country Block');
            } else if ($filterby == 'unloading_port')          {
                $results = DB::table('usa_import')
                    ->where('Country', 'LIKE', '%' . $filterdata . '%')
                    ->Where('Product_Description', 'like', '%' . $searchDetails1 . '%')
                    ->where(function($query) use ($filterdata1,$searchDetails1) {
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
            'searchDetails1' => $searchDetails1,
            'filterdata' => $filterdata,
            'filterdata1' => $filterdata1
         ]);
    }

    // Search Filter two
public function searchFilter2($type, $role, $searchDetails,$searchDetails1, $filter1, $filterby, $filterdata) {
    // Check and debug input parameters
    // dd('SearchDetails', $searchDetails, 'filterdata', $filterdata, 'filterby', $filterby, 'filter1', $filter1,'SearchDetails1',$searchDetails1);
    // dd($searchDetails1);
    // Determine which variable contains HS_Code and which contains Country
    if (is_numeric($searchDetails)) {
        $hs_code = $searchDetails;
        $filter_search = $filter1;

    } else {
        $hs_code = $filter1;
        $filter_search = $searchDetails;
        // dd('Else Block');

    }
    if (is_numeric($searchDetails1)) {
        # code...
        // dd('Numeric Bloc');
        if ($filterby == 'hs_code') {
            $results = DB::table('usa_import')
                ->select('*')
                ->where('Unloading_Port', 'LIKE', '%' . $filterdata . '%')
                ->where('Country', 'LIKE', '%' . $filter_search . '%')
                ->where('HS_Code', 'LIKE', '%' . $hs_code . '%')
                ->limit(12)
                ->get();
            // dd('if BlockS');
        } else if ($filterby == 'country') {
            // dd('country',$filter_search);
            $results = DB::table('usa_import')
                ->select('*')
                ->where('Country', 'LIKE', '%' . $filterdata . '%')
                ->where('HS_Code', 'LIKE', '%' . $hs_code . '%')
                ->where('Unloading_Port', 'LIKE', '%' . $filter_search . '%')
                ->limit(12)
                ->get();
            // dd('Country Block');
        } else if ($filterby == 'unloading_port') {
            $results = DB::table('usa_import')
                ->select('*')
                ->where('Unloading_Port', 'LIKE', '%' . $filterdata . '%')
                ->where('Country', 'LIKE', '%' . $filter_search . '%')
                ->where('HS_Code', 'LIKE', '%' . $hs_code . '%')
                ->limit(12)
                ->get();
           
        } else {
            # code...
             $results = collect();
        }
    } else {
        # code...
        if ($filterby == 'hs_code') {
            $results = DB::table('usa_import')
                ->select('*')
                ->where('Product_Description', 'LIKE','%'.$searchDetails1 .'%')
                ->where('Unloading_Port', 'LIKE', '%' . $filterdata . '%')
                ->where('Country', 'LIKE', '%' . $filter_search . '%')
                ->where('HS_Code', 'LIKE', '%' . $hs_code . '%')
                ->limit(12)
                ->get();
            dd('if BlockS');
        } else if ($filterby == 'country') {
            $results = DB::table('usa_import')
                ->select('*')
                ->where('Product_Description', 'LIKE','%'.$searchDetails1 .'%')
                ->where('Unloading_Port', 'LIKE', '%' . $filterdata . '%')
                ->where('Country', 'LIKE', '%' . $filter_search . '%')
                ->where('HS_Code', 'LIKE', '%' . $hs_code . '%')
                ->limit(12)
                ->get();
            // dd('Country Block');
        } else if ($filterby == 'unloading_port') {
            $results = DB::table('usa_import')
                ->select('*')
                ->where('Product_Description', 'LIKE','%'.$searchDetails1 .'%')
                ->where('Unloading_Port', 'LIKE', '%' . $filterdata . '%')
                ->where('Country', 'LIKE', '%' . $filter_search . '%')
                ->where('HS_Code', 'LIKE', '%' . $hs_code . '%')
                ->limit(12)
                ->get();
           
        } else {
            # code...
             $results = collect();
        }
    }
    
    // Handle different filters based on the filterby parameter
    // if ($filterby == 'unloading_port') {
    //     $results = DB::table('usa_import')
    //         ->select('*')
    //         ->where('Product_Description', 'LIKE','%'.$searchDetails1 .'%')
    //         ->where('Unloading_Port', 'LIKE', '%' . $filterdata . '%')
    //         ->where('Country', 'LIKE', '%' . $country . '%')
    //         ->where('HS_Code', 'LIKE', '%' . $hs_code . '%')
    //         ->limit(12)
    //         ->get();
    // } else {
    //     $results = DB::table('usa_import')
    //         ->select('*')
    //         ->where('Product_Description', 'LIKE','%'.$searchDetails1 .'%')
    //         ->where('Country', 'LIKE', '%' . $country . '%')
    //         ->where('HS_Code', 'LIKE', '%' . $hs_code . '%')
    //         ->limit(12)
    //         ->get();
    // }
    
    // Debugging to verify results
    // dd($results);

    // Return the view with results
    return view('frontend.livedata.searchfilter-one', [
        'result' => $results,
        'desc' => $filterdata,
        'type' => $type,
        'role' => $role,
        'hscode' => $filterdata,
        'searchDetails1' => $searchDetails1,
        'filterdata' => $filterdata,
        'filterdata1' => $filter1
    ]);
}

}
