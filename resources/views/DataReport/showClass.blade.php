@extends('layouts.app', ['pagedirectory' => ['Home' =>'/', 'Data & Report'
=>'/data-report', $training->name =>
'']])

@section('content')
    @include('layouts.headers.auth')

    <div class="container-fluid mt--8">
        <div class="row">
            <div class="col">
                <div class="nav-wrapper">
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab"
                                href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1"
                                aria-selected="true"><i class="fas fa-info-circle mr-2"></i>Summary</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab"
                                href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2"
                                aria-selected="false"><i class="fas fa-info-circle mr-2"></i>Attendance</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel"
                        aria-labelledby="tabs-icons-text-1-tab">
                        <div class="card shadow-lg mb-5">
                            <!-- Card header -->
                            <div class="card-header border-0">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h3 class="mb-0">Data & Report - {{ $training->name }}</h3>
                                    </div>
                                    <div class="col-4 text-right">
                                        <a href="{{ route('data-report.export', [$type, $training->id]) }}"
                                            class="mr-2">
                                            <button class="btn btn-primary text-center">
                                                Export
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush" id="tableKaryawan">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" class="sort" data-sort="nik">
                                                    NIK
                                                </th>
                                                <th scope="col" class="sort" data-sort="name">
                                                    Nama Karyawan
                                                </th>
                                                <th scope="col" class="sort" data-sort="title">
                                                    Title
                                                </th>
                                                <th scope="col" class="sort" data-sort="organization">
                                                    Organization
                                                </th>
                                                <th scope="col" class="sort" data-sort="attendance">
                                                    Attendance
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $user->nik }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td class="text-wrap">{{ $user->title }}</td>
                                                    <td class="text-wrap">{{ $user->organization }}</td>
                                                    <td class="text-center">
                                                        <div data-toggle="tooltip" data-placement="top"
                                                            title="Hadir {{ $user->count_attend }}/{{ $count_sessions }} session">
                                                            {{ $user->count_attend == 0 ? 0 : number_format(($user->count_attend / $count_sessions) * 100, 1, '.', '') }}%
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel"
                        aria-labelledby="tabs-icons-text-2-tab">
                        <div class="card shadow-lg mb-5">
                            <!-- Card header -->
                            <div class="card-header border-0">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h3 class="mb-0">Daftar Session - {{ $training->name }}</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush" id="tableAttendance">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" class="sort" data-sort="nik">
                                                    No
                                                </th>
                                                <th scope="col" class="sort" data-sort="name">
                                                    Nama Session
                                                </th>
                                                <th scope="col" class="sort" data-sort="date">
                                                    Date
                                                </th>
                                                <th scope="col" class="text-center sort">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                            @foreach ($sessions as $session)
                                                <tr>
                                                    <td class="text-wrap">{{ $session->section }}</td>
                                                    <td>{{ $session->name }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($session->date_time)->format('d M Y • H:m') }}
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="{{ route('data-report.class.session.show', [$training->id, $session->section]) }}"
                                                            class="mr-2">
                                                            <button
                                                                class="btn btn-sm btn-success btn-icon text-center enroll-elearning-btn">
                                                                <i class="  fas fa-plus"></i>
                                                            </button>
                                                        </a>
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


@push('js')
    <script>
        $('#tableKaryawan').DataTable({
            "pagingType": "numbers"
        });

        $('#tableAttendance').DataTable({
            "pagingType": "numbers"
        });
    </script>
@endpush
