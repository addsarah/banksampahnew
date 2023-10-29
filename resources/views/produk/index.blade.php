@extends('admin.admin_master')

@section('title')
    All Produk
@endsection

@section('admin.index')
<section class="content">
    <div class="col">
        <div class="col-md-12">
            {{--  fungsi add atau tambah --}}
            <div class="box-header with-border">
                @if (Request::get('keyword'))
                    <a class="btn btn-app bg-info"href="{{ route('produk.index') }}">
                        <i class="fas fa-recycle"></i> Hapus</a>
                @else
                    <a class="btn btn-app bg-success"href="{{ route('produk.create') }}">
                        <i class="fas fa-plus"></i> Tambah</a>
                @endif
                <form method="get" action="{{ route('produk.index') }}">
                    <label for="keyword" class="col-sm-2 control-label">Cari Produk</label>
                    <div class="col-md-4"> 
                        <div class="input-group">
                         <input type="search" class="form-control form-control-lg" id="keyword" name="keyword" value="{{Request::get('nama')}}">
                         <div class="input-group-append">
                             <button class="btn btn-lg btn-default">
                                 <i class="fa fa-search"></i>
                             </button>
                         </div>
                        </div>
                     </div>
                 </form>
             </div>
            @if (Request::get('keyword'))
                <div class="alert alert-info alert-block">
                    Hasil pencarian produk dengan keyword: <b>{{ Request::get('keyword') }}</b>
                </div>
            @endif
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
                        <th>Action</th>
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
                            <td>
                                <form method="POST" action="{{ route('produk.destroy', [$row->id]) }}"
                                    onsubmit="return confirm('Apakah anda yakin akan menghapus barang, {{ $row->nama }}?')">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <a class="btn btn-info" href="{{ route('produk.edit', [$row->id]) }}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="btn bt-info" href="{{ route('produk.edit', [$row->id]) }}"></a>
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    <a class="btn btn-warning" href="{{ route('produk.show', [$row->id]) }}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $produk->appends(Request::all())->links() }}
        </div>
    </div>
</section>
@endsection