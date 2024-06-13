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


    {{-- Company --}}
    <section class="animate-text bg-gradient-to-r from-glory-red via-fuchsia-600 to-glory-blue">
        <div class="mx-auto max-w-screen-xl px-5 md:px-12 lg:px-5 py-28">
            <div class="mt-6">
                <h1 class="mb-3 text-start text-white font-medium text-4xl">
                    BEAUTE KOZMETIK ANONIM SIRKETI
                </h1>
                <div class="flex py-6">
                    <span class="text-white flex flex-wrap items-center mx-2">
                        <i class="fa-solid fa-lg fa-server"></i>
                        <p class="text-xl text-gray-200 pl-2">Importer</p>
                    </span>
                    <span class="text-white flex flex-wrap items-center mx-2">
                        <i class="fa-solid fa-lg fa-globe"></i>
                        <p class="text-xl text-gray-200 pl-2">Turkey</p>
                    </span>
                </div>
                <div class="py-6">
                    <button data-modal-target="crud-modal-1" data-modal-toggle="crud-modal-1" type="button" class="text-white bg-transparent border border-white font-medium rounded-3xl text-lg px-5 py-2.5 text-center me-2 mb-2">
                        Track all shipment
                    </button>
                </div>
            </div>
        </div>
    </section>
    {{-- End of search bar --}}

    {{-- Sample Bill Of Lading with table & Form --}}
    <section class="bg-gray-50">
        <div class="mx-auto max-w-screen-xl px-5 py-20">
            <div class="grid gap-8 grid-cols-12">
                <div class="col-span-12 md:col-span-12 lg:col-span-8 flex justify-center overflow-auto max-h-[32rem]">
                    <div class="overflow-auto px-5 mb-3">
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
                        <div class="relative sm:rounded-lg">
                            <table class="responsive-table w-full text-sm text-left rtl:text-right text-gray-500">
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
                <div class="col-span-12 md:col-span-12 lg:col-span-4">
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

    {{-- Shipment Details of KATEX TEKSTIL ANONIM SIRKETI --}}
    <section class="bg-gray-50">
        <div class="mx-auto max-w-screen-xl px-5 py-12">
            <div>
                <h1 class="mb-6 text-center text-3xl font-medium text-gray-800">
                    Shipment Details of KATEX TEKSTIL ANONIM SIRKETI
                </h1>
                <div class="flex justify-center">
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
    <section class="bg-blue-50">
        <div class="mx-auto max-w-screen-xl px-5 py-28">
            <div class="p-2">
                <h1 class="mb-10 text-center text-gray-800 text-3xl font-medium">
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

    {{-- country Names --}}
    <section class="bg-gray-50">
        <div class="mx-auto max-w-screen-xl px-5 py-28">
            <div class="mb-10">
                <h1 class="text-center font-medium text-3xl">
                    Where BEAUTE KOZMETIK ANONIM SIRKETI imports from ?
                </h1>
            </div>
            <div class="flex justify-center">
                <div>
                    <button data-tooltip-target="tooltip-houston" type="button" class="text-gray-900 bg-white hover:bg-glory-blue hover:text-white border border-gray-500 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                        <img class="w-8 h-8 me-4 -ms-1" src="{{url('frontend/flag/usa.png')}}" width="100%">
                        United States Of America
                    </button>

                    <button data-tooltip-target="tooltip-corpus" type="button" class="text-gray-900 bg-white hover:bg-glory-blue hover:text-white border border-gray-500 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                        <img class="w-8 h-8 me-4 -ms-1" src="{{url('frontend/flag/france.png')}}" width="100%">
                        France
                    </button>

                    <button data-tooltip-target="tooltip-louisiana" type="button" class="text-gray-900 bg-white hover:bg-glory-blue hover:text-white border border-gray-500 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                        <img class="w-8 h-8 me-4 -ms-1" src="{{url('frontend/flag/japan.png')}}" width="100%">
                        Japan
                    </button>

                    <button data-tooltip-target="tooltip-hampton" type="button" class="text-gray-900 bg-white hover:bg-glory-blue hover:text-white border border-gray-500 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
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
                    <img src="{{ url('frontend/img/modal-img.png') }}">
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