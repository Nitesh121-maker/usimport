<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @include('frontend.link')
        @php
            $base_search = ($hs_code === null) ? $desc : $hs_code;
        @endphp

    @if($type=='data')
         @if($hs_code)
                <title>US {{$role}} Data Under The HS Code {{$base_search}}</title>
                <meta name="description" content="US import Data under HS Code {{$base_search}},  Our US bill of lading Data reports include hs code, date, unit, product description, loading and unloading ports, importer name and address, quantity, etc.">
         @else
                <title>US {{$base_search}} {{$role}} Data - list of {{$base_search}} {{$role}}ers in us </title>
                <meta name="description" content="{{$base_search}} {{$role}} data of us - us {{$base_search}} {{$role}}ers, our bill of lading reports include hs code, date, unit, product description, loading and unloading ports, exporter name and address, quantity, etc.">
         @endif
    @else
         @if($hs_code)
                <title>List of All HS code {{$base_search}} {{$role}}er data in USA </title>
                <meta name="description" content="List of all HS code {{$base_search}} {{$role}}er in usa on the basis of real time shipments data. Our bill of lading reports include HS code, product description, unit, weight, quantity, exporter name & address etc">
         @else
                <title>List of All {{$base_search}} {{$role}}er data in USA </title>
                <meta name="description" content="List of all {{$base_search}} {{$role}}er in usa on the basis of real time shipments data. Our bill of lading reports include HS code, product description, unit, weight, quantity, exporter name & address etc">
         @endif

    @endif

