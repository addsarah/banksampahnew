@extends('admin.admin_master')

@section('title')
    Report Data Produk
@endsection

@section('admin.index')
<section class="content">
    <div class="col">
        <div class="col-md-12">
            {{--  fungsi add atau tambah --}}
            <div class="box-header with-border">
                <a target="_blank" href="{{ route('cetak_produk') }}" class="btn btn-danger float-left"><i
                class="fas fa-print"></i> Print PDF</a>
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Gambar</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Jenis</th>
                        <th>Satuan Hitung</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $row)
                        <tr>
                            <td>{{ $loop->iteration + $produk->perpage() * ($produk->currentPage() - 1) }}</td>
                            <td>{{ $row->nama }}</td>
                            <td>
                                <img class="img-thumbnail" src="{{ asset('uploads/'.$row->gambar) }}" width="135px">
                            </td>
                            <td>Rp. {{ $row->harga }}</td>
                            <td>{{ $row->stok }}</td>
                            <td>{{ $row->jenis }}</td>
                            <td>{{ $row->satuan_hitung }}</td>
                            <td>{{ $row->deskripsi }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $produk->appends(Request::all())->links() }}
        </div>
    </div>
</section>
@endsection