<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('frontend.link')
    <title>Products Name Start With A</title>
</head>
<body>
    @include('frontend.header')

    {{-- Breadcrumb --}}
    <div class="mx-auto border border-r-0 border-l-0 border-gray-200">
        <nav class="flex px-16 pt-24 lg:pt-24 md:pt-28 pb-4 text-gray-700 bg-white" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="/" class="inline-flex items-center text-xs lg:text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path 
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"
                            />
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <a href="#" class="ms-1 text-xs lg:text-sm font-medium text-gray-900 hover:text-blue-600 md:ms-2 dark:text-gray-400">
                            Data Directory
                        </a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="line-clamp-1 ms-1 text-xs lg:text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">
                            Import Live Data
                        </span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>
    {{-- Breadcrumb --}}

    <section class="bg-white">
        <div class="py-12">
            <div class="px-5">
                <h1 class="mb-6 text-center text-5xl font-medium animate-text bg-gradient-to-r from-glory-red via-fuchsia-600 to-glory-blue bg-clip-text text-transparent">
                    Browse Our Data Directory
                </h1>
                <ul class="mb-6 grid w-full gap-2 grid-cols-2 md:grid-cols-2">
                    <li class="flex justify-end items-center text-center">
                        <input checked type="radio" id="hosting-small" name="hosting" value="hosting-small" class="hidden peer" required />
                        <label for="hosting-small" class="inline-flex items-center w-3/4 lg:w-1/5 p-3 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg cursor-pointer peer-checked:bg-glory-blue peer-checked:border-glory-blue peer-checked:text-white hover:text-gray-600 hover:bg-glory-blue hover:text-white">                           
                            <div class="w-full text-md font-medium">Import</div>  
                        </label>
                    </li>
                    <li class="flex justify-start items-center text-center">
                        <input type="radio" id="hosting-big" name="hosting" value="hosting-big" class="hidden peer">
                        <label for="hosting-big" class="inline-flex items-center w-3/4 lg:w-1/5 p-3 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg cursor-pointer peer-checked:bg-glory-blue peer-checked:border-glory-blue peer-checked:text-white hover:text-gray-600 hover:bg-glory-blue hover:text-white">
                            <div class="w-full text-md font-semibold">Export</div>
                        </label>
                    </li>
                </ul>
            </div>

            {{-- <div class="py-6">
                <button data-drawer-target="separator-sidebar" data-drawer-toggle="separator-sidebar" aria-controls="separator-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                    </svg>
                </button>
                
                <aside id="separator-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
                    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
                    <ul class="space-y-2 font-medium">
                        <li>
                            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                                <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                                <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                                </svg>
                                <span class="ms-3">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                                </svg>
                                <span class="flex-1 ms-3 whitespace-nowrap">Kanban</span>
                                <span class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z"/>
                                </svg>
                                <span class="flex-1 ms-3 whitespace-nowrap">Inbox</span>
                                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                                </svg>
                                <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                                </svg>
                                <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                                </svg>
                                <span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z"/>
                                <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z"/>
                                <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z"/>
                                </svg>
                                <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700">
                        <li>
                            <a href="#" class="flex items-center p-2 text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 17 20">
                                <path d="M7.958 19.393a7.7 7.7 0 0 1-6.715-3.439c-2.868-4.832 0-9.376.944-10.654l.091-.122a3.286 3.286 0 0 0 .765-3.288A1 1 0 0 1 4.6.8c.133.1.313.212.525.347A10.451 10.451 0 0 1 10.6 9.3c.5-1.06.772-2.213.8-3.385a1 1 0 0 1 1.592-.758c1.636 1.205 4.638 6.081 2.019 10.441a8.177 8.177 0 0 1-7.053 3.795Z"/>
                                </svg>
                                <span class="ms-3">Upgrade to Pro</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                                <path d="M16 14V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 0 0 0-2h-1v-2a2 2 0 0 0 2-2ZM4 2h2v12H4V2Zm8 16H3a1 1 0 0 1 0-2h9v2Z"/>
                                </svg>
                                <span class="ms-3">Documentation</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                <path d="M18 0H6a2 2 0 0 0-2 2h14v12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Z"/>
                                <path d="M14 4H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2ZM2 16v-6h12v6H2Z"/>
                                </svg>
                                <span class="ms-3">Components</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 21">
                                <path d="m5.4 2.736 3.429 3.429A5.046 5.046 0 0 1 10.134 6c.356.01.71.06 1.056.147l3.41-3.412c.136-.133.287-.248.45-.344A9.889 9.889 0 0 0 10.269 1c-1.87-.041-3.713.44-5.322 1.392a2.3 2.3 0 0 1 .454.344Zm11.45 1.54-.126-.127a.5.5 0 0 0-.706 0l-2.932 2.932c.029.023.049.054.078.077.236.194.454.41.65.645.034.038.078.067.11.107l2.927-2.927a.5.5 0 0 0 0-.707Zm-2.931 9.81c-.024.03-.057.052-.081.082a4.963 4.963 0 0 1-.633.639c-.041.036-.072.083-.115.117l2.927 2.927a.5.5 0 0 0 .707 0l.127-.127a.5.5 0 0 0 0-.707l-2.932-2.931Zm-1.442-4.763a3.036 3.036 0 0 0-1.383-1.1l-.012-.007a2.955 2.955 0 0 0-1-.213H10a2.964 2.964 0 0 0-2.122.893c-.285.29-.509.634-.657 1.013l-.01.016a2.96 2.96 0 0 0-.21 1 2.99 2.99 0 0 0 .489 1.716c.009.014.022.026.032.04a3.04 3.04 0 0 0 1.384 1.1l.012.007c.318.129.657.2 1 .213.392.015.784-.05 1.15-.192.012-.005.02-.013.033-.018a3.011 3.011 0 0 0 1.676-1.7v-.007a2.89 2.89 0 0 0 0-2.207 2.868 2.868 0 0 0-.27-.515c-.007-.012-.02-.025-.03-.039Zm6.137-3.373a2.53 2.53 0 0 1-.35.447L14.84 9.823c.112.428.166.869.16 1.311-.01.356-.06.709-.147 1.054l3.413 3.412c.132.134.249.283.347.444A9.88 9.88 0 0 0 20 11.269a9.912 9.912 0 0 0-1.386-5.319ZM14.6 19.264l-3.421-3.421c-.385.1-.781.152-1.18.157h-.134c-.356-.01-.71-.06-1.056-.147l-3.41 3.412a2.503 2.503 0 0 1-.443.347A9.884 9.884 0 0 0 9.732 21H10a9.9 9.9 0 0 0 5.044-1.388 2.519 2.519 0 0 1-.444-.348ZM1.735 15.6l3.426-3.426a4.608 4.608 0 0 1-.013-2.367L1.735 6.4a2.507 2.507 0 0 1-.35-.447 9.889 9.889 0 0 0 0 10.1c.1-.164.217-.316.35-.453Zm5.101-.758a4.957 4.957 0 0 1-.651-.645c-.033-.038-.077-.067-.11-.107L3.15 17.017a.5.5 0 0 0 0 .707l.127.127a.5.5 0 0 0 .706 0l2.932-2.933c-.03-.018-.05-.053-.078-.076ZM6.08 7.914c.03-.037.07-.063.1-.1.183-.22.384-.423.6-.609.047-.04.082-.092.129-.13L3.983 4.149a.5.5 0 0 0-.707 0l-.127.127a.5.5 0 0 0 0 .707L6.08 7.914Z"/>
                                </svg>
                                <span class="ms-3">Help</span>
                            </a>
                        </li>
                    </ul>
                    </div>
                </aside>
                
                <div class="p-4 sm:ml-64">
                    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
                    <div class="grid grid-cols-3 gap-4 mb-4">
                        <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                            <p class="text-2xl text-gray-400 dark:text-gray-500">
                                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                </svg>
                            </p>
                        </div>
                        <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                            <p class="text-2xl text-gray-400 dark:text-gray-500">
                                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                </svg>
                            </p>
                        </div>
                        <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                            <p class="text-2xl text-gray-400 dark:text-gray-500">
                                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                </svg>
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                        <p class="text-2xl text-gray-400 dark:text-gray-500">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                            </svg>
                        </p>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                            <p class="text-2xl text-gray-400 dark:text-gray-500">
                                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                </svg>
                            </p>
                        </div>
                        <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                            <p class="text-2xl text-gray-400 dark:text-gray-500">
                                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                </svg>
                            </p>
                        </div>
                        <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                            <p class="text-2xl text-gray-400 dark:text-gray-500">
                                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                </svg>
                            </p>
                        </div>
                        <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                            <p class="text-2xl text-gray-400 dark:text-gray-500">
                                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                </svg>
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                        <p class="text-2xl text-gray-400 dark:text-gray-500">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                            </svg>
                        </p>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                            <p class="text-2xl text-gray-400 dark:text-gray-500">
                                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                </svg>
                            </p>
                        </div>
                        <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                            <p class="text-2xl text-gray-400 dark:text-gray-500">
                                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                </svg>
                            </p>
                        </div>
                        <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                            <p class="text-2xl text-gray-400 dark:text-gray-500">
                                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                </svg>
                            </p>
                        </div>
                        <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                            <p class="text-2xl text-gray-400 dark:text-gray-500">
                                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                </svg>
                            </p>
                        </div>
                    </div>
                    </div>
                </div> 
            </div>  --}}

            <div class="mx-auto max-w-screen-xl">
                <div class="py-4 px-5">
                    <h1 class="text-center text-3xl font-medium">
                        US Product Wise Import Data
                    </h1>
                </div> 
                <div class="flex justify-start lg:justify-center px-2 py-3 max-w-6xl lg:max-w-full overflow-auto">
                    <nav class="flex mb-6" aria-label="Page navigation example">
                        <ul class="flex -space-x-px text-base h-10">
                            <li>
                                <a href="#" aria-current="page" class="flex items-center justify-center px-4 h-10 text-glory-blue border border-gray-300 bg-blue-50 hover:bg-glory-blue hover:text-white">
                                    A
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                    B
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                    C
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                    D
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                    E
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                    F
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                    G
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                    H
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                    I
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                    J
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                    K
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                    L
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                    M
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                    N
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                    O
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                    P
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                    Q
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                    R
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                    S
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                    T
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                    U
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                    V
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                    W
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                    X
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                    Y
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                    Z
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            
            <div class="px-5 py-8">
                <div class="grid gap-0 md:gap-2 lg:gap-2 grid-cols-1 md:grid-cols-5 lg:grid-cols-6">
                    <div class="col-span-1">
                        <ul class="flex-column space-y space-y-4 text-sm font-medium text-gray-500 md:me-4 mb-4 md:mb-0" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                            <li class="mr-2" role="presentation">
                                <button class="active inline-flex items-center justify-center w-full px-4 py-3 rounded-lg border border-gray-200 aria-selected:text-white aria-selected:bg-gradient-to-br from-glory-red to-glory-blue aria-selected:hover:text-gray-50 focus:outline-none" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                    Product Wise Data
                                </button>
                            </li>
                            <li class="mr-2" role="presentation">
                                <button class="inline-flex items-center justify-center w-full px-4 py-3 rounded-lg border border-gray-200 aria-selected:text-white aria-selected:bg-gradient-to-br from-glory-red to-glory-blue aria-selected:hover:text-gray-50 focus:outline-none" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">
                                    Company Wise Data
                                </button>
                            </li>
                            <li class="mr-2" role="presentation">
                                <button class="inline-flex items-center justify-center w-full px-4 py-3 rounded-lg border border-gray-200 aria-selected:text-white aria-selected:bg-gradient-to-br from-glory-red to-glory-blue aria-selected:hover:text-gray-50 focus:outline-none" id="productwise-tab" data-tabs-target="#productwise" type="button" role="tab" aria-controls="productwise" aria-selected="false">
                                    Product Wise Company
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="col-span-1 md:col-span-4 lg:col-span-5" id="myTabContent">
                        {{-- Product Wise Data --}}
                        <div id="profile" role="tabpanel" aria-labelledby="profile-tab" class="bg-transparent text-medium text-gray-500 rounded-lg w-full">
                            <div class="grid gap-2 grid-cols-1 md:grid-cols-3 lg:grid-cols-4">
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            Automobiles
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            Aircraft parts
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            Apparel
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            Apple
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            Aluminum
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            Agricultural products (e.g., almonds, apples)
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            Antiques
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            Ammunition
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            Animal feed
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            Asparagus
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            Avocado
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            Audio equipment
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- Company Wise Data --}}
                        <div id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab" class="bg-transparent text-medium text-gray-500 rounded-lg w-full">
                            <div class="grid gap-2 grid-cols-1 md:grid-cols-3 lg:grid-cols-4">
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            ATILIM SAGLIK ANONIMSIRKETI
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            AUTOLIV CANKOR OTOMOTIV EMNIYET SIS SAN VE TIC A S
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            AAT MAKINA SAN VE TIC A S
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            ASTRAZENECA ILAÇ SANAYI VE TICARET LIMITED SIRKETI
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            Aluminum
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            Agricultural products (e.g., almonds, apples)
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            Antiques
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            Ammunition
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            Animal feed
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            Asparagus
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            Avocado
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            Audio equipment
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- Product Wise Company Data --}}
                        <div id="productwise" role="tabpanel" aria-labelledby="productwise-tab" class="bg-transparent text-medium text-gray-500 rounded-lg w-full">
                            <div class="grid gap-2 grid-cols-1 md:grid-cols-3 lg:grid-cols-4">
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            Aac Conductor
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            Abb Inverter
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            Abrasive Rail Cutting Machine
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            Abs Plastic Powder
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            Abs Plastic Raw Material
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            Abs Plastic Scrap
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            Absolut Vanilia Vodka
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            Absorbent Rubber Blade
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            Ac Adaptor
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            Ac Drive Panel
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            Ac Outdoor Unit
                                        </p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center p-6 text-glory-blue bg-blue-100 border border-blue-100 rounded-lg shadow hover:bg-glory-blue hover:text-white">
                                    <a href="#" target="_blank">
                                        <p class="text-lg font-medium">
                                            Acacia Tree
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Pagination --}}
                <div class="flex justify-center mt-8 px-5">
                    <nav aria-label="Page navigation example">
                        <ul class="inline-flex -space-x-px text-base h-10">
                            <li>
                                <a href="#" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    Previous
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                            </li>
                            <li>
                                <a href="#" aria-current="page" class="flex items-center justify-center px-4 h-10 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    Next
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.footer')
    @include('frontend.script')
</body>
</html>