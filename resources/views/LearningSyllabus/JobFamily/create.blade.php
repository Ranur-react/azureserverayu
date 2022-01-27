@extends('layouts.app', ['pagedirectory' => [
'Job Family Directory' =>'/learning-syllabus/job-families', 'Create' => ''
]])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--8 mb-5">
        <div class="row">
            <div class="col">
                <div class="card shadow-lg mb-5">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Create Job Family</h3>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('learning-syllabus.job-families.store') }}"
                        id="formJobFamily">
                            {{ csrf_field() }}
                            <div class="px-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-job-family-code">ID Job Family</label>
                                            <input type="text" name="job_family_code" id="input-job-family-code"
                                                value="{{ old('job_family_code') }}"
                                                class="form-control {{ $errors->has('job_family_code') ? ' is-invalid' : '' }}" required autofocus>
                                            @error('job_family_code')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-job-family-name">Name</label>
                                            <input type="text" name="name" id="input-job-family-name" value="{{ old('name') }}"
                                                class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" required>
                                            @error('name')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4  btn-lg btn-block">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')
<script>
    $(document).ready(function(){
        $("form").submit(function () {
            if ($(this).valid()) {
                $(this).submit(function () {
                    return false;
                });
                return true;
            }
            else {
                return false;
            }
        });
    });
</script>
@endpush
