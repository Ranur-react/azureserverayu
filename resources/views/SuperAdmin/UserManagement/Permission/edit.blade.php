@extends('layouts.app', ['pagename' => 'Edit Permission'])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Edit Permission</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST"
                            action="{{ route('super-admin.user-management.permissions.update', $permission->id) }}">
                            @method('PUT')
                            {{ csrf_field() }}
                            <div class="px-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-permission-name">Permission
                                                Name</label>
                                            <input type="text" name="name" value="{{ $permission->name }}"
                                                id="input-permission-name"
                                                class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                placeholder="">
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                @can('permission_edit')
                                    <button type="submit" class="btn btn-success mt-2">Save Changes</button>
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
