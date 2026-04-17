<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else

    @endif
</head>

<body
    class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
    <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
        @if (Route::has('login'))
            <nav class="flex items-center justify-end gap-4">
                @auth
                    <x-nav-link href="{{ url('/dashboard') }}" class="button">
                        Dashboard
                    </x-nav-link>
                @else
                    <x-nav-link href="{{ route('login') }}" class="primarybtn">
                        Log in
                    </x-nav-link>

                    @if (Route::has('register'))
                        <x-nav-link href="{{ route('register') }}" class="primarybtn">
                            Register
                        </x-nav-link>
                    @endif
                @endauth
            </nav>
        @endif
    </header>
    <div class="flex items-center justify-center min-h-screen bg-gray-50">
        <div class="grid grid-cols-7 gap-1">
            <div class="w-8 h-8 text-center rounded-md border-t-2 border-cyan-600">S</div>
            <div class="w-8 h-8 text-center rounded-md border-t-2 border-cyan-600">M</div>
            <div class="w-8 h-8 text-center rounded-md border-t-2 border-cyan-600">T</div>
            <div class="w-8 h-8 text-center rounded-md border-t-2 border-cyan-600">W</div>
            <div class="w-8 h-8 text-center rounded-md border-t-2 border-cyan-600">T</div>
            <div class="w-8 h-8 text-center rounded-md border-t-2 border-cyan-600">F</div>
            <div class="w-8 h-8 text-center rounded-md border-t-2 border-cyan-600">S</div>

            <div class="w-8 h-8 bg-gray-200 rounded-md"></div>
            <div class="w-8 h-8 bg-gray-200 rounded-md"></div>
            <div class="w-8 h-8 bg-gray-200 rounded-md"></div>
            <div
                class="w-8 h-8 bg-green-300 border-2 border-green-300 rounded-md text-xs p-1 hover:scale-110 transition-transform">
                1
            </div>
            <div class="w-8 h-8 bg-green-300 rounded-md text-xs p-1 hover:scale-110 transition-transform">2</div>
            <div
                class="w-8 h-8 bg-yellow-200 border-2 border-yellow-300 rounded-md text-xs p-1 hover:scale-110 transition-transform">
                3<span class="text-yellow-700 p-1">★</span></div>
            <div class="w-8 h-8 bg-red-300 rounded-md text-xs p-1 hover:scale-110 transition-transform">4</div>
            <div
                class="w-8 h-8 bg-green-300 border-2 border-green-300 rounded-md text-xs p-1 hover:scale-110 transition-transform">
                5</div>
            <div
                class="w-8 h-8 bg-green-300 border-2 border-green-300 rounded-md text-xs p-1 hover:scale-110 transition-transform">
                6</div>
            <div
                class="w-8 h-8 bg-green-300 border-2 border-green-300 rounded-md text-xs p-1 hover:scale-110 transition-transform">
                7</div>
            <div
                class="w-8 h-8 bg-green-300 border-2 border-green-300 rounded-md text-xs p-1 hover:scale-110 transition-transform">
                8</div>
            <div
                class="w-8 h-8 bg-green-300 border-2 border-green-300 rounded-md text-xs p-1 hover:scale-110 transition-transform">
                9</div>
            <div
                class="w-8 h-8 bg-blue-100 border-2 border-blue-300 rounded-md text-xs pt-1 hover:scale-110 transition-transform">
                10</div>
            <div class="w-8 h-8 bg-gray-200 rounded-md text-xs p-1 cursor-not-allowed">11</div>
            <div class="w-8 h-8 bg-gray-200 rounded-md text-xs p-1">12</div>
            <div class="w-8 h-8 bg-gray-200 rounded-md text-xs p-1">13</div>
            <div class="w-8 h-8 bg-gray-200 rounded-md text-xs p-1">14</div>
            <div class="w-8 h-8 bg-gray-200 rounded-md text-xs p-1">15</div>
            <div class="w-8 h-8 bg-gray-200 rounded-md text-xs p-1">16</div>
            <div class="w-8 h-8 bg-gray-200 rounded-md text-xs p-1">17</div>
            <div class="w-8 h-8 bg-gray-200 rounded-md text-xs p-1">18</div>
            <div class="w-8 h-8 bg-gray-200 rounded-md text-xs p-1">19</div>
            <div class="w-8 h-8 bg-gray-200 rounded-md text-xs p-1">20</div>
            <div class="w-8 h-8 bg-gray-200 rounded-md text-xs p-1">21</div>
            <div class="w-8 h-8 bg-gray-200 rounded-md text-xs p-1">22</div>
            <div class="w-8 h-8 bg-gray-200 rounded-md text-xs p-1">23</div>
            <div class="w-8 h-8 bg-gray-200 rounded-md text-xs p-1">24</div>
            <div class="w-8 h-8 bg-gray-200 rounded-md text-xs p-1">25</div>
            <div class="w-8 h-8 bg-gray-200 rounded-md text-xs p-1">26</div>
            <div class="w-8 h-8 bg-gray-200 rounded-md text-xs p-1">27</div>
            <div class="w-8 h-8 bg-gray-200 rounded-md text-xs p-1">28</div>
            <div class="w-8 h-8 bg-gray-200 rounded-md text-xs p-1">29</div>
            <div class="w-8 h-8 bg-gray-200 rounded-md text-xs p-1">30</div>
        </div>
    </div>
    <button>Press</button>
</body>

</html>