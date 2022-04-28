<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Voting</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans bg-gray-background text-gray-900 text-sm">
    <header class="flex items-center justify-between px-4 py-4">
        <!-- <a href="#"><img src="{{ asset('img/logo.png') }}" alt="logo"></a> -->
        <a href="#"><img src="https://assets.laracasts.com/images/logo.svg" alt="logo"></a>
        <div class="flex items-center">
            @if (Route::has('login'))
            <div class="px-6 py-4">
                @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="{{route('logout')}}" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form> @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
                @endauth
            </div>
            @endif
            <a href="#">
                <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" class="w-10 h-10 rounded-full">
            </a>
        </div>

    </header>

    <main class="container mx-auto max-w-custom flex">
        <div class="w-72 mr-5 cursor-pointer">
            <div class="border bg-white border-blue rounded-xl mt-16" style="
                           border-image-source: linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
                             border-image-slice: 1;
                             background-image: linear-gradient(to bottom, #ffffff, #ffffff), linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
                             background-origin: border-box;
                             background-clip: content-box, border-box;
                     ">
                <div class="text-center px-6 py-2 pt-6">
                    <h3 class="font-semibold text-base">Add an idea</h3>
                    <p class="mt-4 text-xs">Let us know what would you like and we'll take a look over!</p>

                </div>
                <form action="#" method="POST" class="space-y-4  px-4 py-6">
                    <div>
                        <input type="text" class="bg-gray-100 text-sm border-none w-full rounded-xl placeholder-gray-900 px-4 py-2 " placeholder="Your idea">
                    </div>
                    <div>
                        <select name="cateogory_add" id="category_add" class="w-full bg-gray-100 text-sm rounded-xl border-none px-4 py-2">
                            <option value="category one">Category One</option>
                            <option value="category two">Category Two</option>
                            <option value="category three">Category Three</option>
                            <option value="category four">Category Four</option>
                        </select>
                    </div>
                    <div>
                        <textarea name="idea" id="idea" cols="30" rows="4" class="text-sm bg-gray-100 w-full rounded-xl placeholder-gray-900 px-4 py-2 border-none ">Describe your idea</textarea>
                    </div>
                    <div class="flex items-center justify-between space-x-3 overflow-hidden">
                        <button type="button" class="flex items-center justify-center h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in py-3 px-4">
                            <svg class="w-4 transform -rotate-45 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                            </svg>
                            <span class="">Attach</span>
                        </button>
                        <button type="submit" class="flex items-center justify-center w-full h-11 text-xs bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in py-3 px-4">
                            <span class="text-white">Submit</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="w-175">
            <nav class="flex items-center justify-between text-xs">
                <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                    <li>
                        <a href="#" class="border-b-4 pb-3 border-blue">All Ideas (87)</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Considering (8)</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">In progress (1)</a>
                    </li>
                </ul>
                <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                    <li>
                        <a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Implemented (18)</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Closed (55)</a>
                    </li>
                </ul>
            </nav>

            <div class="mt-8">
                {{ $slot }}
            </div>
        </div>
    </main>
</body>

</html>