@extends('layouts.app')



@section('content')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable({
                ajax: '{{ url('getAllCollections') }}',
                a
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
                        data: 'judul',
                        name: 'judul'
                    },
                    {
                        data: 'jenis',
                        name: 'jenis'
                    },
                    {
                        data: 'jumlah',
                        name: 'jumlah'
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

    <body>
        <div class="container-fluid">
            <nav aria-label="breadcrumb" class="navbar navbar-expand-lg navbar-light">
                <ol class="breadcrumb primary-color">
                    <li class="breadcrumb-item">
                        <a class="white-text" href="{{ url('/dashboardE') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Daftar Koleksi</li>
                </ol>
            </nav>
            <div>
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Jenis</th>
                            <th>Jumlah</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
@endsection
