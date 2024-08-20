<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Exception;
use Hamcrest\Type\IsNumeric;
use Illuminate\Http\Request;

class SearchLiveDataController extends Controller
{
    // Import Sample Data
    function import() {
           $columns = Schema::getColumnListing('IMP_AMERICA_BL_SEA');
            $query = DB::table('IMP_AMERICA_BL_SEA')
            ->select('*')
            ->limit(1);
            foreach ($columns as $column) {
                $query->whereNotNull($column)
                ->where($column, '!=', 'N/A');
            }
            $result = $query->get();
            // dd($result);
           return view(
                'frontend.importdata', 
                [
                    'results' => $result
                ]
            );
    }
    // Export Smaple Data
    function export() {
           $columns = Schema::getColumnListing('EXP_AMERICA_BL_SEA');
            $query = DB::table('EXP_AMERICA_BL_SEA')
            ->select('*')
            ->limit(1);
            foreach ($columns as $column) {
                $query->whereNotNull($column)
                ->where($column, '!=', 'N/A');
            }
            $result = $query->get();
            
           return view(
                'frontend.exportdata', 
                [
                    'results' => $result
                ]
            );
    }
    // Search Live Data Route handeling
    function handleForm(Request $request) {
        $type = $request->input('type');
        $role = $request->input('role');
        $base_desc = str_replace(' ','-',$request->input('description'));
    
        $description = $base_desc ?: '-';
        $hs_code = $request->input('hs_code') ?: '-';
         if ($type === 'data'){
                if ($hs_code === '-') {
                    $url = route('search.data', ['type' => $type, 'role' => $role, 'description' => $description]);
                } else {
                    $url = route('search.data', ['type' => $type, 'role' => $role, 'description' => $description, 'hs_code' => $hs_code]);
                }
          } elseif ($type === 'company') {
              
                if ($hs_code === '-') {
                    $url = route('search.company', ['type' => $type, 'role' => $role, 'description' => $description]);
                } else {
                    $url = route('search.company', ['type' => $type, 'role' => $role, 'description' => $description, 'hs_code' => $hs_code]);
                }
          } else {
              abort(404);
          }
        return redirect($url);
        
    }
    // Search Live data
    public function search ($type, $role, $description = null,$hs_code = null)
    {
        $base_desc = str_replace('-',' ',$description);
        $base_hs_code = $hs_code;
    
        // Your search logic here
        $description=$base_desc;
  
        if($type == "data") {
            if($description!=" " || $hs_code){
                if ($role == "import") {
                        if ($description === ' ') {
                        $result = DB::table('IMP_AMERICA_BL_SEA')
                            ->select('*')
                            ->where(DB::raw('HS_CODE'), 'like', $hs_code . '%')
                            ->whereRaw('LENGTH(HS_CODE) <= 12')  // Ensure HS_CODE is no more than 8 digits long
                            ->where(DB::raw('PRODUCT_DESCRIPTION'), 'LIKE', '%' . $description . '%')
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_IMPORTER_NAME')
                            ->orderBy(DB::raw('LENGTH(HS_CODE)'), 'asc')  // Sort by the length of HS_CODE first
                            ->orderBy('HS_CODE', 'asc')
                            ->limit(5000)
                            ->get();

                        }else{
                             $description = '"' . $description . '"'; // Wrap the search term in double quotes
                                $result = DB::table('IMP_AMERICA_BL_SEA')
                                ->select('*')
                                ->where('HS_CODE', 'like', $hs_code . '%')
                                ->whereRaw('LENGTH(HS_CODE) <= 12') 
                                ->whereRaw("MATCH(PRODUCT_DESCRIPTION) AGAINST(? IN BOOLEAN MODE)", [$description])
                                ->whereNotNull('HS_CODE')
                                ->whereNotNull('US_IMPORTER_NAME')
                                ->orderBy(DB::raw('LENGTH(HS_CODE)'), 'asc') // Sort by the length of HS_CODE first
                                ->orderBy('HS_CODE', 'asc')
                                ->limit(5000)
                                ->get();
                                

                        }
    
                } elseif($role == "export") {
                    $result = DB::table('EXP_AMERICA_BL_SEA')
                    ->select('*')
                    ->where(DB::raw('`HS_CODE`'), 'like', $hs_code . '%')
                    ->whereRaw('LENGTH(HS_CODE) <= 12') 
                    ->where(DB::raw('PRODUCT_DESCRIPTION'), 'LIKE', '%'. $base_desc . '%')
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
            }
            else{
                $error = "Please Enter Product Description or HS_CODE"; // Example error message
        
                // Return the view with the error message
                return view('frontend.searchlivedata', [
                    'error' => $error,
                ]);
            }

        } elseif($type == "company") {
             $roleimport = explode('er', $role); 
             $role=$roleimport[0];

            if ($role == "import") {
                $columns = Schema::getColumnListing('IMP_AMERICA_BL_SEA');
            
                
                if ($description ==' ') {
                      $query = DB::table('IMP_AMERICA_BL_SEA')
                        ->select('*')
                        ->where(DB::raw('`HS_CODE`'), 'like', $hs_code . '%')
                         ->whereRaw('LENGTH(HS_CODE) <= 12') 
                        ->where(DB::raw('PRODUCT_DESCRIPTION'), 'LIKE', '%' . $description . '%')
                        ->where('US_IMPORTER_NAME', '!=', 'N/A')
                        ->limit(10);
                        
                        foreach ($columns as $column) {
                            $query->whereNotNull($column);
                        }
                        $result = $query->get();
                        // dd( $result);
                }else{
                    $query = DB::table('IMP_AMERICA_BL_SEA')
                        ->select('*')
                        ->where('HS_CODE', 'like', $hs_code . '%')
                        ->whereRaw('LENGTH(HS_CODE) <= 12') 
                        ->whereRaw("MATCH(PRODUCT_DESCRIPTION) AGAINST(? IN BOOLEAN MODE)", [$description])
                        ->where('US_IMPORTER_NAME', '!=', 'N/A');
                        foreach ($columns as $column) {
                            $query->whereNotNull($column);
                        }
                        $result = $query->limit(10)->get();
                }
                
            } 
            elseif($role == "export") {
                $columns = Schema::getColumnListing('EXP_AMERICA_BL_SEA');
            
                $query = DB::table('EXP_AMERICA_BL_SEA')
                ->select('*')
                ->where(DB::raw('`HS_CODE`'), 'like', $hs_code . '%')
                ->whereRaw('LENGTH(HS_CODE) <= 12') 
                ->where(DB::raw('PRODUCT_DESCRIPTION'), 'LIKE', '%' . $description . '%')
                ->where('US_EXPORTER_NAME', '!=', 'N/A');
                    foreach ($columns as $column) {
                        $query->whereNotNull($column);
                    }
                    $result = $query->limit(12)->get();
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
    public function searchFilter()
    {
        // Retrieve all arguments passed to the method
        $args = func_get_args();
        // dd($args);
        // Assign parameters based on the number of arguments
        if (count($args) == 4) {
            [$type, $role, $filterby, $filterdata] = $args;
            $search = null;
            $base_search = null;
               if($role == 'import'){
               
                    if($filterby=='hs_code'){
                    $results = DB::table('IMP_AMERICA_BL_SEA')
                        ->select('*')
                        ->where('HS_CODE', 'like', $filterdata.'%') // Use 'like' operator for pattern matching
                        ->whereRaw('LENGTH(HS_CODE) <= 12') 
                        ->whereNotNull('HS_CODE')
                        ->limit(10)
                        ->get();
                        
                    //dd($results, $filterdata);
                    }
               }else{
                    $hs_codedetails = $base_search;
                    if($filterby=='hs_code'){
                        $results = DB::table('EXP_AMERICA_BL_SEA')
                            ->select('*')
                            ->where('HS_CODE', 'like', $filterdata .'%')
                            ->whereRaw('LENGTH(HS_CODE) <= 12')
                            ->whereNotNull('HS_CODE')
                            ->limit(10)
                            ->get();
                        
                    }
               }
               
            return view('frontend.livedata.searchfilter', [
                'result' => $results,
                'desc' => $filterdata,
                'type' => $type,
                'role' => $role,
                'hscode' => $filterdata,
                'filterdata' => $filterdata,
                'base_search' => $filterdata,
                'searfilterdata' => $filterdata,
                'searchfilterby' => $filterby,
                'search' => $filterby,
                'filterby' => $filterby,
                'args'=>$args,
            ]);
        } else if (count($args) == 6) {
            [$type, $role, $search, $base_search, $filterby, $filterdata] = $args;
            
        }

        // Handle different filters based on the filterby parameter
        $filterdata = str_ireplace("-", " ", $filterdata);

        // Your existing logic for processing the filter
        if ($role == 'import') {
            $values = explode(',', $base_search);
            $all_numeric = true;
            
            foreach ($values as $value) {
                if (!is_numeric($value)) {
                    $all_numeric = false;
                    break;
                }
            }
            
            if ($all_numeric){
                $hs_codedetails = $base_search;
                switch ($filterby) {
                    case 'hs_code':
                       
                        $results = DB::table('IMP_AMERICA_BL_SEA')
                            ->select('*')
                            ->where('HS_CODE', 'like', $hs_codedetails .'%')
                            ->whereRaw('LENGTH(HS_CODE) <= 12') 
                            ->where('HS_CODE',  $filterdata )
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_IMPORTER_NAME')
                            ->limit(10)
                            ->get();
                          
                        break;
                    case 'country':
                        //dd('this country Block');
                        $results = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                            ->select('*')
                            ->where('HS_CODE', 'like', $hs_codedetails .'%')
                            ->whereRaw('LENGTH(HS_CODE) <= 12') 
                            ->where('ORIGIN_COUNTRY', 'like', $filterdata . '%')
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_IMPORTER_NAME')
                            ->limit(10)
                            ->get();
                        break;
                    case 'unloading_port':
                      
                        $results = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                            ->select('*')
                            ->where('HS_CODE', 'like', $hs_codedetails .'%')
                            ->whereRaw('LENGTH(HS_CODE) <= 12') 
                            ->where('UNLOADING_PORT', 'like', $filterdata . '%')
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_IMPORTER_NAME')
                            ->limit(10)
                            ->get();
                        break;
                    default:
                        $results = collect();
                }
            } else {
     
                $descdetails = $base_search;
                switch ($filterby) {
                    case 'hs_code':
                        $results = DB::table('IMP_AMERICA_BL_SEA')
                            ->select('*')
                            ->where('PRODUCT_DESCRIPTION', 'like', '%' . $descdetails .'%')
                            ->where('HS_CODE', 'like', $filterdata . '%')
                             ->whereRaw('LENGTH(HS_CODE) <= 12') 
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_IMPORTER_NAME')
                            ->limit(10)
                            ->get();
                        break;
                    case 'country':
                        
                        $results = DB::table('IMP_AMERICA_BL_SEA')
                            ->select('*')
                            ->where('ORIGIN_COUNTRY', 'like', $filterdata . '%')
                            ->where('PRODUCT_DESCRIPTION', 'like', '%' . $descdetails .'%')
                             ->whereRaw('LENGTH(HS_CODE) <= 12') 
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_IMPORTER_NAME')
                            ->limit(10)
                            ->get();
                        break;
                    case 'unloading_port':
                        $results = DB::table('IMP_AMERICA_BL_SEA')
                            ->select('*')
                            ->where('PRODUCT_DESCRIPTION', 'like', '%' . $descdetails .'%')
                            ->where('UNLOADING_PORT', 'like', $filterdata . '%')
                             ->whereRaw('LENGTH(HS_CODE) <= 12') 
                            ->whereNotNull('HS_CODE')
                            ->whereNotNull('US_IMPORTER_NAME')
                            ->limit(10)
                            ->get();
                        break;
                    default:
                        $results = collect();
                }
            }
        } else {
            $values = explode(',', $base_search);
            $all_numeric = true;
            
            foreach ($values as $value) {
                if (!is_numeric($value)) {
                    $all_numeric = false;
                    break;
                }
            }
            
            if ($all_numeric){
                $hs_codedetails = $base_search;
                switch ($filterby) {
                    case 'hs_code':
                        $results = DB::table('EXP_AMERICA_BL_SEA')
                            ->select('*')
                            ->where('HS_CODE', 'like', $filterdata .'%')
                            ->whereRaw('LENGTH(HS_CODE) <= 12')
                            ->orWhere('HS_CODE', '=', $hs_codedetails)
                            ->limit(10)
                            ->get();
                            
                        break;
                    case 'country':
                        $results = DB::table('EXP_AMERICA_BL_SEA')
                            ->select('*')
                            ->where('HS_CODE', 'like', $hs_codedetails .'%')
                            ->whereRaw('LENGTH(HS_CODE) <= 12')
                            ->where('DESTINATION_COUNTRY', 'like', '%' . $filterdata . '%')
                            ->limit(10)
                            ->get();
                        break;
                    case 'unloading_port':
                        $results = DB::table('EXP_AMERICA_BL_SEA')
                            ->select('*')
                            ->where('UNLOADING_PORT', 'like', '%' . $filterdata . '%')
                            ->where('HS_CODE', 'like', '%' . $hs_codedetails .'%')
                            ->whereRaw('LENGTH(HS_CODE) <= 12')
                            ->limit(10)
                            ->get();
                        break;
                    default:
                        $results = collect();
                }
            } else {
                $descdetails = $base_search;
                switch ($filterby) {
                    case 'hs_code':
                        
                        $results = DB::table('EXP_AMERICA_BL_SEA')
                      
                            ->select('*')
                            ->where('HS_CODE', 'like', '%' . $filterdata . '%')
                            ->whereRaw('LENGTH(HS_CODE) <= 12')
                            ->where('PRODUCT_DESCRIPTION', 'like', '%' . $descdetails .'%')
                            ->limit(10)
                            ->get();
                      
                        break;
                    case 'country':
                        $results = DB::table('EXP_AMERICA_BL_SEA')
                            ->select('*')
                            ->where('DESTINATION_COUNTRY', 'like', '%' . $filterdata . '%')
                            ->where('PRODUCT_DESCRIPTION', 'like', '%' . $descdetails .'%')
                            ->whereRaw('LENGTH(HS_CODE) <= 12')
                            ->limit(10)
                            ->get();
                        break;
                    case 'unloading_port':
                        $results = DB::table('EXP_AMERICA_BL_SEA')
                            ->select('*')
                            ->where('UNLOADING_PORT', 'like', '%' . $filterdata . '%')
                            ->where('PRODUCT_DESCRIPTION', 'like', '%' . $descdetails .'%')
                            ->whereRaw('LENGTH(HS_CODE) <= 12')
                            ->limit(10)
                            ->get();
                        break;
                    default:
                        $results = collect();
                }
            }
        }

         return view('frontend.livedata.searchfilter', [
            'result' => $results,
            'desc' => $filterdata,
            'type' => $type,
            'role' => $role,
            'hscode' => $filterdata,
            'filterdata' => $filterdata,
            'base_search' => $base_search,
            'searfilterdata' => $filterdata,
            'searchfilterby' => $filterby,
            'search' => $search,
            'filterby' => $filterby,
            'args'=>$args,
        ]);
    }

    // Search Filter One
    public function searchFilter1() {
        // Handle different filters based on the filterby parameter
          $args = func_get_args();
        //   dd($args);
          if(count($args)==6){
                [$type, $role,$filterby, $filterdata,  $filterby1,$filterdata1] = $args;
                $filterdata1 = str_replace('-', ' ', $filterdata1);
                $filterdata = str_replace('-', ' ', $filterdata);
                $search = null;
                $base_search = null;
                // dd($type, $role,'Filterby',$filterby,'Filterdat', $filterdata,'Filtervy1',  $filterby1,'Filterdata1',$filterdata1);
                        if ($role=='import') {
                                if($filterby1 == 'hs_code'){
    
                                }else if($filterby1 == 'country'){
                                 $results = DB::table('IMP_AMERICA_BL_SEA')
                                    ->select('*')
                                    ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filterdata1 . '%')
                                    ->where('HS_CODE', 'LIKE', '%' . $filterdata . '%')
                                    ->where(function($query) use ($filterdata) {
                                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                                              ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata . '%');
                                    })
                                    ->whereNotNull('HS_CODE')
                                    ->whereRaw('LENGTH(HS_CODE) <= 12')
                                    ->whereNotNull('US_IMPORTER_NAME')
                                    ->limit(10)
                                    ->get();
                                }else{
                                     $results = DB::table('IMP_AMERICA_BL_SEA')
                                    ->select('*')
                                    ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata1 . '%')
                                    ->where('HS_CODE', 'LIKE', '%' . $filterdata .'%')
                                    ->where(function($query) use ($filterdata) {
                                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%');
                                    })
                                    ->whereRaw('LENGTH(HS_CODE) <= 12')
                                    ->whereNotNull('HS_CODE')
                                    ->limit(10)
                                    ->get(); 
                                }

                            return view('frontend.livedata.searchfilter-one', [
                                'result' => $results,
                                'desc'   => $filterdata,
                                'type'   => $type,
                                'role'   => $role,
                                'hscode' => $filterdata,
                                'searfilterdata' => $filterdata,
                                'searchDetails1' => $filterdata,
                                'filterby' => $filterby,
                                'filterby1'=> $filterby1,
                                'filterdata' => $filterdata,
                                'filterdata1' => $filterdata1,
                                'args' => $args
                             ]);
                        }else{
                                if($filterby1 == 'hs_code'){
                                $results = DB::table('EXP_AMERICA_BL_SEA')
                                    ->select('*')
                                    ->where('HS_CODE', 'like', $filterdata1 . '%')
                                    ->where('PRODUCT_DESCRIPTION', 'like', '%' . $base_search . '%')
                                    ->where(function($query) use ($filterdata) {
                                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                                              ->orWhere('DESTINATION_COUNTRY', $filterdata )
                                              ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata . '%');
                                    })
                                    ->whereRaw('LENGTH(HS_CODE) <= 12')
                                    // ->whereNotNull('HS_CODE')
                                    // ->whereNotNull('US_EXPORTER_NAME')
                                    ->limit(10)
                                    ->get();
                                }else if($filterby1 == 'country'){

                                 $results = DB::table('EXP_AMERICA_BL_SEA')
                                    ->select('*')
                                    ->where('DESTINATION_COUNTRY', 'LIKE', '%' . $filterdata1 . '%')
                                    ->where('HS_CODE', 'LIKE', '%' . $filterdata . '%')
                                    ->whereRaw('LENGTH(HS_CODE) <= 12')
                                    ->where(function($query) use ($filterdata) {
                                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                                              ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata . '%');
                                    })
                                    ->whereNotNull('HS_CODE')
                                 
                                    ->limit(10)
                                    ->get();
                                }else{
                                   // dd($type, $role,$filterby, $filterdata,  $filterby1,$filterdata1);
                                     $results = DB::table('EXP_AMERICA_BL_SEA')
                                    ->select('*')
                                    ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata1 . '%')
                                    ->where('HS_CODE', 'LIKE', '%' . $filterdata .'%')
                                    ->whereRaw('LENGTH(HS_CODE) <= 12')
                                    ->where(function($query) use ($filterdata) {
                                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%');
                                    })
                                    ->whereNotNull('HS_CODE')
                                    ->limit(10)
                                    ->get(); 
                                }

                            return view('frontend.livedata.searchfilter-one', [
                                'result' => $results,
                                'desc'   => $filterdata,
                                'type'   => $type,
                                'role'   => $role,
                                'hscode' => $filterdata,
                                'searfilterdata' => $filterdata,
                                'searchDetails1' => $filterdata,
                                'filterby' => $filterby,
                                'filterby1'=> $filterby1,
                                'filterdata' => $filterdata,
                                'filterdata1' => $filterdata1,
                                'args' => $args
                             ]);
                        }

          }
          else if(count($args)==8){
              [$type, $role,$search,$base_search,$filterby, $filterdata,  $filterby1,$filterdata1] = $args;
            
          }
        // dd('Type',$type,'Role', $role,'Search Details1',$base_search,'Filter data1', $filterdata1,'filterby', $filterby,'filterdata',$filterdata);
          $filterdata1 = str_replace('-', ' ', $filterdata1);
          $filterdata = str_replace('-', ' ', $filterdata);
        //   dd($type, $role,'Search Details1',$base_search,'Filter data1', $filterdata1,'filterby', $filterby,'filterdata',$filterdata,$filterby1);
        if ($role=='import') {

            # code...
            if (is_numeric($base_search)) {

                # code...
                if ($filterby1 == 'hs_code') {
       
                    $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                    ->select('*')
                    ->where('HS_CODE', 'like', $filterdata1 . '%')
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata . '%')
                    ->whereNotNull('HS_CODE')
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
                    ->whereNotNull('US_IMPORTER_NAME');
                    });
                    
                    $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
                    ->where('HS_CODE', 'like', $filterdata1 . '%')
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata . '%')
                    ->whereNotNull('HS_CODE')
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
                    ->whereNotNull('US_IMPORTER_NAME');
                    });
                
                    $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
                    ->where('HS_CODE', 'like', $filterdata1 . '%')
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata . '%')
                    ->whereNotNull('HS_CODE')
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
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
                } else if ($filterby1 == 'country') {
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
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
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
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
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
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
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
                } else if ($filterby1 == 'unloading_port'){
                    // dd('Search Deatails',$searchDetails,'Filter data1', $filterdata1,'filterby', $filterby,'filterdata',$filterdata);
                    $results = DB::table('IMP_AMERICA_BL_SEA')
                    ->select('*')
                    ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata1 . '%')
                    ->where('HS_CODE', 'LIKE', '%' . $base_search .'%')
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME')
                    ->limit(10)
                    ->get();
                
                } else {
                    # code...
                     $results = collect();
                }
            } else {
                # code...
            
                if ($filterby1 == 'hs_code') {
                    $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                    ->select('*')
                    ->where('HS_CODE', 'like', $filterdata1 . '%')
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
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
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
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
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
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
                } else if ($filterby1 == 'country') {
                    // dd($type, $role,'Search Details1',$base_search,'Search Deatails',$searchDetails,'Filter data1', $filterdata1,'filterby', $filterby,'filterdata',$filterdata);
                    $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                    ->select('*')
                    ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filterdata1 . '%')
                    ->where('PRODUCT_DESCRIPTION', 'like', '%' . $base_search . '%')
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')                          
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata . '%');
                    })
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');
                    $query2 = DB::table('IMP_AMERICA_BL_SEA_part_ymain')
                    ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filterdata1 . '%')
                    ->where('PRODUCT_DESCRIPTION', 'like', '%' . $base_search . '%')
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', '=' ,$filterdata )                          
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata . '%');
                    })
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME');

                    $query3 = DB::table('IMP_AMERICA_BL_SEA_part_zmain')
                    ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filterdata1 . '%')
                    ->where('PRODUCT_DESCRIPTION', 'like', '%' . $base_search . '%')
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
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
                    // dd('Country Block');
                } else if ($filterby1 == 'unloading_port'){
                    // dd('Else Bloack in Unloading pOrt',$filterdata,$filterdata1,$searchDetails,$searchDetails1);
                    $filterdata1 = str_replace('-', ' ', $filterdata1);
                    $query1 = DB::table('IMP_AMERICA_BL_SEA_part_xmain')
                    ->select('*')
                    ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata1 . '%')
                    ->where('PRODUCT_DESCRIPTION', 'like', '%' . $base_search . '%')
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
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
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
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
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
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
                // dd('In Export Bloc');
            $values = explode(',', $base_search);
            $all_numeric = true;
            
            foreach ($values as $value) {
                if (!is_numeric($value)) {
                    $all_numeric = false;
                    break;
                }
            }
            
            if ($all_numeric){
            //   dd('In numeric Bloc');
                # code...
                if ($filterby1 == 'hs_code') {
                    // dd('HS_CODE', $filterdata,'filterdata1',$filterdata1);
                    $results = DB::table('EXP_AMERICA_BL_SEA')
                    ->select('*')
                    ->where('HS_CODE', 'like', $filterdata1 . '%')
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata. '%')
                              ->orWhere('DESTINATION_COUNTRY', 'like', '%' . $filterdata. '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%' . $filterdata. '%');
                    }) 
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_EXPORTER_NAME')
                    ->limit(10)
                    ->get();
                // dd($results);
                } else if ($filterby1 == 'country') {
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
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
                    // ->whereNotNull('HS_CODE')
                    // ->whereNotNull('US_EXPORTER_NAME')
                    ->limit(10)
                    ->get();
              
                } else if ($filterby1 == 'unloading_port'){
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
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
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
                // dd('UNLOADING_PORT',$filterdata1,'DESTINATION_COUNTRY',$filterdata,$base_search);
                if ($filterby1 == 'hs_code') {
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
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
                    // ->whereNotNull('HS_CODE')
                    // ->whereNotNull('US_EXPORTER_NAME')
                    ->limit(10)
                    ->get();
                    // dd('if BlockS',$results);
                } else if ($filterby1 == 'country') {
                    // dd('Filterdata',$filterdata,'filterdata1',$filterdata1,$searchDetails);
                    $results = DB::table('EXP_AMERICA_BL_SEA')
                    ->select('*')
                    ->where('DESTINATION_COUNTRY', 'LIKE', '%' . $filterdata1 . '%')
                    ->where('PRODUCT_DESCRIPTION', 'like', '%' . $base_search . '%')
                    ->whereNotNull('HS_CODE')
                    // ->whereNotNull('US_EXPORTER_NAME')
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_Code', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('Unloading_port', 'like', '%' . $filterdata . '%');
                    })
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
                    ->whereNotNull('HS_CODE')
                    // ->whereNotNull('US_EXPORTER_NAME')
                    ->limit(10)
                    ->get();
                
                    // dd('Query Results', $results);
                } else if ($filterby1 == 'unloading_port'){
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
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
                    ->whereNotNull('HS_CODE')
                    // ->whereNotNull('US_EXPORTER_NAME')
                    ->limit(10)
                    ->get();
                   
                } else {
                    # code...
                     $results = collect();
                }
            }
            // dd($filterby,$filterby1);
        }

        return view('frontend.livedata.searchfilter-one', [
            'result' => $results,
            'desc'   => $filterdata,
            'type'   => $type,
            'role'   => $role,
            'hscode' => $filterdata,
            'searchDetails1' => $base_search,
            'filterby' => $filterby,
            'filterby1'=> $filterby1,
            'filterdata' => $filterdata,
            'filterdata1' => $filterdata1,
            'args' => $args,
            'search' =>$search
         ]);
    }

    // Search Filter two
    public function searchFilter2() {
        // Check and debug input parameters
          $arg = func_get_args();
          //dd($arg);
          if(count($arg) == 8){
             [$type, $role,$filterby, $filter, $filterby1, $filterdata, $filterby2, $filterdata1] = $arg;
             $searchDetails1=$filter;
          }else if(count($arg) == 10){
             [$type, $role,$search,$searchDetails1,$filterby, $filter, $filterby1, $filterdata, $filterby2, $filterdata1] = $arg;
          }
        // dd('Type',$type,'Role', $role,$search,'Base Search',$searchDetails1,'Filter', $filter,'Filterby',$filterby,'Filterby1', $filterby1, 'Filterdata',$filterdata,'Filterby2', $filterby2,'Dilterdata1', $filterdata1);
          $filterdata1 = str_replace('-', ' ', $filterdata1);
          $filterdata = str_replace('-', ' ', $filterdata);
          $filter = str_replace('-', ' ', $filter);
        if ($role == 'import') {
            # code...
            $values = explode(',', $searchDetails1);
            $all_numeric = true;
            
            foreach ($values as $value) {
                if (!is_numeric($value)) {
                    $all_numeric = false;
                    break;
                }
            }
            
            if ($all_numeric){
                # code...
                // dd('Numeric Bloc');
               
                if ($filterby2 == 'hs_code') {
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
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
                    ->whereNotNull('HS_CODE');
                    // ->whereNotNull('US_IMPORTER_NAME');
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
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
                    ->whereNotNull('HS_CODE');
                    // ->whereNotNull('US_IMPORTER_NAME');
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
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
                    ->whereNotNull('HS_CODE');
                    // ->whereNotNull('US_IMPORTER_NAME');
        
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
                } else if ($filterby2 == 'country') {
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
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
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
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
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
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
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
                } else if ($filterby2 == 'unloading_port') {
                    // dd('IN Numeric UNLOADING_PORT','Filter',$filter,'filterdata', $filterdata, 'filterby', $filterby,'Filterby1', $filterby1,'Filterby2', $filterby2, 'filterdata1', $filterdata1);
                    $results = DB::table('IMP_AMERICA_BL_SEA')
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
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME')
                    ->limit(10)
                    ->get();  
                
                } else {
                    # code...
                    $results = collect();
                }
            } else {
                # code...
                //   dd('Type',$type,'Role', $role,'$searchDetails1',$searchDetails1,'Filter', $filter,'Filterby',$filterby,'Filterby1', $filterby1, 'Filterdata',$filterdata,'Filterby2', $filterby2,'Filterdata1', $filterdata1);
                if ($filterby2 == 'hs_code') {

                    $results = DB::table('IMP_AMERICA_BL_SEA')
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
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME')
                    ->limit(10)
                    ->get(); 
         
                
                } else if ($filterby2 == 'country') {
                     // dd('CoUNTRY BLOCK');
                   // dd('Type',$type,'Role', $role,'searchDetails1',$searchDetails1,'Filter', $filter,'Filterby',$filterby,'Filterby1', $filterby1, 'Filterdata',$filterdata,'Filterby2', $filterby2,'Filterdata1', $filterdata1);
                    $results = DB::table('IMP_AMERICA_BL_SEA')
                    ->select('*')
                    ->where('PRODUCT_DESCRIPTION', 'LIKE','%'.$searchDetails1 .'%')
                    ->where('ORIGIN_COUNTRY', 'LIKE', '%' . $filterdata1 . '%')
                    ->where(function($query) use ($filter) {
                        $query->where('PRODUCT_DESCRIPTION', 'like', '%' . $filter . '%')
                              ->orWhere('HS_CODE', 'like', '%' . $filter . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filter . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filter . '%');
                    })
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filterdata . '%');
                    })
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_IMPORTER_NAME')
                    ->limit(10)
                    ->get(); 
                 

                } else if ($filterby2 == 'unloading_port') {
  
                    //dd('Base Search', $searchDetails1, 'Filter', $filter, 'Filterdata', $filterdata, 'Filterby', $filterby, 'Filterdata1', $filterdata1);
                    $results = DB::table('IMP_AMERICA_BL_SEA')
                    ->select('*')
                    ->where('PRODUCT_DESCRIPTION', 'LIKE','%'.$searchDetails1 .'%')
                    ->where('UNLOADING_PORT', 'LIKE', '%' . $filterdata1 . '%')
                    ->where(function($query) use ($filter) {
                        $query->where('PRODUCT_DESCRIPTION', 'like', '%' . $filter . '%')
                              ->orWhere('HS_CODE', 'like', '%' . $filter . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filter . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filter . '%');
                    })
                    ->where(function($query) use ($filterdata) {
                        $query->where('HS_CODE', 'like', '%' . $filterdata . '%')
                              ->orWhere('ORIGIN_COUNTRY', 'like', '%' . $filterdata . '%')
                              ->orWhere('UNLOADING_PORT', 'like', '%'. $filterdata . '%');
                    })
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
                    ->limit(10)
                    ->get(); 
    
                } else {
                    # code...
                    $results = collect();
                }
            }
        } else {
            # code...
            // dd('In Export Block',$filterby,$filterby2);
            $values = explode(',', $searchDetails1);
            $all_numeric = true;
            
            foreach ($values as $value) {
                if (!is_numeric($value)) {
                    $all_numeric = false;
                    break;
                }
            }
            
            if ($all_numeric){
                # code...  
                // dd("In Numeric block",'filterby',$filterby,'filterby2',$filterby2);
                if($filterby2 == 'hs_code'){
                     //dd("In Hs_Code",$type, $role,$filterby, $filter, $filterby1, $filterdata, $filterby2, $filterdata1);
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
                        ->whereRaw('LENGTH(HS_CODE) <= 12')
                        ->whereNotNull('HS_CODE')
                        // ->whereNotNull('US_EXPORTER_NAME')
                        ->limit(10)
                        ->get();
                    // dd('Export last hs_code');
                }else if($filterby2=="country"){
                    //  dd("In Country",$type, $role,$filterby, $filter, $filterby1, $filterdata, $filterby2, $filterdata1);
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
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
                    ->whereNotNull('HS_CODE')
                    // ->whereNotNull('US_EXPORTER_NAME')
                    ->limit(10)
                    ->get();
                }else if($filterby2=="unloading_port"){
                    // dd("In Port",$type, $role,$filterby, $filter, $filterby1, $filterdata, $filterby2, $filterdata1);
                    #Unloading_Port
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
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
                    ->whereNotNull('HS_CODE')
                    // ->whereNotNull('US_EXPORTER_NAME')
                    ->limit(10)
                    ->get();
                    // dd($results->toSql(),$results->getBindings());
                    // dd($results);
                }
                
            } else {
                # code...
                // dd('In description Block');
                if ($filterby2 == 'hs_code') {
                    # code...
                    //dd($arg,'PRODUCT_DESCRIPTION', $searchDetails1,'DESTINATION_COUNTRY', $filterdata,'HS_CODE', $filterdata1 );
                  
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
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
                    ->whereNotNull('HS_CODE')
                    ->whereNotNull('US_EXPORTER_NAME')
                    ->limit(10)
                    ->get();
                   
                } elseif($filterby2 == 'country') {
                    # code...
                    //dd('PRODUCT_sDESCRIPTION', $searchDetails1,'UNLOADING_PORT', 'DESTINATION_COUNTRY',$filterdata1,$filter,$filterdata1);
                    $results = DB::table('EXP_AMERICA_BL_SEA')
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
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
                    ->whereNotNull('HS_CODE')
                    // ->whereNotNull('US_IMPORTER_NAME')
                    ->limit(10)
                    ->get();
                    // dd('Export last country non numeric',$results);
                } elseif ($filterby2 == 'unloading_port') {
                    # code...     

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
                    ->whereRaw('LENGTH(HS_CODE) <= 12')
                    ->whereNotNull('HS_CODE')
                    // ->whereNotNull('US_EXPORTER_NAME')
                    ->limit(10)
                    ->get();
                }
            }
            
        }
        
        // Debugging to verify results
     
        // Return the view with results
        return view('frontend.livedata.searchfilter-one', [
            'result' => $results,
            'desc' => $filterdata,
            'type' => $type,
            'role' => $role,
            'hscode' => $filterdata,
            'searchDetails1' => $searchDetails1,
            'filterby'=>$filterby,
            'filterby1'=>$filterby1,
            'filterdata' => $filterdata,
            'filterby2' => $filterby2,
            'filterdata1' => $filterdata1,
             'arg' => $arg,
             'filter'=>$filter,
             'search' => count($arg) == 10 ? $search : 'default_search_value'
        ]);
    }

}
