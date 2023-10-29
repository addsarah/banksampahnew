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
                    @if (Request::get('keyword'))
                        <a class="btn btn-app bg-info"href="{{ route('pesanan.index') }}">
                            <i class="fas fa-recycle"></i> Reset</a>
                    @else
                        <a class="btn btn-app bg-success"href="{{ route('pesanan.create') }}">
                            <i class="fas fa-plus"></i> Add</a>
                    @endif
                    <div class="row">
                        <div class="col-md-3 offset-md-9">
                        <form method="get" action="{{route('pesanan.index')}}">
                                <div class="input-group">
                                    <input type="search" class="form-control form-control-lg" placeholder="Search by name" id="keyword" name="keyword" value="{{Request::get('nama_nasabah')}}">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-lg btn-default">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
                @if (Request::get('keyword'))
                    <div class="alert alert-info alert-block">
                        Hasil pencarian data pesanan dengan keyword: <b>{{ Request::get('keyword') }}</b>
                    </div>
                @endif
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
                            <th>Action</th>
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
                                <td>
                                    <form method="POST" action="{{ route('pesanan.destroy', [$row->id]) }}"
                                        onsubmit="return confirm('Apakah anda yakin akan menghapus data pesanan, {{ $row->nama_nasabah }}?')">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <a class="btn btn-info" href="{{ route('pesanan.edit', [$row->id]) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="btn bt-info" href="{{ route('pesanan.edit', [$row->id]) }}"></a>
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        <a class="btn btn-warning" href="{{ route('pesanan.show', [$row->id]) }}">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $pesanan->appends(Request::all())->links() }}
            </div>
        </div>
    </section>
@endsection