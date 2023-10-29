@extends('admin.admin_master')

@section('title')
Edit Pesanan
@endsection

@section('admin.index')
<div class="row-container">
  <div class="col-md-12">
    <div class="box">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Edit Pesanan</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{ route('pesanan.update',[$pesanan->id]) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            {{method_field('PUT')}}
            <div class="card-body">
              <!-- edit nama Pelanggan -->
              <div class="form-group">
                <label>Nama Nasabah</label>
                <select class="form-control" name="id_nasabah">
                  @foreach ($nasabah as $nasabah)
                  <option value="{{ $nasabah->id }}">{{ $nasabah->nama_nasabah }}</option>
                  @endforeach
               </select>
              </div>
              <!-- edit nama produk -->
              <div class="form-group">
                <label>Nama Produk</label>
                <select class="form-control" name="id_produk">
                    @foreach ($produks as $produk)
                        <option value="{{ $produk->id }}">{{ $produk->nama }}</option>
                    @endforeach
                </select>
              </div> 
              <!-- edit Jumlah Unit -->
              <div class="form-group">
                <label for="exampleInputJemput1">Jumlah Unit</label>
                <input type="number" name="jumlah" class="form-control" value="{{ $pesanan->jumlah }}" id="exampleInputJumlah1" placeholder="Jumlah Unit">
              </div>
              <div class="form-group">
                <label for="exampleInputalamat1">Alamat Jemput</label>
                <textarea type="text" name="alamat_jemput" class="form-control" value= id="exampleInputalamat1" placeholder="Alamat">"{{ $nasabah->alamat_jemput }}"</textarea>
            </div>
              <div class="card-footer">
                <div class="box-footer">
                  <button type = "submit" name="tombol" class="btn btn-info pull-right">Edit</button>
                  <a href="{{ route('pesanan.index') }}" class="btn btn-danger float-right">Cancel</a>
               </div>
             </div>
            </div>
           </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection