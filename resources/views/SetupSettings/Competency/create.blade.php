@extends('layouts.app', ['pagedirectory' => ['Home' =>'/', 'Competency'
=>'/setup-settings/competencies',
'Create' => '' ]])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--8 mb-5">
        <div class="row">
            <div class="col">
                <div class="card shadow-lg mb-5">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Competency Information</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('setup-settings.competencies.store') }}">
                            {{ csrf_field() }}
                            <div class="px-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="select-job-family">Job Family</label>
                                            <select
                                                class="form-control  {{ $errors->has('job_family') ? ' is-invalid' : '' }}"
                                                name="job_family" id="job_family_id" required autofocus>
                                                <option value="">Select Job Family...</option>
                                                @foreach ($jobFamilies as $job_family)
                                                    <option value="{{ $job_family->id }}">{{ $job_family->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('job_family')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="sub_job_family">Sub Job
                                                Family</label>
                                            <select
                                                class="form-control {{ $errors->has('sub_job_family') ? ' is-invalid' : '' }}"
                                                name="sub_job_family" id="sub_job_family">
                                                <option value="">Select Job Family First...</option>
                                            </select>
                                            @error('sub_job_family')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="select-competency-type">Competency
                                                Type</label>
                                            <select
                                                class="form-control {{ $errors->has('is_general_knowledge') ? ' is-invalid' : '' }}"
                                                name="is_general_knowledge" id="select-competency-type" required>
                                                <option value="">Select Type...</option>
                                                <option value="1"
                                                    {{ old('is_general_knowledge') == '1' ? 'selected' : '' }}>General
                                                    Knowledge</option>
                                                <option value="0"
                                                    {{ old('is_general_knowledge') == '0' ? 'selected' : '' }}>Technical
                                                    Skill</option>
                                            </select>
                                            @error('is_general_knowledge')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-competency-name">
                                                Competency Name</label>
                                            <input type="text" name="name" id="input-competency-name"
                                                value="{{ old('name') }}"
                                                class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                placeholder="" required>
                                            @error('name')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-competency-description">
                                                Competency Description</label>
                                            <textarea
                                                class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}"
                                                name="description" id="input-competency-description" rows="10"
                                                required>{{ old('description') }}</textarea>
                                            @error('description')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4 btn-lg btn-block">Save</button>
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
        $(document).ready(function() {
            $('#job_family_id').change(function() {
                var $sub_job_family = $('#sub_job_family');
                $.ajax({
                    url: "{{ route('api.sub-job-families.index') }}",
                    data: {
                        job_family_id: $(this).val()
                    },
                    success: function(data) {
                        $sub_job_family.html(
                            '<option value="" selected>Choose Sub Job Family</option>');
                        $.each(data, function(id, value) {
                            $sub_job_family.append('<option value="' + id + '">' +
                                value + '</option>');
                        });
                    }
                });
                $('#sub_job_family').removeClass('d-none');
            });
        });
    </script>

@endpush
