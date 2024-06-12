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

    <section class="bg-gray-50">
        <div class="mx-auto max-w-screen-xl px-5 py-20">
            <div class="grid gap-8 grid-cols-12">
                <div class="col-span-8 flex justify-center overflow-auto max-h-[32rem]">
                    <div class="overflow-auto">
                        <div class="text-center mb-6">
                            <h1 class="mb-6 text-4xl font-medium text-gray-800">
                                Sample Bill Of Lading
                            </h1>
                            <p class="text-md font-medium text-gray-600">
                                View a sample of KATEX TEKSTIL ANONIM SIRKETI. bill of lading data and analyse 
                                import market and other trading activities. Fill-up our request a demo form to access
                                full import data of BITUMEN GLOBAL ALLIANZ INC. 
                            </p>
                        </div> 
                        <div class="relative">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
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
                <div class="col-span-4">
                    <h1 class="mb-6 text-4xl font-medium text-gray-800 text-center">Request A Demo</h1>
                    <form class="min-w-80" action="{{route('contact.send')}}" method="POST" onsubmit="return validatecontactForm()" id="contact-form">
                        @csrf
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-600">
                                    Name
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-2.5 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 4 20 16">
                                            <path d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"/>
                                        </svg>                                              
                                    </div>
                                    <input name="name" required type="text" id="email-address-icon" class="bg-gray-50 border border-gray-300 text-gray-900 font-medium text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ally">
                                </div>
                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-600">
                                    Email
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                            <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                                            <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                                        </svg>
                                    </div>
                                    <input name="email" required type="text" id="user-icon" class="bg-gray-50 border border-gray-300 text-gray-900 font-medium text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@gmail.com">
                                </div>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="relative w-full mb-5 group">
                                <label for="phone-input" class="block mb-2 text-sm font-medium text-gray-600">
                                    Phone number:
                                </label>
                                <div class="relative">
                                    <input name="phone" type="tel" id="phone" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[20rem] md:w-[21.5rem] lg:w-[15rem] ps-10 p-2.5" placeholder="" required />
                                </div>                            
                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-600">
                                    Company
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-2.5 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M4 4a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2v14a1 1 0 1 1 0 2H5a1 1 0 1 1 0-2V5a1 1 0 0 1-1-1Zm5 2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1h-1Zm-5 4a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1h-1Zm-3 4a2 2 0 0 0-2 2v3h2v-3h2v3h2v-3a2 2 0 0 0-2-2h-2Z" clip-rule="evenodd"/>
                                        </svg>                                              
                                    </div>
                                    <input name="company" required type="text" id="email-address-icon" class="bg-gray-50 border border-gray-300 text-gray-900 font-medium text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Company">
                                </div>
                            </div>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-600">
                                Import/Export
                            </label>
                            <select name="role" required id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 font-medium text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                              <option>Select...</option>
                              <option>Both</option>
                              <option>Import</option>
                              <option>Export</option>
                            </select>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <label for="message" class="block mb-2 text-sm font-medium text-gray-600">
                                Describe Your Requirement
                            </label>
                            <textarea name="message" required id="message" rows="4" placeholder="Describe Your Requirement..." class="block p-2.5 w-full text-sm text-gray-900 font-medium bg-gray-50 rounded-lg border border-gray-300"></textarea>
                        </div>
                        <button type="submit" class="text-white border border-white hover:bg-white hover:text-glory-red focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-md w-full sm:w-full px-5 py-2.5 text-center">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-50">
        <div class="mx-auto max-w-screen-xl px-5 py-12">
            <div>
                <h1 class="mb-6 text-center text-3xl font-medium text-gray-800">
                    Shipment Details of KATEX TEKSTIL ANONIM SIRKETI
                </h1>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="responsive-table w-full text-sm text-left text-gray-500">
                            <thead class="text-sm text-gray-100 uppercase bg-gray-600">
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
                                    <th scope="row" class="px-6 py-4 align-top">
                                        <p data-modal-target="crud-modal-1" data-modal-toggle="crud-modal-1" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                            520513000000
                                        </p>
                                    </th>
                                    <td class="px-6 py-4 font-medium text-gray-900 align-top">
                                        100% cotton yarn (ne 30/1 carded yarn)
                                    </td>
                                    <td class="px-6 py-4 align-top">
                                        <p data-modal-target="crud-modal-1" data-modal-toggle="crud-modal-1" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                            Uzbekistan
                                        </p>
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
                                        2020-02-19T00:00:00Z
                                    </td>
                                    <th scope="row" class="px-6 py-4 align-top">
                                        <p data-modal-target="crud-modal-1" data-modal-toggle="crud-modal-1" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                            520513000000
                                        </p>
                                    </th>
                                    <td class="px-6 py-4 font-medium text-gray-900 align-top">
                                        100% cotton yarn (ne 30/1 carded yarn)
                                    </td>
                                    <td class="px-6 py-4 align-top">
                                        <p data-modal-target="crud-modal-1" data-modal-toggle="crud-modal-1" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                            Uzbekistan
                                        </p>
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
    

    <section class="bg-blue-50">
        <div class="mx-auto max-w-screen-xl px-5 py-12">
            <div class="p-2">
                <h1 class="mb-8 text-center text-gray-800 text-2xl font-medium">
                    Top Foreign Suppliers Exporting to KATEX TEKSTIL ANONIM SIRKETI?
                </h1>
                <div>
                    <ol class="items-center sm:flex">
                        <li class="relative mb-6 sm:mb-0">
                            <div class="flex items-center">
                                <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                    <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                </div>
                                <div class="hidden sm:flex w-full bg-gray-200 h-0.5"></div>
                            </div>
                            <div class="mt-3 sm:pe-8">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    FC POSCO INTERNATIONAL TEXTILE LLC
                                </h3>
                            </div>
                        </li>
                        <li class="relative mb-6 sm:mb-0">
                            <div class="flex items-center">
                                <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                    <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                </div>
                                <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                            </div>
                            <div class="mt-3 sm:pe-8 blur">
                                <h3 class="text-sm font-semibold text-gray-900 dark:text-white">
                                    FC POSCO INTERNATIONAL TEXTILE LLC
                                </h3>
                            </div>
                        </li>
                        <li class="relative mb-6 sm:mb-0">
                            <div class="flex items-center">
                                <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                    <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                </div>
                                <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                            </div>
                            <div class="mt-3 sm:pe-8 blur">
                                <h3 class="text-sm font-semibold text-gray-900 dark:text-white">
                                    FC POSCO INTERNATIONAL TEXTILE LLC
                                </h3>
                            </div>
                        </li>
                        <li class="relative mb-6 sm:mb-0">
                            <div class="flex items-center">
                                <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                    <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                </div>
                                <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                            </div>
                            <div class="mt-3 sm:pe-8 blur">
                                <h3 class="text-sm font-semibold text-gray-900 dark:text-white">
                                    FC POSCO INTERNATIONAL TEXTILE LLC
                                </h3>
                            </div>
                        </li>
                        <li class="relative mb-6 sm:mb-0">
                            <div class="flex items-center">
                                <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                    <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                </div>
                                <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                            </div>
                            <div class="mt-3 sm:pe-8 blur">
                                <h3 class="text-sm font-semibold text-gray-900 dark:text-white">
                                    FC POSCO INTERNATIONAL TEXTILE LLC
                                </h3>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.footer')
    @include('frontend.script')

</body>
</html>