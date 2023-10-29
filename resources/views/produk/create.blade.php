@extends('admin.admin_master')

@section('title')
    Buat Produk
@endsection

@section('admin.index')
    <section class="content">
        <div class="col">
            <div class="col-md-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Buat Produk</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('produk.store') }}" method="POST" class="form-horizontal"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Nama Produk</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true" placeholder="Nama Produk"
                                        name="nama" value="{{ old('nama') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Gambar Produk</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="gambar" class="custom-file-input"
                                            id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Pilih Gambar produk</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Harga Produk</label>
                                <div class="col-sm-12">
                                    <input type="number" class="form-control" required="true" placeholder="Harga Produk"
                                        name="harga" value="{{ old('harga') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Stok Produk</label>
                                <div class="col-sm-12">
                                    <input type="number" class="form-control" required="true" placeholder="Stok Produk"
                                        name="stok" value="{{ old('stok') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Jenis Produk</label>
                                <div class="col-sm-12" required="true">
                                    <select name="jenis" class="form-control">
                                        <option value="organik">Organik</option>
                                        <option value="kertas">Kertas</option>
                                        <option value="plastik">Plastik</option>
                                        <option value="elektronik">Barang Elektronik</option>
                                        <option value="kaca">Kaca</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Satuan Hitung</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true" placeholder="Satuan Hitung"
                                        name="satuan_hitung" value="{{ old('satuan_hitung') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Deskripsi</label>
                                <div class="col-sm-12">
                                    <textarea type="text" class="form-control" required="true" placeholder="Deskripsi" name="deskripsi"
                                        value="{{ old('deskripsi') }}"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <a href="{{ route('produk.index') }}" class="btn btn-danger float-right">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
