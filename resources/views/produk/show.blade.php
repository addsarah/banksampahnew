@extends('admin.admin_master')

@section('title')
    Tampilan Data Produk
@endsection

@section('admin.index')
    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box">
                    <a class="btn btn-app bg-info"href="{{ route('produk.index') }}">
                        <i class="fas fa-angle-double-left"></i> Back</a>
                </div>
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{ $produk->nama }}</td>
                        </tr>
                        <tr>
                            <td>Gambar</td>
                            <td>:</td>
                            <td>
                                <img class="img-thumbnail" src="{{ asset('uploads/' . $produk->gambar) }}" width="135px">
                            </td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td>:</td>
                            <td>Rp. {{ $produk->harga }}</td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td>:</td>
                            <td>{{ $produk->stok }}</td>
                        </tr>
                        <tr>
                            <td>Jenis</td>
                            <td>:</td>
                            <td>{{ $produk->jenis }}</td>
                        </tr>
                        <tr>
                            <td>Satuan Hitung</td>
                            <td>:</td>
                            <td>{{ $produk->satuan_hitung }}</td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td>:</td>
                            <td>{{ $produk->deskripsi }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        </div>
    @endsection