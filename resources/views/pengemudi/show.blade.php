@extends('admin.admin_master')
@section('title')
View Pengemudi
@endsection

@section('admin.index')
<section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box">
                <a class="btn btn-app bg-info"href="{{ route('pengemudi.index')}}" >
                  <i class="fas fa-angle-double-left"></i> Back</a>    
            </div>
            <div class="box-body">
              <table class="table table-bordered"> 
                   <tr>
                       <td>Nama</td>
                       <td>:</td>
                       <td>{{ $pengemudi->nama_pengemudi }}</td>
                   </tr>
                   <tr>
                       <td>Jenis Kelamin</td>
                       <td>:</td>
                       <td>{{ $pengemudi->jenis_kelamin }}</td>
                   </tr>
                   <tr>
                       <td>Email</td>
                       <td>:</td>
                       <td>{{ $pengemudi->email_pengemudi }}</td>
                   </tr>
                   <tr>
                       <td>Nomor Telepon</td>
                       <td>:</td>
                       <td>{{ $pengemudi->nomor_telepon }}</td>
                   </tr>
                   <tr>
                       <td>Tanggal Lahir</td>
                       <td>:</td>
                       <td>{{ $pengemudi->tanggal_lahir }}</td>
                   </tr>
                   <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{ $pengemudi->alamat }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Knedaraan</td>
                        <td>:</td>
                        <td>{{ $pengemudi->jenis_kendaraan }}</td>
                    </tr>
            </table>
            </div>
        </div>
    </div>
</div>


@endsection