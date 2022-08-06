<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg px-4 py-4">
                    <x-jet-validation-errors class="mb-4" />

                    <form method="POST" action="{{ route('posts.store') }}" id="createPostForm">
                        @csrf
                        <div>
                            <x-jet-label for="title" value="{{ __('Title') }}" />
                            <x-jet-input id="title" class="block mt-1 w-full" type="text" name="title"
                                :value="old('name')" required autofocus autocomplete="name" />
                        </div>

                        <div>
                            <x-jet-label for="name" value="{{ __('Name') }}" />
                            <input type="hidden" name="content" id="content">
                            <x-forms.toast-editor/>
                        </div>


                        <div class="flex mt-4">
                            <x-jet-button>
                                {{ __('Save Post') }}
                            </x-jet-button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

