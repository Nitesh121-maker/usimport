<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Exception;
use Hamcrest\Type\IsNumeric;
use Illuminate\Http\Request;

class SearchLiveDataController extends Controller
{
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
        $base_desc = $description;
        $base_hs_code = $hs_code;
        // dd('HS-Code',$searched_hs_code,'Description',$searched_desc);
        // Your search logic here

        if($type == "data") {
            if ($role == "import") {
             
                $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                ->select('*')
                ->where(DB::raw('`HS_CODE`'), 'like', $hs_code . '%')
                ->where(DB::raw('PRODUCT_DESCRIPTION'), 'LIKE', '%' . $description . '%')
                ->whereNotNull('HS_CODE')
                ->whereNotNull('US_IMPORTER_NAME');
                
                $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
                    ->select('*')
                    ->where(DB::raw('`HS_CODE`'), 'like', $hs_code . '%')
                    ->where(DB::raw('PRODUCT_DESCRIPTION'), 'LIKE', '%' . $description . '%')
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
            
                $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
                    ->select('*')
                    ->where(DB::raw('`HS_CODE`'), 'like', $hs_code . '%')
                    ->where(DB::raw('PRODUCT_DESCRIPTION'), 'LIKE', '%' . $description . '%')
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');

                // Combine the queries using union
                $combinedQuery = $query1
                    ->union($query2)
                    ->union($query3)
                    ;
                $result = DB::table(DB::raw("({$combinedQuery->toSql()}) as sub"))
                ->mergeBindings($combinedQuery) // You need to merge bindings to avoid SQL errors
                ->limit(10)
                ->get();
            
            // dd($hs_code);

            } elseif($role == "export") {
                $result = DB::table('EXP_AMERICA_BL_SEA')
                ->select('*')
                ->where(DB::raw('`HS_CODE`'), 'like', $hs_code . '%')
                ->where(DB::raw('PRODUCT_DESCRIPTION'), 'LIKE', '%'. $base_desc . '%')
                ->limit(10)
                ->get();
            }
            // dd($result);
            $resultsArray = $result->toArray();
            return view(
                'frontend.livedata.search', 
                [
                    'result' => $result, 
                    'hs_code' => $hs_code,
                    'desc' => $description,
                    'base_desc' => $base_desc,
                    'base_hs_code' => $base_hs_code,
                    'role' => $role,
                    'type' => $type
                ]
            );
        } elseif($type == "company") {
            if ($role == "import") {
                $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                ->select('*')
                ->where(DB::raw('`HS_CODE`'), 'like', $hs_code . '%')
                ->where(DB::raw('PRODUCT_DESCRIPTION'), 'LIKE', '%' . $description . '%')
                ->whereNotNull('HS_CODE')
                ->whereNotNull('US_IMPORTER_NAME');
                
                $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
                    ->select('*')
                    ->where(DB::raw('`HS_CODE`'), 'like', $hs_code . '%')
                    ->where(DB::raw('PRODUCT_DESCRIPTION'), 'LIKE', '%' . $description . '%')
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
            
                $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
                    ->select('*')
                    ->where(DB::raw('`HS_CODE`'), 'like', $hs_code . '%')
                    ->where(DB::raw('PRODUCT_DESCRIPTION'), 'LIKE', '%' . $description . '%')
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');

                // Combine the queries using union
                $combinedQuery = $query1
                    ->union($query2)
                    ->union($query3)
                    ;
                $result = DB::table(DB::raw("({$combinedQuery->toSql()}) as sub"))
                ->mergeBindings($combinedQuery) // You need to merge bindings to avoid SQL errors
                ->limit(10)
                ->get();
                // $result = DB::table('usa_import')
                // ->select('*')
                // ->where(DB::raw('`HS_Code`'), 'like', $hs_code . '%')
                // ->where(DB::raw('Product_Description'), 'LIKE', '%' . $description . '%')
                // ->limit(12)
                // ->get();
                
            } elseif($role == "export") {
                $result = DB::table('EXP_AMERICA_BL_SEA_part_MAIN')
                ->select('*')
                ->where(DB::raw('`HS_CODE`'), 'like', $hs_code . '%')
                ->where(DB::raw('Products'), 'LIKE', '%' . $description . '%')
                ->whereNotNull('HS_CODE')
                ->whereNotNull('US_EXPORTER_NAME')
                ->limit(10)
                ->get();
            }
       
            return view (
                'frontend.livedata.search', 
                [
                    'result' => $result, 
                    'hs_code' => $hs_code,
                    'desc' => $description,
                    'base_desc' => $base_desc,
                    'base_hs_code' => $base_hs_code,
                    'role' => $role,
                    'type' => $type
                ]
            );
        }
    }
    
    // Search Filter
    public function searchFilter($type, $role,$base_search, $filterby, $filterdata) {
        // Handle different filters based on the filterby parameter
        // dd('type',$type,'role', $role,'base_search',$base_search,'filterby', $filterby,'filterdata', $filterdata);
        // dd($base_search);
        if ($role == 'import') {
            # code...
            if (is_numeric($base_search)) {
                $hs_codedetails = $base_search;
                  
                switch ($filterby) {
                    case 'hs_code':
                        $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                            ->select('*')
                            ->where('HS_CODE','like',$hs_codedetails .'%')
                            ->where('HS_CODE', 'like', $filterdata . '%')
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_IMPORTER_NAME');
                        
                        $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
                            ->select('*')
                            ->where('HS_CODE','like',$hs_codedetails .'%')
                            ->where('HS_CODE', 'like', $filterdata . '%')
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_IMPORTER_NAME');
                    
                        $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
                            ->select('*')
                            ->where('HS_CODE','like',$hs_codedetails .'%')
                            ->where('HS_CODE', 'like', $filterdata . '%')
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_IMPORTER_NAME');
    
                        // Combine the queries using union
                        $combinedQuery = $query1
                            ->union($query2)
                            ->union($query3)
                            ;
                        $results = DB::table(DB::raw("({$combinedQuery->toSql()}) as sub"))
                        ->mergeBindings($combinedQuery) // You need to merge bindings to avoid SQL errors
                        ->limit(10)
                        ->get();
                        break;
                    case 'country':
                        $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                            ->select('*')
                            ->where('HS_CODE','like',$hs_codedetails .'%')
                            ->where('ORIGIN_COUNTRY', 'like', $filterdata . '%')
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_IMPORTER_NAME');
                        
                        $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
                            ->select('*')
                            ->where('HS_CODE','like',$hs_codedetails .'%')
                            ->where('ORIGIN_COUNTRY', 'like', $filterdata . '%')
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_IMPORTER_NAME');
                    
                        $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
                            ->select('*')
                            ->where('HS_CODE','like',$hs_codedetails .'%')
                            ->where('ORIGIN_COUNTRY', 'like', $filterdata . '%')
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_IMPORTER_NAME');
    
                        // Combine the queries using union
                        $combinedQuery = $query1
                            ->union($query2)
                            ->union($query3)
                            ;
                        $results = DB::table(DB::raw("({$combinedQuery->toSql()}) as sub"))
                        ->mergeBindings($combinedQuery) // You need to merge bindings to avoid SQL errors
                        ->limit(10)
                        ->get();
    
                        break;
                    case 'unloading_port':
                        $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                        ->select('*')
                        ->where('HS_CODE','like',$hs_codedetails .'%')
                        ->where('UNLOADING_PORT', 'like', $filterdata . '%')
                        ->whereNotNull('HS_CODE')
                        ->whereNotNull('US_IMPORTER_NAME');
                        
                        $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
                            ->select('*')
                            ->where('HS_CODE','like',$hs_codedetails .'%')
                            ->where('UNLOADING_PORT', 'like', $filterdata . '%')
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_IMPORTER_NAME');
                    
                        $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
                            ->select('*')
                            ->where('HS_CODE','like',$hs_codedetails .'%')
                            ->where('UNLOADING_PORT', 'like', $filterdata . '%')
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_IMPORTER_NAME');
    
                        // Combine the queries using union
                        $combinedQuery = $query1
                            ->union($query2)
                            ->union($query3)
                            ;
                        $results = DB::table(DB::raw("({$combinedQuery->toSql()}) as sub"))
                        ->mergeBindings($combinedQuery) // You need to merge bindings to avoid SQL errors
                        ->limit(10)
                        ->get();
    
                        break;
                    default:
                        $results = collect();
                }
            } else {
                // $hs_code = $filter1;
                $descdetails = $base_search;
                // dd($filterdata);
                switch ($filterby) {
                    case 'hs_code':
                        $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                        ->select('*')
                        ->where('PRODUCT_DESCRIPTION','like','%'.$descdetails .'%')
                        ->where('HS_CODE', 'like', $filterdata . '%')
                        ->whereNotNull('HS_CODE')
                        ->whereNotNull('US_IMPORTER_NAME');
                        
                        $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
                            ->select('*')
                            ->where('PRODUCT_DESCRIPTION','like','%'.$descdetails .'%')
                            ->where('HS_CODE', 'like', $filterdata . '%')
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_IMPORTER_NAME');
                    
                        $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
                            ->select('*')
                            ->where('PRODUCT_DESCRIPTION','like','%'.$descdetails .'%')
                            ->where('HS_CODE', 'like', $filterdata . '%')
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_IMPORTER_NAME');
    
                        // Combine the queries using union
                        $combinedQuery = $query1
                            ->union($query2)
                            ->union($query3)
                            ;
                        $results = DB::table(DB::raw("({$combinedQuery->toSql()}) as sub"))
                        ->mergeBindings($combinedQuery) // You need to merge bindings to avoid SQL errors
                        ->limit(10)
                        ->get();
                        // dd($results);
                        // $results = DB::table('usa_import')
                        //     ->select('*')
                        //     ->where('Product_Description','like',$descdetails .'%')
                        //     ->where('HS_Code', 'like', $filterdata . '%')
                        //     ->limit(10)
                        //     ->get();
                        break;
                    case 'country':
                        // dd('Filter data',$filterdata,'De3scription',$descdetails);
                        $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                        ->select('*')
                        ->where('ORIGIN_COUNTRY', 'like', $filterdata . '%')
                        ->where('PRODUCT_DESCRIPTION','like','%'.$descdetails .'%')
                        ->whereNotNull('HS_CODE')
                        ->whereNotNull('US_IMPORTER_NAME')
                        ;
                       
                        $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
                            ->select('*')
                            ->where('ORIGIN_COUNTRY', 'like', $filterdata . '%')
                            ->where('PRODUCT_DESCRIPTION','like','%'.$descdetails .'%')
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_IMPORTER_NAME');
                    
                        $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
                            ->select('*')
                            ->where('ORIGIN_COUNTRY', 'like', $filterdata . '%')
                            ->where('PRODUCT_DESCRIPTION','like','%'.$descdetails .'%')
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_IMPORTER_NAME');
    
                        // Combine the queries using union
                        $combinedQuery = $query1
                            ->union($query2)
                            ->union($query3)
                            ;
                        $results = DB::table(DB::raw("({$combinedQuery->toSql()}) as sub"))
                        ->mergeBindings($combinedQuery) // You need to merge bindings to avoid SQL errors
                        ->limit(10)
                        ->get();
                        // dd($results);
                        // $results = DB::table('usa_import')
                        //     ->select('*')
                        //     ->where('Product_Description','like',$descdetails .'%')
                        //     ->where('Country', 'LIKE', '%' . $filterdata . '%')
                        //     ->limit(10)
                        //     ->get();
                        break;
                    case 'unloading_port':
                        $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                        ->select('*')
                        ->where('PRODUCT_DESCRIPTION','like','%'.$descdetails .'%')
                        ->where('UNLOADING_PORT', 'like', $filterdata . '%')
                        ->whereNotNull('HS_CODE')
                        ->whereNotNull('US_IMPORTER_NAME');
                        
                        $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
                            ->select('*')
                            ->where('PRODUCT_DESCRIPTION','like','%'.$descdetails .'%')
                            ->where('UNLOADING_PORT', 'like', $filterdata . '%')
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_IMPORTER_NAME');
                    
                        $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
                            ->select('*')
                            ->where('PRODUCT_DESCRIPTION','like','%'.$descdetails .'%')
                            ->where('UNLOADING_PORT', 'like', $filterdata . '%')
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_IMPORTER_NAME');
    
                        // Combine the queries using union
                        $combinedQuery = $query1
                            ->union($query2)
                            ->union($query3)
                            ;
                        $results = DB::table(DB::raw("({$combinedQuery->toSql()}) as sub"))
                        ->mergeBindings($combinedQuery) // You need to merge bindings to avoid SQL errors
                        ->limit(10)
                        ->get();
                        // $results = DB::table('usa_import')
                        //     ->select('*')
                        //     ->where('Product_Description','like',$descdetails .'%')
                        //     ->where('Unloading_Port', 'LIKE', '%' . $filterdata . '%')
                        //     ->limit(10)
                        //     ->get();
                        break;
                    default:
                        $results = collect();
                }
            }
        } else {
            # code...
            if (is_numeric($base_search)) {

                $hs_codedetails = $base_search;

                switch ($filterby) {
                    case 'hs_code':   
                        $results = DB::table('EXP_AMERICA_BL_SEA')
                            ->select('*')
                            ->where('HS_CODE','like',$hs_codedetails .'%')
                            ->orwhere('HS_CODE', 'LIKE', '%' . $filterdata . '%')
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_EXPORTER_NAME')
                            ->limit(10)
                            ->get();
                            // dd($results);
                        break;
                    case 'country':         
                        
                        $results = DB::table('EXP_AMERICA_BL_SEA')
                            ->select('*')
                            ->where('HS_CODE','like',$hs_codedetails .'%')
                            ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filterdata . '%')
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_EXPORTER_NAME')
                            ->limit(10)
                            ->get();
                        break;
                    case 'unloading_port':
                        $results = DB::table('EXP_AMERICA_BL_SEA')
                        ->select('*')
                        ->where('HS_CODE','like',$hs_codedetails .'%')
                        ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata . '%')
                        ->whereNotNull('HS_CODE')
                        ->whereNotNull('US_EXPORTER_NAME')
                        ->limit(10)
                        ->get();
                           // Combine the queries using union  
                        break;
                    default:
                        $results = collect();
                }
            } else {
                // $hs_code = $filter1;
                $descdetails = $base_search;
                // dd($filterdata);
                switch ($filterby) {
                    case 'hs_code':
                        $results = DB::table('EXP_AMERICA_BL_SEA')
                            ->select('*')
                            ->where('PRODUCT_DESCRIPTION','like','%'.$descdetails .'%')
                            ->where('HS_CODE', 'like', $filterdata . '%')
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_EXPORTER_NAME')
                            ->limit(10)
                            ->get();
                        break;
                    case 'country':
                        // dd('Filter data',$filterdata,'Description',$descdetails);
                        // dd('Country Block is executing in Description');          
                        $results = DB::table('EXP_AMERICA_BL_SEA')
                            ->select('*')
                            ->where('DESTINATION_COUNTRY', 'like', '%' . $filterdata . '%')
                            ->where('PRODUCT_DESCRIPTION', 'like', '%' . $descdetails . '%') 
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_EXPORTER_NAME')
                            ->limit(10)
                            ->get();
                    
                        // dd($results);
                        break;
                    case 'unloading_port':
                        $results = DB::table('EXP_AMERICA_BL_SEA')
                            ->select('*')
                            ->where('PRODUCT_DESCRIPTION','like',$descdetails .'%')
                            ->where('UNLOADING_PORT', 'like', '%' . $filterdata . '%')
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_EXPORTER_NAME')
                            ->limit(10)
                            ->get();
                        break;
                    default:
                        $results = collect();
                }
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
            'resultDetails'=> $base_search,
            'searfilterdata' => $filterdata,
            'searchfilterby' => $filterby,
         ]);
    }
    // Search Filter One
    public function searchFilter1($type, $role,$searchDetails1,$searchDetails, $filterdata1, $filterby,$filterdata) {
        // Handle different filters based on the filterby parameter
        // dd($type, $role,$searchDetails1,$searchDetails, $filterdata1, $filterby,$filterdata);
       
        if ($role=='import') {

            # code...
            if (is_numeric($searchDetails1)) {
                // dd('Numeric bloc');
                # code...
                if ($filterby == 'hs_code') {
                    $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                    ->select('*')
                    ->where('HS_CODE', 'like', $filterdata . '%')
                    ->where(function($query) use ($filterdata1) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata1 . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata1 . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata1 . '%')
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                    });
                    
                    $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
                    ->where('HS_CODE', 'like', $filterdata . '%')
                    ->where(function($query) use ($filterdata1) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata1 . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata1 . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata1 . '%')
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                    });
                
                    $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
                    ->where('HS_CODE', 'like', $filterdata . '%')
                    ->where(function($query) use ($filterdata1) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata1 . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata1 . '%')
                              ->orWhere('Unloading_port', 'like', '%' . $filterdata1 . '%')
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                    });
    
                    // Combine the queries using union
                    $combinedQuery = $query1
                        ->union($query2)
                        ->union($query3)
                        ;
                    $results = DB::table(DB::raw("({$combinedQuery->toSql()}) as sub"))
                    ->mergeBindings($combinedQuery) // You need to merge bindings to avoid SQL errors
                    ->limit(10)
                    ->get();
                    // $results = DB::table('usa_import')
                    //     ->where('HS_Code', 'like', $filterdata . '%')
                    //     ->where(function($query) use ($filterdata1) {
                    //         $query->where('HS_Code', 'like', '%' . $filterdata1 . '%')
                    //               ->orWhere('Country', 'like', '%' . $filterdata1 . '%')
                    //               ->orWhere('Unloading_port', 'like', '%' . $filterdata1 . '%');
                    //     })
                    //     ->limit(10)
                    //     ->get();
                    // dd('if BlockS');
                } else if ($filterby == 'country') {
                    $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                    ->select('*')
                    ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filterdata . '%')
                    ->where(function($query) use ($filterdata1, $searchDetails) {
                        $query->where('HS_CODE', 'like', '%' . $searchDetails . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata1 . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata1 . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                
                    
                    $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
                    ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filterdata . '%')
                    ->where(function($query) use ($filterdata1,$searchDetails) {
                        $query->where('HS_CODE', 'like', '%' . $searchDetails . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata1 . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata1 . '%');
                     })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                
                    $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
                    ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filterdata . '%')
                    ->where(function($query) use ($filterdata1,$searchDetails) {
                        $query->where('HS_CODE', 'like', '%' . $searchDetails . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata1 . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata1 . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
    
                    // Combine the queries using union
                    $combinedQuery = $query1
                        ->union($query2)
                        ->union($query3)
                        ;
                    $results = DB::table(DB::raw("({$combinedQuery->toSql()}) as sub"))
                    ->mergeBindings($combinedQuery) // You need to merge bindings to avoid SQL errors
                    ->limit(10)
                    ->get();
                    // $results = DB::table('usa_import')
                    //     ->where('Country', 'LIKE', '%' . $filterdata . '%')
                    //     ->where(function($query) use ($filterdata1,$searchDetails) {
                    //         $query->where('HS_Code', 'like', '%' . $searchDetails . '%')
                    //               ->orWhere('Country', 'like', '%' . $filterdata1 . '%')
                    //               ->orWhere('Unloading_port', 'like', '%' . $filterdata1 . '%');
                    //     })
                    //     ->limit(12)
                    //     ->get();
                    // dd('Country Block');
                } else if ($filterby == 'unloading_port'){
                    // dd($filterdata);
                    $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                    ->select('*')
                    ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata . '%')
                    ->where(function($query) use ($filterdata1) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata1 . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata1 . '%')
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                    });
                    
                    $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
                    ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata . '%')
                    ->where(function($query) use ($filterdata1) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata1 . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata1 . '%')
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                    });
                
                    $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
                    ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata . '%')
                    ->where(function($query) use ($filterdata1) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata1 . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata1 . '%')
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                    });
    
                    // Combine the queries using union
                    $combinedQuery = $query1
                        ->union($query2)
                        ->union($query3)
                        ;
                    $results = DB::table(DB::raw("({$combinedQuery->toSql()}) as sub"))
                    ->mergeBindings($combinedQuery) // You need to merge bindings to avoid SQL errors
                    ->limit(10)
                    ->get();
                    // $results = DB::table('usa_import')
                    //     ->where('Unloading_port', 'LIKE', '%' . $filterdata . '%')
                    //     ->where(function($query) use ($filterdata1) {
                    //         $query->where('HS_Code', 'like', '%' . $filterdata1 . '%')
                    //               ->orWhere('Country', 'like', '%' . $filterdata1 . '%');
                    //     })
                    //     ->limit(12)
                    //     ->get();
                   
                } else {
                    # code...
                     $results = collect();
                }
            } else {
                # code...
            
                if ($filterby == 'hs_code') {
                    $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                    ->select('*')
                    ->where('HS_CODE', 'like', $filterdata . '%')
                    ->Where('PRODUCT_DESCRIPTION', 'like', '%' . $searchDetails1 . '%')
                    ->where(function($query) use ($filterdata1,$searchDetails1) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata1 . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata1 . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata1 . '%')
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                    });
                    
                    $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
                    ->where('HS_CODE', 'like', $filterdata . '%')
                    ->Where('PRODUCT_DESCRIPTION', 'like', '%' . $searchDetails1 . '%')
                    ->where(function($query) use ($filterdata1,$searchDetails1) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata1 . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata1 . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata1 . '%')
                              ->whereNotNull('HS_CODE')
                              ->whereNotNull('US_IMPORTER_NAME');
                    });
                
                    $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
                    ->where('HS_CODE', 'like', $filterdata . '%')
                    ->Where('PRODUCT_DESCRIPTION', 'like', '%' . $searchDetails1 . '%')
                    ->where(function($query) use ($filterdata1,$searchDetails1) {
                        $query->where('HS_Code', 'like', '%' . $filterdata1 . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata1 . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata1 . '%')
                              ->whereNotNull('HS_CODE')
                              ->whereNotNull('US_IMPORTER_NAME');
                    });
    
                    // Combine the queries using union
                    $combinedQuery = $query1
                        ->union($query2)
                        ->union($query3)
                        ;
                    $results = DB::table(DB::raw("({$combinedQuery->toSql()}) as sub"))
                    ->mergeBindings($combinedQuery) // You need to merge bindings to avoid SQL errors
                    ->limit(10)
                    ->get();
                    // $results = DB::table('usa_import')
                    //     ->where('HS_Code', 'like', $filterdata . '%')
                    //     ->Where('Product_Description', 'like', '%' . $searchDetails1 . '%')
                    //     ->where(function($query) use ($filterdata1,$searchDetails1) {
                    //         $query->where('HS_Code', 'like', '%' . $filterdata1 . '%')
                    //               ->orWhere('Country', 'like', '%' . $filterdata1 . '%')
                    //               ->orWhere('Unloading_port', 'like', '%' . $filterdata1 . '%');
                    //     })
                    //     ->limit(12)
                    //     ->get();
                    // dd('if BlockS');
                } else if ($filterby == 'country') {
                    $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                    ->select('*')
                    ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filterdata . '%')
                    ->where('PRODUCT_DESCRIPTION', 'like', '%' . $searchDetails1 . '%')
                    ->where(function($query) use ($filterdata1,$searchDetails,$searchDetails1) {
                        $query->where('HS_Code', 'like', '%' . $searchDetails . '%')                          
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata1 . '%')
                              ->orWhere('Unloading_port', 'like', '%' . $filterdata1 . '%')
                              ->whereNotNull('HS_CODE')
                              ->whereNotNull('US_IMPORTER_NAME');
                            //   ->orWhere('PRODUCT_DESCRIPTION', 'like', '%' . $searchDetails1 . '%');
                    });
                    $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
                    ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filterdata . '%')
                    ->where('PRODUCT_DESCRIPTION', 'like', '%' . $searchDetails1 . '%')
                    ->where(function($query) use ($filterdata1,$searchDetails,$searchDetails1) {
                        $query->where('HS_Code', 'like', '%' . $searchDetails . '%')                          
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata1 . '%')
                              ->orWhere('Unloading_port', 'like', '%' . $filterdata1 . '%')
                              ->whereNotNull('HS_CODE')
                              ->whereNotNull('US_IMPORTER_NAME');
                            //   ->orWhere('PRODUCT_DESCRIPTION', 'like', '%' . $searchDetails1 . '%');
                    });
                    $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
                    ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filterdata . '%')
                    ->where('PRODUCT_DESCRIPTION', 'like', '%' . $searchDetails1 . '%')
                    ->where(function($query) use ($filterdata1,$searchDetails,$searchDetails1) {
                        $query->where('HS_Code', 'like', '%' . $searchDetails . '%')                          
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata1 . '%')
                              ->orWhere('Unloading_port', 'like', '%' . $filterdata1 . '%')
                              ->whereNotNull('HS_CODE')
                              ->whereNotNull('US_IMPORTER_NAME');
                            //   ->orWhere('PRODUCT_DESCRIPTION', 'like', '%' . $searchDetails1 . '%');
                    });
    
                    // Combine the queries using union
                    $combinedQuery = $query1
                    ->union($query2)
                    ->union($query3)
                    ;
                    $results = DB::table(DB::raw("({$combinedQuery->toSql()}) as sub"))
                    ->mergeBindings($combinedQuery) // You need to merge bindings to avoid SQL errors
                    ->limit(10)
                    ->get();
                    // $results = DB::table('usa_import')
                    //     ->where('Country', 'LIKE', '%' . $filterdata . '%')
                    //     ->where('PRODUCT_DESCRIPTION', 'like', '%' . $searchDetails1 . '%')
                    //     ->where(function($query) use ($filterdata1,$searchDetails,$searchDetails1) {
                    //         $query->where('HS_Code', 'like', '%' . $searchDetails . '%')                          
                    //               ->orWhere('Country', 'like', '%' . $filterdata1 . '%')
                    //               ->orWhere('Unloading_port', 'like', '%' . $filterdata1 . '%');
                    //             //   ->orWhere('PRODUCT_DESCRIPTION', 'like', '%' . $searchDetails1 . '%');
                    //     })
                    //     ->limit(12)
                    //     ->get();
                    // dd('Country Block');
                } else if ($filterby == 'unloading_port'){
                    // dd('Else Bloack in Unloading pOrt',$filterdata,$filterdata1,$searchDetails,$searchDetails1);
                    $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                    ->select('*')
                    ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata . '%')
                    ->where('PRODUCT_DESCRIPTION', 'like', '%' . $searchDetails1 . '%')
                    ->where(function($query) use ($filterdata1,$searchDetails,$searchDetails1) {
                        $query->where('HS_CODE', 'like', '%' . $searchDetails . '%')                          
                            ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata1 . '%')
                            ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata1 . '%')
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_IMPORTER_NAME');
                            //   ->orWhere('PRODUCT_DESCRIPTION', 'like', '%' . $searchDetails1 . '%');
                    });
                    $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
                    ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata . '%')
                    ->where('PRODUCT_DESCRIPTION', 'like', '%' . $searchDetails1 . '%')
                    ->where(function($query) use ($filterdata1,$searchDetails,$searchDetails1) {
                        $query->where('HS_CODE', 'like', '%' . $searchDetails . '%')                          
                            ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata1 . '%')
                            ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata1 . '%')
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_IMPORTER_NAME');
                            //   ->orWhere('PRODUCT_DESCRIPTION', 'like', '%' . $searchDetails1 . '%');
                    });
                    $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
                    ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata . '%')
                    ->where('PRODUCT_DESCRIPTION', 'like', '%' . $searchDetails1 . '%')
                    ->where(function($query) use ($filterdata1,$searchDetails,$searchDetails1) {
                        $query->where('HS_CODE', 'like', '%' . $searchDetails . '%')                          
                            ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata1 . '%')
                            ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata1 . '%')
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_IMPORTER_NAME');
                            //   ->orWhere('PRODUCT_DESCRIPTION', 'like', '%' . $searchDetails1 . '%');
                    });
    
                    // Combine the queries using union
                    $combinedQuery = $query1
                    ->union($query2)
                    ->union($query3)
                    ;
                    $results = DB::table(DB::raw("({$combinedQuery->toSql()}) as sub"))
                    ->mergeBindings($combinedQuery) // You need to merge bindings to avoid SQL errors
                    ->limit(10)
                    ->get();     
                    // $results = DB::table('usa_import')
                    //     ->where('Country', 'LIKE', '%' . $filterdata . '%')
                    //     ->Where('Product_Description', 'like', '%' . $searchDetails1 . '%')
                    //     ->where(function($query) use ($filterdata1,$searchDetails1) {
                    //         $query->where('HS_Code', 'like', '%' . $filterdata1 . '%')
                    //               ->orWhere('Country', 'like', '%' . $filterdata1 . '%')
                    //               ->orWhere('Unloading_port', 'like', '%' . $filterdata1 . '%');
                    //     })
                    //     ->limit(12)
                    //     ->get();
                   
                } else {
                    # code...
                     $results = collect();
                }
            }
        } else {
            # code...
            if (is_numeric($searchDetails1)) {
   
                # code...
                if ($filterby == 'hs_code') {
                    $results = DB::table('EXP_AMERICA_BL_SEA')
                    ->select('*')
                    ->where('HS_CODE', 'like', $filterdata . '%')
                    ->where(function($query) use ($filterdata1) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata1 . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata1 . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata1 . '%');
                    }) // Close the nested where clause here
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_EXPORTER_NAME')
                    ->limit(10)
                    ->get();
                
                dd('if BlockS', $results);
                    

                    dd('if BlockS',$results);
                                        // $results = DB::table('usa_import')
                    //     ->where('HS_Code', 'like', $filterdata . '%')
                    //     ->where(function($query) use ($filterdata1) {
                    //         $query->where('HS_Code', 'like', '%' . $filterdata1 . '%')
                    //               ->orWhere('Country', 'like', '%' . $filterdata1 . '%')
                    //               ->orWhere('Unloading_port', 'like', '%' . $filterdata1 . '%');
                    //     })
                    //     ->limit(10)
                    //     ->get();
                } else if ($filterby == 'country') {
                    $results = DB::table('EXP_AMERICA_BL_SEA')
                        ->select('*')
                        ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filterdata . '%')
                        ->where(function($query) use ($filterdata1, $searchDetails) {
                            $query->where('HS_CODE', 'like', '%' . $searchDetails . '%')
                                ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata1 . '%')
                                ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata1 . '%');
                        }) // Close the nested where clause
                        ->whereNotNull('HS_CODE')
                        ->whereNotNull('US_EXPORTER_NAME')
                        ->limit(10)
                        ->get();
                    
                    // $results = DB::table('usa_import')
                    //     ->where('Country', 'LIKE', '%' . $filterdata . '%')
                    //     ->where(function($query) use ($filterdata1,$searchDetails) {
                    //         $query->where('HS_Code', 'like', '%' . $searchDetails . '%')
                    //               ->orWhere('Country', 'like', '%' . $filterdata1 . '%')
                    //               ->orWhere('Unloading_port', 'like', '%' . $filterdata1 . '%');
                    //     })
                    //     ->limit(12)
                    //     ->get();
                    dd('Country Block',$results);
                } else if ($filterby == 'unloading_port'){
                    // dd($filterdata);
                    $results = DB::table('EXP_AMERICA_BL_SEA')
                    ->select('*')
                    ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata . '%')
                    ->where(function($query) use ($filterdata1) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata1 . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata1 . '%')
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_EXPORTER_NAME')
                    ->limit(10)
                    ->get();
                    });
                    
                    // $results = DB::table('usa_import')
                    //     ->where('Unloading_port', 'LIKE', '%' . $filterdata . '%')
                    //     ->where(function($query) use ($filterdata1) {
                    //         $query->where('HS_Code', 'like', '%' . $filterdata1 . '%')
                    //               ->orWhere('Country', 'like', '%' . $filterdata1 . '%');
                    //     })
                    //     ->limit(12)
                    //     ->get();
                   
                } else {
                    # code...
                     $results = collect();
                }
            } else {
                # code...                
                if ($filterby == 'hs_code') {
                    $results = DB::table('EXP_AMERICA_BL_SEA')
                    ->select('*')
                    ->where('HS_CODE', 'like', $filterdata . '%')
                    ->Where('PRODUCT_DESCRIPTION', 'like', '%' . $searchDetails1 . '%')
                    ->where(function($query) use ($filterdata1,$searchDetails1) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata1 . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata1 . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata1 . '%')
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_EXPORTER_NAME')
                    ->limit(10)
                    ->get();
                    });
                    
                    // $results = DB::table('usa_import')
                    //     ->where('HS_Code', 'like', $filterdata . '%')
                    //     ->Where('Product_Description', 'like', '%' . $searchDetails1 . '%')
                    //     ->where(function($query) use ($filterdata1,$searchDetails1) {
                    //         $query->where('HS_Code', 'like', '%' . $filterdata1 . '%')
                    //               ->orWhere('Country', 'like', '%' . $filterdata1 . '%')
                    //               ->orWhere('Unloading_port', 'like', '%' . $filterdata1 . '%');
                    //     })
                    //     ->limit(12)
                    //     ->get();
                    // dd('if BlockS');
                } else if ($filterby == 'country') {
                    $results = DB::table('EXP_AMERICA_BL_SEA')
                    ->select('*')
                    ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filterdata . '%')
                    ->where('PRODUCT_DESCRIPTION', 'like', '%' . $searchDetails1 . '%')
                    ->where(function($query) use ($filterdata1,$searchDetails,$searchDetails1) {
                        $query->where('HS_Code', 'like', '%' . $searchDetails . '%')                          
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata1 . '%')
                              ->orWhere('Unloading_port', 'like', '%' . $filterdata1 . '%')
                              ->whereNotNull('HS_CODE')
                              ->whereNotNull('US_EXPORTER_NAME')
                              ->limit(10)
                              ->get();
                            //   ->orWhere('PRODUCT_DESCRIPTION', 'like', '%' . $searchDetails1 . '%');
                    });
       

                    // $results = DB::table('usa_import')
                    //     ->where('Country', 'LIKE', '%' . $filterdata . '%')
                    //     ->where('PRODUCT_DESCRIPTION', 'like', '%' . $searchDetails1 . '%')
                    //     ->where(function($query) use ($filterdata1,$searchDetails,$searchDetails1) {
                    //         $query->where('HS_Code', 'like', '%' . $searchDetails . '%')                          
                    //               ->orWhere('Country', 'like', '%' . $filterdata1 . '%')
                    //               ->orWhere('Unloading_port', 'like', '%' . $filterdata1 . '%');
                    //             //   ->orWhere('PRODUCT_DESCRIPTION', 'like', '%' . $searchDetails1 . '%');
                    //     })
                    //     ->limit(12)
                    //     ->get();
                    // dd('Country Block');
                } else if ($filterby == 'unloading_port'){
                    $results = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                    ->select('*')
                    ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filterdata . '%')
                    ->where('PRODUCT_DESCRIPTION', 'like', '%' . $searchDetails1 . '%')
                    ->where(function($query) use ($filterdata1,$searchDetails,$searchDetails1) {
                        $query->where('HS_Code', 'like', '%' . $searchDetails . '%')                          
                            ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata1 . '%')
                            ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata1 . '%')
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_EXPORTER_NAME')
                            ->limit(10)
                            ->get();
                            //   ->orWhere('PRODUCT_DESCRIPTION', 'like', '%' . $searchDetails1 . '%');
                    });
                 
                    // $results = DB::table('usa_import')
                    //     ->where('Country', 'LIKE', '%' . $filterdata . '%')
                    //     ->Where('Product_Description', 'like', '%' . $searchDetails1 . '%')
                    //     ->where(function($query) use ($filterdata1,$searchDetails1) {
                    //         $query->where('HS_Code', 'like', '%' . $filterdata1 . '%')
                    //               ->orWhere('Country', 'like', '%' . $filterdata1 . '%')
                    //               ->orWhere('Unloading_port', 'like', '%' . $filterdata1 . '%');
                    //     })
                    //     ->limit(12)
                    //     ->get();
                   
                } else {
                    # code...
                     $results = collect();
                }
            }
            dd('Export');
        }
   
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

    // Determine which variable contains HS_Code and which contains Country
    if (is_numeric($searchDetails)) {
        $hs_code = $searchDetails;
        $filter_search = $filter1;

    } else {
        $hs_code = $filter1;
        $filter_search = $searchDetails;
        // dd('Else Block');
    //    dd('This else Block', $hs_code,$filter_search);
    }
    if (is_numeric($searchDetails)) {
        # code...
        // dd('Numeric Bloc');
        if ($filterby == 'hs_code') {
            $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
            ->select('*')
            ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata . '%')
            ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filter_search . '%')
            ->where('HS_CODE', 'LIKE', '%' . $hs_code . '%')
            ->whereNotNull('HS_CODE')
            ->whereNotNull('US_IMPORTER_NAME');
            $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
            ->select('*')
            ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata . '%')
            ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filter_search . '%')
            ->where('HS_CODE', 'LIKE', '%' . $hs_code . '%')
            ->whereNotNull('HS_CODE')
            ->whereNotNull('US_IMPORTER_NAME');
            $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
            ->select('*')
            ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata . '%')
            ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filter_search . '%')
            ->where('HS_CODE', 'LIKE', '%' . $hs_code . '%');

            $combinedQuery = $query1
            ->union($query2)
            ->union($query3)
            ;
            $results = DB::table(DB::raw("({$combinedQuery->toSql()}) as sub"))
            ->mergeBindings($combinedQuery) // You need to merge bindings to avoid SQL errors
            ->limit(10)
            ->get();   
            // $results = DB::table('usa_import')
            //     ->select('*')
            //     ->where('Unloading_Port', 'LIKE', '%' . $filterdata . '%')
            //     ->where('Country', 'LIKE', '%' . $filter_search . '%')
            //     ->where('HS_Code', 'LIKE', '%' . $hs_code . '%')
            //     ->limit(12)
            //     ->get();
            // dd('if BlockS');
        } else if ($filterby == 'country') {
            // dd('IN Numeric Country','filter_search',$filter_search,'filterdata',$filterdata,'hs_code',$hs_code);
            $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
            ->select('*')
            ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filterdata . '%')
            ->where('HS_CODE', 'LIKE', '%' . $filter_search . '%')
            ->where('UNLOADING_PORT', 'LIKE', '%' . $searchDetails1 . '%')
            ->whereNotNull('HS_CODE')
            ->whereNotNull('US_IMPORTER_NAME');
            $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
            ->select('*')
            ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filterdata . '%')
            ->where('HS_CODE', 'LIKE', '%' . $filter_search . '%')
            ->where('UNLOADING_PORT', 'LIKE', '%' . $searchDetails1 . '%')
            ->whereNotNull('HS_CODE')
            ->whereNotNull('US_IMPORTER_NAME');
            $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
            ->select('*')
            ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filterdata . '%')
            ->where('HS_CODE', 'LIKE', '%' . $filter_search . '%')
            ->where('UNLOADING_PORT', 'LIKE', '%' . $searchDetails1 . '%')
            ->whereNotNull('HS_CODE')
            ->whereNotNull('US_IMPORTER_NAME');

            $combinedQuery = $query1
            ->union($query2)
            ->union($query3)
            ;
            $results = DB::table(DB::raw("({$combinedQuery->toSql()}) as sub"))
            ->mergeBindings($combinedQuery) // You need to merge bindings to avoid SQL errors
            ->limit(10)
            ->get();   
            // $results = DB::table('usa_import')
            //     ->select('*')
            //     ->where('Country', 'LIKE', '%' . $filterdata . '%')
            //     ->where('HS_Code', 'LIKE', '%' . $hs_code . '%')
            //     ->where('Unloading_Port', 'LIKE', '%' . $filter_search . '%')
            //     ->limit(12)
            //     ->get();
        } else if ($filterby == 'unloading_port') {
            $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
            ->select('*')
            ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata . '%')
            ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filter_search . '%')
            ->where('HS_CODE', 'LIKE', '%' . $hs_code . '%')
            ->whereNotNull('HS_CODE')
            ->whereNotNull('US_IMPORTER_NAME');
            $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
            ->select('*')
            ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata . '%')
            ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filter_search . '%')
            ->where('HS_CODE', 'LIKE', '%' . $hs_code . '%')
            ->whereNotNull('HS_CODE')
            ->whereNotNull('US_IMPORTER_NAME');
            $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
            ->select('*')
            ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata . '%')
            ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filter_search . '%')
            ->where('HS_CODE', 'LIKE', '%' . $hs_code . '%')
            ->whereNotNull('HS_CODE')
            ->whereNotNull('US_IMPORTER_NAME');

            $combinedQuery = $query1
            ->union($query2)
            ->union($query3)
            ;
            $results = DB::table(DB::raw("({$combinedQuery->toSql()}) as sub"))
            ->mergeBindings($combinedQuery) // You need to merge bindings to avoid SQL errors
            ->limit(10)
            ->get();   
            // $results = DB::table('usa_import')
            //     ->select('*')
            //     ->where('Unloading_Port', 'LIKE', '%' . $filterdata . '%')
            //     ->where('Country', 'LIKE', '%' . $filter_search . '%')
            //     ->where('HS_Code', 'LIKE', '%' . $hs_code . '%')
            //     ->limit(12)
            //     ->get();
           
        } else {
            # code...
             $results = collect();
        }
    } else {
        # code...
        // dd('THis Block');
        if ($filterby == 'hs_code') {
            dd('HS_CODE BLOCK');
            $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
            ->select('*')
            ->where('PRODUCT_DESCRIPTION', 'LIKE','%'.$searchDetails1 .'%')
            ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata . '%')
            ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filter_search . '%')
            ->where('HS_CODE', 'LIKE', '%' . $hs_code . '%')
            ->whereNotNull('HS_CODE')
            ->whereNotNull('US_IMPORTER_NAME');
            $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
            ->select('*')
            ->where('PRODUCT_DESCRIPTION', 'LIKE','%'.$searchDetails1 .'%')
            ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata . '%')
            ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filter_search . '%')
            ->where('HS_CODE', 'LIKE', '%' . $hs_code . '%')
            ->whereNotNull('HS_CODE')
            ->whereNotNull('US_IMPORTER_NAME');
            $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
            ->select('*')
            ->where('PRODUCT_DESCRIPTION', 'LIKE','%'.$searchDetails1 .'%')
            ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata . '%')
            ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filter_search . '%')
            ->where('HS_CODE', 'LIKE', '%' . $hs_code . '%')
            ->whereNotNull('HS_CODE')
            ->whereNotNull('US_IMPORTER_NAME');

            $combinedQuery = $query1
            ->union($query2)
            ->union($query3)
            ;
            $results = DB::table(DB::raw("({$combinedQuery->toSql()}) as sub"))
            ->mergeBindings($combinedQuery) // You need to merge bindings to avoid SQL errors
            ->limit(10)
            ->get();   
            // $results = DB::table('usa_import')
            //     ->select('*')
            //     ->where('Product_Description', 'LIKE','%'.$searchDetails1 .'%')
            //     ->where('Unloading_Port', 'LIKE', '%' . $filterdata . '%')
            //     ->where('Country', 'LIKE', '%' . $filter_search . '%')
            //     ->where('HS_Code', 'LIKE', '%' . $hs_code . '%')
            //     ->limit(12)
            //     ->get();
         
        } else if ($filterby == 'country') {
            // dd('CoUNTRY BLOCK');
             dd('searchDetails1',$searchDetails1,'$filterdata', $filterdata,'$filter_search',$filter_search,'$hs_code',$hs_code);
            $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
            ->select('*')
            ->where('PRODUCT_DESCRIPTION', 'LIKE','%'.$searchDetails1 .'%')
            ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata . '%')
            ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filter_search . '%')
            ->where('HS_CODE', 'LIKE', '%' . $hs_code . '%')
            ->whereNotNull('HS_CODE')
            ->whereNotNull('US_IMPORTER_NAME');
            $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
            ->select('*')
            ->where('PRODUCT_DESCRIPTION', 'LIKE','%'.$searchDetails1 .'%')
            ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata . '%')
            ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filter_search . '%')
            ->where('HS_CODE', 'LIKE', '%' . $hs_code . '%')
            ->whereNotNull('HS_CODE')
            ->whereNotNull('US_IMPORTER_NAME');
            $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
            ->select('*')
            ->where('PRODUCT_DESCRIPTION', 'LIKE','%'.$searchDetails1 .'%')
            ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata . '%')
            ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filter_search . '%')
            ->where('HS_CODE', 'LIKE', '%' . $hs_code . '%')
            ->whereNotNull('HS_CODE')
            ->whereNotNull('US_IMPORTER_NAME');

            $combinedQuery = $query1
            ->union($query2)
            ->union($query3)
            ;
            $results = DB::table(DB::raw("({$combinedQuery->toSql()}) as sub"))
            ->mergeBindings($combinedQuery) // You need to merge bindings to avoid SQL errors
            ->limit(10)
            ->get(); 
            // $results = DB::table('usa_import')
            //     ->select('*')
            //     ->where('Product_Description', 'LIKE','%'.$searchDetails1 .'%')
            //     ->where('Unloading_Port', 'LIKE', '%' . $filterdata . '%')
            //     ->where('Country', 'LIKE', '%' . $filter_search . '%')
            //     ->where('HS_Code', 'LIKE', '%' . $hs_code . '%')
            //     ->limit(12)
            //     ->get();
            // dd('Country Block');
        } else if ($filterby == 'unloading_port') {
            // dd($searchDetails, $filterdata,$searchDetails1,$hs_code);
            $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
            ->select('*')
            ->where('PRODUCT_DESCRIPTION', 'LIKE','%'.$searchDetails .'%')
            ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata . '%')
            ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $searchDetails1 . '%')
            ->where('HS_CODE', 'LIKE', '%' . $hs_code . '%')
            ->whereNotNull('HS_CODE')
            ->whereNotNull('US_IMPORTER_NAME');
            $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
            ->select('*')
            ->where('PRODUCT_DESCRIPTION', 'LIKE','%'.$searchDetails .'%')
            ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata . '%')
            ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $searchDetails1 . '%')
            ->where('HS_CODE', 'LIKE', '%' . $hs_code . '%')
            ->whereNotNull('HS_CODE')
            ->whereNotNull('US_IMPORTER_NAME');
            $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
            ->select('*')
            ->where('PRODUCT_DESCRIPTION', 'LIKE','%'.$searchDetails .'%')
            ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata . '%')
            ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $searchDetails1 . '%')
            ->where('HS_CODE', 'LIKE', '%' . $hs_code . '%')
            ->whereNotNull('HS_CODE')
            ->whereNotNull('US_IMPORTER_NAME');

            $combinedQuery = $query1
            ->union($query2)
            ->union($query3)
            ;
            $results = DB::table(DB::raw("({$combinedQuery->toSql()}) as sub"))
            ->mergeBindings($combinedQuery) // You need to merge bindings to avoid SQL errors
            ->limit(10)
            ->get(); 
            // $results = DB::table('usa_import')
            //     ->select('*')
            //     ->where('Product_Description', 'LIKE','%'.$searchDetails1 .'%')
            //     ->where('Unloading_Port', 'LIKE', '%' . $filterdata . '%')
            //     ->where('Country', 'LIKE', '%' . $filter_search . '%')
            //     ->where('HS_Code', 'LIKE', '%' . $hs_code . '%')
            //     ->limit(12)
            //     ->get();
        //    dd($results);
        } else {
            # code...
             $results = collect();
        }
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
        'searchDetails1' => $searchDetails1,
        'filterdata' => $filterdata,
        'filterdata1' => $filter1
    ]);
}

}
