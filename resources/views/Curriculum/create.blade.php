@extends('layouts.app', ['pagedirectory' => [
'Curriculum' =>'/curriculum',
'Create' => ''
]])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--7 mb-5">
        <div class="row">
            <div class="col">
                @if ($errors->any())
                    <div class="alert alert-default alert-dismissible fade show mb-5" role="alert">
                        <span class="alert-icon">
                            <i class="fas fa-exclamation-triangle"></i>
                        </span>
                        <span class="alert-text">
                            <strong>Whoops, </strong>there is some error!!
                        </span>
                        @foreach ($errors->all() as $error)
                            <div class="ml-5 mt-2"><li>{{$error}}</li></div>
                         @endforeach

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @enderror
                <div class="card shadow-lg mb-5">
                    <div class="card-header">
                        <h3 class="mb-0">Create Kurikulum</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('curriculum.store') }}">
                            @csrf
                            <div class="px-lg-4">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-start-date">Start Date</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text {{ $errors->has('start_date') ? 'border border-danger' : '' }}"><i
                                                            class="ni ni-calendar-grid-58"></i></span>
                                                </div>
                                                <input class="form-control bg-white {{ $errors->has('start_date') ? 'is-invalid' : '' }}" id="input-start-date" name="start_date" placeholder="Select date"
                                                type="text" autocomplete=”off” required>
                                            </div>
                                            @error('start_date')
                                            <span class="invalid-feedback" style="display: block;"
                                                  role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-end-date">End Date</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text {{ $errors->has('end_date') ? 'border border-danger' : '' }}"><i
                                                            class="ni ni-calendar-grid-58"></i></span>
                                                </div>
                                                <input class="form-control bg-white {{ $errors->has('end_date') ? 'is-invalid' : '' }}" id="input-end-date" name="end_date" placeholder="Select date"
                                                type="text" autocomplete=”off” required>
                                            </div>
                                            @error('end_date')
                                            <span class="invalid-feedback" style="display: block;"
                                                  role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <h3 class="mt-5">Pool Syllabus</h3>
                                <div class="row">
                                    <div class="col">
                                        <div class="nav-wrapper">
                                            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text"
                                                role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab"
                                                        data-toggle="tab" href="#tabs-icons-text-1" role="tab"
                                                        aria-controls="tabs-icons-text-1" aria-selected="true">CSP</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab"
                                                        data-toggle="tab" href="#tabs-icons-text-2" role="tab"
                                                        aria-controls="tabs-icons-text-2" aria-selected="false">IDP</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Light table -->
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel"
                                        aria-labelledby="tabs-icons-text-1-tab">
                                        <div class="table-responsive">
                                            <table class="table align-items-center table-flush" id="table_csp">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th scope="col" class="sort" data-sort="kode_csp">Csp Year</th>
                                                        <th scope="col" class="sort" data-sort="theme_csp">Theme</th>
                                                        <th scope="col" class="sort" data-sort="nik">Kode</th>
                                                        <th scope="col" class="sort" data-sort="name">Syllabus
                                                            Name</th>
                                                        <th scope="col" class="sort" data-sort="title">Job Family
                                                        </th>
                                                        
                                                        <th class="text-center">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" id="selectAllCsp" class="custom-control-input"
                                                                    name="selectAllCsp">
                                                                <label class="custom-control-label" for="selectAllCsp"></label>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list">
                                                    @foreach ($csp as $csp_syllabus)
                                                    <tr>
                                                        <td>
                                                            {{ \Carbon\Carbon::createFromFormat('Y-m-d', $csp_syllabus->start_date)->format('Y') }}
                                                        </td>
                                                        <td>
                                                            {{ $csp_syllabus->name }}
                                                         </td>
                                                        <td>
                                                           {{ $csp_syllabus->syllabus_code }}
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('api.v1.syllabuses-ajax.show', $csp_syllabus->id) }}"
                                                                class="pe-auto modal-global">{{ $csp_syllabus->training_name }}</a>
                                                           </td>
                                                        <td class="text-wrap">
                                                            {{ $csp_syllabus->jobFamilyName }}
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="syllabus[{{ $loop->index }}][id]" value="{{ $csp_syllabus->id }}"
                                                                    class="csp-class custom-control-input" id="customCheck1.{{ $loop->index }}"
                                                                    @if (old('syllabus[$loop->index]') == "1") checked @endif>
                                                                <label class="custom-control-label"
                                                                    for="customCheck1.{{ $loop->index }}"></label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel"
                                        aria-labelledby="tabs-icons-text-2-tab">
                                        <div class="nav-wrapper">
                                            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="idp-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link mb-sm-3 mb-md-0 active" id="idp-tabs-1-tab" data-toggle="tab" href="#idp-tabs-1" role="tab" aria-controls="idp-tabs-1" aria-selected="true">
                                                        The most requested syllabus</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link mb-sm-3 mb-md-0" id="idp-tabs-2-tab" data-toggle="tab" href="#idp-tabs-2" role="tab" aria-controls="idp-tabs-2" aria-selected="false">
                                                        The most frequent syllabus be the first priority</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card shadow">
                                            <div class="card-body">
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="idp-tabs-1" role="tabpanel" aria-labelledby="idp-tabs-1">
                                                        <div class="table-responsive">
                                                            <table class="table align-items-center table-flush" id="table_idp">
                                                                <thead class="thead-light">
                                                                    <tr>
                                                                        <th scope="col" class="sort" data-sort="period">Periode</th>
                                                                        <th scope="col" class="sort" data-sort="code">Kode</th>
                                                                        <th scope="col" class="sort" data-sort="name">Nama Syllabus</th>
                                                                        <th scope="col" class="sort" data-sort="email">Total Karyawan Request</th>
                                                                        <th scope="col" class="sort" data-sort="email">Lihat Karyawan</th>
                                                                        <th class="text-center">
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" id="selectAllIdp" class="custom-control-input"
                                                                                    name="selectAllIdp">
                                                                                <label class="custom-control-label" for="selectAllIdp"></label>
                                                                            </div>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="list">
                                                                    @foreach ($idp as $row_idp)
                                                                        <tr>
                                                                            <td>{{ $row_idp->idp_period_name }} -
                                                                                {{ \Carbon\Carbon::createFromFormat('Y-m-d', $row_idp->start_date)->format('Y') }}</td>
                                                                            <td>{{ $row_idp->syllabus_code }}</td>
                                                                            <td><a href="{{ route('api.v1.syllabuses-ajax.show', $row_idp->id) }}"
                                                                                class="pe-auto modal-global">{{ $row_idp->training_name }}</a>
                                                                            </td>
                                                                            <td>{{ $row_idp->count }}</td>
                                                                            <td>
                                                                                <button type="button" class="btn btn-sm btn-primary btn-icon text-center"
                                                                                    id="buttonIdp" onclick="showModalIdpEmployee({{ $row_idp->idp_id }},{{ $row_idp->id }})">
                                                                                    Lihat
                                                                                </button>
                                                                            </td>
                                                                            <td class="text-center">
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input type="checkbox" name="syllabus[{{ $loop->index }}][id]" class="idp-class custom-control-input"
                                                                                        value="{{ $row_idp->id }}" id="customCheck2.{{ $loop->index }}">
                                                                                    <label class="custom-control-label"
                                                                                        for="customCheck2.{{ $loop->index }}"></label>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="idp-tabs-2" role="tabpanel" aria-labelledby="idp-tabs-2">
                                                        <div class="table-responsive">
                                                            <table class="table align-items-center table-flush" id="table_idp_priority_1">
                                                                <thead class="thead-light">
                                                                    <tr>
                                                                        <th scope="col" class="sort" data-sort="period">Periode</th>
                                                                        <th scope="col" class="sort" data-sort="code">Kode</th>
                                                                        <th scope="col" class="sort" data-sort="name">Nama Syllabus</th>
                                                                        <th scope="col" class="sort" data-sort="email">Total Karyawan Request</th>
                                                                        <th scope="col" class="sort" data-sort="email">Lihat Karyawan</th>
                                                                        <th class="text-center">
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" id="selectAllIdp1" class="custom-control-input"
                                                                                    name="selectAllIdp1">
                                                                                <label class="custom-control-label" for="selectAllIdp1"></label>
                                                                            </div>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="list">
                                                                    @foreach ($idp_priority_1 as $row_periority_1)
                                                                        <tr>
                                                                            <td>{{ $row_periority_1->idp_period_name }} -
                                                                                {{ \Carbon\Carbon::createFromFormat('Y-m-d', $row_periority_1->start_date)->format('Y') }}</td>
                                                                            <td>{{ $row_periority_1->syllabus_code }}</td>
                                                                            <td><a href="{{ route('api.v1.syllabuses-ajax.show', $row_periority_1->id) }}"
                                                                                class="pe-auto modal-global">{{ $row_periority_1->training_name }}</a>
                                                                            </td>
                                                                            <td>{{ $row_periority_1->count }}</td>
                                                                            <td>
                                                                                <button type="button" class="btn btn-sm btn-primary btn-icon text-center"
                                                                                    id="buttonIdp1" onclick="showModalIdpEmployee1({{ $row_periority_1->idp_id }},{{ $row_periority_1->id }})">
                                                                                    Lihat
                                                                                </button>
                                                                            </td>
                                                                            <td class="text-center">
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input type="checkbox" name="syllabus[{{ $loop->index }}][id]" class="idp-class-1 custom-control-input"
                                                                                        value="{{ $row_periority_1->id }}" id="customCheck2.{{ $loop->index }}">
                                                                                    <label class="custom-control-label"
                                                                                        for="customCheck2.{{ $loop->index }}"></label>
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
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success btn-lg btn-block mt-4">Save</button>
                                </div>
                            </div>
                        </form>
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
                    <h5 class="modal-title" id="exampleModalLabel">Employee List</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pt-1">
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush" id="tableKaryawan">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="priority">Priority</th>
                                    <th scope="col" class="sort" data-sort="nik">NIK</th>
                                    <th scope="col" class="sort" data-sort="name">Nama
                                        Karyawan</th>
                                    <th scope="col" class="sort" data-sort="title">Title
                                    </th>
                                    <th scope="col" class="sort" data-sort="organization">
                                        Division</th>
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
        $('#table_csp').DataTable({
            "pagingType": "numbers"
        });
        
        
    </script>
    <script>
        $('#table_idp').DataTable({
            "pagingType": "numbers"
        });

        function showModalIdpEmployee(idpPeriod, syllabus_id) {
            $('#exampleModal').modal('show');
            var url = "{{ route('curriculum.idp-period.syllabuses.getIdpEmployee', [":idpPeriod", ":syllabus_id"]) }}";
            url = url.replace(':idpPeriod', idpPeriod).replace(':syllabus_id', syllabus_id);

            $('#tableKaryawan').DataTable({
                "bDestroy": true,
                "pagingType": "numbers",
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": url,
                },
                "columns": [
                    {
                        data: 'priority',
                        name: 'idp_syllabus.priority'
                    },
                    {
                        data: 'nik',
                        name: 'employee.nik'
                    },
                    {
                        data: 'name',
                        name: 'employee.name'
                    },
                    {
                        data: 'title',
                        name: 'employee.title'
                    },
                    {
                        data: 'division',
                        name: 'employee.division'
                    },
                ]
            });
        }
    </script>
    <script>
       $('#table_idp_priority_1').DataTable({
            "pagingType": "numbers"
        });

        function showModalIdpEmployee1(idpPeriod, syllabus_id) {
            $('#exampleModal').modal('show');
            var url = "{{ route('curriculum.idp-period.syllabuses.getIdpEmployeePriority1', [":idpPeriod", ":syllabus_id"]) }}";
            url = url.replace(':idpPeriod', idpPeriod).replace(':syllabus_id', syllabus_id);

            $('#tableKaryawan').DataTable({
                "bDestroy": true,
                "pagingType": "numbers",
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": url,
                },
                "columns": [
                    {
                        data: 'priority',
                        name: 'idp_syllabus.priority'
                    },
                    {
                        data: 'nik',
                        name: 'employee.nik'
                    },
                    {
                        data: 'name',
                        name: 'employee.name'
                    },
                    {
                        data: 'title',
                        name: 'employee.title'
                    },
                    {
                        data: 'division',
                        name: 'employee.division'
                    },
                ]
            });
        }
    </script>

<script>
    var csp_start_date = flatpickr("#input-start-date", {
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
        onChange: function(selectedDates, dateStr, instance) {
            csp_end_date.set('minDate', dateStr)
        }
    });

    var csp_end_date = flatpickr("#input-end-date", {
    altInput: true,
    altFormat: "F j, Y",
    dateFormat: "Y-m-d",
    onChange: function(selectedDates, dateStr, instance) {
        csp_start_date.set('maxDate', dateStr)
    }
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
    $(function() {
        $('#selectAllCsp').click(function() {
            if ($(this).prop('checked')) {
                $('.csp-class').prop('checked', true);
            } else {
                $('.csp-class').prop('checked', false);
            }
        });

    });
</script>

<script>
    $(function() {
        $('#selectAllIdp').click(function() {
            if ($(this).prop('checked')) {
                $('.idp-class').prop('checked', true);
            } else {
                $('.idp-class').prop('checked', false);
            }
        });

    });
</script>

<script>
    $(function() {
        $('#selectAllIdp1').click(function() {
            if ($(this).prop('checked')) {
                $('.idp-class-1').prop('checked', true);
            } else {
                $('.idp-class-1').prop('checked', false);
            }
        });

    });
</script>

@endpush
