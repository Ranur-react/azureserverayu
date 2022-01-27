@extends('layouts.app', ['pagedirectory' => [
'Statuses' =>'/master-data/statuses',
$status->name => '', 
'Edit' => '' , 
]])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--7 mb-5">
        <div class="row">
            <div class="col">
                <div class="card shadow-lg mb-5">
                    <div class="card-header">
                        <h3 class="mb-0">Status Information</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST"
                            action="{{ route('master-data.statuses.update', $status->id) }}">
                            @method('PUT')
                            {{ csrf_field() }}
                            <div class="px-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-name">
                                                Name</label>
                                            <input type="text" name="name" id="input-name"
                                                value="{{ old('name', $status->name) }}"
                                                class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                placeholder="" required>
                                            @error('name')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
