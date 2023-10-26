<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>

<body>
    <form method="POST" action="{{ url('koleksiUpdate') }}">
        @csrf
        <div class="row from-group">
            <label class="form-label">ID Koleksi</label>
            <input id="id" name="id" type="text" class="form-control" autocomplete="off"
                value="{{ $collection->id }}" readonly>
        </div>
        <div class="row form-group">
            <label class="form-label">Judul Koleksi*</label>
            <input id="id" name="namaKoleksi" type="text" class="form-control" autocomplete="off"
                value="{{ $collection->namaKoleksi }}">
        </div>
        <div class="row form-group">
            <label class="form-label">Jenis*</label>
            <select name="jenisKoleksi" id="jenisKoleksi" class="form-select" required>
                <option value="-1" @if (old('jenisKoleksi', $collection->jenisKoleksi) == -1) selected @endif>Pilih Satu</option>
                <option value="1" @if (old('jenisKoleksi', $collection->jenisKoleksi) == 1) selected @endif>Buku</option>
                <option value="2" @if (old('jenisKoleksi', $collection->jenisKoleksi == 2)) selected @endif>Majalah</option>
                <option value="3" @if (old('jenisKoleksi', $collection->jenisKoleksi) == 3) selected @endif>Cakram Digital</option>
            </select>
        </div>
        <div class="row form-group">
            <label class="form-label">Jumlah Koleksi*</label>
            <input type="text" id="jumlahAwal" name="jumlahKoleksi" class="form-control" autocomplete="off"
                value="{{ old('nama', $collection->jumlahKoleksi) }}" readonly>
        </div>
        <div class="row form-group">
            <div class="col-md-8">
                <button class="btn btn-primary buttonConf" id="buttSubmit" type="submit">Ok</button>
                <button type="reset" class="btn btn-danger buttonConf">Reset</button>
            </div>
        </div>
        <div class="flex justify-end pt-6 pr-9">
            <x-primary-button class="ml-4">
                {{ __('Update Collection') }}
            </x-primary-button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
