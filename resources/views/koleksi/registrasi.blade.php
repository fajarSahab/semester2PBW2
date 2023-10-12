<x-guest-layout>
    <form method="POST" action="{{ route('koleksi.storeKoleksi') }}">
        @csrf

        <!-- Username -->
        <div>
            <x-input-label for="namaKoleksi" :value="__('Nama Koleksi')" />
            <x-text-input id="namaKoleksi" class="block mt-1 w-full" type="text" name="namaKoleksi" :value="old('namaKoleksi')"
                required autofocus autocomplete="namaKoleksi" />
            <x-input-error :messages="$errors->get('namaKoleksi')" class="mt-2" />
        </div>

        <!-- Fullname -->
        <div class="mt-4">
            <x-input-label for="jenisKoleksi" :value="__('Jenis Koleksi')" />
            <div>
                <label for="0" class="text-black">Buku</label>
                <input id="jenisKoleksi" type="radio" name="jenisKoleksi" required value="1" />
            </div>
            <div>
                <label for="1" class="text-black">Majalah</label>
                <input id="jenisKoleksi" type="radio" name="jenisKoleksi" required value="2" />
            </div>
            <div>
                <label for="1" class="text-black">Cakram Digital</label>
                <input id="jenisKoleksi" type="radio" name="jenisKoleksi" required value="3" />
            </div>
            <x-input-error :messages="$errors->get('jenisKoleksi')" class="mt-2" />
        </div>
        //fajar arrohman nur sahab 6706223015
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="jumlahKoleksi" :value="__('Jumlah Koleksi')" />
            <x-text-input id="jumlahKoleksi" class="block mt-1 w-full" type="number" name="jumlahKoleksi"
                :value="old('jumlahKoleksi')" required autocomplete="jumlahKoleksi" />
            <x-input-error :messages="$errors->get('jumlahKoleksi')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
