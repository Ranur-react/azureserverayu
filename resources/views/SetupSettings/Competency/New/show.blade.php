@extends('layouts.app', ['pagedirectory' => [ 
'Competency' =>'/setup-settings/competencies',
$prfCompetencyCatalog->name => ''
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
                                <h3 class="mb-0">Detail Competency</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                            <div class="px-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="select-competency-type">Competency
                                                Type</label>
                                            <input type="text" name="type" id="input-competency-type"
                                                value="{{ $prfCompetencyCatalog->type }}"
                                                class="form-control form-control-alternative bg-white text-black cursor-not-allowed" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-competency-name">
                                                Competency Name</label>
                                            <input type="text" name="name" id="input-competency-name"
                                                value="{{ $prfCompetencyCatalog->name }}"
                                                class="form-control form-control-alternative bg-white text-black cursor-not-allowed" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-competency-definition">
                                                Competency Definition</label>
                                            <textarea
                                                class="form-control form-control-alternative bg-white text-black cursor-not-allowed"
                                                name="definition" id="input-competency-definition" rows="10"
                                                disabled>{{ $prfCompetencyCatalog->definition }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-competency-definition-english">
                                                Competency Definition English</label>
                                            <textarea
                                                class="form-control form-control-alternative bg-white text-black cursor-not-allowed"
                                                name="definition_english" id="input-competency-definition-english" rows="10"
                                                disabled>{{ $prfCompetencyCatalog->definition_english }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="select-competency-status">Competency
                                                Status</label>
                                            <select
                                                class="form-control form-control-alternative bg-white text-black cursor-not-allowed"
                                                name="status" id="select-competency-type" disabled>
                                                <option value="">Select Status...</option>
                                                <option value = 0 {{ $prfCompetencyCatalog->status == 0 ? 'selected' : '' }}>Deactive</option>
                                                <option value = 1 {{ $prfCompetencyCatalog->status == 1 ? 'selected' : '' }}>Active</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
