{{-- //Fajar arrohman NS 6706223015 --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Transaksi') }}
        </h2>
    </x-slot>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.yajra-datatable-transactions').DataTable({
                ajax: '{{ url('getAllTransactions') }}',
                serverSide: false,
                processing: true,
                deferRender: true,
                type: 'GET',
                destroy: true,
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'userIdPeminjam',
                        name: 'peminjam'
                    },
                    {
                        data: 'userIdPetugas',
                        name: 'petugas'
                    },
                    {
                        data: 'tanggalPinjam',
                        name: 'tanggalPinjam'
                    },
                    {
                        data: 'tanggalSelesai',
                        name: 'tanggalSelesai'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });
        });
    </script>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <table class="table table-bordered yajra-datatable-transactions">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Peminjam</th>
                                    <th>Petugas</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
