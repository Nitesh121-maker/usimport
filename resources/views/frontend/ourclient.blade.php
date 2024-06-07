<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('frontend.link')
    <title>Our Clients - Tradiemex</title>
</head>
<body>
    @include('frontend.header')

    {{-- Breadcrumb --}}
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
                        Our Clients
                    </span>
                </div>
            </li>
        </ol>
        </nav>
    </div>
    {{-- Breadcrumb --}}

    {{-- Empowering our clients with the US trade data --}}
    <section class="bg-pattern-img">
        <div class="mx-auto max-w-screen-xl px-5 md:px-12 lg:px-5 py-16">
            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-2">
                <div>
                    <h1 class="mb-3 text-3xl lg:text-4xl font-medium text-white">
                        Empowering our clients with the US trade data
                    </h1>
                    <p class="mb-3 text-md font-medium text-gray-200">
                        For more than five years, TradeImeX has been a renowned US trade intelligence platform and 
                        has been revolutionizing the way companies engage in US trade. TradeImeX has made a name for 
                        itself as a reliable and important resource for organizations of all kinds, serving over 
                        10,000 clients and several brands in the US and worldwide. These clients come from various 
                        industries, including manufacturing, retail, logistics, and more. What unites them is their 
                        need for accurate and timely trade data to stay ahead of the competition. Many well-known 
                        brands rely on TradeImeX to help them make wise decisions and maintain their competitive 
                        edge in the US market. Among our esteemed clientele are Aditya Birla, Nikon, Samsung, LG, 
                        Hyundai, Tata, and many more. Our clients in the US include Exxon Mobile, IDC, DOW chemical 
                        company, and many more.
                    </p>
                </div>
            </div>
            <div></div>
        </div>
    </section>

    {{-- Unparalleled expertise in providing US Trade Data --}}
    <section class="bg-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')]">
        <div class="py-16 px-5 md:px-12 lg:px-5 mx-auto max-w-screen-xl text-center lg:py-20 z-10 relative">
            <button data-modal-target="authentication-modal"  data-modal-toggle="authentication-modal" class="inline-flex justify-between items-center py-1 px-1 pe-4 mb-7 text-sm text-glory-blue bg-blue-200 rounded-full hover:bg-blue-300">
                <span class="text-xs bg-glory-blue rounded-full text-white px-4 py-1.5 me-3">
                    <i class="fa-regular fa-bell"></i>
                </span> 
                <span class="text-lg font-medium">
                    Get Our Latest Updates
                </span> 
                <svg class="w-2.5 h-2.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
            </button>
            <h1 class="mb-4 text-4xl lg:text-5xl font-medium text-gray-900">
                Unparalleled expertise in providing US Trade Data
            </h1>
            <p class="mb-8 text-lg font-medium text-gray-500 lg:text-lg">
                TradeImeX has more than five years of experience in the field and has developed extensive 
                knowledge and proficiency in providing US trade data. Our company's vast experience allows 
                users to understand the unique difficulties that companies face when it comes to importing and 
                exporting commodities in and out of the US. Our in-depth knowledge of the US trade market provides 
                customized solutions that improve our clients' US trade operations. 
            </p>
        </div>
    </section>

    {{-- Explore Our Vast client network in the US! --}}
    <section class="bg-white">
        <div class="mx-auto max-w-screen-xl px-5 md:px-12 lg:px-5 py-16">
            <div>
                <h1 class="mb-4 text-3xl lg:text-4xl font-medium">
                    Explore Our Vast client network in the US!
                </h1>
                <p class="mb-4 text-md font-medium text-gray-500">
                    TradeImeX is extremely proud of its varied and expanding clientele in 
                    the US and abroad. With more than 10,000 clients spanning numerous industries, 
                    TradeImeX has effectively positioned itself as a reliable business partner for 
                    companies both in the US and globally. This vast network is evidence of our 
                    ability to provide outstanding services and encouraging outcomes for our 
                    faithful clients in the US and around the world. Among our most dependable and 
                    appreciative clients are:
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

    {{-- What are the benefits for our clients and businesses in the US? --}}
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
            <div class="mb-8 px-2">
                <h1 class="text-3xl lg:text-4xl font-medium text-center">
                    What are the benefits for our clients and businesses in the US?
                </h1>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                {{-- Businesses --}}
                <div class="bg-gray-50 border border-gray-200 rounded-lg p-6">
                    <a class="bg-red-100 text-glory-red text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md mb-2">
                        <i class="fa-solid fa-briefcase mr-1"></i>
                        Businesses
                    </a>
                    <h1 class="text-gray-900 text-2xl font-medium mb-2">
                        Small Businesses Seeking Growth Opportunities
                    </h1>
                    <p class="text-md font-medium text-gray-500 mb-4">
                        For small businesses, accessing US trade data can be a game-changer. By understanding the 
                        US market trends and consumer preferences, these companies can identify new growth opportunities
                        and make informed decisions about expanding their operations. TradeImeX provides these businesses 
                        with the tools they need to compete on a global scale.
                    </p>
                </div>

                {{-- Supply Chains --}}
                <div class="bg-gray-50 border border-gray-200 dark:border-gray-700 rounded-lg p-6">
                    <a class="bg-blue-100 text-glory-blue text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md mb-2">
                        <i class="fa-solid fa-link mr-1"></i>
                        Supply Chains
                    </a>
                    <h2 class="text-gray-900 text-2xl font-medium mb-2">
                        Large Corporations Streamlining Supply Chains
                    </h2>
                    <p class="text-md font-medium text-gray-500 mb-4">
                        On the other end of the spectrum, large corporations rely on TradeImeX to optimize 
                        their supply chains and reduce costs. By acquiring the US import-export data, these 
                        companies can identify inefficiencies in their operations and find ways to streamline 
                        their global logistics. 
                    </p>
                </div>

                {{-- Consumer Trends --}}
                <div class="bg-gray-50 border border-gray-200 dark:border-gray-700 rounded-lg p-6">
                    <a href="#" class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-purple-400 mb-2">
                        <i class="fa-solid fa-arrow-trend-up mr-1"></i>
                        Consumer Trends
                    </a>
                    <h2 class="text-gray-900 text-2xl font-medium mb-2">
                        Retailers Staying Ahead of Consumer Trends
                    </h2>
                    <p class="text-md font-medium text-gray-500 mb-4">
                        In the fast-paced world of retail, staying ahead of consumer trends is key to success. 
                        TradeImeX helps retailers track market demand, monitor competitor activity, and identify 
                        emerging opportunities in the US. 
                    </p>
                </div>

                {{-- Logistics Companies --}}
                <div class="bg-gray-50 border border-gray-200 dark:border-gray-700 rounded-lg p-6">
                    <a href="#" class="bg-purple-100 text-purple-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-purple-400 mb-2">
                        <i class="fa-solid fa-truck-fast mr-1"></i>
                        Logistics Companies
                    </a>
                    <h2 class="text-gray-900 text-2xl font-medium mb-2">
                        Logistics Companies Optimizing Global Operations
                    </h2>
                    <p class="text-md font-medium text-gray-500 mb-4">
                        For logistics companies, efficiency is everything. TradeImeX helps these companies 
                        optimize their US trade operations by providing insights into shipping routes, 
                        transportation costs, and trade regulations. 
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Proud and satisfied client --}}
    <section class="bg-white">
        <div class="mx-auto max-w-screen-xl px-5 md:px-12 lg:px-5 py-16">
            <div>
                <h1 class="text-3xl lg:text-4xl font-medium mb-4 text-center animate-text bg-gradient-to-r from-glory-red via-fuchsia-600 to-glory-blue bg-clip-text text-transparent">
                    Proud and Satisfied Clients
                    <div class="inline-flex items-center justify-center w-full">
                        <hr class="w-64 h-1 bg-gray-200 border-0 rounded">
                        <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2">
                            <svg class="w-4 h-4 text-gray-700 dark:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                                <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z"/>
                            </svg>
                        </div>
                    </div>
                </h1>
                <p class="text-md font-medium text-gray-500 mb-4 text-center">    
                    TradeImeX works hard for its clients by combining technological expertise with economic sense to 
                    ensure that our US trade database is accurate and updated in every manner. Our main goal is always 
                    to satisfy our customers and clients with our US import-export data, and we put a lot of effort into 
                    doing so. TradeImeX Info Solution Pvt Ltd.'s client-focused approach and quick response time are 
                    two of its main USPs. We consistently fulfill our commitments in providing US trade data. We commit 
                    to providing our clients with a few assurances: we will always offer reasonably priced services, be 
                    committed to quality with 100% accurate data, and provide prompt customer support. TradeImeX has become 
                    a global leader in US trade intelligence, with an exceptional track record of serving over 10,000 clients. 
                    TradeImeX is the industry leader in assisting businesses in taking full advantage of international trade prospects 
                    thanks to its vast network, unmatched experience, and exceptional services.
                </p>
            </div>
        </div>
    </section>

    @include('frontend.footer')
    @include('frontend.script')
</body>
</html>