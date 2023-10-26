{{-- FAJAR ARROHMAN NUR SAHAB --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Info Pengguna') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('user.updatePengguna') }}" method="POST"
                    class="p-6 text-gray-900 dark:text-gray-100">
                    @csrf
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <table class="border-collapse table-fixed w-full text-md">
                        <tr>

                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                Full Name</th>
                            <td
                                class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                <div>
                                    <x-text-input id="fullname" class="block mt-1 w-full" type="text"
                                        name="fullname" :value="old('fullname', $user->fullname)" required autofocus autocomplete="fullname" />
                                    <x-input-error :messages="$errors->get('fullname')" class="mt-2" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                Email</th>
                            <td
                                class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                <div>
                                    <x-text-input id="email" class="block mt-1 w-full" type="text" name="email"
                                        :value="old('email', $user->email)" required autofocus autocomplete="email" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                username</th>
                            <td
                                class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                <div>
                                    <x-text-input id="username" class="block mt-1 w-full" type="text"
                                        name="username" :value="old('username', $user->username)" required autofocus autocomplete="username" />
                                    <x-input-error :messages="$errors->get('username')" class="mt-2" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                Alamat</th>
                            <td
                                class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                <div>
                                    <x-text-input id="address" class="block mt-1 w-full" type="text" name="address"
                                        :value="old('address', $user->address)" required autofocus autocomplete="address" />
                                    <x-input-error :messages="$errors->get('address')" class="mt-2" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                No.Phone</th>
                            <td
                                class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                <div>
                                    <x-text-input id="phoneNumber" class="block mt-1 w-full" type="tel"
                                        name="phoneNumber" :value="old('phoneNumber', $user->phoneNumber)" required autofocus
                                        autocomplete="phoneNumber" />
                                    <x-input-error :messages="$errors->get('phoneNumber')" class="mt-2" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                Tanggal lahir</th>
                            <td
                                class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                <div>
                                    <x-text-input id="birthdate" class="block mt-1 w-full" type="date"
                                        name="birthdate" :value="old('birthdate', $user->birthdate)" required autofocus
                                        autocomplete="birthdate" />
                                    <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                Agama</th>
                            <td
                                class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                <div>
                                    <x-text-input id="agama" class="block mt-1 w-full" type="text" name="agama"
                                        :value="old('agama', $user->agama)" required autofocus autocomplete="agama" />
                                    <x-input-error :messages="$errors->get('agama')" class="mt-2" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                Jenis Kelamin</th>
                            <td
                                class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                <div>
                                    <select name="jeniskelamin"
                                        class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                        <option disabled selected>Pilih Jenis Kelamin</option>
                                        <option value="0" {{ $user->jeniskelamin == '0' ? 'selected' : '' }}>
                                            Pria
                                        </option>
                                        <option value="1" {{ $user->jeniskelamin == '1' ? 'selected' : '' }}>
                                            Wanita</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="flex justify-end pt-6 pr-9">
                        <x-primary-button class="ml-4">
                            {{ __('Update Collection') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
