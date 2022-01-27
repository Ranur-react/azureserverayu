@extends('layouts.app', ['pagedirectory' => [
'User Needs' =>'/learning-design/learning-need-analysis/user-needs',
$request_syllabus->training_name => '/learning-design/learning-need-analysis/user-needs/' . $request_syllabus->id . '',
'Edit' => '' ]])

@section('content')
    @include('layouts.headers.auth')

    <div class="container-fluid mt--7 mb-5">
        <div class="row">
            <div class="col">
                <div class="card shadow rounded">
                    <div>
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2 class="mb-0">Training Syllabus</h2>
                                
                                <!-- Button trigger modal -->
                                <button type="button"
                                    class="btn btn-sm bg-yellow icon icon-shape text-white rounded-circle shadow-lg"
                                    data-toggle="modal" data-target="#exampleModal">
                                    <i class="fas fa-info"></i>
                                </button>
                            </div>
                        </div>
                        <form method="POST"
                            action="{{ route('learning-design.learning-need-analysis.user-needs.update', $request_syllabus->id) }}">
                            @method('PUT')
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="px-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label class="form-control-label" for="select-job-family">Job Family <span style="color:red">*<span></label>
                                                <select class="form-control  {{ $errors->has('job_family') ? ' is-invalid' : '' }}" name="job_family" id="job_family_id" required autofocus>
                                                    <option value="">Select Job Family...</option>
                                                        @foreach($jobFamilies as $job_family)
                                                            @if($request_syllabus->syllabusJobFamily->level == 0)
                                                                <option value="{{ $job_family->id }}" {{ $job_family->id == $request_syllabus->syllabusJobFamily->id ? 'selected' : '' }}>{{$job_family->name }}</option>
                                                            @endif
                                                                @if($request_syllabus->syllabusJobFamily->level == 1)
                                                                    <option value="{{ $job_family->id }}" {{ $job_family->id == $request_syllabus->syllabusJobFamily->subJobFamilyJobFamily->id ? 'selected' : '' }}>{{$job_family->name }}</option>
                                                                @endif
                                                        @endforeach
                                                    </option>
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
                                                @if($request_syllabus->syllabusJobFamily->level == 0)
                                                    <select class="form-control {{ $errors->has('sub_job_family') ? ' is-invalid' : '' }}" name="sub_job_family" id="sub_job_family">
                                                        <option value="">Select Job Family First...</option>
                                                    </select>
                                                @endif
                                                @if($request_syllabus->syllabusJobFamily->level == 1)
                                                    <select class="form-control {{ $errors->has('sub_job_family') ? ' is-invalid' : '' }}" name="sub_job_family" id="sub_job_family">
                                                        @foreach($jobFamilies as $sub_job_family)
                                                            @foreach($sub_job_family->jobFamilySubJobFamily->where('parent_id', $request_syllabus->syllabusJobFamily->parent_id) as $row)
                                                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                                                            @endforeach
                                                        @endforeach
                                                    </select>
                                                @endif
                                                @error('sub_job_family')
                                                <span class="invalid-feedback" style="display: block;"
                                                      role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label class="form-control-label" for="input-training-name">Training 
                                                    Name <span style="color:red">*</label>
                                                <input type="text" name="training_name" id="input-training-name"
                                                    value="{{ old('training_name', $request_syllabus->training_name) }}"
                                                    class="form-control {{ $errors->has('training_name') ? ' is-invalid' : '' }}"
                                                    placeholder="" required>
                                                @error('training_name')
                                                    <span class="invalid-feedback" style="display: block;"
                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label class="form-control-label" for="input-training-summary">Training
                                                    Summary <span style="color:red">*</label>
                                                <textarea type="text" name="training_summary" id="input-training-summary"
                                                    rows="5"
                                                    class="form-control {{ $errors->has('training_summary') ? ' is-invalid' : '' }}"
                                                    style="resize: none;" required>{{ old('training_summary', $request_syllabus->training_summary) }}</textarea>
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
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <div class="d-flex mb-4">
                                                    <div class="mr-auto p-2">
                                                    <label class="form-control-label" for="select-level">Level 
                                                        <span style="color:red">*</span></label>
                                                    </div>
                                                    <div class="p-2">
                                                        <button type="button" id="selectAll-level" class="btn btn-outline-primary btn-sm">Select all level</button>
                                                    </div>
                                                    <div class="p-2">
                                                        <button type="button" id="deselectAll-level" class="btn btn-outline-primary btn-sm">Remove all level</button>
                                                    </div>
                                                </div>
                                                {{-- <input type="text" name="level" id="input-level"
                                                    value="@foreach ($syllabus->levels as $list_level)  {{ $loop->first ? '' : ', ' }} {{ $list_level->name }} @endforeach"
                                                    class="form-control form-control-custom {{ $errors->has('level') ? ' is-invalid' : '' }}"
                                                    placeholder=""> --}}

                                                    <select name="level[]" id="select-level" class="form-control {{ $errors->has('level') ? ' is-invalid' : '' }}" multiple="multiple" required>
                                                        @foreach ($levels as $level)
                                                            <option value="{{ $level->id }}" {{ (in_array($level->id, $request_syllabus_levels)) ? 'selected' : '' }}>{{ $level->name }}</option>
                                                        @endforeach
                                                    </select>

                                                @error('level')
                                                    <span class="invalid-feedback" style="display: block;"
                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <div class="d-flex mb-4">
                                                    <div class="mr-auto p-2">
                                                    <label class="form-control-label" for="select-status">Status 
                                                        <span style="color:red">*</span></label>
                                                    </div>
                                                    <div class="p-2">
                                                        <button type="button" id="selectAll-status" class="btn btn-outline-primary btn-sm">Select all status</button>
                                                    </div>
                                                    <div class="p-2">
                                                        <button type="button" id="deselectAll-status" class="btn btn-outline-primary btn-sm">Remove all status</button>
                                                    </div>
                                                </div>
                                                {{-- <input type="text" name="status" id="input-status"
                                                    value="@foreach ($syllabus->statuses as $list_status)  {{ $loop->first ? '' : ', ' }} {{ $list_status->name }} @endforeach"
                                                    class="form-control form-control-custom {{ $errors->has('status') ? ' is-invalid' : '' }}"
                                                    placeholder=""> --}}

                                                    <select name="status[]" id="select-status" class="form-control {{ $errors->has('status') ? ' is-invalid' : '' }}" multiple="multiple" required>
                                                        @foreach ($statuses as $status)
                                                            <option value="{{ $status->id }}" {{ (in_array($status->id, $request_syllabus_statuses)) ? 'selected' : '' }}>{{ $status->name }}</option>
                                                        @endforeach
                                                     </select>

                                                @error('status')
                                                    <span class="invalid-feedback" style="display: block;"
                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <div class="d-flex mb-4">
                                                    <div class="mr-auto p-2">
                                                    <label class="form-control-label" for="select-location">Location 
                                                        <span style="color:red">*</span></label>
                                                    </div>
                                                    <div class="p-2">
                                                        <button type="button" id="selectAll-location" class="btn btn-outline-primary btn-sm">Select all location</button>
                                                    </div>
                                                    <div class="p-2">
                                                        <button type="button" id="deselectAll-location" class="btn btn-outline-primary btn-sm">Remove all location</button>
                                                    </div>
                                                </div>
                                                {{-- <input type="text" name="lokasi_kerja" id="input-lokasi-kerja"
                                                    value="@foreach ($syllabus->locations as $list_location)  {{ $loop->first ? '' : ', ' }} {{ $list_location->name }} @endforeach"
                                                    class="form-control form-control-custom {{ $errors->has('lokasi_kerja') ? ' is-invalid' : '' }}"
                                                    placeholder=""> --}}

                                                    <select name="lokasi_kerja[] " id="select-location" class="form-control {{ $errors->has('lokasi_kerja') ? ' is-invalid' : '' }}" multiple="multiple" required>
                                                        @foreach ($locations as $location)
                                                            <option value="{{ $location->id }}" {{ (in_array($location->id, $request_syllabus_locations)) ? 'selected' : '' }}>{{ $location->name }}</option>
                                                        @endforeach
                                                     </select>

                                                @error('lokasi_kerja')
                                                    <span class="invalid-feedback" style="display: block;"
                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                               <div class="d-flex mb-4">
                                                    <div class="mr-auto p-2">
                                                    <label class="form-control-label" for="select-unit">Unit 
                                                        <span style="color:red">*</span></label>
                                                    </div>
                                                    <div class="p-2">
                                                        <button type="button" id="selectAll-unit" class="btn btn-outline-primary btn-sm">Select all unit</button>
                                                    </div>
                                                    <div class="p-2">
                                                        <button type="button" id="deselectAll-unit" class="btn btn-outline-primary btn-sm">Remove all unit</button>
                                                    </div>
                                                </div>
                                                {{-- <input type="text" name="unit" id="input-unit"
                                                    value="@foreach ($syllabus->units as $list_unit)  {{ $loop->first ? '' : ', ' }} {{ $list_unit->name }} @endforeach"
                                                    class="form-control {{ $errors->has('unit') ? ' is-invalid' : '' }}"
                                                    placeholder=""> --}}

                                                    <select name="unit[] " id="select-unit" class="form-control {{ $errors->has('unit') ? ' is-invalid' : '' }}" multiple="multiple" required>
                                                        @foreach ($units as $unit)
                                                            <option value="{{ $unit->id }}" {{ (in_array($unit->id, $request_syllabus_units)) ? 'selected' : '' }}>{{ $unit->name }}</option>
                                                        @endforeach
                                                     </select>
                                                @error('unit')
                                                    <span class="invalid-feedback" style="display: block;"
                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label class="form-control-label" for="input-training-background">Training
                                                    Background <span style="color:red">*</span></label>
                                                <textarea class="form-control" name="training_background"
                                                    id="input-training-background" rows="10" style="resize: none;"
                                                    required>{{ old('training_background', $request_syllabus->training_background) }}</textarea>
                                                @error('training_background')
                                                    <span class="invalid-feedback" style="display: block;"
                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label class="form-control-label" for="input-training-description">Training
                                                    Description <span style="color:red">*</span></label>
                                                <textarea class="form-control" name="training_description"
                                                    id="input-training-description" rows="10" style="resize: none;"
                                                    required>{{ old('training_description', $request_syllabus->training_description) }}</textarea>
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
                                                        Gain <span style="color:red">*</span></label>
                                                    </div>
                                                    <div class="p-2">
                                                        <button type="button" id="selectAll-skills-will-you-gain" class="btn btn-outline-primary btn-sm">Select all skills will you gain</button>
                                                    </div>
                                                    <div class="p-2">
                                                        <button type="button" id="deselectAll-skills-will-you-gain" class="btn btn-outline-primary btn-sm">Remove all skills will you gain</button>
                                                    </div>
                                                </div>
                                                
                                                {{-- <input type="text" name="skills_will_you_gain"
                                                    value="@foreach($syllabus->competencies as $list_competency){{ $loop->first ? '' : ',' }} {{ $list_competency->name }} @endforeach"
                                                     id="input-skills-will-you-gain"
                                                    class="form-control form-control-custom {{ $errors->has('skills_will_you_gain') ? ' is-invalid' : '' }}"
                                                    placeholder=""> --}}
                                                    <select name="skills_will_you_gain[]" id="select-skills-will-you-gain" class="form-control {{ $errors->has('skills_will_you_gain') ? ' is-invalid' : '' }}" multiple="multiple" required>
                                                        @foreach ($competencies as $competency)
                                                            <option value="{{ $competency->id }}" {{ (in_array($competency->id, $request_syllabus_competencies)) ? 'selected' : '' }}>{{ $competency->name }}</option>
                                                        @endforeach
                                                    </select>
                                                @error('skills_will_you_gain')
                                                    <span class="invalid-feedback" style="display: block;"
                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label class="form-control-label" for="input-learning-scope">
                                                    Learning Scope <span style="color:red">*</span>
                                                </label>
                                                <textarea style="display: none" id="learning_scope"
                                                    name="learning_scope">{!! $request_syllabus->learning_scope !!}</textarea>
                                                <div id="editor-container">
                                                    {!! $request_syllabus->learning_scope !!}
                                                </div>
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
                                                        Recommendation<span style="color:red">*</span></label>
                                                    </div>
                                                    <div class="p-2">
                                                        <button type="button" id="selectAll-partner-recommendation" class="btn btn-outline-primary btn-sm">Select all partner recommendation</button>
                                                    </div>
                                                    <div class="p-2">
                                                        <button type="button" id="deselectAll-partner-recommendation" class="btn btn-outline-primary btn-sm">Remove all partner recommendation</button>
                                                    </div>
                                                </div>
                                                    <select name="partner_recommendation[]" id="select-partner-recommendation" class="form-control {{ $errors->has('partner_recommendation') ? ' is-invalid' : '' }}" multiple="multiple" required>
                                                        @foreach ($vendors as $vendor)
                                                            <option value="{{ $vendor->id }}" {{ (in_array($vendor->id, $request_syllabus_vendors)) ? 'selected' : '' }}>{{ $vendor->partner_name }}</option>
                                                        @endforeach
                                                    </select>

                                                @error('partner_recommendation')
                                                    <span class="invalid-feedback" style="display: block;"
                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success mt-4 btn-lg btn-block">Save Changes</button>
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
    <script>
        $(document).ready(function () {
            $('#job_family_id').change(function () {
                var $sub_job_family = $('#sub_job_family');
                $.ajax({
                    url: "{{ route('api.sub-job-families.index') }}",
                    data: {
                        job_family_id: $(this).val()
                    },
                    success: function (data) {
                        $sub_job_family.html('<option value="" selected>Choose Sub Job Family</option>');
                        $.each(data, function (id, value) {
                            $sub_job_family.append('<option value="' + id + '">' + value + '</option>');
                        });
                    }
                });
                $('#sub_job_family').removeClass('d-none');
            });
        });
    </script>  
    <script>
        $( document ).ready(function() {
            $('#select-level').select2({
                closeOnSelect: false
            });

            $("#selectAll-level").click(function(){
                    $("#select-level > option").prop("selected","selected");
                    $("#select-level").trigger("change");
                });

            $("#deselectAll-level").click(function() {
                $("#select-level").val('').change();
            });
        });
    </script>
    <script>
        $( document ).ready(function() {
            $('#select-status').select2({
                closeOnSelect: false
            });

            $("#selectAll-status").click(function(){
                    $("#select-status > option").prop("selected","selected");
                    $("#select-status").trigger("change");
                });

            $("#deselectAll-status").click(function() {
                $("#select-status").val('').change();
            });
        });
    </script>
    <script>
        $( document ).ready(function() {
            $('#select-location').select2({
                closeOnSelect: false
            });

            $("#selectAll-location").click(function(){
                    $("#select-location > option").prop("selected","selected");
                    $("#select-location").trigger("change");
                });

            $("#deselectAll-location").click(function() {
                $("#select-location").val('').change();
            });
        });
    </script>
    <script>
        $( document ).ready(function() {
            $('#select-unit').select2({
                closeOnSelect: false
            });

            $("#selectAll-unit").click(function(){
                    $("#select-unit > option").prop("selected","selected");
                    $("#select-unit").trigger("change");
                });

            $("#deselectAll-unit").click(function() {
                $("#select-unit").val('').change();
            });
        });
    </script>
    <script>
        $( document ).ready(function() {
            $('#select-skills-will-you-gain').select2({
                closeOnSelect: false
            });

            $("#selectAll-skills-will-you-gain").click(function(){
                    $("#select-skills-will-you-gain > option").prop("selected","selected");
                    $("#select-skills-will-you-gain").trigger("change");
                });

            $("#deselectAll-skills-will-you-gain").click(function() {
                $("#select-skills-will-you-gain").val('').change();
            });
        });
    </script>
    <script>
        $( document ).ready(function() {
            $('#select-partner-recommendation').select2({
                closeOnSelect: false
            });

            $("#selectAll-partner-recommendation").click(function(){
                    $("#select-partner-recommendation > option").prop("selected","selected");
                    $("#select-partner-recommendation").trigger("change");
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
        var inputStatus = document.querySelector('input[name=status]');

        function suggestionItemTemplate(tagData) {
            return `
            <div ${this.getAttributes(tagData)}
                class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'
                tabindex="0"
                role="option">
                <strong>${tagData.name}</strong>
            </div> `
        }

        var tagify = new Tagify(inputStatus, {
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
        var inputLocation = document.querySelector('input[name=lokasi_kerja]');

        function suggestionItemTemplate(tagData) {
            return `
            <div ${this.getAttributes(tagData)}
                class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'
                tabindex="0"
                role="option">
                <strong>${tagData.name}</strong>
            </div> `
        }

        var tagify = new Tagify(inputLocation, {
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
        var quill = new Quill('#editor-container', {
            modules: {
                toolbar: [
                ['bold', 'italic'],
                ['link', 'blockquote', 'code-block'],
                [{ list: 'ordered' }, { list: 'bullet' }]
                ]
            },
            theme: 'snow'
            });

            quill.on('text-change', function(delta, oldDelta, source) {
            console.log(quill.container.firstChild.innerHTML)
            $('#learning_scope').val(quill.container.firstChild.innerHTML);
            });
    </script>
@endpush
