@extends('layouts.app', ['pagedirectory' => [
'Job Family Directory' =>'/learning-syllabus/job-families',
$jobFamily->name => '/learning-syllabus/job-families/' . $jobFamily->id . '/sub-job-families',
$subJobFamily->name => '/learning-syllabus/job-families/' . $jobFamily->id . '/sub-job-families/' .
$subJobFamily->id .'/syllabuses',
'Create Syllabus' => '']])

@section('content')
    @include('layouts.headers.auth')

    <div class="container-fluid mt--7 mb-5">
        <div class="row">
            <div class="col">
                <div class="card shadow rounded">
                    <div>
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="mb-0">Training Syllabus</h3>
                                <!-- Button trigger modal -->
                                <button type="button"
                                    class="btn btn-sm bg-yellow icon icon-shape text-white rounded-circle shadow-lg"
                                    data-toggle="modal" data-target="#exampleModal">
                                    <i class="fas fa-info"></i>
                                </button>
                            </div>
                        </div>
                        <form method="POST"
                            action="{{ route('learning-syllabus.job-families.sub-job-families.syllabuses.store', [$jobFamily->id, $subJobFamily->id]) }}"
                            id="formSubJobFamilySyllabus">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="px-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label class="form-control-label" for="input-job-family-code">Job
                                                    Family Code</label>
                                                <input type="text" name="job_family_code"
                                                    value="{{ $jobFamily->job_family_code }}" id="input-job-family-code"
                                                    class="form-control text-black" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label class="form-control-label" for="input-job-family-name">Job Family Name</label>
                                                <input type="text" name="job_family_name" value="{{ $jobFamily->name }}"
                                                    id="input-job-family-name" class="form-control text-black"
                                                    disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label class="form-control-label" for="input-job-family-code">Sub Job
                                                    Family Code</label>
                                                <input type="text" name="job_family_code"
                                                    value="{{ $subJobFamily->job_family_code }}"
                                                    id="input-job-family-code" class="form-control text-black"
                                                    disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label class="form-control-label" for="input-job-family-name">Sub Job
                                                    Family Name</label>
                                                <input type="text" name="job_family_name"
                                                    value="{{ $subJobFamily->name }}" id="input-job-family-name"
                                                    class="form-control text-black" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label class="form-control-label" for="input-syllabus-code">Syllabus
                                                    Code</label>
                                                <input type="text" name="syllabus_code" id="input-syllabus-code"
                                                    value="{{ $subJobFamily->job_family_code ?? '' }}.0"
                                                    class="form-control text-black" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label class="form-control-label" for="input-training-name">Training
                                                    Name</label>
                                                <input type="text" name="training_name" id="input-training-name"
                                                    value="{{ old('training_name') }}"
                                                    class="form-control {{ $errors->has('training_name') ? ' is-invalid' : '' }}"
                                                    placeholder="" required autofocus>
                                                @error('training_name')
                                                    <span class="invalid-feedback" style="display: block;"
                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label class="form-control-label" for="input-training-summary">Training
                                                    Summary</label>
                                                <textarea type="text" name="training_summary" id="input-training-summary"
                                                    rows="5"
                                                    class="form-control {{ $errors->has('training_summary') ? ' is-invalid' : '' }}"
                                                    style="resize: none;" required>{{ old('training_summary') }}</textarea>
                                                @error('training_summary')
                                                    <span class="invalid-feedback" style="display: block;"
                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h3 class="mb-0">Who is This Course For?</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="px-lg-4">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <div class="d-flex mb-4">
                                                    <div class="mr-auto p-2">
                                                        <label class="form-control-label" for="select-level">Level</label>
                                                    </div>
                                                    <div class="p-2">
                                                        <button type="button" id="deselectAll-levels" class="btn btn-outline-primary btn-sm">Remove all level</button>
                                                    </div>
                                                </div>
                                                {{-- <input type="text" name="level" id="input-level"
                                                    value=""
                                                    class="form-control form-control-custom {{ $errors->has('level') ? ' is-invalid' : '' }}" > --}}

                                                    <select name="levels[]" id="select-level" class="form-control {{ $errors->has('levels') ? ' is-invalid' : '' }}"
                                                        multiple="multiple" required>
                                                        @foreach ($levels as $level)
                                                            <option value="{{ $level->id }}" @if (old("levels")){{ (in_array($level->id, old("levels")) ? "selected":"") }} @endif>{{ $level->name }}</option>
                                                        @endforeach
                                                    </select>
                                                @error('levels')
                                                    <span class="invalid-feedback" style="display: block;"
                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <div class="d-flex mb-4">
                                                    <div class="mr-auto p-2">
                                                    <label class="form-control-label" for="select-status">Status</label>
                                                    </div>
                                                    <div class="p-2">
                                                        <button type="button" id="deselectAll-status" class="btn btn-outline-primary btn-sm">Remove all status</button>
                                                    </div>
                                                </div>
                                                {{-- <input type="text" name="status" id="input-status"
                                                    value=""
                                                    class="form-control form-control-custom {{ $errors->has('status') ? ' is-invalid' : '' }}">
                                                     --}}

                                                     <select name="statuses[]" id="select-status" class="form-control {{ $errors->has('statuses') ? ' is-invalid' : '' }}" multiple="multiple" required>
                                                        @foreach ($statuses as $status)
                                                            <option value="{{ $status->id }}" @if (old("statuses")){{ (in_array($status->id, old("statuses")) ? "selected":"") }} @endif>{{ $status->name }}</option>
                                                        @endforeach
                                                     </select>
                                                @error('statuses')
                                                    <span class="invalid-feedback" style="display: block;"
                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <div class="d-flex mb-4">
                                                    <div class="mr-auto p-2">
                                                    <label class="form-control-label" for="select-location">Location</label>
                                                    </div>
                                                    <div class="p-2">
                                                        <button type="button" id="deselectAll-location" class="btn btn-outline-primary btn-sm">Remove all location</button>
                                                    </div>
                                                </div>
                                                {{-- <input name="lokasi_kerja" id="input-lokasi-kerja"
                                                    value=""
                                                    class="form-control form-control-custom {{ $errors->has('lokasi_kerja') ? ' is-invalid' : '' }}"> --}}

                                                    <select name="locations[] " id="select-location" class="form-control {{ $errors->has('locations') ? ' is-invalid' : '' }}" multiple="multiple" required>
                                                        {{-- @foreach ($locations as $location)
                                                            <option value="{{ $location->id }}" @if (old("lokasi_kerja")){{ (in_array($location->id, old("lokasi_kerja")) ? "selected":"") }} @endif>{{ $location->name }}</option>
                                                        @endforeach --}}
                                                     </select>
                                                @error('locations')
                                                    <span class="invalid-feedback" style="display: block;"
                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <div class="d-flex mb-4">
                                                    <div class="mr-auto p-2">
                                                    <label class="form-control-label" for="select-unit">Unit</label>
                                                    </div>
                                                    <div class="p-2">
                                                        <button type="button" id="deselectAll-unit" class="btn btn-outline-primary btn-sm">Remove all unit</button>
                                                    </div>
                                                </div>
                                                {{-- <input name="unit" id="input-unit" value="{{ old('unit') }}"
                                                    class="form-control form-control-custom {{ $errors->has('unit') ? ' is-invalid' : '' }}"> --}}

                                                    <select name="units[] " id="select-unit" class="form-control {{ $errors->has('units') ? ' is-invalid' : '' }}" multiple="multiple" required>
                                                        {{-- @foreach ($units as $unit)
                                                            <option value="{{ $unit->id }}" @if (old("unit")){{ (in_array($unit->id, old("unit")) ? "selected":"") }} @endif>{{ $unit->name }}</option>
                                                        @endforeach --}}
                                                     </select>
                                                @error('units')
                                                    <span class="invalid-feedback" style="display: block;"
                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label class="form-control-label" for="input-training-background">Training
                                                    Background </label>
                                                <textarea class="form-control" name="training_background"
                                                    id="input-training-background" rows="10"
                                                    style="resize: none;" required>{{ old('training_background') }}</textarea>
                                                @error('training_background')
                                                    <span class="invalid-feedback" style="display: block;"
                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label class="form-control-label" for="input-training-description">Training
                                                    Description </label>
                                                <textarea class="form-control" name="training_description"
                                                    id="input-training-description" rows="10"
                                                    style="resize: none;" required>{{ old('training_description') }}</textarea>
                                                @error('training_description')
                                                    <span class="invalid-feedback" style="display: block;"
                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <div class="d-flex mb-4">
                                                    <div class="mr-auto p-2">
                                                    <label class="form-control-label" for="select-skills-will-you-gain">Skills
                                                        Will You
                                                        Gain </label>
                                                    </div>
                                                    <div class="p-2">
                                                        <button type="button" id="deselectAll-skills-will-you-gain" class="btn btn-outline-primary btn-sm">Remove all skills will you gain</button>
                                                    </div>
                                                </div>

                                                {{-- <input type="text" name="skills_will_you_gain"
                                                    id="input-skills-will-you-gain"
                                                    class="form-control form-control-custom {{ $errors->has('skills_will_you_gain') ? ' is-invalid' : '' }}"
                                                       value=""
                                                    placeholder=""> --}}

                                                    <select name="skills_will_you_gain[]" id="select-skills-will-you-gain" class="form-control {{ $errors->has('skills_will_you_gain') ? ' is-invalid' : '' }}" multiple="multiple" required>
                                                        {{-- @foreach ($competencies as $competency)
                                                            <option value="{{ $competency->id }}" @if (old("skills_will_you_gain")){{ (in_array($competency->id, old("skills_will_you_gain")) ? "selected":"") }} @endif>{{ $competency->name }}</option>
                                                        @endforeach --}}
                                                    </select>
                                                @error('skills_will_you_gain')
                                                    <span class="invalid-feedback" style="display: block;"
                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label class="form-control-label" for="input-learning-scope">Learning
                                                    Scope </label>
                                                    <textarea style="display: none" id="learning_scope" name="learning_scope">{!! old('learning_scope')  !!}</textarea>
                                                    <div id="editor-container">{!! old('learning_scope')  !!}</div>
                                                @error('learning_scope')
                                                    <span class="invalid-feedback" style="display: block;"
                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <div class="d-flex mb-4">
                                                    <div class="mr-auto p-2">
                                                    <label class="form-control-label" for="select-partner-recommendation">Partner
                                                        Recommendation</label>
                                                    </div>
                                                    <div class="p-2">
                                                        <button type="button" id="deselectAll-partner-recommendation" class="btn btn-outline-primary btn-sm">Remove all partner recommendation</button>
                                                    </div>
                                                </div>
                                                {{-- <input type="text" name="partner_recommendation"
                                                    value="{{ old('partner_recommendation') }}"
                                                    id="input-partner-recommendation"
                                                    class="form-control form-control-custom {{ $errors->has('partner_recommendation') ? ' is-invalid' : '' }}"
                                                    placeholder=""> --}}

                                                    <select name="partner_recommendation[]" id="select-partner-recommendation" class="form-control {{ $errors->has('partner_recommendation') ? ' is-invalid' : '' }}" multiple="multiple" required>
                                                        {{-- @foreach ($vendors as $vendor)
                                                            <option value="{{ $vendor->id }}" @if (old("partner_recommendation")){{ (in_array($vendor->id, old("partner_recommendation")) ? "selected":"") }} @endif>{{ $vendor->partner_name }}</option>
                                                        @endforeach --}}
                                                    </select>
                                                @error('partner_recommendation')
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
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Information Level</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body pt-1 pb-0">
                                <div>
                                    <div class="card-header p-0 pb-3">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <h3 class="mb-0">Level Basic</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0 py-3">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h4 class="text-md">Proficiency
                                                    Level Description</h4>
                                                <p class="text-sm">Peserta mampu
                                                    mengetahui
                                                    dan memahami konsep, metode, pendekatan, dan
                                                    tools dasar. </p>
                                            </div>
                                            <div class="col-lg-12">
                                                <h4 class="text-md" for="paragraph2-learning-evaluation-basic">
                                                    Learning Evaluation</h4>
                                                <p class="text-sm">Level 1 - Level 2</p>
                                            </div>
                                            <div class="col-lg-12">
                                                <h4 class="text-md">Playground & Duration</h4>
                                                <ul class="pl-4">
                                                    <li>
                                                        <p class="text-sm mb-0"> E-Learning (2-11 Jam)</p>
                                                    </li>
                                                    <li>
                                                        <p class="text-sm mb-0">Instructor Led (8-16 Jam)</p>
                                                    </li>
                                                    <li>
                                                        <p class="text-sm mb-0">Seminar (6-12 Jam)</p>
                                                    </li>
                                                    <li>
                                                        <p class="text-sm mb-0">Sharing Session (2-4 Jam)</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-header p-0 pb-3">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <h3 class="mb-0">Level Intermediate</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0 py-3">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h4 class="text-md">Proficiency
                                                    Level Description</h4>
                                                <p class="text-sm">Peserta mampu mengaplikasikan sebuah konsep,
                                                    metode, pendekatan, dan tools dasar serta memberikan solusi pada
                                                    permasalahan umum.
                                                </p>
                                            </div>
                                            <div class="col-lg-12">
                                                <h4 class="text-md">Learning Evaluation</h4>
                                                <p class="text-sm">Level 1 - Level 3</p>
                                            </div>
                                            <div class="col-lg-12">
                                                <h4 class="text-md">Playground & Duration</h4>
                                                <ul class="pl-4">
                                                    <li>
                                                        <p class="text-sm mb-0">Instructor Led (16-40 Jam)
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <p class="text-sm mb-0">Blended Learning with General Use
                                                                Case</p>
                                                            <ul class="pl-3">
                                                                <li class="text-sm font-weight-light">
                                                                    Instructor-Led / E-Learning (16-24 Jam)
                                                                </li>
                                                                <li class="text-sm font-weight-light">
                                                                    Project Coaching (2-4 Sesi)
                                                                </li>
                                                                <li class="text-sm font-weight-light">
                                                                    Final Presentation (8 Jam)
                                                                </li>
                                                            </ul>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-header p-0 pb-3">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <h3 class="mb-0">Level Advance</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0 py-3">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h4 class="text-md">Proficiency Level Description</h4>
                                                <p class="text-sm">Peserta mampu memahami, menguasai, dan
                                                    mengaplikasikan beragam konsep, metode, pendekatan dan tools serta dapat
                                                    memberikan solusi pada permasalahaan spesifik.</p>
                                            </div>
                                            <div class="col-lg-12">
                                                <h4 class="text-md">Learning Evaluation</h4>
                                                <p class="text-sm">Level 1 - Level 3</p>
                                            </div>
                                            <div class="col-lg-12">
                                                <h4 class="text-md">Playground & Duration</h4>
                                                <ul class="pl-4">
                                                    <li>
                                                        <span>
                                                            <p class="text-sm mb-0">Blended Learning with General Use
                                                                Case</p>
                                                            <ul class="pl-3">
                                                                <li class="text-sm font-weight-light">
                                                                    Instructor-Led / E-Learning (16-24 Jam)
                                                                </li>
                                                                <li class="text-sm font-weight-light">
                                                                    Project Coaching (2-4 Sesi)
                                                                </li>
                                                                <li class="text-sm font-weight-light">
                                                                    Final Presentation (8 Jam)
                                                                </li>
                                                            </ul>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-header p-0 pb-3">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <h3 class="mb-0">Level Master</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0 py-3">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h4 class="text-md">Proficiency Level Description</h4>
                                                <p class="text-sm">Peserta dapat diakui keahliannya terhadap beragam
                                                    konsep, metode, pendekatan, dan tools serta memberikan solusi dengan
                                                    menerapkan berbagai interdisiplin ilmu dalam menyelesaikan permasalahan
                                                    yang sangat kompleks.</p>
                                            </div>
                                            <div class="col-lg-12">
                                                <h4 class="text-md">Learning Evaluation</h4>
                                                <p class="text-sm">Level 1 - Level 4</p>
                                            </div>
                                            <div class="col-lg-12">
                                                <h4 class="text-md">Playground & Duration</h4>
                                                <ul class="pl-4">
                                                    <li>
                                                        <span>
                                                            <p class="text-sm mb-0">Blended Learning with General Use
                                                                Case</p>
                                                            <ul class="pl-3">
                                                                <li class="text-sm font-weight-light">
                                                                    Instructor-Led / E-Learning (Bootcamp) (24-40 Jam)
                                                                </li>
                                                                <li class="text-sm font-weight-light">
                                                                    Project Coaching (2-4 Sesi)
                                                                </li>
                                                                <li class="text-sm font-weight-light">
                                                                    Final Presentation (8 Jam)
                                                                </li>
                                                                <li class="text-sm font-weight-light">
                                                                    Sertifikasi (1 Kali exam)
                                                                </li>
                                                            </ul>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer pt-0">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    </div>
