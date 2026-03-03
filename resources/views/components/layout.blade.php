<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 text-slate-900">
  <header class="bg-slate-800 shadow-lg">
  <div class="max-w-7xl mx-auto px-4 flex justify-between items-center py-3">
    <!-- Left side -->
    <nav class="flex items-center gap-4">
      <a href="{{ route('home') }}" class="nav-link">Home</a>
      <a href="#" class="nav-link">About</a>
    </nav>

    <!-- Right side -->
    <div class="flex items-center gap-4">
      <a href="{{ route('login') }}" class="nav-link">Login</a>
      <a href="{{ route('register') }}" class="nav-link">Register</a>
    </div>
  </div>
</header>
  <main class="py-8 px-4 max-w-s">
    {{ $slot }}
  </main>
</body>
</html>