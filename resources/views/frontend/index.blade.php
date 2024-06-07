<!DOCTYPE html>
<html class="scroll-smooth"> 
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>USA Import || US Trade Data</title>
        @include('frontend.link')
    </head>
    <body>
        @include('frontend.header')

        {{-- Overview Section --}}
        <section class="animate-text bg-gradient-to-r from-glory-red via-fuchsia-600 to-glory-blue pt-28 pb-12">
            <div class="hidden lg:block" id="canvas-container">
                <div id="canvas"></div>
            </div>
            <div id="content">
                <div class="mx-auto max-w-screen-xl px-5 md:px-12 lg:px-5">
                    <div class="grid lg:grid-cols-2 grid-cols-1 lg:gap-8 md:gap-2 gap-2">
                        <div class="flex flex-col justify-center">
                            <h1 class="mb-3 mt-4 lg:text-4xl text-3xl font-normal text-white text-center lg:text-start md:text-start">
                                Explore the latest US trade trends with TradeImeX: 
                                Your Trusted Source for US Trade Data
                            </h1>
                            <p class="mb-1 text-md font-normal text-gray-100 text-center lg:text-start md:text-start">
                                TradeImeX is a leading US trade data provider offering comprehensive insights into the 
                                import and export activities of the United States. US trade data provides comprehensive 
                                information about all import and export transactions that have occurred in the United States. 
                                It covers all the major trade data fields such as product description, HS code, date of shipment, 
                                US exporter details/importer details, quantity, mode of transport, and more. As a trusted source 
                                for US import-export data, TradeImeX bridges the gap between US importers and exporters, providing 
                                valuable information to help businesses make informed decisions and stay competitive in the global 
                                market. With detailed data on US trade trends and market analysis, we empower companies to optimize 
                                their strategies, identify new opportunities, and mitigate risks. The US trade data we provide will 
                                assist you in finding answers to any questions you may have if you are aiming your marketing at the 
                                US market. Whether you are a seasoned importer or exporter, TradeImeX offers reliable US trade data 
                                and unparalleled expertise to support your international trade endeavors.
                            </p>
                        </div>
                        <div class="flex justify-center">
                            <img class="w-full md:w-[70%] lg:w-4/5 object-contain z-50 " src="{{url('frontend/img/navigate.gif')}}">
                        </div>
                    </div>
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-white mt-14" id="counter">
                        <div class="flex flex-col items-center justify-center">
                            <h1 class="mb-2 text-3xl font-bold">
                                <span class="count" data-number="5"></span>+
                            </h1>
                            <dd class="text-white text-center">Years Of Experience</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <h1 class="mb-2 text-3xl font-bold">
                                <span class="count" data-number="10"></span>k+
                            </h1>
                            <dd class="text-white text-center">Clients</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <h1 class="mb-2 text-3xl font-bold">
                                <span class="count" data-number="80"></span>+
                            </h1>
                            <dd class="text-white text-center">Countries Covered</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <h1 class="mb-2 text-3xl font-bold">
                                <span class="count" data-number="100"></span>%
                            </h1>
                            <dd class="text-white text-center">Satisfaction</dd>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Search Bar --}}
        <section class="bg-solid">
            <div class="px-5 md:px-12 lg:px-5 py-12 mx-auto max-w-screen-xl lg:py-16 grid lg:grid-cols-2 gap-4 lg:gap-16">
                <div class="flex flex-col justify-center">
                    <h1 class="mb-4 text-3xl lg:text-4xl font-normal tracking-normal text-white text-center lg:text-start">
                        Search Live Data for US Trade
                    </h1>
                    <p class="mb-4 lg:text-md font-normal text-gray-100 text-center lg:text-start">
                        Stay Ahead With Real-Time US Trade Updates from TradeImeX
                    </p>
                </div>
                <div class="flex justify-center items-center">
                    <form class="max-w-screen-xl mx-auto" method="GET" action="{{ url('/search-live')}}" enctype="multipart/form-data">
                        <div class="grid grid-cols-2 lg:flex">
                            <select name="role" id="large-input" class="block w-full p-6 text-base text-gray-900 border border-gray-300 rounded-none lg:rounded-l-lg rounded-tl-lg focus:ring-blue-500 focus:border-blue-500">
                                <option selected>Choose...</option>
                                <option value="import">Import</option>
                                <option value="export">Export</option>
                            </select>
                            <input name="hs_code" type="text" id="large-input" class="block w-full p-6 text-base text-gray-900 border border-gray-300 lg:rounded-none rounded-tr-lg" placeholder="HS Code"/>
                            <input name="description" type="text" id="large-input" class="block w-full p-6 text-base text-gray-900 border border-gray-300 lg:rounded-none rounded-bl-lg" placeholder="Description"/>
                            <button type="submit" class="text-white bg-blue-600 hover:bg-white hover:text-blue-600 focus:border-glory-red font-medium rounded-none lg:rounded-r-lg rounded-br-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                                Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        {{-- Search Live Data for US Trade --}}
        <section class="bg-white dark:bg-gray-900">
            <div class="py-12 md:py-12 lg:py-20 px-5 md:px-12 lg:px-5 mx-auto max-w-screen-xl"> 
                <div>
                    <h1 class="mb-2 text-3xl lg:text-4xl lg:text-start md:text-start text-center font-medium text-gray-900 dark:text-white">
                        Search Live Data for US Trade
                    </h1>
                    <p class="mt-3 mb-3 text-md font-normal lg:text-start md:text-start text-center text-gray-500">
                        US Trade Data will enable you to discover many answers to your queries regarding 
                        the US import-export data. When accessing real-time information about US trade data, 
                        utilizing our advanced search features is a professional and efficient way to stay 
                        informed. With our advanced search filters, users can easily search and access live 
                        data for the US import-export trade without any hassle or difficulty. The platform 
                        offers a comprehensive database that enables professionals to track trade trends, 
                        monitor competitors, and identify potential business opportunities. You can search 
                        live data for the US buyers, suppliers, and US importer-exporter names very easily 
                        with TradeImeX. There are some amazing benefits of our search live data feature.
                    </p>
                </div>
                <div class="px-3 py-6 grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                    <div>
                        <div class="mb-4 flex justify-center md:justify-start lg:justify-start">
                            <img src="{{url('frontend/img/insight.png')}}" class="w-2/6 contrast-100 saturate-200">
                        </div>
                        <h1 class="mb-2 text-center md:text-start lg:text-start text-xl font-medium">
                            Simultaneous Insights
                        </h1>
                        <p class="mb-3 text-center md:text-start lg:text-start text-gray-500 text-md font-normal">
                            One of the main advantages of using the Search live 
                            data feature for US trade data is the ability to access 
                            simultaneous and real-time insights.
                        </p>
                    </div>
                    <div>
                        <div class="mb-4 flex justify-center md:justify-start lg:justify-start">
                            <img src="{{url('frontend/img/decision-making.png')}}" class="contrast-100 saturate-200 w-2/6">
                            {{-- <i class="fa-solid font-2xl fa-database"></i> --}}
                        </div>
                        <h1 class="mb-2 text-center md:text-start lg:text-start text-xl font-medium">
                            Improved Decision-Making
                        </h1>
                        <p class="mb-3 text-center md:text-start lg:text-start text-gray-500 text-md font-normal">
                            By leveraging our Search live data feature, 
                            businesses can make more informed decisions 
                            based on live data information.
                        </p>
                    </div>
                    <div>
                        <div class="mb-4 flex justify-center md:justify-start lg:justify-start">
                            <img src="{{url('frontend/img/pie-chart (1).png')}}" class="contrast-100 saturate-200 w-2/6">
                            {{-- <i class="fa-solid font-2xl fa-database"></i> --}}
                        </div>
                        <h1 class="mb-2 text-center md:text-start lg:text-start lg:text-lg text-xl font-medium">
                            Enhanced Market Intelligence
                        </h1>
                        <p class="mb-3 text-center md:text-start lg:text-start text-gray-500 text-md font-normal">
                            By monitoring trade flows, businesses can gain a 
                            deeper understanding of market dynamics and 
                            competitive landscapes.
                        </p>
                    </div>
                    <div>
                        <div class="mb-4 flex justify-center md:justify-start lg:justify-start">
                            <img src="{{url('frontend/img/transparency.png')}}" class="contrast-100 saturate-200 w-2/6">
                        </div>
                        <h1 class="mb-2 text-center md:text-start lg:text-start text-xl font-medium">
                            Increased Transparency
                        </h1>
                        <p class="mb-3 text-center md:text-start lg:text-start text-gray-500 text-md font-normal">
                            Transparency is essential in today's global market, and the 
                            Search live data feature provides businesses with increased 
                            visibility into US trade data.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Key Features of TradeImeX for US Trade Data --}}
        <section class="bg-white">
            <div class="py-8 px-5 md:px-12 lg:px-5 mx-auto max-w-screen-xl">
                <div class="px-2 grid lg:grid-cols-2 md:grid-col-2 gap-8">
                    <div>
                        <h1 class="mb-8 md:mb-10 text-3xl lg:text-4xl font-medium lg:text-start text-center">
                            Key Features of TradeImeX for US Trade Data
                        </h1>
                        <ol class="relative border-s border-gray-200 dark:border-gray-700">                  
                            <li class="mb-10 ms-4">
                                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-4 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                                <img src="{{url('frontend/img/13.png')}}" class="w-1/5 md:w-1/12 lg:w-1/12 hover:transform scaleX(-1)">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    Comprehensive Data Coverage
                                </h3>
                                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">
                                    Access detailed US trade data including import and export information. 
                                    With TradeImeX, users get full access to comprehensive US import-export data. 
                                </p>
                            </li>
                            <li class="mb-10 ms-4">
                                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-4 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                                <img src="{{url('frontend/img/14.png')}}" class="w-1/5 md:w-1/12 lg:w-1/12">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    Real-Time Updates
                                </h3>
                                <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                                    Stay informed of the latest US trade data as it happens. 
                                    TradeImeX provides real-time updates on the US trade 
                                    data for a better experience.
                                </p>
                            </li>
                            <li class="mb-10 ms-4">
                                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-4 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                                <img src="{{url('frontend/img/15.png')}}" class="w-1/5 md:w-1/12 lg:w-1/12">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    Customizable Reports
                                </h3>
                                <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                                    Customize reports to your unique requirements and preferences. Customization of reports 
                                    is our exclusive feature for users looking to enhance their business in the US. 
                                </p>
                            </li>
                            <li class="ms-4">
                                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-4 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                                <img src="{{url('frontend/img/16.png')}}" class="w-1/5 md:w-1/12 lg:w-1/12">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    Affordable Pricing
                                </h3>
                                <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                                    Avail yourself of the services for US trade data at affordable prices. 
                                    We provide data at an extremely reasonable and genuine price. 
                                </p>
                            </li>
                        </ol>
                    </div>
                    <div class="flex items-center justify-center">
                        <img src="{{url('frontend/img/livedata.gif')}}" class="w-4/5 md:w-3/5 lg:w-3/4">
                    </div>
                </div>
            </div>
        </section>

        {{-- Explore great possibilities in US trade  --}}
        <section class="bg-white">
            <div class="mx-auto max-w-screen-xl px-5 lg:px-5 md:px-12 lg:py-16 md:py-12 py-8">
                <div class="mb-6 grid gap-8 lg:gap-16">
                    <div class="flex flex-col justify-center">
                        <h1 class="mb-4 font-medium text-3xl lg:text-4xl text-gray-900 text-center lg:text-start">
                            Explore great possibilities in US trade with the US import-export data.
                        </h1>
                        <p class="mb-2 text-md font-normal text-gray-500 lg:text-lg text-center lg:text-start">
                            Discover how TradeImeX can help businesses acquire US trade data with 
                            exclusive US import-export data reports. Here is how our US trade data 
                            reports can help you stay ahead in your business and trade in the US.
                        </p>
                    </div>
                </div>
                <div class="grid gap-6 lg:grid-cols-4 md:grid-cols-2">
                    <div class="flex flex-col text-center lg:text-start max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">
                        <div class="flex justify-center lg:justify-start">
                            <img src="{{url('frontend/img/8.png')}}" class="w-1/4 mb-3">    
                        </div>
                        <div>
                            <h5 class="mb-2 text-2xl font-medium tracking-tight text-gray-900">
                                Up-to-date information
                            </h5>
                        </div>
                        <p class="mb-3 font-normal text-gray-500">
                            Access the latest data on US imports and exports to stay ahead of the competition.
                        </p>
                    </div>
                    <div class="flex flex-col text-center lg:text-start max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">
                        <div class="flex justify-center lg:justify-start">
                            <img src="{{url('frontend/img/9.png')}}" class="w-1/4 mb-3">
                        </div>
                        <div>
                            <h5 class="mb-2 text-2xl font-medium tracking-tight text-gray-900 dark:text-white">
                                Market analysis
                            </h5>
                        </div>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
                            Gain insights into US market trends and consumer behavior 
                            to make informed business decisions.
                        </p>
                    </div>
                    <div class="flex flex-col text-center lg:text-start max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">
                        <div class="flex justify-center lg:justify-start">
                            <img src="{{url('frontend/img/10.png')}}" class="w-1/4 mb-3">
                        </div>
                        <div>
                            <h5 class="mb-2 text-2xl font-medium tracking-tight text-gray-900 dark:text-white">
                                Monitor Competitors
                            </h5>
                        </div>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
                            Keep track of your competitors' activities in the US market 
                            and adjust your strategies accordingly.
                        </p>
                    </div>
                    <div class="flex flex-col text-center lg:text-start max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">
                        <div class="flex justify-center lg:justify-start">
                            <img src="{{url('frontend/img/11.png')}}" class="w-1/4 mb-3">
                        </div>
                        <div>
                            <h5 class="mb-2 text-2xl font-medium tracking-tight text-gray-900 dark:text-white">
                                Improve supply chain management
                            </h5>
                        </div>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
                            Optimize your supply chain by identifying key US 
                            suppliers and logistics partners.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        {{-- Explore great possibilities in US trade --}}

        {{-- Acquire unparalleled benefits with our US trade data reports --}}
        <section class="bg-white">
            <div class="mx-auto max-w-screen-xl px-5 md:px-12 lg:px-5 lg:py-16 md:py-12 py-8">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div class="flex items-center justify-center">
                        <img class="w-4/6 md:w-6/12 lg:w-3/4" src="{{url('frontend/img/why_choose.svg')}}">
                    </div>
                    <div class="py-4">
                        <h1 class="mb-4 mt-4 font-medium text-3xl lg:text-4xl text-glory-blue">
                            Acquire unparalleled benefits with our US trade data reports
                        </h1>
                        <p class="text-gray-500 text-md font-normal">
                            Our US trade data is collected from Reputable organizations, US customs, transportation 
                            companies, and customs ports. Numerous fields are included in this trade data, including 
                            HS codes, product descriptions, prices, quantities, US importer/exporter names, destination 
                            countries, port names, and currency values. This trade data is essential information that 
                            businesses and marketers need to make wise judgments.
                        </p>
                        <div class="pt-6">
                            <ul class="max-w-2xl space-y-1 font-normal text-gray-500 list-inside">
                                <li class="flex items-center">
                                    <svg class="w-3.5 h-3.5 me-2 text-glory-blue dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    Companies looking to increase revenue can gain immensely from the US.
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-3.5 h-3.5 me-2 text-glory-blue dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    US trade data is crucial for businesses looking to expand into other markets.
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-3.5 h-3.5 me-2 text-glory-blue dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    Build your marketing strategy on statistics.
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-3.5 h-3.5 me-2 text-glory-blue dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    Establish a strong brand identification in the import-export market in the US.
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-3.5 h-3.5 me-2 text-glory-blue dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    Establish long-term goals for your business and boost return on investment.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Acquire unparalleled benefits with our US trade data reports --}}

        {{-- Exclusive statistics of the US trade --}}
        <section class="bg-white">
            <div class="mx-auto max-w-screen-xl px-5 lg:px-5 md:px-12 lg:py-16 md:py-12 py-8">
                <div class="grid lg:grid-cols-2">
                    <div>
                        <div class="items-center">
                            <h1 class="font-medium text-3xl lg:text-4xl text-glory-red">
                                Exclusive statistics of the US trade
                            </h1>
                            <p class="text-md lg:text-lg font-normal my-4 text-gray-500 dark:text-white">
                                We at TradeImeX provide exclusive statistics which are included in the 
                                US trade data. These statistics cover exclusive information 
                                related to US trade.
                            </p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">
                            <div class="flex items-end mb-3 max-w-sm bg-white border-2 border-gray-200 border-l-glory-red rounded-lg shadow">
                                <div class="mt-4 px-4 py-2">
                                    <div class="mb-2">
                                        <img class="contrast-100 saturate-100 w-1/4" src="{{url('frontend/img/29.png')}}">
                                    </div>
                                    <h5 class="mb-2 text-lg md:text-xl font-medium text-gray-900">
                                        Biggest US import-export Commodities
                                    </h5>
                                    <p class="mb-3 text-md font-normal text-gray-500">
                                        Explore and access the latest trade data on the biggest US 
                                        imports and exports.
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-end mb-3 max-w-sm bg-white border-2 border-gray-200 border-l-glory-red rounded-lg shadow">
                                <div class="mt-4 px-4 py-2">
                                    <div class="mb-2">
                                        <img class="contrast-100 saturate-100 w-1/4" src="{{url('frontend/img/28.png')}}">
                                    </div>
                                    <h5 class="mb-2 text-lg md:text-xl font-medium text-gray-900">
                                        Top import and export partners of the US
                                    </h5>
                                    <p class="mb-3 text-md font-normal text-gray-500">
                                        Acquire the latest information on the biggest import and 
                                        export partners of the US.
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-end mb-3 max-w-sm bg-white border-2 border-gray-200 border-l-glory-red rounded-lg shadow">
                                <div class="mt-4 px-4 py-2">
                                    <div class="mb-2">
                                        <img class="contrast-100 saturate-100 w-1/4" src="{{url('frontend/img/27.png')}}">
                                    </div>
                                    <h5 class="mb-2 text-lg md:text-xl font-medium text-gray-900">
                                        US trade data analysis
                                    </h5>
                                    <p class="mb-3 text-md font-normal text-gray-500">
                                        Get exclusive information and market analysis on the US trade data.
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-end mb-3 max-w-sm bg-white border-2 border-gray-200 border-l-glory-red rounded-lg shadow">
                                <div class="mt-4 px-4 py-2">
                                    <div class="mb-2">
                                        <img class="contrast-100 saturate-100 w-1/4" src="{{url('frontend/img/30.png')}}">
                                    </div>
                                    <h5 class="mb-2 text-lg md:text-xl font-medium text-gray-900">
                                        Latest US trade trends
                                    </h5>
                                    <p class="mb-3 text-md font-normal text-gray-500">
                                        Discover the latest market trends in the US trade landscape to stay 
                                        ahead in your business in the US. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-center">
                        <img class="w-4/6 md:w-6/12 lg:w-3/4" src="{{url('frontend/img/statistics.gif')}}">
                    </div>
                </div>
            </div>
        </section>

        {{-- happy & satisfied clients --}}
        <section class="bg-white">
            <div class="mx-auto max-w-screen-xl px-5 md:px-12 lg:px-5 py-16">
                <div>
                    <h1 class="mb-4 text-gray-900 text-3xl lg:text-4xl font-medium">
                        Happy and Satisfied clients
                    </h1>
                    <p class="text-md font-normal text-gray-500">
                        At TradeImeX, we take pride in our commitment to delivering reliable and 
                        accurate US trade data services that leave our clients satisfied. With a 
                        professional tone of voice, we prioritize the needs of our clients and 
                        strive to exceed their expectations. Many US companies such as Exxon Mobil,
                        IDC, and many others trust us as their go-to source for comprehensive and 
                        up-to-date trade data, knowing that they can rely on our expertise and 
                        dedication to providing them with valuable insights for informed decision-making. 
                        Our team works tirelessly to ensure that our clients receive nothing but the highest 
                        quality service, helping them navigate the complexities of the global market with 
                        confidence and ease.
                    </p>
                </div>
                <div class="slider">
                    <div class="slide-track">
                        <div class="slide">
                            <img src="{{url('frontend/clients/Exxon Mobil.png')}}" class="w-4/5" alt="" />
                        </div>
                        <div class="slide">
                            <img src="{{url('frontend/clients/Hyundai.png')}}" class="w-4/5" alt="" />
                        </div>
                        <div class="slide">
                            <img src="{{url('frontend/clients/Tata.png')}}" class="w-4/5" alt="" />
                        </div>
                        <div class="slide">
                            <img src="{{url('frontend/clients/Counterpoint.png')}}" class="w-4/5" alt="" />
                        </div>
                        <div class="slide">
                            <img src="{{url('frontend/clients/DHL.png')}}" class="w-4/5" alt="" />
                        </div>
                        <div class="slide">
                            <img src="{{url('frontend/clients/Deloitte.png')}}" class="w-4/5" alt="" />
                        </div>
                        <div class="slide">
                            <img src="{{url('frontend/clients/Dow.png')}}" class="w-4/5" alt="" />
                        </div>
                        <div class="slide">
                            <img src="{{url('frontend/clients/EY.png')}}" class="w-4/5" alt="" />
                        </div>
                        <div class="slide">
                            <img src="{{url('frontend/clients/KPMG.png')}}" class="w-4/5" alt="" />
                        </div>
                        <div class="slide">
                            <img src="{{url('frontend/clients/Realme.png')}}" class="w-4/5" alt="" />
                        </div>
                        <div class="slide">
                            <img src="{{url('frontend/clients/Samsung.png')}}" class="w-4/5" alt="" />
                        </div>
                        <div class="slide">
                            <img src="{{url('frontend/clients/LG.png')}}" class="w-4/5" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Browse More Data --}}
        <section class="bg-white">
            <div class="py-12 px-4 mx-auto max-w-screen-xl lg:py-16 grid lg:grid-cols-2 gap-2 md:gap- lg:gap-16">
                <div class="flex flex-col justify-center">
                    <h1 class="mb-4 text-center text-4xl lg:text-4xl font-medium animate-text bg-gradient-to-r from-glory-red via-fuchsia-600 to-glory-blue bg-clip-text text-transparent">
                        Browse More Data TradeImeX
                    </h1>
                </div>
                <div>
                    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-2 md:gap-4 lg:gap-4">
                        <div class="flip-card pl-[1rem] md:pl-[2rem] lg:pl-0 !w-[90%] md:!w-[85%] lg:!w-[95%]">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img class="h-auto max-w-32 rounded-lg" src="{{url('frontend/flag/vietnam.png')}}" alt="Egypt">
                                </div>
                                <div class="flex items-center justify-center bg-gradient-to-r from-gray-100 via-gray-300 to-gray-100 rounded flip-card-back drop-shadow-xl">
                                    <a href="https://www.tradeimex.in/vietnam-import" target="_blank" class="text-xl font-medium hover:underline">
                                        Vietnam
                                        <span>
                                            <i class="fa-solid fa-arrow-up-right-from-square fa-sm"></i>    
                                        </span>   
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card pl-[1rem] md:pl-[2rem] lg:pl-0 !w-[90%] md:!w-[85%] lg:!w-[95%]">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img class="h-auto max-w-32 rounded-lg" src="{{url('frontend/img/bangladesh.jpg')}}" alt="Bangladesh">
                                </div>
                                <div class="flex items-center justify-center bg-gradient-to-r from-gray-100 via-gray-300 to-gray-100 rounded flip-card-back drop-shadow-xl">
                                    <a href="https://www.tradeimex.in/bangladesh-import" target="_blank" class="text-xl font-medium hover:underline">
                                        Bangladesh
                                        <span>
                                            <i class="fa-solid fa-arrow-up-right-from-square fa-sm"></i>    
                                        </span> 
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card pl-[1rem] md:pl-[2rem] lg:pl-0 !w-[90%] md:!w-[85%] lg:!w-[95%]">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img class="h-auto max-w-32 rounded-lg" src="{{url('frontend/flag/turkey_1.jpg')}}" alt="Turkey">
                                </div>
                                <div class="flex items-center justify-center bg-gradient-to-r from-gray-100 via-gray-300 to-gray-100 rounded flip-card-back drop-shadow-xl">
                                    <a href="https://www.tradeimex.in/turkey-import" target="_blank" class="text-xl font-medium hover:underline">
                                        Turkey
                                        <span>
                                            <i class="fa-solid fa-arrow-up-right-from-square fa-sm"></i>    
                                        </span> 
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card pl-[1rem] md:pl-[2rem] lg:pl-0 !w-[90%] md:!w-[85%] lg:!w-[95%]">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img class="h-auto max-w-32 rounded-lg" src="{{url('frontend/flag/philipines.jpg')}}" alt="">
                                </div>
                                <div class="flex items-center justify-center bg-gradient-to-r from-gray-100 via-gray-300 to-gray-100 rounded flip-card-back drop-shadow-xl">
                                    <a href="https://www.tradeimex.in/philippines-import" target="_blank" class="text-xl font-medium hover:underline">
                                        Philippines
                                        <span>
                                            <i class="fa-solid fa-arrow-up-right-from-square fa-sm"></i>    
                                        </span> 
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card pl-[1rem] md:pl-[2rem] lg:pl-0 !w-[90%] md:!w-[85%] lg:!w-[95%]">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img class="h-auto max-w-32 rounded-lg" src="{{url('frontend/flag/indonesia.jpg')}}" alt="">
                                </div>
                                <div class="flex items-center justify-center bg-gradient-to-r from-gray-100 via-gray-300 to-gray-100 rounded flip-card-back drop-shadow-xl">
                                    <a href="https://www.tradeimex.in/indonesia-import" target="_blank" class="text-xl font-medium hover:underline">
                                        Indonesia
                                        <span>
                                            <i class="fa-solid fa-arrow-up-right-from-square fa-sm"></i>    
                                        </span> 
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card pl-[1rem] md:pl-[2rem] lg:pl-0 !w-[90%] md:!w-[85%] lg:!w-[95%]">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img class="h-auto max-w-32 rounded-lg" src="{{url('frontend/flag/russia_lg.jpg')}}" alt="">
                                </div>
                                <div class="flex items-center justify-center bg-gradient-to-r from-gray-100 via-gray-300 to-gray-100 rounded flip-card-back drop-shadow-xl">
                                    <a href="https://www.tradeimex.in/russia-import" target="_blank" class="text-xl font-medium hover:underline">
                                        Russia
                                        <span>
                                            <i class="fa-solid fa-arrow-up-right-from-square fa-sm"></i>    
                                        </span> 
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card pl-[1rem] md:pl-[2rem] lg:pl-0 !w-[90%] md:!w-[85%] lg:!w-[95%]">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img class="h-auto max-w-32 rounded-lg" src="{{url('frontend/flag/ukraine.jpg')}}" alt="">
                                </div>
                                <div class="flex items-center justify-center bg-gradient-to-r from-gray-100 via-gray-300 to-gray-100 rounded flip-card-back drop-shadow-xl">
                                    <a href="https://www.tradeimex.in/ukraine-import" target="_blank" class="text-xl font-medium hover:underline">
                                        Ukraine
                                        <span>
                                            <i class="fa-solid fa-arrow-up-right-from-square fa-sm"></i>    
                                        </span> 
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card pl-[1rem] md:pl-[2rem] lg:pl-0 !w-[90%] md:!w-[85%] lg:!w-[95%]">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img class="h-auto max-w-32 rounded-lg" src="{{url('frontend/flag/ethiopia.png')}}" alt="">
                                </div>
                                <div class="flex items-center justify-center bg-gradient-to-r from-gray-100 via-gray-300 to-gray-100 rounded flip-card-back drop-shadow-xl">
                                    <a href="https://www.tradeimex.in/ethiopia-import" target="_blank" class="text-xl font-medium hover:underline">
                                        Ethiopia
                                        <span>
                                            <i class="fa-solid fa-arrow-up-right-from-square fa-sm"></i>    
                                        </span> 
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card pl-[1rem] md:pl-[2rem] lg:pl-0 !w-[90%] md:!w-[85%] lg:!w-[95%]">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img class="h-auto max-w-32 rounded-lg" src="{{url('frontend/flag/ghana.png')}}" alt="">      
                                </div>
                                <div class="flex items-center justify-center bg-gradient-to-r from-gray-100 via-gray-300 to-gray-100 rounded flip-card-back drop-shadow-xl">
                                    <a href="https://www.tradeimex.in/ghana-import" target="_blank" class="text-xl font-medium hover:underline">
                                        Ghana
                                        <span>
                                            <i class="fa-solid fa-arrow-up-right-from-square fa-sm"></i>    
                                        </span> 
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card pl-[1rem] md:pl-[2rem] lg:pl-0 !w-[90%] md:!w-[85%] lg:!w-[95%]">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img class="h-auto max-w-32 rounded-lg" src="{{url('frontend/flag/uganda.png')}}" alt="">
                                </div>
                                <div class="flex items-center justify-center bg-gradient-to-r from-gray-100 via-gray-300 to-gray-100 rounded flip-card-back drop-shadow-xl">
                                    <a href="https://www.tradeimex.in/uganda-import" target="_blank" class="text-xl font-medium hover:underline">
                                        Uganda
                                        <span>
                                            <i class="fa-solid fa-arrow-up-right-from-square fa-sm"></i>    
                                        </span> 
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card pl-[1rem] md:pl-[2rem] lg:pl-0 !w-[90%] md:!w-[85%] lg:!w-[95%]">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img class="h-auto max-w-32 rounded-lg" src="{{url('frontend/flag/mexico.webp')}}" alt="">
                                </div>
                                <div class="flex items-center justify-center bg-gradient-to-r from-gray-100 via-gray-300 to-gray-100 rounded flip-card-back drop-shadow-xl">
                                    <a href="https://www.tradeimex.in/mexico-import" target="_blank" class="text-xl font-medium hover:underline">
                                        Mexico
                                        <span>
                                            <i class="fa-solid fa-arrow-up-right-from-square fa-sm"></i>    
                                        </span> 
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card pl-[1rem] md:pl-[2rem] lg:pl-0 !w-[90%] md:!w-[85%] lg:!w-[95%]">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img class="h-auto max-w-32 rounded-lg hover:drop-shadow-2xl" src="{{url('frontend/flag/panama.png')}}" alt="">
                                </div>
                                <div class="flex items-center justify-center bg-gradient-to-r from-gray-100 via-gray-300 to-gray-100 rounded flip-card-back drop-shadow-xl">
                                    <a href="https://www.tradeimex.in/panama-import" target="_blank" class="text-xl font-medium hover:underline">
                                        Panama
                                        <span>
                                            <i class="fa-solid fa-arrow-up-right-from-square fa-sm"></i>    
                                        </span> 
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('frontend.footer')

        @include('frontend.script')
    </body>
</html>