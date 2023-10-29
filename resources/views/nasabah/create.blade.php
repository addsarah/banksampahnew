@extends('admin.admin_master')

@section('title')
    Buat Nasabah
@endsection

@section('admin.index')
    <section class="content">
        <div class="col">
            <div class="col-md-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Form buat data nasabah</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('nasabah.store') }}" method="POST" class="form-horizontal">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Nama Nasabah</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true" placeholder="Enter Name"
                                        name="nama_nasabah" value="{{ old('nama_nasabah') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Email</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true" placeholder="Enter Email"
                                        name="email_nasabah" value="{{ old('email_nasabah') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Nomor Telepon</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true" placeholder="Enter No Telpon"
                                        name="nomor_telepon" value="{{ old('nomor_telepon') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Jenis Kelamin</label>
                                <div class="col-sm-12" required="true">
                                    <select name="jenis_kelamin" class="form-control">
                                        <option value="laki-laki">Laki - laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Alamat</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" placeholder="Enter Alamat" name="alamat" value="{{ old('alamat') }}">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="submit" class="btn btn-danger float-right">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
