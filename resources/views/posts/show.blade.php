<x-app-layout>
    <div class="py-5">
        <div class="container max-w-2xl mx-auto sm:px-6 lg:px-8">
            <h1 class="antialiased text-2xl">{{ $post->title }}</h1>
            <div class="flex justify-between">
                <small>{{ \Carbon\Carbon::parse($post->updated_at)->format('jS M, Y') }} on <a
                        href="{{ route('posts.user.show', $post->user->username) }}"
                        class="text-blue-600">{{ $post->user->username }}'s blog</a></small>
                @can('owner', $post)
                    <div>
                        <a href="{{ route('posts.edit', $post->slug) }}" class="text-blue-600 px-3">Edit</a>
                        <form action="{{ route('posts.destroy', $post->slug) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600"
                                onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                @endcan
            </div>
            <hr>
            <div class="py-5 break-all">
                {!! \Illuminate\Support\Str::markdown($post->content) !!}
            </div>
        </div>
</x-app-layout>
