@extends('layouts.app', ['pagedirectory' => [
'Job Family Directory' =>'/learning-syllabus/job-families', $jobFamily->name =>
'/learning-syllabus/job-families/' . $jobFamily->id . '/sub-job-families', 'Create' => '' ]])
@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--8 mb-5">
        <div class="row">
            <div class="col">
                <div class="card shadow-lg mb-5">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Create Sub Job Family</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST"
                            action="{{ route('learning-syllabus.job-families.sub-job-families.store', $jobFamily->id) }}"
                            id="formSubJobFamily">
                            {{ csrf_field() }}
                            <div class="px-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-job-family-code">Job Family Code</label>
                                            <input type="text" name="job_family_code" id="input-job-family-code"
                                                value="{{ $jobFamily->job_family_code }}"
                                                class="form-control text-black" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-job-family-name">Job Family Name</label>
                                            <input type="text" name="name" id="input-job-family-name"
                                                value="{{ $jobFamily->name }}"
                                                class="form-control text-black" disabled>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-job-family-code">Sub Job
                                                Family Code</label>
                                            <input type="text" name="sub_job_family_code"
                                                value="{{ $jobFamily->job_family_code ?? '' }}.{{ str_pad($max_number, 2, '0', STR_PAD_LEFT) }}"
                                                id="input-sub-job-family-code"
                                                class="form-control text-black"
                                                placeholder="" readonly data-container="body" data-toggle="popover"
                                                data-placement="top"
                                                data-content="Check your archive folder because the SJF code is still related to the SJF code in the archive folder.">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-sub-job-family-name">
                                                Name</label>
                                            <input type="text" name="name" id="input-sub-job-family-name"
                                                value="{{ old('name') }}"
                                                class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                placeholder="" required autofocus>
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
    <script type="text/javascript">
        $(document).ready(function(){
            $("#formSubJobFamily").submit(function() {
                    $(this).submit(function() {
                        return false;
                    });
                    return true;
                });
        });
    </script>
@endpush
