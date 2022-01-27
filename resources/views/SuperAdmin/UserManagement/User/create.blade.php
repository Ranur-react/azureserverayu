@extends('layouts.app', ['pagename' => 'Create User'])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--7 mb-5">
        <div class="row">
            <div class="col">
                <div class="card shadow-lg mb-5">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Create User</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('super-admin.user-management.users.store') }}">
                            {{ csrf_field() }}
                            <div class="px-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-user-name">Name</label>
                                            <input type="text" name="name" id="input-role-name" value="{{ old('name') }}"
                                                class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                placeholder="">
                                            @error('name')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-user-email">Email</label>
                                            <input type="email" name="email" id="input-user-email"
                                                value="{{ old('email') }}"
                                                class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                placeholder="">
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
                                                value="{{ old('password') }}"
                                                class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                placeholder="">
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
                                                class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                                                placeholder="">
                                            @error('password_confirmation')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-user-role">Role</label>
                                            <select class="form-control" name="role" id="input-user-role">
                                                <option value="">Select Role...</option>
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->id }}"
                                                        {{ old('role') == $role->id ? 'selected' : '' }}>
                                                        {{ $role->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('role')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
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
    </div>

@endsection
