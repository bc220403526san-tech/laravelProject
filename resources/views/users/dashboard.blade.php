<x-layout>

    <h1 class="title">Welcome {{ auth()->user()->username }},
        You have {{ $posts->total() }} posts.
    </h1>


    <div class="card mx-auto mt-4 mb-4">
        <h2 class="font-bold mb-4">Create a new Post</h2>

        {{-- Session Messages --}}
        @if (session('success'))
            <div class="mb-3 text-green-100 font-sm">
                <x-flashMsg msg="{{ session('success') }}" bg="bg-yellow-500" />
            </div>
        @elseif (session('delete'))
            <div class="mb-3 text-green-100 font-sm">
                <x-flashMsg msg="{{ session('delete') }}" bg="bg-red-500" />
            </div>
        @endif

        <form action="{{ route('posts.store') }}" method="post">
            @csrf
            {{-- Post Title --}}
            <div class="mb-4">
                <label for="title" class="block text-gray-700 mb-1">Post Title</label>
                <input type="text" id="title" name="title" value="{{ old('title') }}"
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
                    {{ $errors->has('body') ? 'border-red-500 ring-red-500' : 'border-gray-300' }}">{{ old('body') }}</textarea>

                @error('body')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            {{-- Submit Button --}}
            <button
                class="mt-3 w-full bg-black text-white py-2 px-4 rounded-md hover:bg-gray-800 transition-colors font-semibold">
                Create
            </button>
        </form>
    </div>

    {{-- User Posts --}}
    <h2 class="font-bold mb-4 max-w-6xl mx-6 my-8">Your Latest Posts</h2>
    <div class="grid grid-cols-3 gap-3 ">
        @foreach ($posts as $post)
            <x-postCard :post="$post">
                {{-- Update Post --}}
                <a href="{{ route('posts.edit', $post) }}"
                    class="bg-green-500 text-white px-2 py-1 text-xs rounded-md">Update</a>
                {{-- Delete Post --}}
                <form action=" {{ route('posts.destroy', $post) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 text-white px-2 py-1 text-xs rounded-md">Delete</button>
                </form>
            </x-postCard>
        @endforeach
    </div>


    <div>
        {{ $posts->links() }}
    </div>

</x-layout>
