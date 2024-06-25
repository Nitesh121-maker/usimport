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

    {{-- Company overview --}}
    <section class="animate-text bg-gradient-to-r from-glory-red via-fuchsia-600 to-glory-blue">
        <div class="mx-auto max-w-screen-xl flex justify-center px-5 md:px-12 lg:px-5 pt-28 pb-6">
            <div class="bg-white max-w-screen-2xl rounded-xl p-10 flex flex-wrap">
                <div class="mb-6">
                    <img class="w-1/12 mb-3" src="{{ url('frontend/img/company.png') }}"/>
                    <h2 class="mb-3 text-4xl text-gray-800 font-medium">Tata Steels</h2>
                    <p class="text-md text-gray-600 font-medium">
                        View a sample of KATEX TEKSTIL ANONIM SIRKETI. bill of lading data and analyse import market and other 
                        trading activities. Fill-up our request a demo form to access full import data of BITUMEN GLOBAL 
                        ALLIANZ INC.
                    </p>
                </div>
                <div class="mb-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                    <div class="flex flex-wrap items-center">
                        <img class="w-1/12" src="{{ url('frontend/img/role.png') }}">
                        <h1 class="mx-2 text-2xl text-gray-600 font-medium">Importer</h1>
                    </div>
                    <div class="flex flex-wrap items-center">
                        <img class="w-1/12" src="{{ url('frontend/img/company_address.png') }}">
                        <h1 class="mx-2 text-2xl text-gray-600 font-medium">USA</h1>
                    </div>
                    <div class="flex flex-wrap items-center">
                        <img class="w-1/12" src="{{ url('frontend/img/since.png') }}">
                        <h1 class="mx-2 text-2xl text-gray-600 font-medium">1950</h1>
                    </div>
                </div>
                <div class="flex justify-start">
                    <button data-modal-target="crud-modal-1" data-modal-toggle="crud-modal-1" class="relative inline-flex items-center justify-center p-0.5 me-2 overflow-hidden text-sm font-semibold text-gray-900 rounded-lg group bg-gradient-to-br from-glory-red to-glory-blue hover:text-white">
                        <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white rounded-md group-hover:bg-opacity-0">
                            Track All Shipment
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    {{-- Company overview --}}

    {{-- Sample Bill Of Lading with table & Form --}}
    <section class="bg-gray-50">
        <div class="mx-auto max-w-screen-xl px-5 py-12">
            <div class="text-center mb-8">
                <h1 class="mb-3 text-3xl lg:text-4xl font-medium text-gray-800">
                    Sample Bill Of Lading
                </h1>
                <p class="text-sm lg:text-lg font-medium text-gray-600">
                    View a sample of KATEX TEKSTIL ANONIM SIRKETI. bill of lading data and analyse 
                    import market and other trading activities. Fill-up our request a demo form to access
                    full import data of BITUMEN GLOBAL ALLIANZ INC.
                </p>
            </div>
            <div class="flex justify-center">
                <div class="relative w-full sm:rounded-lg">
                    <table class="responsive-table lg:w-full text-sm text-left font-medium text-gray-800">
                        <tbody>
                            <tr class="odd:bg-white even:bg-gray-100">
                                <th scope="row" class="px-6 py-4 font-bold text-gray-100 whitespace-nowrap bg-glory-red">
                                    DATE
                                </th>
                                <td class="px-6 py-4 font-medium text-md">
                                    10-September-2023
                                </td>
                            </tr>
                            <tr class="odd:bg-white even:bg-gray-100">
                                <th scope="row" class="px-6 py-4 font-bold text-gray-100 whitespace-nowrap bg-glory-red">
                                    BILL OF LADING NUMBER
                                </th>
                                <td class="px-6 py-4 font-medium text-md">
                                    PYMNAKL221000506	
                                </td>
                            </tr>
                            <tr class="odd:bg-white even:bg-gray-100">
                                <th scope="row" class="px-6 py-4 font-bold text-gray-100 whitespace-nowrap bg-glory-red">
                                    US IMPORTER NAME
                                </th>
                                <td class="px-6 py-4 font-medium text-md">
                                    TECHNOLOGY TRADE PARTNERS LLC
                                </td>
                            </tr>
                            <tr class="odd:bg-white even:bg-gray-100">
                                <th scope="row" class="px-6 py-4 font-bold text-gray-100 whitespace-nowrap bg-glory-red">
                                    FOREIGN EXPORTER NAME
                                </th>
                                <td class="px-6 py-4 font-medium text-md">
                                    COMPUTER ENHANCEMENTS NZ LIMITED
                                </td>
                            </tr>
                            <tr class="odd:bg-white even:bg-gray-100">
                                <th scope="row" class="px-6 py-4 font-bold text-gray-100 whitespace-nowrap bg-glory-red">
                                    HS CODE
                                </th>
                                <td class="px-6 py-4 font-medium text-md">
                                    850699
                                </td>
                            </tr>
                            <tr class="odd:bg-white even:bg-gray-100">
                                <th scope="row" class="px-6 py-4 font-bold text-gray-100 whitespace-nowrap bg-glory-red">
                                    Product Description
                                </th>
                                <td class="px-6 py-4 font-medium text-md">
                                    COMPUTER EQUIPMENT
                                </td>
                            </tr>
                            <tr class="odd:bg-white even:bg-gray-100">
                                <th scope="row" class="px-6 py-4 font-bold text-gray-100 whitespace-nowrap bg-glory-red">
                                    Quantity
                                </th>
                                <td class="px-6 py-4 font-medium text-md">
                                    245
                                </td>
                            </tr>
                            <tr class="odd:bg-white even:bg-gray-100">
                                <th scope="row" class="px-6 py-4 font-bold text-gray-100 whitespace-nowrap bg-glory-red">
                                    Unit
                                </th>
                                <td class="px-6 py-4 font-medium text-md">
                                    Carton
                                </td>
                            </tr>
                            <tr class="odd:bg-white even:bg-gray-100">
                                <th scope="row" class="px-6 py-4 font-bold text-gray-100 whitespace-nowrap bg-glory-red">
                                    CIF VALUE
                                </th>
                                <td class="px-6 py-4 font-medium text-md">
                                    $3941	
                                </td>
                            </tr>
                            <tr class="odd:bg-white even:bg-gray-100">
                                <th scope="row" class="px-6 py-4 font-bold text-gray-100 whitespace-nowrap bg-glory-red">
                                    LOADING PORT
                                </th>
                                <td class="px-6 py-4 font-medium text-md">
                                    TAURANGA
                                </td>
                            </tr>
                            <tr class="odd:bg-white even:bg-gray-100">
                                <th scope="row" class="px-6 py-4 font-bold text-gray-100 whitespace-nowrap bg-glory-red">
                                    UNLOADING PORT
                                </th>
                                <td class="px-6 py-4 font-medium text-md">
                                    LONG BEACH
                                </td>
                            </tr>
                            <tr class="odd:bg-white even:bg-gray-100">
                                <th scope="row" class="px-6 py-4 font-bold text-gray-100 whitespace-nowrap bg-glory-red">
                                    ORIGIN COUNTY
                                </th>
                                <td class="px-6 py-4 font-medium text-md">
                                    NEW ZEALAND
                                </td>
                            </tr>
                            <tr class="odd:bg-white even:bg-gray-100">
                                <th scope="row" class="px-6 py-4 font-bold text-gray-100 whitespace-nowrap bg-glory-red">
                                    DESTINATION COUNTRY
                                </th>
                                <td class="px-6 py-4 font-medium text-md">
                                    UNITED STATES
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    {{-- Shipment Details of KATEX TEKSTIL ANONIM SIRKETI --}}
    <section class="bg-gray-50">
        <div class="mx-auto max-w-screen-xl px-5 py-12">
            <div>
                <h1 class="mb-6 text-center text-3xl font-medium text-gray-800">
                    Shipment Details of Tata Steel
                </h1>
                <div class="flex justify-center">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="responsive-table w-full text-sm text-left text-gray-500">
                            <thead class="text-sm text-gray-100 uppercase bg-glory-blue">
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
                                        Foreign Country
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
                                        Value
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Importer Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Exporter Name
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <td class="w-4 p-4 font-medium text-gray-900 align-top">
                                        2020-02-17T00:00:00Z
                                    </td>
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 align-top"> 
                                        520513000000
                                    </th>
                                    <td class="px-6 py-4 font-medium text-gray-900 align-top">
                                        100% cotton yarn (ne 30/1 carded yarn)
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 align-top"> 
                                        Uzbekistan
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 align-top">
                                        21200.91
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 align-top">
                                        Kilogram
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 align-top">
                                        21200.91
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 align-top">
                                        64808.93
                                    </td>
                                    <td class="px-6 py-4 font-medium align-top">
                                        KATEX TEKSTIL ANONIM SIRKETI
                                    </td>
                                    <td class="px-6 py-4 font-medium align-top">
                                        <p data-modal-target="crud-modal-1" data-modal-toggle="crud-modal-1" class="font-medium text-blue-600 dark:text-blue-500 hover:underline transition-all">
                                            Exporter Name
                                        </p>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <td class="w-4 p-4 font-medium text-gray-900 align-top">
                                        2020-02-17T00:00:00Z
                                    </td>
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 align-top"> 
                                        520513000000
                                    </th>
                                    <td class="px-6 py-4 font-medium text-gray-900 align-top">
                                        100% cotton yarn (ne 30/1 carded yarn)
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 align-top"> 
                                        Uzbekistan
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 align-top">
                                        21200.91
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 align-top">
                                        Kilogram
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 align-top">
                                        21200.91
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 align-top">
                                        64808.93
                                    </td>
                                    <td class="px-6 py-4 font-medium align-top">
                                        KATEX TEKSTIL ANONIM SIRKETI
                                    </td>
                                    <td class="px-6 py-4 font-medium align-top">
                                        <p data-modal-target="crud-modal-1" data-modal-toggle="crud-modal-1" class="font-medium text-blue-600 dark:text-blue-500 hover:underline transition-all">
                                            Exporter Name
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    {{-- Top Foreign with Timeline --}}
    <section class="bg-glory-blue">
        <div class="mx-auto max-w-screen-xl px-5 py-28">
            <div class="p-2">
                <h1 class="mb-10 text-center text-gray-100 text-3xl font-medium">
                    Top Foreign Suppliers Exporting to KATEX TEKSTIL ANONIM SIRKETI?
                </h1>
                <div class="grid gap-4 grid-cols-1 md:grid-cols-5 lg:grid-cols-5">
                    <div class="blur-sm max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="mb-3 flex justify-center">
                            <img class="w-3/12" src="{{ url('frontend/img/supplier.png') }}">
                        </div>
                        <h5 class="mb-2 text-xl font-medium text-center text-gray-900">
                            VIPA CONTROLS GMBH
                        </h5>
                    </div>
                    <div class="blur-sm max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="mb-3 flex justify-center">
                            <img class="w-3/12" src="{{ url('frontend/img/supplier.png') }}">
                        </div>
                        <h5 class="mb-2 text-xl font-medium text-center text-gray-900">
                            VIPA CONTROLS GMBH
                        </h5>
                    </div>
                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="mb-3 flex justify-center">
                            <img class="w-3/12" src="{{ url('frontend/img/supplier.png') }}">
                        </div>
                        <h5 class="mb-2 text-xl font-medium text-center text-gray-900">
                            VIPA CONTROLS GMBH
                        </h5>
                    </div>
                    <div class="blur-sm max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="mb-3 flex justify-center">
                            <img class="w-3/12" src="{{ url('frontend/img/supplier.png') }}">
                        </div>
                        <h5 class="mb-2 text-xl font-medium text-center text-gray-900">
                            VIPA CONTROLS GMBH
                        </h5>
                    </div>
                    <div class="blur-sm max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="mb-3 flex justify-center">
                            <img class="w-3/12" src="{{ url('frontend/img/supplier.png') }}">
                        </div>
                        <h5 class="mb-2 text-xl font-medium text-center text-gray-900">
                            VIPA CONTROLS GMBH
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- country Names --}}
    <section class="bg-gray-50">
        <div class="mx-auto max-w-screen-xl px-5 py-12">
            <div class="mb-10">
                <h1 class="text-center font-medium text-3xl">
                    Where BEAUTE KOZMETIK ANONIM SIRKETI imports from ?
                </h1>
            </div>
            <div class="flex justify-center">
                <div>
                    <button type="button" class="text-gray-900 bg-white hover:bg-glory-blue hover:text-white border border-gray-500 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 mb-2">
                        <img class="w-8 h-8 me-4 -ms-1" src="{{url('frontend/flag/usa.png')}}" width="100%">
                        United States Of America
                    </button>

                    <button type="button" class="text-gray-900 bg-white hover:bg-glory-blue hover:text-white border border-gray-500 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 mb-2">
                        <img class="w-8 h-8 me-4 -ms-1" src="{{url('frontend/flag/france.png')}}" width="100%">
                        France
                    </button>

                    <button type="button" class="text-gray-900 bg-white hover:bg-glory-blue hover:text-white border border-gray-500 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 mb-2">
                        <img class="w-8 h-8 me-4 -ms-1" src="{{url('frontend/flag/japan.png')}}" width="100%">
                        Japan
                    </button>

                    <button type="button" class="text-gray-900 bg-white hover:bg-glory-blue hover:text-white border border-gray-500 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 mb-2">
                        <img class="w-8 h-8 me-4 -ms-1" src="{{url('frontend/flag/italy.png')}}" width="100%">
                        Italy
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Form -->
    <div id="crud-modal-1" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-opacity-60 backdrop-blur-sm transition-opacity duration-300">
        <div class="relative p-2 w-full max-w-4xl max-h-full px-5">
            <div class="relative grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 bg-white rounded-lg shadow">
                <div class="flex justify-center items-center">
                    <img src="{{ url('frontend/img/modal_form.png') }}">
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
                    <form class="mx-auto px-5 lg:px-5 py-6" action="{{route('contact.send')}}" method="POST" onsubmit="return validatecontactForm()">
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
                                <option value="import">Import</option>
                                <option value="export">Export</option>
                                <option value="Both">Both</option>
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
    </div> 
    <!-- Modal Form -->

    @include('frontend.footer')
    @include('frontend.script')

</body>
</html>