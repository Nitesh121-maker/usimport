<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>
            USA Export Data || Tradeimex 
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
                                Export Data
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        {{-- <nav class="flex px-5 pt-24 pb-4 text-gray-700 border border-gray-200 bg-white" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="/" class="inline-flex items-center text-md font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path 
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"
                            />
                        </svg>
                        Home
                    </a>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="ms-1 text-md font-medium text-gray-500 md:ms-2 dark:text-gray-400">
                            Export Data
                        </span>
                    </div>
                </li>
            </ol>
        </nav> --}}

        {{-- US Export Data --}}
        <section class="animate-text bg-gradient-to-r from-glory-red via-fuchsia-600 to-glory-blue">
            <div class="mx-auto max-w-screen-xl px-5 md:px-8 lg:px-5 py-14">
                <div class="grid lg:grid-cols-2">
                    <div>
                        <h1 class="mt-6 mb-3 text-white font-medium text-5xl lg:text-5xl text-start md:text-start lg:text-start">
                            US Export Data
                        </h1>
                        <p class="text-md mt-6 font-normal text-gray-100 text-start md:text-start lg:text-start">
                            As the world's most developed nation, the USA is a powerhouse in global trade. 
                            The United States is the second-largest country in North America by land area. 
                            The US is known for its quality exports all around the world. In today's global 
                            economy, tracking export data is crucial for understanding trade trends and 
                            identifying growth opportunities. The United States, as one of the world's 
                            largest economies, plays a significant role in international trade. The US 
                            exported goods worth $2.01 trillion in 2023 with a decline of 2% from the previous year. 
                            In 2023, the major US exports include mineral fuels and mineral oils 
                            ($323.17 billion), Nuclear reactors and machinery ($233 billion), 
                            Electrical machinery and equipment ($200.65 billion), 
                            Vehicles ($152.82 billion), and Aircraft, spacecraft, and parts thereof 
                            ($124.90 billion). The top export destinations for US exports in 2023 
                            were Canada ($352.84 billion), Mexico ($323.22 billion), China ($147.80 billion), 
                            Netherlands ($82.18 billion), and Germany ($76.69 billion). The US export data 
                            for 2023 provides valuable insights into the country's economic performance and 
                            trade relationships. We will now delve into the US export data for 2023, 
                            highlighting the top US exports and export partners.
                        </p>
                        <div class="py-6">
                            <button data-modal-target="authentication-modal"  data-modal-toggle="authentication-modal"  type="button" class="text-white border border-white hover:bg-white hover:text-glory-blue font-medium rounded-full text-sm px-5 p-2 text-center me-2 mb-2">
                                Request a Demo
                                <span class="ml-2.5">
                                    <i class="fa-solid fa-circle-arrow-right"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="mt-4 flex justify-center items-start">
                        <img src="{{url('frontend/img/export_data.svg')}}" class="w-4/6 object-contain" />
                    </div>
                </div>
            </div>
        </section>

        {{-- key points section --}}
        <section class="bg-white">
            <div class="mx-auto max-w-screen-xl px-5 md:px-12 py-16">
                <div class="bg-white border-2 border-glory-blue rounded-lg">
                    <div class="px-12 p-5 lg:p-8 grid gap-2 grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                        <div class="flex">
                            <div class="text-center">
                                <div class="mb-4 flex justify-center">
                                    <img class="w-1/5 md:w-3/12 lg:w-1/5" src="{{url('frontend/img/rank-blue.png')}}">
                                </div>
                                <h1 class="mb-4 text-2xl md:text-xl lg:text-xl font-semibold text-center">
                                    2
                                </h1>
                                <p class="mb-4 text-gray-500 text-sm font-medium">
                                    The US has been ranked 2nd in global exports, showing a strong position 
                                    in the global trade arena.    
                                </p> 
                            </div>
                            <div class="hidden lg:block vertical-line-blue mx-3"></div>
                        </div> 
                        <hr class="lg:hidden md:hidden h-px my-8 bg-glory-blue border-0">

                        {{-- Percent --}}
                        <div class="flex">
                            <div class="text-center">
                                <div class="mb-4 flex justify-center">
                                    <img class="w-1/5 md:w-3/12 lg:w-1/5" src="{{url('frontend/img/piechart_blue.png')}}">
                                </div>
                                <h1 class="mb-4 text-2xl md:text-xl lg:text-xl font-semibold">
                                    13.35%
                                </h1>
                                <p class="mb-4 text-gray-500 text-sm font-medium">
                                    The US has a 13.35% market share in the global export market, 
                                    which makes its presence increasingly significant.    
                                </p>    
                            </div>
                            <div class="hidden lg:block vertical-line-blue mx-3"></div>
                        </div> 
                        <hr class="lg:hidden md:hidden h-px my-8 bg-glory-blue border-0">

                        <hr class="lg:hidden md:block hidden h-px my-8 bg-glory-blue border-0">
                        <hr class="lg:hidden md:block hidden h-px my-8 bg-glory-blue border-0">

                        {{-- Country --}}
                        <div class="flex">
                            <div class="text-center">
                                <div class="mb-4 flex justify-center">
                                    <img class="w-1/5 md:w-3/12 lg:w-1/5" src="{{url('frontend/img/canada_rect.png')}}">
                                </div>
                                <h1 class="mb-4 text-2xl md:text-xl lg:text-xl font-semibold">
                                    CANADA
                                </h1>  
                                <p class="mb-4 text-gray-500 text-sm font-medium">
                                    Canada is the biggest export partner of the USA for goods exports in 2023.   
                                </p> 
                            </div>
                            <div class="hidden lg:block vertical-line-blue mx-3"></div>
                        </div> 
                        <hr class="lg:hidden md:hidden h-px my-8 bg-glory-blue border-0">

                        {{-- Product --}}
                        <div class="flex">
                            <div class="text-center"> 
                                <div class="mb-4 flex justify-center">
                                    <img class="w-1/5 md:w-3/12 lg:w-1/5" src="{{url('frontend/img/oil-tank.png')}}">
                                </div>  
                                <h1 class="mb-4 text-2xl md:text-xl lg:text-xl font-semibold">
                                    MINERAL FUELS & OILS
                                </h1>
                                <p class="mb-4 text-gray-500 text-sm font-medium">
                                    Mineral Fuels and mineral oils are the biggest US exports in 2023, 
                                    playing a huge role in the country’s economy.
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
            <div class="mx-auto max-w-screen-xl px-5 lg:px-5 md:px-12 py-16">
                <h1 class="text-3xl lg:text-4xl font-medium text-center mb-8">
                    Major Information Included in the US Export Data
                </h1>
                <div class="py-6 grid grid-cols-2 lg:grid-cols-5 gap-8">
                    <div>
                        <span class="w-full flex items-start text-sm md:text-md lg:text-lg font-semibold text-gray-900 me-3">
                            <span class="flex w-2.5 h-2.5 bg-glory-blue rounded-full me-1.5 mt-1 flex-shrink-0"></span>
                            Consignment Date
                        </span>
                    </div>
                    <div>
                        <span class="w-full flex items-start text-sm md:text-md lg:text-lg font-semibold text-gray-900 me-3">
                            <span class="flex w-2.5 h-2.5 bg-glory-blue rounded-full me-1.5 mt-1 flex-shrink-0"></span>
                            Name and Address of the shipper and buyer
                        </span>
                    </div>
                    <div>
                        <span class="w-full flex items-start text-sm md:text-md lg:text-lg font-semibold text-gray-900 me-3">
                            <span class="flex w-2.5 h-2.5 bg-glory-blue rounded-full me-1.5 mt-1 flex-shrink-0"></span>
                            HS Codes
                        </span>
                    </div>
                    <div>
                        <span class="w-full flex items-start text-sm md:text-md lg:text-lg font-semibold text-gray-900 me-3">
                            <span class="flex w-2.5 h-2.5 bg-glory-blue rounded-full me-1.5 mt-1 flex-shrink-0"></span>
                            PKG Unit
                        </span>
                    </div>
                    <div>
                        <span class="w-full flex items-start text-sm md:text-md lg:text-lg font-semibold text-gray-900 me-3">
                            <span class="flex w-2.5 h-2.5 bg-glory-blue rounded-full me-1.5 mt-1 flex-shrink-0"></span>
                            Name of the commodity
                        </span>
                    </div>
                    <div>
                        <span class="w-full flex items-start text-sm md:text-md lg:text-lg font-semibold text-gray-900 me-3">
                            <span class="flex w-2.5 h-2.5 bg-glory-blue rounded-full me-1.5 mt-1 flex-shrink-0"></span>
                            Detailed product descriptions.
                        </span>
                    </div>
                    <div>
                        <span class="w-full flex items-start text-sm md:text-md lg:text-lg font-semibold text-gray-900 me-3">
                            <span class="flex w-2.5 h-2.5 bg-glory-blue rounded-full me-1.5 mt-1 flex-shrink-0"></span>
                            Weight and Quantity
                        </span>
                    </div>
                    <div>
                        <span class="w-full flex items-start text-sm md:text-md lg:text-lg font-semibold text-gray-900 me-3">
                            <span class="flex w-2.5 h-2.5 bg-glory-blue rounded-full me-1.5 mt-1 flex-shrink-0"></span>
                            POD codes, trunk POL codes, etc.
                        </span>
                    </div>
                    <div>
                        <span class="w-full flex items-start text-sm md:text-md lg:text-lg font-semibold text-gray-900 me-3">
                            <span class="flex w-2.5 h-2.5 bg-glory-blue rounded-full me-1.5 mt-1 flex-shrink-0"></span>
                            Port of origin and destination. 
                        </span>
                    </div>
                    <div>
                        <span class="w-full flex items-start text-sm md:text-md lg:text-lg font-semibold text-gray-900 me-3">
                            <span class="flex w-2.5 h-2.5 bg-glory-blue rounded-full me-1.5 mt-1 flex-shrink-0"></span>
                            Destination country.
                        </span>
                    </div>
                </div>
            </div>
        </section>  
        {{-- End Of Major Information Included in the US Import Data --}}

        {{-- Top 10 US Imports in 2023 --}}
        <section class="bg-glory-blue">
            <div class="grid grid-cols-1 lg:grid-cols-3 px-5 md:px-5 lg:px-5 py-16">
                <div class="col-span-2 md:pl-8 lg:pl-0">
                    <h1 class="text-3xl text-white lg:text-4xl font-medium mb-4">
                        Top 10 US Exports in 2023
                    </h1>   
                    <p class="mb-4 text-md font-medium text-gray-100">
                        The US is known for its vast export products around the world. The year 2023 was 
                        a great year for the US in terms of its export trade. Mineral Fuels and mineral 
                        oils are the biggest US exports with a total export value of $323.17 billion in 2023. 
                        The top 10 exports of the US in 2023 include: 
                    </p>
                    <ul class="max-w-2xl space-y-1 font-medium text-gray-100 list-disc list-inside dark:text-gray-400">
                        <li>
                            Mineral fuels and mineral oils: $323.17 billion (16.01%)
                        </li>
                        <li>
                            Nuclear reactors, machinery, and mechanical appliances: $233 billion (11.54%)
                        </li>
                        <li>
                            Electrical machinery and equipment: $200.65 billion (9.94%)
                        </li>
                        <li>
                            Vehicles: $152.82 billion (7.57%)
                        </li>
                        <li>
                            Aircraft, spacecraft, and parts thereof: $124.90 billion (6.19%)
                        </li>
                        <li>
                            Optical, measuring, medical, or surgical instruments: $105.10 billion (5.21%)
                        </li>
                        <li>
                            Pharmaceutical products: $90.30 billion (4.47%)
                        </li>
                        <li>
                            Plastics and articles thereof: $77.79 billion (3.85%)
                        </li>
                        <li>
                            Natural or cultured pearls, precious stones, and metals: $76.67 billion (3.8%)
                        </li>
                        <li>
                            Commodities not elsewhere specified: $67.35 billion (3.34%)
                        </li>
                    </ul>
                </div>
                <div class="cols-span-1">
                    <img class="w-full contrast-500 saturation-500 relative -right-5" src="{{url('frontend/img/top_10_blue.svg')}}" />
                </div>
            </div>
        </section>
        {{-- Top 10 US Imports in 2023 --}}

        {{-- Top 10 US import partners in 2023 --}}
        <section class="bg-white">
            <div class="grid grid-cols-1 lg:grid-cols-2 px-5 md:px-12 lg:px-5 py-16">
                <div class="flex items-center">
                    <div>
                        <h1 class="text-3xl lg:text-4xl font-medium mb-4">
                            Top 10 US export partners in 2023
                        </h1>
                        <p class="mb-4 text-md font-medium text-gray-600">
                            The US exports are famous for their high-quality goods and services all around 
                            the world. There are several export destinations for the US to export its goods. 
                            Canada is the biggest export destination of the US followed by Mexico and China. 
                            Canada imported goods worth $352.84 billion from the US in 2023. The top 10 US 
                            export partners in 2023 include:
                        </p>
                    </div>
                </div>
                {{-- country list --}}
                <div class="mt-6 px-6 max-h-96 overflow-x-auto scrollbar:!w-1.5 scrollbar:!h-1.5 scrollbar-thumb:rounded scrollbar-thumb-glory-blue scrollbar-track-gray-100">
                    <ol class="relative border-s border-glory-blue">                  
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-glory-blue rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/img/canada_r.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                Canada: $352.84 billion (17.5%)
                            </h3>
                            <p class="mb-4 text-md font-medium text-gray-600">
                                Vehicles are the biggest US exports to Canada worth $57.72 billion in 2023. 
                            </p>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-glory-blue rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/img/china.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                Mexico: $323.22 billion (16%)
                            </h3>
                            <p class="mb-4 text-md font-medium text-gray-600">
                                Electrical machinery and equipment are the biggest US exports to Canada worth $51.60 billion in 2023. 
                            </p>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-glory-blue rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/img/canada.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                China: $147.80 billion (7.3%)
                            </h3>
                            <p class="mb-4 text-md font-medium text-gray-600">
                                Mineral fuels and mineral oils are the biggest US exports to China worth $19.73 billion in 2023. 
                            </p>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-glory-blue rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/img/germany.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                Netherlands: $82.18 billion (4.1%)
                            </h3>
                            <p class="mb-4 text-md font-medium text-gray-600">
                                Mineral fuels and mineral oils are the biggest US exports to the Netherlands worth $30.55 billion in 2023. 
                            </p>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-glory-blue rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/img/japan.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                Germany: $76.69 billion (3.8%)
                            </h3>
                            <p class="mb-4 text-md font-medium text-gray-600">
                                Vehicles are the biggest US exports to Germany worth $10.41 billion in 2023. 
                            </p>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-glory-blue rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/img/south-korea.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                Japan: $76.16 billion (3.8%)
                            </h3>
                            <p class="mb-4 text-md font-medium text-gray-600">
                                Mineral fuels and mineral oils are the biggest US exports to Japan worth $12.06 billion in 2023. 
                            </p>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-glory-blue rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/img/vietnam.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                United Kingdom: $74.08 billion (3.7%)
                            </h3>
                            <p class="mb-4 text-md font-medium text-gray-600">
                                Mineral fuels and mineral oils are the biggest US exports to the United 
                                Kingdom worth $13.33 billion in 2023.
                            </p>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-glory-blue rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/img/taiwan.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                South Korea: $64.83 billion (3.2%)
                            </h3>
                            <p class="mb-4 text-md font-medium text-gray-600">
                                Mineral fuels and mineral oils are the biggest US exports to 
                                South Korea worth $17.21 billion in 2023. 
                            </p>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-glory-blue rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/img/india.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                France: $45.25 billion (2.2%)
                            </h3>
                            <p class="mb-4 text-md font-medium text-gray-600">
                                Mineral fuels and mineral oils are the biggest US exports to France 
                                worth $11.11 billion in 2023.
                            </p>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-glory-blue rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/img/ireland.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                Brazil: $44.80 billion (2.2%)
                            </h3>
                            <p class="mb-4 text-md font-medium text-gray-600">
                                Mineral fuels and mineral oils are the biggest US exports to Brazil 
                                worth $8.56 billion in 2023.
                            </p>
                        </li>
                    </ol>
                </div>
            </div>
        </section>
        {{-- Top 10 US import partners in 2023 --}}

        {{-- Top 10 US Import Ports in 2023 --}}
        <section class="bg-pattern-img">
            <div class="mx-auto mx-w-screen-xl px-5 md:px-12 lg:px-5 py-16 backdrop-blur-sm">
                <div class="mb-6">
                    <h1 class="text-white font-medium mb-3 text-3xl lg:text-4xl text-center">
                        Top 10 US Export Ports in 2023
                    </h1>
                    <p class="text-gray-100 font-normal mb-3 text-md lg:text-lg text-center">
                        The US is home to some of the busiest ports in the world. 
                        The top 10 US Import Ports in 2023 include:
                    </p>
                </div>
                <div class="flex justify-center">
                    <div>
                        <button data-tooltip-target="tooltip-houston" type="button" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                            <img class="w-8 h-8 me-4 -ms-1" src="{{url('frontend/port/houston.svg')}}" width="100%">
                            Port of Houston
                        </button>
                        <div id="tooltip-houston" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            139.79 billion tons
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>

                        <button data-tooltip-target="tooltip-corpus" type="button" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                            <img class="w-8 h-8 me-4 -ms-1" src="{{url('frontend/port/corpus.png')}}" width="100%">
                            Port of Corpus Christi
                        </button>
                        <div id="tooltip-corpus" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            108.09 billion tons
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>

                        <button data-tooltip-target="tooltip-louisiana" type="button" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                            <img class="w-8 h-8 me-4 -ms-1" src="{{url('frontend/port/south.png')}}" width="100%">
                            Port of South Louisiana
                        </button>
                        <div id="tooltip-louisiana" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            82.29 billion tons
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>

                        <button data-tooltip-target="tooltip-hampton" type="button" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                            <img class="w-8 h-8 me-4 -ms-1" src="{{url('frontend/port/hampton.png')}}" width="100%">
                            Port of Hampton Roads Virginia
                        </button>
                        <div id="tooltip-hampton" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            40.72 billion tons
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>

                        <button data-tooltip-target="tooltip-beaumont" type="button" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                            <img class="w-8 h-8 me-4 -ms-1" src="{{url('frontend/port/beaumont.png')}}" width="100%">
                            Port of Beaumont Texas
                        </button>
                        <div id="tooltip-beaumont" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            29.61 billion tons
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>

                        <button data-tooltip-target="tooltip-baton" type="button" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                            <img class="w-8 h-8 me-4 -ms-1" src="{{url('frontend/port/ambassador.webp')}}" width="80%">
                            Port of Greater Baton Rouge Louisiana
                        </button>
                        <div id="tooltip-baton" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            22.60 billion tons
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>

                        <button data-tooltip-target="tooltip-orleans" type="button" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                            <img class="w-8 h-8 me-4 -ms-1" src="{{url('frontend/port/orlena.png')}}" width="100%">
                            Port of New Orleans Louisiana
                        </button>
                        <div id="tooltip-orleans" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            22.52 billion tons
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>

                        <button data-tooltip-target="tooltip-beach" type="button" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                            <img class="w-8 h-8 me-4 -ms-1" src="{{url('frontend/port/california.jpg')}}" width="100%">
                            Port of Long Beach California
                        </button>
                        <div id="tooltip-beach" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            19.13 billion tons
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>

                        <button data-tooltip-target="tooltip-angeles" type="button" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                            <img class="w-8 h-8 me-4 -ms-1" src="{{url('frontend/port/los_angeles.svg')}}" width="100%">
                            Port of Los Angeles California
                        </button>
                        <div id="tooltip-angeles" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            16.29 billion tons
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>

                        <button data-tooltip-target="tooltip-jersey" type="button" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                            <img class="w-8 h-8 me-4 -ms-1" src="{{url('frontend/port/new_jersey.png')}}" width="100%">
                            Port of New York and New Jersey Port Newark
                        </button>
                        <div id="tooltip-jersey" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            15.25 billion tons
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Top 10 US Import Ports in 2023 --}}

        {{-- Top 10 US Exporter Companies in 2023 --}} 
        <section class="bg-white">
            <div class="grid grid-cols-1 lg:grid-cols-2 px-5 md:px-12 lg:px-5 py-16">
                <div class="flex items-center">
                    <div>
                        <h1 class="text-3xl lg:text-4xl font-medium mb-4">
                            Top 10 US Export Companies in 2023
                        </h1>
                        <p class="mb-4 text-md font-medium text-gray-600">
                            The US is famous for its top-class companies, exporting goods around the world. 
                            Exxon Mobil Corporation is the biggest export company in the US, with its mineral 
                            fuels and oil exports worth $344.6 billion in 2023. The top 10 export companies in 
                            the US with their export revenue in 2023 include: 
                        </p>
                    </div>
                </div>
                {{-- Company list --}}
                <div class="mt-6 px-6 overflow-x-auto max-h-96">
                    <ol class="relative border-s border-glory-blue">                  
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/company/exxon.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                Exxon Mobil Corporation (Mineral fuels, oil, and gas): $344.6 billion 
                            </h3>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-glory-blue rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/company/chevron.jpg')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                Chevron Corporation (Oil, gas): $196.91 billion 
                            </h3>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-glory-blue rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/company/cargill.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                Cargill (Conglomerate): $177 billion 
                            </h3>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-glory-blue rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/company/koch.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                Koch Industries (Conglomerate): $125 billion 
                            </h3>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-glory-blue rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/company/ldc.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                Louis Dreyfus Company (Cotton): $50.6 billion 
                            </h3>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/company/dow.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                Dow Chemical (Chemicals): $44.6 billion 
                            </h3>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-glory-blue rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/company/paper.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                International Paper (Paper and packaging): $18.9 billion 
                            </h3>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/company/cellmark.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                CellMark Group (Diversified): $4.2 billion 
                            </h3>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/company/delong.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                DeLong (Animal fodder): $1 billion 
                            </h3>
                        </li>
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img src="{{url('frontend/company/apple.png')}}">
                            </span>
                            <h3 class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                                Apple (Electronics): $926 million 
                            </h3>
                        </li>
                    </ol>
                </div>
            </div>
        </section>
        {{-- Top 10 US Exporter Companies in 2023 --}}

        {{-- statistical comparison of us import data in the last 5 years --}}
        <section class="bg-white">
            <div class="mx-auto mx-w-screen-xl px-5 md:px-12 lg:px-5 py-16">
                <div class="mb-6">
                    <h1 class="text-center text-3xl lg:text-4xl font-medium">
                        Statistical comparison of US Export data in the last 5 years
                    </h1>
                    <div class="inline-flex items-center justify-center w-full">
                        <hr class="w-64 h-1 my-8 bg-glory-blue border-0 rounded dark:bg-gray-700">
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
                                        Export Partners
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
                                <tr class="bg-white border-b">
                                    <th scope="row" class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap">
                                        Canada
                                    </th>
                                    <td class="px-6 py-4">
                                        $292.82 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $255.39 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $307.75 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $354.99 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $352.84 billion
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-100 border-b">
                                    <th scope="row" class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap">
                                        Mexico 
                                    </th>
                                    <td class="px-6 py-4">
                                        $256.31 billion	
                                    </td>
                                    <td class="px-6 py-4">
                                        $211.48 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $276.49 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $324.37 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $323.22 billion
                                    </td>
                                </tr>
                                <tr class="bg-white border-b">
                                    <th scope="row" class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap">
                                        China
                                    </th>
                                    <td class="px-6 py-4">
                                        $106.44 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $124.48 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $151.44 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $153.83 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $147.80 billion
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-100 border-b">
                                    <th scope="row" class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap">
                                        Netherlands	
                                    </th>
                                    <td class="px-6 py-4">
                                        $50.99 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $45.30 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $53.08 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $72.88 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $82.18 billion
                                    </td>
                                </tr>
                                <tr class="bg-white border-b">
                                    <th scope="row" class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap">
                                        Germany					
                                    </th>
                                    <td class="px-6 py-4">
                                        $60.06 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $57.43 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $65.33 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $72.92 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $76.69 billion
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-100 border-b">
                                    <th scope="row" class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap">
                                        Japan
                                    </th>
                                    <td class="px-6 py-4">
                                        $74.49 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $63.75 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $74.56 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $80.31 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $76.16 billion
                                    </td>
                                </tr>
                                <tr class="bg-white border-b">
                                    <th scope="row" class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap">
                                        UK
                                    </th>
                                    <td class="px-6 py-4">
                                        $69.06 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $58.42 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $61.42 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $77.30 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $74.08 billion
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-100 border-b">
                                    <th scope="row" class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap">
                                        South Korea
                                    </th>
                                    <td class="px-6 py-4">
                                        $56.50 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $50.96 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $65.94 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $71.47 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $64.83 billion
                                    </td>
                                </tr>
                                <tr class="bg-white border-b">
                                    <th scope="row" class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap">
                                        France
                                    </th>
                                    <td class="px-6 py-4">
                                        $38.41 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $28.20 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $30.59 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $46.94 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $45.25 billion
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-100 border-b">
                                    <th scope="row" class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap">
                                        Brazil
                                    </th>
                                    <td class="px-6 py-4">
                                        $42.86 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $34.59 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $46.93 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $53.57 billion
                                    </td>
                                    <td class="px-6 py-4">
                                        $44.80 billion
                                    </td>
                                </tr>
                                <tr class="bg-white border-b">
                                    <th scope="row" class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap">
                                        Total exports
                                    </th>
                                    <td class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap">
                                        $1.64 trillion
                                    </td>
                                    <td class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap">
                                        $1.42 trillion    
                                    </td>
                                    <td class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap">
                                        $1.75 trillion
                                    </td>
                                    <td class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap">
                                        $2.06 trillion
                                    </td>
                                    <td class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap">
                                        $2.01 trillion
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
            <div class="mx-auto max-w-screen-xl px-5 md:px-12 lg:px-5 py-16">
                <div class="mb-8">
                    <h1 class="mb-4 text-3xl lg:text-4xl font-medium text-center">
                        Sample US Export Data
                    </h1>
                    <p class="text-md text-gray-500 font-medium text-center">
                        We get reliable US export data from government agencies, shipping companies, 
                        and customs ports. Numerous fields are included in this trade data, including 
                        HS codes, product descriptions, prices, quantities, origin country, destination 
                        country, port names, and currency values. This trade data is essential information 
                        that businesses and marketers need to make wise judgments. This US export trade 
                        data contains all the information needed to obtain each product, including its quantity
                        and pricing as well as its HS codes and product descriptions. For your convenience and 
                        better comprehension, we have included a sample of this export trade data so you 
                        can see what the US export data looks like on its whole, with all the information.
                    </p>
                </div>
                <div class="flex justify-center">
                    <div class="w-4/5 relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <tbody>
                                <tr class="odd:bg-white even:bg-gray-100">
                                    <th scope="row" class="px-6 py-4 font-bold text-gray-100 whitespace-nowrap bg-glory-blue">
                                        DATE
                                    </th>
                                    <td class="px-6 py-4 font-medium text-md">
                                        31-August-2023
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-100">
                                    <th scope="row" class="px-6 py-4 font-bold text-gray-100 whitespace-nowrap bg-glory-blue">
                                        BILL OF LADING NUMBER
                                    </th>
                                    <td class="px-6 py-4 font-medium text-md">
                                        CMDUNAM5380008	
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-100">
                                    <th scope="row" class="px-6 py-4 font-bold text-gray-100 whitespace-nowrap bg-glory-blue">
                                        EXPORTER NAME
                                    </th>
                                    <td class="px-6 py-4 font-medium text-md">
                                        ExxonMobil TX
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-100">
                                    <th scope="row" class="px-6 py-4 font-bold text-gray-100 whitespace-nowrap bg-glory-blue">
                                        HS CODE
                                    </th>
                                    <td class="px-6 py-4 font-medium text-md">
                                        271000
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-100">
                                    <th scope="row" class="px-6 py-4 font-bold text-gray-100 whitespace-nowrap bg-glory-blue">
                                        PRODUCT DESCRIPTION
                                    </th>
                                    <td class="px-6 py-4 font-medium text-md">
                                        1X40ST CONTAINER: CASES M JET OIL II CASE 24X1UQL PETROLEUM LUBRICATING OIL
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-100">
                                    <th scope="row" class="px-6 py-4 font-bold text-gray-100 whitespace-nowrap bg-glory-blue">
                                        QUANTITY
                                    </th>
                                    <td class="px-6 py-4 font-medium text-md">
                                        720
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-100">
                                    <th scope="row" class="px-6 py-4 font-bold text-gray-100 whitespace-nowrap bg-glory-blue">
                                        UNIT
                                    </th>
                                    <td class="px-6 py-4 font-medium text-md">
                                        PACKAGE
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-100">
                                    <th scope="row" class="px-6 py-4 font-bold text-gray-100 whitespace-nowrap bg-glory-blue">
                                        WEIGHT IN KGM
                                    </th>
                                    <td class="px-6 py-4 font-medium text-md">
                                        18706.32
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-100">
                                    <th scope="row" class="px-6 py-4 font-bold text-gray-100 whitespace-nowrap bg-glory-blue">
                                        PORT OF LOADING
                                    </th>
                                    <td class="px-6 py-4 font-medium text-md">
                                        NEW ORLEANS
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-100">
                                    <th scope="row" class="px-6 py-4 font-bold text-gray-100 whitespace-nowrap bg-glory-blue">
                                        LOADING PORT
                                    </th>
                                    <td class="px-6 py-4 font-medium text-md">
                                        TAURANGA
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-100">
                                    <th scope="row" class="px-6 py-4 font-bold text-gray-100 whitespace-nowrap bg-glory-blue">
                                        PORT OF UNLOADING
                                    </th>
                                    <td class="px-6 py-4 font-medium text-md">
                                        PORT OF MANZANILLO 
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-100">
                                    <th scope="row" class="px-6 py-4 font-bold text-gray-100 whitespace-nowrap bg-glory-blue">
                                        ORIGIN COUNTY
                                    </th>
                                    <td class="px-6 py-4 font-medium text-md">
                                        UNITED STATES
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-100">
                                    <th scope="row" class="px-6 py-4 font-bold text-gray-100 whitespace-nowrap bg-glory-blue">
                                        DESTINATION COUNTRY
                                    </th>
                                    <td class="px-6 py-4 font-medium text-md">
                                        MEXICO
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
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div class="flex items-center justify-center">
                        <div>
                            <h1 class="mb-4 text-3xl lg:text-4xl font-medium text-center lg:text-start">
                                Benefits of the US Export Data
                            </h1>
                            <ul class="max-w-full space-y-1 font-medium text-gray-500 list-inside">
                                <li class="flex items-start">
                                    <svg class="w-3.5 h-3.5 me-2 mt-1 text-glory-blue dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    Assess the current status and export performance of the US economy. 
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-3.5 h-3.5 me-2 mt-1 text-glory-blue dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    Generate authentic leads from the US export sector.
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-3.5 h-3.5 me-2 mt-1 text-glory-blue dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    Learn what the most recent product demand in the US is.
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-3.5 h-3.5 me-2 mt-1 text-glory-blue dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    Monitor your competitors in the US and outperform them.
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-3.5 h-3.5 me-2 mt-1 text-glory-blue dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    Develop your marketing strategy using US export data.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex justify-center mt-6">
                        <img class="w-3/5" src="{{url('frontend/img/benefit_blue.png')}}"/>
                    </div>
                </div>
            </div>
        </section>
        {{-- Benefits --}}

        {{-- FAQs --}}
        <section class="bg-white">
            <div class="mx-auto max-w-screen-xl px-5 md:px-12 lg:px-8 py-12">
                <div>
                    <h1 class="mb-4 text-center text-glory-blue text-3xl lg:text-4xl md:text-3xl font-medium">
                        FAQs
                    </h1>
                </div>
                <div class="mb-8 py-4 mx-auto">
                    <div id="accordion-flush-3" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                        <h2 id="accordion-flush-heading-26">
                            <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-26" aria-expanded="true" aria-controls="accordion-flush-body-26">
                                <span class="font-semibold lg:text-xl md:text-lg sm:text-sm">
                                    What is the US export data?
                                </span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-26" class="hidden" aria-labelledby="accordion-flush-heading-26">
                            <div class="py-5 border-b border-gray-200">
                                <p class="mb-2 lg:text-start md:text-start text-center text-md font-medium text-gray-600">
                                    The data and statistics on the export trade of the US with other countries 
                                    are called the US export data. 
                                </p>
                            </div>
                        </div>
    
                        <h2 id="accordion-flush-heading-27">
                            <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-27" aria-expanded="false" aria-controls="accordion-flush-body-27">
                                <span class="font-medium lg:text-xl md:text-lg sm:text-sm">
                                    How much value of goods did the US export in 2023?
                                </span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-27" class="hidden" aria-labelledby="accordion-flush-heading-27">
                            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                <p class="mb-2 lg:text-start md:text-start text-center text-md font-medium text-gray-600">
                                    The US exported goods worth a total value of $2.01 trillion in 2023. 
                                </p>
                            </div>
                        </div>
    
                        <h2 id="accordion-flush-heading-28">
                            <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-28" aria-expanded="false" aria-controls="accordion-flush-body-28">
                                <span class="font-medium lg:text-xl md:text-lg sm:text-sm">
                                    What are the biggest US export goods in 2023?
                                </span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-28" class="hidden" aria-labelledby="accordion-flush-heading-28">
                            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                <p class="mb-2 lg:text-start md:text-start text-center text-md font-medium text-gray-600">
                                    Mineral fuels and mineral oils are the biggest US 
                                    exports worth $323.17 billion in 2023. 
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
                                    Canada is the biggest export partner of the US with exports worth $352.84 billion in 2023. 
                                </p>
                            </div>
                        </div>
    
                        <h2 id="accordion-flush-heading-30">
                            <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-30" aria-expanded="false" aria-controls="accordion-flush-body-30">
                                <span class="font-medium lg:text-xl md:text-lg sm:text-sm">
                                    What are the major details included in the US export data?
                                </span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-30" class="hidden" aria-labelledby="accordion-flush-heading-30">
                            <div class="py-5 border-b border-gray-200">
                                <p class="mb-2 lg:text-start md:text-start text-center text-md font-medium text-gray-600">
                                    The US export data includes details such as HS codes, product descriptions, quantity, 
                                    origin country, destination country, port name, and more.
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