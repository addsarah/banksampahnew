<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Report Pesanan</title>
</head>

<body>
    <h3>Report Data Pesanan</h3>
    </hr>
    <table border="1" style="width:100%">
        <thead>
            <tr>
                <td bgcolor="cyan" width="5%">No</td>
                <td bgcolor="cyan">Nama Nasabah</td>
                <td bgcolor="cyan">Nama Produk</td>
                <td bgcolor="cyan">Jumlah Unit</td>
                <td bgcolor="cyan">Total Harga</td>
                <td bgcolor="cyan">Alamat Jemput</td>
                <td bgcolor="cyan">Tanggal</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($R_pesanan as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->nasabah->nama_nasabah }}</td>
                    <td>{{ $row->produk->nama }}</td>
                    <td>{{ $row->jumlah }}</td>
                    <td>{{ $row->total_harga }}</td>
                    <td>{{ $row->alamat_jemput }}</td>
                    <td>{{ $row->created_at }}</td>
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
