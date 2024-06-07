<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>FAQs || Tradeimex</title>
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
                                FAQs
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>

        <section class="animate-text bg-gradient-to-r from-glory-red via-fuchsia-600 to-glory-blue">
            <div class="mx-auto max-w-screen-xl px-5 md:px-12 lg:px-5 py-20">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
                    <div class="flex items-center justify-center">
                        <div>
                            <h1 class="mb-3 text-white font-medium text-3xl lg:text-4xl text-center md:text-start lg:text-start">
                                WE HAVE ANSWERS TO THE MOST OF YOUR QUESTIONS!
                            </h1>
                            <p class="mt-3 text-white font-normal text-md lg:text-lg text-center md:text-start lg:text-start">
                                Below mentioned are some of the most common and repeated 
                                questions with their answers which are asked from us about 
                                US Trade Data. Get answers to your queries below. If still 
                                you have any doubts or need clarification, feel free to 
                                contact us through email or call. Our support team will 
                                surely guide you with your problem and provide you with 
                                the best solution.
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center justify-center">
                        <img src="{{url('frontend/img/faq.png')}}" class="w-full lg:w-2/3 md:w-4/5">
                    </div>
                </div>
            </div>
        </section>

        {{-- Faqs list --}}
        <section class="bg-gray-50">
            <div class="flex-wrap mb-3 py-8 px-5">
                <h1 class="text-center font-semibold text-4xl text-glory-red">
                    Frequently Asked Questions
                </h1>
                <div class="inline-flex items-center justify-center w-full">
                    <hr class="w-64 h-1 bg-gray-200 border-0 rounded dark:bg-gray-700">
                    <div class="absolute px-4 -translate-x-1/2 bg-gray-50 left-1/2 dark:bg-gray-900">
                        <svg class="w-4 h-4 text-gray-700 dark:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                            <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z"/>
                        </svg>
                    </div>
                </div>
            </div>

           
            <div class="px-5 py-4">
                <h1 class="my-0 lg:my-4 text-center animate-text bg-gradient-to-r from-glory-red via-fuchsia-600 to-glory-blue bg-clip-text text-transparent text-2xl lg:text-3xl md:text-3xl font-medium">
                    About TradeImeX - US Trade data provider
                </h1>
            </div> 
            <div class="px-5 md:px-12 lg:px-12 mb-8 py-4 mx-auto">
                <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-gray-50 text-gray-900" data-inactive-classes="text-gray-500">
                    <h2 id="accordion-flush-heading-1">
                        <button type="button" class="flex items-center text-center justify-between w-full py-5 font-medium text-gray-500 border-b border-gray-200 gap-3" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                            <span class="font-medium lg:text-xl md:text-lg sm:text-sm">
                                What is TradeImeX?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                        <div class="py-5 border-b border-gray-200">
                            <p class="mb-2 text-md font-medium text-gray-600">
                                TradeImeX is a leading provider of US trade data, offering comprehensive and accurate
                                information on US imports and exports.
                            </p>
                        </div>
                    </div>

                    <h2 id="accordion-flush-heading-2">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                            <span class="font-medium lg:text-xl md:text-lg sm:text-sm">
                                What data does TradeImeX provide?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                        <div class="py-5 border-b border-gray-200">
                            <p class="mb-2 text-md font-medium text-gray-600">
                                TradeImeX provides detailed data on US imports and exports, including:
                            </p>
                            <ul class="space-y-1 font-medium text-gray-600 list-disc list-inside">
                                <li>
                                    Product descriptions.
                                </li>
                                <li>
                                    HS Codes.
                                </li>
                                <li>
                                    Country of origin and destination.
                                </li>
                                <li>
                                    Quantity and value of goods traded.
                                </li>
                                <li>
                                    Importer and exporter information.
                                </li>
                                <li>
                                    Port of entry and exit.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <h2 id="accordion-flush-heading-3">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3">
                            <span class="font-medium lg:text-xl md:text-lg sm:text-sm">
                                How is the TradeImeX US trade data collected?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-md font-medium text-gray-600">
                                TradeImeX collects data from the US Census Bureau, customs agencies, shipping
                                manifests, and US government bodies ensuring its accuracy and timeliness.
                            </p>
                        </div>
                    </div>

                    <h2 id="accordion-flush-heading-4">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-4" aria-expanded="false" aria-controls="accordion-flush-body-4">
                            <span class="font-medium lg:text-xl md:text-lg sm:text-sm">
                                What are the benefits of using the TradeImeX data?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-md font-medium text-gray-600">
                                The TradeImeX data provides valuable insights for businesses, researchers, and
                                government agencies in the US, including:
                            </p>
                            <ul class="max-w-xl space-y-1 font-medium text-gray-600 list-disc list-inside dark:text-gray-400">
                                <li>
                                    Identifying new market opportunities and emerging trends.
                                </li>
                                <li>
                                    Analyzing trade flows and supply chains.
                                </li>
                                <li>
                                    Conducting due diligence and risk assessments.
                                </li>
                                <li>
                                    Formulating trade policies and strategies.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <h2 id="accordion-flush-heading-5">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-5" aria-expanded="false" aria-controls="accordion-flush-body-5">
                            <span class="font-medium lg:text-xl md:text-lg sm:text-sm">
                                What industries can benefit from the TradeImeX data?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-5" class="hidden" aria-labelledby="accordion-flush-heading-5">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-md font-medium text-gray-600">
                                TradeImeX data is relevant to various industries, such as:
                            </p>
                            <ul class="max-w-md space-y-1 font-medium text-gray-500 list-disc list-inside dark:text-gray-400">
                                <li>
                                    Manufacturing.
                                </li>
                                <li>
                                    Retail and wholesale trade.
                                </li>
                                <li>
                                    Logistics and transportation.
                                </li>
                                <li>
                                    Finance and banking.
                                </li>
                                <li>
                                    Government and policy analysis.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <h2 id="accordion-flush-heading-6">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-6" aria-expanded="true" aria-controls="accordion-flush-body-6">
                            <span class="font-semibold lg:text-xl md:text-lg sm:text-sm">
                                How can I access the TradeImeX data?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-6" class="hidden" aria-labelledby="accordion-flush-heading-6">
                        <div class="py-5 border-b border-gray-200">
                            <p class="mb-2 text-md font-medium text-gray-600">
                                TradeImeX offers a range of data subscription plans, from basic datasets to customized
                                solutions. Contact us at info@tradeimex.in for more information on pricing and
                                availability.
                            </p>
                        </div>
                    </div>

                    <h2 id="accordion-flush-heading-7">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-7" aria-expanded="false" aria-controls="accordion-flush-body-7">
                            <span class="font-medium lg:text-xl md:text-lg sm:text-sm">
                                Is the TradeImeX data secure?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-7" class="hidden" aria-labelledby="accordion-flush-heading-7">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-md font-medium text-gray-600">
                                Yes, TradeImeX sticks to strict data and 
                                statistics protection protocols to secure 
                                the confidentiality and integrity of its data.
                            </p>
                        </div>
                    </div>

                    <h2 id="accordion-flush-heading-8">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-8" aria-expanded="false" aria-controls="accordion-flush-body-8">
                            <span class="font-medium lg:text-xl md:text-lg sm:text-sm">
                                What is the cost of using the TradeImeX data?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-8" class="hidden" aria-labelledby="accordion-flush-heading-8">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-md font-medium text-gray-600">
                                The cost of data varies depending on the subscription plan and data requirements.
                                Contact us at <a class="font-semibold hover:underline" href="mailto:info@tradeimex.in">info@tradeimex.in</a> for a customized quote.
                            </p>
                        </div>
                    </div>

                    <h2 id="accordion-flush-heading-9">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-9" aria-expanded="false" aria-controls="accordion-flush-body-9">
                            <span class="font-medium lg:text-xl md:text-lg sm:text-sm">
                                Does TradeImeX provide technical support and training?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-9" class="hidden" aria-labelledby="accordion-flush-heading-9">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-md font-medium text-gray-600">
                                Yes, TradeImeX offers technical support, and training to help users navigate and
                                utilize data effectively.
                            </p>
                        </div>
                    </div>

                    <h2 id="accordion-flush-heading-10">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-10" aria-expanded="false" aria-controls="accordion-flush-body-10">
                            <span class="font-medium lg:text-xl md:text-lg sm:text-sm">
                                Who are the US-based clients of TradeImeX?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-10" class="hidden" aria-labelledby="accordion-flush-heading-10">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-md font-medium text-gray-600">
                                TradeImeX serves various clients in the US, which include authority 
                                agencies, monetary establishments, multinational businesses, research 
                                organizations, and investors.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="px-5">
                <h1 class="my-0 lg:my-4 text-center animate-text bg-gradient-to-r from-glory-red via-fuchsia-600 to-glory-blue bg-clip-text text-transparent text-2xl lg:text-3xl md:text-3xl font-medium">
                    US Trade Data/US Import-Export Data
                </h1>
            </div>
            <div class="px-5 md:px-12 lg:px-12 mb-8 py-4 mx-auto">
                <div id="accordion-flush-1" data-accordion="collapse" data-active-classes="bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                    <h2 id="accordion-flush-heading-11">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-11" aria-expanded="true" aria-controls="accordion-flush-body-11">
                            <span class="font-semibold lg:text-xl md:text-lg sm:text-sm">
                                What is US trade data?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-11" class="hidden" aria-labelledby="accordion-flush-heading-11">
                        <div class="py-5 border-b border-gray-200">
                            <p class="mb-2 text-md font-medium text-gray-600">
                                The trade data that records the flow of goods and services between 
                                the United States and other countries is known as the US trade data. 
                            </p>
                        </div>
                    </div>

                    <h2 id="accordion-flush-heading-12">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-12" aria-expanded="false" aria-controls="accordion-flush-body-12">
                            <span class="font-medium lg:text-xl md:text-lg sm:text-sm">
                                Where can I find US trade data?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-12" class="hidden" aria-labelledby="accordion-flush-heading-12">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-md font-medium text-gray-600">
                                The US trade data can be found on the TradeImeX website, various US government 
                                sites, and the U.S. Census Bureau's USA Trade Online website.
                            </p>
                        </div>
                    </div>

                    <h2 id="accordion-flush-heading-13">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-13" aria-expanded="false" aria-controls="accordion-flush-body-13">
                            <span class="font-medium lg:text-xl md:text-lg sm:text-sm">
                                What information is included in US trade data?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-13" class="hidden" aria-labelledby="accordion-flush-heading-13">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-md font-medium text-gray-600">
                                The US trade data has many specifications included such as product descriptions, 
                                HS code, country of origin/destination, value, weight, and more.
                            </p>
                        </div>
                    </div>

                    <h2 id="accordion-flush-heading-14">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-14" aria-expanded="false" aria-controls="accordion-flush-body-14">
                            <span class="font-medium lg:text-xl md:text-lg sm:text-sm">
                                How is US trade data collected?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-14" class="hidden" aria-labelledby="accordion-flush-heading-14">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-md font-medium text-gray-600">
                                The US trade data is collected through:
                            </p>
                            <ul class="max-w-xl space-y-1 font-medium text-gray-600 list-disc list-inside dark:text-gray-400">
                                <li>
                                    Customs documents submitted by importers and exporters.
                                </li>
                                <li>
                                    Data from other government agencies
                                </li>
                                <li>
                                    Trade surveys conducted with businesses.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <h2 id="accordion-flush-heading-15">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-15" aria-expanded="false" aria-controls="accordion-flush-body-15">
                            <span class="font-medium lg:text-xl md:text-lg sm:text-sm">
                                What is the importance of US trade data?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-15" class="hidden" aria-labelledby="accordion-flush-heading-15">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-md font-medium text-gray-600">
                                US trade data is essential for understanding:
                            </p>
                            <ul class="max-w-md space-y-1 font-medium text-gray-500 list-disc list-inside dark:text-gray-400">
                                <li>
                                    The US economy's dependence on international trade.
                                </li>
                                <li>
                                    The competitive advantages of US industries.
                                </li>
                                <li>
                                    Trade policies impact on the US economy.
                                </li>
                                <li>
                                    Trends in global trade patterns.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <h2 id="accordion-flush-heading-16">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-16" aria-expanded="true" aria-controls="accordion-flush-body-16">
                            <span class="font-semibold lg:text-xl md:text-lg sm:text-sm">
                                How is US trade data used?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-16" class="hidden" aria-labelledby="accordion-flush-heading-16">
                        <div class="py-5 border-b border-gray-200">
                            <p class="mb-2 text-md font-medium text-gray-600">
                                US trade data is used as:
                            </p>
                            <ul class="space-y-1 font-medium text-gray-500 list-disc list-inside dark:text-gray-400">
                                <li>
                                    Businesses make decisions on imports and exports with confidence.
                                </li>
                                <li>
                                    Governments develop trade policies and negotiate trade agreements
                                </li>
                                <li>
                                    Researchers to study economic trends and patterns.
                                </li>
                                <li>
                                    The general public to understand the impact of trade on their lives.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <h2 id="accordion-flush-heading-17">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-17" aria-expanded="false" aria-controls="accordion-flush-body-17">
                            <span class="font-medium lg:text-xl md:text-lg sm:text-sm">
                                What is the role of the US import-export data in the global economy?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-17" class="hidden" aria-labelledby="accordion-flush-heading-17">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-md font-medium text-gray-600">
                                The US import-export data plays a vast function in the global economic 
                                system because it reflects the trade relationships between the United 
                                States and different countries. It presents insights into the trade of 
                                products and services, the stability of trade, and the overall financial 
                                market of the USA. 
                            </p>
                        </div>
                    </div>

                    <h2 id="accordion-flush-heading-18">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-18" aria-expanded="false" aria-controls="accordion-flush-body-18">
                            <span class="font-medium lg:text-xl md:text-lg sm:text-sm">
                                How often is the US import-export data updated?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-18" class="hidden" aria-labelledby="accordion-flush-heading-18">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-md font-medium text-gray-600">
                                The US import-export data is generally updated and launched monthly. The statistics 
                                are put in diverse formats, in conjunction with the month-to-month US International 
                                Trade in Goods and Services document. 
                            </p>
                        </div>
                    </div>

                    <h2 id="accordion-flush-heading-19">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-19" aria-expanded="false" aria-controls="accordion-flush-body-19">
                            <span class="font-medium lg:text-xl md:text-lg sm:text-sm">
                                What are a few factors that could affect the US import-export data?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-19" class="hidden" aria-labelledby="accordion-flush-heading-19">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-md font-medium text-gray-600">
                                Factors that can affect the US import-export data embody changes in global financial 
                                conditions, fluctuations in trade fees, trade policies and agreements, and shifts in 
                                customer alternatives
                            </p>
                        </div>
                    </div>

                    <h2 id="accordion-flush-heading-20">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-20" aria-expanded="false" aria-controls="accordion-flush-body-20">
                            <span class="font-medium lg:text-xl md:text-lg sm:text-sm">
                                The US trade data comes under which data category? 
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-20" class="hidden" aria-labelledby="accordion-flush-heading-20">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-md font-medium text-gray-600">
                                The US trade data comes under the B/L data category which is the bill of lading data.
                            </p>
                        </div>
                    </div>
                </div>
            </div>  
            

            <div class="px-5">
                <h1 class="my-0 lg:my-4 text-center animate-text bg-gradient-to-r from-glory-red via-fuchsia-600 to-glory-blue bg-clip-text text-transparent text-2xl lg:text-3xl md:text-3xl font-medium">
                    Business in the US
                </h1>
            </div>
            <div class="px-5 md:px-12 lg:px-12 mb-8 py-4 mx-auto">
                <div id="accordion-flush-2" data-accordion="collapse" data-active-classes="bg-gray-50 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                    <h2 id="accordion-flush-heading-21">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-21" aria-expanded="true" aria-controls="accordion-flush-body-21">
                            <span class="font-semibold lg:text-xl md:text-lg sm:text-sm">
                                How can I use the TradeImeX data to grow my business in the US?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-21" class="hidden" aria-labelledby="accordion-flush-heading-21">
                        <div class="py-5 border-b border-gray-200">
                            <p class="mb-2 text-md font-medium text-gray-600">
                                To leverage the TradeImeX data effectively for your business growth in the US, 
                                you can start by analyzing US market trends, identifying competitors' strategies, 
                                and targeting potential clients.
                            </p>
                        </div>
                    </div>
    
                    <h2 id="accordion-flush-heading-22">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-22" aria-expanded="false" aria-controls="accordion-flush-body-22">
                            <span class="font-medium lg:text-xl md:text-lg sm:text-sm">
                                Can the TradeImeX US trade data help my business reduce risks?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-22" class="hidden" aria-labelledby="accordion-flush-heading-22">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-md font-medium text-gray-600">
                                Yes! Utilizing TradeImeX US trade data can significantly aid your business in 
                                reducing risks with accurate information on US imports and exports. 
                            </p>
                        </div>
                    </div>
    
                    <h2 id="accordion-flush-heading-23">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-23" aria-expanded="false" aria-controls="accordion-flush-body-23">
                            <span class="font-medium lg:text-xl md:text-lg sm:text-sm">
                                How can the TradeImeX US trade data help with sales and marketing campaigns?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-23" class="hidden" aria-labelledby="accordion-flush-heading-23">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-md font-medium text-gray-600">
                                Utilizing TradeImeX US trade data can significantly enhance sales 
                                and marketing campaigns by providing valuable analysis of US market 
                                trends, competitor activities, and consumer behavior.
                            </p>
                        </div>
                    </div>
    
                    <h2 id="accordion-flush-heading-24">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-24" aria-expanded="false" aria-controls="accordion-flush-body-24">
                            <span class="font-medium lg:text-xl md:text-lg sm:text-sm">
                                Can TradeImeX assist my US-based business in streamlining its supply chain?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-24" class="hidden" aria-labelledby="accordion-flush-heading-24">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-md font-medium text-gray-600">
                                Yes, TradeImeX can assist your US-based business in streamlining its supply chain by optimizing your supply chain operations to enhance efficiency and reduce costs.
                            </p>
                        </div>
                    </div>
    
                    <h2 id="accordion-flush-heading-25">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-25" aria-expanded="false" aria-controls="accordion-flush-body-25">
                            <span class="font-medium lg:text-xl md:text-lg sm:text-sm">
                                Is the TradeImeX US trade data easy to utilize for businesses of all kinds in the US?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-25" class="hidden" aria-labelledby="accordion-flush-heading-25">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-md font-medium text-gray-600">
                                TradeImeX provides US trade data for businesses of all kinds in the US 
                                with comprehensive and user-friendly features to access essential 
                                trade information. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="px-5">
                <h1 class="mb-4 text-center animate-text bg-gradient-to-r from-glory-red via-fuchsia-600 to-glory-blue bg-clip-text text-transparent text-2xl lg:text-3xl md:text-3xl font-medium">
                    Pricing
                </h1>
            </div>

            <div class="px-5 md:px-12 lg:px-12 py-8 mx-auto">
                <div id="accordion-flush-3" data-accordion="collapse" data-active-classes="bg-gray-50 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                    <h2 id="accordion-flush-heading-26">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-26" aria-expanded="true" aria-controls="accordion-flush-body-26">
                            <span class="font-semibold lg:text-xl md:text-lg sm:text-sm">
                                How much does a US data subscription cost?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-26" class="hidden" aria-labelledby="accordion-flush-heading-26">
                        <div class="py-5 border-b border-gray-200">
                            <p class="mb-2 lg:text-start md:text-start text-center text-md font-medium text-gray-600">
                                Our rates can differ depending on your requirements, starting from $100. This will 
                                depend on your needs and the kind of data you want for your business in the US.
                            </p>
                        </div>
                    </div>

                    <h2 id="accordion-flush-heading-27">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-27" aria-expanded="false" aria-controls="accordion-flush-body-27">
                            <span class="font-medium lg:text-xl md:text-lg sm:text-sm">
                                Is the TradeImeX US trade data package affordable? 
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-27" class="hidden" aria-labelledby="accordion-flush-heading-27">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 lg:text-start md:text-start text-center text-md font-medium text-gray-600">
                                Yes, at TradeImeX we provide US trade data at extremely 
                                affordable and comprehensive prices.
                            </p>
                        </div>
                    </div>

                    <h2 id="accordion-flush-heading-28">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-28" aria-expanded="false" aria-controls="accordion-flush-body-28">
                            <span class="font-medium lg:text-xl md:text-lg sm:text-sm">
                                Which types of US trade data will I receive after subscribing to TradeImeX?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-28" class="hidden" aria-labelledby="accordion-flush-heading-28">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 lg:text-start md:text-start text-center text-md font-medium text-gray-600">
                                We offer data on US import-export, Top US importers and exporters, 
                                top imported and exported goods of the US, the biggest US import-export companies, 
                                ports, and the latest trends in the US trade market along with market research analytics.
                            </p>
                        </div>
                    </div>

                    <h2 id="accordion-flush-heading-29">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-29" aria-expanded="false" aria-controls="accordion-flush-body-29">
                            <span class="font-medium lg:text-xl md:text-lg sm:text-sm">
                                Is it possible to get a free trial and sample US trade data at TradeImeX?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-29" class="hidden" aria-labelledby="accordion-flush-heading-29">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 lg:text-start md:text-start text-center text-md font-medium text-gray-600">
                                Indeed, TradeImeX offers sample US trade data and a free trial. We can 
                                also arrange a demo for your convenience and assurance.
                            </p>
                        </div>
                    </div>

                    <h2 id="accordion-flush-heading-30">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-30" aria-expanded="false" aria-controls="accordion-flush-body-30">
                            <span class="font-medium lg:text-xl md:text-lg sm:text-sm">
                                Which payment options are accepted to acquire US trade data at TradeImeX?
                            </span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-30" class="hidden" aria-labelledby="accordion-flush-heading-30">
                        <div class="py-5 border-b border-gray-200">
                            <p class="mb-2 lg:text-start md:text-start text-center text-md font-medium text-gray-600">
                                There are numerous ways to make payments to acquire US trade data at TradeImeX, 
                                including cash, check deposits, bank transfers, PayPal, debit cards, 
                                credit cards, DD, and UPI.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('frontend.footer')
        @include('frontend.script')

    </body>
</html>