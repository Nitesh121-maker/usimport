<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>About Us || Tradeimex</title>
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
                                About
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        {{-- Breadcrumb --}}

        {{-- about us --}}
        <section class="animate-text bg-gradient-to-r from-glory-red via-fuchsia-600 to-glory-blue">
            <div class="mx-auto max-w-screen-xl lg:px-5 md:px-12 px-5 py-12 md:py-8 lg:py-5 grid lg:grid-cols-2">
                <div class="flex flex-col justify-center">
                    <span class="text-white mb-2 font-medium text-lg lg:text-xl text-center md:text-start lg:text-start">
                        About Us
                    </span>
                    <h1 class="text-white mb-4 lg:text-4xl text-3xl leading-10 lg:!leading-[3rem] font-normal text-gray-900 text-center md:text-start lg:text-start">
                        TradeImeX ® Info Solution Pvt. Ltd. - Your Gateway to US Trade Data
                    </h1>
                    <p class="mb-2 text-md font-normal text-gray-100 text-center md:text-start lg:text-start">
                        In the fast-paced world of international trade, 
                        staying ahead of the competition is important for 
                        businesses to thrive and grow. TradeImeX is a leading 
                        US trade data-providing company, imparting comprehensive 
                        US import-export data to clients globally. 
                        Due to the ever-changing marketplace dynamics and 
                        global trade regulations, gaining access to correct and 
                        updated US trade data is important for making informed 
                        business choices. This is where TradeImeX, your trusted 
                        US trade data provider, is available. By collating 
                        and analyzing facts from various assets, TradeImeX gives 
                        valuable insights into the US market tendencies, purchaser 
                        conduct, and competitor history. With our US trade data,
                        discover specific insights and forecasts of the leading goods 
                        imported and exported from the USA and the pinnacle US importers, 
                        exporters, and companies. Look no further than TradeImeX in case 
                        you're an aspiring or seasoned dealer or trader trying to enter 
                        the enormous United States marketplace.
                    </p>
                </div>
                <div class="flex items-center justify-center">
                    <img src="{{url('frontend/img/about_us.svg')}}" class="lg:w-full md:w-3/5 w-full">
                </div>
            </div>
        </section>

        {{-- Who We Are and What We Do --}}
        <section class="bg-white">
            <div class="mx-auto max-w-screen-xl lg:px-5 md:px-12 px-5 py-12">
                <h1 class="mb-3 lg:text-4xl text-3xl font-medium text-center md:text-start lg:text-start">
                    Who We Are and What We Do
                </h1>
                <p class="mb-3 font-normal text-md lg:text-md text-gray-500 text-center md:text-start lg:text-start">
                    TradeImeX is a renowned and dependable provider of US import-export data, 
                    providing complete and actual-time insights into the USA market. With 5+ years 
                    of experience within the industry, we’ve established ourselves as a trusted 
                    source of trade data for groups of all sizes, from small agencies to multinational 
                    agencies. At TradeImeX, we apprehend the importance of data-pushed choice-making 
                    in the ultra-modern competitive commercial enterprise landscape. Our platform offers 
                    an extensive variety of offerings to help businesses navigate the complexities of 
                    the US trade, which include:
                </p>
                <div class="pt-5 grid grid-cols-1 md:grid-cols-8 lg:grid-cols-3 gap-2">
                    <div class="flex items-end mb-3 max-w-sm bg-white border-2 border-gray-200 border-l-glory-red rounded-lg shadow col-span-1 md:col-span-4 lg:col-span-1">
                        <div class="mt-4 px-4 py-2">
                            <div class="mb-2 flex justify-center lg:justify-start">
                                <img src="{{url('frontend/img/accurate.png')}}" width="25%">
                            </div>
                            <h5 class="mb-2 lg:text-lg md:text-md font-medium text-gray-900 text-center lg:text-start">
                                Accurate US Trade Data Analysis
                            </h5>
                            <p class="mb-3 text-sm font-normal text-gray-500 text-center lg:text-start">
                                Our team of experts compiles and analyzes vast amounts of US import-export 
                                data from various reliable sources to provide our clients with accurate and 
                                actionable insights. Whether you need information on market trends, competitor 
                                analysis, or regulatory changes, TradeImeX has got you covered.With TradeImeX, you will get 
                                hassle-free and easy access to accurate US trade data.
                            </p>
                        </div>
                    </div>
                    <div class="flex items-end mb-3 max-w-sm bg-white border-2 border-gray-200 border-l-glory-red rounded-lg shadow col-span-1 md:col-span-4 lg:col-span-1">
                        <div class="mt-4 px-4 py-2">
                            <div class="mb-2 flex justify-center lg:justify-start">
                                <img src="{{url('frontend/img/personalized.png')}}" width="20%">
                            </div>
                            <h5 class="mb-2 lg:text-lg md:text-md font-medium text-gray-900 text-center lg:text-start">
                                Personalized Data
                            </h5>
                            <p class="mb-3 text-sm font-normal text-gray-500 text-center lg:text-start">
                                We are aware that each business has different demands and specifications 
                                in the US. That's why we offer personalized data tailored to your US market, 
                                industry, and business goals. Our reports are easy to understand, visually engaging, 
                                and packed with valuable insights to help you make informed decisions.Our personalized 
                                US trade data helps you thrive in your business with confidence.
                            </p>
                        </div>
                    </div>
                    <div class="col-span-1 hidden md:block lg:hidden"></div>
                    <div class="col-span-1 hidden md:block lg:hidden"></div>
                    <div class="flex items-end mb-3 max-w-sm bg-white border-2 border-gray-200 border-l-glory-red rounded-lg shadow col-span-1 md:col-span-4 lg:col-span-1">
                        <div class="mt-4 px-4 py-2">
                            <div class="mb-2 flex justify-center lg:justify-start">
                                <img src="{{url('frontend/img/immediate.png')}}" width="20%">
                            </div>
                            <h5 class="mb-2 lg:text-lg md:text-md font-medium text-gray-900 text-center lg:text-start">
                                Immediate results
                            </h5>
                            <p class="mb-3 text-sm font-normal text-gray-500 text-center lg:text-start">
                                Time is of the essence in the hectic world of global trade. With TradeImeX, 
                                you can access quick updates on US trade data, market trends, and regulatory 
                                changes to stay ahead of the curve. Our platform is constantly updated with 
                                the latest information, ensuring that you always have the most current US 
                                import-export information at your fingertips.
                            </p>
                        </div>
                    </div>
                    <div class="col-span-1 hidden md:block lg:hidden"></div>
                    <div class="col-span-1 hidden md:block lg:hidden"></div>
                </div>
                <hr class="w-48 h-1 mx-auto my-2 bg-gray-300 border-0 rounded mt-8 dark:bg-gray-700">
            </div>
        </section>

        {{-- What makes TradeImeX the best option for US trade data? --}}
        <section class="bg-white">
            <div class="mx-auto max-w-screen-xl lg:px-5 md:px-12 px-5 py-6 lg:py-8">
                <div class="flex flex-wrap">
                    <div class="flex flex-col text-center md:text-start lg:text-start">
                        <h1 class="mb-3 text-3xl lg:text-4xl font-medium">
                            What makes TradeImeX the best option for US trade data?
                        </h1>
                        <p class="font-normal text-md lg:text-md text-gray-500">
                            When it comes to choosing a US trade data provider, there are several reasons 
                            why TradeImeX stands out from the competition. TradeImeX is unique in many 
                            ways as your go-to platform for acquiring US trade data with many assets included 
                            for a user-friendly experience:
                        </p>
                    </div>
                </div>
                <div class="py-8">
                    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                            <li class="me-2" role="presentation">
                                <button 
                                    class="text-lg inline-block p-4 border-b-2 rounded-t-lg" 
                                    id="research-tab" 
                                    data-tabs-target="#research" 
                                    type="button" 
                                    role="tab" 
                                    aria-controls="research" 
                                    aria-selected="false"
                                >
                                    Reliability And Accuracy 
                                </button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button 
                                    class="text-lg inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300" 
                                    id="business-tab" 
                                    data-tabs-target="#business" 
                                    type="button" 
                                    role="tab" 
                                    aria-controls="business" 
                                    aria-selected="false"
                                >
                                    Detailed Information
                                </button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button 
                                    class="text-lg inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300" 
                                    id="risk-tab" 
                                    data-tabs-target="#risk" 
                                    type="button" 
                                    role="tab" 
                                    aria-controls="risk" 
                                    aria-selected="false"
                                >
                                    User-Friendly Platform
                                </button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button 
                                    class="text-lg inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300" 
                                    id="insight-tab" 
                                    data-tabs-target="#insight" 
                                    type="button" 
                                    role="tab" 
                                    aria-controls="insight" 
                                    aria-selected="false"
                                >
                                    Market Analysis and Insights
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div id="default-tab-content">
                        <div class="hidden p-6 rounded-lg bg-gradient-to-r from-glory-red via-fuchsia-600 to-glory-blue" id="research" role="tabpanel" aria-labelledby="research-tab">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
                                <div class="flex justify-center items-center">
                                    <p class="mb-4 text-md font-normal text-gray-200 text-center lg:text-start">
                                        At TradeImeX, we pride ourselves on the accuracy and reliability 
                                        of our US trade data. Our team works tirelessly to ensure that our 
                                        clients receive the most up-to-date and reliable information available, 
                                        allowing them to make informed decisions with confidence.
                                    </p>
                                </div>
                                <div class="flex justify-center items-center">
                                    <img src="{{url('frontend/img/reliable.png')}}" class="w-2/4 md:w-2/5 lg:w-1/4">
                                </div>
                            </div>
                        </div>
                        <div class="hidden p-6 rounded-lg bg-gradient-to-r from-glory-red via-fuchsia-600 to-glory-blue" id="business" role="tabpanel" aria-labelledby="business-tab">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
                                <div class="flex justify-center items-center">
                                    <p class="mb-4 text-md font-normal text-gray-200 text-center lg:text-start">
                                        We offer detailed information on the US market, including detailed 
                                        information on imports, exports, tariffs, trade partners, and more. 
                                        With TradeImeX, you can access a wealth of data to gain a deep 
                                        understanding of the market landscape and identify new growth 
                                        opportunities.
                                    </p>
                                </div>
                                <div class="flex justify-center items-center">
                                    <img src="{{url('frontend/img/info.png')}}" class="w-2/4 md:w-2/5 lg:w-1/4">
                                </div>
                            </div>
                        </div>
                        <div class="hidden p-6 rounded-lg bg-gradient-to-r from-glory-red via-fuchsia-600 to-glory-blue" id="risk" role="tabpanel" aria-labelledby="risk-tab">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
                                <div class="flex justify-center items-center">
                                    <p class="mb-4 text-md font-normal text-gray-200 text-center lg:text-start">
                                        Our platform is designed with the user in mind, making it easy to 
                                        navigate and access the information you need quickly and efficiently. 
                                        The TradeImeX user-friendly interface makes it easy to find the US 
                                        trade data you need to make informed decisions.
                                    </p>
                                </div>
                                <div class="flex justify-center items-center">
                                    <img src="{{url('frontend/img/user-friendly.png')}}" class="w-2/4 md:w-2/5 lg:w-1/4">
                                </div>
                            </div>
                        </div>
                        <div class="hidden p-6 rounded-lg bg-gradient-to-r from-glory-red via-fuchsia-600 to-glory-blue" id="insight" role="tabpanel" aria-labelledby="insight-tab">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
                                <div class="flex justify-center items-center">
                                    <p class="mb-4 text-md font-normal text-gray-200 text-center lg:text-start">
                                        At TradeImeX, we provide market insights and analysis as per your 
                                        requirements for US trade data, helping businesses understand the US market 
                                        trends, identify opportunities, and make strategic decisions.
                                    </p>
                                </div>
                                <div class="flex justify-center items-center">
                                    <img src="{{url('frontend/img/market-research.png')}}" class="w-2/4 md:w-2/5 lg:w-1/4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Illustrating the present situation of the US trade --}}
        <section class="bg-white">
            <div class="mx-auto max-w-screen-xl px-5 md:px-12 lg:px-5 py-8 lg:py-8">
                <hr class="h-px my-4 bg-gray-300 border-0">
                <div class="grid lg:grid-cols-2 gap-4">
                    <div class="flex items-center justify-center">
                        <h1 class="text-center font-medium text-3xl lg:text-4xl">
                            Illustrating the present situation of the US trade
                        </h1>
                    </div>
                    <div class="flex items-center">
                        <p class="text-center font-normal text-md lg:text-md text-gray-500">
                            If you're equipped to take your enterprise to the next degree with 
                            accurate and dependable US trade data, then look no further than TradeImeX. 
                            With our comprehensive services, customized reviews, and actual-time updates, 
                            we are here to aid your enterprise every step of the way. Contact us to know how 
                            TradeImeX can help you attain your US trade desires. Our know-how permits you to 
                            get entry to the most accurate and current US trade data, US trade market 
                            developments, and import-export data. Remember, when it comes to trade data, 
                            accuracy, and reliability matter – choose TradeImeX for all your US trade 
                            data needs!
                        </p>
                    </div>
                </div>
                <hr class="h-px my-4 bg-gray-300 border-0">
            </div>
        </section>
        {{-- Illustrating the present situation of the US trade --}}

        {{-- The vision of TradeImeX for US trade data --}}
        <section class="bg-white">
            <div class="mx-auto max-w-screen-xl lg:px-5 md:px-12 px-5 py-12">
                <h1 class="mb-4 text-center font-medium text-3xl lg:text-4xl">
                    The vision of TradeImeX for US trade data
                </h1>
                <p class="mb-6 text-md lg:text-md font-normal text-center text-gray-500">
                    TradeImeX is at the forefront of providing US import-export data 
                    to businesses around the world. This information empowers agencies to 
                    make strategic choices, optimize supply chains, and identify new growth 
                    possibilities. At TradeImeX, our vision is simple: to be the most precise and 
                    best US trade data provider company. We are dedicated to excellence in the whole 
                    lot we do, from the accuracy of our information to the satisfaction of our 
                    customer support.
                </p>
                <div class="grid lg:grid-cols-2 gap-4">
                    <div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-2 px-5">
                            <div class="flex items-end mb-3 max-w-sm bg-white border-2 border-gray-200 border-l-glory-blue rounded-lg shadow">
                                <div class="mt-4 px-4 py-2">
                                    <div class="mb-2 flex justify-center lg:justify-start">
                                        <img class="contrast-100 saturate-100 w-1/4" src="{{url('frontend/img/building.png')}}">
                                    </div>
                                    <h5 class="mb-2 lg:text-lg md:text-md font-medium text-gray-900 text-center lg:text-start">
                                        Building Long-Term Relationships
                                    </h5>
                                    <p class="mb-3 text-sm font-medium text-gray-500 text-center lg:text-start">
                                        At TradeImeX, we are not just a US data provider. We are committed to
                                        building long-term relationships with our clients, offering personalized support 
                                        and guidance to them.
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-end mb-3 max-w-sm bg-white border-2 border-gray-200 border-l-glory-blue rounded-lg shadow">
                                <div class="mt-4 px-4 py-2">
                                    <div class="mb-2 flex justify-center lg:justify-start">
                                        <img class="contrast-100 saturate-100 w-1/4" src="{{url('frontend/img/driving.png')}}">
                                    </div>
                                    <h5 class="mb-2 lg:text-lg md:text-md font-medium text-gray-900 text-center lg:text-start">
                                        Driving Innovation and Growth
                                    </h5>
                                    <p class="mb-3 text-sm font-medium text-gray-500 text-center lg:text-start">
                                        We believe that access to high-quality trade data is essential for 
                                        driving innovation and growth. By arming businesses with the 
                                        information.
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-end mb-3 max-w-sm bg-white border-2 border-gray-200 border-l-glory-blue rounded-lg shadow">
                                <div class="mt-4 px-4 py-2">
                                    <div class="mb-2 flex justify-center lg:justify-start">
                                        <img class="contrast-100 saturate-100 w-1/4" src="{{url('frontend/img/empowering.png')}}">
                                    </div>
                                    <h5 class="mb-2 lg:text-lg md:text-md font-medium text-gray-900 text-center lg:text-start">
                                        Empowering Businesses in the US
                                    </h5>
                                    <p class="mb-3 text-sm font-medium text-gray-500 text-center lg:text-start">
                                        Our vision at TradeImeX is to empower US businesses by 
                                        providing them with the tools and insights they need to 
                                        thrive in the global marketplace.
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-end mb-3 max-w-sm bg-white border-2 border-gray-200 border-l-glory-blue rounded-lg shadow">
                                <div class="mt-4 px-4 py-2">
                                    <div class="mb-2 flex justify-center lg:justify-start">
                                        <img class="contrast-100 saturate-100 w-1/4" src="{{url('frontend/img/trust.png')}}">
                                    </div>
                                    <h5 class="mb-2 lg:text-lg md:text-md font-medium text-gray-900 text-center lg:text-start">
                                        Trust in US data presentation
                                    </h5>
                                    <p class="mb-3 text-sm font-medium text-gray-500 text-center lg:text-start">
                                        Our vision of transparency is evident in how we present our data. We strive 
                                        to make our US trade reports easy to understand, so users can quickly find the 
                                        information they need.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-center">
                        <img class="w-4/5 md:w-3/5 lg:w-4/5" src="{{url('frontend/img/sample_data.png')}}">
                    </div>
                </div>
            </div>
        </section>

        {{-- The commitment of TradeImeX to US trade data --}}
        <section class="bg-white">
            <div class="mx-auto max-w-screen-xl py-4 lg:py-8 md:px-12 px-6 grid grid-cols-1 gap-4">
                <div>
                    <h1 class="my-4 font-medium text-3xl lg:text-4xl text-center lg:text-start">
                        The commitment of TradeImeX to US trade data
                    </h1>
                    <p class="mb-2 font-medium lg:text-md text-gray-500 text-center lg:text-start">
                        At TradeImeX, we are devoted to excellence in everything we do. This commitment 
                        is meditated within the excellence of our US trade data, the reliability of our 
                        platform, and the extent of the data details we offer to our clients. TradeImeX is 
                        the leading US trade data provider - we're a trusted partner in supporting our clients navigate 
                        the complexities of US trade. Our determination to accuracy, reliability, and excellence sets us 
                        apart from the opposition and permits our customers to make knowledgeable selections with confidence.
                    </p>
                </div>
                <div class="grid gap-4 grid-cols-1 lg:grid-cols-4 md:grid-cols-2 px-2">
                    <div class="py-4">
                        <div class="mb-4">
                            <img src="{{url('frontend/img/1.png')}}" class="contrast-100 saturate-200 w-4/5">
                            {{-- <i class="fa-solid font-2xl fa-database"></i> --}}
                        </div>
                        <h1 class="mb-2 text-2xl font-medium">Accuracy</h1>
                        <p class="mb-3 text-gray-500 text-md font-medium">
                            Our US trade data is sourced directly from customs authorities, 
                            ensuring that you receive the most reliable information available.
                        </p>
                    </div>
                    <div class="py-4">
                        <div class="mb-4">
                            <img src="{{url('frontend/img/2.png')}}" class="contrast-100 saturate-200 w-4/5">
                            {{-- <i class="fa-solid font-2xl fa-database"></i> --}}
                        </div>
                        <h1 class="mb-2 text-2xl font-medium">Timeliness</h1>
                        <p class="mb-3 text-gray-500 text-md font-medium">
                            We update our database in real-time, so you can access the latest 
                            trade data whenever you need it.
                        </p>
                    </div>
                    <div class="py-4">
                        <div class="mb-4">
                            <img src="{{url('frontend/img/3.png')}}" class="contrast-100 saturate-200 w-4/5">
                            {{-- <i class="fa-solid font-2xl fa-database"></i> --}}
                        </div>
                        <h1 class="mb-2 text-2xl font-medium">Customization</h1>
                        <p class="mb-3 text-gray-500 text-md font-medium">
                            We offer customized data solutions to meet your specific 
                            business needs, giving you the flexibility to focus 
                            on what matters most
                        </p>
                    </div>
                    <div class="py-4">
                        <div class="mb-4">
                            <img src="{{url('frontend/img/4.png')}}" class="contrast-100 saturate-200 w-4/5">
                            {{-- <i class="fa-solid font-2xl fa-database"></i> --}}
                        </div>
                        <h1 class="mb-2 text-2xl font-medium">Expertise</h1>
                        <p class="mb-3 text-gray-500 text-md font-medium">
                            Our team of data analysts and industry experts are here to help you 
                            understand the numbers and provide valuable insights into the USA market 
                            trends and opportunities.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        @include('frontend.footer')
        @include('frontend.script')

    </body>
</html>