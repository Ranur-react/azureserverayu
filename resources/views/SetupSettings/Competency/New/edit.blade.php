@extends('layouts.app', ['pagedirectory' => [ 
'Competency' =>'/setup-settings/competencies',
$prfCompetencyCatalog->name => '',
'Edit' => '' ]])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--8 mb-5">
        <div class="row">
            <div class="col">
                <div class="card shadow-lg mb-5">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Edit Competency</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST"
                            id="formEditCompetency"
                            action="{{ route('setup-settings.competencies.update', $prfCompetencyCatalog->id) }}">
                            {{ csrf_field() }}
                            @method('PUT')
                            <div class="px-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="select-competency-type">Competency
                                                Type</label>
                                            <select class="form-control {{ $errors->has('type') ? ' is-invalid' : '' }}"
                                                name="type" id="select-competency-type" required>
                                                <option value="">Select Type...</option>
                                                <option value="ROLE COMPETENCY"
                                                    {{ $prfCompetencyCatalog->type == 'ROLE COMPETENCY' ? 'selected' : '' }}>Role
                                                    Competency</option>
                                                <option value="BEHAVIOR"
                                                    {{ $prfCompetencyCatalog->type == 'BEHAVIOR' ? 'selected' : '' }}>Behavior
                                                </option>
                                                <option value="TECHNICAL SKILL"
                                                    {{ $prfCompetencyCatalog->type == 'TECHNICAL SKILL' ? 'selected' : '' }}>
                                                    Technical Skill</option>
                                                <option value="KNOWLEDGE"
                                                    {{ $prfCompetencyCatalog->type == 'KNOWLEDGE' ? 'selected' : '' }}>Knowledge
                                                </option>
                                                <option value="DIGITAL CULTURE"
                                                    {{ $prfCompetencyCatalog->type == 'DIGITAL CULTURE' ? 'selected' : '' }}>Digital
                                                    Culture</option>
                                                <option value="TELKOMSEL DIGILIFE"
                                                    {{ $prfCompetencyCatalog->type == 'TELKOMSEL DIGILIFE' ? 'selected' : '' }}>
                                                    Telkomsel Digilife</option>
                                            </select>
                                            @error('type')
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
                                                value="{{ old('name', $prfCompetencyCatalog->name) }}"
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
                                            <label class="form-control-label" for="input-competency-definition">
                                                Competency Definition</label>
                                            <textarea
                                                class="form-control {{ $errors->has('definition') ? ' is-invalid' : '' }}"
                                                name="definition" id="input-competency-definition" rows="10"
                                                required>{{ old('definition', $prfCompetencyCatalog->definition) }}</textarea>
                                            @error('definition')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-competency-definition-english">
                                                Competency Definition English</label>
                                            <textarea
                                                class="form-control {{ $errors->has('definition_english') ? ' is-invalid' : '' }}"
                                                name="definition_english" id="input-competency-definition-english" rows="10"
                                                required>{{ old('definition_english', $prfCompetencyCatalog->definition_english) }}</textarea>
                                            @error('definition_english')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="select-competency-status">Competency
                                                Status</label>
                                            <select
                                                class="form-control {{ $errors->has('status') ? ' is-invalid' : '' }}"
                                                name="status" id="select-competency-type" required>
                                                <option value="">Select Status...</option>
                                                <option value=0 {{ $prfCompetencyCatalog->status == 0 ? 'selected' : '' }}>Deactive
                                                </option>
                                                <option value=1 {{ $prfCompetencyCatalog->status == 1 ? 'selected' : '' }}>Active
                                                </option>
                                            </select>
                                            @error('status')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4 btn-lg btn-block">Save
                                        Changes</button>
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