@props(['post', 'full' => false])

<div class="card mx-auto mt-4 ">
    {{-- Title --}}
    <h2 class='font-bold text-xl'>{{ $post->title }}</h2>
    {{-- Author and Date --}}
    <div class="font-xs text-light mb-4">
        <span>Posted {{ $post->created_at->diffForHumans() }} By</span>
        <a href="{{ route('posts.user', $post->user->id) }}"
            class="text-blue-500 font-medium">{{ $post->user->username }}</a>
    </div>
    {{-- Body --}}
    @if ($full)
      <div class="text-sm">
            <span>{{ $post->body }}</span>
        </div>
    @else
        <div class="text-sm">
            <span>{{ Str::words($post->body, 15) }}</span>
            <a href="{{ route('posts.show', $post) }}" class="text-blue-500 ml-2">Read more &rarr;</a>
        </div>
  @endif
  <div class="flex item-center justify-end gap-4 mt-6" >
    {{ $slot }}
  </div>
</div>
