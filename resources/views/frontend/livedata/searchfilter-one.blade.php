<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('frontend.link')
   <!----------------------- Meta Tags Start---------------------------->
   @php
   $Dresult = $result;
@endphp

@if(isset($Dresult) && $Dresult->count() > 0)
   @foreach ($Dresult as $Dresult)
       {{-- @dd($searchDetails1) --}}
       @php
           $res_hs_code = $Dresult->HS_CODE;
           $country = $Dresult->ORIGIN_COUNTRY;
           $country = str_ireplace(" ", "-", $country);
           $unloading_port = $Dresult->UNLOADING_PORT;
           $args = $args ?? [];
           $arg = $arg ?? [];
           //dd($filterby2,$filterby1,$filterby,$args,$searchDetails1,$arg);
           $searchDetailsParts = explode(',', $searchDetails1);
           $all_numeric = true;

           foreach ($searchDetailsParts as $part) {
               if (!is_numeric($part)) {
                   $all_numeric = false;
                   break;
               }
           }
       @endphp

       @if ($all_numeric)
           @php
               $filterdata = str_ireplace(" ", "-", $filterdata);
               $filterdata1 = str_ireplace(" ", "-", $filterdata1);
               $unloading_port = str_ireplace(" ", "-", $unloading_port);
           @endphp

           @if (count($args) == 6)
               @if ($filterby1 == 'hs_code')
                   {{-- Handle hs_code logic --}}
               @elseif ($filterby1 == 'unloading_port')
                   @if($filterby == 'hs_code')
                       <title> USA HS Code {{$filterdata}} {{$role}} data at {{$filterdata1}} </title>
                       <meta name="description" content="USA {{$role}}s data under the HS code {{$filterdata}} at {{$filterdata1}} .  Our bill of lading reports, which include hs code, date, b/l number, product description, loading and unloading ports, us {{$role}}er name, quantity, etc.">
                   @elseif($filterby=='country')
                       <title>US HS code {{$searchDetails1}}  {{$role}} Data from {{$filterdata}} At Port {{$filterdata1}}</title>
                       <meta name="description" content="USA imports data under the HS code {{$searchDetails1}} form {{$filterdata}} At Port {{$filterdata1}} . Our US bill of lading data reports, which include HS code, date, b/l number, product description, loading and unloading ports, us importer name, quantity, etc.">
                   @endif
               @elseif ($filterby1 == 'country')
                   @if($filterby == 'hs_code')
                       <title> USA HS Code {{$filterdata}} {{$role}} data from {{$filterdata1}} </title>
                       <meta name="description" content="USA {{$role}}s data under the HS code {{$filterdata}} form {{$filterdata1}} .  Our bill of lading reports, which include hs code, date, b/l number, product description, loading and unloading ports, us {{$role}}er name, quantity, etc.">
                   @elseif($filterby=='unloading_port')
                       <title> USA HS Code {{$filterdata}} {{$role}} data from {{$filterdata1}} </title>
                       <meta name="description" content="USA {{$role}}s data under the HS code {{$filterdata}} form {{$filterdata1}} .  Our bill of lading reports, which include hs code, date, b/l number, product description, loading and unloading ports, us {{$role}}er name, quantity, etc.">
                   @endif
               @endif
           @elseif (count($args) == 8)
               @if ($filterby1 == 'country')

                  @if($filterby == 'unloading_port')
                       <title>US HS code {{$searchDetails1}}  {{$role}} Data from {{$filterdata1}} At Port {{$filterdata}}</title>
                       <meta name="description" content="USA imports data under the HS code {{$searchDetails1}} form {{$filterdata1}} At Port {{$filterdata}} . Our US bill of lading data reports, which include HS code, date, b/l number, product description, loading and unloading ports, us importer name, quantity, etc.">
                  @endif
               @elseif ($filterby1 == 'hs_code')
                   @php
                       $base_search = $search;
                   @endphp

               @elseif ($filterby1 == 'unloading_port')
                   @if($filterby == 'hs_code')
                   
                   @elseif($filterby ==  'country')
                       <title>US HS code {{$searchDetails1}}  {{$role}} Data from {{$filterdata}} At  {{$filterdata1}}</title>
                       <meta name="description" content="USA imports data under the HS code {{$searchDetails1}} form {{$filterdata}} At  {{$filterdata1}} . Our US bill of lading data reports, which include HS code, date, b/l number, product description, loading and unloading ports, us importer name, quantity, etc.">
                   @elseif($filterby == 'unloading_port')
                       <title>US HS code {{$searchDetails1}}  {{$role}} Data from {{$filterdata}} At  {{$filterdata1}}</title>
                       <meta name="description" content="USA imports data under the HS code {{$searchDetails1}} form {{$filterdata}} At  {{$filterdata1}} . Our US bill of lading data reports, which include HS code, date, b/l number, product description, loading and unloading ports, us importer name, quantity, etc.">
                   @endif
               @endif
           @elseif (count($arg) == 8)
               @php
                   $unloading_port = str_ireplace(" ", "-", $unloading_port);
               @endphp
           
               @if ($filterby == 'hs_code')
                    <title>US HS code {{$searchDetails1}}  {{$role}} Data from {{$filterdata}} At  {{$filterdata1}}</title>
                    <meta name="description" content="USA imports data under the HS code {{$searchDetails1}} form {{$filterdata}} At {{$filterdata1}} . Our US bill of lading data reports, which include HS code, date, b/l number, product description, loading and unloading ports, us importer name, quantity, etc.">
               @elseif ($filterby == 'country')
                    <title>US HS code {{$searchDetails1}}  {{$role}} Data from {{$filterdata}} At  {{$filterdata1}}</title>
                    <meta name="description" content="USA imports data under the HS code {{$searchDetails1}} form {{$filterdata}} At {{$filterdata1}} . Our US bill of lading data reports, which include HS code, date, b/l number, product description, loading and unloading ports, us importer name, quantity, etc.">
               @elseif ($filterby == 'unloading_port')
                    <title>US HS code {{$searchDetails1}}  {{$role}} Data from {{$filterdata}} At  {{$filterdata1}}</title>
                    <meta name="description" content="USA imports data under the HS code {{$searchDetails1}} form {{$filterdata}} At {{$filterdata1}} . Our US bill of lading data reports, which include HS code, date, b/l number, product description, loading and unloading ports, us importer name, quantity, etc.">
               @endif
           @elseif (count($arg) == 10)
               @php
                   $unloading_port = str_ireplace(" ", "-", $unloading_port);
               @endphp
               @if ($filterby2 == 'hs_code')
                   {{-- Handle hs_code logic --}}
               @elseif ($filterby2 == 'country')
                   {{-- Handle country logic --}}
               @elseif ($filterby2 == 'unloading_port')
                   {{-- Handle unloading_port logic --}}
               @endif
           @else
               {{-- Handle else logic --}}
           @endif
       @else
           @if (count($args) == 6)
               {{-- Handle logic for count($args) == 6 --}}
           @elseif (count($args) == 8)
               @if ($filterby1 == 'country')
                   @php
                       $unloading_port = str_ireplace(" ", "-", $unloading_port);
                       $filterdata = str_ireplace(" ", "-", $filterdata);
                       $filterdata1 = str_ireplace(" ", "-", $filterdata1);
                   @endphp
                   @if($filterby = 'hs_code')
                       <title> USA {{$searchDetails1}} {{$role}}s data  under the HS code {{$filterdata}} from {{$filterdata1}}</title>
                       <meta name="description" content="USA {{$searchDetails1}} {{$role}}s data  under the HS code {{$filterdata}} from {{$filterdata1}}
                        Our bill of lading reports, which include hs code, date, b/l number, product description, loading and unloading ports, us {{$role}}er name, quantity, etc.">
                       
                   @elseif($filterby = 'unloading_port')
                       <title> USA {{$searchDetails1}} {{$role}}s data  at {{$filterdata}} from {{$filterdata1}}</title>
                       <meta name="description" content="USA {{$searchDetails1}} {{$role}}s data  at {{$filterdata}} from {{$filterdata1}}
                        Our bill of lading reports, which include hs code, date, b/l number, product description, loading and unloading ports, us {{$role}}er name, quantity, etc.">
                   @endif

               @elseif ($filterby1 == 'hs_code')
                   @php
                       $base_search = $search;
                   @endphp
                   <title> USA {{$searchDetails1}} {{$role}}s data  under the HS code {{$filterdata}} from {{$filterdata1}}</title>
                   <meta name="description" content="USA {{$searchDetails1}} {{$role}}s data  under the HS code {{$filterdata}} from {{$filterdata1}}
                    Our bill of lading reports, which include hs code, date, b/l number, product description, loading and unloading ports, us {{$role}}er name, quantity, etc.">
               @elseif ($filterby1 == 'unloading_port')
                   @php
                       $base_search = $search;
                       $unloading_port = str_ireplace(" ", "-", $unloading_port);
                       $filterdata1 = str_ireplace(" ", "-", $filterdata1);
                   @endphp
                   @if($filterby=='hs_code')
                       <title>USA {{$searchDetails1}} {{$role}}s data  under HS code {{$filterdata}} At {{$filterdata1}} </title>
                       <meta name="description" content="USA {{$searchDetails1}} {{$role}}s data  under HS code {{$filterdata}} At {{$filterdata1}} Our bill of lading reports, which include hs code, date, b/l number, product description, loading and unloading ports, us {{$role}}er name, quantity, etc.">
                   @else
                       <title>USA {{$searchDetails1}} {{$role}}s data from {{$filterdata}} At {{$filterdata1}} </title>
                       <meta name="description" content="USA {{$searchDetails1}} {{$role}}s data  from {{$filterdata}} At {{$filterdata1}} Our bill of lading reports, which include hs code, date, b/l number, product description, loading and unloading ports, us {{$role}}er name, quantity, etc.">
                   @endif

               @endif
           @elseif (count($arg) == 8)
               @php
                   $unloading_port = str_ireplace(" ", "-", $unloading_port);
               @endphp
               @if ($filterby2 == 'country')
                   {{-- Handle country logic --}}
               @elseif ($filterby2 == 'unloading_port')
                   @php
                       $base_search = $search;
                       $unloading_port = str_ireplace(" ", "-", $unloading_port);
                   @endphp
               @endif
           @elseif (count($arg) == 10)
               @php
                   $unloading_port = str_ireplace(" ", "-", $unloading_port);
               @endphp
               @if ($filterby2 == 'hs_code')
                   {{-- Handle hs_code logic --}}
               @elseif ($filterby2 == 'country')
                   @php
                       $filterdata = str_ireplace(" ", "-", $filterdata);
                       $filterdata1 = str_ireplace(" ", "-", $filterdata1);
                   @endphp
               @elseif ($filterby2 == 'unloading_port')
                   @php
                       $filterdata = str_ireplace(" ", "-", $filterdata);
                       $filterdata1 = str_ireplace(" ", "-", $filterdata1);
                   @endphp
               @endif
           @else
               @php
                   $country_url = route('search-filter-two', ['type' => $type, 'role' => $role, 'search' => $search, 'searchDetails1' => $searchDetails1, 'filterby2' => 'country', 'filterby' => $filterby, 'filter' => $filterdata, 'filterby1' => $filterby1, 'filterdata' => $filterdata1, 'filterdata1' => $country ?? "null"]);
               @endphp
           @endif
       @endif
   @endforeach
