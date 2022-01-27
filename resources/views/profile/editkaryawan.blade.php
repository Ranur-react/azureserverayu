@extends('layouts.app', ['title' => __('User Profile'), 'paganame' => 'Edit Profile'])

@section('content')
    @include('users.partials.header', [
    'title' => __('Hello') . ', '. auth()->user()->name,
    'class' => 'col-lg-12'
    ])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img src="{{ asset('argon') }}/img/theme/team-4-800x800.jpg" class="rounded-circle">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0 pt-md-4 mt-md-8 mt-9">
                        <div class="text-center">
                            <h3>
                                {{ auth()->user()->name }}
                            </h3>
                            <div class="font-weight-light">
                                {{ __('Human Capital Management - Learning Architect Team') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow mb-5">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">{{ __('Edit Profile') }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('profile.update') }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('User information') }}</h6>

                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <div class="px-lg-4">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-nik">{{ __('NIK') }}</label>
                                    <input type="text" name="name" id="input-nik"
                                        class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('NIK') }}" value="" disabled>
                                </div>
                                <div class="form-group mb-3{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                    <input type="text" name="name" id="input-name"
                                        class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Name') }}"
                                        value="{{ old('name', auth()->user()->name) }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-user-nama-atasan">Nama
                                        Atasan</label>
                                    <select class="form-control form-control-alternative" name="nama-atasan"
                                        id="input-user-nama-atasan">
                                        <option value="">Select Atasan...</option>
                                        <option value="320005">320005 - Mukhammad Atiqurrakhman </option>
                                        <option value="7105">71025 - Fithri Novida </option>
                                        <option value="83391">83391 - Ivan Yuditia </option>
                                    </select>
                                </div>
                                <div class="form-group mb-3{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                    <input type="email" name="email" id="input-email"
                                        class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Email') }}"
                                        value="{{ old('email', auth()->user()->email) }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <h6 class="heading-small text-muted mb-4">{{ __('Title & Position') }}</h6>

                            <div class="px-lg-4">

                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-user-title">Title</label>
                                    <input type=" text" name="title" id="input-user-title" value="{{ old('name') }}"
                                        class="form-control form-control-alternative" placeholder="">
                                </div>

                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-user-organization">Organization</label>
                                    <input type=" text" name="organization" id="input-user-organization"
                                        value="{{ old('name') }}" class="form-control form-control-alternative"
                                        placeholder="">
                                </div>

                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-user-department">Department</label>
                                    <input type=" text" name="department" id="input-user-department"
                                        value="{{ old('name') }}" class="form-control form-control-alternative"
                                        placeholder="">
                                </div>

                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-user-division">Division</label>
                                    <input type=" text" name="division" id="input-user-division"
                                        value="{{ old('name') }}" class="form-control form-control-alternative"
                                        placeholder="">
                                </div>

                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-user-bgroup">B Group</label>
                                    <input type=" text" name="bgroup" id="input-user-bgroup" value="{{ old('name') }}"
                                        class="form-control form-control-alternative" placeholder="">
                                </div>

                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-user-directorate">Directorate</label>
                                    <input type=" text" name="directorate" id="input-user-directorate"
                                        value="{{ old('name') }}" class="form-control form-control-alternative"
                                        placeholder="">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-user-band">Band</label>
                                    <input type=" text" name="band" id="input-user-band" value="{{ old('name') }}"
                                        class="form-control form-control-alternative" placeholder="">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-user-admin">Admin</label>
                                    <input type=" text" name="admin" id="input-user-admin" value="{{ old('name') }}"
                                        class="form-control form-control-alternative" placeholder="">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-user-area">Area</label>
                                    <input type=" text" name="area" id="input-user-area" value="{{ old('name') }}"
                                        class="form-control form-control-alternative" placeholder="">
                                </div>


                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>
                        <hr class="my-4" />
                        <form method="post" action="{{ route('profile.password') }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Password') }}</h6>

                            @if (session('password_status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('password_status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <div class="px-lg-4">
                                <div class="form-group mb-3{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                        for="input-current-password">{{ __('Current Password') }}</label>
                                    <input type="password" name="old_password" id="input-current-password"
                                        class="form-control form-control-alternative{{ $errors->has('old_password') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Current Password') }}" value="" required>

                                    @if ($errors->has('old_password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('old_password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group mb-3{{ $errors->has('password') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                        for="input-password">{{ __('New Password') }}</label>
                                    <input type="password" name="password" id="input-password"
                                        class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('New Password') }}" value="" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-control-label"
                                        for="input-password-confirmation">{{ __('Confirm New Password') }}</label>
                                    <input type="password" name="password_confirmation" id="input-password-confirmation"
                                        class="form-control form-control-alternative"
                                        placeholder="{{ __('Confirm New Password') }}" value="" required>
                                </div>

                                <div class="text-center">
                                    <button type="submit"
                                        class="btn btn-success mt-4">{{ __('Change password') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
