{{-- Fajar Arrohman Nur S 6706223015 --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Registrasi User') }}
        </h2>
    </x-slot>

    <form action="{{ route('user.storePengguna') }}" method="POST" class="py-12">
        @csrf
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="border-collapse table-fixed w-full text-md items-center">
                        <tr>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-3 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                Username</th>
                            <td
                                class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                <!-- Name -->
                                <div>
                                    <x-text-input id="username" class="block mt-1 w-full" type="text"
                                        name="username" :value="old('username')" required autofocus autocomplete="username" />
                                    <x-input-error :messages="$errors->get('username')" class="mt-2" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-3 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                Fullname</th>
                            <td
                                class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                <!-- fullname -->
                                <div class="">
                                    <x-text-input id="fullname" class="block mt-1 w-full" type="text"
                                        name="fullname" :value="old('fullname')" required autofocus autocomplete="fullname" />
                                    <x-input-error :messages="$errors->get('fullname')" class="mt-2" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-3 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                Email</th>
                            <td
                                class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                <!-- Email Address -->
                                <div class="">
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                        :value="old('email')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-3 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                Password</th>
                            <td
                                class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                <!-- Password -->
                                <div class="">
                                    <x-text-input id="password" class="block mt-1 w-full" type="password"
                                        name="password" required autocomplete="new-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-3 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                Confirm Password</th>
                            <td
                                class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                <!-- Confirm Password -->
                                <div class="">
                                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                        name="password_confirmation" required autocomplete="new-password" />

                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-3 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                Address</th>
                            <td
                                class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                <!-- address -->
                                <div class="">
                                    <x-text-input id="address" class="block mt-1 w-full" type="text" name="address"
                                        :value="old('address')" required autofocus autocomplete="address" />
                                    <x-input-error :messages="$errors->get('address')" class="mt-2" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-3 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                BirthDate</th>
                            <td
                                class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                <!-- birthdate -->
                                <div class="">
                                    <x-text-input id="birthdate" class="block mt-1 w-full" type="date"
                                        name="birthdate" :value="old('birthdate')" required autofocus
                                        autocomplete="birthdate" />
                                    <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
                                </div>

                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-3 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                Phone Number</th>
                            <td
                                class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                <!-- phoneNumber -->
                                <div class="">

                                    <x-text-input id="phoneNumber" class="block mt-1 w-full" type="tel"
                                        name="phoneNumber" :value="old('phoneNumber')" required autofocus
                                        autocomplete="phoneNumber" />
                                    <x-input-error :messages="$errors->get('phoneNumber')" class="mt-2" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-3 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                Religion</th>
                            <td
                                class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                {{-- agana --}}
                                <div class="">

                                    <x-text-input id="agama" class="block mt-1 w-full" type="text" name="agama"
                                        :value="old('agama')" required autofocus autocomplete="agama" />
                                    <x-input-error :messages="$errors->get('agama')" class="mt-2" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-3 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                Gender</th>
                            <td
                                class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                {{-- jenis kelamin --}}
                                <div class="">
                                    <select name="jeniskelamin"
                                        class="w-full mt-2 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                        <option disabled selected>Pilih Jenis Kelamin</option>
                                        <option value="0" {{ old('jeniskelamin') == '0' ? 'selected' : '' }}>Pria
                                        </option>
                                        <option value="1" {{ old('jeniskelamin') == '1' ? 'selected' : '' }}>
                                            Wanita</option>
                                    </select>
                                </div>
                            </td>
                        </tr>

                    </table>
                    <div class="flex justify-end pt-6 pr-9">
                        <x-primary-button class="ml-4">
                            {{ __('Register User') }}
                        </x-primary-button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
