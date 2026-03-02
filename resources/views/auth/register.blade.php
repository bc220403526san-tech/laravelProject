<x-layout>
    <h1>Welcome to register page.</h1>

    <div class="mx-auto max-w-screen-sm card flex items-center justify-center bg-white p-8 rounded-lg shadow-lg">
    <form action="{{ route('register') }}" method="POST" class="space-y-4 w-full max-w-md">
        @csrf
        <!-- Username Input -->
        <div>
            <label for="username" class="block text-gray-700 mb-1">Username</label>
            <input 
                type="text" 
                id="username" 
                name="username" 
                placeholder="Enter your name" 
                class="w-100 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                required
            >
        </div>

        <!-- Email Input -->
        <div>
            <label for="email" class="block text-gray-700 mb-1">Email</label>
            <input 
                type="email" 
                id="email" 
                name="email" 
                placeholder="Enter your email" 
                class="w-100 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                required
            >
        </div>

        <!-- Password Input -->
        <div>
            <label for="password" class="block text-gray-700 mb-1">Password</label>
            <input 
                type="password" 
                id="password" 
                name="password" 
                placeholder="Enter your password" 
                class="w-100 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                required
            >
        </div>
        <!-- Confirm Password -->
        <div>
            <label for="password-confirmation" class="block text-gray-700 mb-1">Confirm Password</label>
            <input 
                type="password" 
                id="password" 
                name="password-confirmation" 
                placeholder="Re-enter your password"
                class="w-100 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                required
            >
        </div>

        <!-- Submit Button -->
        <button 
            type="submit" 
            class="w-s bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition-colors font-semibold"
        >
            Register
        </button>
    </form>
</div>
</x-layout>