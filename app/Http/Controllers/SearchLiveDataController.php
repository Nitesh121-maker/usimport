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
            // dd($base_hs_code);
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
                $result = DB::table('EXP_AMERICA_BL_SEA')
                ->select('*')
                ->where(DB::raw('`HS_CODE`'), 'like', $hs_code . '%')
                ->where(DB::raw('PRODUCT_DESCRIPTION'), 'LIKE', '%' . $description . '%')
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
                        // dd($filterdata);
                        $results = DB::table('EXP_AMERICA_BL_SEA')
                            ->select('*')
                            ->where('HS_CODE','like',$filterdata .'%')
                            ->orwhere('HS_CODE', '=',  $hs_codedetails)
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_EXPORTER_NAME')
                            ->limit(10)
                            ->get();
                            // dd($results->toSql(), $results->getBindings());
                        // dd('Numeric HS_CODE',$results);
                        break;
                    case 'country':         
                        // dd('IN Export country numeric block ','HS_CODE',$hs_codedetails,'ORIGIN_COUNTRY',$filterdata);
                        $results = DB::table('EXP_AMERICA_BL_SEA')
                            ->select('*')
                            ->where('HS_CODE','like',$hs_codedetails .'%')
                            ->where('DESTINATION_COUNTRY', 'LIKE', '%' . $filterdata . '%')
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_EXPORTER_NAME')
                            ->limit(10)
                            ->get();
                            // dd('Numeric Country',$results);
                        break;
                    case 'unloading_port':
                            // dd('HS_CODE', $hs_codedetails,'UNLOADING_PORT', $filterdata);
                            $results = DB::table('EXP_AMERICA_BL_SEA')
                            ->select('*')
                            ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata . '%')
                            ->where('HS_CODE','like', '%' .$hs_codedetails .'%')
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_EXPORTER_NAME')
                            ->limit(10)
                            ->get();
                            // dd('Numeric unloading_port',$results);
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
                        // dd($descdetails,$filterdata);
                        $results = DB::table('EXP_AMERICA_BL_SEA')
                            ->select('*')
                            ->where('HS_CODE', 'like', $filterdata . '%')
                            ->where('PRODUCT_DESCRIPTION','like','%'.$descdetails .'%')
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_EXPORTER_NAME')
                            ->limit(10)
                            ->get();
                            // dd('Non numeric HS_CODE',$results);
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
                    
                        // dd('Non Numeric Country',$results);
                        break;
                    case 'unloading_port':
                        // dd('PRODUCT_DESCRIPTION', $descdetails,'UNLOADING_PORT', $filterdata);
                        $results = DB::table('EXP_AMERICA_BL_SEA')
                            ->select('*')
                            ->where('UNLOADING_PORT', 'like', '%' . $filterdata . '%')
                            ->where('PRODUCT_DESCRIPTION', 'like', '%' . $descdetails . '%') 
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_EXPORTER_NAME')
                            ->limit(10)
                            ->get();
                            // dd('Non Numeric Unloading Port',$results);
                        break;
                    default:
                        $results = collect();
                }
            }
           
        }
        
        // dd($filterdata);
        $searfilterdata = $filterdata;
        $searchfilterby = $filterby;

        // dd($filterdata,$base_search);
        return view('frontend.livedata.searchfilter', [
            'result' => $results,
            'desc'   => $filterdata,
            'type'   => $type,
            'role'   => $role,
            'hscode' => $filterdata,
            'filterdata' => $filterdata,
            'base_search'=> $base_search,
            'searfilterdata' => $filterdata,
            'searchfilterby' => $filterby,
         ]);
    }

    // Search Filter One
    public function searchFilter1($type, $role,$base_search,$searchDetails, $filterdata, $filterby,$filterdata1) {
        // Handle different filters based on the filterby parameter
        // dd($type, $role,'Search Details1',$base_search,'Search Deatails',$searchDetails,'Filter data1', $filterdata1,'filterby', $filterby,'filterdata',$filterdata);
       
        if ($role=='import') {

            # code...
            if (is_numeric($base_search)) {
                // dd('Numeric bloc');
                # code...
                if ($filterby == 'hs_code') {
                    // dd('Search Deatails',$searchDetails,'Filter data1', $filterdata1,'filterby', $filterby,'filterdata',$filterdata);
       
                    $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                    ->select('*')
                    ->where('HS_CODE', 'like', $filterdata1 . '%')
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata . '%')
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                    });
                    
                    $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
                    ->where('HS_CODE', 'like', $filterdata1 . '%')
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata . '%')
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                    });
                
                    $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
                    ->where('HS_CODE', 'like', $filterdata1 . '%')
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata . '%')
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

                    // dd('if BlockS',$results);
                } else if ($filterby == 'country') {
                    // dd('Search Deatails',$searchDetails,'Filter data1', $filterdata1,'filterby', $filterby,'filterdata',$filterdata);
                    $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                    ->select('*')
                    ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filterdata1 . '%')
                    ->where('HS_CODE', 'LIKE', '%' . $base_search . '%')
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                
                    
                    $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
                    ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filterdata1 . '%')
                    ->where('HS_CODE', 'LIKE', '%' . $base_search . '%')
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                
                    $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
                    ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filterdata1 . '%')
                    ->where('HS_CODE', 'LIKE', '%' . $base_search . '%')
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
    
                    // Combine the queries using union
                    $combinedQuery = $query1
                        ->union($query2)
                        ->union($query3)
                        ;
                    $results = DB::table(DB::raw("({$combinedQuery->toSql()}) as sub"))
                    ->mergeBindings($combinedQuery) 
                    ->limit(10)
                    ->get();
                    // dd('Country Block',$results);
                } else if ($filterby == 'unloading_port'){
                    // dd('Search Deatails',$searchDetails,'Filter data1', $filterdata1,'filterby', $filterby,'filterdata',$filterdata);
                    $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                    ->select('*')
                    ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata1 . '%')
                    ->where('HS_CODE', 'LIKE', '%' . $base_search .'%')
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                    
                    $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
                    ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata1 . '%')
                    ->where('HS_CODE', 'LIKE', '%' . $base_search .'%')
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                
                    $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
                    ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata1 . '%')
                    ->where('HS_CODE', 'LIKE', '%' . $base_search .'%')
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%');
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
                    // dd($results);
                   
                } else {
                    # code...
                     $results = collect();
                }
            } else {
                # code...
            
                if ($filterby == 'hs_code') {
                    $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                    ->select('*')
                    ->where('HS_CODE', 'like', $filterdata1 . '%')
                    ->Where('PRODUCT_DESCRIPTION', 'like', '%' . $base_search . '%')
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                    
                    $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
                    ->where('HS_CODE', 'like', $filterdata1 . '%')
                    ->Where('PRODUCT_DESCRIPTION', 'like', '%' . $base_search . '%')
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                
                    $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
                    ->where('HS_CODE', 'like', $filterdata1 . '%')
                    ->Where('PRODUCT_DESCRIPTION', 'like', '%' . $base_search . '%')
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata . '%');
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
                    // dd('if BlockS');
                } else if ($filterby == 'country') {
                    $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                    ->select('*')
                    ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filterdata1 . '%')
                    ->where('PRODUCT_DESCRIPTION', 'like', '%' . $base_search . '%')
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_Code', 'like', '%' . $filterdata . '%')                          
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('Unloading_port', 'like', '%' . $filterdata . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                    $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
                    ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filterdata1 . '%')
                    ->where('PRODUCT_DESCRIPTION', 'like', '%' . $base_search . '%')
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_Code', 'like', '%' . $filterdata . '%')                          
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('Unloading_port', 'like', '%' . $filterdata . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');

                    $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
                    ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filterdata1 . '%')
                    ->where('PRODUCT_DESCRIPTION', 'like', '%' . $base_search . '%')
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_Code', 'like', '%' . $filterdata . '%')                          
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('Unloading_port', 'like', '%' . $filterdata . '%');
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
                    // dd('Country Block');
                } else if ($filterby == 'unloading_port'){
                    // dd('Else Bloack in Unloading pOrt',$filterdata,$filterdata1,$searchDetails,$searchDetails1);
                    $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                    ->select('*')
                    ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata1 . '%')
                    ->where('PRODUCT_DESCRIPTION', 'like', '%' . $base_search . '%')
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')                          
                            ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                            ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                    $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
                    ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata1 . '%')
                    ->where('PRODUCT_DESCRIPTION', 'like', '%' . $base_search . '%')
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')                          
                            ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                            ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                    $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
                    ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata1 . '%')
                    ->where('PRODUCT_DESCRIPTION', 'like', '%' . $base_search . '%')
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')                          
                            ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                            ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata . '%');
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
                   
                } else {
                    # code...
                     $results = collect();
                }
            }
        } else {
            # code...
            if (is_numeric($base_search)) {
   
                # code...
                if ($filterby == 'hs_code') {
                    // dd('HS_CODE', $filterdata,'filterdata1',$filterdata1);
                    $results = DB::table('EXP_AMERICA_BL_SEA')
                    ->select('*')
                    ->where('HS_CODE', 'like', $filterdata1 . '%')
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata. '%')
                              ->orWhere('DESTINATION_COUNTRY', 'like', '%' . $filterdata. '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata. '%');
                    }) // Close the nested where clause here
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_EXPORTER_NAME')
                    ->limit(10)
                    ->get();
                // dd($results);
                } else if ($filterby == 'country') {
                    // dd('DESTINATION_COUNTRY',$filterdata1,'HS_CODE', $filterdata,);
                    $results = DB::table('EXP_AMERICA_BL_SEA')
                    ->select('*')
                    ->where('DESTINATION_COUNTRY', 'LIKE', '%' . $filterdata1 . '%')
                    ->where('HS_CODE', 'LIKE', '%' . $base_search . '%')
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like',  $filterdata . '%')
                              ->orWhere('DESTINATION_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like',  $filterdata . '%');
                    })
                    // ->whereNotNull('HS_CODE')
                    // ->whereNotNull('US_EXPORTER_NAME')
                    ->limit(10)
                    ->get();
              
                } else if ($filterby == 'unloading_port'){
                    // dd('UNLOADING_PORT',$filterdata1,'DESTINATION_COUNTRY',$filterdata,$base_search);
                    $results = DB::table('EXP_AMERICA_BL_SEA')
                    ->select('*')
                    ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata1 . '%')
                    ->where('HS_CODE','like','%'.$base_search.'%')
                    ->where(function($query) use ($filterdata) {
                        $query->where('DESTINATION_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('HS_CODE', 'like', $filterdata . '%')
                              ->orwhere('UNLOADING_PORT','like','%'. $filterdata. '%');
                    })
                    // ->whereNotNull('HS_CODE')
                    // ->whereNotNull('US_EXPORTER_NAME')
                    ->limit(10)
                    ->get();
                //    dd($results);
                } else {
                    # code...
                     $results = collect();
                }
            } else {
                # code...                
                if ($filterby == 'hs_code') {
                    // dd('$filterdata1',$filterdata1,'Base',$base_search,'filterdata',$filterdata);
                    $results = DB::table('EXP_AMERICA_BL_SEA')
                    ->select('*')
                    ->where('HS_CODE', 'like', $filterdata1 . '%')
                    ->where('PRODUCT_DESCRIPTION', 'like', '%' . $base_search . '%')
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('DESTINATION_COUNTRY', $filterdata )
                              ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata . '%');
                    })
                    // ->whereNotNull('HS_CODE')
                    // ->whereNotNull('US_EXPORTER_NAME')
                    ->limit(10)
                    ->get();
                    // dd('if BlockS',$results);
                } else if ($filterby == 'country') {
                    // dd('Filterdata',$filterdata,'filterdata1',$filterdata1,$searchDetails);
                    $results = DB::table('EXP_AMERICA_BL_SEA')
                    ->select('*')
                    ->where('DESTINATION_COUNTRY', 'LIKE', '%' . $filterdata1 . '%')
                    ->where('PRODUCT_DESCRIPTION', 'like', '%' . $base_search . '%')
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_EXPORTER_NAME')
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_Code', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('Unloading_port', 'like', '%' . $filterdata . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_EXPORTER_NAME')
                    ->limit(10)
                    ->get();
                
                    // dd('Query Results', $results);
                
                    // dd('Country Block');
                } else if ($filterby == 'unloading_port'){
                    $results = DB::table('EXP_AMERICA_BL_SEA')
                    ->select('*')
                    ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata1 . '%')
                    ->where('PRODUCT_DESCRIPTION', 'like', '%' . $base_search . '%')
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_Code', 'like', '%' . $filterdata . '%')                          
                            ->orWhere('DESTINATION_COUNTRY', 'like', '%' . $filterdata . '%')
                            ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata . '%');
                            //   ->orWhere('PRODUCT_DESCRIPTION', 'like', '%' . $searchDetails1 . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_EXPORTER_NAME')
                    ->limit(10)
                    ->get();
                   
                } else {
                    # code...
                     $results = collect();
                }
            }
            // dd($filterdata,$filterdata1);
        }
        return view('frontend.livedata.searchfilter-one', [
            'result' => $results,
            'desc'   => $filterdata,
            'type'   => $type,
            'role'   => $role,
            'hscode' => $filterdata,
            'searchDetails1' => $base_search,
            'filterdata' => $filterdata,
            'filterdata1' => $filterdata1
         ]);
    }

    // Search Filter two
    public function searchFilter2($type, $role,$searchDetails1, $searchDetails,$filter, $filterdata, $filterby, $filterdata1) {
        // Check and debug input parameters
        // dd('SearchDetails', $searchDetails, 'filterdata', $filterdata, 'filterby', $filterby, 'filterdata1', $filterdata1,'SearchDetails1',$searchDetails1);

        if ($role == 'import') {
            # code...
            if (is_numeric($searchDetails1)) {
                # code...
                // dd('Numeric Bloc');
                if ($filterby == 'hs_code') {
                    // dd('IN Numeric hs_code','SearchDetails', $filter, 'filterdata', $filterdata, 'filterby', $filterby, 'filterdata1', $filterdata1);

                    $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                    ->select('*')
                    ->where('HS_CODE', 'LIKE', '%' . $filterdata1 . '%')
                    ->where(function($query) use ($filter) {
                        $query->where('HS_CODE', 'like', '%' . $filter . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filter . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filter . '%');
                    })
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filterdata . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                    $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
                    ->select('*')
                    ->where('HS_CODE', 'LIKE', '%' . $filterdata1 . '%')
                    ->where(function($query) use ($filter) {
                        $query->where('HS_CODE', 'like', '%' . $filter . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filter . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filter . '%');
                    })
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filterdata . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                    $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
                    ->select('*')
                    ->where('HS_CODE', 'LIKE', '%' . $filterdata1 . '%')
                    ->where(function($query) use ($filter) {
                        $query->where('HS_CODE', 'like', '%' . $filter . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filter . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filter . '%');
                    })
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filterdata . '%');
                    })
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
                    // dd('HS_CODE',$results);
                    // dd('if BlockS');
                } else if ($filterby == 'country') {
                    // dd('IN Numeric Country','SearchDetails', $searchDetails, 'filterdata', $filterdata, 'filterby', $filterby, 'filterdata1', $filterdata1);
                    $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                    ->select('*')
                    ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filterdata1 . '%')
                    ->where(function($query) use ($filter) {
                        $query->where('HS_CODE', 'like', '%' . $filter . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filter . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filter . '%');
                    })
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filterdata . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                    $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
                    ->select('*')
                    ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filterdata1 . '%')
                    ->where(function($query) use ($filter) {
                        $query->where('HS_CODE', 'like', '%' . $filter . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filter . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filter . '%');
                    })
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filterdata . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                    $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
                    ->select('*')
                    ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filterdata1 . '%')
                    ->where(function($query) use ($filter) {
                        $query->where('HS_CODE', 'like', '%' . $filter . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filter . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filter . '%');
                    })
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filterdata . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
        
                    $combinedQuery = $query1
                    ->union($query2)
                    ->union($query3)
                    ;
                    $results = DB::table(DB::raw("({$combinedQuery->toSql()}) as sub"))
                    ->mergeBindings($combinedQuery) 
                    ->limit(10)
                    ->get();   
                    // dd('Country',$results);
                } else if ($filterby == 'unloading_port') {
                    // dd('IN Numeric UNLOADING_PORT','Filter',$filter,'SearchDetails', $searchDetails, 'filterdata', $filterdata, 'filterby', $filterby, 'filterdata1', $filterdata1);

                    $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                    ->select('*')
                    ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata1 . '%')
                    ->where(function($query) use ($filter) {
                        $query->where('HS_CODE', 'like', '%' . $filter . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filter . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filter . '%');
                    })
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filterdata . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                    $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
                    ->select('*')
                    ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata1 . '%')
                    ->where(function($query) use ($filter) {
                        $query->where('HS_CODE', 'like', '%' . $filter . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filter . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filter . '%');
                    })
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filterdata . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                    $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
                    ->select('*')
                    ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata1 . '%')
                    ->where(function($query) use ($filter) {
                        $query->where('HS_CODE', 'like', '%' . $filter . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filter . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filter . '%');
                    })
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filterdata . '%');
                    })
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
                    // dd('unloading',$results);               
                } else {
                    # code...
                    $results = collect();
                }
            } else {
                # code...
                // dd('THis Block');
                if ($filterby == 'hs_code') {
                    $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                    ->select('*')
                    ->where('PRODUCT_DESCRIPTION', 'LIKE','%'.$searchDetails1 .'%')
                    ->where('HS_CODE', 'LIKE', '%' . $filterdata1 . '%')
                    ->where(function($query) use ($filter) {
                        $query->where('HS_CODE', 'like', '%' . $filter . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filter . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filter . '%');
                    })
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filterdata . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                    $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
                    ->select('*')
                    ->where('PRODUCT_DESCRIPTION', 'LIKE','%'.$searchDetails1 .'%')
                    ->where('HS_CODE', 'LIKE', '%' . $filterdata1 . '%')
                    ->where(function($query) use ($filter) {
                        $query->where('HS_CODE', 'like', '%' . $filter . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filter . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filter . '%');
                    })
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filterdata . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                    $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
                    ->select('*')
                    ->where('PRODUCT_DESCRIPTION', 'LIKE','%'.$searchDetails1 .'%')
                    ->where('HS_CODE', 'LIKE', '%' . $filterdata1 . '%')
                    ->where(function($query) use ($filter) {
                        $query->where('HS_CODE', 'like', '%' . $filter . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filter . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filter . '%');
                    })
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filterdata . '%');
                    })
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
                
                } else if ($filterby == 'country') {
                    // dd('CoUNTRY BLOCK');
                    //  dd('searchDetails1',$searchDetails1,'$filterdata', $filterdata,'$filter_search',$filter_search,'$hs_code',$hs_code);
                    $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                    ->select('*')
                    ->where('PRODUCT_DESCRIPTION', 'LIKE','%'.$searchDetails1 .'%')
                    ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filterdata1 . '%')
                    ->where(function($query) use ($filter) {
                        $query->where('HS_CODE', 'like', '%' . $filter . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filter . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filter . '%');
                    })
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filterdata . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                    $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
                    ->select('*')
                    ->where('PRODUCT_DESCRIPTION', 'LIKE','%'.$searchDetails1 .'%')
                    ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filterdata1 . '%')
                    ->where(function($query) use ($filter) {
                        $query->where('HS_CODE', 'like', '%' . $filter . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filter . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filter . '%');
                    })
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filterdata . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                    $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
                    ->select('*')
                    ->where('PRODUCT_DESCRIPTION', 'LIKE','%'.$searchDetails1 .'%')
                    ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filterdata1 . '%')
                    ->where(function($query) use ($filter) {
                        $query->where('HS_CODE', 'like', '%' . $filter . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filter . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filter . '%');
                    })
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filterdata . '%');
                    })
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
                    // dd('Country Block');
                } else if ($filterby == 'unloading_port') {
                    // dd($searchDetails, $filterdata,$searchDetails1,$hs_code);
                    $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                    ->select('*')
                    ->where('PRODUCT_DESCRIPTION', 'LIKE','%'.$searchDetails .'%')
                    ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata1 . '%')
                    ->where(function($query) use ($filter) {
                        $query->where('HS_CODE', 'like', '%' . $filter . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filter . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filter . '%');
                    })
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filterdata . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                    $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
                    ->select('*')
                    ->where('PRODUCT_DESCRIPTION', 'LIKE','%'.$searchDetails .'%')
                    ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata . '%')
                    ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata1 . '%')
                    ->where(function($query) use ($filter) {
                        $query->where('HS_CODE', 'like', '%' . $filter . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filter . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filter . '%');
                    })
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filterdata . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                    $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
                    ->select('*')
                    ->where('PRODUCT_DESCRIPTION', 'LIKE','%'.$searchDetails .'%')
                    ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata . '%')
                    ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata1 . '%')
                    ->where(function($query) use ($filter) {
                        $query->where('HS_CODE', 'like', '%' . $filter . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filter . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filter . '%');
                    })
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filterdata . '%');
                    })
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
                //    dd($results);
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
                    # code...                  
                    // dd('PRODUCT_DESCRIPTION', $searchDetails,'UNLOADING_PORT', $sfilterdata,'DESTINATION_COUNTRY', $filter_search,'HS_CODE', $hs_code );
                  
                    $results = DB::table('EXP_AMERICA_BL_SEA')
                    ->select('*')
                    // ->where('UNLOADING_PORT', 'LIKE', '%' . $searchDetails . '%')
                    // ->where('DESTINATION_COUNTRY', 'LIKE', '%' . $filterdata . '%')
                    ->where('HS_CODE', 'LIKE', '%' . $filterdata1 . '%')
                    ->where(function($query) use ($filter) {
                        $query->where('HS_CODE', 'like', '%' . $filter . '%')
                              ->orWhere('DESTINATION_COUNTRY', 'like', '%' . $filter . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filter . '%');
                    })
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('DESTINATION_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filterdata . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_EXPORTER_NAME')
                    ->limit(10)
                    ->get();
                    // dd('Export last hs_code');
                } else if($filterby == 'country') {
                    # code...
                    // dd('searchDetails',$searchDetails,'filter',$filter,'filterdata', $filterdata,'filterby', $filterby,'filterdata1', $filterdata1);
                    $results = DB::table('EXP_AMERICA_BL_SEA')
                    ->select('*')
                    ->where('DESTINATION_COUNTRY', 'LIKE', '%' . $filterdata1 . '%')
                    ->where(function($query) use ($filter) {
                        $query->where('HS_CODE', 'like', '%' . $filter . '%')
                              ->orWhere('DESTINATION_COUNTRY', 'like', '%' . $filter . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filter . '%');
                    })
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('DESTINATION_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filterdata . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_EXPORTER_NAME')
                    ->limit(10)
                    ->get();

                    // dd('Export last country numeric block',$results);
                } elseif ($filterby == 'unloading_port') {
                    # code...
                    // dd('PRODUCT_DESCRIPTION', $searchDetails,'UNLOADING_PORT', $filterdata1,'DESTINATION_COUNTRY', $filter_search,'HS_CODE', $hs_code );
                    $results = DB::table('EXP_AMERICA_BL_SEA')
                    ->select('*')
                    ->where('UNLOADING_PORT', 'LIKE',  $filterdata1 . '%')
                    ->where(function($query) use ($filter) {
                        $query->where('HS_CODE', 'like', '%' . $filter . '%')
                              ->orWhere('DESTINATION_COUNTRY', 'like', '%' . $filter . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filter . '%');
                    })
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('DESTINATION_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filterdata . '%');
                    })
                    // ->whereNotNull('HS_CODE')
                    // ->whereNotNull('US_EXPORTER_NAME')
                    ->limit(10)
                    ->get();
                    // dd($results->toSql(),$results->getBindings());
                    // dd($results);
                }
                
            } else {
                # code...
                if ($filterby == 'hs_code') {
                    # code...
                    // dd('PRODUCT_DESCRIPTION', $searchDetails,'UNLOADING_PORT', $searchDetails,'DESTINATION_COUNTRY', $filterdata,'HS_CODE', $filterdata1 );
                  
                    $results = DB::table('EXP_AMERICA_BL_SEA')
                    ->select('*')
                    ->where('PRODUCT_DESCRIPTION', 'LIKE','%'.$searchDetails1 .'%')
                    ->where('HS_CODE', 'LIKE', '%' . $filterdata1 . '%')
                    ->where(function($query) use ($filter) {
                        $query->where('HS_CODE', 'like', '%' . $filter . '%')
                              ->orWhere('DESTINATION_COUNTRY', 'like', '%' . $filter . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filter . '%');
                    })
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('DESTINATION_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filterdata . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_EXPORTER_NAME')
                    ->limit(10)
                    ->get();
                    // dd('Export last hs_code in non numeric block',$result);
                } elseif($filterby == 'country') {
                    # code...
                    // dd('PRODUCT_DESCRIPTION', $searchDetails1,'UNLOADING_PORT', 'DESTINATION_COUNTRY',$filterdata1,$filter,$filterdata1);
                    $reults = DB::table('EXP_AMERICA_BL_SEA')
                    ->select('*')
                    ->where('DESTINATION_COUNTRY', 'LIKE', '%' . $filterdata1 . '%')
                    ->where('PRODUCT_DESCRIPTION', 'LIKE','%'.$searchDetails1 .'%')
                    ->where(function($query) use ($filter) {
                        $query->where('HS_CODE', 'like', '%' . $filter . '%')
                              ->orWhere('DESTINATION_COUNTRY', 'like', '%' . $filter . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filter . '%');
                    })
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('DESTINATION_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filterdata . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME')
                    ->limit(10)
                    ->get();
                    dd('Export last country non numeric',$results);
                } elseif ($filterby == 'unloading_port') {
                    # code...     
                    // dd('PRODUCT_DESCRIPTION', $searchDetails1,'UNLOADING_PORT', $filterdata,'DESTINATION_COUNTRY',$searchDetails);

                    $results = DB::table('EXP_AMERICA_BL_SEA')
                    ->select('*')
                    ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata1 . '%')
                    ->where('PRODUCT_DESCRIPTION', 'LIKE','%'.$searchDetails1 .'%')
                    ->where(function($query) use ($filter) {
                        $query->where('HS_CODE', 'like', '%' . $filter . '%')
                              ->orWhere('DESTINATION_COUNTRY', 'like', '%' . $filter . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filter . '%');
                    })
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('DESTINATION_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filterdata . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_EXPORTER_NAME')
                    ->limit(10)
                    ->get();
                }
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
            'filterdata1' => $filterdata1
        ]);
    }

}
