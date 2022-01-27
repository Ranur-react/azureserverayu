@extends('layouts.app', ['pagename' => 'Create Karyawan'])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--7 mb-5">
        <div class="row">
            <div class="col">
                <div class="card shadow-lg mb-5">
                    <form method="POST" action="{{ route('super-admin.user-management.users.store') }}">
                        {{ csrf_field() }}
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">General Information</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="px-lg-4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-user-nik">NIK</label>
                                            <input type="text" name="nik" id="input-user-nik" value="{{ old('name') }}"
                                                class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-user-name">Name</label>
                                            <input type=" text" name="name" id="input-role-name" value="{{ old('name') }}"
                                                class="form-control" placeholder="">
                                            @error('name')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-user-nama-atasan">Nama
                                                Atasan</label>
                                            <select class="form-control" name="nama-atasan" id="input-user-nama-atasan">
                                                <option value="">Select Atasan...</option>
                                                <option value="320005">320005 - Mukhammad Atiqurrakhman </option>
                                                <option value="7105">71025 - Fithri Novida </option>
                                                <option value="83391">83391 - Ivan Yuditia </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-user-email">Email</label>
                                            <input type="email" name="email" id="input-user-email"
                                                value="{{ old('email') }}" class="form-control" placeholder="">
                                            @error('email')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-user-password">Password</label>
                                            <input type="password" name="password" id="input-user-password"
                                                value="{{ old('password') }}" class="form-control" placeholder="">
                                            @error('password')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-user-confirm-password">Confirm
                                                Password</label>
                                            <input type="password" name="password_confirmation"
                                                value="{{ old('password') }}" id="input-user-confirm-password"
                                                class="form-control" placeholder="">
                                            @error('password_confirmation')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-4">
                            <hr class="my-4">
                        </div>

                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Title & Position</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="px-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-user-title">Title</label>
                                            <input type=" text" name="title" id="input-user-title"
                                                value="{{ old('name') }}" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label"
                                                for="input-user-organization">Organization</label>
                                            <input type=" text" name="organization" id="input-user-organization"
                                                value="{{ old('name') }}" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-user-department">Department</label>
                                            <input type=" text" name="department" id="input-user-department"
                                                value="{{ old('name') }}" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-user-division">Division</label>
                                            <input type=" text" name="division" id="input-user-division"
                                                value="{{ old('name') }}" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-user-bgroup">B Group</label>
                                            <input type=" text" name="bgroup" id="input-user-bgroup"
                                                value="{{ old('name') }}" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label"
                                                for="input-user-directorate">Directorate</label>
                                            <input type=" text" name="directorate" id="input-user-directorate"
                                                value="{{ old('name') }}" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-user-band">Band</label>
                                            <input type=" text" name="band" id="input-user-band"
                                                value="{{ old('name') }}" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-user-admin">Admin</label>
                                            <input type=" text" name="admin" id="input-user-admin"
                                                value="{{ old('name') }}" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-user-area">Area</label>
                                            <input type=" text" name="area" id="input-user-area"
                                                value="{{ old('name') }}" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                @can('user_create')
                                    <button type="submit" class="btn btn-success mt-4">Save</button>
                                @endcan
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
