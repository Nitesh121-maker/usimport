<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    public function companydata($role,$companyname){
      if ($role=='import') {
        # code...
        $query1=DB::table('IMP_AMERICA_BL_SEA_part_xmain')
        ->select ('*')
        ->where('US_IMPORTER_NAME',$companyname);
        $query2=DB::table('IMP_AMERICA_BL_SEA_part_ymain')
        ->select ('*')
        ->where('US_IMPORTER_NAME',$companyname);
        $query3=DB::table('IMP_AMERICA_BL_SEA_part_zmain')
        ->select ('*')
        ->where('US_IMPORTER_NAME',$companyname);
        
        $combinedQuery = $query1
        ->union($query2)
        ->union($query3)
        ;
        $results = DB::table(DB::raw("({$combinedQuery->toSql()}) as sub"))
        ->mergeBindings($combinedQuery) // You need to merge bindings to avoid SQL errors
        ->limit(1)
        ->get();   
        // dd($results);
        return view('frontend.livedata.companyimport',
        [
            'results'=>$results,
            'role'=>$role
        ]);
      } else {
        # code...
        $data=DB::table('users')
        ->select ('*')
        ->where('companyname',$companyname)
        ->get();
      }
      

    }
}
