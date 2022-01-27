@extends('layouts.app', ['pagedirectory' => [
'Job Family Directory' =>'/learning-syllabus/job-families',
$jobFamily->name => '/learning-syllabus/job-families/' . $jobFamily->id . '/sub-job-families',
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
                                @if ($syllabus->status_id == 1)
                                    <span class="badge badge-pill badge-success text-right">{{ $syllabus->syllabusStatus->name }}</span>
                                @elseif ($syllabus->status_id == 2)
                                    <span class="badge badge-pill badge-muted text-right">{{ $syllabus->syllabusStatus->name }}</span>
                                @elseif ($syllabus->status_id == 3)
                                    <span class="badge badge-pill badge-warning text-right">{{ $syllabus->syllabusStatus->name }}</span>
                                @elseif ($syllabus->status_id == 4)
                                    <span class="badge badge-pill badge-danger text-right">{{ $syllabus->syllabusStatus->name }}</span>
                                @else
                                    <span class="badge badge-pill badge-dark text-right">{{ $syllabus->syllabusStatus->name }}</span>
                                @endif
                            </div>
                            <h1 class="text-xl">{{ $syllabus->training_name }}</h1>
                            <p class="text-xs font-weight-normal text-muted mb-2">
                                {{ $syllabus->syllabus_code }}</p>
                            <p class="text-sm mb-0 font-weight-normal">{{ $syllabus->training_summary }}</p>
                            @can('learning_syllabus_edit')
                                @if ($syllabus->status_id == 1)
                                    <form method="post" id="formDeactivateSyllabus"
                                        action="{{ route('learning-syllabus.job-families.syllabuses.deactivate', [$jobFamily->id, $syllabus->id]) }}">
                                        @method('PUT')
                                        {{ csrf_field() }}
                                        <button class="btn btn-danger mt-4">Deactivate Syllabus</button>
                                    </form>
                                @endif
                            @endcan
                            @can('learning_syllabus_edit')
                                @if ($syllabus->status_id == 2)
                                    <form method="post" id="formActivateSyllabus"
                                        action="{{ route('learning-syllabus.job-families.syllabuses.activate', [$jobFamily->id, $syllabus->id]) }}">
                                        @method('PUT')
                                        {{ csrf_field() }}
                                        <button class="btn btn-success mt-4">Activate Syllabus</button>
                                    </form>
                                @endif
                            @endcan

                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="d-none d-md-flex justify-content-end">
                                @if ($syllabus->status_id == 1)
                                    <span class="badge badge-pill badge-success text-right">{{ $syllabus->syllabusStatus->name }}</span>
                                @elseif ($syllabus->status_id == 2)
                                    <span class="badge badge-pill badge-muted text-right">{{ $syllabus->syllabusStatus->name }}</span>
                                @elseif ($syllabus->status_id == 3)
                                    <span class="badge badge-pill badge-warning text-right">{{ $syllabus->syllabusStatus->name }}</span>
                                @elseif ($syllabus->status_id == 4)
                                    <span class="badge badge-pill badge-danger text-right">{{ $syllabus->syllabusStatus->name }}</span>
                                @else
                                    <span class="badge badge-pill badge-dark text-right">{{ $syllabus->syllabusStatus->name }}</span>
                                @endif
                            </div>
                            <div class="d-block d-md-flex justify-content-end">
                                <!-- Button trigger modal -->
                                <button class="mt-2 btn btn-icon btn-sm btn-3 btn-primary" type="button">
                                    <span class="btn-inner--icon"><i class="ni ni-single-copy-04"></i></span>
                                    <span class="btn-inner--text">Export Syllabus</span>
                                </button>
                                <button class="mt-2 btn btn-icon btn-sm btn-3 btn-warning" type="button" data-toggle="modal"
                                    data-target="#exampleModal">
                                    <span class="btn-inner--icon"><i class="ni ni-single-copy-04"></i></span>
                                    <span class="btn-inner--text">Export RFI</span>
                                </button>
                                <button class="mt-2 btn btn-icon btn-sm btn-3 btn-info" type="button">
                                    <span class="btn-inner--icon"><i class="ni ni-single-copy-04"></i></span>
                                    <span class="btn-inner--text">Export TOR</span>
                                </button>
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
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <i class="ni ni-check-bold text-success mt-1"></i>
                                            <div class="ml-2">
                                                <h4 class="mb-1">Level</h4>
                                                @foreach ($syllabus->levelsSyllabuses as $level)
                                                    <span
                                                        class="badge badge-pill badge-muted mb-1 mr-1">{{ $level->name }}</span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="d-flex">
                                            <i class="ni ni-check-bold text-success mt-1"></i>
                                            <div class="ml-2">
                                                <h4 class="mb-1">Status</h4>
                                                @foreach ($syllabus->statusesSyllabuses as $status)
                                                    <span
                                                        class="badge badge-pill badge-muted mb-1 mr-1">{{ $status->name }}</span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="d-flex">
                                            <i class="ni ni-check-bold text-success mt-1"></i>
                                            <div class="ml-2">
                                                <h4 class="mb-1">Location</h4>
                                                @foreach ($syllabus->locationsSyllabuses as $location)
                                                    <span
                                                        class="badge badge-pill badge-muted mb-1 mr-1">{{ $location->location_code }}</span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="d-flex">
                                            <i class="ni ni-check-bold text-success mt-1"></i>
                                            <div class="ml-2">
                                                <h4 class="mb-1">Unit</h4>
                                                @foreach ($syllabus->unitsSyllabuses as $unit)
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
                                <div class="border p-3">
                                    @foreach ($syllabus->vendorsSyllabuses as $vendor)
                                    <span
                                    class="badge badge-pill badge-muted mb-1 mr-1">{{ $vendor->partner_name }}</span>
                                    @endforeach
                                </div>
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
                                                            href="{{ route('learning-syllabus.activity.show', $activity->id) }}" class="modal-global">
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
         $('.modal-global').click(function(event) {
            event.preventDefault();

            var url = $(this).attr('href');

            $("#exampleModalLong").modal('show');

            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'json',
            }).done(function(dataResult) {
                // console.log(dataResult);
                var resultData = dataResult.data;
                var resultDataOld = dataResult.old;
    
                // var levelNameNew = dataResult.level_new;
                // var levelNameOld = dataResult.level_old;
                var activity_section = '';

                Object.keys(resultData).forEach(function(key) {
                    // console.log('Key : ' + key + ', Value : ' + resultDataOld[key])

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
                    }if (key == "levels") {
                        name = "Level"
                        Object.keys(dataResult.levels_new).forEach(function(key_level_name_new) {
                            resultData[key] = dataResult.levels_new[key_level_name_new].join(", ");
                        })
                        Object.keys(dataResult.levels_old).forEach(function(key_level_name_old) {
                            resultDataOld[key] = dataResult.levels_old[key_level_name_old].join(", ");
                        })
                    }if (key == "statuses") {
                        name = "Status"
                        Object.keys(dataResult.statuses_new).forEach(function(key_name_new) {
                            resultData[key] = dataResult.statuses_new[key_name_new].join(", ");
                        })
                        Object.keys(dataResult.statuses_old).forEach(function(key_name_old) {
                            resultDataOld[key] = dataResult.statuses_old[key_name_old].join(", ");
                        })
                    }if (key == "locations") {
                        name = "Location"
                        Object.keys(dataResult.locations_new).forEach(function(key_name_new) {
                            resultData[key] = dataResult.locations_new[key_name_new].join(", ");
                        })
                        Object.keys(dataResult.locations_old).forEach(function(key_name_old) {
                            resultDataOld[key] = dataResult.locations_old[key_name_old].join(", ");
                        })
                    }if (key == "units") {
                        name = "Unit"
                        Object.keys(dataResult.units_new).forEach(function(key_name_new) {
                            resultData[key] = dataResult.units_new[key_name_new].join(", ");
                        })
                        Object.keys(dataResult.units_old).forEach(function(key_name_old) {
                            resultDataOld[key] = dataResult.units_old[key_name_old].join(", ");
                        })
                    }if (key == "skills_will_you_gain") {
                        name = "Skills Will You Gain"
                        Object.keys(dataResult.skills_will_you_gain_new).forEach(function(key_name_new) {
                            resultData[key] = dataResult.skills_will_you_gain_new[key_name_new].join(", ");
                        })
                        Object.keys(dataResult.skills_will_you_gain_old).forEach(function(key_name_old) {
                            resultDataOld[key] = dataResult.skills_will_you_gain_old[key_name_old].join(", ");
                        })
                    }if (key == "vendors") {
                        name = "Partner Recommendation"
                        Object.keys(dataResult.vendors_new).forEach(function(key_vendor_name_new) {
                            resultData[key] = dataResult.vendors_new[key_vendor_name_new].join(", ");
                        })
                        Object.keys(dataResult.vendors_old).forEach(function(key_vendor_name_old) {
                            resultDataOld[key] = dataResult.vendors_old[key_vendor_name_old].join(", ");
                        })
                    }
                    activity_section +=
                    `<div class="row">
                        <div class="col-lg-6">
                            <div class="card text-black mb-3" style="background-color:#FCF8EC;">
                                <div class="card-header"> OLD `+ name +`</div>
                                <div class="card-body">
                                    ` + resultDataOld[key] + `
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card text-black mb-3" style="background-color:#FCF8EC;">
                                <div class="card-header">NEW `+ name +`</div>
                                <div class="card-body">
                                    ` + resultData[key] + `
                                </div>
                            </div>
                        </div>
                    </div>`
                })

                $("#exampleModalLong").find('.modal-body').html(`
                <div>
                    <div>
                        <div class="mb-3">
                            <h4
                                class="mt-3 text-uppercase text-black py-1 px-3 ">
                                What Changes
                            </h4>
                            <div class="py-1 px-3">
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
    {{-- <script type="text/javascript">
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
    </script> --}}
@endpush
