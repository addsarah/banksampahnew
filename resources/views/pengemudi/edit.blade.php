@extends('admin.admin_master')

@section('title')
    Edit Pengemudi
@endsection

@section('admin.index')
    <section class="content">
        <div class="col">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form edit data pengemudi</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('pengemudi.update', [$pengemudi->id]) }}" method="POST" class="form-horizontal">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="card-body">
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Nama Pengemudi</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true" placeholder="Enter Name"
                                        name="nama_pengemudi" value="{{ $pengemudi->nama_pengemudi }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Jenis Kelamin</label>
                                <div class="col-sm-12" required="true">
                                    <select name="jenis_kelamin" class="form-control">
                                        <option value="laki-laki" @if ($pengemudi->jenis_kelamin == 'laki-laki')  @endif>Laki - laki
                                        </option>
                                        <option value="perempuan" @if ($pengemudi->jenis_kelamin == 'perempuan') @endif>Perempuan
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Email</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true" placeholder="Enter Email"
                                        name="email_pengemudi" value="{{ $pengemudi->email_pengemudi }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Nomor Telepon</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true"
                                        placeholder="Enter Nomor Telepon" name="nomor_telepon"
                                        value="{{ $pengemudi->nomor_telepon }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Tanggal Lahir</label>
                                <div class="col-sm-12">
                                    <input type="date" class="form-control" required="true"
                                        placeholder="Enter Tanggal Lahir" name="tanggal_lahir"
                                        value="{{ $pengemudi->tanggal_lahir }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Alamat</label>
                                <div class="col-sm-12">
                                    <textarea type="text" class="form-control" required="true" placeholder="Enter Alamat" name="alamat"
                                        value="">{{ $pengemudi->alamat }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Jenis Kendaraan</label>
                                <div class="col-sm-12" required="true">
                                    <select name="jenis_kendaraan" class="form-control">
                                        <option value="motor" @if ($pengemudi->jenis_kendaraan == 'motor')  @endif>Motor</option>
                                        <option value="mobil" @if ($pengemudi->jenis_kendaraan == 'mobil') @endif>Mobil</option>
                                    </select>
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
