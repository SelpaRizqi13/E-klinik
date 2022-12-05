@extends('layouts.theme')

@section('content')
    <div class="card shadow-lg mx-4 ">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto my-auto ms-4">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Edit Data User
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-body">
                <form class="mx-5 mb-5 mt-5" id="quickForm" method="POST" action="{{ url('user/' . $model->id) }}">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label for="exampleInputNama">Username</label>
                        <input type="text" name="username" value="{{ $model->name }}" class="form-control"
                            id="exampleInputNama" placeholder="Enter name">
                        @error('username')
                            <div class="invalid-feedback mb-3" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Email address</label>
                        <input type="email" name="email" value="{{ $model->email }}" class="form-control"
                            id="exampleInputEmail" placeholder="Enter email">
                        @foreach ($errors->get('email') as $msg)
                            <p class="text-danger">{{ $msg }} </p>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <label for="role">Role</label>
                        <select id="role" name="role" class="form-control">
                            <option value="{{ $model->role }}">{{ $model->role }}</option>
                            <option {{ $model->role == 'super admin' ? 'selected' : '' }} value="super admin">Super Admin
                            </option>
                            <option {{ $model->role == 'admin' ? 'selected' : '' }} value="admin">Admin</option>
                            <option {{ $model->role == 'apoteker' ? 'selected' : '' }} value="apoteker">Apoteker</option>
                            <option {{ $model->role == 'dokter' ? 'selected' : '' }} value="dokter">Dokter
                            </option>
                            {{-- <option {{ $model->role == 'dokter poli gigi' ? 'selected' : '' }} value="dokter poli gigi">
                                dokter poli gigi</option> --}}
                        </select>
                        @foreach ($errors->get('role') as $msg)
                            <p class="text-danger">{{ $msg }} </p>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword">Password</label>
                        <input type="password" name="password" value="{{ $model->password }}" class="form-control"
                            id="exampleInputPassword" placeholder="Password">
                        @foreach ($errors->get('password') as $msg)
                            <p class="text-danger">{{ $msg }} </p>
                        @endforeach
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a class="btn btn-success" href="{{ url('user') }}">
                            Cancel</a>
                    </div>
            </div>

            </form>
        </div>
    </div>
    </div>
@endsection
