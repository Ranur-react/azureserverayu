@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
    'title' => __('Hello') . ', '. auth()->user()->employee->name ?? '',
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
                                    <img src="https://ui-avatars.com/api/?name={{ auth()->user()->employee->name }}&size=156&"
                                        class="rounded-circle">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0 pt-md-4 mt-md-8 mt-9">
                        <div class="text-center">
                            <h3>
                                {{ auth()->user()->employee->name }}
                            </h3>
                            <div class="font-weight-light">
                                {{ auth()->user()->employee->division }} - {{ auth()->user()->title }}
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
                            <div class="px-lg-4">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                    <input type="text" name="name" id="input-name"
                                        class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->employee->name) }}"
                                        required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-title">{{ __('Title') }}</label>
                                    <input type="text" name="title" id="input-title"
                                        class="form-control cursor-not-allowed form-control-alternative{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Title') }}"
                                        value="{{ old('title', auth()->user()->employee->title) }}" disabled>

                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-control-label"
                                        for="input-organization">{{ __('Organization') }}</label>
                                    <input type="text" name="organization" id="input-organization"
                                        class="form-control cursor-not-allowed form-control-alternative{{ $errors->has('organization') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Organization') }}"
                                        value="{{ old('organization', auth()->user()->employee->organization) }}" disabled>

                                    @if ($errors->has('organization'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('organization') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-band">{{ __('Band') }}</label>
                                    <input type="text" name="band" id="input-band"
                                        class="form-control cursor-not-allowed form-control-alternative{{ $errors->has('band') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Band') }}"
                                        value="{{ old('band', auth()->user()->employee->band) }}" disabled>

                                    @if ($errors->has('band'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('band') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-control-label"
                                        for="input-nik-atasan">{{ __('Nik Atasan') }}</label>
                                    <input type="text" name="nik_atasan" id="input-nik-atasan"
                                        class="form-control cursor-not-allowed form-control-alternative{{ $errors->has('nik_atasan') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Nik Atasan') }}"
                                        value="{{ old('nik_atasan', auth()->user()->employee->nik_atasan) }}" disabled>

                                    @if ($errors->has('nik_atasan'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nik_atasan') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-control-label"
                                        for="input-nama-atasan">{{ __('Nama Atasan') }}</label>
                                    <input type="text" name="nama_atasan" id="input-nama-atasan"
                                        class="form-control cursor-not-allowed form-control-alternative{{ $errors->has('nama_atasan') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Nama Atasan') }}"
                                        value="{{ old('nama_atasan', auth()->user()->employee->nama_atasan) }}" disabled>
                                    @if ($errors->has('nama_atasan'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nama_atasan') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
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
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-section">{{ __('Section') }}</label>
                                    <input type="text" name="section" id="input-section"
                                        class="form-control cursor-not-allowed form-control-alternative{{ $errors->has('section') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Section') }}"
                                        value="{{ old('section', auth()->user()->employee->section) }}" disabled>
                                    @if ($errors->has('section'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('section') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-control-label"
                                        for="input-department">{{ __('Department') }}</label>
                                    <input type="text" name="section" id="input-sdepartment"
                                        class="form-control cursor-not-allowed form-control-alternative{{ $errors->has('department') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Department') }}"
                                        value="{{ old('department', auth()->user()->employee->department) }}" disabled>
                                    @if ($errors->has('department'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('department') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-division">{{ __('Division') }}</label>
                                    <input type="text" name="section" id="input-division"
                                        class="form-control cursor-not-allowed form-control-alternative{{ $errors->has('division') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Division') }}"
                                        value="{{ old('division', auth()->user()->employee->division) }}" disabled>
                                    @if ($errors->has('division'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('division') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-bgroup">{{ __('Bgroup') }}</label>
                                    <input type="text" name="bgroup" id="input-bgroup"
                                        class="form-control cursor-not-allowed form-control-alternative{{ $errors->has('bgroup') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Bgroup') }}"
                                        value="{{ old('bgroup', auth()->user()->employee->bgroup) }}" disabled>
                                    @if ($errors->has('bgroup'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('bgroup') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-egroup">{{ __('Egroup') }}</label>
                                    <input type="text" name="egroup" id="input-egroup"
                                        class="form-control cursor-not-allowed form-control-alternative{{ $errors->has('egroup') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Egroup') }}"
                                        value="{{ old('egroup', auth()->user()->employee->egroup) }}" disabled>
                                    @if ($errors->has('egroup'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('egroup') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-control-label"
                                        for="input-directorate">{{ __('Directorate') }}</label>
                                    <input type="text" name="directorate" id="input-directorate"
                                        class="form-control cursor-not-allowed form-control-alternative{{ $errors->has('directorate') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Directorate') }}"
                                        value="{{ old('directorate', auth()->user()->employee->directorate) }}" disabled>
                                    @if ($errors->has('directorate'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('directorate') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-admins">{{ __('Admins') }}</label>
                                    <input type="text" name="admins" id="input-admins"
                                        class="form-control cursor-not-allowed form-control-alternative{{ $errors->has('admins') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Admins') }}"
                                        value="{{ old('admins', auth()->user()->employee->admins) }}" disabled>
                                    @if ($errors->has('admins'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('admins') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-area">{{ __('Area') }}</label>
                                    <input type="text" name="admins" id="input-area"
                                        class="form-control cursor-not-allowed form-control-alternative{{ $errors->has('area') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Admins') }}"
                                        value="{{ old('area', auth()->user()->employee->area) }}" disabled>
                                    @if ($errors->has('area'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('area') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save Changes') }}</button>
                                </div>
                            </div>
                        </form>
                        <hr class="my-4" />
                        <form method="post" action="{{ route('profile.password') }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Password') }}</h6>

                            <div class="px-lg-4">
                                <div class="form-group mb-3">
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
                                <div class="form-group mb-3">
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
