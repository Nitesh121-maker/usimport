    <footer class="bg-gray-50 dark:bg-gray-900">
        <div class="px-5 md:px-8 lg:px-5 mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-16">
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 md:grid-cols-2 sm:gap-6 sm:grid-cols-3">
                {{-- About Us --}}
                <div class="md:col-span-1">
                    <h2 class="mb-4 text-lg lg:text-md font-semibold uppercase text-start">About US</h2>
                    <p class="mt-0 text-gray-500 font-medium !leading-7 text-start">
                        Usimportdata.com is one of the best companies when it comes to Import Export Data in the United
                        States. We follow our cutting-edge techniques to design US Trade Data along with US Import 
                        Data and USA Export Data and provide you with the best and error-free database. Contact us 
                        now for a quote.
                    </p>
                </div>
                {{-- Company & Our data --}}
                <div class="grid grid-cols-2 mt-3 md:mt-0 lg:mt-0">
                    <div>
                        <h2 class="mb-6 text-lg lg:text-md font-semibold text-gray-900 uppercase">Company</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="/about" class="hover:underline">About Us</a>
                            </li>
                            <li class="mb-4">
                                <a href="https://www.tradeimex.in/blogs" target="_blank" class="hover:underline">Blogs</a>
                            </li>
                            <li class="mb-4">
                                <a href="/clients" class="hover:underline">Clients</a>
                            </li>
                            <li class="mb-4">
                                <a href="/faq" class="hover:underline">Faqs</a>
                            </li>
                            <li class="mb-4">
                                <a href="/contact" class="hover:underline">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-lg lg:text-md font-semibold text-gray-900 uppercase">Our Data</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="/importdata" class="hover:underline ">Import data</a>
                            </li>
                            <li class="mb-4">
                                <a href="/exportdata" class="hover:underline">Export Data</a>
                            </li>
                            <li class="mb-4">
                                <a href="https://www.tradeimex.in/global-trade-data" target="_blank" class="hover:underline">Global Trade Data</a>
                            </li>
                            <li class="mb-4">
                                <a href="/search-live-data" class="hover:underline">Search Live Data</a>
                            </li>
                            <li class="mb-4">
                                <a href="/import-data/product" class="hover:underline">Our Data Directory</a>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- Form --}}
                <div class="lg:col-span-1 sm:col-span-2">
                    <div class="mt-6 mb-6 lg:mt-0">
                        <form class="mx-auto px-3 lg:px-5">
                            <h1 class="text-center mb-4 text-lg lg:text-md font-semibold">
                                CONTACT US
                            </h1>
                            <form class="py-6 min-w-80" action="{{route('contact.send')}}" method="POST" onsubmit="return validatecontactForm()" id="contact-form">
                                @csrf
                                <div class="grid md:grid-cols-2 md:gap-6">
                                    <div class="relative z-0 w-full mb-5 group">
                                        <label for="email-address-icon" class="block mb-2 text-sm font-medium">
                                            Name
                                        </label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 start-0 flex items-center ps-2.5 pointer-events-none">
                                                <svg class="w-5 h-5 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 4 20 16">
                                                    <path d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"/>
                                                </svg>                                              
                                            </div>
                                            <input name="name" required type="text" id="email-address-icon" class="bg-gray-50 border border-gray-300 text-gray-900 font-medium text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="relative z-0 w-full mb-5 group">
                                        <label for="email-address-icon" class="block mb-2 text-sm font-medium">
                                            Email
                                        </label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                                    <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                                                    <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                                                </svg>
                                            </div>
                                            <input name="email" required type="text" id="user-icon" class="bg-gray-50 border border-gray-300 text-gray-900 font-medium text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="E-Mail">
                                        </div>
                                    </div>
                                </div>
                                <div class="grid md:grid-cols-2 md:gap-6">
                                    <div class="relative w-full mb-5 group">
                                        <label for="phone-input" class="block mb-2 text-sm font-medium">
                                            Phone number:
                                        </label>
                                        <div class="relative">
                                            <input name="phone" type="tel" id="phone-cf" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[18.5rem] md:w-[22rem] lg:w-[10.5rem] ps-10 p-2.5" placeholder="" required />
                                        </div>                            
                                    </div>
                                    <div class="relative z-0 w-full mb-5 group">
                                        <label for="email-address-icon" class="block mb-2 text-sm font-medium">
                                            Company
                                        </label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 start-0 flex items-center ps-2.5 pointer-events-none">
                                                <svg class="w-5 h-5 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd" d="M4 4a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2v14a1 1 0 1 1 0 2H5a1 1 0 1 1 0-2V5a1 1 0 0 1-1-1Zm5 2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1h-1Zm-5 4a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1h-1Zm-3 4a2 2 0 0 0-2 2v3h2v-3h2v3h2v-3a2 2 0 0 0-2-2h-2Z" clip-rule="evenodd"/>
                                                </svg>                                              
                                            </div>
                                            <input name="company" required type="text" id="email-address-icon" class="bg-gray-50 border border-gray-300 text-gray-900 font-medium text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="Company">
                                        </div>
                                    </div>
                                </div>
                                <div class="relative z-0 w-full mb-5 group">
                                    <label for="countries" class="block mb-2 text-sm font-medium">
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
                                    <label for="message" class="block mb-2 text-sm font-medium">
                                        Describe Your Requirement
                                    </label>
                                    <textarea name="message" required id="message" rows="4" placeholder="Describe Your Requirement..." class="block p-2.5 w-full text-sm text-gray-900 font-medium bg-gray-50 rounded-lg border border-gray-300"></textarea>
                                </div>
                                <button type="submit" class="text-glory-red border border-glory-red hover:bg-glory-red hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-md w-full sm:w-full px-5 py-2.5 text-center">
                                    Submit
                                </button>
                            </form>
                            {{-- <div class="grid md:grid-cols-2 md:gap-6">
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
                                    <input type="tel" id="phone" aria-describedby="helper-text-explanation" name="floating_phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
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
                                    <option value="Both">Both</option>
                                    <option value="US">Import</option>
                                    <option value="CA">Export</option>
                                </select>
                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" name="floating_password" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Message
                                </label>
                            </div>
                            <div class="flex justify-center">
                                <button type="submit" class="text-white bg-gradient-to-br from-glory-red to-glory-blue hover:bg-blue-800 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                                    Submit
                                </button>
                            </div> --}}
                        </form>  
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm font-medium text-gray-500 sm:text-center dark:text-gray-500">
                    © 2024 
                    <a href="https://www.tradeimex.in/" target="_blank" class="hover:underline hover:text-gray-900">
                        TradeImeX™
                    </a>. All Rights Reserved.
                </span>
                <span class="text-sm font-medium text-gray-500 sm:text-center dark:text-gray-500">
                    <a href="/tou" class="hover:underline hover:text-gray-900">
                        Terms Of Use
                    </a>
                    | 
                    <a href="/privacypolicy" class="hover:underline hover:text-gray-900">
                        Privacy Policy
                    </a>  
                    |
                    <a href="/disclaimer" class="hover:underline hover:text-gray-900">
                        Disclaimer
                    </a>  
                </span>
                <div class="flex mt-4 justify-center sm:mt-0">
                    <a href="https://www.facebook.com/tradeimex" class="text-gray-500 hover:text-blue-700">
                        <i class="fa-brands fa-facebook-f fa-sm"></i>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="https://twitter.com/TradeImeX" class="text-gray-500 hover:text-blue-600 ms-5">
                        <i class="fa-brands fa-twitter fa-sm"></i>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="https://www.linkedin.com/company/tradeimex/?viewAsMember=true" class="text-gray-500 hover:text-blue-500 ms-5">
                        <i class="fa-brands fa-linkedin-in fa-sm"></i>
                        <span class="sr-only">Linked account</span>
                    </a>
                    <a href="https://www.youtube.com/channel/UCTHU41uHt6xOub4XDy2Egxw" class="text-gray-500 hover:text-red-500 ms-5">
                        <i class="fa-brands fa-youtube fa-sm"></i>                    
                        <span class="sr-only">Youtube account</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>
