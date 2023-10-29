@extends('admin.admin_master')

@section('title')
Edit Data Produk
@endsection

@section('admin.index')
<div class="row-container">
    <div class="col-md-12">
        <div class="box">
            <div class="col-md-12">
                 <!-- general form elements -->
                 <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data Produk</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('produk.update',[$produk->id]) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="card-body">
                            <!-- edit nama produk -->
                            <div class="form-group">
                                <label for="exampleInputName1">Nama Produk</label>
                                <input type="text" name="nama"class="form-control" id="exampleInputName1" value="{{ $produk->nama }}" placeholder="Nama Produk">
                            </div>
                            <!-- edit gambar produk -->
                            <div class="form-group" align="center">
                                <label for="exampleInputFile"><img class="img-thumbnail" src="{{asset('uploads/'.$produk->gambar)}}" width="135px"/></label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file"  value="{{$produk->gambar}}"  name="gambar" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile"></label>
                                    </div>
                                    <div class="input-group-append"> 
                                        <span class="input-group-text">Edit Gambar Produk</span>
                                    </div>
                                </div>
                            </div>
                            <!-- edit harga produk -->
                            <div class="form-group">
                                <label for="exampleInputPassword1">Harga Produk</label>
                                <input type="number" name="harga" class="form-control" value="{{ $produk->harga }}" id="exampleInputPassword1" placeholder="Harga Produk">
                            </div>
                            <!-- edit stok produk -->
                            <div class="form-group">
                                <label for="exampleInputStok1">Stok Produk</label>
                                <input type="number" name="stok" class="form-control" value="{{ $produk->stok }}" id="exampleInputStok1" placeholder="Stok Produk">
                            </div>
                            <!-- edit jenis produk -->
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Jenis Produk</label>
                                <div class="col-sm-12" required="true">
                                    <select name="jenis" class="form-control">
                                        <option value="organik" @if($produk->jenis == "organik")@endif >organik</option>
                                        <option value="kertas" @if($produk->jenis == "kertas")@endif >kertas</option>
                                        <option value="plastik" @if($produk->jenis == "plastik")@endif >plastik</option>
                                        <option value="plastik" @if($produk->jenis == "elektronik")@endif >barang elektronik</option>
                                        <option value="plastik" @if($produk->jenis == "kaca")@endif >kaca</option>
                                    </select>
                                </div>
                            </div>
                            <!-- edit satuan hitungg -->
                            <div class="form-group">
                                <label for="exampleInputSatuan1">Satuan Hitung</label>
                                <input type="text" name="satuan_hitung"class="form-control" id="exampleInputHitung1" value="{{ $produk->satuan_hitung }}" placeholder="Nama Produk">
                            </div>
                            <!-- edit deskripsi produk -->
                            <div class="form-group">
                                <label for="exampleInputDeskripsi1">Deksripsi</label>
                                <textarea type="text" name="deskripsi"class="form-control" id="exampleInputDeskripsi1" value="" placeholder="Deskripsi">{{ $produk->deskripsi }}</textarea>
                            </div>
                            <div class="card-footer">
                                <div class="box-footer">
                                    <button type = "submit" name="tombol" class="btn btn-info pull-right">Edit</button>
                                    <a href="{{ route('produk.index') }}" class="btn btn-danger float-right">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endsection