<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('frontend.link')
    <title>Search - US Import Data</title>
</head>
<body>
    @include('frontend.header')

    {{-- Breadcrumb --}}
    <div class="mx-auto max-w-screen-xl">
        <nav class="flex px-5 pt-24 lg:pt-24 md:pt-28 pb-4 text-gray-700 bg-white" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
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
                        <a href="/search-live-data" class="line-clamp-1 ms-1 text-sm font-medium text-gray-900 hover:text-blue-600 md:ms-2 dark:text-gray-400">
                            Search Live Data
                        </a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="line-clamp-1 ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">
                            Import Live Data
                        </span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>

    {{-- search bar --}}
    <section class="bg-solid-blue">
        <div class="mx-auto max-w-screen-xl px-5 md:px-12 lg:px-5 py-16">
            <div class="px-5 mb-6">
                <h1 class="mb-3 text-center text-white font-medium text-4xl">
                    Search United States Shipping Manifest Databases
                </h1>
                <p class="mb-3 text-center text-gray-200 font-normal text-lg">
                    Search for your competitors and suppliers to reveal shipping activities 
                    and trading partners.
                </p>
            </div>
            {{-- Btn's --}}
            <div class="mb-6">
                <ul class="grid w-full gap-2 grid-cols-2 md:grid-cols-2">
                    <li class="flex justify-end items-center text-center">
                        <input checked type="radio" id="hosting-small" name="hosting" value="hosting-small" class="hidden peer" required />
                        <label for="hosting-small" class="inline-flex items-center w-3/4 lg:w-1/6 p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white hover:border-blue-600 hover:text-white hover:bg-blue-600">                           
                            <div class="w-full text-md font-semibold">Data</div>
                        </label>
                    </li>
                    <li class="flex justify-start items-center text-center">
                        <input type="radio" id="hosting-big" name="hosting" value="hosting-big" class="hidden peer">
                        <label for="hosting-big" class="inline-flex items-center w-3/4 lg:w-1/6  p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white hover:border-blue-600 hover:text-white hover:bg-blue-600">
                            <div class="w-full text-md font-semibold">Company</div>
                        </label>
                    </li>
                </ul>            
            </div>
            <div class="px-5 flex justify-center items-center">
                <form class="max-w-6xl mx-auto" method="GET" action="{{ url('/search-live')}}" enctype="multipart/form-data">
                    <div class="grid grid-cols-2 lg:flex">
                        <select name="role" id="large-input"  class="block w-full p-6 text-base text-gray-900 border border-gray-300 rounded-none lg:rounded-l-lg focus:ring-blue-500 focus:border-blue-500">
                            <option selected>Choose...</option>
                            <option value="import">Import</option>
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


    {{-- Table Of desktop, Laptop & Ta View --}}
    <section class="bg-white py-12 hidden lg:block">
        {{-- filter by --}}
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-8 mb-8 px-5">
            <div class="col-span-4 lg:col-span-2 flex items-center justify-center lg:justify-end">
                <h1 class="text-end text-2xl font-medium">Filter By:</h1>
            </div>
            <div class="col-span-5">
                <form>
                    <div class="grid gap-6 px-2 lg:px-5 grid-cols-1 md:grid-cols-3">
                        <div>
                            <div class="relative z-0 w-full mb-5 lg:mb-0 group">
                                <label for="underline_select" class="sr-only">Underline select</label>
                                <select id="underline_select" class="block py-2.5 px-0 w-full text-md font-medium text-gray-800 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                    <option selected>Choose Unloading Port</option>
                                    <option value="">1703, SAVANNAH, GA</option>
                                    <option value="">4601, NEW YORK/NEWARK AREA, NEWARK, NJ</option>
                                    <option value="">1401, NORFOLK, VA</option>
                                    <option value="">2811, OAKLAND, CA</option>
                                    <option value="">1803, JACKSONVILLE, FL</option>
                                    <option value="">0401, BOSTON, MA</option>
                                    <option value="">1601, CHARLESTON, SC</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <div class="relative z-0 w-full mb-5 lg:mb-0 group">
                                <label for="underline_select" class="sr-only">Underline select</label>
                                <select id="underline_select" class="block py-2.5 px-0 w-full text-md font-medium text-gray-800 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                    <option selected>Choose Origin Country</option>
                                    <option value="">CN, China</option>
                                    <option value="">VN, VIET NAM</option>
                                    <option value="">MY, MALAYSIA</option>
                                    <option value="">TW, TAIWAN</option>
                                    <option value="">TH, THAILAND</option>
                                    <option value="">JP, JAPAN</option>
                                    <option value="">AT, AUSTRIA</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <div class="relative z-0 w-full mb-5 lg:mb-0 group">
                                <label for="underline_select" class="sr-only">Underline select</label>
                                <select id="underline_select" class="block py-2.5 px-0 w-full text-md font-medium text-gray-800 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                    <option selected>Choose HS Code</option>
                                    <option value="">401170, 401190</option>
                                    <option value="">401170</option>
                                    <option value="">730210</option>
                                    <option value="">400122</option>
                                    <option value="">902230</option>
                                    <option value="">940161</option>
                                    <option value="">400129</option>
                                </select>
                            </div>
                        </div>  
                    </div>
                </form>
            </div>
            <div class="col-span-1"></div>
        </div>
        {{-- end of filter by --}}
        {{-- table --}}
        <div class="mx-auto mx-w-screen-xl px-5 hidden lg:block">
            {{-- Import Data --}}
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="responsive-table w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                HS Code
                            </th>
                            <th scope="col" class="px-6 py-3">
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
                        @if(isset($result) && $result->count() > 0)
                            
                            @foreach ($result as $result)
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <td class="w-4 p-4 font-medium text-gray-900 align-top">
                                        {{ $result->day }}/{{ $result->month }}/{{ $result->year }}
                                    </td>
                                    <th scope="row" class="px-6 py-4 align-top">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                            {{ $result->HS_Code }}
                                        </a>
                                    </th>
                                    <td class="px-6 py-4 font-medium text-gray-900 align-top">
                                        {{$result->Product_Description}}
                                    </td>
                                    <td class="px-6 py-4 align-top">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                            {{ $result->Country }}
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 align-top">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                            {{ $result->Unloading_Port }}
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 align-top">
                                        {{ $result->Quantity }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 align-top">
                                        {{ $result->Quantity_Unit }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 align-top">
                                        {{ $result->Weight_KG }}
                                    </td>
                                    <td class="px-6 py-4 font-medium align-top">
                                        <p data-modal-target="crud-modal-1" data-modal-toggle="crud-modal-1" class="font-medium text-blue-600 dark:text-blue-500 hover:underline transition-all">
                                            Importer Name
                                        </p>
                                    </td>
                                </tr>
                            @endforeach

                        @endif
                    </tbody>
                </table>
                <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">
                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 p-4 block w-full md:inline md:w-auto">
                        Showing 
                        <span class="font-semibold text-gray-900 dark:text-white">
                            1-10
                        </span> 
                        of 
                        <span class="font-semibold text-gray-900 dark:text-white">
                            10
                        </span>
                    </span>
                    <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8 pr-3">
                        <li>
                            <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">
                                1
                            </a>
                        </li>
                        <li>
                            <p data-modal-target="crud-modal-1" data-modal-toggle="crud-modal-1" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                2
                            </p>
                        </li>
                        <li>
                            <p data-modal-target="crud-modal-1" data-modal-toggle="crud-modal-1" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                3
                            </p>
                        </li>
                        <li>
                            <p data-modal-target="crud-modal-1" data-modal-toggle="crud-modal-1" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                Next
                            </p>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        {{-- end of table --}}
    </section>
    {{-- @dd($result) --}}
    {{-- Card view of table for mobile view --}}
    <section class="bg-white block lg:hidden">
        <div class="mx-auto mx-w-screen-xl px-5 py-8">
            {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-4"> --}}
                @if(isset($result))
                    @php
                        $results = is_array($result) ? $result : [$result];
                    @endphp
                    {{-- @dd($results) --}}
                    @if(count($results) > 0)
                        @foreach ($results as $item)
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
                                            {{ $item->day ?? '' }}/{{ $item->month ?? '' }}/{{ $item->year ?? '' }} 
                                        </p>
                                    </div>
                                    <div class="mt-4">
                                        <h1 class="text-md text-gray-800 font-medium uppercase">
                                            HS Code
                                        </h1>
                                    </div>
                                    <div class="mt-4">
                                        <p class="text-md font-normal">
                                            <a href="#" class="text-blue-600 hover:underline">
                                                {{ $item->HS_Code ?? '' }}
                                            </a>
                                        </p>
                                    </div>
                                    <div class="mt-4">
                                        <h1 class="text-md text-gray-800 font-medium uppercase">
                                            Product Description
                                        </h1>
                                    </div>
                                    <div class="mt-4">
                                        <p class="text-md font-normal">
                                            {{ $item->Product_Description ?? '' }}
                                        </p>
                                    </div>
                                    <div class="mt-4">
                                        <h1 class="text-md text-gray-800 font-medium uppercase">
                                            Origin Country
                                        </h1>
                                    </div>
                                    <div class="mt-4">
                                        <p class="text-md font-normal">
                                            <a href="#" class="text-blue-600 hover:underline">
                                                {{ $item->Country ?? '' }}
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
                                            <a href="#" class="text-blue-600 hover:underline">
                                                {{ $item->Unloading_Port ?? '' }}
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
                                            {{ $item->Quantity ?? '' }}
                                        </p>
                                    </div>
                                    <div class="mt-4">
                                        <h1 class="text-md text-gray-800 font-medium uppercase">
                                            Unit
                                        </h1>
                                    </div>
                                    <div class="mt-4">
                                        <p class="text-md font-normal">
                                            {{ $item->Quantity_Unit ?? '' }}
                                        </p>
                                    </div>
                                    <div class="mt-4">
                                        <h1 class="text-md text-gray-800 font-medium uppercase">
                                            Weight
                                        </h1>
                                    </div>
                                    <div class="mt-4">
                                        <p class="text-md font-normal">
                                            {{ $item->Weight_KG ?? '' }}
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
                @endif
            {{-- </div> --}}
        </div>
    </section>

    <!-- Modal Form -->
    <div id="crud-modal-1" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-opacity-60 backdrop-blur-sm transition-opacity duration-300">
        <div class="relative p-2 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
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
                <form class="mx-auto px-3 lg:px-5 py-6" action="{{route('contact.send')}}" method="POST" onsubmit="return validatecontactForm()">
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Name
                            </label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="email" name="floating_last_name" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Email
                            </label>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Phone number
                            </label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="floating_company" id="floating_company" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Company
                            </label>
                        </div>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="underline_select" class="sr-only">Underline select</label>
                        <select id="underline_select" class="appearance-none block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                            <option selected>Choose...</option>
                            <option value="Both">Both</option>
                            <option value="US">Import</option>
                            <option value="CA">Export</option>
                        </select>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="floating_password" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Message
                        </label>
                    </div>
                    <div class="flex justify-center">
                        <button type="submit" class="text-white bg-gradient-to-br from-glory-red to-glory-blue focus:ring-2 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div> 
    <!-- Modal Form -->
    
    @include('frontend.footer')
    @include('frontend.script')

</body>
</html>