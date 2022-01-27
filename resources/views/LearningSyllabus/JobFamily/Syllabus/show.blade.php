@extends('layouts.app', ['pagedirectory' => ['Home' =>'/learning-design/home',
'Job Family Directory' =>'/learning-design/learning-syllabus/job-families',
$jobFamily->name => '/learning-design/learning-syllabus/job-families/' . $jobFamily->id . '/sub-job-families',
$syllabus->training_name => '' ]])

@section('content')
    @include('layouts.headers.auth')

    <div class="container-fluid mt--7 mb-5">
        <div class="row">
            <div class="col">
                <div class="nav-wrapper">
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab"
                                href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1"
                                aria-selected="true"><i class="fas fa-info-circle mr-2"></i>Syllabus Detail</a>
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
        <div class="row">
            <div class="col">
                <div class="card shadow-lg mb-5">
                    <div class="p-md-3 p-1">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel"
                                aria-labelledby="tabs-icons-text-1-tab">
                                <div class="card-header pb-2">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            @if ($syllabus->is_approved == 1 && $syllabus->is_active == 1)
                                                <div class="d-block d-md-none mb-3">
                                                    <!-- Button trigger modal -->
                                                    <button class="btn btn-icon mb-2 btn-sm btn-3 btn-primary"
                                                        type="button">
                                                        <span class="btn-inner--icon"><i
                                                                class="ni ni-single-copy-04"></i></span>
                                                        <span class="btn-inner--text">Export Syllabus</span>
                                                    </button>
                                                    <button class="btn btn-icon mb-2 btn-sm btn-3 btn-warning" type="button"
                                                        data-toggle="modal" data-target="#exampleModal">
                                                        <span class="btn-inner--icon"><i
                                                                class="ni ni-single-copy-04"></i></span>
                                                        <span class="btn-inner--text">Export RFI</span>
                                                    </button>
                                                    <button class="btn btn-icon mb-2 btn-sm btn-3 btn-info" type="button">
                                                        <span class="btn-inner--icon"><i
                                                                class="ni ni-single-copy-04"></i></span>
                                                        <span class="btn-inner--text">Export TOR</span>
                                                    </button>
                                                    @can('learning_syllabus_edit')
                                                        <form method="post"
                                                            action="{{ route('learning-design.learning-syllabus.job-families.syllabuses.deactivate', [$jobFamily->id, $syllabus->id]) }}">
                                                            @method('PUT')
                                                            {{ csrf_field() }}
                                                            <button class="btn btn-danger btn-sm mb-2 btn-3">Deactivate
                                                                Syllabus</button>
                                                        </form>
                                                    @endcan
                                                </div>
                                            @endif
                                            @if ($syllabus->is_approved == 1 && $syllabus->is_active == 0)
                                                <div class="d-block d-md-none mb-3">
                                                    <!-- Button trigger modal -->
                                                    <button class="btn btn-icon mb-2 btn-sm btn-3 btn-primary"
                                                        type="button">
                                                        <span class="btn-inner--icon"><i
                                                                class="ni ni-single-copy-04"></i></span>
                                                        <span class="btn-inner--text">Export Syllabus</span>
                                                    </button>
                                                    <button class="btn btn-icon mb-2 btn-sm btn-3 btn-warning" type="button"
                                                        data-toggle="modal" data-target="#exampleModal">
                                                        <span class="btn-inner--icon"><i
                                                                class="ni ni-single-copy-04"></i></span>
                                                        <span class="btn-inner--text">Export RFI</span>
                                                    </button>
                                                    <button class="btn btn-icon mb-2 btn-sm btn-3 btn-info" type="button">
                                                        <span class="btn-inner--icon"><i
                                                                class="ni ni-single-copy-04"></i></span>
                                                        <span class="btn-inner--text">Export TOR</span>
                                                    </button>
                                                    @can('learning_syllabus_edit')
                                                        <form method="post"
                                                            action="{{ route('learning-design.learning-syllabus.job-families.syllabuses.activate', [$jobFamily->id, $syllabus->id]) }}">
                                                            @method('PUT')
                                                            {{ csrf_field() }}
                                                            <button class="btn btn-success btn-sm mb-2 btn-3">Activate this
                                                                syllabus</button>
                                                        </form>
                                                    @endcan
                                                </div>
                                            @endif

                                            @if ($syllabus->is_approved == 0 && $syllabus->is_active == 1)
                                                <div class="d-block d-md-none mb-3">
                                                    <span class="badge badge-pill badge-warning">Pending</span>
                                                    @can('learning_syllabus_approve')
                                                        <button class="btn btn-warning btn-sm mb-2 btn-3">Reject</button>
                                                        <form method="POST"
                                                            action="{{ route('learning-design.learning-syllabus.request-syllabus.job-families.update', [$syllabus->id, $jobFamily->id]) }}">
                                                            @method('PUT')
                                                            {{ csrf_field() }}
                                                            <button type="submit"
                                                                class="btn btn-success btn-sm mb-2 btn-3">Approve</button>
                                                        </form>
                                                    @endcan
                                                </div>
                                            @endif
                                            @if ($syllabus->is_approved == 0 && $syllabus->is_active == 0)
                                                <div class="d-block d-md-none mb-3">
                                                    <span class="badge badge-pill badge-warning">Rejected</span>
                                                </div>
                                            @endif
                                            <h3 class="text-xl font-weight-extrabold">
                                                {{ $syllabus->training_name }}</h3>
                                            <p class="text-xs font-weight-normal text-muted mb-2">
                                                {{ $syllabus->syllabus_code }}</p>
                                            <p class="text-sm font-weight-normal mb-2">
                                                {{ $syllabus->training_summary }}</p>
                                        </div>

                                        @if ($syllabus->is_approved == 1 && $syllabus->is_active == 1)
                                            <div class="col-lg-6 d-none d-md-block col-lg-2">
                                                <div class="row justify-content-end">
                                                    <!-- Button trigger modal -->
                                                    <button class="btn btn-icon btn-sm btn-3 btn-primary" type="button">
                                                        <span class="btn-inner--icon"><i
                                                                class="ni ni-single-copy-04"></i></span>
                                                        <span class="btn-inner--text">Export Syllabus</span>
                                                    </button>
                                                    <button class="btn btn-icon btn-sm btn-3 btn-warning" type="button"
                                                        data-toggle="modal" data-target="#exampleModal">
                                                        <span class="btn-inner--icon"><i
                                                                class="ni ni-single-copy-04"></i></span>
                                                        <span class="btn-inner--text">Export RFI</span>
                                                    </button>
                                                    <button class="btn btn-icon btn-sm btn-3 btn-info" type="button">
                                                        <span class="btn-inner--icon"><i
                                                                class="ni ni-single-copy-04"></i></span>
                                                        <span class="btn-inner--text">Export TOR</span>
                                                    </button>
                                                </div>
                                                <div class="row justify-content-end mt-3">
                                                    @can('learning_syllabus_edit')
                                                        <form method="post"
                                                            action="{{ route('learning-design.learning-syllabus.job-families.syllabuses.deactivate', [$jobFamily->id, $syllabus->id]) }}">
                                                            @method('PUT')
                                                            {{ csrf_field() }}
                                                            <button class="btn btn-danger">Deactivate Syllabus</button>
                                                        </form>
                                                    @endcan
                                                </div>
                                            </div>
                                        @endif
                                        @if ($syllabus->is_approved == 1 && $syllabus->is_active == 0)
                                            <div class="col-lg-6 d-none d-md-block col-lg-2">
                                                <div class="row justify-content-end">
                                                    <!-- Button trigger modal -->
                                                    <button class="btn btn-icon btn-sm btn-3 btn-primary" type="button">
                                                        <span class="btn-inner--icon"><i
                                                                class="ni ni-single-copy-04"></i></span>
                                                        <span class="btn-inner--text">Export Syllabus</span>
                                                    </button>
                                                    <button class="btn btn-icon btn-sm btn-3 btn-warning" type="button"
                                                        data-toggle="modal" data-target="#exampleModal">
                                                        <span class="btn-inner--icon"><i
                                                                class="ni ni-single-copy-04"></i></span>
                                                        <span class="btn-inner--text">Export RFI</span>
                                                    </button>
                                                    <button class="btn btn-icon btn-sm btn-3 btn-info" type="button">
                                                        <span class="btn-inner--icon"><i
                                                                class="ni ni-single-copy-04"></i></span>
                                                        <span class="btn-inner--text">Export TOR</span>
                                                    </button>
                                                </div>
                                                @can('learning_syllabus_edit')
                                                    <div class="row justify-content-end mt-3">
                                                        <form method="post"
                                                            action="{{ route('learning-design.learning-syllabus.job-families.syllabuses.activate', [$jobFamily->id, $syllabus->id]) }}">
                                                            @method('PUT')
                                                            {{ csrf_field() }}
                                                            <button class="btn btn-success">Activate Syllabus</button>
                                                        </form>
                                                    </div>
                                                @endcan
                                            </div>
                                        @endif
                                        @if ($syllabus->is_approved == 0 && $syllabus->is_active == 1)
                                            <div class="col-lg-6 d-none d-md-block col-lg-2 text-right">
                                                <span class="badge badge-pill badge-danger">Pending</span>
                                                @can('learning_syllabus_approve')
                                                    <div class="row justify-content-end mt-3 ">
                                                        <form method="POST"
                                                            action="{{ route('learning-design.learning-syllabus.request-syllabus.job-families.reject', [$syllabus->id, $jobFamily->id]) }}">
                                                            @method('PUT')
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="number" value="9999">
                                                            <input type="hidden" name="syllabus_code"
                                                                value="{{ $jobFamily->job_family_code ?? '' }}.9999">
                                                            <button type="submit" class="btn btn-warning">Reject</button>
                                                        </form>
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
                                                @endcan
                                            </div>
                                        @endif
                                        @if ($syllabus->is_approved == 0 && $syllabus->is_active == 0)
                                            <div class="col-lg-6 d-none d-md-block col-lg-2 text-right">
                                                <span class="badge badge-pill badge-warning">Rejected</span>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="border mb-4">
                                        <div class="p-lg-4 p-3">
                                            <h4 class="text-uppercase font-weight-extrabold mb-3">Skills Will You
                                                Gain
                                            </h4>
                                            <div>
                                                @foreach ($syllabus->prfCompetencyCatalog as $competency)
                                                    <span
                                                        class="badge badge-pill badge-muted mb-1 mr-1">{{ $competency->name }}</span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <h3 class="font-weight-bold mb-3">Who is This Course For</h3>
                                        <div class="ml-3">
                                            <div class="row">
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
                                    </div>
                                    <div class="mb-4">
                                        <h3 class="font-weight-bold mb-3">Training Description</h3>
                                        <p class="text-sm font-weight-normal mb-2">
                                            {{ $syllabus->training_description }}
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <h3 class="font-weight-bold mb-3">Training Background</h3>
                                        <p class="text-sm font-weight-normal mb-2">
                                            {{ $syllabus->training_background }}
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <h3 class="font-weight-bold mb-3">Learning Scope</h3>
                                        <p class="text-sm font-weight-normal mb-2">
                                            {!! $syllabus->learning_scope !!}
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <h3 class="font-weight-bold mb-3">Partner Recommendation</h3>
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
                            </div>
                            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel"
                                aria-labelledby="tabs-icons-text-2-tab">
                                <div class="card-header pb-2">
                                    <h3 class="text-xl font-weight-extrabold">Log</h3>
                                </div>
                                <!-- Light table -->
                                <div class="table-responsive mt-2">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" class="sort" data-sort="name">Name</th>
                                                <th scope="col" class="sort" data-sort="activity">
                                                    Activity</th>
                                                <th scope="col" class="sort" data-sort="date">
                                                    Date
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                            @foreach ($activities as $activity)
                                                <tr>
                                                    <td>
                                                        {{ $activity->causer->name }}
                                                    </td>
                                                    <td>
                                                        {{ $activity->description }}
                                                    </td>
                                                    <td>{{ $activity->subject }}</td>
                                                    <td>
                                                        {{ $activity->created_at }}
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

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Export RFI Document
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="#">

                            <div class="modal-body">
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-level">Level</label>
                                    <select class="form-control" name="level" id="input-level">
                                        <option value="">Select Level...</option>
                                        <option value="">Basic</option>
                                        <option value="">Intermediate</option>
                                        <option value="">Advance</option>
                                        <option value="">Master</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-peserta">Jumlah
                                        Peserta/Batch</label>
                                    <input type="number" name="jumlah_peserta" id="input-peserta" class="form-control"
                                        placeholder="">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-control-label" for="input-estimasi-nilai">Estimasi Nilai
                                        Pengadaan</label>
                                    <input type="number" name="estimasi_nilai" id="input-estimasi-nilai"
                                        class="form-control" placeholder="">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-warning">Export</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        @endsection
