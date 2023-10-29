@extends('admin.admin_master')
@section('title')
View Nasabah
@endsection

@section('admin.index')
<section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box">
                <a class="btn btn-app bg-info"href="{{ route('nasabah.index')}}" >
                  <i class="fas fa-angle-double-left"></i> Back</a>    
            </div>
            <div class="box-body">
              <table class="table table-bordered"> 
                   <tr>
                       <td>Nama</td>
                       <td>:</td>
                       <td>{{ $nasabah->nama_nasabah }}</td>
                   </tr>
                   <tr>
                       <td>Email</td>
                       <td>:</td>
                       <td>{{ $nasabah->email_nasabah }}</td>
                   </tr>
                   <tr>
                       <td>Nomor Telepon</td>
                       <td>:</td>
                       <td>{{ $nasabah->nomor_telepon }}</td>
                   </tr>
                   <tr>
                       <td>Jenis Kelamin</td>
                       <td>:</td>
                       <td>{{ $nasabah->jenis_kelamin }}</td>
                   </tr>
                   <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>{{ $nasabah->alamat }}</td>
                </tr>
            </table>
            </div>
        </div>
    </div>
</div>


@endsection