<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Report Produk</title>
</head>

<body>
    <h3>Report Data Produk</h3>
    </hr>
    <table class="table table-bordered" style="width:100%">
        <thead>
            <tr>
                <td bgcolor="cyan" width="5%">No</td>
                <td bgcolor="cyan">Name</td>
                <td bgcolor="cyan">Gambar</td>
                <td bgcolor="cyan">Harga</td>
                <td bgcolor="cyan">Stok</td>
                <td bgcolor="cyan">Jenis</td>
                <td bgcolor="cyan">Satuan Hitung</td>
                <td bgcolor="cyan">Deskripsi</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($R_produk as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->gambar }}</td>
                    <td>Rp. {{ $row->harga }}</td>
                    <td>{{ $row->stok }}</td>
                    <td>{{ $row->jenis }}</td>
                    <td>{{ $row->satuan_hitung }}</td>
                    <td>{{ $row->deskripsi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p align="right">
        Date : {{ $row->created_at }} </br>
        Personal In Charge</br>

        @if (Auth::check())
            <span class="hidden-xs" fontsize=15>{{ Auth::user()->level }}</span>
        @endif
        </br>
        </br>

        </br>
        </br>
        @if (Auth::check())
            <span class="hidden-xs">({{ Auth::user()->name }})</span>
        @endif
</body>

</html>
