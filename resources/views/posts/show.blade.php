<x-app-layout>
    <div class="py-5">
        <div class="container max-w-2xl mx-auto sm:px-6 lg:px-8">
            <h1 class="antialiased text-2xl">{{ $post->title }}</h1>
            <small>{{ \Carbon\Carbon::parse($post->updated_at)->format('jS M, Y') }} on <a href="{{ route('posts.user.show', $post->user->username) }}"
                    class="text-blue-600">{{ $post->user->username }}'s blog</a></small>
            <hr>
            <div class="py-5">
                {{-- <p class="text-base break-all font-light leading-relaxed mt-0 mb-4 text-gray-800"> --}}
                    <x-markdown class="break-all">
                        {{ $post->content }}
                    </x-markdown>
                {{-- </p> --}}
            </div>
        </div>
</x-app-layout>
