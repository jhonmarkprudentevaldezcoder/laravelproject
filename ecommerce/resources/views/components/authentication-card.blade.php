<div
    class="shadow-lg min-h-screen flex flex-col justify-center sm:justify-center items-center pt-6 sm:pt-0 bg-gray-200">
    <div>
        {{ $logo }}
    </div>

    <div class="sm:max-w-md mt-6  px-6 py-4 bg-gray-100 rounded-md shadow-md overflow-hidden sm:rounded-lg w-11/12">
        {{ $slot }}
    </div>
</div>