@endif
<title>Filter Search - US Import Data</title>
<!------------------------------Meta Tags End---------------------------------->
</head>
<body>
    @include('frontend.header')

    {{-- Breadcrumb --}}
    <div class="mx-auto max-w-screen-xl">
        <nav class="flex px-5 pt-24 lg:pt-24 md:pt-28 pb-4 text-gray-700 bg-white" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path 
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"
                            />
                        </svg>
                        Home
                    </a>
                </li>
                <li class="inline-flex items-center">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <a href="/search-live-data" class="line-clamp-1 ms-1 text-sm font-medium text-gray-900 hover:text-blue-600 md:ms-2">
                            Search Live Data
                        </a>
                    </div>
                </li>
                <li class="inline-flex items-center" aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="line-clamp-1 ms-1 text-sm font-medium text-gray-500 md:ms-2 capitalize">
                            @if ($desc)
                                {{ $desc }}&nbsp;{{ $role }} Live Data
                            @else
                                {{ $role }} Live Data
                            @endif
                        </span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>

    {{-- search bar --}}
    <section class="animate-text bg-gradient-to-r from-glory-red via-fuchsia-600 to-glory-blue">
        <div class="mx-auto max-w-screen-xl px-5 md:px-12 lg:px-5 py-16">
            <div class="px-5 mb-12">
                @php
                    $args = $args ?? [];
                    $arg = $arg ?? [];
                    //dd($filterby,$filterby1,$args,$searchDetails1,$arg);
                    $searchDetailsParts = explode(',', $searchDetails1);
                    $all_numeric = true;
        
                    foreach ($searchDetailsParts as $part) {
                        if (!is_numeric($part)) {
                            $all_numeric = false;
                            break;
                        }
                    }
                @endphp
        
                @if ($all_numeric)
                    @php
                        $filterdata = str_ireplace("-", " ", $filterdata);
                        $filterdata1 = str_ireplace("-", " ", $filterdata1);
                        $unloading_port = str_ireplace("-", " ", $unloading_port);
                    @endphp
        
                    @if (count($args) == 6)
                        @if ($filterby1 == 'hs_code')
                            {{-- Handle hs_code logic --}}
                        @elseif ($filterby1 == 'unloading_port')
                            @if($filterby == 'hs_code')
                                 @if($role == 'import')
                                    <h1 class="mb-3 text-center text-white font-medium text-2xl lg:text-4xl uppercase" style="word-break:break-all;">
                                        US {{ $role }} Data at port {{$filterdata1}} by the HS Code {{$searchDetails1}}
                                    </h1>
                                    <p class="mb-3 text-center text-gray-200 font-normal text-md lg:text-lg" style="word-break:break-all;">
                                        Search live USA {{ $role }}s Data at port {{$filterdata1}} by the hs code {{$searchDetails1}} and understand what commodities USA {{ $role }}s at port {{$filterdata1}} under this HS Code
                                    </p>
                                 @elseif($role == 'export')
                                    <h1 class="mb-3 text-center text-white font-medium text-2xl lg:text-4xl uppercase" style="word-break:break-all;">
                                        US {{ $role }} Data at port {{$filterdata1}} by the HS Code {{$searchDetails1}}
                                    </h1>
                                    <p class="mb-3 text-center text-gray-200 font-normal text-md lg:text-lg" style="word-break:break-all;">
                                        Search live USA {{ $role }}s Data at port {{$filterdata1}} by the hs code {{$searchDetails1}} and understand what commodities USA {{ $role }}s at port {{$filterdata1}} under this HS Code
                                    </p>
                                 @endif
                            @elseif($filterby=='country')
                                <title>US HS code {{$searchDetails1}}  {{$role}} Data from {{$filterdata}} At Port {{$filterdata1}}</title>
                                <meta name="description" content="USA imports data under the HS code {{$searchDetails1}} form {{$filterdata}} At Port {{$filterdata1}} . Our US bill of lading data reports, which include HS code, date, b/l number, product description, loading and unloading ports, us importer name, quantity, etc.">
                            @endif
                        @elseif ($filterby1 == 'country')
                            @if($filterby == 'hs_code')
                                 @if($role == 'import')
                                    <h1 class="mb-3 text-center text-white font-medium text-2xl lg:text-4xl uppercase" style="word-break:break-all;">
                                        US {{ $role }} Data from {{$filterdata1}} by the HS Code {{$searchDetails1}}
                                    </h1>
                                    <p class="mb-3 text-center text-gray-200 font-normal text-md lg:text-lg" style="word-break:break-all;">
                                        Search live USA {{ $role }}s Data from {{$filterdata1}} by the hs code {{$searchDetails1}} and understand what commodities USA {{ $role }}s from {{$filterdata1}} under this HS Code
                                    </p>
                                 @elseif($role == 'export')
                                    <h1 class="mb-3 text-center text-white font-medium text-2xl lg:text-4xl uppercase" style="word-break:break-all;">
                                        US {{ $role }} Data to {{$filterdata1}} by the HS Code {{$searchDetails1}}
                                    </h1>
                                    <p class="mb-3 text-center text-gray-200 font-normal text-md lg:text-lg" style="word-break:break-all;">
                                        Search live USA {{ $role }}s Data to {{$filterdata1}} by the hs code {{$searchDetails1}} and understand what commodities USA {{ $role }}s to {{$filterdata1}} under this HS Code
                                    </p>
                                 @endif
                            @elseif($filterby=='unloading_port')
                                <title> USA HS Code {{$filterdata}} {{$role}} data from {{$filterdata1}} </title>
                                <meta name="description" content="USA {{$role}}s data under the HS code {{$filterdata}} form {{$filterdata1}} .  Our bill of lading reports, which include hs code, date, b/l number, product description, loading and unloading ports, us {{$role}}er name, quantity, etc.">
                            @endif
                        @endif
                    @elseif (count($args) == 8)
                        @if ($filterby1 == 'country')
     
                           @if($filterby == 'unloading_port')
                                 @if($role == 'import')
                                    <h1 class="mb-3 text-center text-white font-medium text-2xl lg:text-4xl uppercase" style="word-break:break-all;">
                                        US {{ $role }} Data from {{$filterdata1}} At port {{$filterdata}} by the HS Code {{$searchDetails1}}
                                    </h1>
                                    <p class="mb-3 text-center text-gray-200 font-normal text-md lg:text-lg" style="word-break:break-all;">
                                        Search Live US {{ $role }}s Data from {{$filterdata1}} at port {{$filterdata}} and Understand what Commodities USA {{ $role }}s from {{$filterdata1}} at port {{$filterdata}} under this HS Code
                                    </p>
                                 @elseif($role == 'export')
                                    <h1 class="mb-3 text-center text-white font-medium text-2xl lg:text-4xl uppercase" style="word-break:break-all;">
                                        US {{ $role }} Data to {{$filterdata1}} At port {{$filterdata}} by the HS Code {{$searchDetails1}}
                                    </h1>
                                    <p class="mb-3 text-center text-gray-200 font-normal text-md lg:text-lg" style="word-break:break-all;">
                                        Search Live US {{ $role }}s Data to {{$filterdata1}} at port {{$filterdata}} and Understand what Commodities USA {{ $role }}s to {{$filterdata1}} At port {{$filterdata}} under this HS Code
                                    </p>
                                 @endif
                           @endif
                        @elseif ($filterby1 == 'hs_code')
                            @if($filterby == 'hs_code')
                                @if($role == 'import')
                                    <h1 class="mb-3 text-center text-white font-medium text-2xl lg:text-4xl uppercase" style="word-break:break-all;">
                                        US {{ $role }} Data from {{$filterdata}} At port {{$filterdata1}} by the HS Code {{$searchDetails1}}
                                    </h1>
                                    <p class="mb-3 text-center text-gray-200 font-normal text-md lg:text-lg" style="word-break:break-all;">
                                        Search Live US {{ $role }}s Data from {{$filterdata}} at port {{$filterdata1}} and Understand what Commodities USA {{ $role }}s from {{$filterdata}} at port {{$filterdata1}} under this HS Code
                                    </p>
                                @elseif($role == 'export')
                                    <h1 class="mb-3 text-center text-white font-medium text-2xl lg:text-4xl uppercase" style="word-break:break-all;">
                                        US {{ $role }} Data to {{$filterdata}} At port {{$filterdata1}} by the HS Code {{$searchDetails1}}
                                    </h1>
                                    <p class="mb-3 text-center text-gray-200 font-normal text-md lg:text-lg" style="word-break:break-all;">
                                        Search Live US {{ $role }}s Data to {{$filterdata}} at port {{$filterdata1}} and Understand what Commodities USA {{ $role }}s to {{$filterdata}} At port {{$filterdata1}} under this HS Code
                                    </p>
                                @endif
                            @elseif($filterby ==  'unloading_port')
                                 @if($role == 'import')
                                    <h1 class="mb-3 text-center text-white font-medium text-2xl lg:text-4xl uppercase" style="word-break:break-all;">
                                        US {{ $role }} Data from {{$filterdata}} At port {{$filterdata1}} by the HS Code {{$searchDetails1}}
                                    </h1>
                                    <p class="mb-3 text-center text-gray-200 font-normal text-md lg:text-lg" style="word-break:break-all;">
                                        Search Live US {{ $role }}s Data from {{$filterdata}} at port {{$filterdata1}} and Understand what Commodities USA {{ $role }}s from {{$filterdata}} at port {{$filterdata1}} under this HS Code
                                    </p>
                                 @elseif($role == 'export')
                                    <h1 class="mb-3 text-center text-white font-medium text-2xl lg:text-4xl uppercase" style="word-break:break-all;">
                                        US {{ $role }} Data to {{$filterdata}} At port {{$filterdata1}} by the HS Code {{$searchDetails1}}
                                    </h1>
                                    <p class="mb-3 text-center text-gray-200 font-normal text-md lg:text-lg" style="word-break:break-all;">
                                        Search Live US {{ $role }}s Data to {{$filterdata}} at port {{$filterdata1}} and Understand what Commodities USA {{ $role }}s to {{$filterdata}} At port {{$filterdata1}} under this HS Code
                                    </p>
                                 @endif
                            @endif
    
                        @elseif ($filterby1 == 'unloading_port')
                            @if($filterby == 'hs_code')
                            
                            @elseif($filterby ==  'country')
                                 @if($role == 'import')
                                    <h1 class="mb-3 text-center text-white font-medium text-2xl lg:text-4xl uppercase" style="word-break:break-all;">
                                        US {{ $role }} Data from {{$filterdata}} At port {{$filterdata1}} by the HS Code {{$searchDetails1}}
                                    </h1>
                                    <p class="mb-3 text-center text-gray-200 font-normal text-md lg:text-lg" style="word-break:break-all;">
                                        Search Live US {{ $role }}s Data from {{$filterdata}} at port {{$filterdata1}} and Understand what Commodities USA {{ $role }}s from {{$filterdata}} at port {{$filterdata1}} under this HS Code
                                    </p>
                                 @elseif($role == 'export')
                                    <h1 class="mb-3 text-center text-white font-medium text-2xl lg:text-4xl uppercase" style="word-break:break-all;">
                                        US {{ $role }} Data to {{$filterdata}} At port {{$filterdata1}} by the HS Code {{$searchDetails1}}
                                    </h1>
                                    <p class="mb-3 text-center text-gray-200 font-normal text-md lg:text-lg" style="word-break:break-all;">
                                        Search Live US {{ $role }}s Data to {{$filterdata}} at port {{$filterdata1}} and Understand what Commodities USA {{ $role }}s to {{$filterdata}} At port {{$filterdata1}} under this HS Code
                                    </p>
                                 @endif
                            @elseif($filterby == 'unloading_port')
                                <title>US HS code {{$searchDetails1}}  {{$role}} Data from {{$filterdata}} At  {{$filterdata1}}</title>
                                <meta name="description" content="USA imports data under the HS code {{$searchDetails1}} form {{$filterdata}} At  {{$filterdata1}} . Our US bill of lading data reports, which include HS code, date, b/l number, product description, loading and unloading ports, us importer name, quantity, etc.">
                            @endif
                        @endif
                    @elseif (count($arg) == 8)
                        @php
                            $unloading_port = str_ireplace(" ", "-", $unloading_port);
                        @endphp
                        
                        @if ($filterby2 == 'hs_code')
                             <title>US HS code {{$searchDetails1}}  {{$role}} Data from {{$filterdata}} At  {{$filterdata1}}</title>
                             <meta name="description" content="USA imports data under the HS code {{$searchDetails1}} form {{$filterdata}} At {{$filterdata1}} . Our US bill of lading data reports, which include HS code, date, b/l number, product description, loading and unloading ports, us importer name, quantity, etc.">
                        @elseif ($filterby2 == 'country')
                            @if($filterby1 == 'hs_code')
                                
                            @elseif($filterby1 == 'unloading_port')
                                @if($role == 'import')
                                    <h1 class="mb-3 text-center text-white font-medium text-2xl lg:text-4xl uppercase" style="word-break:break-all;">
                                        US {{ $role }} Data from {{$filterdata1}} At Port {{$filterdata}} by the HS Code {{$searchDetails1}}
                                    </h1>
                                    <p class="mb-3 text-center text-gray-200 font-normal text-md lg:text-lg" style="word-break:break-all;">
                                        Search Live US {{ $role }}s Data from {{$filterdata1}} at port {{$filterdata}} and Understand what Commodities USA imports from {{$filterdata1}} At port {{$filterdata}} under this HS Code
                                    </p>
                                @elseif($role == 'export')
                                    <h1 class="mb-3 text-center text-white font-medium text-2xl lg:text-4xl uppercase" style="word-break:break-all;">
                                         US {{ $role }} Data to {{$filterdata1}} At Port {{$filterdata}} by the HS Code {{$searchDetails1}}
                                    </h1>
                                    <p class="mb-3 text-center text-gray-200 font-normal text-md lg:text-lg" style="word-break:break-all;">
                                        Search Live US {{ $role }}s Data to {{$filterdata1}} at port {{$filterdata}} and Understand what Commodities USA {{ $role }}s to {{$filterdata1}} At port {{$filterdata}} under this HS Code
                                    </p>
                                @endif
                             @endif
                        @elseif ($filterby2 == 'unloading_port')
                             @if($filterby1 == 'hs_code')
                                
                             @elseif($filterby1 == 'country')
                                @if($role == 'import')
                                    <h1 class="mb-3 text-center text-white font-medium text-2xl lg:text-4xl uppercase" style="word-break:break-all;">
                                        US {{ $role }} Data from {{$filterdata}} At Port by the HS Code {{$searchDetails1}}
                                    </h1>
                                    <p class="mb-3 text-center text-gray-200 font-normal text-md lg:text-lg" style="word-break:break-all;">
                                        Search Live US {{ $role }}s Data from {{$filterdata}} at port {{$filterdata1}} and Understand what Commodities USA imports from {{$filterdata}} At port {{$filterdata1}} under this HS Code
                                    </p>
                                @elseif($role == 'export')
                                    <h1 class="mb-3 text-center text-white font-medium text-2xl lg:text-4xl uppercase" style="word-break:break-all;">
                                         US {{ $role }} Data to {{$filterdata}} At Port {{$filterdata1}} by the HS Code {{$searchDetails1}}
                                    </h1>
                                    <p class="mb-3 text-center text-gray-200 font-normal text-md lg:text-lg" style="word-break:break-all;">
                                        Search Live US {{ $role }}s Data to {{$filterdata}} at port {{$filterdata1}} and Understand what Commodities USA {{ $role }}s to {{$filterdata}} At port {{$filterdata1}} under this HS Code
                                    </p>
                                @endif
                             @endif
                        @endif
                    @elseif (count($arg) == 10)
                        @php
                            $unloading_port = str_ireplace(" ", "-", $unloading_port);
                        @endphp
                        @if ($filterby2 == 'hs_code')
                            {{-- Handle hs_code logic --}}
                        @elseif ($filterby2 == 'country')
                            {{-- Handle country logic --}}
                        @elseif ($filterby2 == 'unloading_port')
                            {{-- Handle unloading_port logic --}}
                        @endif
                    @else
                        {{-- Handle else logic --}}
                    @endif
                @else
                    @if (count($args) == 6)
                        {{-- Handle logic for count($args) == 6 --}}
                    @elseif (count($args) == 8)
                        @if ($filterby1 == 'country')
                            @php
                                $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                $filterdata = str_ireplace(" ", "-", $filterdata);
                                $filterdata1 = str_ireplace(" ", "-", $filterdata1);
                            @endphp
                            @if($filterby = 'hs_code')
                                <title> USA {{$searchDetails1}} {{$role}}s data  under the HS code {{$filterdata}} from {{$filterdata1}}</title>
                                <meta name="description" content="USA {{$searchDetails1}} {{$role}}s data  under the HS code {{$filterdata}} from {{$filterdata1}}
                                 Our bill of lading reports, which include hs code, date, b/l number, product description, loading and unloading ports, us {{$role}}er name, quantity, etc.">
                                
                            @elseif($filterby = 'unloading_port')
                                <title> USA {{$searchDetails1}} {{$role}}s data  at {{$filterdata}} from {{$filterdata1}}</title>
                                <meta name="description" content="USA {{$searchDetails1}} {{$role}}s data  at {{$filterdata}} from {{$filterdata1}}
                                 Our bill of lading reports, which include hs code, date, b/l number, product description, loading and unloading ports, us {{$role}}er name, quantity, etc.">
                            @endif
    
                        @elseif ($filterby1 == 'hs_code')
                            @php
                                $base_search = $search;
                            @endphp
                            <title> USA {{$searchDetails1}} {{$role}}s data  under the HS code {{$filterdata}} from {{$filterdata1}}</title>
                            <meta name="description" content="USA {{$searchDetails1}} {{$role}}s data  under the HS code {{$filterdata}} from {{$filterdata1}}
                             Our bill of lading reports, which include hs code, date, b/l number, product description, loading and unloading ports, us {{$role}}er name, quantity, etc.">
                        @elseif ($filterby1 == 'unloading_port')
                            @php
                                $base_search = $search;
                                $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                $filterdata1 = str_ireplace(" ", "-", $filterdata1);
                            @endphp
                            @if($filterby=='hs_code')
                                <title>USA {{$searchDetails1}} {{$role}}s data  under HS code {{$filterdata}} At {{$filterdata1}} </title>
                                <meta name="description" content="USA {{$searchDetails1}} {{$role}}s data  under HS code {{$filterdata}} At {{$filterdata1}} Our bill of lading reports, which include hs code, date, b/l number, product description, loading and unloading ports, us {{$role}}er name, quantity, etc.">
                            @else
                                <title>USA {{$searchDetails1}} {{$role}}s data from {{$filterdata}} At {{$filterdata1}} </title>
                                <meta name="description" content="USA {{$searchDetails1}} {{$role}}s data  from {{$filterdata}} At {{$filterdata1}} Our bill of lading reports, which include hs code, date, b/l number, product description, loading and unloading ports, us {{$role}}er name, quantity, etc.">
                            @endif
    
                        @endif
                    @elseif (count($arg) == 8)
                        @php
                            $unloading_port = str_ireplace(" ", "-", $unloading_port);
                        @endphp
                        @if ($filterby2 == 'country')
                            {{-- Handle country logic --}}
                        @elseif ($filterby2 == 'unloading_port')
                            @php
                                $base_search = $search;
                                $unloading_port = str_ireplace(" ", "-", $unloading_port);
                            @endphp
                        @endif
                    @elseif (count($arg) == 10)
                        @php
                            $unloading_port = str_ireplace(" ", "-", $unloading_port);
                        @endphp
                        @if ($filterby2 == 'hs_code')
                            {{-- Handle hs_code logic --}}
                        @elseif ($filterby2 == 'country')
                            @php
                                $filterdata = str_ireplace(" ", "-", $filterdata);
                                $filterdata1 = str_ireplace(" ", "-", $filterdata1);
                            @endphp
                        @elseif ($filterby2 == 'unloading_port')
                            @php
                                $filterdata = str_ireplace(" ", "-", $filterdata);
                                $filterdata1 = str_ireplace(" ", "-", $filterdata1);
                            @endphp
                        @endif
                    @else
                        @php
                            $country_url = route('search-filter-two', ['type' => $type, 'role' => $role, 'search' => $search, 'searchDetails1' => $searchDetails1, 'filterby2' => 'country', 'filterby' => $filterby, 'filter' => $filterdata, 'filterby1' => $filterby1, 'filterdata' => $filterdata1, 'filterdata1' => $country ?? "null"]);
                        @endphp
                    @endif
                @endif
            </div>
            {{-- forms --}}
            <div class="px-5 flex justify-center items-center">
                <form class="max-w-6xl mx-auto" method="GET" action="{{ route('product.list') }}" enctype="multipart/form-data">
                    @csrf
                    @if($type == 'data')
                        <div class="mb-6">
                            <ul class="grid w-full gap-2 grid-cols-2 md:grid-cols-2">
                                <li class="flex justify-end items-center text-center">
                                    <input checked type="radio" id="hosting-small" name="type" value="data" class="hidden peer" required />
                                    <label for="hosting-small" class="inline-flex items-center w-3/4 p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white hover:border-blue-600 hover:text-white hover:bg-blue-600">                           
                                        <div class="w-full text-md font-semibold">Data</div>
                                    </label>
                                </li>
                                <li class="flex justify-start items-center text-center">
                                    <input type="radio" id="hosting-big" name="type" value="company" class="hidden peer">
                                    <label for="hosting-big" class="inline-flex items-center w-3/4 p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white hover:border-blue-600 hover:text-white hover:bg-blue-600">
                                        <div class="w-full text-md font-semibold">Company</div>
                                    </label>
                                </li>
                            </ul>            
                        </div>

                        @elseif($type == 'company')
                        <div class="mb-6">
                            <ul class="grid w-full gap-2 grid-cols-2 md:grid-cols-2">
                                <li class="flex justify-end items-center text-center">
                                    <input type="radio" id="hosting-small" name="type" value="data" class="hidden peer" required />
                                    <label for="hosting-small" class="inline-flex items-center w-3/4 p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white hover:border-blue-600 hover:text-white hover:bg-blue-600">                           
                                        <div class="w-full text-md font-semibold">Data</div>
                                    </label>
                                </li>
                                <li class="flex justify-start items-center text-center">
                                    <input checked type="radio" id="hosting-big" name="type" value="company" class="hidden peer">
                                    <label for="hosting-big" class="inline-flex items-center w-3/4  p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white hover:border-blue-600 hover:text-white hover:bg-blue-600">
                                        <div class="w-full text-md font-semibold">Company</div>
                                    </label>
                                </li>
                            </ul>            
                        </div>

                        @else 
                        <div class="mb-6">
                            <ul class="grid w-full gap-2 grid-cols-2 md:grid-cols-2">
                                <li class="flex justify-end items-center text-center">
                                    <input checked type="radio" id="hosting-small" name="type" value="data" class="hidden peer" required />
                                    <label for="hosting-small" class="inline-flex items-center w-3/4 p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white hover:border-blue-600 hover:text-white hover:bg-blue-600">                           
                                        <div class="w-full text-md font-semibold">Data</div>
                                    </label>
                                </li>
                                <li class="flex justify-start items-center text-center">
                                    <input type="radio" id="hosting-big" name="type" value="company" class="hidden peer">
                                    <label for="hosting-big" class="inline-flex items-center w-3/4  p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white hover:border-blue-600 hover:text-white hover:bg-blue-600">
                                        <div class="w-full text-md font-semibold">Company</div>
                                    </label>
                                </li>
                            </ul>            
                        </div>
                    @endif

                    <div class="grid grid-cols-2 lg:flex">
                        <select required name="role" id="large-input"  class="block w-full p-6 text-base text-gray-900 border border-gray-300 rounded-none lg:rounded-l-lg focus:ring-blue-500 focus:border-blue-500">
                            <option selected value="import">Import</option>
                            <option value="export">Export</option>
                        </select>
                        <input name="hs_code" type="text" id="large-input" class="block w-full p-6 text-base text-gray-900 border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="HS Code"/>
                        <input name="description" type="text" id="large-input" class="block w-full p-6 text-base text-gray-900 border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Description"/>
                        <button type="submit" class="text-white bg-blue-600 hover:bg-white hover:text-blue-600 font-medium rounded-none lg:rounded-r-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                            Search
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    {{-- End of search bar --}}

    {{--  ($type) --}}
     @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
   
    @if($type == 'data')
        {{-- Table Of desktop, Laptop & Tab View --}}
        <section class="bg-white py-12 hidden md:block lg:block">
            @if($role == 'import')
                {{-- Filter By Option --}}
                <div class="grid grid-cols-1 gap-4 lg:grid-cols-8 mb-8 px-5">
                    <div class="col-span-4 lg:col-span-2 flex items-center justify-center lg:justify-end">
                        <h1 class="text-end text-2xl font-medium">Filter By:</h1>
                    </div>
                    <div class="col-span-5">
                        {{-- @dd($filterby,$filterby1) --}}
  
                        {{-- @dd('HS Code',$hscode) --}}
                         {{-- @dd($desc) --}}
                         
                        <form action="">
                            <div class="grid gap-6 px-2 lg:px-5 grid-cols-1 md:grid-cols-3">
                                <div>
                                    <div class="relative text-center z-0 w-full mb-5 lg:mb-0 group">
                                        <label class="mb-2 text-sm font-medium">
                                            Choose HS Code
                                        </label>
                                      @php
                                            $args = $args??[];
                                            $arg = $arg??[];
                                      @endphp
                                        <select id="large-2" class="block w-full px-4 py-3 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
                                            <option selected>Choose HS Code</option>
                                            @php
                                                $SelectResult = $result;
                                            @endphp

                                            @if(isset($SelectResult) && $SelectResult->count() > 0)
                                                @foreach ($result as $SelectResult)
                                                      @if(count($args)==6)
                                                            @if ($searchDetails1)
                                                                <option value="{{route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'hs_code','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $SelectResult->HS_CODE?? '0'])}}">
                                                                    {{ $SelectResult->HS_CODE }}
                                                                </option>
                                                            @else
                                                                <option value="{{route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'hs_code','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $SelectResult->HS_CODE?? '0'])}}">
                                                                    {{ $SelectResult->HS_CODE }}
                                                                </option>
                                                            @endif
                                                      @elseif(count($args)==8)
                                                            @if ($searchDetails1)
                                                                <option value="{{route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1,'searchDetails' => $hscode??'null', 'filterby2' => 'hs_code','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $SelectResult->HS_CODE?? '0'])}}">
                                                                    {{ $SelectResult->HS_CODE }}
                                                                </option>
                                                            @else
                                                                <option value="{{route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1,'searchDetails' => $desc??'null', 'filterby2' => 'hs_code','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $SelectResult->HS_CODE?? '0'])}}">
                                                                    {{ $SelectResult->HS_CODE }}
                                                                </option>
                                                            @endif
                                                      @elseif(count($arg)==8)
                                                            @if ($searchDetails1)
                                                                <option value="{{route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1,'searchDetails' => $hscode??'null', 'filterby2' => 'hs_code','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $SelectResult->HS_CODE?? '0'])}}">
                                                                    {{ $SelectResult->HS_CODE }}
                                                                </option>
                                                            @else
                                                                <option value="{{route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1,'searchDetails' => $desc??'null', 'filterby2' => 'hs_code','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $SelectResult->HS_CODE?? '0'])}}">
                                                                    {{ $SelectResult->HS_CODE }}
                                                                </option>
                                                            @endif
                                                      @elseif(count($arg)==10)
                                                            @if ($searchDetails1)
                                                                <option value="{{route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1,'searchDetails' => $hscode??'null', 'filterby2' => 'hs_code','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $SelectResult->HS_CODE?? '0'])}}">
                                                                    {{ $SelectResult->HS_CODE }}
                                                                </option>
                                                            @else
                                                                <option value="{{route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1,'searchDetails' => $desc??'null', 'filterby2' => 'hs_code','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $SelectResult->HS_CODE?? '0'])}}">
                                                                    {{ $SelectResult->HS_CODE }}
                                                                </option>
                                                            @endif
                                                    @endif
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div> 
                                <div>
                                    <div class="relative text-center z-0 w-full mb-5 lg:mb-0 group">
                                        <label class="mb-2 text-sm font-medium">
                                            Choose Origin Country
                                        </label>
                                        <select id="large-1" class="block w-full px-4 py-3 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
                                            <option selected>Choose Origin Country</option>
                                            @php
                                                $SelectResult = $result;
                                            @endphp
                                            @if(isset($SelectResult) && $SelectResult->count() > 0)
                                                @foreach ($result as $SelectResult)

                                                      @if(count($args)==6)
                                                            @if ($searchDetails1)
                                                                <option value="{{route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'hs_code','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' =>  $SelectResult->ORIGIN_COUNTRY ?? '0'])}}">
                                                                    {{ $SelectResult->ORIGIN_COUNTRY }}
                                                                </option>
                                                            @else
                                                                <option value="{{route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'hs_code','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' =>  $SelectResult->ORIGIN_COUNTRY ?? '0'])}}">
                                                                    {{ $SelectResult->ORIGIN_COUNTRY }}
                                                                </option>
                                                            @endif
                                                      @elseif(count($args)==8)
                                                            @if ($hscode)
                                                                <option value="{{route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1,'searchDetails' => $hscode??'null', 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $SelectResult->ORIGIN_COUNTRY])}}">
                                                                    {{ $SelectResult->ORIGIN_COUNTRY }}
                                                                </option>
                                                                @else
                                                                <option value="{{route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1,'searchDetails' => $desc??'null', 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1,'filterdata1' => $SelectResult->ORIGIN_COUNTRY])}}">
                                                                    {{ $SelectResult->ORIGIN_COUNTRY }}
                                                                </option>
                                                            @endif
                                                      @elseif(count($arg)==8)
                                                            @if ($hscode)
                                                                <option value="{{route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1,'searchDetails' => $hscode??'null', 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $SelectResult->ORIGIN_COUNTRY])}}">
                                                                    {{ $SelectResult->ORIGIN_COUNTRY }}
                                                                </option>
                                                                @else
                                                                <option value="{{route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1,'searchDetails' => $desc??'null', 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1,'filterdata1' => $SelectResult->ORIGIN_COUNTRY])}}">
                                                                    {{ $SelectResult->ORIGIN_COUNTRY }}
                                                                </option>
                                                            @endif
                                                      @elseif(count($arg)==10)
                                                            @if ($hscode)
                                                                <option value="{{route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1,'searchDetails' => $hscode??'null', 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $SelectResult->ORIGIN_COUNTRY])}}">
                                                                    {{ $SelectResult->ORIGIN_COUNTRY }}
                                                                </option>
                                                                @else
                                                                <option value="{{route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1,'searchDetails' => $desc??'null', 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1,'filterdata1' => $SelectResult->ORIGIN_COUNTRY])}}">
                                                                    {{ $SelectResult->ORIGIN_COUNTRY }}
                                                                </option>
                                                            @endif
                                                    @endif
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <div class="relative text-center z-0 w-full mb-5 lg:mb-0 group">
                                        <label class="mb-2 text-sm font-medium">
                                            Choose Unloading Port
                                        </label>
                                        <select  id="large" class="block w-full px-4 py-3 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
                                            <option selected>Choose Unloading Port</option>
                                            @php
                                                $SelectResult = $result;
                                            @endphp
                                            @if(isset($SelectResult) && $SelectResult->count() > 0)
                                                @foreach ($result as $SelectResult)
                                                        @if(count($args)==6)
                                                            @if ($searchDetails1)
                                                                <option value="{{route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'hs_code','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' =>  $SelectResult->UNLOADING_PORT ?? '0'])}}">
                                                                    {{ $SelectResult->UNLOADING_PORT }}
                                                                </option>
                                                            @else
                                                                <option value="{{route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'hs_code','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' =>  $SelectResult->UNLOADING_PORT ?? '0'])}}">
                                                                    {{ $SelectResult->UNLOADING_PORT }}
                                                                </option>
                                                            @endif
                                                      @elseif(count($args)==8)
                                                           @if ($hscode)
                                                            <option value="{{route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1,'searchDetails' => $hscode??'null', 'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1 ,'filterdata1' => $SelectResult->UNLOADING_PORT??'default'])}}">
                                                                {{ $SelectResult->UNLOADING_PORT }}
                                                            </option>
                                                           @else
                                                               <option value="{{route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1,'searchDetails' => $desc??'null', 'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1,'filterdata1' => $SelectResult->UNLOADING_PORT??'Default'])}}">
                                                                    {{ $SelectResult->UNLOADING_PORT }}
                                                                </option>
                                                           @endif
                                                      @elseif(count($arg)==8)
                                                           @if ($hscode)
                                                                <option value="{{route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1,'searchDetails' => $hscode??'null', 'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1 ,'filterdata1' => $SelectResult->UNLOADING_PORT??'default'])}}">
                                                                    {{ $SelectResult->UNLOADING_PORT }}
                                                                </option>
                                                           @else
                                                               <option value="{{route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1,'searchDetails' => $desc??'null', 'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1,'filterdata1' => $SelectResult->UNLOADING_PORT??'Default'])}}">
                                                                    {{ $SelectResult->UNLOADING_PORT }}
                                                                </option>
                                                           @endif
                                                      @elseif(count($arg)==10)
                                                           @if ($hscode)
                                                                <option value="{{route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1,'searchDetails' => $hscode??'null', 'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1 ,'filterdata1' => $SelectResult->UNLOADING_PORT??'default'])}}">
                                                                    {{ $SelectResult->UNLOADING_PORT }}
                                                                </option>
                                                           @else
                                                               <option value="{{route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1,'searchDetails' => $desc??'null', 'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1,'filterdata1' => $SelectResult->UNLOADING_PORT??'Default'])}}">
                                                                    {{ $SelectResult->UNLOADING_PORT }}
                                                                </option>
                                                           @endif
                                                    @endif
                                                @endforeach
                                            @endif
                                        </select> 
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-span-1"></div>
                </div>
                {{-- toast --}}
                <div class="flex mx-auto mx-w-screen-xl px-5">
                    @if($filterby1=='hs_code')
                        <div id="toast-default" class="mb-4 mx-2 flex flex-wrap items-center w-[100%] max-w-sm p-3 text-gray-100 bg-glory-red rounded-xl shadow" role="alert">
                            <div class="ms-3 text-lg font-medium">
                                {{ $filterdata1 }}
                            </div>
                            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-glory-red text-gray-100 hover:text-gray-900 rounded-xl focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#toast-default" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                            </button>
                        </div>
                    @elseif($filterby1=='country')
                        <div id="toast-default" class="mb-4 mx-2 flex flex-wrap items-center w-[100%] max-w-sm p-3 text-gray-100 bg-glory-red rounded-xl shadow" role="alert">
                            <div class="ms-3 text-lg font-medium">
                                {{ $filterdata }}
                            </div>
                            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-glory-red text-gray-100 hover:text-gray-900 rounded-xl focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#toast-default" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                            </button>
                        </div>
                        <div id="toast-default" class="mb-4 mx-2 flex flex-wrap items-center w-[100%] max-w-sm p-3 text-gray-100 bg-glory-red rounded-xl shadow" role="alert">
                            <div class="ms-3 text-lg font-medium">
                                {{ $filterdata1 }}
                            </div>
                            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-glory-red text-gray-100 hover:text-gray-900 rounded-xl focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#toast-default" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                            </button>
                        </div>
                    @elseif($filterby1 == 'unloading_port')
                        <div id="toast-default" class="mb-4 mx-2 flex flex-wrap items-center w-[100%] max-w-sm p-3 text-gray-100 bg-glory-red rounded-xl shadow" role="alert">
                            <div class="ms-3 text-lg font-medium">
                                {{ $filterdata1 }}
                            </div>
                            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-glory-red text-gray-100 hover:text-gray-900 rounded-xl focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#toast-default" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                            </button>
                        </div>
                    @endif
                   
                </div>
                {{-- Import Table --}}
                <div class="mx-auto mx-w-screen-xl px-5 hidden md:block lg:block">
                    <div class="relative shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500" style="table-layout: fixed;">
                            <thead class="text-sm text-gray-700 uppercase bg-gray-200">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        HS Code
                                    </th>
                                    <th scope="col" class="px-6 py-3" colspan="2">
                                        Product Description 
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Origin Country
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Unloading Port
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Qty.
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Unit
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Weight
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Importer Name
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @dd($hscode) --}}
                                
                                @php
                                    $Dresult = $result;
                                @endphp

                                @if(isset($Dresult) && $Dresult->count() > 0)
                                    @foreach ($Dresult as $Dresult)
                                    {{-- @dd($searchDetails1) --}}
                                        @php
                                            $res_hs_code = $Dresult->HS_CODE;
                                            // dd($res_hs_code);
                                            $country = $Dresult->ORIGIN_COUNTRY;
                                            $country= str_ireplace(" ","-",$country);
                                            $unloading_port  = $Dresult->UNLOADING_PORT;
                                             $args = $args??[];
                                            // Hs code Url
                                            $arg = $arg??[];
                                            
                                            //dd($filterby1,$args,$searchDetails1,$arg);
                                             //dd($filterby,$filterby1,$args);
                                            $searchDetailsParts = explode(',', $searchDetails1);
                                            $all_numeric = true;
                                            
                                            foreach ($searchDetailsParts as $part) {
                                                if (!is_numeric($part)) {
                                                    $all_numeric = false;
                                                    break;
                                                }
                                            }
                                          
                                            if ($all_numeric) {
                                            
                                                # code...
                                                  $filterdata = str_ireplace(" ", "-", $filterdata);
                                                  $filterdata1 = str_ireplace(" ", "-", $filterdata1);
                                                  $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                                if(count($args)==6){
                                                
                                                     if($filterby1=='hs_code'){
                                                         $hs_code_url =  route('searchfilterone', ['type' => $type, 'role' => $role,'filterby1' => 'unloading_port','filterby'=>$filterby,'filterdata'=>$res_hs_code,'filterdata1' => $unloading_port]);
                                                         $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $Dresult->ORIGIN_COUNTRY]);
                                                         $port_url = route('searchfilterone', ['type' => $type, 'role' => $role,'filterby1' => 'unloading_port','filterby'=>$filterby,'filterdata'=>$searfilterdata,'filterdata1' => $unloading_port]);
                                                     }else if($filterby1=='unloading_port'){
                                                         //dd('In this Group');
                                                         $hs_code_url =  route('searchfilterone', ['type' => $type, 'role' => $role,'filterby1' => 'unloading_port','filterby'=>$filterby,'filterdata'=>$res_hs_code,'filterdata1' => $unloading_port]);
                                                         $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $Dresult->ORIGIN_COUNTRY]);
                                                         $port_url = route('searchfilterone', ['type' => $type, 'role' => $role,'filterby1' => 'unloading_port','filterby'=>$filterby,'filterdata'=>$searfilterdata,'filterdata1' => $unloading_port]);
                                                     }else if($filterby1=='country'){
                                                        // dd($filterby,$filterby1,$args,$filterdata);
                                                        $hs_code_url = route('searchfilterone', ['type' => $type, 'role' => $role,'filterby1' => 'country','filterby'=>$filterby,'filterdata'=>$res_hs_code,'filterdata1' => $country]);
                                                        $country_url = route('searchfilterone', ['type' => $type, 'role' => $role,'filterby1' => 'country','filterby'=>$filterby,'filterdata'=>$searfilterdata,'filterdata1' => $country]);
                                                        $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $country, 'filterdata1' => $unloading_port]);
                                                     }
                                                }
                                                else if(count($args)==8){
                                                
                                                      if($filterby1 == 'country'){
                                                        
                                                         //dd('In Country Args',$args,$filterby1,$filterby,$filterdata,$filterdata1,$search,$filterby1);
                                                         //Hs Code URl
                                                         $hs_code_url =  route('search-filter-one', ['type' => $type, 'role' => $role,'search'=>$search,'base_search'=>$res_hs_code??'null', 'filterby1' => $filterby1,'filterby'=>$filterby,'filterdata'=>$filterdata,'filterdata1' => $filterdata1??'null']);
                                                         
                                                         //Country Url
                                                         $country_url =  route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby1,'filterby'=>$search,'filter'=>$searchDetails1,'filterby1'=>$filterby,'filterdata' => $filterdata, 'filterdata1' => $country]);
                                                         
                                                         //Port Url
                                                         $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby1,'filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata, 'filterdata1' => $country]);
                                                         
                                                      }else if($filterby1 == 'hs_code'){
                                                           $base_search = $search;
                                                           $port_url = route('filter-two', [
                                                                'type' => $type, 
                                                                'role' => $role,
                                                                'search' => $base_search,
                                                                'searchDetails1' => $searchDetails1, 
                                                                'filterby2' => 'unloading_port',
                                                                'filterby' => $filterby,
                                                                'filter' => $filterdata,
                                                                'filterby1' => $filterby1,
                                                                'filterdata' => $filterdata1,
                                                                'filterdata1' => $unloading_port ?? 'Default'
                                                            ]);

                                                      }else if($filterby1 == 'unloading_port'){
                                                       
                                                            $base_search = $search;
                                                              //dd($filterby,$filterby1,$args);
                                                             $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                                             //Hs code Url
                                                             $hs_code_url =  route('search-filter-one', ['type' => $type, 'role' => $role,'search'=>$search,'base_search'=>$res_hs_code??'null', 'filterby1' => 'unloading_port','filterby'=>$filterby,'filterdata'=>$filterdata,'filterdata1' => $unloading_port??'null']);
                                                            
                                                             //Country Url
                                                             $country_url =  route('search-filter-one', ['type' => $type, 'role' => $role,'search'=>$search,'base_search'=>$searchDetails1, 'filterby1' => 'unloading_port','filterby'=>$filterby,'filterdata'=>$filterdata,'filterdata1' => $unloading_port??'null']);
                                                            
                                                            //Port Url 
                                                             $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                      }
                                                 }
                                                 else if(count($arg)==8){
                                                     $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                                     
                                                    if($filterby2 == 'hs_code'){
                                                       //Hs_code
                                                       $hs_code_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $country??"null"]);
                                                       //Country Url
                                                       $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata, 'filterdata1' => $Dresult->ORIGIN_COUNTRY]);
                                                       //Port Url
                                                       $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                    }else if($filterby2 == 'country'){
                                                       //dd($filterby,$filterby1,$arg,$filterby2,$search,$searchDetails1);
                                                       //$hs_code_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=> $filterby,'searchDetails1'=>$res_hs_code, 'filterby2' => 'country','filterby'=>$filterby1,'filter'=>$filterdata,'filterby1'=>$filterby2,'filterdata' => $filterdata1, 'filterdata1' => $country??"null"]);
                                                       $hs_code_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$res_hs_code,'filterby1'=>$filterby1,'filterdata' => $filterdata, 'filterdata1' => $Dresult->ORIGIN_COUNTRY]);
                                                       $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata, 'filterdata1' => $Dresult->ORIGIN_COUNTRY]);
                                                       $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $filterdata1??'default']);
                                                       
                                                     }else if($filterby2 == 'unloading_port'){
                                                        //Hs_code
                                                        $hs_code_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                        //Country url
                                                       $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                        //Port Url                                                           //Port Url 
                                                       $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                       
                                                     }
                                                  } else if(count($arg)==10){
                                                     $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                                      //dd($filterby,$filterby1,$arg,$filterby2);
                                                    if($filterby2 == 'hs_code'){
                                                       //Hs_code
                                                       $hs_code_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $country??"null"]);
                                                       //Country Url
                                                       $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata, 'filterdata1' => $Dresult->ORIGIN_COUNTRY]);
                                                       //Port Url
                                                       $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                    }else if($filterby2 == 'country'){
                                                       $hs_code_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $country??"null"]);
                                                       $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata, 'filterdata1' => $Dresult->ORIGIN_COUNTRY]);
                                                       $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                       
                                                     }else if($filterby2 == 'unloading_port'){
                                                        //Hs_code
                                                        $hs_code_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                        //Country url
                                                       $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                        //Port Url                                                           //Port Url 
                                                       $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                       
                                                     }
                                                  }
                                                else{
                                                      $country_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $Dresult->ORIGIN_COUNTRY]);
                                                  }
                                                // $country_url = route('search-filter', ['type' => $type, 'role' => $role,'searchDetails' => $hscode, 'filterby' => 'country', 'filterdata' => $country]);
                                            }else{
                                                //dd('IN Else Block',$filterby,$filterby1,$args);
                                                if(count($args)==6){
                                                         $hs_code_url =  route('searchfilterone', ['type' => $type, 'role' => $role,'filterby1' => 'unloading_port','filterby'=>$filterby,'filterdata'=>$res_hs_code,'filterdata1' => $unloading_port]);
                                                         $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $Dresult->ORIGIN_COUNTRY]);
                                                         $port_url = route('searchfilterone', ['type' => $type, 'role' => $role,'filterby1' => 'unloading_port','filterby'=>$filterby,'filterdata'=>$searfilterdata,'filterdata1' => $unloading_port]);
                                                     if($filterby1=='unloading_port'){
                                                         $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $Dresult->ORIGIN_COUNTRY]);
                                                     }else if($filterby1=='country'){
                                                        $country_url = route('searchfilterone', ['type' => $type, 'role' => $role,'filterby1' => 'country','filterby'=>$filterby,'filterdata'=>$searfilterdata,'filterdata1' => $country]);
                                                     }
                                                }
                                                else if(count($args)==8){
                                                
                                                      if($filterby1 == 'country'){
                                                            $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                                            $filterdata = str_ireplace(" ", "-", $filterdata);
                                                            $filterdata1 = str_ireplace(" ", "-", $filterdata1);
                                                         //dd('In Country Args','search',$search,'searchDetails1',$searchDetails1,'filterby1',$filterby1,'filterby',$filterby,'filter',$filterdata,'filterdata', $filterdata1);
                                                         //Hs Code URl
                                                         if($filterby=='hs_code'){
                                                           $hs_code_url =   route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby1,'filterby'=>$search,'filter'=>$searchDetails1,'filterby1'=>$filterby,'filterdata' => $filterdata, 'filterdata1' => $country]);
                                                           $port_url =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1,'filterdata1' => $unloading_port??'Default']);
                                                         }else{
                                                           $hs_code_url =  route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => $filterby1,'filterby'=>'hs_code','filter'=>$res_hs_code,'filterby1'=>$filterby,'filterdata' => $filterdata,'filterdata1' => $filterdata1??'Default']);
                                                            $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby1,'filterby'=>$search,'filter'=>$searchDetails1,'filterby1'=>$filterby,'filterdata' => $filterdata, 'filterdata1' => $country]);
                                                         }
                                                         
                                                         //Country Url
                                                         $country_url =  route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby1,'filterby'=>$search,'filter'=>$searchDetails1,'filterby1'=>$filterby,'filterdata' => $filterdata, 'filterdata1' => $country]);
                                                         
                                                         //Port Url
                                                           //$port_url =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1,'filterdata1' => $unloading_port??'Default']);
                                                          
                                                         
                                                      }else if($filterby1 == 'hs_code'){
                                                           $base_search = $search;
                                                           $port_url = route('filter-two', [
                                                                'type' => $type, 
                                                                'role' => $role,
                                                                'search' => $base_search,
                                                                'searchDetails1' => $searchDetails1, 
                                                                'filterby2' => 'unloading_port',
                                                                'filterby' => $filterby,
                                                                'filter' => $filterdata,
                                                                'filterby1' => $filterby1,
                                                                'filterdata' => $filterdata1,
                                                                'filterdata1' => $unloading_port ?? 'Default'
                                                            ]);

                                                      }else if($filterby1 == 'unloading_port'){
                                                       //dd('in Product unloading_port Url');
                                                            $base_search = $search;
                                                             $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                                             $filterdata1 = str_ireplace(" ", "-", $filterdata1);
                                                         //Hs Code URl
                                                         $hs_code_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => $filterby1,'filterby'=>'hs_code','filter'=>$res_hs_code,'filterby1'=>$filterby,'filterdata' => $filterdata,'filterdata1' => $filterdata1??'Default']);
                                                            
                                                         //Country Url
                                                         //dd($filterby,$filterdata,$searchDetails1,$search);
                                                           $country_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$res_hs_code,'filterby1'=>$filterby1,'filterdata' => $filterdata1,'filterdata1' => $country??'Default']);
                                                          //$country_url  = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby1,'filterby'=>$search,'filter'=>$searchDetails1,'filterby1'=>$filterby,'filterdata' => $filterdata, 'filterdata1' => $unloading_port??'Default']);
                                                         //Port Url
                                                         $port_url =  route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby1,'filterby'=>$search,'filter'=>$searchDetails1,'filterby1'=>$filterby,'filterdata' => $filterdata, 'filterdata1' => $unloading_port??'Default']);
                                                      }
                                                 }
                                                 else if(count($arg)==8){
                                                     $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                                     
                                                     if($filterby2 == 'country'){
                                                       $hs_code_url =  route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby1,'filterby'=>$search,'filter'=>$searchDetails1,'filterby1'=>$filterby,'filterdata' => $filterdata, 'filterdata1' => $country]);
                                                       $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata, 'filterdata1' => $Dresult->ORIGIN_COUNTRY]);
                                                       //Port Url
                                                       $port_url =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1,'filterdata1' => $unloading_port??'Default']);
                                                     }else if($filterby2 == 'unloading_port'){
                                                    
                                                            $base_search = $search;
                                                             $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                                             //Hs code Url
                                                             $hs_code_url =   route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                             //dd($type, $role,$filterby, $filter, $filterby1, $filterdata, $filterby2, $filterdata1);
                                                             //Country Url
                                                               $country_url  = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$filterby,'searchDetails1'=>$searchDetails1, 'filterby2' => 'country','filterby'=>$filterby1,'filter'=>$filterdata,'filterby1'=>$filterby2,'filterdata' => $filterdata1,'filterdata1' => $country??'Default']);
                                                            
                                                            //Port Url 
                                                             $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                             
                                                       //$country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                     }
                                                  }else if(count($arg)==10){
                                                     $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                                      //dd($type, $role,$search,$searchDetails1,$filterby, $filter, $filterby1, $filterdata, $filterby2, $filterdata1);
                                                    if($filterby2 == 'hs_code'){
                                                       //Hs_code
                                                       $hs_code_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $country??"null"]);
                                                       //Country Url
                                                       $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata, 'filterdata1' => $Dresult->ORIGIN_COUNTRY]);
                                                       //Port Url
                                                       $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                    }else if($filterby2 == 'country'){
                                                    //HS_code Url
                                                         $filterdata = str_ireplace(" ", "-", $filterdata);
                                                         $filterdata1 = str_ireplace(" ", "-", $filterdata1);
                                                        //Hs_code
                                                        //dd($type, $role,$search,$searchDetails1,$filterby, $filter, $filterby1, $filterdata, $filterby2, $filterdata1);
                                                        
                                                        $hs_code_url  =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata,'filterdata1' => $filterdata1??'Default']);
                                                        //Country url
                                                       $country_url  =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata,'filterdata1' => $filterdata1??'Default']);
                                                        //Port Url                                                           
                                                       $port_url  =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata,'filterdata1' => $filterdata1??'Default']);
                                                       
                                                       
                                                     }else if($filterby2 == 'unloading_port'){
                                                         $filterdata = str_ireplace(" ", "-", $filterdata);
                                                         $filterdata1 = str_ireplace(" ", "-", $filterdata1);
                                                        //Hs_code
                                                        //dd($type, $role,$search,$searchDetails1,$filterby, $filter, $filterby1, $filterdata, $filterby2, $filterdata1);
                                                        
                                                        $hs_code_url  =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata,'filterdata1' => $filterdata1??'Default']);
                                                        //Country url
                                                       $country_url  =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata,'filterdata1' => $filterdata1??'Default']);
                                                        //Port Url                                                           
                                                       $port_url  =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata,'filterdata1' => $filterdata1??'Default']);
                                                       
                                                     }
                                                  }
                                                else{
                                                      $country_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $country??"null"]);
                                                  }
                                                //$hs_code_url =  route('search-filter-one', ['type' => $type, 'role' => $role,'search'=>$search,'base_search'=>$searchDetails1??'null', 'filterby1' => 'hs_code','filterby'=>$filterby,'filterdata'=>$filterdata,'filterdata1' => $res_hs_code??'null']);
                                                //$country_url =  route('search-filter-one', ['type' => $type, 'role' => $role,'search'=>$search,'base_search'=>$searchDetails1, 'filterby1' => $filterby1,'filterby'=>$filterby,'filterdata'=>$filterdata,'filterdata1' => $country??'null']);
                                            }
 
                                        @endphp
                            
                                        <tr class="bg-white border-b hover:bg-gray-50">
                                            <td class="w-4 p-4 font-medium text-gray-900 align-top">
                                                {{ $Dresult->DATE }}
                                            </td>
                                            <td class="px-6 py-4 align-top">
                                                {{-- @dd('hs_code', $hs_code_url) --}}
                                                <a href="{{ $hs_code_url }}" class="font-medium text-blue-600 hover:underline" style="word-wrap: break-word;">
                                                    <!--{{ $Dresult->HS_CODE }}-->
                                                    @foreach (explode(',', $Dresult->HS_CODE) as $code)
                                                        <div>{{ $code }}</div>
                                                    @endforeach
                                                </a>
                                            </td>
                                            <td colspan="2" class="px-6 py-4 font-medium text-gray-900 align-top" style="word-wrap: break-word;">
                                                <p>{{ strip_tags($Dresult->PRODUCT_DESCRIPTION) }}</p>
                                            </td>
                                            {{-- @dd($result) --}}
                                            <td class="px-6 py-4 align-top">
                                                <a href="{{ $country_url }}" class="font-medium text-blue-600 hover:underline">
                                                    {{ $Dresult->ORIGIN_COUNTRY }}
                                                </a>
                                                {{-- <a href="{{ route('search-filter', ['type' => $type, 'role' => $role, 'filterby' => 'unloading_port', 'filterdata' => $Dresult->Unloading_Port]) }}" class="font-medium text-blue-600 hover:underline">
                                                    {{ $Dresult->Unloading_Port }}
                                                </a> --}}
                                            </td>
                                            <td class="px-6 py-4 align-top">
                                                <a href="{{ $port_url }}" class="font-medium text-blue-600 hover:underline">
                                                    {{ $Dresult->UNLOADING_PORT }}
                                                </a>
                                            </td>                                            
                                            
                                            <td class="px-6 py-4 font-medium text-gray-900 align-top">
                                               <p>{{ $Dresult->QUANTITY }}</p>
                                            </td>
                                            <td class="px-6 py-4 font-medium text-gray-900 align-top">
                                                <p>{{ $Dresult->UNIT }}</p>
                                            </td>
                                            <td class="px-6 py-4 font-medium text-gray-900 align-top">
                                                <p>{{ $Dresult->WEIGHT }}</p>
                                            </td>
                                            <td class="px-6 py-4 font-medium align-top">
                                                <p data-modal-target="crud-modal-1" data-modal-toggle="crud-modal-1" class="font-medium text-blue-600 hover:underline transition-all">
                                                    Importer Name
                                                </p>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">
                            <span class="text-sm font-normal text-gray-500 mb-4 p-4 block w-full md:inline md:w-auto">
                                Showing 
                                <span class="font-semibold text-gray-900">
                                    1-10
                                </span> 
                                of 
                                <span class="font-semibold text-gray-900">
                                    10
                                </span>
                            </span>
                            <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8 pr-3">
                                <li>
                                    <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700">
                                        1
                                    </a>
                                </li>
                                <li>
                                    <p data-modal-target="crud-modal-1" data-modal-toggle="crud-modal-1" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                        2
                                    </p>
                                </li>
                                <li>
                                    <p data-modal-target="crud-modal-1" data-modal-toggle="crud-modal-1" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                        3
                                    </p>
                                </li>
                                <li>
                                    <p data-modal-target="crud-modal-1" data-modal-toggle="crud-modal-1" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700">
                                        Next
                                    </p>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            @elseif($role == 'export')
                {{-- Filter By Option --}}
                <div class="grid grid-cols-1 gap-4 lg:grid-cols-8 mb-8 px-5">
                    <div class="col-span-4 lg:col-span-2 flex items-center justify-center lg:justify-end">
                        <h1 class="text-end text-2xl font-medium">Filter By:</h1>
                    </div>
                    <div class="col-span-5">
                        <form>
                            <div class="grid gap-6 px-2 lg:px-5 grid-cols-1 md:grid-cols-3">
                                <div>
                                    <div class="relative text-center z-0 w-full mb-5 lg:mb-0 group">
                                        <label class="mb-2 text-sm font-medium">
                                            Choose HS Code
                                        </label>
                                       @php
                                            $args = $args??[];
                                            $arg = $arg??[];
                                      @endphp
                                        <select id="large-2" class="block w-full px-4 py-3 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
                                            <option selected>Choose HS Code</option>
                                            @php
                                                $SelectResult = $result;
                                            @endphp

                                            @if(isset($SelectResult) && $SelectResult->count() > 0)
                                                @foreach ($result as $SelectResult)
                                                      @if(count($args)==6)
                                                            @if ($searchDetails1)
                                                                <option value="{{route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'hs_code','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $SelectResult->HS_CODE?? '0'])}}">
                                                                    {{ $SelectResult->HS_CODE }}
                                                                </option>
                                                            @else
                                                                <option value="{{route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'hs_code','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $SelectResult->HS_CODE?? '0'])}}">
                                                                    {{ $SelectResult->HS_CODE }}
                                                                </option>
                                                            @endif
                                                      @elseif(count($args)==8)
                                                            @if ($searchDetails1)
                                                                <option value="{{route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1,'searchDetails' => $hscode??'null', 'filterby2' => 'hs_code','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $SelectResult->HS_CODE?? '0'])}}">
                                                                    {{ $SelectResult->HS_CODE }}
                                                                </option>
                                                            @else
                                                                <option value="{{route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1,'searchDetails' => $desc??'null', 'filterby2' => 'hs_code','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $SelectResult->HS_CODE?? '0'])}}">
                                                                    {{ $SelectResult->HS_CODE }}
                                                                </option>
                                                            @endif
                                                      @elseif(count($arg)==8)
                                                            @if ($searchDetails1)
                                                                <option value="{{route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1,'searchDetails' => $hscode??'null', 'filterby2' => 'hs_code','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $SelectResult->HS_CODE?? '0'])}}">
                                                                    {{ $SelectResult->HS_CODE }}
                                                                </option>
                                                            @else
                                                                <option value="{{route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1,'searchDetails' => $desc??'null', 'filterby2' => 'hs_code','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $SelectResult->HS_CODE?? '0'])}}">
                                                                    {{ $SelectResult->HS_CODE }}
                                                                </option>
                                                            @endif
                                                    @endif
                                                @endforeach
                                            @endif
                                        </select>

                                    </div>
                                </div> 
                                <div>
                                    <div class="relative text-center z-0 w-full mb-5 lg:mb-0 group">
                                        <label class="mb-2 text-sm font-medium">
                                            Choose Destination Country
                                        </label>
                                        <select id="large-1" class="block w-full px-4 py-3 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
                                            <option selected>Choose Origin Country</option>
                                            @php
                                                $SelectResult = $result;
                                            @endphp
                                            @if(isset($SelectResult) && $SelectResult->count() > 0)
                                                @foreach ($result as $SelectResult)

                                                      @if(count($args)==6)
                                                            @if ($searchDetails1)
                                                                <option value="{{route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'hs_code','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' =>  $SelectResult->ORIGIN_COUNTRY ?? '0'])}}">
                                                                    {{ $SelectResult->ORIGIN_COUNTRY }}
                                                                </option>
                                                            @else
                                                                <option value="{{route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'hs_code','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' =>  $SelectResult->ORIGIN_COUNTRY ?? '0'])}}">
                                                                    {{ $SelectResult->ORIGIN_COUNTRY }}
                                                                </option>
                                                            @endif
                                                      @elseif(count($args)==8)
                                                            @if ($hscode)
                                                                <option value="{{route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1,'searchDetails' => $hscode??'null', 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $SelectResult->ORIGIN_COUNTRY])}}">
                                                                    {{ $SelectResult->ORIGIN_COUNTRY }}
                                                                </option>
                                                                @else
                                                                <option value="{{route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1,'searchDetails' => $desc??'null', 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1,'filterdata1' => $SelectResult->ORIGIN_COUNTRY])}}">
                                                                    {{ $SelectResult->ORIGIN_COUNTRY }}
                                                                </option>
                                                            @endif
                                                      @elseif(count($arg)==8)
                                                            @if ($hscode)
                                                                <option value="{{route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1,'searchDetails' => $hscode??'null', 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $SelectResult->ORIGIN_COUNTRY])}}">
                                                                    {{ $SelectResult->ORIGIN_COUNTRY }}
                                                                </option>
                                                                @else
                                                                <option value="{{route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1,'searchDetails' => $desc??'null', 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1,'filterdata1' => $SelectResult->ORIGIN_COUNTRY])}}">
                                                                    {{ $SelectResult->ORIGIN_COUNTRY }}
                                                                </option>
                                                            @endif
                                                    @endif
                                                @endforeach
                                            @endif
                                        </select>

                                    </div>
                                </div>
                                <div>
                                    <div class="relative text-center z-0 w-full mb-5 lg:mb-0 group">
                                        <label class="mb-2 text-sm font-medium">
                                            Choose Unloading Port
                                        </label>
                                        <select  id="large" class="block w-full px-4 py-3 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
                                            <option selected>Choose Unloading Port</option>
                                            @php
                                                $SelectResult = $result;
                                            @endphp
                                            @if(isset($SelectResult) && $SelectResult->count() > 0)
                                                @foreach ($result as $SelectResult)
                                                        @if(count($args)==6)
                                                            @if ($searchDetails1)
                                                                <option value="{{route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'hs_code','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' =>  $SelectResult->UNLOADING_PORT ?? '0'])}}">
                                                                    {{ $SelectResult->UNLOADING_PORT }}
                                                                </option>
                                                            @else
                                                                <option value="{{route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'hs_code','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' =>  $SelectResult->UNLOADING_PORT ?? '0'])}}">
                                                                    {{ $SelectResult->UNLOADING_PORT }}
                                                                </option>
                                                            @endif
                                                      @elseif(count($args)==8)
                                                           @if ($hscode)
                                                            <option value="{{route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1,'searchDetails' => $hscode??'null', 'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1 ,'filterdata1' => $SelectResult->UNLOADING_PORT??'default'])}}">
                                                                {{ $SelectResult->UNLOADING_PORT }}
                                                            </option>
                                                           @else
                                                               <option value="{{route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1,'searchDetails' => $desc??'null', 'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1,'filterdata1' => $SelectResult->UNLOADING_PORT??'Default'])}}">
                                                                    {{ $SelectResult->UNLOADING_PORT }}
                                                                </option>
                                                           @endif
                                                      @elseif(count($arg)==8)
                                                           @if ($hscode)
                                                                <option value="{{route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1,'searchDetails' => $hscode??'null', 'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1 ,'filterdata1' => $SelectResult->UNLOADING_PORT??'default'])}}">
                                                                    {{ $SelectResult->UNLOADING_PORT }}
                                                                </option>
                                                           @else
                                                               <option value="{{route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1,'searchDetails' => $desc??'null', 'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1,'filterdata1' => $SelectResult->UNLOADING_PORT??'Default'])}}">
                                                                    {{ $SelectResult->UNLOADING_PORT }}
                                                                </option>
                                                           @endif
                                                    @endif
                                                @endforeach
                                            @endif
                                        </select> 
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-span-1"></div>
                </div>

                {{-- Export Table --}}
                <div class="mx-auto mx-w-screen-xl px-5 hidden lg:block">
                    <div class="relative shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500" style="table-layout: fixed;">
                            <thead class="text-sm text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        HS Code
                                    </th>
                                    <th scope="col" class="px-6 py-3" colspan="2">
                                        Product Description 
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Destintion Country
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Unloading Port
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Qty.
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Unit
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Weight
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Exporter Name
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $Dresult = $result;
                                @endphp

                                @if(isset($Dresult) && $Dresult->count() > 0)
                                    @foreach ($Dresult as $Dresult)
                                    {{-- @dd($searchDetails1) --}}
                                        @php
                                            $res_hs_code = $Dresult->HS_CODE;
                                            // dd($res_hs_code);
                                            $country = $Dresult->DESTINATION_COUNTRY;
                                            $country= str_ireplace(" ","-",$country);
                                            $unloading_port  = $Dresult->UNLOADING_PORT;
                                             $args = $args??[];
                                            // Hs code Url
                                            $arg = $arg??[];
                                            
                                             //dd($filterby1,$args,$searchDetails1,$arg);
                                             //dd($filterby,$filterby1,$args);
                                             $searchDetailsParts = explode(',', $searchDetails1);
                                            $all_numeric = true;
                                            
                                            foreach ($searchDetailsParts as $part) {
                                                if (!is_numeric($part)) {
                                                    $all_numeric = false;
                                                    break;
                                                }
                                            }
                                          
                                            if ($all_numeric) {
                                                
                                                # code...
                                                  $filterdata = str_ireplace(" ", "-", $filterdata);
                                                  $filterdata1 = str_ireplace(" ", "-", $filterdata1);
                                                  $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                                if(count($args)==6){
                                                     if($filterby1=='unloading_port'){
                                                         $hs_code_url =  route('searchfilterone', ['type' => $type, 'role' => $role,'filterby1' => 'unloading_port','filterby'=>$filterby,'filterdata'=>$res_hs_code,'filterdata1' => $unloading_port]);
                                                         $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $Dresult->DESTINATION_COUNTRY]);
                                                         $port_url = route('searchfilterone', ['type' => $type, 'role' => $role,'filterby1' => 'unloading_port','filterby'=>$filterby,'filterdata'=>$res_hs_code,'filterdata1' => $unloading_port]);
                                                     }else if($filterby1=='country'){
                                                        // dd($filterby,$filterby1,$args,$filterdata);
                                                        $hs_code_url = route('searchfilterone', ['type' => $type, 'role' => $role,'filterby1' => 'country','filterby'=>$filterby,'filterdata'=>$searfilterdata,'filterdata1' => $country]);
                                                        $country_url = route('searchfilterone', ['type' => $type, 'role' => $role,'filterby1' => 'country','filterby'=>$filterby,'filterdata'=>$searfilterdata,'filterdata1' => $country]);
                                                        $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $country, 'filterdata1' => $unloading_port]);
                                                     }
                                                }
                                                else if(count($args)==8){
                                                //dd('In Country Args',$args,$filterby1,$filterby,$filterdata,$filterdata1,$search,$filterby1);
                                                      if($filterby1 == 'country'){
                                                        
                                                         //dd('In Country Args',$args,$filterby1,$filterby,$filterdata,$filterdata1,$search,$filterby1);
                                                         //Hs Code URl
                                                         $hs_code_url =  route('search-filter-one', ['type' => $type, 'role' => $role,'search'=>$search,'base_search'=>$res_hs_code??'null', 'filterby1' => $filterby1,'filterby'=>$filterby,'filterdata'=>$filterdata,'filterdata1' => $filterdata1??'null']);
                                                         
                                                         //Country Url
                                                         $country_url =  route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby1,'filterby'=>$search,'filter'=>$searchDetails1,'filterby1'=>$filterby,'filterdata' => $filterdata, 'filterdata1' => $country]);
                                                         
                                                         //Port Url
                                                         $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby1,'filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata, 'filterdata1' => $country]);
                                                         
                                                      }else if($filterby1 == 'hs_code'){
                                                           $base_search = $search;
                                                           $port_url = route('filter-two', [
                                                                'type' => $type, 
                                                                'role' => $role,
                                                                'search' => $base_search,
                                                                'searchDetails1' => $searchDetails1, 
                                                                'filterby2' => 'unloading_port',
                                                                'filterby' => $filterby,
                                                                'filter' => $filterdata,
                                                                'filterby1' => $filterby1,
                                                                'filterdata' => $filterdata1,
                                                                'filterdata1' => $unloading_port ?? 'Default'
                                                            ]);

                                                      }else if($filterby1 == 'unloading_port'){
                                                       
                                                            $base_search = $search;
                                                              //dd($filterby,$filterby1,$args);
                                                             $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                                             //Hs code Url
                                                             $hs_code_url =  route('search-filter-one', ['type' => $type, 'role' => $role,'search'=>$search,'base_search'=>$res_hs_code??'null', 'filterby1' => 'unloading_port','filterby'=>$filterby,'filterdata'=>$filterdata,'filterdata1' => $unloading_port??'null']);
                                                            
                                                             //Country Url
                                                             $country_url =  route('search-filter-one', ['type' => $type, 'role' => $role,'search'=>$search,'base_search'=>$searchDetails1, 'filterby1' => 'unloading_port','filterby'=>$filterby,'filterdata'=>$filterdata,'filterdata1' => $unloading_port??'null']);
                                                            
                                                            //Port Url 
                                                             $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                      }
                                                 }
                                                 else if(count($arg)==8){
                                                     $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                                     
                                                    if($filterby2 == 'hs_code'){
                                                       //Hs_code
                                                       $hs_code_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $country??"null"]);
                                                       //Country Url
                                                       $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata, 'filterdata1' => $Dresult->DESTINATION_COUNTRY]);
                                                       //Port Url
                                                       $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                    }else if($filterby2 == 'country'){
                                                       //dd($filterby,$filterby1,$arg,$filterby2,$search,$searchDetails1);
                                                       //$hs_code_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=> $filterby,'searchDetails1'=>$res_hs_code, 'filterby2' => 'country','filterby'=>$filterby1,'filter'=>$filterdata,'filterby1'=>$filterby2,'filterdata' => $filterdata1, 'filterdata1' => $country??"null"]);
                                                       $hs_code_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$res_hs_code,'filterby1'=>$filterby1,'filterdata' => $filterdata, 'filterdata1' => $filterdata1]);
                                                       $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata, 'filterdata1' => $Dresult->DESTINATION_COUNTRY]);
                                                       $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $filterdata1??'default']);
                                                       
                                                     }else if($filterby2 == 'unloading_port'){
                                                        //Hs_code
                                                        $hs_code_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                        //Country url
                                                       $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                        //Port Url                                                           //Port Url 
                                                       $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                       
                                                     }
                                                  } else if(count($arg)==10){
                                                     $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                                      //dd($filterby,$filterby1,$arg,$filterby2);
                                                    if($filterby2 == 'hs_code'){
                                                       //Hs_code
                                                       $hs_code_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $country??"null"]);
                                                       //Country Url
                                                       $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata, 'filterdata1' => $Dresult->ORIGIN_COUNTRY]);
                                                       //Port Url
                                                       $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                    }else if($filterby2 == 'country'){
                                                       $hs_code_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $country??"null"]);
                                                       $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata, 'filterdata1' => $Dresult->DESTINATION_COUNTRY]);
                                                       $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                       
                                                     }else if($filterby2 == 'unloading_port'){
                                                        //Hs_code
                                                        $hs_code_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                        //Country url
                                                       $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                        //Port Url                                                           //Port Url 
                                                       $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                       
                                                     }
                                                  }
                                                else{
                                                      $country_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $Dresult->ORIGIN_COUNTRY]);
                                                  }
                                                // $country_url = route('search-filter', ['type' => $type, 'role' => $role,'searchDetails' => $hscode, 'filterby' => 'country', 'filterdata' => $country]);
                                            }else{
                                                //dd('IN Else Block',$filterby,$filterby1,$args);
                                                if(count($args)==6){
                                                     if($filterby1=='unloading_port'){
                                                         $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $Dresult->DESTINATION_COUNTRY]);
                                                     }else if($filterby1=='country'){
                                                        $country_url = route('searchfilterone', ['type' => $type, 'role' => $role,'filterby1' => 'country','filterby'=>$filterby,'filterdata'=>$searfilterdata,'filterdata1' => $country]);
                                                     }
                                                }
                                                else if(count($args)==8){
                                                
                                                      if($filterby1 == 'country'){
                                                      
                                                         //dd('In Country Args','search',$search,'searchDetails1',$searchDetails1,$filterby1,'filterby',$filterby,'filter',$filterdata,'filterdata', $filterdata1);
                                                         //Hs Code URl
                                                         $hs_code_url =  route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby1,'filterby'=>$search,'filter'=>$searchDetails1,'filterby1'=>$filterby,'filterdata' => $filterdata, 'filterdata1' => $country]);
                                                         
                                                         //Country Url
                                                         $country_url =  route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby1,'filterby'=>$search,'filter'=>$searchDetails1,'filterby1'=>$filterby,'filterdata' => $filterdata, 'filterdata1' => $country]);
                                                         
                                                         //Port Url
                                                         $port_url =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1,'filterdata1' => $unloading_port??'Default']);
                                                         
                                                      }else if($filterby1 == 'hs_code'){
                                                           $base_search = $search;
                                                           $port_url = route('filter-two', [
                                                                'type' => $type, 
                                                                'role' => $role,
                                                                'search' => $base_search,
                                                                'searchDetails1' => $searchDetails1, 
                                                                'filterby2' => 'unloading_port',
                                                                'filterby' => $filterby,
                                                                'filter' => $filterdata,
                                                                'filterby1' => $filterby1,
                                                                'filterdata' => $filterdata1,
                                                                'filterdata1' => $unloading_port ?? 'Default'
                                                            ]);

                                                      }else if($filterby1 == 'unloading_port'){
                                                       //dd('in Product Country Url');
                                                            $base_search = $search;
                                                             $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                                             $filterdata1 = str_ireplace(" ", "-", $filterdata1);
                                                         //Hs Code URl
                                                         $hs_code_url =  route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby1,'filterby'=>$search,'filter'=>$searchDetails1,'filterby1'=>$filterby,'filterdata' => $filterdata, 'filterdata1' => $unloading_port??'Default']);
                                                            
                                                         //Country Url
                                                         //dd($filterby,$filterdata,$searchDetails1,$search);
                                                         $country_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$res_hs_code,'filterby1'=>$filterby1,'filterdata' => $filterdata1,'filterdata1' => $country??'Default']);
                                                         
                                                         //Port Url
                                                         $port_url =  route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby1,'filterby'=>$search,'filter'=>$searchDetails1,'filterby1'=>$filterby,'filterdata' => $filterdata, 'filterdata1' => $unloading_port??'Default']);
                                                      }
                                                 }
                                                 else if(count($arg)==8){
                                                     $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                                     
                                                     if($filterby2 == 'country'){
                                                       $hs_code_url =  route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby1,'filterby'=>$search,'filter'=>$searchDetails1,'filterby1'=>$filterby,'filterdata' => $filterdata, 'filterdata1' => $country]);
                                                       $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata, 'filterdata1' => $Dresult->ORIGIN_COUNTRY]);
                                                       //Port Url
                                                       $port_url =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1,'filterdata1' => $unloading_port??'Default']);
                                                     }else if($filterby2 == 'unloading_port'){
                                                    
                                                            $base_search = $search;
                                                             $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                                             //Hs code Url
                                                             $hs_code_url =   route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                             //dd($type, $role,$filterby, $filter, $filterby1, $filterdata, $filterby2, $filterdata1);
                                                             //Country Url
                                                               $country_url  = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$filterby,'searchDetails1'=>$searchDetails1, 'filterby2' => 'country','filterby'=>$filterby1,'filter'=>$filterdata,'filterby1'=>$filterby2,'filterdata' => $filterdata1,'filterdata1' => $country??'Default']);
                                                            
                                                            //Port Url 
                                                             $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                             
                                                       //$country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                     }
                                                  }else if(count($arg)==10){
                                                     $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                                      //dd($type, $role,$search,$searchDetails1,$filterby, $filter, $filterby1, $filterdata, $filterby2, $filterdata1);
                                                    if($filterby2 == 'hs_code'){
                                                       //Hs_code
                                                        //dd($type, $role,$search,$searchDetails1,$filterby, $filter, $filterby1, $filterdata, $filterby2, $filterdata1);
                                                       $hs_code_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $country??"null"]);
                                                       //Country Url
                                                       $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata, 'filterdata1' => $Dresult->DESTINATION_COUNTRY]);
                                                       //Port Url
                                                       $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                    }else if($filterby2 == 'country'){
                                                    //HS_code Url
                                                         $filterdata = str_ireplace(" ", "-", $filterdata);
                                                         $filterdata1 = str_ireplace(" ", "-", $filterdata1);
                                                        //Hs_code
                                                        //dd($type, $role,$search,$searchDetails1,$filterby, $filter, $filterby1, $filterdata, $filterby2, $filterdata1);
                                                        
                                                        $hs_code_url  =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata,'filterdata1' => $filterdata1??'Default']);
                                                        //Country url
                                                       $country_url  =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata,'filterdata1' => $filterdata1??'Default']);
                                                        //Port Url                                                           
                                                       $port_url  =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata,'filterdata1' => $filterdata1??'Default']);
                                                       
                                                       
                                                     }else if($filterby2 == 'unloading_port'){
                                                         $filterdata = str_ireplace(" ", "-", $filterdata);
                                                         $filterdata1 = str_ireplace(" ", "-", $filterdata1);
                                                        //Hs_code
                                                        //dd($type, $role,$search,$searchDetails1,$filterby, $filter, $filterby1, $filterdata, $filterby2, $filterdata1);
                                                        
                                                        $hs_code_url  =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata,'filterdata1' => $filterdata1??'Default']);
                                                        //Country url
                                                       $country_url  =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata,'filterdata1' => $filterdata1??'Default']);
                                                        //Port Url                                                           
                                                       $port_url  =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata,'filterdata1' => $filterdata1??'Default']);
                                                       
                                                     }
                                                  }
                                                else{
                                                      $country_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $country??"null"]);
                                                  }
                                                //$hs_code_url =  route('search-filter-one', ['type' => $type, 'role' => $role,'search'=>$search,'base_search'=>$searchDetails1??'null', 'filterby1' => 'hs_code','filterby'=>$filterby,'filterdata'=>$filterdata,'filterdata1' => $res_hs_code??'null']);
                                                //$country_url =  route('search-filter-one', ['type' => $type, 'role' => $role,'search'=>$search,'base_search'=>$searchDetails1, 'filterby1' => $filterby1,'filterby'=>$filterby,'filterdata'=>$filterdata,'filterdata1' => $country??'null']);
                                            }
 
                                        @endphp
                                       
                                        <tr class="bg-white border-b hover:bg-gray-50">
                                            <td class="w-4 p-4 font-medium text-gray-900 align-top">
                                                <p>{{ $Dresult->DATE }}</p>
                                            </td>
                                            <th scope="row" class="px-6 py-4 align-top">
                                                <a href="{{ $hs_code_url }}" class="font-medium text-blue-600 hover:underline" style="word-wrap: word-break;">
                                                    
                                                    @foreach (explode(',', $Dresult->HS_CODE) as $code)
                                                        <div>{{ $code }}</div>
                                                    @endforeach
                                                </a>
                                            </th>
                                            <td colspan='2' class="px-6 py-4 font-medium text-gray-900 align-top" style="word-wrap: word-break;">
                                                <p>{{$Dresult->PRODUCT_DESCRIPTION }}</p>
                                            </td>
                                            <td class="px-6 py-4 align-top">
                                                <a href="{{ $country_url }}" class="font-medium text-blue-600 hover:underline">
                                                    {{ $Dresult->DESTINATION_COUNTRY }}
                                                </a>  
                                            </td>
                                            <td class="px-6 py-4 align-top">
                                                <a href="{{ $port_url }}" class="font-medium text-blue-600 hover:underline">
                                                    {{ $Dresult->UNLOADING_PORT }}
                                                </a>  
                                            </td>
                                            <td class="px-6 py-4 font-medium text-gray-900 align-top">
                                                <p>{{ $Dresult->QUANTITY }}</p>
                                            </td>
                                            <td class="px-6 py-4 font-medium text-gray-900 align-top">
                                                <p>{{ $Dresult->UNIT }}</p>
                                            </td>
                                            <td class="px-6 py-4 font-medium text-gray-900 align-top">
                                                <p>{{ $Dresult->WEIGHT }}</p>
                                            </td>
                                            <td class="px-6 py-4 font-medium align-top">
                                                <p data-modal-target="crud-modal-1" data-modal-toggle="crud-modal-1" class="font-medium text-blue-600 hover:underline transition-all">
                                                    Exporter Name
                                                </p>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">
                            <span class="text-sm font-normal text-gray-500 mb-4 p-4 block w-full md:inline md:w-auto">
                                Showing 
                                <span class="font-semibold text-gray-900">
                                    1-10
                                </span> 
                                of 
                                <span class="font-semibold text-gray-900">
                                    10
                                </span>
                            </span>
                            <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8 pr-3">
                                <li>
                                    <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700">
                                        1
                                    </a>
                                </li>
                                <li>
                                    <p data-modal-target="crud-modal-1" data-modal-toggle="crud-modal-1" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                        2
                                    </p>
                                </li>
                                <li>
                                    <p data-modal-target="crud-modal-1" data-modal-toggle="crud-modal-1" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                        3
                                    </p>
                                </li>
                                <li>
                                    <p data-modal-target="crud-modal-1" data-modal-toggle="crud-modal-1" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700">
                                        Next
                                    </p>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            @else
                <p class="text-4xl text-gray-800 text-center">
                    Role Isn't Defined
                </p>
            @endif
        </section>

        {{-- Card view of table for mobile view --}}
        <section class="bg-white block md:hidden lg:hidden">
            <div class="mx-auto mx-w-screen-xl px-5 py-8">
                @if($role == 'import')
                   <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @php
                        $MobileResult = $result;
                       
                    @endphp
                    @if(isset($result) && is_iterable($result) && count($result) > 0)
                        @foreach ($result as $MobileResult)
                            @php
                                $res_hs_code = $MobileResult->HS_CODE;
                                // dd($res_hs_code);
                                $country = $MobileResult->ORIGIN_COUNTRY;
                                $country= str_ireplace(" ","-",$country);
                                $unloading_port  = $MobileResult->UNLOADING_PORT;
                                 $args = $args??[];
                                // Hs code Url
                                $arg = $arg??[];
                                
                                //dd($filterby1,$args,$searchDetails1,$arg);
                                 //dd($filterby,$filterby1,$args);
                                $searchDetailsParts = explode(',', $searchDetails1);
                                $all_numeric = true;
                                
                                foreach ($searchDetailsParts as $part) {
                                    if (!is_numeric($part)) {
                                        $all_numeric = false;
                                        break;
                                    }
                                }
                              
                                if ($all_numeric) {
                                
                                    # code...
                                      $filterdata = str_ireplace(" ", "-", $filterdata);
                                      $filterdata1 = str_ireplace(" ", "-", $filterdata1);
                                      $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                    if(count($args)==6){
                                    
                                         if($filterby1=='hs_code'){
                                             $hs_code_url =  route('searchfilterone', ['type' => $type, 'role' => $role,'filterby1' => 'unloading_port','filterby'=>$filterby,'filterdata'=>$res_hs_code,'filterdata1' => $unloading_port]);
                                             $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $Dresult->ORIGIN_COUNTRY]);
                                             $port_url = route('searchfilterone', ['type' => $type, 'role' => $role,'filterby1' => 'unloading_port','filterby'=>$filterby,'filterdata'=>$searfilterdata,'filterdata1' => $unloading_port]);
                                         }else if($filterby1=='unloading_port'){
                                             //dd('In this Group');
                                             $hs_code_url =  route('searchfilterone', ['type' => $type, 'role' => $role,'filterby1' => 'unloading_port','filterby'=>$filterby,'filterdata'=>$res_hs_code,'filterdata1' => $unloading_port]);
                                             $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $Dresult->ORIGIN_COUNTRY]);
                                             $port_url = route('searchfilterone', ['type' => $type, 'role' => $role,'filterby1' => 'unloading_port','filterby'=>$filterby,'filterdata'=>$searfilterdata,'filterdata1' => $unloading_port]);
                                         }else if($filterby1=='country'){
                                            // dd($filterby,$filterby1,$args,$filterdata);
                                            $hs_code_url = route('searchfilterone', ['type' => $type, 'role' => $role,'filterby1' => 'country','filterby'=>$filterby,'filterdata'=>$searfilterdata,'filterdata1' => $country]);
                                            $country_url = route('searchfilterone', ['type' => $type, 'role' => $role,'filterby1' => 'country','filterby'=>$filterby,'filterdata'=>$searfilterdata,'filterdata1' => $country]);
                                            $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $country, 'filterdata1' => $unloading_port]);
                                         }
                                    }
                                    else if(count($args)==8){
                                    
                                          if($filterby1 == 'country'){
                                            
                                             //dd('In Country Args',$args,$filterby1,$filterby,$filterdata,$filterdata1,$search,$filterby1);
                                             //Hs Code URl
                                             $hs_code_url =  route('search-filter-one', ['type' => $type, 'role' => $role,'search'=>$search,'base_search'=>$res_hs_code??'null', 'filterby1' => $filterby1,'filterby'=>$filterby,'filterdata'=>$filterdata,'filterdata1' => $filterdata1??'null']);
                                             
                                             //Country Url
                                             $country_url =  route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby1,'filterby'=>$search,'filter'=>$searchDetails1,'filterby1'=>$filterby,'filterdata' => $filterdata, 'filterdata1' => $country]);
                                             
                                             //Port Url
                                             $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby1,'filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata, 'filterdata1' => $country]);
                                             
                                          }else if($filterby1 == 'hs_code'){
                                               $base_search = $search;
                                               $port_url = route('filter-two', [
                                                    'type' => $type, 
                                                    'role' => $role,
                                                    'search' => $base_search,
                                                    'searchDetails1' => $searchDetails1, 
                                                    'filterby2' => 'unloading_port',
                                                    'filterby' => $filterby,
                                                    'filter' => $filterdata,
                                                    'filterby1' => $filterby1,
                                                    'filterdata' => $filterdata1,
                                                    'filterdata1' => $unloading_port ?? 'Default'
                                                ]);
    
                                          }else if($filterby1 == 'unloading_port'){
                                           
                                                $base_search = $search;
                                                  //dd($type, $role, $search, $res_hs_code,$filterby,$filterby1,$args,$filterdata1,$filterdata);
                                                 $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                                 //Hs code Url
                                                 $hs_code_url =  route('search-filter-one', ['type' => $type, 'role' => $role,'search'=>$search,'base_search'=>$res_hs_code??"null", 'filterby1' => 'unloading_port','filterby'=>$filterby,'filterdata'=>$filterdata,'filterdata1' => $MobileResult->UNLOADING_PORT??'null']);
                                                
                                                 //Country Url
                                                 $country_url =  route('search-filter-one', ['type' => $type, 'role' => $role,'search'=>$search,'base_search'=>$searchDetails1, 'filterby1' => 'unloading_port','filterby'=>$filterby,'filterdata'=>$filterdata,'filterdata1' => $unloading_port??'null']);
                                                
                                                //Port Url 
                                                 $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                          }
                                     }
                                     else if(count($arg)==8){
                                         $unloading_port = str_ireplace(" ", "-", $unloading_port);

                                        if($filterby2 == 'hs_code'){
                                           //Hs_code
                                           $hs_code_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $country??"null"]);
                                           //Country Url
                                           $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata, 'filterdata1' => $Dresult->ORIGIN_COUNTRY]);
                                           //Port Url
                                           $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                        }else if($filterby2 == 'country'){
                                           //dd($filterby,$filterby1,$arg,$filterby2,$search,$searchDetails1);
                                           //$hs_code_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=> $filterby,'searchDetails1'=>$res_hs_code, 'filterby2' => 'country','filterby'=>$filterby1,'filter'=>$filterdata,'filterby1'=>$filterby2,'filterdata' => $filterdata1, 'filterdata1' => $country??"null"]);
                                           $hs_code_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$res_hs_code,'filterby1'=>$filterby1,'filterdata' => $filterdata, 'filterdata1' => $Dresult->ORIGIN_COUNTRY]);
                                           $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata, 'filterdata1' => $Dresult->ORIGIN_COUNTRY]);
                                           $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $filterdata1??'default']);
                                           
                                         }else if($filterby2 == 'unloading_port'){
                                         
                                            //Hs_code
                                            $hs_code_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                            //Country url
                                           $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                            //Port Url                                                           //Port Url 
                                           $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                           
                                         }
                                      } else if(count($arg)==10){
                                         $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                          //dd($filterby,$filterby1,$arg,$filterby2);
                                        if($filterby2 == 'hs_code'){
                                           //Hs_code
                                           $hs_code_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $country??"null"]);
                                           //Country Url
                                           $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata, 'filterdata1' => $Dresult->ORIGIN_COUNTRY]);
                                           //Port Url
                                           $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                        }else if($filterby2 == 'country'){
                                           $hs_code_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $country??"null"]);
                                           $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata, 'filterdata1' => $Dresult->ORIGIN_COUNTRY]);
                                           $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                           
                                         }else if($filterby2 == 'unloading_port'){
                                            //Hs_code
                                            $hs_code_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                            //Country url
                                           $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                            //Port Url                                                           //Port Url 
                                           $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                           
                                         }
                                      }
                                    else{
                                          $country_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $Dresult->ORIGIN_COUNTRY]);
                                      }
                                    // $country_url = route('search-filter', ['type' => $type, 'role' => $role,'searchDetails' => $hscode, 'filterby' => 'country', 'filterdata' => $country]);
                                }else{
                                    //dd('IN Else Block',$filterby,$filterby1,$args);
                                    if(count($args)==6){
                                         if($filterby1=='unloading_port'){
                                             $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $Dresult->ORIGIN_COUNTRY]);
                                         }else if($filterby1=='country'){
                                            $country_url = route('searchfilterone', ['type' => $type, 'role' => $role,'filterby1' => 'country','filterby'=>$filterby,'filterdata'=>$searfilterdata,'filterdata1' => $country]);
                                         }
                                    }
                                    else if(count($args)==8){
                                    
                                          if($filterby1 == 'country'){
                                                $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                                $filterdata = str_ireplace(" ", "-", $filterdata);
                                                $filterdata1 = str_ireplace(" ", "-", $filterdata1);
                                             //dd('In Country Args','search',$search,'searchDetails1',$searchDetails1,'filterby1',$filterby1,'filterby',$filterby,'filter',$filterdata,'filterdata', $filterdata1);
                                             //Hs Code URl
                                             if($filterby=='hs_code'){
                                               $hs_code_url =   route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby1,'filterby'=>$search,'filter'=>$searchDetails1,'filterby1'=>$filterby,'filterdata' => $filterdata, 'filterdata1' => $country]);
                                               $port_url =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1,'filterdata1' => $unloading_port??'Default']);
                                             }else{
                                               $hs_code_url =  route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => $filterby1,'filterby'=>'hs_code','filter'=>$res_hs_code,'filterby1'=>$filterby,'filterdata' => $filterdata,'filterdata1' => $filterdata1??'Default']);
                                                $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby1,'filterby'=>$search,'filter'=>$searchDetails1,'filterby1'=>$filterby,'filterdata' => $filterdata, 'filterdata1' => $country]);
                                             }
                                             
                                             //Country Url
                                             $country_url =  route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby1,'filterby'=>$search,'filter'=>$searchDetails1,'filterby1'=>$filterby,'filterdata' => $filterdata, 'filterdata1' => $country]);
                                             
                                             //Port Url
                                               //$port_url =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1,'filterdata1' => $unloading_port??'Default']);
                                              
                                             
                                          }else if($filterby1 == 'hs_code'){
                                               $base_search = $search;
                                               $port_url = route('filter-two', [
                                                    'type' => $type, 
                                                    'role' => $role,
                                                    'search' => $base_search,
                                                    'searchDetails1' => $searchDetails1, 
                                                    'filterby2' => 'unloading_port',
                                                    'filterby' => $filterby,
                                                    'filter' => $filterdata,
                                                    'filterby1' => $filterby1,
                                                    'filterdata' => $filterdata1,
                                                    'filterdata1' => $unloading_port ?? 'Default'
                                                ]);
    
                                          }else if($filterby1 == 'unloading_port'){
                                           //dd('in Product unloading_port Url');
                                                $base_search = $search;
                                                 $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                                 $filterdata1 = str_ireplace(" ", "-", $filterdata1);
                                             //Hs Code URl
                                             $hs_code_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => $filterby1,'filterby'=>'hs_code','filter'=>$res_hs_code,'filterby1'=>$filterby,'filterdata' => $filterdata,'filterdata1' => $filterdata1??'Default']);
                                                
                                             //Country Url
                                             //dd($filterby,$filterdata,$searchDetails1,$search);
                                               $country_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$res_hs_code,'filterby1'=>$filterby1,'filterdata' => $filterdata1,'filterdata1' => $country??'Default']);
                                              //$country_url  = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby1,'filterby'=>$search,'filter'=>$searchDetails1,'filterby1'=>$filterby,'filterdata' => $filterdata, 'filterdata1' => $unloading_port??'Default']);
                                             //Port Url
                                             $port_url =  route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby1,'filterby'=>$search,'filter'=>$searchDetails1,'filterby1'=>$filterby,'filterdata' => $filterdata, 'filterdata1' => $unloading_port??'Default']);
                                          }
                                     }
                                     else if(count($arg)==8){
                                         $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                         
                                         if($filterby2 == 'country'){
                                           $hs_code_url =  route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby1,'filterby'=>$search,'filter'=>$searchDetails1,'filterby1'=>$filterby,'filterdata' => $filterdata, 'filterdata1' => $country]);
                                           $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata, 'filterdata1' => $Dresult->ORIGIN_COUNTRY]);
                                           //Port Url
                                           $port_url =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1,'filterdata1' => $unloading_port??'Default']);
                                         }else if($filterby2 == 'unloading_port'){
                                        
                                                $base_search = $search;
                                                 $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                                 //Hs code Url
                                                 $hs_code_url =   route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                 //dd($type, $role,$filterby, $filter, $filterby1, $filterdata, $filterby2, $filterdata1);
                                                 //Country Url
                                                   $country_url  = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$filterby,'searchDetails1'=>$searchDetails1, 'filterby2' => 'country','filterby'=>$filterby1,'filter'=>$filterdata,'filterby1'=>$filterby2,'filterdata' => $filterdata1,'filterdata1' => $country??'Default']);
                                                
                                                //Port Url 
                                                 $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                 
                                           //$country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                         }
                                      }else if(count($arg)==10){
                                         $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                          //dd($type, $role,$search,$searchDetails1,$filterby, $filter, $filterby1, $filterdata, $filterby2, $filterdata1);
                                        if($filterby2 == 'hs_code'){
                                           //Hs_code
                                           $hs_code_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $country??"null"]);
                                           //Country Url
                                           $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata, 'filterdata1' => $Dresult->ORIGIN_COUNTRY]);
                                           //Port Url
                                           $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                        }else if($filterby2 == 'country'){
                                        //HS_code Url
                                             $filterdata = str_ireplace(" ", "-", $filterdata);
                                             $filterdata1 = str_ireplace(" ", "-", $filterdata1);
                                            //Hs_code
                                            //dd($type, $role,$search,$searchDetails1,$filterby, $filter, $filterby1, $filterdata, $filterby2, $filterdata1);
                                            
                                            $hs_code_url  =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata,'filterdata1' => $filterdata1??'Default']);
                                            //Country url
                                           $country_url  =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata,'filterdata1' => $filterdata1??'Default']);
                                            //Port Url                                                           
                                           $port_url  =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata,'filterdata1' => $filterdata1??'Default']);
                                           
                                           
                                         }else if($filterby2 == 'unloading_port'){
                                             $filterdata = str_ireplace(" ", "-", $filterdata);
                                             $filterdata1 = str_ireplace(" ", "-", $filterdata1);
                                            //Hs_code
                                            //dd($type, $role,$search,$searchDetails1,$filterby, $filter, $filterby1, $filterdata, $filterby2, $filterdata1);
                                            
                                            $hs_code_url  =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata,'filterdata1' => $filterdata1??'Default']);
                                            //Country url
                                           $country_url  =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata,'filterdata1' => $filterdata1??'Default']);
                                            //Port Url                                                           
                                           $port_url  =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata,'filterdata1' => $filterdata1??'Default']);
                                           
                                         }
                                      }
                                    else{
                                          $country_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $country??"null"]);
                                      }
                                    //$hs_code_url =  route('search-filter-one', ['type' => $type, 'role' => $role,'search'=>$search,'base_search'=>$searchDetails1??'null', 'filterby1' => 'hs_code','filterby'=>$filterby,'filterdata'=>$filterdata,'filterdata1' => $res_hs_code??'null']);
                                    //$country_url =  route('search-filter-one', ['type' => $type, 'role' => $role,'search'=>$search,'base_search'=>$searchDetails1, 'filterby1' => $filterby1,'filterby'=>$filterby,'filterdata'=>$filterdata,'filterdata1' => $country??'null']);
                                }
    
                            @endphp
                            <div class="block max-w-md my-6 p-6 bg-white border border-gray-200 rounded-lg shadow">
                                <h5 class="mb-2 text-center text-2xl font-bold tracking-tight rounded bg-gray-100 text-blue-500">
                                    Shipment No. {{ $loop->iteration }}
                                </h5>
                                <div class="grid grid-cols-2">
                                    <div class="mt-4">
                                        <h1 class="text-md text-gray-800 font-medium uppercase">
                                            Date
                                        </h1>
                                    </div>
                                    <div class="mt-4">
                                        <p class="text-md font-normal">
                                            {{ $MobileResult->DATE ?? '' }}
                                        </p>
                                    </div>
                                    <div class="mt-4">
                                        <h1 class="text-md text-gray-800 font-medium uppercase">
                                            HS Code
                                        </h1>
                                    </div>
                                    <div class="mt-4">
                                        <p class="text-md font-normal">
                                            <a href="{{$res_hs_code}}" class="text-blue-600 hover:underline">
                                                {{ $MobileResult->HS_CODE ?? '' }}
                                            </a>
                                        </p>
                                    </div>
                                    <div class="mt-4">
                                        <h1 class="text-md text-gray-800 font-medium uppercase">
                                            Product Description
                                        </h1>
                                    </div>
                                    <div class="mt-4">
                                        <p class="text-md font-normal text-justify" style="word-wrap: word-break;">
                                            {{ strip_tags($MobileResult->PRODUCT_DESCRIPTION ?? '') }}
                                        </p>
                                    </div>
                                    <div class="mt-4">
                                        <h1 class="text-md text-gray-800 font-medium uppercase">
                                            Origin Country
                                        </h1>
                                    </div>
                                    <div class="mt-4">
                                        <p class="text-md font-normal">
                                            <a href="{{$country_url}}" class="text-blue-600 hover:underline">
                                                {{ $MobileResult->ORIGIN_COUNTRY ?? '' }}
                                            </a>
                                        </p>
                                    </div>
                                    <div class="mt-4">
                                        <h1 class="text-md text-gray-800 font-medium uppercase">
                                            Unloading Port
                                        </h1>
                                    </div>
                                    <div class="mt-4">
                                        <p class="text-md font-normal">
                                            <a href="{{$port_url}}" class="text-blue-600 hover:underline">
                                                {{ $MobileResult->UNLOADING_PORT ?? '' }}
                                            </a>
                                        </p>
                                    </div>
                                    <div class="mt-4">
                                        <h1 class="text-md text-gray-800 font-medium uppercase">
                                            Quantity
                                        </h1>
                                    </div>
                                    <div class="mt-4">
                                        <p class="text-md font-normal">
                                            {{ $MobileResult->QUANTITY ?? '' }}
                                        </p>
                                    </div>
                                    <div class="mt-4">
                                        <h1 class="text-md text-gray-800 font-medium uppercase">
                                            Unit
                                        </h1>
                                    </div>
                                    <div class="mt-4">
                                        <p class="text-md font-normal">
                                            {{ $MobileResult->UNIT ?? '' }}
                                        </p>
                                    </div>
                                    <div class="mt-4">
                                        <h1 class="text-md text-gray-800 font-medium uppercase">
                                            Weight
                                        </h1>
                                    </div>
                                    <div class="mt-4">
                                        <p class="text-md font-normal">
                                            {{ $MobileResult->WEIGHT ?? '' }}
                                        </p>
                                    </div>
                                    <div class="mt-4">
                                        <h1 class="text-md text-gray-800 font-medium uppercase">
                                            Importer Name
                                        </h1>
                                    </div>
                                    <div class="mt-4">
                                        <p class="text-md font-normal">
                                            <a href="#" class="text-blue-600 hover:underline">
                                                Importer Name
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                @else
                   <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @php
                        $MobileResult = $result;
                    @endphp
                    @if(isset($result) && is_iterable($result) && count($result) > 0)
                        @foreach ($result as $MobileResult)
                                @php
                                    $res_hs_code = $MobileResult->HS_CODE;
                                    // dd($res_hs_code);
                                    $country = $MobileResult->DESTINATION_COUNTRY;
                                    $country= str_ireplace(" ","-",$country);
                                    $unloading_port  = $MobileResult->UNLOADING_PORT;
                                     $args = $args??[];
                                    // Hs code Url
                                    $arg = $arg??[];
                                    
                                     //dd($filterby1,$args,$searchDetails1,$arg);
                                     //dd($filterby,$filterby1,$args);
                                     $searchDetailsParts = explode(',', $searchDetails1);
                                    $all_numeric = true;
                                    
                                    foreach ($searchDetailsParts as $part) {
                                        if (!is_numeric($part)) {
                                            $all_numeric = false;
                                            break;
                                        }
                                    }
                                  
                                    if ($all_numeric) {
                                        
                                        # code...
                                          $filterdata = str_ireplace(" ", "-", $filterdata);
                                          $filterdata1 = str_ireplace(" ", "-", $filterdata1);
                                          $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                        if(count($args)==6){
                                             if($filterby1=='unloading_port'){
                                                 $hs_code_url =  route('searchfilterone', ['type' => $type, 'role' => $role,'filterby1' => 'unloading_port','filterby'=>$filterby,'filterdata'=>$res_hs_code,'filterdata1' => $unloading_port]);
                                                 $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $Dresult->DESTINATION_COUNTRY]);
                                                 $port_url = route('searchfilterone', ['type' => $type, 'role' => $role,'filterby1' => 'unloading_port','filterby'=>$filterby,'filterdata'=>$res_hs_code,'filterdata1' => $unloading_port]);
                                             }else if($filterby1=='country'){
                                                // dd($filterby,$filterby1,$args,$filterdata);
                                                $hs_code_url = route('searchfilterone', ['type' => $type, 'role' => $role,'filterby1' => 'country','filterby'=>$filterby,'filterdata'=>$searfilterdata,'filterdata1' => $country]);
                                                $country_url = route('searchfilterone', ['type' => $type, 'role' => $role,'filterby1' => 'country','filterby'=>$filterby,'filterdata'=>$searfilterdata,'filterdata1' => $country]);
                                                $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $country, 'filterdata1' => $unloading_port]);
                                             }
                                        }
                                        else if(count($args)==8){
                                        //dd('In Country Args',$args,$filterby1,$filterby,$filterdata,$filterdata1,$search,$filterby1);
                                              if($filterby1 == 'country'){
                                                
                                                 //dd('In Country Args',$args,$filterby1,$filterby,$filterdata,$filterdata1,$search,$filterby1);
                                                 //Hs Code URl
                                                 $hs_code_url =  route('search-filter-one', ['type' => $type, 'role' => $role,'search'=>$search,'base_search'=>$res_hs_code??'null', 'filterby1' => $filterby1,'filterby'=>$filterby,'filterdata'=>$filterdata,'filterdata1' => $filterdata1??'null']);
                                                 
                                                 //Country Url
                                                 $country_url =  route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby1,'filterby'=>$search,'filter'=>$searchDetails1,'filterby1'=>$filterby,'filterdata' => $filterdata, 'filterdata1' => $country]);
                                                 
                                                 //Port Url
                                                 $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby1,'filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata, 'filterdata1' => $country]);
                                                 
                                              }else if($filterby1 == 'hs_code'){
                                                   $base_search = $search;
                                                   $port_url = route('filter-two', [
                                                        'type' => $type, 
                                                        'role' => $role,
                                                        'search' => $base_search,
                                                        'searchDetails1' => $searchDetails1, 
                                                        'filterby2' => 'unloading_port',
                                                        'filterby' => $filterby,
                                                        'filter' => $filterdata,
                                                        'filterby1' => $filterby1,
                                                        'filterdata' => $filterdata1,
                                                        'filterdata1' => $unloading_port ?? 'Default'
                                                    ]);

                                              }else if($filterby1 == 'unloading_port'){
                                               
                                                    $base_search = $search;
                                                      //dd($filterby,$filterby1,$args);
                                                     $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                                     //Hs code Url
                                                     $hs_code_url =  route('search-filter-one', ['type' => $type, 'role' => $role,'search'=>$search,'base_search'=>$res_hs_code??'null', 'filterby1' => 'unloading_port','filterby'=>$filterby,'filterdata'=>$filterdata,'filterdata1' => $unloading_port??'null']);
                                                    
                                                     //Country Url
                                                     $country_url =  route('search-filter-one', ['type' => $type, 'role' => $role,'search'=>$search,'base_search'=>$searchDetails1, 'filterby1' => 'unloading_port','filterby'=>$filterby,'filterdata'=>$filterdata,'filterdata1' => $unloading_port??'null']);
                                                    
                                                    //Port Url 
                                                     $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                              }
                                         }
                                         else if(count($arg)==8){
                                             $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                             
                                            if($filterby2 == 'hs_code'){
                                               //Hs_code
                                               $hs_code_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $country??"null"]);
                                               //Country Url
                                               $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata, 'filterdata1' => $Dresult->DESTINATION_COUNTRY]);
                                               //Port Url
                                               $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                            }else if($filterby2 == 'country'){
                                               //dd($filterby,$filterby1,$arg,$filterby2,$search,$searchDetails1);
                                               //$hs_code_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=> $filterby,'searchDetails1'=>$res_hs_code, 'filterby2' => 'country','filterby'=>$filterby1,'filter'=>$filterdata,'filterby1'=>$filterby2,'filterdata' => $filterdata1, 'filterdata1' => $country??"null"]);
                                               $hs_code_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$res_hs_code,'filterby1'=>$filterby1,'filterdata' => $filterdata, 'filterdata1' => $filterdata1]);
                                               $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata, 'filterdata1' => $Dresult->DESTINATION_COUNTRY]);
                                               $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $filterdata1??'default']);
                                               
                                             }else if($filterby2 == 'unloading_port'){
                                                //Hs_code
                                                $hs_code_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                //Country url
                                               $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                //Port Url                                                           //Port Url 
                                               $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                               
                                             }
                                          } else if(count($arg)==10){
                                             $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                              //dd($filterby,$filterby1,$arg,$filterby2);
                                            if($filterby2 == 'hs_code'){
                                               //Hs_code
                                               $hs_code_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $country??"null"]);
                                               //Country Url
                                               $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata, 'filterdata1' => $Dresult->ORIGIN_COUNTRY]);
                                               //Port Url
                                               $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                            }else if($filterby2 == 'country'){
                                               $hs_code_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $country??"null"]);
                                               $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata, 'filterdata1' => $Dresult->DESTINATION_COUNTRY]);
                                               $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                               
                                             }else if($filterby2 == 'unloading_port'){
                                                //Hs_code
                                                $hs_code_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                //Country url
                                               $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                //Port Url                                                           //Port Url 
                                               $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                               
                                             }
                                          }
                                        else{
                                              $country_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $Dresult->ORIGIN_COUNTRY]);
                                          }
                                        // $country_url = route('search-filter', ['type' => $type, 'role' => $role,'searchDetails' => $hscode, 'filterby' => 'country', 'filterdata' => $country]);
                                    }else{
                                        //dd('IN Else Block',$filterby,$filterby1,$args);
                                        if(count($args)==6){
                                             if($filterby1=='unloading_port'){
                                                 $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $Dresult->DESTINATION_COUNTRY]);
                                             }else if($filterby1=='country'){
                                                $country_url = route('searchfilterone', ['type' => $type, 'role' => $role,'filterby1' => 'country','filterby'=>$filterby,'filterdata'=>$searfilterdata,'filterdata1' => $country]);
                                             }
                                        }
                                        else if(count($args)==8){
                                        
                                              if($filterby1 == 'country'){
                                              
                                                 //dd('In Country Args','search',$search,'searchDetails1',$searchDetails1,$filterby1,'filterby',$filterby,'filter',$filterdata,'filterdata', $filterdata1);
                                                 //Hs Code URl
                                                 $hs_code_url =  route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby1,'filterby'=>$search,'filter'=>$searchDetails1,'filterby1'=>$filterby,'filterdata' => $filterdata, 'filterdata1' => $country]);
                                                 
                                                 //Country Url
                                                 $country_url =  route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby1,'filterby'=>$search,'filter'=>$searchDetails1,'filterby1'=>$filterby,'filterdata' => $filterdata, 'filterdata1' => $country]);
                                                 
                                                 //Port Url
                                                 $port_url =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1,'filterdata1' => $unloading_port??'Default']);
                                                 
                                              }else if($filterby1 == 'hs_code'){
                                                   $base_search = $search;
                                                   $port_url = route('filter-two', [
                                                        'type' => $type, 
                                                        'role' => $role,
                                                        'search' => $base_search,
                                                        'searchDetails1' => $searchDetails1, 
                                                        'filterby2' => 'unloading_port',
                                                        'filterby' => $filterby,
                                                        'filter' => $filterdata,
                                                        'filterby1' => $filterby1,
                                                        'filterdata' => $filterdata1,
                                                        'filterdata1' => $unloading_port ?? 'Default'
                                                    ]);

                                              }else if($filterby1 == 'unloading_port'){
                                               //dd('in Product Country Url');
                                                    $base_search = $search;
                                                     $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                                     $filterdata1 = str_ireplace(" ", "-", $filterdata1);
                                                 //Hs Code URl
                                                 $hs_code_url =  route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby1,'filterby'=>$search,'filter'=>$searchDetails1,'filterby1'=>$filterby,'filterdata' => $filterdata, 'filterdata1' => $unloading_port??'Default']);
                                                    
                                                 //Country Url
                                                 //dd($filterby,$filterdata,$searchDetails1,$search);
                                                 $country_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$res_hs_code,'filterby1'=>$filterby1,'filterdata' => $filterdata1,'filterdata1' => $country??'Default']);
                                                 
                                                 //Port Url
                                                 $port_url =  route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby1,'filterby'=>$search,'filter'=>$searchDetails1,'filterby1'=>$filterby,'filterdata' => $filterdata, 'filterdata1' => $unloading_port??'Default']);
                                              }
                                         }
                                         else if(count($arg)==8){
                                             $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                             
                                             if($filterby2 == 'country'){
                                               $hs_code_url =  route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby1,'filterby'=>$search,'filter'=>$searchDetails1,'filterby1'=>$filterby,'filterdata' => $filterdata, 'filterdata1' => $country]);
                                               $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata, 'filterdata1' => $Dresult->ORIGIN_COUNTRY]);
                                               //Port Url
                                               $port_url =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1,'filterdata1' => $unloading_port??'Default']);
                                             }else if($filterby2 == 'unloading_port'){
                                            
                                                    $base_search = $search;
                                                     $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                                     //Hs code Url
                                                     $hs_code_url =   route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                     //dd($type, $role,$filterby, $filter, $filterby1, $filterdata, $filterby2, $filterdata1);
                                                     //Country Url
                                                       $country_url  = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$filterby,'searchDetails1'=>$searchDetails1, 'filterby2' => 'country','filterby'=>$filterby1,'filter'=>$filterdata,'filterby1'=>$filterby2,'filterdata' => $filterdata1,'filterdata1' => $country??'Default']);
                                                    
                                                    //Port Url 
                                                     $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                                     
                                               //$country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                             }
                                          }else if(count($arg)==10){
                                             $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                              //dd($type, $role,$search,$searchDetails1,$filterby, $filter, $filterby1, $filterdata, $filterby2, $filterdata1);
                                            if($filterby2 == 'hs_code'){
                                               //Hs_code
                                                //dd($type, $role,$search,$searchDetails1,$filterby, $filter, $filterby1, $filterdata, $filterby2, $filterdata1);
                                               $hs_code_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $country??"null"]);
                                               //Country Url
                                               $country_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata, 'filterdata1' => $Dresult->DESTINATION_COUNTRY]);
                                               //Port Url
                                               $port_url = route('searchfiltertwo', ['type' => $type, 'role' => $role,'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$searchDetails1,'filterby1'=>$filterby1,'filterdata' => $filterdata ,'filterdata1' => $unloading_port??'default']);
                                            }else if($filterby2 == 'country'){
                                            //HS_code Url
                                                 $filterdata = str_ireplace(" ", "-", $filterdata);
                                                 $filterdata1 = str_ireplace(" ", "-", $filterdata1);
                                                //Hs_code
                                                //dd($type, $role,$search,$searchDetails1,$filterby, $filter, $filterby1, $filterdata, $filterby2, $filterdata1);
                                                
                                                $hs_code_url  =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata,'filterdata1' => $filterdata1??'Default']);
                                                //Country url
                                               $country_url  =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata,'filterdata1' => $filterdata1??'Default']);
                                                //Port Url                                                           
                                               $port_url  =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => $filterby2,'filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata,'filterdata1' => $filterdata1??'Default']);
                                               
                                               
                                             }else if($filterby2 == 'unloading_port'){
                                                 $filterdata = str_ireplace(" ", "-", $filterdata);
                                                 $filterdata1 = str_ireplace(" ", "-", $filterdata1);
                                                //Hs_code
                                                //dd($type, $role,$search,$searchDetails1,$filterby, $filter, $filterby1, $filterdata, $filterby2, $filterdata1);
                                                
                                                $hs_code_url  =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata,'filterdata1' => $filterdata1??'Default']);
                                                //Country url
                                               $country_url  =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata,'filterdata1' => $filterdata1??'Default']);
                                                //Port Url                                                           
                                               $port_url  =route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'unloading_port','filterby'=>$filterby,'filter'=>$filter,'filterby1'=>$filterby1,'filterdata' => $filterdata,'filterdata1' => $filterdata1??'Default']);
                                               
                                             }
                                          }
                                        else{
                                              $country_url = route('search-filter-two', ['type' => $type, 'role' => $role,'search'=>$search,'searchDetails1'=>$searchDetails1, 'filterby2' => 'country','filterby'=>$filterby,'filter'=>$filterdata,'filterby1'=>$filterby1,'filterdata' => $filterdata1, 'filterdata1' => $country??"null"]);
                                          }
                                        //$hs_code_url =  route('search-filter-one', ['type' => $type, 'role' => $role,'search'=>$search,'base_search'=>$searchDetails1??'null', 'filterby1' => 'hs_code','filterby'=>$filterby,'filterdata'=>$filterdata,'filterdata1' => $res_hs_code??'null']);
                                        //$country_url =  route('search-filter-one', ['type' => $type, 'role' => $role,'search'=>$search,'base_search'=>$searchDetails1, 'filterby1' => $filterby1,'filterby'=>$filterby,'filterdata'=>$filterdata,'filterdata1' => $country??'null']);
                                    }

                                @endphp
                               <div class="block max-w-md my-6 p-6 bg-white border border-gray-200 rounded-lg shadow">
                                <h5 class="mb-2 text-center text-2xl font-bold tracking-tight rounded bg-gray-100 text-blue-500">
                                    Shipment No. {{ $loop->iteration }}
                                </h5>
                                <div class="grid grid-cols-2">
                                    <div class="mt-4">
                                        <h1 class="text-md text-gray-800 font-medium uppercase">
                                            Date
                                        </h1>
                                    </div>
                                    <div class="mt-4">
                                        <p class="text-md font-normal">
                                            {{ $MobileResult->DATE ?? '' }}
                                        </p>
                                    </div>
                                    <div class="mt-4">
                                        <h1 class="text-md text-gray-800 font-medium uppercase">
                                            HS Code
                                        </h1>
                                    </div>
                                    <div class="mt-4">
                                        <p class="text-md font-normal">
                                            <a href="{{$hs_code_url}}" class="text-blue-600 hover:underline">
                                                {{ $MobileResult->HS_CODE ?? '' }}
                                            </a>
                                        </p>
                                    </div>
                                    <div class="mt-4">
                                        <h1 class="text-md text-gray-800 font-medium uppercase">
                                            Product Description
                                        </h1>
                                    </div>
                                    <div class="mt-4">
                                        <p class="text-md font-normal text-justify" style="word-wrap: word-break;">
                                            {{ strip_tags($MobileResult->PRODUCT_DESCRIPTION ?? '') }}
                                        </p>
                                    </div>
                                    <div class="mt-4">
                                        <h1 class="text-md text-gray-800 font-medium uppercase">
                                            Destination Country
                                        </h1>
                                    </div>
                                    <div class="mt-4">
                                        <p class="text-md font-normal">
                                            <a href="{{$country_url}}" class="text-blue-600 hover:underline">
                                                {{ $MobileResult->DESTINATION_COUNTRY ?? '' }}
                                            </a>
                                        </p>
                                    </div>
                                    <div class="mt-4">
                                        <h1 class="text-md text-gray-800 font-medium uppercase">
                                            Unloading Port
                                        </h1>
                                    </div>
                                    <div class="mt-4">
                                        <p class="text-md font-normal">
                                            <a href="{{$port_url}}" class="text-blue-600 hover:underline">
                                                {{ $MobileResult->UNLOADING_PORT ?? '' }}
                                            </a>
                                        </p>
                                    </div>
                                    <div class="mt-4">
                                        <h1 class="text-md text-gray-800 font-medium uppercase">
                                            Quantity
                                        </h1>
                                    </div>
                                    <div class="mt-4">
                                        <p class="text-md font-normal">
                                            {{ $MobileResult->QUANTITY ?? '' }}
                                        </p>
                                    </div>
                                    <div class="mt-4">
                                        <h1 class="text-md text-gray-800 font-medium uppercase">
                                            Unit
                                        </h1>
                                    </div>
                                    <div class="mt-4">
                                        <p class="text-md font-normal">
                                            {{ $MobileResult->UNIT ?? '' }}
                                        </p>
                                    </div>
                                    <div class="mt-4">
                                        <h1 class="text-md text-gray-800 font-medium uppercase">
                                            Weight
                                        </h1>
                                    </div>
                                    <div class="mt-4">
                                        <p class="text-md font-normal">
                                            {{ $MobileResult->WEIGHT ?? '' }}
                                        </p>
                                    </div>
                                    <div class="mt-4">
                                        <h1 class="text-md text-gray-800 font-medium uppercase">
                                            Importer Name
                                        </h1>
                                    </div>
                                    <div class="mt-4">
                                        <p class="text-md font-normal">
                                            <a href="#" class="text-blue-600 hover:underline">
                                                Importer Name
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                @endif
            </div>
        </section>
    
    @elseif($type == 'company')
        @if($role == 'import')
            {{-- Import Company Data --}}
            <section class="bg-white">
                <div class="mx-auto max-w-sreen-xl py-12 px-5">
                    <div class="flex justify-center">
                        <h1 class="mb-6 text-2xl lg:text-4xl text-center font-medium text-gray-800">
                            List Of 
                            <span class="text-blue-800 capitalize">{{ $desc }}&nbsp;{{ $role }}</span> 
                            In USA
                        </h1>
                    </div>  
                    <div class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                        @if(isset($result) && $result->count() > 0)
                            @foreach ($result as $result) 
                                <div class="max-w-sm p-6 bg-glory-blue border border-gray-200 rounded-lg shadow">
                                    <span class="flex items-center text-md font-semibold text-green-400 me-3 mb-4">
                                        <img src="{{url('public/frontend/flag/usa.png')}}" class="w-[10%] mr-2">
                                        USA
                                    </span>
                                    <a href="/usa-import" target="_blank">
                                        <h5 class="mb-4 text-xl font-medium text-white hover:underline line-clamp-2" style="word-break:break-all;">
                                            {{$result->Product_Description}}
                                        </h5>
                                    </a>
                                    <span class="flex items-center">
                                        <i class="fa-solid fa-box-open text-gray-200"></i>
                                        <p class="pl-2 text-lg font-semibold text-red-400" style="word-break:break-all;">
                                            {{$result->HS_Code}}
                                        </p>
                                    </span>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <!--Pagination-->
                    <div class="flex justify-end py-6">
                        <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between" aria-label="Table navigation">
                            <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                                <li>
                                    <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700">
                                        1
                                    </a>
                                </li>
                                <li>
                                    <p data-modal-target="crud-modal-1" data-modal-toggle="crud-modal-1" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                        2
                                    </p>
                                </li>
                                <li>
                                    <p data-modal-target="crud-modal-1" data-modal-toggle="crud-modal-1" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                        3
                                    </p>
                                </li>
                                <li>
                                    <p data-modal-target="crud-modal-1" data-modal-toggle="crud-modal-1" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700">
                                        Next
                                    </p>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </section>
        @elseif($role == 'export') 
            {{-- Import Company Data --}}
            <section class="bg-white">
                <div class="mx-auto max-w-sreen-xl py-12 px-5">
                    <div class="flex justify-center">
                        <h1 class="mb-6 text-4xl text-center font-medium text-gray-800">
                            List Of 
                            <span class="text-blue-800 capitalize">{{ $desc }}&nbsp;{{ $role }}</span> 
                            In USA
                        </h1>
                    </div>  
                    <div class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                        @if(isset($result) && $result->count() > 0)
                            @foreach ($result as $result) 
                                <div class="max-w-sm p-6 bg-glory-blue border border-gray-200 rounded-lg shadow">
                                    <span class="flex items-center text-md font-semibold text-green-400 me-3 mb-4">
                                        <img src="{{url('public/frontend/flag/usa.png')}}" class="w-[10%] mr-2">
                                        USA
                                    </span>
                                    <a href="/usa-import" target="_blank">
                                        <h5 class="mb-4 text-xl font-medium text-white hover:underline line-clamp-2" style="word-break:break-all;">
                                            {{$result->Products}}
                                        </h5>
                                    </a>
                                    <span class="flex items-center">
                                        <i class="fa-solid fa-box-open text-gray-200"></i>
                                        <p class="pl-2 text-lg font-semibold text-red-400" style="word-break:break-all;">
                                            {{$result->HS_Code}}
                                        </p>
                                    </span>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <!--Pagination-->
                    <div class="flex justify-end py-6">
                        <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between" aria-label="Table navigation">
                            <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                                <li>
                                    <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700">
                                        1
                                    </a>
                                </li>
                                <li>
                                    <p data-modal-target="crud-modal-1" data-modal-toggle="crud-modal-1" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                        2
                                    </p>
                                </li>
                                <li>
                                    <p data-modal-target="crud-modal-1" data-modal-toggle="crud-modal-1" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                        3
                                    </p>
                                </li>
                                <li>
                                    <p data-modal-target="crud-modal-1" data-modal-toggle="crud-modal-1" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700">
                                        Next
                                    </p>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </section>
        @else 
            <p class="text-4xl text-gray-800 text-center">Role Isn't Defined</p>
        @endif
    @else 
        @php
            return redirect()->to('search')
        @endphp
    @endif
    
    <!-- Modal Form -->
    <div id="crud-modal-1" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-opacity-60 backdrop-blur-sm transition-opacity duration-300">
        <div class="relative p-2 w-full max-w-4xl max-h-full px-5">
            <div class="relative grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 bg-white rounded-lg shadow">
                <div class="flex justify-center items-center">
                    <img class="w-4/5" src="{{ url('public/frontend/img/modal_form.png') }}">
                </div>
                <div>
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                        <h3 class="text-lg font-semibold text-gray-900">
                            Request For Complete Data
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="crud-modal-1">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal form -->
                    <form class="mx-auto px-5 lg:px-5 py-6" action="{{url('/modal')}}" method="POST" onsubmit="return validatecontactForm()" id="pop-up">
                      @csrf
                      <div class="grid md:grid-cols-2 md:gap-6">
                          <div class="relative z-0 w-full mb-5 group">
                              <input type="text" name="name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                              <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Name
                              </label>
                          </div>
                          <div class="relative z-0 w-full mb-5 group">
                              <input type="email" name="email" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                              <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                  Email
                              </label>
                          </div>
                      </div>
                      <div class="grid md:grid-cols-2 md:gap-6">
                          <div class="relative z-0 w-full mb-5 group">
                              <input type="tel" name="phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                              <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Phone number
                              </label>
                          </div>
                          <div class="relative z-0 w-full mb-5 group">
                              <input type="text" name="company" id="floating_company" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                              <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                  Company
                              </label>
                          </div>
                      </div>
                      <div class="relative z-0 w-full mb-5 group">
                          {{-- <label for="underline_select" class="sr-only">Underline select</label> --}}
                          <select name="role" id="underline_select" class="appearance-none block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                              <option selected>Choose...</option>
                              <option value="Import">Import</option>
                              <option value="Export">Export</option>
                              <option value="Both">Both</option>
                          </select>
                      </div>
                      <div class="relative z-0 w-full mb-5 group">
                          <input type="text" name="message" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" required />
                          <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Message
                          </label>
                      </div>
                      <input type="hidden" name="recaptcha_response" id="popup">
                      <div class="flex justify-center">
                          <button type="submit" class="text-white bg-gradient-to-r group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white focus:ring-2 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                              SUBMIT
                          </button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Form -->
    
    @include('frontend.footer')
    @include('frontend.script')

</body>
</html>