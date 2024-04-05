<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Department of Education</title>
</head>
<body class="">
    <section class="flex justify-center w-full">
        <div class="max-w-[1280px] w-full flex justify-between items-center">
            language
        </div>
    </section>


    {{--header section 1--}}
    <section class="flex justify-center w-full h-[120px] border border-x">
        @include('homepage.section1')
    </section>


    {{--navbar section 2 --}}
    <section class="flex justify-center w-full h-[44px] border-b border-collapse">
      @include('homepage.section2')
    </section>

    {{-- banner: section 3 --}}
    <section class="flex justify-center w-full">
        @include('homepage.section3')
    </section>

    {{-- about section 4 --}}
    <section class="flex justify-center w-full">
        @include('homepage.section4')
    </section>

    {{-- blog section 5 --}}
    <section class="flex justify-center w-full">
        @include('homepage.section5')
    </section>

    {{-- glance section 6 --}}
    <section class="flex justify-center w-full">
        @include('homepage.section6')
    </section>

    {{-- gallery and calender section 7 --}}
    <section class="flex justify-center w-full">
        @include('homepage.section7')
    </section>


    {{-- footer section 8 --}}
    <section class="flex justify-center w-full">
        @include('homepage.section8')
    </section>

</body>
</html>
