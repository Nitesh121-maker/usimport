  <nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200 main-nav">
    {{-- top navbar --}}
    {{-- <div id="banner" tabindex="-1" class="z-50 flex flex-wrap justify-center w-full px-4 py-3">
      <a href="tel:9319646667" class="px-5 flex items-center text-sm font-semibold">
        <span class="text-glory-blue px-2">
          <i class="fa-solid fa-phone fa-fade"></i>
        </span>
        +91-9319646667
      </a>
      <div class="vl px-2"></div>
      <button 
        data-modal-target="authentication-modal" 
        data-modal-toggle="authentication-modal" 
        class="flex items-center bg-glory-blue rounded p-1 px-3 text-sm font-medium text-white" 
        type="button"
      >
        Enquiry Now
        <svg class="w-3 h-3 ml-1.5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9">
          </path>
        </svg>
      </button>
    </div> --}}
    {{-- Navbar --}}
    <div class="px-2 md:px-5 lg:px-5 lg:py-1 md:py-3 py-1 lg:px-0 max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
      <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{url('frontend/img/logo.png')}}" class="logo contrast-100 saturate-200" alt="Flowbite Logo">
      </a>
      <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
          <a href="/contact">
            <button class="relative inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-r group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white focus:outline-none">
              <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white rounded-md group-hover:bg-opacity-0">
                <p class="font-medium lg:text-md">Contact Us</p>
              </span>
            </button>
          </a>
          <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
      </div>
      <div class="items-center justify-between mb-3 lg:mb-0 md:mb-0 hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
        <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
          <li>
            <a href="/about" class="block py-2 px-3 rounded md:bg-transparent md:text-black md:p-0" aria-current="page">
              About
            </a>
          </li>
          <li>
            <button id="dropdownDelayButton" data-dropdown-toggle="dropdownDelay" data-dropdown-delay="100" data-dropdown-trigger="hover" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">
              Data 
              <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
              </svg>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdownDelay" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDelayButton">
                  <li>
                    <a href="/us-import-data" class="block px-4 py-2 hover:bg-gray-100">Import</a>
                  </li>
                  <li>
                    <a href="/us-export-data" class="block px-4 py-2 hover:bg-gray-100">Export</a>
                  </li>
                </ul>
            </div>
          </li>
          <li>
            <a href="/search-live-data" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">
              Search Live Data
            </a>
          </li>
          <li>
            <a href="/faq" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">
              Faqs
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main modal -->
  <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-opacity-60 backdrop-blur-sm transition-opacity duration-300">
    <div class="relative p-2 w-full max-w-4xl max-h-full px-5">
      <div class="relative grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 bg-white rounded-lg shadow">
          <div class="flex justify-center items-center">
              <img src="{{ url('frontend/img/modal_form.png') }}">
          </div>
          <div>
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                  <h3 class="text-lg font-semibold text-gray-900">
                      Request For Complete Data
                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="authentication-modal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal form -->
              <form class="mx-auto px-5 lg:px-5 py-6" action="{{route('contact.send')}}" method="POST" onsubmit="return validatecontactForm()">
                  <div class="grid md:grid-cols-2 md:gap-6">
                      <div class="relative z-0 w-full mb-5 group">
                          <input type="text" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                          <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                              Name
                          </label>
                      </div>
                      <div class="relative z-0 w-full mb-5 group">
                          <input type="email" name="floating_last_name" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                          <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                              Email
                          </label>
                      </div>
                  </div>
                  <div class="grid md:grid-cols-2 md:gap-6">
                      <div class="relative z-0 w-full mb-5 group">
                          <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                          <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                              Phone number
                          </label>
                      </div>
                      <div class="relative z-0 w-full mb-5 group">
                          <input type="text" name="floating_company" id="floating_company" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                          <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                              Company
                          </label>
                      </div>
                  </div>
                  <div class="relative z-0 w-full mb-5 group">
                      <label for="underline_select" class="sr-only">Underline select</label>
                      <select id="underline_select" class="appearance-none block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                          <option selected>Choose...</option>
                          <option value="import">Import</option>
                          <option value="export">Export</option>
                          <option value="Both">Both</option>
                      </select>
                  </div>
                  <div class="relative z-0 w-full mb-5 group">
                      <input type="text" name="floating_password" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" required />
                      <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Message
                      </label>
                  </div>
                  <div class="flex justify-center">
                      <button type="submit" class="text-white bg-gradient-to-br from-glory-red to-glory-blue focus:ring-2 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                          Submit
                      </button>
                  </div>
              </form>
          </div>
      </div>
  </div>
  </div> 