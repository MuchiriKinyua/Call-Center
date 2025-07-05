<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Call Center</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-cover bg-center text-gray-800 dark:text-gray-100 font-[figtree] antialiased"
      style="background-image: url('{{ asset('callcenter-bg.jpg') }}');">


    <div class="min-h-screen flex flex-col justify-center items-center px-6 py-12">
        <div class="text-center max-w-2xl">
            <h1 class="text-4xl text-blue-600 sm:text-5xl font-extrabold tracking-tight mb-4">
                Welcome to the <span class="text-blue-600">Call Center</span> Dashboard
            </h1>
            <p class="text-lg sm:text-xl text-gray-600 dark:text-gray-300 mb-8">
                Streamline communication, manage queries, and serve customers faster with our intelligent call center system.
            </p>

            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}" class="inline-block px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition">
                        Go to Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="inline-block px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition">
                        Login
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="inline-block ml-4 px-6 py-3 border border-blue-600 text-blue-600 font-semibold rounded-lg hover:bg-blue-50 dark:hover:bg-gray-800 transition">
                            Register
                        </a>
                    @endif
                @endauth
            @endif
        </div>

        <div class="mt-12 w-full max-w-md">
            <img src="https://cdn-icons-png.flaticon.com/512/1077/1077012.png" alt="Call Center" class="w-full">
        </div>
    </div>

</body>
</html>
