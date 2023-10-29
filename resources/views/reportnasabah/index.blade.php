@extends('admin.admin_master')

@section('title')
    Report Data Nasabah
@endsection

@section('admin.index')
    <section class="content">
        <div class="col">
            <div class="col-md-12">
                <div class="box-header with-border">
                    <a target="_blank" href="{{ route('cetak_nasabah') }}" class="btn btn-danger float-left"><i
                    class="fas fa-print"></i> Print PDF</a>
            <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Nomor Telepon</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($nasabah as $row)
                            <tr>
                                <td>{{ $loop->iteration + $nasabah->perpage() * ($nasabah->currentPage() - 1) }}</td>
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
                {{ $nasabah->appends(Request::all())->links() }}
            </div>
        </div>
    </section>
@endsection
