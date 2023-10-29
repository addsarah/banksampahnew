@extends('admin.admin_master')

@section('title')
    Add User
@endsection

@section('admin.index')
    <section class="content">
        <div class="col">
            <div class="col-md-12">
                @include('alert.error')
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Form tambah data user</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('user.store') }}" method="POST" class="form-horizontal">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Nama</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true" placeholder="Enter Name"
                                        name="name" value="{{ old('name') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Username</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true" placeholder="Enter Username"
                                        name="username" value="{{ old('username') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Email</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true" placeholder="Enter Email"
                                        name="email" value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Password</label>
                                <div class="col-sm-12">
                                    <input type="password" class="form-control" required="true" placeholder="Enter Password"
                                        name="password" value="{{ old('password') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Level</label>
                                <div class="col-sm-12" required="true">
                                    <select name="level" class="form-control">
                                        <option value=""></option>
                                        <option value="admin">Admin</option>
                                        <option value="staff">Staff</option>
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
