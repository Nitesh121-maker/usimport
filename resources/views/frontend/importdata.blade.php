<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>
            USA Import Data || Tradeimex 
        </title>
        @include('frontend.link')
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
                                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                            </svg>
                            Home
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">
                                Import Data
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>

        {{-- Overview --}}
        <section class="animate-text bg-gradient-to-r from-glory-red via-fuchsia-600 to-glory-blue">
            <div class="mx-auto max-w-screen-xl px-5 md:px-8 lg:px-5 py-14">
                <div class="grid lg:grid-cols-2">
                    <div>
                        <h1 class="mt-6 mb-3 text-white font-medium text-5xl lg:text-5xl text-center md:text-start lg:text-start">
                            US Import Data
                        </h1>
                        <p class="text-md mt-6 font-normal text-gray-100 text-center md:text-start lg:text-start">
                            The US import data is a critical useful resource for businesses and policymakers,
                            providing valuable insights into the flow of goods entering the United States. Despite
                            being a worldwide powerhouse, a significant part of the USA is a part of North
                            America. The US Consists of 50 states and one federal district. The USA’s
                            neighbors are the Bahamas, Canada, and Mexico. Detailed information in US
                            import data allows companies to understand the volume, value, origin, and
                            destination of imports and imported products. Several key trends shape US imports
                            and the overall import market in the US. According to the US import data, the US
                            imported goods worth $3.17 trillion in 2023, with a decrease of 6% from the previous
                            year. The US has a total import market share of 13.3% in 2023 globally.
                            The Major US imports in 2023 include electrical machinery and equipment ($463.36 billion), 
                            Nuclear reactors and machinery ($459.19 billion), Vehicles ($381.03 billion), 
                            Mineral fuels and mineral oils ($266.59 billion), and pharmaceutical products ($177.84 billion). 
                            The major import partners of the US in 2023 include Mexico ($480.08 billion), 
                            China ($448.03 billion), Canada ($431.19 billion), Germany ($163.08 billion), and 
                            Japan ($151.58 billion).Let us now delve into the details of US import data for the year 2023, providing insights 
                            into US import trends, top US imports, and key markets.
                        </p>
                        <div class="py-6">
                            <button data-modal-target="authentication-modal"  data-modal-toggle="authentication-modal"  type="button" class="text-white border border-white hover:bg-white hover:text-glory-red font-medium rounded-full text-sm px-5 p-2 text-center me-2 mb-2">
                                Request a Demo
                                <span class="ml-2.5">
                                    <i class="fa-solid fa-circle-arrow-right"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="mt-4 flex justify-center items-start">
                        <img src="{{url('frontend/img/import_data.png')}}" class="w-4/6 md:w-7/12 lg:w-3/4 object-contain" />
                    </div>
                </div>
            </div>
        </section>

        {{-- key points section --}}
        <section class="bg-white">
            <div class="mx-auto max-w-screen-xl px-5 md:px-12 py-16">
                <div class="bg-white border-2 border-glory-red rounded-lg">
                    <div class="px-12 p-5 lg:p-8 grid gap-2 grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                        {{-- Rank --}}
                        <div class="flex">
                            <div class="text-center">
                                <div class="mb-4 flex justify-center">
                                    <img class="w-1/5 md:w-3/12 lg:w-1/5" src="{{url('frontend/img/rank.png')}}">
                                </div>
                                <h1 class="mb-4 text-2xl md:text-xl lg:text-xl font-semibold text-center">
                                    1
                                </h1>
                                <p class="mb-4 text-gray-500 text-sm font-medium">
                                    The US has been ranked 1st in global imports, making it the biggest importer in 
                                    the world and showing a strong position in the global import sector.    
                                </p> 
                            </div>
                            <div class="hidden lg:block vertical-line-red mx-3"></div>
                        </div> 
                        <hr class="lg:hidden md:hidden h-px my-8 bg-glory-red border-0">

                        {{-- Percent --}}
                        <div class="flex">
                            <div class="text-center">
                                <div class="mb-4 flex justify-center">
                                    <img class="w-1/5 md:w-3/12 lg:w-1/5" src="{{url('frontend/img/percent.png')}}">
                                </div>
                                <h1 class="mb-4 text-2xl md:text-xl lg:text-xl font-semibold">
                                    13.3%
                                </h1>
                                <p class="mb-4 text-gray-500 text-sm font-medium">
                                    The US has a 13.3% market share in the global import market, 
                                    which makes its presence increasingly significant.    
                                </p>    
                            </div>
                            <div class="hidden lg:block vertical-line-red mx-3"></div>
                        </div> 
                        <hr class="lg:hidden md:hidden h-px my-8 bg-glory-red border-0">

                        <hr class="lg:hidden md:block hidden h-px my-8 bg-glory-red border-0">
                        <hr class="lg:hidden md:block hidden h-px my-8 bg-glory-red border-0">

                        {{-- Country --}}
                        <div class="flex">
                            <div class="text-center">
                                <div class="mb-4 flex justify-center">
                                    <img class="w-1/5 md:w-3/12 lg:w-1/5" src="{{url('frontend/img/mexico.png')}}">
                                </div>
                                <h1 class="mb-4 text-2xl md:text-xl lg:text-xl font-semibold">
                                    MEXICO
                                </h1>  
                                <p class="mb-4 text-gray-500 text-sm font-medium">
                                    Mexico is the biggest import partner of the USA for goods 
                                    imports in 2023.  
                                </p> 
                            </div>
                            <div class="hidden lg:block vertical-line-red mx-3"></div>
                        </div> 
                        <hr class="lg:hidden md:hidden h-px my-8 bg-glory-red border-0">

                        {{-- Product --}}
                        <div class="flex">
                            <div class="text-center"> 
                                <div class="mb-4 flex justify-center">
                                    <img class="w-1/5 md:w-3/12 lg:w-1/5" src="{{url('frontend/img/power.png')}}">
                                </div>  
                                <h1 class="mb-4 text-2xl md:text-xl lg:text-xl font-semibold">
                                    ELECTRICAL MACHINERY
                                </h1>
                                <p class="mb-4 text-gray-500 text-sm font-medium">
                                    Electrical machinery and equipment are the biggest US imports 
                                    in 2023, playing a huge role in the country’s economy.   
                                </p>   
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </section>
        {{-- key points section --}}

        {{-- Major Information Included in the US Import Data --}}
        <section class="bg-white">
            <div class="mx-auto max-w-screen-xl px-5 md:px-12 py-16">
                <h1 class="text-3xl lg:text-4xl font-medium text-center mb-8">
                    Major Information Included in the US Import Data
                </h1>
                <div class="py-6 grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-8">
                    <div>
                        <span class="w-full flex items-start text-sm md:text-md lg:text-lg font-semibold text-gray-900 me-3">
                            <span class="flex w-2.5 h-2.5 bg-glory-red rounded-full me-1.5 mt-1 flex-shrink-0"></span>
                            Consignment Date
                        </span>
                    </div>
                    <div>
                        <span class="w-full flex items-start text-sm md:text-md lg:text-lg font-semibold text-gray-900 me-3">
                            <span class="flex w-2.5 h-2.5 bg-glory-red rounded-full me-1.5 mt-1 flex-shrink-0"></span>
                            Consignee Name and Address
                        </span>
                    </div>
                    <div>
                        <span class="w-full flex items-start text-sm md:text-md lg:text-lg font-semibold text-gray-900 me-3">
                            <span class="flex w-2.5 h-2.5 bg-glory-red rounded-full me-1.5 mt-1 flex-shrink-0"></span>
                            Shipper Name and Address
                        </span>
                    </div>
                    <div>
                        <span class="w-full flex items-start text-sm md:text-md lg:text-lg font-semibold text-gray-900 me-3">
                            <span class="flex w-2.5 h-2.5 bg-glory-red rounded-full me-1.5 mt-1 flex-shrink-0"></span>
                            HS Code
                        </span>
                    </div>
                    <div>
                        <span class="w-full flex items-start text-sm md:text-md lg:text-lg font-semibold text-gray-900 me-3">
                            <span class="flex w-2.5 h-2.5 bg-glory-red rounded-full me-1.5 mt-1 flex-shrink-0"></span>
                            Product Description
                        </span>
                    </div>
                    <div>
                        <span class="w-full flex items-start text-sm md:text-md lg:text-lg font-semibold text-gray-900 me-3">
                            <span class="flex w-2.5 h-2.5 bg-glory-red rounded-full me-1.5 mt-1 flex-shrink-0"></span>
                            Unit
                        </span>
                    </div>
                    <div>
                        <span class="w-full flex items-start text-sm md:text-md lg:text-lg font-semibold text-gray-900 me-3">
                            <span class="flex w-2.5 h-2.5 bg-glory-red rounded-full me-1.5 mt-1 flex-shrink-0"></span>
                            Weight and Quantity
                        </span>
                    </div>
                    <div>
                        <span class="w-full flex items-start text-sm md:text-md lg:text-lg font-semibold text-gray-900 me-3">
                            <span class="flex w-2.5 h-2.5 bg-glory-red rounded-full me-1.5 mt-1 flex-shrink-0"></span>
                            Loading Port
                        </span>
                    </div>
                    <div>
                        <span class="w-full flex items-start text-sm md:text-md lg:text-lg font-semibold text-gray-900 me-3">
                            <span class="flex w-2.5 h-2.5 bg-glory-red rounded-full me-1.5 mt-1 flex-shrink-0"></span>
                            Unloading Port
                        </span>
                    </div>
                    <div>
                        <span class="w-full flex items-start text-sm md:text-md lg:text-lg font-semibold text-gray-900 me-3">
                            <span class="flex w-2.5 h-2.5 bg-glory-red rounded-full me-1.5 mt-1 flex-shrink-0"></span>
                            Origin Country
                        </span>
                    </div>
                </div>
            </div>
        </section>  
        {{-- End Of Major Information Included in the US Import Data --}}

        {{-- Top 10 US Imports in 2023 --}}
        <section class="bg-glory-red">
            <div class="mx-auto max-w-screen-2xl">
                <div class="grid grid-cols-1 lg:grid-cols-3 px-5 md:px-5 lg:px-5 py-12">
                    <div class="col-span-2 md:pl-8 lg:pl-0">
                        <h1 class="text-3xl text-white lg:text-4xl font-medium mb-4 text-center md:text-start lg:text-start">
                            Top 10 US Imports in 2023
                        </h1>
                        <p class="mb-4 text-md font-medium text-gray-100 text-center md:text-start lg:text-start">
                            When it comes to imports, the US is known for its prowess in various commodities 
                            such as mineral oils, electronics, machinery, and pharmaceuticals, which are in high 
                            demand in the US. Electrical machinery and equipment are the biggest US imports worth 
                            $463.36 billion in 2023. The top 10 US import commodities in 2023 include: 
                        </p>
                        <ul class="max-w-2xl space-y-1 font-medium text-gray-100 list-disc list-inside dark:text-gray-400">
                            <li>
                                Electrical machinery and equipment: $463.36 billion (14.61%)
                            </li>
                            <li>
                                Nuclear reactors, machinery, and mechanical appliances: $459.19 billion (14.47%)
                            </li>
                            <li>
                                Vehicles: $381.03 billion (12.01%)
                            </li>
                            <li>
                                Mineral fuels and mineral oils: $266.59 billion (8.4%)
                            </li>
                            <li>
                                Pharmaceutical products: $177.84 billion (5.61%)
                            </li>
                            <li>
                                Commodities not elsewhere specified: $124.97 billion (3.94%)
                            </li>
                            <li>
                                Optical, measuring, checking, medical, or surgical instruments: $118.32 billion (3.73%)
                            </li>
                            <li>
                                Natural or cultured pearls, precious stones, and metals: $89.54 billion (2.82%)
                            </li>
                            <li>
                                Plastics and articles thereof: $72.34 billion (2.28%)
                            </li>
                            <li>
                                Furniture; bedding, mattresses, and similar stuffed furnishings: $69.00 billion (2.18%)
                            </li>
                        </ul>
                    </div>
                    <div class="cols-span-1">
                        <img class="w-full contrast-500 saturation-500 relative -right-5" src="{{url('frontend/img/top_10.png')}}" />
                    </div>
                </div>
            </div>
        </section>
        {{-- Top 10 US Imports in 2023 --}}

        {{-- Top 10 US import partners in 2023 --}}
        <section class="bg-white">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 px-5 md:px-12 lg:px-8 py-16">
                <div class="lg:mt-6 md:mt-0 flex items-center">
                    <div>
                        <h1 class="text-3xl lg:text-4xl font-medium mb-4 text-center lg:text-start">
                            Top 10 US import partners in 2023
                        </h1>
                        <p class="mb-4 text-md font-medium text-gray-600 text-center lg:text-start">
                            The US is a major player in the global import market, bringing in a 
                            wide range of products from all over the world. Mexico is the biggest 
                            import partner of the US as Mexico exported goods worth $480.08 billion 
                            to the US in 2023. The Top 10 US import partners in 2023 include: 
                        </p>    
                    </div>
                </div>
                {{-- country list --}}
                <div class="mt-6 px-6 max-h-96 overflow-x-auto scrollbar:!w-1.5 scrollbar:!h-1.5 scrollbar-thumb:rounded scrollbar-thumb-glory-red scrollbar-track-gray-100">
                    <ol class="relative border-s border-glory-red">
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-glory-red rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/img/mexico_kp.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                Mexico: $480.08 billion (15.1%)
                            </h3>
                            <p class="mb-4 text-md font-medium text-gray-600">
                                Vehicles are the biggest US imports from Mexico worth $130.03 billion in 2023. 
                            </p>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-glory-red rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/img/china.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                China: $448.03 billion (14.1%)
                            </h3>
                            <p class="mb-4 text-md font-medium text-gray-600">
                                Electrical machinery and equipment are the biggest US imports from China worth $126.67 billion in 2023. 
                            </p>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-glory-red rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/img/canada.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                Canada: $431.19 billion (13.6%)
                            </h3>
                            <p class="mb-4 text-md font-medium text-gray-600">
                                Mineral fuels and mineral oils are the biggest US imports from Canada worth 
                                $131.90 billion in 2023. 
                            </p>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-glory-red rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/img/germany.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                Germany: $163.08 billion (5.1%)
                            </h3>
                            <p class="mb-4 text-md font-medium text-gray-600">
                                Nuclear reactors and machinery are the biggest US imports from Germany 
                                worth $34.59 billion in 2023
                            </p>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-glory-red rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/img/japan.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                Japan: $151.58 billion (4.8%)
                            </h3>
                            <p class="mb-4 text-md font-medium text-gray-600">
                                Vehicles are the biggest US imports from Japan worth $50.80 billion in 2023.
                            </p>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-glory-red rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/img/south-korea.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                South Korea: $119.72 billion (3.8%)
                            </h3>
                            <p class="mb-4 text-md font-medium text-gray-600">
                                Vehicles are the biggest US imports from South Korea worth $38.42 billion in 2023. 
                            </p>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-glory-red rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/img/vietnam.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                Vietnam: $118.94 billion (3.7%)
                            </h3>
                            <p class="mb-4 text-md font-medium text-gray-600">
                                Electrical machinery and equipment are the biggest US imports from Vietnam 
                                worth $41.78 billion in 2023. 
                            </p>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-glory-red rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/img/taiwan.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                Taiwan: $89.91 billion (2.8%)
                            </h3>
                            <p class="mb-4 text-md font-medium text-gray-600">
                                Nuclear reactors and machinery are the biggest US imports from Taiwan 
                                worth $34.51 billion in 2023.  
                            </p>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-glory-red rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/img/india.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                India: $87.28 billion (2.8%)
                            </h3>
                            <p class="mb-4 text-md font-medium text-gray-600">
                                Natural or cultured pearls, precious stones, and metals are the biggest US 
                                imports from India worth $12.36 billion in 2023. 
                            </p>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-glory-red rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/img/ireland.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                Ireland: $82.71 billion (2.6%)
                            </h3>
                            <p class="mb-4 text-md font-medium text-gray-600">
                                Pharmaceutical products are the biggest US imports from Ireland 
                                worth $36.02 billion in 2023. 
                            </p>
                        </li>
                    </ol>
                </div>
            </div>
        </section>
        {{-- Top 10 US import partners in 2023 --}}

        {{-- Top 10 US Import Ports in 2023 --}}
        <section class="bg-pattern-img">
            <div class="mx-auto mx-w-screen-xl px-5 md:px-8 lg:px-8 py-12 backdrop-blur-sm">
                <div class="mb-6">
                    <h1 class="text-white font-medium mb-3 text-3xl lg:text-4xl text-center">
                        Top 10 US Import Ports in 2023
                    </h1>
                    <p class="text-gray-100 font-normal mb-3 text-md lg:text-lg text-center">
                        The US is home to some of the busiest ports in the world. 
                        The top 10 US Import Ports in 2023 include:
                    </p>
                </div>
                <div class="flex justify-center">
                    <div>
                        <button type="button" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                            <img class="w-8 h-8 me-4 -ms-1" src="{{url('frontend/port/los_angeles.svg')}}" width="100%">
                            Port of Los Angeles 
                        </button>
                        <button type="button" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                            <img class="w-8 h-8 me-4 -ms-1" src="{{url('frontend/port/chicago.webp')}}" width="100%">
                            Chicago’s O’Hare International Airport 
                            {{-- <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg> --}}
                        </button>
                        <button type="button" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                            <img class="w-8 h-8 me-4 -ms-1" src="{{url('frontend/port/JFK.svg')}}" width="100%">
                            New York’s JFK International Airport 
                        </button>
                        <button type="button" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                            <img class="w-8 h-8 me-4 -ms-1" src="{{url('frontend/port/houston.svg')}}" width="100%">
                            Port of Houston
                        </button>
                        <button type="button" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                            <img class="w-8 h-8 me-4 -ms-1" src="{{url('frontend/port/newark.svg')}}" width="100%">
                            Port of Newark
                        </button>
                        <button type="button" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                            <img class="w-8 h-8 me-4 -ms-1" src="{{url('frontend/port/ambassador.webp')}}" width="80%">
                            Detroit’s Ambassador Bridge
                        </button>
                        <button type="button" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                            <img class="w-8 h-8 me-4 -ms-1" src="{{url('frontend/port/los_angeles_inter.svg')}}" width="100%">
                            Los Angeles International Airport 
                        </button>
                        <button type="button" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                            <img class="w-8 h-8 me-4 -ms-1" src="{{url('frontend/port/savannah.svg')}}" width="100%">
                            Port of Savannah
                        </button>
                        <button type="button" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                            <img class="w-8 h-8 me-4 -ms-1" src="{{url('frontend/port/huron_bridge.svg')}}" width="100%">
                            Port Huron Blue Water Bridge
                        </button>
                        <button type="button" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                            <img class="w-8 h-8 me-4 -ms-1" src="{{url('frontend/port/plaquemines.png')}}" width="100%">
                            Plaquemines Port
                        </button>
                    </div>
                </div>
            </div>
        </section>
        {{-- Top 10 US Import Ports in 2023 --}}

        {{-- Top 10 US Importer Companies in 2023 --}} 
        <section class="bg-white">
            <div class="grid grid-cols-1 lg:grid-cols-2 px-5 md:px-12 lg:px-8 py-8">
                <div class="flex items-center ">
                    <div>
                        <h1 class="text-3xl lg:text-4xl font-medium mb-4">
                            Top 10 US Importer Companies in 2023
                        </h1>
                        <p class="mb-4 text-md font-medium text-gray-600">
                            Based on customs information, the top 10 US importer companies are released 
                            annually. These numbers, which indicate shipment capacity, are given in TEUs 
                            (Twenty-foot Equivalent Unit). The retail industry uses the majority of the
                            goods that are imported into the US. In 2023, the top 10 US importers include:
                        </p>
                    </div>
                </div>
                {{-- Company list--}}
                <div class="mt-6 px-6 overflow-x-auto max-h-96">
                    <ol class="relative border-s border-glory-red">                  
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/company/walmart.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                Walmart: 864800 TEU 
                            </h3>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-glory-red rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/company/target.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                Target: 590300 TEU
                            </h3>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-glory-red rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/company/home_depot.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                Home Depot: 388000 TEU
                            </h3>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-glory-red rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/company/lowe.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                Lowe's: 287500 TEU
                            </h3>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-glory-red rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/company/dole_food.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                Dole Food: 220200 TEU
                            </h3>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/company/samsung.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                Samsung America: 184800 TEU 
                            </h3>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-glory-red rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/company/family_dollar.jpg')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                Family Dollar: 168400 TEU 
                            </h3>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/company/lg.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                LG Group: 161600 TEU
                            </h3>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/company/philips.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                Philips Electronics: 142900 TEU
                            </h3>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/company/ikea.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                Ikea: 120500 TEU 
                            </h3>
                        </li>
                    </ol>
                </div>
            </div>
        </section>
        {{-- Top 10 US Importer Companies in 2023 --}}

        {{-- statistical comparison of us import data in the last 5 years --}}
        <section class="bg-white">
            <div class="mx-auto mx-w-screen-xl px-3 md:px-8 lg:px-8 py-12">
                <div class="mb-6">
                    <h1 class="text-center text-3xl lg:text-4xl font-medium">
                        Statistical comparison of US 
                        import data in the last 5 years
                    </h1>
                    <div class="inline-flex items-center justify-center w-full">
                        <hr class="w-64 h-1 my-8 bg-glory-red border-0 rounded dark:bg-gray-700">
                        <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900">
                            <svg class="w-4 h-4 text-gray-700 dark:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                                <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="relative overflow-x-auto shadow-md w-full md:w-full lg:w-11/12 sm:rounded-lg">
                        <table class="w-full text-md text-left rtl:text-right text-gray-500 font-medium">
                            <thead class="text-lg text-white font-medium uppercase animate-text bg-gradient-to-r from-glory-red via-fuchsia-600 to-glory-blue">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Import Partners
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Value In 2019
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Value In 2020
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Value In 2021
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Value In 2022
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Value In 2023
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd:bg-white even:bg-gray-100 border-b">
                                    <th scope="row" class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap">
                                        Mexico
                                    </th>
                                    <td class="px-6 py-4">
                                        $359.33 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $328.68 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $388.31 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $459.20 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $480.08 billion
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-100 border-b">
                                    <th scope="row" class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap">
                                        China 
                                    </th>
                                    <td class="px-6 py-4">
                                        $470.95 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $456.44 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $540.07 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $575.71 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $448.03 billion
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-100 border-b">
                                    <th scope="row" class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap">
                                        Canada
                                    </th>
                                    <td class="px-6 py-4">
                                        $326.15 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $277.30 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $366.47 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $448.33 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $431.19 billion
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-100 border-b">
                                    <th scope="row" class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap">
                                        Germany
                                    </th>
                                    <td class="px-6 py-4">
                                        $129.91 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $117.36 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $138.23 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $150.46 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $163.08 billion
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-100 border-b">
                                    <th scope="row" class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap">
                                        Japan
                                    </th>
                                    <td class="px-6 py-4">
                                        $146.92 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $122.47 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $139.11 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $154.44 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $151.58 billion
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-100 border-b">
                                    <th scope="row" class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap">
                                        South Korea
                                    </th>
                                    <td class="px-6 py-4">
                                        $79.93 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $78.35 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $98.77 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $120.87 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $119.72 billion
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-100 border-b">
                                    <th scope="row" class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap">
                                        Vietnam
                                    </th>
                                    <td class="px-6 py-4">
                                        $69.15 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $83.18 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $108.17 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $135.87 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $118.94 billion
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-100 border-b">
                                    <th scope="row" class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap">
                                        Taiwan
                                    </th>
                                    <td class="px-6 py-4">
                                        $55.92 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $62.45 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $80.65 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $96.07 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $89.91 billion
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-100 border-b">
                                    <th scope="row" class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap">
                                        India 
                                    </th>
                                    <td class="px-6 py-4">
                                        $60.13 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $53.58 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $76.92 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $90.99 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $87.28 billion
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-100 border-b">
                                    <th scope="row" class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap">
                                        Ireland
                                    </th>
                                    <td class="px-6 py-4">
                                        $62.11 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $66.32 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $74.02 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $82.50 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $82.71 billion
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-100 border-b">
                                    <th scope="row" class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap">
                                        Total Imports
                                    </th>
                                    <td class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap">
                                        $2.56 trillion
                                    </td>
                                    <td class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap">
                                        $2.40 trillion    
                                    </td>
                                    <td class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap">
                                        $2.93 trillion
                                    </td>
                                    <td class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap">
                                        $3.37 trillion
                                    </td>
                                    <td class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap">
                                        $3.17 trillion
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        {{-- statistical comparison of us import data in the last 5 years --}}

        {{-- Sample Data --}}
        <section class="bg-white">
            <div class="mx-auto max-w-screen-xl px-5 md:px-12 lg:px-8 py-12">
                <div class="mb-8">
                    <h1 class="mb-4 text-3xl lg:text-4xl font-medium text-center">
                        Sample US Import Data
                    </h1>
                    <p class="text-md text-gray-500 font-medium text-center">
                        We attain import data from reliable US government organizations, shipping manifests, 
                        and customs ports. Numerous fields are blanketed on these import statistics, inclusive 
                        of HS codes, product descriptions, expenses, quantities, origin and destination 
                        international locations, port names, and forex values. These import data records are 
                        crucial pieces of data that help traders and marketers to make wise choices. The US import
                        data and information can be used to accumulate vast information such as the HS codes and 
                        product descriptions to the amount and pricing of each product. To make you comprehend 
                        better and see what our US sample import data looks like on its whole, we have provided a 
                        sample of the US import data.
                    </p>
                </div>
                <div class="flex justify-center">
                    <div class="w-4/5 relative overflow-x-auto shadow-md sm:rounded-lg">
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
        </section>

        {{-- Benefits --}}
        <section class="bg-white">
            <div class="mx-auto max-w-screen-xl px-5 md:px-12 lg:px-8 py-12">
                <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2">
                    <div class="flex items-center justify-center">
                        <div>
                            <h1 class="mb-4 text-3xl lg:text-4xl font-medium text-center lg:text-start">
                                Benefits of the US Import Data
                            </h1>
                            <ul class="max-w-full space-y-1 font-medium text-gray-500 list-inside">
                                <li class="flex items-start">
                                    <svg class="w-3.5 h-3.5 me-2 mt-1 text-glory-red dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    Businesses looking to increase revenue can gain from the US import data.
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-3.5 h-3.5 me-2 mt-1 text-glory-red dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    US import data is crucial for businesses looking to expand into other markets.
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-3.5 h-3.5 me-2 mt-1 text-glory-red dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    Utilize US import statistics when creating your marketing strategy in the US.
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-3.5 h-3.5 me-2 mt-1 text-glory-red dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    Establish a strong brand identification in the import market in the US.
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-3.5 h-3.5 me-2 mt-1 text-glory-red dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    Establish long-term goals for your US business and boost return on investment.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex justify-center mt-6">
                        <img class="w-3/5" src="{{url('frontend/img/benefit_red.png')}}"/>
                    </div>
                </div>
            </div>
        </section>
        {{-- Benefits --}}

        {{-- FAQs --}}
        <section class="bg-white">
            <div class="mx-auto max-w-screen-xl px-5 md:px-12 lg:px-8 py-12">
                <div>
                    <h1 class="mb-4 text-center text-glory-red text-3xl lg:text-4xl md:text-3xl font-medium">
                        FAQs
                    </h1>
                </div>
                <div class="mb-8 py-4 mx-auto">
                    <div id="accordion-flush-3" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                        <h2 id="accordion-flush-heading-26">
                            <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-26" aria-expanded="true" aria-controls="accordion-flush-body-26">
                                <span class="font-semibold lg:text-xl md:text-lg sm:text-sm">
                                    What is the US import data?
                                </span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-26" class="hidden" aria-labelledby="accordion-flush-heading-26">
                            <div class="py-5 border-b border-gray-200">
                                <p class="mb-2 lg:text-start md:text-start text-center text-md font-medium text-gray-600">
                                    The US import data refers to the data that provides valuable insights into the 
                                    flow of goods entering the United States.
                                </p>
                            </div>
                        </div>
    
                        <h2 id="accordion-flush-heading-27">
                            <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-27" aria-expanded="false" aria-controls="accordion-flush-body-27">
                                <span class="font-medium lg:text-xl md:text-lg sm:text-sm">
                                    How much did the US import in total in 2023?
                                </span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-27" class="hidden" aria-labelledby="accordion-flush-heading-27">
                            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                <p class="mb-2 lg:text-start md:text-start text-center text-md font-medium text-gray-600">
                                    The US imported goods worth $3.17 trillion in 2023 with a decline of 
                                    6% from the previous year. 
                                </p>
                            </div>
                        </div>
    
                        <h2 id="accordion-flush-heading-28">
                            <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-28" aria-expanded="false" aria-controls="accordion-flush-body-28">
                                <span class="font-medium lg:text-xl md:text-lg sm:text-sm">
                                    What is the biggest US import commodity in 2023?
                                </span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-28" class="hidden" aria-labelledby="accordion-flush-heading-28">
                            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                <p class="mb-2 lg:text-start md:text-start text-center text-md font-medium text-gray-600">
                                    Electrical machinery and equipment are the biggest US import commodity 
                                    with imports of $463.36 billion in 2023.
                                </p>
                            </div>
                        </div>
    
                        <h2 id="accordion-flush-heading-29">
                            <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-29" aria-expanded="false" aria-controls="accordion-flush-body-29">
                                <span class="font-medium lg:text-xl md:text-lg sm:text-sm">
                                    Who is the biggest import partner of the US in 2023?
                                </span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-29" class="hidden" aria-labelledby="accordion-flush-heading-29">
                            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                <p class="mb-2 lg:text-start md:text-start text-center text-md font-medium text-gray-600">
                                    Mexico is the biggest import partner of the US, with imports worth $480.08 billion in 2023.1
                                </p>
                            </div>
                        </div>
    
                        <h2 id="accordion-flush-heading-30">
                            <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-30" aria-expanded="false" aria-controls="accordion-flush-body-30">
                                <span class="font-medium lg:text-xl md:text-lg sm:text-sm">
                                    How can businesses use US import data to inform their strategies?
                                </span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-30" class="hidden" aria-labelledby="accordion-flush-heading-30">
                            <div class="py-5 border-b border-gray-200">
                                <p class="mb-2 lg:text-start md:text-start text-center text-md font-medium text-gray-600">
                                    Businesses can use US import data to identify trends in consumer demand in the US, assess the 
                                    competitiveness of their products, and make informed decisions about sourcing and supply chain 
                                    management.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- FAQs --}}

        @include('frontend.footer')
        @include('frontend.script')

    </body>
</html>  