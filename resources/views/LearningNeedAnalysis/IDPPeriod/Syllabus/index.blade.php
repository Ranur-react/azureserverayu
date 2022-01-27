@extends('layouts.app', ['pagedirectory' => [
'IDP Period' =>'/learning-need-analysis/idp-period',
$idpPeriod->name => '',
'List Syllabus' => '' ]])


@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt-lg--7 mt--8 mb-5">
        <div class="row">
            <div class="col">
                <div class="nav-wrapper">
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab"
                                href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1"
                                aria-selected="true"><i class="fas fa-info-circle mr-2"></i>The most requested syllabus</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab"
                                href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2"
                                aria-selected="false"><i class="fas fa-info-circle mr-2"></i>The most frequent syllabus be the first priority</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card shadow-lg">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel"
                            aria-labelledby="tabs-icons-text-1-tab">
                            <!-- Card header -->
                            <div class="card-header border-0">
                                <div class="row align-items-center">
                                    <div class="col d-flex justify-content-between">
                                        <h3 class="mb-0">List Syllabus {{ $idpPeriod->name }}</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- Light table -->
                            <div class="table-responsive p-3">
                                <table class="table align-items-center table-flush" id="example">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" class="sort" data-sort="code">Kode Syllabus</th>
                                            <th scope="col" class="sort" data-sort="name">Nama Syllabus</th>
                                            <th scope="col" class="sort" data-sort="email">Total Karyawan Request
                                            </th>
                                            <th scope="col" class="sort" data-sort="email">Lihat Karyawan</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        @foreach ($data as $row)
                                            <tr>
                                                <td>{{ $row->syllabus_code }}</td>
                                                <td><a href="{{ route('api.v1.syllabuses-ajax.show', $row->syllabus_id) }}"
                                                        class="pe-auto modal-global">
                                                        {{ $row->training_name }}</h4>
                                                    </a></td>
                                                <td>{{ $row->count }}</td>
                                                <td>
                                                    <button type="submit"
                                                        class="btn btn-sm btn-primary btn-icon text-center" id="button1"
                                                        onclick="showModal({{ $idpPeriod->id }},{{ $row->syllabus_id }})">
                                                        View
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div>
                                <!-- Card header -->
                                <div class="card-header border-0">
                                    <div class="row align-items-center">
                                        <div class="col d-flex justify-content-between">
                                            <h3 class="mb-0">Chart {{ $idpPeriod->name }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <canvas id="myChart" class="p-3"></canvas>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel"
                            aria-labelledby="tabs-icons-text-2-tab">
                            <!-- Card header -->
                            <div class="card-header border-0">
                                <div class="row align-items-center">
                                    <div class="card-header border-0">
                                        <div class="row align-items-center">
                                            <div class="col d-flex justify-content-between">
                                                <h3 class="mb-0">List Syllabus {{ $idpPeriod->name }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Light table -->
                                    <div class="table-responsive p-3">
                                        <table class="table align-items-center table-flush" id="example_priority1">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col" class="sort" data-sort="code">Kode Syllabus
                                                    </th>
                                                    <th scope="col" class="sort" data-sort="name">Nama Syllabus
                                                    </th>
                                                    <th scope="col" class="sort" data-sort="email">Total Karyawan
                                                        Request</th>
                                                    <th scope="col" class="sort" data-sort="email">Lihat Karyawan
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="list">
                                                @foreach ($data_priority1 as $row_priority1)
                                                    <tr>
                                                        <td>{{ $row_priority1->syllabus_code }}</td>
                                                        <td><a href="{{ route('api.v1.syllabuses-ajax.show', $row_priority1->syllabus_id) }}"
                                                                class="pe-auto modal-global">
                                                                {{ $row_priority1->training_name }}</h4>
                                                            </a></td>
                                                        <td>{{ $row_priority1->count }}</td>
                                                        <td>
                                                            <button type="submit"
                                                                class="btn btn-sm btn-primary btn-icon text-center"
                                                                id="button1"
                                                                onclick="showModalPriority1({{ $idpPeriod->id }},{{ $row_priority1->syllabus_id }})">
                                                                View
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <!-- Card header -->
                                <div class="card-header border-0">
                                    <div class="row align-items-center">
                                        <div class="col d-flex justify-content-between">
                                            <h3 class="mb-0">Chart {{ $idpPeriod->name }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <canvas id="myChartPriority1" class="p-3"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Assign Karyawan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pt-1">
                    <h3 class="mb-3">List Karyawan</h3>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush" id="tableKaryawan">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="idp_period">Periode Idp</th>
                                    <th scope="col" class="sort" data-sort="priority">Priority</th>
                                    <th scope="col" class="sort" data-sort="nik">NIK</th>
                                    <th scope="col" class="sort" data-sort="name">Nama
                                        Karyawan</th>
                                    <th scope="col" class="sort" data-sort="title">Title
                                    </th>
                                    <th scope="col" class="sort" data-sort="organization">
                                        Organization</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                            </tbody>
                        </table>
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Syllabus Detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js"
        integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('.modal-global').click(function(event) {
            event.preventDefault();

            var url = $(this).attr('href');

            $("#exampleModalLong").modal('show');

            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'json',
            }).done(function(response) {
                var competencies_section = ''
                var vendors_section = ''
                var levels_section = ''
                var statuses_section = ''
                var locations_section = ''
                var units_section = ''

                for (let index = 0; index < response['competencies'].length; index++) {
                    const competency = response['competencies'][index];
                    competencies_section +=
                        `<span class="badge badge-pill badge-muted mb-1 mr-1">` + competency['name'] +
                        `</span>`
                }
                for (let index = 0; index < response['vendors'].length; index++) {
                    const vendor = response['vendors'][index];
                    vendors_section += `
                    <span class="badge badge-pill badge-muted mb-1 mr-1">` + vendor['partner_name'] + `</span>
                    `
                }
                for (let index = 0; index < response['levels'].length; index++) {
                    const level = response['levels'][index];
                    levels_section += `
                        <span class="badge badge-pill badge-muted mb-1 mr-1">` + level['name'] + `</span>
                    `
                }
                for (let index = 0; index < response['statuses'].length; index++) {
                    const status = response['statuses'][index];
                    statuses_section += `
                        <span class="badge badge-pill badge-muted mb-1 mr-1">` + status['name'] + `</span>
                    `
                }
                for (let index = 0; index < response['locations'].length; index++) {
                    const location = response['locations'][index];
                    locations_section += `
                        <span class="badge badge-pill badge-muted mb-1 mr-1">` + location['location_code'] + `</span>
                    `
                }
                for (let index = 0; index < response['units'].length; index++) {
                    const unit = response['units'][index];
                    units_section += `
                        <span class="badge badge-pill badge-muted mb-1 mr-1">` + unit['name'] + `</span>
                    `
                }
                // console.log(response[0].description)
                $("#exampleModalLong").find('.modal-body').html(`
                <div>
                    <div class="mb-4">
                        <h3 class="text-lg">` + response['syllabus']['training_name'] + `</h3>
                        <p class="text-xs font-weight-normal text-muted mb-2">
                            ` + response['syllabus']['syllabus_code'] + `</p>
                        <p class="text-sm mb-0 font-weight-normal">` + response['syllabus']['training_summary'] + `</p>
                    </div>

                    <div>
                        <div class="mb-3">
                            <h4
                                class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                                Skills Will You Gain
                            </h4>
                            <div class="border p-3">
                                <div>
                                    ` + competencies_section + `
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <h4
                                class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                                Who is This Course For
                            </h4>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <i class="ni ni-check-bold text-success mt-1"></i>
                                        <div class="ml-2">
                                            <h4 class="mb-1">Level</h4>
                                            ` + levels_section + `
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="d-flex">
                                        <i class="ni ni-check-bold text-success mt-1"></i>
                                        <div class="ml-2">
                                            <h4 class="mb-1">Status</h4>
                                            ` + statuses_section + `
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="d-flex">
                                        <i class="ni ni-check-bold text-success mt-1"></i>
                                        <div class="ml-2">
                                            <h4 class="mb-1">Location</h4>
                                            ` + locations_section + `
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="d-flex">
                                        <i class="ni ni-check-bold text-success mt-1"></i>
                                        <div class="ml-2">
                                            <h4 class="mb-1">Unit</h4>
                                            ` + units_section + `
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <h4
                                class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                                Training Description
                            </h4>
                            <p class="text-sm font-weight-normal mb-0 mt-2">
                                ` + response['syllabus']['training_description'] + `
                            </p>
                        </div>
                        <div class="mb-3">
                            <h4
                                class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                                Training Background
                            </h4>
                            <p class="text-sm font-weight-normal mb-0 mt-2">
                            ` + response['syllabus']['training_background'] + `
                            </p>
                        </div>
                        <div class="mb-3">
                            <h4
                                class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                                Learning Scope
                            </h4>
                            <p class="text-sm font-weight-normal mb-0 mt-2">
                            ` + response['syllabus']['learning_scope'] + `
                            </p>
                        </div>
                        <div class="mb-3">
                            <h4
                                class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                                Partner Recommendation
                            </h4>
                            
                            <div class="border p-3">
                            ` + vendors_section + `
                            </div>
                        </div>
                    </div>
                </div>
            `)
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "pagingType": "numbers",
                "order": [
                    [2, "desc"]
                ]
            });
        });

        function showModal(idpPeriod, syllabus_id) {
            $('#exampleModal').modal('show');
            var url = "{{ route('learning-need-analysis.idp-period.syllabuses.getIdpEmployee', [":idpPeriod", ":syllabus_id"]) }}";
            url = url.replace(':idpPeriod', idpPeriod).replace(':syllabus_id', syllabus_id);

            $('#tableKaryawan').DataTable({
                "bDestroy": true,
                "pagingType": "numbers",
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": url,
                    // "data": {
                    //     "id": idpPeriod,
                    //     "syllabus": syllabus_id,
                    // }
                },
                "columns": [{
                        data: 'period_name',
                        name: 'idp_period.name'
                    },
                    {
                        data: 'priority',
                        name: 'idp_syllabus.priority'
                    },
                    {
                        data: 'nik',
                        name: 'users.nik'
                    },
                    {
                        data: 'name',
                        name: 'users.name'
                    },
                    {
                        data: 'title',
                        name: 'users.title'
                    },
                    {
                        data: 'organization',
                        name: 'users.organization'
                    },
                ]
            });
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#example_priority1').DataTable({
                "pagingType": "numbers",
                "order": [
                    [2, "desc"]
                ]
            });
        });

        function showModalPriority1(idpPeriod, syllabus_id) {
            $('#exampleModal').modal('show');
            var url = "{{ route('learning-need-analysis.idp-period.syllabuses.getIdpEmployeePriority1', [":idpPeriod", ":syllabus_id"]) }}";
            url = url.replace(':idpPeriod', idpPeriod).replace(':syllabus_id', syllabus_id);

            $('#tableKaryawan').DataTable({
                "bDestroy": true,
                "pagingType": "numbers",
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": url,
                    // "data": {
                    //     "id": syllabus_id,
                    //     "idp": idpPeriod,
                    // }
                },
                "columns": [{
                        data: 'period_name',
                        name: 'idp_period.name'
                    },
                    {
                        data: 'priority',
                        name: 'idp_syllabus.priority'
                    },
                    {
                        data: 'nik',
                        name: 'users.nik'
                    },
                    {
                        data: 'name',
                        name: 'users.name'
                    },
                    {
                        data: 'title',
                        name: 'users.title'
                    },
                    {
                        data: 'organization',
                        name: 'users.organization'
                    },
                ]
            });
        }
    </script>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [
                    @foreach ($data as $row)
                        "{{ $row->training_name }}",
                    @endforeach
                ],
                datasets: [{
                    label: 'Syllabus Request',
                    data: [
                        @foreach ($data as $row)
                            "{{ $row->count }}",
                        @endforeach
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    <script>
        const ctx1 = document.getElementById('myChartPriority1').getContext('2d');
        const myChart1 = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: [
                    @foreach ($data_priority1 as $row)
                        "{{ $row->training_name }}",
                    @endforeach
                ],
                datasets: [{
                    label: 'Syllabus Priority 1',
                    data: [
                        @foreach ($data_priority1 as $row)
                            "{{ $row->count }}",
                        @endforeach
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endpush