</head>
<body>
    @include('frontend.header')

    {{-- Breadcrumb --}}

        @php
            $desc = trim($desc, '"');
            $base_search = ($hs_code === null) ? $desc : $hs_code;
            $isNumeric = is_numeric($base_search);
            $search = $isNumeric ? 'hscode' : 'product';
        @endphp
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
                        <a href="/search-live-data" class="ms-1 text-sm font-medium text-gray-900 hover:text-blue-600 md:ms-2">
                            Search Live Data
                        </a>
                    </div>
                </li>
                <li class="inline-flex items-center" aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 capitalize">
                            @if ($desc)
                                {{ $base_search }}&nbsp;{{ $role }} Live Data
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
                @if($type=='data')
                       @if($hs_code)
                             <h1 class="mb-3 text-center text-white font-medium text-2xl lg:text-4xl uppercase" style="word-break:break-all;"> 
                                US {{ $role }} Data Under The HS Code {{ $base_search }}
                             </h1>
                        @elseif($desc)
                             <h2 class="mb-3 text-center text-white font-medium text-2xl lg:text-4xl uppercase" style="word-break:break-all;">
                                {{ $base_search }}&nbsp;{{ $role }} Data Of USA || {{ $base_search }}&nbsp;{{ $role }}ers
                            </h2>
                        @else
                             <h2 class="mb-3 text-center text-white font-medium text-2xl lg:text-4xl uppercase" style="word-break:break-all;">
                                US {{ $base_search }}&nbsp;{{ $role }} data Under HS Code {{ $base_search }} || {{ $base_search }} importer 
                            </h2>
                        @endif
                @else
                       @if($hs_code)
                             <h1 class="mb-3 text-center text-white font-medium text-2xl lg:text-4xl uppercase" style="word-break:break-all;">
                                HS CODE {{ $base_search }}&nbsp;{{ $role }} Data Of USA ||  HS CODE {{ $base_search }}&nbsp;{{ $role }}ers
                             </h1>
                        @else
                             <h2 class="mb-3 text-center text-white font-medium text-2xl lg:text-4xl uppercase" style="word-break:break-all;">
                                {{ $base_search }}&nbsp;{{ $role }} Data Of USA || {{ $base_search }}&nbsp;{{ $role }}ers
                            </h2>
                        @endif
                @endif
                
                @if($type == 'data')
                    @if($hs_code)
                        @if($role == 'import')
                            <p class="mb-3 text-center text-gray-200 font-normal text-md lg:text-lg" style="word-break:break-all;">
                                Search Live HS Code {{ $base_search }}&nbsp;{{ $role }} data of USA and Understand what 
                                Commodities USA imports under the HS Code of {{ $base_search }}.
                            </p>
                        @elseif($role == 'export')
                            <p class="mb-3 text-center text-gray-200 font-normal text-md lg:text-lg" style="word-break:break-all;">
                                Search Live HS Code {{ $base_search }}&nbsp;{{ $role }} data of USA and Understand what 
                                Commodities USA exports under the HS Code of {{ $base_search }}.
                            </p>
                        @endif
                    @else
                        @if($role == 'import')
                            <p class="mb-3 text-center text-gray-200 font-normal text-md lg:text-lg" style="word-break:break-all;">
                                Search {{ $base_search }}&nbsp;{{ $role }} Data of the USA and our bill of lading reports, which include hs code, 
                                date, b/l number, product description, loading and unloading ports, us importer name, quantity, etc.
                            </p>
                        @elseif($role == 'export')
                            <p class="mb-3 text-center text-gray-200 font-normal text-md lg:text-lg" style="word-break:break-all;">
                                Search {{ $base_search }}&nbsp;{{ $role }} Data of the USA and our bill of lading reports, which include hs code, 
                                date, b/l number, product description, loading and unloading ports, us exporter name, quantity, etc.
                            </p>
                        @endif
                    @endif
                @elseif($type == 'company')
                    @if($hs_code)
                        @if($role == 'import')
                            <p class="mb-3 text-center text-gray-200 font-normal text-md lg:text-lg" style="word-break:break-all;">
                                Search HS Code {{ $base_search }}&nbsp;{{ $role }}er data of USA Companies and know about what Commodities USA 
                                Compaines Import under the hs code {{ $base_search }}.
                            </p>
                        @elseif($role == 'export')
                            <p class="mb-3 text-center text-gray-200 font-normal text-md lg:text-lg" style="word-break:break-all;">
                                Search HS Code {{ $base_search }}&nbsp;{{ $role }}er data of USA Companies and know about what Commodities USA 
                                Compaines Export under the hs code {{ $base_search }}.
                            </p>
                        @endif    
                    @else
                        @if($role == 'import')
                            <p class="mb-3 text-center text-gray-200 font-normal text-md lg:text-lg" style="word-break:break-all;">
                                Search {{ $base_search }}&nbsp;{{ $role }}er Data of USA and our bill of lading reports include hs code, date, 
                                b/l number, product description, loading and unloading ports, us importers name, quantity, etc.
                            </p>
                         @elseif($role == 'export')
                            <p class="mb-3 text-center text-gray-200 font-normal text-md lg:text-lg" style="word-break:break-all;">
                                Search {{ $base_search }}&nbsp;{{ $role }}er Data of USA and our bill of lading reports include hs code, date, 
                                b/l number, product description, loading and unloading ports, us exporters name, quantity, etc.
                            </p>
                        @endif
                    @endif
                @endif
            </div>
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

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
                                    <label for="hosting-big" class="inline-flex items-center w-3/4  p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white hover:border-blue-600 hover:text-white hover:bg-blue-600">
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
                        <input name="hs_code" type="text" id="large-input" class="block w-full p-6 text-base text-gray-900 border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="HS Code" value = "{{$hs_code}}"/>
                        <input name="description" type="text" id="large-input" class="block w-full p-6 text-base text-gray-900 border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Description"value = "{{$desc}}"/>
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

    @if($type == 'data')
        {{-- Table Of desktop, Laptop & Tab View --}}
        <section class="bg-white py-12 hidden md:block lg:block">
            @if($role == 'import')
                {{-- Filter By Option --}}
                <div class="grid grid-cols-1 gap-4 lg:grid-cols-8 mb-8 px-5">
                    <div class="col-span-4 lg:col-span-2 flex items-center justify-center lg:justify-end">
                        <h2 class="text-end text-2xl font-medium">Filter By:</h2>
                    </div>
                    <div class="col-span-5">
                        {{-- @dd($hscode) --}}
                        <form action="">
                            <div class="grid gap-6 px-2 lg:px-5 grid-cols-1 md:grid-cols-3">
                                <div>
                                    <div class="relative text-center z-0 w-full mb-5 lg:mb-0 group">
                                        <label class="mb-2 text-sm font-medium">
                                            Choose HS Code
                                        </label>
                                        <select id="large-2" class="block w-full px-4 py-3 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
                                            <option value="">Choose HS Code</option>
                                            @php
                                                $SelectResult = $result;
                                            @endphp
                                            @if(isset($SelectResult) && $SelectResult->count() > 0)
                                                @php
                                                   $displaydHScode = []
                                                @endphp
                                                @foreach ($result as $SelectResult)
                                                    @php
                                                       $searched_hs_code = $SelectResult->HS_CODE??'null'
                                                    @endphp
                                                    @if(!in_array($searched_hs_code,$displaydHScode))
                                                        @if ($hs_code)
                                                            <option value="{{route('search-filter',['type'=>$type,'role'=>$role,'search'=>$search,'base_search' => $base_hs_code,'filterby'=>'hs_code','filterdata'=>$searched_hs_code??'null'])}}">
                                                               
                                                                @foreach(explode(',', $searched_hs_code ) as $searched_hs_code)
                                                                     {{ $searched_hs_code }}
                                                                @endforeach
                                                            </option>
                                                        @else
                                                            <option value="{{route('search-filter',['type'=>$type,'role'=>$role,'search'=>$search,'base_search' => $base_desc,'filterby'=>'hs_code','filterdata'=>$searched_hs_code??"null"])}}">
                                                                {{  $searched_hs_code }}
                                                            </option>
                                                        @endif
                                                        @php
                                                          $displaydHScode[] = $searched_hs_code
                                                        @endphp
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
                                                @php
                                                    $countriesDisplayed = [];
                                                @endphp
                                                
                                                @foreach ($result as $SelectResult)
                                                    @php
                                                        $country = $SelectResult->ORIGIN_COUNTRY ?? "null";
                                                    @endphp
                                                
                                                    @if (!in_array($country, $countriesDisplayed))
                                                        @if ($hs_code)
                                                            <option value="{{ route('search-filter', ['type' => $type, 'role' => $role,'search'=>$search, 'base_search' => $base_hs_code, 'filterby' => 'country', 'filterdata' => $country]) }}">
                                                                {{ $country }}
                                                            </option>
                                                        @else
                                                            <option value="{{ route('search-filter', ['type' => $type, 'role' => $role,'search'=>$search, 'base_search' => $base_desc, 'filterby' => 'country', 'filterdata' => $country]) }}">
                                                                {{ $country }}
                                                            </option>
                                                        @endif
                                                
                                                        @php
                                                            $countriesDisplayed[] = $country;
                                                        @endphp
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
                                                $portDisplayed = [];
                                            @endphp
                                            @if(isset($SelectResult) && $SelectResult->count() > 0)
                                                @foreach ($result as $SelectResult)
                                                    @php
                                     
                                                        $unloading_port = $SelectResult->UNLOADING_PORT ?? "null";
                                                    @endphp
                                                    @if (!in_array($unloading_port, $portDisplayed))
                                                       @if ($hs_code)
                                                            <option value="{{route('search-filter',['type'=>$type,'role'=>$role,'search'=>$search,'base_search' => $base_hs_code,'filterby'=>'unloading_port','filterdata'=>$SelectResult->UNLOADING_PORT??"null"])}}">
                                                                {{ $unloading_port }}
                                                            </option>
                                                       @else
                                                           <option value="{{route('search-filter',['type'=>$type,'role'=>$role,'search'=>$search,'base_search' => $base_desc,'filterby'=>'unloading_port','filterdata'=>$SelectResult->UNLOADING_PORT??"null"])}}">
                                                                {{ $unloading_port }}
                                                            </option>
                                                       @endif
                                                        @php
                                                            $portDisplayed[] = $unloading_port;
                                                        @endphp
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

                
                {{-- Import Table --}}
                <div class="mx-auto mx-w-screen-xl px-5 hidden md:block lg:block">
                    <div class="relative shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500" style="table-layout: fixed;">
                            <thead class="text-sm text-gray-700 uppercase bg-gray-200">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        <h3>Date</h3>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <h3>HS Code</h3>
                                    </th>
                                    <th scope="col" class="px-6 py-3" colspan="2">
                                        <h3>Product Description</h3> 
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <h3>Origin Country</h3>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <h3>Unloading Port</h3>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <h3>Qty.</h3>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <h3>Unit</h3>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <h3>Weight</h3>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <h3>Importer Name</h3>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $Dresult = $result;
                                      $iteration = 0;
                                @endphp
                                
                                @if(isset($Dresult) && $Dresult->count() > 0)
                                    @foreach ($Dresult as $Dresult)
                                        @php
                                            $iteration++;
                                             $res_hs_code = $Dresult->HS_CODE;
                                            $country = $Dresult->ORIGIN_COUNTRY;
                                            $unloading_port  = $Dresult->UNLOADING_PORT;

                                            // Hs code Url
                                            if ($hs_code) {
                                                # code...
                                                $hs_code_url = route('hs-code', ['type' => $type, 'role' => $role,'filterby' => 'hs_code', 'filterdata' => $res_hs_code]);
                                            } else {
                                                # code...
                                                $hs_code_url = route('search-filter', ['type' => $type, 'role' => $role,'search'=>$search,'base_search' => $base_desc, 'filterby' => 'hs_code', 'filterdata' => $res_hs_code??"null"]);
                                            }
                                            // Country URl
                                            if ($hs_code) {
                                                # code...
                                                $country_url = route('search-filter', ['type' => $type, 'role' => $role,'search'=>$search,'base_search' => $base_hs_code, 'filterby' => 'country', 'filterdata' => $country]);
                                            } else {
                                                # code...
                                                $country = str_ireplace(" ", "-", $country);
                                                $country_url = route('search-filter', ['type' => $type, 'role' => $role,'search'=>$search,'base_search' => $base_desc, 'filterby' => 'country', 'filterdata' => $country??"null"]);
                                            }
                                            // Port Url
                                            if ($hs_code) {
                                                # code...
                                                $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                                $port_url = route('search-filter', ['type' => $type, 'role' => $role,'search'=>$search,'base_search' => $base_hs_code, 'filterby' => 'unloading_port', 'filterdata' => $unloading_port]);
                                            } else {
                                                # code...
                                                $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                                $port_url = route('search-filter', ['type' => $type, 'role' => $role,'search'=>$search,'base_search' => $base_desc, 'filterby' => 'unloading_port', 'filterdata' => $unloading_port]);
                                            }
                                        @endphp
                                        
                                        <tr class="bg-white border-b hover:bg-gray-50">
                                            <td class="w-4 p-4 font-medium text-gray-900 align-top">
                                                {{ $Dresult->DATE }}
                                            </td>
                                            <td class="px-6 py-4 align-top">
                                                {{-- @dd('hs_code', $hs_code_url) --}}
                                                    <a href="{{ $hs_code_url }}" class="font-medium text-blue-600 hover:underline break-all" style="word-wrap: break-word;">
                                                        @foreach (explode(',', $Dresult->HS_CODE) as $code)
                                                            <div>{{ $code }}</div>
                                                        @endforeach
                                                    </a>
                                            </td>
                                            <td colspan="2" class="px-6 py-4 font-medium text-gray-900 align-top break-all" style="word-wrap: break-word;">
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
                                                <p>{{ $Dresult->WEIGHT }} {{ $Dresult->WEIGHT_UNIT }}</p>
                                            </td>
                                            <td class="px-6 py-4 font-medium align-top">
                                                <p data-modal-target="crud-modal-1" data-modal-toggle="crud-modal-1" class="font-medium text-blue-600 hover:underline transition-all">
                                                    Importer Name
                                                </p>
                                            </td>
                                        </tr>
                                        @if($iteration == 10)
                                            @break
                                        @endif
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">
                            <span class="text-sm font-normal text-gray-500 mb-4 p-4 block w-full md:inline md:w-auto">
                                Showing 
                                <span class="font-semibold text-gray-900">
                                    {{$iteration}}
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
                        <h2 class="text-end text-2xl font-medium">Filter By:</h2>
                    </div>
                    <div class="col-span-5">
                        <form>
                            <div class="grid gap-6 px-2 lg:px-5 grid-cols-1 md:grid-cols-3">
                                <div>
                                    <div class="relative text-center z-0 w-full mb-5 lg:mb-0 group">
                                        <label class="mb-2 text-sm font-medium">
                                            Choose HS Code
                                        </label>
                                        <select id="large-2" class="block w-full px-4 py-3 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
                                            <option value="">Choose HS Code</option>
                                            @php
                                                $SelectResult = $result;
                                            @endphp
                                            @if(isset($SelectResult) && $SelectResult->count() > 0)
                                                @foreach ($result as $SelectResult)
                                                {{-- @dd('data import') --}}
                                                    {{-- <option value="{{$SelectResult->HS_CODE}}">{{$SelectResult->HS_CODE}}</option> --}}
                                                    @if ($hs_code)
                                                        <option value="{{route('search-filter',['type'=>$type,'role'=>$role,'search'=>$search,'base_search' => $base_hs_code,'filterby'=>'hs_code','filterdata'=>$SelectResult->HS_CODE??'null'])}}">
                                                            {{ $SelectResult->HS_CODE??'null' }}
                                                        </option>
                                                    @else
                                                        <option value="{{route('search-filter',['type'=>$type,'role'=>$role,'search'=>$search,'base_search' => $base_desc,'filterby'=>'hs_code','filterdata'=>$SelectResult->HS_CODE??'null'])}}">
                                                            {{ $SelectResult->HS_CODE??'null' }}
                                                        </option>
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
                                                    @if ($hs_code)
                                                        <option value="{{route('search-filter',['type'=>$type,'role'=>$role,'search'=>$search,'base_search' => $base_hs_code,'filterby'=>'country','filterdata'=>$SelectResult->DESTINATION_COUNTRY??'null'])}}">
                                                            {{ $SelectResult->DESTINATION_COUNTRY??'null' }}
                                                        </option>
                                                        @else
                                                        <option value="{{route('search-filter',['type'=>$type,'role'=>$role,'search'=>$search,'base_search' => $base_desc,'filterby'=>'country','filterdata'=>$SelectResult->DESTINATION_COUNTRY??'null'])}}">
                                                            {{ $SelectResult->DESTINATION_COUNTRY??'null' }}
                                                        </option>
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
                                                   @if ($hs_code)
                                                        <option value="{{route('search-filter',['type'=>$type,'role'=>$role,'search'=>$search,'base_search' => $base_hs_code,'filterby'=>'unloading_port','filterdata'=>$SelectResult->UNLOADING_PORT??'null'])}}">
                                                            {{ $SelectResult->UNLOADING_PORT }}
                                                        </option>
                                                   @else
                                                       <option value="{{route('search-filter',['type'=>$type,'role'=>$role,'search'=>$search,'base_search' => $base_desc,'filterby'=>'unloading_port','filterdata'=>$SelectResult->UNLOADING_PORT??'null'])}}">
                                                            {{ $SelectResult->UNLOADING_PORT }}
                                                        </option>
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
                                        <h3>Date</h3>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <h3>HS Code</h3>
                                    </th>
                                    <th scope="col" class="px-6 py-3" colspan="2">
                                        <h3>Product Description</h3> 
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <h3>Destination Country</h3>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <h3>Unloading Port</h3>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <h3>Qty.</h3>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <h3>Unit</h3>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <h3>Weight</h3>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <h3>Exporter Name</h3>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                      $result = $result;
                                      $iteration = 0;
                                @endphp
                                @if(isset($result) && $result->count() > 0)
                                    @foreach ($result as $result)
                                    {{-- @dd($hs_code) --}}
                                        @php
                                            $iteration++;
                                            $res_hs_code = $result->HS_CODE;
                                            $country = $result->DESTINATION_COUNTRY;
                                            $unloading_port  = $result->UNLOADING_PORT;
                                            // Hs code Url
                                            if ($hs_code) {
                                                # code...
                                                $hs_code_url = route('hs-code', ['type' => $type, 'role' => $role,'filterby' => 'hs_code', 'filterdata' => $res_hs_code??'null']);
                                            } else {
                                                # code...
                                                $hs_code_url = route('search-filter', ['type' => $type, 'role' => $role,'search'=>$search,'base_search' => $base_desc, 'filterby' => 'hs_code', 'filterdata' => $res_hs_code??'null']);
                                            }
                                            // Country URl
                                            if ($hs_code) {
                                                # code...
                                                 $country = str_ireplace(" ", "-", $country??'null');
                                                $country_url = route('search-filter', ['type' => $type, 'role' => $role,'search'=>$search,'base_search' => $base_hs_code, 'filterby' => 'country', 'filterdata' => $country??'null']);
                                            } else {
                                                # code...
                                                 $country = str_ireplace(" ", "-", $country??'null');
                                                $country_url = route('search-filter', ['type' => $type, 'role' => $role,'search'=>$search,'base_search' => $base_desc, 'filterby' => 'country', 'filterdata' => $country??'null']);
                                            }
                                            // Port Url
                                            if ($hs_code) {
                                                # code...
                                                 $unloading_port = str_ireplace(" ", "-", $unloading_port??'null');
                                                $port_url = route('search-filter', ['type' => $type, 'role' => $role,'search'=>$search,'base_search' => $base_hs_code, 'filterby' => 'unloading_port', 'filterdata' => $unloading_port??'null']);
                                            } else {
                                                # code...
                                                 $unloading_port = str_ireplace(" ", "-", $unloading_port??'null');
                                                $port_url = route('search-filter', ['type' => $type, 'role' => $role,'search'=>$search,'base_search' => $base_desc, 'filterby' => 'unloading_port', 'filterdata' => $unloading_port??'null']);
                                            }
                                        @endphp
                                        {{-- @dd( $port_url) --}}
                                        <tr class="bg-white border-b hover:bg-gray-50">
                                            <td class="w-4 p-4 font-medium text-gray-900 align-top">
                                                <p>{{ $result->DATE }}</p>
                                            </td>
                                            <th scope="row" class="px-6 py-4 align-top">
                                                <a href="{{ $hs_code_url }}" class="font-medium text-blue-600 hover:underline" style="word-wrap: break-word;">
                                                    <!--{{ $result->HS_CODE }}-->
                                                    @foreach (explode(',', $result->HS_CODE) as $code)
                                                        <div>{{ $code }}</div>
                                                    @endforeach
                                                </a>
                                            </th>
                                            <td colspan="2" class="px-6 py-4 font-medium text-gray-900 align-top" style="word-wrap: break-word;">
                                                <p>{{$result->PRODUCT_DESCRIPTION }}</p>
                                            </td>
                                            <td class="px-6 py-4 align-top">
                                                <a href="{{ $country_url }}" class="font-medium text-blue-600 hover:underline">
                                                    {{ $result->DESTINATION_COUNTRY }}
                                                </a>
                                            </td>
                                            <td class="px-6 py-4 align-top">
                                                <a href="{{ $port_url }}" class="font-medium text-blue-600 hover:underline">
                                                    {{ $result->UNLOADING_PORT }}
                                                </a>
                                            </td>
                                            <td class="px-6 py-4 font-medium text-gray-900 align-top">
                                                <p>{{ $result->QUANTITY }}</p>
                                            </td>
                                            <td class="px-6 py-4 font-medium text-gray-900 align-top">
                                                <p>{{ $result->UNIT }}</p>
                                            </td>
                                            <td class="px-6 py-4 font-medium text-gray-900 align-top">
                                                <p>{{ $result->WEIGHT }}</p>
                                            </td>
                                            <td class="px-6 py-4 font-medium align-top">
                                                <p data-modal-target="crud-modal-1" data-modal-toggle="crud-modal-1" class="font-medium text-blue-600 hover:underline transition-all">
                                                    Exporter Name
                                                </p>
                                            </td>
                                        </tr>
                                        @if($iteration == 10)
                                            @break
                                        @endif
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    
                        <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">
                            <span class="text-sm font-normal text-gray-500 mb-4 p-4 block w-full md:inline md:w-auto">
                                Showing 
                                <span class="font-semibold text-gray-900">
                                     {{$iteration}}-10
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
                    <div class="col-span-5">
                        <form action="">
                            <div class="grid gap-6 px-2 lg:px-5 grid-cols-1 md:grid-cols-3">
                                    <div>
                                     
                                        <div class="relative text-center z-0 w-full mb-5 lg:mb-0 group">
                                            <label class="mb-2 text-sm font-medium">
                                                Choose HS Code
                                            </label>
                                            <select id="large" class="block w-full px-4 py-3 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
                                                <option value="">Choose HS Code</option>
                                                @php
                                                    $SelectResult = $result;
                                                @endphp
                                   
                                                @if(isset($SelectResult) && $SelectResult->count() > 0)
                                                    @php
                                                       $displaydHScode = []
                                                    @endphp
                                                    @foreach ($result as $SelectResult)
                                                        @php
                                                           $searched_hs_code = $SelectResult->HS_CODE??'null'
                                                        @endphp
                                                        @if(!in_array($hs_code,$displaydHScode))
                                                            @if ($hs_code)
                                                                <option value="{{route('search-filter',['type'=>$type,'role'=>$role,'search'=>$search,'base_search' => $base_hs_code,'filterby'=>'hs_code','filterdata'=>$searched_hs_code??'null'])}}">
                                                                   
                                                                    @foreach(explode(',', $searched_hs_code ) as $code)
                                                                         {{ $code }}
                                                                    @endforeach
                                                                </option>
                                                            @else
                                                                <option value="{{route('search-filter',['type'=>$type,'role'=>$role,'search'=>$search,'base_search' => $base_desc,'filterby'=>'hs_code','filterdata'=>$searched_hs_code??"null"])}}">
                                                                    {{  $searched_hs_code }}
                                                                </option>
                                                            @endif
                                                            @php
                                                              $displaydHScode[] = $searched_hs_code
                                                            @endphp
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
                                                    @php
                                                        $countriesDisplayed = [];
                                                    @endphp
                                                    
                                                    @foreach ($result as $SelectResult)
                                                        @php
                                                            $country = $SelectResult->ORIGIN_COUNTRY ?? "null";
                                                        @endphp
                                                    
                                                        @if (!in_array($country, $countriesDisplayed))
                                                            @if ($hs_code)
                                                                <option value="{{ route('search-filter', ['type' => $type, 'role' => $role,'search'=>$search, 'base_search' => $base_hs_code, 'filterby' => 'country', 'filterdata' => $country]) }}">
                                                                    {{ $country }}
                                                                </option>
                                                            @else
                                                                <option value="{{ route('search-filter', ['type' => $type, 'role' => $role,'search'=>$search, 'base_search' => $base_desc, 'filterby' => 'country', 'filterdata' => $country]) }}">
                                                                    {{ $country }}
                                                                </option>
                                                            @endif
                                                    
                                                            @php
                                                                $countriesDisplayed[] = $country;
                                                            @endphp
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
                                                       @if ($hs_code)
                                                            <option value="{{route('search-filter',['type'=>$type,'role'=>$role,'search'=>$search,'base_search' => $base_hs_code,'filterby'=>'unloading_port','filterdata'=>$SelectResult->UNLOADING_PORT??"null"])}}">
                                                                {{ $SelectResult->UNLOADING_PORT }}
                                                            </option>
                                                       @else
                                                           <option value="{{route('search-filter',['type'=>$type,'role'=>$role,'search'=>$search,'base_search' => $base_desc,'filterby'=>'unloading_port','filterdata'=>$SelectResult->UNLOADING_PORT??"null"])}}">
                                                                {{ $SelectResult->UNLOADING_PORT }}
                                                            </option>
                                                       @endif
                                                    @endforeach
                                                @endif
                                            </select> 
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        @php
                            $iteration = 0;
                            $MobileResult = $result;
                        @endphp
                        @if(isset($result) && is_iterable($result) && count($result) > 0)
                            @foreach ($result as $MobileResult)
                                <!--@php-->
                                <!--   $iteration++;-->
                                <!--@endphp-->
                                @php
                                    $iteration++;
                                     $res_hs_code = $MobileResult->HS_CODE;
                                    $country = $MobileResult->ORIGIN_COUNTRY;
                                    $unloading_port  = $MobileResult->UNLOADING_PORT;
                                    // Hs code Url
                                    if ($hs_code) {
                                        # code...
                                        $hs_code_url = route('search-filter', ['type' => $type, 'role' => $role,'search'=>$search,'base_search' => $base_hs_code, 'filterby' => 'hs_code', 'filterdata' => $res_hs_code]);
                                    } else {
                                        # code...
                                        $hs_code_url = route('search-filter', ['type' => $type, 'role' => $role,'search'=>$search,'base_search' => $base_desc, 'filterby' => 'hs_code', 'filterdata' => $res_hs_code??"null"]);
                                    }
                                    // Country URl
                                    if ($hs_code) {
                                        # code...
                                        $country_url = route('search-filter', ['type' => $type, 'role' => $role,'search'=>$search,'base_search' => $base_hs_code, 'filterby' => 'country', 'filterdata' => $country]);
                                    } else {
                                        # code...
                                        $country_url = route('search-filter', ['type' => $type, 'role' => $role,'search'=>$search,'base_search' => $base_desc, 'filterby' => 'country', 'filterdata' => $country??"null"]);
                                    }
                                    // Port Url
                                    if ($hs_code) {
                                        # code...
                                        $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                        $port_url = route('search-filter', ['type' => $type, 'role' => $role,'search'=>$search,'base_search' => $base_hs_code, 'filterby' => 'unloading_port', 'filterdata' => $unloading_port]);
                                    } else {
                                        # code...
                                        $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                        $port_url = route('search-filter', ['type' => $type, 'role' => $role,'search'=>$search,'base_search' => $base_desc, 'filterby' => 'unloading_port', 'filterdata' => $unloading_port]);
                                    }
                                @endphp
                                <div class="block max-w-md my-6 p-6 bg-white border border-gray-200 rounded-lg shadow">
                                    <h5 class="mb-2 text-center text-2xl font-bold tracking-tight rounded bg-gray-100 text-blue-500">
                                        Shipment No. {{ $loop->iteration }}
                                    </h5>
                                    <div class="grid grid-cols-1">
                                        <div class="mt-4">
                                            <h1 class="text-lg text-center text-gray-800 font-semibold uppercase">
                                                Date
                                            </h1>
                                        </div>
                                        <div class="mt-4">
                                            <p class="text-md text-center font-normal text-center">
                                                {{ $MobileResult->DATE ?? '' }} 
                                            </p>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="text-lg text-center text-gray-800 font-semibold uppercase">
                                                HS Code
                                            </h1>
                                        </div>
                                        <div class="mt-4">
                                            <p class="text-md text-center font-normal" style="word-wrap: break-word;">
                                                <a href="{{$hs_code_url}}" class="text-blue-600 hover:underline">
                                               
                                                    @foreach(explode(',', $MobileResult->HS_CODE  ) as $code)
                                                         {{ $code }}
                                                    @endforeach
                                                </a>
                                            </p>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="text-lg text-center text-gray-800 font-semibold uppercase">
                                                Product Description
                                            </h1>
                                        </div>
                                        <div class="mt-4">
                                            <p class="text-md text-center font-normal" style="word-wrap: break-word;">
                                                {{ strip_tags($MobileResult->PRODUCT_DESCRIPTION ?? '') }}
                                            </p>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="text-lg text-center text-gray-800 font-semibold uppercase">
                                                Origin Country
                                            </h1>
                                        </div>
                                        <div class="mt-4">
                                            <p class="text-md text-center font-normal">
                                                <a href="{{$country_url}}" class="text-blue-600 hover:underline">
                                                    {{ $MobileResult->ORIGIN_COUNTRY ?? '' }}
                                                </a>
                                            </p>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="text-lg text-center text-gray-800 font-semibold uppercase">
                                                Unloading Port
                                            </h1>
                                        </div>
                                        <div class="mt-4">
                                            <p class="text-md text-center font-normal">
                                                <a href="$port_url" class="text-blue-600 hover:underline">
                                                    {{ $MobileResult->UNLOADING_PORT ?? '' }}
                                                </a>
                                            </p>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="text-lg text-center text-gray-800 font-semibold uppercase">
                                                Quantity
                                            </h1>
                                        </div>
                                        <div class="mt-4">
                                            <p class="text-md text-center font-normal">
                                                {{ $MobileResult->QUANTITY ?? '' }}
                                            </p>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="text-lg text-center text-gray-800 font-semibold uppercase">
                                                Unit
                                            </h1>
                                        </div>
                                        <div class="mt-4">
                                            <p class="text-md text-center font-normal">
                                                {{ $MobileResult->UNIT ?? '' }}
                                            </p>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="text-lg text-center text-gray-800 font-semibold uppercase">
                                                Weight
                                            </h1>
                                        </div>
                                        <div class="mt-4">
                                            <p class="text-md text-center font-normal">
                                                {{ $MobileResult->WEIGHT ?? '' }}
                                            </p>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="text-lg text-center text-gray-800 font-semibold uppercase">
                                                Importer Name
                                            </h1>
                                        </div>
                                        <div class="mt-4">
                                            <p data-modal-target="crud-modal-1" data-modal-toggle="crud-modal-1" class="text-md text-center font-normal text-blue-600 hover:underline">
                                                Importer Name
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                            @if($iteration == 10)
                                                @break
                                            @endif
                            @endforeach
                        @endif
                    </div>
                @elseif($role == 'export')
                    <div class="col-span-4 lg:col-span-2 flex items-center justify-center lg:justify-end">
                        <h2 class="text-end text-2xl font-medium">Filter By:</h2>
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
                                                $SelectResult = $result;
                                            @endphp
                                
                                        <select id="large-2" class="block w-full px-4 py-3 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
                                            <option value="">Choose HS Code</option>

                                             @if(is_iterable($SelectResult))
                                                @foreach ($result as $SelectResult)
                                                {{-- @dd('data import') --}}
                                                    {{-- <option value="{{$SelectResult->HS_CODE}}">{{$SelectResult->HS_CODE}}</option> --}}
                                                    @if ($hs_code)
                                                        <option value="{{route('search-filter',['type'=>$type,'role'=>$role,'base_search' => $base_hs_code,'filterby'=>'hs_code','filterdata'=>$SelectResult->HS_CODE??'null'])}}">
                                                            {{ $SelectResult->HS_CODE??'null' }}
                                                        </option>
                                                    @else
                                                        <option value="{{route('search-filter',['type'=>$type,'role'=>$role,'base_search' => $base_desc,'filterby'=>'hs_code','filterdata'=>$SelectResult->HS_CODE??'null'])}}">
                                                            {{ $SelectResult->HS_CODE??'null' }}
                                                        </option>
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
                                            
                                          @if(is_iterable($SelectResult))
                                                @foreach ($result as $SelectResult)
                                                @if ($hs_code)
                                                    <option value="{{route('search-filter',['type'=>$type,'role'=>$role,'base_search' => $base_hs_code,'filterby'=>'country','filterdata'=>$SelectResult->DESTINATION_COUNTRY??'null'])}}">
                                                        {{ $SelectResult->DESTINATION_COUNTRY??'null' }}
                                                    </option>
                                                    @else
                                                    <option value="{{route('search-filter',['type'=>$type,'role'=>$role,'base_search' => $base_desc,'filterby'=>'country','filterdata'=>$SelectResult->DESTINATION_COUNTRY??'null'])}}">
                                                        {{ $SelectResult->DESTINATION_COUNTRY??'null' }}
                                                    </option>
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
                                             @if(is_iterable($SelectResult))
                                                @foreach ($result as $SelectResult)
                                                   @if ($hs_code)
                                                        <option value="{{route('search-filter',['type'=>$type,'role'=>$role,'base_search' => $base_hs_code,'filterby'=>'unloading_port','filterdata'=>$SelectResult->UNLOADING_PORT??'null'])}}">
                                                            {{ $SelectResult->UNLOADING_PORT }}
                                                        </option>
                                                   @else
                                                       <option value="{{route('search-filter',['type'=>$type,'role'=>$role,'base_search' => $base_desc,'filterby'=>'unloading_port','filterdata'=>$SelectResult->UNLOADING_PORT??'null'])}}">
                                                            {{ $SelectResult->UNLOADING_PORT }}
                                                        </option>
                                                   @endif
                                                @endforeach
                                            @endif
                                        </select> 
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        @php
                            $iteration = 0;
                            $MobileResult = $result;
                        @endphp
       
                        @if(is_iterable($SelectResult))
                            @foreach ($result as $MobileResult)
                                <!--@php-->
                                <!--   $iteration++;-->
                                <!--@endphp-->
                                @php
                                    $iteration++;
                                     $res_hs_code = $MobileResult->HS_CODE;
                                    $country = $MobileResult->ORIGIN_COUNTRY;
                                    $unloading_port  = $MobileResult->UNLOADING_PORT;
                                    // Hs code Url
                                    if ($hs_code) {
                                        # code...
                                        $hs_code_url = route('search-filter', ['type' => $type, 'role' => $role,'base_search' => $base_hs_code, 'filterby' => 'hs_code', 'filterdata' => $res_hs_code]);
                                    } else {
                                        # code...
                                        $hs_code_url = route('search-filter', ['type' => $type, 'role' => $role,'base_search' => $base_desc, 'filterby' => 'hs_code', 'filterdata' => $res_hs_code??"null"]);
                                    }
                                    // Country URl
                                    if ($hs_code) {
                                        # code...
                                        $country_url = route('search-filter', ['type' => $type, 'role' => $role,'base_search' => $base_hs_code, 'filterby' => 'country', 'filterdata' => $country]);
                                    } else {
                                        # code...
                                        $country_url = route('search-filter', ['type' => $type, 'role' => $role,'base_search' => $base_desc, 'filterby' => 'country', 'filterdata' => $country??"null"]);
                                    }
                                    // Port Url
                                    if ($hs_code) {
                                        # code...
                                        $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                        $port_url = route('search-filter', ['type' => $type, 'role' => $role,'base_search' => $base_hs_code, 'filterby' => 'unloading_port', 'filterdata' => $unloading_port]);
                                    } else {
                                        # code...
                                        $unloading_port = str_ireplace(" ", "-", $unloading_port);
                                        $port_url = route('search-filter', ['type' => $type, 'role' => $role,'base_search' => $base_desc, 'filterby' => 'unloading_port', 'filterdata' => $unloading_port]);
                                    }
                                @endphp
                                <div class="block max-w-md my-6 p-6 bg-white border border-gray-200 rounded-lg shadow">
                                    <h5 class="mb-2 text-center text-2xl font-bold tracking-tight rounded bg-gray-100 text-blue-500">
                                        Shipment No. {{ $loop->iteration }}
                                    </h5>
                                    <div class="grid grid-cols-1">
                                        <div class="mt-4">
                                            <h1 class="text-lg text-center text-gray-800 font-semibold uppercase">
                                                Date
                                            </h1>
                                        </div>
                                        <div class="mt-4">
                                            <p class="text-md text-center font-normal text-center">
                                                {{ $MobileResult->DATE ?? '' }} 
                                            </p>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="text-lg text-center text-gray-800 font-semibold uppercase">
                                                HS Code
                                            </h1>
                                        </div>
                                        <div class="mt-4">
                                            <p class="text-md text-center font-normal" style="word-wrap: break-word;">
                                                <a href="{{$hs_code_url}}" class="text-blue-600 hover:underline">
                                               
                                                    @foreach(explode(',', $MobileResult->HS_CODE  ) as $code)
                                                         {{ $code }}
                                                    @endforeach
                                                </a>
                                            </p>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="text-lg text-center text-gray-800 font-semibold uppercase" style="word-wrap: break-word;">
                                                Product Description
                                            </h1>
                                        </div>
                                        <div class="mt-4">
                                            <p class="text-md text-center font-normal">
                                                {{ strip_tags($MobileResult->PRODUCT_DESCRIPTION ?? '') }}
                                            </p>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="text-lg text-center text-gray-800 font-semibold uppercase">
                                                Destination Country
                                            </h1>
                                        </div>
                                        <div class="mt-4">
                                            <p class="text-md text-center font-normal">
                                                <a href="{{$country_url}}" class="text-blue-600 hover:underline">
                                                    {{ $MobileResult->DESTINATION_COUNTRY ?? '' }}
                                                </a>
                                            </p>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="text-lg text-center text-gray-800 font-semibold uppercase">
                                                Unloading Port
                                            </h1>
                                        </div>
                                        <div class="mt-4">
                                            <p class="text-md text-center font-normal">
                                                <a href="$port_url" class="text-blue-600 hover:underline">
                                                    {{ $MobileResult->UNLOADING_PORT ?? '' }}
                                                </a>
                                            </p>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="text-lg text-center text-gray-800 font-semibold uppercase">
                                                Quantity
                                            </h1>
                                        </div>
                                        <div class="mt-4">
                                            <p class="text-md text-center font-normal">
                                                {{ $MobileResult->QUANTITY ?? '' }}
                                            </p>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="text-lg text-center text-gray-800 font-semibold uppercase">
                                                Unit
                                            </h1>
                                        </div>
                                        <div class="mt-4">
                                            <p class="text-md text-center font-normal">
                                                {{ $MobileResult->UNIT ?? '' }}
                                            </p>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="text-lg text-center text-gray-800 font-semibold uppercase">
                                                Weight
                                            </h1>
                                        </div>
                                        <div class="mt-4">
                                            <p class="text-md text-center font-normal">
                                                {{ $MobileResult->WEIGHT ?? '' }}
                                            </p>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="text-lg text-center text-gray-800 font-semibold uppercase">
                                                Exporter Name
                                            </h1>
                                        </div>
                                        <div class="mt-4">
                                            <p data-modal-target="crud-modal-1" data-modal-toggle="crud-modal-1" class="text-md text-center font-normal text-blue-600 hover:underline">
                                                Exporter Name
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @if($iteration == 10)
                                    @break
                                @endif
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
                        <h2 class="mb-6 text-2xl lg:text-4xl text-center font-medium text-gray-800">
                            List of All
                                <span class="text-blue-800 capitalize">
                                    @if(!empty($hs_code) && !empty($desc))
                                        HS Code: {{ $hs_code }}  {{ $desc }}
                                    @elseif(!empty($hs_code))
                                        HS Code: {{ $hs_code }}
                                    @elseif(!empty($desc))
                                        {{ $desc }}
                                    @endif&nbsp;{{ $role }}ers
                                </span>

                            In USA
                        </h2>
                    </div>  
                    <div class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                        @if(isset($result) && $result->count() > 0)
                            @foreach ($result as $result) 
                                <div class="max-w-sm p-6 bg-glory-blue border border-gray-200 rounded-lg shadow">
                                    <span class="flex items-center text-md font-semibold text-green-400 me-3 mb-4">
                                        <img src="{{url('public/frontend/flag/usa.png')}}" class="w-[10%] mr-2">
                                        USA
                                    </span>
                                    @php
                                       $US_IMPORTER_NAME = str_ireplace(" ", "-", $result->US_IMPORTER_NAME);
                                       $base_search = str_replace(" ", "-",$base_search);
                                    @endphp
                                    
                                    <a href="{{route('Companydata',['base_search'=> $base_search,'role'=>$role,'companyname'=> $US_IMPORTER_NAME])}}" target="_blank">
                                        <h5 class="mb-4 text-xl font-medium text-white hover:underline" style="word-break:break-all;">
                                            {{$result->PRODUCT_DESCRIPTION}}
                                        </h5>
                                    </a>
                                    <span class="flex" style="align-items:baseline;">
                                        <i class="fa-solid fa-box-open text-gray-200"></i>
                                        <p class="pl-2 text-lg font-semibold text-red-400" style="word-break:break-all;">
                                            {{$result->US_IMPORTER_NAME}}
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
            {{-- Export Company Data --}}
            <section class="bg-white">
                <div class="mx-auto max-w-sreen-xl py-12 px-5">
                    <div class="flex justify-center">
                        <h1 class="mb-6 text-4xl text-center font-medium text-gray-800">
                            List Of All 
                            <span class="text-blue-800 capitalize">{{ $desc }}&nbsp;{{ $role }}er</span> 
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
                                     @php
                                       $US_EXPORTER_NAME = str_ireplace(" ", "-", $result->US_EXPORTER_NAME);
                                       $base_search = str_replace(" ", "-",$base_search);
                                    @endphp
                                    <a href="{{route('Companydata',['base_search',$base_search,'role'=>$role,'companyname'=> rawurlencode($result->US_EXPORTER_NAME??'null')])}}" target="_blank">
                                        <h5 class="mb-4 text-xl font-medium text-white hover:underline" style="word-break:break-all;">
                                            {{$result->PRODUCT_DESCRIPTION}}
                                        </h5>
                                    </a>
                                    <span class="flex" style="align-items:baseline;">
                                        <i class="fa-solid fa-box-open text-gray-200"></i>
                                        <p class="pl-2 text-lg font-semibold text-red-400" style="word-break:break-all;">
                                            {{$result->US_EXPORTER_NAME}}
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