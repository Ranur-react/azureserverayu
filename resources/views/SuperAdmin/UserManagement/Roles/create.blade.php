@extends('layouts.app', ['pagename' => 'Create Role'])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Create Role</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('super-admin.user-management.roles.store') }}"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="px-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-role-name">Role Name</label>
                                            <input type="text" name="name" id="input-role-name" value="{{ old('name') }}"
                                                class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                placeholder="">
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $errors->first('name') }}</strong></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="form-control-label" for="input-role-name">Select Permission</label>
                                        <div class="form-group">
                                            @foreach ($permissions as $permission)
                                                <div class="form-check form-check-inline" style="width: 200px;">
                                                    <input class="form-check-input" name="permission[]" type="checkbox"
                                                        id="{{ $permission->id }}" value="{{ $permission->id }}"
                                                        @if (is_array(old('permission')) && in_array($permission->id, old('permission'))) checked @endif>
                                                    <label class="form-check-label"
                                                        for="{{ $permission->id }}">{{ $permission->name }}</label>
                                                </div>
                                            @endforeach
                                            @if ($errors->has('permission'))
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $errors->first('permission') }}</strong></span>
                                            @endif
                                            @if ($errors->has('permission.*'))
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $errors->first('permission.*') }}</strong></span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                @can('role_create')
                                    <button type="submit" class="btn btn-success mt-2">Save</button>
                                @endcan
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
