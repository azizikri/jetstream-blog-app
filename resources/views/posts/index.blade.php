<x-app-layout>
    <div class="pt-10">
        <h1 class="antialiased text-center text-2xl">Blog</h1>
    </div>

    <div class="py-5">
        <div class="max-w-2xl mx-auto px-5 sm:px-6 md:px-6 lg:px-8">
            <hr>
            <div class="relative overflow-x-auto py-5">
                @forelse ($posts as $post)
                    <div class="flex py-2">
                        <div>
                            <small>{{ \Carbon\Carbon::parse($post->updated_at)->format('jS M, Y') }}</small>
                            <a href="{{ route('posts.show', [$post->user->username, $post->slug]) }}" class="text-blue-600 break-all">
                                <p>{{ $post->title }}</p>
                            </a>
                        </div>
                    </div>
                @empty
                    <p class="text-center">No posts yet.</p>
                @endforelse
            </div>
            {{ $posts->links('vendor.pagination.tailwind') }}
        </div>
    </div>
</x-app-layout>
