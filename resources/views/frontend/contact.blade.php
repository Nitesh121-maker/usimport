<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contact Us || Tradeimex</title>
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
                                Contact Us
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>

        {{-- Overview --}}
        <section class="animate-text bg-gradient-to-r from-glory-red via-fuchsia-600 to-glory-blue">
            <div class="mx-auto max-w-screen-xl px-5 md:px-12 lg:px-5 py-16 lg:py-20 grid lg:grid-cols-2">
                <div class="flex flex-col justify-center">
                    <span class="mb-4 font-normal text-lg lg:text-xl text-white text-center md:text-start lg:text-start">
                        Contact Us
                    </span>
                    <h1 class="mb-4 text-4xl lg:text-5xl font-medium text-white text-center md:text-start lg:text-start">
                        Talk to an Expert
                    </h1>
                    <p class="mb-3 font-normal text-gray-100 lg:text-md text-center md:text-start lg:text-start">
                        We are thankful that you visited our website <span class="font-semibold">usimportdata.com</span>. TradeImeX is here to assist you
                        via chatbot, email, or our helpline numbers. Our dedicated team specializes in assisting
                        with your queries regarding our latest and most accurate US import-export data to help
                        you make informed decisions for your business in the USA. Contact us today for
                        individualized support tailored to your specific US trade data queries. Our professional
                        team is ready to guide you through the vast world of US trade statistics, offering insights
                        and assistance every step of the way. Whether you need assistance in analyzing market
                        trends, tracking competitors, or identifying potential business opportunities, the
                        TradeImeX customer support team is always there for you with your queries regarding
                        US trade. We appreciate your kind support!.Our team of experts will help you in:
                    </p>
                    <ul class="max-w-3xl space-y-1 text-white list-inside">
                        <li class="flex items-start">
                            <svg class="w-3.5 h-3.5 me-2 mt-1 text-white flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                             </svg>
                            Comprehending US trade regulations with confidence and comfort.
                        </li>
                        <li class="flex items-start">
                            <svg class="w-3.5 h-3.5 me-2 mt-1 text-white flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                             </svg>
                            Providing beneficial information on US market research and analysis.
                        </li>
                        <li class="flex items-start">
                            <svg class="w-3.5 h-3.5 me-2 mt-1 text-white flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                             </svg>
                            Finding Verification and Buyer/Supplier Sourcing for your US Business.
                        </li>
                        <li class="flex items-start">
                            <svg class="w-3.5 h-3.5 me-2 mt-1 text-white flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                             </svg>
                             Data package customization to meet the demands
                            {{-- Data package customization to meet the demands and specifications of customers. --}}
                        </li>
                    </ul>
                </div>
                <div class="flex flex-wrap items-center justify-center">
                    <form class="py-6 min-w-80" action="{{route('contact.send')}}" method="POST" onsubmit="return validatecontactForm()" id="contact-form">
                        @csrf
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="email-address-icon" class="block mb-2 text-sm font-medium text-white">
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
                                <label for="email-address-icon" class="block mb-2 text-sm font-medium text-white">
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
                                <label for="phone-input" class="block mb-2 text-sm font-medium text-white">
                                    Phone number:
                                </label>
                                <div class="relative">
                                    <input name="phone" type="tel" id="phone" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[20rem] md:w-[21.5rem] lg:w-[15rem] ps-10 p-2.5" placeholder="" required />
                                </div>                            
                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="email-address-icon" class="block mb-2 text-sm font-medium text-white">
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
                            <label for="countries" class="block mb-2 text-sm font-medium text-white">
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
                            <label for="message" class="block mb-2 text-sm font-medium text-white">
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
        </section>

        {{-- Contact us and get in touch! --}}
        <section class="bg-gray-50">
            <div class="mx-auto max-w-screen-xl py-12 md:px-8 lg:px-5">
                <div class="px-5 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
                    <div class="flex flex-col justify-center">
                        <h1 class="mx-2 mb-3 font-medium text-3xl lg:text-4xl text-center md:text-start lg:text-start">
                            Contact us and get in touch!
                        </h1>
                        <p class="mb-3 mx-2 font-medium lg:text-md text-gray-500 text-center md:text-start lg:text-start">
                            Do you have any questions or doubts about the US trade data? We would be very
                            happy to hear from you. Reaching out to TradeImeX is very simple! There are multiple
                            ways available for you to reach out to us. Just pick the one that suits you the most. Take
                            into consideration contacting us in the following ways.
                        </p>
                    </div>
                    <div class="flex items-center justify-center">
                        <img src="{{('frontend/img/contact_us.png')}}" class="w-full lg:w-3/5 md:w-4/5">
                    </div>
                </div>
            </div>
        </section>
        
        {{-- Key Points of 4 tabs --}}
        <section class="bg-gray-50">
            <div class="mx-auto max-w-screen-xl py-12 px-8 md:px-12 lg:px-8 gap-6 grid-cols-1 md:grid-cols-2 grid lg:grid-cols-4">
                <div class="flex items-end mb-3 max-w-sm bg-white border-2 border-gray-200 border-l-glory-red rounded-lg shadow">
                    <div class="mt-4 px-4 py-2">
                        <div class="mb-2 flex justify-center lg:justify-start">
                            <img class="contrast-100 saturate-100 w-1/4" src="{{url('frontend/img/address.png')}}">
                        </div>
                        <div>
                            <h5 class="mb-2 text-lg md:text-xl font-medium text-gray-900 text-center lg:text-start">
                                Address
                            </h5>
                            <p class="mb-3 text-md font-normal text-gray-500 text-center lg:text-start">
                                372, 3rd floor, RU BLOCK, Pitampura 110034, New Delhi
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex items-end mb-3 max-w-sm bg-white border-2 border-gray-200 border-l-glory-red rounded-lg shadow">
                    <div class="mt-4 px-4 py-2">
                        <div class="mb-2 flex justify-center lg:justify-start">
                            <img class="contrast-100 saturate-100 w-1/4" src="{{url('frontend/img/phone.png')}}">
                        </div>
                        <h5 class="mb-2 text-lg md:text-xl font-medium text-gray-900 text-center lg:text-start">
                            Phone
                        </h5>
                        <p class="mb-3 text-md font-normal text-gray-500 text-center lg:text-start">
                            +91-7042034462 <br>
                            +91-9319646667
                        </p>
                    </div>
                </div>
                <div class="flex items-end mb-3 max-w-sm bg-white border-2 border-gray-200 border-l-glory-red rounded-lg shadow">
                    <div class="mt-4 px-4 py-2">
                        <div class="mb-2 flex justify-center lg:justify-start">
                            <img class="contrast-100 saturate-100 w-1/4" src="{{url('frontend/img/email.png')}}">
                        </div>
                        <h5 class="mb-2 text-lg md:text-xl font-medium text-gray-900 text-center lg:text-start">
                            E-Mail
                        </h5>
                        <p class="mb-3 text-md font-normal text-gray-500 text-center lg:text-start">
                            <a class="text-md font-medium underline text-gray-500 hover:text-glory-blue" href="mailto:info@tradeimex.in">
                                info@tradeimex.in
                            </a>
                            <br>
                            <a class="text-md font-medium underline text-gray-500 hover:text-glory-blue" href="mailto:sales@tradeimex.in">
                                sales@tradeimex.in
                            </a>
                        </p>
                    </div>
                </div>
                <div class="flex items-end mb-3 max-w-sm bg-white border-2 border-gray-200 border-l-glory-red rounded-lg shadow">
                    <div class="mt-4 px-4 py-2">
                        <div class="mb-2 flex justify-center lg:justify-start">
                            <img class="contrast-100 saturate-100 w-1/4" src="{{url('frontend/img/web.png')}}">
                        </div>
                        <h5 class="mb-2 text-lg md:text-xl font-medium text-gray-900 text-center lg:text-start">
                            Website
                        </h5>
                        <p class="mb-3 text-md font-normal text-gray-500 text-center lg:text-start">
                            <a class="text-md font-medium underline text-gray-500 hover:text-glory-blue" target="_blank" href="https://www.usimportdata.com">
                                www.usimportdata.com<br> <span class="invisible">&nbsp;</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        {{-- Key Points of 4 tabs --}}

        <!-- Maps -->
        <div class="responsive-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d437.41469798752604!2d77.13661697124729!3d28.7100535255674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d071148ef8341%3A0xe55ab5577ff48f81!2sTradeImex%20-%20Import%20Export%20Data%20Provider%2C%20Data%20Analytic%20%26%20Shipment%20Services!5e0!3m2!1sen!2sin!4v1702627978347!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0"  loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
        </div>


        @include('frontend.footer')
        @include('frontend.script')

    </body>
</html>