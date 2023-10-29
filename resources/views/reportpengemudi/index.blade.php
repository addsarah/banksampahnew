@extends('admin.admin_master')

@section('title')
    Report Data Pengemudi
@endsection

@section('admin.index')
    <section class="content">
        <div class="col">
            <div class="col-md-12">
                {{--  fungsi add atau tambah --}}
                <div class="box-header with-border">
                    <a target="_blank" href="{{ route('cetak_pengemudi') }}" class="btn btn-danger float-left"><i
                    class="fas fa-print"></i> Print PDF</a>
            <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Email</th>
                            <th>Nomor Telepon</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Jenis Kendaraan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengemudi as $row)
                            <tr>
                                <td>{{ $loop->iteration + $pengemudi->perpage() * ($pengemudi->currentPage() - 1) }}</td>
                                <td>{{ $row->nama_pengemudi }}</td>
                                <td>{{ $row->jenis_kelamin }}</td>
                                <td>{{ $row->email_pengemudi }}</td>
                                <td>{{ $row->nomor_telepon }}</td>
                                <td>{{ $row->tanggal_lahir }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td>{{ $row->jenis_kendaraan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $pengemudi->appends(Request::all())->links() }}
            </div>
        </div>
    </section>
@endsection
