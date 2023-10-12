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
                    <div class=" mt-6  relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    //fajar arrohman nur sahab 6706223015
                                    <th scope="col" class="px-6 py-3">
                                        No
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Full Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Username
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Address
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Phone Number
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Birthdate
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Agama
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Gender
                                    </th>
                                    <th colspan="2" scope="col" class="px-6 py-3 text-center">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="w-4 p-4">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                                            {{ $user->fullname }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $user->email }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $user->username }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $user->address }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $user->phonenumber }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $user->birthdate }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $user->agama }}
                                        </td>
                                        <td class="px-6 py-4">
                                            @if ($user->jenisKelamin == 0)
                                                <span>Pria</span>
                                            @else
                                                <span>Wanita</span>
                                            @endif
                                        </td>
                                        <td colspan="2" class="flex items-center justify-center gap-4 px-6 py-4">
                                            <button
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</button>
                                            <form action="{{ route('user.infoPengguna', $user->id) }}">
                                                <button type="submit"
                                                    class="font-medium text-green-600 dark:text-green-500 hover:underline">View</button>
                                            </form>
                                            <button href="#"
                                                class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
