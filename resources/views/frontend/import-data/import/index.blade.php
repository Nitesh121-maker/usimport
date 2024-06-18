<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('frontend.link')
    <title>Data Directory - US Import Data</title>
</head>
<body>
    @include('frontend.header')

    {{-- Breadcrumb --}}
    <div class="mx-auto border border-r-0 border-l-0 border-gray-200">
        <nav class="flex px-16 pt-24 lg:pt-24 md:pt-28 pb-4 text-gray-700 bg-white" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="/" class="inline-flex items-center text-xs lg:text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path 
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"
                            />
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <a href="#" class="ms-1 text-xs lg:text-sm font-medium text-gray-900 hover:text-blue-600 md:ms-2 dark:text-gray-400">
                            Data Directory
                        </a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="line-clamp-1 ms-1 text-xs lg:text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">
                            Import Live Data
                        </span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>
    {{-- Breadcrumb --}}

    <section class="bg-white">
        <div class="py-12">
            <div class="px-5">
                <h1 class="mb-10 text-center text-5xl font-medium animate-text bg-gradient-to-r from-glory-red via-fuchsia-600 to-glory-blue bg-clip-text text-transparent">
                    Browse Our Data Directory
                </h1>
                <div class="col-span-1">
                    {{-- @dd($role) --}}
                    <ul class="mb-6 grid w-full gap-2 grid-cols-2 md:grid-cols-2" id="ButtonTab" data-tabs-toggle="#ButtonTab" role="tablist">
                        <li class="flex justify-end items-center text-center" role="presentation">
                            <button class="active text-md font-medium text-center items-center w-3/4 lg:w-1/5 p-3 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg cursor-pointer hover:text-gray-600 hover:bg-glory-blue hover:text-white aria-selected:bg-glory-blue aria-selected:text-white aria-selected:border-glory-blue" id="import-tab" data-tabs-target="#import" type="button" role="tab" aria-controls="import" aria-selected="false">
                                Import
                            </button>
                        </li>
                        <li class="flex justify-start items-center text-center" role="presentation">
                            <button class="text-md font-medium text-center items-center w-3/4 lg:w-1/5 p-3 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg cursor-pointer hover:text-gray-600 hover:bg-glory-blue hover:text-white aria-selected:bg-glory-blue aria-selected:text-white aria-selected:border-glory-blue" id="export-tab" data-tabs-target="#export" type="button" role="tab" aria-controls="export" aria-selected="false">
                                Export
                            </button>
                        </li>
                        {{-- @if ($role == 'import')
                            <a href="{{ route('directory.list',['letter'=>'a']) }}" class="active text-md font-medium text-center items-center w-3/4 lg:w-1/5 p-3 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg cursor-pointer hover:text-gray-600 hover:bg-glory-blue hover:text-white aria-selected:bg-glory-blue aria-selected:text-white aria-selected:border-glory-blue" id="import-tab" data-tabs-target="#import" type="button" role="tab" aria-controls="import" aria-selected="false">
                                Import
                            </a>
                        @else
                            <a href="{{ route('directoryexport.list',['letter'=>'a']) }}" class="text-md font-medium text-center items-center w-3/4 lg:w-1/5 p-3 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg cursor-pointer hover:text-gray-600 hover:bg-glory-blue hover:text-white aria-selected:bg-glory-blue aria-selected:text-white aria-selected:border-glory-blue" id="import-tab" data-tabs-target="#import" type="button" role="tab" aria-controls="import" aria-selected="false">
                                Export
                            </a>
                        @endif --}}
                    </ul>
                    {{-- <ul class="mb-6 grid w-full gap-2 grid-cols-2 md:grid-cols-2">
                        <li class="flex justify-end items-center text-center" id="usa-import">
                            <input checked type="radio" id="hosting-small" name="name" value="import" class="hidden peer">
                            <label for="hosting-small" class="inline-flex items-center w-3/4 lg:w-1/5 p-3 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg cursor-pointer peer-checked:bg-glory-blue peer-checked:border-glory-blue peer-checked:text-white hover:text-gray-600 hover:bg-glory-blue hover:text-white">                           
                                <div class="w-full text-md font-medium">
                                    Import
                                </div>  
                            </label>
                        </li>
                        <li class="flex justify-start items-center text-center">
                            <input type="radio" id="hosting-big" name="name" value="export" class="hidden peer">
                            <label for="hosting-big" class="inline-flex items-center w-3/4 lg:w-1/5 p-3 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg cursor-pointer peer-checked:bg-glory-blue peer-checked:border-glory-blue peer-checked:text-white hover:text-gray-600 hover:bg-glory-blue hover:text-white">
                                <div class="w-full text-md font-semibold">
                                    Export
                                </div>
                            </label>
                        </li>
                    </ul> --}}
                </div>
            </div>

            {{-- US Product --}}
            <div class="mx-auto max-w-screen-xl">
                <div class="py-4 px-5">
                    <h1 class="text-center text-4xl font-medium">
                        US Product Wise Import Data
                    </h1>
                </div>
            </div>
            {{-- US Product --}}
            
            <div id="ButtonTab">
                {{-- Import Product Tab --}}
                <div id="import" role="tabpanel" aria-labelledby="import-tab">
                    <div class="flex justify-start lg:justify-center px-2 py-3 max-w-6xl lg:max-w-full overflow-auto">
                        <nav class="flex mb-6" aria-label="Page navigation example">
                            <ul class="flex -space-x-px text-base h-10">
                                @foreach(range('A', 'Z') as $letter)
                                   @if ($letter == Str::upper($activeLetter))
                                       <li class="active">
                                            <a href="{{ route('directory.list', ['letter' => Str::lower($letter)]) }}" class="flex items-center justify-center px-4 h-10 leading-tight border border-gray-300 bg-blue-50 bg-glory-blue text-white">
                                                {{ $letter }}
                                            </a>
                                        </li>
                                   @else
                                   <li class="active">
                                        <a href="{{ route('directory.list', ['letter' => Str::lower($letter)]) }}" class="flex items-center justify-center px-4 h-10 leading-tight text-glory-blue bg-white border border-gray-300 bg-blue-50 hover:bg-glory-blue hover:text-white">
                                            {{ $letter }}
                                        </a>
                                    </li>
                                   @endif
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                    <div class="px-5 py-8">
                        <div class="grid gap-0 md:gap-2 lg:gap-2 grid-cols-1 md:grid-cols-5 lg:grid-cols-6">
                            <div class="col-span-1">
                                <ul class="flex-column space-y space-y-4 text-sm font-medium text-gray-500 md:me-4 mb-4 md:mb-0" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                                    <li class="mr-2" role="presentation">
                                        <button class="active inline-flex items-center justify-center w-full px-4 py-3 rounded-lg border border-gray-200 aria-selected:text-white aria-selected:bg-gradient-to-br from-glory-red to-glory-blue aria-selected:hover:text-gray-50 focus:outline-none" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                            Product Wise Data
                                        </button>
                                    </li>
                                    <li class="mr-2" role="presentation">
                                        <button class="inline-flex items-center justify-center w-full px-4 py-3 rounded-lg border border-gray-200 aria-selected:text-white aria-selected:bg-gradient-to-br from-glory-red to-glory-blue aria-selected:hover:text-gray-50 focus:outline-none" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">
                                            Company Wise Data
                                        </button>
                                    </li>
                                    <li class="mr-2" role="presentation">
                                        <button class="inline-flex items-center justify-center w-full px-4 py-3 rounded-lg border border-gray-200 aria-selected:text-white aria-selected:bg-gradient-to-br from-glory-red to-glory-blue aria-selected:hover:text-gray-50 focus:outline-none" id="productwise-tab" data-tabs-target="#productwise" type="button" role="tab" aria-controls="productwise" aria-selected="false">
                                            Product Wise Company
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-span-1 md:col-span-4 lg:col-span-5" id="myTabContent">
                                {{-- Product Wise Data --}}
                                <div id="profile" role="tabpanel" aria-labelledby="profile-tab" class="bg-transparent text-medium text-gray-500 rounded-lg w-full">
                                    <div class="grid gap-2 grid-cols-1 md:grid-cols-3 lg:grid-cols-4">
                                        {{-- @dd($result) --}}
                                        @php
                                            $productResults = $result;
                                        @endphp
                                        @if(isset($productResults) && count($productResults) > 0)
                                            @foreach ($productResults as $productResults)
                                                <a href="{{ route('product.list', ['type' => 'data', 'role' => 'import', 'description' => $productResults->product_name]) }}" target="_blank">
                                                    <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                                        <p class="text-lg font-medium capitalize">
                                                            {{ $productResults->product_name }}
                                                        </p>
                                                    </div>
                                                </a>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                
                                {{-- Company Wise Data --}}
                                <div id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab" class="bg-transparent text-medium text-gray-500 rounded-lg w-full">
                                    <div class="grid gap-2 grid-cols-1 md:grid-cols-3 lg:grid-cols-4">
                                        {{-- @dd($result) --}}
                                        @php
                                            $companyResults = $companyresult;
                                        @endphp
                                        @if(isset($companyResults) && count($companyResults) > 0)
                                            @foreach ($companyResults as $companyResults)
                                                <a href="{{ route('product.list', ['type' => 'company', 'role' => 'import', 'description' => $companyResults->company_name]) }}" target="_blank">
                                                    <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                                        <p class="text-lg font-medium capitalize">
                                                            {{$companyResults->company_name}}
                                                        </p>
                                                    </div>
                                                </a>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
        
                                {{-- Product Wise Company Data --}}
                                <div id="productwise" role="tabpanel" aria-labelledby="productwise-tab" class="bg-transparent text-medium text-gray-500 rounded-lg w-full">
                                    <div class="grid gap-2 grid-cols-1 md:grid-cols-3 lg:grid-cols-4">
                                        @php
                                            $companyResults = $result;
                                        @endphp
                                        @if(isset($companyResults) && count($companyResults) > 0)
                                            @foreach ($companyResults as $companyResults)
                                                <a href="{{ route('product.list', ['type' => 'company', 'role' => 'import', 'description' => $companyResults->product_name]) }}" target="_blank">
                                                    <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                                        <p class="text-lg font-medium capitalize">
                                                            {{$companyResults->product_name}}
                                                        </p>
                                                    </div>
                                                </a>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Pagination --}}
                        <div class="flex justify-center mt-8 px-5">
                            <nav aria-label="Page navigation example">
                                <ul class="inline-flex -space-x-px text-base h-10">
                                    <li>
                                        <a href="#" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700">
                                            Previous
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" aria-current="page" class="flex items-center justify-center px-4 h-10 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700">
                                            1
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                            2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                            3
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                            4
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                            5
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700">
                                            Next
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                {{-- Export Product Tab --}}
                <div id="export" role="tabpanel" aria-labelledby="export-tab">
                    <div class="flex justify-start lg:justify-center px-2 py-3 max-w-6xl lg:max-w-full overflow-auto">
                        <nav class="flex mb-6" aria-label="Page navigation example">
                            <ul class="flex -space-x-px text-base h-10">
                                @foreach(range('A', 'Z') as $letter)
                                   @if ($letter == Str::upper($activeLetter))
                                       <li class="active">
                                            <a href="{{ route('directoryexport.list', ['letter' => Str::lower($letter)]) }}" class="flex items-center justify-center px-4 h-10 leading-tight border border-gray-300 bg-blue-50 bg-glory-blue text-white">
                                                {{ $letter }}
                                            </a>
                                        </li>
                                   @else
                                   <li class="active">
                                        <a href="{{ route('directoryexport.list', ['letter' => Str::lower($letter)]) }}" class="flex items-center justify-center px-4 h-10 leading-tight text-glory-blue bg-white border border-gray-300 bg-blue-50 hover:bg-glory-blue hover:text-white">
                                            {{ $letter }}
                                        </a>
                                    </li>
                                   @endif
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                    <div class="px-5 py-8">
                        <div class="grid gap-0 md:gap-2 lg:gap-2 grid-cols-1 md:grid-cols-5 lg:grid-cols-6">
                            <div class="col-span-1">
                                <ul class="flex-column space-y space-y-4 text-sm font-medium text-gray-500 md:me-4 mb-4 md:mb-0" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                                    <li class="mr-2" role="presentation">
                                        <button class="active inline-flex items-center justify-center w-full px-4 py-3 rounded-lg border border-gray-200 aria-selected:text-white aria-selected:bg-gradient-to-br from-glory-red to-glory-blue aria-selected:hover:text-gray-50 focus:outline-none" id="export-profile-tab" data-tabs-target="#exportprofile" type="button" role="tab" aria-controls="exportprofile" aria-selected="false">
                                            Product Wise Data
                                        </button>
                                    </li>
                                    <li class="mr-2" role="presentation">
                                        <button class="inline-flex items-center justify-center w-full px-4 py-3 rounded-lg border border-gray-200 aria-selected:text-white aria-selected:bg-gradient-to-br from-glory-red to-glory-blue aria-selected:hover:text-gray-50 focus:outline-none" id="export-dashboard-tab" data-tabs-target="#exportdashboard" type="button" role="tab" aria-controls="exportdashboard" aria-selected="false">
                                            Company Wise Data
                                        </button>
                                    </li>
                                    <li class="mr-2" role="presentation">
                                        <button class="inline-flex items-center justify-center w-full px-4 py-3 rounded-lg border border-gray-200 aria-selected:text-white aria-selected:bg-gradient-to-br from-glory-red to-glory-blue aria-selected:hover:text-gray-50 focus:outline-none" id="export-productwise-tab" data-tabs-target="#exportproductwise" type="button" role="tab" aria-controls="exportproductwise" aria-selected="false">
                                            Product Wise Company
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-span-1 md:col-span-4 lg:col-span-5" id="myTabContent">
                                {{-- Product Wise Data --}}
                                <div id="exportprofile" role="tabpanel" aria-labelledby="export-profile-tab" class="bg-transparent text-medium text-gray-500 rounded-lg w-full">
                                    <div class="grid gap-2 grid-cols-1 md:grid-cols-3 lg:grid-cols-4">
                                        {{-- @dd($result) --}}
                                        @php
                                            $productResults = $result;
                                        @endphp
                                        @if(isset($productResults) && count($productResults) > 0)
                                            @foreach ($productResults as $productResults)
                                                <a href="{{ route('product.list', ['type' => 'data', 'role' => 'export', 'description' => $productResults->product_name]) }}" target="_blank">
                                                    <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                                        <p class="text-lg font-medium capitalize">
                                                            {{ $productResults->product_name }}
                                                        </p>
                                                    </div>
                                                </a>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                
                                {{-- Company Wise Data --}}
                                <div id="exportdashboard" role="tabpanel" aria-labelledby="export-dashboard-tab" class="bg-transparent text-medium text-gray-500 rounded-lg w-full">
                                    <div class="grid gap-2 grid-cols-1 md:grid-cols-3 lg:grid-cols-4">
                                        @php
                                            $companyResults = $result;
                                        @endphp
                                        @if(isset($companyResults) && count($companyResults) > 0)
                                            @foreach ($companyResults as $companyResults)
                                                <a href="{{ route('product.list', ['type' => 'company', 'role' => 'export', 'description' => $companyResults->company_name]) }}" target="_blank">
                                                    <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                                        <p class="text-lg font-medium capitalize">
                                                            {{$companyResults->company_name}}
                                                        </p>
                                                    </div>
                                                </a>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
        
                                {{-- Product Wise Company Data --}}
                                <div id="exportproductwise" role="tabpanel" aria-labelledby="export-productwise-tab" class="bg-transparent text-medium text-gray-500 rounded-lg w-full">
                                    <div class="grid gap-2 grid-cols-1 md:grid-cols-3 lg:grid-cols-4">
                                        @php
                                            $companyResults = $result;
                                        @endphp
                                        @if(isset($companyResults) && count($companyResults) > 0)
                                            @foreach ($companyResults as $companyResults)
                                                <a href="{{ route('product.list', ['type' => 'company', 'role' => 'export', 'description' => $companyResults->product_name]) }}" target="_blank">
                                                    <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                                        <p class="text-lg font-medium capitalize">
                                                            {{$companyResults->product_name}}
                                                        </p>
                                                    </div>
                                                </a>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Pagination --}}
                        <div class="flex justify-center mt-8 px-5">
                            <nav aria-label="Page navigation example">
                                <ul class="inline-flex -space-x-px text-base h-10">
                                    <li>
                                        <a href="#" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700">
                                            Previous
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" aria-current="page" class="flex items-center justify-center px-4 h-10 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700">
                                            1
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                            2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                            3
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                            4
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                            5
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700">
                                            Next
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div?>
    </section>

    @include('frontend.footer')
    @include('frontend.script')
</body>
</html>