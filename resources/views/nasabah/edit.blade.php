@extends('admin.admin_master')

@section('title')
    Edit Nasabah
@endsection

@section('admin.index')
    <section class="content">
        <div class="col">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form edit data nasabah</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('nasabah.update', [$nasabah->id]) }}" method="POST" class="form-horizontal">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="card-body">
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Nama Nasabah</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true" placeholder="Enter Name"
                                        name="nama_nasabah" value="{{ $nasabah->nama_nasabah }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Email</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true" placeholder="Enter Email"
                                        name="email_nasabah" value="{{ $nasabah->email_nasabah }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Nomor Telepon</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true"
                                        placeholder="Enter Nomor Telepon" name="nomor_telepon"
                                        value="{{ $nasabah->nomor_telepon }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Jenis Kelamin</label>
                                <div class="col-sm-12" required="true">
                                    <select name="jenis_kelamin" class="form-control">
                                        <option value="laki-laki" @if ($nasabah->jenis_kelamin == 'laki-laki')  @endif>Laki - laki
                                        </option>
                                        <option value="perempuan" @if ($nasabah->jenis_kelamin == 'perempuan') @endif>Perempuan
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Alamat</label>
                                <div class="col-sm-12">
                                    <textarea type="text" class="form-control" required="true" placeholder="Enter Alamat" name="alamat"
                                        value="">{{ $nasabah->alamat }}</textarea>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="submit" class="btn btn-danger float-right">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
