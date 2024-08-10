<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oopss!!</title>
    @include('frontend.link')
</head>
<body>
    @include('frontend.header')

    <section class="bg-gray-50">
        <div class="mx-auto max-w-screen-xl px-5 py-32">
            <div class="flex-wrap">
                <div class="mb-6 flex justify-center">
                    <img class="w-100 lg:w-2/6" src="{{ url('frontend/img/error.png') }}">
                </div>
                <h1 class="mb-6 text-5xl text-center font-medium text-glory-red">
                    Oh,snapp!
                </h1>
                <p class="text-xl text-center font-normal text-gray-500">
                    Some Error Occured, You Can Go To 
                    <a href="/" class="text-glory-blue hover:underline">
                        Home Page
                    </a>
                    Or Try Again Later!!
                </p>
            </div>
        </div>
    </section>

    @include('frontend.footer')
    @include('frontend.script')
</body>
</html>