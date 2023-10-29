@extends('admin.admin_master')

@section('title')
    All Pesanan
@endsection

@section('admin.index')
    <section class="content">
        <div class="col">
            <div class="col-md-12">
                {{--  fungsi add atau tambah --}}
                <div class="box-header with-border">
                    <a target="_blank" href="{{ route('cetak_pesanan') }}" class="btn btn-danger float-left"><i
                        class="fas fa-print"></i> Print PDF</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Nasabah</th>
                            <th>Nama Produk</th>
                            <th>Jumlah Unit</th>
                            <th>Total Harga</th>
                            <th>Alamat Jemput</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pesanan as $row)
                            <tr>
                                <td>{{ $loop->iteration + $pesanan->perpage() * ($pesanan->currentPage() - 1) }}</td>
                                <td>{{ $row->nasabah->nama_nasabah }}</td>
                                <td>{{ $row->produk->nama }}</td>
                                <td>{{ $row->jumlah }}</td>
                                <td>Rp. {{ $row->total_harga }}</td>
                                <td>{{ $row->alamat_jemput }}</td>
                                <td>{{ $row->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $pesanan->appends(Request::all())->links() }}
            </div>
        </div>
    </section>
@endsection