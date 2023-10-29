@extends('admin.admin_master')
@section('title')
View User
@endsection

@section('admin.index')
<section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box">
                <a class="btn btn-app bg-info"href="{{ route('user.index')}}" >
                  <i class="fas fa-angle-double-left"></i> Back</a>    
            </div>
            <div class="box-body">
              <table class="table table-bordered"> 
                   <tr>
                       <td>Nama</td>
                       <td>:</td>
                       <td>{{ $user->name }}</td>
                   </tr>
                   <tr>
                       <td>Username</td>
                       <td>:</td>
                       <td>{{ $user->username }}</td>
                   </tr>
                   <tr>
                       <td>Email</td>
                       <td>:</td>
                       <td>{{ $user->email }}</td>
                   </tr>

                   <tr>
                       <td>Level</td>
                       <td>:</td>
                       <td>{{ $user->level }}</td>
                   </tr>
            </table>
            </div>
        </div>
    </div>
</div>


@endsection