@extends('admin.admin_master')

@section('title')
    All Pengemudi
@endsection

@section('admin.index')
    <section class="content">
        <div class="col">
            <div class="col-md-12">
                {{--  fungsi add atau tambah --}}
                <div class="box-header with-border">
                    @if (Request::get('keyword'))
                        <a class="btn btn-app bg-info"href="{{ route('pengemudi.index') }}">
                            <i class="fas fa-recycle"></i> Reset</a>
                    @else
                        <a class="btn btn-app bg-success"href="{{ route('pengemudi.create') }}">
                            <i class="fas fa-plus"></i> Add</a>
                    @endif
                    <div class="row">
                        <div class="col-md-3 offset-md-9">
                        <form method="get" action="{{route('pengemudi.index')}}">
                                <div class="input-group">
                                    <input type="search" class="form-control form-control-lg" placeholder="Search by name" id="keyword" name="keyword" value="{{Request::get('nama_pengemudi')}}">
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
                @if (Request::get('keyword'))
                    <div class="alert alert-info alert-block">
                        Hasil pencarian pengemudi dengan keyword: <b>{{ Request::get('keyword') }}</b>
                    </div>
                @endif
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
                            <th>Action</th>
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
                                <td>
                                    <form method="POST" action="{{ route('pengemudi.destroy', $row->id) }}"
                                        onsubmit="return confirm('Apakah anda yakin akan menghapus,{{ $row->nama_pengemudi }}?..')">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <a class="btn btn-info" href="{{ route('pengemudi.edit', [$row->id]) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="btn bt-info" href="{{ route('pengemudi.edit', [$row->id]) }}"></a>
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        <a class="btn btn-warning" href="{{ route('pengemudi.show', [$row->id]) }}">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $pengemudi->appends(Request::all())->links() }}
            </div>
        </div>
    </section>
@endsection
