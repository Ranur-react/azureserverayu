@extends('layouts.app', ['pagedirectory' => [
'User Needs' =>'/learning-need-analysis/user-needs',
$user_need->name_of_program => '',
'Show' => '' ]])

@section('content')
    @include('layouts.headers.auth')

    <div class="container-fluid mt--9 mb-5">
        <div class="card shadow-lg rounded">
            <div class="p-md-3 p-1">
                <div class="card-header position-relative">
                    <div class="row align-items-start">
                        <div class="col-lg-8 col-12">
                            <div class="d-block d-md-none">
                                @if ($user_need->syllabus->status_id == 1)
                                    <span class="badge badge-pill badge-info text-right">{{ $user_need->syllabus->syllabusStatus->name }}</span>
                                @elseif ($user_need->syllabus->status_id == 2)
                                    <span class="badge badge-pill badge-success text-right">{{ $user_need->syllabus->syllabusStatus->name }}</span>
                                @elseif ($user_need->syllabus->status_id == 3)
                                    <span class="badge badge-pill badge-warning text-right">{{ $user_need->syllabus->syllabusStatus->name }}</span>
                                @elseif ($user_need->syllabus->status_id == 4)
                                    <span class="badge badge-pill badge-danger text-right">{{ $user_need->syllabus->syllabusStatus->name }}</span>
                                @elseif ($user_need->syllabus->status_id == 5)
                                    <span class="badge badge-pill badge-danger text-right">{{ $user_need->syllabus->syllabusStatus->name }}</span>
                                @else
                                    <span class="badge badge-pill badge-dark text-right">Unknown Status</span>
                                @endif
                            </div>
                            <h1 class="text-xl">{{ $user_need->syllabus->training_name }}</h1>
                            <p class="text-xs font-weight-normal text-muted mb-2">
                                {{ $user_need->syllabus->syllabus_code }}</p>
                            <p class="text-sm mb-0 font-weight-normal">{{ $user_need->syllabus->training_summary }}</p>                
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="d-none d-md-flex justify-content-end">
                                @if ($user_need->syllabus->status_id == 1)
                                    <span class="badge badge-pill badge-info text-right">{{ $user_need->syllabus->syllabusStatus->name }}</span>
                                @elseif ($user_need->syllabus->status_id == 2)
                                    <span class="badge badge-pill badge-success text-right">{{ $user_need->syllabus->syllabusStatus->name }}</span>
                                @elseif ($user_need->syllabus->status_id == 3)
                                    <span class="badge badge-pill badge-warning text-right">{{ $user_need->syllabus->syllabusStatus->name }}</span>
                                @elseif ($user_need->syllabus->status_id == 4)
                                    <span class="badge badge-pill badge-danger text-right">{{ $user_need->syllabus->syllabusStatus->name }}</span>
                                @elseif ($user_need->syllabus->status_id == 5)
                                    <span class="badge badge-pill badge-danger text-right">{{ $user_need->syllabus->syllabusStatus->name }}</span>
                                @else
                                    <span class="badge badge-pill badge-dark text-right">Unknown Status</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow-lg rounded mt-5">
            <div class="card-body">
                <div class="p-md-3 p-1">
                    <div class="row justify-content-center mt--5-5">
                        <div class="col-lg-10">
                            <div class="nav-wrapper">
                                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text"
                                    role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab"
                                            data-toggle="tab" href="#tabs-icons-text-1" role="tab"
                                            aria-controls="tabs-icons-text-1" aria-selected="true"><i
                                                class="fas fa-file-alt mr-2"></i>About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab"
                                            href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2"
                                            aria-selected="false"><i class="fas fa-list-alt mr-2"></i>Verification Form</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab"
                                            href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3"
                                            aria-selected="false"><i class="fas fa-users mr-2"></i>Target Participant</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-4-tab" data-toggle="tab"
                                            href="#tabs-icons-text-4" role="tab" aria-controls="tabs-icons-text-4"
                                            aria-selected="false"><i class="fas fa-history mr-2"></i>Time Line</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel"
                            aria-labelledby="tabs-icons-text-1-tab">
                            <div class="mb-3">
                                <h3
                                    class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                                    Skills Will You Gain
                                </h3>
                                <div class="border p-3">
                                    <div>
                                        @foreach ($user_need->syllabus->prfCompetencyCatalog as $competency)
                                            <span
                                                class="badge badge-pill badge-muted mb-1 mr-1">{{ $competency->name }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <h3
                                    class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                                    Who is This Course For
                                </h3>
                                <div class="row mt-2">
                                    <div class="col-lg-6">
                                        <div class="d-flex">
                                            <i class="ni ni-check-bold text-success mt-1"></i>
                                            <div class="ml-2">
                                                <h4 class="mb-1">Level</h4>
                                                @foreach ($user_need->syllabus->levelsSyllabuses as $level)
                                                    <span
                                                        class="badge badge-pill badge-muted mb-1 mr-1">{{ $level->name }}</span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-flex">
                                            <i class="ni ni-check-bold text-success mt-1"></i>
                                            <div class="ml-2">
                                                <h4 class="mb-1">Status</h4>
                                                @foreach ($user_need->syllabus->statusesSyllabuses as $status)
                                                    <span
                                                        class="badge badge-pill badge-muted mb-1 mr-1">{{ $status->name }}</span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-5">
                                        <div class="d-flex">
                                            <i class="ni ni-check-bold text-success mt-1"></i>
                                            <div class="ml-2">
                                                <h4 class="mb-1">Location</h4>
                                                @foreach ($user_need->syllabus->locationsSyllabuses as $location)
                                                    <span
                                                        class="badge badge-pill badge-muted mb-1 mr-1">{{ $location->location_code }}</span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-5">
                                        <div class="d-flex">
                                            <i class="ni ni-check-bold text-success mt-1"></i>
                                            <div class="ml-2">
                                                <h4 class="mb-1">Unit</h4>
                                                @foreach ($user_need->syllabus->unitsSyllabuses as $unit)
                                                    <span
                                                        class="badge badge-pill badge-muted mb-1 mr-1">{{ $unit->name }}</span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <h3
                                    class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                                    Training Description
                                </h3>
                                <p class="text-sm font-weight-normal mb-0 mt-2">{{ $user_need->syllabus->training_description }}
                                </p>
                            </div>
                            <div class="mb-3">
                                <h3
                                    class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                                    Training Background
                                </h3>
                                <p class="text-sm font-weight-normal mb-0 mt-2">{{ $user_need->syllabus->training_background }}</p>
                            </div>
                            <div class="mb-3">
                                <h3
                                    class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                                    Learning Scope
                                </h3>
                                <p class="text-sm font-weight-normal mb-0 mt-2">{!! $user_need->syllabus->learning_scope !!}</p>
                            </div>
                            <div class="mb-3">
                                <h3
                                    class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                                    Partner Recommendation
                                </h3>
                                    <div class="border p-3">
                                        @foreach ($user_need->syllabus->vendorsSyllabuses as $vendor)
                                        <span
                                        class="badge badge-pill badge-muted mb-1 mr-1">{{ $vendor->partner_name }}</span>
                                        @endforeach
                                    </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel"
                            aria-labelledby="tabs-icons-text-2-tab">
                            <div class="row p-4">
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-control-label" for="input-name-of-program">Name Of Program 
                                            <span style="color:red">*</label>
                                        <input type="text" name="name_of_program" id="input-name-of-program"
                                            value="{{ $user_need->name_of_program }}"
                                            class="form-control bg-white text-black cursor-not-allowed" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-control-label" for="input-objective-program">Objective Program 
                                            <span style="color:red">*</label>
                                        <input type="text" name="objective_program" id="input-objective-program"
                                            value="{{ $user_need->objective_program }}"
                                            class="form-control bg-white text-black cursor-not-allowed" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-control-label" for="textarea-training-background">Training Background 
                                            <span style="color:red">*</label>
                                        <textarea name="training_background" id="textarea-training-background" class="form-control bg-white text-black cursor-not-allowed" rows="10" disabled>{{ $user_need->syllabus->training_background }}</textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-control-label" for="textarea-training-urgency">Training Urgency 
                                            <span style="color:red">*</label>
                                        <textarea name="training_urgency" id="textarea-training-urgency" class="form-control bg-white text-black cursor-not-allowed" rows="10" disabled>{{ $user_need->training_urgency }}</textarea>
                                        @error('training_urgency')
                                            <span class="invalid-feedback" style="display: block;"
                                                role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-control-label" for="input-competency-gap">
                                            Competency Gap </label>
                                        <input type="text" name="competency_gap" id="input-competency-gap"
                                            value="{{ $string_name }}"
                                            class="form-control form-control-custom bg-white cursor-not-allowed" readonly>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-control-label" for="textarea-future-plan-after-training">
                                            Future plans after training 
                                            <span style="color:red">*</label>
                                        <textarea name="future_plans_after_training" id="textarea-future-plan-after-training" class="form-control bg-white text-black cursor-not-allowed" rows="10" disabled>{{ $user_need->training_urgency }}</textarea>
                                        @error('future_plans_after_training')
                                            <span class="invalid-feedback" style="display: block;"
                                                role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-control-label" for="input-content">Content<span style="color:red">*</span></label>
                                            <textarea style="display: none" id="content" name="content" class="text-black" disabled>{!! $user_need->content !!}</textarea>
                                            <div id="editor-container">{!! $user_need->content !!}</div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-control-label" for="select-partner-recommendation">Partner
                                            Recommendation<span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="partner_recommendation" id="select-partner-recommendation" value="{{ $user_need->userNeedVendor->partner_name }}" class="form-control bg-white text-black" disabled>       
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-control-label" for="input-trainer">
                                            Trainer /
                                            Content
                                            Delivery
                                        <span style="color:red">*</label>
                                        <input type="text" name="trainer" id="input-trainer"
                                            value="{{ $user_need->trainer }}"
                                            class="form-control bg-white text-black cursor-not-allowed" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-control-label" for="input-specialities-trainer" required>Specialities
                                            Trainer
                                        <span style="color:red">*</label>
                                        <input type="text" name="specialities_trainer" id="input-specialities-trainer"
                                            value="{{ $user_need->specialities_trainer }}"
                                            class="form-control bg-white text-black cursor-not-allowed" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-control-label" for="input-method">Method
                                        <span style="color:red">*</label>
                                        <input type="text" name="method" id="input-specialities-trainer"
                                            value="{{ $user_need->method }}"
                                            class="form-control bg-white text-black cursor-not-allowed" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group mb-3">
                                        <label class="form-control-label" for="input-date">Date
                                        <span style="color:red">*</label>
                                            <input class="form-control bg-white text-black cursor-not-allowed" id="input-date" name="date" 
                                            value="{{ \Carbon\Carbon::parse($user_need->date)->format('d F, Y') }}"
                                            type="text" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group mb-3">
                                        <label class="form-control-label" for="input-start-time">Start Time
                                        <span style="color:red">*</label>
                                            <input class="form-control bg-white text-black cursor-not-allowed" 
                                            id="input-start-time" name="start_time" 
                                            value="{{ \Carbon\Carbon::parse($user_need->start_time)->format('H:i') }}"
                                            type="text" disabled> 
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group mb-3">
                                        <label class="form-control-label" for="input-date">End Time
                                        <span style="color:red">*</label>
                                            <input class="form-control bg-white text-black cursor-not-allowed" 
                                            id="input-end-time" name="end_time" 
                                            value="{{ \Carbon\Carbon::parse($user_need->end_time)->format('H:i') }}" type="text" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel"
                        aria-labelledby="tabs-icons-text-3-tab">

                        <!-- Light table -->
                        <div class="table-responsive p-4">
                            <table class="table align-items-center table-flush w-100" id="example">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="name">NIK</th>
                                        <th scope="col" class="sort" data-sort="name">Name</th>
                                        <th scope="col" class="sort" data-sort="division">Division</th>
                                        <th scope="col" class="sort" data-sort="gap">GAP</th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    {{-- @foreach ($user_need->userNeedsEmployees as $userNeedEmployee)
                                        <tr>
                                            <td>{{ $userNeedEmployee->nik }}</td>
                                            <td>{{ $userNeedEmployee->name }}</td>
                                            <td>{{ $userNeedEmployee->division }}</td>
                                            <td>{{ $userNeedEmployee->bgroup }}</td>
                                        </tr>
                                    @endforeach --}}
                                </tbody>
                            </table>
                        </div>

                        
                        </div>
                        <div class="tab-pane fade" id="tabs-icons-text-4" role="tabpanel"
                            aria-labelledby="tabs-icons-text-4-tab">
                            <!-- Light table -->
                        <div class="row">
                            <div class="col-md-12 mt-5">
                                <div id="content">
                                    <ul class="timeline">
                                        @foreach ($activities as $activity) 
                                            <li class="event" data-date="{{ \Carbon\Carbon::parse($activity->created_at)->format('d F Y H:i:s') }}">
                                                <h3>{{ $activity->event }}</h3>
                                                @if ($activity->event == "Waiting For HCBP")
                                                    <p>Your training request is being processed by HCBP ({{ $user_need->hcbp->name }}).</p>
                                                @endif
                                                @if ($activity->event == "Rejected By HCBP")
                                                    <p>Your training request was rejected by HCBP ({{ $user_need->hcbp->name }}).</p>
                                                    @if (!empty($activity->properties))
                                                        <p>
                                                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                                Click here to see the reason for rejection.
                                                            </a>
                                                        </p>
                                                        <div class="collapse" id="collapseExample">
                                                            <div class="card card-body text-sm">
                                                                @isset($activity->properties['attributes']['reason_hcbp'])
                                                                    {{ $activity->properties['attributes']['reason_hcbp'] }}
                                                                @endisset
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endif
                                                @if ($activity->event == "Approved By HCBP")
                                                    <p>Your training request was approved by HCBP ({{ $user_need->hcbp->name }}). Furthermore, it is processed by learning architect</p>
                                                @endif
                                                @if ($activity->event == "Waiting For Learning Architect")
                                                    <p>Your training request is being processed by Learning Architect.</p>
                                                @endif
                                                @if ($activity->event == "Approved By Learning Architect")
                                                    <p>Your training request was approved by Learning Architect</p>
                                                @endif
                                                @if ($activity->event == "Rejected By Learning Architect")
                                                    <p>Your training request was rejected by Learning Architect</p>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Activity Detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pt-2">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $('#example').DataTable({
            "pagingType": "numbers",
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "{{ route('learning-need-analysis.user-needs.getUserNeedAjaxEmployees', $user_need->id) }}",
                },
                "columns": [
                    {
                        data: 'nik',
                        name: 'employee.nik'
                    },
                    {
                        data: 'name',
                        name: 'employee.name'
                    },
                    {
                        data: 'division',
                        name: 'employee.division'
                    },
                    {
                        data: 'bgroup',
                        name: 'employee.bgroup'
                    },
                ]
            });
    </script>
    <script>
        // The DOM element you wish to replace with Tagify
        var inputCompetencyGap = document.querySelector('input[name=competency_gap]');

        tagify = new Tagify(inputCompetencyGap);
    </script>
    <script>
        var quill = new Quill('#editor-container');
        quill.enable(false);
    </script>
@endpush