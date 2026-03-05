<x-layout>
   <h1 class="title">Latest Posts</h1>

<div class="grid grid-cols-3 gap-3">

   @foreach ($posts as $post )
   <div class="card mx-auto mt-4">
    {{-- Title --}}
       <h2 class='font-bold text-xl'>{{$post->title}}</h2>
    {{-- Author and Date --}}
       <div class="font-xs text-light mb-4">
        <span>Posted {{$post->created_at->diffForHumans()}} By</span>
        <a href="" class="text-blue-500 font-medium">USERNAME</a>
       </div>
    {{-- Body --}}
         <p>{{Str::words($post->body, 15)}}</p>
   </div>
   @endforeach
</div>   
</x-layout>
