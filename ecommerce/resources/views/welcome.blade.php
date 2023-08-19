<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
        <div
            class=" fixed  top-0 right-0 px-4 py-2  bg-gray-800 w-full flex flex-row  justify-between md:justify-around items-center">

            <img src="{{ asset('/logo/logo.png') }}" alt="logo" width="50" class="object-cover">

            <div class="flex flex-row md:justify-between items-center">
                @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-200 underline">Dashboard</a>
                @else
                <a href="{{ route('login') }}"
                    class="text-sm text-gray-200 font-semibold hover:text-amber-500 transition-all ease-in-out delay-75 duration-300">Log
                    in</a>
                <p class="ml-5">|</p>
                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="ml-4 text-sm text-gray-200 font-semibold hover:text-amber-500 transition-all ease-in-out delay-75 duration-300">Register</a>

                @endif
                @endauth

            </div>

        </div>
        @endif

        <div class="mt-20 md:mt-20 max-w-full mx-auto sm:px-6 lg:px-2">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                @include('components/carousel')
            </div>

            <div class="mt-8 bg-white overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="/"
                                    class="underline text-gray-900">Documentation</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 text-sm">
                                Laravel has wonderful, thorough documentation covering every aspect of the framework.
                                Whether you are new to the framework or have previous experience with Laravel, we
                                recommend reading all of the documentation from beginning to end.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round"
                                    d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="/"
                                    class="underline text-gray-900">Laracasts</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 text-sm">
                                Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript
                                development. Check them out, see for yourself, and massively level up your development
                                skills in the process.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="/"
                                    class="underline text-gray-900">Laravel News</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 text-sm">
                                Laravel News is a community driven portal and newsletter aggregating all of the latest
                                and most important news in the Laravel ecosystem, including new package releases and
                                tutorials.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 md:border-l">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold text-gray-900">Vibrant Ecosystem</div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 text-sm">
                                Laravel's robust library of first-party tools and libraries, such as <a
                                    href="https://forge.laravel.com" class="underline">Forge</a>, <a
                                    href="https://vapor.laravel.com" class="underline">Vapor</a>, <a
                                    href="https://nova.laravel.com" class="underline">Nova</a>, and <a
                                    href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects
                                to the next level. Pair them with powerful open source libraries like <a
                                    href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a
                                    href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a
                                    href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a
                                    href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a
                                    href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a
                                    href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rounded-md p-2 md:p-0 shadow-sm mt-2 flex flex-col md:flex-row justify-between gap-1 md:gap-1 ">

                <div
                    class="max-w-full md:max-w-sm bg-white border border-gray-200 rounded-md shadow flex flex-col justify-between">
                    <a href="#" class="p-4">
                        <img class="rounded-t-lg" src="{{ asset('/product/gaming.jpg') }}" alt="product-image" />
                    </a>
                    <div class="p-5 flex flex-col justify-between">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Gaming accessories</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 ">Here are the biggest enterprise
                            technology acquisitions of 2023 so far, Gaming accessories.</p>
                        <a href="#"
                            class="inline-flex  items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div
                    class="max-w-full md:max-w-sm bg-white border border-gray-200 rounded-md shadow flex flex-col justify-between">
                    <a href="#" class="p-4">
                        <img class="rounded-t-lg" src="{{ asset('/product/school.jpg') }}" alt="" />
                    </a>
                    <div class="p-5 flex flex-col justify-between">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Shop school essentials
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 ">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div
                    class="max-w-full md:max-w-sm bg-white border border-gray-200 rounded-md shadow flex flex-col justify-between">
                    <a href="#" class="p-4">
                        <img class="rounded-t-lg" src="{{ asset('/product/healthb.jpg') }}" alt="" />
                    </a>
                    <div class="p-5 flex flex-col justify-between">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 "> Health & Personal
                                Care</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 ">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div
                    class="max-w-full md:max-w-sm bg-white border border-gray-200 rounded-md shadow flex flex-col justify-between">
                    <a href="#" class="p-5">
                        <img class="rounded-t-lg" src="{{ asset('/product/house.jpeg') }}" alt="" />
                    </a>
                    <div class="p-5 flex flex-col justify-between">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Home & Kitchen </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 ">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="#"
                            class="inline-flex  items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- @include('components/pricing') --}}
            {{-- @include('components/footer') --}}
            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        <a href="" class="ml-1 underline">
                            Shop
                        </a>

                        <a href="" class="ml-1 underline">
                            Sponsor
                        </a>
                    </div>
                </div>

                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Laravel
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>