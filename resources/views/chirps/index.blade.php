<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('chirps') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

        <form method="POST" action="{{route('chirps.store')}}">
            @csrf
            <textarea name="message"
            class="w-full h-24 text-gray-900 dark:text-gray-100 bg-gray-100 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 rounded-lg py-3 px-4 mb-3 resize-none"
            placeholder="{{ __('What\'s on your mind?') }}"
            >{{old('message')}}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2"/>
            <x-primary-button type="submit" class="mt-4">Chirp</x-primary-button>
        </form>
            </div>
            </div>


            {{-- <div class="mt-6 bg-gray-200 dark:bg-blue-800 shadow-lg rounded-lg divide-y dark:divide-gray-900 transition-colors duration-500 ease-in-out">
            <div class="p-6 flex space-x-2">
            <svg class="h-6 w-6 text-gray-900 dark:text-gray-100 -scale-x-100" stroke-with="1.5" >
            </div>

            </div> --}}
    </div>
</x-app-layout>
