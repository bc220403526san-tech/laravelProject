<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-100 text-slate-900">
    <header class="bg-slate-800 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 flex justify-between items-center py-3">
            <!-- Left side -->
            <nav class="flex items-center gap-4">
                <a href="{{ route('posts.index') }}" class="nav-link">Home</a>
            </nav>

            @auth
                <div class="relative grid place-items-center" x-data="{ open: false }">
                    {{-- Dropdown menu button --}}
                    <button type="button" class="round-btn" @click="open = !open">
                        <img src="https://picsum.photos/200" alt="" class="w-12 h-12 rounded-full object-cover">
                    </button>

                    {{-- Dropdown menu --}}
                    <div x-show="open" @click.outside="open=false"
                        class="bg-white shadow-lg absolute top-12 right-8 rounded-lg overflow-hidden font-light">
                        <p class="pl-7 mt-4 border-b border-gray-200 pb-2">{{ auth()->user()->username }}</p>
                        <a href="{{ route('dashboard') }}"
                            class="block hover:bg-slate-100 pl-6 pr-8 py-2 mb-3 font-bold">Dashboard</a>

                     {{-- Logout Button --}}
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit"
                                class="block w-full text-left hover:bg-slate-100 pl-6 pr-8 py-2 mb-3 font-bold">Logout</button>
                        </form>
                    </div>
                </div>
            @endauth

            @guest
                <!-- Right side -->
                <div class="flex items-center gap-4">
                    <a href="{{ route('login') }}" class="nav-link">Login</a>
                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                </div>
            @endguest
        </div>
    </header>
    <main class="py-8 px-4 max-w-s">
        {{ $slot }}
    </main>
</body>

</html>
