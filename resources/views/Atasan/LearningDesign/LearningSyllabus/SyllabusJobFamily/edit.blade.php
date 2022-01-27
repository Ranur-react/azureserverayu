@extends('layouts.app', ['pagedirectory' => ['Request Syllabus' =>'/learning-design/learning-syllabus/request-syllabus',
$syllabus->training_name => '' ]])

@section('content')
    @include('layouts.headers.auth')

    <div class="container-fluid mt--9 mb-5">
        <div class="card shadow-lg rounded">
            <div class="p-md-3 p-1">
                <div class="card-header position-relative">
                    <div class="row align-items-start">
                        <div class="col-lg-8 col-12">
                            <div class="d-block d-md-none">
                                <span class="badge badge-pill badge-danger text-right">{{ $syllabus->syllabusStatus->name }}</span>
                            </div>
                            <h1 class="text-xl">{{ $syllabus->training_name }}</h1>
                            <p class="text-xs font-weight-normal text-muted mb-2">
                                {{ $syllabus->syllabus_code }}</p>
                            <p class="text-sm mb-0 font-weight-normal">{{ $syllabus->training_summary }}</p>
                            @can('learning_syllabus_approve')
                                <div class="row p-3">
                                    <div class="mr-4">
                                        <form method="POST"
                                              action="{{ route('learning-design.learning-syllabus.request-syllabus.job-families.reject', [$syllabus->id, $jobFamily->id]) }}">
                                            @method('PUT')
                                            {{ csrf_field() }}
                                            <input type="hidden" name="number" value="9999">
                                            <input type="hidden" name="syllabus_code"
                                                   value="{{ $jobFamily->job_family_code ?? '' }}.9999">
                                            <button type="submit" class="btn btn-warning">Reject</button>
                                        </form>
                                    </div>

                                    <div>
                                        <form method="POST"
                                              action="{{ route('learning-design.learning-syllabus.request-syllabus.job-families.update', [$syllabus->id, $jobFamily->id]) }}">
                                            @method('PUT')
                                            {{ csrf_field() }}
                                            <input type="hidden" name="number" value="{{ $max_number }}">
                                            <input type="hidden" name="syllabus_code"
                                                   value="{{ $jobFamily->job_family_code ?? '' }}.{{ str_pad($max_number, 2, '0', STR_PAD_LEFT) }}">
                                            <button type="submit" class="btn btn-success">Approve</button>
                                        </form>
                                    </div>
                                </div>
                            @endcan

                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="d-none d-md-flex justify-content-end">
                                <span class="badge badge-pill badge-danger text-right">{{ $syllabus->syllabusStatus->name }}</span>
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
                        <div class="col-lg-6">
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
                                           aria-selected="false"><i class="fas fa-history mr-2"></i>Log</a>
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
                                        @foreach ($syllabus->prfCompetencyCatalog as $competency)
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
                                    <div class="col-lg-3">
                                        <div class="d-flex">
                                            <i class="ni ni-check-bold text-success mt-1"></i>
                                            <div class="ml-2">
                                                <h4 class="mb-1">Level</h4>
                                                @foreach ($syllabus->levels as $level)
                                                    <span
                                                        class="badge badge-pill badge-muted mb-1 mr-1">{{ $level->name }}</span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="d-flex">
                                            <i class="ni ni-check-bold text-success mt-1"></i>
                                            <div class="ml-2">
                                                <h4 class="mb-1">Status</h4>
                                                @foreach ($syllabus->statuses as $status)
                                                    <span
                                                        class="badge badge-pill badge-muted mb-1 mr-1">{{ $status->name }}</span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="d-flex">
                                            <i class="ni ni-check-bold text-success mt-1"></i>
                                            <div class="ml-2">
                                                <h4 class="mb-1">Location</h4>
                                                @foreach ($syllabus->locations as $location)
                                                    <span
                                                        class="badge badge-pill badge-muted mb-1 mr-1">{{ $location->name }}</span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="d-flex">
                                            <i class="ni ni-check-bold text-success mt-1"></i>
                                            <div class="ml-2">
                                                <h4 class="mb-1">Unit</h4>
                                                @foreach ($syllabus->units as $unit)
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
                                <p class="text-sm font-weight-normal mb-0 mt-2">{{ $syllabus->training_description }}
                                </p>
                            </div>
                            <div class="mb-3">
                                <h3
                                    class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                                    Training Background
                                </h3>
                                <p class="text-sm font-weight-normal mb-0 mt-2">{{ $syllabus->training_background }}</p>
                            </div>
                            <div class="mb-3">
                                <h3
                                    class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                                    Learning Scope
                                </h3>
                                <p class="text-sm font-weight-normal mb-0 mt-2">{!! $syllabus->learning_scope !!}</p>
                            </div>
                            <div class="mb-3">
                                <h3
                                    class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                                    Partner Recommendation
                                </h3>
                                <ul>
                                    @foreach ($syllabus->vendors as $vendor)
                                        <li>
                                            <p class="text-sm font-weight-normal mb-0">
                                                {{ $vendor->partner_name }}
                                            </p>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel"
                             aria-labelledby="tabs-icons-text-2-tab">
                            <!-- Light table -->
                            <div class="table-responsive mt-2">
                                <table class="table align-items-center table-flush" id="example">
                                    <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="name">Name</th>
                                        <th scope="col" class="sort" data-sort="activity">Activity</th>
                                        <th scope="col" class="sort" data-sort="changes">Changes</th>
                                        <th scope="col" class="sort" data-sort="date">
                                            Date</th>
                                    </tr>
                                    </thead>
                                    <tbody class="list">
                                    @foreach ($activities as $activity)
                                        <tr>
                                            <td>
                                                {{ $activity->causer->employee->name ?? '' }}
                                            </td>
                                            <td>
                                                {{ $activity->description }}
                                            </td>
                                            @if ($activity->description == "updated")
                                                <td>
                                                    <a
                                                        href="{{ route('api.syllabuses.showActivitySyllabus', $activity->id) }}" class="modal-global">
                                                        View Changes
                                                    </a>
                                                </td>
                                            @else
                                                <td></td>
                                            @endif
                                            <td>
                                                {{ \Carbon\Carbon::parse($activity->created_at)->format('d F Y H:i:s') }}
                                                ({{ \Carbon\Carbon::createFromTimeStamp(strtotime($activity->created_at))->diffForHumans() }})
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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
        $('.modal-global').click(function(event) {
            event.preventDefault();

            var url = $(this).attr('href');

            $("#exampleModalLong").modal('show');

            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'json',
            }).done(function(dataResult) {
                console.log(dataResult);
                var resultData = dataResult.data;
                var resultDataOld = dataResult.old;
                var activity_section = '';
                var i=1;

                Object.keys(resultData).forEach(function(key) {
                    console.log('Key : ' + key + ', Value : ' + resultDataOld[key])
                    if (key == "training_name") {
                        name = "Training Name"
                    }
                    if (key == "training_summary") {
                        name = "Training Summary"
                    }
                    if (key == "training_background") {
                        name = "Training Background"
                    }
                    if (key == "training_description") {
                        name = "Training Description"
                    }
                    if (key == "learning_scope") {
                        name = "Learning Scope"
                    } if (key == "syllabusStatus.name") {
                        name = "Status"
                    }if (key == "syllabus_code") {
                        name = "Syllabus Code"
                    }
                    activity_section +=
                        `<div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="activity_old"> Old `+ name +`</label>
                                    <textarea
                                    id="activity_old"
                                    class="form-control bg-white text-black"
                                    name="activity_old"
                                    disabled
                                    rows="10" >` + resultDataOld[key] + `
                                    </textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-activity"> New `+ name +`</label>
                                    <textarea
                                        id="input-activity"
                                        class="form-control bg-white text-black"
                                        name="activity_old"
                                        type="text"
                                        disabled
                                        rows="10">` + resultData[key] + `
                                    </textarea>
                            </div>
                        </div>
                    </div>`
                })

                $("#exampleModalLong").find('.modal-body').html(`
            <div>
                <div>
                    <div class="mb-3">
                        <h4
                            class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                            What Changes
                        </h4>
                        <div class="p-3">
                            <div>
                                ` + activity_section + `
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `)
            });
        });
    </script>

    <script>
        $('#example').DataTable({
            "pagingType": "numbers",
            "order": [[ 3, "asc" ]],
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#formActivateSyllabus").submit(function() {
                $(this).submit(function() {
                    return false;
                });
                return true;
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#formDeactivateSyllabus").submit(function() {
                $(this).submit(function() {
                    return false;
                });
                return true;
            });
        });
    </script>
@endpush
