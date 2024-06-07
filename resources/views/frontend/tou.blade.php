<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('frontend.link')
    <title>Terms Of Use || Tradeimex</title>
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
                        Terms Of Use
                    </span>
                </div>
                </li>
            </ol>
        </div>
    </nav>

    <section class="py-8 bg-white">
        <div class="px-5 lg:px-16">
            <h1 class="text-center my-6 font-medium text-5xl animate-text bg-gradient-to-r from-glory-red via-fuchsia-600 to-glory-blue bg-clip-text text-transparent">
                Terms Of Use
            </h1>
            <p class="text-center text-md font-medium text-gray-800">
                Your using and working on our website makes it obvious that you have gone through and given 
                your consent to the terms of use. All the terms of use are mentioned below which are directly 
                applicable to all the users, viewers, or a person surfing through our website on the web.
            </p>
        </div>
        <div class="py-4 px-6 lg:px-20">
            <ul class="space-y-1 font-medium text-gray-500 leading-7 list-disc list-inside">
                <li>
                    Usimportdata uses and stores cookies and cache to help load our website 
                    quickly when you visit next time. However, any personal information like your
                    email, phone number, company name or username is not saved without your consent. 
                    The cookies stored by the website won’t cause any type of trouble or safety issues 
                    to the user. No virus would be introduced to your appliance and no personal information 
                    will be extracted by them.
                </li>
                <li>
                    Each and every piece of information available throughout the website like graphics, 
                    content, and graphic representations is licensed by usimportdata. The duplicity of 
                    the same is strictly prohibited.
                </li>
                <li>
                    Being a company that provides genuine reports, in order to get the most accurate 
                    information, some information available on the website is from a secondary source 
                    and such information is quoted as per the intellectual property rights laws. 
                    We don’t guarantee any control over the content of that source.
                </li>
                <li>
                    Every payment made at usimportdata is under the jurisdiction of Delhi court, India. 
                    according to the law, you as a customer cannot sell, share, lease, rent, revise, or 
                    modify our reports and database. After the delivery of the database, we would not 
                    take into consideration any kind of refund request. Refund is applicable only in 
                    the case of double payment or payment failure that too as per the refunding 
                    time frame.
                </li>
                <li>
                    Indian customs, commerce ministry, customs houses, and DGFT release new amendments 
                    frequently. In that case, we are not responsible for any type of loss or damage to 
                    your business.
                </li>
            </ul>
        </div>
        <div class="py-8 px-4 lg:px-16">
            <p class="text-lg font-medium text-gray-800 text-center">
                US import data has complete rights and authority to change without any advance notice 
                as per its sole discretion, and to decide that submission made by any user is against 
                any of the above-mentioned terms for any kind of reason.
            </p>
        </div>
    </section>
    
    @include('frontend.footer')
    @include('frontend.script')
</body>
</html>