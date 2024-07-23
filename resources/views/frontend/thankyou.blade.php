<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thank For Submitting The Form</title>
    @include('frontend.link')
</head>
<body>
    @include('frontend.header')

    <section class="bg-white">
        <div class="mx-auto max-w-screen-xl px-5 py-20">
            <div class="flex justify-center items-center">
                <img class="mb-2" src="{{ url('frontend/img/sent.gif') }}" style="width: 25%">
            </div> 
            <div class="text-center">
                <h1 class="text-4xl font-semibold justify-center animate-text bg-gradient-to-r from-glory-red via-fuchsia-600 to-glory-blue bg-clip-text text-transparent">
                    Thank You For Reaching Out <br>
                    We Will Get Back To YOu Soon!!
                </h1>
            </div>
        </div>
    </section>

    @include('frontend.footer')
    @include('frontend.script')
</body>
</html>