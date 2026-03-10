<x-layout>
    <a href="{{ route('dashboard')}}" class="block mb-2 text-xs text-blue-500 text-center">&larr; Go back to your dashboard</a>
    <div class="card mx-auto mt-4 mb-4">
        <h2 class="font-bold mb-4 text-center">Update Your Post</h2>
        <form action="{{ route('posts.update', $post) }}" method="post">
            @csrf
            @method('PUT')
            {{-- Post Title --}}
            <div class="mb-4">
                <label for="title" class="block text-gray-700 mb-1">Post Title</label>
                <input type="text" id="title" name="title" value="{{ $post->title }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 
                    {{ $errors->has('title') ? 'border-red-500 ring-red-500' : 'border-gray-300' }}">
                @error('title')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            {{-- Post Body --}}
            <div>
                <label for="body" class="block text-gray-700 mb-1">Post Content</label>
                <textarea name="body" rows="5"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 
                    {{ $errors->has('body') ? 'border-red-500 ring-red-500' : 'border-gray-300' }}">{{ $post->body }}</textarea>

                @error('body')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            {{-- Submit Button --}}
            <button
                class="mt-3 w-full bg-black text-white py-2 px-4 rounded-md hover:bg-gray-800 transition-colors font-semibold">
               Update
            </button>
        </form>
    </div>
</x-layout>
