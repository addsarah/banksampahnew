<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Report Nasabah</title>
</head>

<body>
    <h3>Report Data Nasabah</h3>
    </hr>
    <table border="1" style="width:100%">
        <thead>
            <tr>
                <td bgcolor="cyan" width="5%">No</td>
                <td bgcolor="cyan">Nama</td>
                <td bgcolor="cyan">Email</td>
                <td bgcolor="cyan">Nomor Telepon</td>
                <td bgcolor="cyan">Jenis Kelamin</td>
                <td bgcolor="cyan">Alamat</td>
                <td bgcolor="cyan">Tanggal</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($R_nasabah as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->nama_nasabah }}</td>
                    <td>{{ $row->email_nasabah }}</td>
                    <td>{{ $row->nomor_telepon }}</td>
                    <td>{{ $row->jenis_kelamin }}</td>
                    <td>{{ $row->alamat }}</td>
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
