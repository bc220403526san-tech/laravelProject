<x-layout>
    <h1 class="font-bold">Welcome Back</h1>

    <div class="mx-auto max-w-screen-sm card flex items-center justify-center bg-white p-8 rounded-lg shadow-lg">
        <form action="{{ route('login') }}" method="POST" class="space-y-4 w-full max-w-md">
            @csrf
            <!-- Email Input -->
            <div>
                <label for="email" class="block text-gray-700 mb-1">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 
                    {{ $errors->has('email') ? 'border-red-500 ring-red-500' : 'border-gray-300' }}">
                @error('email')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password Input -->
            <div>
                <label for="password" class="block text-gray-700 mb-1">Password</label>
                <input type="password" id="password" name="password"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                    {{ $errors->has('password') ? 'border-red-500 ring-red-500' : 'border-gray-300' }}">
                @error('password')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>


            <!-- Remember Me Checkbox -->
            <div class="flex items-center">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember Me</label>
            </div>
            @error('failed')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
    
            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition-colors font-semibold">
                Login
            </button>
        </form>
    </div>
</x-layout>
