<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <tr>
                                    <th class="p-4">Full Name</th>
                                    <td class="p-4">{{ $user->fullName }}</td>
                                </tr>
                                <tr>
                                    <th class="p-4">Email</th>
                                    <td class="p-4">{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <th class="p-4">Username</th>
                                    <td class="p-4">{{ $user->username }}</td>
                                </tr>
                                <tr>
                                    <th class="p-4">Address</th>
                                    <td class="p-4">{{ $user->address }}</td>
                                </tr>
                                <tr>
                                    <th class="p-4">Phone Number</th>
                                    <td class="p-4">{{ $user->phoneNumber }}</td>
                                </tr>
                                <tr>
                                    <th class="p-4">Birthdate</th>
                                    <td class="p-4">{{ $user->birthdate }}</td>
                                </tr>
                                <tr>
                                    <th class="p-4">Agama</th>
                                    <td class="p-4">{{ $user->agama }}</td>
                                </tr>
                                <tr>
                                    <th class="p-4">Gender</th>
                                    <td class="p-4"> @if (   $user->jenisKelamin == 0 )
                                        <span>Pria</span>  
                                      @else
                                          <span>Wanita</span>
                                      @endif</td>
                                      //fajar arrohman nur sahab 6706223015
                                </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
