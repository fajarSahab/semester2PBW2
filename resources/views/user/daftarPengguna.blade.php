<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('user.registrasi') }}"> <x-primary-button class="ml-4">
                            {{ __('Register') }}
                        </x-primary-button></a>
                    <div class=" mt-6  relative overflow-x-auto shadow-md sm:rounded-lg text-yellow-100">
                        {{ $dataTable->table() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
    @endpush
</x-app-layout>
