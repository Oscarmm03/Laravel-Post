@props(['post'])
<article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
    @if ($post->image)
        <img class="w-full h-72 object-cover object-center" src="{{ asset (Storage::url($post->image->url) )}}" alt="">
    @else
        <img class="w-full h-72 object-cover object-center" src="https://cdn.pixabay.com/photo/2017/02/14/19/16/php-2066704_1280.jpg" alt="">
    @endif
    <div class="px-6 py-4 flex flex-col justify-between">
        <h1 class="text-2xl font-bold mb-2">
            <a href="{{ route('posts.show', $post) }}">{{ $post->name }}</a>
        </h1>
        <div class="text-base text-gray-700 mb-2">
            {!! $post->extract !!}
        </div>
        <div class="text-gray-500 text-sm flex justify-between items-center">
            <div>
                @foreach ($post->tags as $tag)
                    <a href="{{ route('posts.tag', $tag) }}"
                        class="inline-block bg-gray-400 rounded-full px-3 py-1 text-sm text-white mr-2">{{ $tag->name }}</a>
                @endforeach
            </div>
            <span>Date: {{ $post->created_at->format('d/m/Y') }}</span>
        </div>
</article>