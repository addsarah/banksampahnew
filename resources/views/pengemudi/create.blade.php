@extends('admin.admin_master')

@section('title')
    Buat Pengemudi
@endsection

@section('admin.index')
    <section class="content">
        <div class="col">
            <div class="col-md-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Form buat data pengemudi</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('pengemudi.store') }}" method="POST" class="form-horizontal">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Nama Pengemudi</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true" placeholder="Enter Name"
                                        name="nama_pengemudi" value="{{ old('nama_pengemudi') }}">
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
                                <label class="col-sm-2 label-control">Email</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true" placeholder="Enter Email"
                                        name="email_pengemudi" value="{{ old('email_pengemudi') }}">
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
                                <label class="col-sm-2 label-control">Tanggal Lahir</label>
                                <div class="col-sm-12">
                                    <input type="date" class="form-control" required="true" name="tanggal_lahir"
                                        value="{{ old('tanggal_lahir') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Alamat</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" placeholder="Enter Alamat" name="alamat" value="{{ old('alamat') }}">
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Jenis Kendaraan</label>
                                <div class="col-sm-12" required="true">
                                    <select name="jenis_kendaraan" class="form-control">
                                        <option value="motor">Motor</option>
                                        <option value="mobil">Mobil</option>
                                    </select>
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
