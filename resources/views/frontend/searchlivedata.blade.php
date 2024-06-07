<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('frontend.link')
    <title>Search Live Data || Tradeimex</title>
</head>
<body>
    @include('frontend.header')

    <div class="mx-auto max-w-screen-xl">
        <nav class="flex px-5 pt-24 lg:pt-24 md:pt-28 pb-4 text-gray-700 bg-white" aria-label="Breadcrumb">
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
                            Search Live data
                        </span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>
    
    {{-- search bar --}}
    <section class="bg-solid-blue">
        <div class="mx-auto mx-w-screen-xl px-5 md:px-12 lg:px-5 py-32">
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
                <form class="max-w-6xl mx-auto" method="GET" action="{{ url('/search-live') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-2 lg:flex">
                        <select name="role" id="large-input" class="block w-full p-6 text-base text-gray-900 border border-gray-300 rounded-none lg:rounded-l-lg rounded-tl-lg focus:ring-blue-500 focus:border-blue-500">
                            <option selected>Choose...</option>
                            <option value="import">Import</option>
                            <option value="export">Export</option>
                        </select>
                        <input name="hs_code" type="text" id="large-input" class="block w-full p-6 text-base text-gray-900 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 lg:rounded-none rounded-tr-lg" placeholder="HS Code" />
                        <input name="description" type="text" id="large-input" class="block w-full p-6 text-base text-gray-900 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 lg:rounded-none rounded-bl-lg" placeholder="Description" />
                        <button type="submit" class="text-white bg-blue-600 hover:bg-white hover:text-blue-600 font-medium rounded-none rounded-none lg:rounded-r-lg rounded-br-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                            Search
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    {{-- End of search bar --}}  
    
    {{-- Benefits --}}
    <section class="bg-white">
        <div class="mx-auto mx-w-screen-xl px-5 md:px-12 lg:px-5 py-12">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="mb-4 px-5 flex justify-center items-center">
                    <img class="w-3/4 md:w-3/5" src="{{url('frontend/img/benefit.gif')}}">
                </div>
                <div class="px-2 lg:px-5">
                    <h1 class="mb-6 text-3xl lg:text-4xl font-medium text-center md:text-start lg:text-start">
                        Benefits of Using TradeImeX for Live US Trade Data
                    </h1>
                    <ul class="space-y-4 text-left text-gray-500">
                        <li class="flex items-start">
                            <svg class="w-3.5 h-3.5 mt-1 me-2 text-glory-blue flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                            </svg>
                            <p>
                                <b class="text-gray-900">Competitive Advantage:</b> Stay ahead of competitors by 
                                getting access to actual-time US trade data and making strategic choices 
                                based on accurate data.
                            </p>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-3.5 h-3.5 mt-1 me-2 text-glory-blue flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                            </svg>
                            <p>
                                <b class="text-gray-800">Market Intelligence:</b> Gain valuable insights into US market traits, client
                                possibilities, and enterprise dynamics to manual your commercial enterprise
                                approach.
                            </p>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-3.5 h-3.5 mt-1 me-2 text-glory-blue flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                            </svg>
                            <p>
                                <b class="text-gray-800">Risk Mitigation:</b> Identify the dangers which include supply chain disruptions,
                                regulatory adjustments, or marketplace fluctuations to mitigate their impact
                                proactively.
                            </p>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-3.5 h-3.5 mt-1 me-2 text-glory-blue flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                            </svg>
                            <p>
                                <b class="text-gray-800">Opportunity Identification:</b> Discover new US markets, partners, or
                                merchandise by analyzing live US trade data and statistics and uncovering
                                hidden possibilities.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- Benefits --}}

    {{-- Easily Find HS Codes with our Live Search Toolbar. --}}
    <section class="bg-white">
        <div class="mx-auto max-w-screen-xl py-12 px-8 md:px-12 lg:px-12">
            <blockquote class="p-6 my-4 border-s-4 border-glory-blue bg-gray-50">
                <h1 class="mb-4 text-3xl lg:text-3xl font-medium">
                    Easily Find HS Codes with our Live 
                    Search Toolbar.
                </h1>
                <p class="text-md italic font-medium leading-relaxed text-gray-900 dark:text-white">
                    Sometimes you (the client) are not aware of your product’s HS codes either, so with our
                    live search toolbar, you can check the relevant HS code of your product along with other
                    shipping details. Our Live Search Toolbar offers a seamless solution for easily finding
                    HS Codes with just a few clicks. Gain a competitive edge by utilizing our Live Search
                    Toolbar to effortlessly navigate through the complexities of HS Codes, ensuring
                    accuracy and precision in your business endeavors.
                </p>
            </blockquote>
        </div>
    </section>

    {{-- Search and Navigate Live US Trade Data with TradeImeX Databases --}}
    <section class="bg-white">
        <div class="mx-auto mx-w-screen-xl px-5 md:px-12 lg:px-5 py-12">
            <div class="mb-8 flex justify-center items-center">
                <div class="max-w-6xl p-2 lg:p-6 mx-5 lg:mx-0 rounded-lg bg-solid-blue">
                    <div class="p-6 grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <div>
                            <h1 class="mb-3 text-white text-3xl  font-medium">
                                Search and Navigate Live US Trade Data with TradeImeX Databases
                            </h1>
                            <p class="mb-3 text-gray-200 text-sm font-medium">
                                In the modern fast-paced global economy, getting the right of entry to actual-time US
                                Trade data is essential for corporations looking to stay ahead of the opposition. With the
                                TradeImeX platform, customers can navigate and search live US trade data easily,
                                supporting them to make knowledgeable selections and pick out new growth
                                possibilities. TradeImeX is a leading platform for agencies searching to harness the
                                power of live US trade data. By leveraging the platform&#39;s advanced search capabilities
                                and comprehensive database, customers can get the right of entry to treasured insights,
                                track marketplace trends, and make informed selections that force commercial
                                enterprise success in the US. Start exploring TradeImeX and unencumber an array of
                                opportunities in the US trade market.
                            </p>
                        </div>
                        <div class="flex justify-center">
                            <img class="w-full md:w-[70%] lg:w-4/5 object-contain" src="{{url('frontend/img/Manage money-pana.svg')}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <div class="max-w-6xl p-6 lg:p-6 mx-5 lg:mx-0 rounded-lg border-2 border-glory-blue">
                    <div class="grid grid-cols-1 lg:grid-cols-2">
                        <div class="flex justify-center">
                            <img class="mb-6 w-full md:w-[70%] lg:w-full object-contain" src="{{url('frontend/img/live_trade.png')}}">
                        </div>
                        <div class="px-2">
                            <h1 class="mb-3 text-glory-blue text-3xl lg:text-4xl font-medium">
                                Why is Live US Trade Data Important?
                            </h1>
                            <p class="mb-3 text-glory-blue text-sm font-medium">
                                Tracking live US trade data and information is essential for corporations in the US and
                                global trade. By tracking the US import and export traits in real time, organizations can
                                stay knowledgeable of the US market conditions, identify capability risks, and capture
                                new opportunities. Whether you&#39;re a manufacturer looking to source raw materials or a
                                retailer searching to expand your product offerings, gaining access to up-to-date US
                                trade data is fundamental to achievement. By having access to the TradeImeX stay US
                                trade data you can search for your competitors and suppliers to show the US shipping
                                activities and buying and selling companions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>
    {{-- Search and Navigate Live US Trade Data with TradeImeX Databases --}}

    {{-- TradeImeX: Your One-Stop Solution for Live US Trade Data --}}
    <section class="bg-white">
        <div class="mx-auto max-w-screen-xl py-8 px-5 md:px-12 lg:px-5">
            <hr class="h-px my-4 bg-gray-300 border-0 dark:bg-gray-700">
            <div class="grid lg:grid-cols-2">
                <div class="flex items-center">
                    <h1 class="px-5 text-center font-normal text-3xl lg:text-4xl">
                        TradeImeX: Your One-Stop Solution for Live US Trade Data
                    </h1>
                </div>
                <div class="flex items-center">
                    <p class="my-4 px-5 text-center font-medium text-md lg:text-md text-gray-500">
                        TradeImeX offers a comprehensive database of US trade records, permitting customers
                        to look for unique goods, agencies, or industries in the US. With advanced search
                        capabilities and customizable filters, searching for the US trade data you want has
                        never been simpler. Whether you&#39;re a seasoned importer/exporter or simply getting
                        started within the global trade, TradeImeX has the tools you need to prevail.
                    </p>
                </div>
            </div>
            <hr class="h-px my-4 bg-gray-300 border-0 dark:bg-gray-700">
        </div>
    </section>
    {{-- Illustrating the present situation of the US trade --}}

    @include('frontend.footer')
    @include('frontend.script')
    
</body>
</html>