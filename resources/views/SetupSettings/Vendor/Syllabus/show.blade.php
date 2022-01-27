@extends('layouts.app', ['pagedirectory' => [
    'Vendors' =>'/learning-design/setup-settings/vendors',
    $vendor->partner_name => '/learning-design/setup-settings/vendors/' . $vendor->id . '/syllabuses',
    $syllabus->training_name => ''
     ]])

@section('content')
    @include('layouts.headers.auth')

    <div class="container-fluid mt--9 mb-5">
        <div class="card shadow-lg rounded">
            <div class="p-md-3 p-1">
                <div class="card-header position-relative">
                    <div class="row align-items-start">
                        <div class="col-lg-8 col-12">
                            <div class="d-block d-md-none">
                                @if ($syllabus->is_approved == 0 && $syllabus->is_active == 0)
                                    <span class="badge badge-pill badge-danger text-right">Rejected</span>
                                @endif
                                @if ($syllabus->is_approved == 0 && $syllabus->is_active == 1)
                                    <span class="badge badge-pill badge-warning text-right">Pending</span>
                                @endif
                                @if ($syllabus->is_approved == 1 && $syllabus->is_active == 1)
                                    <span class="badge badge-pill badge-success text-right">Active</span>
                                @endif
                                @if ($syllabus->is_approved == 1 && $syllabus->is_active == 0)
                                    <span class="badge badge-pill badge-muted text-right">Deactive</span>
                                @endif
                            </div>
                            <h1 class="text-xl">{{ $syllabus->training_name }}</h1>
                            <p class="text-xs font-weight-normal text-muted mb-2">
                                {{ $syllabus->syllabus_code }}</p>
                            <p class="text-sm mb-0 font-weight-normal">{{ $syllabus->training_summary }}</p>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="d-none d-md-flex justify-content-end">
                                @if ($syllabus->is_approved == 0 && $syllabus->is_active == 0)
                                    <span class="badge badge-pill badge-danger text-right">Rejected</span>
                                @endif
                                @if ($syllabus->is_approved == 0 && $syllabus->is_active == 1)
                                    <span class="badge badge-pill badge-warning text-right">Pending</span>
                                @endif
                                @if ($syllabus->is_approved == 1 && $syllabus->is_active == 1)
                                    <span class="badge badge-pill badge-success text-right">Active</span>
                                @endif
                                @if ($syllabus->is_approved == 1 && $syllabus->is_active == 0)
                                    <span class="badge badge-pill badge-muted text-right">Deactive</span>
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
                                        @foreach ($syllabus->competencies as $competency)
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
                                <p class="text-sm font-weight-normal mb-0 mt-2">{{ $syllabus->learning_scope }}</p>
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
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="name">Name</th>
                                        <th scope="col" class="sort" data-sort="activity">Activity</th>
                                        <th scope="col" class="sort" data-sort="date">
                                            Date</th>
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
    </div>
    </div>
@endsection
