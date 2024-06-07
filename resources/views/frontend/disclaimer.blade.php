<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('frontend.link')
    <title>Disclaimer || Tradeimex</title>
</head>
<body>
    @include('frontend.header')

    {{-- Breadcrumb --}}
    <nav class="flex px-5 md:px-12 lg:px-16 pt-24 lg:pt-24 md:pt-28 pb-4 text-gray-700 border border-gray-200 bg-gray-50" aria-label="Breadcrumb">
        <div class="max-w-screen-xl">
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
                        Disclaimer
                    </span>
                </div>
                </li>
            </ol>
        </div>
    </nav>

    <section class="py-8 bg-white">
        <div class="px-4 lg:px-16">
            <h1 class="text-center my-6 font-medium text-5xl animate-text bg-gradient-to-r from-glory-red via-fuchsia-600 to-glory-blue bg-clip-text text-transparent">
                Disclaimer
            </h1>
            <p class="mb-3 text-center lg:text-start text-md font-medium text-gray-500">
                The identity of this website, i.e., the logo is licensed by TradeImeX and used here as 
                it is a subsidiary of the company. No one other than the subsidiary and the affiliates of 
                TradeImeX can use the logo or the trademark. Using the logo by other websites or individuals is 
                strictly not allowed. All rights reserved.
            </p>
            <p class="mb-3 text-center lg:text-start text-md font-medium text-gray-500">
                Although the information and statistics are updated on this website from time to time, but 
                no such guarantee is provided by us that the information available on this website at a 
                particular time is up-to-date or complete.
            </p>
            <p class="mb-3 text-center lg:text-start text-md font-medium text-gray-500">
                From this site, you can be linked to other websites on the web which are not under 
                the control of usimportdata.com. hence, we don’t have any control over the nature, 
                content, and accuracy of the information available on external websites. Those are added 
                just for reference purposes and not as a collaboration.
            </p>
            <p class="mb-3 text-center lg:text-start text-md font-medium text-gray-500">
                We strive hard to keep the website up and running smoothly but usimportdata.com don’t 
                take any responsibility or is not liable for the website being temporarily down or unavailable. 
                This can happen due to any technical issue which is beyond our control or maybe we are working 
                to enhance the user experience. Most of the time, our servers are up and ready to assist you.
            </p>
            <p class="mb-3 text-center lg:text-start text-md font-bold text-gray-500">
                This is to inform all the visitors that usimportdata.com don’t take or receive 
                funding from any source like an advertisement or commercial content.
            </p>
        </div>
    </section>
    
    @include('frontend.footer')
    @include('frontend.script')
</body>
</html>