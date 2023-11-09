{{-- FAJAR ARROHMAN NUR SAHAB 6706223015 --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Registrasi Koleksi') }}
        </h2>
    </x-slot>

    <form action="{{ route('koleksi.storeKoleksi') }}" method="POST" class="py-12">
        @csrf
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <table class="border-collapse table-fixed w-full text-md items-center">
                        <tr>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-3 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                Nama Koleksi</th>
                            <td
                                class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                <!-- Nama Kolkesi -->
                                <div>
                                    <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama"
                                        :value="old('nama')" required autofocus autocomplete="nama" />
                                    <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-3 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                Jenis Koleksi</th>
                            <td
                                class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                <!-- Jenis Kolkesi -->
                                <div>
                                    <select name="jenis"
                                        class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                        <option disabled selected>Pilih Jenis Koleksi</option>
                                        <option value="1" {{ old('jenis') == '1' ? 'selected' : '' }}>
                                            Buku
                                        </option>
                                        <option value="2" {{ old('jenis') == '2' ? 'selected' : '' }}>
                                            Majalah</option>
                                        <option value="3" {{ old('jenis') == '3' ? 'selected' : '' }}>
                                            Cakram Digital</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-3 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                Jumlah Koleksi</th>
                            <td
                                class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                <!-- Jumlah Kolkesi -->
                                <div>
                                    <x-input-label for="jumlahAwal" :value="__('Jumlah')" />

                                    <x-text-input id="jumlahAwal" class="block mt-1 w-full" type="number"
                                        name="jumlahAwal" :value="old('jumlahAwal')" min="1" required />

                                    <x-input-error :messages="$errors->get('jumlahAwal')" class="mt-2" />
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="flex justify-end pt-6 pr-9">
                        <x-primary-button class="ml-4">
                            {{ __('Register Collection') }}
                        </x-primary-button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