@endsection
@push('js')
    {{-- <script type="text/javascript">
        $(document).ready(function(){
            $("#formSubJobFamilySyllabus").submit(function() {
                    $(this).submit(function() {
                        return false;
                    });
                    return true;
                });
        });
    </script> --}}
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
    <script>
        $( document ).ready(function() {
            $('#select-level').select2({
                closeOnSelect: false,
            });
        
            $("#deselectAll-levels").click(function() {
                $("#select-level").val('').change();
            });
        });
    </script>
    <script>
        $( document ).ready(function() {
            $('#select-status').select2({
                closeOnSelect: false
            });

            $("#deselectAll-status").click(function() {
                $("#select-status").val('').change();
            });
        });
    </script>
    <script>
        $( document ).ready(function() {
            $("#select-location").select2({
                closeOnSelect: false,
                allowClear: true,
                ajax: {
                    url: "{{ route('learning-syllabus.job-families.sub-job-families.syllabuses.getSelect2LocationsAjax', [$jobFamily->id, $subJobFamily->id]) }}",
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            term: params.term || '',
                            page: params.page || 1
                        };
                    },
                    cache: true
                },
            });

            $("#deselectAll-location").click(function() {
                    $("#select-location").val('').change();
                });
        });
    </script>
    <script>
        $( document ).ready(function() {
            $('#select-unit').select2({
                closeOnSelect: false,
                allowClear: true,
                ajax: {
                    url: "{{ route('learning-syllabus.job-families.sub-job-families.syllabuses.getSelect2OrganizationUnitsAjax', [$jobFamily->id, $subJobFamily->id]) }}",
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            term: params.term || '',
                            page: params.page || 1
                        };
                    },
                    cache: true
                },
            });

            $("#deselectAll-unit").click(function() {
                $("#select-unit").val('').change();
            });
        });
    </script>
    <script>
        $( document ).ready(function() {
            $('#select-skills-will-you-gain').select2({
                closeOnSelect: false,
                allowClear: true,
                ajax: {
                    url: "{{ route('learning-syllabus.job-families.sub-job-families.syllabuses.getSelect2CompetenciesAjax', [$jobFamily->id, $subJobFamily->id]) }}",
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            term: params.term || '',
                            page: params.page || 1
                        };
                    },
                    cache: true
                },
            });

            $("#deselectAll-skills-will-you-gain").click(function() {
                $("#select-skills-will-you-gain").val('').change();
            });
        });
    </script>
    <script>
        $( document ).ready(function() {
            $('#select-partner-recommendation').select2({
                closeOnSelect: false,
                allowClear: true,
                ajax: {
                    url: "{{ route('learning-syllabus.job-families.sub-job-families.syllabuses.getSelect2VendorsAjax', [$jobFamily->id, $subJobFamily->id]) }}",
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            term: params.term || '',
                            page: params.page || 1
                        };
                    },
                    cache: true
                },
            });

            $("#deselectAll-partner-recommendation").click(function() {
                $("#select-partner-recommendation").val('').change();
            });
        });
    </script>
    {{-- <script>
        var inputElm = document.querySelector('input[name=skills_will_you_gain]');

        function suggestionItemTemplate(tagData) {
            return `
            <div ${this.getAttributes(tagData)}
                class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'
                tabindex="0"
                role="option">
                <strong>${tagData.name}</strong>
            </div> `
        }

        var tagify = new Tagify(inputElm, {
            originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(','),
            tagTextProp: 'name',
            enforceWhitelist: true,
            whitelist: [
                @foreach ($competencies as $competency)
                    {
                    value:'{{ $competency->id }}',
                    name :'{{ $competency->name }}',
                    },
                @endforeach
            ],
            dropdown: {
                enabled: 0, // show the dropdown immediately on focus
                maxItems: Infinity,
                position: "input", // place the dropdown near the typed text
                closeOnSelect: false, // keep the dropdown open after selecting a suggestion
                highlightFirst: true,
                searchKeys: ['name']
            },
            templates: {
                dropdownItem: suggestionItemTemplate,
            },
        });

        tagify.on('dropdown:show dropdown:updated', onDropdownShow)
        tagify.on('dropdown:select', onSelectSuggestion)

        var addAllSuggestionsElm;

        function onDropdownShow(e){
            var dropdownContentElm = e.detail.tagify.DOM.dropdown.content;

            if( tagify.suggestedListItems.length > 1 ){
                addAllSuggestionsElm = getAddAllSuggestionsElm();

                // insert "addAllSuggestionsElm" as the first element in the suggestions list
                dropdownContentElm.insertBefore(addAllSuggestionsElm, dropdownContentElm.firstChild)
            }
        }

        function onSelectSuggestion(e){
            if( e.detail.elm == addAllSuggestionsElm )
                tagify.dropdown.selectAll();
        }

        // create a "add all" custom suggestion element every time the dropdown changes
        function getAddAllSuggestionsElm(){
            // suggestions items should be based on "dropdownItem" template
            return tagify.parseTemplate('dropdownItem', [{
                    class: "addAll",
                    name: "Add all",
                    email: tagify.whitelist.reduce(function(remainingSuggestions, item){
                        return tagify.isTagDuplicate(item.value) ? remainingSuggestions : remainingSuggestions + 1
                    }, 0) + " Members"
                }]
            )
        }

        // "remove all tags" button event listener
        document.querySelector('.tags--removeAllCompetency')
            .addEventListener('click', tagify.removeAllTags.bind(tagify))
    </script>
    <script>
        var inputPartner = document.querySelector('input[name=partner_recommendation]');

        function suggestionItemTemplate(tagData) {
            return `
            <div ${this.getAttributes(tagData)}
                class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'
                tabindex="0"
                role="option">
                <strong>${tagData.name}</strong>
            </div> `
        }

        var tagify = new Tagify(inputPartner, {
            originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(','),
            tagTextProp: 'name',
            enforceWhitelist: true,
            whitelist: [
                @foreach ($vendors as $vendor)
                    {
                    value:'{{ $vendor->id }}',
                    name :'{{ $vendor->partner_name }}',
                    },
                @endforeach
            ],
            dropdown: {
                enabled: 0, // show the dropdown immediately on focus
                maxItems: Infinity,
                position: "input", // place the dropdown near the typed text
                closeOnSelect: false, // keep the dropdown open after selecting a suggestion
                highlightFirst: true,
                searchKeys: ['name']
            },
            templates: {
                dropdownItem: suggestionItemTemplate,
            },
        });

        // "remove all tags" button event listener
        document.querySelector('.tags--removeAllPartner')
            .addEventListener('click', tagify.removeAllTags.bind(tagify))
    </script>
    <script>
        var inputPartner = document.querySelector('input[name=level]');

        function suggestionItemTemplate(tagData) {
            return `
            <div ${this.getAttributes(tagData)}
                class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'
                tabindex="0"
                role="option">
                <strong>${tagData.name}</strong>
            </div> `
        }

        var tagify = new Tagify(inputPartner, {
            originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(','),
            tagTextProp: 'name',
            enforceWhitelist: true,
            whitelist: [
                @foreach ($levels as $level)
                    {
                    value:'{{ $level->id }}',
                    name :'{{ $level->name }}',
                    },
                @endforeach
            ],
            dropdown: {
                enabled: 0, // show the dropdown immediately on focus
                maxItems: Infinity,
                position: "input", // place the dropdown near the typed text
                closeOnSelect: false, // keep the dropdown open after selecting a suggestion
                highlightFirst: true,
                searchKeys: ['name']
            },
            templates: {
                dropdownItem: suggestionItemTemplate,
            },
        });

        // "remove all tags" button event listener
        document.querySelector('.tags--removeAllLevel')
            .addEventListener('click', tagify.removeAllTags.bind(tagify))
    </script>
    <script>
        var inputPartner = document.querySelector('input[name=unit]');

        function suggestionItemTemplate(tagData) {
            return `
            <div ${this.getAttributes(tagData)}
                class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'
                tabindex="0"
                role="option">
                <strong>${tagData.name}</strong>
            </div> `
        }

        var tagify = new Tagify(inputPartner, {
            originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(','),
            tagTextProp: 'name',
            enforceWhitelist: true,
            whitelist: [
                @foreach ($units as $unit)
                    {
                    value:'{{ $unit->id }}',
                    name :'{{ $unit->name }}',
                    },
                @endforeach
            ],
            dropdown: {
                enabled: 0, // show the dropdown immediately on focus
                maxItems: Infinity,
                position: "input", // place the dropdown near the typed text
                closeOnSelect: false, // keep the dropdown open after selecting a suggestion
                highlightFirst: true,
                searchKeys: ['name']
            },
            templates: {
                dropdownItem: suggestionItemTemplate,
            },
        });

        // "remove all tags" button event listener
        document.querySelector('.tags--removeAllUnit')
            .addEventListener('click', tagify.removeAllTags.bind(tagify))
    </script>
    <script>
        var inputPartner = document.querySelector('input[name=status]');

        function suggestionItemTemplate(tagData) {
            return `
            <div ${this.getAttributes(tagData)}
                class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'
                tabindex="0"
                role="option">
                <strong>${tagData.name}</strong>
            </div> `
        }

        var tagify = new Tagify(inputPartner, {
            originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(','),
            tagTextProp: 'name',
            enforceWhitelist: true,
            whitelist: [
                @foreach ($status as $data)
                    {
                    value:'{{ $data->id }}',
                    name :'{{ $data->name }}',
                    },
                @endforeach
            ],
            dropdown: {
                enabled: 0, // show the dropdown immediately on focus
                maxItems: Infinity,
                position: "input", // place the dropdown near the typed text
                closeOnSelect: false, // keep the dropdown open after selecting a suggestion
                highlightFirst: true,
                searchKeys: ['name']
            },
            templates: {
                dropdownItem: suggestionItemTemplate,
            },
        });

        // "remove all tags" button event listener
        document.querySelector('.tags--removeAllStatus')
            .addEventListener('click', tagify.removeAllTags.bind(tagify))
    </script>
    <script>
        var inputPartner = document.querySelector('input[name=lokasi_kerja]');

        function suggestionItemTemplate(tagData) {
            return `
            <div ${this.getAttributes(tagData)}
                class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'
                tabindex="0"
                role="option">
                <strong>${tagData.name}</strong>
            </div> `
        }

        var tagify = new Tagify(inputPartner, {
            originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(','),
            tagTextProp: 'name',
            enforceWhitelist: true,
            whitelist: [
                @foreach ($locations as $location)
                    {
                    value:'{{ $location->id }}',
                    name :'{{ $location->name }}',
                    },
                @endforeach
            ],
            dropdown: {
                enabled: 0, // show the dropdown immediately on focus
                maxItems: Infinity,
                position: "input", // place the dropdown near the typed text
                closeOnSelect: false, // keep the dropdown open after selecting a suggestion
                highlightFirst: true,
                searchKeys: ['name']
            },
            templates: {
                dropdownItem: suggestionItemTemplate,
            },
        });

        // "remove all tags" button event listener
        document.querySelector('.tags--removeAllLocation')
            .addEventListener('click', tagify.removeAllTags.bind(tagify))
    </script> --}}
    <script>
        var toolbarOptions = [
           ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
           ['blockquote', 'code-block'],

           [{ 'header': 1 }, { 'header': 2 }],               // custom button values
           [{ 'list': 'ordered'}, { 'list': 'bullet' }],
           [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
           [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
           [{ 'direction': 'rtl' }],                         // text direction

           [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
           [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

           [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
           [{ 'font': [] }],
           [{ 'align': [] }],

           ['clean']                                         // remove formatting button
       ];

       var quill = new Quill('#editor-container', {
           modules: {
           toolbar: toolbarOptions
           },
           theme: 'snow'
       });

           quill.on('text-change', function(delta, oldDelta, source) {
           console.log(quill.container.firstChild.innerHTML)
           $('#learning_scope').val(quill.container.firstChild.innerHTML);
           });
   </script>
@endpush
