<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Pengembalian Detil Transaksi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        {{-- Fajar arrohman NS 6706223015 --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($errors->any())
                        <div class="alert alert-success">
                            <div class="row form-inline" onclick="$(this).parent().remove();">
                                <ul>
                                    @foreach ($errors->all as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <span class="label"><strong>X</strong></span>
                            </div>
                        </div>
                    @endif
                    <form method="POST" action="{{ url('detailTransactionUpdate') }}">
                        @csrf
                        <div>
                            <x-input-label for="idTransaksi" :value="__('ID Transaksi')" />

                            <x-text-input id="idTransaksi" class="block mt-1 w-full" type="text" name="idTransaksi"
                                :value="old('idTransaksi')" autocomplete="off" value="{{ $detailTransaction->idTransaksi }}"
                                readonly />

                            <x-input-error :messages="$errors->get('idTransaksi')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="idDetailTransaksi" :value="__('ID Detail Transaksi')" />

                            <x-text-input id="idDetailTransaksi" class="block mt-1 w-full" type="text"
                                name="idDetailTransaksi" :value="old('idDetailTransaksi')" autocomplete="off"
                                value="{{ $detailTransaction->id }}" readonly />

                            <x-input-error :messages="$errors->get('idDetailTransaksi')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="idPeminjam" :value="__('Peminjam')" />

                            <x-text-input id="idPeminjam" class="block mt-1 w-full" type="text" name="idPeminjam"
                                :value="old('idPeminjam')" autocomplete="off" value="{{ $detailTransaction->namaPeminjam }}"
                                disabled />

                            <x-input-error :messages="$errors->get('idPeminjam')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="idPetugas" :value="__('Petugas')" />

                            <x-text-input id="idPetugas" class="block mt-1 w-full" type="text" name="idPetugas"
                                :value="old('idPetugas')" autocomplete="off" value="{{ $detailTransaction->namaPetugas }}"
                                disabled />

                            <x-input-error :messages="$errors->get('idPetugas')" class="mt-2" />
                        </div>

                        <div>
                            <input type="hidden" name="idKoleksi" value="{{ $detailTransaction->idKoleksi }}">
                            <x-input-label for="koleksi" :value="__('Koleksi')" />

                            <x-text-input id="koleksi" class="block mt-1 w-full" type="text" name="koleksi"
                                :value="old('koleksi')" autocomplete="off" value="{{ $detailTransaction->koleksi }}"
                                disabled />

                            <x-input-error :messages="$errors->get('koleksi')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="status" :value="__('Status')" />

                            <select id="status" name="status" class="form-select" required>
                                <option value="1" @if (old('status', $detailTransaction->status) == 1) selected @endif>Pinjam</option>
                                <option value="2" @if (old('status', $detailTransaction->status) == 2) selected @endif>Kembali
                                </option>
                                <option value="3" @if (old('status', $detailTransaction->status) == 3) selected @endif>Hilang</option>
                            </select>

                            <x-input-error :messages="$errors->get('status')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button type="reset" class="ml-4">
                                {{ __('Reset') }}
                            </x-primary-button>

                            <x-primary-button class="ml-4">
                                {{ __('Ok') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
