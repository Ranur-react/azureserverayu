@extends('layouts.app', ['pagename' => 'IDP Pool'])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow-lg">
                    <!-- Card header -->
                    <div class="card-header">
                        <h3 class="mb-0">List IDP Pool</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive p-3">
                        <table class="table align-items-center table-flush" id="example">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="period">Periode</th>
                                    <th scope="col" class="sort" data-sort="code">Kode</th>
                                    <th scope="col" class="sort" data-sort="name">Nama Syllabus</th>
                                    <th scope="col" class="sort" data-sort="email">Total Karyawan Request</th>
                                    <th scope="col" class="sort" data-sort="email">Lihat Karyawan</th>
                                    <th class="text-center" scope="col" class="sort" data-sort="name">Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach ($data as $row)
                                    <tr>
                                        <td>{{ $row->start_date }}</td>
                                        <td>{{ $row->syllabus_code }}</td>
                                        <td>{{ $row->training_name }}</td>
                                        <td>{{ $row->count }}</td>
                                        <td>
                                            <button type="submit" class="btn btn-sm btn-primary btn-icon text-center"
                                                id="button1" onclick="showModal({{ $row->syllabus_id }})">
                                                Lihat
                                            </button>
                                        </td>
                                        <td class="text-center">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="check[]" class="custom-control-input"
                                                    id="customCheck1.{{ $loop->index }}">
                                                <label class="custom-control-label"
                                                    for="customCheck1.{{ $loop->index }}"></label>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer py-4 text-right">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <div class="card shadow-lg">
                    <!-- Card header -->
                    <div class="card-header">
                        <h3 class="mb-0">List IDP Priority 1</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive p-3">
                        <table class="table align-items-center table-flush" id="example1">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="period">Periode</th>
                                    <th scope="col" class="sort" data-sort="code">Kode</th>
                                    <th scope="col" class="sort" data-sort="name">Nama Syllabus</th>
                                    <th scope="col" class="sort" data-sort="email">Total Karyawan Request</th>
                                    <th scope="col" class="sort" data-sort="email">Lihat Karyawan</th>
                                    <th class="text-center" scope="col" class="sort" data-sort="name">Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach ($data_priority1 as $row_priority1)
                                    <tr>
                                        <td>{{ $row_priority1->start_date }}</td>
                                        <td>{{ $row_priority1->syllabus_code }}</td>
                                        <td>{{ $row_priority1->training_name }}</td>
                                        <td>{{ $row_priority1->count }}</td>
                                        <td>
                                            <button type="submit" class="btn btn-sm btn-primary btn-icon text-center"
                                                id="button1" onclick="showModal({{ $row_priority1->syllabus_id }})">
                                                Lihat
                                            </button>
                                        </td>
                                        <td class="text-center">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="check[]" class="custom-control-input"
                                                    id="customCheck1.{{ $loop->index }}">
                                                <label class="custom-control-label"
                                                    for="customCheck1.{{ $loop->index }}"></label>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer py-4 text-right">
                        <button type="submit" class="btn btn-success">Submit</button>
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
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "pagingType": "numbers",
                "order": [
                    [3, "desc"]
                ]
            });
        });

        function showModal(syllabus_id) {
            $('#exampleModal').modal('show');
            $('#tableKaryawan').DataTable({
                "bDestroy": true,
                "pagingType": "numbers",
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "{{ route('api.idp.show') }}",
                    "data": {
                        "id": syllabus_id,
                    }
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
        $('#example1').DataTable({
            "pagingType": "numbers",
            "order": [
                [3, "desc"]
            ]
        });
    });

    function showModal(syllabus_id) {
        $('#exampleModal').modal('show');
        $('#tableKaryawan').DataTable({
            "bDestroy": true,
            "pagingType": "numbers",
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "{{ route('api.idp.showIdpPriority') }}",
                "data": {
                    "id": syllabus_id,
                }
            },
            "columns": [{
                data: 'period_name', name: 'idp_period.name'
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
@endpush
